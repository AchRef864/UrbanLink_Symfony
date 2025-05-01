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

/* vehicle/verify.html.twig */
class __TwigTemplate_44f5a0f1fad4811cfb7f407d71e44072 extends Template
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
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/verify.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/verify.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "vehicle/verify.html.twig", 1);
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

        yield "Verify Vehicle - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 3, $this->source); })()), "brand", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 3, $this->source); })()), "model", [], "any", false, false, false, 3), "html", null, true);
        
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
            background-color: white;
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
            margin: 0;
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
        
        .license-details {
            background-color: var(--primary-light);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border-left: 4px solid var(--primary);
        }
        
        .license-plate {
            font-family: 'Courier New', monospace;
            letter-spacing: 1px;
            font-weight: 700;
            font-size: 1.25rem;
            display: inline-block;
            background: white;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            border: 1px solid var(--gray-300);
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        
        .alert {
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .alert-danger {
            background-color: #FEF2F2;
            border-left: 4px solid var(--danger);
            color: #B91C1C;
        }
        
        .alert-success {
            background-color: #F0FFF4;
            border-left: 4px solid var(--success);
            color: #276749;
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
        
        .btn-success {
            background-color: #38A169;
            color: white;
        }

        .btn-success:hover {
            background-color: #2F855A;
            box-shadow: 0 4px 12px rgba(56, 161, 105, 0.25);
        }
        
        .form-container {
            margin-top: 1.5rem;
        }
        
        .form-label {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--gray-700);
            margin-bottom: 0.5rem;
            display: block;
        }
        
        .form-text {
            color: var(--gray-500);
            font-size: 0.75rem;
            margin-top: 0.5rem;
        }
        
        .actions-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
        }
        
        .file-upload-area {
            border: 2px dashed var(--gray-300);
            border-radius: 12px;
            padding: 2.5rem 1.5rem;
            text-align: center;
            transition: all 0.2s ease;
            cursor: pointer;
            margin-bottom: 1.5rem;
            position: relative;
            background-color: var(--gray-100);
        }
        
        .file-upload-area:hover, .file-upload-area.dragover {
            border-color: var(--primary);
            background-color: var(--primary-light);
        }
        
        .file-upload-area input[type=\"file\"] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }
        
        .upload-icon {
            display: block;
            margin: 0 auto 1rem;
            width: 64px;
            height: 64px;
            color: var(--primary);
        }
        
        .upload-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--gray-700);
            margin-bottom: 0.5rem;
        }
        
        .upload-subtitle {
            font-size: 0.875rem;
            color: var(--gray-500);
        }
        
        .file-preview {
            display: none;
            margin-top: 1.5rem;
            background-color: var(--gray-100);
            border-radius: 8px;
            padding: 1rem;
        }
        
        .file-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .file-icon {
            color: var(--primary);
            background-color: var(--primary-light);
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .file-details {
            flex: 1;
        }
        
        .file-name {
            font-weight: 500;
            color: var(--dark);
            margin-bottom: 0.25rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 300px;
        }
        
        .file-meta {
            font-size: 0.75rem;
            color: var(--gray-500);
        }
        
        .file-actions {
            display: flex;
            align-items: center;
        }
        
        .remove-file {
            background: none;
            border: none;
            color: var(--gray-500);
            cursor: pointer;
            transition: color 0.2s;
        }
        
        .remove-file:hover {
            color: var(--danger);
        }
        
        .vehicle-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            background-color: white;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            border: 1px solid var(--gray-200);
        }
        
        .vehicle-icon {
            color: var(--primary);
            background-color: var(--primary-light);
            width: 48px;
            height: 48px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .vehicle-details h2 {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--dark);
            margin: 0;
            margin-bottom: 0.25rem;
        }
        
        .vehicle-details p {
            margin: 0;
            font-size: 0.875rem;
            color: var(--gray-500);
        }
        
        @media (max-width: 640px) {
            .container {
                margin: 1rem auto;
                padding: 0 1rem;
            }
            
            .card-header, .card-body {
                padding: 1.5rem;
            }
            
            .license-details .row {
                flex-direction: column;
            }
            
            .actions-container {
                flex-direction: column;
                gap: 1rem;
            }
            
            .actions-container .btn {
                width: 100%;
            }
        }
    </style>

    <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-header\">
                <div class=\"header-title\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z\"></path>
                        <polyline points=\"14 2 14 8 20 8\"></polyline>
                        <rect x=\"8\" y=\"12\" width=\"8\" height=\"6\"></rect>
                    </svg>
                    <h1>Verify License Plate</h1>
                </div>
            </div>
            
            <div class=\"card-body\">
                <!-- Vehicle Information Card -->
                <div class=\"vehicle-info\">
                    <div class=\"vehicle-icon\">
                        ";
        // line 414
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 414, $this->source); })()), "type", [], "any", false, false, false, 414)) == "car")) {
            // line 415
            yield "                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M14 16H9m10 0h3v-3.15a1 1 0 0 0-.84-.99L16 11l-2.7-3.6a1 1 0 0 0-.8-.4H5.24a2 2 0 0 0-1.8 1.1l-.8 1.63A6 6 0 0 0 2 12.42V16h2\"></path>
                                <circle cx=\"6.5\" cy=\"16.5\" r=\"2.5\"></circle>
                                <circle cx=\"16.5\" cy=\"16.5\" r=\"2.5\"></circle>
                            </svg>
                        ";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 420
(isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 420, $this->source); })()), "type", [], "any", false, false, false, 420)) == "bus")) {
            // line 421
            yield "                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M19 17h2v-5a8 8 0 0 0-16 0v5h2\"></path>
                                <rect x=\"4\" y=\"17\" width=\"16\" height=\"4\" rx=\"1\"></rect>
                                <circle cx=\"6.5\" cy=\"21.5\" r=\"1.5\"></circle>
                                <circle cx=\"17.5\" cy=\"21.5\" r=\"1.5\"></circle>
                                <path d=\"M8 17v-4h8v4\"></path>
                                <path d=\"M12 4v9\"></path>
                            </svg>
                        ";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 429
(isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 429, $this->source); })()), "type", [], "any", false, false, false, 429)) == "motorcycle")) {
            // line 430
            yield "                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
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
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 440
(isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 440, $this->source); })()), "type", [], "any", false, false, false, 440)) == "minibus")) {
            // line 441
            yield "                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M4 10V7a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v3\"></path>
                                <path d=\"M2 19h20\"></path>
                                <rect x=\"3\" y=\"10\" width=\"18\" height=\"9\" rx=\"2\"></rect>
                                <path d=\"M5 15h14\"></path>
                                <circle cx=\"7.5\" cy=\"19.5\" r=\"1.5\"></circle>
                                <circle cx=\"16.5\" cy=\"19.5\" r=\"1.5\"></circle>
                            </svg>
                        ";
        } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 449
(isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 449, $this->source); })()), "type", [], "any", false, false, false, 449)) == "van")) {
            // line 450
            yield "                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <rect x=\"1\" y=\"3\" width=\"15\" height=\"13\"></rect>
                                <polygon points=\"16 8 20 8 23 11 23 16 16 16 16 8\"></polygon>
                                <circle cx=\"5.5\" cy=\"18.5\" r=\"2.5\"></circle>
                                <circle cx=\"18.5\" cy=\"18.5\" r=\"2.5\"></circle>
                            </svg>
                        ";
        } else {
            // line 457
            yield "                            ";
            // line 458
            yield "                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M14 16H9m10 0h3v-3.15a1 1 0 0 0-.84-.99L16 11l-2.7-3.6a1 1 0 0 0-.8-.4H5.24a2 2 0 0 0-1.8 1.1l-.8 1.63A6 6 0 0 0 2 12.42V16h2\"></path>
                                <circle cx=\"6.5\" cy=\"16.5\" r=\"2.5\"></circle>
                                <circle cx=\"16.5\" cy=\"16.5\" r=\"2.5\"></circle>
                            </svg>
                        ";
        }
        // line 464
        yield "                    </div>
                    <div class=\"vehicle-details\">
                        <h2>";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 466, $this->source); })()), "brand", [], "any", false, false, false, 466), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 466, $this->source); })()), "model", [], "any", false, false, false, 466), "html", null, true);
        yield "</h2>
                        <p>Please verify the license plate information below</p>
                    </div>
                </div>
                
                <!-- License Plate Information -->
                <h2 class=\"section-title\">License Plate Information</h2>
                <div class=\"license-details\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3 mb-md-0\">
                            <span class=\"detail-label\">License Plate</span>
                            <div class=\"license-plate mt-2\">";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 477, $this->source); })()), "licensePlate", [], "any", false, false, false, 477), "html", null, true);
        yield "</div>
                        </div>
                        <!--<div class=\"col-md-6\">
                            <span class=\"detail-label\">Normalized Format</span>
                            <div class=\"license-plate mt-2\">";
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 481, $this->source); })()), "licensePlate", [], "any", false, false, false, 481)), [" " => "", "-" => "", "_" => "", "." => "", "/" => ""]), "html", null, true);
        yield "</div>
                        </div>-->
                    </div>
                </div>
                
                <!-- Flash Messages -->
                ";
        // line 487
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 487, $this->source); })()), "flashes", ["error"], "method", false, false, false, 487));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 488
            yield "                    <div class=\"alert alert-danger\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                            <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                            <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                        </svg>
                        <span>";
            // line 494
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 497
        yield "                
                ";
        // line 498
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 498, $this->source); })()), "flashes", ["success"], "method", false, false, false, 498));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 499
            yield "                    <div class=\"alert alert-success\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                            <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                        </svg>
                        <span>";
            // line 504
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 507
        yield "                
                <h2 class=\"section-title\">Upload Verification Image</h2>
                
                <!-- File Upload Form -->
                <form method=\"post\" action=\"";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_verify", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 511, $this->source); })()), "id", [], "any", false, false, false, 511)]), "html", null, true);
        yield "\" enctype=\"multipart/form-data\" id=\"verificationForm\">
                    <div class=\"form-container\">
                        <label for=\"plateImage\" class=\"form-label\">Upload a clear image of the vehicle's license plate</label>
                        
                        <div class=\"file-upload-area\" id=\"dropArea\">
                            <input type=\"file\" class=\"form-control\" id=\"plateImage\" name=\"plate_image\" accept=\"image/*\" required>
                            <svg class=\"upload-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\"></path>
                                <polyline points=\"17 8 12 3 7 8\"></polyline>
                                <line x1=\"12\" y1=\"3\" x2=\"12\" y2=\"15\"></line>
                            </svg>
                            <p class=\"upload-title\">Drag and drop or click to browse</p>
                            <p class=\"upload-subtitle\">Supports JPG, PNG, or GIF up to 10MB</p>
                        </div>
                        
                        <!-- File Preview Area -->
                        <div class=\"file-preview\" id=\"filePreview\">
                            <div class=\"file-info\">
                                <div class=\"file-icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                        <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                                        <circle cx=\"8.5\" cy=\"8.5\" r=\"1.5\"></circle>
                                        <polyline points=\"21 15 16 10 5 21\"></polyline>
                                    </svg>
                                </div>
                                <div class=\"file-details\">
                                    <div class=\"file-name\" id=\"fileName\">image.jpg</div>
                                    <div class=\"file-meta\" id=\"fileSize\">0 KB</div>
                                </div>
                                <div class=\"file-actions\">
                                    <button type=\"button\" class=\"remove-file\" id=\"removeFile\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
                                            <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <p class=\"form-text\">Upload a clear image of the vehicle's license plate (US format)</p>
                    </div>
                    
                    <div class=\"actions-container\">
                        <a href=\"";
        // line 555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 555, $this->source); })()), "id", [], "any", false, false, false, 555)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line>
                                <polyline points=\"12 19 5 12 12 5\"></polyline>
                            </svg>
                            Back to Vehicle
                        </a>
                        <button type=\"submit\" class=\"btn btn-success\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                            </svg>
                            Verify Plate
                        </button>
                    </div>
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("verify" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 570, $this->source); })()), "id", [], "any", false, false, false, 570))), "html", null, true);
        yield "\">
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropArea = document.getElementById('dropArea');
            const fileInput = document.getElementById('plateImage');
            const filePreview = document.getElementById('filePreview');
            const fileName = document.getElementById('fileName');
            const fileSize = document.getElementById('fileSize');
            const removeFileBtn = document.getElementById('removeFile');
            
            // Prevent default drag behaviors
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, preventDefaults, false);
                document.body.addEventListener(eventName, preventDefaults, false);
            });
            
            // Highlight drop area when item is dragged over it
            ['dragenter', 'dragover'].forEach(eventName => {
                dropArea.addEventListener(eventName, highlight, false);
            });
            
            ['dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, unhighlight, false);
            });
            
            // Handle dropped files
            dropArea.addEventListener('drop', handleDrop, false);
            
            // Handle selected files through click
            fileInput.addEventListener('change', handleFiles, false);
            
            // Handle file removal
            removeFileBtn.addEventListener('click', removeFile, false);
            
            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }
            
            function highlight() {
                dropArea.classList.add('dragover');
            }
            
            function unhighlight() {
                dropArea.classList.remove('dragover');
            }
            
            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                
                if (files.length) {
                    fileInput.files = files;
                    handleFiles();
                }
            }
            
            function formatBytes(bytes, decimals = 2) {
                if (bytes === 0) return '0 Bytes';
                
                const k = 1024;
                const dm = decimals < 0 ? 0 : decimals;
                const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                
                return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
            }
            
            function handleFiles() {
                if (fileInput.files.length) {
                    const file = fileInput.files[0];
                    fileName.textContent = file.name;
                    fileSize.textContent = formatBytes(file.size);
                    filePreview.style.display = 'block';
                    dropArea.style.display = 'none';
                }
            }
            
            function removeFile() {
                fileInput.value = '';
                filePreview.style.display = 'none';
                dropArea.style.display = 'block';
            }
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
        return "vehicle/verify.html.twig";
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
        return array (  732 => 570,  714 => 555,  667 => 511,  661 => 507,  652 => 504,  645 => 499,  641 => 498,  638 => 497,  629 => 494,  621 => 488,  617 => 487,  608 => 481,  601 => 477,  585 => 466,  581 => 464,  573 => 458,  571 => 457,  562 => 450,  560 => 449,  550 => 441,  548 => 440,  536 => 430,  534 => 429,  524 => 421,  522 => 420,  515 => 415,  513 => 414,  103 => 6,  90 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Verify Vehicle - {{ vehicle.brand }} {{ vehicle.model }}{% endblock %}

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
            background-color: white;
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
            margin: 0;
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
        
        .license-details {
            background-color: var(--primary-light);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border-left: 4px solid var(--primary);
        }
        
        .license-plate {
            font-family: 'Courier New', monospace;
            letter-spacing: 1px;
            font-weight: 700;
            font-size: 1.25rem;
            display: inline-block;
            background: white;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            border: 1px solid var(--gray-300);
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        
        .alert {
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .alert-danger {
            background-color: #FEF2F2;
            border-left: 4px solid var(--danger);
            color: #B91C1C;
        }
        
        .alert-success {
            background-color: #F0FFF4;
            border-left: 4px solid var(--success);
            color: #276749;
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
        
        .btn-success {
            background-color: #38A169;
            color: white;
        }

        .btn-success:hover {
            background-color: #2F855A;
            box-shadow: 0 4px 12px rgba(56, 161, 105, 0.25);
        }
        
        .form-container {
            margin-top: 1.5rem;
        }
        
        .form-label {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--gray-700);
            margin-bottom: 0.5rem;
            display: block;
        }
        
        .form-text {
            color: var(--gray-500);
            font-size: 0.75rem;
            margin-top: 0.5rem;
        }
        
        .actions-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
        }
        
        .file-upload-area {
            border: 2px dashed var(--gray-300);
            border-radius: 12px;
            padding: 2.5rem 1.5rem;
            text-align: center;
            transition: all 0.2s ease;
            cursor: pointer;
            margin-bottom: 1.5rem;
            position: relative;
            background-color: var(--gray-100);
        }
        
        .file-upload-area:hover, .file-upload-area.dragover {
            border-color: var(--primary);
            background-color: var(--primary-light);
        }
        
        .file-upload-area input[type=\"file\"] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }
        
        .upload-icon {
            display: block;
            margin: 0 auto 1rem;
            width: 64px;
            height: 64px;
            color: var(--primary);
        }
        
        .upload-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--gray-700);
            margin-bottom: 0.5rem;
        }
        
        .upload-subtitle {
            font-size: 0.875rem;
            color: var(--gray-500);
        }
        
        .file-preview {
            display: none;
            margin-top: 1.5rem;
            background-color: var(--gray-100);
            border-radius: 8px;
            padding: 1rem;
        }
        
        .file-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .file-icon {
            color: var(--primary);
            background-color: var(--primary-light);
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .file-details {
            flex: 1;
        }
        
        .file-name {
            font-weight: 500;
            color: var(--dark);
            margin-bottom: 0.25rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 300px;
        }
        
        .file-meta {
            font-size: 0.75rem;
            color: var(--gray-500);
        }
        
        .file-actions {
            display: flex;
            align-items: center;
        }
        
        .remove-file {
            background: none;
            border: none;
            color: var(--gray-500);
            cursor: pointer;
            transition: color 0.2s;
        }
        
        .remove-file:hover {
            color: var(--danger);
        }
        
        .vehicle-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            background-color: white;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            border: 1px solid var(--gray-200);
        }
        
        .vehicle-icon {
            color: var(--primary);
            background-color: var(--primary-light);
            width: 48px;
            height: 48px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .vehicle-details h2 {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--dark);
            margin: 0;
            margin-bottom: 0.25rem;
        }
        
        .vehicle-details p {
            margin: 0;
            font-size: 0.875rem;
            color: var(--gray-500);
        }
        
        @media (max-width: 640px) {
            .container {
                margin: 1rem auto;
                padding: 0 1rem;
            }
            
            .card-header, .card-body {
                padding: 1.5rem;
            }
            
            .license-details .row {
                flex-direction: column;
            }
            
            .actions-container {
                flex-direction: column;
                gap: 1rem;
            }
            
            .actions-container .btn {
                width: 100%;
            }
        }
    </style>

    <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-header\">
                <div class=\"header-title\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z\"></path>
                        <polyline points=\"14 2 14 8 20 8\"></polyline>
                        <rect x=\"8\" y=\"12\" width=\"8\" height=\"6\"></rect>
                    </svg>
                    <h1>Verify License Plate</h1>
                </div>
            </div>
            
            <div class=\"card-body\">
                <!-- Vehicle Information Card -->
                <div class=\"vehicle-info\">
                    <div class=\"vehicle-icon\">
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
                    </div>
                    <div class=\"vehicle-details\">
                        <h2>{{ vehicle.brand }} {{ vehicle.model }}</h2>
                        <p>Please verify the license plate information below</p>
                    </div>
                </div>
                
                <!-- License Plate Information -->
                <h2 class=\"section-title\">License Plate Information</h2>
                <div class=\"license-details\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3 mb-md-0\">
                            <span class=\"detail-label\">License Plate</span>
                            <div class=\"license-plate mt-2\">{{ vehicle.licensePlate }}</div>
                        </div>
                        <!--<div class=\"col-md-6\">
                            <span class=\"detail-label\">Normalized Format</span>
                            <div class=\"license-plate mt-2\">{{ vehicle.licensePlate|upper|replace({' ': '', '-': '', '_': '', '.': '', '/': ''}) }}</div>
                        </div>-->
                    </div>
                </div>
                
                <!-- Flash Messages -->
                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                            <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                            <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                        </svg>
                        <span>{{ message }}</span>
                    </div>
                {% endfor %}
                
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                            <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                        </svg>
                        <span>{{ message }}</span>
                    </div>
                {% endfor %}
                
                <h2 class=\"section-title\">Upload Verification Image</h2>
                
                <!-- File Upload Form -->
                <form method=\"post\" action=\"{{ path('vehicle_verify', {'id': vehicle.id}) }}\" enctype=\"multipart/form-data\" id=\"verificationForm\">
                    <div class=\"form-container\">
                        <label for=\"plateImage\" class=\"form-label\">Upload a clear image of the vehicle's license plate</label>
                        
                        <div class=\"file-upload-area\" id=\"dropArea\">
                            <input type=\"file\" class=\"form-control\" id=\"plateImage\" name=\"plate_image\" accept=\"image/*\" required>
                            <svg class=\"upload-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\"></path>
                                <polyline points=\"17 8 12 3 7 8\"></polyline>
                                <line x1=\"12\" y1=\"3\" x2=\"12\" y2=\"15\"></line>
                            </svg>
                            <p class=\"upload-title\">Drag and drop or click to browse</p>
                            <p class=\"upload-subtitle\">Supports JPG, PNG, or GIF up to 10MB</p>
                        </div>
                        
                        <!-- File Preview Area -->
                        <div class=\"file-preview\" id=\"filePreview\">
                            <div class=\"file-info\">
                                <div class=\"file-icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                        <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                                        <circle cx=\"8.5\" cy=\"8.5\" r=\"1.5\"></circle>
                                        <polyline points=\"21 15 16 10 5 21\"></polyline>
                                    </svg>
                                </div>
                                <div class=\"file-details\">
                                    <div class=\"file-name\" id=\"fileName\">image.jpg</div>
                                    <div class=\"file-meta\" id=\"fileSize\">0 KB</div>
                                </div>
                                <div class=\"file-actions\">
                                    <button type=\"button\" class=\"remove-file\" id=\"removeFile\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
                                            <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <p class=\"form-text\">Upload a clear image of the vehicle's license plate (US format)</p>
                    </div>
                    
                    <div class=\"actions-container\">
                        <a href=\"{{ path('vehicle_show', {'id': vehicle.id}) }}\" class=\"btn btn-secondary\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line>
                                <polyline points=\"12 19 5 12 12 5\"></polyline>
                            </svg>
                            Back to Vehicle
                        </a>
                        <button type=\"submit\" class=\"btn btn-success\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                            </svg>
                            Verify Plate
                        </button>
                    </div>
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('verify' ~ vehicle.id) }}\">
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropArea = document.getElementById('dropArea');
            const fileInput = document.getElementById('plateImage');
            const filePreview = document.getElementById('filePreview');
            const fileName = document.getElementById('fileName');
            const fileSize = document.getElementById('fileSize');
            const removeFileBtn = document.getElementById('removeFile');
            
            // Prevent default drag behaviors
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, preventDefaults, false);
                document.body.addEventListener(eventName, preventDefaults, false);
            });
            
            // Highlight drop area when item is dragged over it
            ['dragenter', 'dragover'].forEach(eventName => {
                dropArea.addEventListener(eventName, highlight, false);
            });
            
            ['dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, unhighlight, false);
            });
            
            // Handle dropped files
            dropArea.addEventListener('drop', handleDrop, false);
            
            // Handle selected files through click
            fileInput.addEventListener('change', handleFiles, false);
            
            // Handle file removal
            removeFileBtn.addEventListener('click', removeFile, false);
            
            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }
            
            function highlight() {
                dropArea.classList.add('dragover');
            }
            
            function unhighlight() {
                dropArea.classList.remove('dragover');
            }
            
            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                
                if (files.length) {
                    fileInput.files = files;
                    handleFiles();
                }
            }
            
            function formatBytes(bytes, decimals = 2) {
                if (bytes === 0) return '0 Bytes';
                
                const k = 1024;
                const dm = decimals < 0 ? 0 : decimals;
                const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                
                return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
            }
            
            function handleFiles() {
                if (fileInput.files.length) {
                    const file = fileInput.files[0];
                    fileName.textContent = file.name;
                    fileSize.textContent = formatBytes(file.size);
                    filePreview.style.display = 'block';
                    dropArea.style.display = 'none';
                }
            }
            
            function removeFile() {
                fileInput.value = '';
                filePreview.style.display = 'none';
                dropArea.style.display = 'block';
            }
        });
    </script>
{% endblock %}", "vehicle/verify.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\vehicle\\verify.html.twig");
    }
}
