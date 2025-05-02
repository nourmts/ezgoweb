<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Twilio\Rest\Client;

class SmsService
{
    private $logger;
    private $twilioPhoneNumber;
    private $twilioClient;

    public function __construct(
        string $twilioPhoneNumber,
        string $twilioAccountSid,
        string $twilioAuthToken,
        LoggerInterface $logger
    ) {
        $this->twilioPhoneNumber = $twilioPhoneNumber;
        $this->logger = $logger;
        $this->twilioClient = new Client($twilioAccountSid, $twilioAuthToken);
    }

    public function sendSms(string $to, string $message): void
    {
        try {
            $this->logger->info('Tentative d\'envoi de SMS', [
                'to' => $to,
                'message' => $message,
                'twilio_number' => $this->twilioPhoneNumber,
                'is_configured' => $this->isConfigured()
            ]);

            if (!$this->isConfigured()) {
                throw new \RuntimeException('Le service SMS n\'est pas correctement configuré');
            }

            $this->twilioClient->messages->create(
                $to,
                [
                    'from' => $this->twilioPhoneNumber,
                    'body' => $message
                ]
            );
            
            $this->logger->info('SMS envoyé avec succès', [
                'to' => $to,
                'from' => $this->twilioPhoneNumber,
                'message' => $message
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de l\'envoi du SMS', [
                'to' => $to,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }

    public function isConfigured(): bool
    {
        $isConfigured = !empty($this->twilioPhoneNumber) && $this->twilioClient !== null;
        $this->logger->info('Vérification de la configuration du service SMS', [
            'twilio_number' => $this->twilioPhoneNumber,
            'has_client' => $this->twilioClient !== null,
            'is_configured' => $isConfigured
        ]);
        return $isConfigured;
    }
} 