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

/* front_office/Avis/index.html.twig */
class __TwigTemplate_79792e3e90f4439062657199223a3c68 extends Template
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
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/index.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "front_office/Avis/index.html.twig", 1);
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
<style>
    .course-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }
    
    .card-3d {
        background-color: #fff;
        border-radius: 0.75rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        margin-bottom: 1.5rem;
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
        border-radius: 0.75rem 0.75rem 0 0;
    }

    .btn-primary {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        font-weight: 700;
        text-transform: uppercase;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        background: linear-gradient(135deg, #06B6D4, #0284C7);
        border: none;
        border-radius: 0.5rem;
        cursor: pointer;
        font-size: 0.875rem;
        color: #fff;
        text-decoration: none;
    }

    .btn-primary:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
    }

    .status-badge {
        text-transform: uppercase;
        font-size: 0.75rem;
        font-weight: bold;
        border-radius: 0.25rem;
        padding: 0.25rem 0.5rem;
        text-align: center;
    }

    .status-processed { background-color: #10B981; color: #fff; }
    .status-pending { background-color: #FACC15; color: #1F2937; }
    .status-na { background-color: #EF4444; color: #fff; }

    .search-form input {
        padding: 0.5rem 1rem;
        border: 2px solid #fff;
        border-radius: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
    }

    table.dataTable {
        width: 100% !important;
        margin: 1rem 0 !important;
        border-collapse: collapse;
    }

    table.dataTable thead th {
        padding: 1rem;
        background-color: #F8FAFC;
        text-transform: uppercase;
        font-size: 0.75rem;
        color: #6B7280;
    }

    table.dataTable tbody td {
        padding: 1rem;
        border-bottom: 1px solid #E5E7EB;
    }

    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .btn-edit {
        background: linear-gradient(135deg, #00007d, #1E40AF);
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        font-size: 0.75rem;
        font-weight: 600;
        text-decoration: none;
    }

    .btn-responses {
        background: linear-gradient(135deg, #28a745, #10B981);
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        font-size: 0.75rem;
        font-weight: 600;
        text-decoration: none;
    }

    .btn-delete {
        background: linear-gradient(135deg, #b91c1c, #EF4444);
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        font-size: 0.75rem;
        font-weight: 600;
        border: none;
        cursor: pointer;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 134
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

        // line 135
        yield "<div class=\"course-container\">
    <div class=\"card-3d\">
        <div class=\"header-3d\">
            <h2>Complaints Management</h2>
            <div class=\"flex items-center gap-2\">
                <form method=\"get\" action=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\" class=\"search-form\">
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 141, $this->source); })()), "html", null, true);
        yield "\" 
                           placeholder=\"Search complaints...\" class=\"mr-2\">
                    <button type=\"submit\" class=\"btn-primary\">Search</button>
                </form>
                ";
        // line 145
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "role", [], "any", false, false, false, 145) == "client"))) {
            // line 146
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new_front");
            yield "\" class=\"btn-primary\">+ New Complaint</a>
                ";
        }
        // line 148
        yield "            </div>
        </div>

        <div style=\"padding: 1.5rem;\">
            <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th class=\"text-center\">Status</th>
                        <th>Taxi Registration</th>
                        <th>Vehicle License</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 165, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 166
            yield "                        <tr>
                            <td>";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "type", [], "any", false, false, false, 167), "html", null, true);
            yield "</td>
                            <td>";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 168), "html", null, true);
            yield "</td>
                            <td>";
            // line 169
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 169)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 169), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                            <td class=\"text-center\">
                                <span class=\"status-badge 
                                    ";
            // line 172
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "statut", [], "any", false, false, false, 172) == "processed")) {
                yield "status-processed
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 173
$context["avi"], "statut", [], "any", false, false, false, 173) == "not processed")) {
                yield "status-pending
                                    ";
            } else {
                // line 174
                yield "status-na";
            }
            yield "\">
                                    ";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "statut", [], "any", false, false, false, 175)), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>";
            // line 178
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 178)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 178), "immatriculation", [], "any", false, false, false, 178), "html", null, true)) : ("N/A"));
            yield "</td>
                            <td>";
            // line 179
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "vehicle", [], "any", false, false, false, 179)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "vehicle", [], "any", false, false, false, 179), "licensePlate", [], "any", false, false, false, 179), "html", null, true)) : ("N/A"));
            yield "</td>
                            <td>
                                <div class=\"action-buttons\">
                                    ";
            // line 182
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "user", [], "any", false, false, false, 182) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "user", [], "any", false, false, false, 182), "id", [], "any", false, false, false, 182) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "user", [], "any", false, false, false, 182), "id", [], "any", false, false, false, 182)))) {
                // line 183
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 183)]), "html", null, true);
                yield "\" class=\"btn-edit\">
                                            Edit
                                        </a>
                                    ";
            }
            // line 187
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_reponsess", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 187)]), "html", null, true);
            yield "\" class=\"btn-responses\">
                                        Responses
                                    </a>
                                    ";
            // line 190
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190), "role", [], "any", false, false, false, 190) == "client")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190), "id", [], "any", false, false, false, 190) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "user", [], "any", false, false, false, 190), "id", [], "any", false, false, false, 190)))) {
                // line 191
                yield "                                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 191)]), "html", null, true);
                yield "\" class=\"inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 192))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn-delete\" onclick=\"return confirm('Are you sure?')\">
                                                Delete
                                            </button>
                                        </form>
                                    ";
            }
            // line 198
            yield "                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 201
        if (!$context['_iterated']) {
            // line 202
            yield "                        <tr>
                            <td colspan=\"7\" class=\"text-center py-4 text-gray-500\">No complaints found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"card-3d\" style=\"margin-top: 1.5rem;\">
        
        <div style=\"padding: 1.5rem;\">
            ";
        // line 214
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 214, $this->source); })()));
        yield "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 220
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

        // line 221
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#datatable-search').DataTable({
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
        return "front_office/Avis/index.html.twig";
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
        return array (  440 => 221,  427 => 220,  411 => 214,  401 => 206,  392 => 202,  390 => 201,  383 => 198,  374 => 192,  369 => 191,  367 => 190,  360 => 187,  352 => 183,  350 => 182,  344 => 179,  340 => 178,  334 => 175,  329 => 174,  324 => 173,  320 => 172,  314 => 169,  310 => 168,  306 => 167,  303 => 166,  298 => 165,  279 => 148,  273 => 146,  271 => 145,  264 => 141,  260 => 140,  253 => 135,  240 => 134,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Complaints{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
<style>
    .course-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }
    
    .card-3d {
        background-color: #fff;
        border-radius: 0.75rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        margin-bottom: 1.5rem;
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
        border-radius: 0.75rem 0.75rem 0 0;
    }

    .btn-primary {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        font-weight: 700;
        text-transform: uppercase;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        background: linear-gradient(135deg, #06B6D4, #0284C7);
        border: none;
        border-radius: 0.5rem;
        cursor: pointer;
        font-size: 0.875rem;
        color: #fff;
        text-decoration: none;
    }

    .btn-primary:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
    }

    .status-badge {
        text-transform: uppercase;
        font-size: 0.75rem;
        font-weight: bold;
        border-radius: 0.25rem;
        padding: 0.25rem 0.5rem;
        text-align: center;
    }

    .status-processed { background-color: #10B981; color: #fff; }
    .status-pending { background-color: #FACC15; color: #1F2937; }
    .status-na { background-color: #EF4444; color: #fff; }

    .search-form input {
        padding: 0.5rem 1rem;
        border: 2px solid #fff;
        border-radius: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
    }

    table.dataTable {
        width: 100% !important;
        margin: 1rem 0 !important;
        border-collapse: collapse;
    }

    table.dataTable thead th {
        padding: 1rem;
        background-color: #F8FAFC;
        text-transform: uppercase;
        font-size: 0.75rem;
        color: #6B7280;
    }

    table.dataTable tbody td {
        padding: 1rem;
        border-bottom: 1px solid #E5E7EB;
    }

    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .btn-edit {
        background: linear-gradient(135deg, #00007d, #1E40AF);
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        font-size: 0.75rem;
        font-weight: 600;
        text-decoration: none;
    }

    .btn-responses {
        background: linear-gradient(135deg, #28a745, #10B981);
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        font-size: 0.75rem;
        font-weight: 600;
        text-decoration: none;
    }

    .btn-delete {
        background: linear-gradient(135deg, #b91c1c, #EF4444);
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        font-size: 0.75rem;
        font-weight: 600;
        border: none;
        cursor: pointer;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"course-container\">
    <div class=\"card-3d\">
        <div class=\"header-3d\">
            <h2>Complaints Management</h2>
            <div class=\"flex items-center gap-2\">
                <form method=\"get\" action=\"{{ path('app_avis_index') }}\" class=\"search-form\">
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" 
                           placeholder=\"Search complaints...\" class=\"mr-2\">
                    <button type=\"submit\" class=\"btn-primary\">Search</button>
                </form>
                {% if app.user and app.user.role == 'client' %}
                    <a href=\"{{ path('app_avis_new_front') }}\" class=\"btn-primary\">+ New Complaint</a>
                {% endif %}
            </div>
        </div>

        <div style=\"padding: 1.5rem;\">
            <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th class=\"text-center\">Status</th>
                        <th>Taxi Registration</th>
                        <th>Vehicle License</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for avi in avis %}
                        <tr>
                            <td>{{ avi.type }}</td>
                            <td>{{ avi.commentaire }}</td>
                            <td>{{ avi.dateAvis ? avi.dateAvis|date('Y-m-d') : '' }}</td>
                            <td class=\"text-center\">
                                <span class=\"status-badge 
                                    {% if avi.statut == 'processed' %}status-processed
                                    {% elseif avi.statut == 'not processed' %}status-pending
                                    {% else %}status-na{% endif %}\">
                                    {{ avi.statut|capitalize }}
                                </span>
                            </td>
                            <td>{{ avi.taxi ? avi.taxi.immatriculation : 'N/A' }}</td>
                            <td>{{ avi.vehicle ? avi.vehicle.licensePlate : 'N/A' }}</td>
                            <td>
                                <div class=\"action-buttons\">
                                    {% if app.user and app.user.id == avi.user.id %}
                                        <a href=\"{{ path('app_avis_edit', {'id': avi.id}) }}\" class=\"btn-edit\">
                                            Edit
                                        </a>
                                    {% endif %}
                                    <a href=\"{{ path('app_avis_reponsess', {'id': avi.id}) }}\" class=\"btn-responses\">
                                        Responses
                                    </a>
                                    {% if app.user and app.user.role == 'client' and app.user.id == avi.user.id %}
                                        <form method=\"post\" action=\"{{ path('app_avis_delete', {'id': avi.id}) }}\" class=\"inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ avi.id) }}\">
                                            <button type=\"submit\" class=\"btn-delete\" onclick=\"return confirm('Are you sure?')\">
                                                Delete
                                            </button>
                                        </form>
                                    {% endif %}
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\" class=\"text-center py-4 text-gray-500\">No complaints found</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"card-3d\" style=\"margin-top: 1.5rem;\">
        
        <div style=\"padding: 1.5rem;\">
            {{ knp_pagination_render(avis) }}
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#datatable-search').DataTable({
            searching: false,
            info: false,
            paging: false,
            responsive: true,
            autoWidth: false
        });
    });
</script>
{% endblock %}", "front_office/Avis/index.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\front_office\\Avis\\index.html.twig");
    }
}
