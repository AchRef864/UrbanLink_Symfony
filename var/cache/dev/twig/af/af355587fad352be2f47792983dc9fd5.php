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

/* abonnement_reservation/mes_reservations.html.twig */
class __TwigTemplate_9508c7749251fbccf7b688dc7f6eae12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/mes_reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/mes_reservations.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "abonnement_reservation/mes_reservations.html.twig", 1);
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

        yield "Mes Réservations | UrbanLInk";
        
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
        /* Main container styles */
        .reservations-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        
        /* Page header */
        .page-header {
            margin-bottom: 2.5rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .page-header h1 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--dark);
        }
        
        .page-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            height: 4px;
            width: 60px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            border-radius: 2px;
        }
        
        /* Empty state */
        .empty-state {
            background-color: rgba(67, 97, 238, 0.1);
            border-left: 4px solid var(--primary);
            padding: 1.5rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
        }
        
        .empty-state i {
            font-size: 2rem;
            color: var(--primary);
            margin-right: 1rem;
        }
        
        .empty-state p {
            margin: 0;
            color: var(--dark);
            font-weight: 500;
        }
        
        .empty-state a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 700;
            transition: color 0.2s ease;
        }
        
        .empty-state a:hover {
            text-decoration: underline;
        }
        
        /* Card grid */
        .reservations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 1.5rem;
        }
        
        /* Reservation card */
        .reservation-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        
        .reservation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Card image */
        .card-image {
            height: 180px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease, opacity 0.3s ease;
            opacity: 0.85;
        }
        
        .reservation-card:hover .card-image img {
            transform: scale(1.05);
            opacity: 1;
        }
        
        .card-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.4rem 0.8rem;
            border-radius: 2rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            z-index: 10;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        }
        
        .badge-confirmed {
            background-color: var(--success);
            color: white;
        }
        
        .badge-pending {
            background-color: var(--warning);
            color: white;
        }
        
        .badge-cancelled {
            background-color: var(--danger);
            color: white;
        }
        
        /* Card content */
        .card-content {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 0.75rem;
        }
        
        .card-price {
            color: var(--primary);
            font-size: 1.2rem;
            font-weight: 700;
            margin: 0.5rem 0;
            display: flex;
            align-items: center;
        }
        
        .card-price::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            margin-right: 0.5rem;
            background-color: var(--primary);
            border-radius: 50%;
        }
        
        /* Card info rows */
        .info-rows {
            margin: 1rem 0;
            flex-grow: 1;
        }
        
        .info-row {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            color: #64748b;
        }
        
        .info-row i {
            width: 20px;
            margin-right: 0.5rem;
            color: var(--primary);
            text-align: center;
        }
        
        .info-row span {
            font-size: 0.95rem;
        }
        
        /* Card footer */
        .card-footer {
            padding: 1rem 1.5rem;
            background-color: #f8fafc;
            border-top: 1px solid #f1f5f9;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .detail-btn {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            text-decoration: none;
            padding: 0.5rem 0;
        }
        
        .detail-btn:hover {
            color: var(--secondary);
        }
        
        .detail-btn i {
            margin-left: 0.35rem;
            transition: transform 0.2s ease;
        }
        
        .detail-btn:hover i {
            transform: translateX(3px);
        }
        
        /* Type-specific card headers */
        .card-header-mensuel {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
        }
        
        .card-header-annuel {
            background: linear-gradient(135deg, #7209b7 0%, #3a0ca3 100%);
        }
        
        .card-header-trimestriel {
            background: linear-gradient(135deg, #4cc9f0 0%, #4361ee 100%);
        }
        
        .card-header-autre {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
        }
        
        .card-type-icon {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            backdrop-filter: blur(2px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        
        .reservation-card:hover .card-type-icon {
            transform: scale(1.1);
            background-color: rgba(255, 255, 255, 0.25);
        }
        
        .card-type-icon i {
            color: white;
            font-size: 1rem;
        }
        
        /* Responsive styles */
        @media (max-width: 992px) {
            .reservations-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 1.8rem;
            }
            
            .reservations-grid {
                grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
                gap: 1rem;
            }
            
            .card-image {
                height: 160px;
            }
        }
        
        @media (max-width: 576px) {
            .reservations-grid {
                grid-template-columns: 1fr;
            }
            
            .empty-state {
                flex-direction: column;
                text-align: center;
            }
            
            .empty-state i {
                margin-right: 0;
                margin-bottom: 0.5rem;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 323
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

        // line 324
        yield "<div class=\"reservations-container\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <h1>Mes Réservations d'Abonnements</h1>
    </div>
    
    ";
        // line 330
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 330, $this->source); })()))) {
            // line 331
            yield "        <!-- Empty State -->
        <div class=\"empty-state\">
            <i class=\"fas fa-info-circle\"></i>
            <p>Vous n'avez aucune réservation d'abonnement pour le moment. <a href=\"";
            // line 334
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_index");
            yield "\" class=\"hover:underline\">Découvrez nos offres</a>.</p>
        </div>
    ";
        } else {
            // line 337
            yield "        <!-- Reservations Grid -->
        <div class=\"reservations-grid\">
            ";
            // line 339
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 339, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 340
                yield "                <div class=\"reservation-card\">
                    <!-- Card Image with Badge -->
                    <div class=\"card-image card-header-";
                // line 342
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, true, false, 342), "type", [], "any", true, true, false, 342)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 342), "type", [], "any", false, false, false, 342), "autre")) : ("autre")), "html", null, true);
                yield "\">
                        <div class=\"card-type-icon\">
                            ";
                // line 344
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 344), "type", [], "any", false, false, false, 344) == "mensuel")) {
                    // line 345
                    yield "                                <i class=\"fas fa-calendar-alt\"></i>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 346
$context["reservation"], "abonnement", [], "any", false, false, false, 346), "type", [], "any", false, false, false, 346) == "trimestriel")) {
                    // line 347
                    yield "                                <i class=\"fas fa-calendar-week\"></i>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 348
$context["reservation"], "abonnement", [], "any", false, false, false, 348), "type", [], "any", false, false, false, 348) == "annuel")) {
                    // line 349
                    yield "                                <i class=\"fas fa-calendar-check\"></i>
                            ";
                } else {
                    // line 351
                    yield "                                <i class=\"fas fa-ticket-alt\"></i>
                            ";
                }
                // line 353
                yield "                        </div>
                        
                        ";
                // line 355
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 355), "image", [], "any", false, false, false, 355)) {
                    // line 356
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 356), "imageFile"), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 356), "type", [], "any", false, false, false, 356), "html", null, true);
                    yield "\">
                        ";
                } else {
                    // line 358
                    yield "                            ";
                    $context["typeIcons"] = ["mensuel" => "calendar-alt", "trimestriel" => "calendar-week", "annuel" => "calendar-check"];
                    // line 363
                    yield "                            
                            ";
                    // line 365
                    yield "                            <div class=\"flex items-center justify-center h-full\">
                                <i class=\"fas fa-";
                    // line 366
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["typeIcons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 366), "type", [], "any", false, false, false, 366), [], "array", true, true, false, 366)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeIcons"]) || array_key_exists("typeIcons", $context) ? $context["typeIcons"] : (function () { throw new RuntimeError('Variable "typeIcons" does not exist.', 366, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 366), "type", [], "any", false, false, false, 366), [], "array", false, false, false, 366), "ticket-alt")) : ("ticket-alt")), "html", null, true);
                    yield " text-white opacity-30 text-6xl\"></i>
                            </div>
                        ";
                }
                // line 369
                yield "                        
                        <div class=\"card-badge 
                            ";
                // line 371
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 371) == "Confirmé")) {
                    yield "badge-confirmed
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 372
$context["reservation"], "statut", [], "any", false, false, false, 372) == "En attente")) {
                    yield "badge-pending
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 373
$context["reservation"], "statut", [], "any", false, false, false, 373) == "Annulé")) {
                    yield "badge-cancelled
                            ";
                } else {
                    // line 374
                    yield "bg-gray-500 text-white";
                }
                yield "\">
                            ";
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 375), "html", null, true);
                yield "
                        </div>
                    </div>
                    
                    <!-- Card Content -->
                    <div class=\"card-content\">
                        <h3 class=\"card-title\">Abonnement ";
                // line 381
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 381), "type", [], "any", false, false, false, 381)), "html", null, true);
                yield "</h3>
                        
                        <div class=\"card-price\">";
                // line 383
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 383), "prix", [], "any", false, false, false, 383), "html", null, true);
                yield " DT</div>
                        
                        <div class=\"info-rows\">
                            <div class=\"info-row\">
                                <i class=\"fas fa-calendar-day\"></i>
                                <span>Début: ";
                // line 388
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDebut", [], "any", false, false, false, 388), "d/m/Y"), "html", null, true);
                yield "</span>
                            </div>
                            <div class=\"info-row\">
                                <i class=\"fas fa-calendar-check\"></i>
                                <span>Fin: ";
                // line 392
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 392), "d/m/Y"), "html", null, true);
                yield "</span>
                            </div>
                            
                            ";
                // line 395
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", true, true, false, 395)) {
                    // line 396
                    yield "                                <div class=\"info-row\">
                                    <i class=\"fas fa-clock\"></i>
                                    <span>Réservé le: ";
                    // line 398
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 398), "d/m/Y"), "html", null, true);
                    yield "</span>
                                </div>
                            ";
                }
                // line 401
                yield "                            
                            <div class=\"info-row\">
                                <i class=\"fas fa-bookmark\"></i>
                                <span>État: ";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "abonnement", [], "any", false, false, false, 404), "etat", [], "any", false, false, false, 404)), "html", null, true);
                yield "</span>
                            </div>
                        </div>
                    </div>
                    
                 
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 412
            yield "        </div>
    ";
        }
        // line 414
        yield "</div>
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
        return "abonnement_reservation/mes_reservations.html.twig";
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
        return array (  621 => 414,  617 => 412,  603 => 404,  598 => 401,  592 => 398,  588 => 396,  586 => 395,  580 => 392,  573 => 388,  565 => 383,  560 => 381,  551 => 375,  546 => 374,  541 => 373,  537 => 372,  533 => 371,  529 => 369,  523 => 366,  520 => 365,  517 => 363,  514 => 358,  506 => 356,  504 => 355,  500 => 353,  496 => 351,  492 => 349,  490 => 348,  487 => 347,  485 => 346,  482 => 345,  480 => 344,  475 => 342,  471 => 340,  467 => 339,  463 => 337,  457 => 334,  452 => 331,  450 => 330,  442 => 324,  429 => 323,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Mes Réservations | UrbanLInk{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Main container styles */
        .reservations-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        
        /* Page header */
        .page-header {
            margin-bottom: 2.5rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .page-header h1 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--dark);
        }
        
        .page-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            height: 4px;
            width: 60px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            border-radius: 2px;
        }
        
        /* Empty state */
        .empty-state {
            background-color: rgba(67, 97, 238, 0.1);
            border-left: 4px solid var(--primary);
            padding: 1.5rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
        }
        
        .empty-state i {
            font-size: 2rem;
            color: var(--primary);
            margin-right: 1rem;
        }
        
        .empty-state p {
            margin: 0;
            color: var(--dark);
            font-weight: 500;
        }
        
        .empty-state a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 700;
            transition: color 0.2s ease;
        }
        
        .empty-state a:hover {
            text-decoration: underline;
        }
        
        /* Card grid */
        .reservations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 1.5rem;
        }
        
        /* Reservation card */
        .reservation-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        
        .reservation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Card image */
        .card-image {
            height: 180px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease, opacity 0.3s ease;
            opacity: 0.85;
        }
        
        .reservation-card:hover .card-image img {
            transform: scale(1.05);
            opacity: 1;
        }
        
        .card-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.4rem 0.8rem;
            border-radius: 2rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            z-index: 10;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        }
        
        .badge-confirmed {
            background-color: var(--success);
            color: white;
        }
        
        .badge-pending {
            background-color: var(--warning);
            color: white;
        }
        
        .badge-cancelled {
            background-color: var(--danger);
            color: white;
        }
        
        /* Card content */
        .card-content {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 0.75rem;
        }
        
        .card-price {
            color: var(--primary);
            font-size: 1.2rem;
            font-weight: 700;
            margin: 0.5rem 0;
            display: flex;
            align-items: center;
        }
        
        .card-price::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            margin-right: 0.5rem;
            background-color: var(--primary);
            border-radius: 50%;
        }
        
        /* Card info rows */
        .info-rows {
            margin: 1rem 0;
            flex-grow: 1;
        }
        
        .info-row {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            color: #64748b;
        }
        
        .info-row i {
            width: 20px;
            margin-right: 0.5rem;
            color: var(--primary);
            text-align: center;
        }
        
        .info-row span {
            font-size: 0.95rem;
        }
        
        /* Card footer */
        .card-footer {
            padding: 1rem 1.5rem;
            background-color: #f8fafc;
            border-top: 1px solid #f1f5f9;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .detail-btn {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            text-decoration: none;
            padding: 0.5rem 0;
        }
        
        .detail-btn:hover {
            color: var(--secondary);
        }
        
        .detail-btn i {
            margin-left: 0.35rem;
            transition: transform 0.2s ease;
        }
        
        .detail-btn:hover i {
            transform: translateX(3px);
        }
        
        /* Type-specific card headers */
        .card-header-mensuel {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
        }
        
        .card-header-annuel {
            background: linear-gradient(135deg, #7209b7 0%, #3a0ca3 100%);
        }
        
        .card-header-trimestriel {
            background: linear-gradient(135deg, #4cc9f0 0%, #4361ee 100%);
        }
        
        .card-header-autre {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
        }
        
        .card-type-icon {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            backdrop-filter: blur(2px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        
        .reservation-card:hover .card-type-icon {
            transform: scale(1.1);
            background-color: rgba(255, 255, 255, 0.25);
        }
        
        .card-type-icon i {
            color: white;
            font-size: 1rem;
        }
        
        /* Responsive styles */
        @media (max-width: 992px) {
            .reservations-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 1.8rem;
            }
            
            .reservations-grid {
                grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
                gap: 1rem;
            }
            
            .card-image {
                height: 160px;
            }
        }
        
        @media (max-width: 576px) {
            .reservations-grid {
                grid-template-columns: 1fr;
            }
            
            .empty-state {
                flex-direction: column;
                text-align: center;
            }
            
            .empty-state i {
                margin-right: 0;
                margin-bottom: 0.5rem;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"reservations-container\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <h1>Mes Réservations d'Abonnements</h1>
    </div>
    
    {% if reservations is empty %}
        <!-- Empty State -->
        <div class=\"empty-state\">
            <i class=\"fas fa-info-circle\"></i>
            <p>Vous n'avez aucune réservation d'abonnement pour le moment. <a href=\"{{ path('app_abonnement_index') }}\" class=\"hover:underline\">Découvrez nos offres</a>.</p>
        </div>
    {% else %}
        <!-- Reservations Grid -->
        <div class=\"reservations-grid\">
            {% for reservation in reservations %}
                <div class=\"reservation-card\">
                    <!-- Card Image with Badge -->
                    <div class=\"card-image card-header-{{ reservation.abonnement.type|default('autre') }}\">
                        <div class=\"card-type-icon\">
                            {% if reservation.abonnement.type == 'mensuel' %}
                                <i class=\"fas fa-calendar-alt\"></i>
                            {% elseif reservation.abonnement.type == 'trimestriel' %}
                                <i class=\"fas fa-calendar-week\"></i>
                            {% elseif reservation.abonnement.type == 'annuel' %}
                                <i class=\"fas fa-calendar-check\"></i>
                            {% else %}
                                <i class=\"fas fa-ticket-alt\"></i>
                            {% endif %}
                        </div>
                        
                        {% if reservation.abonnement.image %}
                            <img src=\"{{ vich_uploader_asset(reservation.abonnement, 'imageFile') }}\" alt=\"{{ reservation.abonnement.type }}\">
                        {% else %}
                            {% set typeIcons = {
                                'mensuel': 'calendar-alt',
                                'trimestriel': 'calendar-week',
                                'annuel': 'calendar-check'
                            } %}
                            
                            {# If no image available, show a gradient background with a large icon #}
                            <div class=\"flex items-center justify-center h-full\">
                                <i class=\"fas fa-{{ typeIcons[reservation.abonnement.type]|default('ticket-alt') }} text-white opacity-30 text-6xl\"></i>
                            </div>
                        {% endif %}
                        
                        <div class=\"card-badge 
                            {% if reservation.statut == 'Confirmé' %}badge-confirmed
                            {% elseif reservation.statut == 'En attente' %}badge-pending
                            {% elseif reservation.statut == 'Annulé' %}badge-cancelled
                            {% else %}bg-gray-500 text-white{% endif %}\">
                            {{ reservation.statut }}
                        </div>
                    </div>
                    
                    <!-- Card Content -->
                    <div class=\"card-content\">
                        <h3 class=\"card-title\">Abonnement {{ reservation.abonnement.type|capitalize }}</h3>
                        
                        <div class=\"card-price\">{{ reservation.abonnement.prix }} DT</div>
                        
                        <div class=\"info-rows\">
                            <div class=\"info-row\">
                                <i class=\"fas fa-calendar-day\"></i>
                                <span>Début: {{ reservation.dateDebut|date('d/m/Y') }}</span>
                            </div>
                            <div class=\"info-row\">
                                <i class=\"fas fa-calendar-check\"></i>
                                <span>Fin: {{ reservation.dateFin|date('d/m/Y') }}</span>
                            </div>
                            
                            {% if reservation.dateReservation is defined %}
                                <div class=\"info-row\">
                                    <i class=\"fas fa-clock\"></i>
                                    <span>Réservé le: {{ reservation.dateReservation|date('d/m/Y') }}</span>
                                </div>
                            {% endif %}
                            
                            <div class=\"info-row\">
                                <i class=\"fas fa-bookmark\"></i>
                                <span>État: {{ reservation.abonnement.etat|capitalize }}</span>
                            </div>
                        </div>
                    </div>
                    
                 
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>
{% endblock %}", "abonnement_reservation/mes_reservations.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal - Copie (2)\\templates\\abonnement_reservation\\mes_reservations.html.twig");
    }
}
