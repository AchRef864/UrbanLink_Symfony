<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* chatbot/index.html.twig */
class __TwigTemplate_2712b833cd411af047085f4e374a3c37 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Assistant d'Urgence</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
        body {
            font-family: \"Segoe UI\", sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #fdfbfb, #ebedee);
        }

        .chat-container {
            max-width: 500px;
            height: 90vh;
            margin: 30px auto;
            background-color: #fff;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
        }

        .chat-header {
            background-color: #dc3545;
            color: white;
            padding: 20px;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
            position: relative;
        }

        .chat-messages {
            flex: 1;
            padding: 15px;
            overflow-y: auto;
            background-color: #fafafa;
        }

        .message {
            padding: 12px 18px;
            margin: 10px 0;
            border-radius: 20px;
            max-width: 80%;
            word-wrap: break-word;
            position: relative;
            animation: fadeIn 0.3s ease-in-out;
        }

        .bot-message {
            background-color: #f0f0f0;
            align-self: flex-start;
        }

        .user-message {
            background-color: #dc3545;
            color: white;
            align-self: flex-end;
        }

        .chat-input {
            display: flex;
            padding: 15px;
            border-top: 1px solid #ddd;
            background-color: #fff;
        }

        .chat-input input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 25px;
            outline: none;
        }

        .chat-input button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 18px;
            margin-left: 10px;
            border-radius: 25px;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #bb2d3b;
        }

        .suggestions {
            padding: 10px 15px;
            background-color: #fff;
            border-top: 1px solid #eee;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .suggestion-btn {
            padding: 10px 15px;
            border-radius: 25px;
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.2s;
        }

        .suggestion-btn:hover {
            background-color: #e2e6ea;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .sos-button {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            z-index: 1000;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(220,53,69, 0.4); }
            70% { transform: scale(1.1); box-shadow: 0 0 0 15px rgba(220,53,69, 0); }
            100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(220,53,69, 0); }
        }
    </style>
</head>
<body>

<div class=\"chat-container\">
    <div class=\"chat-header\">
        🆘 Assistant d'Urgence
    </div>
    <div class=\"chat-messages\" id=\"chat-messages\">
        <div class=\"message bot-message\">
            👋 Bonjour ! Je suis votre assistant pour les situations d'urgence. Posez-moi une question ou cliquez sur un des boutons ci-dessous.
        </div>
    </div>
    <div class=\"chat-input\">
        <input type=\"text\" id=\"user-input\" placeholder=\"Écrivez ici...\">
        <button id=\"send-button\">Envoyer</button>
    </div>
    <div class=\"suggestions\">
        <button class=\"suggestion-btn\" onclick=\"sendSuggestion('Brûlure')\">🔥 Brûlure</button>
        <button class=\"suggestion-btn\" onclick=\"sendSuggestion('Saignement')\">🩸 Saignement</button>
        <button class=\"suggestion-btn\" onclick=\"sendSuggestion('Inconscience')\">😵 Inconscience</button>
        <button class=\"suggestion-btn\" onclick=\"sendSuggestion('Appeler les secours')\">🚑 Appeler les secours</button>
        <button class=\"suggestion-btn\" onclick=\"sendSuggestion('Premiers secours')\">🩺 Premiers secours</button>
    </div>
</div>

<button class=\"sos-button\" onclick=\"sendSuggestion('SOS')\">SOS</button>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const messagesContainer = document.getElementById('chat-messages');
        const userInput = document.getElementById('user-input');
        const sendButton = document.getElementById('send-button');

        function sendMessage() {
            const messageText = userInput.value.trim();
            if (messageText === '') return;

            addMessage(messageText, 'user-message');
            userInput.value = '';

            const formData = new FormData();
            formData.append('message', messageText);

            fetch('/chatbot/message', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    addMessage(data.message, 'bot-message');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                addMessage(\"Désolé, une erreur est survenue.\", 'bot-message');
            });
        }

        function addMessage(text, className) {
            const msg = document.createElement('div');
            msg.className = 'message ' + className;
            msg.innerHTML = text; // ✅ Utilise innerHTML pour interpréter <br>
            messagesContainer.appendChild(msg);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        window.sendSuggestion = function (text) {
            userInput.value = text;
            sendMessage();
        };

        sendButton.addEventListener('click', sendMessage);
        userInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') sendMessage();
        });
    });
</script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chatbot/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Assistant d'Urgence</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
        body {
            font-family: \"Segoe UI\", sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #fdfbfb, #ebedee);
        }

        .chat-container {
            max-width: 500px;
            height: 90vh;
            margin: 30px auto;
            background-color: #fff;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
        }

        .chat-header {
            background-color: #dc3545;
            color: white;
            padding: 20px;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
            position: relative;
        }

        .chat-messages {
            flex: 1;
            padding: 15px;
            overflow-y: auto;
            background-color: #fafafa;
        }

        .message {
            padding: 12px 18px;
            margin: 10px 0;
            border-radius: 20px;
            max-width: 80%;
            word-wrap: break-word;
            position: relative;
            animation: fadeIn 0.3s ease-in-out;
        }

        .bot-message {
            background-color: #f0f0f0;
            align-self: flex-start;
        }

        .user-message {
            background-color: #dc3545;
            color: white;
            align-self: flex-end;
        }

        .chat-input {
            display: flex;
            padding: 15px;
            border-top: 1px solid #ddd;
            background-color: #fff;
        }

        .chat-input input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 25px;
            outline: none;
        }

        .chat-input button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 18px;
            margin-left: 10px;
            border-radius: 25px;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #bb2d3b;
        }

        .suggestions {
            padding: 10px 15px;
            background-color: #fff;
            border-top: 1px solid #eee;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .suggestion-btn {
            padding: 10px 15px;
            border-radius: 25px;
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.2s;
        }

        .suggestion-btn:hover {
            background-color: #e2e6ea;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .sos-button {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            z-index: 1000;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(220,53,69, 0.4); }
            70% { transform: scale(1.1); box-shadow: 0 0 0 15px rgba(220,53,69, 0); }
            100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(220,53,69, 0); }
        }
    </style>
</head>
<body>

<div class=\"chat-container\">
    <div class=\"chat-header\">
        🆘 Assistant d'Urgence
    </div>
    <div class=\"chat-messages\" id=\"chat-messages\">
        <div class=\"message bot-message\">
            👋 Bonjour ! Je suis votre assistant pour les situations d'urgence. Posez-moi une question ou cliquez sur un des boutons ci-dessous.
        </div>
    </div>
    <div class=\"chat-input\">
        <input type=\"text\" id=\"user-input\" placeholder=\"Écrivez ici...\">
        <button id=\"send-button\">Envoyer</button>
    </div>
    <div class=\"suggestions\">
        <button class=\"suggestion-btn\" onclick=\"sendSuggestion('Brûlure')\">🔥 Brûlure</button>
        <button class=\"suggestion-btn\" onclick=\"sendSuggestion('Saignement')\">🩸 Saignement</button>
        <button class=\"suggestion-btn\" onclick=\"sendSuggestion('Inconscience')\">😵 Inconscience</button>
        <button class=\"suggestion-btn\" onclick=\"sendSuggestion('Appeler les secours')\">🚑 Appeler les secours</button>
        <button class=\"suggestion-btn\" onclick=\"sendSuggestion('Premiers secours')\">🩺 Premiers secours</button>
    </div>
</div>

<button class=\"sos-button\" onclick=\"sendSuggestion('SOS')\">SOS</button>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const messagesContainer = document.getElementById('chat-messages');
        const userInput = document.getElementById('user-input');
        const sendButton = document.getElementById('send-button');

        function sendMessage() {
            const messageText = userInput.value.trim();
            if (messageText === '') return;

            addMessage(messageText, 'user-message');
            userInput.value = '';

            const formData = new FormData();
            formData.append('message', messageText);

            fetch('/chatbot/message', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    addMessage(data.message, 'bot-message');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                addMessage(\"Désolé, une erreur est survenue.\", 'bot-message');
            });
        }

        function addMessage(text, className) {
            const msg = document.createElement('div');
            msg.className = 'message ' + className;
            msg.innerHTML = text; // ✅ Utilise innerHTML pour interpréter <br>
            messagesContainer.appendChild(msg);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        window.sendSuggestion = function (text) {
            userInput.value = text;
            sendMessage();
        };

        sendButton.addEventListener('click', sendMessage);
        userInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') sendMessage();
        });
    });
</script>

</body>
</html>
", "chatbot/index.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\chatbot\\index.html.twig");
    }
}
