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

/* trajet/affichage.html.twig */
class __TwigTemplate_a19f34d8f882d2674d201a54a52d8f22 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/affichage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/affichage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trajet/affichage.html.twig", 1);
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        :root {
            /* Light Mode Variables */
            --bg-color: #f8f9fa;
            --text-color: #212529;
            --card-bg: #ffffff;
            --card-border: #e9ecef;
            --input-bg: #ffffff;
            --input-border: #ced4da;
            --button-primary-from: #4e73df;
            --button-primary-to: #224abe;
            --button-secondary-bg: #f8f9fa;
            --button-secondary-text: #212529;
            --button-secondary-border: #d1d3e2;
            --filter-active-bg: #4e73df;
            --filter-active-text: #ffffff;
            --filter-inactive-bg: #e9ecef;
            --filter-inactive-text: #495057;
            --public-transport-bg: #e7f1ff;
            --public-transport-text: #1a56db;
            --carpooling-bg: #d1fae5;
            --carpooling-text: #047857;
            --icon-color: #6c757d;
            --icon-hover: #495057;
            --shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            --shadow-md: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
        }

        [data-theme=\"dark\"] {
            /* Dark Mode Variables */
            --bg-color: #1a1a2e;
            --text-color: #f8f9fa;
            --card-bg: #16213e;
            --card-border: #2a3a6a;
            --input-bg: #1f2a4a;
            --input-border: #3a4a7a;
            --button-primary-from: #4e73df;
            --button-primary-to: #224abe;
            --button-secondary-bg: #2a3a6a;
            --button-secondary-text: #f8f9fa;
            --button-secondary-border: #3a4a7a;
            --filter-active-bg: #4e73df;
            --filter-active-text: #ffffff;
            --filter-inactive-bg: #2a3a6a;
            --filter-inactive-text: #adb5bd;
            --public-transport-bg: #1e3a8a;
            --public-transport-text: #93c5fd;
            --carpooling-bg: #065f46;
            --carpooling-text: #6ee7b7;
            --icon-color: #adb5bd;
            --icon-hover: #f8f9fa;
            --shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.3);
            --shadow-md: 0 0.5rem 1rem rgba(0, 0, 0, 0.4);
            --shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.5);
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Theme Toggle Button */
        .theme-toggle {
            background: transparent;
            border: none;
            color: var(--text-color);
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            margin-left: 10px;
        }

        .theme-toggle:hover {
            background: rgba(0, 0, 0, 0.1);
        }

        .theme-toggle svg {
            width: 20px;
            height: 20px;
        }

        /* Header Styles */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        /* Search Form */
        .search-form {
            background-color: var(--input-bg);
            border: 1px solid var(--input-border);
            border-radius: 0.375rem;
            transition: all 0.3s ease;
        }

        .search-form:hover {
            box-shadow: var(--shadow-sm);
        }

        .search-input {
            background-color: var(--input-bg);
            color: var(--text-color);
            border: none;
        }

        .search-input:focus {
            outline: none;
            box-shadow: none;
        }

        .search-button {
            background-color: var(--button-secondary-bg);
            color: var(--button-secondary-text);
            border-left: 1px solid var(--input-border);
        }

        /* Filter Buttons */
        .filter-button {
            transition: all 0.3s ease;
        }

        .filter-all {
            background-color: var(--filter-inactive-bg);
            color: var(--filter-inactive-text);
        }

        .filter-all.active {
            background-color: var(--filter-active-bg);
            color: var(--filter-active-text);
        }

        .filter-public {
            background-color: var(--public-transport-bg);
            color: var(--public-transport-text);
        }

        .filter-public.active {
            background-color: var(--filter-active-bg);
            color: var(--filter-active-text);
        }

        .filter-carpool {
            background-color: var(--carpooling-bg);
            color: var(--carpooling-text);
        }

        .filter-carpool.active {
            background-color: var(--filter-active-bg);
            color: var(--filter-active-text);
        }

        /* Trajet Cards */
        .trajet-card {
            background-color: var(--card-bg);
            border: 1px solid var(--card-border);
            transition: all 0.3s ease;
        }

        .trajet-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .type-badge {
            transition: all 0.3s ease;
        }

        .type-public {
            background-color: var(--public-transport-bg);
            color: var(--public-transport-text);
        }

        .type-carpool {
            background-color: var(--carpooling-bg);
            color: var(--carpooling-text);
        }

        /* Action Icons */
        .action-icon {
            color: var(--icon-color);
            transition: all 0.3s ease;
        }

        .action-icon:hover {
            color: var(--icon-hover);
        }

        /* Empty State */
        .empty-state {
            color: var(--text-color);
            opacity: 0.7;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 210
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

        // line 211
        yield "<div>
  <div class=\"container mx-auto px-2 py-6\">
    ";
        // line 214
        yield "    <div class=\"flex flex-col space-y-4 mb-6\">
      ";
        // line 216
        yield "      <div class=\"flex justify-between items-center\">
        <div class=\"flex items-center\">
          <h2 class=\"text-lg font-semibold\" style=\"color: var(--text-color);\">Trajets Timeline</h2>
          <button class=\"theme-toggle\" id=\"themeToggle\" aria-label=\"Toggle dark mode\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"sunIcon\">
              <circle cx=\"12\" cy=\"12\" r=\"5\"></circle>
              <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"3\"></line>
              <line x1=\"12\" y1=\"21\" x2=\"12\" y2=\"23\"></line>
              <line x1=\"4.22\" y1=\"4.22\" x2=\"5.64\" y2=\"5.64\"></line>
              <line x1=\"18.36\" y1=\"18.36\" x2=\"19.78\" y2=\"19.78\"></line>
              <line x1=\"1\" y1=\"12\" x2=\"3\" y2=\"12\"></line>
              <line x1=\"21\" y1=\"12\" x2=\"23\" y2=\"12\"></line>
              <line x1=\"4.22\" y1=\"19.78\" x2=\"5.64\" y2=\"18.36\"></line>
              <line x1=\"18.36\" y1=\"5.64\" x2=\"19.78\" y2=\"4.22\"></line>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"moonIcon\" style=\"display: none;\">
              <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"></path>
            </svg>
          </button>
        </div>
        <a href=\"";
        // line 236
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_ajouter");
        yield "\" class=\"inline-block px-4 py-2 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
          Ajouter Trajet
        </a>
      </div>
      
      ";
        // line 242
        yield "      <div class=\"flex justify-center\">
        <form method=\"get\" action=\"";
        // line 243
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage");
        yield "\" class=\"w-full max-w-md search-form\">
          <div class=\"relative flex\">
            <input type=\"text\" 
                   name=\"search\" 
                   value=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 247, $this->source); })()), "html", null, true);
        yield "\" 
                   placeholder=\"Rechercher un trajet par Lieu de départ ou Destination...\" 
                   class=\"w-full px-4 py-2.5 text-sm rounded-l-lg search-input\">
            ";
        // line 250
        if ((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 250, $this->source); })())) {
            // line 251
            yield "              <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage");
            yield "\" class=\"absolute right-12 top-3\" style=\"color: var(--icon-color);\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\" />
                </svg>
              </a>
            ";
        }
        // line 257
        yield "            <button type=\"submit\" class=\"px-4 py-2.5 rounded-r-lg search-button\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                <path fill-rule=\"evenodd\" d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\" clip-rule=\"evenodd\" />
              </svg>
            </button>
          </div>
        </form>
      </div>
    </div>
    
    ";
        // line 268
        yield "    <div class=\"flex space-x-2 mb-6\">
    <a href=\"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage", ["search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 269, $this->source); })())]), "html", null, true);
        yield "\" 
    class=\"px-3 py-1 text-xs rounded-full ";
        // line 270
        yield (( !(isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 270, $this->source); })())) ? ("bg-gray-800 text-white") : ("bg-gray-200 text-gray-800"));
        yield "\">
     Tous
 </a>
      <a href=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage", ["filter_type" => "PublicTransport", "search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 273, $this->source); })())]), "html", null, true);
        yield "\" 
         class=\"px-3 py-1 text-xs rounded-full filter-button filter-public ";
        // line 274
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 274, $this->source); })()) == "PublicTransport")) ? ("active") : (""));
        yield "\">
          Transport Public
      </a>
      <a href=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage", ["filter_type" => "Carpooling", "search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 277, $this->source); })())]), "html", null, true);
        yield "\" 
         class=\"px-3 py-1 text-xs rounded-full filter-button filter-carpool ";
        // line 278
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 278, $this->source); })()) == "Carpooling")) ? ("active") : (""));
        yield "\">
          Covoiturage
      </a>
    </div>
    
    ";
        // line 284
        yield "    ";
        if (((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 284, $this->source); })()) || (isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 284, $this->source); })()))) {
            // line 285
            yield "      <div class=\"mb-4 text-sm\" style=\"color: var(--text-color);\">
        ";
            // line 286
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 286, $this->source); })())) > 0)) {
                // line 287
                yield "          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 287, $this->source); })())), "html", null, true);
                yield " résultat(s) trouvé(s)
          ";
                // line 288
                if ((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 288, $this->source); })())) {
                    yield " pour \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 288, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                // line 289
                yield "          ";
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 289, $this->source); })()) == "PublicTransport")) {
                    yield " (Transport Public)";
                }
                // line 290
                yield "          ";
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 290, $this->source); })()) == "Carpooling")) {
                    yield " (Covoiturage)";
                }
                // line 291
                yield "        ";
            }
            // line 292
            yield "      </div>
    ";
        }
        // line 294
        yield "    
    ";
        // line 296
        yield "    <div class=\"space-y-4\">
      ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 297, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 298
            yield "      <div class=\"trajet-card p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200\">
        <div class=\"flex justify-between items-start\">
          <div>
            <h3 class=\"font-medium\" style=\"color: var(--text-color);\">";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departure", [], "any", false, false, false, 301), "html", null, true);
            yield " → ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "destination", [], "any", false, false, false, 301), "html", null, true);
            yield "</h3>
            <div class=\"mt-1 text-xs\" style=\"color: var(--text-color); opacity: 0.8;\">
              <span class=\"font-medium\">";
            // line 303
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departureTime", [], "any", false, false, false, 303)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departureTime", [], "any", false, false, false, 303), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
            yield "</span>
              <span class=\"mx-1\">→</span>
              <span class=\"font-medium\">";
            // line 305
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "arrivalTime", [], "any", false, false, false, 305)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "arrivalTime", [], "any", false, false, false, 305), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
            yield "</span>
            </div>
          </div>
          <span class=\"px-2 py-1 text-xs font-semibold rounded-full type-badge 
            ";
            // line 309
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", false, false, false, 309) == "PublicTransport")) {
                // line 310
                yield "              type-public
            ";
            } else {
                // line 312
                yield "              type-carpool
            ";
            }
            // line 313
            yield "\">
            ";
            // line 314
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", true, true, false, 314) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", false, false, false, 314)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", false, false, false, 314), "html", null, true)) : ("N/A"));
            yield "
          </span>
        </div>
        
        <div class=\"mt-2 text-sm\" style=\"color: var(--text-color); opacity: 0.9;\">
          <div class=\"grid grid-cols-4 gap-2\">
            <div>
              <span class=\"font-medium\">Distance:</span> ";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "distance", [], "any", false, false, false, 321), 2), "html", null, true);
            yield " km
            </div>
            <div>
              <span class=\"font-medium\">Durée:</span> 
              ";
            // line 325
            if (CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "duration", [], "any", false, false, false, 325)) {
                // line 326
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "duration", [], "any", false, false, false, 326), "html", null, true);
                yield "
              ";
            } else {
                // line 328
                yield "                N/A
              ";
            }
            // line 330
            yield "            </div>
            <div>
              <span class=\"font-medium\">Prix:</span> ";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "price", [], "any", false, false, false, 332), 2), "html", null, true);
            yield " €
            </div>
            <div>
              <span class=\"font-medium\">Places:</span> 
              ";
            // line 336
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "availableSeats", [], "any", false, false, false, 336))) {
                // line 337
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "availableSeats", [], "any", false, false, false, 337), "html", null, true);
                yield "
              ";
            } else {
                // line 339
                yield "                N/A
              ";
            }
            // line 341
            yield "            </div>
          </div>
        </div>
        
        <div class=\"mt-3 flex justify-end space-x-2\">
          <!-- Edit Button -->
          <a href=\"";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 347)]), "html", null, true);
            yield "\" class=\"text-blue-500 hover:text-blue-700 p-1 transition-colors duration-200\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
            <path d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\" />
          </svg>
        </a>
          
          <!-- Delete Button -->
          <button onclick=\"confirmDelete(";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 354), "html", null, true);
            yield ")\" class=\"text-red-500 hover:text-red-700 p-1 transition-colors duration-200\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
            <path fill-rule=\"evenodd\" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\" clip-rule=\"evenodd\" />
          </svg>
        </button>
          <form id=\"delete-form-";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 359), "html", null, true);
            yield "\" 
                action=\"";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 360)]), "html", null, true);
            yield "\" 
                method=\"post\" 
                style=\"display: none;\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
          </form>
        </div>
      </div>
      ";
            $context['_iterated'] = true;
        }
        // line 367
        if (!$context['_iterated']) {
            // line 368
            yield "      <div class=\"empty-state text-center py-8\">
        ";
            // line 369
            if ((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 369, $this->source); })())) {
                // line 370
                yield "          Aucun trajet trouvé pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 370, $this->source); })()), "html", null, true);
                yield "\"
          ";
                // line 371
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 371, $this->source); })()) == "PublicTransport")) {
                    yield " (Transport Public)";
                }
                // line 372
                yield "          ";
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 372, $this->source); })()) == "Carpooling")) {
                    yield " (Covoiturage)";
                }
                // line 373
                yield "        ";
            } else {
                // line 374
                yield "          Aucun trajet trouvé.
        ";
            }
            // line 376
            yield "      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trajet'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        yield "    </div>
  </div>
</div>

<!-- SweetAlert for delete confirmation -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
function confirmDelete(trajetId) {
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
}

// Theme toggle functionality
const themeToggle = document.getElementById('themeToggle');
const sunIcon = document.getElementById('sunIcon');
const moonIcon = document.getElementById('moonIcon');
    
// Check for saved theme preference or use system preference
const savedTheme = localStorage.getItem('theme');
const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
// Apply the initial theme
if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
    document.documentElement.setAttribute('data-theme', 'dark');
    sunIcon.style.display = 'none';
    moonIcon.style.display = 'block';
} else {
    document.documentElement.removeAttribute('data-theme');
    sunIcon.style.display = 'block';
    moonIcon.style.display = 'none';
}
    
// Toggle theme on button click
themeToggle.addEventListener('click', () => {
    const currentTheme = document.documentElement.getAttribute('data-theme');
        
    if (currentTheme === 'dark') {
        document.documentElement.removeAttribute('data-theme');
        localStorage.setItem('theme', 'light');
        sunIcon.style.display = 'block';
        moonIcon.style.display = 'none';
    } else {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
        sunIcon.style.display = 'none';
        moonIcon.style.display = 'block';
    }
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
        return "trajet/affichage.html.twig";
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
        return array (  654 => 378,  647 => 376,  643 => 374,  640 => 373,  635 => 372,  631 => 371,  626 => 370,  624 => 369,  621 => 368,  619 => 367,  607 => 360,  603 => 359,  595 => 354,  585 => 347,  577 => 341,  573 => 339,  567 => 337,  565 => 336,  558 => 332,  554 => 330,  550 => 328,  544 => 326,  542 => 325,  535 => 321,  525 => 314,  522 => 313,  518 => 312,  514 => 310,  512 => 309,  505 => 305,  500 => 303,  493 => 301,  488 => 298,  483 => 297,  480 => 296,  477 => 294,  473 => 292,  470 => 291,  465 => 290,  460 => 289,  454 => 288,  449 => 287,  447 => 286,  444 => 285,  441 => 284,  433 => 278,  429 => 277,  423 => 274,  419 => 273,  413 => 270,  409 => 269,  406 => 268,  394 => 257,  384 => 251,  382 => 250,  376 => 247,  369 => 243,  366 => 242,  358 => 236,  336 => 216,  333 => 214,  329 => 211,  316 => 210,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trajets List{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            /* Light Mode Variables */
            --bg-color: #f8f9fa;
            --text-color: #212529;
            --card-bg: #ffffff;
            --card-border: #e9ecef;
            --input-bg: #ffffff;
            --input-border: #ced4da;
            --button-primary-from: #4e73df;
            --button-primary-to: #224abe;
            --button-secondary-bg: #f8f9fa;
            --button-secondary-text: #212529;
            --button-secondary-border: #d1d3e2;
            --filter-active-bg: #4e73df;
            --filter-active-text: #ffffff;
            --filter-inactive-bg: #e9ecef;
            --filter-inactive-text: #495057;
            --public-transport-bg: #e7f1ff;
            --public-transport-text: #1a56db;
            --carpooling-bg: #d1fae5;
            --carpooling-text: #047857;
            --icon-color: #6c757d;
            --icon-hover: #495057;
            --shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            --shadow-md: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
        }

        [data-theme=\"dark\"] {
            /* Dark Mode Variables */
            --bg-color: #1a1a2e;
            --text-color: #f8f9fa;
            --card-bg: #16213e;
            --card-border: #2a3a6a;
            --input-bg: #1f2a4a;
            --input-border: #3a4a7a;
            --button-primary-from: #4e73df;
            --button-primary-to: #224abe;
            --button-secondary-bg: #2a3a6a;
            --button-secondary-text: #f8f9fa;
            --button-secondary-border: #3a4a7a;
            --filter-active-bg: #4e73df;
            --filter-active-text: #ffffff;
            --filter-inactive-bg: #2a3a6a;
            --filter-inactive-text: #adb5bd;
            --public-transport-bg: #1e3a8a;
            --public-transport-text: #93c5fd;
            --carpooling-bg: #065f46;
            --carpooling-text: #6ee7b7;
            --icon-color: #adb5bd;
            --icon-hover: #f8f9fa;
            --shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.3);
            --shadow-md: 0 0.5rem 1rem rgba(0, 0, 0, 0.4);
            --shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.5);
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Theme Toggle Button */
        .theme-toggle {
            background: transparent;
            border: none;
            color: var(--text-color);
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            margin-left: 10px;
        }

        .theme-toggle:hover {
            background: rgba(0, 0, 0, 0.1);
        }

        .theme-toggle svg {
            width: 20px;
            height: 20px;
        }

        /* Header Styles */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        /* Search Form */
        .search-form {
            background-color: var(--input-bg);
            border: 1px solid var(--input-border);
            border-radius: 0.375rem;
            transition: all 0.3s ease;
        }

        .search-form:hover {
            box-shadow: var(--shadow-sm);
        }

        .search-input {
            background-color: var(--input-bg);
            color: var(--text-color);
            border: none;
        }

        .search-input:focus {
            outline: none;
            box-shadow: none;
        }

        .search-button {
            background-color: var(--button-secondary-bg);
            color: var(--button-secondary-text);
            border-left: 1px solid var(--input-border);
        }

        /* Filter Buttons */
        .filter-button {
            transition: all 0.3s ease;
        }

        .filter-all {
            background-color: var(--filter-inactive-bg);
            color: var(--filter-inactive-text);
        }

        .filter-all.active {
            background-color: var(--filter-active-bg);
            color: var(--filter-active-text);
        }

        .filter-public {
            background-color: var(--public-transport-bg);
            color: var(--public-transport-text);
        }

        .filter-public.active {
            background-color: var(--filter-active-bg);
            color: var(--filter-active-text);
        }

        .filter-carpool {
            background-color: var(--carpooling-bg);
            color: var(--carpooling-text);
        }

        .filter-carpool.active {
            background-color: var(--filter-active-bg);
            color: var(--filter-active-text);
        }

        /* Trajet Cards */
        .trajet-card {
            background-color: var(--card-bg);
            border: 1px solid var(--card-border);
            transition: all 0.3s ease;
        }

        .trajet-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .type-badge {
            transition: all 0.3s ease;
        }

        .type-public {
            background-color: var(--public-transport-bg);
            color: var(--public-transport-text);
        }

        .type-carpool {
            background-color: var(--carpooling-bg);
            color: var(--carpooling-text);
        }

        /* Action Icons */
        .action-icon {
            color: var(--icon-color);
            transition: all 0.3s ease;
        }

        .action-icon:hover {
            color: var(--icon-hover);
        }

        /* Empty State */
        .empty-state {
            color: var(--text-color);
            opacity: 0.7;
        }
    </style>
{% endblock %}

{% block body %}
<div>
  <div class=\"container mx-auto px-2 py-6\">
    {# Header with Search and Add Button #}
    <div class=\"flex flex-col space-y-4 mb-6\">
      {# First line with title and buttons #}
      <div class=\"flex justify-between items-center\">
        <div class=\"flex items-center\">
          <h2 class=\"text-lg font-semibold\" style=\"color: var(--text-color);\">Trajets Timeline</h2>
          <button class=\"theme-toggle\" id=\"themeToggle\" aria-label=\"Toggle dark mode\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"sunIcon\">
              <circle cx=\"12\" cy=\"12\" r=\"5\"></circle>
              <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"3\"></line>
              <line x1=\"12\" y1=\"21\" x2=\"12\" y2=\"23\"></line>
              <line x1=\"4.22\" y1=\"4.22\" x2=\"5.64\" y2=\"5.64\"></line>
              <line x1=\"18.36\" y1=\"18.36\" x2=\"19.78\" y2=\"19.78\"></line>
              <line x1=\"1\" y1=\"12\" x2=\"3\" y2=\"12\"></line>
              <line x1=\"21\" y1=\"12\" x2=\"23\" y2=\"12\"></line>
              <line x1=\"4.22\" y1=\"19.78\" x2=\"5.64\" y2=\"18.36\"></line>
              <line x1=\"18.36\" y1=\"5.64\" x2=\"19.78\" y2=\"4.22\"></line>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"moonIcon\" style=\"display: none;\">
              <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"></path>
            </svg>
          </button>
        </div>
        <a href=\"{{ path('trajet_ajouter') }}\" class=\"inline-block px-4 py-2 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
          Ajouter Trajet
        </a>
      </div>
      
      {# Search bar #}
      <div class=\"flex justify-center\">
        <form method=\"get\" action=\"{{ path('trajet_affichage') }}\" class=\"w-full max-w-md search-form\">
          <div class=\"relative flex\">
            <input type=\"text\" 
                   name=\"search\" 
                   value=\"{{ search_term }}\" 
                   placeholder=\"Rechercher un trajet par Lieu de départ ou Destination...\" 
                   class=\"w-full px-4 py-2.5 text-sm rounded-l-lg search-input\">
            {% if search_term %}
              <a href=\"{{ path('trajet_affichage') }}\" class=\"absolute right-12 top-3\" style=\"color: var(--icon-color);\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\" />
                </svg>
              </a>
            {% endif %}
            <button type=\"submit\" class=\"px-4 py-2.5 rounded-r-lg search-button\">
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
    <a href=\"{{ path('trajet_affichage', {'search': search_term}) }}\" 
    class=\"px-3 py-1 text-xs rounded-full {{ not current_filter ? 'bg-gray-800 text-white' : 'bg-gray-200 text-gray-800' }}\">
     Tous
 </a>
      <a href=\"{{ path('trajet_affichage', {'filter_type': 'PublicTransport', 'search': search_term}) }}\" 
         class=\"px-3 py-1 text-xs rounded-full filter-button filter-public {{ current_filter == 'PublicTransport' ? 'active' : '' }}\">
          Transport Public
      </a>
      <a href=\"{{ path('trajet_affichage', {'filter_type': 'Carpooling', 'search': search_term}) }}\" 
         class=\"px-3 py-1 text-xs rounded-full filter-button filter-carpool {{ current_filter == 'Carpooling' ? 'active' : '' }}\">
          Covoiturage
      </a>
    </div>
    
    {# Results Count #}
    {% if search_term or current_filter %}
      <div class=\"mb-4 text-sm\" style=\"color: var(--text-color);\">
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
      <div class=\"trajet-card p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200\">
        <div class=\"flex justify-between items-start\">
          <div>
            <h3 class=\"font-medium\" style=\"color: var(--text-color);\">{{ trajet.departure }} → {{ trajet.destination }}</h3>
            <div class=\"mt-1 text-xs\" style=\"color: var(--text-color); opacity: 0.8;\">
              <span class=\"font-medium\">{{ trajet.departureTime ? trajet.departureTime|date('d/m/Y H:i') : 'N/A' }}</span>
              <span class=\"mx-1\">→</span>
              <span class=\"font-medium\">{{ trajet.arrivalTime ? trajet.arrivalTime|date('d/m/Y H:i') : 'N/A' }}</span>
            </div>
          </div>
          <span class=\"px-2 py-1 text-xs font-semibold rounded-full type-badge 
            {% if trajet.typeTransport == 'PublicTransport' %}
              type-public
            {% else %}
              type-carpool
            {% endif %}\">
            {{ trajet.typeTransport ?? 'N/A' }}
          </span>
        </div>
        
        <div class=\"mt-2 text-sm\" style=\"color: var(--text-color); opacity: 0.9;\">
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
          <!-- Edit Button -->
          <a href=\"{{ path('trajet_modifier', {'id': trajet.id}) }}\" class=\"text-blue-500 hover:text-blue-700 p-1 transition-colors duration-200\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
            <path d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\" />
          </svg>
        </a>
          
          <!-- Delete Button -->
          <button onclick=\"confirmDelete({{ trajet.id }})\" class=\"text-red-500 hover:text-red-700 p-1 transition-colors duration-200\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
            <path fill-rule=\"evenodd\" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\" clip-rule=\"evenodd\" />
          </svg>
        </button>
          <form id=\"delete-form-{{ trajet.id }}\" 
                action=\"{{ path('trajet_supprimer', {'id': trajet.id}) }}\" 
                method=\"post\" 
                style=\"display: none;\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
          </form>
        </div>
      </div>
      {% else %}
      <div class=\"empty-state text-center py-8\">
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

<!-- SweetAlert for delete confirmation -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
function confirmDelete(trajetId) {
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
}

// Theme toggle functionality
const themeToggle = document.getElementById('themeToggle');
const sunIcon = document.getElementById('sunIcon');
const moonIcon = document.getElementById('moonIcon');
    
// Check for saved theme preference or use system preference
const savedTheme = localStorage.getItem('theme');
const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
// Apply the initial theme
if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
    document.documentElement.setAttribute('data-theme', 'dark');
    sunIcon.style.display = 'none';
    moonIcon.style.display = 'block';
} else {
    document.documentElement.removeAttribute('data-theme');
    sunIcon.style.display = 'block';
    moonIcon.style.display = 'none';
}
    
// Toggle theme on button click
themeToggle.addEventListener('click', () => {
    const currentTheme = document.documentElement.getAttribute('data-theme');
        
    if (currentTheme === 'dark') {
        document.documentElement.removeAttribute('data-theme');
        localStorage.setItem('theme', 'light');
        sunIcon.style.display = 'block';
        moonIcon.style.display = 'none';
    } else {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
        sunIcon.style.display = 'none';
        moonIcon.style.display = 'block';
    }
});
</script>
{% endblock %}", "trajet/affichage.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\trajet\\affichage.html.twig");
    }
}
