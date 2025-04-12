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

/* trajet/modifier.html.twig */
class __TwigTemplate_277518f8dabd07e158723b9bf9118c79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/modifier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trajet/modifier.html.twig", 1);
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

        yield "Modifier Trajet - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 3, $this->source); })()), "departure", [], "any", false, false, false, 3), "html", null, true);
        yield " vers ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 3, $this->source); })()), "destination", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"container mx-auto px-4 py-8 max-w-3xl\">
    <h1 class=\"text-3xl font-bold mb-8 text-center\">Modifier le Trajet</h1>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
    <div style=\"margin-left: 280px;\">
        ";
        // line 12
        yield "        <div class=\"mb-4\">
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "departure", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Lieu de départ"]);
        yield "
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "departure", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "departure", [], "any", false, false, false, 15), 'errors');
        yield "
        </div>
        
        ";
        // line 19
        yield "        <div class=\"mb-4\">
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "destination", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Destination"]);
        yield "
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "destination", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "destination", [], "any", false, false, false, 22), 'errors');
        yield "
        </div>
        
        ";
        // line 26
        yield "        <div class=\"mb-4\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "distance", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Distance (km)"]);
        yield "
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "distance", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "distance", [], "any", false, false, false, 29), 'errors');
        yield "
        </div>
        
        ";
        // line 33
        yield "        <div class=\"mb-4\">
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "duration", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Durée (HH:MM)"]);
        yield "
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "duration", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500", "placeholder" => "Ex: 01:30 pour 1 heure 30 minutes"]]);
        // line 38
        yield "
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "duration", [], "any", false, false, false, 39), 'errors');
        yield "
            <p class=\"text-sm text-gray-500 mt-1\">Format: HH:MM (format 24 heures)</p>
        </div>
        
        ";
        // line 44
        yield "        <div class=\"mb-4\">
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "departureTime", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Heure de départ"]);
        yield "
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "departureTime", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        // line 48
        yield "
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "departureTime", [], "any", false, false, false, 49), 'errors');
        yield "
        </div>
        
        ";
        // line 53
        yield "        <div class=\"mb-4\">
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "price", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Prix (€)"]);
        yield "
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "price", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "price", [], "any", false, false, false, 56), 'errors');
        yield "
        </div>

        ";
        // line 60
        yield "        <div class=\"mb-4\">
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "availableSeats", [], "any", false, false, false, 61), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Places disponibles"]);
        yield "
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "availableSeats", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500", "min" => 0]]);
        // line 65
        yield "
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "availableSeats", [], "any", false, false, false, 66), 'errors');
        yield "
        </div>

        ";
        // line 70
        yield "        <div class=\"mb-4\">
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "vehicleId", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "ID Véhicule"]);
        yield "
            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vehicleId", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vehicleId", [], "any", false, false, false, 73), 'errors');
        yield "
        </div>

        ";
        // line 77
        yield "        <div class=\"mb-8\">
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "typeTransport", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Type de transport"]);
        yield "
            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "typeTransport", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "typeTransport", [], "any", false, false, false, 80), 'errors');
        yield "
        </div>

        ";
        // line 84
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "arrivalTime", [], "any", true, true, false, 84)) {
            // line 85
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "arrivalTime", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "hidden"]]);
            yield "
        ";
        }
        // line 87
        yield "
        <div class=\"mt-6 flex justify-between\">
            <button type=\"submit\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Enregistrer
            </button>
            <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage");
        yield "\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-gray-500 to-gray-700 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Annuler
            </a>
            ";
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)) {
            // line 96
            yield "                <button type=\"button\" onclick=\"confirmDelete(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96), "html", null, true);
            yield ")\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-red-500 to-red-700 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                    Supprimer
                </button>
            ";
        }
        // line 100
        yield "        </div>
    </div>
    ";
        // line 102
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
        yield "

    ";
        // line 105
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)) {
            // line 106
            yield "        <form id=\"delete-form-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106), "html", null, true);
            yield "\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" method=\"POST\" style=\"display: none;\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        </form>
    ";
        }
        // line 110
        yield "
    <div style=\"margin-left: 280px;\">
        <div class=\"mt-8 rounded-lg overflow-hidden\">
            <div class=\"bg-gradient-to-tl from-blue-500 to-violet-500 text-white px-6 py-3\">
                <h5 class=\"mb-0 text-lg font-semibold\">Informations calculées</h5>
            </div>
            <div class=\"bg-white px-6 py-4 shadow\">
                <div class=\"grid grid-cols-2 gap-4\">
                    <div>
                        <p class=\"font-medium text-gray-700\">Heure de départ:</p>
                        <p>";
        // line 120
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 120, $this->source); })()), "departureTime", [], "any", false, false, false, 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 120, $this->source); })()), "departureTime", [], "any", false, false, false, 120), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
        yield "</p>
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-700\">Heure d'arrivée estimée:</p>
                        <p>";
        // line 124
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 124, $this->source); })()), "arrivalTime", [], "any", false, false, false, 124)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 124, $this->source); })()), "arrivalTime", [], "any", false, false, false, 124), "d/m/Y H:i"), "html", null, true)) : ("Non calculée"));
        yield "</p>
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-700\">Places disponibles:</p>
                        <p>";
        // line 128
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["trajet"] ?? null), "availableSeats", [], "any", true, true, false, 128) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 128, $this->source); })()), "availableSeats", [], "any", false, false, false, 128)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 128, $this->source); })()), "availableSeats", [], "any", false, false, false, 128), "html", null, true)) : ("Non spécifié"));
        yield "</p>
                    </div>
                </div>
            </div>
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
        return "trajet/modifier.html.twig";
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
        return array (  350 => 128,  343 => 124,  336 => 120,  324 => 110,  314 => 106,  311 => 105,  306 => 102,  302 => 100,  294 => 96,  292 => 95,  286 => 92,  279 => 87,  273 => 85,  270 => 84,  264 => 80,  260 => 79,  256 => 78,  253 => 77,  247 => 73,  243 => 72,  239 => 71,  236 => 70,  230 => 66,  227 => 65,  225 => 62,  221 => 61,  218 => 60,  212 => 56,  208 => 55,  204 => 54,  201 => 53,  195 => 49,  192 => 48,  190 => 46,  186 => 45,  183 => 44,  176 => 39,  173 => 38,  171 => 35,  167 => 34,  164 => 33,  158 => 29,  154 => 28,  150 => 27,  147 => 26,  141 => 22,  137 => 21,  133 => 20,  130 => 19,  124 => 15,  120 => 14,  116 => 13,  113 => 12,  108 => 9,  103 => 6,  90 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Trajet - {{ trajet.departure }} vers {{ trajet.destination }}{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8 max-w-3xl\">
    <h1 class=\"text-3xl font-bold mb-8 text-center\">Modifier le Trajet</h1>

    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
    <div style=\"margin-left: 280px;\">
        {# Departure #}
        <div class=\"mb-4\">
            {{ form_label(form.departure, 'Lieu de départ', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.departure, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            {{ form_errors(form.departure) }}
        </div>
        
        {# Destination #}
        <div class=\"mb-4\">
            {{ form_label(form.destination, 'Destination', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.destination, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            {{ form_errors(form.destination) }}
        </div>
        
        {# Distance #}
        <div class=\"mb-4\">
            {{ form_label(form.distance, 'Distance (km)', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.distance, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            {{ form_errors(form.distance) }}
        </div>
        
        {# Duration #}
        <div class=\"mb-4\">
            {{ form_label(form.duration, 'Durée (HH:MM)', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.duration, {'attr': {
                'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500',
                'placeholder': 'Ex: 01:30 pour 1 heure 30 minutes'
            }}) }}
            {{ form_errors(form.duration) }}
            <p class=\"text-sm text-gray-500 mt-1\">Format: HH:MM (format 24 heures)</p>
        </div>
        
        {# Departure Time #}
        <div class=\"mb-4\">
            {{ form_label(form.departureTime, 'Heure de départ', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.departureTime, {'attr': {
                'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'
            }}) }}
            {{ form_errors(form.departureTime) }}
        </div>
        
        {# Price #}
        <div class=\"mb-4\">
            {{ form_label(form.price, 'Prix (€)', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.price, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            {{ form_errors(form.price) }}
        </div>

        {# Available Seats #}
        <div class=\"mb-4\">
            {{ form_label(form.availableSeats, 'Places disponibles', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.availableSeats, {'attr': {
                'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500',
                'min': 0
            }}) }}
            {{ form_errors(form.availableSeats) }}
        </div>

        {# Vehicle ID #}
        <div class=\"mb-4\">
            {{ form_label(form.vehicleId, 'ID Véhicule', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.vehicleId, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            {{ form_errors(form.vehicleId) }}
        </div>

        {# Transport Type #}
        <div class=\"mb-8\">
            {{ form_label(form.typeTransport, 'Type de transport', {'label_attr': {'class': 'block mb-2 text-sm font-medium text-gray-900'}}) }}
            {{ form_widget(form.typeTransport, {'attr': {'class': 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500'}}) }}
            {{ form_errors(form.typeTransport) }}
        </div>

        {# Hidden arrivalTime field #}
        {% if form.arrivalTime is defined %}
            {{ form_widget(form.arrivalTime, {'attr': {'class': 'hidden'}}) }}
        {% endif %}

        <div class=\"mt-6 flex justify-between\">
            <button type=\"submit\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Enregistrer
            </button>
            <a href=\"{{ path('trajet_affichage') }}\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-gray-500 to-gray-700 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Annuler
            </a>
            {% if trajet.id %}
                <button type=\"button\" onclick=\"confirmDelete({{ trajet.id }})\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-red-500 to-red-700 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                    Supprimer
                </button>
            {% endif %}
        </div>
    </div>
    {{ form_end(form) }}

    {# Delete Form (outside the main form) #}
    {% if trajet.id %}
        <form id=\"delete-form-{{ trajet.id }}\" action=\"{{ path('trajet_supprimer', {'id': trajet.id}) }}\" method=\"POST\" style=\"display: none;\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        </form>
    {% endif %}

    <div style=\"margin-left: 280px;\">
        <div class=\"mt-8 rounded-lg overflow-hidden\">
            <div class=\"bg-gradient-to-tl from-blue-500 to-violet-500 text-white px-6 py-3\">
                <h5 class=\"mb-0 text-lg font-semibold\">Informations calculées</h5>
            </div>
            <div class=\"bg-white px-6 py-4 shadow\">
                <div class=\"grid grid-cols-2 gap-4\">
                    <div>
                        <p class=\"font-medium text-gray-700\">Heure de départ:</p>
                        <p>{{ trajet.departureTime ? trajet.departureTime|date('d/m/Y H:i') : 'Non définie' }}</p>
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-700\">Heure d'arrivée estimée:</p>
                        <p>{{ trajet.arrivalTime ? trajet.arrivalTime|date('d/m/Y H:i') : 'Non calculée' }}</p>
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-700\">Places disponibles:</p>
                        <p>{{ trajet.availableSeats ?? 'Non spécifié' }}</p>
                    </div>
                </div>
            </div>
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
{% endblock %}", "trajet/modifier.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\trajet\\modifier.html.twig");
    }
}
