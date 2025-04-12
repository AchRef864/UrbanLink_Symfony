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

/* reservation/list.html.twig */
class __TwigTemplate_93f7dfee5affe496a487bdd88b2e47fa extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/list.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Mes Réservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <style>
        .reservation-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        .reservation-header {
            color: #2c3e50;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .reservation-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .reservation-table th {
            background-color: #3498db;
            color: white;
            padding: 12px;
            text-align: left;
        }
        
        .reservation-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }
        
        .reservation-table tr:hover {
            background-color: #f5f5f5;
        }
        
        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }
        
        .status-confirmed {
            background-color: #2ecc71;
            color: white;
        }
        
        .status-pending {
            background-color: #f39c12;
            color: white;
        }
        
        .status-canceled {
            background-color: #e74c3c;
            color: white;
        }
        
        .action-btn {
            padding: 6px 12px;
            margin-right: 5px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background-color: #3498db;
            color: white;
            border: none;
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
        }
        
        .btn-danger {
            background-color: #e74c3c;
            color: white;
            border: none;
        }
        
        .btn-danger:hover {
            background-color: #c0392b;
        }
        
        .btn-success {
            background-color: #2ecc71;
            color: white;
            border: none;
        }
        
        .btn-success:hover {
            background-color: #27ae60;
        }
        
        .no-reservations {
            text-align: center;
            padding: 30px;
            color: #7f8c8d;
            font-size: 18px;
        }
        
        .price-cell {
            font-weight: bold;
            color: #2c3e50;
        }
        
        .trajet-info {
            line-height: 1.4;
        }
        
        .trajet-time {
            font-size: 0.9em;
            color: #7f8c8d;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 129
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

        // line 130
        yield "<div style=\"margin-left: 280px;\">
    <div class=\"reservation-container\">
        <h1 class=\"reservation-header\">Mes Réservations</h1>

        ";
        // line 134
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 134, $this->source); })())) > 0)) {
            // line 135
            yield "            <table class=\"reservation-table\">
                <thead>
                    <tr>
                        <th>Trajet</th>
                        <th>Date Réservation</th>
                        <th>Places</th>
                        <th>Prix</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 147, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 148
                yield "                        <tr>
                            <td class=\"trajet-info\">
                                <strong>";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 150), "departure", [], "any", false, false, false, 150), "html", null, true);
                yield "</strong> → 
                                <strong>";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 151), "destination", [], "any", false, false, false, 151), "html", null, true);
                yield "</strong><br>
                                <span class=\"trajet-time\">
                                    Départ: ";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 153), "departureTime", [], "any", false, false, false, 153), "d/m/Y H:i"), "html", null, true);
                yield "<br>
                                    Durée: ";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 154), "duration", [], "any", false, false, false, 154), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td>";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reservationDate", [], "any", false, false, false, 157), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                            <td>";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "numberOfSeats", [], "any", false, false, false, 158), "html", null, true);
                yield "</td>
                            <td class=\"price-cell\">";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "totalPrice", [], "any", false, false, false, 159), "html", null, true);
                yield " €</td>
                            <td>
                                <span class=\"status-badge 
                                    ";
                // line 162
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 162) == "Confirmed")) {
                    yield "status-confirmed
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 163
$context["reservation"], "status", [], "any", false, false, false, 163) == "Pending")) {
                    yield "status-pending
                                    ";
                } else {
                    // line 164
                    yield "status-canceled
                                    ";
                }
                // line 165
                yield "\">
                                    ";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 166), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td>
                                ";
                // line 170
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 170) == "Pending")) {
                    // line 171
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_payment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 171)]), "html", null, true);
                    yield "\" 
                                       class=\"action-btn btn-primary\">Payer</a>
                                    <a href=\"";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                    yield "\" 
                                       class=\"action-btn btn-danger\">Annuler</a>
                                ";
                }
                // line 176
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 176) == "Confirmed")) {
                    // line 177
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 177)]), "html", null, true);
                    yield "\" 
                                   class=\"action-btn btn-success\" target=\"_blank\">Télécharger PDF</a>
                                <a href=\"";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_success", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 179)]), "html", null, true);
                    yield "\" 
                                   class=\"action-btn btn-primary\">Voir détails</a>
                            ";
                }
                // line 182
                yield "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            yield "                </tbody>
            </table>
        ";
        } else {
            // line 188
            yield "            <div class=\"no-reservations\">
                <p>Vous n'avez aucune réservation pour le moment.</p>
                <a href=\"";
            // line 190
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
            yield "\" class=\"action-btn btn-primary\">
                    Trouver un trajet
                </a>
            </div>
        ";
        }
        // line 195
        yield "    </div>
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
        return "reservation/list.html.twig";
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
        return array (  385 => 195,  377 => 190,  373 => 188,  368 => 185,  360 => 182,  354 => 179,  348 => 177,  345 => 176,  339 => 173,  333 => 171,  331 => 170,  324 => 166,  321 => 165,  317 => 164,  312 => 163,  308 => 162,  302 => 159,  298 => 158,  294 => 157,  288 => 154,  284 => 153,  279 => 151,  275 => 150,  271 => 148,  267 => 147,  253 => 135,  251 => 134,  245 => 130,  232 => 129,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reservation/list.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Mes Réservations{% endblock %}

{% block stylesheets %}
    <style>
        .reservation-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        .reservation-header {
            color: #2c3e50;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .reservation-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .reservation-table th {
            background-color: #3498db;
            color: white;
            padding: 12px;
            text-align: left;
        }
        
        .reservation-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }
        
        .reservation-table tr:hover {
            background-color: #f5f5f5;
        }
        
        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }
        
        .status-confirmed {
            background-color: #2ecc71;
            color: white;
        }
        
        .status-pending {
            background-color: #f39c12;
            color: white;
        }
        
        .status-canceled {
            background-color: #e74c3c;
            color: white;
        }
        
        .action-btn {
            padding: 6px 12px;
            margin-right: 5px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background-color: #3498db;
            color: white;
            border: none;
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
        }
        
        .btn-danger {
            background-color: #e74c3c;
            color: white;
            border: none;
        }
        
        .btn-danger:hover {
            background-color: #c0392b;
        }
        
        .btn-success {
            background-color: #2ecc71;
            color: white;
            border: none;
        }
        
        .btn-success:hover {
            background-color: #27ae60;
        }
        
        .no-reservations {
            text-align: center;
            padding: 30px;
            color: #7f8c8d;
            font-size: 18px;
        }
        
        .price-cell {
            font-weight: bold;
            color: #2c3e50;
        }
        
        .trajet-info {
            line-height: 1.4;
        }
        
        .trajet-time {
            font-size: 0.9em;
            color: #7f8c8d;
        }
    </style>
{% endblock %}

{% block body %}
<div style=\"margin-left: 280px;\">
    <div class=\"reservation-container\">
        <h1 class=\"reservation-header\">Mes Réservations</h1>

        {% if reservations|length > 0 %}
            <table class=\"reservation-table\">
                <thead>
                    <tr>
                        <th>Trajet</th>
                        <th>Date Réservation</th>
                        <th>Places</th>
                        <th>Prix</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reservation in reservations %}
                        <tr>
                            <td class=\"trajet-info\">
                                <strong>{{ reservation.trajet.departure }}</strong> → 
                                <strong>{{ reservation.trajet.destination }}</strong><br>
                                <span class=\"trajet-time\">
                                    Départ: {{ reservation.trajet.departureTime|date('d/m/Y H:i') }}<br>
                                    Durée: {{ reservation.trajet.duration }}
                                </span>
                            </td>
                            <td>{{ reservation.reservationDate|date('d/m/Y H:i') }}</td>
                            <td>{{ reservation.numberOfSeats }}</td>
                            <td class=\"price-cell\">{{ reservation.totalPrice }} €</td>
                            <td>
                                <span class=\"status-badge 
                                    {% if reservation.status == 'Confirmed' %}status-confirmed
                                    {% elseif reservation.status == 'Pending' %}status-pending
                                    {% else %}status-canceled
                                    {% endif %}\">
                                    {{ reservation.status }}
                                </span>
                            </td>
                            <td>
                                {% if reservation.status == 'Pending' %}
                                    <a href=\"{{ path('reservation_payment', {'id': reservation.id}) }}\" 
                                       class=\"action-btn btn-primary\">Payer</a>
                                    <a href=\"{{ path('reservation_cancel', {'id': reservation.id}) }}\" 
                                       class=\"action-btn btn-danger\">Annuler</a>
                                {% endif %}
                                {% if reservation.status == 'Confirmed' %}
                                <a href=\"{{ path('reservation_pdf', {'id': reservation.id}) }}\" 
                                   class=\"action-btn btn-success\" target=\"_blank\">Télécharger PDF</a>
                                <a href=\"{{ path('reservation_success', {'id': reservation.id}) }}\" 
                                   class=\"action-btn btn-primary\">Voir détails</a>
                            {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% else %}
            <div class=\"no-reservations\">
                <p>Vous n'avez aucune réservation pour le moment.</p>
                <a href=\"{{ path('reservation_affichage') }}\" class=\"action-btn btn-primary\">
                    Trouver un trajet
                </a>
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}", "reservation/list.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\reservation\\list.html.twig");
    }
}
