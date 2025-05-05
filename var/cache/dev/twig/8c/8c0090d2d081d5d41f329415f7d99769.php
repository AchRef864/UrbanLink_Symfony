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

/* front_office/taxis.html.twig */
class __TwigTemplate_7b879a130cda8950e7ee7aa6951449d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/taxis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/taxis.html.twig"));

        $this->parent = $this->loadTemplate("back_office/base.html.twig", "front_office/taxis.html.twig", 1);
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

        yield "Taxis disponibles";
        
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
        yield "  <h1 class=\"text-2xl font-bold mb-4\">Taxis disponibles</h1>

  <table class=\"table-auto w-full border-collapse border border-gray-300\">
    <thead>
      <tr class=\"bg-gray-200\">
        <th class=\"border border-gray-300 px-4 py-2\">Nom Taxiste</th>
        <th class=\"border border-gray-300 px-4 py-2\">Immatriculation</th>
        <th class=\"border border-gray-300 px-4 py-2\">Marque</th>
        <th class=\"border border-gray-300 px-4 py-2\">Modèle</th>
        <th class=\"border border-gray-300 px-4 py-2\">Année</th>
        <th class=\"border border-gray-300 px-4 py-2\">Capacité</th>
        <th class=\"border border-gray-300 px-4 py-2\">Zone</th>
        <th class=\"border border-gray-300 px-4 py-2\">Statut</th>
        <th class=\"border border-gray-300 px-4 py-2\">Actions</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taxis"]) || array_key_exists("taxis", $context) ? $context["taxis"] : (function () { throw new RuntimeError('Variable "taxis" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taxi"]) {
            // line 24
            yield "        <tr>
          <td class=\"border border-gray-300 px-4 py-2\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "user", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
          <td class=\"border border-gray-300 px-4 py-2\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "immatriculation", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
          <td class=\"border border-gray-300 px-4 py-2\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "marque", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
          <td class=\"border border-gray-300 px-4 py-2\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "modele", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
          <td class=\"border border-gray-300 px-4 py-2\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "anneeFabrication", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
          <td class=\"border border-gray-300 px-4 py-2\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "capacite", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
          <td class=\"border border-gray-300 px-4 py-2\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "zoneDesserte", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
          <td class=\"border border-gray-300 px-4 py-2\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "statut", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
          <td class=\"border border-gray-300 px-4 py-2\">
            <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_new", ["taxiId" => CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"text-blue-500 hover:underline\">Réserver</a>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['taxi'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "    </tbody>
  </table>
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
        return "front_office/taxis.html.twig";
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
        return array (  169 => 38,  159 => 34,  154 => 32,  150 => 31,  146 => 30,  142 => 29,  138 => 28,  134 => 27,  130 => 26,  126 => 25,  123 => 24,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_office/base.html.twig' %}

{% block title %}Taxis disponibles{% endblock %}

{% block body %}
  <h1 class=\"text-2xl font-bold mb-4\">Taxis disponibles</h1>

  <table class=\"table-auto w-full border-collapse border border-gray-300\">
    <thead>
      <tr class=\"bg-gray-200\">
        <th class=\"border border-gray-300 px-4 py-2\">Nom Taxiste</th>
        <th class=\"border border-gray-300 px-4 py-2\">Immatriculation</th>
        <th class=\"border border-gray-300 px-4 py-2\">Marque</th>
        <th class=\"border border-gray-300 px-4 py-2\">Modèle</th>
        <th class=\"border border-gray-300 px-4 py-2\">Année</th>
        <th class=\"border border-gray-300 px-4 py-2\">Capacité</th>
        <th class=\"border border-gray-300 px-4 py-2\">Zone</th>
        <th class=\"border border-gray-300 px-4 py-2\">Statut</th>
        <th class=\"border border-gray-300 px-4 py-2\">Actions</th>
      </tr>
    </thead>
    <tbody>
      {% for taxi in taxis %}
        <tr>
          <td class=\"border border-gray-300 px-4 py-2\">{{ taxi.user.name }}</td>
          <td class=\"border border-gray-300 px-4 py-2\">{{ taxi.immatriculation }}</td>
          <td class=\"border border-gray-300 px-4 py-2\">{{ taxi.marque }}</td>
          <td class=\"border border-gray-300 px-4 py-2\">{{ taxi.modele }}</td>
          <td class=\"border border-gray-300 px-4 py-2\">{{ taxi.anneeFabrication }}</td>
          <td class=\"border border-gray-300 px-4 py-2\">{{ taxi.capacite }}</td>
          <td class=\"border border-gray-300 px-4 py-2\">{{ taxi.zoneDesserte }}</td>
          <td class=\"border border-gray-300 px-4 py-2\">{{ taxi.statut }}</td>
          <td class=\"border border-gray-300 px-4 py-2\">
            <a href=\"{{ path('course_new', { taxiId: taxi.id }) }}\" class=\"text-blue-500 hover:underline\">Réserver</a>
          </td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
{% endblock %}", "front_office/taxis.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\front_office\\taxis.html.twig");
    }
}
