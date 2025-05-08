<?php

namespace App\Controller;

use App\Service\ChatbotAIService;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

#[Route('/api/chatbot')]
class ChatbotController extends AbstractController
{
    private $chatbotService;
    private $reclamationRepository;
    private $logger;

    public function __construct(
        ChatbotAIService $chatbotService,
        ReclamationRepository $reclamationRepository,
        LoggerInterface $logger
    ) {
        $this->chatbotService = $chatbotService;
        $this->reclamationRepository = $reclamationRepository;
        $this->logger = $logger;
    }

    /**
     * Endpoint pour poser une question au chatbot AI
     */
    #[Route('/ask', name: 'api_chatbot_ask', methods: ['POST'])]
    public function askQuestion(Request $request): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
            $question = $data['question'] ?? null;
            $reclamationId = $data['reclamationId'] ?? null;
            
            if (!$question) {
                return $this->json([
                    'success' => false,
                    'message' => 'La question est obligatoire'
                ], 400);
            }
            
            $reclamation = null;
            if ($reclamationId) {
                $reclamation = $this->reclamationRepository->find($reclamationId);
                // Ne pas renvoyer d'erreur si la réclamation n'est pas trouvée, juste un log
                if (!$reclamation) {
                    if ($this->logger) {
                        $this->logger->warning('Réclamation non trouvée: ' . $reclamationId);
                    }
                    // Continuer sans la réclamation
                }
            }
            
            $answer = $this->chatbotService->askQuestion($question, $reclamation);
            
            return $this->json([
                'success' => true,
                'answer' => $answer,
                'reclamationId' => $reclamationId
            ]);
        } catch (\Exception $e) {
            if ($this->logger) {
                $this->logger->error('Erreur dans ChatbotController::askQuestion: ' . $e->getMessage(), [
                    'trace' => $e->getTraceAsString(),
                    'request' => $request->getContent()
                ]);
            }
            
            return $this->json([
                'success' => false,
                'message' => 'Une erreur est survenue: ' . $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * Endpoint pour obtenir des suggestions de questions fréquentes
     */
    #[Route('/suggestions', name: 'api_chatbot_suggestions', methods: ['GET'])]
    public function getSuggestions(Request $request): JsonResponse
    {
        $reclamationId = $request->query->get('reclamationId');
        $reclamation = null;
        
        if ($reclamationId) {
            $reclamation = $this->reclamationRepository->find($reclamationId);
        }
        
        // Liste de suggestions générales (sans contexte de réclamation)
        $suggestions = [
            'general' => [
                'Comment fonctionne le service de réclamation ?',
                'Combien de temps pour traiter ma réclamation ?',
                'Comment contacter un agent ?',
                'Quels documents puis-je joindre à ma réclamation ?',
                'Comment modifier ma réclamation ?'
            ]
        ];
        
        if ($reclamation) {
            $categorie = $reclamation->getCategorie();
            $etat = $reclamation->getEtat();
            
            // Suggestions spécifiques à la catégorie
            $categorySuggestions = $this->getCategorySuggestions($categorie);
            if (!empty($categorySuggestions)) {
                $suggestions['categorie'] = $categorySuggestions;
            }
            
            // Suggestions spécifiques à l'état
            $statusSuggestions = $this->getStatusSuggestions($etat);
            if (!empty($statusSuggestions)) {
                $suggestions['etat'] = $statusSuggestions;
            }
        }
        
        return $this->json([
            'success' => true,
            'suggestions' => $suggestions
        ]);
    }
    
    /**
     * Obtient les suggestions de questions en fonction de la catégorie
     */
    private function getCategorySuggestions(string $categorie): array
    {
        $suggestions = [];
        
        switch ($categorie) {
            case 'Technique':
                $suggestions = [
                    'Comment signaler un bug technique ?',
                    'Que faire si l\'application ne fonctionne pas ?',
                    'Comment fournir des captures d\'écran pour mon problème technique ?',
                    'Quelle est la procédure de résolution des problèmes techniques ?',
                    'Mon compte est bloqué, que faire ?'
                ];
                break;
                
            case 'Commercial':
                $suggestions = [
                    'Comment demander un remboursement ?',
                    'Je souhaite modifier ma commande, comment faire ?',
                    'Comment obtenir un devis personnalisé ?',
                    'Quelles sont les offres promotionnelles actuelles ?',
                    'Comment contester une facturation ?'
                ];
                break;
                
            case 'Financier':
                $suggestions = [
                    'Je n\'ai pas reçu ma facture, que faire ?',
                    'Comment contester un prélèvement ?',
                    'Quel est le délai de remboursement ?',
                    'Comment mettre à jour mes coordonnées bancaires ?',
                    'Je n\'ai pas reçu mon remboursement, comment le suivre ?'
                ];
                break;
                
            case 'Services vélo':
            case 'Services Vélo':
                $suggestions = [
                    'Que faire si un vélo est défectueux ?',
                    'Comment signaler une station vide ?',
                    'Comment prolonger mon abonnement vélo ?',
                    'Mon badge ne fonctionne pas, que faire ?',
                    'Comment signaler un problème avec une borne ?'
                ];
                break;
                
            case 'Services bus':
            case 'Services Bus':
                $suggestions = [
                    'Que faire en cas de retard récurrent ?',
                    'Comment signaler un problème avec un chauffeur ?',
                    'Comment obtenir un remboursement pour un trajet annulé ?',
                    'Mon abonnement n\'est pas reconnu, que faire ?',
                    'Comment consulter les horaires en temps réel ?'
                ];
                break;
                
            case 'Services taxi':
            case 'Services Taxi':
                $suggestions = [
                    'Mon chauffeur n\'est pas venu, que faire ?',
                    'Comment contester le montant d\'une course ?',
                    'Je souhaite signaler un problème avec un chauffeur',
                    'Comment retrouver un objet oublié dans un taxi ?',
                    'Je souhaite émettre un avis sur une course'
                ];
                break;
                
            default:
                // Pour la catégorie "Autre" ou toute catégorie non gérée spécifiquement
                $suggestions = [
                    'Comment reclasser ma réclamation dans la bonne catégorie ?',
                    'Ma demande ne correspond pas aux catégories disponibles',
                    'Comment obtenir de l\'aide pour ma situation spécifique ?',
                    'Je souhaite parler à un conseiller spécialisé'
                ];
        }
        
        return $suggestions;
    }
    
    /**
     * Obtient les suggestions de questions en fonction de l'état de la réclamation
     */
    private function getStatusSuggestions(string $etat): array
    {
        $suggestions = [];
        
        switch ($etat) {
            case 'non traité':
                $suggestions = [
                    'Quand ma réclamation sera-t-elle traitée ?',
                    'Comment puis-je modifier ma réclamation avant traitement ?',
                    'Comment puis-je ajouter des documents à ma réclamation ?',
                    'Puis-je annuler ma réclamation ?',
                    'Comment accélérer le traitement de ma réclamation ?'
                ];
                break;
                
            case 'en cours':
                $suggestions = [
                    'Comment communiquer avec l\'agent qui traite ma réclamation ?',
                    'Combien de temps reste-t-il avant d\'obtenir une réponse ?',
                    'Comment savoir qui s\'occupe de ma réclamation ?',
                    'Comment ajouter de nouvelles informations à ma réclamation ?',
                    'Puis-je demander une escalade de ma réclamation ?'
                ];
                break;
                
            case 'traité':
                $suggestions = [
                    'Je ne suis pas satisfait de la résolution, que faire ?',
                    'Comment donner mon avis sur le traitement de ma réclamation ?',
                    'Comment déposer une nouvelle réclamation liée à celle-ci ?',
                    'Comment obtenir plus d\'informations sur la résolution ?',
                    'Comment télécharger une attestation de résolution ?'
                ];
                break;
                
            default:
                $suggestions = [
                    'Comment connaître l\'état actuel de ma réclamation ?',
                    'Quelles sont les différentes étapes de traitement ?',
                    'Comment recevoir des notifications sur l\'avancement ?'
                ];
        }
        
        return $suggestions;
    }
} 