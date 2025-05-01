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
class __TwigTemplate_5c2cac34edfa436b138c0cebe4171e8a extends Template
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
        color: #fff; /* Added explicit white color */
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
    
    .search-form input {
        padding: 0.5rem 1rem;
        border: 2px solid #fff;
        border-radius: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
    }

    .search-form input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
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

        // line 83
        yield "<div class=\"card-3d\">
    <div class=\"header-3d\">
        <h6>Complaints Management</h6>
        <div class=\"flex items-center gap-2\">
            <form method=\"get\" action=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\" class=\"search-form\">
                <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 88, $this->source); })()), "html", null, true);
        yield "\" 
                       placeholder=\"Search complaints...\" class=\"mr-2\">
                <button type=\"submit\" class=\"btn-add\">Search</button>
            </form>
            ";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "role", [], "any", false, false, false, 92) == "client"))) {
            // line 93
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new");
            yield "\" class=\"btn-add\">+ New Complaint</a>
            ";
        }
        // line 95
        yield "        </div>
    </div>

    <div class=\"table-3d overflow-x-auto\">
        <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
            <thead>
                <tr>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Type</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Description</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Date</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Status</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Taxi Registration</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Vehicle License</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 112, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 113
            yield "                    <tr class=\"border-b border-gray-200\">
                        <td class=\"px-6 py-3\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "type", [], "any", false, false, false, 114), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-3\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 115), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-3\">";
            // line 116
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 116)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 116), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td class=\"px-6 py-3 text-center\">
                            ";
            // line 118
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "statut", [], "any", false, false, false, 118) == "processed")) {
                // line 119
                yield "                                <span class=\"bg-green-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                                    Processed
                                </span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 122
$context["avi"], "statut", [], "any", false, false, false, 122) == "not processed")) {
                // line 123
                yield "                                <span class=\"bg-yellow-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                                    Pending
                                </span>
                            ";
            } else {
                // line 127
                yield "                                <span class=\"bg-red-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                                    N/A
                                </span>
                            ";
            }
            // line 131
            yield "                        </td>
                        <td class=\"px-6 py-3\">
                            ";
            // line 133
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 133) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133))) {
                // line 134
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 134), "immatriculation", [], "any", false, false, false, 134), "html", null, true);
                yield "
                            ";
            } else {
                // line 136
                yield "                                N/A
                            ";
            }
            // line 138
            yield "                        </td>
                        <td class=\"px-6 py-3\">
                            ";
            // line 140
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "vehicle", [], "any", false, false, false, 140) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "vehicle", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140))) {
                // line 141
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "vehicle", [], "any", false, false, false, 141), "licensePlate", [], "any", false, false, false, 141), "html", null, true);
                yield "
                            ";
            } else {
                // line 143
                yield "                                N/A
                            ";
            }
            // line 145
            yield "                        </td>
                        <td class=\"px-6 py-3 space-x-2\">
                            ";
            // line 147
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "user", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147)))) {
                // line 148
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                yield "\" 
                                   class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                   style=\"background: #00007d;\">
                                    Edit
                                </a>
                            ";
            }
            // line 154
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_reponses", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 154)]), "html", null, true);
            yield "\" 
                               class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                               style=\"background: #28a745;\">
                                Responses
                            </a>
                            ";
            // line 159
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "role", [], "any", false, false, false, 159) == "client")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "user", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159)))) {
                // line 160
                yield "                                <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 160)]), "html", null, true);
                yield "\" class=\"inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 161))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" 
                                            class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                            style=\"background: #b91c1c;\"
                                            onclick=\"return confirm('Are you sure?')\">
                                        Delete
                                    </button>
                                </form>
                            ";
            }
            // line 170
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 172
        if (!$context['_iterated']) {
            // line 173
            yield "                    <tr>
                        <td colspan=\"7\" class=\"px-6 py-3 text-center text-gray-500\">No complaints found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "            </tbody>
        </table>
    </div>
</div>

<div class=\"pagination-container mt-4\">
    ";
        // line 183
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 183, $this->source); })()));
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 187
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

        // line 188
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
        return array (  415 => 188,  402 => 187,  388 => 183,  380 => 177,  371 => 173,  369 => 172,  363 => 170,  351 => 161,  346 => 160,  344 => 159,  335 => 154,  325 => 148,  323 => 147,  319 => 145,  315 => 143,  309 => 141,  307 => 140,  303 => 138,  299 => 136,  293 => 134,  291 => 133,  287 => 131,  281 => 127,  275 => 123,  273 => 122,  268 => 119,  266 => 118,  261 => 116,  257 => 115,  253 => 114,  250 => 113,  245 => 112,  226 => 95,  220 => 93,  218 => 92,  211 => 88,  207 => 87,  201 => 83,  188 => 82,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Complaints{% endblock %}

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
        color: #fff; /* Added explicit white color */
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
    
    .search-form input {
        padding: 0.5rem 1rem;
        border: 2px solid #fff;
        border-radius: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
    }

    .search-form input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"card-3d\">
    <div class=\"header-3d\">
        <h6>Complaints Management</h6>
        <div class=\"flex items-center gap-2\">
            <form method=\"get\" action=\"{{ path('app_avis_index') }}\" class=\"search-form\">
                <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" 
                       placeholder=\"Search complaints...\" class=\"mr-2\">
                <button type=\"submit\" class=\"btn-add\">Search</button>
            </form>
            {% if app.user and app.user.role == 'client' %}
                <a href=\"{{ path('app_avis_new') }}\" class=\"btn-add\">+ New Complaint</a>
            {% endif %}
        </div>
    </div>

    <div class=\"table-3d overflow-x-auto\">
        <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
            <thead>
                <tr>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Type</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Description</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Date</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Status</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Taxi Registration</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Vehicle License</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for avi in avis %}
                    <tr class=\"border-b border-gray-200\">
                        <td class=\"px-6 py-3\">{{ avi.type }}</td>
                        <td class=\"px-6 py-3\">{{ avi.commentaire }}</td>
                        <td class=\"px-6 py-3\">{{ avi.dateAvis ? avi.dateAvis|date('Y-m-d') : '' }}</td>
                        <td class=\"px-6 py-3 text-center\">
                            {% if avi.statut == 'processed' %}
                                <span class=\"bg-green-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                                    Processed
                                </span>
                            {% elseif avi.statut == 'not processed' %}
                                <span class=\"bg-yellow-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                                    Pending
                                </span>
                            {% else %}
                                <span class=\"bg-red-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                                    N/A
                                </span>
                            {% endif %}
                        </td>
                        <td class=\"px-6 py-3\">
                            {% if avi.taxi and avi.taxi.id %}
                                {{ avi.taxi.immatriculation }}
                            {% else %}
                                N/A
                            {% endif %}
                        </td>
                        <td class=\"px-6 py-3\">
                            {% if avi.vehicle and avi.vehicle.id %}
                                {{ avi.vehicle.licensePlate }}
                            {% else %}
                                N/A
                            {% endif %}
                        </td>
                        <td class=\"px-6 py-3 space-x-2\">
                            {% if app.user and app.user.id == avi.user.id %}
                                <a href=\"{{ path('app_avis_edit', {'id': avi.id}) }}\" 
                                   class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                   style=\"background: #00007d;\">
                                    Edit
                                </a>
                            {% endif %}
                            <a href=\"{{ path('app_avis_reponses', {'id': avi.id}) }}\" 
                               class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                               style=\"background: #28a745;\">
                                Responses
                            </a>
                            {% if app.user and app.user.role == 'client' and app.user.id == avi.user.id %}
                                <form method=\"post\" action=\"{{ path('app_avis_delete', {'id': avi.id}) }}\" class=\"inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ avi.id) }}\">
                                    <button type=\"submit\" 
                                            class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                            style=\"background: #b91c1c;\"
                                            onclick=\"return confirm('Are you sure?')\">
                                        Delete
                                    </button>
                                </form>
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"px-6 py-3 text-center text-gray-500\">No complaints found</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

<div class=\"pagination-container mt-4\">
    {{ knp_pagination_render(avis) }}
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
{% endblock %}", "avis/index.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\avis\\index.html.twig");
    }
}
