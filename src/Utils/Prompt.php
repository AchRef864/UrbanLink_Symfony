<?php
// src/Utils/Prompt.php
namespace App\Utils;

class Prompt
{
    /**
     * Construit le prompt pour une réclamation taxi.
     */
    public static function getAvisPrompt(string $userMessage): string
    {
        // Ici, vous pouvez reprendre la logique de votre ancien Prompt.java
        // Par ex. ajouter contexte, instructions, etc.
        return "Utilisateur demande une réclamation : " . $userMessage;
    }

    // Si vous aviez d'autres prompts, ajoutez-les ici :
    // public static function getAbonnementPrompt(string $msg): string { ... }
}
