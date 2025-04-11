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

/* admin/users/edit.html.twig */
class __TwigTemplate_9a4a576a67820f8ee091b7fd7e4a0adf extends Template
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
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/edit.html.twig", 2);
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

        yield "Edit User - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        
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
        .form-input {
            transition: all 0.2s ease;
            border: 1px solid #e2e8f0;
        }
        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
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

    // line 31
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

        // line 32
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
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">Admin</a>
                            </li>
                            <li class=\"text-sm leading-normal\">
                                <span class=\"text-slate-500 before:float-left before:pr-2 before:content-['/']\"></span>
                                <a class=\"text-slate-500\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_manage");
        yield "\">Users</a>
                            </li>
                            <li class=\"text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-slate-500 before:content-['/']\">
                                Edit ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
        yield "
                            </li>
                        </ol>
                        <h4 class=\"mb-0 font-bold text-slate-700 capitalize\">
                            Edit User: ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
        yield "
                        </h4>
                    </nav>
                </div>
            </nav>

            <div class=\"w-full px-6 py-6 mx-auto\">
                <div class=\"relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border\">
                    <div class=\"p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl\">
                        <h6 class=\"mb-0 dark:text-white\">User Details</h6>
                    </div>
                    <div class=\"flex-auto p-6\">
                        ";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "

                        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                            <div class=\"form-group\">
                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-white/80 mb-2"]]);
        yield "
                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-input w-full px-3 py-2 text-sm border border-slate-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 dark:bg-slate-850 dark:border-slate-700 dark:text-white", "placeholder" => "Full name"]]);
        // line 72
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-white/80 mb-2"]]);
        yield "
                                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-input w-full px-3 py-2 text-sm border border-slate-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 dark:bg-slate-850 dark:border-slate-700 dark:text-white", "placeholder" => "Email address"]]);
        // line 80
        yield "
                            </div>
                        </div>

                        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                            <div class=\"form-group\">
                                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "phone", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-white/80 mb-2"]]);
        yield "
                                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "phone", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-input w-full px-3 py-2 text-sm border border-slate-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 dark:bg-slate-850 dark:border-slate-700 dark:text-white", "placeholder" => "Phone number"]]);
        // line 90
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "role", [], "any", false, false, false, 94), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 dark:text-white/80 mb-2"]]);
        yield "
                                ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "role", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-input w-full px-3 py-2 text-sm border border-slate-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 dark:bg-slate-850 dark:border-slate-700 dark:text-white bg-white dark:bg-slate-850"]]);
        // line 97
        yield "
                            </div>
                        </div>

                        <div class=\"flex flex-wrap justify-end space-x-3 mt-8 pt-4 border-t border-slate-200 dark:border-white/10\">
                            <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_manage");
        yield "\" class=\"action-btn inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg bg-slate-200 text-slate-700 hover:bg-slate-300 dark:bg-slate-700 dark:text-white dark:hover:bg-slate-600\">
                                <i class=\"fas fa-arrow-left mr-2\"></i> Cancel
                            </a>
                            <button type=\"submit\" class=\"action-btn inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg bg-gradient-to-tl from-blue-600 to-cyan-400 text-yellow shadow hover:shadow-md\">
                                <i class=\"fas fa-save mr-2\"></i> Save Changes
                            </button>
                        </div>

                        ";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_end');
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

    // line 118
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

        // line 119
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js"), "html", null, true);
        yield "\"></script>
    <script>
        // Enhance form inputs to match the table style
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.querySelector('label').classList.add('text-blue-500');
            });
            input.addEventListener('blur', () => {
                input.parentElement.querySelector('label').classList.remove('text-blue-500');
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 134
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 135
        yield "    <footer class=\"relative py-8 text-center text-white/80\">
        <div class=\"container mx-auto\">
            <p>© ";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " UrbanLink. All rights reserved.</p>
        </div>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 142
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js"), "html", null, true);
        yield "\"></script>
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
        return "admin/users/edit.html.twig";
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
        return array (  391 => 143,  386 => 142,  373 => 141,  358 => 137,  354 => 135,  341 => 134,  317 => 121,  313 => 120,  308 => 119,  295 => 118,  277 => 110,  266 => 102,  259 => 97,  257 => 95,  253 => 94,  247 => 90,  245 => 87,  241 => 86,  233 => 80,  231 => 77,  227 => 76,  221 => 72,  219 => 69,  215 => 68,  208 => 64,  193 => 52,  186 => 48,  180 => 45,  173 => 41,  162 => 32,  149 => 31,  120 => 12,  116 => 11,  112 => 10,  105 => 7,  92 => 6,  68 => 4,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/users/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Edit User - {{ user.name }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />
    <style>
        .form-input {
            transition: all 0.2s ease;
            border: 1px solid #e2e8f0;
        }
        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
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
                                <a class=\"text-slate-500\" href=\"{{ path('admin_dashboard') }}\">Admin</a>
                            </li>
                            <li class=\"text-sm leading-normal\">
                                <span class=\"text-slate-500 before:float-left before:pr-2 before:content-['/']\"></span>
                                <a class=\"text-slate-500\" href=\"{{ path('admin_user_manage') }}\">Users</a>
                            </li>
                            <li class=\"text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-slate-500 before:content-['/']\">
                                Edit {{ user.name }}
                            </li>
                        </ol>
                        <h4 class=\"mb-0 font-bold text-slate-700 capitalize\">
                            Edit User: {{ user.name }}
                        </h4>
                    </nav>
                </div>
            </nav>

            <div class=\"w-full px-6 py-6 mx-auto\">
                <div class=\"relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border\">
                    <div class=\"p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl\">
                        <h6 class=\"mb-0 dark:text-white\">User Details</h6>
                    </div>
                    <div class=\"flex-auto p-6\">
                        {{ form_start(form, {'attr': {'class': 'space-y-6'}}) }}

                        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                            <div class=\"form-group\">
                                {{ form_label(form.name, null, {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-white/80 mb-2'}}) }}
                                {{ form_widget(form.name, {'attr': {
                                    'class': 'form-input w-full px-3 py-2 text-sm border border-slate-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 dark:bg-slate-850 dark:border-slate-700 dark:text-white',
                                    'placeholder': 'Full name'
                                }}) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.email, null, {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-white/80 mb-2'}}) }}
                                {{ form_widget(form.email, {'attr': {
                                    'class': 'form-input w-full px-3 py-2 text-sm border border-slate-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 dark:bg-slate-850 dark:border-slate-700 dark:text-white',
                                    'placeholder': 'Email address'
                                }}) }}
                            </div>
                        </div>

                        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                            <div class=\"form-group\">
                                {{ form_label(form.phone, null, {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-white/80 mb-2'}}) }}
                                {{ form_widget(form.phone, {'attr': {
                                    'class': 'form-input w-full px-3 py-2 text-sm border border-slate-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 dark:bg-slate-850 dark:border-slate-700 dark:text-white',
                                    'placeholder': 'Phone number'
                                }}) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.role, null, {'label_attr': {'class': 'block text-sm font-medium text-slate-700 dark:text-white/80 mb-2'}}) }}
                                {{ form_widget(form.role, {'attr': {
                                    'class': 'form-input w-full px-3 py-2 text-sm border border-slate-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 dark:bg-slate-850 dark:border-slate-700 dark:text-white bg-white dark:bg-slate-850'
                                }}) }}
                            </div>
                        </div>

                        <div class=\"flex flex-wrap justify-end space-x-3 mt-8 pt-4 border-t border-slate-200 dark:border-white/10\">
                            <a href=\"{{ path('admin_user_manage') }}\" class=\"action-btn inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg bg-slate-200 text-slate-700 hover:bg-slate-300 dark:bg-slate-700 dark:text-white dark:hover:bg-slate-600\">
                                <i class=\"fas fa-arrow-left mr-2\"></i> Cancel
                            </a>
                            <button type=\"submit\" class=\"action-btn inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg bg-gradient-to-tl from-blue-600 to-cyan-400 text-yellow shadow hover:shadow-md\">
                                <i class=\"fas fa-save mr-2\"></i> Save Changes
                            </button>
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
        // Enhance form inputs to match the table style
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.querySelector('label').classList.add('text-blue-500');
            });
            input.addEventListener('blur', () => {
                input.parentElement.querySelector('label').classList.remove('text-blue-500');
            });
        });
    </script>
{% endblock %}
{% block footer %}
    <footer class=\"relative py-8 text-center text-white/80\">
        <div class=\"container mx-auto\">
            <p>© {{ \"now\"|date(\"Y\") }} UrbanLink. All rights reserved.</p>
        </div>
    </footer>
{% endblock %}
{% block scripts %}
    <script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/argon-dashboard-tailwind.js') }}\"></script>
{% endblock %}", "admin/users/edit.html.twig", "C:\\Users\\sbiss\\OneDrive - ESPRIT\\Documents\\urbanlink_Sy\\templates\\admin\\users\\edit.html.twig");
    }
}
