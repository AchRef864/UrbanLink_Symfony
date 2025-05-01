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

/* auth/reset_password/forgot_password.html.twig */
class __TwigTemplate_ef1c760fe10501829230a54556f0378f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset_password/forgot_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset_password/forgot_password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/reset_password/forgot_password.html.twig", 2);
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

        yield "Reset Password Request";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <style>
        .auth-card {
            max-width: 480px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: white;
        }
        .auth-header {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 24px;
            text-align: center;
        }
        .auth-body {
            padding: 32px;
        }
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .btn-primary {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }
        .help-text {
            color: #6b7280;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
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

        // line 59
        yield "    <body class=\"font-sans antialiased bg-gray-50\">
    <div class=\"min-h-screen flex items-center justify-center p-4\">
        <div class=\"auth-card w-full\">
            <div class=\"auth-header\">
                <h1 class=\"text-2xl font-bold\">Reset Your Password</h1>
                <p class=\"mt-2 opacity-90\">Enter your email to receive a reset link</p>
            </div>

            <div class=\"auth-body\">
                ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 68, $this->source); })()), 'form_start');
        yield "
                <div class=\"mb-6\">
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"]]);
        yield "
                    <div class=\"relative\">
                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "your@email.com"]]);
        yield "
                        <div class=\"absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none\">
                            <i class=\"fas fa-envelope text-gray-400\"></i>
                        </div>
                    </div>
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'errors');
        yield "
                    <p class=\"help-text\">We'll send you a link to reset your password</p>
                </div>

                <button type=\"submit\" class=\"btn-primary w-full flex items-center justify-center\">
                    <i class=\"fas fa-paper-plane mr-2\"></i>
                    Send Reset Link
                </button>

                <div class=\"mt-4 text-center\">
                    <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-sm text-blue-600 hover:text-blue-800\">
                        <i class=\"fas fa-arrow-left mr-1\"></i> Back to login
                    </a>
                </div>
                ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 91, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
    </body>
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
        return "auth/reset_password/forgot_password.html.twig";
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
        return array (  225 => 91,  218 => 87,  205 => 77,  197 => 72,  192 => 70,  187 => 68,  176 => 59,  163 => 58,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/auth/reset_password/forgot_password.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Reset Password Request{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <style>
        .auth-card {
            max-width: 480px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: white;
        }
        .auth-header {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 24px;
            text-align: center;
        }
        .auth-body {
            padding: 32px;
        }
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .btn-primary {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }
        .help-text {
            color: #6b7280;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
    </style>
{% endblock %}

{% block body %}
    <body class=\"font-sans antialiased bg-gray-50\">
    <div class=\"min-h-screen flex items-center justify-center p-4\">
        <div class=\"auth-card w-full\">
            <div class=\"auth-header\">
                <h1 class=\"text-2xl font-bold\">Reset Your Password</h1>
                <p class=\"mt-2 opacity-90\">Enter your email to receive a reset link</p>
            </div>

            <div class=\"auth-body\">
                {{ form_start(requestForm) }}
                <div class=\"mb-6\">
                    {{ form_label(requestForm.email, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    <div class=\"relative\">
                        {{ form_widget(requestForm.email, {'attr': {'class': 'form-input', 'placeholder': 'your@email.com'}}) }}
                        <div class=\"absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none\">
                            <i class=\"fas fa-envelope text-gray-400\"></i>
                        </div>
                    </div>
                    {{ form_errors(requestForm.email) }}
                    <p class=\"help-text\">We'll send you a link to reset your password</p>
                </div>

                <button type=\"submit\" class=\"btn-primary w-full flex items-center justify-center\">
                    <i class=\"fas fa-paper-plane mr-2\"></i>
                    Send Reset Link
                </button>

                <div class=\"mt-4 text-center\">
                    <a href=\"{{ path('app_login') }}\" class=\"text-sm text-blue-600 hover:text-blue-800\">
                        <i class=\"fas fa-arrow-left mr-1\"></i> Back to login
                    </a>
                </div>
                {{ form_end(requestForm) }}
            </div>
        </div>
    </div>
    </body>
{% endblock %}", "auth/reset_password/forgot_password.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\auth\\reset_password\\forgot_password.html.twig");
    }
}
