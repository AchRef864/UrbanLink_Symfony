<?php

namespace App\Service;

use Telegram\Bot\Api;
use Telegram\Bot\Objects\Update;

class TelegramService
{
    private Api $telegram;

    public function __construct(string $botToken)
    {
        $this->telegram = new Api($botToken);
    }

    public function sendMessage(int|string $chatId, string $message): void
    {
        $this->telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'HTML',
        ]);
    }

    public function getWebhookUpdate(): Update
    {
        return $this->telegram->getWebhookUpdate();
    }

    public function setWebhook(string $url): array
    {
        $response = $this->telegram->setWebhook(['url' => $url]);
        return json_decode(json_encode($response), true);
    }
    
    public function getWebhookInfo(): array
    {
        $response = $this->telegram->getWebhookInfo();
        return json_decode(json_encode($response), true);
    }
    
}
