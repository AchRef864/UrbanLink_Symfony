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

/* profile/edit.html.twig */
class __TwigTemplate_9f4d71831697773db4f5ce1b1a800f7b extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/edit.html.twig", 2);
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

        yield "Edit Profile";
        
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
        .profile-card {
            transition: all 0.2s ease;
        }
        .profile-card:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            transition: all 0.2s ease;
        }
        .form-control:focus {
            border-color: #4e73df;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }
        .action-btn {
            transition: all 0.2s ease;
        }
        .action-btn:hover {
            transform: translateY(-1px);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 37
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

        // line 38
        yield "    <div class=\"relative flex flex-col min-h-screen bg-gray-50\">
        <!-- Main Content -->
        <main class=\"relative h-full transition-all duration-200 ease-in-out\">
            <!-- Navbar -->
            <nav class=\"relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start\">
                <div class=\"flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit\">
                    <nav>
                        <ol class=\"flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16\">
                            <li class=\"text-sm leading-normal\">
                                <a class=\"text-slate-500\" href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Dashboard</a>
                            </li>
                            <li class=\"text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-slate-500 before:content-['/']\">
                                Edit Profile
                            </li>
                        </ol>
                        <h4 class=\"mb-0 font-bold text-slate-700\">Edit Your Profile</h4>
                    </nav>
                </div>
            </nav>

            <div class=\"w-full px-6 py-6 mx-auto\">
                <div class=\"relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border profile-card\">
                    <div class=\"p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl\">
                        <h6 class=\"mb-0 dark:text-white\">Profile Information</h6>
                    </div>
                    <div class=\"flex-auto p-6\">
                        ";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-4\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-white mb-2"], "label" => "Full Name"]);
        yield "
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring"]]);
        yield "
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), 'errors');
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-white mb-2"], "label" => "Email Address"]);
        yield "
                            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "email", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring"]]);
        yield "
                            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "email", [], "any", false, false, false, 74), 'errors');
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "phone", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-white mb-2"], "label" => "Phone Number"]);
        yield "
                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "phone", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring"]]);
        yield "
                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "phone", [], "any", false, false, false, 80), 'errors');
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "plainPassword", [], "any", false, false, false, 84), "first", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-white mb-2"], "label" => "New Password"]);
        yield "
                            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "plainPassword", [], "any", false, false, false, 85), "first", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring", "placeholder" => "Leave blank to keep current"]]);
        yield "
                            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "plainPassword", [], "any", false, false, false, 86), "first", [], "any", false, false, false, 86), 'errors');
        yield "
                        </div>

                        <div class=\"mb-6\">
                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "plainPassword", [], "any", false, false, false, 90), "second", [], "any", false, false, false, 90), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-white mb-2"], "label" => "Confirm Password"]);
        yield "
                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "plainPassword", [], "any", false, false, false, 91), "second", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring"]]);
        yield "
                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "plainPassword", [], "any", false, false, false, 92), "second", [], "any", false, false, false, 92), 'errors');
        yield "
                        </div>

                        <div class=\"flex justify-between\">
                            <button type=\"submit\" class=\"action-btn px-6 py-2.5 bg-gradient-to-tl from-blue-600 to-cyan-400 text-white text-sm font-medium rounded-lg shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-300\">
                                <i class=\"fas fa-save mr-2\"></i> Save Changes
                            </button>

                            <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_delete");
        yield "\" class=\"action-btn px-6 py-2.5 bg-gradient-to-tl from-red-600 to-pink-500 text-white text-sm font-medium rounded-lg shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-300\" onclick=\"return confirm('Are you sure you want to delete your account? This action cannot be undone.')\">
                                <i class=\"fas fa-trash-alt mr-2\"></i> Delete Account
                            </a>
                        </div>
                        ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 112
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

        // line 113
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js"), "html", null, true);
        yield "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add any client-side validation or enhancements here
            const passwordFields = document.querySelectorAll('input[type=\"password\"]');
            passwordFields.forEach(field => {
                field.addEventListener('input', function() {
                    if (this.value.length > 0) {
                        this.setCustomValidity('');
                    }
                });
            });
        });
    </script>
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
        return "profile/edit.html.twig";
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
        return array (  327 => 115,  323 => 114,  318 => 113,  305 => 112,  287 => 104,  280 => 100,  269 => 92,  265 => 91,  261 => 90,  254 => 86,  250 => 85,  246 => 84,  239 => 80,  235 => 79,  231 => 78,  224 => 74,  220 => 73,  216 => 72,  209 => 68,  205 => 67,  201 => 66,  196 => 64,  176 => 47,  165 => 38,  152 => 37,  117 => 12,  113 => 11,  109 => 10,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/profile/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Edit Profile{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />
    <style>
        .profile-card {
            transition: all 0.2s ease;
        }
        .profile-card:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            transition: all 0.2s ease;
        }
        .form-control:focus {
            border-color: #4e73df;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }
        .action-btn {
            transition: all 0.2s ease;
        }
        .action-btn:hover {
            transform: translateY(-1px);
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"relative flex flex-col min-h-screen bg-gray-50\">
        <!-- Main Content -->
        <main class=\"relative h-full transition-all duration-200 ease-in-out\">
            <!-- Navbar -->
            <nav class=\"relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start\">
                <div class=\"flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit\">
                    <nav>
                        <ol class=\"flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16\">
                            <li class=\"text-sm leading-normal\">
                                <a class=\"text-slate-500\" href=\"{{ path('app_dashboard') }}\">Dashboard</a>
                            </li>
                            <li class=\"text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-slate-500 before:content-['/']\">
                                Edit Profile
                            </li>
                        </ol>
                        <h4 class=\"mb-0 font-bold text-slate-700\">Edit Your Profile</h4>
                    </nav>
                </div>
            </nav>

            <div class=\"w-full px-6 py-6 mx-auto\">
                <div class=\"relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border profile-card\">
                    <div class=\"p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl\">
                        <h6 class=\"mb-0 dark:text-white\">Profile Information</h6>
                    </div>
                    <div class=\"flex-auto p-6\">
                        {{ form_start(form) }}
                        <div class=\"mb-4\">
                            {{ form_label(form.name, 'Full Name', {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-white mb-2'}}) }}
                            {{ form_widget(form.name, {'attr': {'class': 'form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring'}}) }}
                            {{ form_errors(form.name) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.email, 'Email Address', {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-white mb-2'}}) }}
                            {{ form_widget(form.email, {'attr': {'class': 'form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring'}}) }}
                            {{ form_errors(form.email) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.phone, 'Phone Number', {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-white mb-2'}}) }}
                            {{ form_widget(form.phone, {'attr': {'class': 'form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring'}}) }}
                            {{ form_errors(form.phone) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.plainPassword.first, 'New Password', {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-white mb-2'}}) }}
                            {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring', 'placeholder': 'Leave blank to keep current'}}) }}
                            {{ form_errors(form.plainPassword.first) }}
                        </div>

                        <div class=\"mb-6\">
                            {{ form_label(form.plainPassword.second, 'Confirm Password', {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-white mb-2'}}) }}
                            {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring'}}) }}
                            {{ form_errors(form.plainPassword.second) }}
                        </div>

                        <div class=\"flex justify-between\">
                            <button type=\"submit\" class=\"action-btn px-6 py-2.5 bg-gradient-to-tl from-blue-600 to-cyan-400 text-white text-sm font-medium rounded-lg shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-300\">
                                <i class=\"fas fa-save mr-2\"></i> Save Changes
                            </button>

                            <a href=\"{{ path('app_profile_delete') }}\" class=\"action-btn px-6 py-2.5 bg-gradient-to-tl from-red-600 to-pink-500 text-white text-sm font-medium rounded-lg shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-300\" onclick=\"return confirm('Are you sure you want to delete your account? This action cannot be undone.')\">
                                <i class=\"fas fa-trash-alt mr-2\"></i> Delete Account
                            </a>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </main>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/argon-dashboard-tailwind.js') }}\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add any client-side validation or enhancements here
            const passwordFields = document.querySelectorAll('input[type=\"password\"]');
            passwordFields.forEach(field => {
                field.addEventListener('input', function() {
                    if (this.value.length > 0) {
                        this.setCustomValidity('');
                    }
                });
            });
        });
    </script>
{% endblock %}", "profile/edit.html.twig", "C:\\Users\\sbiss\\OneDrive - ESPRIT\\Documents\\urbanlink_Sy\\templates\\profile\\edit.html.twig");
    }
}
