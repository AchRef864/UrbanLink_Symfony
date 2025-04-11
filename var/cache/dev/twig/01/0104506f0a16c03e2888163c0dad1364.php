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

/* @KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig */
class __TwigTemplate_fe43fb8949a20a683a7d9305f0a8f178 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig"));

        // line 10
        yield "<a";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
    <span class=\"float-end\">
        ";
        // line 12
        if ((isset($context["sorted"]) || array_key_exists("sorted", $context) ? $context["sorted"] : (function () { throw new RuntimeError('Variable "sorted" does not exist.', 12, $this->source); })())) {
            // line 13
            yield "            ";
            if (((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 13, $this->source); })()) == "desc")) {
                // line 14
                yield "                <i class=\"material-icons\">expand_more</i>
            ";
            } else {
                // line 16
                yield "                <i class=\"material-icons\">expand_less</i>
            ";
            }
            // line 18
            yield "        ";
        } else {
            // line 19
            yield "            <i class=\"material-icons\">unfold_more</i>
        ";
        }
        // line 21
        yield "    </span>
    ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "
</a>
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
        return "@KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig";
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
        return array (  88 => 22,  85 => 21,  81 => 19,  78 => 18,  74 => 16,  70 => 14,  67 => 13,  65 => 12,  48 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Bootstrap v5 with Material Design Icons Sorting control implementation.
 *
 * Install Icon Set: https://google.github.io/material-design-icons/
 * Overview:         https://material.io/resources/icons/?style=baseline
 */
#}
<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>
    <span class=\"float-end\">
        {% if sorted %}
            {% if direction == 'desc' %}
                <i class=\"material-icons\">expand_more</i>
            {% else %}
                <i class=\"material-icons\">expand_less</i>
            {% endif %}
        {% else %}
            <i class=\"material-icons\">unfold_more</i>
        {% endif %}
    </span>
    {{ title }}
</a>
", "@KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig", "C:\\Users\\sbiss\\OneDrive - ESPRIT\\Documents\\urbanlink_Sy\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\bootstrap_v5_md_sortable_link.html.twig");
    }
}
