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

/* avis/reponses.html.twig */
class __TwigTemplate_9e7033fabeefe2f24693ed496ce3c9f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/reponses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/reponses.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/reponses.html.twig", 1);
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

        yield "Responses for complaints ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
    .container { width: 100%; max-width: 1200px; margin: 0 auto; }
    
    .text-2xl { font-size: 1.5rem; }
    .font-bold { font-weight: bold; }
    .text-center { text-align: center; }
    .mb-6 { margin-bottom: 1.5rem; }
    .mb-4 { margin-bottom: 1rem; }
    .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
    .px-4 { padding-left: 1rem; padding-right: 1rem; }
    .rounded { border-radius: 5px; }

    /* Custom button styles */
    .bg-blue-500 { background-color: #87CEEB; }
    .bg-blue-700 { background-color: #4682B4; }
    .bg-blue-500:hover { background-color: #4682B4; }
    .bg-yellow-500 { background-color: #FFD700; }
    .bg-yellow-600 { background-color: #FFCC00; }
    .bg-red-500 { background-color: #DC3545; }
    .bg-red-600 { background-color: #C82333; }
    .bg-gray-500 { background-color: #696969; }
    .bg-gray-700 { background-color: #404040; }

    .text-black { color: #000000; }
    .text-gray-500 { color: #696969; }
    .text-black:hover { color: #ffffff; }

    /* Table styling */
    .overflow-x-auto { overflow-x: auto; }
    .min-w-full { width: 100%; }
    .bg-white { background-color: #ffffff; }
    .border-gray-300 { border-color: #98FB98; }
    .rounded-lg { border-radius: 0.5rem; }
    .py-3 { padding-top: 0.75rem; padding-bottom: 0.75rem; }
    .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
    .border-b { border-bottom: 1px solid #98FB98; }
    .text-left { text-align: left; }
    .text-center { text-align: center; }
    
    .hover\\:bg-gray-50:hover { background-color: #f9f9f9; }
    .shadow-md { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }

    thead {
        background-color: #87CEEB;
        color: #696969;
    }

    tbody td {
        color: #696969;
    }

    .mt-2 { margin-top: 0.5rem; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
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

        // line 62
        yield "<div style=\"margin-left: 280px;\">
    <div class=\"container mx-auto p-6\">
        <h1 class=\"text-2xl font-bold text-center mb-6\">Responses for complaints</h1>

        ";
        // line 66
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "roles", [], "any", false, false, false, 66)))) {
            // line 67
            yield "            <div class=\"flex justify-end mb-4\">
                <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new", ["avisId" => (isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 68, $this->source); })())]), "html", null, true);
            yield "\" 
                   class=\"bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded\">
                    Create New Response
                </a>
            </div>
        ";
        }
        // line 74
        yield "
        <div class=\"overflow-x-auto\">
            <table class=\"min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden\">
                <thead>
                    <tr>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">Comment</th>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">Date</th>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">Admin's email</th>
                        ";
        // line 82
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "roles", [], "any", false, false, false, 82)))) {
            // line 83
            yield "                            <th class=\"text-center py-3 px-6 border-b border-gray-300\">Actions</th>
                        ";
        }
        // line 85
        yield "                    </tr>
                </thead>
                <tbody>
                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 88, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 89
            yield "                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"py-3 px-6 border-b border-gray-300\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "commentaire", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
                            <td class=\"py-3 px-6 border-b border-gray-300\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 91), "Y-m-d"), "html", null, true);
            yield "</td>
                            <td class=\"py-3 px-6 border-b border-gray-300\">
                                ";
            // line 93
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 93)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 93), "username", [], "any", false, false, false, 93), "html", null, true)) : ("Unknown"));
            yield "
                            </td>
                            ";
            // line 95
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "roles", [], "any", false, false, false, 95)))) {
                // line 96
                yield "                                <td class=\"py-3 px-6 border-b border-gray-300 text-center\">
                                    <a href=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                yield "\" 
                                       class=\"bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-2 px-4 rounded-lg shadow-md\">
                                        Edit
                                    </a>
                                    <form method=\"post\" action=\"";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                yield "\" 
                                          class=\"inline-block\" 
                                          onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 104))), "html", null, true);
                yield "\">
                                        <button type=\"submit\"
                                                class=\"bg-red-500 hover:bg-red-600 text-black font-semibold py-2 px-4 rounded-lg shadow-md mt-2\">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            ";
            }
            // line 112
            yield "                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 113
        if (!$context['_iterated']) {
            // line 114
            yield "                        <tr>
                            <td colspan=\"";
            // line 115
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115), "roles", [], "any", false, false, false, 115)))) {
                yield "4";
            } else {
                yield "3";
            }
            yield "\" class=\"text-center py-4 text-gray-500\">
                                No responses found for this complaint.
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "                </tbody>
            </table>
        </div>

        <div class=\"text-center mt-6\">
            <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\" 
               class=\"bg-gray-500 hover:bg-gray-700 text-black font-bold py-2 px-4 rounded\">
                Back to complaints list
            </a>
        </div>
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
        return "avis/reponses.html.twig";
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
        return array (  303 => 125,  296 => 120,  281 => 115,  278 => 114,  276 => 113,  271 => 112,  260 => 104,  254 => 101,  247 => 97,  244 => 96,  242 => 95,  237 => 93,  232 => 91,  228 => 90,  225 => 89,  220 => 88,  215 => 85,  211 => 83,  209 => 82,  199 => 74,  190 => 68,  187 => 67,  185 => 66,  179 => 62,  166 => 61,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Responses for complaints {{ avis_id }}{% endblock %}

{% block stylesheets %}
<style>
    .container { width: 100%; max-width: 1200px; margin: 0 auto; }
    
    .text-2xl { font-size: 1.5rem; }
    .font-bold { font-weight: bold; }
    .text-center { text-align: center; }
    .mb-6 { margin-bottom: 1.5rem; }
    .mb-4 { margin-bottom: 1rem; }
    .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
    .px-4 { padding-left: 1rem; padding-right: 1rem; }
    .rounded { border-radius: 5px; }

    /* Custom button styles */
    .bg-blue-500 { background-color: #87CEEB; }
    .bg-blue-700 { background-color: #4682B4; }
    .bg-blue-500:hover { background-color: #4682B4; }
    .bg-yellow-500 { background-color: #FFD700; }
    .bg-yellow-600 { background-color: #FFCC00; }
    .bg-red-500 { background-color: #DC3545; }
    .bg-red-600 { background-color: #C82333; }
    .bg-gray-500 { background-color: #696969; }
    .bg-gray-700 { background-color: #404040; }

    .text-black { color: #000000; }
    .text-gray-500 { color: #696969; }
    .text-black:hover { color: #ffffff; }

    /* Table styling */
    .overflow-x-auto { overflow-x: auto; }
    .min-w-full { width: 100%; }
    .bg-white { background-color: #ffffff; }
    .border-gray-300 { border-color: #98FB98; }
    .rounded-lg { border-radius: 0.5rem; }
    .py-3 { padding-top: 0.75rem; padding-bottom: 0.75rem; }
    .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
    .border-b { border-bottom: 1px solid #98FB98; }
    .text-left { text-align: left; }
    .text-center { text-align: center; }
    
    .hover\\:bg-gray-50:hover { background-color: #f9f9f9; }
    .shadow-md { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }

    thead {
        background-color: #87CEEB;
        color: #696969;
    }

    tbody td {
        color: #696969;
    }

    .mt-2 { margin-top: 0.5rem; }
</style>
{% endblock %}

{% block body %}
<div style=\"margin-left: 280px;\">
    <div class=\"container mx-auto p-6\">
        <h1 class=\"text-2xl font-bold text-center mb-6\">Responses for complaints</h1>

        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
            <div class=\"flex justify-end mb-4\">
                <a href=\"{{ path('app_reponse_new', {'avisId': avis_id}) }}\" 
                   class=\"bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded\">
                    Create New Response
                </a>
            </div>
        {% endif %}

        <div class=\"overflow-x-auto\">
            <table class=\"min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden\">
                <thead>
                    <tr>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">Comment</th>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">Date</th>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">Admin's email</th>
                        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                            <th class=\"text-center py-3 px-6 border-b border-gray-300\">Actions</th>
                        {% endif %}
                    </tr>
                </thead>
                <tbody>
                    {% for reponse in reponses %}
                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"py-3 px-6 border-b border-gray-300\">{{ reponse.commentaire }}</td>
                            <td class=\"py-3 px-6 border-b border-gray-300\">{{ reponse.dateReponse|date('Y-m-d') }}</td>
                            <td class=\"py-3 px-6 border-b border-gray-300\">
                                {{ reponse.user ? reponse.user.username : 'Unknown' }}
                            </td>
                            {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                                <td class=\"py-3 px-6 border-b border-gray-300 text-center\">
                                    <a href=\"{{ path('app_reponse_edit', {'id': reponse.id}) }}\" 
                                       class=\"bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-2 px-4 rounded-lg shadow-md\">
                                        Edit
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_reponse_delete', {'id': reponse.id}) }}\" 
                                          class=\"inline-block\" 
                                          onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reponse.id) }}\">
                                        <button type=\"submit\"
                                                class=\"bg-red-500 hover:bg-red-600 text-black font-semibold py-2 px-4 rounded-lg shadow-md mt-2\">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            {% endif %}
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"{% if app.user and 'ROLE_ADMIN' in app.user.roles %}4{% else %}3{% endif %}\" class=\"text-center py-4 text-gray-500\">
                                No responses found for this complaint.
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"text-center mt-6\">
            <a href=\"{{ path('app_avis_index') }}\" 
               class=\"bg-gray-500 hover:bg-gray-700 text-black font-bold py-2 px-4 rounded\">
                Back to complaints list
            </a>
        </div>
    </div>
</div>
{% endblock %}
", "avis/reponses.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\avis\\reponses.html.twig");
    }
}
