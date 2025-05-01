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

/* profile/statistics.html.twig */
class __TwigTemplate_bea745d3b7fa5d3b87d95cf9e727efaa extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/statistics.html.twig", 1);
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

        yield "Admin Statistics";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Admin Statistics Dashboard</h1>

        <div class=\"mb-4\">
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics", ["show" => "general"]);
        yield "\"
               class=\"btn ";
        // line 11
        yield ((((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 11, $this->source); })()) == "general")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                General Stats
            </a>
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics", ["show" => "roles"]);
        yield "\"
               class=\"btn ";
        // line 15
        yield ((((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 15, $this->source); })()) == "roles")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                Role Distribution
            </a>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics", ["show" => "status"]);
        yield "\"
               class=\"btn ";
        // line 19
        yield ((((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 19, $this->source); })()) == "status")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                User Status
            </a>
        </div>

        <div class=\"card shadow\">
            <div class=\"card-body\">
                ";
        // line 26
        if (((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 26, $this->source); })()) == "general")) {
            // line 27
            yield "                    <h2 class=\"card-title\">General Statistics</h2>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"card text-white bg-success mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Total Users</h5>
                                    <p class=\"card-text display-4\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 33, $this->source); })()), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card text-white bg-info mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Active Users</h5>
                                    <p class=\"card-text display-4\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeUsers"]) || array_key_exists("activeUsers", $context) ? $context["activeUsers"] : (function () { throw new RuntimeError('Variable "activeUsers" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card text-white bg-danger mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Blocked Users</h5>
                                    <p class=\"card-text display-4\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedUsers"]) || array_key_exists("blockedUsers", $context) ? $context["blockedUsers"] : (function () { throw new RuntimeError('Variable "blockedUsers" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        </div>
                    </div>

                ";
        } elseif ((        // line 55
(isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 55, $this->source); })()) == "roles")) {
            // line 56
            yield "                    <h2 class=\"card-title\">Role Distribution</h2>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <canvas id=\"roleChart\" height=\"300\"></canvas>
                        </div>
                        <div class=\"col-md-6\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th>Role</th>
                                    <th>Count</th>
                                    <th>Percentage</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roleCounts"]) || array_key_exists("roleCounts", $context) ? $context["roleCounts"] : (function () { throw new RuntimeError('Variable "roleCounts" does not exist.', 71, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["role"] => $context["count"]) {
                // line 72
                yield "                                    <tr>
                                        <td>";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 73, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73), [], "array", false, false, false, 73), "html", null, true);
                yield "</td>
                                        <td>";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
                yield "</td>
                                        <td>";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["count"] / (isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 75, $this->source); })())) * 100), 1), "html", null, true);
                yield "%</td>
                                    </tr>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['role'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "                                </tbody>
                            </table>
                        </div>
                    </div>

                ";
        } elseif ((        // line 83
(isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 83, $this->source); })()) == "status")) {
            // line 84
            yield "                    <h2 class=\"card-title\">User Status</h2>
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <canvas id=\"statusChart\" height=\"300\"></canvas>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card bg-light mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Status Summary</h5>
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                            Active Users
                                            <span class=\"badge bg-success rounded-pill\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeUsers"]) || array_key_exists("activeUsers", $context) ? $context["activeUsers"] : (function () { throw new RuntimeError('Variable "activeUsers" does not exist.', 96, $this->source); })()), "html", null, true);
            yield "</span>
                                        </li>
                                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                            Blocked Users
                                            <span class=\"badge bg-danger rounded-pill\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedUsers"]) || array_key_exists("blockedUsers", $context) ? $context["blockedUsers"] : (function () { throw new RuntimeError('Variable "blockedUsers" does not exist.', 100, $this->source); })()), "html", null, true);
            yield "</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 108
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        ";
        // line 117
        if (((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 117, $this->source); })()) == "roles")) {
            // line 118
            yield "        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('roleChart').getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ";
            // line 123
            yield json_encode((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 123, $this->source); })()));
            yield ",
                    datasets: [{
                        data: ";
            // line 125
            yield json_encode((isset($context["roleCounts"]) || array_key_exists("roleCounts", $context) ? $context["roleCounts"] : (function () { throw new RuntimeError('Variable "roleCounts" does not exist.', 125, $this->source); })()));
            yield ",
                        backgroundColor: [
                            '#4e73df',
                            '#1cc88a',
                            '#36b9cc',
                            '#f6c23e',
                            '#e74a3b'
                        ],
                        hoverBackgroundColor: [
                            '#2e59d9',
                            '#17a673',
                            '#2c9faf',
                            '#dda20a',
                            '#be2617'
                        ],
                        hoverBorderColor: \"rgba(234, 236, 244, 1)\",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `\${label}: \${value} (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });
        });
        ";
        }
        // line 165
        yield "
        ";
        // line 166
        if (((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 166, $this->source); })()) == "status")) {
            // line 167
            yield "        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('statusChart').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Active Users', 'Blocked Users'],
                    datasets: [{
                        data: [";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeUsers"]) || array_key_exists("activeUsers", $context) ? $context["activeUsers"] : (function () { throw new RuntimeError('Variable "activeUsers" does not exist.', 174, $this->source); })()), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedUsers"]) || array_key_exists("blockedUsers", $context) ? $context["blockedUsers"] : (function () { throw new RuntimeError('Variable "blockedUsers" does not exist.', 174, $this->source); })()), "html", null, true);
            yield "],
                        backgroundColor: ['#1cc88a', '#e74a3b'],
                        hoverBackgroundColor: ['#17a673', '#be2617'],
                        hoverBorderColor: \"rgba(234, 236, 244, 1)\",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `\${label}: \${value} (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });
        });
        ";
        }
        // line 202
        yield "    </script>
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
        return "profile/statistics.html.twig";
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
        return array (  425 => 202,  392 => 174,  383 => 167,  381 => 166,  378 => 165,  335 => 125,  330 => 123,  323 => 118,  321 => 117,  314 => 114,  301 => 113,  287 => 108,  276 => 100,  269 => 96,  255 => 84,  253 => 83,  246 => 78,  229 => 75,  225 => 74,  221 => 73,  218 => 72,  201 => 71,  184 => 56,  182 => 55,  173 => 49,  162 => 41,  151 => 33,  143 => 27,  141 => 26,  131 => 19,  127 => 18,  121 => 15,  117 => 14,  111 => 11,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Statistics{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Admin Statistics Dashboard</h1>

        <div class=\"mb-4\">
            <a href=\"{{ path('admin_statistics', {'show': 'general'}) }}\"
               class=\"btn {{ show == 'general' ? 'btn-primary' : 'btn-outline-primary' }}\">
                General Stats
            </a>
            <a href=\"{{ path('admin_statistics', {'show': 'roles'}) }}\"
               class=\"btn {{ show == 'roles' ? 'btn-primary' : 'btn-outline-primary' }}\">
                Role Distribution
            </a>
            <a href=\"{{ path('admin_statistics', {'show': 'status'}) }}\"
               class=\"btn {{ show == 'status' ? 'btn-primary' : 'btn-outline-primary' }}\">
                User Status
            </a>
        </div>

        <div class=\"card shadow\">
            <div class=\"card-body\">
                {% if show == 'general' %}
                    <h2 class=\"card-title\">General Statistics</h2>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"card text-white bg-success mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Total Users</h5>
                                    <p class=\"card-text display-4\">{{ totalUsers }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card text-white bg-info mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Active Users</h5>
                                    <p class=\"card-text display-4\">{{ activeUsers }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card text-white bg-danger mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Blocked Users</h5>
                                    <p class=\"card-text display-4\">{{ blockedUsers }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                {% elseif show == 'roles' %}
                    <h2 class=\"card-title\">Role Distribution</h2>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <canvas id=\"roleChart\" height=\"300\"></canvas>
                        </div>
                        <div class=\"col-md-6\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th>Role</th>
                                    <th>Count</th>
                                    <th>Percentage</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for role, count in roleCounts %}
                                    <tr>
                                        <td>{{ roles[loop.index0] }}</td>
                                        <td>{{ count }}</td>
                                        <td>{{ ((count / totalUsers) * 100)|number_format(1) }}%</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>

                {% elseif show == 'status' %}
                    <h2 class=\"card-title\">User Status</h2>
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <canvas id=\"statusChart\" height=\"300\"></canvas>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card bg-light mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Status Summary</h5>
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                            Active Users
                                            <span class=\"badge bg-success rounded-pill\">{{ activeUsers }}</span>
                                        </li>
                                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                            Blocked Users
                                            <span class=\"badge bg-danger rounded-pill\">{{ blockedUsers }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        {% if show == 'roles' %}
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('roleChart').getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: {{ roles|json_encode|raw }},
                    datasets: [{
                        data: {{ roleCounts|json_encode|raw }},
                        backgroundColor: [
                            '#4e73df',
                            '#1cc88a',
                            '#36b9cc',
                            '#f6c23e',
                            '#e74a3b'
                        ],
                        hoverBackgroundColor: [
                            '#2e59d9',
                            '#17a673',
                            '#2c9faf',
                            '#dda20a',
                            '#be2617'
                        ],
                        hoverBorderColor: \"rgba(234, 236, 244, 1)\",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `\${label}: \${value} (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });
        });
        {% endif %}

        {% if show == 'status' %}
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('statusChart').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Active Users', 'Blocked Users'],
                    datasets: [{
                        data: [{{ activeUsers }}, {{ blockedUsers }}],
                        backgroundColor: ['#1cc88a', '#e74a3b'],
                        hoverBackgroundColor: ['#17a673', '#be2617'],
                        hoverBorderColor: \"rgba(234, 236, 244, 1)\",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `\${label}: \${value} (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });
        });
        {% endif %}
    </script>
{% endblock %}", "profile/statistics.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\profile\\statistics.html.twig");
    }
}
