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

/* dashboard/client.html.twig */
class __TwigTemplate_be6c3fea2f32586c1a5368a4650e7f03 extends Template
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
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/client.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "dashboard/client.html.twig", 2);
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
        .stats-card {
            width: 350px;
            border-radius: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: white;
        }
        .stats-header {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 20px;
            text-align: center;
        }
        .action-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
        }
        .action-btn i {
            margin-right: 8px;
        }
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .user-details-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 24px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
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

        // line 83
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


    <!-- Main Content -->
    <main class=\"relative h-full max-height-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl\">
        <!-- Navbar -->
        <nav class=\"relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start\">
            <div class=\"flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit\">
                <nav>
                    <h4 class=\"mb-0 font-bold text-slate-700\">Client Dashboard</h4>
                    <p class=\"mb-0 font-bold text-white\" >Welcome back, ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "name", [], "any", false, false, false, 108), "html", null, true);
        yield "</p>
                </nav>
            </div>
        </nav>

        <div class=\"w-full px-6 py-6 mx-auto\">
            <div class=\"flex flex-col items-center justify-center min-h-[60vh]\">
                ";
        // line 115
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
            // line 116
            yield "                    <!-- User Details Card -->
                    <div class=\"user-details-card w-full max-w-3xl mb-8\">
                        <h3 class=\"text-xl font-bold text-slate-700 mb-4\">Your Account Details</h3>
                        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                            <div class=\"flex items-center p-4 bg-gray-50 rounded-lg\">
                                <div class=\"mr-4 p-3 bg-blue-100 rounded-full\">
                                    <i class=\"fas fa-envelope text-blue-500\"></i>
                                </div>
                                <div>
                                    <p class=\"text-sm text-gray-500\">Email</p>
                                    <p class=\"font-semibold\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "email", [], "any", false, false, false, 126), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"flex items-center p-4 bg-gray-50 rounded-lg\">
                                <div class=\"mr-4 p-3 bg-green-100 rounded-full\">
                                    <i class=\"fas fa-phone text-green-500\"></i>
                                </div>
                                <div>
                                    <p class=\"text-sm text-gray-500\">Phone</p>
                                    <p class=\"font-semibold\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 135, $this->source); })()), "phone", [], "any", false, false, false, 135), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"flex items-center p-4 bg-gray-50 rounded-lg\">
                                <div class=\"mr-4 p-3 bg-amber-100 rounded-full\">
                                    <i class=\"fas fa-user-shield text-amber-500\"></i>
                                </div>
                                <div>
                                    <p class=\"text-sm text-gray-500\">Status</p>
                                    <p class=\"font-semibold\">
                                        <span class=\"px-2 py-1 text-xs rounded-full bg-green-100 text-green-800\">Active</span>
                                    </p>
                                </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 w-full max-w-3xl\">
                        <a href=\"";
            // line 153
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_myprofile");
            yield "\" class=\"action-btn bg-gradient-to-tl from-blue-600 to-indigo-400 text-yellow\">
                            <i class=\"fas fa-user-edit\"></i>
                            Edit Profile
                        </a>
                    </div>
                ";
        } else {
            // line 159
            yield "                    <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 max-w-3xl w-full\" role=\"alert\">
                        <div class=\"flex items-center\">
                            <i class=\"fas fa-exclamation-circle mr-2\"></i>
                            <strong class=\"font-bold\">Warning! </strong>
                            <span class=\"block sm:inline\">You don't have proper client privileges.</span>
                        </div>
                    </div>
                ";
        }
        // line 167
        yield "            </div>
        </div>

        </div>
    </main>

    <script>
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
        return "dashboard/client.html.twig";
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
        return array (  312 => 167,  302 => 159,  293 => 153,  272 => 135,  260 => 126,  248 => 116,  246 => 115,  236 => 108,  209 => 83,  196 => 82,  116 => 12,  112 => 11,  108 => 10,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/client.html.twig #}
{% extends 'basef.html.twig' %}

{% block title %}Client Dashboard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />
    <style>
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
        .stats-card {
            width: 350px;
            border-radius: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: white;
        }
        .stats-header {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 20px;
            text-align: center;
        }
        .action-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
        }
        .action-btn i {
            margin-right: 8px;
        }
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .user-details-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 24px;
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


    <!-- Main Content -->
    <main class=\"relative h-full max-height-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl\">
        <!-- Navbar -->
        <nav class=\"relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start\">
            <div class=\"flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit\">
                <nav>
                    <h4 class=\"mb-0 font-bold text-slate-700\">Client Dashboard</h4>
                    <p class=\"mb-0 font-bold text-white\" >Welcome back, {{ app.user.name }}</p>
                </nav>
            </div>
        </nav>

        <div class=\"w-full px-6 py-6 mx-auto\">
            <div class=\"flex flex-col items-center justify-center min-h-[60vh]\">
                {% if is_granted('ROLE_CLIENT') %}
                    <!-- User Details Card -->
                    <div class=\"user-details-card w-full max-w-3xl mb-8\">
                        <h3 class=\"text-xl font-bold text-slate-700 mb-4\">Your Account Details</h3>
                        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                            <div class=\"flex items-center p-4 bg-gray-50 rounded-lg\">
                                <div class=\"mr-4 p-3 bg-blue-100 rounded-full\">
                                    <i class=\"fas fa-envelope text-blue-500\"></i>
                                </div>
                                <div>
                                    <p class=\"text-sm text-gray-500\">Email</p>
                                    <p class=\"font-semibold\">{{ user.email }}</p>
                                </div>
                            </div>
                            <div class=\"flex items-center p-4 bg-gray-50 rounded-lg\">
                                <div class=\"mr-4 p-3 bg-green-100 rounded-full\">
                                    <i class=\"fas fa-phone text-green-500\"></i>
                                </div>
                                <div>
                                    <p class=\"text-sm text-gray-500\">Phone</p>
                                    <p class=\"font-semibold\">{{ user.phone }}</p>
                                </div>
                            </div>
                            <div class=\"flex items-center p-4 bg-gray-50 rounded-lg\">
                                <div class=\"mr-4 p-3 bg-amber-100 rounded-full\">
                                    <i class=\"fas fa-user-shield text-amber-500\"></i>
                                </div>
                                <div>
                                    <p class=\"text-sm text-gray-500\">Status</p>
                                    <p class=\"font-semibold\">
                                        <span class=\"px-2 py-1 text-xs rounded-full bg-green-100 text-green-800\">Active</span>
                                    </p>
                                </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 w-full max-w-3xl\">
                        <a href=\"{{ path('app_profile_myprofile') }}\" class=\"action-btn bg-gradient-to-tl from-blue-600 to-indigo-400 text-yellow\">
                            <i class=\"fas fa-user-edit\"></i>
                            Edit Profile
                        </a>
                    </div>
                {% else %}
                    <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 max-w-3xl w-full\" role=\"alert\">
                        <div class=\"flex items-center\">
                            <i class=\"fas fa-exclamation-circle mr-2\"></i>
                            <strong class=\"font-bold\">Warning! </strong>
                            <span class=\"block sm:inline\">You don't have proper client privileges.</span>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>

        </div>
    </main>

    <script>
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
{% endblock %}", "dashboard/client.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\dashboard\\client.html.twig");
    }
}
