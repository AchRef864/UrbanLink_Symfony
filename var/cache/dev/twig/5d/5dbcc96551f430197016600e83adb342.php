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

/* front_office/Avis/reponses.html.twig */
class __TwigTemplate_301bb9c8be64c977a008f34ce0576df4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/reponses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/reponses.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "front_office/Avis/reponses.html.twig", 1);
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

        yield "Responses for complaints";
        
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
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
    ";
        // line 10
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    <style>
        .rate-container { display: inline-block; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "<div class=\"card-3d\">
    <div class=\"header-3d\">
        <h6>Responses for Complaint #";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</h6>
        ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20)))) {
            // line 21
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new", ["avisId" => (isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 21, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn-add\">+ New Response</a>
        ";
        }
        // line 23
        yield "    </div>

    <div class=\"table-3d overflow-x-auto\">
        <table id=\"reponses-table\">
            <thead>
                <tr>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>Admin's Email</th>
                    <th>Rating</th>
                    ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "roles", [], "any", false, false, false, 33)))) {
            // line 34
            yield "                        <th>Actions</th>
                    ";
        }
        // line 36
        yield "                </tr>
            </thead>
            <tbody>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 40
            yield "                    <tr data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "\">
                        <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "commentaire", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                        <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true);
            yield "</td>
                        <td>";
            // line 43
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 43)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 43), "username", [], "any", false, false, false, 43), "html", null, true)) : ("Unknown"));
            yield "</td>
                        <td>
                            <div class=\"rate-yo\" id=\"rating-";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "\" data-rate=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 45)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 45), "html", null, true)) : (0));
            yield "\" data-readonly=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 45)) ? ("true") : ("false"));
            yield "\"></div>
                            ";
            // line 46
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 46))) {
                // line 47
                yield "                                <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                yield "\">
                                    <input type=\"hidden\" name=\"rate\" id=\"rate-input-";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 48), "html", null, true);
                yield "\" value=\"\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-primary mt-2\">Submit</button>
                                </form>
                            ";
            }
            // line 52
            yield "                        </td>
                        ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "roles", [], "any", false, false, false, 53)))) {
                // line 54
                yield "                            <td>
                                <a href=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\">Edit</a>
                                <form method=\"post\" action=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 57))), "html", null, true);
                yield "\">
                                    <button type=\"submit\">Delete</button>
                                </form>
                            </td>
                        ";
            }
            // line 62
            yield "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "                    <tr>
                        <td colspan=\"5\">No responses found.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
    ";
        // line 78
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
    <script>
        \$(function() {
            \$('#reponses-table').DataTable();
            
            // Initialize RateYo for each rating element
            \$('.rate-yo').each(function() {
                const \$el = \$(this);
                const id = \$el.attr('id').split('-')[1];
                const rating = parseFloat(\$el.data('rate'));
                const readonly = \$el.data('readonly') === 'true';
                
                \$el.rateYo({
                    rating: rating,
                    fullStar: true,
                    readOnly: readonly,
                    onSet: function(rating) {
                        if (!readonly) {
                            \$('#rate-input-' + id).val(rating);
                        }
                    }
                });
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
        return "front_office/Avis/reponses.html.twig";
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
        return array (  298 => 78,  291 => 75,  278 => 74,  263 => 68,  254 => 64,  252 => 63,  247 => 62,  239 => 57,  235 => 56,  231 => 55,  228 => 54,  226 => 53,  223 => 52,  216 => 48,  211 => 47,  209 => 46,  201 => 45,  196 => 43,  192 => 42,  188 => 41,  183 => 40,  178 => 39,  173 => 36,  169 => 34,  167 => 33,  155 => 23,  149 => 21,  147 => 20,  143 => 19,  139 => 17,  126 => 16,  110 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Responses for complaints{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
    {{ encore_entry_link_tags('app') }}
    <style>
        .rate-container { display: inline-block; }
    </style>
{% endblock %}

{% block body %}
<div class=\"card-3d\">
    <div class=\"header-3d\">
        <h6>Responses for Complaint #{{ avis_id }}</h6>
        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
            <a href=\"{{ path('app_reponse_new', {'avisId': avis_id}) }}\" class=\"btn-add\">+ New Response</a>
        {% endif %}
    </div>

    <div class=\"table-3d overflow-x-auto\">
        <table id=\"reponses-table\">
            <thead>
                <tr>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>Admin's Email</th>
                    <th>Rating</th>
                    {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                        <th>Actions</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
                {% for reponse in reponses %}
                    <tr data-id=\"{{ reponse.id }}\">
                        <td>{{ reponse.commentaire }}</td>
                        <td>{{ reponse.dateReponse|date('Y-m-d') }}</td>
                        <td>{{ reponse.user ? reponse.user.username : 'Unknown' }}</td>
                        <td>
                            <div class=\"rate-yo\" id=\"rating-{{ reponse.id }}\" data-rate=\"{{ reponse.rate ?? 0 }}\" data-readonly=\"{{ reponse.rate ? 'true' : 'false' }}\"></div>
                            {% if reponse.rate is null %}
                                <form method=\"post\" action=\"{{ path('app_reponse_rate', {'id': reponse.id}) }}\">
                                    <input type=\"hidden\" name=\"rate\" id=\"rate-input-{{ reponse.id }}\" value=\"\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-primary mt-2\">Submit</button>
                                </form>
                            {% endif %}
                        </td>
                        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                            <td>
                                <a href=\"{{ path('app_reponse_edit', {'id': reponse.id}) }}\">Edit</a>
                                <form method=\"post\" action=\"{{ path('app_reponse_delete', {'id': reponse.id}) }}\" onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reponse.id) }}\">
                                    <button type=\"submit\">Delete</button>
                                </form>
                            </td>
                        {% endif %}
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">No responses found.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
    {{ encore_entry_script_tags('app') }}
    <script>
        \$(function() {
            \$('#reponses-table').DataTable();
            
            // Initialize RateYo for each rating element
            \$('.rate-yo').each(function() {
                const \$el = \$(this);
                const id = \$el.attr('id').split('-')[1];
                const rating = parseFloat(\$el.data('rate'));
                const readonly = \$el.data('readonly') === 'true';
                
                \$el.rateYo({
                    rating: rating,
                    fullStar: true,
                    readOnly: readonly,
                    onSet: function(rating) {
                        if (!readonly) {
                            \$('#rate-input-' + id).val(rating);
                        }
                    }
                });
            });
        });
    </script>
{% endblock %}", "front_office/Avis/reponses.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\front_office\\Avis\\reponses.html.twig");
    }
}
