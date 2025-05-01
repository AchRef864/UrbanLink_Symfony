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

/* @KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig */
class __TwigTemplate_b71ceda812f13e7109c75f94b152d047 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig"));

        // line 9
        yield "<form method=\"get\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "\" enctype=\"application/x-www-form-urlencoded\">
    <div class=\"input-group mb-3\">
        ";
        // line 11
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 11, $this->source); })())) > 1)) {
            // line 12
            yield "            <select class=\"form-select\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterFieldName"]) || array_key_exists("filterFieldName", $context) ? $context["filterFieldName"] : (function () { throw new RuntimeError('Variable "filterFieldName" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 14
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                yield "\"";
                if (((isset($context["selectedField"]) || array_key_exists("selectedField", $context) ? $context["selectedField"] : (function () { throw new RuntimeError('Variable "selectedField" does not exist.', 14, $this->source); })()) == $context["field"])) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "            </select>
        ";
        } else {
            // line 18
            yield "            <input type=\"hidden\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterFieldName"]) || array_key_exists("filterFieldName", $context) ? $context["filterFieldName"] : (function () { throw new RuntimeError('Variable "filterFieldName" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()))), "html", null, true);
            yield "\"/>
        ";
        }
        // line 20
        yield "        <input class=\"form-control\" type=\"search\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new RuntimeError('Variable "selectedValue" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterValueName"]) || array_key_exists("filterValueName", $context) ? $context["filterValueName"] : (function () { throw new RuntimeError('Variable "filterValueName" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\"
               placeholder=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter_searchword", [], "KnpPaginatorBundle"), "html", null, true);
        yield "\"/>
        <button class=\"btn btn-primary\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })()), "button", [], "any", false, false, false, 22), "html", null, true);
        yield "</button>
    </div>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig";
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
        return array (  103 => 22,  99 => 21,  92 => 20,  84 => 18,  80 => 16,  65 => 14,  61 => 13,  56 => 12,  54 => 11,  48 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Bootstrap v5 Filter control implementation.
 *
 * View that can be used with the filter module
 */
#}
<form method=\"get\" action=\"{{ action }}\" enctype=\"application/x-www-form-urlencoded\">
    <div class=\"input-group mb-3\">
        {% if fields|length > 1 %}
            <select class=\"form-select\" name=\"{{ filterFieldName }}\">
                {% for field, label in fields %}
                    <option value=\"{{ field }}\"{% if selectedField == field %} selected=\"selected\"{% endif %}>{{ label }}</option>
                {% endfor %}
            </select>
        {% else %}
            <input type=\"hidden\" name=\"{{ filterFieldName }}\" value=\"{{ fields|keys|first }}\"/>
        {% endif %}
        <input class=\"form-control\" type=\"search\" value=\"{{ selectedValue }}\" name=\"{{ filterValueName }}\"
               placeholder=\"{{ 'filter_searchword'|trans({}, 'KnpPaginatorBundle') }}\"/>
        <button class=\"btn btn-primary\">{{ options.button }}</button>
    </div>
</form>
", "@KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\bootstrap_v5_filtration.html.twig");
    }
}
