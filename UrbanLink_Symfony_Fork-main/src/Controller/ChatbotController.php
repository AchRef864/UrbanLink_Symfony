<?php
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
        if (preg_match('/(urgence|urgent|sos|au secours)/i', $message)) {
            return "🚨 Urgence détectée !<br>Veuillez contacter immédiatement notre service d'assistance au +216 99 999 999<br>ou utiliser le bouton SOS dans l'application.<br>Nous sommes là pour vous aider 24h/24.";
        }

        if (preg_match('/(accident|collision|blessé|choc)/i', $message)) {
            return "🚑 Un accident a été signalé.<br>Veuillez rester calme et contacter les secours si nécessaire.<br>Notre équipe d'intervention est en route.<br>Vous pouvez aussi appeler notre support au +216 99 999 999.";
        }

        if (preg_match('/(premier secours|first aid|secours|geste de secours)/i', $message)) {
            return "Voici les gestes de premiers secours essentiels :<br>1. ⚠️ Sécurisez la zone.<br>2. 📞 Appelez les secours (SAMU : 190).<br>3. 🩹 Appliquez les gestes adaptés selon la situation (brûlure, saignement, inconscience...).<br><br>Souhaitez-vous des instructions pour un cas spécifique ? (ex: brûlure, saignement, inconscience)";
        }

        if (preg_match('/(brûlure|burn)/i', $message)) {
            return "🔥 En cas de brûlure :<br>1. Passez la zone brûlée sous l'eau tiède (15 minutes).<br>2. ❌ Ne mettez ni glace, ni pommade, ni corps gras.<br>3. 🧼 Couvrez la brûlure avec un tissu propre non adhérent.<br>4. 🚑 Consultez un médecin si la brûlure est grave ou étendue.";
        }

        if (preg_match('/(saignement|saigner|blood|bleeding)/i', $message)) {
            return "🩸 En cas de saignement :<br>1. Appuyez fermement sur la plaie avec un tissu propre.<br>2. Élevez le membre blessé si possible.<br>3. Maintenez la pression jusqu’à arrêt du saignement.<br>4. 🚑 Si ça ne s’arrête pas en 10 minutes, appelez les secours.";
        }

        if (preg_match('/(inconscient|évanoui|pas réveillé|unconscious|fainted)/i', $message)) {
            return "😵 En cas d’inconscience :<br>1. Vérifiez la respiration.<br>2. Si la personne ne respire pas : commencez un massage cardiaque.<br>3. Si elle respire : placez-la en position latérale de sécurité.<br>4. 📞 Appelez immédiatement le 190.";
        }

        if (preg_match('/(bonjour|salut|hello|bonsoir|coucou)/i', $message)) {
            return "👋 Bonjour ! Je suis votre assistant d'urgence.<br>Posez-moi des questions sur les premiers secours ou signalez un accident ou une urgence.";
        }

        if (preg_match('/(merci|thanks|remercie)/i', $message)) {
            return "Je vous en prie !<br>N'hésitez pas si vous avez d'autres questions.";
        }

        if (preg_match('/(aide|help|aider|comment ça marche)/i', $message)) {
            return "Je peux vous assister en cas d'urgence, d'accident,<br>ou vous fournir des gestes de premiers secours.<br>Que souhaitez-vous savoir ?";
        }

        return "Je ne suis pas sûr de comprendre votre demande.<br>Posez-moi une question sur les gestes de premiers secours ou signalez une urgence.";
    }
}
