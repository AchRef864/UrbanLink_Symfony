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
class __TwigTemplate_b35c57147f064c05772a79edc6d79a93 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/login/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- Argon Dashboard CSS -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\" />
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

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        // line 19
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- reCAPTCHA v2 script -->
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const response = grecaptcha.getResponse();
            if (response.length === 0) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'reCAPTCHA Required',
                    text: 'Please complete the reCAPTCHA verification',
                    confirmButtonColor: '#3085d6',
                });
                return false;
            }
            return true;
        });

        // Show blocked user popup if flash message exists
        document.addEventListener('DOMContentLoaded', function() {
            const blockedPopup = document.getElementById('blockedPopup');
            if (blockedPopup) {
                blockedPopup.classList.remove('hidden');

                // Close after 5 seconds
                setTimeout(() => {
                    blockedPopup.classList.add('hidden');
                }, 5000);
            }
        });
    </script>

    <!-- Argon Dashboard JS -->
    <script src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
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

        // line 63
        yield "
    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", ["blocked"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 65
            yield "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Account Blocked',
                    text: '";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "',
                    confirmButtonColor: '#3085d6',
                });
            });
        </script>

        <div id=\"blockedPopup\" class=\"fixed top-4 right-4 z-50\">
            <div class=\"flex items-center p-4 mb-4 text-sm text-yellow bg-red-500 rounded-lg shadow-lg\" role=\"alert\">
                <svg class=\"flex-shrink-0 inline w-5 h-5 mr-3\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z\" clip-rule=\"evenodd\"></path>
                </svg>
                <span class=\"sr-only\">Info</span>
                <div>
                    <span class=\"font-medium\">Account Blocked!</span> ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "
                </div>
                <button type=\"button\" class=\"ml-auto -mx-1.5 -my-1.5 bg-red-500 text-yellow rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-600 inline-flex h-8 w-8\" onclick=\"document.getElementById('blockedPopup').remove()\">
                    <span class=\"sr-only\">Close</span>
                    <svg class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>
                    </svg>
                </button>
            </div>
        </div>

        <script>
            // Auto-close after 5 seconds
            setTimeout(() => {
                const popup = document.getElementById('blockedPopup');
                if (popup) popup.remove();
            }, 5000);
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "

    <div class=\"container sticky top-0 z-sticky\">
        <div class=\"flex flex-wrap -mx-3\">
            <div class=\"w-full max-w-full px-3 flex-0\">
                <!-- Navbar -->
                <nav class=\"absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 shadow-sm rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start\">
                    <div class=\"flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit\">
                        <a class=\"py-1.75 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0\" href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                            <img src=\"";
        // line 112
        yield "/logo.png";
        yield "\" class=\"h-8 inline mr-2\" alt=\"HomePage--Welcome--\">
                            UrbanLink
                        </a>
                        <div navbar-menu class=\"items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto\">
                            <ul class=\"flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto\">
                                <li>
                                    <a class=\"flex items-center px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2\" href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                                        <i class=\"mr-1 fas fa-user-circle opacity-60\"></i>
                                        Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a class=\"block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2\" href=\"";
        // line 124
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
    <!-- Blocked User Popup -->
    ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "flashes", ["blocked"], "method", false, false, false, 137));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 138
            yield "        <div id=\"blockedPopup\" class=\"fixed top-4 right-4 z-50 hidden\">
            <div class=\"flex items-center p-4 mb-4 text-sm text-yellow bg-red-500 rounded-lg shadow-lg\" role=\"alert\">
                <svg class=\"flex-shrink-0 inline w-5 h-5 mr-3\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z\" clip-rule=\"evenodd\"></path>
                </svg>
                <span class=\"sr-only\">Info</span>
                <div>
                    <span class=\"font-medium\">Account Blocked!</span> ";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
                <button type=\"button\" class=\"ml-auto -mx-1.5 -my-1.5 bg-red-500 text-yellow rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-600 inline-flex h-8 w-8\" onclick=\"document.getElementById('blockedPopup').classList.add('hidden')\">
                    <span class=\"sr-only\">Close</span>
                    <svg class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>
                    </svg>
                </button>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "    <main class=\"mt-0 transition-all duration-200 ease-in-out\">
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
        // line 169
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 169, $this->source); })())) {
            // line 170
            yield "                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Login Failed',
                                                    text: '";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 175, $this->source); })()), "messageKey", [], "any", false, false, false, 175), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 175, $this->source); })()), "messageData", [], "any", false, false, false, 175), "security"), "html", null, true);
            yield "',
                                                    confirmButtonColor: '#3085d6',
                                                });
                                            });
                                        </script>
                                    ";
        }
        // line 181
        yield "
                                    ";
        // line 182
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "user", [], "any", false, false, false, 182)) {
            // line 183
            yield "                                        <div class=\"relative px-4 py-3 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg\" role=\"alert\">
                                            You are logged in as ";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "userIdentifier", [], "any", false, false, false, 184), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"font-semibold underline\">Logout</a>
                                        </div>
                                    ";
        }
        // line 187
        yield "
                                    <form method=\"post\" id=\"loginForm\">
                                        <div class=\"mb-4\">
                                            <label for=\"inputEmail\" class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Email</label>
                                            <input
                                                    name=\"_username\"
                                                    id=\"inputEmail\"
                                                    class=\"focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-yellow/80 dark:text-yellow/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none\"
                                                    placeholder=\"Email\"
                                                    value=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 196, $this->source); })()), "html", null, true);
        yield "\"
                                                    autofocus
                                            >
                                            ";
        // line 199
        if ((array_key_exists("form_errors", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["form_errors"] ?? null), "_username", [], "array", true, true, false, 199))) {
            // line 200
            yield "                                                <div class=\"p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg\">
                                                    ";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_errors"]) || array_key_exists("form_errors", $context) ? $context["form_errors"] : (function () { throw new RuntimeError('Variable "form_errors" does not exist.', 201, $this->source); })()), "_username", [], "array", false, false, false, 201), "html", null, true);
            yield "
                                                </div>
                                            ";
        }
        // line 204
        yield "                                        </div>

                                        <div class=\"mb-4\">
                                            <label for=\"inputPassword\" class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Password</label>
                                            <input
                                                    name=\"_password\"
                                                    id=\"inputPassword\"
                                                    class=\"focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-yellow/80 dark:text-yellow/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none\"
                                                    placeholder=\"Password\"
                                                    type=\"password\"
                                            >
                                            ";
        // line 215
        if ((array_key_exists("form_errors", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["form_errors"] ?? null), "_password", [], "array", true, true, false, 215))) {
            // line 216
            yield "                                                <div class=\"p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg\">
                                                    ";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_errors"]) || array_key_exists("form_errors", $context) ? $context["form_errors"] : (function () { throw new RuntimeError('Variable "form_errors" does not exist.', 217, $this->source); })()), "_password", [], "array", false, false, false, 217), "html", null, true);
            yield "
                                                </div>
                                            ";
        }
        // line 220
        yield "                                        </div>

                                        <!-- reCAPTCHA v2 Widget -->
                                        <div class=\"g-recaptcha mb-4\" data-sitekey=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 223, $this->source); })()), "html", null, true);
        yield "\"></div>
                                        ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "flashes", ["error"], "method", false, false, false, 224));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 225
            yield "                                            <div class=\"text-red-500 text-xs mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashError"], "html", null, true);
            yield "</div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashError'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        yield "
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                                        <div class=\"text-center\">
                                            <button
                                                    type=\"submit\"
                                                    class=\"inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-yellow align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25\"
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
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"font-semibold text-slate-700\">Reset it here</a>
                                    </p>
                                    <p class=\"mx-auto mb-4 text-sm text-slate-400\">
                                        Don't have an account?
                                        <a href=\"";
        // line 248
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"font-semibold text-slate-700\">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex\">
                            <div class=\"relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden bg-[url('";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/signin-ill.jpg"), "html", null, true);
        yield "'] rounded-xl\">
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
        return array (  513 => 254,  504 => 248,  497 => 244,  478 => 228,  475 => 227,  466 => 225,  462 => 224,  458 => 223,  453 => 220,  447 => 217,  444 => 216,  442 => 215,  429 => 204,  423 => 201,  420 => 200,  418 => 199,  412 => 196,  401 => 187,  393 => 184,  390 => 183,  388 => 182,  385 => 181,  376 => 175,  369 => 170,  367 => 169,  352 => 156,  335 => 145,  326 => 138,  322 => 137,  306 => 124,  297 => 118,  288 => 112,  284 => 111,  274 => 103,  249 => 84,  233 => 71,  225 => 65,  221 => 64,  218 => 63,  205 => 62,  192 => 57,  188 => 56,  147 => 19,  134 => 18,  118 => 12,  114 => 11,  110 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Argon Dashboard CSS -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css\">

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- reCAPTCHA v2 script -->
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const response = grecaptcha.getResponse();
            if (response.length === 0) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'reCAPTCHA Required',
                    text: 'Please complete the reCAPTCHA verification',
                    confirmButtonColor: '#3085d6',
                });
                return false;
            }
            return true;
        });

        // Show blocked user popup if flash message exists
        document.addEventListener('DOMContentLoaded', function() {
            const blockedPopup = document.getElementById('blockedPopup');
            if (blockedPopup) {
                blockedPopup.classList.remove('hidden');

                // Close after 5 seconds
                setTimeout(() => {
                    blockedPopup.classList.add('hidden');
                }, 5000);
            }
        });
    </script>

    <!-- Argon Dashboard JS -->
    <script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/argon-dashboard-tailwind.js') }}\"></script>
{% endblock %}



{% block body %}

    {% for flash in app.flashes('blocked') %}

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Account Blocked',
                    text: '{{ flash }}',
                    confirmButtonColor: '#3085d6',
                });
            });
        </script>

        <div id=\"blockedPopup\" class=\"fixed top-4 right-4 z-50\">
            <div class=\"flex items-center p-4 mb-4 text-sm text-yellow bg-red-500 rounded-lg shadow-lg\" role=\"alert\">
                <svg class=\"flex-shrink-0 inline w-5 h-5 mr-3\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z\" clip-rule=\"evenodd\"></path>
                </svg>
                <span class=\"sr-only\">Info</span>
                <div>
                    <span class=\"font-medium\">Account Blocked!</span> {{ flash }}
                </div>
                <button type=\"button\" class=\"ml-auto -mx-1.5 -my-1.5 bg-red-500 text-yellow rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-600 inline-flex h-8 w-8\" onclick=\"document.getElementById('blockedPopup').remove()\">
                    <span class=\"sr-only\">Close</span>
                    <svg class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>
                    </svg>
                </button>
            </div>
        </div>

        <script>
            // Auto-close after 5 seconds
            setTimeout(() => {
                const popup = document.getElementById('blockedPopup');
                if (popup) popup.remove();
            }, 5000);
        </script>
    {% endfor %}


    <div class=\"container sticky top-0 z-sticky\">
        <div class=\"flex flex-wrap -mx-3\">
            <div class=\"w-full max-w-full px-3 flex-0\">
                <!-- Navbar -->
                <nav class=\"absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 shadow-sm rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start\">
                    <div class=\"flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit\">
                        <a class=\"py-1.75 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0\" href=\"{{ path('app_home') }}\">
                            <img src=\"{{\"/logo.png\"}}\" class=\"h-8 inline mr-2\" alt=\"HomePage--Welcome--\">
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
    <!-- Blocked User Popup -->
    {% for message in app.flashes('blocked') %}
        <div id=\"blockedPopup\" class=\"fixed top-4 right-4 z-50 hidden\">
            <div class=\"flex items-center p-4 mb-4 text-sm text-yellow bg-red-500 rounded-lg shadow-lg\" role=\"alert\">
                <svg class=\"flex-shrink-0 inline w-5 h-5 mr-3\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z\" clip-rule=\"evenodd\"></path>
                </svg>
                <span class=\"sr-only\">Info</span>
                <div>
                    <span class=\"font-medium\">Account Blocked!</span> {{ message }}
                </div>
                <button type=\"button\" class=\"ml-auto -mx-1.5 -my-1.5 bg-red-500 text-yellow rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-600 inline-flex h-8 w-8\" onclick=\"document.getElementById('blockedPopup').classList.add('hidden')\">
                    <span class=\"sr-only\">Close</span>
                    <svg class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>
                    </svg>
                </button>
            </div>
        </div>
    {% endfor %}
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
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Login Failed',
                                                    text: '{{ error.messageKey|trans(error.messageData, 'security') }}',
                                                    confirmButtonColor: '#3085d6',
                                                });
                                            });
                                        </script>
                                    {% endif %}

                                    {% if app.user %}
                                        <div class=\"relative px-4 py-3 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg\" role=\"alert\">
                                            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\" class=\"font-semibold underline\">Logout</a>
                                        </div>
                                    {% endif %}

                                    <form method=\"post\" id=\"loginForm\">
                                        <div class=\"mb-4\">
                                            <label for=\"inputEmail\" class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Email</label>
                                            <input
                                                    name=\"_username\"
                                                    id=\"inputEmail\"
                                                    class=\"focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-yellow/80 dark:text-yellow/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none\"
                                                    placeholder=\"Email\"
                                                    value=\"{{ last_username }}\"
                                                    autofocus
                                            >
                                            {% if form_errors is defined and form_errors['_username'] is defined %}
                                                <div class=\"p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg\">
                                                    {{ form_errors['_username'] }}
                                                </div>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-4\">
                                            <label for=\"inputPassword\" class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Password</label>
                                            <input
                                                    name=\"_password\"
                                                    id=\"inputPassword\"
                                                    class=\"focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-yellow/80 dark:text-yellow/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none\"
                                                    placeholder=\"Password\"
                                                    type=\"password\"
                                            >
                                            {% if form_errors is defined and form_errors['_password'] is defined %}
                                                <div class=\"p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg\">
                                                    {{ form_errors['_password'] }}
                                                </div>
                                            {% endif %}
                                        </div>

                                        <!-- reCAPTCHA v2 Widget -->
                                        <div class=\"g-recaptcha mb-4\" data-sitekey=\"{{ recaptcha_site_key }}\"></div>
                                        {% for flashError in app.flashes('error') %}
                                            <div class=\"text-red-500 text-xs mt-1\">{{ flashError }}</div>
                                        {% endfor %}

                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                                        <div class=\"text-center\">
                                            <button
                                                    type=\"submit\"
                                                    class=\"inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-yellow align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25\"
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
{% endblock %}", "auth/login/login.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\auth\\login\\login.html.twig");
    }
}
