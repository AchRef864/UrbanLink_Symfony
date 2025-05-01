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

/* auth/registration/register.html.twig */
class __TwigTemplate_561ae7c94bd9d3e7eb89ddc2e3e6fcac extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/registration/register.html.twig", 1);
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

        yield "Register - UrbanLink";
        
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
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <link href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "<nav class=\"absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start\">
  <div class=\"container flex items-center justify-between py-0 flex-wrap-inherit\">
    <a class=\"py-1.75 ml-4 mr-4 font-bold text-white text-sm whitespace-nowrap lg:ml-0\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">UrbanLink</a>
    <button navbar-trigger class=\"px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden\" type=\"button\" aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none\">
          <span bar1 class=\"w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all\"></span>
          <span bar2 class=\"w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all\"></span>
          <span bar3 class=\"w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all\"></span>
        </span>
    </button>
    <div navbar-menu class=\"items-center flex-grow transition-all ease duration-350 lg-max:bg-white lg-max:max-h-0 lg-max:overflow-hidden basis-full rounded-2xl lg:flex lg:basis-auto\">
      <ul class=\"flex flex-col pl-0 mx-auto mb-0 list-none lg-max:py-2 lg:flex-row xl:ml-auto\">
        <li>
          <a class=\"flex items-center px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <i class=\"mr-1 text-white lg-max:text-slate-700 fa fa-chart-pie opacity-60\"></i>
            Dashboard
          </a>
        </li>
        <li>
          <a class=\"block px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75\" href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
            <i class=\"mr-1 text-white lg-max:text-slate-700 fas fa-user-circle opacity-60\"></i>
            Sign Up
          </a>
        </li>
        <li>
          <a class=\"block px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
            <i class=\"mr-1 text-white lg-max:text-slate-700 fas fa-key opacity-60\"></i>
            Sign In
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class=\"mt-0 transition-all duration-200 ease-in-out\">
  <section class=\"min-h-screen\">
    <div class=\"bg-top relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-cover min-h-50-screen rounded-xl bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg')]\">
      <span class=\"absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 to-zinc-700 opacity-60\"></span>
      <div class=\"container z-10\">
        <div class=\"flex flex-wrap justify-center -mx-3\">
          <div class=\"w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12\">
            <h1 class=\"mt-12 mb-2 text-white\">Welcome!</h1>
            <p class=\"text-white\">Create your account to get started with UrbanLink.</p>
          </div>
        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48\">
        <div class=\"w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12\">
          <div class=\"relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border\">
            <div class=\"p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl\">
              <h5>Register</h5>
            </div>

            <div class=\"flex-auto p-6\">
              ";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), 'form_start', ["attr" => ["class" => "text-left", "role" => "form", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        // line 78
        yield "

              ";
        // line 81
        yield "              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Full Name</label>
                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "name", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow", "placeholder" => "Full Name"]]);
        // line 88
        yield "
                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
              </div>

              ";
        // line 93
        yield "              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Email</label>
                ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), "email", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow", "placeholder" => "Email"]]);
        // line 100
        yield "
                ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 101, $this->source); })()), "email", [], "any", false, false, false, 101), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
              </div>

              ";
        // line 105
        yield "              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Phone Number</label>
                <div class=\"flex\">
                  <select
                          id=\"countrySelect\"
                          class=\"w-1/3 mr-2 placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow\"
                  >
                    <option value=\"US\" data-code=\"+1\">United States (+1)</option>
                    <option value=\"TN\" data-code=\"+216\">Tunisia (+216)</option>
                    <option value=\"FR\" data-code=\"+33\">France (+33)</option>
                    <option value=\"DE\" data-code=\"+49\">Germany (+49)</option>
                    <option value=\"GB\" data-code=\"+44\">UK (+44)</option>
                  </select>
                  ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 118, $this->source); })()), "phone", [], "any", false, false, false, 118), 'widget', ["attr" => ["id" => "phoneInput", "class" => "w-full placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow", "placeholder" => "Phone number"]]);
        // line 124
        yield "
                </div>
                ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 126, $this->source); })()), "phone", [], "any", false, false, false, 126), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
              </div>

              ";
        // line 130
        yield "              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Home Address</label>
                ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 132, $this->source); })()), "homeAddress", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => "placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow", "placeholder" => "Home Address"]]);
        // line 137
        yield "
                ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 138, $this->source); })()), "homeAddress", [], "any", false, false, false, 138), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
              </div>

              ";
        // line 142
        yield "              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">License Number</label>
                ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 144, $this->source); })()), "license", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow", "placeholder" => "Enter your license number"]]);
        // line 149
        yield "
                ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 150, $this->source); })()), "license", [], "any", false, false, false, 150), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
              </div>

              ";
        // line 154
        yield "              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Profile Image</label>
                ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 156, $this->source); })()), "image", [], "any", false, false, false, 156), 'widget', ["attr" => ["class" => "text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"]]);
        // line 160
        yield "
                <p class=\"mt-1 text-xs text-gray-500\">Allowed file types: Any image format. Max size: 50MB.</p>
                ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 162, $this->source); })()), "image", [], "any", false, false, false, 162), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
              </div>

              ";
        // line 166
        yield "              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Password</label>
                ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 168, $this->source); })()), "plainPassword", [], "any", false, false, false, 168), 'widget', ["attr" => ["class" => "placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow", "placeholder" => "Password"]]);
        // line 173
        yield "
                ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 174, $this->source); })()), "plainPassword", [], "any", false, false, false, 174), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
              </div>

              ";
        // line 178
        yield "              <div class=\"min-h-6 pl-7 mb-4\">
                ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 179, $this->source); })()), "agreeTerms", [], "any", false, false, false, 179), 'widget', ["attr" => ["class" => "w-4.8 h-4.8 ease -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-blue-500 checked:to-violet-500 after:text-xxs after:font-awesome after:duration-250 after:ease-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100"]]);
        // line 183
        yield "
                <label for=\"agreeTerms\" class=\"mb-2 ml-1 font-normal cursor-pointer text-sm text-slate-700\">
                  I agree to the <a href=\"#\" class=\"font-bold\">Terms and Conditions</a>
                </label>
                ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 187, $this->source); })()), "agreeTerms", [], "any", false, false, false, 187), 'errors', ["attr" => ["class" => "text-red-500 text-xs mt-1"]]);
        yield "
              </div>

              ";
        // line 191
        yield "              <div class=\"text-center\">
                <button type=\"submit\" class=\"inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white\">
                  Sign up
                </button>
              </div>

              <p class=\"mt-4 mb-0 leading-normal text-sm\">
                Already have an account?
                <a href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"font-bold text-slate-700\">Sign in</a>
              </p>

              ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 202, $this->source); })()), 'rest');
        yield "
              ";
        // line 203
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 203, $this->source); })()), 'form_end');
        yield "
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

  ";
        // line 212
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 213
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js"), "html", null, true);
        yield "\"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const countrySelect = document.getElementById('countrySelect');
        const phoneInput = document.getElementById('phoneInput');
        const form = document.querySelector('form');

        form.addEventListener('submit', function(e) {
          const selectedOption = countrySelect.options[countrySelect.selectedIndex];
          const countryCode = selectedOption.getAttribute('data-code');
          const phoneNumber = phoneInput.value;

          if (!phoneNumber.startsWith(countryCode)) {
            phoneInput.value = countryCode + phoneNumber;
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
        return "auth/registration/register.html.twig";
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
        return array (  418 => 215,  414 => 214,  409 => 213,  386 => 212,  374 => 203,  370 => 202,  364 => 199,  354 => 191,  348 => 187,  342 => 183,  340 => 179,  337 => 178,  331 => 174,  328 => 173,  326 => 168,  322 => 166,  316 => 162,  312 => 160,  310 => 156,  306 => 154,  300 => 150,  297 => 149,  295 => 144,  291 => 142,  285 => 138,  282 => 137,  280 => 132,  276 => 130,  270 => 126,  266 => 124,  264 => 118,  249 => 105,  243 => 101,  240 => 100,  238 => 95,  234 => 93,  228 => 89,  225 => 88,  223 => 83,  219 => 81,  215 => 78,  213 => 71,  177 => 38,  168 => 32,  159 => 26,  145 => 15,  141 => 13,  128 => 12,  115 => 9,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register - UrbanLink{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
<nav class=\"absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start\">
  <div class=\"container flex items-center justify-between py-0 flex-wrap-inherit\">
    <a class=\"py-1.75 ml-4 mr-4 font-bold text-white text-sm whitespace-nowrap lg:ml-0\" href=\"{{ path('app_home') }}\">UrbanLink</a>
    <button navbar-trigger class=\"px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden\" type=\"button\" aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none\">
          <span bar1 class=\"w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all\"></span>
          <span bar2 class=\"w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all\"></span>
          <span bar3 class=\"w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all\"></span>
        </span>
    </button>
    <div navbar-menu class=\"items-center flex-grow transition-all ease duration-350 lg-max:bg-white lg-max:max-h-0 lg-max:overflow-hidden basis-full rounded-2xl lg:flex lg:basis-auto\">
      <ul class=\"flex flex-col pl-0 mx-auto mb-0 list-none lg-max:py-2 lg:flex-row xl:ml-auto\">
        <li>
          <a class=\"flex items-center px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75\" href=\"{{ path('app_home') }}\">
            <i class=\"mr-1 text-white lg-max:text-slate-700 fa fa-chart-pie opacity-60\"></i>
            Dashboard
          </a>
        </li>
        <li>
          <a class=\"block px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75\" href=\"{{ path('app_register') }}\">
            <i class=\"mr-1 text-white lg-max:text-slate-700 fas fa-user-circle opacity-60\"></i>
            Sign Up
          </a>
        </li>
        <li>
          <a class=\"block px-4 py-2 mr-2 font-normal text-white transition-all ease-in-out duration-250 lg-max:opacity-0 lg-max:text-slate-700 text-sm lg:px-2 lg:hover:text-white/75\" href=\"{{ path('app_login') }}\">
            <i class=\"mr-1 text-white lg-max:text-slate-700 fas fa-key opacity-60\"></i>
            Sign In
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class=\"mt-0 transition-all duration-200 ease-in-out\">
  <section class=\"min-h-screen\">
    <div class=\"bg-top relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-cover min-h-50-screen rounded-xl bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg')]\">
      <span class=\"absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 to-zinc-700 opacity-60\"></span>
      <div class=\"container z-10\">
        <div class=\"flex flex-wrap justify-center -mx-3\">
          <div class=\"w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12\">
            <h1 class=\"mt-12 mb-2 text-white\">Welcome!</h1>
            <p class=\"text-white\">Create your account to get started with UrbanLink.</p>
          </div>
        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48\">
        <div class=\"w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12\">
          <div class=\"relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border\">
            <div class=\"p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl\">
              <h5>Register</h5>
            </div>

            <div class=\"flex-auto p-6\">
              {{ form_start(registrationForm, {
                'attr': {
                  'class': 'text-left',
                  'role': 'form',
                  'novalidate': 'novalidate',
                  'enctype': 'multipart/form-data'
                }
              }) }}

              {# Name Field #}
              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Full Name</label>
                {{ form_widget(registrationForm.name, {
                  'attr': {
                    'class': 'placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow',
                    'placeholder': 'Full Name'
                  }
                }) }}
                {{ form_errors(registrationForm.name, { 'attr': {'class': 'text-red-500 text-xs mt-1'} }) }}
              </div>

              {# Email Field #}
              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Email</label>
                {{ form_widget(registrationForm.email, {
                  'attr': {
                    'class': 'placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow',
                    'placeholder': 'Email'
                  }
                }) }}
                {{ form_errors(registrationForm.email, { 'attr': {'class': 'text-red-500 text-xs mt-1'} }) }}
              </div>

              {# Phone Field #}
              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Phone Number</label>
                <div class=\"flex\">
                  <select
                          id=\"countrySelect\"
                          class=\"w-1/3 mr-2 placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow\"
                  >
                    <option value=\"US\" data-code=\"+1\">United States (+1)</option>
                    <option value=\"TN\" data-code=\"+216\">Tunisia (+216)</option>
                    <option value=\"FR\" data-code=\"+33\">France (+33)</option>
                    <option value=\"DE\" data-code=\"+49\">Germany (+49)</option>
                    <option value=\"GB\" data-code=\"+44\">UK (+44)</option>
                  </select>
                  {{ form_widget(registrationForm.phone, {
                    'attr': {
                      'id': 'phoneInput',
                      'class': 'w-full placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow',
                      'placeholder': 'Phone number'
                    }
                  }) }}
                </div>
                {{ form_errors(registrationForm.phone, { 'attr': {'class': 'text-red-500 text-xs mt-1'} }) }}
              </div>

              {# Home Address Field #}
              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Home Address</label>
                {{ form_widget(registrationForm.homeAddress, {
                  'attr': {
                    'class': 'placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow',
                    'placeholder': 'Home Address'
                  }
                }) }}
                {{ form_errors(registrationForm.homeAddress, { 'attr': {'class': 'text-red-500 text-xs mt-1'} }) }}
              </div>

              {# License Field #}
              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">License Number</label>
                {{ form_widget(registrationForm.license, {
                  'attr': {
                    'class': 'placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow',
                    'placeholder': 'Enter your license number'
                  }
                }) }}
                {{ form_errors(registrationForm.license, { 'attr': {'class': 'text-red-500 text-xs mt-1'} }) }}
              </div>

              {# Image Upload Field #}
              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Profile Image</label>
                {{ form_widget(registrationForm.image, {
                  'attr': {
                    'class': 'text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow',
                  }
                }) }}
                <p class=\"mt-1 text-xs text-gray-500\">Allowed file types: Any image format. Max size: 50MB.</p>
                {{ form_errors(registrationForm.image, { 'attr': {'class': 'text-red-500 text-xs mt-1'} }) }}
              </div>

              {# Password Field #}
              <div class=\"mb-4\">
                <label class=\"inline-block mb-2 ml-1 text-xs font-bold text-slate-700\">Password</label>
                {{ form_widget(registrationForm.plainPassword, {
                  'attr': {
                    'class': 'placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow',
                    'placeholder': 'Password'
                  }
                }) }}
                {{ form_errors(registrationForm.plainPassword, { 'attr': {'class': 'text-red-500 text-xs mt-1'} }) }}
              </div>

              {# Terms Checkbox #}
              <div class=\"min-h-6 pl-7 mb-4\">
                {{ form_widget(registrationForm.agreeTerms, {
                  'attr': {
                    'class': 'w-4.8 h-4.8 ease -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-blue-500 checked:to-violet-500 after:text-xxs after:font-awesome after:duration-250 after:ease-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-[\\'\\f00c\\'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100'
                  }
                }) }}
                <label for=\"agreeTerms\" class=\"mb-2 ml-1 font-normal cursor-pointer text-sm text-slate-700\">
                  I agree to the <a href=\"#\" class=\"font-bold\">Terms and Conditions</a>
                </label>
                {{ form_errors(registrationForm.agreeTerms, { 'attr': {'class': 'text-red-500 text-xs mt-1'} }) }}
              </div>

              {# Submit Button #}
              <div class=\"text-center\">
                <button type=\"submit\" class=\"inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white\">
                  Sign up
                </button>
              </div>

              <p class=\"mt-4 mb-0 leading-normal text-sm\">
                Already have an account?
                <a href=\"{{ path('app_login') }}\" class=\"font-bold text-slate-700\">Sign in</a>
              </p>

              {{ form_rest(registrationForm) }}
              {{ form_end(registrationForm) }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

  {% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/argon-dashboard-tailwind.js') }}\"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const countrySelect = document.getElementById('countrySelect');
        const phoneInput = document.getElementById('phoneInput');
        const form = document.querySelector('form');

        form.addEventListener('submit', function(e) {
          const selectedOption = countrySelect.options[countrySelect.selectedIndex];
          const countryCode = selectedOption.getAttribute('data-code');
          const phoneNumber = phoneInput.value;

          if (!phoneNumber.startsWith(countryCode)) {
            phoneInput.value = countryCode + phoneNumber;
          }
        });
      });
    </script>
  {% endblock %}
{% endblock %}", "auth/registration/register.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\auth\\registration\\register.html.twig");
    }
}
