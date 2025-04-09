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

/* dashboard/driver/dashboard.html.twig */
class __TwigTemplate_df7a9ccb72a6006fb6668ced8e1ada0a extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/driver/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/driver/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/driver/dashboard.html.twig", 1);
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

        yield "Driver Dashboard";
        
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
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 9
        yield "            <nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse\">
                <div class=\"position-sticky pt-3\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active text-white\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("driver_dashboard");
        yield "\">
                                <i class=\"fas fa-tachometer-alt me-2\"></i>Dashboard
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                                <i class=\"fas fa-user me-2\"></i>My Profile
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("driver_vehicles");
        yield "\">
                                <i class=\"fas fa-car me-2\"></i>My Vehicles
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("driver_schedule");
        yield "\">
                                <i class=\"fas fa-calendar me-2\"></i>Schedule
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("driver_earnings");
        yield "\">
                                <i class=\"fas fa-dollar-sign me-2\"></i>Earnings
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            ";
        // line 42
        yield "            <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                    <h1 class=\"h2\">Driver Dashboard</h1>
                    <div class=\"btn-toolbar mb-2 mb-md-0\">
                        <div class=\"btn-group me-2\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-primary\">
                                <i class=\"fas fa-car me-1\"></i> Go Online
                            </button>
                        </div>
                    </div>
                </div>

                ";
        // line 55
        yield "                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <div class=\"card text-white bg-primary mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Today's Rides</h5>
                                <p class=\"card-text display-4\">8</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"card text-white bg-success mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Today's Earnings</h5>
                                <p class=\"card-text display-4\">\$187</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"card text-white bg-info mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Rating</h5>
                                <p class=\"card-text display-4\">4.9 <i class=\"fas fa-star\"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"card text-white bg-warning mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Online Time</h5>
                                <p class=\"card-text display-4\">5h 22m</p>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 91
        yield "                <div class=\"row mb-4\">
                    <div class=\"col-md-8\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h5>Current Ride</h5>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"map\" style=\"height: 300px; background: #eee;\"></div>
                                <div class=\"mt-3\">
                                    <h6>Customer: Sarah M.</h6>
                                    <p>From: Grand Central Station</p>
                                    <p>To: JFK Airport</p>
                                    <p>Estimated Fare: \$45.00</p>
                                    <button class=\"btn btn-success\">Complete Ride</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h5>Ride Queue</h5>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        #1256 - Downtown
                                        <span class=\"badge bg-primary\">3 min</span>
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        #1257 - Upper East Side
                                        <span class=\"badge bg-primary\">12 min</span>
                                    </li>
                                </ul>
                            </div>
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
        return "dashboard/driver/dashboard.html.twig";
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
        return array (  204 => 91,  167 => 55,  153 => 42,  142 => 33,  134 => 28,  126 => 23,  118 => 18,  110 => 13,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Driver Dashboard{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            {# Sidebar #}
            <nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse\">
                <div class=\"position-sticky pt-3\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active text-white\" href=\"{{ path('driver_dashboard') }}\">
                                <i class=\"fas fa-tachometer-alt me-2\"></i>Dashboard
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"{{ path('app_profile') }}\">
                                <i class=\"fas fa-user me-2\"></i>My Profile
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"{{ path('driver_vehicles') }}\">
                                <i class=\"fas fa-car me-2\"></i>My Vehicles
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"{{ path('driver_schedule') }}\">
                                <i class=\"fas fa-calendar me-2\"></i>Schedule
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"{{ path('driver_earnings') }}\">
                                <i class=\"fas fa-dollar-sign me-2\"></i>Earnings
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            {# Main Content #}
            <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                    <h1 class=\"h2\">Driver Dashboard</h1>
                    <div class=\"btn-toolbar mb-2 mb-md-0\">
                        <div class=\"btn-group me-2\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-primary\">
                                <i class=\"fas fa-car me-1\"></i> Go Online
                            </button>
                        </div>
                    </div>
                </div>

                {# Stats Cards #}
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <div class=\"card text-white bg-primary mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Today's Rides</h5>
                                <p class=\"card-text display-4\">8</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"card text-white bg-success mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Today's Earnings</h5>
                                <p class=\"card-text display-4\">\$187</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"card text-white bg-info mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Rating</h5>
                                <p class=\"card-text display-4\">4.9 <i class=\"fas fa-star\"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"card text-white bg-warning mb-3\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Online Time</h5>
                                <p class=\"card-text display-4\">5h 22m</p>
                            </div>
                        </div>
                    </div>
                </div>

                {# Current Ride & Map #}
                <div class=\"row mb-4\">
                    <div class=\"col-md-8\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h5>Current Ride</h5>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"map\" style=\"height: 300px; background: #eee;\"></div>
                                <div class=\"mt-3\">
                                    <h6>Customer: Sarah M.</h6>
                                    <p>From: Grand Central Station</p>
                                    <p>To: JFK Airport</p>
                                    <p>Estimated Fare: \$45.00</p>
                                    <button class=\"btn btn-success\">Complete Ride</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h5>Ride Queue</h5>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        #1256 - Downtown
                                        <span class=\"badge bg-primary\">3 min</span>
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        #1257 - Upper East Side
                                        <span class=\"badge bg-primary\">12 min</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
{% endblock %}", "dashboard/driver/dashboard.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\dashboard\\driver\\dashboard.html.twig");
    }
}
