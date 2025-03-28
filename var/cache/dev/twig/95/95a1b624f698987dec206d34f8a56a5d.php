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

/* base.html.twig */
class __TwigTemplate_fe6a33cf2ea68e993d136ecf41ee8298 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-icon.png"), "html", null, true);
        yield "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\" />
    <title>Argon Dashboard 2 Tailwind by Creative Tim</title>
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <!-- Nucleo Icons -->
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <!-- Popper -->
    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>
    <!-- Main Styling -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css?v=1.0.1"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

        ";
        // line 23
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 25
        yield "


    <script src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/chartjs.min.js"), "html", null, true);
        yield "\" async></script>
    <!-- plugin for scrollbar  -->
    <script src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\" async></script>
    <!-- main script file  -->
    <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js?v=1.0.1"), "html", null, true);
        yield "\" async></script>
        ";
        // line 33
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 35
        yield "    </head>
    <body>
    <div>
      <aside class=\"argon-sidebar fixed inset-y-0 w-64 items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0\" aria-expanded=\"false\">
        <div class=\"h-19\">
          <i class=\"absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden\" sidenav-close></i>
          <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700\" href=\"https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html\" target=\"_blank\">
            <img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct-dark.png"), "html", null, true);
        yield "\" class=\"inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8\" alt=\"main_logo\" />
            <img src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct.png"), "html", null, true);
        yield "\" class=\"hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8\" alt=\"main_logo\" />
            <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">Argon Dashboard 2</span>
          </a>
        </div>

        <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />

        ";
        // line 50
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 149
        yield "        
        ";
        // line 150
        if (( !array_key_exists("show_docs", $context) || (isset($context["show_docs"]) || array_key_exists("show_docs", $context) ? $context["show_docs"] : (function () { throw new RuntimeError('Variable "show_docs" does not exist.', 150, $this->source); })()))) {
            // line 151
            yield "        <div class=\"mx-4\">
          <!-- load phantom colors for card after: -->
          <p class=\"invisible hidden text-gray-800 text-red-500 text-red-600 text-blue-500 bg-gray-500/30 bg-cyan-500/30 bg-emerald-500/30 bg-orange-500/30 bg-red-500/30 after:bg-gradient-to-tl after:from-zinc-800 after:to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 after:from-blue-700 after:to-cyan-500 after:from-orange-500 after:to-yellow-500 after:from-green-600 after:to-lime-400 after:from-red-600 after:to-orange-600 after:from-slate-600 after:to-slate-300 text-emerald-500 text-cyan-500 text-slate-400\"></p>
          <div class=\"relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border\" sidenav-card>
            <img class=\"w-1/2 mx-auto\" src=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/illustrations/icon-documentation.svg"), "html", null, true);
            yield "\" alt=\"sidebar illustrations\" />
            <div class=\"flex-auto w-full p-4 pt-0 text-center\">
              <div class=\"transition-all duration-200 ease-nav-brand\">
                <h6 class=\"mb-0 text-slate-700\">Need help?</h6>
                <p class=\"mb-0 text-xs font-semibold leading-tight dark:opacity-60\">Please check our docs</p>
              </div>
            </div>
          </div>
          <a href=\"https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/\" target=\"_blank\" class=\"inline-block w-full px-8 py-2 mb-4 text-xs font-bold leading-normal text-center capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px\">Documentation</a>
          <!-- pro btn  -->
          <a class=\"inline-block w-full px-8 py-2 text-xs font-bold leading-normal text-center align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md select-none bg-150 bg-x-25 hover:shadow-xs hover:-translate-y-px\" href=\"https://www.creative-tim.com/product/argon-dashboard-pro-tailwind?ref=sidebarfree\" target=\"_blank\">Upgrade to pro</a>
        </div>
        ";
        }
        // line 168
        yield "      </aside>
      <main>
          ";
        // line 170
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 171
        yield "      </main>
    </div>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
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

        // line 34
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
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

        // line 51
        yield "        <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
          <ul class=\"flex flex-col pl-0 mb-0\">
          ";
        // line 53
        if (( !array_key_exists("show_dashboard", $context) || (isset($context["show_dashboard"]) || array_key_exists("show_dashboard", $context) ? $context["show_dashboard"] : (function () { throw new RuntimeError('Variable "show_dashboard" does not exist.', 53, $this->source); })()))) {
            // line 54
            yield "            <li class=\"mt-0.5 w-full\">
              <a class=\"py-2.7 bg-blue-500/13 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            yield "\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Dashboard</span>
              </a>
            </li>
            ";
        }
        // line 63
        yield "
            ";
        // line 64
        if (( !array_key_exists("show_maintenance", $context) || (isset($context["show_maintenance"]) || array_key_exists("show_maintenance", $context) ? $context["show_maintenance"] : (function () { throw new RuntimeError('Variable "show_maintenance" does not exist.', 64, $this->source); })()))) {
            // line 65
            yield "            <li class=\"mt-0.5 w-full\">
              <a class=\" dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/tables.html"), "html", null, true);
            yield "\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Tables</span>
              </a>
            </li>
            ";
        }
        // line 74
        yield "
            ";
        // line 75
        if (( !array_key_exists("show_billing", $context) || (isset($context["show_billing"]) || array_key_exists("show_billing", $context) ? $context["show_billing"] : (function () { throw new RuntimeError('Variable "show_billing" does not exist.', 75, $this->source); })()))) {
            // line 76
            yield "            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/billing.html"), "html", null, true);
            yield "\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Billing</span>
              </a>
            </li>
            ";
        }
        // line 85
        yield "
            ";
        // line 86
        if (( !array_key_exists("show_vr", $context) || (isset($context["show_vr"]) || array_key_exists("show_vr", $context) ? $context["show_vr"] : (function () { throw new RuntimeError('Variable "show_vr" does not exist.', 86, $this->source); })()))) {
            // line 87
            yield "            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/virtual-reality.html"), "html", null, true);
            yield "\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-cyan-500 ni ni-app\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Virtual Reality</span>
              </a>
            </li>
            ";
        }
        // line 96
        yield "
            ";
        // line 97
        if (( !array_key_exists("show_RTL", $context) || (isset($context["show_RTL"]) || array_key_exists("show_RTL", $context) ? $context["show_RTL"] : (function () { throw new RuntimeError('Variable "show_RTL" does not exist.', 97, $this->source); })()))) {
            // line 98
            yield "            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/rtl.html"), "html", null, true);
            yield "\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-red-600 ni ni-world-2\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">RTL</span>
              </a>
            </li>
            ";
        }
        // line 107
        yield "
            ";
        // line 108
        if (( !array_key_exists("show_account", $context) || (isset($context["show_account"]) || array_key_exists("show_account", $context) ? $context["show_account"] : (function () { throw new RuntimeError('Variable "show_account" does not exist.', 108, $this->source); })()))) {
            // line 109
            yield "            <li class=\"w-full mt-4\">
              <h6 class=\"pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60\">Account pages</h6>
            </li>
            ";
        }
        // line 113
        yield "
            ";
        // line 114
        if (( !array_key_exists("show_profile", $context) || (isset($context["show_profile"]) || array_key_exists("show_profile", $context) ? $context["show_profile"] : (function () { throw new RuntimeError('Variable "show_profile" does not exist.', 114, $this->source); })()))) {
            // line 115
            yield "            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/profile.html"), "html", null, true);
            yield "\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Profile</span>
              </a>
            </li>
            ";
        }
        // line 124
        yield "
            ";
        // line 125
        if (( !array_key_exists("show_signIn", $context) || (isset($context["show_signIn"]) || array_key_exists("show_signIn", $context) ? $context["show_signIn"] : (function () { throw new RuntimeError('Variable "show_signIn" does not exist.', 125, $this->source); })()))) {
            // line 126
            yield "            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/sign-in.html"), "html", null, true);
            yield "\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-orange-500 ni ni-single-copy-04\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Sign In</span>
              </a>
            </li>
            ";
        }
        // line 135
        yield "
            ";
        // line 136
        if (( !array_key_exists("show_signUp", $context) || (isset($context["show_signUp"]) || array_key_exists("show_signUp", $context) ? $context["show_signUp"] : (function () { throw new RuntimeError('Variable "show_signUp" does not exist.', 136, $this->source); })()))) {
            // line 137
            yield "            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/sign-up.html"), "html", null, true);
            yield "\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-cyan-500 ni ni-collection\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Sign Up</span>
              </a>
            </li>
            ";
        }
        // line 146
        yield "          </ul>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 170
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
        return "base.html.twig";
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
        return array (  428 => 170,  415 => 146,  404 => 138,  401 => 137,  399 => 136,  396 => 135,  385 => 127,  382 => 126,  380 => 125,  377 => 124,  366 => 116,  363 => 115,  361 => 114,  358 => 113,  352 => 109,  350 => 108,  347 => 107,  336 => 99,  333 => 98,  331 => 97,  328 => 96,  317 => 88,  314 => 87,  312 => 86,  309 => 85,  298 => 77,  295 => 76,  293 => 75,  290 => 74,  279 => 66,  276 => 65,  274 => 64,  271 => 63,  260 => 55,  257 => 54,  255 => 53,  251 => 51,  238 => 50,  227 => 34,  214 => 33,  203 => 24,  190 => 23,  175 => 171,  173 => 170,  169 => 168,  153 => 155,  147 => 151,  145 => 150,  142 => 149,  140 => 50,  130 => 43,  126 => 42,  117 => 35,  115 => 33,  111 => 32,  106 => 30,  101 => 28,  96 => 25,  94 => 23,  89 => 21,  85 => 20,  78 => 16,  74 => 15,  64 => 8,  60 => 7,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{asset('assets/img/apple-icon.png')}}\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets/img/favicon.png')}}\" />
    <title>Argon Dashboard 2 Tailwind by Creative Tim</title>
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <!-- Nucleo Icons -->
    <link href=\"{{asset('assets/css/nucleo-icons.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{asset('assets/css/nucleo-svg.css')}}\" rel=\"stylesheet\" />
    <!-- Popper -->
    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>
    <!-- Main Styling -->
    <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\">
    <link href=\"{{asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1')}}\" rel=\"stylesheet\" />

        {% block stylesheets %}
        {% endblock %}



    <script src=\"{{asset('assets/js/plugins/chartjs.min.js')}}\" async></script>
    <!-- plugin for scrollbar  -->
    <script src=\"{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}\" async></script>
    <!-- main script file  -->
    <script src=\"{{asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}\" async></script>
        {% block javascripts %}
        {% endblock %}
    </head>
    <body>
    <div>
      <aside class=\"argon-sidebar fixed inset-y-0 w-64 items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0\" aria-expanded=\"false\">
        <div class=\"h-19\">
          <i class=\"absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden\" sidenav-close></i>
          <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700\" href=\"https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html\" target=\"_blank\">
            <img src=\"{{asset('assets/img/logo-ct-dark.png')}}\" class=\"inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8\" alt=\"main_logo\" />
            <img src=\"{{asset('assets/img/logo-ct.png')}}\" class=\"hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8\" alt=\"main_logo\" />
            <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">Argon Dashboard 2</span>
          </a>
        </div>

        <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />

        {% block sidebar %}
        <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
          <ul class=\"flex flex-col pl-0 mb-0\">
          {% if show_dashboard is not defined or show_dashboard %}
            <li class=\"mt-0.5 w-full\">
              <a class=\"py-2.7 bg-blue-500/13 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"{{path('dashboard')}}\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Dashboard</span>
              </a>
            </li>
            {% endif %}

            {% if show_maintenance is not defined or show_maintenance %}
            <li class=\"mt-0.5 w-full\">
              <a class=\" dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/tables.html')}}\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Tables</span>
              </a>
            </li>
            {% endif %}

            {% if show_billing is not defined or show_billing %}
            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/billing.html')}}\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Billing</span>
              </a>
            </li>
            {% endif %}

            {% if show_vr is not defined or show_vr %}
            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/virtual-reality.html')}}\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-cyan-500 ni ni-app\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Virtual Reality</span>
              </a>
            </li>
            {% endif %}

            {% if show_RTL is not defined or show_RTL %}
            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/rtl.html')}}\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-red-600 ni ni-world-2\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">RTL</span>
              </a>
            </li>
            {% endif %}

            {% if show_account is not defined or show_account %}
            <li class=\"w-full mt-4\">
              <h6 class=\"pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60\">Account pages</h6>
            </li>
            {% endif %}

            {% if show_profile is not defined or show_profile %}
            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/profile.html')}}\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Profile</span>
              </a>
            </li>
            {% endif %}

            {% if show_signIn is not defined or show_signIn %}
            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/sign-in.html')}}\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-orange-500 ni ni-single-copy-04\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Sign In</span>
              </a>
            </li>
            {% endif %}

            {% if show_signUp is not defined or show_signUp %}
            <li class=\"mt-0.5 w-full\">
              <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/sign-up.html')}}\">
                <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                  <i class=\"relative top-0 text-sm leading-normal text-cyan-500 ni ni-collection\"></i>
                </div>
                <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Sign Up</span>
              </a>
            </li>
            {% endif %}
          </ul>
        </div>
        {% endblock %}
        
        {% if show_docs is not defined or show_docs %}
        <div class=\"mx-4\">
          <!-- load phantom colors for card after: -->
          <p class=\"invisible hidden text-gray-800 text-red-500 text-red-600 text-blue-500 bg-gray-500/30 bg-cyan-500/30 bg-emerald-500/30 bg-orange-500/30 bg-red-500/30 after:bg-gradient-to-tl after:from-zinc-800 after:to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 after:from-blue-700 after:to-cyan-500 after:from-orange-500 after:to-yellow-500 after:from-green-600 after:to-lime-400 after:from-red-600 after:to-orange-600 after:from-slate-600 after:to-slate-300 text-emerald-500 text-cyan-500 text-slate-400\"></p>
          <div class=\"relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border\" sidenav-card>
            <img class=\"w-1/2 mx-auto\" src=\"{{asset('assets/img/illustrations/icon-documentation.svg')}}\" alt=\"sidebar illustrations\" />
            <div class=\"flex-auto w-full p-4 pt-0 text-center\">
              <div class=\"transition-all duration-200 ease-nav-brand\">
                <h6 class=\"mb-0 text-slate-700\">Need help?</h6>
                <p class=\"mb-0 text-xs font-semibold leading-tight dark:opacity-60\">Please check our docs</p>
              </div>
            </div>
          </div>
          <a href=\"https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/\" target=\"_blank\" class=\"inline-block w-full px-8 py-2 mb-4 text-xs font-bold leading-normal text-center capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px\">Documentation</a>
          <!-- pro btn  -->
          <a class=\"inline-block w-full px-8 py-2 text-xs font-bold leading-normal text-center align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md select-none bg-150 bg-x-25 hover:shadow-xs hover:-translate-y-px\" href=\"https://www.creative-tim.com/product/argon-dashboard-pro-tailwind?ref=sidebarfree\" target=\"_blank\">Upgrade to pro</a>
        </div>
        {% endif %}
      </aside>
      <main>
          {% block body %}{% endblock %}
      </main>
    </div>
    </body>
</html>
", "base.html.twig", "D:\\GitHub\\WebApp\\UrbanLink\\UrbanLink_Symfony_Fork\\templates\\base.html.twig");
    }
}
