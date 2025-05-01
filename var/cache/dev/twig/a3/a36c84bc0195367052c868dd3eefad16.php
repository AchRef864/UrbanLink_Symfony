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

/* maintenance/new.html.twig */
class __TwigTemplate_b9891063a111f78ef33e3ae790c7a4aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/new.html.twig", 1);
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

        yield "Create Maintenance";
        
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
            --input-shadow: 0 4px 10px rgba(94, 96, 206, 0.07);
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f5f7ff 0%, #e9f0ff 100%);
            color: var(--dark);
            line-height: 1.6;
            min-height: 100vh;
            margin: 0;
            padding: 2rem 0;
        }
        
        .container {
            max-width: 850px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        .page-title {
            text-align: center;
            margin-bottom: 2rem;
            font-weight: 800;
            font-size: 2.5rem;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }
        
        .card {
            background: white;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
        }
        
        .card-header {
            padding: 2rem 2.5rem 1.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            position: relative;
        }
        
        .card-header h1 {
            margin: 0;
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 1rem;
            color: var(--primary);
        }
        
        .card-body {
            padding: 2rem 2.5rem;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .form-group.full-width {
            grid-column: span 2;
        }
        
        .form-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary);
            letter-spacing: 0.5px;
        }
        
        .form-control {
            width: 100%;
            padding: 0.85rem 1rem;
            font-size: 1rem;
            color: var(--dark);
            background-color: #fff;
            border: 2px solid rgba(94, 96, 206, 0.1);
            border-radius: 10px;
            box-shadow: var(--input-shadow);
            transition: all 0.2s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(94, 96, 206, 0.15);
            outline: 0;
        }
        
        /* Input icon styling */
        .input-icon {
            position: absolute;
            top: 2.6rem;
            right: 1rem;
            color: var(--gray);
            pointer-events: none;
            transition: color 0.2s ease;
        }
        
        .form-control:focus + .input-icon {
            color: var(--primary);
        }
        
        select.form-control {
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%236c757d' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 16px;
            padding-right: 3rem;
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        /* Tooltip */
        .tooltip {
            position: relative;
            display: inline-block;
            margin-left: 0.5rem;
        }
        
        .tooltip-icon {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: rgba(94, 96, 206, 0.1);
            color: var(--primary);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: bold;
            cursor: help;
        }
        
        .tooltip-text {
            visibility: hidden;
            width: 200px;
            background-color: var(--dark);
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 0.5rem;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -100px;
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 0.8rem;
            font-weight: normal;
        }
        
        .tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }
        
        /* Button styling */
        .btn-group {
            display: flex;
            gap: 1rem;
            margin-top: 2.5rem;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.85rem 1.75rem;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
            font-size: 1rem;
            flex: 1;
        }
        
        .btn svg {
            margin-right: 0.5rem;
        }
        
        .btn-primary {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(94, 96, 206, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary:hover {
            box-shadow: 0 6px 20px rgba(94, 96, 206, 0.4);
            transform: translateY(-2px);
        }
        
        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.6s;
        }
        
        .btn-primary:hover::after {
            left: 100%;
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 2px solid rgba(94, 96, 206, 0.15);
        }
        
        .btn-secondary:hover {
            background-color: rgba(94, 96, 206, 0.05);
            border-color: rgba(94, 96, 206, 0.3);
        }
        
        /* Form errors */
        .form-error {
            color: var(--danger);
            font-size: 0.8rem;
            margin-top: 0.25rem;
        }
        
        .is-invalid {
            border-color: var(--danger) !important;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .form-group.full-width {
                grid-column: span 1;
            }
            
            .btn-group {
                flex-direction: column;
            }
            
            .card-header, .card-body {
                padding: 1.5rem;
            }
        }
    </style>

    <div class=\"container\">
        <h1 class=\"page-title\">Fleet Management System</h1>
        
        <div class=\"card\">
            <div class=\"card-header\">
                <h1>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                    </svg>
                    Create New Maintenance
                </h1>
            </div>
            
            <div class=\"card-body\">
                ";
        // line 316
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "maintenance-form"]]);
        yield "
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            ";
        // line 319
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "vehicle", [], "any", false, false, false, 319), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Vehicle"]);
        yield "
                            ";
        // line 320
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "vehicle", [], "any", false, false, false, 320), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 322
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "vehicle", [], "any", false, false, false, 322), "vars", [], "any", false, false, false, 322), "errors", [], "any", false, false, false, 322))) ? (" is-invalid") : (""))), "required" => "required"]]);
        // line 325
        yield "
                            <div class=\"input-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <rect x=\"1\" y=\"3\" width=\"15\" height=\"13\"></rect>
                                    <polyline points=\"16 8 20 8 23 11 23 16 20 16 20 18 9 18\"></polyline>
                                    <circle cx=\"5.5\" cy=\"18.5\" r=\"2.5\"></circle>
                                    <circle cx=\"18.5\" cy=\"18.5\" r=\"2.5\"></circle>
                                </svg>
                            </div>
                            ";
        // line 334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "vehicle", [], "any", false, false, false, 334), 'errors');
        yield "
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 338
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 338, $this->source); })()), "maintenanceDate", [], "any", false, false, false, 338), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Maintenance Date"]);
        yield "
                            ";
        // line 339
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "maintenanceDate", [], "any", false, false, false, 339), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 341
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), "maintenanceDate", [], "any", false, false, false, 341), "vars", [], "any", false, false, false, 341), "errors", [], "any", false, false, false, 341))) ? (" is-invalid") : (""))), "required" => "required"]]);
        // line 344
        yield "
                            <div class=\"input-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
                                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
                                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
                                </svg>
                            </div>
                            ";
        // line 353
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "maintenanceDate", [], "any", false, false, false, 353), 'errors');
        yield "
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 357
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "serviceType", [], "any", false, false, false, 357), 'label', ["label_attr" => ["class" => "form-label", "data-tooltip" => "Select the type of service needed for this maintenance"], "label" => "Service Type"]);
        // line 362
        yield "
                            ";
        // line 363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "serviceType", [], "any", false, false, false, 363), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 365
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 365, $this->source); })()), "serviceType", [], "any", false, false, false, 365), "vars", [], "any", false, false, false, 365), "errors", [], "any", false, false, false, 365))) ? (" is-invalid") : (""))), "required" => "required"]]);
        // line 368
        yield "
                            <div class=\"input-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                                </svg>
                            </div>
                            ";
        // line 374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), "serviceType", [], "any", false, false, false, 374), 'errors');
        yield "
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 378
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 378, $this->source); })()), "serviceProvider", [], "any", false, false, false, 378), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Service Provider"]);
        yield "
                            ";
        // line 379
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 379, $this->source); })()), "serviceProvider", [], "any", false, false, false, 379), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 381
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 381, $this->source); })()), "serviceProvider", [], "any", false, false, false, 381), "vars", [], "any", false, false, false, 381), "errors", [], "any", false, false, false, 381))) ? (" is-invalid") : (""))), "required" => "required"]]);
        // line 384
        yield "
                            <div class=\"input-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path>
                                    <circle cx=\"12\" cy=\"7\" r=\"4\"></circle>
                                </svg>
                            </div>
                            ";
        // line 391
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "serviceProvider", [], "any", false, false, false, 391), 'errors');
        yield "
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 395
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "cost", [], "any", false, false, false, 395), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Cost (€)"]);
        yield "
                            ";
        // line 396
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "cost", [], "any", false, false, false, 396), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 398
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "cost", [], "any", false, false, false, 398), "vars", [], "any", false, false, false, 398), "errors", [], "any", false, false, false, 398))) ? (" is-invalid") : (""))), "required" => "required", "readonly" => "readonly"]]);
        // line 402
        yield "
                            <div class=\"input-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
                                    <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path>
                                </svg>
                            </div>
                            ";
        // line 409
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 409, $this->source); })()), "cost", [], "any", false, false, false, 409), 'errors');
        yield "
                        </div>
                        
                        <div class=\"form-group full-width\">
                            ";
        // line 413
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "description", [], "any", false, false, false, 413), 'label', ["label_attr" => ["class" => "form-label", "data-tooltip" => "Provide details about the maintenance service needed"], "label" => "Description"]);
        // line 418
        yield "
                            ";
        // line 419
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), "description", [], "any", false, false, false, 419), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 421
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 421, $this->source); })()), "description", [], "any", false, false, false, 421), "vars", [], "any", false, false, false, 421), "errors", [], "any", false, false, false, 421))) ? (" is-invalid") : (""))), "required" => "required", "rows" => 5]]);
        // line 425
        yield "
                            ";
        // line 426
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 426, $this->source); })()), "description", [], "any", false, false, false, 426), 'errors');
        yield "
                        </div>
                    </div>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"></path>
                                <polyline points=\"17 21 17 13 7 13 7 21\"></polyline>
                                <polyline points=\"7 3 7 8 15 8\"></polyline>
                            </svg>
                            Create Maintenance
                        </button>
                        ";
        // line 439
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 440
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maintenance_index");
            yield "\" class=\"btn btn-secondary\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line>
                                    <polyline points=\"12 19 5 12 12 5\"></polyline>
                                </svg>
                                Back to list
                            </a>
                        ";
        } else {
            // line 448
            yield "                            <a href=\"";
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
        // line 456
        yield "                    </div>
                ";
        // line 457
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 457, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const serviceTypeSelect = document.getElementById('";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 464, $this->source); })()), "serviceType", [], "any", false, false, false, 464), "vars", [], "any", false, false, false, 464), "id", [], "any", false, false, false, 464), "html", null, true);
        yield "');
    const serviceProviderSelect = document.getElementById('";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "serviceProvider", [], "any", false, false, false, 465), "vars", [], "any", false, false, false, 465), "id", [], "any", false, false, false, 465), "html", null, true);
        yield "');
    const costInput = document.getElementById('";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 466, $this->source); })()), "cost", [], "any", false, false, false, 466), "vars", [], "any", false, false, false, 466), "id", [], "any", false, false, false, 466), "html", null, true);
        yield "');
    
    const servicesData = {
        ";
        // line 469
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 469, $this->source); })()));
        foreach ($context['_seq'] as $context["serviceType"] => $context["serviceData"]) {
            // line 470
            yield "            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["serviceType"], "html", null, true);
            yield "': {
                price: ";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["serviceData"], "price", [], "any", false, false, false, 471), "html", null, true);
            yield ",
                providers: ";
            // line 472
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["serviceData"], "providers", [], "any", false, false, false, 472));
            yield "
            },
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['serviceType'], $context['serviceData'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 475
        yield "    };
    
    // Update service provider options when service type changes
    serviceTypeSelect.addEventListener('change', function() {
        const selectedService = this.value;
        
        if (selectedService && servicesData[selectedService]) {
            // Clear existing options
            serviceProviderSelect.innerHTML = '';
            
            // Add default option
            const defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.disabled = true;
            defaultOption.selected = true;
            defaultOption.textContent = '-- Select Provider --';
            serviceProviderSelect.appendChild(defaultOption);
            
            // Add providers for selected service
            const providers = servicesData[selectedService].providers;
            providers.forEach(provider => {
                const option = document.createElement('option');
                option.value = provider.id;
                option.textContent = provider.name;
                serviceProviderSelect.appendChild(option);
            });
            
            // Update cost
            costInput.value = servicesData[selectedService].price;
        } else {
            serviceProviderSelect.innerHTML = '';
            costInput.value = '';
        }
    });
    
    // Initialize form if returning with errors
    if (serviceTypeSelect.value) {
        serviceTypeSelect.dispatchEvent(new Event('change'));
        
        // Reselect previously selected provider if any
        if ('";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 515, $this->source); })()), "serviceProvider", [], "any", false, false, false, 515), "vars", [], "any", false, false, false, 515), "value", [], "any", false, false, false, 515), "html", null, true);
        yield "') {
            serviceProviderSelect.value = '";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 516, $this->source); })()), "serviceProvider", [], "any", false, false, false, 516), "vars", [], "any", false, false, false, 516), "value", [], "any", false, false, false, 516), "html", null, true);
        yield "';
        }
    }
    
    // Tooltip functionality
    document.querySelectorAll('[data-tooltip]').forEach(element => {
        const tooltip = document.createElement('span');
        tooltip.className = 'tooltip';
        tooltip.innerHTML = `
            <span class=\"tooltip-icon\">i</span>
            <span class=\"tooltip-text\">\${element.dataset.tooltip}</span>
        `;
        element.appendChild(tooltip);
    });
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
        return "maintenance/new.html.twig";
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
        return array (  685 => 516,  681 => 515,  639 => 475,  630 => 472,  626 => 471,  621 => 470,  617 => 469,  611 => 466,  607 => 465,  603 => 464,  593 => 457,  590 => 456,  578 => 448,  566 => 440,  564 => 439,  548 => 426,  545 => 425,  543 => 421,  542 => 419,  539 => 418,  537 => 413,  530 => 409,  521 => 402,  519 => 398,  518 => 396,  514 => 395,  507 => 391,  498 => 384,  496 => 381,  495 => 379,  491 => 378,  484 => 374,  476 => 368,  474 => 365,  473 => 363,  470 => 362,  468 => 357,  461 => 353,  450 => 344,  448 => 341,  447 => 339,  443 => 338,  436 => 334,  425 => 325,  423 => 322,  422 => 320,  418 => 319,  412 => 316,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create Maintenance{% endblock %}

{% block body %}
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
            --input-shadow: 0 4px 10px rgba(94, 96, 206, 0.07);
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f5f7ff 0%, #e9f0ff 100%);
            color: var(--dark);
            line-height: 1.6;
            min-height: 100vh;
            margin: 0;
            padding: 2rem 0;
        }
        
        .container {
            max-width: 850px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        .page-title {
            text-align: center;
            margin-bottom: 2rem;
            font-weight: 800;
            font-size: 2.5rem;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }
        
        .card {
            background: white;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
        }
        
        .card-header {
            padding: 2rem 2.5rem 1.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            position: relative;
        }
        
        .card-header h1 {
            margin: 0;
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 1rem;
            color: var(--primary);
        }
        
        .card-body {
            padding: 2rem 2.5rem;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .form-group.full-width {
            grid-column: span 2;
        }
        
        .form-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary);
            letter-spacing: 0.5px;
        }
        
        .form-control {
            width: 100%;
            padding: 0.85rem 1rem;
            font-size: 1rem;
            color: var(--dark);
            background-color: #fff;
            border: 2px solid rgba(94, 96, 206, 0.1);
            border-radius: 10px;
            box-shadow: var(--input-shadow);
            transition: all 0.2s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(94, 96, 206, 0.15);
            outline: 0;
        }
        
        /* Input icon styling */
        .input-icon {
            position: absolute;
            top: 2.6rem;
            right: 1rem;
            color: var(--gray);
            pointer-events: none;
            transition: color 0.2s ease;
        }
        
        .form-control:focus + .input-icon {
            color: var(--primary);
        }
        
        select.form-control {
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%236c757d' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 16px;
            padding-right: 3rem;
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        /* Tooltip */
        .tooltip {
            position: relative;
            display: inline-block;
            margin-left: 0.5rem;
        }
        
        .tooltip-icon {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: rgba(94, 96, 206, 0.1);
            color: var(--primary);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: bold;
            cursor: help;
        }
        
        .tooltip-text {
            visibility: hidden;
            width: 200px;
            background-color: var(--dark);
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 0.5rem;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -100px;
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 0.8rem;
            font-weight: normal;
        }
        
        .tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }
        
        /* Button styling */
        .btn-group {
            display: flex;
            gap: 1rem;
            margin-top: 2.5rem;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.85rem 1.75rem;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
            font-size: 1rem;
            flex: 1;
        }
        
        .btn svg {
            margin-right: 0.5rem;
        }
        
        .btn-primary {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(94, 96, 206, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary:hover {
            box-shadow: 0 6px 20px rgba(94, 96, 206, 0.4);
            transform: translateY(-2px);
        }
        
        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.6s;
        }
        
        .btn-primary:hover::after {
            left: 100%;
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 2px solid rgba(94, 96, 206, 0.15);
        }
        
        .btn-secondary:hover {
            background-color: rgba(94, 96, 206, 0.05);
            border-color: rgba(94, 96, 206, 0.3);
        }
        
        /* Form errors */
        .form-error {
            color: var(--danger);
            font-size: 0.8rem;
            margin-top: 0.25rem;
        }
        
        .is-invalid {
            border-color: var(--danger) !important;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .form-group.full-width {
                grid-column: span 1;
            }
            
            .btn-group {
                flex-direction: column;
            }
            
            .card-header, .card-body {
                padding: 1.5rem;
            }
        }
    </style>

    <div class=\"container\">
        <h1 class=\"page-title\">Fleet Management System</h1>
        
        <div class=\"card\">
            <div class=\"card-header\">
                <h1>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                    </svg>
                    Create New Maintenance
                </h1>
            </div>
            
            <div class=\"card-body\">
                {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'maintenance-form'}}) }}
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            {{ form_label(form.vehicle, 'Vehicle', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.vehicle, {
                                'attr': {
                                    'class': 'form-control' ~ (form.vehicle.vars.errors|length ? ' is-invalid' : ''),
                                    'required': 'required'
                                }
                            }) }}
                            <div class=\"input-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <rect x=\"1\" y=\"3\" width=\"15\" height=\"13\"></rect>
                                    <polyline points=\"16 8 20 8 23 11 23 16 20 16 20 18 9 18\"></polyline>
                                    <circle cx=\"5.5\" cy=\"18.5\" r=\"2.5\"></circle>
                                    <circle cx=\"18.5\" cy=\"18.5\" r=\"2.5\"></circle>
                                </svg>
                            </div>
                            {{ form_errors(form.vehicle) }}
                        </div>
                        
                        <div class=\"form-group\">
                            {{ form_label(form.maintenanceDate, 'Maintenance Date', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.maintenanceDate, {
                                'attr': {
                                    'class': 'form-control' ~ (form.maintenanceDate.vars.errors|length ? ' is-invalid' : ''),
                                    'required': 'required'
                                }
                            }) }}
                            <div class=\"input-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
                                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
                                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
                                </svg>
                            </div>
                            {{ form_errors(form.maintenanceDate) }}
                        </div>
                        
                        <div class=\"form-group\">
                            {{ form_label(form.serviceType, 'Service Type', {
                                'label_attr': {
                                    'class': 'form-label',
                                    'data-tooltip': 'Select the type of service needed for this maintenance'
                                }
                            }) }}
                            {{ form_widget(form.serviceType, {
                                'attr': {
                                    'class': 'form-control' ~ (form.serviceType.vars.errors|length ? ' is-invalid' : ''),
                                    'required': 'required'
                                }
                            }) }}
                            <div class=\"input-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                                </svg>
                            </div>
                            {{ form_errors(form.serviceType) }}
                        </div>
                        
                        <div class=\"form-group\">
                            {{ form_label(form.serviceProvider, 'Service Provider', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.serviceProvider, {
                                'attr': {
                                    'class': 'form-control' ~ (form.serviceProvider.vars.errors|length ? ' is-invalid' : ''),
                                    'required': 'required'
                                }
                            }) }}
                            <div class=\"input-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path>
                                    <circle cx=\"12\" cy=\"7\" r=\"4\"></circle>
                                </svg>
                            </div>
                            {{ form_errors(form.serviceProvider) }}
                        </div>
                        
                        <div class=\"form-group\">
                            {{ form_label(form.cost, 'Cost (€)', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.cost, {
                                'attr': {
                                    'class': 'form-control' ~ (form.cost.vars.errors|length ? ' is-invalid' : ''),
                                    'required': 'required',
                                    'readonly': 'readonly'
                                }
                            }) }}
                            <div class=\"input-icon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
                                    <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path>
                                </svg>
                            </div>
                            {{ form_errors(form.cost) }}
                        </div>
                        
                        <div class=\"form-group full-width\">
                            {{ form_label(form.description, 'Description', {
                                'label_attr': {
                                    'class': 'form-label',
                                    'data-tooltip': 'Provide details about the maintenance service needed'
                                }
                            }) }}
                            {{ form_widget(form.description, {
                                'attr': {
                                    'class': 'form-control' ~ (form.description.vars.errors|length ? ' is-invalid' : ''),
                                    'required': 'required',
                                    'rows': 5
                                }
                            }) }}
                            {{ form_errors(form.description) }}
                        </div>
                    </div>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"></path>
                                <polyline points=\"17 21 17 13 7 13 7 21\"></polyline>
                                <polyline points=\"7 3 7 8 15 8\"></polyline>
                            </svg>
                            Create Maintenance
                        </button>
                        {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('maintenance_index') }}\" class=\"btn btn-secondary\">
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
                {{ form_end(form) }}
            </div>
        </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const serviceTypeSelect = document.getElementById('{{ form.serviceType.vars.id }}');
    const serviceProviderSelect = document.getElementById('{{ form.serviceProvider.vars.id }}');
    const costInput = document.getElementById('{{ form.cost.vars.id }}');
    
    const servicesData = {
        {% for serviceType, serviceData in services %}
            '{{ serviceType }}': {
                price: {{ serviceData.price }},
                providers: {{ serviceData.providers|json_encode|raw }}
            },
        {% endfor %}
    };
    
    // Update service provider options when service type changes
    serviceTypeSelect.addEventListener('change', function() {
        const selectedService = this.value;
        
        if (selectedService && servicesData[selectedService]) {
            // Clear existing options
            serviceProviderSelect.innerHTML = '';
            
            // Add default option
            const defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.disabled = true;
            defaultOption.selected = true;
            defaultOption.textContent = '-- Select Provider --';
            serviceProviderSelect.appendChild(defaultOption);
            
            // Add providers for selected service
            const providers = servicesData[selectedService].providers;
            providers.forEach(provider => {
                const option = document.createElement('option');
                option.value = provider.id;
                option.textContent = provider.name;
                serviceProviderSelect.appendChild(option);
            });
            
            // Update cost
            costInput.value = servicesData[selectedService].price;
        } else {
            serviceProviderSelect.innerHTML = '';
            costInput.value = '';
        }
    });
    
    // Initialize form if returning with errors
    if (serviceTypeSelect.value) {
        serviceTypeSelect.dispatchEvent(new Event('change'));
        
        // Reselect previously selected provider if any
        if ('{{ form.serviceProvider.vars.value }}') {
            serviceProviderSelect.value = '{{ form.serviceProvider.vars.value }}';
        }
    }
    
    // Tooltip functionality
    document.querySelectorAll('[data-tooltip]').forEach(element => {
        const tooltip = document.createElement('span');
        tooltip.className = 'tooltip';
        tooltip.innerHTML = `
            <span class=\"tooltip-icon\">i</span>
            <span class=\"tooltip-text\">\${element.dataset.tooltip}</span>
        `;
        element.appendChild(tooltip);
    });
});
</script>
{% endblock %}", "maintenance/new.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\maintenance\\new.html.twig");
    }
}
