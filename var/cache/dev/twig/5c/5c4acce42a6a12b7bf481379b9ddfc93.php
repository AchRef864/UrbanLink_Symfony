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
    
    /* Initially hide the taxi field */
    .taxi-field-container {
        display: none;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
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

        // line 87
        yield "<div class=\"container\">
    ";
        // line 88
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "

    <div class=\"card\">
        <h2>Leave a Complaint</h2>

        ";
        // line 94
        yield "        <div class=\"mb-4\">
            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "type", [], "any", false, false, false, 95), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Complaint Type"]);
        yield "
            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "type", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-select complaint-type-select"]]);
        yield "
            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "type", [], "any", false, false, false, 97), 'errors');
        yield "
        </div>

        ";
        // line 101
        yield "        <div class=\"mb-4 taxi-field-container\">
            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "taxi", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taxi Immatriculation"]);
        yield "
            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "taxi", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "taxi", [], "any", false, false, false, 104), 'errors');
        yield "
        </div>

        ";
        // line 108
        yield "        <div class=\"mb-4\">
            ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "commentaire", [], "any", false, false, false, 109), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "commentaire", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Write your description here..."]]);
        yield "
            ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "commentaire", [], "any", false, false, false, 111), 'errors');
        yield "
        </div>

        ";
        // line 115
        yield "        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 117, $this->source); })()), "Submit")) : ("Submit")), "html", null, true);
        yield "
            </button>
        </div>
    </div>

    ";
        // line 122
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'form_end');
        yield "
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all necessary elements
    const typeSelect = document.querySelector('.complaint-type-select');
    const taxiFieldContainer = document.querySelector('.taxi-field-container');
    
    // Make sure we found the elements
    if (!typeSelect || !taxiFieldContainer) {
        console.error('Could not find required elements:', {
            typeSelect,
            taxiFieldContainer
        });
        return;
    }
    
    console.log('Found elements:', {
        typeSelect,
        taxiFieldContainer
    });

    // Function to check and toggle the taxi field
    function checkComplaintType() {
        // Get the selected option text rather than value
        const selectedOption = typeSelect.options[typeSelect.selectedIndex];
        const selectedText = selectedOption ? selectedOption.text.trim().toLowerCase() : '';
        const selectedValue = typeSelect.value;
        
        console.log('Selected:', {
            text: selectedText,
            value: selectedValue,
            index: typeSelect.selectedIndex
        });
        
        // Check if the selected option contains \"taxi\"
        if (selectedText.includes('taxi') || selectedValue.includes('taxi')) {
            taxiFieldContainer.style.display = 'block';
            console.log('Showing taxi field');
        } else {
            taxiFieldContainer.style.display = 'none';
            console.log('Hiding taxi field');
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
        return array (  277 => 122,  269 => 117,  265 => 115,  259 => 111,  255 => 110,  251 => 109,  248 => 108,  242 => 104,  238 => 103,  234 => 102,  231 => 101,  225 => 97,  221 => 96,  217 => 95,  214 => 94,  206 => 88,  203 => 87,  190 => 86,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
    
    /* Initially hide the taxi field */
    .taxi-field-container {
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

        {# Taxi Immatriculation Field #}
        <div class=\"mb-4 taxi-field-container\">
            {{ form_label(form.taxi, 'Taxi Immatriculation', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.taxi, {'attr': {'class': 'form-select'}}) }}
            {{ form_errors(form.taxi) }}
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
    // Get all necessary elements
    const typeSelect = document.querySelector('.complaint-type-select');
    const taxiFieldContainer = document.querySelector('.taxi-field-container');
    
    // Make sure we found the elements
    if (!typeSelect || !taxiFieldContainer) {
        console.error('Could not find required elements:', {
            typeSelect,
            taxiFieldContainer
        });
        return;
    }
    
    console.log('Found elements:', {
        typeSelect,
        taxiFieldContainer
    });

    // Function to check and toggle the taxi field
    function checkComplaintType() {
        // Get the selected option text rather than value
        const selectedOption = typeSelect.options[typeSelect.selectedIndex];
        const selectedText = selectedOption ? selectedOption.text.trim().toLowerCase() : '';
        const selectedValue = typeSelect.value;
        
        console.log('Selected:', {
            text: selectedText,
            value: selectedValue,
            index: typeSelect.selectedIndex
        });
        
        // Check if the selected option contains \"taxi\"
        if (selectedText.includes('taxi') || selectedValue.includes('taxi')) {
            taxiFieldContainer.style.display = 'block';
            console.log('Showing taxi field');
        } else {
            taxiFieldContainer.style.display = 'none';
            console.log('Hiding taxi field');
        }
    }
    
    // Run the check initially
    checkComplaintType();
    
    // Add event listener for changes
    typeSelect.addEventListener('change', checkComplaintType);
});
</script>
{% endblock %}", "avis/_form.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\avis\\_form.html.twig");
    }
}
