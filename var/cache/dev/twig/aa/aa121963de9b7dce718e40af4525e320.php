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

/* admin/users/_search_form.html.twig */
class __TwigTemplate_dd7431d54a42e4dbadff9ef3b117d48a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/_search_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/_search_form.html.twig"));

        // line 2
        yield "<div class=\"card mb-4\">
    <div class=\"card-body\">
        <form method=\"get\" action=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_manage");
        yield "\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <input type=\"text\" name=\"search\" class=\"form-control\"
                           placeholder=\"Search by name or email\"
                           value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "query", [], "any", false, false, false, 9), "get", ["search"], "method", false, false, false, 9), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <select name=\"role\" class=\"form-control\">
                        <option value=\"\">All Roles</option>
                        <option value=\"admin\" ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", ["role"], "method", false, false, false, 14) == "admin")) {
            yield "selected";
        }
        yield ">Admin</option>
                        <option value=\"client\" ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "query", [], "any", false, false, false, 15), "get", ["role"], "method", false, false, false, 15) == "client")) {
            yield "selected";
        }
        yield ">Client</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-search\"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/users/_search_form.html.twig";
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
        return array (  74 => 15,  68 => 14,  60 => 9,  52 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/users/_search_form.html.twig #}
<div class=\"card mb-4\">
    <div class=\"card-body\">
        <form method=\"get\" action=\"{{ path('admin_user_manage') }}\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <input type=\"text\" name=\"search\" class=\"form-control\"
                           placeholder=\"Search by name or email\"
                           value=\"{{ app.request.query.get('search') }}\">
                </div>
                <div class=\"col-md-3\">
                    <select name=\"role\" class=\"form-control\">
                        <option value=\"\">All Roles</option>
                        <option value=\"admin\" {% if app.request.query.get('role') == 'admin' %}selected{% endif %}>Admin</option>
                        <option value=\"client\" {% if app.request.query.get('role') == 'client' %}selected{% endif %}>Client</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-search\"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>", "admin/users/_search_form.html.twig", "C:\\Users\\sbiss\\OneDrive - ESPRIT\\Documents\\urbanlink_Sy\\templates\\admin\\users\\_search_form.html.twig");
    }
}
