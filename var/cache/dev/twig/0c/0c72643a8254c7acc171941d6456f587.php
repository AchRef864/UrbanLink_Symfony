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

/* taxiste/dashboard.html.twig */
class __TwigTemplate_64759cc08f78c40ccc5bbbb437eeb6ff extends Template
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
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxiste/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxiste/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "taxiste/dashboard.html.twig", 1);
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

        yield "Tableau de bord Taxiste";
        
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
        yield "<div class=\"bg-white shadow-md rounded-2xl w-full max-w-screen-lg mx-auto border border-gray-200 px-6\">
  <!-- Section Titre -->
  <div class=\"px-6 py-3 rounded-t-2xl\" style=\"background-color:rgb(3, 1, 111) !important;\">
    <h1 class=\"text-xl font-bold\" style=\"color: #ffffff !important;\">Tableau de bord du Taxi</h1>
  </div>

  <div class=\"p-6\">
    <h2 class=\"text-lg font-semibold\">Votre Taxi</h2>
    <p class=\"mb-4\">
      ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 15, $this->source); })()), "marque", [], "any", false, false, false, 15), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 15, $this->source); })()), "modele", [], "any", false, false, false, 15), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 15, $this->source); })()), "immatriculation", [], "any", false, false, false, 15), "html", null, true);
        yield "<br>
      Statut : ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 16, $this->source); })()), "statut", [], "any", false, false, false, 16), "html", null, true);
        yield "
    </p>

    ";
        // line 20
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_taxi_change_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\" method=\"post\" class=\"mb-6 inline-block\">
      <button type=\"submit\" style=\"background-color:rgb(73, 94, 5) !important; color: #ffffff !important;\" class=\"font-bold py-2 px-6 rounded-lg shadow-md transition duration-200 w-full sm:w-auto\">
        ";
        // line 22
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 22, $this->source); })()), "statut", [], "any", false, false, false, 22)) == "disponible")) {
            // line 23
            yield "          Passer en indisponible
        ";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 24, $this->source); })()), "statut", [], "any", false, false, false, 24)) == "en course")) {
            // line 25
            yield "          Passer en indisponible
        ";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 26, $this->source); })()), "statut", [], "any", false, false, false, 26)) == "indisponible")) {
            // line 27
            yield "          Passer en disponible
        ";
        } else {
            // line 28
            yield " 
          Changer le statut
        ";
        }
        // line 31
        yield "      </button>
    </form>

    <h2 class=\"text-lg font-semibold mb-2\">Vos Courses</h2>
    <table class=\"w-full mt-2 border-collapse\">
      <thead>
        <tr class=\"bg-gray-100\">
          <th class=\"py-2 px-4 border\">Date</th>
          <th class=\"py-2 px-4 border\">villeDepart</th>
          <th class=\"py-2 px-4 border\">villeArrivee</th>
          <th class=\"py-2 px-4 border\">Distance</th>
          <th class=\"py-2 px-4 border\">Montant</th>
          <th class=\"py-2 px-4 border\">Client</th>
          <th class=\"py-2 px-4 border\">Statut</th>
          <th class=\"py-2 px-4 border\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 50
            yield "          <tr class=\"hover:bg-gray-50\">
            <td class=\"py-2 px-4 border\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "dateCourse", [], "any", false, false, false, 51), "d/m/Y H:i"), "html", null, true);
            yield "</td>
            <td class=\"py-2 px-4 border\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "villeDepart", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
            <td class=\"py-2 px-4 border\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "villeArrivee", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
            <td class=\"py-2 px-4 border\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "distanceKm", [], "any", false, false, false, 54), "html", null, true);
            yield " km</td>
            <td class=\"py-2 px-4 border\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "montant", [], "any", false, false, false, 55), "html", null, true);
            yield " DNT</td>
            <td class=\"py-2 px-4 border\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "user", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
            <td class=\"py-2 px-4 border\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
            <td class=\"py-2 px-4 border space-x-2\">
              ";
            // line 59
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 59)) == "en attente")) {
                // line 60
                yield "                <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline-block\">
                  <button type=\"submit\" style=\"background-color: #10B981 !important; color: #ffffff !important;\" class=\"font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 w-full sm:w-auto\">
                    Accepter
                  </button>
                </form>
                <form action=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_refuse", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Refuser cette course ?');\">
                  <button type=\"submit\" style=\"background-color: #EF4444 !important; color: #ffffff !important;\" class=\"font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 w-full sm:w-auto\">
                    Refuser
                  </button>
                </form>
              ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 70
$context["course"], "statut", [], "any", false, false, false, 70)) == "acceptée")) {
                // line 71
                yield "                <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_start", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline-block\">
                  <button type=\"submit\" style=\"background-color:rgb(26, 3, 78) !important; color: #ffffff !important;\" class=\"font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 w-full sm:w-auto\">
                    Déclencher la course
                  </button>
                </form>
              ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 76
$context["course"], "statut", [], "any", false, false, false, 76)) == "en course")) {
                // line 77
                yield "                <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_finish", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline-block\">
                  <button type=\"submit\" style=\"background-color:rgb(63, 1, 1) !important; color: #ffffff !important;\" class=\"font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 w-full sm:w-auto\">
                    Terminer la course
                  </button>
                </form>
              ";
            } else {
                // line 82
                yield " 
                <span class=\"text-sm text-gray-600\">Aucune action</span>
              ";
            }
            // line 85
            yield "            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 87
        if (!$context['_iterated']) {
            // line 88
            yield "          <tr>
            <td colspan=\"4\" class=\"py-2 px-4 border text-center\">Aucune course trouvée.</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "      </tbody>
    </table>
  </div>
</div>
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
        return "taxiste/dashboard.html.twig";
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
        return array (  273 => 92,  264 => 88,  262 => 87,  256 => 85,  251 => 82,  241 => 77,  239 => 76,  230 => 71,  228 => 70,  220 => 65,  211 => 60,  209 => 59,  204 => 57,  200 => 56,  196 => 55,  192 => 54,  188 => 53,  184 => 52,  180 => 51,  177 => 50,  172 => 49,  152 => 31,  147 => 28,  143 => 27,  141 => 26,  138 => 25,  136 => 24,  133 => 23,  131 => 22,  125 => 20,  119 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Tableau de bord Taxiste{% endblock %}

{% block body %}
<div class=\"bg-white shadow-md rounded-2xl w-full max-w-screen-lg mx-auto border border-gray-200 px-6\">
  <!-- Section Titre -->
  <div class=\"px-6 py-3 rounded-t-2xl\" style=\"background-color:rgb(3, 1, 111) !important;\">
    <h1 class=\"text-xl font-bold\" style=\"color: #ffffff !important;\">Tableau de bord du Taxi</h1>
  </div>

  <div class=\"p-6\">
    <h2 class=\"text-lg font-semibold\">Votre Taxi</h2>
    <p class=\"mb-4\">
      {{ taxi.marque }} {{ taxi.modele }} - {{ taxi.immatriculation }}<br>
      Statut : {{ taxi.statut }}
    </p>

    {# Bouton de changement de statut du taxi (gère plusieurs états) #}
    <form action=\"{{ path('taxiste_taxi_change_status', {'id': taxi.id}) }}\" method=\"post\" class=\"mb-6 inline-block\">
      <button type=\"submit\" style=\"background-color:rgb(73, 94, 5) !important; color: #ffffff !important;\" class=\"font-bold py-2 px-6 rounded-lg shadow-md transition duration-200 w-full sm:w-auto\">
        {% if taxi.statut|lower == 'disponible' %}
          Passer en indisponible
        {% elseif taxi.statut|lower == 'en course' %}
          Passer en indisponible
        {% elseif taxi.statut|lower == 'indisponible' %}
          Passer en disponible
        {% else %} 
          Changer le statut
        {% endif %}
      </button>
    </form>

    <h2 class=\"text-lg font-semibold mb-2\">Vos Courses</h2>
    <table class=\"w-full mt-2 border-collapse\">
      <thead>
        <tr class=\"bg-gray-100\">
          <th class=\"py-2 px-4 border\">Date</th>
          <th class=\"py-2 px-4 border\">villeDepart</th>
          <th class=\"py-2 px-4 border\">villeArrivee</th>
          <th class=\"py-2 px-4 border\">Distance</th>
          <th class=\"py-2 px-4 border\">Montant</th>
          <th class=\"py-2 px-4 border\">Client</th>
          <th class=\"py-2 px-4 border\">Statut</th>
          <th class=\"py-2 px-4 border\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for course in courses %}
          <tr class=\"hover:bg-gray-50\">
            <td class=\"py-2 px-4 border\">{{ course.dateCourse|date('d/m/Y H:i') }}</td>
            <td class=\"py-2 px-4 border\">{{ course.villeDepart }}</td>
            <td class=\"py-2 px-4 border\">{{ course.villeArrivee }}</td>
            <td class=\"py-2 px-4 border\">{{ course.distanceKm }} km</td>
            <td class=\"py-2 px-4 border\">{{ course.montant }} DNT</td>
            <td class=\"py-2 px-4 border\">{{ course.user.name }}</td>
            <td class=\"py-2 px-4 border\">{{ course.statut }}</td>
            <td class=\"py-2 px-4 border space-x-2\">
              {% if course.statut|lower == 'en attente' %}
                <form action=\"{{ path('taxiste_course_accept', {'id': course.id}) }}\" method=\"post\" class=\"inline-block\">
                  <button type=\"submit\" style=\"background-color: #10B981 !important; color: #ffffff !important;\" class=\"font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 w-full sm:w-auto\">
                    Accepter
                  </button>
                </form>
                <form action=\"{{ path('taxiste_course_refuse', {'id': course.id}) }}\" method=\"post\" class=\"inline-block\" onsubmit=\"return confirm('Refuser cette course ?');\">
                  <button type=\"submit\" style=\"background-color: #EF4444 !important; color: #ffffff !important;\" class=\"font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 w-full sm:w-auto\">
                    Refuser
                  </button>
                </form>
              {% elseif course.statut|lower == 'acceptée' %}
                <form action=\"{{ path('taxiste_course_start', {'id': course.id}) }}\" method=\"post\" class=\"inline-block\">
                  <button type=\"submit\" style=\"background-color:rgb(26, 3, 78) !important; color: #ffffff !important;\" class=\"font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 w-full sm:w-auto\">
                    Déclencher la course
                  </button>
                </form>
              {% elseif course.statut|lower == 'en course' %}
                <form action=\"{{ path('taxiste_course_finish', {'id': course.id}) }}\" method=\"post\" class=\"inline-block\">
                  <button type=\"submit\" style=\"background-color:rgb(63, 1, 1) !important; color: #ffffff !important;\" class=\"font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 w-full sm:w-auto\">
                    Terminer la course
                  </button>
                </form>
              {% else %} 
                <span class=\"text-sm text-gray-600\">Aucune action</span>
              {% endif %}
            </td>
          </tr>
        {% else %}
          <tr>
            <td colspan=\"4\" class=\"py-2 px-4 border text-center\">Aucune course trouvée.</td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
</div>
{% endblock %}
", "taxiste/dashboard.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\taxiste\\dashboard.html.twig");
    }
}
