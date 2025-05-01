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
class __TwigTemplate_946f8836108dcc96f03641bc390d2239 extends Template
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
<style>
    .card-3d {
        background-color: #fff;
        border-radius: 0.75rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin: 1rem;
    }

    .header-3d {
        padding: 1.25rem;
        background: linear-gradient(135deg, #2D3748, #4A5568);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .header-3d h6 {
        font-size: 1.25rem;
        font-weight: 600;
        margin: 0;
        color: #fff;
    }

    .btn-add {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        font-weight: 700;
        text-transform: uppercase;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        background: transparent;
        border: 2px solid #fff;
        border-radius: 0.5rem;
        cursor: pointer;
        font-size: 0.75rem;
        color: #fff;
        text-decoration: none;
    }

    .btn-add:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
    }

    .table-3d {
        padding: 1rem;
    }

    table.dataTable tbody tr:hover {
        background-color: #f7fafc !important;
    }

    .bg-green-500 { background-color: #28a745; }
    .bg-yellow-500 { background-color: #ffc107; }
    .bg-red-500 { background-color: #dc3545; }

    .text-gray-500 { color: #696969; }
    .border-gray-300 { border-color: #98FB98; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
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

        // line 74
        yield "<div class=\"card-3d\">
    <div class=\"header-3d\">
        <h6>Responses for Complaint #";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "</h6>
        ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "roles", [], "any", false, false, false, 77)))) {
            // line 78
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new", ["avisId" => (isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 78, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn-add\">
                + New Response
            </a>
        ";
        }
        // line 82
        yield "    </div>

    <div class=\"table-3d overflow-x-auto\">
        <table class=\"w-full text-sm text-left\">
            <thead>
                <tr>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Comment</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Date</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Admin's Email</th>
                    ";
        // line 91
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "roles", [], "any", false, false, false, 91)))) {
            // line 92
            yield "                        <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Actions</th>
                    ";
        }
        // line 94
        yield "                </tr>
            </thead>
            <tbody>
                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 97, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 98
            yield "                    <tr class=\"border-b border-gray-200\">
                        <td class=\"px-6 py-3\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "commentaire", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-3\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 100), "Y-m-d"), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-3\">
                            ";
            // line 102
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 102), "username", [], "any", false, false, false, 102), "html", null, true)) : ("Unknown"));
            yield "
                        </td>
                        ";
            // line 104
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "roles", [], "any", false, false, false, 104)))) {
                // line 105
                yield "                            <td class=\"px-6 py-3 space-x-2 text-center\">
                                <a href=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                yield "\" 
                                   class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                   style=\"background: #00007d;\">
                                    Edit
                                </a>
                                <form method=\"post\" action=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 111)]), "html", null, true);
                yield "\" 
                                      class=\"inline-block\" 
                                      onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 114))), "html", null, true);
                yield "\">
                                    <button type=\"submit\"
                                            class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                            style=\"background: #b91c1c;\">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        ";
            }
            // line 123
            yield "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 124
        if (!$context['_iterated']) {
            // line 125
            yield "                    <tr>
                        <td colspan=\"";
            // line 126
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126), "roles", [], "any", false, false, false, 126)))) {
                yield "4";
            } else {
                yield "3";
            }
            yield "\" 
                            class=\"px-6 py-3 text-center text-gray-500\">
                            No responses found for this complaint.
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "            </tbody>
        </table>
    </div>

    <div class=\"text-center mt-4 mb-4\">
        <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\" 
           class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
           style=\"background: #696969;\">
            Back to complaints list
        </a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 146
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

        // line 147
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('table').DataTable({
            searching: false,
            info: false,
            paging: false,
            responsive: true,
            autoWidth: false
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
        return array (  351 => 147,  338 => 146,  319 => 137,  312 => 132,  296 => 126,  293 => 125,  291 => 124,  286 => 123,  274 => 114,  268 => 111,  260 => 106,  257 => 105,  255 => 104,  250 => 102,  245 => 100,  241 => 99,  238 => 98,  233 => 97,  228 => 94,  224 => 92,  222 => 91,  211 => 82,  203 => 78,  201 => 77,  197 => 76,  193 => 74,  180 => 73,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Responses for complaints {{ avis_id }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
<style>
    .card-3d {
        background-color: #fff;
        border-radius: 0.75rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin: 1rem;
    }

    .header-3d {
        padding: 1.25rem;
        background: linear-gradient(135deg, #2D3748, #4A5568);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .header-3d h6 {
        font-size: 1.25rem;
        font-weight: 600;
        margin: 0;
        color: #fff;
    }

    .btn-add {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        font-weight: 700;
        text-transform: uppercase;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        background: transparent;
        border: 2px solid #fff;
        border-radius: 0.5rem;
        cursor: pointer;
        font-size: 0.75rem;
        color: #fff;
        text-decoration: none;
    }

    .btn-add:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
    }

    .table-3d {
        padding: 1rem;
    }

    table.dataTable tbody tr:hover {
        background-color: #f7fafc !important;
    }

    .bg-green-500 { background-color: #28a745; }
    .bg-yellow-500 { background-color: #ffc107; }
    .bg-red-500 { background-color: #dc3545; }

    .text-gray-500 { color: #696969; }
    .border-gray-300 { border-color: #98FB98; }
</style>
{% endblock %}

{% block body %}
<div class=\"card-3d\">
    <div class=\"header-3d\">
        <h6>Responses for Complaint #{{ avis_id }}</h6>
        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
            <a href=\"{{ path('app_reponse_new', {'avisId': avis_id}) }}\" class=\"btn-add\">
                + New Response
            </a>
        {% endif %}
    </div>

    <div class=\"table-3d overflow-x-auto\">
        <table class=\"w-full text-sm text-left\">
            <thead>
                <tr>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Comment</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Date</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Admin's Email</th>
                    {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                        <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Actions</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
                {% for reponse in reponses %}
                    <tr class=\"border-b border-gray-200\">
                        <td class=\"px-6 py-3\">{{ reponse.commentaire }}</td>
                        <td class=\"px-6 py-3\">{{ reponse.dateReponse|date('Y-m-d') }}</td>
                        <td class=\"px-6 py-3\">
                            {{ reponse.user ? reponse.user.username : 'Unknown' }}
                        </td>
                        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                            <td class=\"px-6 py-3 space-x-2 text-center\">
                                <a href=\"{{ path('app_reponse_edit', {'id': reponse.id}) }}\" 
                                   class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                   style=\"background: #00007d;\">
                                    Edit
                                </a>
                                <form method=\"post\" action=\"{{ path('app_reponse_delete', {'id': reponse.id}) }}\" 
                                      class=\"inline-block\" 
                                      onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reponse.id) }}\">
                                    <button type=\"submit\"
                                            class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                            style=\"background: #b91c1c;\">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        {% endif %}
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"{% if app.user and 'ROLE_ADMIN' in app.user.roles %}4{% else %}3{% endif %}\" 
                            class=\"px-6 py-3 text-center text-gray-500\">
                            No responses found for this complaint.
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"text-center mt-4 mb-4\">
        <a href=\"{{ path('app_avis_index') }}\" 
           class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
           style=\"background: #696969;\">
            Back to complaints list
        </a>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('table').DataTable({
            searching: false,
            info: false,
            paging: false,
            responsive: true,
            autoWidth: false
        });
    });
</script>
{% endblock %}", "avis/reponses.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\avis\\reponses.html.twig");
    }
}
