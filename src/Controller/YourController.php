<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Rest\Client;
use Psr\Log\LoggerInterface;

class YourController extends AbstractController
{
    private $logger;
    private $twilioAccountSid;
    private $twilioAuthToken;
    private $twilioFromNumber;

    public function __construct(
        LoggerInterface $logger,
        string $twilioAccountSid,
        string $twilioAuthToken,
        string $twilioFromNumber
    ) {
        $this->logger = $logger;
        $this->twilioAccountSid = $twilioAccountSid;
        $this->twilioAuthToken = $twilioAuthToken;
        $this->twilioFromNumber = $twilioFromNumber;
    }

    #[Route('/code-promo/new', name: 'new_code_promo')]
    public function newCodePromo(): Response
    {
        try {
            $this->logger->info('Début de l\'envoi de SMS', [
                'account_sid' => $this->twilioAccountSid,
                'from_number' => $this->twilioFromNumber,
                'auth_token_length' => strlen($this->twilioAuthToken)
            ]);

            // Vérification des informations Twilio
            if (empty($this->twilioAccountSid) || empty($this->twilioAuthToken) || empty($this->twilioFromNumber)) {
                throw new \Exception('Les informations Twilio sont manquantes');
            }

            $client = new Client($this->twilioAccountSid, $this->twilioAuthToken);

            // Liste des numéros de téléphone des destinataires
            $recipients = [
                '+21693485681',
                '+21693197788'
            ];

            $results = [];
            foreach ($recipients as $toNumber) {
                $this->logger->info('Tentative d\'envoi à ' . $toNumber);

                try {
                    $message = $client->messages->create(
                        $toNumber,
                        [
                            'from' => $this->twilioFromNumber,
                            'body' => 'Votre code promo pour le site web EzGo est : EzGo25'
                        ]
                    );

                    $this->logger->info('SMS envoyé avec succès', [
                        'message_sid' => $message->sid,
                        'to' => $toNumber,
                        'status' => $message->status
                    ]);

                    $results[] = "SMS envoyé à $toNumber (SID: {$message->sid}, Status: {$message->status})";
                } catch (\Exception $e) {
                    $this->logger->error('Erreur lors de l\'envoi à ' . $toNumber, [
                        'error' => $e->getMessage()
                    ]);
                    $results[] = "Erreur pour $toNumber: " . $e->getMessage();
                }
            }

            return new Response(implode('<br>', $results));
        } catch (\Exception $e) {
            $this->logger->error('Erreur générale lors de l\'envoi des SMS', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return new Response('Erreur lors de l\'envoi des SMS: ' . $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}