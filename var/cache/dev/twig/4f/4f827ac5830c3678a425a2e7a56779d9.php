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

/* basef.html.twig */
class __TwigTemplate_e38843b6ab9908a35439891d6d5b9360 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basef.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basef.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 9
        yield "    ";
        // line 10
        yield "    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-32x32.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-16x16.png"), "html", null, true);
        yield "\">
    <link rel=\"manifest\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/site.webmanifest"), "html", null, true);
        yield "\">
    <link rel=\"mask-icon\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/safari-pinned-tab.svg"), "html", null, true);
        yield "\" color=\"#5bbad5\">
    <meta name=\"msapplication-TileColor\" content=\"#da532c\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <title>";
        // line 18
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    ";
        // line 21
        yield "    ";
        // line 22
        yield "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 24
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    ";
        // line 26
        yield "    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    ";
        // line 29
        yield "    ";
        // line 30
        yield "    ";
        // line 31
        yield "    <link href=\"https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">


    ";
        // line 35
        yield "    ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 250
        yield "</head>
<body>
    ";
        // line 253
        yield "    ";
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 340
        yield "
    ";
        // line 342
        yield "    <main class=\"main-content\">
        <div class=\"container\">
             ";
        // line 345
        yield "             ";
        // line 346
        yield "             ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 347
        yield "        </div>
    </main>

    ";
        // line 351
        yield "    ";
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 415
        yield "
    ";
        // line 417
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 434
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
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

    // line 35
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

        // line 36
        yield "        <style>
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

            /* Le reset de base de Tailwind est inclus, mais certaines règles Bootstrap pourraient le remplacer. */
            /* * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; } */

            body {
                background-color: #f5f7fa;
                color: #333; /* La couleur du texte peut être écrasée par les classes Tailwind */
                overflow-x: hidden;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            /* Navbar Styles - Ces styles spécifiques pour la navbar et le footer sont conservés */
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

             /* Styles pour les liens de navigation (pas les dropdown toggles) */
            .nav-link:not(.dropdown-toggle) {
                 color: #fff !important;
                 font-weight: 500;
                 padding: 0.5rem 1rem !important;
                 position: relative;
             }

             /* Styles pour les toggles de dropdown */
             .nav-link.dropdown-toggle {
                 color: #fff !important;
                 font-weight: 500;
                 padding: 0.5rem 1rem !important;
                 position: relative;
                 /* Supprime la flèche par défaut de Bootstrap si vous préférez */
                 /* &::after { display: none; } */
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

            /* Styles spécifiques pour les dropdowns */
            .dropdown-menu {
                background-color: var(--dark); /* Fond du menu dropdown */
                border: none;
                box-shadow: 0 5px 10px rgba(0,0,0,0.2);
            }

            .dropdown-item {
                color: rgba(255, 255, 255, 0.8); /* Couleur du texte des items */
                transition: all 0.2s ease;
            }

            .dropdown-item:hover,
            .dropdown-item:focus {
                 color: #fff;
                 background-color: var(--secondary); /* Fond au survol */
            }


            /* Main Content Padding (adjust based on fixed navbar height) */
            .main-content {
                flex: 1;
                /* Ajustez cette valeur pour qu'elle corresponde à la hauteur de votre navbar + un peu d'espace */
                padding-top: 80px; /* Estimation, ajustez si nécessaire */
                padding-bottom: 2rem;
            }

            /* Footer Styles - Ces styles spécifiques pour la navbar et le footer sont conservés */
            .footer {
                background: linear-gradient(135deg, var(--dark) 0%, var(--secondary) 100%);
                color: #fff;
                padding: 3rem 0 1rem;
                position: relative;
                margin-top: auto;
            }

            .footer::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 10px;
                background: linear-gradient(to right, var(--accent), var(--primary));
            }

            .footer h5 {
                font-weight: 600;
                margin-bottom: 1.5rem;
                position: relative;
                display: inline-block;
            }

            .footer h5::after {
                content: '';
                position: absolute;
                bottom: -8px;
                left: 0;
                width: 50px;
                height: 3px;
                background: var(--accent);
            }

            .footer a {
                color: rgba(255, 255, 255, 0.7);
                transition: all 0.3s ease;
                text-decoration: none; /* Tailwind par défaut supprime les underscores, mais Bootstrap les ajoute */
            }

            .footer a:hover {
                color: #fff;
                 /* Retire la transformation pour éviter un mouvement inattendu */
                 /* transform: translateX(5px); */
            }

            .footer-links li {
                margin-bottom: 0.8rem;
                display: flex; /* Peut interagir avec les display utilities de Tailwind */
                align-items: center;
            }

            .footer-links i {
                margin-right: 10px;
                color: var(--accent);
                font-size: 0.8rem;
            }

            .social-icons a {
                display: inline-flex; /* Peut interagir avec les display utilities de Tailwind */
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                margin-right: 10px;
                transition: all 0.3s ease;
            }

            .social-icons a:hover {
                background: var(--accent);
            }

            .copyright {
                border-top: 1px solid rgba(255, 255, 255, 0.1); /* Peut interagir avec les border utilities de Tailwind */
                padding-top: 1.5rem; /* Peut interagir avec les padding utilities de Tailwind */
                margin-top: 2rem; /* Peut interagir avec les margin utilities de Tailwind */
                font-size: 0.9rem; /* Peut interagir avec les font-size utilities de Tailwind */
                color: rgba(255, 255, 255, 0.6); /* Peut interagir avec les color utilities de Tailwind */
            }

            /* Responsive - Ces règles spécifiques sont conservées */
            @media (max-width: 992px) {
                .navbar-collapse {
                    background: rgba(26, 26, 46, 0.98);
                    padding: 1rem;
                    border-radius: 0.5rem;
                    margin-top: 0.5rem;
                }
            }
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 254
        yield "    <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\">
        <div class=\"container\">
            ";
        // line 257
        yield "            <a class=\"navbar-brand\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                <i class=\"fas fa-bus\"></i> UrbanLInk
            </a>
            ";
        // line 261
        yield "            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            ";
        // line 266
        yield "            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">

                    ";
        // line 270
        yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownVehicules\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-car me-1\"></i> Véhicules
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownVehicules\">
                            ";
        // line 276
        yield "                            <li><a class=\"dropdown-item\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_vehicle");
        yield "\">Liste des véhicules</a></li>
                          
                        </ul>
                    </li>

                    ";
        // line 282
        yield "                     <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTrajet\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-route me-1\"></i> Trajet
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTrajet\">
                             ";
        // line 288
        yield "                            <li><a class=\"dropdown-item\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
        yield "\">Planifier un trajet</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 289
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_list");
        yield "\">Consulter mes trajets</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTaxi\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-comment-dots me-1\"></i> Avis
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTaxi\">
                            ";
        // line 299
        yield "                            <li><a class=\"dropdown-item\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new_front");
        yield "\">Ajouter avis</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 300
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_front");
        yield "\">Historique avis</a></li>
                        </ul>
                    </li>
                    ";
        // line 304
        yield "                     <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTaxi\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-taxi me-1\"></i> Taxi
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTaxi\">
                             ";
        // line 310
        yield "                            <li><a class=\"dropdown-item\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_course_new");
        yield "\">Réserver un taxi</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 311
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_courses");
        yield "\">Historique des courses</a></li>
                        </ul>
                    </li>

                    ";
        // line 316
        yield "                     <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownAbonnement\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-id-card me-1\"></i> Abonnement
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownAbonnement\">
                             ";
        // line 322
        yield "                            <li><a class=\"dropdown-item\" href=\"#\">Mes abonnements</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Souscrire un abonnement</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Gérer les paiements</a></li>
                        </ul>
                    </li>

                    ";
        // line 329
        yield "                    <li class=\"nav-item ms-lg-3 my-2 my-lg-0\">
                        <a class=\"nav-link btn btn-accent rounded-pill px-3\" href=\"";
        // line 330
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                            <i class=\"fas fa-sign-out-alt me-1\"></i> Déconnexion
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 346
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

    // line 351
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

        // line 352
        yield "    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row g-4\">
                ";
        // line 356
        yield "                <div class=\"col-lg-4 col-md-6\">
                    <h5><i class=\"fas fa-bus me-2\"></i> UrbanLInk </h5>
                    <p class=\"mt-3\">Votre solution de mobilité urbaine complète. Nous connectons les gens à leurs destinations de manière sûre, efficace et confortable.</p>
                    <div class=\"mt-4\">
                        ";
        // line 361
        yield "                        <a href=\"#\" class=\"btn btn-outline-light btn-sm rounded-pill me-2\"><i class=\"fas fa-download me-1\"></i> Télécharger l'App</a>
                    </div>
                </div>
                ";
        // line 365
        yield "                <div class=\"col-lg-2 col-md-6\">
                    <h5>Liens rapides</h5>
                    <ul class=\"footer-links list-unstyled\">
                        ";
        // line 369
        yield "                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Accueil</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Services</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Tarifs</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> À propos</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Contact</a></li>
                    </ul>
                </div>
                ";
        // line 377
        yield "                <div class=\"col-lg-3 col-md-6\">
                    <h5>Services</h5>
                    <ul class=\"footer-links list-unstyled\">
                        ";
        // line 381
        yield "                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Transport urbain</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Services de taxi</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Abonnements</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Transport scolaire</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Locations de véhicules</a></li>
                    </ul>
                </div>
                ";
        // line 389
        yield "                <div class=\"col-lg-3 col-md-6\">
                    <h5>Contactez-nous</h5>
                    <ul class=\"footer-links list-unstyled\">
                        ";
        // line 393
        yield "                        <li><i class=\"fas fa-map-marker-alt me-2\"></i> 123 Rue Principale, Ville</li>
                        <li><i class=\"fas fa-phone-alt me-2\"></i> +123 456 7890</li>
                        <li><i class=\"fas fa-envelope me-2\"></i> contact UrbanLInk.com</li>
                    </ul>
                    <div class=\"social-icons mt-3\">
                         ";
        // line 399
        yield "                        <a href=\"#\" class=\"me-2\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a href=\"#\" class=\"me-2\"><i class=\"fab fa-twitter\"></i></a>
                        <a href=\"#\" class=\"me-2\"><i class=\"fab fa-instagram\"></i></a>
                        <a href=\"#\" class=\"me-2\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                    </div>
                </div>
            </div>
            ";
        // line 408
        yield "            <div class=\"copyright text-center\">
                ";
        // line 410
        yield "                <p class=\"mb-0\">&copy; ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " UrbanLInk. Tous droits réservés. | <a href=\"#\">Politique de confidentialité</a> | <a href=\"#\">Conditions d'utilisation</a></p>
            </div>
        </div>
    </footer>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 417
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

        // line 418
        yield "        ";
        // line 419
        yield "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        ";
        // line 421
        yield "        <script>
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        </script>
        ";
        // line 432
        yield "        ";
        // line 433
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "basef.html.twig";
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
        return array (  719 => 433,  717 => 432,  705 => 421,  702 => 419,  700 => 418,  687 => 417,  670 => 410,  667 => 408,  657 => 399,  650 => 393,  645 => 389,  636 => 381,  631 => 377,  622 => 369,  617 => 365,  612 => 361,  606 => 356,  601 => 352,  588 => 351,  566 => 346,  545 => 330,  542 => 329,  534 => 322,  527 => 316,  520 => 311,  515 => 310,  508 => 304,  502 => 300,  497 => 299,  485 => 289,  480 => 288,  473 => 282,  464 => 276,  457 => 270,  452 => 266,  446 => 261,  439 => 257,  435 => 254,  422 => 253,  198 => 36,  185 => 35,  162 => 18,  150 => 434,  147 => 417,  144 => 415,  141 => 351,  136 => 347,  133 => 346,  131 => 345,  127 => 342,  124 => 340,  121 => 253,  117 => 250,  114 => 35,  109 => 31,  107 => 30,  105 => 29,  101 => 26,  98 => 24,  95 => 22,  93 => 21,  88 => 18,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  64 => 10,  62 => 9,  54 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/base/front.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    {# Favicons - Utilise asset() pour les fichiers locaux standard #}
    {# Assurez-vous que ces fichiers existent dans public/assets/img/ #}
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('assets/img/apple-touch-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('assets/img/favicon-32x32.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('assets/img/favicon-16x16.png') }}\">
    <link rel=\"manifest\" href=\"{{ asset('assets/site.webmanifest') }}\">
    <link rel=\"mask-icon\" href=\"{{ asset('assets/img/safari-pinned-tab.svg') }}\" color=\"#5bbad5\">
    <meta name=\"msapplication-TileColor\" content=\"#da532c\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <title>{% block title %}UrbanLInk | Solutions de Mobilité{% endblock %}</title>

    {# CSS via CDN #}
    {# Bootstrap 5 pour la structure de base, Navbar et Footer #}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    {# Font Awesome pour les icônes #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    {# Google Fonts pour la police Poppins #}
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    {# AJOUT DU CDN DE TAILWIND CSS V2 #}
    {# Attention: L'utilisation simultanée de Bootstrap et Tailwind peut causer des conflits de styles. #}
    {# Il peut être nécessaire d'ajouter des préfixes Tailwind ou d'utiliser d'autres stratégies avancées si des problèmes surviennent. #}
    <link href=\"https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">


    {# Stylesheets spécifiques (incluant votre CSS personnalisé pour Navbar/Footer et body de base) #}
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

            /* Le reset de base de Tailwind est inclus, mais certaines règles Bootstrap pourraient le remplacer. */
            /* * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; } */

            body {
                background-color: #f5f7fa;
                color: #333; /* La couleur du texte peut être écrasée par les classes Tailwind */
                overflow-x: hidden;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            /* Navbar Styles - Ces styles spécifiques pour la navbar et le footer sont conservés */
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

             /* Styles pour les liens de navigation (pas les dropdown toggles) */
            .nav-link:not(.dropdown-toggle) {
                 color: #fff !important;
                 font-weight: 500;
                 padding: 0.5rem 1rem !important;
                 position: relative;
             }

             /* Styles pour les toggles de dropdown */
             .nav-link.dropdown-toggle {
                 color: #fff !important;
                 font-weight: 500;
                 padding: 0.5rem 1rem !important;
                 position: relative;
                 /* Supprime la flèche par défaut de Bootstrap si vous préférez */
                 /* &::after { display: none; } */
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

            /* Styles spécifiques pour les dropdowns */
            .dropdown-menu {
                background-color: var(--dark); /* Fond du menu dropdown */
                border: none;
                box-shadow: 0 5px 10px rgba(0,0,0,0.2);
            }

            .dropdown-item {
                color: rgba(255, 255, 255, 0.8); /* Couleur du texte des items */
                transition: all 0.2s ease;
            }

            .dropdown-item:hover,
            .dropdown-item:focus {
                 color: #fff;
                 background-color: var(--secondary); /* Fond au survol */
            }


            /* Main Content Padding (adjust based on fixed navbar height) */
            .main-content {
                flex: 1;
                /* Ajustez cette valeur pour qu'elle corresponde à la hauteur de votre navbar + un peu d'espace */
                padding-top: 80px; /* Estimation, ajustez si nécessaire */
                padding-bottom: 2rem;
            }

            /* Footer Styles - Ces styles spécifiques pour la navbar et le footer sont conservés */
            .footer {
                background: linear-gradient(135deg, var(--dark) 0%, var(--secondary) 100%);
                color: #fff;
                padding: 3rem 0 1rem;
                position: relative;
                margin-top: auto;
            }

            .footer::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 10px;
                background: linear-gradient(to right, var(--accent), var(--primary));
            }

            .footer h5 {
                font-weight: 600;
                margin-bottom: 1.5rem;
                position: relative;
                display: inline-block;
            }

            .footer h5::after {
                content: '';
                position: absolute;
                bottom: -8px;
                left: 0;
                width: 50px;
                height: 3px;
                background: var(--accent);
            }

            .footer a {
                color: rgba(255, 255, 255, 0.7);
                transition: all 0.3s ease;
                text-decoration: none; /* Tailwind par défaut supprime les underscores, mais Bootstrap les ajoute */
            }

            .footer a:hover {
                color: #fff;
                 /* Retire la transformation pour éviter un mouvement inattendu */
                 /* transform: translateX(5px); */
            }

            .footer-links li {
                margin-bottom: 0.8rem;
                display: flex; /* Peut interagir avec les display utilities de Tailwind */
                align-items: center;
            }

            .footer-links i {
                margin-right: 10px;
                color: var(--accent);
                font-size: 0.8rem;
            }

            .social-icons a {
                display: inline-flex; /* Peut interagir avec les display utilities de Tailwind */
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                margin-right: 10px;
                transition: all 0.3s ease;
            }

            .social-icons a:hover {
                background: var(--accent);
            }

            .copyright {
                border-top: 1px solid rgba(255, 255, 255, 0.1); /* Peut interagir avec les border utilities de Tailwind */
                padding-top: 1.5rem; /* Peut interagir avec les padding utilities de Tailwind */
                margin-top: 2rem; /* Peut interagir avec les margin utilities de Tailwind */
                font-size: 0.9rem; /* Peut interagir avec les font-size utilities de Tailwind */
                color: rgba(255, 255, 255, 0.6); /* Peut interagir avec les color utilities de Tailwind */
            }

            /* Responsive - Ces règles spécifiques sont conservées */
            @media (max-width: 992px) {
                .navbar-collapse {
                    background: rgba(26, 26, 46, 0.98);
                    padding: 1rem;
                    border-radius: 0.5rem;
                    margin-top: 0.5rem;
                }
            }
        </style>
    {% endblock %}
</head>
<body>
    {# Header avec Navbar Bootstrap (Modifié pour les dropdowns) #}
    {% block header %}
    <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\">
        <div class=\"container\">
            {# Logo/Brand - Utilise path() pour la page d'accueil #}
            <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
                <i class=\"fas fa-bus\"></i> UrbanLInk
            </a>
            {# Bouton Burger pour Mobile #}
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            {# Menu de navigation #}
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">

                    {# Dropdown Véhicules #}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownVehicules\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-car me-1\"></i> Véhicules
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownVehicules\">
                            {# Exemples d'items de dropdown - Remplacez # et le texte #}
                            <li><a class=\"dropdown-item\" href=\"{{ path('my_vehicle')}}\">Liste des véhicules</a></li>
                          
                        </ul>
                    </li>

                    {# Dropdown Trajet #}
                     <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTrajet\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-route me-1\"></i> Trajet
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTrajet\">
                             {# Exemples d'items de dropdown - Remplacez # et le texte #}
                            <li><a class=\"dropdown-item\" href=\"{{ path('reservation_affichage')}}\">Planifier un trajet</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('reservation_list')}}\">Consulter mes trajets</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTaxi\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-comment-dots me-1\"></i> Avis
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownTaxi\">
                            {# Exemples d'items de dropdown - Remplacez # et le texte #}
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
                             {# Exemples d'items de dropdown - Remplacez # et le texte #}
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
                             {# Exemples d'items de dropdown - Remplacez # et le texte #}
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
        </div>
    </nav>
    {% endblock %}

    {# Zone de contenu principale #}
    <main class=\"main-content\">
        <div class=\"container\">
             {# Ce bloc sera remplacé par le contenu spécifique de chaque page enfant #}
             {# Vous pouvez maintenant utiliser les classes utilitaires de Tailwind V2 ici et dans les templates enfants #}
             {% block body %}{% endblock %}
        </div>
    </main>

    {# Footer (Non modifié) #}
    {% block footer %}
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row g-4\">
                {# Section Logo & Description #}
                <div class=\"col-lg-4 col-md-6\">
                    <h5><i class=\"fas fa-bus me-2\"></i> UrbanLInk </h5>
                    <p class=\"mt-3\">Votre solution de mobilité urbaine complète. Nous connectons les gens à leurs destinations de manière sûre, efficace et confortable.</p>
                    <div class=\"mt-4\">
                        {# Le lien Télécharger l'App est un exemple, l'URL devrait pointer vers les magasins d'applications #}
                        <a href=\"#\" class=\"btn btn-outline-light btn-sm rounded-pill me-2\"><i class=\"fas fa-download me-1\"></i> Télécharger l'App</a>
                    </div>
                </div>
                {# Section Liens rapides #}
                <div class=\"col-lg-2 col-md-6\">
                    <h5>Liens rapides</h5>
                    <ul class=\"footer-links list-unstyled\">
                        {# Remplacez # par vos paths Symfony si besoin #}
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Accueil</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Services</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Tarifs</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> À propos</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Contact</a></li>
                    </ul>
                </div>
                {# Section Services #}
                <div class=\"col-lg-3 col-md-6\">
                    <h5>Services</h5>
                    <ul class=\"footer-links list-unstyled\">
                        {# Remplacez # par vos paths Symfony si besoin #}
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Transport urbain</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Services de taxi</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Abonnements</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Transport scolaire</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Locations de véhicules</a></li>
                    </ul>
                </div>
                {# Section Contact & Social #}
                <div class=\"col-lg-3 col-md-6\">
                    <h5>Contactez-nous</h5>
                    <ul class=\"footer-links list-unstyled\">
                        {# Remplacez les placeholders par vos vraies informations #}
                        <li><i class=\"fas fa-map-marker-alt me-2\"></i> 123 Rue Principale, Ville</li>
                        <li><i class=\"fas fa-phone-alt me-2\"></i> +123 456 7890</li>
                        <li><i class=\"fas fa-envelope me-2\"></i> contact UrbanLInk.com</li>
                    </ul>
                    <div class=\"social-icons mt-3\">
                         {# Remplacez # par les URLs de vos réseaux sociaux #}
                        <a href=\"#\" class=\"me-2\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a href=\"#\" class=\"me-2\"><i class=\"fab fa-twitter\"></i></a>
                        <a href=\"#\" class=\"me-2\"><i class=\"fab fa-instagram\"></i></a>
                        <a href=\"#\" class=\"me-2\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                    </div>
                </div>
            </div>
            {# Copyright #}
            <div class=\"copyright text-center\">
                {# Remplacez # par les paths Symfony de vos pages légales si elles existent #}
                <p class=\"mb-0\">&copy; {{ \"now\"|date(\"Y\") }} UrbanLInk. Tous droits réservés. | <a href=\"#\">Politique de confidentialité</a> | <a href=\"#\">Conditions d'utilisation</a></p>
            </div>
        </div>
    </footer>
    {% endblock %}

    {# JavaScripts via CDN et scripts spécifiques #}
    {% block javascripts %}
        {# Bootstrap 5 JS (essentiel pour les dropdowns Bootstrap) #}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        {# Script pour l'effet de scroll sur la navbar (conservé) #}
        <script>
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        </script>
        {# Si vous utilisez Webpack Encore pour votre JS applicatif principal, décommentez la ligne suivante #}
        {# {{ encore_entry_script_tags('app') }} #}
    {% endblock %}
</body>
</html>", "basef.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\basef.html.twig");
    }
}
