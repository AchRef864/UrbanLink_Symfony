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

/* front_office/taxi/rate.html.twig */
class __TwigTemplate_d2a8ee74f33fa421719092623d191371 extends Template
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
        return "back_office/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/taxi/rate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/taxi/rate.html.twig"));

        $this->parent = $this->loadTemplate("back_office/base.html.twig", "front_office/taxi/rate.html.twig", 1);
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

        yield "Noter le Taxiste";
        
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
        yield "<div class=\"max-w-3xl mx-auto my-5 px-4\">
  <h1 class=\"text-2xl font-bold mb-4\">Noter le Taxiste</h1>

  <div class=\"bg-white shadow rounded-lg mb-6 p-6\">
    <h2 class=\"text-xl font-semibold mb-2\">
      Taxi : ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 11, $this->source); })()), "marque", [], "any", false, false, false, 11), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 11, $this->source); })()), "modele", [], "any", false, false, false, 11), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 11, $this->source); })()), "immatriculation", [], "any", false, false, false, 11), "html", null, true);
        yield "
    </h2>
    ";
        // line 13
        if (((isset($context["totalRatings"]) || array_key_exists("totalRatings", $context) ? $context["totalRatings"] : (function () { throw new RuntimeError('Variable "totalRatings" does not exist.', 13, $this->source); })()) > 0)) {
            // line 14
            yield "      <p class=\"text-gray-700\">
        Note moyenne : <strong class=\"text-blue-600\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["avgRating"]) || array_key_exists("avgRating", $context) ? $context["avgRating"] : (function () { throw new RuntimeError('Variable "avgRating" does not exist.', 15, $this->source); })()), 1), "html", null, true);
            yield " / 10</strong>
        (";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalRatings"]) || array_key_exists("totalRatings", $context) ? $context["totalRatings"] : (function () { throw new RuntimeError('Variable "totalRatings" does not exist.', 16, $this->source); })()), "html", null, true);
            yield " avis)
      </p>
    ";
        } else {
            // line 19
            yield "      <p class=\"text-gray-700\">Aucun avis pour le moment.</p>
    ";
        }
        // line 21
        yield "  </div>

  <form action=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\" method=\"post\" class=\"bg-white shadow rounded-lg p-6\">
    <div class=\"mb-4\">
      <label for=\"note\" class=\"block text-gray-700 font-medium mb-2\">Votre note (1 à 10)</label>
      <input type=\"number\" id=\"note\" name=\"note\" min=\"1\" max=\"10\" class=\"w-full border border-gray-300 rounded p-2\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["rating"] ?? null), "note", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 26, $this->source); })()), "note", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
        yield "\" required>
    </div>
    <div class=\"mb-4\">
      <label for=\"commentaire\" class=\"block text-gray-700 font-medium mb-2\">Votre commentaire (optionnel)</label>
      <textarea id=\"commentaire\" name=\"commentaire\" class=\"w-full border border-gray-300 rounded p-2\" rows=\"3\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["rating"] ?? null), "commentaire", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 30, $this->source); })()), "commentaire", [], "any", false, false, false, 30), "")) : ("")), "html", null, true);
        yield "</textarea>
    </div>
    <button type=\"submit\" class=\"w-full font-bold py-2 px-4 rounded transition duration-200\"
            style=\"background-color: #2563eb !important; color: #ffffff !important;\">
      Envoyer votre évaluation
    </button>
  </form>
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
        return "front_office/taxi/rate.html.twig";
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
        return array (  152 => 30,  145 => 26,  139 => 23,  135 => 21,  131 => 19,  125 => 16,  121 => 15,  118 => 14,  116 => 13,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_office/base.html.twig' %}

{% block title %}Noter le Taxiste{% endblock %}

{% block body %}
<div class=\"max-w-3xl mx-auto my-5 px-4\">
  <h1 class=\"text-2xl font-bold mb-4\">Noter le Taxiste</h1>

  <div class=\"bg-white shadow rounded-lg mb-6 p-6\">
    <h2 class=\"text-xl font-semibold mb-2\">
      Taxi : {{ taxi.marque }} {{ taxi.modele }} - {{ taxi.immatriculation }}
    </h2>
    {% if totalRatings > 0 %}
      <p class=\"text-gray-700\">
        Note moyenne : <strong class=\"text-blue-600\">{{ avgRating|number_format(1) }} / 10</strong>
        ({{ totalRatings }} avis)
      </p>
    {% else %}
      <p class=\"text-gray-700\">Aucun avis pour le moment.</p>
    {% endif %}
  </div>

  <form action=\"{{ path('taxi_rate', {'id': taxi.id}) }}\" method=\"post\" class=\"bg-white shadow rounded-lg p-6\">
    <div class=\"mb-4\">
      <label for=\"note\" class=\"block text-gray-700 font-medium mb-2\">Votre note (1 à 10)</label>
      <input type=\"number\" id=\"note\" name=\"note\" min=\"1\" max=\"10\" class=\"w-full border border-gray-300 rounded p-2\" value=\"{{ rating.note|default('') }}\" required>
    </div>
    <div class=\"mb-4\">
      <label for=\"commentaire\" class=\"block text-gray-700 font-medium mb-2\">Votre commentaire (optionnel)</label>
      <textarea id=\"commentaire\" name=\"commentaire\" class=\"w-full border border-gray-300 rounded p-2\" rows=\"3\">{{ rating.commentaire|default('') }}</textarea>
    </div>
    <button type=\"submit\" class=\"w-full font-bold py-2 px-4 rounded transition duration-200\"
            style=\"background-color: #2563eb !important; color: #ffffff !important;\">
      Envoyer votre évaluation
    </button>
  </form>
</div>
{% endblock %}
", "front_office/taxi/rate.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\front_office\\taxi\\rate.html.twig");
    }
}
