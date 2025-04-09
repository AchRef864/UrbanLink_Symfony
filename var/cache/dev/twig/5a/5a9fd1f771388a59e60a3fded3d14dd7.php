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

/* dashboard/taxi/dashboard.html.twig */
class __TwigTemplate_264ee7255dbc163727be1ec1961e8c44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/taxi/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/taxi/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/taxi/dashboard.html.twig", 2);
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

        yield "Taxi Dashboard";
        
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
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 10
        yield "            <nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark sidebar\">
                <div class=\"position-sticky pt-3\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active text-white\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_dashboard");
        yield "\">
                                <i class=\"fas fa-tachometer-alt me-2\"></i>Dashboard
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                                <i class=\"fas fa-user me-2\"></i>My Profile
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_rides");
        yield "\">
                                <i class=\"fas fa-car me-2\"></i>My Rides
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_availability");
        yield "\">
                                <i class=\"fas fa-toggle-on me-2\"></i>Availability
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            ";
        // line 38
        yield "            <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                    <h1 class=\"h2\">Taxi Dashboard</h1>
                    <div class=\"btn-toolbar mb-2 mb-md-0\">
                        <span class=\"me-3\">Welcome, ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
        yield "</span>
                        <div class=\"btn-group me-2\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">
                                <i class=\"fas fa-bell\"></i>
                            </button>
                        </div>
                    </div>
                </div>

                ";
        // line 52
        yield "                <div class=\"row mb-4\">
                    <div class=\"col-md-4\">
                        <div class=\"card text-white bg-primary mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Today's Rides</h5>
                                <p class=\"card-text display-4\">12</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card text-white bg-success mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Earnings</h5>
                                <p class=\"card-text display-4\">\$245.50</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card text-white bg-info mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Rating</h5>
                                <p class=\"card-text display-4\">4.8/5</p>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 80
        yield "                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5>Recent Rides</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Pickup</th>
                                    <th>Dropoff</th>
                                    <th>Fare</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#TR-1254</td>
                                    <td>John Doe</td>
                                    <td>Main Street</td>
                                    <td>Airport</td>
                                    <td>\$25.00</td>
                                    <td><span class=\"badge bg-success\">Completed</span></td>
                                </tr>
                                ";
        // line 107
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
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
        return "dashboard/taxi/dashboard.html.twig";
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
        return array (  220 => 107,  192 => 80,  163 => 52,  151 => 42,  145 => 38,  134 => 29,  126 => 24,  118 => 19,  110 => 14,  104 => 10,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/taxi/dashboard.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Taxi Dashboard{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            {# Sidebar #}
            <nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark sidebar\">
                <div class=\"position-sticky pt-3\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active text-white\" href=\"{{ path('taxi_dashboard') }}\">
                                <i class=\"fas fa-tachometer-alt me-2\"></i>Dashboard
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"{{ path('app_profile') }}\">
                                <i class=\"fas fa-user me-2\"></i>My Profile
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"{{ path('taxi_rides') }}\">
                                <i class=\"fas fa-car me-2\"></i>My Rides
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"{{ path('taxi_availability') }}\">
                                <i class=\"fas fa-toggle-on me-2\"></i>Availability
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            {# Main Content #}
            <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                    <h1 class=\"h2\">Taxi Dashboard</h1>
                    <div class=\"btn-toolbar mb-2 mb-md-0\">
                        <span class=\"me-3\">Welcome, {{ app.user.name }}</span>
                        <div class=\"btn-group me-2\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">
                                <i class=\"fas fa-bell\"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {# Stats Cards #}
                <div class=\"row mb-4\">
                    <div class=\"col-md-4\">
                        <div class=\"card text-white bg-primary mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Today's Rides</h5>
                                <p class=\"card-text display-4\">12</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card text-white bg-success mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Earnings</h5>
                                <p class=\"card-text display-4\">\$245.50</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card text-white bg-info mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Rating</h5>
                                <p class=\"card-text display-4\">4.8/5</p>
                            </div>
                        </div>
                    </div>
                </div>

                {# Recent Activity #}
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5>Recent Rides</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Pickup</th>
                                    <th>Dropoff</th>
                                    <th>Fare</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#TR-1254</td>
                                    <td>John Doe</td>
                                    <td>Main Street</td>
                                    <td>Airport</td>
                                    <td>\$25.00</td>
                                    <td><span class=\"badge bg-success\">Completed</span></td>
                                </tr>
                                {# More rows would be dynamic data #}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
{% endblock %}", "dashboard/taxi/dashboard.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\dashboard\\taxi\\dashboard.html.twig");
    }
}
