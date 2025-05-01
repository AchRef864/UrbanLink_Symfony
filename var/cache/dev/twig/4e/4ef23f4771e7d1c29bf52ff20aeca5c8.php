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

/* abonnement_reservation/success.html.twig */
class __TwigTemplate_e8c46994daeb9f5eab9a71da4053574f extends Template
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
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/success.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "abonnement_reservation/success.html.twig", 1);
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

        yield "Confirmation de Réservation | UrbanLInk";
        
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
        /* Card de confirmation principale */
        .confirmation-container {
            @apply py-8 px-4 md:py-12;
        }
        
        .confirmation-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            max-width: 800px;
            margin: 0 auto;
            overflow: hidden;
        }
        
        .confirmation-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 2.5rem 1.5rem;
            text-align: center;
            color: white;
        }
        
        .confirmation-body {
            padding: 2.5rem 2rem;
        }
        
        /* Icône de succès */
        .confirmation-icon {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            font-size: 2.5rem;
        }
        
        .confirmation-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .confirmation-subtitle {
            font-size: 1.2rem;
            font-weight: 500;
            opacity: 0.9;
        }
        
        /* Détails de la réservation */
        .details-box {
            background: #f8f9fa;
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-left: 4px solid var(--primary);
        }
        
        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 0;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .detail-row:last-child {
            border-bottom: none;
        }
        
        .detail-label {
            color: #64748b;
            font-weight: 500;
        }
        
        .detail-value {
            font-weight: 600;
            color: var(--dark);
        }
        
        .price-value {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .status-badge {
            background-color: var(--success);
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-block;
        }
        
        /* Boutons d'action */
        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .action-button {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }
        
        .action-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
            color: white;
        }
        
        .action-button.secondary {
            background: linear-gradient(135deg, var(--dark) 0%, #3a0ca3 100%);
        }
        
        .action-button i {
            margin-right: 8px;
        }
        
        /* Success Message */
        .success-message {
            background-color: rgba(74, 222, 128, 0.1);
            border: 1px solid var(--success);
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .success-message i {
            color: var(--success);
            font-size: 1.25rem;
            margin-right: 0.75rem;
        }
        
        /* Media queries */
        @media (max-width: 768px) {
            .confirmation-header {
                padding: 2rem 1rem;
            }
            
            .confirmation-body {
                padding: 1.5rem 1rem;
            }
            
            .detail-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.3rem;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: stretch;
            }
            
            .action-button {
                justify-content: center;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 186
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

        // line 187
        yield "<div class=\"confirmation-container\">
    <div class=\"confirmation-card\">
        <!-- En-tête avec dégradé -->
        <div class=\"confirmation-header\">
            <div class=\"confirmation-icon\">
                <i class=\"fas fa-check\"></i>
            </div>
            <h1 class=\"confirmation-title\">Paiement Réussi!</h1>
            <p class=\"confirmation-subtitle\">Votre abonnement ";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 195, $this->source); })()), "type", [], "any", false, false, false, 195), "html", null, true);
        yield " a été confirmé</p>
        </div>
        
        <!-- Corps de la carte -->
        <div class=\"confirmation-body\">
            <!-- Message de succès -->
            <div class=\"success-message\">
                <i class=\"fas fa-info-circle\"></i>
                <p class=\"m-0\">Un email de confirmation a été envoyé à votre adresse email.</p>
            </div>
            
            <!-- Détails de la réservation -->
            <div class=\"details-box\">
                <h4 class=\"font-bold text-lg mb-3\">Détails de la réservation</h4>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Type d'abonnement:</span>
                    <span class=\"detail-value\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 212, $this->source); })()), "type", [], "any", false, false, false, 212)), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Montant payé:</span>
                    <span class=\"price-value\">";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 217, $this->source); })()), "prix", [], "any", false, false, false, 217), "html", null, true);
        yield " DT</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date de début:</span>
                    <span class=\"detail-value\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 222, $this->source); })()), "dateDebut", [], "any", false, false, false, 222), "d/m/Y"), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date de fin:</span>
                    <span class=\"detail-value\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 227, $this->source); })()), "dateFin", [], "any", false, false, false, 227), "d/m/Y"), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Statut:</span>
                    <span class=\"status-badge\">Confirmé</span>
                </div>
            </div>
            
            <!-- Boutons d'action -->
            <div class=\"action-buttons\">
                <a href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"action-button\">
                    <i class=\"fas fa-tachometer-alt\"></i> Tableau de bord
                </a>
                <a href=\"";
        // line 241
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_mes_reservations");
        yield "\" class=\"action-button secondary\">
                    <i class=\"fas fa-id-card\"></i> Mes abonnements
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
        return "abonnement_reservation/success.html.twig";
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
        return array (  379 => 241,  373 => 238,  359 => 227,  351 => 222,  343 => 217,  335 => 212,  315 => 195,  305 => 187,  292 => 186,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Confirmation de Réservation | UrbanLInk{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Card de confirmation principale */
        .confirmation-container {
            @apply py-8 px-4 md:py-12;
        }
        
        .confirmation-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            max-width: 800px;
            margin: 0 auto;
            overflow: hidden;
        }
        
        .confirmation-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 2.5rem 1.5rem;
            text-align: center;
            color: white;
        }
        
        .confirmation-body {
            padding: 2.5rem 2rem;
        }
        
        /* Icône de succès */
        .confirmation-icon {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            font-size: 2.5rem;
        }
        
        .confirmation-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .confirmation-subtitle {
            font-size: 1.2rem;
            font-weight: 500;
            opacity: 0.9;
        }
        
        /* Détails de la réservation */
        .details-box {
            background: #f8f9fa;
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-left: 4px solid var(--primary);
        }
        
        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 0;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .detail-row:last-child {
            border-bottom: none;
        }
        
        .detail-label {
            color: #64748b;
            font-weight: 500;
        }
        
        .detail-value {
            font-weight: 600;
            color: var(--dark);
        }
        
        .price-value {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .status-badge {
            background-color: var(--success);
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-block;
        }
        
        /* Boutons d'action */
        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .action-button {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }
        
        .action-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
            color: white;
        }
        
        .action-button.secondary {
            background: linear-gradient(135deg, var(--dark) 0%, #3a0ca3 100%);
        }
        
        .action-button i {
            margin-right: 8px;
        }
        
        /* Success Message */
        .success-message {
            background-color: rgba(74, 222, 128, 0.1);
            border: 1px solid var(--success);
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .success-message i {
            color: var(--success);
            font-size: 1.25rem;
            margin-right: 0.75rem;
        }
        
        /* Media queries */
        @media (max-width: 768px) {
            .confirmation-header {
                padding: 2rem 1rem;
            }
            
            .confirmation-body {
                padding: 1.5rem 1rem;
            }
            
            .detail-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.3rem;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: stretch;
            }
            
            .action-button {
                justify-content: center;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"confirmation-container\">
    <div class=\"confirmation-card\">
        <!-- En-tête avec dégradé -->
        <div class=\"confirmation-header\">
            <div class=\"confirmation-icon\">
                <i class=\"fas fa-check\"></i>
            </div>
            <h1 class=\"confirmation-title\">Paiement Réussi!</h1>
            <p class=\"confirmation-subtitle\">Votre abonnement {{ abonnement.type }} a été confirmé</p>
        </div>
        
        <!-- Corps de la carte -->
        <div class=\"confirmation-body\">
            <!-- Message de succès -->
            <div class=\"success-message\">
                <i class=\"fas fa-info-circle\"></i>
                <p class=\"m-0\">Un email de confirmation a été envoyé à votre adresse email.</p>
            </div>
            
            <!-- Détails de la réservation -->
            <div class=\"details-box\">
                <h4 class=\"font-bold text-lg mb-3\">Détails de la réservation</h4>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Type d'abonnement:</span>
                    <span class=\"detail-value\">{{ abonnement.type|capitalize }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Montant payé:</span>
                    <span class=\"price-value\">{{ abonnement.prix }} DT</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date de début:</span>
                    <span class=\"detail-value\">{{ reservation.dateDebut|date('d/m/Y') }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date de fin:</span>
                    <span class=\"detail-value\">{{ reservation.dateFin|date('d/m/Y') }}</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Statut:</span>
                    <span class=\"status-badge\">Confirmé</span>
                </div>
            </div>
            
            <!-- Boutons d'action -->
            <div class=\"action-buttons\">
                <a href=\"{{ path('app_dashboard') }}\" class=\"action-button\">
                    <i class=\"fas fa-tachometer-alt\"></i> Tableau de bord
                </a>
                <a href=\"{{ path('app_abonnement_mes_reservations') }}\" class=\"action-button secondary\">
                    <i class=\"fas fa-id-card\"></i> Mes abonnements
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "abonnement_reservation/success.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony1\\templates\\abonnement_reservation\\success.html.twig");
    }
}
