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
class __TwigTemplate_7d7b996b096ccb1bbb29e4ad9987ffc7 extends Template
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
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/_form.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "front_office/Avis/_form.html.twig", 1);
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
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

        // line 159
        yield "<div class=\"container\">
    <div class=\"form-card\">
        <div class=\"form-header\">
            <h1 class=\"form-title\">Leave a Complaint</h1>
        </div>

        <div class=\"form-content\">
            ";
        // line 166
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            
            <div class=\"form-grid\">
                <!-- Complaint Type -->
                <div class=\"mb-4\">
                    ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "type", [], "any", false, false, false, 171), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Complaint Type"]);
        yield "
                    ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "type", [], "any", false, false, false, 172), 'widget', ["attr" => ["class" => "form-input complaint-type-select"]]);
        yield "
                    <div class=\"error-message\">";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "type", [], "any", false, false, false, 173), 'errors');
        yield "</div>
                </div>

                <!-- Taxi Field -->
                <div class=\"mb-4 taxi-field-container\">
                    ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "taxi", [], "any", false, false, false, 178), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taxi Registration"]);
        yield "
                    ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "taxi", [], "any", false, false, false, 179), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    <div class=\"error-message\">";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "taxi", [], "any", false, false, false, 180), 'errors');
        yield "</div>
                </div>

                <!-- Vehicle Field -->
                <div class=\"mb-4 vehicle-field-container\">
                    ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "vehicle", [], "any", false, false, false, 185), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Vehicle License"]);
        yield "
                    ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "vehicle", [], "any", false, false, false, 186), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    <div class=\"error-message\">";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "vehicle", [], "any", false, false, false, 187), 'errors');
        yield "</div>
                </div>

                <!-- Description -->
                <div class=\"mb-4 description-field\">
                    ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "commentaire", [], "any", false, false, false, 192), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                    ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "commentaire", [], "any", false, false, false, 193), 'widget', ["attr" => ["class" => "form-input", "rows" => 4, "placeholder" => "Describe your complaint in detail..."]]);
        // line 199
        yield "
                    <div class=\"error-message\">";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "commentaire", [], "any", false, false, false, 200), 'errors');
        yield "</div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class=\"mt-6 flex flex-col md:flex-row justify-between items-center gap-4\">
                <button type=\"submit\" class=\"submit-btn\">
                    ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 207, $this->source); })()), "Submit Complaint")) : ("Submit Complaint")), "html", null, true);
        yield "
                </button>
                <a href=\"";
        // line 209
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_front");
        yield "\" class=\"back-link\">
                    ← Back to complaints list
                </a>
            </div>

            ";
        // line 214
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), 'form_end');
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
        return array (  373 => 214,  365 => 209,  360 => 207,  350 => 200,  347 => 199,  345 => 193,  341 => 192,  333 => 187,  329 => 186,  325 => 185,  317 => 180,  313 => 179,  309 => 178,  301 => 173,  297 => 172,  293 => 171,  285 => 166,  276 => 159,  263 => 158,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Leave a Complaint{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
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
                <a href=\"{{ path('app_avis_front') }}\" class=\"back-link\">
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
