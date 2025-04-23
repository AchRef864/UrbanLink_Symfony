<?php
// src/Service/TwilioService.php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;

class TwilioService
{
    private Client $client;
    private string $from;
    private LoggerInterface $logger;

    public function __construct(string $sid, string $token, string $from, LoggerInterface $logger)
    {
        $this->client = new Client($sid, $token);
        $this->from   = $from;
        $this->logger = $logger;
    }

    public function sendSms(string $to, string $message): void
    {
        if (0 !== strpos($to, '+')) {
            $to = '+1'.$to;
        }

        try {
            $sent = $this->client->messages->create($to, [
                'from' => $this->from,
                'body' => $message,
            ]);
            $this->logger->info("Twilio queued SMS {$sent->sid} → {$to}");
        } catch (TwilioException $e) {
            $this->logger->error("Twilio error sending to {$to}: ".$e->getMessage());
            throw $e;
        }
    }
}
