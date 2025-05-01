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

/* urbanTalk.html.twig */
class __TwigTemplate_e276d882c0c8dfa4ad971de540f91e78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "urbanTalk.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "urbanTalk.html.twig"));

        // line 1
        yield "<div id=\"urbanTalkWidget\" class=\"hidden fixed bottom-6 right-6 w-80 bg-white rounded-lg shadow-xl border border-gray-200 z-50\">
    ";
        // line 3
        yield "    <div class=\"flex justify-between items-center p-4 bg-gradient-to-r from-blue-600 to-indigo-700 text-white rounded-t-lg\">
        <h3 class=\"font-bold text-lg flex items-center\">
            <i class=\"fas fa-robot mr-2\"></i> UrbanTalk
        </h3>
        <button id=\"urbanTalkClose\" class=\"text-white hover:text-gray-200\">
            <i class=\"fas fa-times\"></i>
        </button>
    </div>

    ";
        // line 13
        yield "    <div id=\"urbanTalkMessages\" class=\"h-64 p-4 overflow-y-auto bg-gray-50\">
        <div class=\"mb-4\">
            <div class=\"inline-block px-4 py-2 rounded-lg bg-blue-100 text-gray-800\">
                Hello Admin! Ask me anything about the database.
            </div>
        </div>
    </div>

    ";
        // line 22
        yield "    <div class=\"p-3 border-t border-gray-200 bg-white\">
        <div class=\"flex\">
            <input
                    id=\"urbanTalkInput\"
                    type=\"text\"
                    placeholder=\"Ask about data...\"
                    class=\"flex-1 px-4 py-2 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500\"
            >
            <button
                    id=\"urbanTalkSend\"
                    class=\"px-4 py-2 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700 transition\"
            >
                <i class=\"fas fa-paper-plane\"></i>
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const widget = document.getElementById('urbanTalkWidget');
        const trigger = document.getElementById('urbanTalkTrigger');
        const closeBtn = document.getElementById('urbanTalkClose');

        // Toggle chat
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            widget.classList.toggle('hidden');
        });

        closeBtn.addEventListener('click', () => {
            widget.classList.add('hidden');
        });

        // Message handling
        document.getElementById('urbanTalkSend').addEventListener('click', sendMessage);
        document.getElementById('urbanTalkInput').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendMessage();
        });

        async function sendMessage() {
            const input = document.getElementById('urbanTalkInput');
            const messages = document.getElementById('urbanTalkMessages');
            const message = input.value.trim();

            if (!message) return;

            // Add user message
            messages.innerHTML += userMessageTemplate(message);
            input.value = '';

            // Add loading indicator
            messages.innerHTML += loadingTemplate();
            messages.scrollTop = messages.scrollHeight;

            try {
                const response = await fetch('/urban-talk', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify({question: message})
                });

                const data = await response.json();

                // Remove loading and add response
                messages.querySelector('.urbanTalk-loading').remove();
                messages.innerHTML += botMessageTemplate(data.response);

            } catch (error) {
                messages.querySelector('.urbanTalk-loading').remove();
                messages.innerHTML += botMessageTemplate(\"Network error - please try again\");
            }

            messages.scrollTop = messages.scrollHeight;
        }

// Template helpers
        function userMessageTemplate(msg) {
            return `<div class=\"mb-4 text-right\">
        <div class=\"inline-block px-4 py-2 rounded-lg bg-indigo-600 text-white\">
            \${msg}
        </div>
    </div>`;
        }

        function botMessageTemplate(msg) {
            return `<div class=\"mb-4\">
        <div class=\"inline-block px-4 py-2 rounded-lg bg-blue-100 text-gray-800\">
            \${msg}
        </div>
    </div>`;
        }

        function loadingTemplate() {
            return `<div class=\"mb-4 urbanTalk-loading\">
        <div class=\"inline-block px-4 py-2 rounded-lg bg-gray-100 text-gray-500\">
            <i class=\"fas fa-spinner fa-spin mr-2\"></i> Thinking...
        </div>
    </div>`;
        }
    });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "urbanTalk.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  72 => 22,  62 => 13,  51 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"urbanTalkWidget\" class=\"hidden fixed bottom-6 right-6 w-80 bg-white rounded-lg shadow-xl border border-gray-200 z-50\">
    {# Header #}
    <div class=\"flex justify-between items-center p-4 bg-gradient-to-r from-blue-600 to-indigo-700 text-white rounded-t-lg\">
        <h3 class=\"font-bold text-lg flex items-center\">
            <i class=\"fas fa-robot mr-2\"></i> UrbanTalk
        </h3>
        <button id=\"urbanTalkClose\" class=\"text-white hover:text-gray-200\">
            <i class=\"fas fa-times\"></i>
        </button>
    </div>

    {# Messages #}
    <div id=\"urbanTalkMessages\" class=\"h-64 p-4 overflow-y-auto bg-gray-50\">
        <div class=\"mb-4\">
            <div class=\"inline-block px-4 py-2 rounded-lg bg-blue-100 text-gray-800\">
                Hello Admin! Ask me anything about the database.
            </div>
        </div>
    </div>

    {# Input #}
    <div class=\"p-3 border-t border-gray-200 bg-white\">
        <div class=\"flex\">
            <input
                    id=\"urbanTalkInput\"
                    type=\"text\"
                    placeholder=\"Ask about data...\"
                    class=\"flex-1 px-4 py-2 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500\"
            >
            <button
                    id=\"urbanTalkSend\"
                    class=\"px-4 py-2 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700 transition\"
            >
                <i class=\"fas fa-paper-plane\"></i>
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const widget = document.getElementById('urbanTalkWidget');
        const trigger = document.getElementById('urbanTalkTrigger');
        const closeBtn = document.getElementById('urbanTalkClose');

        // Toggle chat
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            widget.classList.toggle('hidden');
        });

        closeBtn.addEventListener('click', () => {
            widget.classList.add('hidden');
        });

        // Message handling
        document.getElementById('urbanTalkSend').addEventListener('click', sendMessage);
        document.getElementById('urbanTalkInput').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendMessage();
        });

        async function sendMessage() {
            const input = document.getElementById('urbanTalkInput');
            const messages = document.getElementById('urbanTalkMessages');
            const message = input.value.trim();

            if (!message) return;

            // Add user message
            messages.innerHTML += userMessageTemplate(message);
            input.value = '';

            // Add loading indicator
            messages.innerHTML += loadingTemplate();
            messages.scrollTop = messages.scrollHeight;

            try {
                const response = await fetch('/urban-talk', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify({question: message})
                });

                const data = await response.json();

                // Remove loading and add response
                messages.querySelector('.urbanTalk-loading').remove();
                messages.innerHTML += botMessageTemplate(data.response);

            } catch (error) {
                messages.querySelector('.urbanTalk-loading').remove();
                messages.innerHTML += botMessageTemplate(\"Network error - please try again\");
            }

            messages.scrollTop = messages.scrollHeight;
        }

// Template helpers
        function userMessageTemplate(msg) {
            return `<div class=\"mb-4 text-right\">
        <div class=\"inline-block px-4 py-2 rounded-lg bg-indigo-600 text-white\">
            \${msg}
        </div>
    </div>`;
        }

        function botMessageTemplate(msg) {
            return `<div class=\"mb-4\">
        <div class=\"inline-block px-4 py-2 rounded-lg bg-blue-100 text-gray-800\">
            \${msg}
        </div>
    </div>`;
        }

        function loadingTemplate() {
            return `<div class=\"mb-4 urbanTalk-loading\">
        <div class=\"inline-block px-4 py-2 rounded-lg bg-gray-100 text-gray-500\">
            <i class=\"fas fa-spinner fa-spin mr-2\"></i> Thinking...
        </div>
    </div>`;
        }
    });
</script>", "urbanTalk.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal - Copie (2)\\templates\\urbanTalk.html.twig");
    }
}
