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

/* security/login.html.twig */
class __TwigTemplate_472f4976afc4099db55f4bd4d90934c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div style=\"margin-left: 280px;\">
  <div class=\"container mx-auto px-4 py-6\">
    <div class=\"max-w-md mx-auto bg-white p-8 rounded-lg shadow-md\">
      <h1 class=\"text-2xl font-bold mb-6 text-center\">Connexion</h1>
      
      ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) {
            // line 12
            yield "        <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\">
          ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 16
        yield "
      <form method=\"post\" action=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
        <div class=\"mb-4\">
          <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-700 mb-1\">Email</label>
          <input type=\"email\" 
                 value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\" 
                 name=\"email\" 
                 id=\"inputEmail\" 
                 class=\"w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500\" 
                 required 
                 autofocus
                 autocomplete=\"email\">
        </div>
        
        <div class=\"mb-6\">
          <label for=\"inputPassword\" class=\"block text-sm font-medium text-gray-700 mb-1\">Mot de passe</label>
          <input type=\"password\" 
                 name=\"password\" 
                 id=\"inputPassword\" 
                 class=\"w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500\" 
                 required
                 autocomplete=\"current-password\">
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

        <div class=\"flex items-center justify-between mb-4\">
          <div class=\"flex items-center\">
            <input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" class=\"h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded\">
            <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-700\">Se souvenir de moi</label>
          </div>
          
          <div class=\"text-sm\">
            <a href=\"#\" class=\"font-medium text-blue-600 hover:text-blue-500\">Mot de passe oublié?</a>
          </div>
        </div>

        <button type=\"submit\" class=\"w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2\">
          Se connecter
        </button>
      </form>
      
      
    </div>
  </div>
</div>
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
        return "security/login.html.twig";
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
        return array (  150 => 40,  128 => 21,  121 => 17,  118 => 16,  112 => 13,  109 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
<div style=\"margin-left: 280px;\">
  <div class=\"container mx-auto px-4 py-6\">
    <div class=\"max-w-md mx-auto bg-white p-8 rounded-lg shadow-md\">
      <h1 class=\"text-2xl font-bold mb-6 text-center\">Connexion</h1>
      
      {% if error %}
        <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\">
          {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
      {% endif %}

      <form method=\"post\" action=\"{{ path('app_login') }}\">
        <div class=\"mb-4\">
          <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-700 mb-1\">Email</label>
          <input type=\"email\" 
                 value=\"{{ last_username }}\" 
                 name=\"email\" 
                 id=\"inputEmail\" 
                 class=\"w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500\" 
                 required 
                 autofocus
                 autocomplete=\"email\">
        </div>
        
        <div class=\"mb-6\">
          <label for=\"inputPassword\" class=\"block text-sm font-medium text-gray-700 mb-1\">Mot de passe</label>
          <input type=\"password\" 
                 name=\"password\" 
                 id=\"inputPassword\" 
                 class=\"w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500\" 
                 required
                 autocomplete=\"current-password\">
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

        <div class=\"flex items-center justify-between mb-4\">
          <div class=\"flex items-center\">
            <input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" class=\"h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded\">
            <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-700\">Se souvenir de moi</label>
          </div>
          
          <div class=\"text-sm\">
            <a href=\"#\" class=\"font-medium text-blue-600 hover:text-blue-500\">Mot de passe oublié?</a>
          </div>
        </div>

        <button type=\"submit\" class=\"w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2\">
          Se connecter
        </button>
      </form>
      
      
    </div>
  </div>
</div>
{% endblock %}", "security/login.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\Security\\login.html.twig");
    }
}
