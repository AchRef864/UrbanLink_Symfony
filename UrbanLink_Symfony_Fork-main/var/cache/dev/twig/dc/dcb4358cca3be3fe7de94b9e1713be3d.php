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

/* reservation/new.html.twig */
class __TwigTemplate_30c275ff1c8e66a1c0e77f7aecd5257a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div style=\"margin-left: 280px;\">
  <div class=\"container mx-auto px-4 py-6\">
    <div class=\"bg-white p-6 rounded-lg shadow-md\">
      <h1 class=\"text-2xl font-bold mb-4\">Réserver: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 7, $this->source); })()), "departure", [], "any", false, false, false, 7), "html", null, true);
        yield " → ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 7, $this->source); })()), "destination", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
      
      ";
        // line 10
        yield "      ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["id" => "reservation-form", "class" => "space-y-4"]]);
        // line 15
        yield "
        
        <input type=\"hidden\" id=\"debug-current-value\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "html", null, true);
        yield "\">

        <div class=\"mb-4\">
          ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Nombre de places"]);
        // line 24
        yield "
          
          ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm", "min" => 1, "max" => CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 30, $this->source); })()), "availableSeats", [], "any", false, false, false, 30)]]);
        // line 32
        yield "

          ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "text-red-500 text-sm mt-1"]]);
        // line 38
        yield "
        </div>

        <div class=\"flex justify-end\">
          <button type=\"submit\" class=\"px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500\">
            Confirmer la réservation
          </button>
        </div>
      ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        yield "
    </div>
  </div>
</div>

<script>
document.getElementById('reservation-form').addEventListener('submit', function(e) {
    const seatsInput = document.querySelector('#";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
        yield "');
    console.log('Submitting value:', seatsInput.value);
    
    // Ensure value is properly set before submission
    if (!seatsInput.value) {
        seatsInput.value = 1;
    }
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
        return "reservation/new.html.twig";
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
        return array (  136 => 53,  126 => 46,  116 => 38,  114 => 34,  110 => 32,  108 => 30,  107 => 26,  103 => 24,  101 => 20,  95 => 17,  91 => 15,  88 => 10,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div style=\"margin-left: 280px;\">
  <div class=\"container mx-auto px-4 py-6\">
    <div class=\"bg-white p-6 rounded-lg shadow-md\">
      <h1 class=\"text-2xl font-bold mb-4\">Réserver: {{ trajet.departure }} → {{ trajet.destination }}</h1>
      
      {# Keep the original form section completely unchanged #}
      {{ form_start(form, {
        'attr': {
          'id': 'reservation-form',
          'class': 'space-y-4'
        }
      }) }}
        
        <input type=\"hidden\" id=\"debug-current-value\" value=\"{{ form.numberOfSeats.vars.value }}\">

        <div class=\"mb-4\">
          {{ form_label(form.numberOfSeats, 'Nombre de places', {
            'label_attr': {
              'class': 'block text-sm font-medium text-gray-700 mb-1'
            }
          }) }}
          
          {{ form_widget(form.numberOfSeats, {
            'attr': {
              'class': 'mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm',
              'min': 1,
              'max': trajet.availableSeats
            }
          }) }}

          {{ form_errors(form.numberOfSeats, {
            'attr': {
              'class': 'text-red-500 text-sm mt-1'
            }
          }) }}
        </div>

        <div class=\"flex justify-end\">
          <button type=\"submit\" class=\"px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500\">
            Confirmer la réservation
          </button>
        </div>
      {{ form_end(form) }}
    </div>
  </div>
</div>

<script>
document.getElementById('reservation-form').addEventListener('submit', function(e) {
    const seatsInput = document.querySelector('#{{ form.numberOfSeats.vars.id }}');
    console.log('Submitting value:', seatsInput.value);
    
    // Ensure value is properly set before submission
    if (!seatsInput.value) {
        seatsInput.value = 1;
    }
});
</script>
{% endblock %}", "reservation/new.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\reservation\\new.html.twig");
    }
}
