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

/* home/index.html.twig */
class __TwigTemplate_e6272a02df10384f89669c1d729dac48 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>UrbanLink</title>
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\" />
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #111827, #1e3a8a);
            color: white;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 50;
            backdrop-filter: blur(10px);
        }

        .logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.5rem;
        }

        .logo img {
            height: 2.2rem;
            margin-right: 0.5rem;
        }

        .nav-links a {
            margin-left: 1.5rem;
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: #60a5fa;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 6rem 2rem 2rem;
            position: relative;
        }

        .hero-text {
            max-width: 500px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-buttons a {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            margin-right: 1rem;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #3b82f6;
            color: white;
        }

        .btn-primary:hover {
            background: #2563eb;
        }

        .btn-secondary {
            background: white;
            color: #1e3a8a;
        }

        .btn-secondary:hover {
            background: #f3f4f6;
        }

        .hero-img img {
            width: 500px;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @media(max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }
            .hero-img img {
                width: 100%;
                max-width: 400px;
                margin-top: 2rem;
            }
            .hero-buttons {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav>
    <div class=\"logo\">
    <img src=\"/logo.png\" alt=\"UrbanLink\" style=\"mix-blend-mode: multiply;\">
        UrbanLink
    </div>
    <div class=\"nav-links\">
        <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>
        <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Sign Up</a>
        <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Sign In</a>
    </div>
</nav>

<!-- Hero -->
<section class=\"hero\">
    <div class=\"hero-text\">
        <h1>Urban Mobility, Simplified.</h1>
        <div class=\"hero-buttons\">
            <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn-primary\">Get Started</a>
            <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn-secondary\">Login</a>
        </div>
    </div>
    <div class=\"hero-img\">
<img src=\"/logo.png\" alt=\"UrbanLink\" style=\"mix-blend-mode: multiply;\">
    </div>
</section>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  216 => 149,  212 => 148,  200 => 139,  196 => 138,  192 => 137,  62 => 10,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>UrbanLink</title>
    <link rel=\"icon\" href=\"{{ asset('assets/img/favicon.png') }}\" />
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #111827, #1e3a8a);
            color: white;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 50;
            backdrop-filter: blur(10px);
        }

        .logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.5rem;
        }

        .logo img {
            height: 2.2rem;
            margin-right: 0.5rem;
        }

        .nav-links a {
            margin-left: 1.5rem;
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: #60a5fa;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 6rem 2rem 2rem;
            position: relative;
        }

        .hero-text {
            max-width: 500px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-buttons a {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            margin-right: 1rem;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #3b82f6;
            color: white;
        }

        .btn-primary:hover {
            background: #2563eb;
        }

        .btn-secondary {
            background: white;
            color: #1e3a8a;
        }

        .btn-secondary:hover {
            background: #f3f4f6;
        }

        .hero-img img {
            width: 500px;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @media(max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }
            .hero-img img {
                width: 100%;
                max-width: 400px;
                margin-top: 2rem;
            }
            .hero-buttons {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav>
    <div class=\"logo\">
    <img src=\"/logo.png\" alt=\"UrbanLink\" style=\"mix-blend-mode: multiply;\">
        UrbanLink
    </div>
    <div class=\"nav-links\">
        <a href=\"{{ path('app_home') }}\">Home</a>
        <a href=\"{{ path('app_register') }}\">Sign Up</a>
        <a href=\"{{ path('app_login') }}\">Sign In</a>
    </div>
</nav>

<!-- Hero -->
<section class=\"hero\">
    <div class=\"hero-text\">
        <h1>Urban Mobility, Simplified.</h1>
        <div class=\"hero-buttons\">
            <a href=\"{{ path('app_register') }}\" class=\"btn-primary\">Get Started</a>
            <a href=\"{{ path('app_login') }}\" class=\"btn-secondary\">Login</a>
        </div>
    </div>
    <div class=\"hero-img\">
<img src=\"/logo.png\" alt=\"UrbanLink\" style=\"mix-blend-mode: multiply;\">
    </div>
</section>

</body>
</html>
", "home/index.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\home\\index.html.twig");
    }
}
