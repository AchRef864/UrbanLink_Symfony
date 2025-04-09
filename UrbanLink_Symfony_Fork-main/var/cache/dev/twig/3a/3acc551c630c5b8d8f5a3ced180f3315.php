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
class __TwigTemplate_38299bbbc9b3953433f9917100b24b32 extends Template
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
        // line 13
        yield "        <div class=\"mb-4\">
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "departure", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Lieu de départ"]);
        yield "
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "departure", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "departure", [], "any", false, false, false, 16), 'errors');
        yield "
        </div>
        
        ";
        // line 20
        yield "        <div class=\"mb-4\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "destination", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Destination"]);
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "destination", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "destination", [], "any", false, false, false, 23), 'errors');
        yield "
        </div>
        
        ";
        // line 27
        yield "        <div class=\"mb-4\">
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "distance", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Distance (km)"]);
        yield "
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "distance", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "distance", [], "any", false, false, false, 30), 'errors');
        yield "
        </div>
        
        ";
        // line 34
        yield "        <div class=\"mb-4\">
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "duration", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Durée (HH:MM)"]);
        yield "
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "duration", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500", "placeholder" => "Ex: 01:30 pour 1 heure 30 minutes"]]);
        // line 39
        yield "
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "duration", [], "any", false, false, false, 40), 'errors');
        yield "
            <p class=\"text-sm text-gray-500 mt-1\">Format: HH:MM (format 24 heures)</p>
        </div>
        
        ";
        // line 45
        yield "        <div class=\"mb-4\">
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "departureTime", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Heure de départ"]);
        yield "
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "departureTime", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        // line 49
        yield "
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "departureTime", [], "any", false, false, false, 50), 'errors');
        yield "
        </div>
        
        ";
        // line 54
        yield "        <div class=\"mb-4\">
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "price", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Prix (€)"]);
        yield "
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "price", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "price", [], "any", false, false, false, 57), 'errors');
        yield "
        </div>

        ";
        // line 61
        yield "        <div class=\"mb-4\">
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "availableSeats", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Places disponibles"]);
        yield "
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "availableSeats", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500", "min" => 0]]);
        // line 66
        yield "
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "availableSeats", [], "any", false, false, false, 67), 'errors');
        yield "
        </div>

        ";
        // line 71
        yield "        <div class=\"mb-4\">
            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vehicleId", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "ID Véhicule"]);
        yield "
            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vehicleId", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vehicleId", [], "any", false, false, false, 74), 'errors');
        yield "
        </div>

        ";
        // line 78
        yield "        <div class=\"mb-8\">
            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "typeTransport", [], "any", false, false, false, 79), 'label', ["label_attr" => ["class" => "block mb-2 text-sm font-medium text-gray-900"], "label" => "Type de transport"]);
        yield "
            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "typeTransport", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "typeTransport", [], "any", false, false, false, 81), 'errors');
        yield "
        </div>

        ";
        // line 85
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "arrivalTime", [], "any", true, true, false, 85)) {
            // line 86
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "arrivalTime", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "hidden"]]);
            yield "
        ";
        }
        // line 88
        yield "
        <div class=\"mt-6 flex justify-between\">
            <button type=\"submit\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Enregistrer
            </button>
            <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage");
        yield "\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-gray-500 to-gray-700 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Annuler
            </a>
            ";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)) {
            // line 97
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
            yield "\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-red-500 to-red-700 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\"
               onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce trajet?')\">
                Supprimer
            </a>
            ";
        }
        // line 102
        yield "        </div>
    </div>
    ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
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
        // line 114
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 114, $this->source); })()), "departureTime", [], "any", false, false, false, 114)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 114, $this->source); })()), "departureTime", [], "any", false, false, false, 114), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
        yield "</p>
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-700\">Heure d'arrivée estimée:</p>
                        <p>";
        // line 118
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 118, $this->source); })()), "arrivalTime", [], "any", false, false, false, 118)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 118, $this->source); })()), "arrivalTime", [], "any", false, false, false, 118), "d/m/Y H:i"), "html", null, true)) : ("Non calculée"));
        yield "</p>
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-700\">Places disponibles:</p>
                        <p>";
        // line 122
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["trajet"] ?? null), "availableSeats", [], "any", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 122, $this->source); })()), "availableSeats", [], "any", false, false, false, 122)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 122, $this->source); })()), "availableSeats", [], "any", false, false, false, 122), "html", null, true)) : ("Non spécifié"));
        yield "</p>
                    </div>
                </div>
            </div>
        </div>
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
        return array (  335 => 122,  328 => 118,  321 => 114,  308 => 104,  304 => 102,  295 => 97,  293 => 96,  287 => 93,  280 => 88,  274 => 86,  271 => 85,  265 => 81,  261 => 80,  257 => 79,  254 => 78,  248 => 74,  244 => 73,  240 => 72,  237 => 71,  231 => 67,  228 => 66,  226 => 63,  222 => 62,  219 => 61,  213 => 57,  209 => 56,  205 => 55,  202 => 54,  196 => 50,  193 => 49,  191 => 47,  187 => 46,  184 => 45,  177 => 40,  174 => 39,  172 => 36,  168 => 35,  165 => 34,  159 => 30,  155 => 29,  151 => 28,  148 => 27,  142 => 23,  138 => 22,  134 => 21,  131 => 20,  125 => 16,  121 => 15,  117 => 14,  114 => 13,  108 => 9,  103 => 6,  90 => 5,  64 => 3,  41 => 1,);
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
            <a href=\"{{ path('trajet_supprimer', {'id': trajet.id}) }}\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-red-500 to-red-700 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\"
               onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce trajet?')\">
                Supprimer
            </a>
            {% endif %}
        </div>
    </div>
    {{ form_end(form) }}
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
{% endblock %}", "trajet/modifier.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\trajet\\modifier.html.twig");
    }
}
