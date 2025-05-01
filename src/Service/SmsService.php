<?php

namespace App\Service;

class SmsService
{
    private $twilioSid;
    private $twilioAuthToken;
    private $twilioPhoneNumber;
    private $isConfigured = false;

    public function __construct(?string $twilioSid = '', ?string $twilioAuthToken = '', ?string $twilioPhoneNumber = '')
    {
        $this->twilioSid = $twilioSid ?: '';
        $this->twilioAuthToken = $twilioAuthToken ?: '';
        $this->twilioPhoneNumber = $twilioPhoneNumber ?: '';
        
        // Pour le moment, on considère que le service n'est pas configuré
        $this->isConfigured = false;
    }

    public function sendSms(string $to, string $message): void
    {
        // Pour le moment, on log simplement le message
        error_log(sprintf(
            "SMS would be sent to %s with message: %s (Twilio credentials: SID=%s)",
            $to,
            $message,
            $this->twilioSid
        ));
    }

    public function isConfigured(): bool
    {
        return $this->isConfigured;
    }
} 