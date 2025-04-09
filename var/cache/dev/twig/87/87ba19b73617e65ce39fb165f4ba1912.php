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
class __TwigTemplate_ea2540a855d64002096b79c76309d82b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "

<div style=\"margin-left: 280px;\">
<div class=\"card shadow-sm p-4 mb-4 rounded-4\">
    <h2 class=\"mb-4 text-center\">📝 Leave a Review</h2>

    <!-- Rating Section -->
    <div class=\"mb-4\">
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "note", [], "any", false, false, false, 9), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Rating"]);
        yield "
        <div>
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "note", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-select", "aria-label" => "Select rating"]]);
        // line 16
        yield "
        </div>
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "note", [], "any", false, false, false, 18), 'errors');
        yield "
    </div>

    <!-- Comment Section -->
    <div class=\"mb-4\">
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "commentaire", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Your Comment"]);
        yield "
        <div>
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "commentaire", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "aria-label" => "Enter your review here"]]);
        // line 30
        yield "
        </div>
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "commentaire", [], "any", false, false, false, 32), 'errors');
        yield "
    </div>

    <!-- Submit Button -->
    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill px-5\">
            ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 38, $this->source); })()), "Submit 🚀")) : ("Submit 🚀")), "html", null, true);
        yield "
        </button>
    </div>
</div>
</div>

";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  107 => 44,  98 => 38,  89 => 32,  85 => 30,  83 => 25,  78 => 23,  70 => 18,  66 => 16,  64 => 11,  59 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}

<div style=\"margin-left: 280px;\">
<div class=\"card shadow-sm p-4 mb-4 rounded-4\">
    <h2 class=\"mb-4 text-center\">📝 Leave a Review</h2>

    <!-- Rating Section -->
    <div class=\"mb-4\">
        {{ form_label(form.note, 'Rating', {'label_attr': {'class': 'form-label'}}) }}
        <div>
            {{ form_widget(form.note, {
                'attr': {
                    'class': 'form-select',
                    'aria-label': 'Select rating'
                }
            }) }}
        </div>
        {{ form_errors(form.note) }}
    </div>

    <!-- Comment Section -->
    <div class=\"mb-4\">
        {{ form_label(form.commentaire, 'Your Comment', {'label_attr': {'class': 'form-label'}}) }}
        <div>
            {{ form_widget(form.commentaire, {
                'attr': {
                    'class': 'form-control',
                    'aria-label': 'Enter your review here'
                }
            }) }}
        </div>
        {{ form_errors(form.commentaire) }}
    </div>

    <!-- Submit Button -->
    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg rounded-pill px-5\">
            {{ button_label|default('Submit 🚀') }}
        </button>
    </div>
</div>
</div>

{{ form_end(form) }}
", "avis/_form.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\avis\\_form.html.twig");
    }
}
