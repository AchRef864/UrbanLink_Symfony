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
class __TwigTemplate_9e5f048df844652071fb42b3a45fabcb extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-icon.png"), "html", null, true);
        yield "\" />
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\" />
  <title>";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
  <!-- Fonts and icons -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <!-- Nucleo Icons -->
  <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
  <!-- Main Styling -->
  <link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css?v=1.0.1"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
  ";
        // line 18
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 19
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
</head>

<body class=\"m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500\">
";
        // line 24
        $context["is_auth_page"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "attributes", [], "any", false, false, false, 24), "get", ["_route"], "method", false, false, false, 24), ["app_login", "app_register", "app_home"]);
        // line 25
        yield "
";
        // line 26
        if (( !(isset($context["is_auth_page"]) || array_key_exists("is_auth_page", $context) ? $context["is_auth_page"] : (function () { throw new RuntimeError('Variable "is_auth_page" does not exist.', 26, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26))) {
            // line 27
            yield "  <!-- Sidebar -->
  <aside class=\"argon-sidebar fixed inset-y-0 w-64 items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0\" aria-expanded=\"false\">
    <div class=\"h-19\">
      <i class=\"absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden\" sidenav-close></i>
      <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700\" href=\"";
            // line 31
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\">
        <img src=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct-dark.png"), "html", null, true);
            yield "\" class=\"inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8\" alt=\"main_logo\" />
        <img src=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct.png"), "html", null, true);
            yield "\" class=\"hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8\" alt=\"main_logo\" />
        <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">
            ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "role", [], "any", false, false, false, 35) == "admin")) {
                yield "Admin Panel
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 36
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "role", [], "any", false, false, false, 36) == "driver")) {
                yield "Driver Panel
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 37
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "role", [], "any", false, false, false, 37) == "taxi")) {
                yield "Taxi Panel
            ";
            } else {
                // line 38
                yield "Client Panel";
            }
            // line 39
            yield "          </span>
      </a>
    </div>

    <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />

    <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
      <ul class=\"flex flex-col pl-0 mb-0\">
        <!-- Dashboard Section -->
        <li class=\"mt-0.5 w-full\">
          <a class=\"py-2.7 bg-blue-500/13 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\">
            <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
              <i class=\"relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2\"></i>
            </div>
            <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Dashboard</span>
          </a>
        </li>

        <!-- Role-Specific Navigation Section -->
        <li class=\"w-full\">
          <hr class=\"h-px mt-2 mb-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />
          <h6 class=\"pl-6 text-xs font-bold uppercase text-slate-500 dark:text-white/60\">
            ";
            // line 61
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "role", [], "any", false, false, false, 61) == "admin")) {
                yield "Admin Tools
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 62
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "role", [], "any", false, false, false, 62) == "driver")) {
                yield "Driver Tools
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 63
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "role", [], "any", false, false, false, 63) == "taxi")) {
                yield "Taxi Tools
            ";
            } else {
                // line 64
                yield "Client Tools";
            }
            // line 65
            yield "          </h6>
        </li>

        ";
            // line 69
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "role", [], "any", false, false, false, 69) == "admin")) {
                // line 70
                yield "          <li class=\"mt-0.5 w-full\">
            <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
                // line 71
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_manage");
                yield "\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-orange-500 ni ni-settings-gear-65\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Manage Users</span>
            </a>
          </li>
          <li class=\"mt-0.5 w-full\">
            <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
                // line 79
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete");
                yield "\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-cyan-500 ni ni-single-copy-04\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Edit Profiles</span>
            </a>
          </li>



        ";
            }
            // line 90
            yield "
        <!-- Account Section -->
        <li class=\"w-full\">
          <hr class=\"h-px mt-2 mb-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />
          <h6 class=\"pl-6 text-xs font-bold uppercase text-slate-500 dark:text-white/60\">Account pages</h6>
        </li>

        ";
            // line 98
            yield "        <li class=\"mt-0.5 w-full\">
          <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">
            <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
              <i class=\"relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02\"></i>
            </div>
            <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">My Profile</span>
          </a>
        </li>

        <li class=\"mt-0.5 w-full\">
          <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
            // line 108
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\">
            <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
              <i class=\"relative top-0 text-sm leading-normal text-green-500 ni ni-settings\"></i>
            </div>
            <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Edit Profile</span>
          </a>
        </li>

        <li class=\"mt-0.5 w-full\">
          <form method=\"post\" action=\"";
            // line 117
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
      </ul>
    </div>
  </aside>
";
        }
        // line 130
        yield "
<!-- Main Content -->
<main class=\"relative h-full transition-all duration-200 ease-in-out rounded-xl ";
        // line 132
        if (( !(isset($context["is_auth_page"]) || array_key_exists("is_auth_page", $context) ? $context["is_auth_page"] : (function () { throw new RuntimeError('Variable "is_auth_page" does not exist.', 132, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132))) {
            yield "xl:ml-68";
        }
        yield "\">
  ";
        // line 133
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 134
        yield "</main>

<!-- Scripts -->
<script src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/chartjs.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js?v=1.0.1"), "html", null, true);
        yield "\"></script>

";
        // line 141
        if (( !(isset($context["is_auth_page"]) || array_key_exists("is_auth_page", $context) ? $context["is_auth_page"] : (function () { throw new RuntimeError('Variable "is_auth_page" does not exist.', 141, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141))) {
            // line 142
            yield "  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Sidebar toggle functionality
      const body = document.body;
      const sidenavClose = document.querySelector('[sidenav-close]');
      const overlay = document.querySelector('.overlay');

      if (sidenavClose) {
        sidenavClose.addEventListener('click', function() {
          body.classList.remove('sidebar-open');
        });
      }
      // Initialize perfect scrollbar
      /*
      if
      (typeof PerfectScrollbar !== 'undefined') {
        const sidebar = document.querySelector('.argon-sidebar');
        if (sidebar) {
          new PerfectScrollbar(sidebar);
        }
      } */
    });
  </script>
";
        }
        // line 166
        yield "
";
        // line 167
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 168
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
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

        yield "Argon Dashboard 2 Tailwind";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

    // line 133
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

    // line 167
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
        return array (  417 => 167,  395 => 133,  373 => 18,  350 => 8,  335 => 168,  333 => 167,  330 => 166,  304 => 142,  302 => 141,  297 => 139,  293 => 138,  289 => 137,  284 => 134,  282 => 133,  276 => 132,  272 => 130,  256 => 117,  244 => 108,  232 => 99,  229 => 98,  220 => 90,  206 => 79,  195 => 71,  192 => 70,  189 => 69,  184 => 65,  181 => 64,  176 => 63,  172 => 62,  168 => 61,  153 => 49,  141 => 39,  138 => 38,  133 => 37,  129 => 36,  125 => 35,  120 => 33,  116 => 32,  112 => 31,  106 => 27,  104 => 26,  101 => 25,  99 => 24,  91 => 19,  89 => 18,  85 => 17,  80 => 15,  76 => 14,  67 => 8,  63 => 7,  59 => 6,  52 => 1,);
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
  <title>{% block title %}Argon Dashboard 2 Tailwind{% endblock %}</title>
  <!-- Fonts and icons -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <!-- Nucleo Icons -->
  <link href=\"{{asset('assets/css/nucleo-icons.css')}}\" rel=\"stylesheet\" />
  <link href=\"{{asset('assets/css/nucleo-svg.css')}}\" rel=\"stylesheet\" />
  <!-- Main Styling -->
  <link href=\"{{asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1')}}\" rel=\"stylesheet\" />
  {% block stylesheets %}{% endblock %}
            {{ encore_entry_link_tags('app') }}
</head>

<body class=\"m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500\">
{# Check if we're on an auth page or home page #}
{% set is_auth_page = app.request.attributes.get('_route') in ['app_login', 'app_register','app_home'] %}

{% if not is_auth_page and app.user %}
  <!-- Sidebar -->
  <aside class=\"argon-sidebar fixed inset-y-0 w-64 items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0\" aria-expanded=\"false\">
    <div class=\"h-19\">
      <i class=\"absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden\" sidenav-close></i>
      <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700\" href=\"{{ path('app_dashboard') }}\">
        <img src=\"{{asset('assets/img/logo-ct-dark.png')}}\" class=\"inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8\" alt=\"main_logo\" />
        <img src=\"{{asset('assets/img/logo-ct.png')}}\" class=\"hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8\" alt=\"main_logo\" />
        <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">
            {% if app.user.role == 'admin' %}Admin Panel
            {% elseif app.user.role == 'driver' %}Driver Panel
            {% elseif app.user.role == 'taxi' %}Taxi Panel
            {% else %}Client Panel{% endif %}
          </span>
      </a>
    </div>

    <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />

    <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
      <ul class=\"flex flex-col pl-0 mb-0\">
        <!-- Dashboard Section -->
        <li class=\"mt-0.5 w-full\">
          <a class=\"py-2.7 bg-blue-500/13 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"{{ path('app_dashboard') }}\">
            <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
              <i class=\"relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2\"></i>
            </div>
            <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Dashboard</span>
          </a>
        </li>

        <!-- Role-Specific Navigation Section -->
        <li class=\"w-full\">
          <hr class=\"h-px mt-2 mb-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />
          <h6 class=\"pl-6 text-xs font-bold uppercase text-slate-500 dark:text-white/60\">
            {% if app.user.role == 'admin' %}Admin Tools
            {% elseif app.user.role == 'driver' %}Driver Tools
            {% elseif app.user.role == 'taxi' %}Taxi Tools
            {% else %}Client Tools{% endif %}
          </h6>
        </li>

        {# Admin Specific Navigation #}
        {% if app.user.role == 'admin' %}
          <li class=\"mt-0.5 w-full\">
            <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{ path('admin_user_manage') }}\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-orange-500 ni ni-settings-gear-65\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Manage Users</span>
            </a>
          </li>
          <li class=\"mt-0.5 w-full\">
            <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{ path('admin_user_delete') }}\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-cyan-500 ni ni-single-copy-04\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Edit Profiles</span>
            </a>
          </li>



        {% endif %}

        <!-- Account Section -->
        <li class=\"w-full\">
          <hr class=\"h-px mt-2 mb-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />
          <h6 class=\"pl-6 text-xs font-bold uppercase text-slate-500 dark:text-white/60\">Account pages</h6>
        </li>

        {# Common Items for all authenticated users #}
        <li class=\"mt-0.5 w-full\">
          <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{ path('app_profile') }}\">
            <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
              <i class=\"relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02\"></i>
            </div>
            <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">My Profile</span>
          </a>
        </li>

        <li class=\"mt-0.5 w-full\">
          <a class=\"dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{ path('app_profile_edit') }}\">
            <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
              <i class=\"relative top-0 text-sm leading-normal text-green-500 ni ni-settings\"></i>
            </div>
            <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Edit Profile</span>
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
      </ul>
    </div>
  </aside>
{% endif %}

<!-- Main Content -->
<main class=\"relative h-full transition-all duration-200 ease-in-out rounded-xl {% if not is_auth_page and app.user %}xl:ml-68{% endif %}\">
  {% block body %}{% endblock %}
</main>

<!-- Scripts -->
<script src=\"{{asset('assets/js/plugins/chartjs.min.js')}}\"></script>
<script src=\"{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}\"></script>
<script src=\"{{asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}\"></script>

{% if not is_auth_page and app.user %}
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Sidebar toggle functionality
      const body = document.body;
      const sidenavClose = document.querySelector('[sidenav-close]');
      const overlay = document.querySelector('.overlay');

      if (sidenavClose) {
        sidenavClose.addEventListener('click', function() {
          body.classList.remove('sidebar-open');
        });
      }
      // Initialize perfect scrollbar
      /*
      if
      (typeof PerfectScrollbar !== 'undefined') {
        const sidebar = document.querySelector('.argon-sidebar');
        if (sidebar) {
          new PerfectScrollbar(sidebar);
        }
      } */
    });
  </script>
{% endif %}

{% block javascripts %}{% endblock %}
            {{ encore_entry_script_tags('app') }}
</body>
</html>", "base.html.twig", "C:\\Users\\sbiss\\OneDrive - ESPRIT\\Documents\\urbanlink_Sy\\templates\\base.html.twig");
    }
}
