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

        yield "Leave a Review";
        
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
    /* Your CSS remains unchanged */
    .container {
        font-family: 'Arial', sans-serif;
        margin-left: 280px;
    }

    .card {
        background-color: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 30px;
        margin-right: 30px;
    }

    h2 {
        font-size: 28px;
        font-weight: bold;
        color: #333;
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

    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 12px 24px;
        font-size: 18px;
        border-radius: 50px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 97
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

        // line 98
        yield "<div class=\"container\">
    ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "

    <div class=\"card shadow-sm p-4 mb-4 rounded-4\">
        <h2 class=\"mb-4 text-center\">Leave a Review</h2>

        <!-- Type Field -->
        <div class=\"mb-4\">
            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "type", [], "any", false, false, false, 106), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Complaint Type"]);
        yield "
            <div>
                ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "type", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-select", "aria-label" => "Select complaint type"]]);
        // line 113
        yield "
            </div>
            ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "type", [], "any", false, false, false, 115), 'errors');
        yield "
        </div>

        <!-- Comment Field -->
        <div class=\"mb-4\">
            ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "commentaire", [], "any", false, false, false, 120), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Your Comment"]);
        yield "
            <div>
                ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "commentaire", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Write your comment here...", "aria-label" => "Write your comment"]]);
        // line 128
        yield "
            </div>
            ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "commentaire", [], "any", false, false, false, 130), 'errors');
        yield "
        </div>

        <!-- Submit Button -->
        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill px-5\">
                ";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 136, $this->source); })()), "Submit")) : ("Submit")), "html", null, true);
        yield "
            </button>
        </div>
    </div>

    ";
        // line 141
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), 'form_end');
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
        return array (  274 => 141,  266 => 136,  257 => 130,  253 => 128,  251 => 122,  246 => 120,  238 => 115,  234 => 113,  232 => 108,  227 => 106,  217 => 99,  214 => 98,  201 => 97,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Leave a Review{% endblock %}

{% block stylesheets %}
<style>
    /* Your CSS remains unchanged */
    .container {
        font-family: 'Arial', sans-serif;
        margin-left: 280px;
    }

    .card {
        background-color: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 30px;
        margin-right: 30px;
    }

    h2 {
        font-size: 28px;
        font-weight: bold;
        color: #333;
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

    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 12px 24px;
        font-size: 18px;
        border-radius: 50px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
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
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}

    <div class=\"card shadow-sm p-4 mb-4 rounded-4\">
        <h2 class=\"mb-4 text-center\">Leave a Review</h2>

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
