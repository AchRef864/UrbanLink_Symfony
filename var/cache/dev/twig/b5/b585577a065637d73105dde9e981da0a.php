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

/* vehicle/my_vehicle.html.twig */
class __TwigTemplate_190b9f927ffc04899bb3fa6b36ac2a4d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/my_vehicle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/my_vehicle.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "vehicle/my_vehicle.html.twig", 1);
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

        yield "My Vehicle";
        
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
        :root {
            --primary: #5e60ce;
            --primary-dark: #4a4bd1;
            --secondary: #6930c3;
            --accent: #64dfdf;
            --accent-light: #80ffdb;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --success: #06d6a0;
            --danger: #ef476f;
            --warning: #ffd166;
            --info: #118ab2;
            --card-shadow: 0 10px 30px rgba(94, 96, 206, 0.15);
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f8f9fa;
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            padding: 2rem 1rem;
        }
        
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        h1, h2 {
            color: var(--primary);
            font-weight: 700;
            margin: 0;
        }
        
        h2 {
            font-size: 1.5rem;
            margin: 0 0 1rem;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            border: none;
        }
        
        .btn-primary {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(94, 96, 206, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(94, 96, 206, 0.4);
        }
        
        .btn svg {
            margin-right: 0.5rem;
            width: 18px;
            height: 18px;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            margin-bottom: 2rem;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(94, 96, 206, 0.2);
        }
        
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .card-text {
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }
        
        .badge {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.35em 0.65em;
            border-radius: 50px;
        }
        
        .bg-success {
            background-color: var(--success) !important;
        }
        
        .bg-warning {
            background-color: var(--warning) !important;
            color: var(--dark);
        }
        
        .bg-info {
            background-color: var(--info) !important;
        }
        
        .bg-danger {
            background-color: var(--danger) !important;
        }
        
        .btn-group {
            display: flex;
            gap: 0.75rem;
        }
        
        .btn-sm {
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            border-radius: 6px;
        }
        
        .btn-outline-primary {
            border: 1px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }
        
        .btn-outline-primary:hover {
            background: var(--primary);
            color: white;
        }
        
        .btn-outline-secondary {
            border: 1px solid var(--gray);
            color: var(--gray);
            background: transparent;
        }
        
        .btn-outline-secondary:hover {
            background: var(--gray);
            color: white;
        }
        
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
        }
        
        .empty-state svg {
            width: 64px;
            height: 64px;
            margin-bottom: 1rem;
            color: var(--gray);
            opacity: 0.7;
        }
        
        .empty-state h4 {
            color: var(--gray);
            margin-bottom: 0.5rem;
        }
        
        .empty-state p {
            color: var(--gray);
            opacity: 0.8;
            margin-bottom: 1.5rem;
        }
        
        .maintenance-section {
            background-color: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--card-shadow);
            margin-left: 1rem;
            flex: 1;
        }
        
        .maintenance-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .maintenance-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .maintenance-item:last-child {
            border-bottom: none;
        }
        
        .maintenance-details {
            flex: 1;
        }
        
        .maintenance-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .maintenance-date, .maintenance-cost {
            font-size: 0.85rem;
            color: var(--gray);
        }
        
        .maintenance-status {
            margin-left: 1rem;
        }
        
        .maintenance-total {
            display: flex;
            justify-content: flex-end;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 2px solid var(--primary);
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .add-maintenance-btn {
            margin-top: 1rem;
            display: inline-flex;
            align-items: center;
        }
        .maintenance-description {
            color: var(--gray);
            font-size: 0.85rem;
            margin: 0.5rem 0;
        }

        .maintenance-info {
            display: flex;
            gap: 1rem;
            font-size: 0.85rem;
            color: var(--gray);
            margin-top: 0.5rem;
        }

        .maintenance-info span {
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
        }

        .maintenance-cost {
            margin-top: 0.5rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
        }

        .maintenance-total svg {
            margin-right: 0.5rem;
        }
        
        .vehicle-row {
            display: flex;
            margin-bottom: 2rem;
        }
        
        .vehicle-card-container {
            flex: 0 0 400px;
        }
        
        /* PDF Button Styles */
        .btn-pdf {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
        }
        
        .btn-pdf:hover {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            box-shadow: 0 6px 15px rgba(239, 68, 68, 0.4);
            transform: translateY(-2px);
        }
        
        @media (max-width: 992px) {
            .vehicle-row {
                flex-direction: column;
            }
            
            .vehicle-card-container {
                flex: 1;
                margin-bottom: 1rem;
            }
            
            .maintenance-section {
                margin-left: 0;
                margin-top: 1rem;
            }
        }
        
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .btn-group {
                flex-wrap: wrap;
            }
            
            .btn-group .btn {
                flex: 1;
                min-width: 120px;
            }
            
            .vehicle-card-container {
                flex: 1;
            }
        }

        .maintenance-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            gap: 1rem;
        }
        
        .maintenance-actions {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }
        
        .btn-icon {
            padding: 0.5rem;
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
        }
        
        .btn-icon svg {
            margin-right: 0;
            width: 16px;
            height: 16px;
        }
        
        .btn-pdf-icon {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            box-shadow: 0 2px 5px rgba(239, 68, 68, 0.3);
        }
        
        .btn-pdf-icon:hover {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            box-shadow: 0 3px 8px rgba(239, 68, 68, 0.4);
        }
        
        .btn-delete-icon {
            background: transparent;
            border: 1px solid var(--danger);
            color: var(--danger);
        }
        
        .btn-delete-icon:hover {
            background: var(--danger);
            color: white;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 410
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

        // line 411
        yield "    <div class=\"container\">
        <div class=\"page-header\">
            <h1>My Vehicles</h1>
            <a href=\"";
        // line 414
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("driver_vehicle_new");
        yield "\" class=\"btn btn-primary\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                    <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                </svg>
                Add Vehicle
            </a>
        </div>
        
        ";
        // line 423
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["vehiclesWithMaintenance"]) || array_key_exists("vehiclesWithMaintenance", $context) ? $context["vehiclesWithMaintenance"] : (function () { throw new RuntimeError('Variable "vehiclesWithMaintenance" does not exist.', 423, $this->source); })())) > 0)) {
            // line 424
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehiclesWithMaintenance"]) || array_key_exists("vehiclesWithMaintenance", $context) ? $context["vehiclesWithMaintenance"] : (function () { throw new RuntimeError('Variable "vehiclesWithMaintenance" does not exist.', 424, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["vehicleData"]) {
                // line 425
                yield "                ";
                $context["vehicle"] = CoreExtension::getAttribute($this->env, $this->source, $context["vehicleData"], "vehicle", [], "any", false, false, false, 425);
                // line 426
                yield "                ";
                $context["maintenances"] = CoreExtension::getAttribute($this->env, $this->source, $context["vehicleData"], "maintenances", [], "any", false, false, false, 426);
                // line 427
                yield "                ";
                $context["totalMaintenanceCost"] = CoreExtension::getAttribute($this->env, $this->source, $context["vehicleData"], "totalMaintenanceCost", [], "any", false, false, false, 427);
                // line 428
                yield "                
                <div class=\"vehicle-row\">
                    <div class=\"vehicle-card-container\">
                    <div class=\"card h-100\">
                        <img src=\"";
                // line 432
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 432, $this->source); })()), "image", [], "any", false, false, false, 432), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 432, $this->source); })()), "brand", [], "any", false, false, false, 432), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 432, $this->source); })()), "model", [], "any", false, false, false, 432), "html", null, true);
                yield "\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">";
                // line 434
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 434, $this->source); })()), "brand", [], "any", false, false, false, 434), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 434, $this->source); })()), "model", [], "any", false, false, false, 434), "html", null, true);
                yield "</h5>
                            <p class=\"card-text\">
                                <strong>Type:</strong> ";
                // line 436
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 436, $this->source); })()), "type", [], "any", false, false, false, 436), "html", null, true);
                yield "<br>
                                <strong>License Plate:</strong> ";
                // line 437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 437, $this->source); })()), "licensePlate", [], "any", false, false, false, 437), "html", null, true);
                yield "<br>
                                <strong>Year:</strong> ";
                // line 438
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 438, $this->source); })()), "year", [], "any", false, false, false, 438), "html", null, true);
                yield "<br>
                                <strong>Seats:</strong> ";
                // line 439
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 439, $this->source); })()), "seats", [], "any", false, false, false, 439), "html", null, true);
                yield "<br>
                                <strong>Status:</strong> 
                                <span class=\"badge bg-";
                // line 441
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 441, $this->source); })()), "isVerified", [], "any", false, false, false, 441)) ? ("success") : ("warning"));
                yield "\">
                                    ";
                // line 442
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 442, $this->source); })()), "isVerified", [], "any", false, false, false, 442)) ? ("Verified") : ("Pending Verification"));
                yield "
                                </span><br>
                                ";
                // line 444
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 444, $this->source); })())) > 0)) {
                    // line 445
                    yield "                                ";
                    $context["latestMaintenance"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 445, $this->source); })()));
                    // line 446
                    yield "                                <strong>Maintenance Status:</strong>
                                <span class=\"badge bg-";
                    // line 447
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestMaintenance"]) || array_key_exists("latestMaintenance", $context) ? $context["latestMaintenance"] : (function () { throw new RuntimeError('Variable "latestMaintenance" does not exist.', 447, $this->source); })()), "status", [], "any", false, false, false, 447) == 0)) {
                        yield "success
                                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 448
(isset($context["latestMaintenance"]) || array_key_exists("latestMaintenance", $context) ? $context["latestMaintenance"] : (function () { throw new RuntimeError('Variable "latestMaintenance" does not exist.', 448, $this->source); })()), "status", [], "any", false, false, false, 448) == 1)) {
                        yield "warning
                                                    ";
                    } else {
                        // line 449
                        yield "info";
                    }
                    yield "\">
                                    ";
                    // line 450
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestMaintenance"]) || array_key_exists("latestMaintenance", $context) ? $context["latestMaintenance"] : (function () { throw new RuntimeError('Variable "latestMaintenance" does not exist.', 450, $this->source); })()), "status", [], "any", false, false, false, 450) == 0)) {
                        // line 451
                        yield "                                        Not in maintenance
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 452
(isset($context["latestMaintenance"]) || array_key_exists("latestMaintenance", $context) ? $context["latestMaintenance"] : (function () { throw new RuntimeError('Variable "latestMaintenance" does not exist.', 452, $this->source); })()), "status", [], "any", false, false, false, 452) == 1)) {
                        // line 453
                        yield "                                        In maintenance
                                    ";
                    } else {
                        // line 455
                        yield "                                        Reserved
                                    ";
                    }
                    // line 457
                    yield "                                </span>
                            ";
                }
                // line 459
                yield "                            </p>
                            ";
                // line 460
                if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 460, $this->source); })()), "isVerified", [], "any", false, false, false, 460)) {
                    // line 461
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_verify_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 461, $this->source); })()), "id", [], "any", false, false, false, 461)]), "html", null, true);
                    yield "\" class=\"btn btn-outline-success btn-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                            <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                                        </svg>
                                        Verify
                                    </a>
                                ";
                }
                // line 469
                yield "                            <div class=\"btn-group mt-auto\">
                                <a href=\"";
                // line 470
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 470, $this->source); })()), "id", [], "any", false, false, false, 470)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary btn-sm\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                        <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"></path>
                                        <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>
                                    </svg>
                                    Details
                                </a>
                                <a href=\"";
                // line 477
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 477, $this->source); })()), "id", [], "any", false, false, false, 477)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary btn-sm\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                        <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                                        <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                                    </svg>
                                    Edit
                                </a>
                                <form method=\"post\" action=\"";
                // line 484
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 484, $this->source); })()), "id", [], "any", false, false, false, 484)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Are you sure you want to delete this vehicle?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 485
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 485, $this->source); })()), "id", [], "any", false, false, false, 485))), "html", null, true);
                yield "\">
                                    <button class=\"btn btn-outline-danger btn-sm\" type=\"submit\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <polyline points=\"3 6 5 6 21 6\"></polyline>
                                            <path d=\"M19 6l-2 14H7L5 6\"></path>
                                            <path d=\"M10 11v6\"></path>
                                            <path d=\"M14 11v6\"></path>
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>            
                    <!-- Maintenance Section for each vehicle - now on the right side -->
                     <div class=\"maintenance-section\">
                        <h2>Maintenance for ";
                // line 502
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 502, $this->source); })()), "brand", [], "any", false, false, false, 502), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 502, $this->source); })()), "model", [], "any", false, false, false, 502), "html", null, true);
                yield "</h2>
                        
                        ";
                // line 504
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 504, $this->source); })())) > 0)) {
                    // line 505
                    yield "                            <ul class=\"maintenance-list\">
                                ";
                    // line 506
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 506, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["maintenance"]) {
                        // line 507
                        yield "                                    <li class=\"maintenance-item\">
                                        <div class=\"maintenance-details\">
                                            <div class=\"maintenance-title\">";
                        // line 509
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "serviceType", [], "any", false, false, false, 509), "html", null, true);
                        yield "</div>
                                            <div class=\"maintenance-description\">";
                        // line 510
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "description", [], "any", false, false, false, 510), "html", null, true);
                        yield "</div>
                                            <div class=\"maintenance-info\">
                                                <span class=\"maintenance-date\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                                                        <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
                                                        <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
                                                        <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
                                                    </svg>
                                                    ";
                        // line 519
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "maintenanceDate", [], "any", false, false, false, 519), "M d, Y"), "html", null, true);
                        yield "
                                                </span>
                                                <span class=\"maintenance-provider\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path>
                                                        <circle cx=\"9\" cy=\"7\" r=\"4\"></circle>
                                                        <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path>
                                                        <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path>
                                                    </svg>
                                                    ";
                        // line 528
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "serviceProvider", [], "any", false, false, false, 528), "html", null, true);
                        yield "
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <div class=\"maintenance-cost\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
                                                <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path>
                                            </svg>
                                            ";
                        // line 538
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "cost", [], "any", false, false, false, 538), 2), "html", null, true);
                        yield " TND
                                        </div>
                                        
                                        <div class=\"maintenance-actions\">
                                            <a href=\"";
                        // line 542
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maintenance_export_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 542)]), "html", null, true);
                        yield "\" class=\"btn btn-icon btn-pdf-icon\" title=\"Export to PDF\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                    <path d=\"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\"></path>
                                                    <polyline points=\"7 10 12 15 17 10\"></polyline>
                                                    <line x1=\"12\" y1=\"15\" x2=\"12\" y2=\"3\"></line>
                                                </svg>
                                            </a>
                                            <form method=\"post\" action=\"";
                        // line 549
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maintenance_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 549)]), "html", null, true);
                        yield "\" onsubmit=\"return confirm('Are you sure you want to delete this maintenance record?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 550
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 550))), "html", null, true);
                        yield "\">
                                                <button class=\"btn btn-icon btn-delete-icon\" type=\"submit\" title=\"Delete Record\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <polyline points=\"3 6 5 6 21 6\"></polyline>
                                                        <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['maintenance'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 561
                    yield "                            </ul>
                            <div class=\"maintenance-footer\" style=\"display: flex; justify-content: space-between; align-items: center; margin-top: 1.5rem; border-top: 1px solid rgba(0,0,0,0.1); padding-top: 1rem;\">
                                <form method=\"post\" action=\"";
                    // line 563
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clear_vehicle_maintenance_history", ["vehicle_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 563, $this->source); })()), "id", [], "any", false, false, false, 563)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Are you sure you want to clear ALL maintenance history for this vehicle? This action cannot be undone.');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 564
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("clear_history_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 564, $this->source); })()), "id", [], "any", false, false, false, 564))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"btn btn-outline-danger\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <polyline points=\"3 6 5 6 21 6\"></polyline>
                                            <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                        </svg>
                                        Clear History
                                    </button>
                                </form>
                                <div class=\"maintenance-total\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                        <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
                                        <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path>
                                    </svg>
                                    Total Maintenance Cost: ";
                    // line 578
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalMaintenanceCost"]) || array_key_exists("totalMaintenanceCost", $context) ? $context["totalMaintenanceCost"] : (function () { throw new RuntimeError('Variable "totalMaintenanceCost" does not exist.', 578, $this->source); })()), 2), "html", null, true);
                    yield " TND
                                </div>
                                
                            </div>
                            <a href=\"";
                    // line 582
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenances_new", ["vehicle_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 582, $this->source); })()), "id", [], "any", false, false, false, 582)]), "html", null, true);
                    yield "\" class=\"btn btn-primary add-maintenance-btn\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                                    <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                                </svg>
                                Add Maintenance
                            </a>
                        ";
                } else {
                    // line 590
                    yield "                            <div class=\"empty-state\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8z\"></path>
                                    <circle cx=\"10\" cy=\"13\" r=\"2\"></circle>
                                    <line x1=\"16\" y1=\"13\" x2=\"22\" y2=\"13\"></line>
                                    <line x1=\"16\" y1=\"17\" x2=\"22\" y2=\"17\"></line>
                                    <polyline points=\"14 2 14 8 20 8\"></polyline>
                                </svg>
                                <h4>No Maintenance Records</h4>
                                <p>You haven't added any maintenance records for this vehicle yet.</p>
                                <a href=\"";
                    // line 600
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenances_new", ["vehicle_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 600, $this->source); })()), "id", [], "any", false, false, false, 600)]), "html", null, true);
                    yield "\" class=\"btn btn-primary\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                        <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                                        <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                                    </svg>
                                    Add Maintenance
                                </a>
                            </div>
                        ";
                }
                // line 609
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['vehicleData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 612
            yield "        ";
        } else {
            // line 613
            yield "            <div class=\"card\">
                <div class=\"empty-state\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <rect x=\"1\" y=\"3\" width=\"15\" height=\"13\"></rect>
                        <polyline points=\"16 8 20 8 23 11 23 16 20 16 20 18 9 18\"></polyline>
                        <circle cx=\"5.5\" cy=\"18.5\" r=\"2.5\"></circle>
                        <circle cx=\"18.5\" cy=\"18.5\" r=\"2.5\"></circle>
                    </svg>
                    <h4>No Vehicles Registered</h4>
                    <p>You haven't added any vehicles yet. Get started by registering your first vehicle.</p>
                    <a href=\"";
            // line 623
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("driver_vehicle_new");
            yield "\" class=\"btn btn-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                        </svg>
                        Add Your First Vehicle
                    </a>
                </div>
            </div>
        ";
        }
        // line 633
        yield "    </div>
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
        return "vehicle/my_vehicle.html.twig";
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
        return array (  917 => 633,  904 => 623,  892 => 613,  889 => 612,  881 => 609,  869 => 600,  857 => 590,  846 => 582,  839 => 578,  822 => 564,  818 => 563,  814 => 561,  797 => 550,  793 => 549,  783 => 542,  776 => 538,  763 => 528,  751 => 519,  739 => 510,  735 => 509,  731 => 507,  727 => 506,  724 => 505,  722 => 504,  715 => 502,  695 => 485,  691 => 484,  681 => 477,  671 => 470,  668 => 469,  656 => 461,  654 => 460,  651 => 459,  647 => 457,  643 => 455,  639 => 453,  637 => 452,  634 => 451,  632 => 450,  627 => 449,  622 => 448,  618 => 447,  615 => 446,  612 => 445,  610 => 444,  605 => 442,  601 => 441,  596 => 439,  592 => 438,  588 => 437,  584 => 436,  577 => 434,  568 => 432,  562 => 428,  559 => 427,  556 => 426,  553 => 425,  548 => 424,  546 => 423,  534 => 414,  529 => 411,  516 => 410,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}My Vehicle{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --primary: #5e60ce;
            --primary-dark: #4a4bd1;
            --secondary: #6930c3;
            --accent: #64dfdf;
            --accent-light: #80ffdb;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --success: #06d6a0;
            --danger: #ef476f;
            --warning: #ffd166;
            --info: #118ab2;
            --card-shadow: 0 10px 30px rgba(94, 96, 206, 0.15);
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f8f9fa;
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            padding: 2rem 1rem;
        }
        
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        h1, h2 {
            color: var(--primary);
            font-weight: 700;
            margin: 0;
        }
        
        h2 {
            font-size: 1.5rem;
            margin: 0 0 1rem;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            border: none;
        }
        
        .btn-primary {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(94, 96, 206, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(94, 96, 206, 0.4);
        }
        
        .btn svg {
            margin-right: 0.5rem;
            width: 18px;
            height: 18px;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            margin-bottom: 2rem;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(94, 96, 206, 0.2);
        }
        
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .card-text {
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }
        
        .badge {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.35em 0.65em;
            border-radius: 50px;
        }
        
        .bg-success {
            background-color: var(--success) !important;
        }
        
        .bg-warning {
            background-color: var(--warning) !important;
            color: var(--dark);
        }
        
        .bg-info {
            background-color: var(--info) !important;
        }
        
        .bg-danger {
            background-color: var(--danger) !important;
        }
        
        .btn-group {
            display: flex;
            gap: 0.75rem;
        }
        
        .btn-sm {
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            border-radius: 6px;
        }
        
        .btn-outline-primary {
            border: 1px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }
        
        .btn-outline-primary:hover {
            background: var(--primary);
            color: white;
        }
        
        .btn-outline-secondary {
            border: 1px solid var(--gray);
            color: var(--gray);
            background: transparent;
        }
        
        .btn-outline-secondary:hover {
            background: var(--gray);
            color: white;
        }
        
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
        }
        
        .empty-state svg {
            width: 64px;
            height: 64px;
            margin-bottom: 1rem;
            color: var(--gray);
            opacity: 0.7;
        }
        
        .empty-state h4 {
            color: var(--gray);
            margin-bottom: 0.5rem;
        }
        
        .empty-state p {
            color: var(--gray);
            opacity: 0.8;
            margin-bottom: 1.5rem;
        }
        
        .maintenance-section {
            background-color: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--card-shadow);
            margin-left: 1rem;
            flex: 1;
        }
        
        .maintenance-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .maintenance-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .maintenance-item:last-child {
            border-bottom: none;
        }
        
        .maintenance-details {
            flex: 1;
        }
        
        .maintenance-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .maintenance-date, .maintenance-cost {
            font-size: 0.85rem;
            color: var(--gray);
        }
        
        .maintenance-status {
            margin-left: 1rem;
        }
        
        .maintenance-total {
            display: flex;
            justify-content: flex-end;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 2px solid var(--primary);
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .add-maintenance-btn {
            margin-top: 1rem;
            display: inline-flex;
            align-items: center;
        }
        .maintenance-description {
            color: var(--gray);
            font-size: 0.85rem;
            margin: 0.5rem 0;
        }

        .maintenance-info {
            display: flex;
            gap: 1rem;
            font-size: 0.85rem;
            color: var(--gray);
            margin-top: 0.5rem;
        }

        .maintenance-info span {
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
        }

        .maintenance-cost {
            margin-top: 0.5rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
        }

        .maintenance-total svg {
            margin-right: 0.5rem;
        }
        
        .vehicle-row {
            display: flex;
            margin-bottom: 2rem;
        }
        
        .vehicle-card-container {
            flex: 0 0 400px;
        }
        
        /* PDF Button Styles */
        .btn-pdf {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
        }
        
        .btn-pdf:hover {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            box-shadow: 0 6px 15px rgba(239, 68, 68, 0.4);
            transform: translateY(-2px);
        }
        
        @media (max-width: 992px) {
            .vehicle-row {
                flex-direction: column;
            }
            
            .vehicle-card-container {
                flex: 1;
                margin-bottom: 1rem;
            }
            
            .maintenance-section {
                margin-left: 0;
                margin-top: 1rem;
            }
        }
        
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .btn-group {
                flex-wrap: wrap;
            }
            
            .btn-group .btn {
                flex: 1;
                min-width: 120px;
            }
            
            .vehicle-card-container {
                flex: 1;
            }
        }

        .maintenance-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            gap: 1rem;
        }
        
        .maintenance-actions {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }
        
        .btn-icon {
            padding: 0.5rem;
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
        }
        
        .btn-icon svg {
            margin-right: 0;
            width: 16px;
            height: 16px;
        }
        
        .btn-pdf-icon {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            box-shadow: 0 2px 5px rgba(239, 68, 68, 0.3);
        }
        
        .btn-pdf-icon:hover {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            box-shadow: 0 3px 8px rgba(239, 68, 68, 0.4);
        }
        
        .btn-delete-icon {
            background: transparent;
            border: 1px solid var(--danger);
            color: var(--danger);
        }
        
        .btn-delete-icon:hover {
            background: var(--danger);
            color: white;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"page-header\">
            <h1>My Vehicles</h1>
            <a href=\"{{ path('driver_vehicle_new') }}\" class=\"btn btn-primary\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                    <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                </svg>
                Add Vehicle
            </a>
        </div>
        
        {% if vehiclesWithMaintenance|length > 0 %}
            {% for vehicleData in vehiclesWithMaintenance %}
                {% set vehicle = vehicleData.vehicle %}
                {% set maintenances = vehicleData.maintenances %}
                {% set totalMaintenanceCost = vehicleData.totalMaintenanceCost %}
                
                <div class=\"vehicle-row\">
                    <div class=\"vehicle-card-container\">
                    <div class=\"card h-100\">
                        <img src=\"{{ vehicle.image }}\" class=\"card-img-top\" alt=\"{{ vehicle.brand }} {{ vehicle.model }}\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">{{ vehicle.brand }} {{ vehicle.model }}</h5>
                            <p class=\"card-text\">
                                <strong>Type:</strong> {{ vehicle.type }}<br>
                                <strong>License Plate:</strong> {{ vehicle.licensePlate }}<br>
                                <strong>Year:</strong> {{ vehicle.year }}<br>
                                <strong>Seats:</strong> {{ vehicle.seats }}<br>
                                <strong>Status:</strong> 
                                <span class=\"badge bg-{{ vehicle.isVerified ? 'success' : 'warning' }}\">
                                    {{ vehicle.isVerified ? 'Verified' : 'Pending Verification' }}
                                </span><br>
                                {% if maintenances|length > 0 %}
                                {% set latestMaintenance = maintenances|first %}
                                <strong>Maintenance Status:</strong>
                                <span class=\"badge bg-{% if latestMaintenance.status == 0 %}success
                                                    {% elseif latestMaintenance.status == 1 %}warning
                                                    {% else %}info{% endif %}\">
                                    {% if latestMaintenance.status == 0 %}
                                        Not in maintenance
                                    {% elseif latestMaintenance.status == 1 %}
                                        In maintenance
                                    {% else %}
                                        Reserved
                                    {% endif %}
                                </span>
                            {% endif %}
                            </p>
                            {% if not vehicle.isVerified %}
                                    <a href=\"{{ path('vehicle_verify_page', {'id': vehicle.id}) }}\" class=\"btn btn-outline-success btn-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                            <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                                        </svg>
                                        Verify
                                    </a>
                                {% endif %}
                            <div class=\"btn-group mt-auto\">
                                <a href=\"{{ path('vehicle_show', {'id': vehicle.id}) }}\" class=\"btn btn-outline-primary btn-sm\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                        <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"></path>
                                        <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>
                                    </svg>
                                    Details
                                </a>
                                <a href=\"{{ path('vehicle_edit', {'id': vehicle.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                        <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                                        <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                                    </svg>
                                    Edit
                                </a>
                                <form method=\"post\" action=\"{{ path('vehicle_delete', {'id': vehicle.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this vehicle?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ vehicle.id) }}\">
                                    <button class=\"btn btn-outline-danger btn-sm\" type=\"submit\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <polyline points=\"3 6 5 6 21 6\"></polyline>
                                            <path d=\"M19 6l-2 14H7L5 6\"></path>
                                            <path d=\"M10 11v6\"></path>
                                            <path d=\"M14 11v6\"></path>
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>            
                    <!-- Maintenance Section for each vehicle - now on the right side -->
                     <div class=\"maintenance-section\">
                        <h2>Maintenance for {{ vehicle.brand }} {{ vehicle.model }}</h2>
                        
                        {% if maintenances|length > 0 %}
                            <ul class=\"maintenance-list\">
                                {% for maintenance in maintenances %}
                                    <li class=\"maintenance-item\">
                                        <div class=\"maintenance-details\">
                                            <div class=\"maintenance-title\">{{ maintenance.serviceType }}</div>
                                            <div class=\"maintenance-description\">{{ maintenance.description }}</div>
                                            <div class=\"maintenance-info\">
                                                <span class=\"maintenance-date\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                                                        <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
                                                        <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
                                                        <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
                                                    </svg>
                                                    {{ maintenance.maintenanceDate|date('M d, Y') }}
                                                </span>
                                                <span class=\"maintenance-provider\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path>
                                                        <circle cx=\"9\" cy=\"7\" r=\"4\"></circle>
                                                        <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path>
                                                        <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path>
                                                    </svg>
                                                    {{ maintenance.serviceProvider }}
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <div class=\"maintenance-cost\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
                                                <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path>
                                            </svg>
                                            {{ maintenance.cost|number_format(2) }} TND
                                        </div>
                                        
                                        <div class=\"maintenance-actions\">
                                            <a href=\"{{ path('maintenance_export_pdf', {'id': maintenance.id}) }}\" class=\"btn btn-icon btn-pdf-icon\" title=\"Export to PDF\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                    <path d=\"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\"></path>
                                                    <polyline points=\"7 10 12 15 17 10\"></polyline>
                                                    <line x1=\"12\" y1=\"15\" x2=\"12\" y2=\"3\"></line>
                                                </svg>
                                            </a>
                                            <form method=\"post\" action=\"{{ path('maintenance_delete', {'id': maintenance.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this maintenance record?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ maintenance.id) }}\">
                                                <button class=\"btn btn-icon btn-delete-icon\" type=\"submit\" title=\"Delete Record\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <polyline points=\"3 6 5 6 21 6\"></polyline>
                                                        <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                            <div class=\"maintenance-footer\" style=\"display: flex; justify-content: space-between; align-items: center; margin-top: 1.5rem; border-top: 1px solid rgba(0,0,0,0.1); padding-top: 1rem;\">
                                <form method=\"post\" action=\"{{ path('clear_vehicle_maintenance_history', {'vehicle_id': vehicle.id}) }}\" onsubmit=\"return confirm('Are you sure you want to clear ALL maintenance history for this vehicle? This action cannot be undone.');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('clear_history_' ~ vehicle.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-outline-danger\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <polyline points=\"3 6 5 6 21 6\"></polyline>
                                            <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                        </svg>
                                        Clear History
                                    </button>
                                </form>
                                <div class=\"maintenance-total\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                        <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
                                        <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path>
                                    </svg>
                                    Total Maintenance Cost: {{ totalMaintenanceCost|number_format(2) }} TND
                                </div>
                                
                            </div>
                            <a href=\"{{ path('admin_maintenances_new', {'vehicle_id': vehicle.id}) }}\" class=\"btn btn-primary add-maintenance-btn\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                                    <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                                </svg>
                                Add Maintenance
                            </a>
                        {% else %}
                            <div class=\"empty-state\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8z\"></path>
                                    <circle cx=\"10\" cy=\"13\" r=\"2\"></circle>
                                    <line x1=\"16\" y1=\"13\" x2=\"22\" y2=\"13\"></line>
                                    <line x1=\"16\" y1=\"17\" x2=\"22\" y2=\"17\"></line>
                                    <polyline points=\"14 2 14 8 20 8\"></polyline>
                                </svg>
                                <h4>No Maintenance Records</h4>
                                <p>You haven't added any maintenance records for this vehicle yet.</p>
                                <a href=\"{{ path('admin_maintenances_new', {'vehicle_id': vehicle.id}) }}\" class=\"btn btn-primary\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                        <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                                        <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                                    </svg>
                                    Add Maintenance
                                </a>
                            </div>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        {% else %}
            <div class=\"card\">
                <div class=\"empty-state\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <rect x=\"1\" y=\"3\" width=\"15\" height=\"13\"></rect>
                        <polyline points=\"16 8 20 8 23 11 23 16 20 16 20 18 9 18\"></polyline>
                        <circle cx=\"5.5\" cy=\"18.5\" r=\"2.5\"></circle>
                        <circle cx=\"18.5\" cy=\"18.5\" r=\"2.5\"></circle>
                    </svg>
                    <h4>No Vehicles Registered</h4>
                    <p>You haven't added any vehicles yet. Get started by registering your first vehicle.</p>
                    <a href=\"{{ path('driver_vehicle_new') }}\" class=\"btn btn-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                        </svg>
                        Add Your First Vehicle
                    </a>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock %}", "vehicle/my_vehicle.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\vehicle\\my_vehicle.html.twig");
    }
}
