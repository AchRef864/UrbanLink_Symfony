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
class __TwigTemplate_930b2127a9c6ab7f9e0cf437ed5f806d extends Template
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

        yield "Responses for Avis ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        yield "<div style=\"margin-left: 280px;\">

    <div class=\"container mx-auto p-6\">
        <h1 class=\"text-center mb-4\">Responses for Avis</h1>

        <div class=\"text-right mb-4\">
            <!-- Button to Create a New Response -->
            <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new", ["avisId" => (isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 13, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Create New Response</a>
        </div>

        <table class=\"table-auto w-full border-collapse border border-gray-300\">
            <thead>
                <tr>
                    <th class=\"border border-gray-300 px-4 py-2\">ID</th>
                    <th class=\"border border-gray-300 px-4 py-2\">Commentaire</th>
                    <th class=\"border border-gray-300 px-4 py-2\">Date</th>
                    <th class=\"border border-gray-300 px-4 py-2\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 27
            yield "                    <tr>
                        <td class=\"border border-gray-300 px-4 py-2\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                        <td class=\"border border-gray-300 px-4 py-2\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "commentaire", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                        <td class=\"border border-gray-300 px-4 py-2\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
            yield "</td>
                        <td class=\"border border-gray-300 px-4 py-2\">
                            <!-- Button to Edit the Response -->
                            <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Edit</a>
                            <!-- Button to Delete the Response -->
                            <form method=\"post\" action=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 36))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-danger btn-sm\">Delete</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 41
        if (!$context['_iterated']) {
            // line 42
            yield "                    <tr>
                        <td colspan=\"4\" class=\"text-center border border-gray-300 px-4 py-2\">No responses found for this Avis.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "            </tbody>
        </table>

        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\" class=\"btn btn-secondary\">Back to Avis List</a>
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
        return array (  184 => 50,  178 => 46,  169 => 42,  167 => 41,  157 => 36,  153 => 35,  148 => 33,  142 => 30,  138 => 29,  134 => 28,  131 => 27,  126 => 26,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Responses for Avis {{ avis_id }}{% endblock %}

{% block body %}
<div style=\"margin-left: 280px;\">

    <div class=\"container mx-auto p-6\">
        <h1 class=\"text-center mb-4\">Responses for Avis</h1>

        <div class=\"text-right mb-4\">
            <!-- Button to Create a New Response -->
            <a href=\"{{ path('app_reponse_new', {'avisId': avis_id}) }}\" class=\"btn btn-primary\">Create New Response</a>
        </div>

        <table class=\"table-auto w-full border-collapse border border-gray-300\">
            <thead>
                <tr>
                    <th class=\"border border-gray-300 px-4 py-2\">ID</th>
                    <th class=\"border border-gray-300 px-4 py-2\">Commentaire</th>
                    <th class=\"border border-gray-300 px-4 py-2\">Date</th>
                    <th class=\"border border-gray-300 px-4 py-2\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for reponse in reponses %}
                    <tr>
                        <td class=\"border border-gray-300 px-4 py-2\">{{ reponse.id }}</td>
                        <td class=\"border border-gray-300 px-4 py-2\">{{ reponse.commentaire }}</td>
                        <td class=\"border border-gray-300 px-4 py-2\">{{ reponse.dateReponse|date('Y-m-d') }}</td>
                        <td class=\"border border-gray-300 px-4 py-2\">
                            <!-- Button to Edit the Response -->
                            <a href=\"{{ path('app_reponse_edit', {'id': reponse.id}) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
                            <!-- Button to Delete the Response -->
                            <form method=\"post\" action=\"{{ path('app_reponse_delete', {'id': reponse.id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reponse.id) }}\">
                                <button class=\"btn btn-danger btn-sm\">Delete</button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" class=\"text-center border border-gray-300 px-4 py-2\">No responses found for this Avis.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_avis_index') }}\" class=\"btn btn-secondary\">Back to Avis List</a>
        </div>
    </div>
    </div>  
{% endblock %}", "avis/reponses.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\avis\\reponses.html.twig");
    }
}
