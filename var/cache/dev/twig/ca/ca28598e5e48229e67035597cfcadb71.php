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

/* back_office/course/stats.html.twig */
class __TwigTemplate_54defdeecc9128f5b59f6cb7904dac22 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/course/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/course/stats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back_office/course/stats.html.twig", 1);
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

        yield "Statistiques Chauffeurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "  <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 p-6\">
    <!-- Bar chart : nombre de courses -->
    <div class=\"bg-white p-4 rounded shadow w-full\">
      <h6 class=\"font-semibold mb-2\">Top 5 Chauffeurs (Nombre de courses)</h6>
      <div class=\"h-64\">
        <canvas id=\"chart-count\" class=\"w-full h-full\"></canvas>
      </div>
    </div>

    <!-- Bar chart : revenu total -->
    <div class=\"bg-white p-4 rounded shadow w-full\">
      <h6 class=\"font-semibold mb-2\">Top 5 Chauffeurs (Revenu total)</h6>
      <div class=\"h-64\">
        <canvas id=\"chart-revenue\" class=\"w-full h-full\"></canvas>
      </div>
    </div>
  </div>

  <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 p-6\">
    <!-- Sous-performants -->
    <div class=\"bg-white p-4 rounded shadow w-full\">
      <h6 class=\"font-semibold mb-2\">Taxis sous-performants (&lt; 3 courses/semaine)</h6>
      <ul class=\"list-disc pl-5\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["underperformers"]) || array_key_exists("underperformers", $context) ? $context["underperformers"] : (function () { throw new RuntimeError('Variable "underperformers" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 30
            yield "          <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 30), "html", null, true);
            yield " — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "count", [], "any", false, false, false, 30), "html", null, true);
            yield " courses la semaine dernière</li>
        ";
            $context['_iterated'] = true;
        }
        // line 31
        if (!$context['_iterated']) {
            // line 32
            yield "          <li>Aucun taxi sous-performant.</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['t'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "      </ul>
    </div>

    <!-- Donut chart : taux d’acceptation -->
    <div class=\"bg-white p-4 rounded shadow w-full\">
      <h6 class=\"font-semibold mb-2\">Taux d’acceptation des courses</h6>
      <div class=\"h-64\">
        <canvas id=\"chart-donut\" class=\"w-full h-full\"></canvas>
      </div>
      <p class=\"mt-2 text-sm\">
        Acceptées : <strong>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accepted"]) || array_key_exists("accepted", $context) ? $context["accepted"] : (function () { throw new RuntimeError('Variable "accepted" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "</strong> /
        Refusées : <strong>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["refused"]) || array_key_exists("refused", $context) ? $context["refused"] : (function () { throw new RuntimeError('Variable "refused" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "</strong>
      </p>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/chartjs.min.js"), "html", null, true);
        yield "\"></script>
  <script>
    const topCountLabels = ";
        // line 55
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["topCount"]) || array_key_exists("topCount", $context) ? $context["topCount"] : (function () { throw new RuntimeError('Variable "topCount" does not exist.', 55, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55); }));
        yield ";
    const topCountData   = ";
        // line 56
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["topCount"]) || array_key_exists("topCount", $context) ? $context["topCount"] : (function () { throw new RuntimeError('Variable "topCount" does not exist.', 56, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 56, $this->source); })()), "count", [], "any", false, false, false, 56); }));
        yield ";
    const topRevLabels   = ";
        // line 57
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["topRevenue"]) || array_key_exists("topRevenue", $context) ? $context["topRevenue"] : (function () { throw new RuntimeError('Variable "topRevenue" does not exist.', 57, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57); }));
        yield ";
    const topRevData     = ";
        // line 58
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["topRevenue"]) || array_key_exists("topRevenue", $context) ? $context["topRevenue"] : (function () { throw new RuntimeError('Variable "topRevenue" does not exist.', 58, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 58, $this->source); })()), "revenue", [], "any", false, false, false, 58); }));
        yield ";
    const acceptData     = ";
        // line 59
        yield json_encode([(isset($context["accepted"]) || array_key_exists("accepted", $context) ? $context["accepted"] : (function () { throw new RuntimeError('Variable "accepted" does not exist.', 59, $this->source); })()), (isset($context["refused"]) || array_key_exists("refused", $context) ? $context["refused"] : (function () { throw new RuntimeError('Variable "refused" does not exist.', 59, $this->source); })())]);
        yield ";

    new Chart(document.getElementById('chart-count'), {
      type: 'bar',
      data: {
        labels: topCountLabels,
        datasets: [{
          label: 'Nombre de courses',
          data: topCountData,
          backgroundColor: 'rgba(54, 162, 235, 0.6)',
          borderColor:     'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: { y: { beginAtZero: true } }
      }
    });

    new Chart(document.getElementById('chart-revenue'), {
      type: 'bar',
      data: {
        labels: topRevLabels,
        datasets: [{
          label: 'Revenu total (TND)',
          data: topRevData,
          backgroundColor: 'rgba(75, 192, 192, 0.6)',
          borderColor:     'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: { y: { beginAtZero: true } }
      }
    });

    new Chart(document.getElementById('chart-donut'), {
      type: 'doughnut',
      data: {
        labels: ['Acceptées', 'Refusées'],
        datasets: [{
          data: acceptData,
          backgroundColor: ['rgba(40, 167, 69, 0.6)', 'rgba(220, 53, 69, 0.6)'],
          borderColor:     ['rgba(40, 167, 69, 1)',   'rgba(220, 53, 69, 1)'],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '70%'
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
        return "back_office/course/stats.html.twig";
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
        return array (  220 => 59,  216 => 58,  212 => 57,  208 => 56,  204 => 55,  199 => 53,  194 => 52,  181 => 51,  165 => 45,  161 => 44,  149 => 34,  142 => 32,  140 => 31,  131 => 30,  126 => 29,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques Chauffeurs{% endblock %}

{% block body %}
  <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 p-6\">
    <!-- Bar chart : nombre de courses -->
    <div class=\"bg-white p-4 rounded shadow w-full\">
      <h6 class=\"font-semibold mb-2\">Top 5 Chauffeurs (Nombre de courses)</h6>
      <div class=\"h-64\">
        <canvas id=\"chart-count\" class=\"w-full h-full\"></canvas>
      </div>
    </div>

    <!-- Bar chart : revenu total -->
    <div class=\"bg-white p-4 rounded shadow w-full\">
      <h6 class=\"font-semibold mb-2\">Top 5 Chauffeurs (Revenu total)</h6>
      <div class=\"h-64\">
        <canvas id=\"chart-revenue\" class=\"w-full h-full\"></canvas>
      </div>
    </div>
  </div>

  <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 p-6\">
    <!-- Sous-performants -->
    <div class=\"bg-white p-4 rounded shadow w-full\">
      <h6 class=\"font-semibold mb-2\">Taxis sous-performants (&lt; 3 courses/semaine)</h6>
      <ul class=\"list-disc pl-5\">
        {% for t in underperformers %}
          <li>{{ t.name }} — {{ t.count }} courses la semaine dernière</li>
        {% else %}
          <li>Aucun taxi sous-performant.</li>
        {% endfor %}
      </ul>
    </div>

    <!-- Donut chart : taux d’acceptation -->
    <div class=\"bg-white p-4 rounded shadow w-full\">
      <h6 class=\"font-semibold mb-2\">Taux d’acceptation des courses</h6>
      <div class=\"h-64\">
        <canvas id=\"chart-donut\" class=\"w-full h-full\"></canvas>
      </div>
      <p class=\"mt-2 text-sm\">
        Acceptées : <strong>{{ accepted }}</strong> /
        Refusées : <strong>{{ refused }}</strong>
      </p>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('assets/js/plugins/chartjs.min.js') }}\"></script>
  <script>
    const topCountLabels = {{ topCount|map(t => t.name)|json_encode|raw }};
    const topCountData   = {{ topCount|map(t => t.count)|json_encode|raw }};
    const topRevLabels   = {{ topRevenue|map(t => t.name)|json_encode|raw }};
    const topRevData     = {{ topRevenue|map(t => t.revenue)|json_encode|raw }};
    const acceptData     = {{ [accepted, refused]|json_encode|raw }};

    new Chart(document.getElementById('chart-count'), {
      type: 'bar',
      data: {
        labels: topCountLabels,
        datasets: [{
          label: 'Nombre de courses',
          data: topCountData,
          backgroundColor: 'rgba(54, 162, 235, 0.6)',
          borderColor:     'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: { y: { beginAtZero: true } }
      }
    });

    new Chart(document.getElementById('chart-revenue'), {
      type: 'bar',
      data: {
        labels: topRevLabels,
        datasets: [{
          label: 'Revenu total (TND)',
          data: topRevData,
          backgroundColor: 'rgba(75, 192, 192, 0.6)',
          borderColor:     'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: { y: { beginAtZero: true } }
      }
    });

    new Chart(document.getElementById('chart-donut'), {
      type: 'doughnut',
      data: {
        labels: ['Acceptées', 'Refusées'],
        datasets: [{
          data: acceptData,
          backgroundColor: ['rgba(40, 167, 69, 0.6)', 'rgba(220, 53, 69, 0.6)'],
          borderColor:     ['rgba(40, 167, 69, 1)',   'rgba(220, 53, 69, 1)'],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '70%'
      }
    });
  </script>
{% endblock %}
", "back_office/course/stats.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\back_office\\course\\stats.html.twig");
    }
}
