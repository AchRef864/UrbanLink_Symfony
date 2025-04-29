<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{Request, JsonResponse};
use App\Service\GeminiService;
use Symfony\Component\Routing\Annotation\Route;

class UrbanTalkController extends AbstractController
{
    /**
     * Main endpoint for processing natural language queries
     */
    #[Route('/urban-talk', name: 'urban_talk', methods: ['POST'])]
    public function chat(Request $request, GeminiService $gemini): JsonResponse
    {
        try {
            // Parse and validate request
            $data = json_decode($request->getContent(), true);
            if (!isset($data['question']) || empty($data['question'])) {
                return new JsonResponse(['response' => 'Please provide a question'], 400);
            }

            $question = trim(strtolower($data['question']));

            // Process the question through our routing system
            return $this->routeQuestion($question, $gemini);

        } catch (\Exception $e) {
            return new JsonResponse([
                'response' => 'Error processing your request',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Routes the question to appropriate handler based on content analysis
     */
    private function routeQuestion(string $question, GeminiService $gemini): JsonResponse
    {
        // User-related queries
        if ($this->containsAny($question, ['how many users', 'count users', 'total users'])) {
            return $this->handleHowManyUsers($question, $gemini);
        }

        if ($this->containsAny($question, ['roles in table users', 'roles in users table', 'user roles', 'roles of users'])) {
            return $this->handleUserRoles($question, $gemini);
        }

        if ($this->containsAny($question, ['heni exist', 'does heni exist', 'is heni', 'user heni'])) {
            return $this->handleHeniExists($question, $gemini);
        }

        if ($this->containsAll($question, ['user', 'email']) && $this->containsAny($question, ['id', 'user_id'])) {
            return $this->handleEmailOfUserId($question, $gemini);
        }

        if ($this->containsAll($question, ['find', 'user']) || $this->containsAll($question, ['search', 'user'])) {
            return $this->handleFindUser($question, $gemini);
        }

        // Reservation-related queries
        if ($this->containsAny($question, ['reservations', 'bookings'])) {
            return $this->handleReservations($question, $gemini);
        }

        // Taxi-related queries
        if ($this->containsAny($question, ['taxis', 'vehicles', 'cars'])) {
            return $this->handleTaxis($question, $gemini);
        }

        // Table info queries
        if ($this->containsAll($question, ['what', 'tables']) ||
            $this->containsAll($question, ['list', 'tables']) ||
            $this->containsAll($question, ['show', 'tables'])) {
            return $this->handleListTables($question, $gemini);
        }

        if ($this->containsAll($question, ['columns', 'table']) ||
            $this->containsAll($question, ['fields', 'table'])) {
            return $this->handleTableStructure($question, $gemini);
        }

        // Default to LLM if no specific handler is found
        $response = $gemini->ask($question);
        return $this->json(['response' => $response]);
    }

    /**
     * Helper method to check if a string contains all given keywords
     */
    private function containsAll(string $haystack, array $needles): bool
    {
        foreach ($needles as $needle) {
            if (!str_contains($haystack, $needle)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Helper method to check if a string contains any of given keywords
     */
    private function containsAny(string $haystack, array $needles): bool
    {
        foreach ($needles as $needle) {
            if (str_contains($haystack, $needle)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Extract a number from a string
     */
    private function extractNumber(string $text): ?int
    {
        preg_match('/\d+/', $text, $matches);
        return $matches[0] ?? null;
    }

    /**
     * Handles queries about the number of users
     */
    private function handleHowManyUsers(string $question, GeminiService $gemini): JsonResponse
    {
        // Check for role or status conditions
        $whereClause = null;
        $params = [];

        if (str_contains($question, 'admin')) {
            $whereClause = 'role = ?';
            $params = ['admin'];
        } elseif (str_contains($question, 'client')) {
            $whereClause = 'role = ?';
            $params = ['client'];
        } elseif (str_contains($question, 'active')) {
            $whereClause = 'status = ?';
            $params = ['active'];
        } elseif (str_contains($question, 'inactive')) {
            $whereClause = 'status = ?';
            $params = ['inactive'];
        }

        $userCount = $gemini->countRows('users', $whereClause, $params);
        $context = [
            'user_count' => $userCount,
            'condition' => $whereClause ? implode(' ', $params) : 'total'
        ];

        $response = $gemini->ask($question, $context);
        return $this->json(['response' => $response]);
    }

    /**
     * Handles queries about user roles
     */
    private function handleUserRoles(string $question, GeminiService $gemini): JsonResponse
    {
        $roles = $gemini->fetchData('users', 'DISTINCT role');
        $roleNames = array_column($roles, 'role');

        // Count users per role
        $roleCounts = [];
        foreach ($roleNames as $role) {
            $count = $gemini->countRows('users', 'role = ?', [$role]);
            $roleCounts[$role] = $count;
        }

        $response = $gemini->ask($question, [
            'roles' => $roleNames,
            'role_counts' => $roleCounts
        ]);

        return $this->json(['response' => $response]);
    }

    /**
     * Handles queries about whether user "Heni" exists
     */
    private function handleHeniExists(string $question, GeminiService $gemini): JsonResponse
    {
        $users = $gemini->fetchData('users', '*', 'name = ?', ['heni']);
        $heniExists = !empty($users);

        $context = ['heni_exists' => $heniExists];
        if ($heniExists) {
            $context['heni_details'] = $users[0];
        }

        $response = $gemini->ask($question, $context);
        return $this->json(['response' => $response]);
    }

    /**
     * Handles general user search queries
     */
    private function handleFindUser(string $question, GeminiService $gemini): JsonResponse
    {
        // Extract search parameters based on question
        $searchParams = [];
        $whereClause = [];

        // Common patterns to extract
        if (preg_match('/name\s*=\s*["\']?([^"\']+)["\']?/', $question, $matches)) {
            $searchParams[] = $matches[1];
            $whereClause[] = 'name = ?';
        }

        if (preg_match('/email\s*=\s*["\']?([^"\']+)["\']?/', $question, $matches)) {
            $searchParams[] = $matches[1];
            $whereClause[] = 'email = ?';
        }

        if (preg_match('/role\s*=\s*["\']?([^"\']+)["\']?/', $question, $matches)) {
            $searchParams[] = $matches[1];
            $whereClause[] = 'role = ?';
        }

        if (preg_match('/id\s*=\s*(\d+)/', $question, $matches)) {
            $searchParams[] = $matches[1];
            $whereClause[] = 'user_id = ?';
        }

        // Default search if no specific parameters found
        if (empty($whereClause)) {
            // Extract potential name from question
            preg_match('/find\s+user\s+([a-z0-9_]+)/i', $question, $matches);
            $searchName = $matches[1] ?? null;

            if ($searchName) {
                $searchParams[] = "%$searchName%";
                $whereClause[] = 'name LIKE ?';
            } else {
                // Default to returning most recent users
                $users = $gemini->fetchData('users', '*', '1=1 ORDER BY user_id DESC LIMIT 5');
                $response = $gemini->ask($question, ['recent_users' => $users]);
                return $this->json(['response' => $response]);
            }
        }

        $finalWhere = implode(' AND ', $whereClause);
        $users = $gemini->fetchData('users', '*', $finalWhere, $searchParams);

        $response = $gemini->ask($question, ['matched_users' => $users, 'count' => count($users)]);
        return $this->json(['response' => $response]);
    }

    /**
     * Handles email lookup by user ID
     */
    private function handleEmailOfUserId(string $question, GeminiService $gemini): JsonResponse
    {
        // Extract the user_id from the question
        preg_match('/user_id\s*=\s*(\d+)/', $question, $matches);

        if (empty($matches)) {
            // Try alternative patterns
            preg_match('/id\s*=\s*(\d+)/', $question, $matches);
        }

        if (empty($matches)) {
            // Try to extract just a number
            preg_match('/\b(\d+)\b/', $question, $matches);
        }

        $userId = (int) ($matches[1] ?? 0);

        if ($userId <= 0) {
            return $this->json(['response' => 'I need a valid user ID to look up their email.']);
        }

        $user = $gemini->fetchData('users', '*', 'user_id = ?', [$userId]);

        if ($user) {
            $response = $gemini->ask($question, ['user' => $user[0]]);
        } else {
            $response = $gemini->ask("No user found with ID $userId.");
        }

        return $this->json(['response' => $response]);
    }

    /**
     * Handles reservation-related queries
     */
    private function handleReservations(string $question, GeminiService $gemini): JsonResponse
    {
        // "Show me the last X reservations"
        if (str_contains($question, 'last') || str_contains($question, 'recent')) {
            $limit = 5; // Default limit

            // Try to extract a number
            if (preg_match('/\b(\d+)\b/', $question, $matches)) {
                $limit = (int) $matches[1];
            }

            $reservations = $gemini->fetchData('reservations', '*', '1=1 ORDER BY reservation_date DESC LIMIT ?', [$limit]);
            $response = $gemini->ask($question, [
                'reservations' => $this->formatReservations($reservations),
                'count' => count($reservations)
            ]);
            return $this->json(['response' => $response]);
        }

        // "How many reservations are [status]?"
        if ($this->containsAny($question, ['how many', 'count', 'total'])) {
            $status = null;

            if (str_contains($question, 'pending')) {
                $status = 'Pending';
            } elseif (str_contains($question, 'confirmed')) {
                $status = 'Confirmed';
            } elseif (str_contains($question, 'cancelled')) {
                $status = 'Cancelled';
            } elseif (str_contains($question, 'completed')) {
                $status = 'Completed';
            }

            if ($status) {
                $count = $gemini->countRows('reservations', 'status = ?', [$status]);
                $response = $gemini->ask($question, ['status' => $status, 'count' => $count]);
            } else {
                $count = $gemini->countRows('reservations');
                $response = $gemini->ask($question, ['total_reservations' => $count]);
            }

            return $this->json(['response' => $response]);
        }

        // "Find reservations for [date]"
        if ($this->containsAny($question, ['for date', 'on date', 'on the'])) {
            // Try to extract a date - assuming YYYY-MM-DD format
            if (preg_match('/\d{4}-\d{2}-\d{2}/', $question, $matches)) {
                $date = $matches[0];
                $reservations = $gemini->fetchData('reservations', '*', 'DATE(reservation_date) = ?', [$date]);
                $response = $gemini->ask($question, [
                    'date' => $date,
                    'reservations' => $this->formatReservations($reservations),
                    'count' => count($reservations)
                ]);
                return $this->json(['response' => $response]);
            }
        }

        // "Find reservations with price over/under [amount]"
        if ($this->containsAny($question, ['price over', 'price above', 'more than', 'price under', 'price below', 'less than'])) {
            $operator = $this->containsAny($question, ['over', 'above', 'more than']) ? '>' : '<';

            if (preg_match('/\b(\d+(?:\.\d+)?)\b/', $question, $matches)) {
                $price = (float) $matches[1];
                $reservations = $gemini->fetchData('reservations', '*', "total_price $operator ?", [$price]);
                $response = $gemini->ask($question, [
                    'price_point' => $price,
                    'operator' => $operator,
                    'reservations' => $this->formatReservations($reservations),
                    'count' => count($reservations)
                ]);
                return $this->json(['response' => $response]);
            }
        }

        // Default reservation handling - return overview
        $totalCount = $gemini->countRows('reservations');
        $statusCounts = [];

        foreach (['Pending', 'Confirmed', 'Cancelled', 'Completed'] as $status) {
            $statusCounts[$status] = $gemini->countRows('reservations', 'status = ?', [$status]);
        }

        $response = $gemini->ask($question, [
            'total_reservations' => $totalCount,
            'status_counts' => $statusCounts
        ]);

        return $this->json(['response' => $response]);
    }

    /**
     * Handles taxi-related queries
     */
    private function handleTaxis(string $question, GeminiService $gemini): JsonResponse
    {
        // "Show available taxis"
        if ($this->containsAny($question, ['available', 'free', 'not busy'])) {
            $taxis = $gemini->fetchData('taxi', '*', 'statut = ?', ['Disponible']);
            $response = $gemini->ask($question, [
                'available_taxis' => $this->formatTaxis($taxis),
                'count' => count($taxis)
            ]);
            return $this->json(['response' => $response]);
        }

        // "How many taxis are [status]?"
        if ($this->containsAny($question, ['how many', 'count'])) {
            $status = null;

            if (str_contains($question, 'available')) {
                $status = 'Disponible';
            } elseif (str_contains($question, 'busy') || str_contains($question, 'occupied')) {
                $status = 'Occupé';
            } elseif (str_contains($question, 'maintenance')) {
                $status = 'En maintenance';
            }

            if ($status) {
                $count = $gemini->countRows('taxi', 'statut = ?', [$status]);
                $response = $gemini->ask($question, ['status' => $status, 'count' => $count]);
            } else {
                $count = $gemini->countRows('taxi');
                $response = $gemini->ask($question, ['total_taxis' => $count]);
            }

            return $this->json(['response' => $response]);
        }

        // "Find taxis by brand/model"
        if ($this->containsAny($question, ['brand', 'marque', 'model', 'modele'])) {
            $searchTerm = null;

            // Extract brand or model names
            if (preg_match('/brand\s*=?\s*["\']?([^"\']+)["\']?/', $question, $matches)) {
                $searchTerm = $matches[1];
                $whereClause = 'marque LIKE ?';
            } elseif (preg_match('/marque\s*=?\s*["\']?([^"\']+)["\']?/', $question, $matches)) {
                $searchTerm = $matches[1];
                $whereClause = 'marque LIKE ?';
            } elseif (preg_match('/model\s*=?\s*["\']?([^"\']+)["\']?/', $question, $matches)) {
                $searchTerm = $matches[1];
                $whereClause = 'modele LIKE ?';
            } elseif (preg_match('/modele\s*=?\s*["\']?([^"\']+)["\']?/', $question, $matches)) {
                $searchTerm = $matches[1];
                $whereClause = 'modele LIKE ?';
            }

            if ($searchTerm) {
                $taxis = $gemini->fetchData('taxi', '*', $whereClause, ["%$searchTerm%"]);
                $response = $gemini->ask($question, [
                    'search_term' => $searchTerm,
                    'taxis' => $this->formatTaxis($taxis),
                    'count' => count($taxis)
                ]);
                return $this->json(['response' => $response]);
            }
        }

        // Find taxi by ID or license plate
        if ($this->containsAny($question, ['find taxi', 'taxi with id', 'plate', 'immatriculation'])) {
            $searchField = null;
            $searchValue = null;

            if (preg_match('/id\s*=?\s*(\d+)/', $question, $matches)) {
                $searchField = 'id';
                $searchValue = $matches[1];
            } elseif (preg_match('/plate\s*=?\s*["\']?([^"\']+)["\']?/', $question, $matches)) {
                $searchField = 'immatriculation';
                $searchValue = $matches[1];
            } elseif (preg_match('/immatriculation\s*=?\s*["\']?([^"\']+)["\']?/', $question, $matches)) {
                $searchField = 'immatriculation';
                $searchValue = $matches[1];
            }

            if ($searchField && $searchValue) {
                $taxis = $gemini->fetchData('taxi', '*', "$searchField = ?", [$searchValue]);
                $response = $gemini->ask($question, [
                    'search_field' => $searchField,
                    'search_value' => $searchValue,
                    'taxis' => $this->formatTaxis($taxis),
                    'count' => count($taxis)
                ]);
                return $this->json(['response' => $response]);
            }
        }

        // Default taxi handling - return overview
        $totalTaxis = $gemini->countRows('taxi');
        $availableTaxis = $gemini->countRows('taxi', 'statut = ?', ['Disponible']);

        $brands = $gemini->fetchData('taxi', 'DISTINCT marque');
        $brandNames = array_column($brands, 'marque');

        $response = $gemini->ask($question, [
            'total_taxis' => $totalTaxis,
            'available_taxis' => $availableTaxis,
            'brands' => $brandNames
        ]);

        return $this->json(['response' => $response]);
    }

    /**
     * Handles listing tables in the database
     */
    private function handleListTables(string $question, GeminiService $gemini): JsonResponse
    {
        $tables = $gemini->getTables();
        $response = $gemini->ask($question, ['tables' => $tables]);
        return $this->json(['response' => $response]);
    }

    /**
     * Handles table structure queries
     */
    private function handleTableStructure(string $question, GeminiService $gemini): JsonResponse
    {
        $tableName = null;

        // Extract table name
        if (preg_match('/table\s+([a-z0-9_]+)/i', $question, $matches)) {
            $tableName = $matches[1];
        }

        if (!$tableName) {
            return $this->json(['response' => 'Please specify which table you want to know about.']);
        }

        $columns = $gemini->getTableColumns($tableName);
        $response = $gemini->ask($question, [
            'table' => $tableName,
            'columns' => $columns
        ]);

        return $this->json(['response' => $response]);
    }

    /**
     * Formats reservation data for better readability
     */
    private function formatReservations(array $reservations): array
    {
        return array_map(function ($reservation) {
            return [
                'id' => $reservation['reservation_id'],
                'date' => $reservation['reservation_date'],
                'price' => $reservation['total_price'],
                'status' => $reservation['status'],
                'user_id' => $reservation['user_id'] ?? null,
                'taxi_id' => $reservation['taxi_id'] ?? null
            ];
        }, $reservations);
    }

    /**
     * Formats taxi data for better readability
     */
    private function formatTaxis(array $taxis): array
    {
        return array_map(function ($taxi) {
            return [
                'id' => $taxi['id'],
                'immatriculation' => $taxi['immatriculation'],
                'marque' => $taxi['marque'],
                'modele' => $taxi['modele'],
                'statut' => $taxi['statut'],
                'annee' => $taxi['annee'] ?? null,
                'capacite' => $taxi['capacite'] ?? null
            ];
        }, $taxis);
    }
}