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

/* vehicle/show.html.twig */
class __TwigTemplate_2bc77d08f60b73f78d16dc2e534ea664 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vehicle/show.html.twig", 1);
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

        yield "Vehicle Details";
        
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
        yield "    <style>
        :root {
            --primary: #5D5FEF;
            --primary-light: #EEF0FF;
            --secondary: #4A4FE4;
            --dark: #1A202C;
            --gray-100: #F7FAFC;
            --gray-200: #EDF2F7;
            --gray-300: #E2E8F0;
            --gray-400: #CBD5E0;
            --gray-500: #A0AEC0;
            --gray-600: #718096;
            --gray-700: #4A5568;
            --success: #38B2AC;
            --warning: #F6AD55;
            --danger: #F56565;
            --info: #63B3ED;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: #F5F7FA;
            color: var(--dark);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }
        
        .container {
            max-width: 800px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }
        
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            overflow: hidden;
        }
        
        .card-header {
            padding: 1.75rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--gray-200);
        }
        
        .header-title {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .header-title h1 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark);
        }
        
        .header-title svg {
            color: var(--primary);
        }
        
        .card-body {
            padding: 2rem;
        }
        
        .section-title {
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--gray-600);
            margin-bottom: 1.25rem;
            font-weight: 600;
        }
        
        .detail-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 2rem 1.5rem;
            margin-bottom: 2rem;
        }
        
        .detail-item {
            display: flex;
            flex-direction: column;
        }
        
        .detail-label {
            font-size: 0.75rem;
            color: var(--gray-500);
            margin-bottom: 0.375rem;
            font-weight: 500;
        }
        
        .detail-value {
            font-size: 1rem;
            font-weight: 500;
            color: var(--dark);
        }
        
        .detail-value a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .detail-value a:hover {
            color: var(--secondary);
        }
        
        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .status-available { 
            background-color: #E6FFFA; 
            color: #2C7A7B; 
        }
        
        .status-unavailable { 
            background-color: #FED7D7; 
            color: #C53030; 
        }
        
        .status-verified { 
            background-color: #C6F6D5; 
            color: #276749; 
        }
        
        .status-unverified { 
            background-color: #FED7D7; 
            color: #9B2C2C; 
        }
        
        .vehicle-image-container {
            margin-top: 2rem;
            margin-bottom: 2rem;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .vehicle-image {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        }
        
        .status-group {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .maintenance-list {
            margin-top: 1.5rem;
        }
        
        .maintenance-item {
            padding: 1rem;
            background-color: var(--gray-100);
            border-radius: 8px;
            margin-bottom: 0.75rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .maintenance-date {
            font-size: 0.875rem;
            color: var(--gray-600);
            font-weight: 500;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.625rem 1.25rem;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
            font-size: 0.875rem;
            gap: 0.5rem;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary);
            box-shadow: 0 4px 12px rgba(93, 95, 239, 0.25);
        }
        
        .btn-secondary {
            background-color: white;
            color: var(--dark);
            border: 1px solid var(--gray-300);
        }
        
        .btn-secondary:hover {
            background-color: var(--gray-100);
        }
        
        @media (max-width: 640px) {
            .container {
                margin: 1rem auto;
                padding: 0 1rem;
            }
            
            .card-header, .card-body {
                padding: 1.5rem;
            }
            
            .detail-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }
            
            .actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-header\">
                <div class=\"header-title\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <rect x=\"1\" y=\"3\" width=\"15\" height=\"13\"></rect>
                        <polygon points=\"16 8 20 8 23 11 23 16 16 16 16 8\"></polygon>
                        <circle cx=\"5.5\" cy=\"18.5\" r=\"2.5\"></circle>
                        <circle cx=\"18.5\" cy=\"18.5\" r=\"2.5\"></circle>
                    </svg>
                    <h1>";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 271, $this->source); })()), "brand", [], "any", false, false, false, 271), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 271, $this->source); })()), "model", [], "any", false, false, false, 271), "html", null, true);
        yield "</h1>
                </div>
                <div class=\"status-group\">
                    <span class=\"status-badge status-";
        // line 274
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 274, $this->source); })()), "isAvailable", [], "any", false, false, false, 274)) ? ("available") : ("unavailable"));
        yield "\">
                        ";
        // line 275
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 275, $this->source); })()), "isAvailable", [], "any", false, false, false, 275)) ? ("Available") : ("Not Available"));
        yield "
                    </span>
                    <span class=\"status-badge status-";
        // line 277
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 277, $this->source); })()), "isVerified", [], "any", false, false, false, 277)) ? ("verified") : ("unverified"));
        yield "\">
                        ";
        // line 278
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 278, $this->source); })()), "isVerified", [], "any", false, false, false, 278)) ? ("Verified") : ("Not Verified"));
        yield "
                    </span>
                </div>
            </div>
            
            <div class=\"card-body\">
                ";
        // line 284
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 284, $this->source); })()), "image", [], "any", false, false, false, 284)) {
            // line 285
            yield "                <div class=\"vehicle-image-container\">
                    <img src=\"";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 286, $this->source); })()), "image", [], "any", false, false, false, 286), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 286, $this->source); })()), "brand", [], "any", false, false, false, 286), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 286, $this->source); })()), "model", [], "any", false, false, false, 286), "html", null, true);
            yield "\" class=\"vehicle-image\">
                </div>
                ";
        }
        // line 289
        yield "                
                <h2 class=\"section-title\">Vehicle Information</h2>
                <div class=\"detail-grid\">
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Type</span>
                        <span class=\"detail-value\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 294, $this->source); })()), "type", [], "any", false, false, false, 294), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Brand</span>
                        <span class=\"detail-value\">";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 299, $this->source); })()), "brand", [], "any", false, false, false, 299), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Model</span>
                        <span class=\"detail-value\">";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 304, $this->source); })()), "model", [], "any", false, false, false, 304), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">License Plate</span>
                        <span class=\"detail-value\">";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 309, $this->source); })()), "licensePlate", [], "any", false, false, false, 309), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Color</span>
                        <span class=\"detail-value\">";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 314, $this->source); })()), "color", [], "any", false, false, false, 314), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Year</span>
                        <span class=\"detail-value\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 319, $this->source); })()), "year", [], "any", false, false, false, 319), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Seats</span>
                        <span class=\"detail-value\">";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 324, $this->source); })()), "seats", [], "any", false, false, false, 324), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Air Conditioning</span>
                        <span class=\"detail-value\">";
        // line 329
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 329, $this->source); })()), "airConditioning", [], "any", false, false, false, 329)) ? ("Yes") : ("No"));
        yield "</span>
                    </div>
                </div>
                
                <h2 class=\"section-title\">Maintenance History</h2>
                <div class=\"maintenance-list\">
                    ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 335, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["maintenance"]) {
            // line 336
            yield "                        <div class=\"maintenance-item\">
                            <div>
                                <strong>";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "description", [], "any", false, false, false, 338), "html", null, true);
            yield "</strong>
                                <div class=\"maintenance-date\">";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "maintenanceDate", [], "any", false, false, false, 339), "F j, Y"), "html", null, true);
            yield "</div>
                            </div>
                            <span class=\"detail-value\">
                                ";
            // line 342
            if (CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "cost", [], "any", false, false, false, 342)) {
                // line 343
                yield "                                    \$";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "cost", [], "any", false, false, false, 343), 2), "html", null, true);
                yield "
                                ";
            }
            // line 345
            yield "                            </span>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 347
        if (!$context['_iterated']) {
            // line 348
            yield "                        <div class=\"detail-item\">
                            <span class=\"detail-value\">No maintenance records found.</span>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['maintenance'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        yield "                </div>
                
                <h2 class=\"section-title\">Assignment</h2>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Driver</span>
                    <span class=\"detail-value\">
                        ";
        // line 358
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 358, $this->source); })()), "driver", [], "any", false, false, false, 358)) {
            // line 359
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 359, $this->source); })()), "driver", [], "any", false, false, false, 359), "name", [], "any", false, false, false, 359), "html", null, true);
            yield " (ID: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 359, $this->source); })()), "driver", [], "any", false, false, false, 359), "id", [], "any", false, false, false, 359), "html", null, true);
            yield ")
                        ";
        } else {
            // line 361
            yield "                            No driver assigned
                        ";
        }
        // line 363
        yield "                    </span>
                </div>
                
                <div class=\"actions\">
                    <a href=\"";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 367, $this->source); })()), "id", [], "any", false, false, false, 367)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                            <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                        </svg>
                        Edit Vehicle
                    </a>
                    <a href=\"";
        // line 374
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_index");
        yield "\" class=\"btn btn-secondary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line>
                            <polyline points=\"12 19 5 12 12 5\"></polyline>
                        </svg>
                        Back to list
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
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
        return "vehicle/show.html.twig";
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
        return array (  566 => 374,  556 => 367,  550 => 363,  546 => 361,  538 => 359,  536 => 358,  528 => 352,  519 => 348,  517 => 347,  511 => 345,  505 => 343,  503 => 342,  497 => 339,  493 => 338,  489 => 336,  484 => 335,  475 => 329,  467 => 324,  459 => 319,  451 => 314,  443 => 309,  435 => 304,  427 => 299,  419 => 294,  412 => 289,  402 => 286,  399 => 285,  397 => 284,  388 => 278,  384 => 277,  379 => 275,  375 => 274,  367 => 271,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vehicle Details{% endblock %}

{% block body %}
    <style>
        :root {
            --primary: #5D5FEF;
            --primary-light: #EEF0FF;
            --secondary: #4A4FE4;
            --dark: #1A202C;
            --gray-100: #F7FAFC;
            --gray-200: #EDF2F7;
            --gray-300: #E2E8F0;
            --gray-400: #CBD5E0;
            --gray-500: #A0AEC0;
            --gray-600: #718096;
            --gray-700: #4A5568;
            --success: #38B2AC;
            --warning: #F6AD55;
            --danger: #F56565;
            --info: #63B3ED;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: #F5F7FA;
            color: var(--dark);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }
        
        .container {
            max-width: 800px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }
        
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            overflow: hidden;
        }
        
        .card-header {
            padding: 1.75rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--gray-200);
        }
        
        .header-title {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .header-title h1 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark);
        }
        
        .header-title svg {
            color: var(--primary);
        }
        
        .card-body {
            padding: 2rem;
        }
        
        .section-title {
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--gray-600);
            margin-bottom: 1.25rem;
            font-weight: 600;
        }
        
        .detail-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 2rem 1.5rem;
            margin-bottom: 2rem;
        }
        
        .detail-item {
            display: flex;
            flex-direction: column;
        }
        
        .detail-label {
            font-size: 0.75rem;
            color: var(--gray-500);
            margin-bottom: 0.375rem;
            font-weight: 500;
        }
        
        .detail-value {
            font-size: 1rem;
            font-weight: 500;
            color: var(--dark);
        }
        
        .detail-value a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .detail-value a:hover {
            color: var(--secondary);
        }
        
        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .status-available { 
            background-color: #E6FFFA; 
            color: #2C7A7B; 
        }
        
        .status-unavailable { 
            background-color: #FED7D7; 
            color: #C53030; 
        }
        
        .status-verified { 
            background-color: #C6F6D5; 
            color: #276749; 
        }
        
        .status-unverified { 
            background-color: #FED7D7; 
            color: #9B2C2C; 
        }
        
        .vehicle-image-container {
            margin-top: 2rem;
            margin-bottom: 2rem;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .vehicle-image {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        }
        
        .status-group {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .maintenance-list {
            margin-top: 1.5rem;
        }
        
        .maintenance-item {
            padding: 1rem;
            background-color: var(--gray-100);
            border-radius: 8px;
            margin-bottom: 0.75rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .maintenance-date {
            font-size: 0.875rem;
            color: var(--gray-600);
            font-weight: 500;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.625rem 1.25rem;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
            font-size: 0.875rem;
            gap: 0.5rem;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary);
            box-shadow: 0 4px 12px rgba(93, 95, 239, 0.25);
        }
        
        .btn-secondary {
            background-color: white;
            color: var(--dark);
            border: 1px solid var(--gray-300);
        }
        
        .btn-secondary:hover {
            background-color: var(--gray-100);
        }
        
        @media (max-width: 640px) {
            .container {
                margin: 1rem auto;
                padding: 0 1rem;
            }
            
            .card-header, .card-body {
                padding: 1.5rem;
            }
            
            .detail-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }
            
            .actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-header\">
                <div class=\"header-title\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <rect x=\"1\" y=\"3\" width=\"15\" height=\"13\"></rect>
                        <polygon points=\"16 8 20 8 23 11 23 16 16 16 16 8\"></polygon>
                        <circle cx=\"5.5\" cy=\"18.5\" r=\"2.5\"></circle>
                        <circle cx=\"18.5\" cy=\"18.5\" r=\"2.5\"></circle>
                    </svg>
                    <h1>{{ vehicle.brand }} {{ vehicle.model }}</h1>
                </div>
                <div class=\"status-group\">
                    <span class=\"status-badge status-{{ vehicle.isAvailable ? 'available' : 'unavailable' }}\">
                        {{ vehicle.isAvailable ? 'Available' : 'Not Available' }}
                    </span>
                    <span class=\"status-badge status-{{ vehicle.isVerified ? 'verified' : 'unverified' }}\">
                        {{ vehicle.isVerified ? 'Verified' : 'Not Verified' }}
                    </span>
                </div>
            </div>
            
            <div class=\"card-body\">
                {% if vehicle.image %}
                <div class=\"vehicle-image-container\">
                    <img src=\"{{ vehicle.image }}\" alt=\"{{ vehicle.brand }} {{ vehicle.model }}\" class=\"vehicle-image\">
                </div>
                {% endif %}
                
                <h2 class=\"section-title\">Vehicle Information</h2>
                <div class=\"detail-grid\">
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Type</span>
                        <span class=\"detail-value\">{{ vehicle.type }}</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Brand</span>
                        <span class=\"detail-value\">{{ vehicle.brand }}</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Model</span>
                        <span class=\"detail-value\">{{ vehicle.model }}</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">License Plate</span>
                        <span class=\"detail-value\">{{ vehicle.licensePlate }}</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Color</span>
                        <span class=\"detail-value\">{{ vehicle.color }}</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Year</span>
                        <span class=\"detail-value\">{{ vehicle.year }}</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Seats</span>
                        <span class=\"detail-value\">{{ vehicle.seats }}</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Air Conditioning</span>
                        <span class=\"detail-value\">{{ vehicle.airConditioning ? 'Yes' : 'No' }}</span>
                    </div>
                </div>
                
                <h2 class=\"section-title\">Maintenance History</h2>
                <div class=\"maintenance-list\">
                    {% for maintenance in maintenances %}
                        <div class=\"maintenance-item\">
                            <div>
                                <strong>{{ maintenance.description }}</strong>
                                <div class=\"maintenance-date\">{{ maintenance.maintenanceDate|date('F j, Y') }}</div>
                            </div>
                            <span class=\"detail-value\">
                                {% if maintenance.cost %}
                                    \${{ maintenance.cost|number_format(2) }}
                                {% endif %}
                            </span>
                        </div>
                    {% else %}
                        <div class=\"detail-item\">
                            <span class=\"detail-value\">No maintenance records found.</span>
                        </div>
                    {% endfor %}
                </div>
                
                <h2 class=\"section-title\">Assignment</h2>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Driver</span>
                    <span class=\"detail-value\">
                        {% if vehicle.driver %}
                            {{ vehicle.driver.name }} (ID: {{ vehicle.driver.id }})
                        {% else %}
                            No driver assigned
                        {% endif %}
                    </span>
                </div>
                
                <div class=\"actions\">
                    <a href=\"{{ path('vehicle_edit', {'id': vehicle.id}) }}\" class=\"btn btn-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                            <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                        </svg>
                        Edit Vehicle
                    </a>
                    <a href=\"{{ path('vehicle_index') }}\" class=\"btn btn-secondary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line>
                            <polyline points=\"12 19 5 12 12 5\"></polyline>
                        </svg>
                        Back to list
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
{% endblock %}", "vehicle/show.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\vehicle\\show.html.twig");
    }
}
