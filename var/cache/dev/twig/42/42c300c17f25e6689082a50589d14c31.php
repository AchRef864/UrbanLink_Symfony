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
class __TwigTemplate_342d147422a3e230eeac2d7bc148a606 extends Template
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

    // line 16
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

        // line 17
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- reCAPTCHA v2 script -->
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form submission validation
            const loginForm = document.getElementById('loginForm');
            if (loginForm) {
                loginForm.addEventListener('submit', function(e) {
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
            }

            // Show blocked user popup if flash message exists
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["blocked"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            yield "            Swal.fire({
                icon: 'error',
                title: 'Account Blocked',
                text: '";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "',
                confirmButtonColor: '#3085d6',
            });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "        });
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

    // line 60
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

        // line 61
        yield "    <div class=\"container sticky top-0 z-sticky\">
        <div class=\"flex flex-wrap -mx-3\">
            <div class=\"w-full max-w-full px-3 flex-0\">
                <!-- Navbar -->
                <nav class=\"absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 shadow-sm rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start\">
                    <div class=\"flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit\">
                        <a class=\"py-1.75 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0\" href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                            <img src=\"";
        // line 68
        yield "/logo.png";
        yield "\" class=\"h-8 inline mr-2\" alt=\"HomePage--Welcome--\">
                            UrbanLink
                        </a>
                        <div navbar-menu class=\"items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto\">
                            <ul class=\"flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto\">
                                <li>
                                    <a class=\"flex items-center px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2\" href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                                        <i class=\"mr-1 fas fa-user-circle opacity-60\"></i>
                                        Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a class=\"block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2\" href=\"";
        // line 80
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
        // line 106
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106)) {
            // line 107
            yield "                                        <div class=\"relative px-4 py-3 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg\" role=\"alert\">
                                            You are logged in as ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "userIdentifier", [], "any", false, false, false, 108), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"font-semibold underline\">Logout</a>
                                        </div>
                                    ";
        }
        // line 111
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
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 120, $this->source); })()), "html", null, true);
        yield "\"
                                                    autofocus
                                            >
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
                                        </div>

                                        <!-- reCAPTCHA v2 Widget -->
                                        <div class=\"g-recaptcha mb-4\" data-sitekey=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 137, $this->source); })()), "html", null, true);
        yield "\"></div>
                                        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "flashes", ["error"], "method", false, false, false, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 139
            yield "                                            <div class=\"text-red-500 text-xs mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashError"], "html", null, true);
            yield "</div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashError'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 142
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

                                    ";
        // line 154
        if ((isset($context["oauth_enabled"]) || array_key_exists("oauth_enabled", $context) ? $context["oauth_enabled"] : (function () { throw new RuntimeError('Variable "oauth_enabled" does not exist.', 154, $this->source); })())) {
            // line 155
            yield "                                        <div class=\"relative my-6\">
                                            <div class=\"absolute inset-0 flex items-center\">
                                                <div class=\"w-full border-t border-gray-300\"></div>
                                            </div>
                                            <div class=\"relative flex justify-center text-sm\">
                                                <span class=\"px-2 bg-white text-gray-500\">Or continue with</span>
                                            </div>
                                        </div>

                                        <div class=\"grid grid-cols-2 gap-4\">
                                            ";
            // line 165
            if ((isset($context["oauth_google_enabled"]) || array_key_exists("oauth_google_enabled", $context) ? $context["oauth_google_enabled"] : (function () { throw new RuntimeError('Variable "oauth_google_enabled" does not exist.', 165, $this->source); })())) {
                // line 166
                yield "                                                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_service_redirect", ["service" => "google"]);
                yield "\"
                                                   class=\"flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50\">
                                                    <i class=\"fab fa-google text-red-500 mr-2\"></i> Google
                                                </a>
                                            ";
            }
            // line 171
            yield "                                        </div>
                                    ";
        }
        // line 173
        yield "
                                </div>

                                <div class=\"p-6 px-1 pt-0 text-center\">
                                    <p class=\"mx-auto mb-4 text-sm text-slate-400\">
                                        Forgot your password?
                                        <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"font-semibold text-slate-700\">Reset it here</a>
                                    </p>
                                    <p class=\"mx-auto mb-4 text-sm text-slate-400\">
                                        Don't have an account?
                                        <a href=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"font-semibold text-slate-700\">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex\">
                            <div class=\"relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden bg-[url('";
        // line 189
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
        return array (  422 => 189,  413 => 183,  406 => 179,  398 => 173,  394 => 171,  385 => 166,  383 => 165,  371 => 155,  369 => 154,  354 => 142,  351 => 141,  342 => 139,  338 => 138,  334 => 137,  314 => 120,  303 => 111,  295 => 108,  292 => 107,  290 => 106,  261 => 80,  252 => 74,  243 => 68,  239 => 67,  231 => 61,  218 => 60,  205 => 57,  201 => 56,  195 => 52,  185 => 48,  180 => 45,  176 => 44,  145 => 17,  132 => 16,  118 => 12,  114 => 11,  110 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
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
        document.addEventListener('DOMContentLoaded', function() {
            // Form submission validation
            const loginForm = document.getElementById('loginForm');
            if (loginForm) {
                loginForm.addEventListener('submit', function(e) {
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
            }

            // Show blocked user popup if flash message exists
            {% for message in app.flashes('blocked') %}
            Swal.fire({
                icon: 'error',
                title: 'Account Blocked',
                text: '{{ message }}',
                confirmButtonColor: '#3085d6',
            });
            {% endfor %}
        });
    </script>

    <!-- Argon Dashboard JS -->
    <script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/argon-dashboard-tailwind.js') }}\"></script>
{% endblock %}

{% block body %}
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

                                    {% if oauth_enabled %}
                                        <div class=\"relative my-6\">
                                            <div class=\"absolute inset-0 flex items-center\">
                                                <div class=\"w-full border-t border-gray-300\"></div>
                                            </div>
                                            <div class=\"relative flex justify-center text-sm\">
                                                <span class=\"px-2 bg-white text-gray-500\">Or continue with</span>
                                            </div>
                                        </div>

                                        <div class=\"grid grid-cols-2 gap-4\">
                                            {% if oauth_google_enabled %}
                                                <a href=\"{{ path('hwi_oauth_service_redirect', {'service': 'google'}) }}\"
                                                   class=\"flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50\">
                                                    <i class=\"fab fa-google text-red-500 mr-2\"></i> Google
                                                </a>
                                            {% endif %}
                                        </div>
                                    {% endif %}

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
