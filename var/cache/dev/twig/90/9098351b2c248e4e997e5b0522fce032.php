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

/* @Httplug/http_message.html.twig */
class __TwigTemplate_a31e5c8f67c2a380ed58c8508d8e93c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/http_message.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/http_message.html.twig"));

        // line 1
        $context["hasReachedBody"] = false;
        // line 2
        $context["content"] = "";
        // line 3
        $context["data"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "
"), 1);
        // line 4
        $context["xdebugTokenLink"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::inFilter("x-debug-token-link:", Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 4, $this->source); })()))); })), ": "));
        // line 5
        $context["noContent"] = ((((isset($context["capturedBodyLength"]) || array_key_exists("capturedBodyLength", $context) ? $context["capturedBodyLength"] : (function () { throw new RuntimeError('Variable "capturedBodyLength" does not exist.', 5, $this->source); })()) === 0)) ? ("(captured_body_length is set to 0, no body captured)") : ("(This message has no captured body)"));
        // line 6
        yield "<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\" colspan=\"2\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 9, $this->source); })()), "html", null, true);
        if ((isset($context["xdebugTokenLink"]) || array_key_exists("xdebugTokenLink", $context) ? $context["xdebugTokenLink"] : (function () { throw new RuntimeError('Variable "xdebugTokenLink" does not exist.', 9, $this->source); })())) {
            yield " <span style=\"float:right\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["xdebugTokenLink"]) || array_key_exists("xdebugTokenLink", $context) ? $context["xdebugTokenLink"] : (function () { throw new RuntimeError('Variable "xdebugTokenLink" does not exist.', 9, $this->source); })()), "html", null, true);
            yield "\">Profile link</a></span>";
        }
        yield "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 14
            yield "        ";
            if (Twig\Extension\CoreExtension::testEmpty($context["row"])) {
                // line 15
                yield "            ";
                $context["hasReachedBody"] = true;
                // line 16
                yield "        ";
            } elseif ((isset($context["hasReachedBody"]) || array_key_exists("hasReachedBody", $context) ? $context["hasReachedBody"] : (function () { throw new RuntimeError('Variable "hasReachedBody" does not exist.', 16, $this->source); })())) {
                // line 17
                yield "            ";
                $context["content"] = ((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 17, $this->source); })()) . $context["row"]);
                // line 18
                yield "        ";
            } else {
                // line 19
                yield "            ";
                $context["row"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["row"], ":");
                // line 20
                yield "            ";
                $context["value"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["row"], 1), ":"));
                // line 21
                yield "            <tr>
                <th>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], 0, [], "array", false, false, false, 22), "html", null, true);
                yield "</th>
                <td>
                    ";
                // line 24
                if (CoreExtension::matches("#^https?://#", (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()))) {
                    // line 25
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 25, $this->source); })()), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 25, $this->source); })()), "html", null, true);
                    yield "</a>
                    ";
                } else {
                    // line 27
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 27, $this->source); })()), "html", null, true);
                    yield "
                    ";
                }
                // line 29
                yield "                </td>
            </tr>
        ";
            }
            // line 32
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "    </tbody>
</table>

<div class='httplug-http-body httplug-hidden'>";
        // line 36
        yield (((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 36, $this->source); })())) ? ($this->extensions['Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension']->markupBody((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 36, $this->source); })()))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["noContent"]) || array_key_exists("noContent", $context) ? $context["noContent"] : (function () { throw new RuntimeError('Variable "noContent" does not exist.', 36, $this->source); })()), "html", null, true)));
        yield "</div>
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
        return "@Httplug/http_message.html.twig";
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
        return array (  141 => 36,  136 => 33,  130 => 32,  125 => 29,  119 => 27,  111 => 25,  109 => 24,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  92 => 18,  89 => 17,  86 => 16,  83 => 15,  80 => 14,  76 => 13,  64 => 9,  59 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set hasReachedBody = false %}
{% set content = '' %}
{% set data = data|split(\"\\n\")|slice(1) %}
{% set xdebugTokenLink = data|filter(v => 'x-debug-token-link:' in v|lower)|first|split(': ')|last %}
{% set noContent = capturedBodyLength is same as(0) ? '(captured_body_length is set to 0, no body captured)' : '(This message has no captured body)' %}
<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\" colspan=\"2\">{{ header }}{% if xdebugTokenLink %} <span style=\"float:right\"><a href=\"{{ xdebugTokenLink }}\">Profile link</a></span>{% endif %}</th>
    </tr>
    </thead>
    <tbody>
    {% for row in data %}
        {% if row is empty %}
            {% set hasReachedBody = true %}
        {% elseif hasReachedBody %}
            {% set content = content ~ row %}
        {% else %}
            {% set row = row|split(':') %}
            {% set value = row|slice(1)|join(':')|trim %}
            <tr>
                <th>{{ row[0] }}</th>
                <td>
                    {% if value matches '#^https?://#' %}
                        <a href=\"{{ value }}\">{{ value }}</a>
                    {% else %}
                        {{ value }}
                    {% endif %}
                </td>
            </tr>
        {% endif %}
    {% endfor %}
    </tbody>
</table>

<div class='httplug-http-body httplug-hidden'>{{ content ? content|httplug_markup_body : noContent }}</div>
", "@Httplug/http_message.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\vendor\\php-http\\httplug-bundle\\src\\Resources\\views\\http_message.html.twig");
    }
}
