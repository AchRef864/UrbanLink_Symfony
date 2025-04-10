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

/* dashboard/admin.html.twig */
class __TwigTemplate_76456d855b31fbb4dec3cddf0e402e15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/admin.html.twig", 2);
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

        yield "Admin Dashboard";
        
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
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <style>
        .iphone-calendar {
            width: 350px;
            border-radius: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: white;
        }
        .calendar-header {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 20px;
            text-align: center;
        }
        .calendar-weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            padding: 10px 0;
            background: #f8fafc;
        }
        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            padding: 10px;
        }
        .calendar-day {
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        .calendar-day.today {
            background: #3b82f6;
            color: white;
        }
        .sidenav-trigger i {
            display: block;
            width: 20px;
            height: 2px;
            background: #4a5568;
            margin: 4px 0;
            transition: all 0.3s;
        }
        .sidebar {
            width: 250px;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        .sidebar-open .sidebar {
            transform: translateX(0);
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            z-index: 10;
        }
        .sidebar-open .overlay {
            display: block;
        }
        @media (min-width: 1024px) {
            .sidebar {
                transform: translateX(0);
            }
            .sidenav-trigger {
                display: none;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
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

        // line 91
        yield "    <body class=\"m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500\">
    <div class=\"absolute w-full bg-blue-500 min-h-75\"></div>

    <!-- Sidebar Trigger -->
    <div class=\"fixed top-4 left-4 z-50 lg:hidden\">
        <a href=\"javascript:;\" class=\"sidenav-trigger p-2 bg-white rounded-lg shadow\">
            <div class=\"w-5 overflow-hidden\">
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all\"></i>
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all mt-1\"></i>
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all mt-1\"></i>
            </div>
        </a>
    </div>

    <!-- Overlay -->
    <div class=\"overlay\"></div>

    <!-- Sidebar -->
    <aside class=\"sidebar fixed inset-y-0 left-0 z-40 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto bg-white border-0 shadow-xl max-w-64 ease-nav-brand\">
        <div class=\"h-19\">
            <i class=\"absolute top-4 right-4 p-1 opacity-50 cursor-pointer fas fa-times text-slate-400 lg:hidden sidenav-close\"></i>
            <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700\" href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
                <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">Admin Panel</span>
            </a>
        </div>

        <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent\" />

        <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
            <ul class=\"flex flex-col pl-0 mb-0\">
                <li class=\"mt-0.5 w-full\">
                    <a class=\"py-2.7 bg-blue-500/13 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
                        <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                            <i class=\"fas fa-tachometer-alt text-blue-500\"></i>
                        </div>
                        <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Dashboard</span>
                    </a>
                </li>
                <li class=\"mt-0.5 w-full\">
                    <a class=\"py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_manage");
        yield "\">
                        <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                            <i class=\"fas fa-user-cog text-orange-500\"></i>
                        </div>
                        <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Manage Users</span>
                    </a>
                </li>
                <li class=\"mt-0.5 w-full\">
                    <a class=\"py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete");
        yield "\">
                        <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                            <i class=\"fas fa-user-edit text-cyan-500\"></i>
                        </div>
                        <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Edit Profiles</span>
                    </a>
                </li>
                <!-- edit my profile -->
                <li class=\"mt-0.5 w-full\">
                    <a class=\"py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\">
                        <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                            <i class=\"fas fa-user-edit text-green-500\"></i>
                        </div>
                        <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Edit My Profile</span>
                    </a>
                </li>

                <li class=\"mt-0.5 w-full\">
                    <form method=\"post\" action=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <button type=\"submit\" class=\"w-full py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors hover:bg-red-500/10\">
                            <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                                <i class=\"fas fa-sign-out-alt text-red-500\"></i>
                            </div>
                            <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <main class=\"relative h-full max-height-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl\">
        <!-- Navbar -->
        <nav class=\"relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start\">
            <div class=\"flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit\">
                <nav>
                    <h4 class=\"mb-0 font-bold text-slate-700\">Admin Dashboard</h4>
                </nav>
            </div>
        </nav>

        <div class=\"w-full px-6 py-6 mx-auto\">
            <!-- Calendar Container -->
            <div class=\"flex flex-col items-center justify-center min-h-[60vh]\">
                <!-- iPhone Style Calendar -->
                <div class=\"iphone-calendar mb-8\">
                    <div class=\"calendar-header\">
                        <h3 class=\"text-xl font-bold\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "F Y"), "html", null, true);
        yield "</h3>
                    </div>
                    <div class=\"calendar-weekdays\">
                        ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["S", "M", "T", "W", "T", "F", "S"]);
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 190
            yield "                            <div class=\"text-center text-sm text-slate-500 font-medium\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        yield "                    </div>
                    <div class=\"calendar-days\">
                        ";
        // line 194
        $context["firstDayOfMonth"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-01"), "w");
        // line 195
        yield "                        ";
        $context["daysInMonth"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "t");
        // line 196
        yield "                        ";
        $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "j");
        // line 197
        yield "
                        ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, ((isset($context["firstDayOfMonth"]) || array_key_exists("firstDayOfMonth", $context) ? $context["firstDayOfMonth"] : (function () { throw new RuntimeError('Variable "firstDayOfMonth" does not exist.', 198, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 199
            yield "                            <div class=\"calendar-day\"></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        yield "
                        ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["daysInMonth"]) || array_key_exists("daysInMonth", $context) ? $context["daysInMonth"] : (function () { throw new RuntimeError('Variable "daysInMonth" does not exist.', 202, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 203
            yield "                            <div class=\"calendar-day ";
            if (($context["day"] == (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 203, $this->source); })()))) {
                yield "today";
            } else {
                yield "hover:bg-gray-100";
            }
            yield "\">
                                ";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Sidebar toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const body = document.body;
            const sidenavTrigger = document.querySelector('.sidenav-trigger');
            const sidenavClose = document.querySelector('.sidenav-close');
            const overlay = document.querySelector('.overlay');

            if (sidenavTrigger) {
                sidenavTrigger.addEventListener('click', function() {
                    body.classList.add('sidebar-open');
                });
            }

            if (sidenavClose) {
                sidenavClose.addEventListener('click', function() {
                    body.classList.remove('sidebar-open');
                });
            }

            if (overlay) {
                overlay.addEventListener('click', function() {
                    body.classList.remove('sidebar-open');
                });
            }
        });
    </script>
    </body>
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
        return "dashboard/admin.html.twig";
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
        return array (  402 => 207,  393 => 204,  384 => 203,  380 => 202,  377 => 201,  370 => 199,  366 => 198,  363 => 197,  360 => 196,  357 => 195,  355 => 194,  351 => 192,  342 => 190,  338 => 189,  332 => 186,  299 => 156,  287 => 147,  275 => 138,  264 => 130,  253 => 122,  240 => 112,  217 => 91,  204 => 90,  116 => 12,  112 => 11,  108 => 10,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/admin.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Admin Dashboard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />
    <style>
        .iphone-calendar {
            width: 350px;
            border-radius: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: white;
        }
        .calendar-header {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 20px;
            text-align: center;
        }
        .calendar-weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            padding: 10px 0;
            background: #f8fafc;
        }
        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            padding: 10px;
        }
        .calendar-day {
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        .calendar-day.today {
            background: #3b82f6;
            color: white;
        }
        .sidenav-trigger i {
            display: block;
            width: 20px;
            height: 2px;
            background: #4a5568;
            margin: 4px 0;
            transition: all 0.3s;
        }
        .sidebar {
            width: 250px;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        .sidebar-open .sidebar {
            transform: translateX(0);
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            z-index: 10;
        }
        .sidebar-open .overlay {
            display: block;
        }
        @media (min-width: 1024px) {
            .sidebar {
                transform: translateX(0);
            }
            .sidenav-trigger {
                display: none;
            }
        }
    </style>
{% endblock %}

{% block body %}
    <body class=\"m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500\">
    <div class=\"absolute w-full bg-blue-500 min-h-75\"></div>

    <!-- Sidebar Trigger -->
    <div class=\"fixed top-4 left-4 z-50 lg:hidden\">
        <a href=\"javascript:;\" class=\"sidenav-trigger p-2 bg-white rounded-lg shadow\">
            <div class=\"w-5 overflow-hidden\">
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all\"></i>
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all mt-1\"></i>
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all mt-1\"></i>
            </div>
        </a>
    </div>

    <!-- Overlay -->
    <div class=\"overlay\"></div>

    <!-- Sidebar -->
    <aside class=\"sidebar fixed inset-y-0 left-0 z-40 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto bg-white border-0 shadow-xl max-w-64 ease-nav-brand\">
        <div class=\"h-19\">
            <i class=\"absolute top-4 right-4 p-1 opacity-50 cursor-pointer fas fa-times text-slate-400 lg:hidden sidenav-close\"></i>
            <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700\" href=\"{{ path('admin_dashboard') }}\">
                <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">Admin Panel</span>
            </a>
        </div>

        <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent\" />

        <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
            <ul class=\"flex flex-col pl-0 mb-0\">
                <li class=\"mt-0.5 w-full\">
                    <a class=\"py-2.7 bg-blue-500/13 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"{{ path('admin_dashboard') }}\">
                        <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                            <i class=\"fas fa-tachometer-alt text-blue-500\"></i>
                        </div>
                        <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Dashboard</span>
                    </a>
                </li>
                <li class=\"mt-0.5 w-full\">
                    <a class=\"py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"{{ path('admin_user_manage') }}\">
                        <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                            <i class=\"fas fa-user-cog text-orange-500\"></i>
                        </div>
                        <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Manage Users</span>
                    </a>
                </li>
                <li class=\"mt-0.5 w-full\">
                    <a class=\"py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"{{ path('admin_user_delete') }}\">
                        <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                            <i class=\"fas fa-user-edit text-cyan-500\"></i>
                        </div>
                        <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Edit Profiles</span>
                    </a>
                </li>
                <!-- edit my profile -->
                <li class=\"mt-0.5 w-full\">
                    <a class=\"py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"{{ path('app_profile_edit') }}\">
                        <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                            <i class=\"fas fa-user-edit text-green-500\"></i>
                        </div>
                        <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Edit My Profile</span>
                    </a>
                </li>

                <li class=\"mt-0.5 w-full\">
                    <form method=\"post\" action=\"{{ path('app_logout') }}\">
                        <button type=\"submit\" class=\"w-full py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors hover:bg-red-500/10\">
                            <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                                <i class=\"fas fa-sign-out-alt text-red-500\"></i>
                            </div>
                            <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <main class=\"relative h-full max-height-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl\">
        <!-- Navbar -->
        <nav class=\"relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start\">
            <div class=\"flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit\">
                <nav>
                    <h4 class=\"mb-0 font-bold text-slate-700\">Admin Dashboard</h4>
                </nav>
            </div>
        </nav>

        <div class=\"w-full px-6 py-6 mx-auto\">
            <!-- Calendar Container -->
            <div class=\"flex flex-col items-center justify-center min-h-[60vh]\">
                <!-- iPhone Style Calendar -->
                <div class=\"iphone-calendar mb-8\">
                    <div class=\"calendar-header\">
                        <h3 class=\"text-xl font-bold\">{{ \"now\"|date(\"F Y\") }}</h3>
                    </div>
                    <div class=\"calendar-weekdays\">
                        {% for day in ['S', 'M', 'T', 'W', 'T', 'F', 'S'] %}
                            <div class=\"text-center text-sm text-slate-500 font-medium\">{{ day }}</div>
                        {% endfor %}
                    </div>
                    <div class=\"calendar-days\">
                        {% set firstDayOfMonth = \"now\"|date(\"Y-m-01\")|date(\"w\") %}
                        {% set daysInMonth = \"now\"|date(\"t\") %}
                        {% set today = \"now\"|date(\"j\") %}

                        {% for i in 0..(firstDayOfMonth-1) %}
                            <div class=\"calendar-day\"></div>
                        {% endfor %}

                        {% for day in 1..daysInMonth %}
                            <div class=\"calendar-day {% if day == today %}today{% else %}hover:bg-gray-100{% endif %}\">
                                {{ day }}
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Sidebar toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const body = document.body;
            const sidenavTrigger = document.querySelector('.sidenav-trigger');
            const sidenavClose = document.querySelector('.sidenav-close');
            const overlay = document.querySelector('.overlay');

            if (sidenavTrigger) {
                sidenavTrigger.addEventListener('click', function() {
                    body.classList.add('sidebar-open');
                });
            }

            if (sidenavClose) {
                sidenavClose.addEventListener('click', function() {
                    body.classList.remove('sidebar-open');
                });
            }

            if (overlay) {
                overlay.addEventListener('click', function() {
                    body.classList.remove('sidebar-open');
                });
            }
        });
    </script>
    </body>
{% endblock %}


", "dashboard/admin.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\dashboard\\admin.html.twig");
    }
}
