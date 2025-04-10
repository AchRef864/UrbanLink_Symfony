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
class __TwigTemplate_4e6d046146d5daa5367ddfa2063699f2 extends Template
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div style=\"margin-left: 280px;\">
  <div class=\"container mx-auto px-2 py-6\">
    ";
        // line 9
        yield "    <div class=\"flex flex-col space-y-4 mb-6\">
      ";
        // line 11
        yield "      <div class=\"flex justify-between items-center\">
        <h2 class=\"text-lg font-semibold text-gray-800\">Trajets Timeline</h2>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_ajouter");
        yield "\" class=\"inline-block px-4 py-2 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
          Ajouter Trajet
        </a>
      </div>
      
      ";
        // line 19
        yield "      <div class=\"flex justify-center\">
        <form method=\"get\" action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage");
        yield "\" class=\"w-full max-w-md\">
          <div class=\"relative flex\">
            <input type=\"text\" 
                   name=\"search\" 
                   value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\" 
                   placeholder=\"Rechercher un trajet par Lieu de départ ou Destination...\" 
                   class=\"w-full px-4 py-2.5 text-sm border border-gray-300 rounded-l-lg focus:ring-blue-500 focus:border-blue-500\">
            ";
        // line 27
        if ((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 27, $this->source); })())) {
            // line 28
            yield "              <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage");
            yield "\" class=\"absolute right-12 top-3 text-gray-400 hover:text-gray-600\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                  <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\" />
                </svg>
              </a>
            ";
        }
        // line 34
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
        // line 45
        yield "    <div class=\"flex space-x-2 mb-6\">
      <a href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage", ["search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 46, $this->source); })())]), "html", null, true);
        yield "\" 
         class=\"px-3 py-1 text-xs rounded-full ";
        // line 47
        yield (( !(isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 47, $this->source); })())) ? ("bg-gray-800 text-white") : ("bg-gray-200 text-gray-800"));
        yield "\">
          Tous
      </a>
      <a href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage", ["filter_type" => "PublicTransport", "search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 50, $this->source); })())]), "html", null, true);
        yield "\" 
         class=\"px-3 py-1 text-xs rounded-full ";
        // line 51
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 51, $this->source); })()) == "PublicTransport")) ? ("bg-blue-800 text-white") : ("bg-blue-200 text-blue-800"));
        yield "\">
          Transport Public
      </a>
      <a href=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage", ["filter_type" => "Carpooling", "search" => (isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 54, $this->source); })())]), "html", null, true);
        yield "\" 
         class=\"px-3 py-1 text-xs rounded-full ";
        // line 55
        yield ((((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 55, $this->source); })()) == "Carpooling")) ? ("bg-green-800 text-white") : ("bg-green-200 text-green-800"));
        yield "\">
          Covoiturage
      </a>
    </div>
    
    ";
        // line 61
        yield "    ";
        if (((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 61, $this->source); })()) || (isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 61, $this->source); })()))) {
            // line 62
            yield "      <div class=\"mb-4 text-sm text-gray-600\">
        ";
            // line 63
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 63, $this->source); })())) > 0)) {
                // line 64
                yield "          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 64, $this->source); })())), "html", null, true);
                yield " résultat(s) trouvé(s)
          ";
                // line 65
                if ((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 65, $this->source); })())) {
                    yield " pour \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 65, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                // line 66
                yield "          ";
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 66, $this->source); })()) == "PublicTransport")) {
                    yield " (Transport Public)";
                }
                // line 67
                yield "          ";
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 67, $this->source); })()) == "Carpooling")) {
                    yield " (Covoiturage)";
                }
                // line 68
                yield "        ";
            }
            // line 69
            yield "      </div>
    ";
        }
        // line 71
        yield "    
    ";
        // line 73
        yield "    <div class=\"space-y-4\">
      ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 74, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 75
            yield "      <div class=\"bg-white p-4 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200\">
        <div class=\"flex justify-between items-start\">
          <div>
            <h3 class=\"font-medium text-gray-900\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departure", [], "any", false, false, false, 78), "html", null, true);
            yield " → ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "destination", [], "any", false, false, false, 78), "html", null, true);
            yield "</h3>
            <div class=\"mt-1 text-xs text-gray-500\">
              <span class=\"font-medium\">";
            // line 80
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departureTime", [], "any", false, false, false, 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "departureTime", [], "any", false, false, false, 80), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
            yield "</span>
              <span class=\"mx-1\">→</span>
              <span class=\"font-medium\">";
            // line 82
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "arrivalTime", [], "any", false, false, false, 82)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "arrivalTime", [], "any", false, false, false, 82), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
            yield "</span>
            </div>
          </div>
          <span class=\"px-2 py-1 text-xs font-semibold rounded-full 
            ";
            // line 86
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", false, false, false, 86) == "PublicTransport")) {
                // line 87
                yield "              bg-blue-100 text-blue-800
            ";
            } else {
                // line 89
                yield "              bg-green-100 text-green-800
            ";
            }
            // line 90
            yield "\">
            ";
            // line 91
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", true, true, false, 91) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", false, false, false, 91)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "typeTransport", [], "any", false, false, false, 91), "html", null, true)) : ("N/A"));
            yield "
          </span>
        </div>
        
        <div class=\"mt-2 text-sm text-gray-600\">
          <div class=\"grid grid-cols-4 gap-2\">
            <div>
              <span class=\"font-medium\">Distance:</span> ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "distance", [], "any", false, false, false, 98), 2), "html", null, true);
            yield " km
            </div>
            <div>
              <span class=\"font-medium\">Durée:</span> 
              ";
            // line 102
            if (CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "duration", [], "any", false, false, false, 102)) {
                // line 103
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "duration", [], "any", false, false, false, 103), "html", null, true);
                yield "
              ";
            } else {
                // line 105
                yield "                N/A
              ";
            }
            // line 107
            yield "            </div>
            <div>
              <span class=\"font-medium\">Prix:</span> ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "price", [], "any", false, false, false, 109), 2), "html", null, true);
            yield " €
            </div>
            <div>
              <span class=\"font-medium\">Places:</span> 
              ";
            // line 113
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "availableSeats", [], "any", false, false, false, 113))) {
                // line 114
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "availableSeats", [], "any", false, false, false, 114), "html", null, true);
                yield "
              ";
            } else {
                // line 116
                yield "                N/A
              ";
            }
            // line 118
            yield "            </div>
          </div>
        </div>
        
        <div class=\"mt-3 flex justify-end space-x-2\">
          <!-- Edit Button -->
          <a href=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 124)]), "html", null, true);
            yield "\" class=\"text-blue-500 hover:text-blue-700 p-1 transition-colors duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
              <path d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\" />
            </svg>
          </a>
          
          <!-- Delete Button -->
          <button onclick=\"confirmDelete(";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 131), "html", null, true);
            yield ")\" class=\"text-red-500 hover:text-red-700 p-1 transition-colors duration-200\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
              <path fill-rule=\"evenodd\" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\" clip-rule=\"evenodd\" />
            </svg>
          </button>
          <form id=\"delete-form-";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 136), "html", null, true);
            yield "\" 
      action=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" 
      method=\"post\" 
      style=\"display: none;\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    ";
            // line 142
            yield "</form>
        </div>
      </div>
      ";
            $context['_iterated'] = true;
        }
        // line 145
        if (!$context['_iterated']) {
            // line 146
            yield "      <div class=\"text-center py-8 text-gray-500\">
        ";
            // line 147
            if ((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 147, $this->source); })())) {
                // line 148
                yield "          Aucun trajet trouvé pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_term"]) || array_key_exists("search_term", $context) ? $context["search_term"] : (function () { throw new RuntimeError('Variable "search_term" does not exist.', 148, $this->source); })()), "html", null, true);
                yield "\"
          ";
                // line 149
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 149, $this->source); })()) == "PublicTransport")) {
                    yield " (Transport Public)";
                }
                // line 150
                yield "          ";
                if (((isset($context["current_filter"]) || array_key_exists("current_filter", $context) ? $context["current_filter"] : (function () { throw new RuntimeError('Variable "current_filter" does not exist.', 150, $this->source); })()) == "Carpooling")) {
                    yield " (Covoiturage)";
                }
                // line 151
                yield "        ";
            } else {
                // line 152
                yield "          Aucun trajet trouvé.
        ";
            }
            // line 154
            yield "      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trajet'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
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
        return array (  409 => 156,  402 => 154,  398 => 152,  395 => 151,  390 => 150,  386 => 149,  381 => 148,  379 => 147,  376 => 146,  374 => 145,  367 => 142,  360 => 137,  356 => 136,  348 => 131,  338 => 124,  330 => 118,  326 => 116,  320 => 114,  318 => 113,  311 => 109,  307 => 107,  303 => 105,  297 => 103,  295 => 102,  288 => 98,  278 => 91,  275 => 90,  271 => 89,  267 => 87,  265 => 86,  258 => 82,  253 => 80,  246 => 78,  241 => 75,  236 => 74,  233 => 73,  230 => 71,  226 => 69,  223 => 68,  218 => 67,  213 => 66,  207 => 65,  202 => 64,  200 => 63,  197 => 62,  194 => 61,  186 => 55,  182 => 54,  176 => 51,  172 => 50,  166 => 47,  162 => 46,  159 => 45,  147 => 34,  137 => 28,  135 => 27,  129 => 24,  122 => 20,  119 => 19,  111 => 13,  107 => 11,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trajets List{% endblock %}

{% block body %}
<div style=\"margin-left: 280px;\">
  <div class=\"container mx-auto px-2 py-6\">
    {# Header with Search and Add Button - Nouvelle disposition #}
    <div class=\"flex flex-col space-y-4 mb-6\">
      {# Première ligne avec titre et bouton Ajouter #}
      <div class=\"flex justify-between items-center\">
        <h2 class=\"text-lg font-semibold text-gray-800\">Trajets Timeline</h2>
        <a href=\"{{ path('trajet_ajouter') }}\" class=\"inline-block px-4 py-2 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
          Ajouter Trajet
        </a>
      </div>
      
      {# Deuxième ligne avec barre de recherche centrée #}
      <div class=\"flex justify-center\">
        <form method=\"get\" action=\"{{ path('trajet_affichage') }}\" class=\"w-full max-w-md\">
          <div class=\"relative flex\">
            <input type=\"text\" 
                   name=\"search\" 
                   value=\"{{ search_term }}\" 
                   placeholder=\"Rechercher un trajet par Lieu de départ ou Destination...\" 
                   class=\"w-full px-4 py-2.5 text-sm border border-gray-300 rounded-l-lg focus:ring-blue-500 focus:border-blue-500\">
            {% if search_term %}
              <a href=\"{{ path('trajet_affichage') }}\" class=\"absolute right-12 top-3 text-gray-400 hover:text-gray-600\">
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
      <a href=\"{{ path('trajet_affichage', {'search': search_term}) }}\" 
         class=\"px-3 py-1 text-xs rounded-full {{ not current_filter ? 'bg-gray-800 text-white' : 'bg-gray-200 text-gray-800' }}\">
          Tous
      </a>
      <a href=\"{{ path('trajet_affichage', {'filter_type': 'PublicTransport', 'search': search_term}) }}\" 
         class=\"px-3 py-1 text-xs rounded-full {{ current_filter == 'PublicTransport' ? 'bg-blue-800 text-white' : 'bg-blue-200 text-blue-800' }}\">
          Transport Public
      </a>
      <a href=\"{{ path('trajet_affichage', {'filter_type': 'Carpooling', 'search': search_term}) }}\" 
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
    {# Remove the CSRF token line completely #}
</form>
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
</script>
{% endblock %}", "trajet/affichage.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\trajet\\affichage.html.twig");
    }
}
