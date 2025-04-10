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
        yield "<div class=\"ml-[280px]\">

    <div class=\"container mx-auto p-6\">
        <h1 class=\"text-2xl font-bold text-center mb-6\">Responses for Avis</h1>

        <div class=\"flex justify-end mb-4\">
            <!-- Button to Create a New Response -->
            <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new", ["avisId" => (isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 13, $this->source); })())]), "html", null, true);
        yield "\" 
               class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
                Create New Response
            </a>
        </div>

        <div class=\"overflow-x-auto\">
            <table class=\"min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden\">
                <thead class=\"bg-gray-100\">
                    <tr>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">ID</th>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">Commentaire</th>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">Date</th>
                        <th class=\"text-center py-3 px-6 border-b border-gray-300\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 31
            yield "                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"py-3 px-6 border-b border-gray-300\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                            <td class=\"py-3 px-6 border-b border-gray-300\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "commentaire", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                            <td class=\"py-3 px-6 border-b border-gray-300\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true);
            yield "</td>
                            <td class=\"py-3 px-6 border-b border-gray-300 text-center\">
                                <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" 
                                   class=\"bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-1 px-3 rounded text-sm mr-2\">
                                    Edit
                                </a>
                                <form method=\"post\" action=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" 
                                      class=\"inline-block\" 
                                      onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 43))), "html", null, true);
            yield "\">
                                    <button type=\"submit\"
                                            class=\"bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-sm\">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 51
        if (!$context['_iterated']) {
            // line 52
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center py-4 text-gray-500\">No responses found for this Avis.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                </tbody>
            </table>
        </div>

        <div class=\"text-center mt-6\">
            <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\" 
               class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded\">
                Back to Avis List
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
        return array (  195 => 61,  188 => 56,  179 => 52,  177 => 51,  164 => 43,  158 => 40,  151 => 36,  146 => 34,  142 => 33,  138 => 32,  135 => 31,  130 => 30,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Responses for Avis {{ avis_id }}{% endblock %}

{% block body %}
<div class=\"ml-[280px]\">

    <div class=\"container mx-auto p-6\">
        <h1 class=\"text-2xl font-bold text-center mb-6\">Responses for Avis</h1>

        <div class=\"flex justify-end mb-4\">
            <!-- Button to Create a New Response -->
            <a href=\"{{ path('app_reponse_new', {'avisId': avis_id}) }}\" 
               class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
                Create New Response
            </a>
        </div>

        <div class=\"overflow-x-auto\">
            <table class=\"min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden\">
                <thead class=\"bg-gray-100\">
                    <tr>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">ID</th>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">Commentaire</th>
                        <th class=\"text-left py-3 px-6 border-b border-gray-300\">Date</th>
                        <th class=\"text-center py-3 px-6 border-b border-gray-300\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reponse in reponses %}
                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"py-3 px-6 border-b border-gray-300\">{{ reponse.id }}</td>
                            <td class=\"py-3 px-6 border-b border-gray-300\">{{ reponse.commentaire }}</td>
                            <td class=\"py-3 px-6 border-b border-gray-300\">{{ reponse.dateReponse|date('Y-m-d') }}</td>
                            <td class=\"py-3 px-6 border-b border-gray-300 text-center\">
                                <a href=\"{{ path('app_reponse_edit', {'id': reponse.id}) }}\" 
                                   class=\"bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-1 px-3 rounded text-sm mr-2\">
                                    Edit
                                </a>
                                <form method=\"post\" action=\"{{ path('app_reponse_delete', {'id': reponse.id}) }}\" 
                                      class=\"inline-block\" 
                                      onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reponse.id) }}\">
                                    <button type=\"submit\"
                                            class=\"bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-sm\">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center py-4 text-gray-500\">No responses found for this Avis.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"text-center mt-6\">
            <a href=\"{{ path('app_avis_index') }}\" 
               class=\"bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded\">
                Back to Avis List
            </a>
        </div>
    </div>
</div>
{% endblock %}
", "avis/reponses.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\avis\\reponses.html.twig");
    }
}
