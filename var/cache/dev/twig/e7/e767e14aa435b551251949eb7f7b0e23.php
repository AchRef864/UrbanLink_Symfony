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
class __TwigTemplate_bde8a20b6d2afa6418b57bdb441cb9e7 extends Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 1, $this->source); })()), "vehicle/show.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/show.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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
        /* Add these to your existing button styles */
        .btn-success {
            background-color: #38A169;
            color: white;
        }

        .btn-success:hover {
            background-color: #2F855A;
            box-shadow: 0 4px 12px rgba(56, 161, 105, 0.25);
        }

        .btn-danger {
            background-color: #E53E3E;
            color: white;
        }

        .btn-danger:hover {
            background-color: #C53030;
            box-shadow: 0 4px 12px rgba(229, 62, 62, 0.25);
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1050;
            overflow-y: auto;
        }

        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto;
        }

        .modal-content {
            position: relative;
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .modal-header {
            padding: 1rem;
            border-bottom: 1px solid var(--gray-200);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-body {
            padding: 1rem;
        }

        .modal-footer {
            padding: 1rem;
            border-top: 1px solid var(--gray-200);
            display: flex;
            justify-content: flex-end;
            gap: 0.5rem;
        }

        .btn-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            opacity: 0.5;
        }

        .btn-close:hover {
            opacity: 1;
        }

        .driver-margin {
            margin-top: 150px; /* adjust as needed */
        }
    </style>
</head>
<body>
    <div class=\"container ";
        // line 342
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "user", [], "any", false, false, false, 342) && CoreExtension::inFilter("ROLE_DRIVER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "user", [], "any", false, false, false, 342), "roles", [], "any", false, false, false, 342)))) ? ("driver-margin") : (""));
        yield "\">
        <div class=\"card\">
            <div class=\"card-header\">
                <div class=\"header-title\">
                    ";
        // line 347
        yield "                    ";
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 347, $this->source); })()), "type", [], "any", false, false, false, 347)) == "car")) {
            // line 348
            yield "                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M14 16H9m10 0h3v-3.15a1 1 0 0 0-.84-.99L16 11l-2.7-3.6a1 1 0 0 0-.8-.4H5.24a2 2 0 0 0-1.8 1.1l-.8 1.63A6 6 0 0 0 2 12.42V16h2\"></path>
                            <circle cx=\"6.5\" cy=\"16.5\" r=\"2.5\"></circle>
                            <circle cx=\"16.5\" cy=\"16.5\" r=\"2.5\"></circle>
                        </svg>
                    ";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 353
(isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 353, $this->source); })()), "type", [], "any", false, false, false, 353)) == "bus")) {
            // line 354
            yield "                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M19 17h2v-5a8 8 0 0 0-16 0v5h2\"></path>
                            <rect x=\"4\" y=\"17\" width=\"16\" height=\"4\" rx=\"1\"></rect>
                            <circle cx=\"6.5\" cy=\"21.5\" r=\"1.5\"></circle>
                            <circle cx=\"17.5\" cy=\"21.5\" r=\"1.5\"></circle>
                            <path d=\"M8 17v-4h8v4\"></path>
                            <path d=\"M12 4v9\"></path>
                        </svg>
                    ";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 362
(isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 362, $this->source); })()), "type", [], "any", false, false, false, 362)) == "motorcycle")) {
            // line 363
            yield "                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <circle cx=\"5.5\" cy=\"17.5\" r=\"3.5\"></circle>
                            <circle cx=\"18.5\" cy=\"17.5\" r=\"3.5\"></circle>
                            <path d=\"M15 6h4l3 4.5\"></path>
                            <path d=\"M15 6L8 6\"></path>
                            <path d=\"M15 6L12 12.5H7\"></path>
                            <path d=\"M3.5 12H7\"></path>
                            <path d=\"M15 12.5L18.5 17.5\"></path>
                            <path d=\"M3.5 12L5.5 17.5\"></path>
                        </svg>
                    ";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 373
(isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 373, $this->source); })()), "type", [], "any", false, false, false, 373)) == "minibus")) {
            // line 374
            yield "                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M4 10V7a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v3\"></path>
                            <path d=\"M2 19h20\"></path>
                            <rect x=\"3\" y=\"10\" width=\"18\" height=\"9\" rx=\"2\"></rect>
                            <path d=\"M5 15h14\"></path>
                            <circle cx=\"7.5\" cy=\"19.5\" r=\"1.5\"></circle>
                            <circle cx=\"16.5\" cy=\"19.5\" r=\"1.5\"></circle>
                        </svg>
                    ";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 382
(isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 382, $this->source); })()), "type", [], "any", false, false, false, 382)) == "van")) {
            // line 383
            yield "                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <rect x=\"1\" y=\"3\" width=\"15\" height=\"13\"></rect>
                            <polygon points=\"16 8 20 8 23 11 23 16 16 16 16 8\"></polygon>
                            <circle cx=\"5.5\" cy=\"18.5\" r=\"2.5\"></circle>
                            <circle cx=\"18.5\" cy=\"18.5\" r=\"2.5\"></circle>
                        </svg>
                    ";
        } else {
            // line 390
            yield "                        ";
            // line 391
            yield "                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M14 16H9m10 0h3v-3.15a1 1 0 0 0-.84-.99L16 11l-2.7-3.6a1 1 0 0 0-.8-.4H5.24a2 2 0 0 0-1.8 1.1l-.8 1.63A6 6 0 0 0 2 12.42V16h2\"></path>
                            <circle cx=\"6.5\" cy=\"16.5\" r=\"2.5\"></circle>
                            <circle cx=\"16.5\" cy=\"16.5\" r=\"2.5\"></circle>
                        </svg>
                    ";
        }
        // line 397
        yield "                    <h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 397, $this->source); })()), "brand", [], "any", false, false, false, 397), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 397, $this->source); })()), "model", [], "any", false, false, false, 397), "html", null, true);
        yield "</h1>
                </div>
                <div class=\"status-group\">
                    <span class=\"status-badge status-";
        // line 400
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 400, $this->source); })()), "isAvailable", [], "any", false, false, false, 400)) ? ("available") : ("unavailable"));
        yield "\">
                        ";
        // line 401
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 401, $this->source); })()), "isAvailable", [], "any", false, false, false, 401)) ? ("Available") : ("Not Available"));
        yield "
                    </span>
                    <span class=\"status-badge status-";
        // line 403
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 403, $this->source); })()), "isVerified", [], "any", false, false, false, 403)) ? ("verified") : ("unverified"));
        yield "\">
                        ";
        // line 404
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 404, $this->source); })()), "isVerified", [], "any", false, false, false, 404)) ? ("Verified") : ("Not Verified"));
        yield "
                    </span>
                </div>
            </div>
            
            <div class=\"card-body\">
                ";
        // line 410
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 410, $this->source); })()), "image", [], "any", false, false, false, 410)) {
            // line 411
            yield "                <div class=\"vehicle-image-container\">
                    <img src=\"";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 412, $this->source); })()), "image", [], "any", false, false, false, 412), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 412, $this->source); })()), "brand", [], "any", false, false, false, 412), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 412, $this->source); })()), "model", [], "any", false, false, false, 412), "html", null, true);
            yield "\" class=\"vehicle-image\">
                </div>
                ";
        }
        // line 415
        yield "                
                <h2 class=\"section-title\">Vehicle Information</h2>
                <div class=\"detail-grid\">
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Type</span>
                        <span class=\"detail-value\">";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 420, $this->source); })()), "type", [], "any", false, false, false, 420), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Brand</span>
                        <span class=\"detail-value\">";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 425, $this->source); })()), "brand", [], "any", false, false, false, 425), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Model</span>
                        <span class=\"detail-value\">";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 430, $this->source); })()), "model", [], "any", false, false, false, 430), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">License Plate</span>
                        <span class=\"detail-value\">";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 435, $this->source); })()), "licensePlate", [], "any", false, false, false, 435), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Color</span>
                        <span class=\"detail-value\">";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 440, $this->source); })()), "color", [], "any", false, false, false, 440), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Year</span>
                        <span class=\"detail-value\">";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 445, $this->source); })()), "year", [], "any", false, false, false, 445), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Seats</span>
                        <span class=\"detail-value\">";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 450, $this->source); })()), "seats", [], "any", false, false, false, 450), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Air Conditioning</span>
                        <span class=\"detail-value\">";
        // line 455
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 455, $this->source); })()), "airConditioning", [], "any", false, false, false, 455)) ? ("Yes") : ("No"));
        yield "</span>
                    </div>
                </div>
                
                <h2 class=\"section-title\">Maintenance History</h2>
                <div class=\"maintenance-list\">
                    ";
        // line 461
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 461, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["maintenance"]) {
            // line 462
            yield "                        <div class=\"maintenance-item\">
                            <div>
                                <strong>";
            // line 464
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "description", [], "any", false, false, false, 464), "html", null, true);
            yield "</strong>
                                <div class=\"maintenance-date\">";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "maintenanceDate", [], "any", false, false, false, 465), "F j, Y"), "html", null, true);
            yield "</div>
                            </div>
                            <span class=\"detail-value\">
                                ";
            // line 468
            if (CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "cost", [], "any", false, false, false, 468)) {
                // line 469
                yield "                                    \$";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "cost", [], "any", false, false, false, 469), 2), "html", null, true);
                yield "
                                ";
            }
            // line 471
            yield "                            </span>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 473
        if (!$context['_iterated']) {
            // line 474
            yield "                        <div class=\"detail-item\">
                            <span class=\"detail-value\">No maintenance records found.</span>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['maintenance'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 478
        yield "                </div>
                ";
        // line 479
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 480
            yield "                    <h2 class=\"section-title\">Assignment</h2>
                    <div class=\"detail-item\">
                        <span class=\"detail-label\">Driver</span>
                        <span class=\"detail-value\">
                            ";
            // line 484
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 484, $this->source); })()), "driver", [], "any", false, false, false, 484)) {
                // line 485
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 485, $this->source); })()), "driver", [], "any", false, false, false, 485), "name", [], "any", false, false, false, 485), "html", null, true);
                yield " (ID: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 485, $this->source); })()), "driver", [], "any", false, false, false, 485), "id", [], "any", false, false, false, 485), "html", null, true);
                yield ")
                            ";
            } else {
                // line 487
                yield "                                No driver assigned
                            ";
            }
            // line 489
            yield "                        </span> 
                    </div>
                ";
        }
        // line 492
        yield "                <div class=\"actions\">
                    <a href=\"";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 493, $this->source); })()), "id", [], "any", false, false, false, 493)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                            <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                        </svg>
                        Edit Vehicle
                    </a>
                    ";
        // line 500
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DRIVER")) {
            // line 501
            yield "                        ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 501, $this->source); })()), "isVerified", [], "any", false, false, false, 501)) {
                // line 502
                yield "                        <!-- Verify Button -->
                        <a href=\"";
                // line 503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_verify_page", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 503, $this->source); })()), "id", [], "any", false, false, false, 503)]), "html", null, true);
                yield "\" class=\"btn btn-success\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                            </svg>
                            Verify Plate
                        </a>
                        ";
            }
            // line 511
            yield "
                        <!-- Delete Button (with confirmation modal) -->
                        <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <polyline points=\"3 6 5 6 21 6\"></polyline>
                                <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                <line x1=\"10\" y1=\"11\" x2=\"10\" y2=\"17\"></line>
                                <line x1=\"14\" y1=\"11\" x2=\"14\" y2=\"17\"></line>
                            </svg>
                            Delete
                        </button>
                    ";
        }
        // line 523
        yield "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 524
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_index");
            yield "\" class=\"btn btn-secondary\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line>
                                <polyline points=\"12 19 5 12 12 5\"></polyline>
                            </svg>
                            Back to list
                        </a>
                    ";
        } else {
            // line 532
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_vehicle");
            yield "\" class=\"btn btn-secondary\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line>
                                <polyline points=\"12 19 5 12 12 5\"></polyline>
                            </svg>
                            Back to list
                        </a>
                    ";
        }
        // line 540
        yield "                </div>
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
        return array (  778 => 540,  766 => 532,  754 => 524,  751 => 523,  737 => 511,  726 => 503,  723 => 502,  720 => 501,  718 => 500,  708 => 493,  705 => 492,  700 => 489,  696 => 487,  688 => 485,  686 => 484,  680 => 480,  678 => 479,  675 => 478,  666 => 474,  664 => 473,  658 => 471,  652 => 469,  650 => 468,  644 => 465,  640 => 464,  636 => 462,  631 => 461,  622 => 455,  614 => 450,  606 => 445,  598 => 440,  590 => 435,  582 => 430,  574 => 425,  566 => 420,  559 => 415,  549 => 412,  546 => 411,  544 => 410,  535 => 404,  531 => 403,  526 => 401,  522 => 400,  513 => 397,  505 => 391,  503 => 390,  494 => 383,  492 => 382,  482 => 374,  480 => 373,  468 => 363,  466 => 362,  456 => 354,  454 => 353,  447 => 348,  444 => 347,  437 => 342,  99 => 6,  86 => 5,  63 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends base_template %}

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
        /* Add these to your existing button styles */
        .btn-success {
            background-color: #38A169;
            color: white;
        }

        .btn-success:hover {
            background-color: #2F855A;
            box-shadow: 0 4px 12px rgba(56, 161, 105, 0.25);
        }

        .btn-danger {
            background-color: #E53E3E;
            color: white;
        }

        .btn-danger:hover {
            background-color: #C53030;
            box-shadow: 0 4px 12px rgba(229, 62, 62, 0.25);
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1050;
            overflow-y: auto;
        }

        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto;
        }

        .modal-content {
            position: relative;
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .modal-header {
            padding: 1rem;
            border-bottom: 1px solid var(--gray-200);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-body {
            padding: 1rem;
        }

        .modal-footer {
            padding: 1rem;
            border-top: 1px solid var(--gray-200);
            display: flex;
            justify-content: flex-end;
            gap: 0.5rem;
        }

        .btn-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            opacity: 0.5;
        }

        .btn-close:hover {
            opacity: 1;
        }

        .driver-margin {
            margin-top: 150px; /* adjust as needed */
        }
    </style>
</head>
<body>
    <div class=\"container {{ app.user and 'ROLE_DRIVER' in app.user.roles ? 'driver-margin' : '' }}\">
        <div class=\"card\">
            <div class=\"card-header\">
                <div class=\"header-title\">
                    {# Dynamic vehicle icon based on vehicle type #}
                    {% if vehicle.type|lower == 'car' %}
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M14 16H9m10 0h3v-3.15a1 1 0 0 0-.84-.99L16 11l-2.7-3.6a1 1 0 0 0-.8-.4H5.24a2 2 0 0 0-1.8 1.1l-.8 1.63A6 6 0 0 0 2 12.42V16h2\"></path>
                            <circle cx=\"6.5\" cy=\"16.5\" r=\"2.5\"></circle>
                            <circle cx=\"16.5\" cy=\"16.5\" r=\"2.5\"></circle>
                        </svg>
                    {% elseif vehicle.type|lower == 'bus' %}
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M19 17h2v-5a8 8 0 0 0-16 0v5h2\"></path>
                            <rect x=\"4\" y=\"17\" width=\"16\" height=\"4\" rx=\"1\"></rect>
                            <circle cx=\"6.5\" cy=\"21.5\" r=\"1.5\"></circle>
                            <circle cx=\"17.5\" cy=\"21.5\" r=\"1.5\"></circle>
                            <path d=\"M8 17v-4h8v4\"></path>
                            <path d=\"M12 4v9\"></path>
                        </svg>
                    {% elseif vehicle.type|lower == 'motorcycle' %}
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <circle cx=\"5.5\" cy=\"17.5\" r=\"3.5\"></circle>
                            <circle cx=\"18.5\" cy=\"17.5\" r=\"3.5\"></circle>
                            <path d=\"M15 6h4l3 4.5\"></path>
                            <path d=\"M15 6L8 6\"></path>
                            <path d=\"M15 6L12 12.5H7\"></path>
                            <path d=\"M3.5 12H7\"></path>
                            <path d=\"M15 12.5L18.5 17.5\"></path>
                            <path d=\"M3.5 12L5.5 17.5\"></path>
                        </svg>
                    {% elseif vehicle.type|lower == 'minibus' %}
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M4 10V7a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v3\"></path>
                            <path d=\"M2 19h20\"></path>
                            <rect x=\"3\" y=\"10\" width=\"18\" height=\"9\" rx=\"2\"></rect>
                            <path d=\"M5 15h14\"></path>
                            <circle cx=\"7.5\" cy=\"19.5\" r=\"1.5\"></circle>
                            <circle cx=\"16.5\" cy=\"19.5\" r=\"1.5\"></circle>
                        </svg>
                    {% elseif vehicle.type|lower == 'van' %}
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <rect x=\"1\" y=\"3\" width=\"15\" height=\"13\"></rect>
                            <polygon points=\"16 8 20 8 23 11 23 16 16 16 16 8\"></polygon>
                            <circle cx=\"5.5\" cy=\"18.5\" r=\"2.5\"></circle>
                            <circle cx=\"18.5\" cy=\"18.5\" r=\"2.5\"></circle>
                        </svg>
                    {% else %}
                        {# Default icon if vehicle type is not recognized #}
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M14 16H9m10 0h3v-3.15a1 1 0 0 0-.84-.99L16 11l-2.7-3.6a1 1 0 0 0-.8-.4H5.24a2 2 0 0 0-1.8 1.1l-.8 1.63A6 6 0 0 0 2 12.42V16h2\"></path>
                            <circle cx=\"6.5\" cy=\"16.5\" r=\"2.5\"></circle>
                            <circle cx=\"16.5\" cy=\"16.5\" r=\"2.5\"></circle>
                        </svg>
                    {% endif %}
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
                {% if is_granted('ROLE_ADMIN') %}
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
                {% endif %}
                <div class=\"actions\">
                    <a href=\"{{ path('vehicle_edit', {'id': vehicle.id}) }}\" class=\"btn btn-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                            <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                        </svg>
                        Edit Vehicle
                    </a>
                    {% if is_granted('ROLE_DRIVER') %}
                        {% if not vehicle.isVerified %}
                        <!-- Verify Button -->
                        <a href=\"{{ path('vehicle_verify_page', {'id': vehicle.id}) }}\" class=\"btn btn-success\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                            </svg>
                            Verify Plate
                        </a>
                        {% endif %}

                        <!-- Delete Button (with confirmation modal) -->
                        <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <polyline points=\"3 6 5 6 21 6\"></polyline>
                                <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                <line x1=\"10\" y1=\"11\" x2=\"10\" y2=\"17\"></line>
                                <line x1=\"14\" y1=\"11\" x2=\"14\" y2=\"17\"></line>
                            </svg>
                            Delete
                        </button>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('vehicle_index') }}\" class=\"btn btn-secondary\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line>
                                <polyline points=\"12 19 5 12 12 5\"></polyline>
                            </svg>
                            Back to list
                        </a>
                    {% else %}
                        <a href=\"{{ path('my_vehicle') }}\" class=\"btn btn-secondary\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line>
                                <polyline points=\"12 19 5 12 12 5\"></polyline>
                            </svg>
                            Back to list
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</body>
{% endblock %}", "vehicle/show.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\vehicle\\show.html.twig");
    }
}
