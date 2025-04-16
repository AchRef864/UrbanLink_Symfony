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
class __TwigTemplate_1c36c70d5309c0273376a03d39fa352c extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\" />

    <!-- Styles -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
        }
        .hero-bg {
            background-image: url(\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/urbanlink1.png"), "html", null, true);
        yield "\");
            background-size: cover;
            background-position: center;
            opacity: 0.8;
        }
        .btn-glow:hover {
            box-shadow: 0 0 15px rgba(74, 144, 226, 0.6);
        }
        .nav-logo {
            height: 3rem;
            transition: all 0.3s ease;
        }
        .watermark {
            position: fixed;
            opacity: 0.1;
            z-index: 0;
            pointer-events: none;
        }
    </style>
</head>

<body class=\"m-0 font-sans antialiased font-normal text-start text-base leading-default text-slate-500\">
<div class=\"relative min-h-screen overflow-hidden\">
    <!-- Background Image -->
    <div class=\"absolute inset-0 hero-bg\"></div>

    <!-- Background Watermark -->
    <img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" alt=\"Watermark\" class=\"watermark\" style=\"
        width: 60%;
        max-width: 800px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    \">

    <!-- Overlay -->
    <div class=\"absolute inset-0 bg-blue-500/20\"></div>

    <!-- Navigation -->
    <nav class=\"relative z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start\">
        <div class=\"flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit\">
            <a class=\"flex items-center py-1.75 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0\" href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                <img src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" alt=\"UrbanLink Logo\" class=\"nav-logo mr-3\">
                <span class=\"text-xl font-semibold\">UrbanLink</span>
            </a>
            <ul class=\"flex flex-col pl-0 mx-auto mb-0 list-none lg-max:py-2 lg:flex-row xl:ml-auto\">
                <li>
                    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center px-4 py-2 mr-2 font-normal text-slate-700 transition-all ease-in-out duration-250 text-sm lg:px-2 hover:text-blue-600\">
                        <i class=\"mr-1 fa fa-home opacity-60\"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"flex items-center px-4 py-2 mr-2 font-normal text-slate-700 transition-all ease-in-out duration-250 text-sm lg:px-2 hover:text-blue-600\">
                        <i class=\"mr-1 fas fa-user-circle opacity-60\"></i>
                        Sign Up
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"flex items-center px-4 py-2 mr-2 font-normal text-slate-700 transition-all ease-in-out duration-250 text-sm lg:px-2 hover:text-blue-600\">
                        <i class=\"mr-1 fas fa-key opacity-60\"></i>
                        Sign In
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class=\"relative z-10 flex items-center justify-center min-h-screen pt-16\">
        <div class=\"container px-6 mx-auto\">
            <div class=\"flex flex-wrap items-center -mx-3\">
                <div class=\"w-full max-w-full px-3 mx-auto lg:flex-0 lg:w-5/12\">
                    <div class=\"glass-card p-8 rounded-2xl shadow-xl\">
                        <h1 class=\"mb-6 text-4xl font-bold text-yellow\">Welcome to UrbanLink</h1>
                        <p class=\"mb-8 text-lg text-white/80\">Connect with your urban community in new and exciting ways.</p>

                        <div class=\"flex flex-wrap space-y-4 md:space-y-0 md:space-x-4\">
                            <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn-glow inline-flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white transition-all bg-blue-500 border border-transparent rounded-lg md:w-auto hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2\">
                                Get Started
                                <i class=\"ml-2 fas fa-arrow-right\"></i>
                            </a>
                            <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"inline-flex items-center justify-center w-full px-8 py-3 text-base font-medium text-blue-600 transition-all bg-white border border-transparent rounded-lg md:w-auto hover:bg-white/90 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2\">
                                Sign In
                                <i class=\"ml-2 fas fa-sign-in-alt\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class=\"relative py-8 text-center text-white/80\">
        <div class=\"container mx-auto\">
            <p>© ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " UrbanLink. All rights reserved.</p>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js"), "html", null, true);
        yield "\"></script>
</body>
</html>";
        
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

        yield "UrbanLink - Home";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  240 => 7,  226 => 129,  222 => 128,  213 => 122,  196 => 108,  189 => 104,  167 => 85,  158 => 79,  149 => 73,  141 => 68,  137 => 67,  120 => 53,  90 => 26,  77 => 16,  73 => 15,  69 => 14,  61 => 9,  56 => 7,  49 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/home/index.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>{% block title %}UrbanLink - Home{% endblock %}</title>
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/img/favicon.png') }}\" />

    <!-- Styles -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
        }
        .hero-bg {
            background-image: url(\"{{ asset('assets/img/urbanlink1.png') }}\");
            background-size: cover;
            background-position: center;
            opacity: 0.8;
        }
        .btn-glow:hover {
            box-shadow: 0 0 15px rgba(74, 144, 226, 0.6);
        }
        .nav-logo {
            height: 3rem;
            transition: all 0.3s ease;
        }
        .watermark {
            position: fixed;
            opacity: 0.1;
            z-index: 0;
            pointer-events: none;
        }
    </style>
</head>

<body class=\"m-0 font-sans antialiased font-normal text-start text-base leading-default text-slate-500\">
<div class=\"relative min-h-screen overflow-hidden\">
    <!-- Background Image -->
    <div class=\"absolute inset-0 hero-bg\"></div>

    <!-- Background Watermark -->
    <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"Watermark\" class=\"watermark\" style=\"
        width: 60%;
        max-width: 800px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    \">

    <!-- Overlay -->
    <div class=\"absolute inset-0 bg-blue-500/20\"></div>

    <!-- Navigation -->
    <nav class=\"relative z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start\">
        <div class=\"flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit\">
            <a class=\"flex items-center py-1.75 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0\" href=\"{{ path('app_home') }}\">
                <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"UrbanLink Logo\" class=\"nav-logo mr-3\">
                <span class=\"text-xl font-semibold\">UrbanLink</span>
            </a>
            <ul class=\"flex flex-col pl-0 mx-auto mb-0 list-none lg-max:py-2 lg:flex-row xl:ml-auto\">
                <li>
                    <a href=\"{{ path('app_home') }}\" class=\"flex items-center px-4 py-2 mr-2 font-normal text-slate-700 transition-all ease-in-out duration-250 text-sm lg:px-2 hover:text-blue-600\">
                        <i class=\"mr-1 fa fa-home opacity-60\"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('app_register') }}\" class=\"flex items-center px-4 py-2 mr-2 font-normal text-slate-700 transition-all ease-in-out duration-250 text-sm lg:px-2 hover:text-blue-600\">
                        <i class=\"mr-1 fas fa-user-circle opacity-60\"></i>
                        Sign Up
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('app_login') }}\" class=\"flex items-center px-4 py-2 mr-2 font-normal text-slate-700 transition-all ease-in-out duration-250 text-sm lg:px-2 hover:text-blue-600\">
                        <i class=\"mr-1 fas fa-key opacity-60\"></i>
                        Sign In
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class=\"relative z-10 flex items-center justify-center min-h-screen pt-16\">
        <div class=\"container px-6 mx-auto\">
            <div class=\"flex flex-wrap items-center -mx-3\">
                <div class=\"w-full max-w-full px-3 mx-auto lg:flex-0 lg:w-5/12\">
                    <div class=\"glass-card p-8 rounded-2xl shadow-xl\">
                        <h1 class=\"mb-6 text-4xl font-bold text-yellow\">Welcome to UrbanLink</h1>
                        <p class=\"mb-8 text-lg text-white/80\">Connect with your urban community in new and exciting ways.</p>

                        <div class=\"flex flex-wrap space-y-4 md:space-y-0 md:space-x-4\">
                            <a href=\"{{ path('app_register') }}\" class=\"btn-glow inline-flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white transition-all bg-blue-500 border border-transparent rounded-lg md:w-auto hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2\">
                                Get Started
                                <i class=\"ml-2 fas fa-arrow-right\"></i>
                            </a>
                            <a href=\"{{ path('app_login') }}\" class=\"inline-flex items-center justify-center w-full px-8 py-3 text-base font-medium text-blue-600 transition-all bg-white border border-transparent rounded-lg md:w-auto hover:bg-white/90 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2\">
                                Sign In
                                <i class=\"ml-2 fas fa-sign-in-alt\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class=\"relative py-8 text-center text-white/80\">
        <div class=\"container mx-auto\">
            <p>© {{ \"now\"|date(\"Y\") }} UrbanLink. All rights reserved.</p>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/argon-dashboard-tailwind.js') }}\"></script>
</body>
</html>", "home/index.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\home\\index.html.twig");
    }
}
