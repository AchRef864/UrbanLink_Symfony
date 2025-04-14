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

/* avis/index.html.twig */
class __TwigTemplate_83bf55bcf9a9fb004c9e969d86f52428 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/index.html.twig", 1);
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

        yield "Complaints";
        
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
        yield "<style>
    .w-full { width: 100%; }
    .max-w-full { max-width: 100%; }
    .relative { position: relative; }
    .flex { display: flex; }
    .flex-col { flex-direction: column; }
    .min-w-0 { min-width: 0; }
    .break-words { word-wrap: break-word; }
    .bg-white { background-color: #ffffff; }
    .border-0 { border: none; }
    .shadow-xl { box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1); }
    .rounded-2xl { border-radius: 1rem; }
    .bg-clip-border { background-clip: border-box; }
    .table-responsive { overflow-x: auto; }
    .table { width: 100%; margin-bottom: 1rem; color: #212529; border-collapse: collapse; }
    .table th, .table td { padding: 0.75rem; vertical-align: top; border-top: 1px solid #98FB98; }

    .thead-light th { 
        color: #696969; /* dim gray text */
        background-color: #87CEEB; /* sky blue header background */
        border-color: #98FB98; /* pale green border */
    }

    .text-slate-500 { color: #696969; }
    .text-sm { font-size: 0.875rem; }
    .font-normal { font-weight: 400; }
    .leading-normal { line-height: 1.5; }

    .btn { 
        display: inline-block;
        padding: 10px 20px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary { 
        background-color: #FFD700; /* gold */
        color: #696969;
        border: none;
    }
    .btn-primary:hover { background-color: #FFD700; }

    .btn-success { 
        background-color: #28a745; 
        color: white; 
        border: none;
    }
    .btn-success:hover { background-color: #218838; }

    .btn-danger { 
        background-color: #dc3545; 
        color: white; 
        border: none;
    }
    .btn-danger:hover { background-color: #c82333; }

    .btn-create {
        background-color: #87CEEB;
        color: white;
        border: none;
    }
    .btn-create:hover {
        background-color: #87CEEB;
        color: #696969;
    }

    .text-center { text-align: center; }
    .mt-4 { margin-top: 1.5rem; }
    .mb-4 { margin-bottom: 1.5rem; }

    .pagination { 
        display: flex; 
        justify-content: center; 
        padding: 1rem 0; 
        list-style: none;
    }
    .pagination li { margin: 0 5px; }
    .pagination a { 
        display: inline-block; 
        padding: 8px 12px; 
        font-size: 14px; 
        font-weight: bold; 
        color: #FFD700; /* gold */
        text-decoration: none; 
        border: 1px solid #98FB98; /* pale green */
        border-radius: 4px; 
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .pagination a:hover { 
        background-color: #FFD700; 
        color: #696969;
    }
    .pagination .active a { 
        background-color: #FFD700; 
        color: #696969; 
        border-color: #FFD700;
    }
    .pagination .disabled a { 
        color: #6c757d; 
        pointer-events: none; 
        background-color: #f8f9fa; 
        border-color: #dee2e6;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 116
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

        // line 117
        yield "<div style=\"margin-left: 280px;\">
    <div class=\"w-full max-w-full\">
        <div class=\"relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border\">
            <div class=\"table-responsive\">
                <table class=\"table table-flush text-slate-500\" datatable id=\"datatable-search\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Date Avis</th>
                            <th>Statut</th>
                            <th>Taxi registration</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 133, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 134
            yield "                            <tr>
                                <td class=\"text-sm font-normal leading-normal\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "type", [], "any", false, false, false, 135), "html", null, true);
            yield "</td>
                                <td class=\"text-sm font-normal leading-normal\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 136), "html", null, true);
            yield "</td>
                                <td class=\"text-sm font-normal leading-normal\">
                                    ";
            // line 138
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 138)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 138), "Y-m-d"), "html", null, true)) : (""));
            yield "
                                </td>
                                <td class=\"text-sm font-normal leading-normal\">
                                    ";
            // line 141
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "statut", [], "any", false, false, false, 141) == "processed")) {
                // line 142
                yield "                                        Processed
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 143
$context["avi"], "statut", [], "any", false, false, false, 143) == "not processed")) {
                // line 144
                yield "                                        Not Processed
                                    ";
            } else {
                // line 146
                yield "                                        N/A
                                    ";
            }
            // line 148
            yield "                                </td>

                                <td class=\"text-sm font-normal leading-normal\">
                                    ";
            // line 151
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 151))) {
                // line 152
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 152), "immatriculation", [], "any", false, false, false, 152), "html", null, true);
                yield "
                                    ";
            } else {
                // line 154
                yield "                                        N/A
                                    ";
            }
            // line 156
            yield "                                </td>
                                <td class=\"text-sm font-normal leading-normal\">
                                    ";
            // line 158
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "id", [], "any", false, false, false, 158) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "user", [], "any", false, false, false, 158), "id", [], "any", false, false, false, 158)))) {
                // line 159
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 159)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Edit</a>
                                    ";
            }
            // line 161
            yield "                                    
                                    <a href=\"";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_reponses", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 162)]), "html", null, true);
            yield "\" class=\"btn btn-success\">View Responses</a>

                                    ";
            // line 164
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "user", [], "any", false, false, false, 164) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "user", [], "any", false, false, false, 164), "role", [], "any", false, false, false, 164) == "client")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "user", [], "any", false, false, false, 164), "id", [], "any", false, false, false, 164) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "user", [], "any", false, false, false, 164), "id", [], "any", false, false, false, 164)))) {
                // line 165
                yield "                                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 165)]), "html", null, true);
                yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this avis?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 166))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                                        </form>
                                    ";
            }
            // line 170
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 172
        if (!$context['_iterated']) {
            // line 173
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center\">No records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    ";
        // line 183
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 183, $this->source); })()), "user", [], "any", false, false, false, 183) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 183, $this->source); })()), "user", [], "any", false, false, false, 183), "role", [], "any", false, false, false, 183) == "client"))) {
            // line 184
            yield "        <div class=\"text-center mt-4\">
            <a href=\"";
            // line 185
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new");
            yield "\" class=\"btn btn-create\">Create New Complaint</a>
        </div>
    ";
        }
        // line 188
        yield "
    <div class=\"pagination-container\">
        <ul class=\"pagination\">
            ";
        // line 191
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 191, $this->source); })()));
        yield "
        </ul>
    </div>
</div>
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
        return "avis/index.html.twig";
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
        return array (  381 => 191,  376 => 188,  370 => 185,  367 => 184,  365 => 183,  357 => 177,  348 => 173,  346 => 172,  340 => 170,  333 => 166,  328 => 165,  326 => 164,  321 => 162,  318 => 161,  312 => 159,  310 => 158,  306 => 156,  302 => 154,  296 => 152,  294 => 151,  289 => 148,  285 => 146,  281 => 144,  279 => 143,  276 => 142,  274 => 141,  268 => 138,  263 => 136,  259 => 135,  256 => 134,  251 => 133,  233 => 117,  220 => 116,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Complaints{% endblock %}

{% block stylesheets %}
<style>
    .w-full { width: 100%; }
    .max-w-full { max-width: 100%; }
    .relative { position: relative; }
    .flex { display: flex; }
    .flex-col { flex-direction: column; }
    .min-w-0 { min-width: 0; }
    .break-words { word-wrap: break-word; }
    .bg-white { background-color: #ffffff; }
    .border-0 { border: none; }
    .shadow-xl { box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1); }
    .rounded-2xl { border-radius: 1rem; }
    .bg-clip-border { background-clip: border-box; }
    .table-responsive { overflow-x: auto; }
    .table { width: 100%; margin-bottom: 1rem; color: #212529; border-collapse: collapse; }
    .table th, .table td { padding: 0.75rem; vertical-align: top; border-top: 1px solid #98FB98; }

    .thead-light th { 
        color: #696969; /* dim gray text */
        background-color: #87CEEB; /* sky blue header background */
        border-color: #98FB98; /* pale green border */
    }

    .text-slate-500 { color: #696969; }
    .text-sm { font-size: 0.875rem; }
    .font-normal { font-weight: 400; }
    .leading-normal { line-height: 1.5; }

    .btn { 
        display: inline-block;
        padding: 10px 20px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary { 
        background-color: #FFD700; /* gold */
        color: #696969;
        border: none;
    }
    .btn-primary:hover { background-color: #FFD700; }

    .btn-success { 
        background-color: #28a745; 
        color: white; 
        border: none;
    }
    .btn-success:hover { background-color: #218838; }

    .btn-danger { 
        background-color: #dc3545; 
        color: white; 
        border: none;
    }
    .btn-danger:hover { background-color: #c82333; }

    .btn-create {
        background-color: #87CEEB;
        color: white;
        border: none;
    }
    .btn-create:hover {
        background-color: #87CEEB;
        color: #696969;
    }

    .text-center { text-align: center; }
    .mt-4 { margin-top: 1.5rem; }
    .mb-4 { margin-bottom: 1.5rem; }

    .pagination { 
        display: flex; 
        justify-content: center; 
        padding: 1rem 0; 
        list-style: none;
    }
    .pagination li { margin: 0 5px; }
    .pagination a { 
        display: inline-block; 
        padding: 8px 12px; 
        font-size: 14px; 
        font-weight: bold; 
        color: #FFD700; /* gold */
        text-decoration: none; 
        border: 1px solid #98FB98; /* pale green */
        border-radius: 4px; 
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .pagination a:hover { 
        background-color: #FFD700; 
        color: #696969;
    }
    .pagination .active a { 
        background-color: #FFD700; 
        color: #696969; 
        border-color: #FFD700;
    }
    .pagination .disabled a { 
        color: #6c757d; 
        pointer-events: none; 
        background-color: #f8f9fa; 
        border-color: #dee2e6;
    }
</style>
{% endblock %}

{% block body %}
<div style=\"margin-left: 280px;\">
    <div class=\"w-full max-w-full\">
        <div class=\"relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border\">
            <div class=\"table-responsive\">
                <table class=\"table table-flush text-slate-500\" datatable id=\"datatable-search\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Date Avis</th>
                            <th>Statut</th>
                            <th>Taxi registration</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for avi in avis %}
                            <tr>
                                <td class=\"text-sm font-normal leading-normal\">{{ avi.type }}</td>
                                <td class=\"text-sm font-normal leading-normal\">{{ avi.commentaire }}</td>
                                <td class=\"text-sm font-normal leading-normal\">
                                    {{ avi.dateAvis ? avi.dateAvis|date('Y-m-d') : '' }}
                                </td>
                                <td class=\"text-sm font-normal leading-normal\">
                                    {% if avi.statut == 'processed' %}
                                        Processed
                                    {% elseif avi.statut == 'not processed' %}
                                        Not Processed
                                    {% else %}
                                        N/A
                                    {% endif %}
                                </td>

                                <td class=\"text-sm font-normal leading-normal\">
                                    {% if avi.taxi is not null %}
                                        {{ avi.taxi.immatriculation }}
                                    {% else %}
                                        N/A
                                    {% endif %}
                                </td>
                                <td class=\"text-sm font-normal leading-normal\">
                                    {% if app.user and app.user.id == avi.user.id %}
                                        <a href=\"{{ path('app_avis_edit', {'id': avi.id}) }}\" class=\"btn btn-primary\">Edit</a>
                                    {% endif %}
                                    
                                    <a href=\"{{ path('app_avis_reponses', {'id': avi.id}) }}\" class=\"btn btn-success\">View Responses</a>

                                    {% if app.user and app.user.role == 'client' and app.user.id == avi.user.id %}
                                        <form method=\"post\" action=\"{{ path('app_avis_delete', {'id': avi.id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this avis?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ avi.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                                        </form>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center\">No records found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {% if app.user and app.user.role == 'client' %}
        <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_avis_new') }}\" class=\"btn btn-create\">Create New Complaint</a>
        </div>
    {% endif %}

    <div class=\"pagination-container\">
        <ul class=\"pagination\">
            {{ knp_pagination_render(avis) }}
        </ul>
    </div>
</div>
{% endblock %}
", "avis/index.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\avis\\index.html.twig");
    }
}
