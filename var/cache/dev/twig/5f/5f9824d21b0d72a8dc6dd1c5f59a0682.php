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

/* auth/login/login.html.twig */
class __TwigTemplate_433b062522291825c7ef20adedf10236 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/login/login.html.twig", 2);
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

        yield "Log in!";
        
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
    <!-- Argon Dashboard CSS -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "    <div class=\"container sticky top-0 z-sticky\">
        <div class=\"flex flex-wrap -mx-3\">
            <div class=\"w-full max-w-full px-3 flex-0\">
                <!-- Navbar -->
                <nav class=\"absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 shadow-sm rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start\">
                    <div class=\"flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit\">
                        <a class=\"py-1.75 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                            <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" class=\"h-8 inline mr-2\" alt=\"HomePage--Welcome--\">
                            UrbanLink
                        </a>
                        <div navbar-menu class=\"items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto\">
                            <ul class=\"flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto\">
                                <li>
                                    <a class=\"flex items-center px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                                        <i class=\"mr-1 fas fa-user-circle opacity-60\"></i>
                                        Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a class=\"block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                                        <i class=\"mr-1 fas fa-key opacity-60\"></i>
                                        Sign In
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <main class=\"mt-0 transition-all duration-200 ease-in-out\">
        <section class=\"min-h-screen\">
            <div class=\"relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover\">
                <div class=\"container z-1\">
                    <div class=\"flex flex-wrap -mx-3\">
                        <div class=\"flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12\">
                            <div class=\"relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border\">
                                <div class=\"p-6 pb-0 mb-0\">
                                    <h4 class=\"font-bold text-2xl text-slate-700\">Welcome back</h4>
                                    <p class=\"mb-0 text-slate-400\">Enter your email and password to sign in</p>
                                </div>

                                <div class=\"flex-auto p-6\">
                                    ";
        // line 62
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 62, $this->source); })())) {
            // line 63
            yield "                                        <div class=\"relative px-4 py-3 mb-4 text-sm text-white bg-red-500 rounded-lg\" role=\"alert\">
                                            ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 64, $this->source); })()), "html", null, true);
            yield "
                                        </div>
                                    ";
        }
        // line 67
        yield "
                                    ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) {
            // line 69
            yield "                                        <div class=\"relative px-4 py-3 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg\" role=\"alert\">
                                            You are logged in as ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "userIdentifier", [], "any", false, false, false, 70), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"font-semibold underline\">Logout</a>
                                        </div>
                                    ";
        }
        // line 73
        yield "
                                    <form method=\"post\" novalidate>
                                        <div class=\"mb-4\">
                                            <label for=\"inputEmail\" class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Email</label>
                                            <input
                                                    type=\"email\"
                                                    value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 79, $this->source); })()), "html", null, true);
        yield "\"
                                                    name=\"_username\"
                                                    id=\"inputEmail\"
                                                    class=\"focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none\"
                                                    placeholder=\"Email\"
                                            >
                                            ";
        // line 85
        if ((array_key_exists("form_errors", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["form_errors"] ?? null), "_username", [], "array", true, true, false, 85))) {
            // line 86
            yield "                                                <div class=\"text-red-500 text-xs mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_errors"]) || array_key_exists("form_errors", $context) ? $context["form_errors"] : (function () { throw new RuntimeError('Variable "form_errors" does not exist.', 86, $this->source); })()), "_username", [], "array", false, false, false, 86), "html", null, true);
            yield "</div>
                                            ";
        }
        // line 88
        yield "                                        </div>

                                        <div class=\"mb-4\">
                                            <label for=\"inputPassword\" class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Password</label>
                                            <input
                                                    type=\"password\"
                                                    name=\"_password\"
                                                    id=\"inputPassword\"
                                                    class=\"focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none\"
                                                    placeholder=\"Password\"
                                            >
                                            ";
        // line 99
        if ((array_key_exists("form_errors", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["form_errors"] ?? null), "_password", [], "array", true, true, false, 99))) {
            // line 100
            yield "                                                <div class=\"text-red-500 text-xs mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_errors"]) || array_key_exists("form_errors", $context) ? $context["form_errors"] : (function () { throw new RuntimeError('Variable "form_errors" does not exist.', 100, $this->source); })()), "_password", [], "array", false, false, false, 100), "html", null, true);
            yield "</div>
                                            ";
        }
        // line 102
        yield "                                        </div>

                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                                        <div class=\"text-center\">
                                            <button
                                                    type=\"submit\"
                                                    class=\"inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25\"
                                            >
                                                Sign in
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class=\"p-6 px-1 pt-0 text-center\">
                                    <p class=\"mx-auto mb-4 text-sm text-slate-400\">
                                        Forgot your password?
                                        <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"font-semibold text-slate-700\">Reset it here</a>
                                    </p>
                                    <p class=\"mx-auto mb-4 text-sm text-slate-400\">
                                        Don't have an account?
                                        <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"font-semibold text-slate-700\">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex\">
                            <div class=\"relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden bg-[url('";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/signin-ill.jpg"), "html", null, true);
        yield "'] rounded-xl\">
                                <span class=\"absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-blue-500 to-violet-500 opacity-60\"></span>
                                <h4 class=\"z-20 mt-12 font-bold text-white text-4xl\">\"URBANLINK\"</h4>
                                <p class=\"z-20 text-white\">\"All transport, one app. No worries—just easy, joyful journeys every time!\"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class=\"py-12\">
        <div class=\"container\">
            <div class=\"flex flex-wrap -mx-3\">
                <div class=\"flex-shrink-0 w-full max-w-full mx-auto mb-6 text-center lg:flex-0 lg:w-8/12\">
                    <p class=\"mb-0 text-slate-400\">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        UrbanLink 2025
                    </p>
                </div>
            </div>
        </div>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 159
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

        // line 160
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Argon Dashboard JS -->
    <script src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 163
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
        return "auth/login/login.html.twig";
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
        return array (  377 => 163,  373 => 162,  367 => 160,  354 => 159,  315 => 130,  306 => 124,  299 => 120,  280 => 104,  276 => 102,  270 => 100,  268 => 99,  255 => 88,  249 => 86,  247 => 85,  238 => 79,  230 => 73,  222 => 70,  219 => 69,  217 => 68,  214 => 67,  208 => 64,  205 => 63,  203 => 62,  174 => 36,  165 => 30,  156 => 24,  152 => 23,  144 => 17,  131 => 16,  118 => 13,  114 => 12,  110 => 11,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/auth/login/login.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Argon Dashboard CSS -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <div class=\"container sticky top-0 z-sticky\">
        <div class=\"flex flex-wrap -mx-3\">
            <div class=\"w-full max-w-full px-3 flex-0\">
                <!-- Navbar -->
                <nav class=\"absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 shadow-sm rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start\">
                    <div class=\"flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit\">
                        <a class=\"py-1.75 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0\" href=\"{{ path('app_home') }}\">
                            <img src=\"{{ asset('assets/img/logo.png') }}\" class=\"h-8 inline mr-2\" alt=\"HomePage--Welcome--\">
                            UrbanLink
                        </a>
                        <div navbar-menu class=\"items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto\">
                            <ul class=\"flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto\">
                                <li>
                                    <a class=\"flex items-center px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2\" href=\"{{ path('app_register') }}\">
                                        <i class=\"mr-1 fas fa-user-circle opacity-60\"></i>
                                        Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a class=\"block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2\" href=\"{{ path('app_login') }}\">
                                        <i class=\"mr-1 fas fa-key opacity-60\"></i>
                                        Sign In
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <main class=\"mt-0 transition-all duration-200 ease-in-out\">
        <section class=\"min-h-screen\">
            <div class=\"relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover\">
                <div class=\"container z-1\">
                    <div class=\"flex flex-wrap -mx-3\">
                        <div class=\"flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12\">
                            <div class=\"relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border\">
                                <div class=\"p-6 pb-0 mb-0\">
                                    <h4 class=\"font-bold text-2xl text-slate-700\">Welcome back</h4>
                                    <p class=\"mb-0 text-slate-400\">Enter your email and password to sign in</p>
                                </div>

                                <div class=\"flex-auto p-6\">
                                    {% if error %}
                                        <div class=\"relative px-4 py-3 mb-4 text-sm text-white bg-red-500 rounded-lg\" role=\"alert\">
                                            {{ error }}
                                        </div>
                                    {% endif %}

                                    {% if app.user %}
                                        <div class=\"relative px-4 py-3 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg\" role=\"alert\">
                                            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\" class=\"font-semibold underline\">Logout</a>
                                        </div>
                                    {% endif %}

                                    <form method=\"post\" novalidate>
                                        <div class=\"mb-4\">
                                            <label for=\"inputEmail\" class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Email</label>
                                            <input
                                                    type=\"email\"
                                                    value=\"{{ last_username }}\"
                                                    name=\"_username\"
                                                    id=\"inputEmail\"
                                                    class=\"focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none\"
                                                    placeholder=\"Email\"
                                            >
                                            {% if form_errors is defined and form_errors['_username'] is defined %}
                                                <div class=\"text-red-500 text-xs mt-1\">{{ form_errors['_username'] }}</div>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-4\">
                                            <label for=\"inputPassword\" class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Password</label>
                                            <input
                                                    type=\"password\"
                                                    name=\"_password\"
                                                    id=\"inputPassword\"
                                                    class=\"focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none\"
                                                    placeholder=\"Password\"
                                            >
                                            {% if form_errors is defined and form_errors['_password'] is defined %}
                                                <div class=\"text-red-500 text-xs mt-1\">{{ form_errors['_password'] }}</div>
                                            {% endif %}
                                        </div>

                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                                        <div class=\"text-center\">
                                            <button
                                                    type=\"submit\"
                                                    class=\"inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25\"
                                            >
                                                Sign in
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class=\"p-6 px-1 pt-0 text-center\">
                                    <p class=\"mx-auto mb-4 text-sm text-slate-400\">
                                        Forgot your password?
                                        <a href=\"{{ path('app_forgot_password_request') }}\" class=\"font-semibold text-slate-700\">Reset it here</a>
                                    </p>
                                    <p class=\"mx-auto mb-4 text-sm text-slate-400\">
                                        Don't have an account?
                                        <a href=\"{{ path('app_register') }}\" class=\"font-semibold text-slate-700\">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex\">
                            <div class=\"relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden bg-[url('{{ asset('assets/img/signin-ill.jpg') }}'] rounded-xl\">
                                <span class=\"absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-blue-500 to-violet-500 opacity-60\"></span>
                                <h4 class=\"z-20 mt-12 font-bold text-white text-4xl\">\"URBANLINK\"</h4>
                                <p class=\"z-20 text-white\">\"All transport, one app. No worries—just easy, joyful journeys every time!\"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class=\"py-12\">
        <div class=\"container\">
            <div class=\"flex flex-wrap -mx-3\">
                <div class=\"flex-shrink-0 w-full max-w-full mx-auto mb-6 text-center lg:flex-0 lg:w-8/12\">
                    <p class=\"mb-0 text-slate-400\">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        UrbanLink 2025
                    </p>
                </div>
            </div>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Argon Dashboard JS -->
    <script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/argon-dashboard-tailwind.js') }}\"></script>
{% endblock %}


", "auth/login/login.html.twig", "C:\\Users\\sbiss\\OneDrive - ESPRIT\\Documents\\urbanlink_Sy\\templates\\auth\\login\\login.html.twig");
    }
}
