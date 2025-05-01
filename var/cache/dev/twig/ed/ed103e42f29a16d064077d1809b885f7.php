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

/* dashboard/index.html.twig */
class __TwigTemplate_4bff185931f280c879b538d276b34135 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "dashboard/index.html.twig", 2);
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

        yield "Client Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- Add Argon Dashboard CSS if not already in base -->
    <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "    <body class=\"m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500\">
    <div class=\"absolute w-full bg-blue-500 dark:hidden min-h-75\"></div>

    <main class=\"relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl\">
        <!-- Navbar -->
        ";
        // line 18
        yield from $this->loadTemplate("partials/client_navbar.html.twig", "dashboard/index.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "
        <div class=\"w-full px-6 py-6 mx-auto\">
            <!-- Flash Messages -->
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "                <div class=\"alert alert-warning mb-4 p-4 rounded-lg bg-orange-100 text-orange-700\">
                    ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
            <!-- Welcome Header -->
            <div class=\"mb-8\">
                <h1 class=\"text-3xl font-bold text-slate-700 dark:text-white\">Welcome back, ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "firstname", [], "any", false, false, false, 30), "html", null, true);
        yield "!</h1>
                <p class=\"text-slate-500 dark:text-slate-300\">Here's your activity summary</p>
            </div>

            <!-- Quick Stats Row -->
            <div class=\"flex flex-wrap -mx-3 mb-6\">
                <!-- Active Projects Card -->
                <div class=\"w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4\">
                    <div class=\"relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 rounded-2xl\">
                        <div class=\"flex-auto p-4\">
                            <div class=\"flex items-center\">
                                <div class=\"bg-gradient-to-tl from-blue-500 to-violet-500 w-12 h-12 rounded-circle flex items-center justify-center\">
                                    <i class=\"fa fa-folder-open text-white text-lg\"></i>
                                </div>
                                <div class=\"ml-4\">
                                    <h5 class=\"dark:text-white\">Active Projects</h5>
                                    <p class=\"text-2xl font-bold dark:text-white\">3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Tasks Card -->
                <div class=\"w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4\">
                    <div class=\"relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 rounded-2xl\">
                        <div class=\"flex-auto p-4\">
                            <div class=\"flex items-center\">
                                <div class=\"bg-gradient-to-tl from-emerald-500 to-teal-400 w-12 h-12 rounded-circle flex items-center justify-center\">
                                    <i class=\"fa fa-tasks text-white text-lg\"></i>
                                </div>
                                <div class=\"ml-4\">
                                    <h5 class=\"dark:text-white\">Pending Tasks</h5>
                                    <p class=\"text-2xl font-bold dark:text-white\">5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class=\"flex flex-wrap -mx-3\">
                <!-- Recent Activity -->
                <div class=\"w-full max-w-full px-3 lg:w-7/12 lg:flex-none\">
                    <div class=\"bg-white shadow-xl dark:bg-slate-850 rounded-2xl p-6\">
                        <h3 class=\"text-lg font-semibold mb-4 dark:text-white\">Recent Activity</h3>
                        <div class=\"space-y-4\">
                            <div class=\"flex items-center p-3 hover:bg-gray-50 dark:hover:bg-slate-800 rounded-lg transition-colors\">
                                <div class=\"bg-blue-100 p-2 rounded-lg\">
                                    <i class=\"fa fa-file-upload text-blue-500\"></i>
                                </div>
                                <div class=\"ml-4\">
                                    <p class=\"text-sm font-medium dark:text-white\">New document uploaded</p>
                                    <p class=\"text-sm text-slate-500\">2 hours ago</p>
                                </div>
                            </div>
                            <!-- Add more activity items -->
                        </div>
                    </div>
                </div>

                <!-- Project Progress -->
                <div class=\"w-full max-w-full px-3 mt-6 lg:mt-0 lg:w-5/12 lg:flex-none\">
                    <div class=\"bg-white shadow-xl dark:bg-slate-850 rounded-2xl p-6\">
                        <h3 class=\"text-lg font-semibold mb-4 dark:text-white\">Project Progress</h3>
                        <div class=\"space-y-4\">
                            <div class=\"relative pt-4\">
                                <div class=\"flex mb-2 items-center justify-between\">
                                    <div>
                                        <span class=\"text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-sky-600 bg-sky-200\">
                                            Web Design
                                        </span>
                                    </div>
                                    <div class=\"text-right\">
                                        <span class=\"text-xs font-semibold inline-block text-sky-600\">
                                            75%
                                        </span>
                                    </div>
                                </div>
                                <div class=\"overflow-hidden h-2 mb-4 text-xs flex rounded bg-sky-100\">
                                    <div style=\"width:75%\" class=\"shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-sky-500\"></div>
                                </div>
                            </div>
                            <!-- Add more progress bars -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Deadlines -->
            <div class=\"mt-6 bg-white shadow-xl dark:bg-slate-850 rounded-2xl p-6\">
                <h3 class=\"text-lg font-semibold mb-4 dark:text-white\">Upcoming Deadlines</h3>
                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4\">
                    <div class=\"p-4 border rounded-lg hover:shadow-md transition-shadow\">
                        <div class=\"flex items-center justify-between\">
                            <div>
                                <p class=\"font-medium dark:text-white\">Project Deliverable</p>
                                <p class=\"text-sm text-slate-500\">Due: 2023-08-15</p>
                            </div>
                            <span class=\"bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded-full\">
                                High Priority
                            </span>
                        </div>
                    </div>
                    <!-- Add more deadline items -->
                </div>
            </div>
        </div>
    </main>

    ";
        // line 141
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 145
        yield "    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 141
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

        // line 142
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <!-- Add any dashboard-specific JS here -->
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
        return "dashboard/index.html.twig";
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
        return array (  310 => 142,  297 => 141,  285 => 145,  283 => 141,  169 => 30,  164 => 27,  155 => 24,  152 => 23,  148 => 22,  143 => 19,  141 => 18,  134 => 13,  121 => 12,  108 => 9,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/index.html.twig #}
{% extends 'basef.html.twig' %}

{% block title %}Client Dashboard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Add Argon Dashboard CSS if not already in base -->
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
    <body class=\"m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500\">
    <div class=\"absolute w-full bg-blue-500 dark:hidden min-h-75\"></div>

    <main class=\"relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl\">
        <!-- Navbar -->
        {% include 'partials/client_navbar.html.twig' %}

        <div class=\"w-full px-6 py-6 mx-auto\">
            <!-- Flash Messages -->
            {% for message in app.flashes('warning') %}
                <div class=\"alert alert-warning mb-4 p-4 rounded-lg bg-orange-100 text-orange-700\">
                    {{ message }}
                </div>
            {% endfor %}

            <!-- Welcome Header -->
            <div class=\"mb-8\">
                <h1 class=\"text-3xl font-bold text-slate-700 dark:text-white\">Welcome back, {{ app.user.firstname }}!</h1>
                <p class=\"text-slate-500 dark:text-slate-300\">Here's your activity summary</p>
            </div>

            <!-- Quick Stats Row -->
            <div class=\"flex flex-wrap -mx-3 mb-6\">
                <!-- Active Projects Card -->
                <div class=\"w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4\">
                    <div class=\"relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 rounded-2xl\">
                        <div class=\"flex-auto p-4\">
                            <div class=\"flex items-center\">
                                <div class=\"bg-gradient-to-tl from-blue-500 to-violet-500 w-12 h-12 rounded-circle flex items-center justify-center\">
                                    <i class=\"fa fa-folder-open text-white text-lg\"></i>
                                </div>
                                <div class=\"ml-4\">
                                    <h5 class=\"dark:text-white\">Active Projects</h5>
                                    <p class=\"text-2xl font-bold dark:text-white\">3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Tasks Card -->
                <div class=\"w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4\">
                    <div class=\"relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 rounded-2xl\">
                        <div class=\"flex-auto p-4\">
                            <div class=\"flex items-center\">
                                <div class=\"bg-gradient-to-tl from-emerald-500 to-teal-400 w-12 h-12 rounded-circle flex items-center justify-center\">
                                    <i class=\"fa fa-tasks text-white text-lg\"></i>
                                </div>
                                <div class=\"ml-4\">
                                    <h5 class=\"dark:text-white\">Pending Tasks</h5>
                                    <p class=\"text-2xl font-bold dark:text-white\">5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class=\"flex flex-wrap -mx-3\">
                <!-- Recent Activity -->
                <div class=\"w-full max-w-full px-3 lg:w-7/12 lg:flex-none\">
                    <div class=\"bg-white shadow-xl dark:bg-slate-850 rounded-2xl p-6\">
                        <h3 class=\"text-lg font-semibold mb-4 dark:text-white\">Recent Activity</h3>
                        <div class=\"space-y-4\">
                            <div class=\"flex items-center p-3 hover:bg-gray-50 dark:hover:bg-slate-800 rounded-lg transition-colors\">
                                <div class=\"bg-blue-100 p-2 rounded-lg\">
                                    <i class=\"fa fa-file-upload text-blue-500\"></i>
                                </div>
                                <div class=\"ml-4\">
                                    <p class=\"text-sm font-medium dark:text-white\">New document uploaded</p>
                                    <p class=\"text-sm text-slate-500\">2 hours ago</p>
                                </div>
                            </div>
                            <!-- Add more activity items -->
                        </div>
                    </div>
                </div>

                <!-- Project Progress -->
                <div class=\"w-full max-w-full px-3 mt-6 lg:mt-0 lg:w-5/12 lg:flex-none\">
                    <div class=\"bg-white shadow-xl dark:bg-slate-850 rounded-2xl p-6\">
                        <h3 class=\"text-lg font-semibold mb-4 dark:text-white\">Project Progress</h3>
                        <div class=\"space-y-4\">
                            <div class=\"relative pt-4\">
                                <div class=\"flex mb-2 items-center justify-between\">
                                    <div>
                                        <span class=\"text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-sky-600 bg-sky-200\">
                                            Web Design
                                        </span>
                                    </div>
                                    <div class=\"text-right\">
                                        <span class=\"text-xs font-semibold inline-block text-sky-600\">
                                            75%
                                        </span>
                                    </div>
                                </div>
                                <div class=\"overflow-hidden h-2 mb-4 text-xs flex rounded bg-sky-100\">
                                    <div style=\"width:75%\" class=\"shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-sky-500\"></div>
                                </div>
                            </div>
                            <!-- Add more progress bars -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Deadlines -->
            <div class=\"mt-6 bg-white shadow-xl dark:bg-slate-850 rounded-2xl p-6\">
                <h3 class=\"text-lg font-semibold mb-4 dark:text-white\">Upcoming Deadlines</h3>
                <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4\">
                    <div class=\"p-4 border rounded-lg hover:shadow-md transition-shadow\">
                        <div class=\"flex items-center justify-between\">
                            <div>
                                <p class=\"font-medium dark:text-white\">Project Deliverable</p>
                                <p class=\"text-sm text-slate-500\">Due: 2023-08-15</p>
                            </div>
                            <span class=\"bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded-full\">
                                High Priority
                            </span>
                        </div>
                    </div>
                    <!-- Add more deadline items -->
                </div>
            </div>
        </div>
    </main>

    {% block javascripts %}
        {{ parent() }}
        <!-- Add any dashboard-specific JS here -->
    {% endblock %}
    </body>
{% endblock %}", "dashboard/index.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\dashboard\\index.html.twig");
    }
}
