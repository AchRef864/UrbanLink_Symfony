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

/* abonnement_reservation/admin_reservations.html.twig */
class __TwigTemplate_1f807d3a2220adadc4a9b2fe1760d7fb extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/admin_reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/admin_reservations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnement_reservation/admin_reservations.html.twig", 1);
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

        yield "Admin - Toutes les réservations";
        
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
        .reservation-table {
            font-size: 1.05rem;
            width: 100%;
        }
        
        .reservation-table th {
            padding: 18px 15px;
            background-color: #4e73df;
            color: white;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.95rem;
        }
        
        .reservation-table td {
            padding: 16px 15px;
            vertical-align: middle;
        }
        
        .reservation-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        .reservation-table tr:hover {
            background-color: rgba(78, 115, 223, 0.08);
        }
        
        .wide-cell {
            min-width: 180px;
        }
        
        .extra-wide-cell {
            min-width: 220px;
        }
        
        .status-badge {
            padding: 8px 14px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            min-width: 120px;
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
        
        .user-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            margin-right: 12px;
        }
        
        .action-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 4px;
            transition: all 0.2s;
        }
        
        .action-btn:hover {
            transform: scale(1.1);
        }
        
        .table-container {
            max-height: 75vh;
            overflow-y: auto;
        }
        
        .table-container thead th {
            position: sticky;
            top: 0;
            z-index: 10;
        }
        
        .no-data {
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        
        .no-data i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #6c757d;
        }
        
        .pagination .page-item.active .page-link {
            background-color: #4e73df;
            border-color: #4e73df;
        }
        
        .pagination .page-link {
            color: #4e73df;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 140
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

        // line 141
        yield "    <div class=\"container-fluid py-5\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"h2 mb-0 text-gray-800\">
                        <i class=\"fas fa-calendar-check me-2\"></i>Gestion des réservations
                    </h1>
                    <div>
                        <button class=\"btn btn-primary\">
                            <i class=\"fas fa-download me-2\"></i>Exporter
                        </button>
                    </div>
                </div>
                
                <div class=\"card shadow-lg\">
                    <div class=\"card-header py-3 bg-white\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-md-6\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">
                                    <i class=\"fas fa-list me-2\"></i>Liste complète des réservations
                                </h6>
                            </div>
                            <div class=\"col-md-6 text-end\">
                                <div class=\"input-group\" style=\"max-width: 300px;\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                                    <button class=\"btn btn-outline-secondary\" type=\"button\">
                                        <i class=\"fas fa-search\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"card-body p-0\">
                        <div class=\"table-container\">
                            <table class=\"table reservation-table mb-0\">
                                <thead>
                                    <tr>
                                        <th width=\"80\">ID</th>
                                        <th class=\"extra-wide-cell\">Client</th>
                                        <th class=\"wide-cell\">Abonnement</th>
                                        <th class=\"wide-cell\">Période</th>
                                        <th>Statut</th>
                                        <th>Prix</th>
                                        <th width=\"180\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 189, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 190
            yield "                                        <tr>
                                            <td class=\"fw-bold\">#";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 191), "html", null, true);
            yield "</td>
                                            <td class=\"extra-wide-cell\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"user-avatar\">
                                                        ";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 195), "name", [], "any", false, false, false, 195))), "html", null, true);
            yield "
                                                    </div>
                                                    <div>
                                                        <div class=\"fw-bold\">";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 198), "name", [], "any", false, false, false, 198), "html", null, true);
            yield "</div>
                                                        <div class=\"text-muted small\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 199), "email", [], "any", false, false, false, 199), "html", null, true);
            yield "</div>
                                                        <div class=\"text-muted small mt-1\">
                                                            <i class=\"fas fa-phone-alt me-1\"></i>";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 201), "phone", [], "any", false, false, false, 201), "html", null, true);
            yield "
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"wide-cell\">
                                                <div class=\"fw-bold\">";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 207), "type", [], "any", false, false, false, 207), "html", null, true);
            yield "</div>
                                                <div class=\"text-muted small mt-1\">
                                                    <i class=\"fas fa-info-circle me-1\"></i>ID: ";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 209), "id", [], "any", false, false, false, 209), "html", null, true);
            yield "
                                                </div>
                                            </td>
                                            <td class=\"wide-cell\">
                                                <div class=\"d-flex flex-column\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <i class=\"fas fa-calendar-day me-2 text-primary\"></i>
                                                        <span>";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDebut", [], "any", false, false, false, 216), "d/m/Y"), "html", null, true);
            yield "</span>
                                                    </div>
                                                    <div class=\"d-flex align-items-center mt-2\">
                                                        <i class=\"fas fa-calendar-times me-2 text-primary\"></i>
                                                        <span>";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 220), "d/m/Y"), "html", null, true);
            yield "</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                ";
            // line 225
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 225) == "confirmé")) {
                // line 226
                yield "                                                    <span class=\"status-badge status-confirmed\">
                                                        <i class=\"fas fa-check-circle me-2\"></i>Confirmé
                                                    </span>
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 229
$context["reservation"], "statut", [], "any", false, false, false, 229) == "en attente")) {
                // line 230
                yield "                                                    <span class=\"status-badge status-pending\">
                                                        <i class=\"fas fa-clock me-2\"></i>En attente
                                                    </span>
                                                ";
            } else {
                // line 234
                yield "                                                    <span class=\"status-badge status-cancelled\">
                                                        <i class=\"fas fa-times-circle me-2\"></i>Annulé
                                                    </span>
                                                ";
            }
            // line 238
            yield "                                            </td>
                                            <td class=\"fw-bold text-success\">
                                                ";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "totalPrice", [], "any", false, false, false, 240), "html", null, true);
            yield " TND
                                            </td>
                                            <td>
                                                <button class=\"action-btn btn btn-primary\" title=\"Détails\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </button>
                                                <button class=\"action-btn btn btn-success\" title=\"Confirmer\">
                                                    <i class=\"fas fa-check\"></i>
                                                </button>
                                                <button class=\"action-btn btn btn-danger\" title=\"Annuler\">
                                                    <i class=\"fas fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 254
        if (!$context['_iterated']) {
            // line 255
            yield "                                        <tr>
                                            <td colspan=\"7\">
                                                <div class=\"no-data py-5\">
                                                    <i class=\"fas fa-calendar-times\"></i>
                                                    <h4 class=\"text-gray-800 mt-3\">Aucune réservation trouvée</h4>
                                                    <p class=\"text-muted\">Aucune réservation n'a été enregistrée pour le moment</p>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class=\"card-footer bg-white\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div class=\"text-muted\">
                                Affichage de <b>";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 273, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 273) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 273, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 273)) - (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 273, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 273) - 1)), "html", null, true);
        yield "</b>
                                à <b>";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 274, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 274) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 274, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 274)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 274, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 274)), "html", null, true);
        yield "</b>
                                sur <b>";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 275, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 275), "html", null, true);
        yield "</b> réservations
                            </div>
                            <nav>
                                ";
        // line 278
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 278, $this->source); })()));
        yield "
                            </nav>
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

    // line 288
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 289
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(function () {
            \$('[title]').tooltip();
        });
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
        return "abonnement_reservation/admin_reservations.html.twig";
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
        return array (  497 => 289,  484 => 288,  464 => 278,  458 => 275,  454 => 274,  450 => 273,  440 => 265,  425 => 255,  423 => 254,  404 => 240,  400 => 238,  394 => 234,  388 => 230,  386 => 229,  381 => 226,  379 => 225,  371 => 220,  364 => 216,  354 => 209,  349 => 207,  340 => 201,  335 => 199,  331 => 198,  325 => 195,  318 => 191,  315 => 190,  310 => 189,  260 => 141,  247 => 140,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin - Toutes les réservations{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .reservation-table {
            font-size: 1.05rem;
            width: 100%;
        }
        
        .reservation-table th {
            padding: 18px 15px;
            background-color: #4e73df;
            color: white;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.95rem;
        }
        
        .reservation-table td {
            padding: 16px 15px;
            vertical-align: middle;
        }
        
        .reservation-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        .reservation-table tr:hover {
            background-color: rgba(78, 115, 223, 0.08);
        }
        
        .wide-cell {
            min-width: 180px;
        }
        
        .extra-wide-cell {
            min-width: 220px;
        }
        
        .status-badge {
            padding: 8px 14px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            min-width: 120px;
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
        
        .user-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            margin-right: 12px;
        }
        
        .action-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 4px;
            transition: all 0.2s;
        }
        
        .action-btn:hover {
            transform: scale(1.1);
        }
        
        .table-container {
            max-height: 75vh;
            overflow-y: auto;
        }
        
        .table-container thead th {
            position: sticky;
            top: 0;
            z-index: 10;
        }
        
        .no-data {
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        
        .no-data i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #6c757d;
        }
        
        .pagination .page-item.active .page-link {
            background-color: #4e73df;
            border-color: #4e73df;
        }
        
        .pagination .page-link {
            color: #4e73df;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid py-5\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"h2 mb-0 text-gray-800\">
                        <i class=\"fas fa-calendar-check me-2\"></i>Gestion des réservations
                    </h1>
                    <div>
                        <button class=\"btn btn-primary\">
                            <i class=\"fas fa-download me-2\"></i>Exporter
                        </button>
                    </div>
                </div>
                
                <div class=\"card shadow-lg\">
                    <div class=\"card-header py-3 bg-white\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-md-6\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">
                                    <i class=\"fas fa-list me-2\"></i>Liste complète des réservations
                                </h6>
                            </div>
                            <div class=\"col-md-6 text-end\">
                                <div class=\"input-group\" style=\"max-width: 300px;\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                                    <button class=\"btn btn-outline-secondary\" type=\"button\">
                                        <i class=\"fas fa-search\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"card-body p-0\">
                        <div class=\"table-container\">
                            <table class=\"table reservation-table mb-0\">
                                <thead>
                                    <tr>
                                        <th width=\"80\">ID</th>
                                        <th class=\"extra-wide-cell\">Client</th>
                                        <th class=\"wide-cell\">Abonnement</th>
                                        <th class=\"wide-cell\">Période</th>
                                        <th>Statut</th>
                                        <th>Prix</th>
                                        <th width=\"180\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for reservation in reservations %}
                                        <tr>
                                            <td class=\"fw-bold\">#{{ reservation.id }}</td>
                                            <td class=\"extra-wide-cell\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"user-avatar\">
                                                        {{ reservation.user.name|first|upper }}
                                                    </div>
                                                    <div>
                                                        <div class=\"fw-bold\">{{ reservation.user.name }}</div>
                                                        <div class=\"text-muted small\">{{ reservation.user.email }}</div>
                                                        <div class=\"text-muted small mt-1\">
                                                            <i class=\"fas fa-phone-alt me-1\"></i>{{ reservation.user.phone }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"wide-cell\">
                                                <div class=\"fw-bold\">{{ reservation.abonnement.type }}</div>
                                                <div class=\"text-muted small mt-1\">
                                                    <i class=\"fas fa-info-circle me-1\"></i>ID: {{ reservation.abonnement.id }}
                                                </div>
                                            </td>
                                            <td class=\"wide-cell\">
                                                <div class=\"d-flex flex-column\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <i class=\"fas fa-calendar-day me-2 text-primary\"></i>
                                                        <span>{{ reservation.dateDebut|date('d/m/Y') }}</span>
                                                    </div>
                                                    <div class=\"d-flex align-items-center mt-2\">
                                                        <i class=\"fas fa-calendar-times me-2 text-primary\"></i>
                                                        <span>{{ reservation.dateFin|date('d/m/Y') }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
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
                                            </td>
                                            <td class=\"fw-bold text-success\">
                                                {{ reservation.totalPrice }} TND
                                            </td>
                                            <td>
                                                <button class=\"action-btn btn btn-primary\" title=\"Détails\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </button>
                                                <button class=\"action-btn btn btn-success\" title=\"Confirmer\">
                                                    <i class=\"fas fa-check\"></i>
                                                </button>
                                                <button class=\"action-btn btn btn-danger\" title=\"Annuler\">
                                                    <i class=\"fas fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"7\">
                                                <div class=\"no-data py-5\">
                                                    <i class=\"fas fa-calendar-times\"></i>
                                                    <h4 class=\"text-gray-800 mt-3\">Aucune réservation trouvée</h4>
                                                    <p class=\"text-muted\">Aucune réservation n'a été enregistrée pour le moment</p>
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class=\"card-footer bg-white\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div class=\"text-muted\">
                                Affichage de <b>{{ reservations.getCurrentPageNumber * reservations.getItemNumberPerPage - (reservations.getItemNumberPerPage - 1) }}</b>
                                à <b>{{ min(reservations.getCurrentPageNumber * reservations.getItemNumberPerPage, reservations.getTotalItemCount) }}</b>
                                sur <b>{{ reservations.getTotalItemCount }}</b> réservations
                            </div>
                            <nav>
                                {{ knp_pagination_render(reservations) }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(function () {
            \$('[title]').tooltip();
        });
    </script>
{% endblock %}", "abonnement_reservation/admin_reservations.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal - Copie (2)\\templates\\abonnement_reservation\\admin_reservations.html.twig");
    }
}
