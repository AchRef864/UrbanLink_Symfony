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

/* reservation/trajet_supprime.html.twig */
class __TwigTemplate_515d585632b060ab7d9ba29bd287643e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/trajet_supprime.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/trajet_supprime.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/trajet_supprime.html.twig", 1);
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

        yield "Trajet Supprimé - Détails";
        
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
        .main-content-container {
            display: flex;
            justify-content: center;
            padding: 2rem;
        }
        .deleted-trajet-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            padding: 2rem;
            margin: 2rem 0;
            width: 100%;
            max-width: 900px; /* Adjust this value as needed */
        }
        .deleted-alert {
            background-color: #FFEBEE;
            border-left: 4px solid #D32F2F;
            padding: 1rem;
            margin-bottom: 2rem;
            border-radius: 4px;
        }
        .trajet-info {
            margin-bottom: 2rem;
        }
        .action-btn {
            margin-top: 1.5rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
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

        // line 39
        yield "<div class=\"main-content-container\">
    <div class=\"deleted-trajet-container\">
        <div class=\"deleted-alert\">
            <h2 style=\"margin-top: 0; color: #D32F2F;\">Trajet supprimé définitivement</h2>
            <p>Le conducteur a supprimé ce trajet et il n'est plus disponible.</p>
            <p><strong>Date de suppression:</strong> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 44, $this->source); })()), "trajetDeletedAt", [], "any", false, false, false, 44), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
        </div>

        <div class=\"trajet-info\">
            <h3>Informations du trajet supprimé</h3>
            <div class=\"journey-route\">
                <span>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajetInfo"]) || array_key_exists("trajetInfo", $context) ? $context["trajetInfo"] : (function () { throw new RuntimeError('Variable "trajetInfo" does not exist.', 50, $this->source); })()), "departure", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M5 12h14\"></path>
                    <path d=\"M12 5l7 7-7 7\"></path>
                </svg>
                <span>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajetInfo"]) || array_key_exists("trajetInfo", $context) ? $context["trajetInfo"] : (function () { throw new RuntimeError('Variable "trajetInfo" does not exist.', 55, $this->source); })()), "destination", [], "any", false, false, false, 55), "html", null, true);
        yield "</span>
            </div>
            <div class=\"journey-details\">
                <span class=\"journey-detail\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                        <polyline points=\"12 6 12 12 16 14\"></polyline>
                    </svg>
                    ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajetInfo"]) || array_key_exists("trajetInfo", $context) ? $context["trajetInfo"] : (function () { throw new RuntimeError('Variable "trajetInfo" does not exist.', 63, $this->source); })()), "date", [], "any", false, false, false, 63), "html", null, true);
        yield "
                </span>
                <span class=\"journey-detail\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83\"></path>
                    </svg>
                    ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajetInfo"]) || array_key_exists("trajetInfo", $context) ? $context["trajetInfo"] : (function () { throw new RuntimeError('Variable "trajetInfo" does not exist.', 69, $this->source); })()), "price", [], "any", false, false, false, 69), "html", null, true);
        yield " DT
                </span>
                <span class=\"journey-detail\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path>
                        <circle cx=\"9\" cy=\"7\" r=\"4\"></circle>
                        <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path>
                        <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path>
                    </svg>
                    ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajetInfo"]) || array_key_exists("trajetInfo", $context) ? $context["trajetInfo"] : (function () { throw new RuntimeError('Variable "trajetInfo" does not exist.', 78, $this->source); })()), "seats", [], "any", false, false, false, 78), "html", null, true);
        yield " places
                </span>
            </div>
        </div>

        <div class=\"reservation-info\">
            <h3>Détails de votre réservation</h3>
            <p><strong>Date de réservation:</strong> ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 85, $this->source); })()), "reservationDate", [], "any", false, false, false, 85), "d/m/Y H:i"), "html", null, true);
        yield "</p>
            <p><strong>Nombre de places réservées:</strong> ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 86, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 86), "html", null, true);
        yield "</p>
            <p><strong>Prix total:</strong> ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 87, $this->source); })()), "totalPrice", [], "any", false, false, false, 87), "html", null, true);
        yield " DT</p>
            <p><strong>Statut:</strong> 
                <span class=\"badge badge-canceled\">
                    Réservation annulée (trajet supprimé)
                </span>
            </p>
        </div>

        <div class=\"next-steps\">
            <h3>Que faire maintenant ?</h3>
            <ul>
                <li>Si vous avez payé, un remboursement automatique sera initié</li>
                <li>Consultez notre plateforme pour trouver un trajet alternatif</li>
                <li>Contactez notre support si vous avez des questions</li>
            </ul>
        </div>

        <div class=\"action-btn\">
            <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage");
        yield "\" class=\"btn btn-primary\" 
            style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                   border: none; 
                   border-radius: 25px; 
                   padding: 10px 25px; 
                   color: white; 
                   font-weight: 600;
                   box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                   transition: all 0.3s ease;\">
                Trouver un autre trajet
            </a>
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
        return "reservation/trajet_supprime.html.twig";
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
        return array (  252 => 105,  231 => 87,  227 => 86,  223 => 85,  213 => 78,  201 => 69,  192 => 63,  181 => 55,  173 => 50,  164 => 44,  157 => 39,  144 => 38,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trajet Supprimé - Détails{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .main-content-container {
            display: flex;
            justify-content: center;
            padding: 2rem;
        }
        .deleted-trajet-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            padding: 2rem;
            margin: 2rem 0;
            width: 100%;
            max-width: 900px; /* Adjust this value as needed */
        }
        .deleted-alert {
            background-color: #FFEBEE;
            border-left: 4px solid #D32F2F;
            padding: 1rem;
            margin-bottom: 2rem;
            border-radius: 4px;
        }
        .trajet-info {
            margin-bottom: 2rem;
        }
        .action-btn {
            margin-top: 1.5rem;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"main-content-container\">
    <div class=\"deleted-trajet-container\">
        <div class=\"deleted-alert\">
            <h2 style=\"margin-top: 0; color: #D32F2F;\">Trajet supprimé définitivement</h2>
            <p>Le conducteur a supprimé ce trajet et il n'est plus disponible.</p>
            <p><strong>Date de suppression:</strong> {{ reservation.trajetDeletedAt|date('d/m/Y à H:i') }}</p>
        </div>

        <div class=\"trajet-info\">
            <h3>Informations du trajet supprimé</h3>
            <div class=\"journey-route\">
                <span>{{ trajetInfo.departure }}</span>
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M5 12h14\"></path>
                    <path d=\"M12 5l7 7-7 7\"></path>
                </svg>
                <span>{{ trajetInfo.destination }}</span>
            </div>
            <div class=\"journey-details\">
                <span class=\"journey-detail\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                        <polyline points=\"12 6 12 12 16 14\"></polyline>
                    </svg>
                    {{ trajetInfo.date }}
                </span>
                <span class=\"journey-detail\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83\"></path>
                    </svg>
                    {{ trajetInfo.price }} DT
                </span>
                <span class=\"journey-detail\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path>
                        <circle cx=\"9\" cy=\"7\" r=\"4\"></circle>
                        <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path>
                        <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path>
                    </svg>
                    {{ trajetInfo.seats }} places
                </span>
            </div>
        </div>

        <div class=\"reservation-info\">
            <h3>Détails de votre réservation</h3>
            <p><strong>Date de réservation:</strong> {{ reservation.reservationDate|date('d/m/Y H:i') }}</p>
            <p><strong>Nombre de places réservées:</strong> {{ reservation.numberOfSeats }}</p>
            <p><strong>Prix total:</strong> {{ reservation.totalPrice }} DT</p>
            <p><strong>Statut:</strong> 
                <span class=\"badge badge-canceled\">
                    Réservation annulée (trajet supprimé)
                </span>
            </p>
        </div>

        <div class=\"next-steps\">
            <h3>Que faire maintenant ?</h3>
            <ul>
                <li>Si vous avez payé, un remboursement automatique sera initié</li>
                <li>Consultez notre plateforme pour trouver un trajet alternatif</li>
                <li>Contactez notre support si vous avez des questions</li>
            </ul>
        </div>

        <div class=\"action-btn\">
            <a href=\"{{ path('trajet_affichage') }}\" class=\"btn btn-primary\" 
            style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                   border: none; 
                   border-radius: 25px; 
                   padding: 10px 25px; 
                   color: white; 
                   font-weight: 600;
                   box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                   transition: all 0.3s ease;\">
                Trouver un autre trajet
            </a>
        </div>
    </div>
</div>
{% endblock %}", "reservation/trajet_supprime.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\reservation\\trajet_supprime.html.twig");
    }
}
