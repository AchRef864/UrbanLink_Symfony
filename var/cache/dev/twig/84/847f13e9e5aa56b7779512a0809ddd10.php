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
class __TwigTemplate_9bafde167f4484e27a4f8bfe8adef569 extends Template
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
            <div class=\"flex flex-wrap gap-4 mb-4\">
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics", ["show" => "general"]);
        yield "\"
                   class=\"btn ";
        // line 12
        yield ((((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 12, $this->source); })()) == "general")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                    General Stats
                </a>
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics", ["show" => "roles"]);
        yield "\"
                   class=\"btn ";
        // line 16
        yield ((((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 16, $this->source); })()) == "roles")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                    Role Distribution
                </a>
                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics", ["show" => "status"]);
        yield "\"
                   class=\"btn ";
        // line 20
        yield ((((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 20, $this->source); })()) == "status")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                    User Status
                </a>
            </div>

            <div>
                <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_pdf");
        yield "\"
                   class=\"inline-flex items-center bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300\">
                    <i class=\"ni ni-single-copy-04 mr-2\"></i>
                    Generate Complete Users Report
                </a>
            </div>
        </div>

        <div class=\"card shadow\">
            <div class=\"card-body\">
                ";
        // line 36
        if (((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 36, $this->source); })()) == "general")) {
            // line 37
            yield "                    <h2 class=\"card-title\">General Statistics</h2>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"card text-white bg-success mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Total Users</h5>
                                    <p class=\"card-text display-4\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 43, $this->source); })()), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card text-white bg-info mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Active Users</h5>
                                    <p class=\"card-text display-4\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeUsers"]) || array_key_exists("activeUsers", $context) ? $context["activeUsers"] : (function () { throw new RuntimeError('Variable "activeUsers" does not exist.', 51, $this->source); })()), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card text-white bg-danger mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Blocked Users</h5>
                                    <p class=\"card-text display-4\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedUsers"]) || array_key_exists("blockedUsers", $context) ? $context["blockedUsers"] : (function () { throw new RuntimeError('Variable "blockedUsers" does not exist.', 59, $this->source); })()), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        </div>
                    </div>

                ";
        } elseif ((        // line 65
(isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 65, $this->source); })()) == "roles")) {
            // line 66
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
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roleCounts"]) || array_key_exists("roleCounts", $context) ? $context["roleCounts"] : (function () { throw new RuntimeError('Variable "roleCounts" does not exist.', 81, $this->source); })()));
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
                // line 82
                yield "                                    <tr>
                                        <td>";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 83, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 83), [], "array", false, false, false, 83), "html", null, true);
                yield "</td>
                                        <td>";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
                yield "</td>
                                        <td>";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["count"] / (isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 85, $this->source); })())) * 100), 1), "html", null, true);
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
            // line 88
            yield "                                </tbody>
                            </table>
                        </div>
                    </div>

                ";
        } elseif ((        // line 93
(isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 93, $this->source); })()) == "status")) {
            // line 94
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
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeUsers"]) || array_key_exists("activeUsers", $context) ? $context["activeUsers"] : (function () { throw new RuntimeError('Variable "activeUsers" does not exist.', 106, $this->source); })()), "html", null, true);
            yield "</span>
                                        </li>
                                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                            Blocked Users
                                            <span class=\"badge bg-danger rounded-pill\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedUsers"]) || array_key_exists("blockedUsers", $context) ? $context["blockedUsers"] : (function () { throw new RuntimeError('Variable "blockedUsers" does not exist.', 110, $this->source); })()), "html", null, true);
            yield "</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 118
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 123
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

        // line 124
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        ";
        // line 127
        if (((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 127, $this->source); })()) == "roles")) {
            // line 128
            yield "        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('roleChart').getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ";
            // line 133
            yield json_encode((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 133, $this->source); })()));
            yield ",
                    datasets: [{
                        data: ";
            // line 135
            yield json_encode((isset($context["roleCounts"]) || array_key_exists("roleCounts", $context) ? $context["roleCounts"] : (function () { throw new RuntimeError('Variable "roleCounts" does not exist.', 135, $this->source); })()));
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
        // line 175
        yield "
        ";
        // line 176
        if (((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 176, $this->source); })()) == "status")) {
            // line 177
            yield "        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('statusChart').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Active Users', 'Blocked Users'],
                    datasets: [{
                        data: [";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeUsers"]) || array_key_exists("activeUsers", $context) ? $context["activeUsers"] : (function () { throw new RuntimeError('Variable "activeUsers" does not exist.', 184, $this->source); })()), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedUsers"]) || array_key_exists("blockedUsers", $context) ? $context["blockedUsers"] : (function () { throw new RuntimeError('Variable "blockedUsers" does not exist.', 184, $this->source); })()), "html", null, true);
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
        // line 212
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
        return array (  438 => 212,  405 => 184,  396 => 177,  394 => 176,  391 => 175,  348 => 135,  343 => 133,  336 => 128,  334 => 127,  327 => 124,  314 => 123,  300 => 118,  289 => 110,  282 => 106,  268 => 94,  266 => 93,  259 => 88,  242 => 85,  238 => 84,  234 => 83,  231 => 82,  214 => 81,  197 => 66,  195 => 65,  186 => 59,  175 => 51,  164 => 43,  156 => 37,  154 => 36,  141 => 26,  132 => 20,  128 => 19,  122 => 16,  118 => 15,  112 => 12,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Statistics{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Admin Statistics Dashboard</h1>

        <div class=\"mb-4\">
            <div class=\"flex flex-wrap gap-4 mb-4\">
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

            <div>
                <a href=\"{{ path('admin_users_pdf') }}\"
                   class=\"inline-flex items-center bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300\">
                    <i class=\"ni ni-single-copy-04 mr-2\"></i>
                    Generate Complete Users Report
                </a>
            </div>
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
