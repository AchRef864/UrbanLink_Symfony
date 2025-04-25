<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{Request, JsonResponse};
use App\Service\GeminiService;

class UrbanTalkController extends AbstractController
{
    #[Route('/urban-talk', name: 'urban_talk', methods: ['POST'])]
    public function chat(Request $request, GeminiService $gemini): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['question'])) {
            return new JsonResponse(['response' => 'No question provided']);
        }

        try {
            return new JsonResponse([
                'response' => $gemini->ask($data['question'])
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'response' => 'Error processing your request',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}