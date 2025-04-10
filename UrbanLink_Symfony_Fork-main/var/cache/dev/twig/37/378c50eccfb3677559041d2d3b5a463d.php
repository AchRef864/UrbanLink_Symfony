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

/* @KnpPaginator/Pagination/bulma_pagination.html.twig */
class __TwigTemplate_2a23e52222d0d3b33ea85f2004e30e0a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/bulma_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/bulma_pagination.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context["position"] = ((array_key_exists("position", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 3, $this->source); })()), "left")) : ("left"));
        // line 4
        $context["rounded"] = ((array_key_exists("rounded", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["rounded"]) || array_key_exists("rounded", $context) ? $context["rounded"] : (function () { throw new RuntimeError('Variable "rounded" does not exist.', 4, $this->source); })()), false)) : (false));
        // line 5
        $context["size"] = ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 5, $this->source); })()), null)) : (null));
        // line 6
        yield "
";
        // line 7
        $context["classes"] = ["pagination"];
        // line 8
        yield "
";
        // line 9
        if (((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 9, $this->source); })()) != "left")) {
            $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 9, $this->source); })()), [("is-" . (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 9, $this->source); })()))]);
        }
        // line 10
        if ((isset($context["rounded"]) || array_key_exists("rounded", $context) ? $context["rounded"] : (function () { throw new RuntimeError('Variable "rounded" does not exist.', 10, $this->source); })())) {
            $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 10, $this->source); })()), ["is-rounded"]);
        }
        // line 11
        if (((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 11, $this->source); })()) != null)) {
            $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 11, $this->source); })()), [("is-" . (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 11, $this->source); })()))]);
        }
        // line 12
        yield "
";
        // line 13
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 13, $this->source); })()) > 1)) {
            // line 14
            yield "    <nav class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 14, $this->source); })()), " "), "html", null, true);
            yield "\" role=\"navigation\" aria-label=\"pagination\">
        ";
            // line 15
            if (array_key_exists("previous", $context)) {
                // line 16
                yield "            <a rel=\"prev\" class=\"pagination-previous\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 16, $this->source); })()), (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 16, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 16, $this->source); })()))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 18
                yield "            <a class=\"pagination-previous\" disabled>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            }
            // line 20
            yield "
        ";
            // line 21
            if (array_key_exists("next", $context)) {
                // line 22
                yield "            <a rel=\"next\" class=\"pagination-next\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 22, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 22, $this->source); })()), (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 22, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })()))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 24
                yield "            <a class=\"pagination-next\" disabled>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            }
            // line 26
            yield "
        <ul class=\"pagination-list\">
            <li>
                ";
            // line 29
            if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 29, $this->source); })()) == (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 29, $this->source); })()))) {
                // line 30
                yield "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 30, $this->source); })()), "html", null, true);
                yield "\" aria-current=\"page\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 30, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 30, $this->source); })()), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 30, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 30, $this->source); })()))), "html", null, true);
                yield "\">1</a>
                ";
            } else {
                // line 32
                yield "                    <a class=\"pagination-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 32, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 32, $this->source); })()), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 32, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 32, $this->source); })()))), "html", null, true);
                yield "\">1</a>
                ";
            }
            // line 34
            yield "            </li>

            ";
            // line 36
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 36, $this->source); })()), 0, [], "array", false, false, false, 36) - (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 36, $this->source); })())) >= 2)) {
                // line 37
                yield "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 41
            yield "
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                yield "                ";
                if ((((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 43, $this->source); })()) != $context["page"]) && ($context["page"] != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 43, $this->source); })())))) {
                    // line 44
                    yield "                    <li>
                        ";
                    // line 45
                    if (($context["page"] == (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 45, $this->source); })()))) {
                        // line 46
                        yield "                            <a class=\"pagination-link is-current\" aria-label=\"Page ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 46, $this->source); })()), "html", null, true);
                        yield "\" aria-current=\"page\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 46, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 46, $this->source); })()), $context["page"], (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 46, $this->source); })()))), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                        ";
                    } else {
                        // line 48
                        yield "                            <a class=\"pagination-link\" aria-label=\"Goto page ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 48, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 48, $this->source); })()), $context["page"], (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 48, $this->source); })()))), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                        ";
                    }
                    // line 50
                    yield "                    </li>
                ";
                }
                // line 52
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "
            ";
            // line 54
            if ((((isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 54, $this->source); })()) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 54, $this->source); })()), (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 54, $this->source); })())) - 1), [], "array", false, false, false, 54)) >= 2)) {
                // line 55
                yield "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 59
            yield "
            <li>
                ";
            // line 61
            if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 61, $this->source); })()) == (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 61, $this->source); })()))) {
                // line 62
                yield "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 62, $this->source); })()), "html", null, true);
                yield "\" aria-current=\"page\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 62, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 62, $this->source); })()), (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 62, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 62, $this->source); })()))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 62, $this->source); })()), "html", null, true);
                yield "</a>
                ";
            } else {
                // line 64
                yield "                    <a class=\"pagination-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 64, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 64, $this->source); })()), (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 64, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 64, $this->source); })()))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 64, $this->source); })()), "html", null, true);
                yield "</a>
                ";
            }
            // line 66
            yield "            </li>
        </ul>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KnpPaginator/Pagination/bulma_pagination.html.twig";
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
        return array (  235 => 66,  227 => 64,  217 => 62,  215 => 61,  211 => 59,  205 => 55,  203 => 54,  200 => 53,  194 => 52,  190 => 50,  180 => 48,  170 => 46,  168 => 45,  165 => 44,  162 => 43,  158 => 42,  155 => 41,  149 => 37,  147 => 36,  143 => 34,  137 => 32,  129 => 30,  127 => 29,  122 => 26,  116 => 24,  108 => 22,  106 => 21,  103 => 20,  97 => 18,  89 => 16,  87 => 15,  82 => 14,  80 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# bulma Sliding pagination control implementation #}

{% set position = position|default('left') %}
{% set rounded = rounded|default(false) %}
{% set size = size|default(null) %}

{% set classes = ['pagination'] %}

{% if position != 'left' %}{% set classes = classes|merge(['is-' ~ position]) %}{% endif %}
{% if rounded %}{% set classes = classes|merge(['is-rounded']) %}{% endif %}
{% if size != null %}{% set classes = classes|merge(['is-' ~ size]) %}{% endif %}

{% if pageCount > 1 %}
    <nav class=\"{{ classes|join(' ') }}\" role=\"navigation\" aria-label=\"pagination\">
        {% if previous is defined %}
            <a rel=\"prev\" class=\"pagination-previous\" href=\"{{ path(route, knp_pagination_query(query, previous, options)) }}\">{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% else %}
            <a class=\"pagination-previous\" disabled>{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% endif %}

        {% if next is defined %}
            <a rel=\"next\" class=\"pagination-next\" href=\"{{ path(route, knp_pagination_query(query, next, options)) }}\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% else %}
            <a class=\"pagination-next\" disabled>{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% endif %}

        <ul class=\"pagination-list\">
            <li>
                {% if current == first %}
                    <a class=\"pagination-link is-current\" aria-label=\"Page {{ current }}\" aria-current=\"page\" href=\"{{ path(route, knp_pagination_query(query, first, options)) }}\">1</a>
                {% else %}
                    <a class=\"pagination-link\" href=\"{{ path(route, knp_pagination_query(query, first, options)) }}\">1</a>
                {% endif %}
            </li>

            {% if pagesInRange[0] - first >= 2 %}
                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            {% endif %}

            {% for page in pagesInRange %}
                {% if first != page and page != last %}
                    <li>
                        {% if page == current %}
                            <a class=\"pagination-link is-current\" aria-label=\"Page {{ current }}\" aria-current=\"page\" href=\"{{ path(route, knp_pagination_query(query, page, options)) }}\">{{ page }}</a>
                        {% else %}
                            <a class=\"pagination-link\" aria-label=\"Goto page {{ page }}\" href=\"{{ path(route, knp_pagination_query(query, page, options)) }}\">{{ page }}</a>
                        {% endif %}
                    </li>
                {% endif %}
            {% endfor %}

            {% if last - pagesInRange[pagesInRange|length - 1] >= 2 %}
                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            {% endif %}

            <li>
                {% if current == last %}
                    <a class=\"pagination-link is-current\" aria-label=\"Page {{ current }}\" aria-current=\"page\" href=\"{{ path(route, knp_pagination_query(query, last, options)) }}\">{{ last }}</a>
                {% else %}
                    <a class=\"pagination-link\" href=\"{{ path(route, knp_pagination_query(query, last, options)) }}\">{{ last }}</a>
                {% endif %}
            </li>
        </ul>
    </nav>
{% endif %}
", "@KnpPaginator/Pagination/bulma_pagination.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\bulma_pagination.html.twig");
    }
}
