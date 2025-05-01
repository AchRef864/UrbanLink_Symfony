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

/* abonnement/list.html.twig */
class __TwigTemplate_9d6225e49f4cb28851a40b1357acd293 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnement/list.html.twig", 1);
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

        yield "Gestion des Abonnements";
        
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
        /* Custom Color Scheme */
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --primary-light: #4895ef;
            --secondary: #7209b7;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #f8f9fa;
            --dark: #212529;
            --text: #2b2d42;
            --text-light: #8d99ae;
            --bg: #f8f9fa;
            --card-bg: #ffffff;
            --border: #dee2e6;
        }
        
        .dark {
            --primary: #4895ef;
            --primary-dark: #3a0ca3;
            --primary-light: #4cc9f0;
            --secondary: #b5179e;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #343a40;
            --dark: #f8f9fa;
            --text: #f8f9fa;
            --text-light: #adb5bd;
            --bg: #212529;
            --card-bg: #2b2d42;
            --border: #495057;
        }
        
        /* Base Styles */
        body {
            background-color: var(--bg);
            color: var(--text);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Card Styles */
        .custom-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .dark .custom-card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        
        .custom-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }
        
        .dark .custom-card:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }
        
        /* Header Styles */
        .custom-header {
            border-bottom: 1px solid var(--border);
            padding: 1.5rem;
        }
        
        .custom-title {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 0.25rem;
        }
        
        .custom-subtitle {
            color: var(--text-light);
            font-size: 0.875rem;
        }
        
        /* Button Styles */
        .custom-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            font-size: 0.875rem;
            border: none;
            cursor: pointer;
        }
        
        .custom-btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.25);
        }
        
        .custom-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(67, 97, 238, 0.35);
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
        }
        
        /* Table Styles */
        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .custom-table thead {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
        }
        
        .custom-table th {
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
        }
        
        .custom-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }
        
        .custom-table tbody tr:last-child td {
            border-bottom: none;
        }
        
        .custom-table tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.05);
        }
        
        .dark .custom-table tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.1);
        }
        
      
        
        .custom-badge-active {
            background-color: rgba(76, 201, 240, 0.15);
            color: var(--success);
            border: 1px solid var(--success);
        }
        
        .custom-badge-expired {
            background-color: rgba(247, 37, 133, 0.15);
            color: var(--danger);
            border: 1px solid var(--danger);
        }
        
        .custom-badge-cancelled {
            background-color: rgba(248, 150, 30, 0.15);
            color: var(--warning);
            border: 1px solid var(--warning);
        }
        
        /* Enhanced Action Buttons with SVG Icons */
        .custom-action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            transition: all 0.2s ease;
            cursor: pointer;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .custom-action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .custom-action-btn svg {
            width: 18px;
            height: 18px;
            transition: all 0.2s ease;
        }
        
        .custom-action-btn-edit {
            background-color: rgba(67, 97, 238, 0.2);
            border: 1px solid var(--primary);
        }
        
        .custom-action-btn-edit svg {
            fill: var(--primary-dark);
        }
        
        .custom-action-btn-edit:hover {
            background-color: var(--primary);
        }
        
        .custom-action-btn-edit:hover svg {
            fill: white;
        }
        
        .custom-action-btn-delete {
            background-color: rgba(247, 37, 133, 0.2);
            border: 1px solid var(--danger);
        }
        
        .custom-action-btn-delete svg {
            fill: var(--danger);
        }
        
        .custom-action-btn-delete:hover {
            background-color: var(--danger);
        }
        
        .custom-action-btn-delete:hover svg {
            fill: white;
        }
        
        /* Image Container */
        .custom-img-container {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--light);
        }
        
        .custom-img-placeholder {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            font-size: 0.75rem;
        }
        
        /* Empty State */
        .custom-empty-state {
            padding: 3rem 2rem;
            text-align: center;
            border-radius: 12px;
            background-color: rgba(248, 249, 250, 0.5);
            border: 1px dashed var(--border);
        }
        
        .dark .custom-empty-state {
            background-color: rgba(43, 45, 66, 0.5);
        }
        
        .custom-empty-icon {
            font-size: 2.5rem;
            color: var(--text-light);
            margin-bottom: 1rem;
        }
        
        /* Flash Messages */
        .custom-flash-success {
            background-color: rgba(76, 201, 240, 0.15);
            color: var(--success);
            border: 1px solid var(--success);
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .custom-flash-error {
            background-color: rgba(247, 37, 133, 0.15);
            color: var(--danger);
            border: 1px solid var(--danger);
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

        /* Filter form styles */
        .filter-form input,
        .filter-form select {
            background-color: var(--card-bg);
            color: var(--text);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 0.75rem;
            width: 100%;
        }

        .filter-form input:focus,
        .filter-form select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(67, 97, 238, 0.2);
        }

        .filter-form label {
            color: var(--text-light);
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            display: block;
        }

        .filter-reset-btn {
            background-color: var(--light);
            color: var(--text);
            border: 1px solid var(--border);
        }

        .filter-reset-btn:hover {
            background-color: var(--border);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .custom-table th, 
            .custom-table td {
                padding: 0.75rem 0.5rem;
            }
            
            .custom-title {
                font-size: 1.25rem;
            }

            .filter-form {
                grid-template-columns: 1fr !important;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 350
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

        // line 351
        yield "<div class=\"w-full px-4 py-6 mx-auto max-w-7xl\">
    <!-- Flash messages -->
    ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 353, $this->source); })()), "flashes", ["success"], "method", false, false, false, 353));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 354
            yield "        <div class=\"custom-flash-success\">
            ";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 358, $this->source); })()), "flashes", ["error"], "method", false, false, false, 358));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 359
            yield "        <div class=\"custom-flash-error\">
            ";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 363
        yield "
    <!-- Filter form -->
    <div class=\"custom-card mb-6\">
        <div class=\"p-4 md:p-6\">
            <form method=\"get\" action=\"";
        // line 367
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_list");
        yield "\" class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
                <!-- Search input -->
                <div>
                    <label for=\"search\" class=\"block text-sm font-medium mb-1\">Recherche</label>
                    <input type=\"text\" id=\"search\" name=\"search\" value=\"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 371, $this->source); })()), "html", null, true);
        yield "\"
                           class=\"w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\"
                           placeholder=\"Type ou description\">
                </div>
                
                <!-- Status filter -->
           
                
                <!-- Price range -->
                <div>
                    <label for=\"min_price\" class=\"block text-sm font-medium mb-1\">Prix min</label>
                    <input type=\"number\" id=\"min_price\" name=\"min_price\" value=\"";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minPrice"]) || array_key_exists("minPrice", $context) ? $context["minPrice"] : (function () { throw new RuntimeError('Variable "minPrice" does not exist.', 382, $this->source); })()), "html", null, true);
        yield "\"
                           class=\"w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\"
                           placeholder=\"Prix minimum\" step=\"0.01\" min=\"0\">
                </div>
                
                <div>
                    <label for=\"max_price\" class=\"block text-sm font-medium mb-1\">Prix max</label>
                    <input type=\"number\" id=\"max_price\" name=\"max_price\" value=\"";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxPrice"]) || array_key_exists("maxPrice", $context) ? $context["maxPrice"] : (function () { throw new RuntimeError('Variable "maxPrice" does not exist.', 389, $this->source); })()), "html", null, true);
        yield "\"
                           class=\"w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\"
                           placeholder=\"Prix maximum\" step=\"0.01\" min=\"0\">
                </div>
                
                <!-- Form actions -->
                <div class=\"md:col-span-4 flex justify-end space-x-3\">
                    <button type=\"submit\" 
                            class=\"custom-btn custom-btn-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\" class=\"mr-2\">
                            <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                        </svg>
                        Filtrer
                    </button>
                    <a href=\"";
        // line 403
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_list");
        yield "\" 
                       class=\"custom-btn filter-reset-btn\">
                        Réinitialiser
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Card container -->
    <div class=\"custom-card\">
        <!-- Card header -->
        <div class=\"custom-header flex flex-col md:flex-row justify-between items-start md:items-center\">
            <div class=\"mb-4 md:mb-0\">
                <h1 class=\"custom-title\">Liste des Abonnements</h1>
                <p class=\"custom-subtitle\">Gérez tous les abonnements de votre système</p>
            </div>
            <a href=\"";
        // line 420
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_add");
        yield "\" class=\"custom-btn custom-btn-primary\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\" class=\"mr-2\">
                    <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                </svg>
                Nouvel Abonnement
            </a>
        </div>

        <!-- Table container -->
        <div class=\"p-4 md:p-6\">
            <div class=\"overflow-x-auto\">
                <table class=\"custom-table\">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Type</th>
                            <th>Prix</th>
                            <th>Période</th>
                            <th class=\"text-right\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 442
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 442, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 443
            yield "                            <tr>
                                <!-- Image -->
                                <td>
                                    <div class=\"custom-img-container ";
            // line 446
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "image", [], "any", false, false, false, 446)) {
                yield "custom-img-placeholder";
            }
            yield "\">
                                        ";
            // line 447
            if (CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "image", [], "any", false, false, false, 447)) {
                // line 448
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/abonnements/" . CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "image", [], "any", false, false, false, 448))), "html", null, true);
                yield "\" 
                                                 class=\"w-full h-full object-cover\" 
                                                 alt=\"Abonnement ";
                // line 450
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 450), "html", null, true);
                yield "\">
                                        ";
            } else {
                // line 452
                yield "                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                                <path d=\"M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z\"/>
                                                <path d=\"M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z\"/>
                                            </svg>
                                        ";
            }
            // line 457
            yield "                                    </div>
                                </td>
                                
                                <!-- Type -->
                                <td>
                                    <div class=\"font-semibold capitalize\">
                                        ";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 463), "html", null, true);
            yield "
                                    </div>
                                </td>
                                
                                <!-- Price -->
                                <td>
                                    <div class=\"font-semibold\">
                                        ";
            // line 470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "prix", [], "any", false, false, false, 470), "html", null, true);
            yield " TND
                                    </div>
                                </td>
                                
                                <!-- Date Range -->
                                <td>
                                    <div class=\"text-sm\">
                                        <div>";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateDebut", [], "any", false, false, false, 477), "d/m/Y"), "html", null, true);
            yield "</div>
                                        <div class=\"text-xs text-slate-500 dark:text-slate-500\">au</div>
                                        <div>";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateFin", [], "any", false, false, false, 479), "d/m/Y"), "html", null, true);
            yield "</div>
                                    </div>
                                </td>
                                
                                <!-- Status -->
                                
                                
                                <!-- Actions -->
                                <td class=\"text-right\">
                                    <div class=\"flex items-center justify-end space-x-3\">
                                        <!-- Edit -->
                                        <a href=\"";
            // line 490
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 490)]), "html", null, true);
            yield "\"
                                           class=\"custom-action-btn custom-action-btn-edit\"
                                           title=\"Modifier\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </a>
                                        
                                        <!-- Delete Form -->
                                        <form method=\"post\" 
                                              action=\"";
            // line 500
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 500)]), "html", null, true);
            yield "\"
                                              class=\"delete-form inline-block\"
                                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet abonnement ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 503
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 503))), "html", null, true);
            yield "\">
                                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                            <button type=\"submit\"
                                                    class=\"custom-action-btn custom-action-btn-delete\"
                                                    title=\"Supprimer\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                    <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 516
        if (!$context['_iterated']) {
            // line 517
            yield "                            <tr>
                                <td colspan=\"6\">
                                    <div class=\"custom-empty-state\">
                                        <div class=\"custom-empty-icon\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                                <path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z\"/>
                                            </svg>
                                        </div>
                                        <h3 class=\"font-medium mb-2\">Aucun abonnement trouvé</h3>
                                        <p class=\"text-sm mb-4\">Commencez par créer un nouvel abonnement</p>
                                        <a href=\"";
            // line 527
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_add");
            yield "\" class=\"custom-btn custom-btn-primary inline-block\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\" class=\"mr-2\">
                                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                                            </svg>
                                            Créer un abonnement
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['abonnement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 537
        yield "                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Pagination -->
        ";
        // line 543
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 543, $this->source); })())) > 0)) {
            // line 544
            yield "            <div class=\"custom-header border-t flex items-center justify-between\">
                <div class=\"text-sm\">
                    Affichage de <span class=\"font-semibold\">1</span> à <span class=\"font-semibold\">";
            // line 546
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 546, $this->source); })())), "html", null, true);
            yield "</span> abonnements
                </div>
            </div>
        ";
        }
        // line 550
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 554
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

        // line 555
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Delete confirmation with SweetAlert2
            document.querySelectorAll('.delete-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    Swal.fire({
                        title: 'Confirmer la suppression',
                        text: \"Voulez-vous vraiment supprimer cet abonnement?\",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#f72585',
                        cancelButtonColor: '#4361ee',
                        confirmButtonText: 'Oui, supprimer',
                        cancelButtonText: 'Annuler',
                        background: 'var(--card-bg)',
                        color: 'var(--text)'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                        }
                    });
                });
            });

            // Price range validation
            const minPriceInput = document.getElementById('min_price');
            const maxPriceInput = document.getElementById('max_price');
            
            if (minPriceInput && maxPriceInput) {
                minPriceInput.addEventListener('change', function() {
                    if (maxPriceInput.value && parseFloat(this.value) > parseFloat(maxPriceInput.value)) {
                        this.value = maxPriceInput.value;
                    }
                });
                
                maxPriceInput.addEventListener('change', function() {
                    if (minPriceInput.value && parseFloat(this.value) < parseFloat(minPriceInput.value)) {
                        this.value = minPriceInput.value;
                    }
                });
            }
            
            // Add active class to filter button when filters are applied
            const urlParams = new URLSearchParams(window.location.search);
            const hasFilters = urlParams.toString() !== '';
            
            if (hasFilters) {
                const filterButton = document.querySelector('button[type=\"submit\"]');
                if (filterButton) {
                    filterButton.classList.add('bg-primary-dark');
                }
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
        return "abonnement/list.html.twig";
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
        return array (  803 => 555,  790 => 554,  777 => 550,  770 => 546,  766 => 544,  764 => 543,  756 => 537,  740 => 527,  728 => 517,  726 => 516,  708 => 503,  702 => 500,  689 => 490,  675 => 479,  670 => 477,  660 => 470,  650 => 463,  642 => 457,  635 => 452,  630 => 450,  624 => 448,  622 => 447,  616 => 446,  611 => 443,  606 => 442,  581 => 420,  561 => 403,  544 => 389,  534 => 382,  520 => 371,  513 => 367,  507 => 363,  498 => 360,  495 => 359,  490 => 358,  481 => 355,  478 => 354,  474 => 353,  470 => 351,  457 => 350,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Abonnements{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Custom Color Scheme */
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --primary-light: #4895ef;
            --secondary: #7209b7;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #f8f9fa;
            --dark: #212529;
            --text: #2b2d42;
            --text-light: #8d99ae;
            --bg: #f8f9fa;
            --card-bg: #ffffff;
            --border: #dee2e6;
        }
        
        .dark {
            --primary: #4895ef;
            --primary-dark: #3a0ca3;
            --primary-light: #4cc9f0;
            --secondary: #b5179e;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #343a40;
            --dark: #f8f9fa;
            --text: #f8f9fa;
            --text-light: #adb5bd;
            --bg: #212529;
            --card-bg: #2b2d42;
            --border: #495057;
        }
        
        /* Base Styles */
        body {
            background-color: var(--bg);
            color: var(--text);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Card Styles */
        .custom-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .dark .custom-card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        
        .custom-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }
        
        .dark .custom-card:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }
        
        /* Header Styles */
        .custom-header {
            border-bottom: 1px solid var(--border);
            padding: 1.5rem;
        }
        
        .custom-title {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 0.25rem;
        }
        
        .custom-subtitle {
            color: var(--text-light);
            font-size: 0.875rem;
        }
        
        /* Button Styles */
        .custom-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            font-size: 0.875rem;
            border: none;
            cursor: pointer;
        }
        
        .custom-btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.25);
        }
        
        .custom-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(67, 97, 238, 0.35);
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
        }
        
        /* Table Styles */
        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .custom-table thead {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
        }
        
        .custom-table th {
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
        }
        
        .custom-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }
        
        .custom-table tbody tr:last-child td {
            border-bottom: none;
        }
        
        .custom-table tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.05);
        }
        
        .dark .custom-table tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.1);
        }
        
      
        
        .custom-badge-active {
            background-color: rgba(76, 201, 240, 0.15);
            color: var(--success);
            border: 1px solid var(--success);
        }
        
        .custom-badge-expired {
            background-color: rgba(247, 37, 133, 0.15);
            color: var(--danger);
            border: 1px solid var(--danger);
        }
        
        .custom-badge-cancelled {
            background-color: rgba(248, 150, 30, 0.15);
            color: var(--warning);
            border: 1px solid var(--warning);
        }
        
        /* Enhanced Action Buttons with SVG Icons */
        .custom-action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            transition: all 0.2s ease;
            cursor: pointer;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .custom-action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .custom-action-btn svg {
            width: 18px;
            height: 18px;
            transition: all 0.2s ease;
        }
        
        .custom-action-btn-edit {
            background-color: rgba(67, 97, 238, 0.2);
            border: 1px solid var(--primary);
        }
        
        .custom-action-btn-edit svg {
            fill: var(--primary-dark);
        }
        
        .custom-action-btn-edit:hover {
            background-color: var(--primary);
        }
        
        .custom-action-btn-edit:hover svg {
            fill: white;
        }
        
        .custom-action-btn-delete {
            background-color: rgba(247, 37, 133, 0.2);
            border: 1px solid var(--danger);
        }
        
        .custom-action-btn-delete svg {
            fill: var(--danger);
        }
        
        .custom-action-btn-delete:hover {
            background-color: var(--danger);
        }
        
        .custom-action-btn-delete:hover svg {
            fill: white;
        }
        
        /* Image Container */
        .custom-img-container {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--light);
        }
        
        .custom-img-placeholder {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            font-size: 0.75rem;
        }
        
        /* Empty State */
        .custom-empty-state {
            padding: 3rem 2rem;
            text-align: center;
            border-radius: 12px;
            background-color: rgba(248, 249, 250, 0.5);
            border: 1px dashed var(--border);
        }
        
        .dark .custom-empty-state {
            background-color: rgba(43, 45, 66, 0.5);
        }
        
        .custom-empty-icon {
            font-size: 2.5rem;
            color: var(--text-light);
            margin-bottom: 1rem;
        }
        
        /* Flash Messages */
        .custom-flash-success {
            background-color: rgba(76, 201, 240, 0.15);
            color: var(--success);
            border: 1px solid var(--success);
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .custom-flash-error {
            background-color: rgba(247, 37, 133, 0.15);
            color: var(--danger);
            border: 1px solid var(--danger);
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

        /* Filter form styles */
        .filter-form input,
        .filter-form select {
            background-color: var(--card-bg);
            color: var(--text);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 0.75rem;
            width: 100%;
        }

        .filter-form input:focus,
        .filter-form select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(67, 97, 238, 0.2);
        }

        .filter-form label {
            color: var(--text-light);
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            display: block;
        }

        .filter-reset-btn {
            background-color: var(--light);
            color: var(--text);
            border: 1px solid var(--border);
        }

        .filter-reset-btn:hover {
            background-color: var(--border);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .custom-table th, 
            .custom-table td {
                padding: 0.75rem 0.5rem;
            }
            
            .custom-title {
                font-size: 1.25rem;
            }

            .filter-form {
                grid-template-columns: 1fr !important;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"w-full px-4 py-6 mx-auto max-w-7xl\">
    <!-- Flash messages -->
    {% for message in app.flashes('success') %}
        <div class=\"custom-flash-success\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"custom-flash-error\">
            {{ message }}
        </div>
    {% endfor %}

    <!-- Filter form -->
    <div class=\"custom-card mb-6\">
        <div class=\"p-4 md:p-6\">
            <form method=\"get\" action=\"{{ path('abonnement_list') }}\" class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
                <!-- Search input -->
                <div>
                    <label for=\"search\" class=\"block text-sm font-medium mb-1\">Recherche</label>
                    <input type=\"text\" id=\"search\" name=\"search\" value=\"{{ searchTerm }}\"
                           class=\"w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\"
                           placeholder=\"Type ou description\">
                </div>
                
                <!-- Status filter -->
           
                
                <!-- Price range -->
                <div>
                    <label for=\"min_price\" class=\"block text-sm font-medium mb-1\">Prix min</label>
                    <input type=\"number\" id=\"min_price\" name=\"min_price\" value=\"{{ minPrice }}\"
                           class=\"w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\"
                           placeholder=\"Prix minimum\" step=\"0.01\" min=\"0\">
                </div>
                
                <div>
                    <label for=\"max_price\" class=\"block text-sm font-medium mb-1\">Prix max</label>
                    <input type=\"number\" id=\"max_price\" name=\"max_price\" value=\"{{ maxPrice }}\"
                           class=\"w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\"
                           placeholder=\"Prix maximum\" step=\"0.01\" min=\"0\">
                </div>
                
                <!-- Form actions -->
                <div class=\"md:col-span-4 flex justify-end space-x-3\">
                    <button type=\"submit\" 
                            class=\"custom-btn custom-btn-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\" class=\"mr-2\">
                            <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
                        </svg>
                        Filtrer
                    </button>
                    <a href=\"{{ path('abonnement_list') }}\" 
                       class=\"custom-btn filter-reset-btn\">
                        Réinitialiser
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Card container -->
    <div class=\"custom-card\">
        <!-- Card header -->
        <div class=\"custom-header flex flex-col md:flex-row justify-between items-start md:items-center\">
            <div class=\"mb-4 md:mb-0\">
                <h1 class=\"custom-title\">Liste des Abonnements</h1>
                <p class=\"custom-subtitle\">Gérez tous les abonnements de votre système</p>
            </div>
            <a href=\"{{ path('abonnement_add') }}\" class=\"custom-btn custom-btn-primary\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\" class=\"mr-2\">
                    <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                </svg>
                Nouvel Abonnement
            </a>
        </div>

        <!-- Table container -->
        <div class=\"p-4 md:p-6\">
            <div class=\"overflow-x-auto\">
                <table class=\"custom-table\">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Type</th>
                            <th>Prix</th>
                            <th>Période</th>
                            <th class=\"text-right\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for abonnement in abonnements %}
                            <tr>
                                <!-- Image -->
                                <td>
                                    <div class=\"custom-img-container {% if not abonnement.image %}custom-img-placeholder{% endif %}\">
                                        {% if abonnement.image %}
                                            <img src=\"{{ asset('uploads/images/abonnements/' ~ abonnement.image) }}\" 
                                                 class=\"w-full h-full object-cover\" 
                                                 alt=\"Abonnement {{ abonnement.type }}\">
                                        {% else %}
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                                <path d=\"M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z\"/>
                                                <path d=\"M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z\"/>
                                            </svg>
                                        {% endif %}
                                    </div>
                                </td>
                                
                                <!-- Type -->
                                <td>
                                    <div class=\"font-semibold capitalize\">
                                        {{ abonnement.type }}
                                    </div>
                                </td>
                                
                                <!-- Price -->
                                <td>
                                    <div class=\"font-semibold\">
                                        {{ abonnement.prix }} TND
                                    </div>
                                </td>
                                
                                <!-- Date Range -->
                                <td>
                                    <div class=\"text-sm\">
                                        <div>{{ abonnement.dateDebut|date('d/m/Y') }}</div>
                                        <div class=\"text-xs text-slate-500 dark:text-slate-500\">au</div>
                                        <div>{{ abonnement.dateFin|date('d/m/Y') }}</div>
                                    </div>
                                </td>
                                
                                <!-- Status -->
                                
                                
                                <!-- Actions -->
                                <td class=\"text-right\">
                                    <div class=\"flex items-center justify-end space-x-3\">
                                        <!-- Edit -->
                                        <a href=\"{{ path('abonnement_edit', {id: abonnement.id}) }}\"
                                           class=\"custom-action-btn custom-action-btn-edit\"
                                           title=\"Modifier\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </a>
                                        
                                        <!-- Delete Form -->
                                        <form method=\"post\" 
                                              action=\"{{ path('abonnement_delete', {id: abonnement.id}) }}\"
                                              class=\"delete-form inline-block\"
                                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet abonnement ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ abonnement.id) }}\">
                                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                            <button type=\"submit\"
                                                    class=\"custom-action-btn custom-action-btn-delete\"
                                                    title=\"Supprimer\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                    <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\">
                                    <div class=\"custom-empty-state\">
                                        <div class=\"custom-empty-icon\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                                <path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z\"/>
                                            </svg>
                                        </div>
                                        <h3 class=\"font-medium mb-2\">Aucun abonnement trouvé</h3>
                                        <p class=\"text-sm mb-4\">Commencez par créer un nouvel abonnement</p>
                                        <a href=\"{{ path('abonnement_add') }}\" class=\"custom-btn custom-btn-primary inline-block\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\" class=\"mr-2\">
                                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                                            </svg>
                                            Créer un abonnement
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Pagination -->
        {% if abonnements|length > 0 %}
            <div class=\"custom-header border-t flex items-center justify-between\">
                <div class=\"text-sm\">
                    Affichage de <span class=\"font-semibold\">1</span> à <span class=\"font-semibold\">{{ abonnements|length }}</span> abonnements
                </div>
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Delete confirmation with SweetAlert2
            document.querySelectorAll('.delete-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    Swal.fire({
                        title: 'Confirmer la suppression',
                        text: \"Voulez-vous vraiment supprimer cet abonnement?\",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#f72585',
                        cancelButtonColor: '#4361ee',
                        confirmButtonText: 'Oui, supprimer',
                        cancelButtonText: 'Annuler',
                        background: 'var(--card-bg)',
                        color: 'var(--text)'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                        }
                    });
                });
            });

            // Price range validation
            const minPriceInput = document.getElementById('min_price');
            const maxPriceInput = document.getElementById('max_price');
            
            if (minPriceInput && maxPriceInput) {
                minPriceInput.addEventListener('change', function() {
                    if (maxPriceInput.value && parseFloat(this.value) > parseFloat(maxPriceInput.value)) {
                        this.value = maxPriceInput.value;
                    }
                });
                
                maxPriceInput.addEventListener('change', function() {
                    if (minPriceInput.value && parseFloat(this.value) < parseFloat(minPriceInput.value)) {
                        this.value = minPriceInput.value;
                    }
                });
            }
            
            // Add active class to filter button when filters are applied
            const urlParams = new URLSearchParams(window.location.search);
            const hasFilters = urlParams.toString() !== '';
            
            if (hasFilters) {
                const filterButton = document.querySelector('button[type=\"submit\"]');
                if (filterButton) {
                    filterButton.classList.add('bg-primary-dark');
                }
            }
        });
    </script>
{% endblock %}", "abonnement/list.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal - Copie (2)\\templates\\abonnement\\list.html.twig");
    }
}
