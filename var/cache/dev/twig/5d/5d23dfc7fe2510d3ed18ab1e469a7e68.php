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

/* admin/users/confirm_delete.html.twig */
class __TwigTemplate_1a86477f5c263775607c471a736f49ff extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/confirm_delete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/confirm_delete.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/confirm_delete.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Confirm User Deletion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container mt-5\">
        <div class=\"card\">
            <div class=\"card-header bg-danger text-white\">
                <h2>Confirm User Deletion</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"lead\">Are you sure you want to delete this user?</p>

                <div class=\"user-details mb-4\">
                    <h4>User Details:</h4>
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\"><strong>ID:</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</li>
                        <li class=\"list-group-item\"><strong>Name:</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</li>
                        <li class=\"list-group-item\"><strong>Email:</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "html", null, true);
        yield "</li>
                        <li class=\"list-group-item\">
                            <strong>Role:</strong>
                            <span class=\"badge bg-";
        // line 23
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "role", [], "any", false, false, false, 23) == "admin")) ? ("danger") : ("primary"));
        yield "\">
                            ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "role", [], "any", false, false, false, 24)), "html", null, true);
        yield "
                        </span>
                        </li>
                        <li class=\"list-group-item\">
                            <strong>Status:</strong>
                            ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "isBlocked", [], "method", false, false, false, 29)) {
            // line 30
            yield "                                <span class=\"badge bg-danger\">Blocked</span>
                            ";
        } else {
            // line 32
            yield "                                <span class=\"badge bg-success\">Active</span>
                            ";
        }
        // line 34
        yield "                        </li>
                    </ul>
                </div>

                <form method=\"post\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_perform_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39))), "html", null, true);
        yield "\">

                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Cancel
                        </a>
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"fas fa-trash\"></i> Confirm Delete
                        </button>
                    </div>
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
        return "admin/users/confirm_delete.html.twig";
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
        return array (  165 => 42,  159 => 39,  155 => 38,  149 => 34,  145 => 32,  141 => 30,  139 => 29,  131 => 24,  127 => 23,  121 => 20,  117 => 19,  113 => 18,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/users/confirm_delete.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Confirm User Deletion{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"card\">
            <div class=\"card-header bg-danger text-white\">
                <h2>Confirm User Deletion</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"lead\">Are you sure you want to delete this user?</p>

                <div class=\"user-details mb-4\">
                    <h4>User Details:</h4>
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\"><strong>ID:</strong> {{ user.id }}</li>
                        <li class=\"list-group-item\"><strong>Name:</strong> {{ user.name }}</li>
                        <li class=\"list-group-item\"><strong>Email:</strong> {{ user.email }}</li>
                        <li class=\"list-group-item\">
                            <strong>Role:</strong>
                            <span class=\"badge bg-{{ user.role == 'admin' ? 'danger' : 'primary' }}\">
                            {{ user.role|capitalize }}
                        </span>
                        </li>
                        <li class=\"list-group-item\">
                            <strong>Status:</strong>
                            {% if user.isBlocked() %}
                                <span class=\"badge bg-danger\">Blocked</span>
                            {% else %}
                                <span class=\"badge bg-success\">Active</span>
                            {% endif %}
                        </li>
                    </ul>
                </div>

                <form method=\"post\" action=\"{{ path('admin_user_perform_delete', {'id': user.id}) }}\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">

                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('admin_user_delete') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Cancel
                        </a>
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"fas fa-trash\"></i> Confirm Delete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "admin/users/confirm_delete.html.twig", "C:\\Users\\sbiss\\OneDrive - ESPRIT\\Documents\\urbanlink_Sy\\templates\\admin\\users\\confirm_delete.html.twig");
    }
}
