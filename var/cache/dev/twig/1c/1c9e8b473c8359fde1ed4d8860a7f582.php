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

/* @KnpPaginator/Pagination/foundation_v6_pagination.html.twig */
class __TwigTemplate_490d9ab59a9149889c312a5a60f321a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            yield "    <nav aria-label=\"Pagination\">
        ";
            // line 3
            $context["classAlign"] = ((array_key_exists("align", $context)) ? ((" text-" . (isset($context["align"]) || array_key_exists("align", $context) ? $context["align"] : (function () { throw new RuntimeError('Variable "align" does not exist.', 3, $this->source); })()))) : (""));
            // line 4
            yield "        <ul class=\"pagination";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["classAlign"]) || array_key_exists("classAlign", $context) ? $context["classAlign"] : (function () { throw new RuntimeError('Variable "classAlign" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "\">
            ";
            // line 5
            if (array_key_exists("previous", $context)) {
                // line 6
                yield "                <li class=\"pagination-previous\">
                    <a rel=\"prev\" href=\"";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 7, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 7, $this->source); })()), (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 7, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()))), "html", null, true);
                yield "\">
                        ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            } else {
                // line 12
                yield "                <li class=\"pagination-previous disabled\">
                    ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </li>
            ";
            }
            // line 16
            yield "
            ";
            // line 17
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 17, $this->source); })()) > 1)) {
                // line 18
                yield "                <li>
                    <a href=\"";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 19, $this->source); })()), 1, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 19, $this->source); })()))), "html", null, true);
                yield "\">1</a>
                </li>
                ";
                // line 21
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 21, $this->source); })()) == 3)) {
                    // line 22
                    yield "                    <li>
                        <a href=\"";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 23, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 23, $this->source); })()), 2, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 23, $this->source); })()))), "html", null, true);
                    yield "\">2</a>
                    </li>
                ";
                } elseif ((                // line 25
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 25, $this->source); })()) != 2)) {
                    // line 26
                    yield "                    <li class=\"ellipsis\"></li>
                ";
                }
                // line 28
                yield "            ";
            }
            // line 29
            yield "
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                yield "                ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 31, $this->source); })()))) {
                    // line 32
                    yield "                    <li>
                        <a href=\"";
                    // line 33
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 33, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 33, $this->source); })()), $context["page"], (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 33, $this->source); })()))), "html", null, true);
                    yield "\">
                            ";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                        </a>
                    </li>
                ";
                } else {
                    // line 38
                    yield "                    <li class=\"current\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</li>
                ";
                }
                // line 40
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "
            ";
            // line 42
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 42, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 42, $this->source); })()))) {
                // line 43
                yield "                ";
                if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 43, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 43, $this->source); })()) + 1))) {
                    // line 44
                    yield "                    ";
                    if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 44, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 44, $this->source); })()) + 2))) {
                        // line 45
                        yield "                        <li class=\"ellipsis\"></li>
                    ";
                    } else {
                        // line 47
                        yield "                        <li>
                            <a href=\"";
                        // line 48
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 48, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 48, $this->source); })()), ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 48, $this->source); })()) - 1), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 48, $this->source); })()))), "html", null, true);
                        yield "\">
                                ";
                        // line 49
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 49, $this->source); })()) - 1), "html", null, true);
                        yield "
                            </a>
                        </li>
                    ";
                    }
                    // line 53
                    yield "                ";
                }
                // line 54
                yield "                <li>
                    <a href=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 55, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 55, $this->source); })()), (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 55, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 55, $this->source); })()))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 55, $this->source); })()), "html", null, true);
                yield "</a>
                </li>
            ";
            }
            // line 58
            yield "
            ";
            // line 59
            if (array_key_exists("next", $context)) {
                // line 60
                yield "                <li class=\"pagination-next\">
                    <a rel=\"next\" href=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 61, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 61, $this->source); })()), (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 61, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 61, $this->source); })()))), "html", null, true);
                yield "\">
                        ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            } else {
                // line 66
                yield "                <li class=\"pagination-next disabled\">
                    ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </li>
            ";
            }
            // line 70
            yield "        </ul>
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
        return "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig";
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
        return array (  224 => 70,  218 => 67,  215 => 66,  208 => 62,  204 => 61,  201 => 60,  199 => 59,  196 => 58,  188 => 55,  185 => 54,  182 => 53,  175 => 49,  171 => 48,  168 => 47,  164 => 45,  161 => 44,  158 => 43,  156 => 42,  153 => 41,  147 => 40,  141 => 38,  134 => 34,  130 => 33,  127 => 32,  124 => 31,  120 => 30,  117 => 29,  114 => 28,  110 => 26,  108 => 25,  103 => 23,  100 => 22,  98 => 21,  93 => 19,  90 => 18,  88 => 17,  85 => 16,  79 => 13,  76 => 12,  69 => 8,  65 => 7,  62 => 6,  60 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if pageCount > 1 %}
    <nav aria-label=\"Pagination\">
        {% set classAlign = (align is defined) ? \" text-#{align}\" : '' %}
        <ul class=\"pagination{{ classAlign }}\">
            {% if previous is defined %}
                <li class=\"pagination-previous\">
                    <a rel=\"prev\" href=\"{{ path(route, knp_pagination_query(query, previous, options)) }}\">
                        {{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}
                    </a>
                </li>
            {% else %}
                <li class=\"pagination-previous disabled\">
                    {{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}
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
                    <li class=\"ellipsis\"></li>
                {% endif %}
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li>
                        <a href=\"{{ path(route, knp_pagination_query(query, page, options)) }}\">
                            {{ page }}
                        </a>
                    </li>
                {% else %}
                    <li class=\"current\">{{ page }}</li>
                {% endif %}
            {% endfor %}

            {% if pageCount > endPage %}
                {% if pageCount > (endPage + 1) %}
                    {% if pageCount > (endPage + 2) %}
                        <li class=\"ellipsis\"></li>
                    {% else %}
                        <li>
                            <a href=\"{{ path(route, knp_pagination_query(query, (pageCount - 1), options)) }}\">
                                {{ pageCount - 1 }}
                            </a>
                        </li>
                    {% endif %}
                {% endif %}
                <li>
                    <a href=\"{{ path(route, knp_pagination_query(query, pageCount, options)) }}\">{{ pageCount }}</a>
                </li>
            {% endif %}

            {% if next is defined %}
                <li class=\"pagination-next\">
                    <a rel=\"next\" href=\"{{ path(route, knp_pagination_query(query, next, options)) }}\">
                        {{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}
                    </a>
                </li>
            {% else %}
                <li class=\"pagination-next disabled\">
                    {{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}
", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\foundation_v6_pagination.html.twig");
    }
}
