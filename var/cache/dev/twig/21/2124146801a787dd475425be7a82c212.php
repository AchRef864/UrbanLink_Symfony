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
class __TwigTemplate_1802f5e95b2222618607473cd4e5b8c3 extends Template
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
    ";
        // line 9
        yield "    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    ";
        // line 14
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

    ";
        // line 17
        yield "    <style>
        /* Styles pour le calendrier iPhone */
        .iphone-calendar {
            width: 350px; /* Largeur fixe */
            max-width: 100%; /* S'assurer qu'il s'adapte sur les petits écrans */
            border-radius: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1); /* Ombre pour l'effet de profondeur */
            overflow: hidden;
            background: white;
            margin: 0 auto; /* Centrer horizontalement */
        }
        .calendar-header {
            background: linear-gradient(to right, #3b82f6, #6366f1); /* Gradient moderne */
            color: white;
            padding: 20px;
            text-align: center;
        }
        .calendar-weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            padding: 10px 0;
            background: #f8fafc; /* Couleur de fond légère */
            text-align: center; /* Centrer le texte des jours */
            font-weight: 500; /* Semi-gras pour les jours */
            color: #4a5568; /* Couleur de texte pour les jours */
        }
        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px; /* Espace entre les jours */
            padding: 10px;
        }
        .calendar-day {
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%; /* Forme ronde */
            cursor: pointer; /* Indiquer l'interactivité */
            transition: background-color 0.2s ease, color 0.2s ease; /* Transition au survol */
        }
        .calendar-day.today {
            background: #3b82f6; /* Couleur de fond pour aujourd'hui */
            color: white; /* Couleur du texte pour aujourd'hui */
            font-weight: bold; /* Gras pour aujourd'hui */
        }
         /* Effet au survol pour les jours qui ne sont pas 'today' */
         .calendar-day:not(.today):hover {
             background-color: #e2e8f0; /* Changer le fond au survol */
             color: #2d3748; /* Changer la couleur du texte au survol */
         }

        /* Suppression des styles custom non utilisés pour la sidebar/overlay */
        /* .sidenav-trigger i, .sidebar, .sidebar-open .sidebar, .overlay, .sidebar-open .overlay, @media (min-width: 1024px) .sidebar, @media (min-width: 1024px) .sidenav-trigger */
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "    <body class=\"m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500\">
    ";
        // line 77
        yield "    <div class=\"absolute w-full bg-blue-500 min-h-75\"></div>

    <!-- Sidebar Trigger -->
    <div class=\"fixed top-4 left-4 z-50 lg:hidden\">
        <a href=\"javascript:\" class=\"sidenav-trigger p-2 bg-white rounded-lg shadow\">
            <div class=\"w-5 overflow-hidden\">
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all\"></i>
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all mt-1\"></i>
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all mt-1\"></i>
            </div>
        </a>
    </div>

    <!-- Overlay -->
    <div class=\"overlay\"></div>

    <div style=\"margin-left: 80px;\">
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
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "F Y"), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"calendar-weekdays\">
                            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["S", "M", "T", "W", "T", "F", "S"]);
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 115
            yield "                                <div class=\"text-center text-sm text-slate-500 font-medium\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "                        </div>
                        <div class=\"calendar-days\">
                            ";
        // line 119
        $context["firstDayOfMonth"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-01"), "w");
        // line 120
        yield "                            ";
        $context["daysInMonth"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "t");
        // line 121
        yield "                            ";
        $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "j");
        // line 122
        yield "
                            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, ((isset($context["firstDayOfMonth"]) || array_key_exists("firstDayOfMonth", $context) ? $context["firstDayOfMonth"] : (function () { throw new RuntimeError('Variable "firstDayOfMonth" does not exist.', 123, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 124
            yield "                                <div class=\"calendar-day\"></div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "
                            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["daysInMonth"]) || array_key_exists("daysInMonth", $context) ? $context["daysInMonth"] : (function () { throw new RuntimeError('Variable "daysInMonth" does not exist.', 127, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 128
            yield "                                <div class=\"calendar-day ";
            if (($context["day"] == (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 128, $this->source); })()))) {
                yield "today";
            } else {
                yield "hover:bg-gray-100";
            }
            yield "\">
                                    ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    ";
        // line 140
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js"), "html", null, true);
        yield "\" async></script>

    ";
        // line 143
        yield "    ";
        // line 144
        yield "
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
        return array (  329 => 144,  327 => 143,  321 => 140,  312 => 132,  303 => 129,  294 => 128,  290 => 127,  287 => 126,  280 => 124,  276 => 123,  273 => 122,  270 => 121,  267 => 120,  265 => 119,  261 => 117,  252 => 115,  248 => 114,  242 => 111,  206 => 77,  203 => 75,  190 => 74,  124 => 17,  118 => 14,  114 => 12,  110 => 11,  106 => 9,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/admin.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Admin Dashboard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Inclusions des styles CSS et Font Awesome #}
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
    {# Assurez-vous que ce chemin est correct pour votre installation d'Argon Dashboard Tailwind #}
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />

    {# Styles spécifiques au calendrier #}
    <style>
        /* Styles pour le calendrier iPhone */
        .iphone-calendar {
            width: 350px; /* Largeur fixe */
            max-width: 100%; /* S'assurer qu'il s'adapte sur les petits écrans */
            border-radius: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1); /* Ombre pour l'effet de profondeur */
            overflow: hidden;
            background: white;
            margin: 0 auto; /* Centrer horizontalement */
        }
        .calendar-header {
            background: linear-gradient(to right, #3b82f6, #6366f1); /* Gradient moderne */
            color: white;
            padding: 20px;
            text-align: center;
        }
        .calendar-weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            padding: 10px 0;
            background: #f8fafc; /* Couleur de fond légère */
            text-align: center; /* Centrer le texte des jours */
            font-weight: 500; /* Semi-gras pour les jours */
            color: #4a5568; /* Couleur de texte pour les jours */
        }
        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px; /* Espace entre les jours */
            padding: 10px;
        }
        .calendar-day {
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%; /* Forme ronde */
            cursor: pointer; /* Indiquer l'interactivité */
            transition: background-color 0.2s ease, color 0.2s ease; /* Transition au survol */
        }
        .calendar-day.today {
            background: #3b82f6; /* Couleur de fond pour aujourd'hui */
            color: white; /* Couleur du texte pour aujourd'hui */
            font-weight: bold; /* Gras pour aujourd'hui */
        }
         /* Effet au survol pour les jours qui ne sont pas 'today' */
         .calendar-day:not(.today):hover {
             background-color: #e2e8f0; /* Changer le fond au survol */
             color: #2d3748; /* Changer la couleur du texte au survol */
         }

        /* Suppression des styles custom non utilisés pour la sidebar/overlay */
        /* .sidenav-trigger i, .sidebar, .sidebar-open .sidebar, .overlay, .sidebar-open .overlay, @media (min-width: 1024px) .sidebar, @media (min-width: 1024px) .sidenav-trigger */
    </style>
{% endblock %}

{% block body %}
    <body class=\"m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500\">
    {# Div de fond avec couleur d'Argon Dashboard #}
    <div class=\"absolute w-full bg-blue-500 min-h-75\"></div>

    <!-- Sidebar Trigger -->
    <div class=\"fixed top-4 left-4 z-50 lg:hidden\">
        <a href=\"javascript:\" class=\"sidenav-trigger p-2 bg-white rounded-lg shadow\">
            <div class=\"w-5 overflow-hidden\">
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all\"></i>
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all mt-1\"></i>
                <i class=\"ease relative block h-0.5 rounded-sm bg-slate-600 transition-all mt-1\"></i>
            </div>
        </a>
    </div>

    <!-- Overlay -->
    <div class=\"overlay\"></div>

    <div style=\"margin-left: 80px;\">
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
    </div>

    {# Inclusion du script JS d'Argon Dashboard (peut être nécessaire pour d'autres choses, ou peut être retiré si seul le calendrier est affiché) #}
    <script src=\"{{ asset('assets/js/argon-dashboard-tailwind.js') }}\" async></script>

    {# Suppression du script JS custom pour la sidebar #}
    {# <script> ... </script> #}

    </body>
{% endblock %}", "dashboard/admin.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\dashboard\\admin.html.twig");
    }
}
