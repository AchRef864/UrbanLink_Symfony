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

/* reponse/index.html.twig */
class __TwigTemplate_50012ed22484fdf92bbacececb896b14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reponse/index.html.twig", 1);
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

        yield "Réponse index";
        
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

    <div class=\"relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border\">
        <div class=\"p-6 pb-0 mb-0 bg-white rounded-t-2xl\">
            <h6>Réponses Table</h6>
        </div>
        <div class=\"flex-auto px-0 pt-0 pb-2\">
            <div class=\"p-0 overflow-x-auto\">
                <table class=\"items-center w-full mb-0 align-top border-gray-200 text-slate-500\">
                    <thead class=\"align-bottom\">
                        <tr>
                            <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">Id</th>
                            <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">Commentaire</th>
                            <th class=\"px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">Date Réponse</th>
                            <th class=\"px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">Avis ID</th>
                            <th class=\"px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">User ID</th>
                            <th class=\"px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">Actions</th>
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
            yield "                            <tr>
                                <td class=\"p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <span class=\"font-semibold leading-tight text-xs\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <span class=\"leading-tight text-xs text-slate-400\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "commentaire", [], "any", false, false, false, 32), "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <span class=\"leading-tight text-xs text-slate-400\">";
            // line 35
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 35)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true)) : (""));
            yield "</span>
                                </td>
                                <td class=\"p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <span class=\"leading-tight text-xs text-slate-400\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "avisId", [], "any", false, false, false, 38), "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <span class=\"leading-tight text-xs text-slate-400\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "userId", [], "any", false, false, false, 41), "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"font-semibold leading-tight text-xs text-slate-400 mr-2\">Show</a>
                                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"font-semibold leading-tight text-xs text-slate-400\">Edit</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center p-4\">
                                    <span class=\"text-slate-400 text-sm\">No records found</span>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                    </tbody>
                </table>
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
        return "reponse/index.html.twig";
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
        return array (  186 => 55,  175 => 49,  173 => 48,  165 => 45,  161 => 44,  155 => 41,  149 => 38,  143 => 35,  137 => 32,  131 => 29,  127 => 27,  122 => 26,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réponse index{% endblock %}

{% block body %}
<div style=\"margin-left: 280px;\">

    <div class=\"relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border\">
        <div class=\"p-6 pb-0 mb-0 bg-white rounded-t-2xl\">
            <h6>Réponses Table</h6>
        </div>
        <div class=\"flex-auto px-0 pt-0 pb-2\">
            <div class=\"p-0 overflow-x-auto\">
                <table class=\"items-center w-full mb-0 align-top border-gray-200 text-slate-500\">
                    <thead class=\"align-bottom\">
                        <tr>
                            <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">Id</th>
                            <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">Commentaire</th>
                            <th class=\"px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">Date Réponse</th>
                            <th class=\"px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">Avis ID</th>
                            <th class=\"px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">User ID</th>
                            <th class=\"px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 text-xxs text-slate-400 opacity-70\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for reponse in reponses %}
                            <tr>
                                <td class=\"p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <span class=\"font-semibold leading-tight text-xs\">{{ reponse.id }}</span>
                                </td>
                                <td class=\"p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <span class=\"leading-tight text-xs text-slate-400\">{{ reponse.commentaire }}</span>
                                </td>
                                <td class=\"p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <span class=\"leading-tight text-xs text-slate-400\">{{ reponse.dateReponse ? reponse.dateReponse|date('Y-m-d') : '' }}</span>
                                </td>
                                <td class=\"p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <span class=\"leading-tight text-xs text-slate-400\">{{ reponse.avisId }}</span>
                                </td>
                                <td class=\"p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <span class=\"leading-tight text-xs text-slate-400\">{{ reponse.userId }}</span>
                                </td>
                                <td class=\"p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent\">
                                    <a href=\"{{ path('app_reponse_show', {'id': reponse.id}) }}\" class=\"font-semibold leading-tight text-xs text-slate-400 mr-2\">Show</a>
                                    <a href=\"{{ path('app_reponse_edit', {'id': reponse.id}) }}\" class=\"font-semibold leading-tight text-xs text-slate-400\">Edit</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center p-4\">
                                    <span class=\"text-slate-400 text-sm\">No records found</span>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
{% endblock %}
", "reponse/index.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\reponse\\index.html.twig");
    }
}
