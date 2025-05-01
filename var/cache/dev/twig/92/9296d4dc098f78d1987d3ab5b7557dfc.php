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
class __TwigTemplate_40fc177aa49f3ceea05583d0fbb8bcbf extends Template
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
        
        h1 {
            color: var(--primary);
            font-weight: 700;
            margin: 0;
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
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 200
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

        // line 201
        yield "    <div class=\"container\">
        <div class=\"page-header\">
            <h1>My Vehicles</h1>
            <a href=\"";
        // line 204
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
        // line 213
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 213, $this->source); })())) > 0)) {
            // line 214
            yield "            <div class=\"row\">
                ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 215, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
                // line 216
                yield "                    <div class=\"col-md-6 col-lg-4 mb-4\">
                        <div class=\"card h-100\">
                            <img src=\"";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "image", [], "any", false, false, false, 218), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "brand", [], "any", false, false, false, 218), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 218), "html", null, true);
                yield "\">
                            <div class=\"card-body d-flex flex-column\">
                                <h5 class=\"card-title\">";
                // line 220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "brand", [], "any", false, false, false, 220), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 220), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">
                                    <strong>Type:</strong> ";
                // line 222
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "type", [], "any", false, false, false, 222), "html", null, true);
                yield "<br>
                                    <strong>License Plate:</strong> ";
                // line 223
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "licensePlate", [], "any", false, false, false, 223), "html", null, true);
                yield "<br>
                                    <strong>Year:</strong> ";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "year", [], "any", false, false, false, 224), "html", null, true);
                yield "<br>
                                    <strong>Seats:</strong> ";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "seats", [], "any", false, false, false, 225), "html", null, true);
                yield "<br>
                                    <strong>Status:</strong> 
                                    <span class=\"badge bg-";
                // line 227
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "isVerified", [], "any", false, false, false, 227)) ? ("success") : ("warning"));
                yield "\">
                                        ";
                // line 228
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "isVerified", [], "any", false, false, false, 228)) ? ("Verified") : ("Pending Verification"));
                yield "
                                    </span>
                                </p>
                                <div class=\"btn-group mt-auto\">
                                    <a href=\"";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 232)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary btn-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"></path>
                                            <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>
                                        </svg>
                                        Details
                                    </a>
                                    <a href=\"";
                // line 239
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 239)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary btn-sm\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                                            <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                                        </svg>
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['vehicle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            yield "            </div>
        ";
        } else {
            // line 253
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
            // line 263
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
        // line 273
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
        return array (  450 => 273,  437 => 263,  425 => 253,  421 => 251,  403 => 239,  393 => 232,  386 => 228,  382 => 227,  377 => 225,  373 => 224,  369 => 223,  365 => 222,  358 => 220,  349 => 218,  345 => 216,  341 => 215,  338 => 214,  336 => 213,  324 => 204,  319 => 201,  306 => 200,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
        
        h1 {
            color: var(--primary);
            font-weight: 700;
            margin: 0;
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
        
        {% if vehicles|length > 0 %}
            <div class=\"row\">
                {% for vehicle in vehicles %}
                    <div class=\"col-md-6 col-lg-4 mb-4\">
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
                                    </span>
                                </p>
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
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
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
{% endblock %}", "vehicle/my_vehicle.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\vehicle\\my_vehicle.html.twig");
    }
}
