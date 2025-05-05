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

/* abonnement_reservation/Detail.html.twig */
class __TwigTemplate_ad3c95dd841d50ccc4dbc0d9f499dca8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/Detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/Detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnement_reservation/Detail.html.twig", 1);
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

        yield "Admin - Détails Réservation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 3, $this->source); })()), "reference", [], "any", false, false, false, 3), "html", null, true);
        
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
        .detail-card {
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .detail-header {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            color: white;
            padding: 25px;
        }
        
        .user-avatar-lg {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            color: #4e73df;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 2rem;
            margin-right: 20px;
        }
        
        .status-badge {
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            min-width: 140px;
            justify-content: center;
        }
        
        .status-confirmed {
            background-color: #e6f7ee;
            color: #0d6e36;
            border: 1px solid #b8e6cf;
        }
        
        .status-pending {
            background-color: #fff8e6;
            color: #b38a00;
            border: 1px solid #ffeeba;
        }
        
        .status-cancelled {
            background-color: #ffebee;
            color: #c62828;
            border: 1px solid #ffcdd2;
        }
        
        .detail-section {
            padding: 25px;
            border-bottom: 1px solid #e9ecef;
        }
        
        .detail-section:last-child {
            border-bottom: none;
        }
        
        .detail-label {
            font-weight: 600;
            color: #6c757d;
            min-width: 180px;
        }
        
        .price-badge {
            font-size: 1.5rem;
            padding: 15px 25px;
            border-radius: 8px;
            background-color: #f8f9fa;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
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

        // line 88
        yield "    <div class=\"container-fluid py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"h2 mb-0 text-gray-800\">
                        <i class=\"fas fa-calendar-check me-2\"></i>Détails de la réservation
                    </h1>
                    <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservations");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                    </a>
                </div>
                
                <div class=\"card detail-card mb-5\">
                    <div class=\"detail-header\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"user-avatar-lg\">
                                ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "name", [], "any", false, false, false, 104))), "html", null, true);
        yield "
                            </div>
                            <div>
                                <h2 class=\"h4 mb-1 text-white\">Réservation #";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 107, $this->source); })()), "reference", [], "any", false, false, false, 107), "html", null, true);
        yield "</h2>
                                <div class=\"text-white-50\">
                                    Statut: 
                                    ";
        // line 110
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 110, $this->source); })()), "statut", [], "any", false, false, false, 110) == "confirmé")) {
            // line 111
            yield "                                        <span class=\"status-badge status-confirmed\">
                                            <i class=\"fas fa-check-circle me-2\"></i>Confirmé
                                        </span>
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 114
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 114, $this->source); })()), "statut", [], "any", false, false, false, 114) == "en attente")) {
            // line 115
            yield "                                        <span class=\"status-badge status-pending\">
                                            <i class=\"fas fa-clock me-2\"></i>En attente
                                        </span>
                                    ";
        } else {
            // line 119
            yield "                                        <span class=\"status-badge status-cancelled\">
                                            <i class=\"fas fa-times-circle me-2\"></i>Annulé
                                        </span>
                                    ";
        }
        // line 123
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-section\">
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <h4 class=\"h5 mb-3\">
                                    <i class=\"fas fa-user me-2 text-primary\"></i>Informations client
                                </h4>
                                <div class=\"d-flex mb-2\">
                                    <span class=\"detail-label\">Nom complet:</span>
                                    <span class=\"fw-bold\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 136, $this->source); })()), "fullname", [], "any", false, false, false, 136), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"d-flex mb-2\">
                                    <span class=\"detail-label\">Email:</span>
                                    <span>";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "email", [], "any", false, false, false, 140), "html", null, true);
        yield "</span>
                                </div>
                                ";
        // line 142
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142), "phone", [], "any", false, false, false, 142)) {
            // line 143
            yield "                                <div class=\"d-flex mb-2\">
                                    <span class=\"detail-label\">Téléphone:</span>
                                    <span>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "phone", [], "any", false, false, false, 145), "html", null, true);
            yield "</span>
                                </div>
                                ";
        }
        // line 148
        yield "                            </div>
                            <div class=\"col-md-6\">
                                <h4 class=\"h5 mb-3\">
                                    <i class=\"fas fa-info-circle me-2 text-primary\"></i>Réservation
                                </h4>
                                <div class=\"d-flex mb-2\">
                                    <span class=\"detail-label\">Référence:</span>
                                    <span class=\"fw-bold\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 155, $this->source); })()), "reference", [], "any", false, false, false, 155), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"d-flex mb-2\">
                                    <span class=\"detail-label\">Période:</span>
                                    <span>";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 159, $this->source); })()), "dateDebut", [], "any", false, false, false, 159), "d/m/Y"), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 159, $this->source); })()), "dateFin", [], "any", false, false, false, 159), "d/m/Y"), "html", null, true);
        yield "</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-section\">
                        <h4 class=\"h5 mb-4\">
                            <i class=\"fas fa-calendar-alt me-2 text-primary\"></i>Détails de l'abonnement
                        </h4>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex mb-3\">
                                    <span class=\"detail-label\">Type d'abonnement:</span>
                                    <div>
                                        <div class=\"fw-bold\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 174, $this->source); })()), "abonnement", [], "any", false, false, false, 174), "type", [], "any", false, false, false, 174), "html", null, true);
        yield "</div>
                                        <div class=\"text-muted small\">ID: ";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 175, $this->source); })()), "abonnement", [], "any", false, false, false, 175), "id", [], "any", false, false, false, 175), "html", null, true);
        yield "</div>
                                    </div>
                                </div>
                                <div class=\"d-flex mb-3\">
                                    <span class=\"detail-label\">Date de début:</span>
                                    <span class=\"fw-bold\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 180, $this->source); })()), "dateDebut", [], "any", false, false, false, 180), "d/m/Y"), "html", null, true);
        yield "</span>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex mb-3\">
                                    <span class=\"detail-label\">Date de fin:</span>
                                    <span class=\"fw-bold\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 186, $this->source); })()), "dateFin", [], "any", false, false, false, 186), "d/m/Y"), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"d-flex mb-3\">
                                    <span class=\"detail-label\">Durée:</span>
                                    <span>";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 190, $this->source); })()), "dateFin", [], "any", false, false, false, 190), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 190, $this->source); })()), "dateDebut", [], "any", false, false, false, 190)], "method", false, false, false, 190), "days", [], "any", false, false, false, 190), "html", null, true);
        yield " jours</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-section\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"detail-label\">Prix total:</span>
                                    <span class=\"price-badge text-success fw-bold\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 201, $this->source); })()), "totalPrice", [], "any", false, false, false, 201), 2, ",", " "), "html", null, true);
        yield " TND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-section bg-light\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <a href=\"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservations");
        yield "\" class=\"btn btn-outline-secondary\">
                                    <i class=\"fas fa-arrow-left me-2\"></i>Retour
                                </a>
                            </div>
                            <div>
                               
                            </div>
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
        return "abonnement_reservation/Detail.html.twig";
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
        return array (  390 => 210,  378 => 201,  364 => 190,  357 => 186,  348 => 180,  340 => 175,  336 => 174,  316 => 159,  309 => 155,  300 => 148,  294 => 145,  290 => 143,  288 => 142,  283 => 140,  276 => 136,  261 => 123,  255 => 119,  249 => 115,  247 => 114,  242 => 111,  240 => 110,  234 => 107,  228 => 104,  216 => 95,  207 => 88,  194 => 87,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin - Détails Réservation #{{ reservation.reference }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .detail-card {
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .detail-header {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            color: white;
            padding: 25px;
        }
        
        .user-avatar-lg {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            color: #4e73df;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 2rem;
            margin-right: 20px;
        }
        
        .status-badge {
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            min-width: 140px;
            justify-content: center;
        }
        
        .status-confirmed {
            background-color: #e6f7ee;
            color: #0d6e36;
            border: 1px solid #b8e6cf;
        }
        
        .status-pending {
            background-color: #fff8e6;
            color: #b38a00;
            border: 1px solid #ffeeba;
        }
        
        .status-cancelled {
            background-color: #ffebee;
            color: #c62828;
            border: 1px solid #ffcdd2;
        }
        
        .detail-section {
            padding: 25px;
            border-bottom: 1px solid #e9ecef;
        }
        
        .detail-section:last-child {
            border-bottom: none;
        }
        
        .detail-label {
            font-weight: 600;
            color: #6c757d;
            min-width: 180px;
        }
        
        .price-badge {
            font-size: 1.5rem;
            padding: 15px 25px;
            border-radius: 8px;
            background-color: #f8f9fa;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"h2 mb-0 text-gray-800\">
                        <i class=\"fas fa-calendar-check me-2\"></i>Détails de la réservation
                    </h1>
                    <a href=\"{{ path('app_admin_reservations') }}\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                    </a>
                </div>
                
                <div class=\"card detail-card mb-5\">
                    <div class=\"detail-header\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"user-avatar-lg\">
                                {{ reservation.user.name|first|upper }}
                            </div>
                            <div>
                                <h2 class=\"h4 mb-1 text-white\">Réservation #{{ reservation.reference }}</h2>
                                <div class=\"text-white-50\">
                                    Statut: 
                                    {% if reservation.statut == 'confirmé' %}
                                        <span class=\"status-badge status-confirmed\">
                                            <i class=\"fas fa-check-circle me-2\"></i>Confirmé
                                        </span>
                                    {% elseif reservation.statut == 'en attente' %}
                                        <span class=\"status-badge status-pending\">
                                            <i class=\"fas fa-clock me-2\"></i>En attente
                                        </span>
                                    {% else %}
                                        <span class=\"status-badge status-cancelled\">
                                            <i class=\"fas fa-times-circle me-2\"></i>Annulé
                                        </span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-section\">
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <h4 class=\"h5 mb-3\">
                                    <i class=\"fas fa-user me-2 text-primary\"></i>Informations client
                                </h4>
                                <div class=\"d-flex mb-2\">
                                    <span class=\"detail-label\">Nom complet:</span>
                                    <span class=\"fw-bold\">{{ reservation.fullname }}</span>
                                </div>
                                <div class=\"d-flex mb-2\">
                                    <span class=\"detail-label\">Email:</span>
                                    <span>{{ reservation.user.email }}</span>
                                </div>
                                {% if reservation.user.phone %}
                                <div class=\"d-flex mb-2\">
                                    <span class=\"detail-label\">Téléphone:</span>
                                    <span>{{ reservation.user.phone }}</span>
                                </div>
                                {% endif %}
                            </div>
                            <div class=\"col-md-6\">
                                <h4 class=\"h5 mb-3\">
                                    <i class=\"fas fa-info-circle me-2 text-primary\"></i>Réservation
                                </h4>
                                <div class=\"d-flex mb-2\">
                                    <span class=\"detail-label\">Référence:</span>
                                    <span class=\"fw-bold\">{{ reservation.reference }}</span>
                                </div>
                                <div class=\"d-flex mb-2\">
                                    <span class=\"detail-label\">Période:</span>
                                    <span>{{ reservation.dateDebut|date('d/m/Y') }} - {{ reservation.dateFin|date('d/m/Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-section\">
                        <h4 class=\"h5 mb-4\">
                            <i class=\"fas fa-calendar-alt me-2 text-primary\"></i>Détails de l'abonnement
                        </h4>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex mb-3\">
                                    <span class=\"detail-label\">Type d'abonnement:</span>
                                    <div>
                                        <div class=\"fw-bold\">{{ reservation.abonnement.type }}</div>
                                        <div class=\"text-muted small\">ID: {{ reservation.abonnement.id }}</div>
                                    </div>
                                </div>
                                <div class=\"d-flex mb-3\">
                                    <span class=\"detail-label\">Date de début:</span>
                                    <span class=\"fw-bold\">{{ reservation.dateDebut|date('d/m/Y') }}</span>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex mb-3\">
                                    <span class=\"detail-label\">Date de fin:</span>
                                    <span class=\"fw-bold\">{{ reservation.dateFin|date('d/m/Y') }}</span>
                                </div>
                                <div class=\"d-flex mb-3\">
                                    <span class=\"detail-label\">Durée:</span>
                                    <span>{{ reservation.dateFin.diff(reservation.dateDebut).days }} jours</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-section\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"detail-label\">Prix total:</span>
                                    <span class=\"price-badge text-success fw-bold\">{{ reservation.totalPrice|number_format(2, ',', ' ') }} TND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-section bg-light\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <a href=\"{{ path('app_admin_reservations') }}\" class=\"btn btn-outline-secondary\">
                                    <i class=\"fas fa-arrow-left me-2\"></i>Retour
                                </a>
                            </div>
                            <div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "abonnement_reservation/Detail.html.twig", "C:\\Users\\skonb\\Desktop\\bch ytrigl\\UrbanLink_Symfony-main\\templates\\abonnement_reservation\\Detail.html.twig");
    }
}
