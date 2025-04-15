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

        yield "Leave a Complaint";
        
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
    .container {
        font-family: 'Arial', sans-serif;
        max-width: 600px;
        margin: 50px auto;
        padding: 0 15px;
    }

    .card {
        background-color: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 30px;
    }

    h2 {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
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
        background-color: #87CEEB;
        border: none;
        padding: 12px 24px;
        font-size: 18px;
        border-radius: 50px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #5b9bd5;
        transform: translateY(-2px);
    }

    .text-center {
        text-align: center;
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }

    .mt-4 {
        margin-top: 1.5rem;
    }
    
    /* Initially hide the taxi and vehicle fields */
    .taxi-field-container,
    .vehicle-field-container {
        display: none;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 88
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

        // line 89
        yield "<div class=\"container\">
    ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "

    <div class=\"card\">
        <h2>Leave a Complaint</h2>

        ";
        // line 96
        yield "        <div class=\"mb-4\">
            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "type", [], "any", false, false, false, 97), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Complaint Type"]);
        yield "
            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "type", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-select complaint-type-select"]]);
        yield "
            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "type", [], "any", false, false, false, 99), 'errors');
        yield "
        </div>

        ";
        // line 103
        yield "        <div class=\"mb-4 taxi-field-container\">
            ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "taxi", [], "any", false, false, false, 104), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taxi Immatriculation"]);
        yield "
            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "taxi", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "taxi", [], "any", false, false, false, 106), 'errors');
        yield "
        </div>

        ";
        // line 110
        yield "        <div class=\"mb-4 vehicle-field-container\">
            ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "vehicle", [], "any", false, false, false, 111), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Vehicle License Plate"]);
        yield "
            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "vehicle", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "vehicle", [], "any", false, false, false, 113), 'errors');
        yield "
        </div>

        ";
        // line 117
        yield "        <div class=\"mb-4\">
            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "commentaire", [], "any", false, false, false, 118), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "commentaire", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Write your description here..."]]);
        yield "
            ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "commentaire", [], "any", false, false, false, 120), 'errors');
        yield "
        </div>

        ";
        // line 124
        yield "        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 126, $this->source); })()), "Submit")) : ("Submit")), "html", null, true);
        yield "
            </button>
        </div>
    </div>

    ";
        // line 131
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'form_end');
        yield "
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const typeSelect = document.querySelector('.complaint-type-select');
    const taxiContainer = document.querySelector('.taxi-field-container');
    const vehicleContainer = document.querySelector('.vehicle-field-container');

    function checkComplaintType() {
        const selectedOption = typeSelect.options[typeSelect.selectedIndex];
        const selectedText = selectedOption ? selectedOption.text.trim().toLowerCase() : '';
        const selectedValue = typeSelect.value;

        // Show taxi field if \"taxi complaint\" is chosen
        if (selectedText.includes('taxi') || selectedValue.includes('taxi')) {
            taxiContainer.style.display = 'block';
            vehicleContainer.style.display = 'none';
        } 
        // Show vehicle field if \"vehicle complaint\" is chosen
        else if (selectedText.includes('vehicle') || selectedValue.includes('vehicle')) {
            vehicleContainer.style.display = 'block';
            taxiContainer.style.display = 'none';
        } 
        // Hide both if neither
        else {
            taxiContainer.style.display = 'none';
            vehicleContainer.style.display = 'none';
        }
    }

    // Run the check initially
    checkComplaintType();

    // Add event listener for changes
    typeSelect.addEventListener('change', checkComplaintType);
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
        return array (  296 => 131,  288 => 126,  284 => 124,  278 => 120,  274 => 119,  270 => 118,  267 => 117,  261 => 113,  257 => 112,  253 => 111,  250 => 110,  244 => 106,  240 => 105,  236 => 104,  233 => 103,  227 => 99,  223 => 98,  219 => 97,  216 => 96,  208 => 90,  205 => 89,  192 => 88,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Leave a Complaint{% endblock %}

{% block stylesheets %}
<style>
    .container {
        font-family: 'Arial', sans-serif;
        max-width: 600px;
        margin: 50px auto;
        padding: 0 15px;
    }

    .card {
        background-color: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 30px;
    }

    h2 {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
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
        background-color: #87CEEB;
        border: none;
        padding: 12px 24px;
        font-size: 18px;
        border-radius: 50px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #5b9bd5;
        transform: translateY(-2px);
    }

    .text-center {
        text-align: center;
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }

    .mt-4 {
        margin-top: 1.5rem;
    }
    
    /* Initially hide the taxi and vehicle fields */
    .taxi-field-container,
    .vehicle-field-container {
        display: none;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}

    <div class=\"card\">
        <h2>Leave a Complaint</h2>

        {# Complaint Type Field #}
        <div class=\"mb-4\">
            {{ form_label(form.type, 'Complaint Type', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.type, {'attr': {'class': 'form-select complaint-type-select'}}) }}
            {{ form_errors(form.type) }}
        </div>

        {# Taxi Immatriculation Field (initially hidden) #}
        <div class=\"mb-4 taxi-field-container\">
            {{ form_label(form.taxi, 'Taxi Immatriculation', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.taxi, {'attr': {'class': 'form-select'}}) }}
            {{ form_errors(form.taxi) }}
        </div>

        {# Vehicle License Plate Field (initially hidden) #}
        <div class=\"mb-4 vehicle-field-container\">
            {{ form_label(form.vehicle, 'Vehicle License Plate', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.vehicle, {'attr': {'class': 'form-select'}}) }}
            {{ form_errors(form.vehicle) }}
        </div>

        {# Comment Field #}
        <div class=\"mb-4\">
            {{ form_label(form.commentaire, 'Description', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.commentaire, {'attr': {'class': 'form-control', 'placeholder': 'Write your description here...'}}) }}
            {{ form_errors(form.commentaire) }}
        </div>

        {# Submit Button #}
        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-primary\">
                {{ button_label|default('Submit') }}
            </button>
        </div>
    </div>

    {{ form_end(form) }}
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const typeSelect = document.querySelector('.complaint-type-select');
    const taxiContainer = document.querySelector('.taxi-field-container');
    const vehicleContainer = document.querySelector('.vehicle-field-container');

    function checkComplaintType() {
        const selectedOption = typeSelect.options[typeSelect.selectedIndex];
        const selectedText = selectedOption ? selectedOption.text.trim().toLowerCase() : '';
        const selectedValue = typeSelect.value;

        // Show taxi field if \"taxi complaint\" is chosen
        if (selectedText.includes('taxi') || selectedValue.includes('taxi')) {
            taxiContainer.style.display = 'block';
            vehicleContainer.style.display = 'none';
        } 
        // Show vehicle field if \"vehicle complaint\" is chosen
        else if (selectedText.includes('vehicle') || selectedValue.includes('vehicle')) {
            vehicleContainer.style.display = 'block';
            taxiContainer.style.display = 'none';
        } 
        // Hide both if neither
        else {
            taxiContainer.style.display = 'none';
            vehicleContainer.style.display = 'none';
        }
    }

    // Run the check initially
    checkComplaintType();

    // Add event listener for changes
    typeSelect.addEventListener('change', checkComplaintType);
});
</script>
{% endblock %}
", "avis/_form.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\avis\\_form.html.twig");
    }
}
