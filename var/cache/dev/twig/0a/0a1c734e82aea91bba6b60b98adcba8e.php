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

        yield "Avis ";
        
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
        <!-- Avis Table -->
        <div class=\"flex flex-wrap -mx-3\">
            <div class=\"flex-none w-full max-w-full px-3\">
                <div class=\"relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border\">
                    <div class=\"p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent\">
                        <h6 class=\"dark:text-white\">Avis Index</h6>
                    </div>
                    <div class=\"flex-auto px-0 pt-0 pb-2\">
                        <div class=\"p-0 overflow-x-auto\">
                            <table class=\"items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500\">
                                <thead class=\"align-bottom\">
                                    <tr>
                                        <th class=\"px-6 py-3 font-bold text-left uppercase align-middle text-xxs border-b dark:border-white/40 dark:text-white opacity-70\">
                                            <div class=\"text-sm text-slate-400 dark:text-white\">Note</div>
                                        </th>
                                        <th class=\"px-6 py-3 font-bold text-left uppercase align-middle text-xxs border-b dark:border-white/40 dark:text-white opacity-70\">
                                            <div class=\"text-sm text-slate-400 dark:text-white\">Commentaire</div>
                                        </th>
                                        <th class=\"px-6 py-3 font-bold text-left uppercase align-middle text-xxs border-b dark:border-white/40 dark:text-white opacity-70\">
                                            <div class=\"text-sm text-slate-400 dark:text-white\">Date Avis</div>
                                        </th>
                                        <th class=\"px-6 py-3 font-bold text-left uppercase align-middle text-xxs border-b dark:border-white/40 dark:text-white opacity-70\">
                                            <div class=\"text-sm text-slate-400 dark:text-white\">Actions</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 37
            yield "                                        <tr>
                                            <td class=\"p-2 align-middle bg-transparent border-b dark:border-white/40 shadow-transparent\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "note", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                                            <td class=\"p-2 align-middle bg-transparent border-b dark:border-white/40 shadow-transparent\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                                            <td class=\"p-2 align-middle bg-transparent border-b dark:border-white/40 shadow-transparent\">
                                                ";
            // line 41
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 41)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true)) : (""));
            yield "
                                            </td>
                                            <td class=\"p-2 align-middle bg-transparent border-b dark:border-white/40 shadow-transparent\">
                                                <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"text-xs font-semibold text-slate-400 dark:text-white dark:opacity-80\">Show</a>
                                                <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"text-xs font-semibold text-slate-400 dark:text-white dark:opacity-80\">Edit</a>
                                                <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_reponses", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"text-xs font-semibold text-blue-600 dark:text-blue-400\">View Responses</a>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 49
        if (!$context['_iterated']) {
            // line 50
            yield "                                        <tr>
                                            <td colspan=\"4\" class=\"text-center p-4\">No records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new");
        yield "\" class=\"text-sm text-blue-600 dark:text-blue-400\">Create New</a>
            </div>
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
        return array (  189 => 59,  182 => 54,  173 => 50,  171 => 49,  163 => 46,  159 => 45,  155 => 44,  149 => 41,  144 => 39,  140 => 38,  137 => 37,  132 => 36,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Avis {% endblock %}

{% block body %}
<div style=\"margin-left: 280px;\">

    <div class=\"container mx-auto p-6\">
        <!-- Avis Table -->
        <div class=\"flex flex-wrap -mx-3\">
            <div class=\"flex-none w-full max-w-full px-3\">
                <div class=\"relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border\">
                    <div class=\"p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent\">
                        <h6 class=\"dark:text-white\">Avis Index</h6>
                    </div>
                    <div class=\"flex-auto px-0 pt-0 pb-2\">
                        <div class=\"p-0 overflow-x-auto\">
                            <table class=\"items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500\">
                                <thead class=\"align-bottom\">
                                    <tr>
                                        <th class=\"px-6 py-3 font-bold text-left uppercase align-middle text-xxs border-b dark:border-white/40 dark:text-white opacity-70\">
                                            <div class=\"text-sm text-slate-400 dark:text-white\">Note</div>
                                        </th>
                                        <th class=\"px-6 py-3 font-bold text-left uppercase align-middle text-xxs border-b dark:border-white/40 dark:text-white opacity-70\">
                                            <div class=\"text-sm text-slate-400 dark:text-white\">Commentaire</div>
                                        </th>
                                        <th class=\"px-6 py-3 font-bold text-left uppercase align-middle text-xxs border-b dark:border-white/40 dark:text-white opacity-70\">
                                            <div class=\"text-sm text-slate-400 dark:text-white\">Date Avis</div>
                                        </th>
                                        <th class=\"px-6 py-3 font-bold text-left uppercase align-middle text-xxs border-b dark:border-white/40 dark:text-white opacity-70\">
                                            <div class=\"text-sm text-slate-400 dark:text-white\">Actions</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for avi in avis %}
                                        <tr>
                                            <td class=\"p-2 align-middle bg-transparent border-b dark:border-white/40 shadow-transparent\">{{ avi.note }}</td>
                                            <td class=\"p-2 align-middle bg-transparent border-b dark:border-white/40 shadow-transparent\">{{ avi.commentaire }}</td>
                                            <td class=\"p-2 align-middle bg-transparent border-b dark:border-white/40 shadow-transparent\">
                                                {{ avi.dateAvis ? avi.dateAvis|date('Y-m-d') : '' }}
                                            </td>
                                            <td class=\"p-2 align-middle bg-transparent border-b dark:border-white/40 shadow-transparent\">
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
                <a href=\"{{ path('app_avis_new') }}\" class=\"text-sm text-blue-600 dark:text-blue-400\">Create New</a>
            </div>
        </div>
    </div>
    </div>
{% endblock %}
", "avis/index.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\avis\\index.html.twig");
    }
}
