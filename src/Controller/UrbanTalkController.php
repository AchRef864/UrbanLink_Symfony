<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{Request, JsonResponse};
use App\Service\GeminiService;
use Symfony\Component\Routing\Annotation\Route;

class UrbanTalkController extends AbstractController
{
    #[Route('/urban-talk', name: 'urban_talk', methods: ['POST'])]
    public function chat(Request $request, GeminiService $gemini): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['question'])) {
            return new JsonResponse(['response' => 'No question provided']);
        }

        $question = trim(strtolower($data['question']));

        try {
            //  Simple Keyword-Based Routing (Extend this!)
            if (str_contains($question, 'how many users')) {
                return $this->handleHowManyUsers($question, $gemini);
            }

            if (str_contains($question, 'roles in table users') || str_contains($question, 'roles in users table')) {
                return $this->handleUserRoles($question, $gemini);
            }

            if (str_contains($question, 'heni exist in users')) {
                return $this->handleHeniExists($question, $gemini);
            }

            if (str_contains($question, 'reservations')) {
                return $this->handleReservations($question, $gemini);
            }

            if (str_contains($question, 'taxis')) {
                return $this->handleTaxis($question, $gemini);
            }

            //  Default to LLM if no specific handler is found
            $response = $gemini->ask($question);
            return $this->json(['response' => $response]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'response' => 'Error processing your request',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    private function handleHowManyUsers(string $question, GeminiService $gemini): JsonResponse
    {
        $userCount = $gemini->countRows('users');
        $response = $gemini->ask($question, ['user_count' => $userCount]);
        return $this->json(['response' => $response]);
    }

    private function handleUserRoles(string $question, GeminiService $gemini): JsonResponse
    {
        $roles = $gemini->fetchData('users', 'DISTINCT role');
        $roleNames = array_column($roles, 'role');
        $response = $gemini->ask($question, ['roles' => $roleNames]);
        return $this->json(['response' => $response]);
    }

    private function handleHeniExists(string $question, GeminiService $gemini): JsonResponse
    {
        $users = $gemini->fetchData('users', 'name', 'name = ?', ['heni']);
        $heniExists = !empty($users);
        $response = $gemini->ask($question, ['heni_exists' => $heniExists]);
        return $this->json(['response' => $response]);
    }

    private function handleReservations(string $question, GeminiService $gemini): JsonResponse
    {
        // Example:  "Show me the last 5 reservations"
        if (str_contains($question, 'last')) {
            $reservations = $gemini->fetchData('reservations', '*', '1=1 ORDER BY reservation_date DESC LIMIT 5');
            $response = $gemini->ask($question, ['reservations' => $this->formatReservations($reservations)]);
            return $this->json(['response' => $response]);
        }

        // Example: "How many reservations are pending?"
        if (str_contains($question, 'how many') && str_contains($question, 'pending')) {
            $pendingCount = $gemini->countRows('reservations', 'status = ?', ['Pending']);
            $response = $gemini->ask($question, ['pending_reservations' => $pendingCount]);
            return $this->json(['response' => $response]);
        }

        // Default reservation handling (you can expand this)
        $response = $gemini->ask($question);
        return $this->json(['response' => $response]);
    }

    private function handleTaxis(string $question, GeminiService $gemini): JsonResponse
    {
        // Example: "Show me available taxis"
        if (str_contains($question, 'available')) {
            $taxis = $gemini->fetchData('taxi', '*', 'statut = ?', ['Disponible']);
            $response = $gemini->ask($question, ['available_taxis' => $this->formatTaxis($taxis)]);
            return $this->json(['response' => $response]);
        }

        // Default taxi handling
        $response = $gemini->ask($question);
        return $this->json(['response' => $response]);
    }

    // --- Formatting Helper Functions ---
    private function formatReservations(array $reservations): array
    {
        return array_map(function ($reservation) {
            return [
                'id' => $reservation['reservation_id'],
                'date' => $reservation['reservation_date'],
                'price' => $reservation['total_price'],
                'status' => $reservation['status'],
            ];
        }, $reservations);
    }

    private function formatTaxis(array $taxis): array
    {
        return array_map(function ($taxi) {
            return [
                'id' => $taxi['id'],
                'immatriculation' => $taxi['immatriculation'],
                'marque' => $taxi['marque'],
                'modele' => $taxi['modele'],
                'statut' => $taxi['statut'],
            ];
        }, $taxis);
    }

    private function handleEmailOfUserId(string $question, GeminiService $gemini): JsonResponse
    {
        // Extract the user_id from the question
        preg_match('/user_id\s*=\s*(\d+)/', $question, $matches);
        $userId = (int) $matches[1];

        $email = $gemini->fetchData('users', 'email', 'user_id = ?', [$userId]);

        if ($email) {
            $response = $gemini->ask($question, ['email' => $email[0]['email']]);
        } else {
            $response = $gemini->ask("No user found with that ID.");
        }

        return $this->json(['response' => $response]);
    }

    // Add more formatting functions as needed for other data types
}