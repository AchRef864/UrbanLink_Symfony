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

/* front_office/Avis/_form.html.twig */
class __TwigTemplate_367f3090b814df08ac128a11ce025f52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front_office/Avis/_form.html.twig", 1);
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
        width: 100%;
        margin: 0;
        padding: 0 15px;
    }

    .form-card {
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
        border: 1px solid #e5e7eb;
        margin: 2rem 0;
        width: 100%;
    }

    .form-header {
        background-color: rgb(163, 209, 207);
        padding: 1.5rem;
        border-radius: 0.5rem 0.5rem 0 0;
    }

    .form-title {
        color: rgb(0, 11, 222);
        font-size: 1.5rem;
        font-weight: bold;
        margin: 0;
    }

    .form-content {
        padding: 2rem;
        width: 100%;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 1.5rem;
        width: 100%;
    }

    @media (min-width: 768px) {
        .form-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .container {
            padding: 0;
        }
    }

    .form-label {
        display: block;
        font-weight: 500;
        margin-bottom: 0.5rem;
        color: #374151;
    }

    .form-input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #e5e7eb;
        border-radius: 0.375rem;
        background-color: #f9fafb;
        box-sizing: border-box;
    }

    .form-input:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    .error-message {
        color: #ef4444;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    .submit-btn {
        background-color: #FFEB3B;
        color: #1f2937;
        font-weight: bold;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 0.5rem;
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
        width: 100%;
    }

    @media (min-width: 768px) {
        .submit-btn {
            width: auto;
        }
    }

    .submit-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .back-link {
        color: #6b7280;
        font-size: 0.875rem;
        text-decoration: none;
        transition: color 0.2s;
        display: block;
        margin-top: 1rem;
        text-align: center;
    }

    @media (min-width: 768px) {
        .back-link {
            display: inline;
            margin-top: 0;
            text-align: left;
        }
    }

    .back-link:hover {
        color: #374151;
        text-decoration: underline;
    }

    .taxi-field-container,
    .vehicle-field-container {
        display: none;
    }

    .description-field {
        grid-column: 1 / -1;
    }

    /* Ensure full width layout */
    body, html {
        margin: 0;
        padding: 0;
        width: 100%;
    }

    /* Style pour le bouton actif */
    .active-mode {
      background-color: #4F46E5 !important; /* Bleu foncé */
      color: white !important;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 156
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

        // line 157
        yield "<div class=\"container\">
    <div class=\"form-card\">
        <div class=\"form-header\">
            <h1 class=\"form-title\">Leave a Complaint</h1>
        </div>

        <div class=\"form-content\">
            ";
        // line 164
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            
            <div class=\"form-grid\">
                <!-- Complaint Type -->
                <div class=\"mb-4\">
                    ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "type", [], "any", false, false, false, 169), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Complaint Type"]);
        yield "
                    ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "type", [], "any", false, false, false, 170), 'widget', ["attr" => ["class" => "form-input complaint-type-select"]]);
        yield "
                    <div class=\"error-message\">";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "type", [], "any", false, false, false, 171), 'errors');
        yield "</div>
                </div>

                <!-- Taxi Field -->
                <div class=\"mb-4 taxi-field-container\">
                    ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "taxi", [], "any", false, false, false, 176), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taxi Registration"]);
        yield "
                    ";
        // line 177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "taxi", [], "any", false, false, false, 177), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    <div class=\"error-message\">";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "taxi", [], "any", false, false, false, 178), 'errors');
        yield "</div>
                </div>

                <!-- Vehicle Field -->
                <div class=\"mb-4 vehicle-field-container\">
                    ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "vehicle", [], "any", false, false, false, 183), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Vehicle License"]);
        yield "
                    ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "vehicle", [], "any", false, false, false, 184), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    <div class=\"error-message\">";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "vehicle", [], "any", false, false, false, 185), 'errors');
        yield "</div>
                </div>

                <!-- Description -->
                <div class=\"mb-4 description-field\">
                    ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "commentaire", [], "any", false, false, false, 190), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                    ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "commentaire", [], "any", false, false, false, 191), 'widget', ["attr" => ["class" => "form-input", "rows" => 4, "placeholder" => "Describe your complaint in detail..."]]);
        // line 197
        yield "
                    <div class=\"error-message\">";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "commentaire", [], "any", false, false, false, 198), 'errors');
        yield "</div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class=\"mt-6 flex flex-col md:flex-row justify-between items-center gap-4\">
                <button type=\"submit\" class=\"submit-btn\">
                    ";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 205, $this->source); })()), "Submit Complaint")) : ("Submit Complaint")), "html", null, true);
        yield "
                </button>
                <a href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\" class=\"back-link\">
                    ← Back to complaints list
                </a>
            </div>

            ";
        // line 212
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
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

        taxiContainer.style.display = (selectedText.includes('taxi') || selectedValue.includes('taxi')) 
            ? 'block' : 'none';
        vehicleContainer.style.display = (selectedText.includes('vehicle') || selectedValue.includes('vehicle')) 
            ? 'block' : 'none';
    }

    checkComplaintType();
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
        return "front_office/Avis/_form.html.twig";
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
        return array (  370 => 212,  362 => 207,  357 => 205,  347 => 198,  344 => 197,  342 => 191,  338 => 190,  330 => 185,  326 => 184,  322 => 183,  314 => 178,  310 => 177,  306 => 176,  298 => 171,  294 => 170,  290 => 169,  282 => 164,  273 => 157,  260 => 156,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Leave a Complaint{% endblock %}

{% block stylesheets %}
<style>
    .container {
        font-family: 'Arial', sans-serif;
        width: 100%;
        margin: 0;
        padding: 0 15px;
    }

    .form-card {
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
        border: 1px solid #e5e7eb;
        margin: 2rem 0;
        width: 100%;
    }

    .form-header {
        background-color: rgb(163, 209, 207);
        padding: 1.5rem;
        border-radius: 0.5rem 0.5rem 0 0;
    }

    .form-title {
        color: rgb(0, 11, 222);
        font-size: 1.5rem;
        font-weight: bold;
        margin: 0;
    }

    .form-content {
        padding: 2rem;
        width: 100%;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 1.5rem;
        width: 100%;
    }

    @media (min-width: 768px) {
        .form-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .container {
            padding: 0;
        }
    }

    .form-label {
        display: block;
        font-weight: 500;
        margin-bottom: 0.5rem;
        color: #374151;
    }

    .form-input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #e5e7eb;
        border-radius: 0.375rem;
        background-color: #f9fafb;
        box-sizing: border-box;
    }

    .form-input:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    .error-message {
        color: #ef4444;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    .submit-btn {
        background-color: #FFEB3B;
        color: #1f2937;
        font-weight: bold;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 0.5rem;
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
        width: 100%;
    }

    @media (min-width: 768px) {
        .submit-btn {
            width: auto;
        }
    }

    .submit-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .back-link {
        color: #6b7280;
        font-size: 0.875rem;
        text-decoration: none;
        transition: color 0.2s;
        display: block;
        margin-top: 1rem;
        text-align: center;
    }

    @media (min-width: 768px) {
        .back-link {
            display: inline;
            margin-top: 0;
            text-align: left;
        }
    }

    .back-link:hover {
        color: #374151;
        text-decoration: underline;
    }

    .taxi-field-container,
    .vehicle-field-container {
        display: none;
    }

    .description-field {
        grid-column: 1 / -1;
    }

    /* Ensure full width layout */
    body, html {
        margin: 0;
        padding: 0;
        width: 100%;
    }

    /* Style pour le bouton actif */
    .active-mode {
      background-color: #4F46E5 !important; /* Bleu foncé */
      color: white !important;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"form-card\">
        <div class=\"form-header\">
            <h1 class=\"form-title\">Leave a Complaint</h1>
        </div>

        <div class=\"form-content\">
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            
            <div class=\"form-grid\">
                <!-- Complaint Type -->
                <div class=\"mb-4\">
                    {{ form_label(form.type, 'Complaint Type', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.type, {'attr': {'class': 'form-input complaint-type-select'}}) }}
                    <div class=\"error-message\">{{ form_errors(form.type) }}</div>
                </div>

                <!-- Taxi Field -->
                <div class=\"mb-4 taxi-field-container\">
                    {{ form_label(form.taxi, 'Taxi Registration', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.taxi, {'attr': {'class': 'form-input'}}) }}
                    <div class=\"error-message\">{{ form_errors(form.taxi) }}</div>
                </div>

                <!-- Vehicle Field -->
                <div class=\"mb-4 vehicle-field-container\">
                    {{ form_label(form.vehicle, 'Vehicle License', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.vehicle, {'attr': {'class': 'form-input'}}) }}
                    <div class=\"error-message\">{{ form_errors(form.vehicle) }}</div>
                </div>

                <!-- Description -->
                <div class=\"mb-4 description-field\">
                    {{ form_label(form.commentaire, 'Description', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.commentaire, {
                        'attr': {
                            'class': 'form-input',
                            'rows': 4,
                            'placeholder': 'Describe your complaint in detail...'
                        }
                    }) }}
                    <div class=\"error-message\">{{ form_errors(form.commentaire) }}</div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class=\"mt-6 flex flex-col md:flex-row justify-between items-center gap-4\">
                <button type=\"submit\" class=\"submit-btn\">
                    {{ button_label|default('Submit Complaint') }}
                </button>
                <a href=\"{{ path('app_avis_index') }}\" class=\"back-link\">
                    ← Back to complaints list
                </a>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
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

        taxiContainer.style.display = (selectedText.includes('taxi') || selectedValue.includes('taxi')) 
            ? 'block' : 'none';
        vehicleContainer.style.display = (selectedText.includes('vehicle') || selectedValue.includes('vehicle')) 
            ? 'block' : 'none';
    }

    checkComplaintType();
    typeSelect.addEventListener('change', checkComplaintType);
});
</script>
{% endblock %}
", "front_office/Avis/_form.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\front_office\\Avis\\_form.html.twig");
    }
}
