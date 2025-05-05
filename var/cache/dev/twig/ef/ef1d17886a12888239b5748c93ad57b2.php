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
class __TwigTemplate_64db6e5f96993c76ff200b01206bc9c5 extends Template
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
        .password-fields {
            display: none;
            transition: all 0.3s ease;
        }
        .password-fields.show {
            display: block;
        }
        /* Enhanced Save Changes button */
        .btn-save {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            color: white;
            border: none;
            box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
            transition: all 0.15s ease;
        }
        .btn-save:hover {
            transform: translateY(-1px);
            box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
            background: linear-gradient(135deg, #3a56c8 0%, #1a3ab5 100%);
        }

        /* Enhanced Edit Password button */
        .btn-edit-password {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            color: white;
            border: none;
            box-shadow: 0 4px 6px rgba(108, 117, 125, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
            transition: all 0.15s ease;
        }
        .btn-edit-password:hover {
            transform: translateY(-1px);
            box-shadow: 0 7px 14px rgba(108, 117, 125, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
            background: linear-gradient(135deg, #5a6268 0%, #3a4047 100%);
        }

        /* Optional: Add some padding to the buttons */
        .action-btn {
            padding: 0.625rem 1.25rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.375rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        // line 80
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
        // line 89
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
                        <h6 class=\"mb-0 dark:text-yellow\">Profile Information</h6>
                    </div>
                    <div class=\"flex-auto p-6\">
                        ";
        // line 106
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-4\">
                            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "name", [], "any", false, false, false, 108), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-yellow mb-2"], "label" => "Full Name"]);
        yield "
                            ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "name", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring"]]);
        yield "
                            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "name", [], "any", false, false, false, 110), 'errors');
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "email", [], "any", false, false, false, 114), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-yellow mb-2"], "label" => "Email Address"]);
        yield "
                            ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "email", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring"]]);
        yield "
                            ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "email", [], "any", false, false, false, 116), 'errors');
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "phone", [], "any", false, false, false, 120), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-yellow mb-2"], "label" => "Phone Number"]);
        yield "
                            ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "phone", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring"]]);
        yield "
                            ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "phone", [], "any", false, false, false, 122), 'errors');
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "homeAddress", [], "any", false, false, false, 126), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-yellow mb-2"], "label" => "Home Address"]);
        yield "
                            ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "homeAddress", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring"]]);
        yield "
                            ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "homeAddress", [], "any", false, false, false, 128), 'errors');
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "image", [], "any", false, false, false, 132), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-yellow mb-2"], "label" => "Profile Image"]);
        yield "
                            ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "image", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring"]]);
        yield "
                            ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "image", [], "any", false, false, false, 134), 'errors');
        yield "
                        </div>

                        <div class=\"mb-4\">
                            <button type=\"button\" id=\"togglePasswordBtn\" class=\"action-btn px-4 py-2 bg-gradient-to-tl from-gray-600 to-gray-400 text-yellow text-sm font-medium rounded-lg shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-gray-300\">
                                <i class=\"fas fa-lock mr-2\"></i> Edit Password
                            </button>
                        </div>

                        <div id=\"passwordFields\" class=\"password-fields\">
                            <div class=\"mb-4\">
                                ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "plainPassword", [], "any", false, false, false, 145), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-yellow mb-2"], "label" => "New Password"]);
        yield "
                                ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "plainPassword", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring", "placeholder" => "Leave blank to keep current"]]);
        yield "
                                ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "plainPassword", [], "any", false, false, false, 147), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"flex justify-between\">
                            <button type=\"submit\" class=\"action-btn px-6 py-2.5 bg-gradient-to-tl from-blue-600 to-cyan-400 text-yellow text-sm font-medium rounded-lg shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-300\">
                                <i class=\"fas fa-save mr-2\"></i> Save Changes
                            </button>

                            <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_delete");
        yield "\" class=\"action-btn px-6 py-2.5 bg-gradient-to-tl from-red-600 to-pink-500 text-yellow text-sm font-medium rounded-lg shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-300\" onclick=\"return confirm('Are you sure you want to delete your account? This action cannot be undone.')\">
                                <i class=\"fas fa-trash-alt mr-2\"></i> Delete Account
                            </a>
                        </div>
                        ";
        // line 160
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), 'form_end');
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

    // line 168
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

        // line 169
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js"), "html", null, true);
        yield "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePasswordBtn = document.getElementById('togglePasswordBtn');
            const passwordFields = document.getElementById('passwordFields');

            togglePasswordBtn.addEventListener('click', function() {
                passwordFields.classList.toggle('show');

                // Change button text based on visibility
                if (passwordFields.classList.contains('show')) {
                    this.innerHTML = '<i class=\"fas fa-lock-open mr-2\"></i> Hide Password Field';
                } else {
                    this.innerHTML = '<i class=\"fas fa-lock mr-2\"></i> Edit Password';
                }
            });

            // Add any client-side validation or enhancements here
            const passwordInput = document.getElementById('";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "plainPassword", [], "any", false, false, false, 189), "vars", [], "any", false, false, false, 189), "id", [], "any", false, false, false, 189), "html", null, true);
        yield "');
            if (passwordInput) {
                passwordInput.addEventListener('input', function() {
                    if (this.value.length > 0) {
                        this.setCustomValidity('');
                    }
                });
            }
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
        return array (  413 => 189,  392 => 171,  388 => 170,  383 => 169,  370 => 168,  352 => 160,  345 => 156,  333 => 147,  329 => 146,  325 => 145,  311 => 134,  307 => 133,  303 => 132,  296 => 128,  292 => 127,  288 => 126,  281 => 122,  277 => 121,  273 => 120,  266 => 116,  262 => 115,  258 => 114,  251 => 110,  247 => 109,  243 => 108,  238 => 106,  218 => 89,  207 => 80,  194 => 79,  117 => 12,  113 => 11,  109 => 10,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
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
        .password-fields {
            display: none;
            transition: all 0.3s ease;
        }
        .password-fields.show {
            display: block;
        }
        /* Enhanced Save Changes button */
        .btn-save {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            color: white;
            border: none;
            box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
            transition: all 0.15s ease;
        }
        .btn-save:hover {
            transform: translateY(-1px);
            box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
            background: linear-gradient(135deg, #3a56c8 0%, #1a3ab5 100%);
        }

        /* Enhanced Edit Password button */
        .btn-edit-password {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            color: white;
            border: none;
            box-shadow: 0 4px 6px rgba(108, 117, 125, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
            transition: all 0.15s ease;
        }
        .btn-edit-password:hover {
            transform: translateY(-1px);
            box-shadow: 0 7px 14px rgba(108, 117, 125, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
            background: linear-gradient(135deg, #5a6268 0%, #3a4047 100%);
        }

        /* Optional: Add some padding to the buttons */
        .action-btn {
            padding: 0.625rem 1.25rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.375rem;
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
                        <h6 class=\"mb-0 dark:text-yellow\">Profile Information</h6>
                    </div>
                    <div class=\"flex-auto p-6\">
                        {{ form_start(form) }}
                        <div class=\"mb-4\">
                            {{ form_label(form.name, 'Full Name', {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-yellow mb-2'}}) }}
                            {{ form_widget(form.name, {'attr': {'class': 'form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring'}}) }}
                            {{ form_errors(form.name) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.email, 'Email Address', {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-yellow mb-2'}}) }}
                            {{ form_widget(form.email, {'attr': {'class': 'form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring'}}) }}
                            {{ form_errors(form.email) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.phone, 'Phone Number', {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-yellow mb-2'}}) }}
                            {{ form_widget(form.phone, {'attr': {'class': 'form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring'}}) }}
                            {{ form_errors(form.phone) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.homeAddress, 'Home Address', {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-yellow mb-2'}}) }}
                            {{ form_widget(form.homeAddress, {'attr': {'class': 'form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring'}}) }}
                            {{ form_errors(form.homeAddress) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.image, 'Profile Image', {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-yellow mb-2'}}) }}
                            {{ form_widget(form.image, {'attr': {'class': 'form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring'}}) }}
                            {{ form_errors(form.image) }}
                        </div>

                        <div class=\"mb-4\">
                            <button type=\"button\" id=\"togglePasswordBtn\" class=\"action-btn px-4 py-2 bg-gradient-to-tl from-gray-600 to-gray-400 text-yellow text-sm font-medium rounded-lg shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-gray-300\">
                                <i class=\"fas fa-lock mr-2\"></i> Edit Password
                            </button>
                        </div>

                        <div id=\"passwordFields\" class=\"password-fields\">
                            <div class=\"mb-4\">
                                {{ form_label(form.plainPassword, 'New Password', {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-yellow mb-2'}}) }}
                                {{ form_widget(form.plainPassword, {'attr': {'class': 'form-control w-full px-3 py-2 text-sm text-slate-700 placeholder-slate-300 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring', 'placeholder': 'Leave blank to keep current'}}) }}
                                {{ form_errors(form.plainPassword) }}
                            </div>
                        </div>

                        <div class=\"flex justify-between\">
                            <button type=\"submit\" class=\"action-btn px-6 py-2.5 bg-gradient-to-tl from-blue-600 to-cyan-400 text-yellow text-sm font-medium rounded-lg shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-300\">
                                <i class=\"fas fa-save mr-2\"></i> Save Changes
                            </button>

                            <a href=\"{{ path('app_profile_delete') }}\" class=\"action-btn px-6 py-2.5 bg-gradient-to-tl from-red-600 to-pink-500 text-yellow text-sm font-medium rounded-lg shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-300\" onclick=\"return confirm('Are you sure you want to delete your account? This action cannot be undone.')\">
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
            const togglePasswordBtn = document.getElementById('togglePasswordBtn');
            const passwordFields = document.getElementById('passwordFields');

            togglePasswordBtn.addEventListener('click', function() {
                passwordFields.classList.toggle('show');

                // Change button text based on visibility
                if (passwordFields.classList.contains('show')) {
                    this.innerHTML = '<i class=\"fas fa-lock-open mr-2\"></i> Hide Password Field';
                } else {
                    this.innerHTML = '<i class=\"fas fa-lock mr-2\"></i> Edit Password';
                }
            });

            // Add any client-side validation or enhancements here
            const passwordInput = document.getElementById('{{ form.plainPassword.vars.id }}');
            if (passwordInput) {
                passwordInput.addEventListener('input', function() {
                    if (this.value.length > 0) {
                        this.setCustomValidity('');
                    }
                });
            }
        });
    </script>
{% endblock %}", "profile/edit.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\profile\\edit.html.twig");
    }
}
