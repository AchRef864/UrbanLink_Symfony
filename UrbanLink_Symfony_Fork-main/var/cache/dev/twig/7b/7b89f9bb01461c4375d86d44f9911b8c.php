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

/* reservation/affichage.html.twig */
class __TwigTemplate_ee54870db65667a4f28509865c79b3f9 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/affichage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/affichage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/affichage.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Trajets List";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* Styles pour le chatbot popup */
    .chatbot-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5);
        z-index: 1000;
        display: none;
    }

    .chatbot-container {
        position: fixed;
        bottom: 80px;
        right: 30px;
        width: 400px;
        height: 600px;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        z-index: 1001;
        display: none;
    }

    .chatbot-header {
        background-color: #dc3545;
        color: white;
        padding: 15px;
        font-size: 18px;
        text-align: center;
        font-weight: bold;
    }

    .chatbot-messages {
        flex: 1;
        padding: 15px;
        overflow-y: auto;
        background-color: #fafafa;
    }

    .chatbot-message {
        padding: 10px 15px;
        margin: 8px 0;
        border-radius: 18px;
        max-width: 80%;
        word-wrap: break-word;
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

    .chatbot-input {
        display: flex;
        padding: 15px;
        border-top: 1px solid #ddd;
        background-color: #fff;
    }

    .chatbot-input input {
        flex: 1;
        padding: 10px 15px;
        border: 1px solid #ccc;
        border-radius: 25px;
        outline: none;
    }

    .chatbot-input button {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 10px 15px;
        margin-left: 10px;
        border-radius: 25px;
        cursor: pointer;
    }

    .chatbot-suggestions {
        padding: 10px;
        background-color: #fff;
        border-top: 1px solid #eee;
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .chatbot-suggestion {
        padding: 8px 12px;
        border-radius: 20px;
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        cursor: pointer;
        font-size: 13px;
        transition: all 0.2s;
    }

    .chatbot-suggestion:hover {
        background-color: #e2e6ea;
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
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        z-index: 999;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(220,53,69, 0.4); }
        70% { transform: scale(1.1); box-shadow: 0 0 0 15px rgba(220,53,69, 0); }
        100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(220,53,69, 0); }
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(5px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 155
        yield "<div style=\"margin-left: 280px;\">
  <!-- Bouton SOS flottant -->
  <button id=\"sosButton\" class=\"sos-button\">SOS</button>

  <!-- Chatbot Popup -->
  <div id=\"chatbotOverlay\" class=\"chatbot-overlay\"></div>
  <div id=\"chatbotPopup\" class=\"chatbot-container\">
    <div class=\"chatbot-header\">
      🆘 Assistant d'Urgence
    </div>
    <div class=\"chatbot-messages\" id=\"chatbotMessages\">
      <div class=\"chatbot-message bot-message\">
        👋 Bonjour ! Je suis votre assistant pour les situations d'urgence. Posez-moi une question ou cliquez sur un des boutons ci-dessous.
      </div>
    </div>
    <div class=\"chatbot-suggestions\">
      <div class=\"chatbot-suggestion\" onclick=\"sendSuggestion('Brûlure')\">🔥 Brûlure</div>
      <div class=\"chatbot-suggestion\" onclick=\"sendSuggestion('Saignement')\">🩸 Saignement</div>
      <div class=\"chatbot-suggestion\" onclick=\"sendSuggestion('Inconscience')\">😵 Inconscience</div>
      <div class=\"chatbot-suggestion\" onclick=\"sendSuggestion('Appeler les secours')\">🚑 Secours</div>
    </div>
    <div class=\"chatbot-input\">
      <input type=\"text\" id=\"userMessage\" placeholder=\"Écrivez ici...\">
      <button id=\"sendMessage\">Envoyer</button>
    </div>
  </div>

  <!-- Le reste de votre contenu existant -->
  <div class=\"container mx-auto px-2 py-6\">
    ";
        // line 185
        yield "    <div class=\"flex flex-col space-y-4 mb-6\">
      ";
        // line 187
        yield "      <div class=\"flex justify-between items-center\">
        <h2 class=\"text-lg font-semibold text-gray-800\">Trajets Timeline</h2>
      
      </div>
      
      ";
        // line 193
        yield "      <div class=\"flex justify-center\">
        <form method=\"get\" action=\"";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
        yield "\" class=\"w-full max-w-md\">
          <div class=\"relative flex\">
            <input type=\"text\" 
                   name=\"search\" 
                   value=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 198, $this->source); })()), "html", null, true);
        yield "\" 
                   placeholder=\"Rechercher un trajet par Lieu de départ ou Destination...\" 
                   class=\"w-full px-4 py-2.5 text-sm border border-gray-300 rounded-l-lg focus:ring-blue-500 focus:border-blue-500\">
            ";
        // line 201
        if ((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 201, $this->source); })())) {
            // line 202
            yield "              <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
            yield "\" class=\"absolute right-12 top-3 text-gray-400 hover:text-gray-600\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\" />
                </svg>
              </a>
            ";
        }
        // line 208
        yield "            <button type=\"submit\" class=\"px-4 py-2.5 bg-gray-100 text-gray-800 border border-l-0 border-gray-300 rounded-r-lg hover:bg-gray-200 flex items-center justify-center transition-colors duration-200\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                <path fill-rule=\"evenodd\" d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\" clip-rule=\"evenodd\" />
              </svg>
            </button>
          </div>
        </form>
      </div>
    </div>
    
    ";
        // line 219
        yield "    <div class=\"flex space-x-2 mb-6\">
      <a href=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage", ["search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 220, $this->source); })())]), "html", null, true);
        yield "\" 
         class=\"px-3 py-1 text-xs rounded-full ";
        // line 221
        yield (( !(isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 221, $this->source); })())) ? ("bg-gray-800 text-white") : ("bg-gray-200 text-gray-800"));
        yield "\">
          Tous
      </a>
      <a href=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage", ["filter_type" => "PublicTransport", "search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 224, $this->source); })())]), "html", null, true);
        yield "\" 
         class=\"px-3 py-1 text-xs rounded-full ";
        // line 225
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 225, $this->source); })()) == "PublicTransport")) ? ("bg-blue-800 text-white") : ("bg-blue-200 text-blue-800"));
        yield "\">
          Transport Public
      </a>
      <a href=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage", ["filter_type" => "Carpooling", "search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 228, $this->source); })())]), "html", null, true);
        yield "\" 
         class=\"px-3 py-1 text-xs rounded-full ";
        // line 229
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 229, $this->source); })()) == "Carpooling")) ? ("bg-green-800 text-white") : ("bg-green-200 text-green-800"));
        yield "\">
          Covoiturage
      </a>
    </div>
    
    ";
        // line 235
        yield "    ";
        if (((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 235, $this->source); })()) || (isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 235, $this->source); })()))) {
            // line 236
            yield "      <div class=\"mb-4 text-sm text-gray-600\">
        ";
            // line 237
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 237, $this->source); })())) > 0)) {
                // line 238
                yield "          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 238, $this->source); })())), "html", null, true);
                yield " résultat(s) trouvé(s)
          ";
                // line 239
                if ((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 239, $this->source); })())) {
                    yield " pour \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 239, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                // line 240
                yield "          ";
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 240, $this->source); })()) == "PublicTransport")) {
                    yield " (Transport Public)";
                }
                // line 241
                yield "          ";
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 241, $this->source); })()) == "Carpooling")) {
                    yield " (Covoiturage)";
                }
                // line 242
                yield "        ";
            }
            // line 243
            yield "      </div>
    ";
        }
        // line 245
        yield "    
    ";
        // line 247
        yield "    <div class=\"space-y-4\">
      ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 248, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 249
            yield "      <div class=\"bg-white p-4 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200\">
        <div class=\"flex justify-between items-start\">
          <div>
            <h3 class=\"font-medium text-gray-900\">";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departure", [], "any", false, false, false, 252), "html", null, true);
            yield " → ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "destination", [], "any", false, false, false, 252), "html", null, true);
            yield "</h3>
            <div class=\"mt-1 text-xs text-gray-500\">
              <span class=\"font-medium\">";
            // line 254
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departureTime", [], "any", false, false, false, 254)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departureTime", [], "any", false, false, false, 254), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
            yield "</span>
              <span class=\"mx-1\">→</span>
              <span class=\"font-medium\">";
            // line 256
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "arrivalTime", [], "any", false, false, false, 256)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "arrivalTime", [], "any", false, false, false, 256), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
            yield "</span>
            </div>
          </div>
          <span class=\"px-2 py-1 text-xs font-semibold rounded-full 
            ";
            // line 260
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", false, false, false, 260) == "PublicTransport")) {
                // line 261
                yield "              bg-blue-100 text-blue-800
            ";
            } else {
                // line 263
                yield "              bg-green-100 text-green-800
            ";
            }
            // line 264
            yield "\">
            ";
            // line 265
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", true, true, false, 265) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", false, false, false, 265)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", false, false, false, 265), "html", null, true)) : ("N/A"));
            yield "
          </span>
        </div>
        
        <div class=\"mt-2 text-sm text-gray-600\">
          <div class=\"grid grid-cols-4 gap-2\">
            <div>
              <span class=\"font-medium\">Distance:</span> ";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "distance", [], "any", false, false, false, 272), 2), "html", null, true);
            yield " km
            </div>
            <div>
              <span class=\"font-medium\">Durée:</span> 
              ";
            // line 276
            if (CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "duration", [], "any", false, false, false, 276)) {
                // line 277
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "duration", [], "any", false, false, false, 277), "html", null, true);
                yield "
              ";
            } else {
                // line 279
                yield "                N/A
              ";
            }
            // line 281
            yield "            </div>
            <div>
              <span class=\"font-medium\">Prix:</span> ";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "price", [], "any", false, false, false, 283), 2), "html", null, true);
            yield " €
            </div>
            <div>
              <span class=\"font-medium\">Places:</span> 
              ";
            // line 287
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "availableSeats", [], "any", false, false, false, 287))) {
                // line 288
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "availableSeats", [], "any", false, false, false, 288), "html", null, true);
                yield "
              ";
            } else {
                // line 290
                yield "                N/A
              ";
            }
            // line 292
            yield "            </div>
          </div>
        </div>
        
        <div class=\"mt-3 flex justify-end space-x-2\">
          <a href=\"";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new", ["trajetId" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 297)]), "html", null, true);
            yield "\" 
             class=\"text-blue-500 hover:text-blue-700 p-1 transition-colors duration-200\">
            Réserver
          </a>
        </div>
      </div>
      ";
            $context['_iterated'] = true;
        }
        // line 303
        if (!$context['_iterated']) {
            // line 304
            yield "      <div class=\"text-center py-8 text-gray-500\">
        ";
            // line 305
            if ((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 305, $this->source); })())) {
                // line 306
                yield "          Aucun trajet trouvé pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 306, $this->source); })()), "html", null, true);
                yield "\"
          ";
                // line 307
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 307, $this->source); })()) == "PublicTransport")) {
                    yield " (Transport Public)";
                }
                // line 308
                yield "          ";
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 308, $this->source); })()) == "Carpooling")) {
                    yield " (Covoiturage)";
                }
                // line 309
                yield "        ";
            } else {
                // line 310
                yield "          Aucun trajet trouvé.
        ";
            }
            // line 312
            yield "      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trajet'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        yield "    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 319
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 320
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'affichage du chatbot
    const sosButton = document.getElementById('sosButton');
    const chatbotOverlay = document.getElementById('chatbotOverlay');
    const chatbotPopup = document.getElementById('chatbotPopup');
    
    sosButton.addEventListener('click', function() {
        chatbotOverlay.style.display = 'block';
        chatbotPopup.style.display = 'flex';
    });
    
    chatbotOverlay.addEventListener('click', function() {
        chatbotOverlay.style.display = 'none';
        chatbotPopup.style.display = 'none';
    });

    // Fonctionnalité du chatbot
    const messagesContainer = document.getElementById('chatbotMessages');
    const userInput = document.getElementById('userMessage');
    const sendButton = document.getElementById('sendMessage');

    function sendMessage() {
        const messageText = userInput.value.trim();
        if (messageText === '') return;

        addMessage(messageText, 'user-message');
        userInput.value = '';

        fetch('";
        // line 351
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chatbot_message");
        yield "', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'message=' + encodeURIComponent(messageText)
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
        msg.className = 'chatbot-message ' + className;
        msg.textContent = text;
        messagesContainer.appendChild(msg);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    window.sendSuggestion = function(text) {
        userInput.value = text;
        sendMessage();
    };

    sendButton.addEventListener('click', sendMessage);
    userInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') sendMessage();
    });

    // Fonction de confirmation de suppression
    window.confirmDelete = function(trajetId) {
        Swal.fire({
            title: 'Êtes-vous sûr?',
            text: \"Vous ne pourrez pas annuler cette action!\",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimer!',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + trajetId).submit();
            }
        });
    };
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reservation/affichage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  639 => 351,  605 => 320,  592 => 319,  578 => 314,  571 => 312,  567 => 310,  564 => 309,  559 => 308,  555 => 307,  550 => 306,  548 => 305,  545 => 304,  543 => 303,  532 => 297,  525 => 292,  521 => 290,  515 => 288,  513 => 287,  506 => 283,  502 => 281,  498 => 279,  492 => 277,  490 => 276,  483 => 272,  473 => 265,  470 => 264,  466 => 263,  462 => 261,  460 => 260,  453 => 256,  448 => 254,  441 => 252,  436 => 249,  431 => 248,  428 => 247,  425 => 245,  421 => 243,  418 => 242,  413 => 241,  408 => 240,  402 => 239,  397 => 238,  395 => 237,  392 => 236,  389 => 235,  381 => 229,  377 => 228,  371 => 225,  367 => 224,  361 => 221,  357 => 220,  354 => 219,  342 => 208,  332 => 202,  330 => 201,  324 => 198,  317 => 194,  314 => 193,  307 => 187,  304 => 185,  273 => 155,  260 => 154,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trajets List{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* Styles pour le chatbot popup */
    .chatbot-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5);
        z-index: 1000;
        display: none;
    }

    .chatbot-container {
        position: fixed;
        bottom: 80px;
        right: 30px;
        width: 400px;
        height: 600px;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        z-index: 1001;
        display: none;
    }

    .chatbot-header {
        background-color: #dc3545;
        color: white;
        padding: 15px;
        font-size: 18px;
        text-align: center;
        font-weight: bold;
    }

    .chatbot-messages {
        flex: 1;
        padding: 15px;
        overflow-y: auto;
        background-color: #fafafa;
    }

    .chatbot-message {
        padding: 10px 15px;
        margin: 8px 0;
        border-radius: 18px;
        max-width: 80%;
        word-wrap: break-word;
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

    .chatbot-input {
        display: flex;
        padding: 15px;
        border-top: 1px solid #ddd;
        background-color: #fff;
    }

    .chatbot-input input {
        flex: 1;
        padding: 10px 15px;
        border: 1px solid #ccc;
        border-radius: 25px;
        outline: none;
    }

    .chatbot-input button {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 10px 15px;
        margin-left: 10px;
        border-radius: 25px;
        cursor: pointer;
    }

    .chatbot-suggestions {
        padding: 10px;
        background-color: #fff;
        border-top: 1px solid #eee;
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .chatbot-suggestion {
        padding: 8px 12px;
        border-radius: 20px;
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        cursor: pointer;
        font-size: 13px;
        transition: all 0.2s;
    }

    .chatbot-suggestion:hover {
        background-color: #e2e6ea;
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
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        z-index: 999;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(220,53,69, 0.4); }
        70% { transform: scale(1.1); box-shadow: 0 0 0 15px rgba(220,53,69, 0); }
        100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(220,53,69, 0); }
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(5px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
{% endblock %}

{% block body %}
<div style=\"margin-left: 280px;\">
  <!-- Bouton SOS flottant -->
  <button id=\"sosButton\" class=\"sos-button\">SOS</button>

  <!-- Chatbot Popup -->
  <div id=\"chatbotOverlay\" class=\"chatbot-overlay\"></div>
  <div id=\"chatbotPopup\" class=\"chatbot-container\">
    <div class=\"chatbot-header\">
      🆘 Assistant d'Urgence
    </div>
    <div class=\"chatbot-messages\" id=\"chatbotMessages\">
      <div class=\"chatbot-message bot-message\">
        👋 Bonjour ! Je suis votre assistant pour les situations d'urgence. Posez-moi une question ou cliquez sur un des boutons ci-dessous.
      </div>
    </div>
    <div class=\"chatbot-suggestions\">
      <div class=\"chatbot-suggestion\" onclick=\"sendSuggestion('Brûlure')\">🔥 Brûlure</div>
      <div class=\"chatbot-suggestion\" onclick=\"sendSuggestion('Saignement')\">🩸 Saignement</div>
      <div class=\"chatbot-suggestion\" onclick=\"sendSuggestion('Inconscience')\">😵 Inconscience</div>
      <div class=\"chatbot-suggestion\" onclick=\"sendSuggestion('Appeler les secours')\">🚑 Secours</div>
    </div>
    <div class=\"chatbot-input\">
      <input type=\"text\" id=\"userMessage\" placeholder=\"Écrivez ici...\">
      <button id=\"sendMessage\">Envoyer</button>
    </div>
  </div>

  <!-- Le reste de votre contenu existant -->
  <div class=\"container mx-auto px-2 py-6\">
    {# Header with Search and Add Button - Nouvelle disposition #}
    <div class=\"flex flex-col space-y-4 mb-6\">
      {# Première ligne avec titre et bouton Ajouter #}
      <div class=\"flex justify-between items-center\">
        <h2 class=\"text-lg font-semibold text-gray-800\">Trajets Timeline</h2>
      
      </div>
      
      {# Deuxième ligne avec barre de recherche centrée #}
      <div class=\"flex justify-center\">
        <form method=\"get\" action=\"{{ path('reservation_affichage') }}\" class=\"w-full max-w-md\">
          <div class=\"relative flex\">
            <input type=\"text\" 
                   name=\"search\" 
                   value=\"{{ search_term }}\" 
                   placeholder=\"Rechercher un trajet par Lieu de départ ou Destination...\" 
                   class=\"w-full px-4 py-2.5 text-sm border border-gray-300 rounded-l-lg focus:ring-blue-500 focus:border-blue-500\">
            {% if search_term %}
              <a href=\"{{ path('reservation_affichage') }}\" class=\"absolute right-12 top-3 text-gray-400 hover:text-gray-600\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\" />
                </svg>
              </a>
            {% endif %}
            <button type=\"submit\" class=\"px-4 py-2.5 bg-gray-100 text-gray-800 border border-l-0 border-gray-300 rounded-r-lg hover:bg-gray-200 flex items-center justify-center transition-colors duration-200\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                <path fill-rule=\"evenodd\" d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\" clip-rule=\"evenodd\" />
              </svg>
            </button>
          </div>
        </form>
      </div>
    </div>
    
    {# Filter Buttons #}
    <div class=\"flex space-x-2 mb-6\">
      <a href=\"{{ path('reservation_affichage', {'search': search_term}) }}\" 
         class=\"px-3 py-1 text-xs rounded-full {{ not current_filter ? 'bg-gray-800 text-white' : 'bg-gray-200 text-gray-800' }}\">
          Tous
      </a>
      <a href=\"{{ path('reservation_affichage', {'filter_type': 'PublicTransport', 'search': search_term}) }}\" 
         class=\"px-3 py-1 text-xs rounded-full {{ current_filter == 'PublicTransport' ? 'bg-blue-800 text-white' : 'bg-blue-200 text-blue-800' }}\">
          Transport Public
      </a>
      <a href=\"{{ path('reservation_affichage', {'filter_type': 'Carpooling', 'search': search_term}) }}\" 
         class=\"px-3 py-1 text-xs rounded-full {{ current_filter == 'Carpooling' ? 'bg-green-800 text-white' : 'bg-green-200 text-green-800' }}\">
          Covoiturage
      </a>
    </div>
    
    {# Results Count #}
    {% if search_term or current_filter %}
      <div class=\"mb-4 text-sm text-gray-600\">
        {% if trajets|length > 0 %}
          {{ trajets|length }} résultat(s) trouvé(s)
          {% if search_term %} pour \"{{ search_term }}\"{% endif %}
          {% if current_filter == 'PublicTransport' %} (Transport Public){% endif %}
          {% if current_filter == 'Carpooling' %} (Covoiturage){% endif %}
        {% endif %}
      </div>
    {% endif %}
    
    {# Trajets List #}
    <div class=\"space-y-4\">
      {% for trajet in trajets %}
      <div class=\"bg-white p-4 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200\">
        <div class=\"flex justify-between items-start\">
          <div>
            <h3 class=\"font-medium text-gray-900\">{{ trajet.departure }} → {{ trajet.destination }}</h3>
            <div class=\"mt-1 text-xs text-gray-500\">
              <span class=\"font-medium\">{{ trajet.departureTime ? trajet.departureTime|date('d/m/Y H:i') : 'N/A' }}</span>
              <span class=\"mx-1\">→</span>
              <span class=\"font-medium\">{{ trajet.arrivalTime ? trajet.arrivalTime|date('d/m/Y H:i') : 'N/A' }}</span>
            </div>
          </div>
          <span class=\"px-2 py-1 text-xs font-semibold rounded-full 
            {% if trajet.typeTransport == 'PublicTransport' %}
              bg-blue-100 text-blue-800
            {% else %}
              bg-green-100 text-green-800
            {% endif %}\">
            {{ trajet.typeTransport ?? 'N/A' }}
          </span>
        </div>
        
        <div class=\"mt-2 text-sm text-gray-600\">
          <div class=\"grid grid-cols-4 gap-2\">
            <div>
              <span class=\"font-medium\">Distance:</span> {{ trajet.distance|number_format(2) }} km
            </div>
            <div>
              <span class=\"font-medium\">Durée:</span> 
              {% if trajet.duration %}
                {{ trajet.duration }}
              {% else %}
                N/A
              {% endif %}
            </div>
            <div>
              <span class=\"font-medium\">Prix:</span> {{ trajet.price|number_format(2) }} €
            </div>
            <div>
              <span class=\"font-medium\">Places:</span> 
              {% if trajet.availableSeats is not null %}
                {{ trajet.availableSeats }}
              {% else %}
                N/A
              {% endif %}
            </div>
          </div>
        </div>
        
        <div class=\"mt-3 flex justify-end space-x-2\">
          <a href=\"{{ path('reservation_new', {'trajetId': trajet.id}) }}\" 
             class=\"text-blue-500 hover:text-blue-700 p-1 transition-colors duration-200\">
            Réserver
          </a>
        </div>
      </div>
      {% else %}
      <div class=\"text-center py-8 text-gray-500\">
        {% if search_term %}
          Aucun trajet trouvé pour \"{{ search_term }}\"
          {% if current_filter == 'PublicTransport' %} (Transport Public){% endif %}
          {% if current_filter == 'Carpooling' %} (Covoiturage){% endif %}
        {% else %}
          Aucun trajet trouvé.
        {% endif %}
      </div>
      {% endfor %}
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'affichage du chatbot
    const sosButton = document.getElementById('sosButton');
    const chatbotOverlay = document.getElementById('chatbotOverlay');
    const chatbotPopup = document.getElementById('chatbotPopup');
    
    sosButton.addEventListener('click', function() {
        chatbotOverlay.style.display = 'block';
        chatbotPopup.style.display = 'flex';
    });
    
    chatbotOverlay.addEventListener('click', function() {
        chatbotOverlay.style.display = 'none';
        chatbotPopup.style.display = 'none';
    });

    // Fonctionnalité du chatbot
    const messagesContainer = document.getElementById('chatbotMessages');
    const userInput = document.getElementById('userMessage');
    const sendButton = document.getElementById('sendMessage');

    function sendMessage() {
        const messageText = userInput.value.trim();
        if (messageText === '') return;

        addMessage(messageText, 'user-message');
        userInput.value = '';

        fetch('{{ path('app_chatbot_message') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'message=' + encodeURIComponent(messageText)
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
        msg.className = 'chatbot-message ' + className;
        msg.textContent = text;
        messagesContainer.appendChild(msg);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    window.sendSuggestion = function(text) {
        userInput.value = text;
        sendMessage();
    };

    sendButton.addEventListener('click', sendMessage);
    userInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') sendMessage();
    });

    // Fonction de confirmation de suppression
    window.confirmDelete = function(trajetId) {
        Swal.fire({
            title: 'Êtes-vous sûr?',
            text: \"Vous ne pourrez pas annuler cette action!\",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimer!',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + trajetId).submit();
            }
        });
    };
});
</script>
{% endblock %}", "reservation/affichage.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\reservation\\affichage.html.twig");
    }
}
