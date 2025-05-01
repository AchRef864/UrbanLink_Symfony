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
class __TwigTemplate_f0f0e53480203f2bdf967c6efd4de752 extends Template
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
            // line 16
            if (array_key_exists("previous", $context)) {
                // line 17
                yield "            <li>
                <a rel=\"prev\" href=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 18, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 18, $this->source); })()), (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 18, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 18, $this->source); })()))), "html", null, true);
                yield "\">&laquo;&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
            </li>
        ";
            } else {
                // line 21
                yield "            <li class=\"uk-disabled\">
                <span>&laquo;&nbsp;";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</span>
            </li>
        ";
            }
            // line 25
            yield "
        ";
            // line 26
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 26, $this->source); })()) > 1)) {
                // line 27
                yield "            <li>
                <a href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 28, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 28, $this->source); })()), 1, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 28, $this->source); })()))), "html", null, true);
                yield "\">1</a>
            </li>
            ";
                // line 30
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 30, $this->source); })()) == 3)) {
                    // line 31
                    yield "                <li>
                    <a href=\"";
                    // line 32
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 32, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 32, $this->source); })()), 2, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 32, $this->source); })()))), "html", null, true);
                    yield "\">2</a>
                </li>
            ";
                } elseif ((                // line 34
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 34, $this->source); })()) != 2)) {
                    // line 35
                    yield "                <li class=\"uk-disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                }
                // line 39
                yield "        ";
            }
            // line 40
            yield "
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                yield "            ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 42, $this->source); })()))) {
                    // line 43
                    yield "                <li>
                    <a href=\"";
                    // line 44
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 44, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 44, $this->source); })()), $context["page"], (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 44, $this->source); })()))), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                </li>
            ";
                } else {
                    // line 47
                    yield "                <li class=\"uk-active\">
                    <span>";
                    // line 48
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                </li>
            ";
                }
                // line 51
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "
        ";
            // line 54
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 54, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 54, $this->source); })()))) {
                // line 55
                yield "            ";
                if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 55, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 55, $this->source); })()) + 1))) {
                    // line 56
                    yield "                ";
                    if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 56, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 56, $this->source); })()) + 2))) {
                        // line 57
                        yield "                    <li class=\"uk-disabled\">
                        <span>&hellip;</span>
                    </li>
                ";
                    } else {
                        // line 61
                        yield "                    <li>
                        <a href=\"";
                        // line 62
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 62, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 62, $this->source); })()), ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 62, $this->source); })()) - 1), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 62, $this->source); })()))), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 62, $this->source); })()) - 1), "html", null, true);
                        yield "</a>
                    </li>
                ";
                    }
                    // line 65
                    yield "            ";
                }
                // line 66
                yield "            <li>
                <a href=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 67, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 67, $this->source); })()), (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 67, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 67, $this->source); })()))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 67, $this->source); })()), "html", null, true);
                yield "</a>
            </li>
        ";
            }
            // line 70
            yield "
        ";
            // line 71
            if (array_key_exists("next", $context)) {
                // line 72
                yield "            <li>
                <a rel=\"next\" href=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 73, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 73, $this->source); })()), (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 73, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 73, $this->source); })()))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</a>
            </li>
        ";
            } else {
                // line 76
                yield "            <li class=\"uk-disabled\">
                <span>";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</span>
            </li>
        ";
            }
            // line 80
            yield "    </ul>
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
        return array (  213 => 80,  207 => 77,  204 => 76,  196 => 73,  193 => 72,  191 => 71,  188 => 70,  180 => 67,  177 => 66,  174 => 65,  166 => 62,  163 => 61,  157 => 57,  154 => 56,  151 => 55,  149 => 54,  146 => 53,  139 => 51,  133 => 48,  130 => 47,  122 => 44,  119 => 43,  116 => 42,  112 => 41,  109 => 40,  106 => 39,  100 => 35,  98 => 34,  93 => 32,  90 => 31,  88 => 30,  83 => 28,  80 => 27,  78 => 26,  75 => 25,  69 => 22,  66 => 21,  58 => 18,  55 => 17,  53 => 16,  50 => 15,  48 => 14,);
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
", "@KnpPaginator/Pagination/uikit_v3_pagination.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\uikit_v3_pagination.html.twig");
    }
}
