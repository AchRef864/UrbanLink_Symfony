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

/* @KnpPaginator/Pagination/uikit_v3_pagination.html.twig */
class __TwigTemplate_984034393030bb6c8482010d19a2e9c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/uikit_v3_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/uikit_v3_pagination.html.twig"));

        // line 14
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 14, $this->source); })()) > 1)) {
            // line 15
            yield "    <ul class=\"uk-pagination uk-flex-center uk-margin-medium-top\">

            ";
            // line 17
            if (array_key_exists("previous", $context)) {
                // line 18
                yield "                <li>
                    <a rel=\"prev\" href=\"";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 19, $this->source); })()), (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 19, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 19, $this->source); })()))), "html", null, true);
                yield "\">&laquo;&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
                </li>
            ";
            } else {
                // line 22
                yield "                <li class=\"uk-disabled\">
                    <span>&laquo;&nbsp;";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</span>
                </li>
            ";
            }
            // line 26
            yield "
            ";
            // line 27
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 27, $this->source); })()) > 1)) {
                // line 28
                yield "                <li>
                    <a href=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 29, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 29, $this->source); })()), 1, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 29, $this->source); })()))), "html", null, true);
                yield "\">1</a>
                </li>
                ";
                // line 31
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 31, $this->source); })()) == 3)) {
                    // line 32
                    yield "                    <li>
                        <a href=\"";
                    // line 33
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 33, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 33, $this->source); })()), 2, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 33, $this->source); })()))), "html", null, true);
                    yield "\">2</a>
                    </li>
                ";
                } elseif ((                // line 35
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 35, $this->source); })()) != 2)) {
                    // line 36
                    yield "                    <li class=\"uk-disabled\">
                        <span>&hellip;</span>
                    </li>
                ";
                }
                // line 40
                yield "            ";
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
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 43, $this->source); })()))) {
                    // line 44
                    yield "                    <li>
                        <a href=\"";
                    // line 45
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 45, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 45, $this->source); })()), $context["page"], (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 45, $this->source); })()))), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                    </li>
                ";
                } else {
                    // line 48
                    yield "                    <li class=\"uk-active\">
                        <span>";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                    </li>
                ";
                }
                // line 52
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "
            ";
            // line 55
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 55, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 55, $this->source); })()))) {
                // line 56
                yield "                ";
                if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 56, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 56, $this->source); })()) + 1))) {
                    // line 57
                    yield "                    ";
                    if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 57, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 57, $this->source); })()) + 2))) {
                        // line 58
                        yield "                        <li class=\"uk-disabled\">
                            <span>&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 62
                        yield "                        <li>
                            <a href=\"";
                        // line 63
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 63, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 63, $this->source); })()), ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 63, $this->source); })()) - 1), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 63, $this->source); })()))), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 63, $this->source); })()) - 1), "html", null, true);
                        yield "</a>
                        </li>
                    ";
                    }
                    // line 66
                    yield "                ";
                }
                // line 67
                yield "                <li>
                    <a href=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 68, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 68, $this->source); })()), (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 68, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 68, $this->source); })()))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 68, $this->source); })()), "html", null, true);
                yield "</a>
                </li>
            ";
            }
            // line 71
            yield "
            ";
            // line 72
            if (array_key_exists("next", $context)) {
                // line 73
                yield "                <li>
                    <a rel=\"next\" href=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 74, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 74, $this->source); })()), (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 74, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 74, $this->source); })()))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 77
                yield "                <li class=\"uk-disabled\">
                    <span>";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 81
            yield "        </ul>
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
        return "@KnpPaginator/Pagination/uikit_v3_pagination.html.twig";
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
        return array (  214 => 81,  208 => 78,  205 => 77,  197 => 74,  194 => 73,  192 => 72,  189 => 71,  181 => 68,  178 => 67,  175 => 66,  167 => 63,  164 => 62,  158 => 58,  155 => 57,  152 => 56,  150 => 55,  147 => 54,  140 => 52,  134 => 49,  131 => 48,  123 => 45,  120 => 44,  117 => 43,  113 => 42,  110 => 41,  107 => 40,  101 => 36,  99 => 35,  94 => 33,  91 => 32,  89 => 31,  84 => 29,  81 => 28,  79 => 27,  76 => 26,  70 => 23,  67 => 22,  59 => 19,  56 => 18,  54 => 17,  50 => 15,  48 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * UIkit 3.0 pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the UIKit Toolkit
 * https://getuikit.com/docs/pagination
 *
 *
 * @author KULDIP PIPALIYA <kuldipem@gmail.com>
 */
#}
{% if pageCount > 1 %}
    <ul class=\"uk-pagination uk-flex-center uk-margin-medium-top\">

            {% if previous is defined %}
                <li>
                    <a rel=\"prev\" href=\"{{ path(route, knp_pagination_query(query, previous, options)) }}\">&laquo;&nbsp;{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
                </li>
            {% else %}
                <li class=\"uk-disabled\">
                    <span>&laquo;&nbsp;{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</span>
                </li>
            {% endif %}

            {% if startPage > 1 %}
                <li>
                    <a href=\"{{ path(route, knp_pagination_query(query, 1, options)) }}\">1</a>
                </li>
                {% if startPage == 3 %}
                    <li>
                        <a href=\"{{ path(route, knp_pagination_query(query, 2, options)) }}\">2</a>
                    </li>
                {% elseif startPage != 2 %}
                    <li class=\"uk-disabled\">
                        <span>&hellip;</span>
                    </li>
                {% endif %}
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li>
                        <a href=\"{{ path(route, knp_pagination_query(query, page, options)) }}\">{{ page }}</a>
                    </li>
                {% else %}
                    <li class=\"uk-active\">
                        <span>{{ page }}</span>
                    </li>
                {% endif %}

            {% endfor %}

            {% if pageCount > endPage %}
                {% if pageCount > (endPage + 1) %}
                    {% if pageCount > (endPage + 2) %}
                        <li class=\"uk-disabled\">
                            <span>&hellip;</span>
                        </li>
                    {% else %}
                        <li>
                            <a href=\"{{ path(route, knp_pagination_query(query, (pageCount - 1), options)) }}\">{{ pageCount - 1 }}</a>
                        </li>
                    {% endif %}
                {% endif %}
                <li>
                    <a href=\"{{ path(route, knp_pagination_query(query, pageCount, options)) }}\">{{ pageCount }}</a>
                </li>
            {% endif %}

            {% if next is defined %}
                <li>
                    <a rel=\"next\" href=\"{{ path(route, knp_pagination_query(query, next, options)) }}\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}&nbsp;&raquo;</a>
                </li>
            {% else %}
                <li class=\"uk-disabled\">
                    <span>{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}&nbsp;&raquo;</span>
                </li>
            {% endif %}
        </ul>
{% endif %}
", "@KnpPaginator/Pagination/uikit_v3_pagination.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\uikit_v3_pagination.html.twig");
    }
}
