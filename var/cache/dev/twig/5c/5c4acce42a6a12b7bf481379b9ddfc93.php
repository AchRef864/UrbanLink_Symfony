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

/* avis/_form.html.twig */
class __TwigTemplate_f75e4a2acfd9a4546f414c3015c469bf extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/_form.html.twig", 1);
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

        yield "Leave a complaint";
        
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
        yield "<style>
    /* Updated container styles to center the content */
    .container {
        font-family: 'Arial', sans-serif;
        max-width: 600px;
        margin: 50px auto; /* centers the container horizontally */
        padding: 0 15px;
    }

    .card {
        background-color: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 30px;
        /* Remove margin-right so it stays centered */
    }

    h2 {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: 600;
        margin-bottom: 8px;
        color: #555;
        font-size: 16px;
    }

    .form-select, .form-control {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ced4da;
        font-size: 16px;
        background-color: #f9f9f9;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-select:focus, .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.2);
        background-color: #fff;
    }

    /* Sky blue color for the button */
    .btn-primary {
        background-color: #87CEEB; /* Sky blue color */
        border: none;
        padding: 12px 24px;
        font-size: 18px;
        border-radius: 50px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #5b9bd5; /* Slightly darker blue */
        transform: translateY(-2px);
    }

    .text-center {
        text-align: center;
    }

    .needs-validation .form-control:invalid, 
    .needs-validation .form-select:invalid {
        border-color: #dc3545;
    }

    .needs-validation .form-control:valid, 
    .needs-validation .form-select:valid {
        border-color: #28a745;
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }

    .mt-4 {
        margin-top: 1.5rem;
    }

    .shadow-sm {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
    }

    .rounded-4 {
        border-radius: 1rem;
    }

    /* Pagination styles remain unchanged */
    .pagination {
        display: flex;
        justify-content: center;
        padding: 1rem 0;
        list-style: none;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a {
        display: inline-block;
        padding: 8px 12px;
        font-size: 14px;
        font-weight: bold;
        color: #007bff;
        text-decoration: none;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .pagination a:hover {
        background-color: #007bff;
        color: white;
    }

    .pagination .active a {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }

    .pagination .disabled a {
        color: #6c757d;
        pointer-events: none;
        background-color: #f8f9fa;
        border-color: #dee2e6;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
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

        // line 144
        yield "<div class=\"container\">
    ";
        // line 145
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "

    <div class=\"card shadow-sm p-4 mb-4 rounded-4\">
        <h2 class=\"text-center\">Leave a complaint</h2>

        <!-- Type Field -->
        <div class=\"mb-4\">
            ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "type", [], "any", false, false, false, 152), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Complaint Type"]);
        yield "
            <div>
                ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "type", [], "any", false, false, false, 154), 'widget', ["attr" => ["class" => "form-select", "aria-label" => "Select complaint type"]]);
        // line 159
        yield "
            </div>
            ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "type", [], "any", false, false, false, 161), 'errors');
        yield "
        </div>

        <!-- Comment Field -->
        <div class=\"mb-4\">
            ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "commentaire", [], "any", false, false, false, 166), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Your Comment"]);
        yield "
            <div>
                ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "commentaire", [], "any", false, false, false, 168), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Write your comment here...", "aria-label" => "Write your comment"]]);
        // line 174
        yield "
            </div>
            ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "commentaire", [], "any", false, false, false, 176), 'errors');
        yield "
        </div>

        <!-- Submit Button -->
        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill px-5\">
                ";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 182, $this->source); })()), "Submit")) : ("Submit")), "html", null, true);
        yield "
            </button>
        </div>
    </div>

    ";
        // line 187
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), 'form_end');
        yield "
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
        return "avis/_form.html.twig";
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
        return array (  320 => 187,  312 => 182,  303 => 176,  299 => 174,  297 => 168,  292 => 166,  284 => 161,  280 => 159,  278 => 154,  273 => 152,  263 => 145,  260 => 144,  247 => 143,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Leave a complaint{% endblock %}

{% block stylesheets %}
<style>
    /* Updated container styles to center the content */
    .container {
        font-family: 'Arial', sans-serif;
        max-width: 600px;
        margin: 50px auto; /* centers the container horizontally */
        padding: 0 15px;
    }

    .card {
        background-color: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 30px;
        /* Remove margin-right so it stays centered */
    }

    h2 {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: 600;
        margin-bottom: 8px;
        color: #555;
        font-size: 16px;
    }

    .form-select, .form-control {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ced4da;
        font-size: 16px;
        background-color: #f9f9f9;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-select:focus, .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.2);
        background-color: #fff;
    }

    /* Sky blue color for the button */
    .btn-primary {
        background-color: #87CEEB; /* Sky blue color */
        border: none;
        padding: 12px 24px;
        font-size: 18px;
        border-radius: 50px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #5b9bd5; /* Slightly darker blue */
        transform: translateY(-2px);
    }

    .text-center {
        text-align: center;
    }

    .needs-validation .form-control:invalid, 
    .needs-validation .form-select:invalid {
        border-color: #dc3545;
    }

    .needs-validation .form-control:valid, 
    .needs-validation .form-select:valid {
        border-color: #28a745;
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }

    .mt-4 {
        margin-top: 1.5rem;
    }

    .shadow-sm {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
    }

    .rounded-4 {
        border-radius: 1rem;
    }

    /* Pagination styles remain unchanged */
    .pagination {
        display: flex;
        justify-content: center;
        padding: 1rem 0;
        list-style: none;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a {
        display: inline-block;
        padding: 8px 12px;
        font-size: 14px;
        font-weight: bold;
        color: #007bff;
        text-decoration: none;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .pagination a:hover {
        background-color: #007bff;
        color: white;
    }

    .pagination .active a {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }

    .pagination .disabled a {
        color: #6c757d;
        pointer-events: none;
        background-color: #f8f9fa;
        border-color: #dee2e6;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}

    <div class=\"card shadow-sm p-4 mb-4 rounded-4\">
        <h2 class=\"text-center\">Leave a complaint</h2>

        <!-- Type Field -->
        <div class=\"mb-4\">
            {{ form_label(form.type, 'Complaint Type', {'label_attr': {'class': 'form-label'}}) }}
            <div>
                {{ form_widget(form.type, {
                    'attr': {
                        'class': 'form-select',
                        'aria-label': 'Select complaint type'
                    }
                }) }}
            </div>
            {{ form_errors(form.type) }}
        </div>

        <!-- Comment Field -->
        <div class=\"mb-4\">
            {{ form_label(form.commentaire, 'Your Comment', {'label_attr': {'class': 'form-label'}}) }}
            <div>
                {{ form_widget(form.commentaire, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Write your comment here...',
                        'aria-label': 'Write your comment'
                    }
                }) }}
            </div>
            {{ form_errors(form.commentaire) }}
        </div>

        <!-- Submit Button -->
        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill px-5\">
                {{ button_label|default('Submit') }}
            </button>
        </div>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}
", "avis/_form.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\avis\\_form.html.twig");
    }
}
