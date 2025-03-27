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

/* trajet/ajouter.html.twig */
class __TwigTemplate_2cc487239ff9c8fb15d7167ac013c41a extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/ajouter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trajet/ajouter.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Ajouter un Trajet";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"container mx-auto px-4 py-8 max-w-3xl\">
    <h1 class=\"text-3xl font-bold mb-8 text-center\">Ajouter un Trajet</h1>

    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
    <div style=\"margin-left: 280px;\">

        ";
        // line 15
        yield "        <div class=\"mb-4\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "departure", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Lieu de départ"]);
        yield "
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "departure", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            <div style=\"color: red; font-weight: bold;\">
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "departure", [], "any", false, false, false, 19), 'errors');
        yield "
            </div>
        </div>

        ";
        // line 24
        yield "        <div class=\"mb-4\">
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "destination", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Destination"]);
        yield "
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "destination", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            <div style=\"color: red; font-weight: bold;\">
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "destination", [], "any", false, false, false, 28), 'errors');
        yield "
            </div>
        </div>

        ";
        // line 33
        yield "        <div class=\"mb-4\">
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "distance", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Distance (km)"]);
        yield "
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "distance", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            <div style=\"color: red; font-weight: bold;\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "distance", [], "any", false, false, false, 37), 'errors');
        yield "
            </div>
        </div>

        ";
        // line 42
        yield "        <div class=\"mb-4\">
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "duration", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Durée (HH:MM)"]);
        yield "
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "duration", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500", "placeholder" => "Ex: 01:30 pour 1 heure 30 minutes"]]);
        // line 47
        yield "
            <div style=\"color: red; font-weight: bold;\">
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "duration", [], "any", false, false, false, 49), 'errors');
        yield "
            </div>
            <p class=\"text-sm text-gray-500 mt-1\">Format: HH:MM (format 24 heures)</p>
        </div>

        ";
        // line 55
        yield "        <div class=\"mb-4\">
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "departureTime", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Heure de départ"]);
        yield "
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "departureTime", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        // line 59
        yield "
            <div style=\"color: red; font-weight: bold;\">
                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "departureTime", [], "any", false, false, false, 61), 'errors');
        yield "
            </div>
        </div>

        ";
        // line 66
        yield "        <div class=\"mb-4\">
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "price", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Prix (€)"]);
        yield "
            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "price", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            <div style=\"color: red; font-weight: bold;\">
                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "price", [], "any", false, false, false, 70), 'errors');
        yield "
            </div>
        </div>

        ";
        // line 75
        yield "        <div class=\"mb-4\">
            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vehicleId", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "ID Véhicule"]);
        yield "
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vehicleId", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            <div style=\"color: red; font-weight: bold;\">
                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "vehicleId", [], "any", false, false, false, 79), 'errors');
        yield "
            </div>
        </div>

        ";
        // line 84
        yield "        <div class=\"mb-8\">
            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "typeTransport", [], "any", false, false, false, 85), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Type de transport"]);
        yield "
            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "typeTransport", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            <div style=\"color: red; font-weight: bold;\">
                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "typeTransport", [], "any", false, false, false, 88), 'errors');
        yield "
            </div>
        </div>

        ";
        // line 93
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "arrivalTime", [], "any", true, true, false, 93)) {
            // line 94
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "arrivalTime", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "hidden"]]);
            yield "
        ";
        }
        // line 96
        yield "
        <div class=\"mt-6\">
            <button type=\"submit\" class=\"inline-block w-full px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Ajouter
            </button>
        </div>
    </div>
    ";
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        yield "
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
        return "trajet/ajouter.html.twig";
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
        return array (  284 => 103,  275 => 96,  269 => 94,  266 => 93,  259 => 88,  254 => 86,  250 => 85,  247 => 84,  240 => 79,  235 => 77,  231 => 76,  228 => 75,  221 => 70,  216 => 68,  212 => 67,  209 => 66,  202 => 61,  198 => 59,  196 => 57,  192 => 56,  189 => 55,  181 => 49,  177 => 47,  175 => 44,  171 => 43,  168 => 42,  161 => 37,  156 => 35,  152 => 34,  149 => 33,  142 => 28,  137 => 26,  133 => 25,  130 => 24,  123 => 19,  118 => 17,  114 => 16,  111 => 15,  105 => 11,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/trajet/ajout.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Ajouter un Trajet{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8 max-w-3xl\">
    <h1 class=\"text-3xl font-bold mb-8 text-center\">Ajouter un Trajet</h1>

    {{ form_start(form) }}
    <div style=\"margin-left: 280px;\">

        {# Departure #}
        <div class=\"mb-4\">
            {{ form_label(form.departure, 'Lieu de départ', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.departure, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            <div style=\"color: red; font-weight: bold;\">
                {{ form_errors(form.departure) }}
            </div>
        </div>

        {# Destination #}
        <div class=\"mb-4\">
            {{ form_label(form.destination, 'Destination', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.destination, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            <div style=\"color: red; font-weight: bold;\">
                {{ form_errors(form.destination) }}
            </div>
        </div>

        {# Distance #}
        <div class=\"mb-4\">
            {{ form_label(form.distance, 'Distance (km)', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.distance, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            <div style=\"color: red; font-weight: bold;\">
                {{ form_errors(form.distance) }}
            </div>
        </div>

        {# Duration #}
        <div class=\"mb-4\">
            {{ form_label(form.duration, 'Durée (HH:MM)', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.duration, {'attr': {
                'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500',
                'placeholder': 'Ex: 01:30 pour 1 heure 30 minutes'
            }}) }}
            <div style=\"color: red; font-weight: bold;\">
                {{ form_errors(form.duration) }}
            </div>
            <p class=\"text-sm text-gray-500 mt-1\">Format: HH:MM (format 24 heures)</p>
        </div>

        {# Departure Time #}
        <div class=\"mb-4\">
            {{ form_label(form.departureTime, 'Heure de départ', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.departureTime, {'attr': {
                'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'
            }}) }}
            <div style=\"color: red; font-weight: bold;\">
                {{ form_errors(form.departureTime) }}
            </div>
        </div>

        {# Price #}
        <div class=\"mb-4\">
            {{ form_label(form.price, 'Prix (€)', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.price, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            <div style=\"color: red; font-weight: bold;\">
                {{ form_errors(form.price) }}
            </div>
        </div>

        {# Vehicle ID #}
        <div class=\"mb-4\">
            {{ form_label(form.vehicleId, 'ID Véhicule', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.vehicleId, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            <div style=\"color: red; font-weight: bold;\">
                {{ form_errors(form.vehicleId) }}
            </div>
        </div>

        {# Transport Type #}
        <div class=\"mb-8\">
            {{ form_label(form.typeTransport, 'Type de transport', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.typeTransport, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            <div style=\"color: red; font-weight: bold;\">
                {{ form_errors(form.typeTransport) }}
            </div>
        </div>

        {# Hidden arrivalTime field #}
        {% if form.arrivalTime is defined %}
            {{ form_widget(form.arrivalTime, {'attr': {'class': 'hidden'}}) }}
        {% endif %}

        <div class=\"mt-6\">
            <button type=\"submit\" class=\"inline-block w-full px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Ajouter
            </button>
        </div>
    </div>
    {{ form_end(form) }}
</div>
{% endblock %}
", "trajet/ajouter.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony_Fork-main\\templates\\trajet\\ajouter.html.twig");
    }
}
