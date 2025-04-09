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

/* test/email_test.html.twig */
class __TwigTemplate_29450617ac29c3478ae49f0011f5be5b extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/email_test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/email_test.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "test/email_test.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Email Test";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2>Email System Test</h2>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 16
        yield "                        ";
        if ((array_key_exists("success", $context) && (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "                            <div class=\"alert alert-success\">
                                <i class=\"fas fa-check-circle\"></i> All tests passed successfully!
                            </div>
                        ";
        }
        // line 21
        yield "
                        ";
        // line 23
        yield "                        ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()))) {
            // line 24
            yield "                            <div class=\"alert alert-danger\">
                                <i class=\"fas fa-exclamation-triangle\"></i> <strong>Error:</strong> ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 28
        yield "
                        <table class=\"table table-bordered\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th>Test Stage</th>
                                <th>Status</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("results", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 38, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["stage"] => $context["result"]) {
            // line 39
            yield "                                <tr class=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "success", [], "any", false, false, false, 39)) ? ("table-success") : ("table-danger"));
            yield "\">
                                    <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["stage"], "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 42
            if (CoreExtension::getAttribute($this->env, $this->source, $context["result"], "success", [], "any", false, false, false, 42)) {
                // line 43
                yield "                                            <span class=\"badge bg-success\">Success</span>
                                        ";
            } else {
                // line 45
                yield "                                            <span class=\"badge bg-danger\">Failed</span>
                                        ";
            }
            // line 47
            yield "                                    </td>
                                    <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "message", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['stage'], $context['result'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                            </tbody>
                        </table>

                        ";
        // line 54
        if ((array_key_exists("success", $context) && (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 54, $this->source); })()))) {
            // line 55
            yield "                            <div class=\"alert alert-info mt-3\">
                                <i class=\"fas fa-info-circle\"></i> Check your email inbox (and spam folder) for the test message.
                            </div>
                        ";
        } else {
            // line 59
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_email");
            yield "\" class=\"btn btn-primary mt-3\">
                                <i class=\"fas fa-sync-alt\"></i> Run Tests Again
                            </a>
                        ";
        }
        // line 63
        yield "                    </div>
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
        return "test/email_test.html.twig";
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
        return array (  203 => 63,  195 => 59,  189 => 55,  187 => 54,  182 => 51,  173 => 48,  170 => 47,  166 => 45,  162 => 43,  160 => 42,  155 => 40,  150 => 39,  146 => 38,  134 => 28,  128 => 25,  125 => 24,  122 => 23,  119 => 21,  113 => 17,  110 => 16,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/test/email_test.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Email Test{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2>Email System Test</h2>
                    </div>
                    <div class=\"card-body\">
                        {# Check if 'success' exists and is true #}
                        {% if success is defined and success %}
                            <div class=\"alert alert-success\">
                                <i class=\"fas fa-check-circle\"></i> All tests passed successfully!
                            </div>
                        {% endif %}

                        {# Show error only if it exists #}
                        {% if error is defined and error %}
                            <div class=\"alert alert-danger\">
                                <i class=\"fas fa-exclamation-triangle\"></i> <strong>Error:</strong> {{ error }}
                            </div>
                        {% endif %}

                        <table class=\"table table-bordered\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th>Test Stage</th>
                                <th>Status</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for stage, result in results|default([]) %}
                                <tr class=\"{{ result.success ? 'table-success' : 'table-danger' }}\">
                                    <td>{{ stage }}</td>
                                    <td>
                                        {% if result.success %}
                                            <span class=\"badge bg-success\">Success</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Failed</span>
                                        {% endif %}
                                    </td>
                                    <td>{{ result.message }}</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>

                        {% if success is defined and success %}
                            <div class=\"alert alert-info mt-3\">
                                <i class=\"fas fa-info-circle\"></i> Check your email inbox (and spam folder) for the test message.
                            </div>
                        {% else %}
                            <a href=\"{{ path('test_email') }}\" class=\"btn btn-primary mt-3\">
                                <i class=\"fas fa-sync-alt\"></i> Run Tests Again
                            </a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "test/email_test.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\test\\email_test.html.twig");
    }
}
