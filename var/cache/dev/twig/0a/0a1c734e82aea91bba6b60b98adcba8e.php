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
class __TwigTemplate_dcf1140d25d6518581716a9f513f890d extends Template
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

        yield "Avis";
        
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
    .container {
        font-family: 'Arial', sans-serif;
    }

    table {
        background-color: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
    }

    th {
        background-color: #f8f9fa;
        color: #6c757d;
        font-size: 14px;
        padding: 12px;
    }

    td {
        padding: 14px;
        font-size: 15px;
        color: #495057;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    a {
        margin-right: 10px;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .text-blue-600:hover {
        color: #0056b3;
    }

    .text-center {
        font-size: 16px;
        color: #999;
    }

    .btn-create {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .btn-create:hover {
        background-color: #0056b3;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
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

        // line 71
        yield "<div style=\"margin-left: 280px;\">
    <div class=\"container mx-auto p-6\">
        <!-- Avis Table -->
        <div class=\"flex flex-wrap -mx-3\">
            <div class=\"flex-none w-full max-w-full px-3\">
                <div class=\"relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border\">
                    <div class=\"p-6 pb-0 mb-0 border-b-0 rounded-t-2xl\">
                        <h6 class=\"dark:text-white\">Avis Index</h6>
                    </div>
                    <div class=\"flex-auto px-0 pt-0 pb-2\">
                        <div class=\"p-0 overflow-x-auto\">
                            <table class=\"items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500\">
                                <thead class=\"align-bottom\">
                                    <tr>
                                        <th>Note</th>
                                        <th>Commentaire</th>
                                        <th>Date Avis</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 92, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 93
            yield "                                        <tr>
                                            <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "note", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                                            <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 95), "html", null, true);
            yield "</td>
                                            <td>";
            // line 96
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 96)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 96), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                                            <td>
                                                <a href=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\" class=\"text-xs font-semibold text-slate-400 dark:text-white dark:opacity-80\">Show</a>
                                                <a href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\" class=\"text-xs font-semibold text-slate-400 dark:text-white dark:opacity-80\">Edit</a>
                                                <a href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_reponses", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\" class=\"text-xs font-semibold text-blue-600 dark:text-blue-400\">View Responses</a>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 103
        if (!$context['_iterated']) {
            // line 104
            yield "                                        <tr>
                                            <td colspan=\"4\" class=\"text-center p-4\">No records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new");
        yield "\" class=\"btn-create\">Create New</a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 120
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
        return array (  283 => 120,  266 => 113,  259 => 108,  250 => 104,  248 => 103,  240 => 100,  236 => 99,  232 => 98,  227 => 96,  223 => 95,  219 => 94,  216 => 93,  211 => 92,  188 => 71,  175 => 70,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Avis{% endblock %}

{% block stylesheets %}
<style>
    .container {
        font-family: 'Arial', sans-serif;
    }

    table {
        background-color: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
    }

    th {
        background-color: #f8f9fa;
        color: #6c757d;
        font-size: 14px;
        padding: 12px;
    }

    td {
        padding: 14px;
        font-size: 15px;
        color: #495057;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    a {
        margin-right: 10px;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .text-blue-600:hover {
        color: #0056b3;
    }

    .text-center {
        font-size: 16px;
        color: #999;
    }

    .btn-create {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .btn-create:hover {
        background-color: #0056b3;
    }
</style>
{% endblock %}

{% block body %}
<div style=\"margin-left: 280px;\">
    <div class=\"container mx-auto p-6\">
        <!-- Avis Table -->
        <div class=\"flex flex-wrap -mx-3\">
            <div class=\"flex-none w-full max-w-full px-3\">
                <div class=\"relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border\">
                    <div class=\"p-6 pb-0 mb-0 border-b-0 rounded-t-2xl\">
                        <h6 class=\"dark:text-white\">Avis Index</h6>
                    </div>
                    <div class=\"flex-auto px-0 pt-0 pb-2\">
                        <div class=\"p-0 overflow-x-auto\">
                            <table class=\"items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500\">
                                <thead class=\"align-bottom\">
                                    <tr>
                                        <th>Note</th>
                                        <th>Commentaire</th>
                                        <th>Date Avis</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for avi in avis %}
                                        <tr>
                                            <td>{{ avi.note }}</td>
                                            <td>{{ avi.commentaire }}</td>
                                            <td>{{ avi.dateAvis ? avi.dateAvis|date('Y-m-d') : '' }}</td>
                                            <td>
                                                <a href=\"{{ path('app_avis_show', {'id': avi.id}) }}\" class=\"text-xs font-semibold text-slate-400 dark:text-white dark:opacity-80\">Show</a>
                                                <a href=\"{{ path('app_avis_edit', {'id': avi.id}) }}\" class=\"text-xs font-semibold text-slate-400 dark:text-white dark:opacity-80\">Edit</a>
                                                <a href=\"{{ path('app_avis_reponses', {'id': avi.id}) }}\" class=\"text-xs font-semibold text-blue-600 dark:text-blue-400\">View Responses</a>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"4\" class=\"text-center p-4\">No records found</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href=\"{{ path('app_avis_new') }}\" class=\"btn-create\">Create New</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{# You can add JavaScript here if needed later #}
{% endblock %}
", "avis/index.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\avis\\index.html.twig");
    }
}
