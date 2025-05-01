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

/* back_office/base.html.twig */
class __TwigTemplate_3efc819d5a84e03e66565a53de3f90d9 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'sidebar' => [$this, 'block_sidebar'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/base.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Assets Argon Dashboard -->
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-icon.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>

    <!-- Styles -->
    ";
        // line 19
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css?v=1.0.1"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 24
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 25
        yield "
    <!-- Scripts en Head -->
    ";
        // line 28
        yield "    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>

    ";
        // line 31
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/chartjs.min.js"), "html", null, true);
        yield "\" async></script>
    <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\" async></script>
    <script src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js?v=1.0.1"), "html", null, true);
        yield "\" async></script>

    ";
        // line 35
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 36
        yield "</head>
<body class=\"m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500\">
    <div class=\"absolute w-full bg-blue-500 dark:hidden min-h-75\"></div>

    <!-- Sidebar -->
    <aside class=\"fixed inset-y-0 flex-wrap items-center justify-between block p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0\" aria-expanded=\"false\">
        <div class=\"h-19 relative\">
            ";
        // line 44
        yield "            <i class=\"absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden\" sidenav-close></i>
            <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                <img src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct-dark.png"), "html", null, true);
        yield "\" class=\"inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8\" alt=\"logo\">
                ";
        // line 48
        yield "                ";
        // line 49
        yield "                <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">Taxi</span>
            </a>
        </div>

        <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\">

        ";
        // line 55
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 91
        yield "
        ";
        // line 93
        yield "        
        </div>
    </aside>

    <!-- Main Content -->
    <main class=\"relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl\">
        <!-- Navbar -->
        <nav class=\"relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start\">
            <div class=\"flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit\">
                <nav>
                    <ol class=\"flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16\">
                        ";
        // line 104
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        // line 109
        yield "                    </ol>
                    <h6 class=\"mb-0 font-bold text-white capitalize\">";
        // line 110
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</h6>
                </nav>
            </div>
        </nav>

        <!-- Content -->
        <div class=\"w-full px-6 py-6 mx-auto\">
            ";
        // line 117
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 118
        yield "        </div>

        <!-- Footer -->
        <footer class=\"pt-4\">
            <div class=\"w-full px-6 mx-auto\">
                <div class=\"flex flex-wrap items-center -mx-3 lg:justify-between\">
                    <div class=\"w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none\">
                        <div class=\"text-sm leading-normal text-center text-slate-500 lg:text-left\">
                            © ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Taxi - Tous droits réservés
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    ";
        // line 135
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield " Taxi DRIVER ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 56
        yield "        <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
            <ul class=\"flex flex-col pl-0 mb-0\">
                ";
        // line 59
        yield "                ";
        if (( !array_key_exists("show_dashboard", $context) || (isset($context["show_dashboard"]) || array_key_exists("show_dashboard", $context) ? $context["show_dashboard"] : (function () { throw new RuntimeError('Variable "show_dashboard" does not exist.', 59, $this->source); })()))) {
            // line 60
            yield "                <li class=\"mt-0.5 w-full\">
                    <a href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\" class=\"py-2.7 ";
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", ["_route"], "method", false, false, false, 61)) && is_string($_v1 = "dashboard_") && str_starts_with($_v0, $_v1))) ? ("bg-blue-500/13") : (""));
            yield " dark:text-white text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\">
                        <i class=\"ni ni-tv-2 mr-2 text-blue-500\"></i>
                        <span class=\"ml-1\">Dashboard</span>
                    </a>
                </li>
                ";
        }
        // line 67
        yield "                ";
        // line 68
        yield "                <li class=\"mt-0.5 w-full\">
                    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_dashboard");
        yield "\" class=\"py-2.7 ";
        yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "attributes", [], "any", false, false, false, 69), "get", ["_route"], "method", false, false, false, 69)) && is_string($_v3 = "taxiste_dashboard") && str_starts_with($_v2, $_v3))) ? ("bg-blue-500/13") : (""));
        yield " dark:text-white text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\">
                        <i class=\"ni ni-circle-08 mr-2\"></i>
                        <span class=\"ml-1\">Taxiste</span>
                    </a>
                </li>

                <li class=\"mt-0.5 w-full\">
          <form method=\"post\" action=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
            <button type=\"submit\" class=\"w-full dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors hover:bg-red-500/10\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-red-500 ni ni-button-power\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Logout</span>
            </button>
          </form>
        </li>

                ";
        // line 87
        yield "               
            </ul>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 105
        yield "                            <li class=\"text-sm leading-normal\">
                                <a class=\"text-white opacity-50\" href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_office_dashboard");
        yield "\">Dashboard</a>
                            </li>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back_office/base.html.twig";
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
        return array (  422 => 117,  400 => 110,  386 => 106,  383 => 105,  370 => 104,  356 => 87,  343 => 76,  331 => 69,  328 => 68,  326 => 67,  315 => 61,  312 => 60,  309 => 59,  305 => 56,  292 => 55,  270 => 35,  248 => 24,  225 => 7,  212 => 135,  201 => 126,  191 => 118,  189 => 117,  179 => 110,  176 => 109,  174 => 104,  161 => 93,  158 => 91,  156 => 55,  148 => 49,  146 => 48,  142 => 46,  138 => 45,  135 => 44,  126 => 36,  124 => 35,  119 => 33,  115 => 32,  110 => 31,  106 => 28,  102 => 25,  100 => 24,  95 => 22,  91 => 21,  87 => 20,  82 => 19,  72 => 11,  68 => 10,  62 => 7,  55 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back_office/base.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %} Taxi DRIVER {% endblock %}</title>
    
    <!-- Assets Argon Dashboard -->
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('assets/img/apple-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/img/favicon.png') }}\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>

    <!-- Styles -->
    {# Ajout d'une feuille de style custom (build/app.css) et versionnage de l'argon-dashboard-tailwind.css #}
    <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\">
    <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}

    <!-- Scripts en Head -->
    {# Ajout de Popper nécessaire pour certains composants JS #}
    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>

    {# Scripts avec l'attribut async tel que dans la référence #}
    <script src=\"{{ asset('assets/js/plugins/chartjs.min.js') }}\" async></script>
    <script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}\" async></script>
    <script src=\"{{ asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}\" async></script>

    {% block javascripts %}{% endblock %}
</head>
<body class=\"m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500\">
    <div class=\"absolute w-full bg-blue-500 dark:hidden min-h-75\"></div>

    <!-- Sidebar -->
    <aside class=\"fixed inset-y-0 flex-wrap items-center justify-between block p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0\" aria-expanded=\"false\">
        <div class=\"h-19 relative\">
            {# Icône pour fermer la sidebar sur mobile (optionnel) #}
            <i class=\"absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden\" sidenav-close></i>
            <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700\" href=\"{{ path('app_dashboard') }}\">
                <img src=\"{{ asset('assets/img/logo-ct-dark.png') }}\" class=\"inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8\" alt=\"logo\">
                {# Logo alternatif pour le mode dark, à décommenter si nécessaire #}
                {# <img src=\"{{ asset('assets/img/logo-ct.png') }}\" class=\"hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8\" alt=\"logo\"> #}
                <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">Taxi</span>
            </a>
        </div>

        <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\">

        {% block sidebar %}
        <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
            <ul class=\"flex flex-col pl-0 mb-0\">
                {# Dashboard #}
                {% if show_dashboard is not defined or show_dashboard %}
                <li class=\"mt-0.5 w-full\">
                    <a href=\"{{ path('app_dashboard') }}\" class=\"py-2.7 {{ app.request.attributes.get('_route') starts with 'dashboard_' ? 'bg-blue-500/13' : '' }} dark:text-white text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\">
                        <i class=\"ni ni-tv-2 mr-2 text-blue-500\"></i>
                        <span class=\"ml-1\">Dashboard</span>
                    </a>
                </li>
                {% endif %}
                {# Bouton Taxiste #}
                <li class=\"mt-0.5 w-full\">
                    <a href=\"{{ path('taxiste_dashboard') }}\" class=\"py-2.7 {{ app.request.attributes.get('_route') starts with 'taxiste_dashboard' ? 'bg-blue-500/13' : '' }} dark:text-white text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\">
                        <i class=\"ni ni-circle-08 mr-2\"></i>
                        <span class=\"ml-1\">Taxiste</span>
                    </a>
                </li>

                <li class=\"mt-0.5 w-full\">
          <form method=\"post\" action=\"{{ path('app_logout') }}\">
            <button type=\"submit\" class=\"w-full dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors hover:bg-red-500/10\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-red-500 ni ni-button-power\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Logout</span>
            </button>
          </form>
        </li>

                {# Autres items, par exemple Maintenance #}
               
            </ul>
        </div>
        {% endblock %}

        {# Bloc optionnel pour afficher la documentation en bas de la sidebar #}
        
        </div>
    </aside>

    <!-- Main Content -->
    <main class=\"relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl\">
        <!-- Navbar -->
        <nav class=\"relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start\">
            <div class=\"flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit\">
                <nav>
                    <ol class=\"flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16\">
                        {% block breadcrumb %}
                            <li class=\"text-sm leading-normal\">
                                <a class=\"text-white opacity-50\" href=\"{{ path('back_office_dashboard') }}\">Dashboard</a>
                            </li>
                        {% endblock %}
                    </ol>
                    <h6 class=\"mb-0 font-bold text-white capitalize\">{% block page_title %}{% endblock %}</h6>
                </nav>
            </div>
        </nav>

        <!-- Content -->
        <div class=\"w-full px-6 py-6 mx-auto\">
            {% block body %}{% endblock %}
        </div>

        <!-- Footer -->
        <footer class=\"pt-4\">
            <div class=\"w-full px-6 mx-auto\">
                <div class=\"flex flex-wrap items-center -mx-3 lg:justify-between\">
                    <div class=\"w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none\">
                        <div class=\"text-sm leading-normal text-center text-slate-500 lg:text-left\">
                            © {{ \"now\"|date(\"Y\") }} Taxi - Tous droits réservés
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    {# Vous pouvez aussi placer certains scripts en fin de page si besoin #}
</body>
</html>
", "back_office/base.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\back_office\\base.html.twig");
    }
}
