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
class __TwigTemplate_ce358b380a902dbb33641f634fab8230 extends Template
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

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  ";
        // line 9
        yield "  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-32x32.png"), "html", null, true);
        yield "\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-16x16.png"), "html", null, true);
        yield "\">
  <link rel=\"manifest\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/site.webmanifest"), "html", null, true);
        yield "\">
  <link rel=\"mask-icon\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/safari-pinned-tab.svg"), "html", null, true);
        yield "\" color=\"#5bbad5\">
  <meta name=\"msapplication-TileColor\" content=\"#da532c\">
  <meta name=\"theme-color\" content=\"#ffffff\">

  <title>";
        // line 17
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

  ";
        // line 20
        yield "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
  <link href=\"https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">

  ";
        // line 30
        yield "  <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

  ";
        // line 34
        yield "  <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

  ";
        // line 37
        yield "  ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "

  ";
        // line 40
        yield "  ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 265
        yield "</head>
<body class=\"";
        // line 266
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            yield "has-sidebar";
        }
        yield "\">
";
        // line 268
        $context["is_auth_page"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "request", [], "any", false, false, false, 268), "attributes", [], "any", false, false, false, 268), "get", ["_route"], "method", false, false, false, 268), ["app_login", "app_register", "app_home"]);
        // line 269
        yield "
";
        // line 271
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") &&  !(isset($context["is_auth_page"]) || array_key_exists("is_auth_page", $context) ? $context["is_auth_page"] : (function () { throw new RuntimeError('Variable "is_auth_page" does not exist.', 271, $this->source); })()))) {
            // line 272
            yield "  <aside class=\"argon-sidebar\">
    <div class=\"sidebar-logo\" style=\"display: flex; align-items: center; padding: 20px 15px; border-bottom: 1px solid rgba(255,255,255,0.1);\">
      <img src=\"";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
            yield "\" alt=\"UrbanLink Logo\" style=\"width: 50px; height: auto; margin-right: 15px;\">
      <span style=\"font-size: 18px; font-weight: 600; color: black;\">Admin Panel</span>
    </div>
    <div class=\"sidebar-content\">
      <ul class=\"sidebar-menu\">
        <li>
          <a href=\"";
            // line 280
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\" class=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 280, $this->source); })()), "request", [], "any", false, false, false, 280), "get", ["_route"], "method", false, false, false, 280) == "app_dashboard")) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-tachometer-alt\"></i> Dashboard
          </a>
        </li>

        <div class=\"sidebar-divider\"></div>
        <div class=\"sidebar-heading\">Gestion du Transport</div>

        <li>
          <a href=\"";
            // line 289
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_index");
            yield "\" class=\"";
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 289, $this->source); })()), "request", [], "any", false, false, false, 289), "get", ["_route"], "method", false, false, false, 289)) && is_string($_v1 = "vehicule_") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-car\"></i> Vehicles
          </a>
        </li>

        <li>
          <a href=\"";
            // line 295
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenances_index");
            yield "\" class=\"";
            yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 295, $this->source); })()), "request", [], "any", false, false, false, 295), "get", ["_route"], "method", false, false, false, 295)) && is_string($_v3 = "maintenance_") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
            yield "\">
            <i class=\"fa-solid fa-screwdriver-wrench\"></i> Maintenance
          </a>
        </li>

        <li>
          <a href=\"";
            // line 301
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage");
            yield "\" class=\"";
            yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "request", [], "any", false, false, false, 301), "get", ["_route"], "method", false, false, false, 301)) && is_string($_v5 = "trajet_") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-route\"></i> Tracks
          </a>
        </li>

        <li>
          <a href=\"";
            // line 307
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservations");
            yield "\" class=\"";
            yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 307, $this->source); })()), "request", [], "any", false, false, false, 307), "get", ["_route"], "method", false, false, false, 307)) && is_string($_v7 = "booking_") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
            yield "\">
            <i class=\"fa-solid fa-bookmark\"></i> Booking
          </a>
        </li>
        
        <!-- Account Section -->
        <li class=\"w-full\">
          <hr class=\"h-px mt-2 mb-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />
          <h6 class=\"pl-6 text-xs font-bold uppercase text-slate-500 dark:text-white/60\">Account pages</h6>
        </li>
        <li>
          <a href=\"";
            // line 318
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
            yield "\" class=\"";
            yield (((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 318, $this->source); })()), "request", [], "any", false, false, false, 318), "get", ["_route"], "method", false, false, false, 318)) && is_string($_v9 = "app_avis_") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-comment-dots\"></i> Complaints
          </a>
        </li>

        <li>
          <a href=\"";
            // line 324
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_index");
            yield "\" class=\"";
            yield (((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 324, $this->source); })()), "request", [], "any", false, false, false, 324), "get", ["_route"], "method", false, false, false, 324)) && is_string($_v11 = "taxi_") && str_starts_with($_v10, $_v11))) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-taxi\"></i> Taxis
          </a>
        </li>
          <a href=\"";
            // line 328
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_index");
            yield "\" class=\"";
            yield (((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 328, $this->source); })()), "request", [], "any", false, false, false, 328), "get", ["_route"], "method", false, false, false, 328)) && is_string($_v13 = "course_") && str_starts_with($_v12, $_v13))) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-bus\"></i> Courses
          </a>
        </li>
        <li>
          <a href=\"";
            // line 333
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_list");
            yield "\" class=\"";
            yield (((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 333, $this->source); })()), "request", [], "any", false, false, false, 333), "get", ["_route"], "method", false, false, false, 333)) && is_string($_v15 = "abonnement_") && str_starts_with($_v14, $_v15))) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-id-card\"></i> Subscriptions
          </a>
        </li>
        <li>
          <a href=\"";
            // line 338
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservations");
            yield "\" class=\"";
            yield (((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 338, $this->source); })()), "request", [], "any", false, false, false, 338), "get", ["_route"], "method", false, false, false, 338)) && is_string($_v17 = "abonnement_") && str_starts_with($_v16, $_v17))) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-id-card\"></i> Subscriptions List
          </a>
        </li>

        <li class=\"nav-item\">
          <a href=\"#\"
             id=\"urbanTalkTrigger\"
             class=\"nav-link ";
            // line 346
            yield (((is_string($_v18 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 346, $this->source); })()), "request", [], "any", false, false, false, 346), "get", ["_route"], "method", false, false, false, 346)) && is_string($_v19 = "urbantalk_") && str_starts_with($_v18, $_v19))) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-robot mr-2\"></i> UrbanTalk
          </a>
        </li>

        <div class=\"sidebar-divider\"></div>
        <div class=\"sidebar-heading\">Administration</div>

        <li>
          <a href=\"";
            // line 355
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_manage");
            yield "\" class=\"";
            yield (((is_string($_v20 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 355, $this->source); })()), "request", [], "any", false, false, false, 355), "get", ["_route"], "method", false, false, false, 355)) && is_string($_v21 = "admin_user_") && str_starts_with($_v20, $_v21))) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-users\"></i> Users
          </a>
        </li>
        <li>
          <a href=\"";
            // line 360
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete");
            yield "\" class=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 360, $this->source); })()), "request", [], "any", false, false, false, 360), "get", ["_route"], "method", false, false, false, 360) == "admin_user_delete")) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-user-minus\"></i> Update Profiles
          </a>
        </li>
        <li>
          <a href=\"";
            // line 365
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_stats");
            yield "\" class=\"";
            yield (((is_string($_v22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 365, $this->source); })()), "request", [], "any", false, false, false, 365), "get", ["_route"], "method", false, false, false, 365)) && is_string($_v23 = "course_") && str_starts_with($_v22, $_v23))) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-chart-line\"></i> Statistiques courses et taxis
          </a>
        </li>
        <li>
          <a href=\"";
            // line 370
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_map");
            yield "\" class=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 370, $this->source); })()), "request", [], "any", false, false, false, 370), "get", ["_route"], "method", false, false, false, 370) == "course_map")) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-map\"></i> Carte des courses
          </a>
        </li>
        <li>
          <a href=\"";
            // line 375
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics");
            yield "\" class=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 375, $this->source); })()), "request", [], "any", false, false, false, 375), "get", ["_route"], "method", false, false, false, 375) == "admin_statistics")) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-chart-bar\"></i> Statistiques users
          </a>
        </li>


        <div class=\"sidebar-divider\"></div>

        <li>
          <a href=\"";
            // line 384
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" class=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 384, $this->source); })()), "request", [], "any", false, false, false, 384), "get", ["_route"], "method", false, false, false, 384) == "app_profile_edit")) ? ("active") : (""));
            yield "\">
            <i class=\"fas fa-user-edit\"></i> My profile
          </a>
        </li>
        <li>
          <a href=\"";
            // line 389
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-red-500 hover:text-red-700 transition-colors duration-200\">
            <i class=\"fas fa-sign-out-alt\"></i> Logout
          </a>
        </li>
      </ul>
    </div>
  </aside>
";
        }
        // line 397
        yield "
";
        // line 399
        if ( !(isset($context["is_auth_page"]) || array_key_exists("is_auth_page", $context) ? $context["is_auth_page"] : (function () { throw new RuntimeError('Variable "is_auth_page" does not exist.', 399, $this->source); })())) {
            // line 400
            yield "  <nav>
    <div class=\"container\">

      ";
            // line 404
            yield "      ";
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 405
                yield "        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <ul class=\"navbar-nav ms-auto\">
            ";
                // line 408
                yield "            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownVehicules\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-car me-1\"></i> Véhicules
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownVehicules\">
                <li><a class=\"dropdown-item\" href=\"#\">Liste des véhicules</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Ajouter un véhicule</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"#\">Types de véhicules</a></li>
              </ul>
            </li>

            ";
                // line 421
                yield "            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTrajet\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-route me-1\"></i> Trajet
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTrajet\">
                <li><a class=\"dropdown-item\" href=\"";
                // line 426
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
                yield "\">Planifier un trajet</a></li>
                <li><a class=\"dropdown-item\" href=\"";
                // line 427
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_list");
                yield "\">Consulter mes trajets</a></li>
              </ul>
            </li>

            ";
                // line 432
                yield "            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownAvis\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-comment-dots me-1\"></i> Avis
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownAvis\">
                <li><a class=\"dropdown-item\" href=\"";
                // line 437
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new_front");
                yield "\">Ajouter avis</a></li>
                <li><a class=\"dropdown-item\" href=\"";
                // line 438
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_front");
                yield "\">Historique avis</a></li>
              </ul>
            </li>

            ";
                // line 443
                yield "            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTaxi\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-taxi me-1\"></i> Taxi
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTaxi\">
                <li><a class=\"dropdown-item\" href=\"";
                // line 448
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_course_new");
                yield "\">Réserver un taxi</a></li>
                <li><a class=\"dropdown-item\" href=\"";
                // line 449
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_courses");
                yield "\">Historique des courses</a></li>
              </ul>
            </li>

            ";
                // line 454
                yield "            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownAbonnement\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-id-card me-1\"></i> Abonnement
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownAbonnement\">
                <li><a class=\"dropdown-item\" href=\"#\">Mes abonnements</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Souscrire un abonnement</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Gérer les paiements</a></li>
              </ul>
            </li>

            ";
                // line 466
                yield "            <li class=\"nav-item ms-lg-3 my-2 my-lg-0\">
              <a class=\"nav-link btn btn-accent rounded-pill px-3\" href=\"";
                // line 467
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\">
                <i class=\"fas fa-sign-out-alt me-1\"></i> Déconnexion
              </a>
            </li>
          </ul>
        </div>
      ";
            } else {
                // line 474
                yield "        ";
                // line 475
                yield "        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <ul class=\"navbar-nav ms-auto\">
            <li class=\"nav-item ms-lg-3 my-2 my-lg-0\">
              <button class=\"nav-link btn btn-accent rounded-pill px-3 d-lg-none\" id=\"toggleSidebar\">
                <i class=\"fas fa-bars me-1\"></i> Menu
              </button>
            </li>
            <li class=\"nav-item ms-lg-3 my-2 my-lg-0\">
              <a class=\"nav-link btn btn-accent rounded-pill px-3\" href=\"";
                // line 483
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\">
                <i class=\"fas fa-sign-out-alt me-1\"></i> Déconnexion
              </a>
            </li>
          </ul>
        </div>
      ";
            }
            // line 490
            yield "    </div>
  </nav>
";
        }
        // line 493
        yield "
";
        // line 495
        yield "<main class=\"main-content\">
  <div class=\"container\">
    ";
        // line 497
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 498
        yield "  </div>
</main>

";
        // line 502
        yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

";
        // line 505
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 506
            yield "  <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/chartjs.min.js"), "html", null, true);
            yield "\"></script>
  <script src=\"";
            // line 507
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
            yield "\"></script>
  <script src=\"";
            // line 508
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js"), "html", null, true);
            yield "\"></script>
";
        }
        // line 510
        yield "
";
        // line 512
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "

";
        // line 514
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 550
        yield "
";
        // line 551
        yield Twig\Extension\CoreExtension::include($this->env, $context, "urbanTalk.html.twig");
        yield "

";
        // line 554
        yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
";
        // line 555
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
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

        yield "UrbanLInk | Solutions de Mobilité";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
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

        // line 41
        yield "    <style>
      :root {
        --primary: #4361ee;
        --secondary: #3f37c9;
        --accent: #4cc9f0;
        --dark: #1a1a2e;
        --light: #f8f9fa;
        --success: #4ade80;
        --warning: #fbbf24;
        --danger: #f87171;
      }

      body {
        background-color: #f5f7fa;
        color: #333;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
      }

      /* Navbar Styles */
      .navbar {
        background: linear-gradient(135deg, var(--dark) 0%, var(--secondary) 100%);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 1rem 0;
        transition: all 0.3s ease;
      }

      .navbar.scrolled {
        padding: 0.5rem 0;
        background: rgba(26, 26, 46, 0.95) !important;
        backdrop-filter: blur(10px);
      }

      .navbar-brand {
        font-weight: 700;
        font-size: 1.8rem;
        background: linear-gradient(to right, var(--accent), #fff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: flex;
        align-items: center;
      }

      .navbar-brand i {
        margin-right: 10px;
        font-size: 1.5rem;
        color: var(--accent);
      }

      .nav-item {
        margin: 0 0.5rem;
      }

      .nav-link:not(.dropdown-toggle) {
        color: #fff !important;
        font-weight: 500;
        padding: 0.5rem 1rem !important;
        position: relative;
      }

      .nav-link.dropdown-toggle {
        color: #fff !important;
        font-weight: 500;
        padding: 0.5rem 1rem !important;
        position: relative;
      }

      .nav-link::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: var(--accent);
        transition: width 0.3s ease;
      }

      .nav-link:hover::before {
        width: 100%;
      }

      /* Dropdown Styles */
      .dropdown-menu {
        background-color: var(--dark);
        border: none;
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
      }

      .dropdown-item {
        color: rgba(255, 255, 255, 0.8);
        transition: all 0.2s ease;
      }

      .dropdown-item:hover,
      .dropdown-item:focus {
        color: #fff;
        background-color: var(--secondary);
      }

      /* Main Content */
      .main-content {
        flex: 1;
        padding-top: 80px;
        padding-bottom: 2rem;
      }

      /* Sidebar (Admin) */
      .argon-sidebar {
        display: block;
        width: 280px;
        background: white;
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        transition: all 0.3s ease;
        overflow-y: auto;
      }

      .sidebar-content {
        padding: 1rem;
      }

      .sidebar-logo {
        display: flex;
        align-items: center;
        padding: 1.5rem 1rem;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      }

      .sidebar-logo img {
        width: 40px;
        margin-right: 10px;
      }

      .sidebar-logo span {
        font-weight: 600;
        font-size: 1.2rem;
        color: var(--dark);
      }

      .sidebar-menu {
        list-style: none;
        padding: 0;
        margin: 1rem 0;
      }

      .sidebar-menu li {
        margin-bottom: 0.5rem;
      }

      .sidebar-menu a {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        color: #555;
        border-radius: 5px;
        transition: all 0.2s ease;
        text-decoration: none;
      }

      .sidebar-menu a:hover,
      .sidebar-menu a.active {
        background-color: rgba(67, 97, 238, 0.1);
        color: var(--primary);
      }

      .sidebar-menu a i {
        margin-right: 10px;
        font-size: 1.1rem;
      }

      .sidebar-divider {
        height: 1px;
        background: rgba(0, 0, 0, 0.1);
        margin: 1rem 0;
      }

      .sidebar-heading {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #999;
        padding: 0 1rem;
        margin: 1.5rem 0 0.5rem;
      }

      /* Admin Content Margin */
      .has-sidebar .main-content {
        margin-left: 280px;
        width: calc(100% - 280px);
      }

      /* Responsive */
      @media (max-width: 992px) {
        .navbar-collapse {
          background: rgba(26, 26, 46, 0.98);
          padding: 1rem;
          border-radius: 0.5rem;
          margin-top: 0.5rem;
        }

        .argon-sidebar {
          transform: translateX(-100%);
          width: 260px;
        }

        .argon-sidebar.show {
          transform: translateX(0);
        }

        .has-sidebar .main-content {
          margin-left: 0;
          width: 100%;
        }
      }
    </style>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 497
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

    // line 514
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

        // line 515
        yield "  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Sidebar toggle for mobile
    document.addEventListener('DOMContentLoaded', function() {
      const toggleButton = document.getElementById('toggleSidebar');
      if (toggleButton) {
        toggleButton.addEventListener('click', function() {
          const sidebar = document.querySelector('.argon-sidebar');
          sidebar.classList.toggle('show');
        });
      }

      // Close sidebar when clicking outside on mobile
      document.addEventListener('click', function(event) {
        const sidebar = document.querySelector('.argon-sidebar');
        const toggleButton = document.getElementById('toggleSidebar');

        if (sidebar && sidebar.classList.contains('show') &&
                !sidebar.contains(event.target) &&
                toggleButton && !toggleButton.contains(event.target)) {
          sidebar.classList.remove('show');
        }
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
        return array (  870 => 515,  857 => 514,  835 => 497,  601 => 41,  588 => 40,  565 => 17,  550 => 555,  547 => 554,  542 => 551,  539 => 550,  537 => 514,  532 => 512,  529 => 510,  524 => 508,  520 => 507,  515 => 506,  513 => 505,  509 => 502,  504 => 498,  502 => 497,  498 => 495,  495 => 493,  490 => 490,  480 => 483,  470 => 475,  468 => 474,  458 => 467,  455 => 466,  442 => 454,  435 => 449,  431 => 448,  424 => 443,  417 => 438,  413 => 437,  406 => 432,  399 => 427,  395 => 426,  388 => 421,  374 => 408,  370 => 405,  367 => 404,  362 => 400,  360 => 399,  357 => 397,  346 => 389,  336 => 384,  322 => 375,  312 => 370,  302 => 365,  292 => 360,  282 => 355,  270 => 346,  257 => 338,  247 => 333,  237 => 328,  228 => 324,  217 => 318,  201 => 307,  190 => 301,  179 => 295,  168 => 289,  154 => 280,  145 => 274,  141 => 272,  139 => 271,  136 => 269,  134 => 268,  128 => 266,  125 => 265,  122 => 40,  116 => 37,  110 => 34,  105 => 31,  100 => 30,  89 => 20,  84 => 17,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  60 => 9,  52 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/base.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  {# Favicons #}
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('assets/img/apple-touch-icon.png') }}\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('assets/img/favicon-32x32.png') }}\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('assets/img/favicon-16x16.png') }}\">
  <link rel=\"manifest\" href=\"{{ asset('assets/site.webmanifest') }}\">
  <link rel=\"mask-icon\" href=\"{{ asset('assets/img/safari-pinned-tab.svg') }}\" color=\"#5bbad5\">
  <meta name=\"msapplication-TileColor\" content=\"#da532c\">
  <meta name=\"theme-color\" content=\"#ffffff\">

  <title>{% block title %}UrbanLInk | Solutions de Mobilité{% endblock %}</title>

  {# CSS via CDN #}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
  <link href=\"https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">

  {# Nucleo Icons (from admin template) #}
  <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />

  {# Main Styling #}
  <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />

  {# Webpack Encore entry #}
  {{ encore_entry_link_tags('app') }}

  {# Base styles #}
  {% block stylesheets %}
    <style>
      :root {
        --primary: #4361ee;
        --secondary: #3f37c9;
        --accent: #4cc9f0;
        --dark: #1a1a2e;
        --light: #f8f9fa;
        --success: #4ade80;
        --warning: #fbbf24;
        --danger: #f87171;
      }

      body {
        background-color: #f5f7fa;
        color: #333;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
      }

      /* Navbar Styles */
      .navbar {
        background: linear-gradient(135deg, var(--dark) 0%, var(--secondary) 100%);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 1rem 0;
        transition: all 0.3s ease;
      }

      .navbar.scrolled {
        padding: 0.5rem 0;
        background: rgba(26, 26, 46, 0.95) !important;
        backdrop-filter: blur(10px);
      }

      .navbar-brand {
        font-weight: 700;
        font-size: 1.8rem;
        background: linear-gradient(to right, var(--accent), #fff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: flex;
        align-items: center;
      }

      .navbar-brand i {
        margin-right: 10px;
        font-size: 1.5rem;
        color: var(--accent);
      }

      .nav-item {
        margin: 0 0.5rem;
      }

      .nav-link:not(.dropdown-toggle) {
        color: #fff !important;
        font-weight: 500;
        padding: 0.5rem 1rem !important;
        position: relative;
      }

      .nav-link.dropdown-toggle {
        color: #fff !important;
        font-weight: 500;
        padding: 0.5rem 1rem !important;
        position: relative;
      }

      .nav-link::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: var(--accent);
        transition: width 0.3s ease;
      }

      .nav-link:hover::before {
        width: 100%;
      }

      /* Dropdown Styles */
      .dropdown-menu {
        background-color: var(--dark);
        border: none;
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
      }

      .dropdown-item {
        color: rgba(255, 255, 255, 0.8);
        transition: all 0.2s ease;
      }

      .dropdown-item:hover,
      .dropdown-item:focus {
        color: #fff;
        background-color: var(--secondary);
      }

      /* Main Content */
      .main-content {
        flex: 1;
        padding-top: 80px;
        padding-bottom: 2rem;
      }

      /* Sidebar (Admin) */
      .argon-sidebar {
        display: block;
        width: 280px;
        background: white;
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        transition: all 0.3s ease;
        overflow-y: auto;
      }

      .sidebar-content {
        padding: 1rem;
      }

      .sidebar-logo {
        display: flex;
        align-items: center;
        padding: 1.5rem 1rem;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      }

      .sidebar-logo img {
        width: 40px;
        margin-right: 10px;
      }

      .sidebar-logo span {
        font-weight: 600;
        font-size: 1.2rem;
        color: var(--dark);
      }

      .sidebar-menu {
        list-style: none;
        padding: 0;
        margin: 1rem 0;
      }

      .sidebar-menu li {
        margin-bottom: 0.5rem;
      }

      .sidebar-menu a {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        color: #555;
        border-radius: 5px;
        transition: all 0.2s ease;
        text-decoration: none;
      }

      .sidebar-menu a:hover,
      .sidebar-menu a.active {
        background-color: rgba(67, 97, 238, 0.1);
        color: var(--primary);
      }

      .sidebar-menu a i {
        margin-right: 10px;
        font-size: 1.1rem;
      }

      .sidebar-divider {
        height: 1px;
        background: rgba(0, 0, 0, 0.1);
        margin: 1rem 0;
      }

      .sidebar-heading {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #999;
        padding: 0 1rem;
        margin: 1.5rem 0 0.5rem;
      }

      /* Admin Content Margin */
      .has-sidebar .main-content {
        margin-left: 280px;
        width: calc(100% - 280px);
      }

      /* Responsive */
      @media (max-width: 992px) {
        .navbar-collapse {
          background: rgba(26, 26, 46, 0.98);
          padding: 1rem;
          border-radius: 0.5rem;
          margin-top: 0.5rem;
        }

        .argon-sidebar {
          transform: translateX(-100%);
          width: 260px;
        }

        .argon-sidebar.show {
          transform: translateX(0);
        }

        .has-sidebar .main-content {
          margin-left: 0;
          width: 100%;
        }
      }
    </style>
  {% endblock %}
</head>
<body class=\"{% if is_granted('ROLE_ADMIN') %}has-sidebar{% endif %}\">
{# Check if we're on an auth page or home page #}
{% set is_auth_page = app.request.attributes.get('_route') in ['app_login', 'app_register', 'app_home'] %}

{# Admin Sidebar (only shown for admin users) #}
{% if is_granted('ROLE_ADMIN') and not is_auth_page %}
  <aside class=\"argon-sidebar\">
    <div class=\"sidebar-logo\" style=\"display: flex; align-items: center; padding: 20px 15px; border-bottom: 1px solid rgba(255,255,255,0.1);\">
      <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"UrbanLink Logo\" style=\"width: 50px; height: auto; margin-right: 15px;\">
      <span style=\"font-size: 18px; font-weight: 600; color: black;\">Admin Panel</span>
    </div>
    <div class=\"sidebar-content\">
      <ul class=\"sidebar-menu\">
        <li>
          <a href=\"{{ path('app_dashboard') }}\" class=\"{{ app.request.get('_route') == 'app_dashboard' ? 'active' : '' }}\">
            <i class=\"fas fa-tachometer-alt\"></i> Dashboard
          </a>
        </li>

        <div class=\"sidebar-divider\"></div>
        <div class=\"sidebar-heading\">Gestion du Transport</div>

        <li>
          <a href=\"{{ path('vehicle_index') }}\" class=\"{{ app.request.get('_route') starts with 'vehicule_' ? 'active' : '' }}\">
            <i class=\"fas fa-car\"></i> Vehicles
          </a>
        </li>

        <li>
          <a href=\"{{ path('admin_maintenances_index') }}\" class=\"{{ app.request.get('_route') starts with 'maintenance_' ? 'active' : '' }}\">
            <i class=\"fa-solid fa-screwdriver-wrench\"></i> Maintenance
          </a>
        </li>

        <li>
          <a href=\"{{ path('trajet_affichage') }}\" class=\"{{ app.request.get('_route') starts with 'trajet_' ? 'active' : '' }}\">
            <i class=\"fas fa-route\"></i> Tracks
          </a>
        </li>

        <li>
          <a href=\"{{ path('admin_reservations') }}\" class=\"{{ app.request.get('_route') starts with 'booking_' ? 'active' : '' }}\">
            <i class=\"fa-solid fa-bookmark\"></i> Booking
          </a>
        </li>
        
        <!-- Account Section -->
        <li class=\"w-full\">
          <hr class=\"h-px mt-2 mb-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />
          <h6 class=\"pl-6 text-xs font-bold uppercase text-slate-500 dark:text-white/60\">Account pages</h6>
        </li>
        <li>
          <a href=\"{{ path('app_avis_index') }}\" class=\"{{ app.request.get('_route') starts with 'app_avis_' ? 'active' : '' }}\">
            <i class=\"fas fa-comment-dots\"></i> Complaints
          </a>
        </li>

        <li>
          <a href=\"{{ path('taxi_index') }}\" class=\"{{ app.request.get('_route') starts with 'taxi_' ? 'active' : '' }}\">
            <i class=\"fas fa-taxi\"></i> Taxis
          </a>
        </li>
          <a href=\"{{ path('course_index') }}\" class=\"{{ app.request.get('_route') starts with 'course_' ? 'active' : '' }}\">
            <i class=\"fas fa-bus\"></i> Courses
          </a>
        </li>
        <li>
          <a href=\"{{ path('abonnement_list') }}\" class=\"{{ app.request.get('_route') starts with 'abonnement_' ? 'active' : '' }}\">
            <i class=\"fas fa-id-card\"></i> Subscriptions
          </a>
        </li>
        <li>
          <a href=\"{{ path('app_admin_reservations') }}\" class=\"{{ app.request.get('_route') starts with 'abonnement_' ? 'active' : '' }}\">
            <i class=\"fas fa-id-card\"></i> Subscriptions List
          </a>
        </li>

        <li class=\"nav-item\">
          <a href=\"#\"
             id=\"urbanTalkTrigger\"
             class=\"nav-link {{ app.request.get('_route') starts with 'urbantalk_' ? 'active' : '' }}\">
            <i class=\"fas fa-robot mr-2\"></i> UrbanTalk
          </a>
        </li>

        <div class=\"sidebar-divider\"></div>
        <div class=\"sidebar-heading\">Administration</div>

        <li>
          <a href=\"{{ path('admin_user_manage') }}\" class=\"{{ app.request.get('_route') starts with 'admin_user_' ? 'active' : '' }}\">
            <i class=\"fas fa-users\"></i> Users
          </a>
        </li>
        <li>
          <a href=\"{{ path('admin_user_delete') }}\" class=\"{{ app.request.get('_route') == 'admin_user_delete' ? 'active' : '' }}\">
            <i class=\"fas fa-user-minus\"></i> Update Profiles
          </a>
        </li>
        <li>
          <a href=\"{{ path('course_stats') }}\" class=\"{{ app.request.get('_route') starts with 'course_' ? 'active' : '' }}\">
            <i class=\"fas fa-chart-line\"></i> Statistiques courses et taxis
          </a>
        </li>
        <li>
          <a href=\"{{ path('course_map') }}\" class=\"{{ app.request.get('_route') == 'course_map' ? 'active' : '' }}\">
            <i class=\"fas fa-map\"></i> Carte des courses
          </a>
        </li>
        <li>
          <a href=\"{{ path('admin_statistics') }}\" class=\"{{ app.request.get('_route') == 'admin_statistics' ? 'active' : '' }}\">
            <i class=\"fas fa-chart-bar\"></i> Statistiques users
          </a>
        </li>


        <div class=\"sidebar-divider\"></div>

        <li>
          <a href=\"{{ path('app_profile_edit') }}\" class=\"{{ app.request.get('_route') == 'app_profile_edit' ? 'active' : '' }}\">
            <i class=\"fas fa-user-edit\"></i> My profile
          </a>
        </li>
        <li>
          <a href=\"{{ path('app_logout') }}\" class=\"text-red-500 hover:text-red-700 transition-colors duration-200\">
            <i class=\"fas fa-sign-out-alt\"></i> Logout
          </a>
        </li>
      </ul>
    </div>
  </aside>
{% endif %}

{# Header with Navbar (shown on all pages except login/register) #}
{% if not is_auth_page %}
  <nav>
    <div class=\"container\">

      {# Regular user navigation - only show if not admin #}
      {% if not is_granted('ROLE_ADMIN') %}
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <ul class=\"navbar-nav ms-auto\">
            {# Dropdown Véhicules #}
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownVehicules\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-car me-1\"></i> Véhicules
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownVehicules\">
                <li><a class=\"dropdown-item\" href=\"#\">Liste des véhicules</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Ajouter un véhicule</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"#\">Types de véhicules</a></li>
              </ul>
            </li>

            {# Dropdown Trajet #}
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTrajet\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-route me-1\"></i> Trajet
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTrajet\">
                <li><a class=\"dropdown-item\" href=\"{{ path('reservation_affichage')}}\">Planifier un trajet</a></li>
                <li><a class=\"dropdown-item\" href=\"{{ path('reservation_list')}}\">Consulter mes trajets</a></li>
              </ul>
            </li>

            {# Dropdown Avis #}
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownAvis\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-comment-dots me-1\"></i> Avis
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownAvis\">
                <li><a class=\"dropdown-item\" href=\"{{ path('app_avis_new_front') }}\">Ajouter avis</a></li>
                <li><a class=\"dropdown-item\" href=\"{{ path('app_avis_front') }}\">Historique avis</a></li>
              </ul>
            </li>

            {# Dropdown Taxi #}
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTaxi\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-taxi me-1\"></i> Taxi
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTaxi\">
                <li><a class=\"dropdown-item\" href=\"{{ path('user_course_new') }}\">Réserver un taxi</a></li>
                <li><a class=\"dropdown-item\" href=\"{{ path('user_courses') }}\">Historique des courses</a></li>
              </ul>
            </li>

            {# Dropdown Abonnement #}
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownAbonnement\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-id-card me-1\"></i> Abonnement
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownAbonnement\">
                <li><a class=\"dropdown-item\" href=\"#\">Mes abonnements</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Souscrire un abonnement</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Gérer les paiements</a></li>
              </ul>
            </li>

            {# Logout Button #}
            <li class=\"nav-item ms-lg-3 my-2 my-lg-0\">
              <a class=\"nav-link btn btn-accent rounded-pill px-3\" href=\"{{ path('app_logout') }}\">
                <i class=\"fas fa-sign-out-alt me-1\"></i> Déconnexion
              </a>
            </li>
          </ul>
        </div>
      {% else %}
        {# For admin users, minimal navigation with just logout #}
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <ul class=\"navbar-nav ms-auto\">
            <li class=\"nav-item ms-lg-3 my-2 my-lg-0\">
              <button class=\"nav-link btn btn-accent rounded-pill px-3 d-lg-none\" id=\"toggleSidebar\">
                <i class=\"fas fa-bars me-1\"></i> Menu
              </button>
            </li>
            <li class=\"nav-item ms-lg-3 my-2 my-lg-0\">
              <a class=\"nav-link btn btn-accent rounded-pill px-3\" href=\"{{ path('app_logout') }}\">
                <i class=\"fas fa-sign-out-alt me-1\"></i> Déconnexion
              </a>
            </li>
          </ul>
        </div>
      {% endif %}
    </div>
  </nav>
{% endif %}

{# Main Content Area #}
<main class=\"main-content\">
  <div class=\"container\">
    {% block body %}{% endblock %}
  </div>
</main>

{# JavaScripts #}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

{# Admin dashboard scripts #}
{% if is_granted('ROLE_ADMIN') %}
  <script src=\"{{ asset('assets/js/plugins/chartjs.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/argon-dashboard-tailwind.js') }}\"></script>
{% endif %}

{# Webpack Encore entry #}
{{ encore_entry_script_tags('app') }}

{% block javascripts %}
  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Sidebar toggle for mobile
    document.addEventListener('DOMContentLoaded', function() {
      const toggleButton = document.getElementById('toggleSidebar');
      if (toggleButton) {
        toggleButton.addEventListener('click', function() {
          const sidebar = document.querySelector('.argon-sidebar');
          sidebar.classList.toggle('show');
        });
      }

      // Close sidebar when clicking outside on mobile
      document.addEventListener('click', function(event) {
        const sidebar = document.querySelector('.argon-sidebar');
        const toggleButton = document.getElementById('toggleSidebar');

        if (sidebar && sidebar.classList.contains('show') &&
                !sidebar.contains(event.target) &&
                toggleButton && !toggleButton.contains(event.target)) {
          sidebar.classList.remove('show');
        }
      });
    });
  </script>
{% endblock %}

{{ include('urbanTalk.html.twig') }}

{# Existing scripts #}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
{{ encore_entry_script_tags('app') }}

</body>
</html>", "base.html.twig", "C:\\Users\\skonb\\Desktop\\bch ytrigl\\UrbanLink_Symfony-main\\templates\\base.html.twig");
    }
}
