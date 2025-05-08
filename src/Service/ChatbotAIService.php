<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\Entity\Reclamation;
use Psr\Log\LoggerInterface;

class ChatbotAIService
{
    private $httpClient;
    private $params;
    private $logger;
    
    // Cache pour éviter des appels redondants
    private static $responseCache = [];
    private static $lastCallTime = 0;
    private const MIN_TIME_BETWEEN_CALLS = 1; // secondes entre les appels

    public function __construct(
        HttpClientInterface $httpClient,
        ParameterBagInterface $params,
        LoggerInterface $logger = null
    ) {
        $this->httpClient = $httpClient;
        $this->params = $params;
        $this->logger = $logger;
    }

    /**
     * Envoie une demande à l'API AI externe et retourne sa réponse
     */
    public function askQuestion(string $question, ?Reclamation $reclamation = null): string
    {
        // Prétraiter la question pour la normaliser
        $question = $this->preprocessQuestion($question);
        
        // Vérifier le cache pour éviter les appels redondants
        $cacheKey = md5($question . ($reclamation ? $reclamation->getIdReclamation() : ''));
        if (isset(self::$responseCache[$cacheKey])) {
            if ($this->logger) {
                $this->logger->info('Réponse récupérée du cache pour: ' . $question);
            }
            return self::$responseCache[$cacheKey];
        }
        
        try {
            // Configuration de base du contexte
            $context = "Tu es un assistant virtuel pour le service de réclamations. ";
            
            // Ajout des informations de réclamation si disponibles
            if ($reclamation) {
                $context .= sprintf(
                    "La réclamation actuelle concerne la catégorie '%s' et son état est '%s'. Le contenu de la réclamation est : %s. ",
                    $reclamation->getCategorie(),
                    $reclamation->getEtat(),
                    $reclamation->getReclamation()
                );
            }
            
            // Limitateur de débit simple
            $this->respectRateLimit();
            
            // Analyser le sentiment de la question pour adapter la réponse
            $sentiment = $this->analyzeSentiment($question);
            
            // TEMPORAIRE: Utiliser une réponse locale au lieu d'appeler l'API externe
            // Cela permet de tester l'interface sans dépendre de l'API externe
            $response = $this->getLocalResponse($question, $reclamation);
            
            // Adapter la réponse en fonction du sentiment détecté
            $response = $this->adaptResponseToSentiment($response, $sentiment);
            
            if ($this->logger) {
                $this->logger->info('Réponse locale générée pour: ' . $question . ' (sentiment: ' . $sentiment . ')');
            }
            
            // Mettre en cache la réponse
            self::$responseCache[$cacheKey] = $response;
            
            return $response;
            
            // Décommenter le code ci-dessous pour réactiver l'appel à l'API externe
            /*
            // Appel à l'API Hugging Face
            $response = $this->callHuggingFace($context, $question);
            
            // Mettre en cache la réponse
            self::$responseCache[$cacheKey] = $response;
            
            return $response;
            */
        } catch (\Exception $e) {
            // Log l'erreur pour le débogage
            if ($this->logger) {
                $this->logger->error('Erreur ChatbotAI: ' . $e->getMessage(), [
                    'trace' => $e->getTraceAsString(),
                    'question' => $question
                ]);
            }
            
            // Réponse de secours en cas d'erreur
            return "Je suis désolé, mais je rencontre des difficultés techniques actuellement. Veuillez réessayer dans quelques instants ou contacter notre service client si le problème persiste.";
        }
    }
    
    /**
     * Assure le respect des limites de débit de l'API
     */
    private function respectRateLimit(): void
    {
        $now = microtime(true);
        $timeSinceLastCall = $now - self::$lastCallTime;
        
        // Si l'appel précédent est trop récent, attendez
        if ($timeSinceLastCall < self::MIN_TIME_BETWEEN_CALLS) {
            $waitTime = (self::MIN_TIME_BETWEEN_CALLS - $timeSinceLastCall) * 1000000; // en microsecondes
            usleep(intval($waitTime));
        }
        
        self::$lastCallTime = microtime(true);
    }

    /**
     * Appel à l'API Hugging Face (gratuite)
     */
    private function callHuggingFace(string $context, string $question): string
    {
        // Récupérer la clé API depuis les paramètres
        $apiKey = $this->params->get('huggingface_api_key', '');
        
        // Modèle à utiliser (modèle public sans restrictions d'accès)
        $model = "google/flan-t5-base"; // Modèle gratuit sans restrictions d'accès
        
        // Autres modèles publics que vous pouvez essayer :
        // $model = "facebook/blenderbot-400M-distill";
        // $model = "distilbert/distilbert-base-uncased";
        // $model = "gpt2";
        
        $maxRetries = 2;
        $retryCount = 0;
        
        while ($retryCount < $maxRetries) {
            try {
                // Préparer le texte d'entrée
                $inputText = $context . "\n\nQuestion: " . $question . "\n\nRéponse:";
                
                $headers = [
                    'Content-Type' => 'application/json',
                ];
                
                // Ajouter l'en-tête d'autorisation si une clé API est définie
                if (!empty($apiKey)) {
                    $headers['Authorization'] = 'Bearer ' . $apiKey;
                }
                
                // Appel à l'API Hugging Face Inference
                $response = $this->httpClient->request('POST', "https://api-inference.huggingface.co/models/{$model}", [
                    'headers' => $headers,
                    'json' => [
                        'inputs' => $inputText,
                        'parameters' => [
                            'max_new_tokens' => 250,
                            'temperature' => 0.7,
                            'top_p' => 0.9,
                            'do_sample' => true
                        ]
                    ],
                    'timeout' => 30, // Timeout plus long car les modèles gratuits peuvent être plus lents
                ]);

                $statusCode = $response->getStatusCode();
                
                if ($statusCode !== 200) {
                    throw new \Exception("Erreur API Hugging Face - Code: " . $statusCode);
                }
                
                $data = $response->toArray(false);
                
                // Le format de réponse varie selon le modèle
                if (isset($data[0]['generated_text'])) {
                    // Extraction du texte généré, en enlevant le prompt
                    $fullText = $data[0]['generated_text'];
                    $responseText = str_replace($inputText, '', $fullText);
                    return trim($responseText);
                } elseif (is_string($data)) {
                    return $data;
                } else {
                    // Fallback au cas où le format n'est pas celui attendu
                    return json_encode($data);
                }
                
            } catch (\Exception $e) {
                $retryCount++;
                
                // Si le modèle est en cours de chargement, attendez et réessayez
                if (strpos($e->getMessage(), 'loading') !== false || strpos($e->getMessage(), '503') !== false) {
                    if ($retryCount >= $maxRetries) {
                        if ($this->logger) {
                            $this->logger->error('Le modèle est toujours en cours de chargement après plusieurs tentatives');
                        }
                        return "Le service est en train de démarrer. Veuillez réessayer dans quelques instants.";
                    }
                    
                    // Attendre avant de réessayer
                    sleep(5);
                    continue;
                }
                
                // Pour les autres erreurs, log et remontez l'exception
                if ($this->logger) {
                    $this->logger->error('Erreur API Hugging Face: ' . $e->getMessage());
                }
                throw $e;
            }
        }
        
        return "Je n'ai pas pu générer de réponse après plusieurs tentatives.";
    }

    /**
     * Génère une réponse locale sans appeler l'API externe
     * Utilisé pour les tests ou quand l'API est indisponible
     */
    private function getLocalResponse(string $question, ?Reclamation $reclamation = null): string
    {
        $question = strtolower($question);
        
        // Informations contextuelles de la réclamation
        $contexteReclamation = "";
        if ($reclamation) {
            $categorie = $reclamation->getCategorie();
            $etat = $reclamation->getEtat();
            $contexteReclamation = " Pour votre réclamation concernant '{$categorie}' (état: {$etat})";
        }
        
        // Réponses de salutation
        if (preg_match('/(bonjour|salut|hello|hey|coucou|bonsoir)/i', $question)) {
            return "Bonjour ! Je suis l'assistant virtuel du service de réclamations. Comment puis-je vous aider aujourd'hui{$contexteReclamation} ?";
        }
        
        // Réponses de remerciement
        if (preg_match('/(merci|thanks|remercie|remercier)/i', $question)) {
            return "De rien ! Je suis ravi d'avoir pu vous aider. Avez-vous d'autres questions concernant votre réclamation ?";
        }
        
        // Réponses d'au revoir
        if (preg_match('/(au revoir|bye|adieu|à bientôt|ciao|à plus)/i', $question)) {
            return "Au revoir ! N'hésitez pas à revenir si vous avez d'autres questions. Bonne journée !";
        }
        
        // Informations sur les délais
        if (preg_match('/(délai|temps|attente|durée|quand|combien de temps)/i', $question)) {
            if (preg_match('/(traitement|traiter)/i', $question)) {
                return "Le délai de traitement d'une réclamation est généralement de 5 à 7 jours ouvrables{$contexteReclamation}. Pour les cas urgents, un traitement prioritaire peut être appliqué.";
            }
            if (preg_match('/(réponse|répondre)/i', $question)) {
                return "Nous nous efforçons de répondre à toutes les réclamations dans un délai de 48 heures ouvrables. Si votre demande nécessite une analyse approfondie, le délai peut être prolongé.";
            }
            if (preg_match('/(remboursement)/i', $question)) {
                return "Les remboursements sont généralement effectués dans un délai de 10 à 15 jours ouvrables après validation de votre demande. Le délai peut varier selon votre banque.";
            }
            return "Le délai standard de traitement des réclamations est de 5 à 7 jours ouvrables. Pour une estimation plus précise{$contexteReclamation}, n'hésitez pas à préciser votre question.";
        }
        
        // Contacter le service client
        if (preg_match('/(contact|joindre|appeler|téléphone|email|mail|agent|conseiller|service client|assistance)/i', $question)) {
            if (preg_match('/(téléphone|appeler|portable|numéro)/i', $question)) {
                return "Vous pouvez contacter notre service client par téléphone au 01 23 45 67 89, du lundi au vendredi de 9h à 18h.";
            }
            if (preg_match('/(mail|email|courriel)/i', $question)) {
                return "Notre service client est joignable par email à support@example.com. Nous nous efforçons de répondre sous 24 heures ouvrables.";
            }
            if (preg_match('/(chat|messagerie|direct)/i', $question)) {
                return "Notre chat en direct est disponible du lundi au vendredi de 9h à 18h. Vous pouvez également laisser un message en dehors de ces horaires.";
            }
            return "Vous pouvez contacter notre service client par téléphone au 01 23 45 67 89, par email à support@example.com ou via notre chat en ligne. Nos agents sont disponibles du lundi au vendredi de 9h à 18h.";
        }
        
        // Demandes de remboursement
        if (preg_match('/(remboursement|rembourser|remboursé|refund)/i', $question)) {
            if (preg_match('/(demander|faire|procédure|comment)/i', $question)) {
                return "Pour demander un remboursement{$contexteReclamation}, vous devez préciser les détails dans votre réclamation et joindre les justificatifs pertinents (facture, preuve d'achat). Utilisez la section 'Documents' pour téléverser ces pièces.";
            }
            if (preg_match('/(délai|temps|durée|quand)/i', $question)) {
                return "Le délai de remboursement est généralement de 10 à 15 jours ouvrables après validation de votre demande. Vous recevrez une notification par email lorsque le remboursement sera effectué.";
            }
            if (preg_match('/(partiel|partielle)/i', $question)) {
                return "Les remboursements partiels sont possibles dans certains cas. Précisez dans votre réclamation le montant que vous souhaitez être remboursé et la raison, avec les justificatifs appropriés.";
            }
            return "Pour obtenir un remboursement, vous devez détailler votre demande dans la réclamation et fournir les justificatifs nécessaires. Le traitement prend généralement 10 à 15 jours ouvrables après validation de votre demande.";
        }
        
        // Modification d'une réclamation
        if (preg_match('/(modifier|éditer|changer|mise à jour|mettre à jour|update)/i', $question)) {
            if ($reclamation && $reclamation->getEtat() === 'traité') {
                return "Votre réclamation a déjà été traitée et ne peut plus être modifiée. Si vous avez de nouveaux éléments, nous vous invitons à créer une nouvelle réclamation en faisant référence à celle-ci.";
            }
            if ($reclamation && $reclamation->getEtat() === 'en cours') {
                return "Votre réclamation est en cours de traitement. Les modifications directes ne sont plus possibles, mais vous pouvez ajouter des informations via la discussion avec nos agents.";
            }
            return "Vous pouvez modifier votre réclamation en utilisant le bouton d'édition dans la liste de vos réclamations. Cette option est disponible uniquement si la réclamation n'est pas encore en cours de traitement.";
        }
        
        // Annulation ou suppression d'une réclamation
        if (preg_match('/(annuler|supprimer|retirer|enlever|effacer|delete)/i', $question)) {
            if ($reclamation && $reclamation->getEtat() === 'traité') {
                return "Votre réclamation a déjà été traitée et ne peut pas être supprimée. Elle sera archivée automatiquement après 6 mois.";
            }
            if ($reclamation && $reclamation->getEtat() === 'en cours') {
                return "Votre réclamation est en cours de traitement et ne peut pas être supprimée. Vous pouvez toutefois demander sa clôture via la discussion avec nos agents.";
            }
            return "Pour annuler une réclamation, vous pouvez utiliser le bouton de suppression dans la liste de vos réclamations. Cette option n'est disponible que si la réclamation n'a pas encore été prise en charge par nos équipes.";
        }
        
        // Informations sur les catégories
        if (preg_match('/(catégorie|categorie|type|classification)/i', $question)) {
            if (preg_match('/(liste|quelles|toutes|disponible)/i', $question)) {
                return "Les catégories de réclamation disponibles sont : Technique, Commercial, Financier, Services vélo, Services bus, Services taxi et Autre. Choisissez celle qui correspond le mieux à votre situation.";
            }
            if (preg_match('/(changer|modifier)/i', $question)) {
                if ($reclamation && $reclamation->getEtat() === 'non traité') {
                    return "Vous pouvez changer la catégorie de votre réclamation en l'éditant depuis la liste de vos réclamations, tant qu'elle n'a pas été prise en charge.";
                } else {
                    return "Une fois la réclamation prise en charge, la catégorie ne peut plus être modifiée. Si nécessaire, un agent peut la reclasser en interne.";
                }
            }
            if (preg_match('/(technique)/i', $question)) {
                return "La catégorie 'Technique' concerne les problèmes liés au fonctionnement de nos services : bugs, dysfonctionnements, problèmes d'accès, etc.";
            }
            if (preg_match('/(commercial)/i', $question)) {
                return "La catégorie 'Commercial' concerne les questions liées aux produits, tarifs, promotions, ou toute question relative à nos offres commerciales.";
            }
            if (preg_match('/(financier)/i', $question)) {
                return "La catégorie 'Financier' concerne les questions de facturation, paiements, remboursements ou tout litige financier.";
            }
            if (preg_match('/(vélo|velo)/i', $question)) {
                return "La catégorie 'Services vélo' concerne les problèmes spécifiques à notre service de location de vélos : disponibilité, état des vélos, stations, etc.";
            }
            if (preg_match('/(bus)/i', $question)) {
                return "La catégorie 'Services bus' concerne les problèmes liés à nos lignes de bus : retards, conditions de transport, arrêts, etc.";
            }
            if (preg_match('/(taxi)/i', $question)) {
                return "La catégorie 'Services taxi' concerne les questions relatives à nos services de taxi : réservations, comportement des chauffeurs, tarifs, etc.";
            }
            return "Les catégories permettent de diriger votre réclamation vers le service compétent. Choisissez celle qui correspond le mieux à votre situation parmi : Technique, Commercial, Financier, Services vélo, Services bus, Services taxi et Autre.";
        }
        
        // Statut ou état d'une réclamation
        if (preg_match('/(statut|état|etat|avancement|progression|status)/i', $question)) {
            if ($reclamation) {
                switch ($reclamation->getEtat()) {
                    case 'non traité':
                        return "Votre réclamation est actuellement en attente de traitement. Elle sera prise en charge par nos équipes dans les meilleurs délais.";
                    case 'en cours':
                        return "Votre réclamation est en cours de traitement par nos équipes. Vous pouvez suivre son avancement et communiquer avec nos agents via la discussion.";
                    case 'traité':
                        return "Votre réclamation a été traitée. Si vous n'êtes pas satisfait de la résolution proposée, vous pouvez ouvrir une nouvelle réclamation en faisant référence à celle-ci.";
                    default:
                        return "L'état actuel de votre réclamation est '{$reclamation->getEtat()}'. Vous recevrez une notification par email à chaque changement de statut.";
                }
            }
            return "Pour connaître l'état de votre réclamation, vous pouvez consulter la liste de vos réclamations dans votre espace personnel. Les statuts possibles sont : non traité, en cours et traité.";
        }
        
        // Communication ou discussion
        if (preg_match('/(discuter|discussion|message|communiquer|chat|échanger|contacter|parler)/i', $question)) {
            if ($reclamation) {
                if ($reclamation->getEtat() === 'non traité') {
                    return "Votre réclamation n'a pas encore été prise en charge. Une fois le traitement démarré, vous pourrez échanger avec nos agents via la fonction de discussion.";
                } else {
                    return "Vous pouvez échanger avec nos agents en utilisant la fonction de discussion associée à votre réclamation. Tous les messages sont sauvegardés et consultables à tout moment.";
                }
            }
            return "Chaque réclamation dispose d'une fonction de discussion qui vous permet d'échanger avec nos agents. Cette option est activée dès que le traitement de la réclamation débute.";
        }
        
        // Documents et pièces jointes
        if (preg_match('/(document|fichier|pièce|joindre|attacher|justificatif|photo|image|pdf)/i', $question)) {
            if (preg_match('/(taille|limite|maximum|max)/i', $question)) {
                return "La taille maximale des fichiers joints est de 10 Mo par fichier. Les formats acceptés sont JPG, PNG, PDF et DOCX.";
            }
            if (preg_match('/(supprimer|enlever|retirer)/i', $question)) {
                return "Vous pouvez supprimer un document joint à votre réclamation tant qu'elle n'est pas en cours de traitement. Après cela, contactez un agent via la discussion.";
            }
            if (preg_match('/(ajouter|joindre|attacher)/i', $question)) {
                if ($reclamation && $reclamation->getEtat() === 'traité') {
                    return "Votre réclamation étant déjà traitée, vous ne pouvez plus y ajouter de documents. Si nécessaire, créez une nouvelle réclamation avec ces documents.";
                }
                return "Vous pouvez ajouter des documents à votre réclamation en utilisant la fonction 'Ajouter un document'. Si la réclamation est déjà en traitement, utilisez la discussion pour envoyer des pièces complémentaires.";
            }
            return "Les documents joints (factures, photos, etc.) facilitent le traitement de votre réclamation. Utilisez la fonction 'Ajouter un document' pour téléverser vos justificatifs.";
        }
        
        // Suivi après traitement
        if (preg_match('/(après traitement|après résolution|suite|suivi|feedback|retour)/i', $question)) {
            return "Après le traitement de votre réclamation, vous pouvez donner votre avis sur la solution proposée. Si le problème persiste, vous pouvez ouvrir une nouvelle réclamation en référençant la précédente pour un suivi personnalisé.";
        }
        
        // Confidentialité et données personnelles
        if (preg_match('/(confidentiel|confidentialité|privé|données personnelles|rgpd|protection|données)/i', $question)) {
            return "Vos données sont traitées conformément à notre politique de confidentialité et au RGPD. Elles sont utilisées uniquement pour le traitement de votre réclamation et conservées pendant la durée légale nécessaire.";
        }
        
        // Fonctionnement général
        if (preg_match('/(fonctionn|comment ça marche|process|procédure|étape|processus)/i', $question)) {
            return "Le processus de réclamation comprend plusieurs étapes : 1) Vous soumettez votre réclamation, 2) Elle est assignée à un agent qualifié, 3) L'agent analyse votre demande et peut vous contacter pour plus d'informations, 4) Une solution est proposée, 5) Vous pouvez donner votre avis sur la résolution.";
        }
        
        // Réponses spécifiques aux catégories si une réclamation est fournie
        if ($reclamation) {
            $categorie = $reclamation->getCategorie();
            if ($categorie === 'Technique' && preg_match('/(bug|erreur|problème technique|ne fonctionne pas|défaut)/i', $question)) {
                return "Pour les problèmes techniques, nos équipes analysent d'abord les logs et tentent de reproduire le bug. N'hésitez pas à fournir des captures d'écran et à décrire précisément les étapes pour reproduire le problème.";
            }
            if ($categorie === 'Commercial' && preg_match('/(offre|prix|tarif|promotion|réduction|devis)/i', $question)) {
                return "Concernant votre demande commerciale, nos conseillers examineront les offres disponibles adaptées à votre situation. N'hésitez pas à préciser vos besoins spécifiques.";
            }
            if ($categorie === 'Financier' && preg_match('/(facture|paiement|prélèvement|compte)/i', $question)) {
                return "Pour les questions financières, notre service comptabilité vérifiera les transactions associées à votre compte. Merci de préciser les dates et montants concernés pour faciliter les recherches.";
            }
            if (preg_match('/(service vélo|vélo)/i', $categorie) && preg_match('/(vélo|station|borne|disponibilité)/i', $question)) {
                return "Concernant notre service de vélos, nous vérifions les disponibilités et l'état des équipements dans les stations concernées. Des équipes de maintenance interviennent régulièrement pour assurer le bon fonctionnement du service.";
            }
            if (preg_match('/(service bus|bus)/i', $categorie) && preg_match('/(retard|horaire|arrêt|ligne|trajet)/i', $question)) {
                return "Pour les problèmes liés aux bus, nous analysons les données de notre système de suivi pour vérifier les horaires effectifs. N'hésitez pas à préciser la ligne, la date et l'heure du trajet concerné.";
            }
            if (preg_match('/(service taxi|taxi)/i', $categorie) && preg_match('/(chauffeur|course|réservation|attente)/i', $question)) {
                return "Concernant votre réclamation sur nos services de taxi, nous examinons le déroulement de la course et contactons le chauffeur si nécessaire. Pour faciliter le traitement, précisez le numéro de réservation ou l'immatriculation du véhicule.";
            }
        }
        
        // Réponse par défaut, contextuelle si possible
        if ($reclamation) {
            return "Je n'ai pas d'information spécifique sur cette question concernant votre réclamation '{$reclamation->getCategorie()}'. Pour obtenir une assistance personnalisée, je vous invite à préciser votre demande ou à contacter directement nos agents via la fonction de discussion.";
        } else {
            return "Je n'ai pas d'information spécifique sur cette question. Pour une assistance personnalisée, n'hésitez pas à préciser votre demande ou à contacter notre service client au 01 23 45 67 89.";
        }
    }

    /**
     * Analyse le sentiment (positif, négatif, neutre) de la question
     */
    private function analyzeSentiment(string $question): string
    {
        $question = strtolower($question);
        
        // Mots-clés positifs
        $positiveWords = [
            'merci', 'super', 'génial', 'excellent', 'parfait', 'content', 'satisfait', 
            'heureux', 'apprécier', 'bravo', 'félicitations', 'bien', 'aimer'
        ];
        
        // Mots-clés négatifs
        $negativeWords = [
            'problème', 'mauvais', 'insatisfait', 'horrible', 'terrible', 'nul', 'pire',
            'déçu', 'colère', 'fâché', 'énervé', 'agacé', 'frustré', 'plainte', 'erreur', 
            'bug', 'dysfonctionnement', 'jamais', 'impossible'
        ];
        
        // Mots-clés d'urgence
        $urgentWords = [
            'urgent', 'rapidement', 'immédiatement', 'vite', 'critique', 'pressé', 
            'aujourd\'hui', 'maintenant', 'attendre', 'retard'
        ];
        
        // Compteurs
        $positiveCount = 0;
        $negativeCount = 0;
        $urgentCount = 0;
        
        // Analyse basique de sentiment
        foreach ($positiveWords as $word) {
            if (strpos($question, $word) !== false) {
                $positiveCount++;
            }
        }
        
        foreach ($negativeWords as $word) {
            if (strpos($question, $word) !== false) {
                $negativeCount++;
            }
        }
        
        foreach ($urgentWords as $word) {
            if (strpos($question, $word) !== false) {
                $urgentCount++;
            }
        }
        
        // Détection de phrases interrogatives et longueur
        $isQuestion = preg_match('/\?$/', $question) || 
                     preg_match('/^(comment|pourquoi|quand|où|qui|quoi|quel|quelle|quels|quelles)/', $question);
        $isLong = str_word_count($question) > 20;
        
        // Détermination du sentiment global
        if ($urgentCount > 0) {
            return 'urgent';
        } elseif ($negativeCount > $positiveCount) {
            return $isLong ? 'frustrated' : 'negative';
        } elseif ($positiveCount > $negativeCount) {
            return 'positive';
        } elseif ($isQuestion) {
            return 'curious';
        } else {
            return 'neutral';
        }
    }
    
    /**
     * Adapte la réponse en fonction du sentiment détecté
     */
    private function adaptResponseToSentiment(string $response, string $sentiment): string
    {
        $prefix = '';
        
        switch ($sentiment) {
            case 'positive':
                // Pour les sentiments positifs, on maintient le ton positif
                return $response;
                
            case 'negative':
                // Pour les sentiments négatifs, on commence par reconnaître le problème
                $prefix = "Je comprends votre préoccupation. ";
                break;
                
            case 'frustrated':
                // Pour les sentiments de frustration, on est empathique et rassurant
                $prefix = "Je suis vraiment désolé pour les désagréments rencontrés. Je vais vous aider à résoudre ce problème. ";
                break;
                
            case 'urgent':
                // Pour les demandes urgentes, on reconnaît l'urgence
                $prefix = "Je comprends l'urgence de votre situation. ";
                break;
                
            case 'curious':
                // Pour les questions curieuses, on est informatif
                return $response;
                
            default:
                // Pour les sentiments neutres, pas de modification
                return $response;
        }
        
        return $prefix . $response;
    }

    /**
     * Prétraite la question pour la normaliser
     */
    private function preprocessQuestion(string $question): string
    {
        // Trim pour enlever les espaces inutiles
        $question = trim($question);
        
        // Si la question est vide, renvoyer une question par défaut
        if (empty($question)) {
            return "Comment puis-je vous aider ?";
        }
        
        // Normaliser la ponctuation
        $question = preg_replace('/[!]{2,}/', '!', $question);  // Réduire les !! multiples
        $question = preg_replace('/[?]{2,}/', '?', $question);  // Réduire les ?? multiples
        
        // Convertir les acronymes courants
        $acronyms = [
            'svp' => 's\'il vous plaît',
            'stp' => 's\'il te plaît',
            'rdv' => 'rendez-vous',
            'pb' => 'problème',
            'auj' => 'aujourd\'hui',
            'asap' => 'dès que possible',
            'cb' => 'carte bancaire',
            'tel' => 'téléphone',
            'tel.' => 'téléphone'
        ];
        
        foreach ($acronyms as $acronym => $full) {
            // Remplacer uniquement les mots entiers (avec des limites de mots)
            $question = preg_replace('/\b' . preg_quote($acronym, '/') . '\b/i', $full, $question);
        }
        
        // Normaliser les mots mal orthographiés courants
        $misspellings = [
            'reclammation' => 'réclamation',
            'reclamation' => 'réclamation',
            'rembourssement' => 'remboursement',
            'remboursemnt' => 'remboursement',
            'categorie' => 'catégorie',
            'discution' => 'discussion',
            'discusion' => 'discussion',
            'statu' => 'statut',
            'avancemment' => 'avancement',
            'factur' => 'facture'
        ];
        
        foreach ($misspellings as $misspelled => $correct) {
            $question = preg_replace('/\b' . preg_quote($misspelled, '/') . '\b/i', $correct, $question);
        }
        
        // S'assurer que la première lettre est en majuscule si c'est une phrase
        if (strlen($question) > 0 && ctype_alpha($question[0])) {
            $question = ucfirst($question);
        }
        
        // Ajouter un point d'interrogation s'il s'agit manifestement d'une question
        // et qu'il n'y a pas déjà un signe de ponctuation à la fin
        $questionStarters = ['comment', 'pourquoi', 'quand', 'où', 'qui', 'quoi', 'quel', 'quelle', 'quels', 'quelles', 'est-ce', 'puis-je', 'pouvez-vous'];
        $endsWithPunctuation = preg_match('/[.!?]$/', $question);
        
        if (!$endsWithPunctuation) {
            foreach ($questionStarters as $starter) {
                if (preg_match('/^' . preg_quote($starter, '/') . '\b/i', $question)) {
                    $question .= ' ?';
                    break;
                }
            }
        }
        
        // Limiter la longueur des questions très longues
        if (strlen($question) > 300) {
            $question = substr($question, 0, 300) . '...';
        }
        
        return $question;
    }
} 