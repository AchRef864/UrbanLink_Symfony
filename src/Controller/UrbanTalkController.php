<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{Request, JsonResponse};
use App\Service\GeminiService;
use Symfony\Component\Routing\Annotation\Route;

class UrbanTalkController extends AbstractController
{
    #[Route('/ask-python', name: 'ask_python', methods: ['POST'])]
    public function askPython(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $question = $data['question'] ?? '';

        if (!$question) {
            return new JsonResponse(['error' => 'Question non fournie'], 400);
        }

        $pythonScriptPath = $this->getParameter('kernel.project_dir') . '/database_handler.py'; // Chemin vers votre script Python

        $process = new Process(['python', $pythonScriptPath, $question]);
        $process->run();

        if ($process->isSuccessful()) {
            $response = $process->getOutput();
            try {
                $decodedResponse = json_decode($response, true);
                return new JsonResponse($decodedResponse);
            } catch (\JsonException $e) {
                return new JsonResponse(['error' => 'Erreur lors du décodage de la réponse JSON du script Python', 'details' => $e->getMessage()], 500);
            }
        } else {
            return new JsonResponse(['error' => 'Erreur lors de l\'exécution du script Python', 'details' => $process->getErrorOutput()], 500);
        }
    }

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
                return new JsonResponse(['error' => 'Please provide a question'], 400);
            }

            $question = trim(strtolower($data['question']));

            // Process the question through our routing system
            return $this->routeQuestion($question, $gemini);

        } catch (\Exception $e) {
            // Log l'erreur complète pour le débogage
            error_log("Erreur dans la méthode chat : " . $e->getMessage() . "\n" . $e->getTraceAsString());
            return new JsonResponse([
                'error' => 'Error processing your request',
                'details' => $e->getMessage() // Ajout des détails de l'erreur pour le client (en dev)
            ], 500);
        }
    }

    /**
     * Routes the question to appropriate handler based on content analysis
     */
    private function routeQuestion(string $question, GeminiService $gemini): JsonResponse
    {
        $question = trim(strtolower($question));

        // User related questions
        if ($this->containsAny($question, ['show users', 'list users', 'display users'])) {
            return $this->handleListUsers($question, $gemini);
        }
        if (preg_match('/(?:how many|count) users/i', $question)) {
            return $this->handleUserCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) user (?:named|with name) ([a-z0-9\s]+)/i', $question, $matches)) {
            return $this->handleFindUserByName($question, $gemini, trim($matches[1]));
        }

        // Abonnement related questions
        if (preg_match('/(?:show|list) abonnements/i', $question)) {
            return $this->handleListAbonnements($question, $gemini);
        }
        if (preg_match('/(?:how many|count) abonnements/i', $question)) {
            return $this->handleAbonnementCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) abonnement (?:by type|of type) ([a-z0-9\s]+)/i', $question, $matches)) {
            return $this->handleFindAbonnementByType($question, $gemini, trim($matches[1]));
        }

        // Abonnement Reservation related questions
        if (preg_match('/(?:show|list) abonnement reservations/i', $question)) {
            return $this->handleListAbonnementReservations($question, $gemini);
        }
        if (preg_match('/(?:how many|count) abonnement reservations/i', $question)) {
            return $this->handleAbonnementReservationCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) abonnement reservation (?:for user|user) ([a-z0-9\s]+)/i', $question, $matches)) {
            return $this->handleFindAbonnementReservationByUser($question, $gemini, trim($matches[1]));
        }

        // Avis related questions
        if (preg_match('/(?:show|list) avis/i', $question)) {
            return $this->handleListAvis($question, $gemini);
        }
        if (preg_match('/(?:how many|count) avis/i', $question)) {
            return $this->handleAvisCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) avis (?:by user|user) ([a-z0-9\s]+)/i', $question, $matches)) {
            return $this->handleFindAvisByUser($question, $gemini, trim($matches[1]));
        }

        // Course related questions
        if (preg_match('/(?:show|list) courses/i', $question)) {
            return $this->handleListCourses($question, $gemini);
        }
        if (preg_match('/(?:how many|count) courses/i', $question)) {
            return $this->handleCourseCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) course (?:from|departing from) ([a-z0-9\s]+) (?:to|arriving at) ([a-z0-9\s]+)/i', $question, $matches)) {
            return $this->handleFindCourseByDepartureDestination($question, $gemini, trim($matches[1]), trim($matches[2]));
        }

        // Maintenance related questions
        if (preg_match('/(?:show|list) maintenances/i', $question)) {
            return $this->handleListMaintenances($question, $gemini);
        }
        if (preg_match('/(?:how many|count) maintenances/i', $question)) {
            return $this->handleMaintenanceCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) maintenance (?:for vehicle|vehicle) ([0-9]+)/i', $question, $matches)) {
            return $this->handleFindMaintenanceByVehicle($question, $gemini, trim($matches[1]));
        }

        // Rating related questions
        if (preg_match('/(?:show|list) ratings/i', $question)) {
            return $this->handleListRatings($question, $gemini);
        }
        if (preg_match('/(?:how many|count) ratings/i', $question)) {
            return $this->handleRatingCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) rating (?:for taxi|taxi) ([0-9]+)/i', $question, $matches)) {
            return $this->handleFindRatingByTaxi($question, $gemini, trim($matches[1]));
        }

        // Reponse related questions
        if (preg_match('/(?:show|list) reponses/i', $question)) {
            return $this->handleListReponses($question, $gemini);
        }
        if (preg_match('/(?:how many|count) reponses/i', $question)) {
            return $this->handleReponseCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) reponse (?:for avis|avis) ([0-9]+)/i', $question, $matches)) {
            return $this->handleFindReponseByAvis($question, $gemini, trim($matches[1]));
        }

        // Reservations related questions
        if (preg_match('/(?:show|list) reservations/i', $question)) {
            return $this->handleListReservations($question, $gemini);
        }
        if (preg_match('/(?:how many|count) reservations/i', $question)) {
            return $this->handleReservationCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) reservation (?:for user|user) ([a-z0-9\s]+)/i', $question, $matches)) {
            return $this->handleFindReservationByUser($question, $gemini, trim($matches[1]));
        }

        // Taxi related questions
        if (preg_match('/(?:show|list) taxis/i', $question)) {
            return $this->handleListTaxis($question, $gemini);
        }
        if (preg_match('/(?:how many|count) taxis/i', $question)) {
            return $this->handleTaxiCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) taxi (?:by license|license) ([a-z0-9\s-]+)/i', $question, $matches)) {
            return $this->handleFindTaxiByLicense($question, $gemini, trim($matches[1]));
        }

        // Trajet related questions
        if (preg_match('/(?:show|list) trajets/i', $question)) {
            return $this->handleListTrajets($question, $gemini);
        }
        if (preg_match('/(?:how many|count) trajets/i', $question)) {
            return $this->handleTrajetCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) trajet (?:from|departure) ([a-z0-9\s]+) (?:to|destination) ([a-z0-9\s]+)/i', $question, $matches)) {
            return $this->handleFindTrajetByDepartureDestination($question, $gemini, trim($matches[1]), trim($matches[2]));
        }

        // Vehicle related questions
        if (preg_match('/(?:show|list) vehicles/i', $question)) {
            return $this->handleListVehicles($question, $gemini);
        }
        if (preg_match('/(?:how many|count) vehicles/i', $question)) {
            return $this->handleVehicleCount($question, $gemini);
        }
        if (preg_match('/(?:find|search) vehicle (?:by license plate|license) ([a-z0-9\s-]+)/i', $question, $matches)) {
            return $this->handleFindVehicleByLicensePlate($question, $gemini, trim($matches[1]));
        }
        if (trim(strtolower($question)) === 'show me users') {
            return $this->handleListUsers($question, $gemini);
        }

        // Default to LLM if no specific handler is found
        $response = $gemini->ask($question);
        return $this->json(['response' => $response]);
    }

    private function handleListUsers(string $question, GeminiService $gemini): JsonResponse
    {
        $users = $gemini->fetchData('users', ['name', 'email', 'phone']);
        return new JsonResponse(['response' => $this->formatListResponse($users, 'users')], 200);
    }

    private function handleUserCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('users');
        return new JsonResponse(['response' => "Il y a {$count} utilisateurs."], 200);
    }

    private function handleFindUserByName(string $question, GeminiService $gemini, string $name): JsonResponse
    {
        $user = $gemini->fetchData('users', ['name', 'email', 'phone'], 'name LIKE ?', ['%' . $name . '%']);
        return new JsonResponse(['response' => $this->formatListResponse($user, "utilisateur(s) avec le nom '$name'")], 200);
    }

    private function handleListAbonnements(string $question, GeminiService $gemini): JsonResponse
    {
        $abonnements = $gemini->fetchData('abonnement');
        return new JsonResponse(['response' => $this->formatListResponse($abonnements, 'abonnements')], 200);
    }

    private function handleAbonnementCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('abonnement');
        return new JsonResponse(['response' => "Il y a {$count} abonnements."], 200);
    }

    private function handleFindAbonnementByType(string $question, GeminiService $gemini, string $type): JsonResponse
    {
        $abonnements = $gemini->fetchData('abonnement', '*', 'type LIKE ?', ['%' . $type . '%']);
        return new JsonResponse(['response' => $this->formatListResponse($abonnements, "abonnement(s) de type '$type'")], 200);
    }

    private function handleListAbonnementReservations(string $question, GeminiService $gemini): JsonResponse
    {
        $abonnementReservations = $gemini->fetchData('abonnement_reservation');
        return new JsonResponse(['response' => $this->formatListResponse($abonnementReservations, 'réservations d\'abonnements')], 200);
    }

    private function handleAbonnementReservationCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('abonnement_reservation');
        return new JsonResponse(['response' => "Il y a {$count} réservations d'abonnements."], 200);
    }

    private function handleFindAbonnementReservationByUser(string $question, GeminiService $gemini, string $userIdentifier): JsonResponse
    {
        // You might want to search by user_id or fullname depending on your needs
        $abonnementReservations = $gemini->fetchData('abonnement_reservation', '*', 'user_id = ? OR fullname LIKE ?', [$userIdentifier, '%' . $userIdentifier . '%']);
        return new JsonResponse(['response' => $this->formatListResponse($abonnementReservations, "réservation(s) d'abonnement pour l'utilisateur '$userIdentifier'")], 200);
    }

    private function handleListAvis(string $question, GeminiService $gemini): JsonResponse
    {
        $avis = $gemini->fetchData('avis');
        return new JsonResponse(['response' => $this->formatListResponse($avis, 'avis')], 200);
    }

    private function handleAvisCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('avis');
        return new JsonResponse(['response' => "Il y a {$count} avis."], 200);
    }

    private function handleFindAvisByUser(string $question, GeminiService $gemini, string $userIdentifier): JsonResponse
    {
        $avis = $gemini->fetchData('avis', '*', 'user_id = ?', [$userIdentifier]);
        return new JsonResponse(['response' => $this->formatListResponse($avis, "avis de l'utilisateur '$userIdentifier'")], 200);
    }

    private function handleListCourses(string $question, GeminiService $gemini): JsonResponse
    {
        $courses = $gemini->fetchData('course');
        return new JsonResponse(['response' => $this->formatListResponse($courses, 'courses')], 200);
    }

    private function handleCourseCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('course');
        return new JsonResponse(['response' => "Il y a {$count} courses."], 200);
    }

    private function handleFindCourseByDepartureDestination(string $question, GeminiService $gemini, string $departure, string $destination): JsonResponse
    {
        $courses = $gemini->fetchData('course', '*', 'ville_depart LIKE ? AND ville_arrivee LIKE ?', ['%' . $departure . '%', '%' . $destination . '%']);
        return new JsonResponse(['response' => $this->formatListResponse($courses, "courses de '$departure' à '$destination'")], 200);
    }

    private function handleListMaintenances(string $question, GeminiService $gemini): JsonResponse
    {
        $maintenances = $gemini->fetchData('maintenance');
        return new JsonResponse(['response' => $this->formatListResponse($maintenances, 'maintenances')], 200);
    }

    private function handleMaintenanceCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('maintenance');
        return new JsonResponse(['response' => "Il y a {$count} maintenances."], 200);
    }

    private function handleFindMaintenanceByVehicle(string $question, GeminiService $gemini, string $vehicleId): JsonResponse
    {
        $maintenances = $gemini->fetchData('maintenance', '*', 'vehicle_id = ?', [$vehicleId]);
        return new JsonResponse(['response' => $this->formatListResponse($maintenances, "maintenances pour le véhicule #'$vehicleId'")], 200);
    }

    private function handleListRatings(string $question, GeminiService $gemini): JsonResponse
    {
        $ratings = $gemini->fetchData('rating');
        return new JsonResponse(['response' => $this->formatListResponse($ratings, 'ratings')], 200);
    }

    private function handleRatingCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('rating');
        return new JsonResponse(['response' => "Il y a {$count} ratings."], 200);
    }

    private function handleFindRatingByTaxi(string $question, GeminiService $gemini, string $taxiId): JsonResponse
    {
        $ratings = $gemini->fetchData('rating', '*', 'taxi_id = ?', [$taxiId]);
        return new JsonResponse(['response' => $this->formatListResponse($ratings, "ratings pour le taxi #'$taxiId'")], 200);
    }

    private function handleListReponses(string $question, GeminiService $gemini): JsonResponse
    {
        $reponses = $gemini->fetchData('reponse');
        return new JsonResponse(['response' => $this->formatListResponse($reponses, 'réponses')], 200);
    }

    private function handleReponseCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('reponse');
        return new JsonResponse(['response' => "Il y a {$count} réponses."], 200);
    }

    private function handleFindReponseByAvis(string $question, GeminiService $gemini, string $avisId): JsonResponse
    {
        $reponses = $gemini->fetchData('reponse', '*', 'avis_id = ?', [$avisId]);
        return new JsonResponse(['response' => $this->formatListResponse($reponses, "réponse(s) pour l'avis #'$avisId'")], 200);
    }

    private function handleListReservations(string $question, GeminiService $gemini): JsonResponse
    {
        $reservations = $gemini->fetchData('reservations');
        return new JsonResponse(['response' => $this->formatListResponse($reservations, 'réservations')], 200);
    }

    private function handleReservationCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('reservations');
        return new JsonResponse(['response' => "Il y a {$count} réservations."], 200);
    }

    private function handleFindReservationByUser(string $question, GeminiService $gemini, string $userIdentifier): JsonResponse
    {
        $reservations = $gemini->fetchData('reservations', '*', 'user_id = ?', [$userIdentifier]);
        return new JsonResponse(['response' => $this->formatListResponseForTable($reservations, 'réservations', ['reservation_id', 'reservation_date', 'status'])], 200);
    }

    private function handleListTaxis(string $question, GeminiService $gemini): JsonResponse
    {
        $taxis = $gemini->fetchData('taxi');
        return new JsonResponse(['response' => $this->formatListResponseForTable($taxis, 'taxis', ['id', 'immatriculation', 'marque', 'modele', 'statut'])], 200);
    }

    private function handleTaxiCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('taxi');
        return new JsonResponse(['response' => "Il y a {$count} taxis."], 200);
    }

    private function handleFindTaxiByLicense(string $question, GeminiService $gemini, string $license): JsonResponse
    {
        $taxis = $gemini->fetchData('taxi', '*', 'licence_numero LIKE ?', ['%' . $license . '%']);
        return new JsonResponse(['response' => $this->formatListResponseForTable($taxis, "taxi(s) avec la licence '$license'", ['id', 'immatriculation', 'marque', 'modele', 'statut'])], 200);
    }

    private function handleListTrajets(string $question, GeminiService $gemini): JsonResponse
    {
        $trajets = $gemini->fetchData('trajet');
        return new JsonResponse(['response' => $this->formatListResponseForTable($trajets, 'trajets', ['id', 'departure', 'destination', 'departure_time', 'arrival_time'])], 200);
    }

    private function handleTrajetCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('trajet');
        return new JsonResponse(['response' => "Il y a {$count} trajets."], 200);
    }

    private function handleFindTrajetByDepartureDestination(string $question, GeminiService $gemini, string $departure, string $destination): JsonResponse
    {
        $trajets = $gemini->fetchData('trajet', '*', 'departure LIKE ? AND destination LIKE ?', ['%' . $departure . '%', '%' . $destination . '%']);
        return new JsonResponse(['response' => $this->formatListResponseForTable($trajets, "trajet(s) de '$departure' à '$destination'", ['id', 'departure', 'destination', 'departure_time', 'arrival_time'])], 200);
    }

    private function handleListVehicles(string $question, GeminiService $gemini): JsonResponse
    {
        $vehicles = $gemini->fetchData('Vehicle');
        return new JsonResponse(['response' => $this->formatListResponseForTable($vehicles, 'véhicules', ['id', 'brand', 'model', 'licensePlate', 'type'])], 200);
    }

    private function handleVehicleCount(string $question, GeminiService $gemini): JsonResponse
    {
        $count = $gemini->countRows('Vehicle');
        return new JsonResponse(['response' => "Il y a {$count} véhicules."], 200);
    }

    private function handleFindVehicleByLicensePlate(string $question, GeminiService $gemini, string $licensePlate): JsonResponse
    {
        $vehicles = $gemini->fetchData('Vehicle', '*', 'licensePlate LIKE ?', ['%' . $licensePlate . '%']);
        return new JsonResponse(['response' => $this->formatListResponseForTable($vehicles, "véhicule(s) avec la plaque d'immatriculation '$licensePlate'", ['id', 'brand', 'model', 'licensePlate', 'type'])], 200);
    }

    private function formatListResponseForTable(array $data, string $entityName, array $columnsToShow): string
    {
        if (empty($data)) {
            return "Aucun " . $entityName . " trouvé.";
        }

        $response = "Liste des " . $entityName . " :\n";
        foreach ($data as $item) {
            $rowDetails = [];
            foreach ($columnsToShow as $column) {
                if (isset($item[$column])) {
                    $rowDetails[] = ucfirst(str_replace('_', ' ', $column)) . ": " . $item[$column];
                }
            }
            $response .= "- " . implode(', ', $rowDetails) . "\n";
        }
        return $response;
    }

    private function containsAny(string $haystack, array $needles): bool
    {
        foreach ($needles as $needle) {
            if (stripos($haystack, $needle) !== false) {
                return true;
            }
        }
        return false;
    }

    /**
     * Handles user listing queries
     */

    private function formatUserList(array $users): array
    {
        return array_map(function ($user) {
            return ['Nom' => $user['name'], 'Email' => $user['email'], 'Téléphone' => $user['phone']];
        }, $users);
    }

    private function handleCheckUserExistence(string $question, GeminiService $gemini, string $username): JsonResponse
    {
        $userExists = $gemini->countRows('users', 'name = ?', [$username]) > 0;

        $context = ['username' => $username, 'user_exists' => $userExists];

        $response = $gemini->ask($question, $context);
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
        try {
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

        } catch (\Exception $e) {
            // Ceci va enregistrer l'erreur dans vos logs
            error_log("Erreur dans handleHowManyUsers : " . $e->getMessage());
            return new JsonResponse([
                'response' => 'Error processing user count request',
                'error' => $e->getMessage()
            ], 500);
        }
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

    public function fetchData(string $table, array|string $select = '*', string $where = '', array $params = []): array
    {
        $conn = $this->doctrine->getConnection();
        $sql = "SELECT " . (is_array($select) ? implode(', ', $select) : $select) . " FROM " . $table;

        if (!empty($where)) {
            $sql .= " WHERE " . $where;
        }

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery($params); // Utilisez executeQuery pour exécuter et obtenir un ResultSet
        return $resultSet->fetchAllAssociative(); // Récupérez les résultats associatifs à partir du ResultSet
    }

    public function countRows(string $table, string $where = '', array $params = []): int
    {
        $conn = $this->doctrine->getConnection();
        $sql = "SELECT COUNT(*) FROM " . $table;

        if (!empty($where)) {
            $sql .= " WHERE " . $where;
        }

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery($params);
        return (int) $resultSet->fetchOne(); // Récupérez le nombre de lignes
    }
    public function getTables(): array
    {
        $conn = $this->doctrine->getConnection();
        $sql = "SHOW TABLES";
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        return $resultSet->fetchAllAssociative();
    }

    public function getTableColumns(string $table): array
    {
        $conn = $this->doctrine->getConnection();
        $sql = "DESCRIBE " . $table;
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        return $resultSet->fetchAllAssociative();
    }

}