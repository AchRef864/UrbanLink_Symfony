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

/* reservation/reservation_show.html.twig */
class __TwigTemplate_47d907410a15e0f685d3d428ffce96e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/reservation_show.html.twig", 1);
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

        yield "Reservation Details";
        
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
        yield "<div class=\"relative flex flex-col w-full min-w-0 bg-white border shadow rounded-2xl\" style=\"margin-left: 280px;\">
  <div class=\"p-4 pb-2 bg-white rounded-t-2xl\">
    <h6 class=\"text-sm font-semibold\">Reservation Details</h6>
  </div>
  <div class=\"flex-auto px-4 pt-0 pb-2\">
    <table class=\"table-auto w-full text-xs text-slate-700\">
      <tbody>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>User:</strong></td>
          <td class=\"px-2 py-1.5\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "email", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
        </tr>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>Trajet:</strong></td>
          <td class=\"px-2 py-1.5\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "trajet", [], "any", false, false, false, 19), "departure", [], "any", false, false, false, 19), "html", null, true);
        yield " → ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "trajet", [], "any", false, false, false, 19), "destination", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
        </tr>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>Date:</strong></td>
          <td class=\"px-2 py-1.5\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "reservationDate", [], "any", false, false, false, 23), "Y-m-d H:i"), "html", null, true);
        yield "</td>
        </tr>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>Seats:</strong></td>
          <td class=\"px-2 py-1.5\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
        </tr>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>Status:</strong></td>
          <td class=\"px-2 py-1.5\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 31, $this->source); })()), "status", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
        </tr>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>Total Price:</strong></td>
          <td class=\"px-2 py-1.5\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "totalPrice", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
        </tr>
      </tbody>
    </table>
  </div>
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
        return "reservation/reservation_show.html.twig";
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
        return array (  148 => 35,  141 => 31,  134 => 27,  127 => 23,  118 => 19,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation Details{% endblock %}

{% block body %}
<div class=\"relative flex flex-col w-full min-w-0 bg-white border shadow rounded-2xl\" style=\"margin-left: 280px;\">
  <div class=\"p-4 pb-2 bg-white rounded-t-2xl\">
    <h6 class=\"text-sm font-semibold\">Reservation Details</h6>
  </div>
  <div class=\"flex-auto px-4 pt-0 pb-2\">
    <table class=\"table-auto w-full text-xs text-slate-700\">
      <tbody>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>User:</strong></td>
          <td class=\"px-2 py-1.5\">{{ reservation.user.email }}</td>
        </tr>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>Trajet:</strong></td>
          <td class=\"px-2 py-1.5\">{{ reservation.trajet.departure }} → {{ reservation.trajet.destination }}</td>
        </tr>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>Date:</strong></td>
          <td class=\"px-2 py-1.5\">{{ reservation.reservationDate|date('Y-m-d H:i') }}</td>
        </tr>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>Seats:</strong></td>
          <td class=\"px-2 py-1.5\">{{ reservation.numberOfSeats }}</td>
        </tr>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>Status:</strong></td>
          <td class=\"px-2 py-1.5\">{{ reservation.status }}</td>
        </tr>
        <tr>
          <td class=\"px-2 py-1.5 text-left w-[140px]\"><strong>Total Price:</strong></td>
          <td class=\"px-2 py-1.5\">{{ reservation.totalPrice }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
{% endblock %}
", "reservation/reservation_show.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\reservation\\reservation_show.html.twig");
    }
}
