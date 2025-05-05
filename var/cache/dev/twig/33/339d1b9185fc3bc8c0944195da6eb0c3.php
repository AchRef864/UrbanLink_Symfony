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

/* reservation/success.html.twig */
class __TwigTemplate_0d9998d8d5361d15eff09e9720eff378 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/success.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/success.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div style=\"margin-left: 280px;\">
    <div class=\"container mx-auto px-4 py-6\">
        <div class=\"bg-white p-6 rounded-lg shadow-md text-center\">
            <div class=\"mb-6\">
                <svg class=\"mx-auto h-16 w-16 text-green-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                </svg>
                <h1 class=\"text-2xl font-bold mb-2\">Réservation confirmée!</h1>
                <p class=\"text-gray-600\">Votre réservation #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield " a été confirmée avec succès.</p>
            </div>

            <div class=\"mb-6 p-4 bg-gray-50 rounded-lg text-left\">
                <h2 class=\"text-lg font-semibold mb-3\">Détails de la réservation</h2>
                <div class=\"grid grid-cols-2 gap-4\">
                    <div>
                        <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Trajet:</span> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "trajet", [], "any", false, false, false, 19), "departure", [], "any", false, false, false, 19), "html", null, true);
        yield " → ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "trajet", [], "any", false, false, false, 19), "destination", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
                        <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Date:</span> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 20, $this->source); })()), "trajet", [], "any", false, false, false, 20), "departureTime", [], "any", false, false, false, 20), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                    </div>
                    <div>
                        <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Places:</span> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
                        <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Prix total:</span> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 24, $this->source); })()), "totalPrice", [], "any", false, false, false, 24), "html", null, true);
        yield " €</p>
                    </div>
                </div>
            </div>

            <div class=\"flex justify-center space-x-4\">
                <a href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\" 
                   class=\"px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600\">
                    Télécharger le reçu (PDF)
                </a>
                <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_list");
        yield "\" 
                   class=\"px-6 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300\">
                    Retour à mes réservations
                </a>
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
        return "reservation/success.html.twig";
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
        return array (  128 => 34,  121 => 30,  112 => 24,  108 => 23,  102 => 20,  96 => 19,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div style=\"margin-left: 280px;\">
    <div class=\"container mx-auto px-4 py-6\">
        <div class=\"bg-white p-6 rounded-lg shadow-md text-center\">
            <div class=\"mb-6\">
                <svg class=\"mx-auto h-16 w-16 text-green-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                </svg>
                <h1 class=\"text-2xl font-bold mb-2\">Réservation confirmée!</h1>
                <p class=\"text-gray-600\">Votre réservation #{{ reservation.id }} a été confirmée avec succès.</p>
            </div>

            <div class=\"mb-6 p-4 bg-gray-50 rounded-lg text-left\">
                <h2 class=\"text-lg font-semibold mb-3\">Détails de la réservation</h2>
                <div class=\"grid grid-cols-2 gap-4\">
                    <div>
                        <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Trajet:</span> {{ reservation.trajet.departure }} → {{ reservation.trajet.destination }}</p>
                        <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Date:</span> {{ reservation.trajet.departureTime|date('d/m/Y H:i') }}</p>
                    </div>
                    <div>
                        <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Places:</span> {{ reservation.numberOfSeats }}</p>
                        <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Prix total:</span> {{ reservation.totalPrice }} €</p>
                    </div>
                </div>
            </div>

            <div class=\"flex justify-center space-x-4\">
                <a href=\"{{ path('reservation_pdf', {'id': reservation.id}) }}\" 
                   class=\"px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600\">
                    Télécharger le reçu (PDF)
                </a>
                <a href=\"{{ path('reservation_list') }}\" 
                   class=\"px-6 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300\">
                    Retour à mes réservations
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "reservation/success.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\reservation\\success.html.twig");
    }
}
