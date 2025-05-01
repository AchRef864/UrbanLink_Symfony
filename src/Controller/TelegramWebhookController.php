<?php

namespace App\Controller;

use App\Service\TelegramService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Telegram\Bot\Objects\Message;
use Telegram\Bot\Objects\Update;

class TelegramWebhookController extends AbstractController
{
    #[Route('/telegram/webhook', name: 'telegram_webhook', methods: ['POST'])]
    public function webhook(Request $request, TelegramService $telegram): JsonResponse
    {
        $update = $telegram->getWebhookUpdate();
        $message = $update->getMessage();

        if (!$message) {
            return new JsonResponse(['ok' => true]);
        }

        $chatId = $message->getChat()->getId();
        $text = $message->getText();

        // Logique simple de réponse
        if (str_starts_with($text, '/start')) {
            $telegram->sendMessage($chatId, "👋 Bienvenue sur UrbanLink Bot !");
        } elseif (str_starts_with($text, '/help')) {
            $telegram->sendMessage($chatId, "📌 Commandes : /start, /help, /hello");
        } elseif (str_starts_with($text, '/hello')) {
            $telegram->sendMessage($chatId, "👋 Bonjour !");
        } else {
            $telegram->sendMessage($chatId, "❓ Commande inconnue. Essayez /help");
        }

        return new JsonResponse(['ok' => true]);
    }

    #[Route('/telegram/set-webhook', name: 'telegram_set_webhook', methods: ['GET'])]
    public function setWebhook(Request $request, TelegramService $telegram): JsonResponse
    {
        $host = $request->getSchemeAndHttpHost();
        $webhookUrl = $host . $this->generateUrl('telegram_webhook');
        $result = $telegram->setWebhook($webhookUrl);

        return new JsonResponse([
            'webhook_url' => $webhookUrl,
            'telegram_response' => $result
        ]);
    }

    #[Route('/telegram/webhook-info', name: 'telegram_webhook_info', methods: ['GET'])]
    public function getWebhookInfo(TelegramService $telegram): JsonResponse
    {
        return new JsonResponse($telegram->getWebhookInfo());
    }
}
