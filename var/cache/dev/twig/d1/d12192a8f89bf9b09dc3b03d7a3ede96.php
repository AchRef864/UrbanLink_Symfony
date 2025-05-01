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

/* vehicle/index.html.twig */
class __TwigTemplate_c805ac5f767facc5af20a71cfa285eaa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vehicle/index.html.twig", 1);
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

        yield "Vehicle Management";
        
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
        yield "<style>
    :root {
        --primary: #4361ee;
        --primary-light: #4361ee15;
        --primary-dark: #2f3e9e;
        --secondary: #3f37c9;
        --accent: #4895ef;
        --light: #f8f9fa;
        --dark: #212529;
        --gray: #6c757d;
        --gray-light: #e9ecef;
        --success: #10b981;
        --success-light: #10b98115;
        --danger: #ef4444;
        --danger-light: #ef444415;
        --warning: #f59e0b;
        --info: #560bad;
        --border-radius: 12px;
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.05);
        --shadow-md: 0 4px 20px rgba(0, 0, 0, 0.08);
        --shadow-lg: 0 10px 30px rgba(0, 0, 0, 0.1);
        --transition: all 0.25s ease;
    }
    
    body {
        font-family: 'Inter', 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        background: linear-gradient(135deg, #f5f7fb 0%, #eef1f8 100%);
        color: var(--dark);
        line-height: 1.6;
        min-height: 100vh;
        padding-bottom: 3rem;
    }
    
    .container {
        max-width: 1280px;
        margin: 2rem auto;
        padding: 0 1.5rem;
    }
    
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2.5rem;
        background: white;
        padding: 1.5rem 2rem;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
        position: relative;
        overflow: hidden;
    }
    
    .page-header::before {
        content: \"\";
        position: absolute;
        top: 0;
        left: 0;
        width: 8px;
        height: 100%;
        background: var(--primary);
    }
    
    .page-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--dark);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin: 0;
    }
    
    .page-title svg {
        width: 32px;
        height: 32px;
        color: var(--primary);
    }
    
    .card {
        background: white;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
        padding: 2rem;
        margin-bottom: 2rem;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .search-form {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 2rem;
        padding: 1.5rem;
        background: var(--light);
        border-radius: var(--border-radius);
        border: 1px solid var(--gray-light);
    }
    
    .search-form select,
    .search-form input {
        padding: 0.75rem 1rem;
        border-radius: 8px;
        border: 1px solid #dee2e6;
        font-size: 0.95rem;
        min-width: 220px;
        background-color: white;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }
    
    .search-form select:focus,
    .search-form input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px var(--primary-light);
    }
    
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: var(--transition);
        border: none;
        font-size: 0.95rem;
        gap: 0.5rem;
        position: relative;
        overflow: hidden;
    }
    
    .btn::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        background-image: radial-gradient(circle, #fff 10%, transparent 10.01%);
        background-repeat: no-repeat;
        background-position: 50%;
        transform: scale(10, 10);
        opacity: 0;
        transition: transform 0.5s, opacity 1s;
    }
    
    .btn:active::after {
        transform: scale(0, 0);
        opacity: 0.3;
        transition: 0s;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
    }
    
    .btn-primary:hover {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--secondary) 100%);
        box-shadow: 0 6px 15px rgba(67, 97, 238, 0.4);
        transform: translateY(-2px);
    }
    
    .btn-secondary {
        background-color: var(--light);
        color: var(--dark);
        border: 1px solid #dee2e6;
    }
    
    .btn-secondary:hover {
        background-color: #e9ecef;
        box-shadow: var(--shadow-sm);
    }
    
    .btn-danger {
        background: linear-gradient(135deg, var(--danger) 0%, #dc2626 100%);
        color: white;
        box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
    }
    
    .btn-danger:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        box-shadow: 0 6px 15px rgba(239, 68, 68, 0.4);
        transform: translateY(-2px);
    }
    
    .table-container {
        overflow-x: auto;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
    }
    
    .data-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        overflow: hidden;
    }
    
    .data-table thead {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
    }
    
    .data-table th {
        padding: 1.25rem 1.5rem;
        text-align: left;
        font-weight: 600;
        letter-spacing: 0.03em;
        text-transform: uppercase;
        font-size: 0.85rem;
    }
    
    .data-table th:first-child {
        border-top-left-radius: var(--border-radius);
    }
    
    .data-table th:last-child {
        border-top-right-radius: var(--border-radius);
    }
    
    .data-table td {
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid #eee;
        font-size: 0.95rem;
    }
    
    .data-table tbody tr:last-child td {
        border-bottom: none;
    }
    
    .data-table tbody tr {
        transition: var(--transition);
        background-color: white;
    }
    
    .data-table tbody tr:hover {
        background-color: var(--primary-light);
        transform: translateY(-2px);
        box-shadow: var(--shadow-sm);
    }
    
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        box-shadow: var(--shadow-sm);
    }
    
    .status-available { 
        background-color: var(--success-light); 
        color: var(--success); 
        border: 1px solid rgba(16, 185, 129, 0.2);
    }
    
    .status-maintenance { 
        background-color: var(--danger-light); 
        color: var(--danger); 
        border: 1px solid rgba(239, 68, 68, 0.2);
    }
    
    .actions {
        display: flex;
        gap: 0.75rem;
    }
    
    .actions .btn {
        padding: 0.5rem;
        width: 36px;
        height: 36px;
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: var(--gray);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: var(--light);
        border-radius: var(--border-radius);
        min-height: 300px;
    }
    
    .empty-state svg {
        width: 64px;
        height: 64px;
        margin-bottom: 1.5rem;
        opacity: 0.6;
        color: var(--primary);
    }
    
    .empty-state p {
        font-size: 1.1rem;
        font-weight: 500;
        margin-bottom: 1.5rem;
    }
    
    .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2.5rem;
    }
    
    .stat-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        display: flex;
        align-items: center;
        gap: 1rem;
        border: 1px solid rgba(0, 0, 0, 0.05);
        transition: var(--transition);
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .stat-icon {
        width: 48px;
        height: 48px;
        background: var(--primary-light);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        flex-shrink: 0;
    }
    
    .stat-icon svg {
        width: 24px;
        height: 24px;
    }
    
    .stat-content {
        display: flex;
        flex-direction: column;
    }
    
    .stat-label {
        font-size: 0.85rem;
        color: var(--gray);
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .stat-value {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--dark);
        margin-top: 0.25rem;
    }
    
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .page-header, .card, .stats-container {
        animation: fadeIn 0.5s ease forwards;
    }
    
    .stats-container {
        animation-delay: 0.1s;
    }
    
    .card {
        animation-delay: 0.2s;
    }
    
    /* Fancy header with gradient text */
    .gradient-text {
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        margin-left: 8px;
    }
    
    /* Tooltip for buttons */
    [title] {
        position: relative;
    }
    
    [title]:hover::after {
        content: attr(title);
        position: absolute;
        top: -40px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--dark);
        color: white;
        padding: 0.5rem 0.75rem;
        border-radius: 6px;
        font-size: 0.75rem;
        white-space: nowrap;
        pointer-events: none;
        z-index: 10;
    }
    
    [title]:hover::before {
        content: '';
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 5px;
        border-style: solid;
        border-color: var(--dark) transparent transparent transparent;
        pointer-events: none;
        z-index: 10;
    }
</style>

<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"page-title\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <path d=\"M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2\"></path>
                <circle cx=\"7\" cy=\"17\" r=\"2\"></circle>
                <path d=\"M9 17h6\"></path>
                <circle cx=\"17\" cy=\"17\" r=\"2\"></circle>
            </svg>
            Vehicle <span class=\"gradient-text\">Management</span>
        </h1>
        <a href=\"";
        // line 449
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_new");
        yield "\" class=\"btn btn-primary\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
            </svg>
            Add Vehicle
        </a>
    </div>

    <div class=\"stats-container\">
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Total Vehicles</span>
                <span class=\"stat-value\">";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 470, $this->source); })())), "html", null, true);
        yield "</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                    <polyline points=\"12 6 12 12 16 14\"></polyline>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Available</span>
                <span class=\"stat-value\">";
        // line 483
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 483, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 483, $this->source); })()), "isAvailable", [], "any", false, false, false, 483); })), "html", null, true);
        yield "</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Not Available</span>
                <span class=\"stat-value\">";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 495, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 495, $this->source); })()), "isAvailable", [], "any", false, false, false, 495); })), "html", null, true);
        yield "</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <polygon points=\"12 2 2 7 12 12 22 7 12 2\"></polygon>
                    <polyline points=\"2 17 12 22 22 17\"></polyline>
                    <polyline points=\"2 12 12 17 22 12\"></polyline>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Types</span>
                <span class=\"stat-value\">";
        // line 509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 509, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 509, $this->source); })()), "type", [], "any", false, false, false, 509); }), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return  !Twig\Extension\CoreExtension::testEmpty((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 509, $this->source); })())); })), "html", null, true);
        yield "</span>
            </div>
        </div>
    </div>

    <div class=\"card\">
        <form method=\"GET\" action=\"";
        // line 515
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_index");
        yield "\" class=\"search-form\">
            <select name=\"category\" class=\"search-category\" onchange=\"this.form.submit()\">
                <option value=\"\">Select Search Category</option>
                <option value=\"type\" ";
        // line 518
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 518, $this->source); })()) == "type")) {
            yield "selected";
        }
        yield ">Type</option>
                <option value=\"brand\" ";
        // line 519
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 519, $this->source); })()) == "brand")) {
            yield "selected";
        }
        yield ">Brand</option>
                <option value=\"model\" ";
        // line 520
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 520, $this->source); })()) == "model")) {
            yield "selected";
        }
        yield ">Model</option>
            </select>

            ";
        // line 523
        if ((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 523, $this->source); })())) {
            // line 524
            yield "                <input type=\"text\" name=\"search\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 524, $this->source); })()), "html", null, true);
            yield "\" class=\"search-input\" placeholder=\"Enter search term\" />
                <button type=\"submit\" class=\"btn btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                        <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
                    </svg>
                    Search
                </button>
            ";
        }
        // line 533
        yield "        </form>

        ";
        // line 535
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 535, $this->source); })()))) {
            // line 536
            yield "            <div class=\"table-container\">
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>License Plate</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 550
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 550, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
                // line 551
                yield "                            <tr>
                                <td>";
                // line 552
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 552), "html", null, true);
                yield "</td>
                                <td>";
                // line 553
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "type", [], "any", false, false, false, 553), "html", null, true);
                yield "</td>
                                <td>";
                // line 554
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "brand", [], "any", false, false, false, 554), "html", null, true);
                yield "</td>
                                <td>";
                // line 555
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 555), "html", null, true);
                yield "</td>
                                <td>";
                // line 556
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "licensePlate", [], "any", false, false, false, 556), "html", null, true);
                yield "</td>
                                <td>
                                    <span class=\"status-badge ";
                // line 558
                if (CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "isAvailable", [], "any", false, false, false, 558)) {
                    yield "status-available";
                } else {
                    yield "status-maintenance";
                }
                yield "\">
                                        ";
                // line 559
                if (CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "isAvailable", [], "any", false, false, false, 559)) {
                    // line 560
                    yield "                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                                <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                                            </svg>
                                            Available
                                        ";
                } else {
                    // line 566
                    yield "                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                <line x1=\"4.93\" y1=\"4.93\" x2=\"19.07\" y2=\"19.07\"></line>
                                            </svg>
                                            Not Available
                                        ";
                }
                // line 572
                yield "                                    </span>
                                </td>
                                <td>
                                    <div class=\"actions\">
                                        <a href=\"";
                // line 576
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 576)]), "html", null, true);
                yield "\" class=\"btn btn-secondary\" title=\"View Details\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"></path>
                                                <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>
                                            </svg>
                                        </a>
                                        <a href=\"";
                // line 582
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 582)]), "html", null, true);
                yield "\" class=\"btn btn-primary\" title=\"Edit Vehicle\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                                                <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                                            </svg>
                                        </a>
                                        <form method=\"post\" action=\"";
                // line 588
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 588)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Are you sure you want to delete this vehicle?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 589
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 589))), "html", null, true);
                yield "\">
                                            <button class=\"btn btn-danger\" title=\"Delete Vehicle\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                    <polyline points=\"3 6 5 6 21 6\"></polyline>
                                                    <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['vehicle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 601
            yield "                    </tbody>
                </table>
            </div>
        ";
        } else {
            // line 605
            yield "            <div class=\"empty-state\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                    <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                    <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                </svg>
                <p>No vehicles found in the database.</p>
                <a href=\"";
            // line 612
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_new");
            yield "\" class=\"btn btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                        <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                    </svg>
                    Add Your First Vehicle
                </a>
            </div>
        ";
        }
        // line 621
        yield "    </div>
</div>

<script>
    // Add hover effect for buttons
    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    
    // Add ripple effect to buttons
    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('click', function(e) {
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;
            
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            ripple.style.left = `\${x}px`;
            ripple.style.top = `\${y}px`;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
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
        return "vehicle/index.html.twig";
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
        return array (  816 => 621,  804 => 612,  795 => 605,  789 => 601,  771 => 589,  767 => 588,  758 => 582,  749 => 576,  743 => 572,  735 => 566,  727 => 560,  725 => 559,  717 => 558,  712 => 556,  708 => 555,  704 => 554,  700 => 553,  696 => 552,  693 => 551,  689 => 550,  673 => 536,  671 => 535,  667 => 533,  654 => 524,  652 => 523,  644 => 520,  638 => 519,  632 => 518,  626 => 515,  617 => 509,  600 => 495,  585 => 483,  569 => 470,  545 => 449,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vehicle Management{% endblock %}

{% block body %}
<style>
    :root {
        --primary: #4361ee;
        --primary-light: #4361ee15;
        --primary-dark: #2f3e9e;
        --secondary: #3f37c9;
        --accent: #4895ef;
        --light: #f8f9fa;
        --dark: #212529;
        --gray: #6c757d;
        --gray-light: #e9ecef;
        --success: #10b981;
        --success-light: #10b98115;
        --danger: #ef4444;
        --danger-light: #ef444415;
        --warning: #f59e0b;
        --info: #560bad;
        --border-radius: 12px;
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.05);
        --shadow-md: 0 4px 20px rgba(0, 0, 0, 0.08);
        --shadow-lg: 0 10px 30px rgba(0, 0, 0, 0.1);
        --transition: all 0.25s ease;
    }
    
    body {
        font-family: 'Inter', 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        background: linear-gradient(135deg, #f5f7fb 0%, #eef1f8 100%);
        color: var(--dark);
        line-height: 1.6;
        min-height: 100vh;
        padding-bottom: 3rem;
    }
    
    .container {
        max-width: 1280px;
        margin: 2rem auto;
        padding: 0 1.5rem;
    }
    
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2.5rem;
        background: white;
        padding: 1.5rem 2rem;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
        position: relative;
        overflow: hidden;
    }
    
    .page-header::before {
        content: \"\";
        position: absolute;
        top: 0;
        left: 0;
        width: 8px;
        height: 100%;
        background: var(--primary);
    }
    
    .page-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--dark);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin: 0;
    }
    
    .page-title svg {
        width: 32px;
        height: 32px;
        color: var(--primary);
    }
    
    .card {
        background: white;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
        padding: 2rem;
        margin-bottom: 2rem;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .search-form {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 2rem;
        padding: 1.5rem;
        background: var(--light);
        border-radius: var(--border-radius);
        border: 1px solid var(--gray-light);
    }
    
    .search-form select,
    .search-form input {
        padding: 0.75rem 1rem;
        border-radius: 8px;
        border: 1px solid #dee2e6;
        font-size: 0.95rem;
        min-width: 220px;
        background-color: white;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }
    
    .search-form select:focus,
    .search-form input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px var(--primary-light);
    }
    
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: var(--transition);
        border: none;
        font-size: 0.95rem;
        gap: 0.5rem;
        position: relative;
        overflow: hidden;
    }
    
    .btn::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        background-image: radial-gradient(circle, #fff 10%, transparent 10.01%);
        background-repeat: no-repeat;
        background-position: 50%;
        transform: scale(10, 10);
        opacity: 0;
        transition: transform 0.5s, opacity 1s;
    }
    
    .btn:active::after {
        transform: scale(0, 0);
        opacity: 0.3;
        transition: 0s;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
    }
    
    .btn-primary:hover {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--secondary) 100%);
        box-shadow: 0 6px 15px rgba(67, 97, 238, 0.4);
        transform: translateY(-2px);
    }
    
    .btn-secondary {
        background-color: var(--light);
        color: var(--dark);
        border: 1px solid #dee2e6;
    }
    
    .btn-secondary:hover {
        background-color: #e9ecef;
        box-shadow: var(--shadow-sm);
    }
    
    .btn-danger {
        background: linear-gradient(135deg, var(--danger) 0%, #dc2626 100%);
        color: white;
        box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
    }
    
    .btn-danger:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        box-shadow: 0 6px 15px rgba(239, 68, 68, 0.4);
        transform: translateY(-2px);
    }
    
    .table-container {
        overflow-x: auto;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
    }
    
    .data-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        overflow: hidden;
    }
    
    .data-table thead {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
    }
    
    .data-table th {
        padding: 1.25rem 1.5rem;
        text-align: left;
        font-weight: 600;
        letter-spacing: 0.03em;
        text-transform: uppercase;
        font-size: 0.85rem;
    }
    
    .data-table th:first-child {
        border-top-left-radius: var(--border-radius);
    }
    
    .data-table th:last-child {
        border-top-right-radius: var(--border-radius);
    }
    
    .data-table td {
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid #eee;
        font-size: 0.95rem;
    }
    
    .data-table tbody tr:last-child td {
        border-bottom: none;
    }
    
    .data-table tbody tr {
        transition: var(--transition);
        background-color: white;
    }
    
    .data-table tbody tr:hover {
        background-color: var(--primary-light);
        transform: translateY(-2px);
        box-shadow: var(--shadow-sm);
    }
    
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        box-shadow: var(--shadow-sm);
    }
    
    .status-available { 
        background-color: var(--success-light); 
        color: var(--success); 
        border: 1px solid rgba(16, 185, 129, 0.2);
    }
    
    .status-maintenance { 
        background-color: var(--danger-light); 
        color: var(--danger); 
        border: 1px solid rgba(239, 68, 68, 0.2);
    }
    
    .actions {
        display: flex;
        gap: 0.75rem;
    }
    
    .actions .btn {
        padding: 0.5rem;
        width: 36px;
        height: 36px;
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: var(--gray);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: var(--light);
        border-radius: var(--border-radius);
        min-height: 300px;
    }
    
    .empty-state svg {
        width: 64px;
        height: 64px;
        margin-bottom: 1.5rem;
        opacity: 0.6;
        color: var(--primary);
    }
    
    .empty-state p {
        font-size: 1.1rem;
        font-weight: 500;
        margin-bottom: 1.5rem;
    }
    
    .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2.5rem;
    }
    
    .stat-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        display: flex;
        align-items: center;
        gap: 1rem;
        border: 1px solid rgba(0, 0, 0, 0.05);
        transition: var(--transition);
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .stat-icon {
        width: 48px;
        height: 48px;
        background: var(--primary-light);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        flex-shrink: 0;
    }
    
    .stat-icon svg {
        width: 24px;
        height: 24px;
    }
    
    .stat-content {
        display: flex;
        flex-direction: column;
    }
    
    .stat-label {
        font-size: 0.85rem;
        color: var(--gray);
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .stat-value {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--dark);
        margin-top: 0.25rem;
    }
    
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .page-header, .card, .stats-container {
        animation: fadeIn 0.5s ease forwards;
    }
    
    .stats-container {
        animation-delay: 0.1s;
    }
    
    .card {
        animation-delay: 0.2s;
    }
    
    /* Fancy header with gradient text */
    .gradient-text {
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        margin-left: 8px;
    }
    
    /* Tooltip for buttons */
    [title] {
        position: relative;
    }
    
    [title]:hover::after {
        content: attr(title);
        position: absolute;
        top: -40px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--dark);
        color: white;
        padding: 0.5rem 0.75rem;
        border-radius: 6px;
        font-size: 0.75rem;
        white-space: nowrap;
        pointer-events: none;
        z-index: 10;
    }
    
    [title]:hover::before {
        content: '';
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 5px;
        border-style: solid;
        border-color: var(--dark) transparent transparent transparent;
        pointer-events: none;
        z-index: 10;
    }
</style>

<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"page-title\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <path d=\"M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2\"></path>
                <circle cx=\"7\" cy=\"17\" r=\"2\"></circle>
                <path d=\"M9 17h6\"></path>
                <circle cx=\"17\" cy=\"17\" r=\"2\"></circle>
            </svg>
            Vehicle <span class=\"gradient-text\">Management</span>
        </h1>
        <a href=\"{{ path('vehicle_new') }}\" class=\"btn btn-primary\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
            </svg>
            Add Vehicle
        </a>
    </div>

    <div class=\"stats-container\">
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Total Vehicles</span>
                <span class=\"stat-value\">{{ vehicles|length }}</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                    <polyline points=\"12 6 12 12 16 14\"></polyline>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Available</span>
                <span class=\"stat-value\">{{ vehicles|filter(v => v.isAvailable)|length }}</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Not Available</span>
                <span class=\"stat-value\">{{ vehicles|filter(v => not v.isAvailable)|length }}</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <polygon points=\"12 2 2 7 12 12 22 7 12 2\"></polygon>
                    <polyline points=\"2 17 12 22 22 17\"></polyline>
                    <polyline points=\"2 12 12 17 22 12\"></polyline>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Types</span>
                <span class=\"stat-value\">{{ vehicles|map(v => v.type)|filter(type => type is not empty)|length }}</span>
            </div>
        </div>
    </div>

    <div class=\"card\">
        <form method=\"GET\" action=\"{{ path('vehicle_index') }}\" class=\"search-form\">
            <select name=\"category\" class=\"search-category\" onchange=\"this.form.submit()\">
                <option value=\"\">Select Search Category</option>
                <option value=\"type\" {% if category == 'type' %}selected{% endif %}>Type</option>
                <option value=\"brand\" {% if category == 'brand' %}selected{% endif %}>Brand</option>
                <option value=\"model\" {% if category == 'model' %}selected{% endif %}>Model</option>
            </select>

            {% if category %}
                <input type=\"text\" name=\"search\" value=\"{{ searchTerm }}\" class=\"search-input\" placeholder=\"Enter search term\" />
                <button type=\"submit\" class=\"btn btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                        <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
                    </svg>
                    Search
                </button>
            {% endif %}
        </form>

        {% if vehicles is not empty %}
            <div class=\"table-container\">
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>License Plate</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for vehicle in vehicles %}
                            <tr>
                                <td>{{ vehicle.id }}</td>
                                <td>{{ vehicle.type }}</td>
                                <td>{{ vehicle.brand }}</td>
                                <td>{{ vehicle.model }}</td>
                                <td>{{ vehicle.licensePlate }}</td>
                                <td>
                                    <span class=\"status-badge {% if vehicle.isAvailable %}status-available{% else %}status-maintenance{% endif %}\">
                                        {% if vehicle.isAvailable %}
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                                <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                                            </svg>
                                            Available
                                        {% else %}
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                <line x1=\"4.93\" y1=\"4.93\" x2=\"19.07\" y2=\"19.07\"></line>
                                            </svg>
                                            Not Available
                                        {% endif %}
                                    </span>
                                </td>
                                <td>
                                    <div class=\"actions\">
                                        <a href=\"{{ path('vehicle_show', {id: vehicle.id}) }}\" class=\"btn btn-secondary\" title=\"View Details\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"></path>
                                                <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>
                                            </svg>
                                        </a>
                                        <a href=\"{{ path('vehicle_edit', {id: vehicle.id}) }}\" class=\"btn btn-primary\" title=\"Edit Vehicle\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                                                <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                                            </svg>
                                        </a>
                                        <form method=\"post\" action=\"{{ path('vehicle_delete', {id: vehicle.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this vehicle?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ vehicle.id) }}\">
                                            <button class=\"btn btn-danger\" title=\"Delete Vehicle\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                    <polyline points=\"3 6 5 6 21 6\"></polyline>
                                                    <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% else %}
            <div class=\"empty-state\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                    <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                    <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                </svg>
                <p>No vehicles found in the database.</p>
                <a href=\"{{ path('vehicle_new') }}\" class=\"btn btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                        <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                    </svg>
                    Add Your First Vehicle
                </a>
            </div>
        {% endif %}
    </div>
</div>

<script>
    // Add hover effect for buttons
    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    
    // Add ripple effect to buttons
    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('click', function(e) {
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;
            
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            ripple.style.left = `\${x}px`;
            ripple.style.top = `\${y}px`;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
</script>
{% endblock %}", "vehicle/index.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\vehicle\\index.html.twig");
    }
}
