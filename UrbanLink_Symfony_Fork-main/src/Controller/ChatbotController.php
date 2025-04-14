<?php
// src/Controller/ChatbotController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ChatbotController extends AbstractController
{
    #[Route('/chatbot', name: 'app_chatbot')]
    public function index(): Response
    {
        return $this->render('chatbot/index.html.twig');
    }

    #[Route('/chatbot/message', name: 'app_chatbot_message')]
    public function message(Request $request): JsonResponse
    {
        $userMessage = $request->request->get('message', '');
        $userMessage = strtolower(trim($userMessage));

        $response = $this->getResponse($userMessage);

        return $this->json([
            'message' => $response
        ]);
    }

    private function getResponse(string $message): string
    {
        // Cas d'urgence
        if (preg_match('/(urgence|urgent|sos|au secours)/i', $message)) {
            return '🚨 Urgence détectée ! Veuillez contacter immédiatement notre service d\'assistance au +216 99 999 999 ou utiliser le bouton SOS dans l\'application. Nous sommes là pour vous aider 24h/24.';
        }

        // Cas d'accident
        if (preg_match('/(accident|collision|blessé|choc)/i', $message)) {
            return '🚑 Un accident a été signalé. Veuillez rester calme et contacter les secours si nécessaire. Notre équipe d\'intervention est en route. Vous pouvez aussi appeler notre support au +216 99 999 999.';
        }

        // Premiers secours - Vue générale
        if (preg_match('/(premier secours|first aid|secours|geste de secours)/i', $message)) {
            return 'Voici les gestes de premiers secours essentiels : 
                1. ⚠️ Sécurisez la zone. 
                2. 📞 Appelez les secours (SAMU : 190).
                3. 🩹 Appliquez les gestes adaptés selon la situation (brûlure, saignement, inconscience...).

                Souhaitez-vous des instructions pour un cas spécifique ? (ex: brûlure, saignement, inconscience)';
        }

        // Brûlure
        if (preg_match('/(brûlure|burn)/i', $message)) {
            return '🔥 En cas de brûlure :
                1. Passez la zone brûlée sous l\'eau tiède (15 minutes).
                2. ❌ Ne mettez ni glace, ni pommade, ni corps gras.
                3. 🧼 Couvrez la brûlure avec un tissu propre non adhérent.
                4. 🚑 Consultez un médecin si la brûlure est grave ou étendue.';
        }

        // Saignement
        if (preg_match('/(saignement|saigner|blood|bleeding)/i', $message)) {
            return '🩸 En cas de saignement :
                1. Appuyez fermement sur la plaie avec un tissu propre.
                2. Élevez le membre blessé si possible.
                3. Maintenez la pression jusqu’à arrêt du saignement.
                4. 🚑 Si ça ne s’arrête pas en 10 minutes, appelez les secours.';
        }

        // Inconscience
        if (preg_match('/(inconscient|évanoui|pas réveillé|unconscious|fainted)/i', $message)) {
            return '😵 En cas d’inconscience :
                1. Vérifiez la respiration.
                2. Si la personne ne respire pas : commencez un massage cardiaque.
                3. Si elle respire : placez-la en position latérale de sécurité.
                4. 📞 Appelez immédiatement le 190.';
        }

        // Salutations
        if (preg_match('/(bonjour|salut|hello|bonsoir|coucou)/i', $message)) {
            return 'Bonjour ! Je suis votre assistant d\'urgence. Posez-moi des questions sur les premiers secours ou signalez un accident ou une urgence.';
        }

        // Remerciements
        if (preg_match('/(merci|thanks|remercie)/i', $message)) {
            return 'Je vous en prie ! N\'hésitez pas si vous avez d\'autres questions.';
        }

        // Aide
        if (preg_match('/(aide|help|aider|comment ça marche)/i', $message)) {
            return 'Je peux vous assister en cas d\'urgence, d\'accident, ou vous fournir des gestes de premiers secours. Que souhaitez-vous savoir ?';
        }

        // Réponse par défaut
        return 'Je ne suis pas sûr de comprendre votre demande. Posez-moi une question sur les gestes de premiers secours ou signalez une urgence.';
    }
}
