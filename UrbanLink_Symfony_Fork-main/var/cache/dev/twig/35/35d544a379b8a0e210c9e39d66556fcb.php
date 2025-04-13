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

/* reservation/reservations.html.twig */
class __TwigTemplate_0037c823c2979f28b8223ed4fc8862e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/reservations.html.twig", 1);
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

        yield "Admin Reservations";
        
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
    <h6 class=\"text-sm font-semibold\">Reservations List</h6>
  </div>
  <div class=\"flex-auto px-4 pt-0 pb-2\">
    <div class=\"overflow-x-auto\">
      <table class=\"table-auto w-full text-xs text-slate-700\">
        <thead>
          <tr class=\"uppercase bg-gray-100 text-slate-500\">
            <th class=\"px-2 py-1.5 text-left w-[140px]\">User</th>
            <th class=\"px-2 py-1.5 text-left w-[180px]\">Trajet</th>
            <th class=\"px-2 py-1.5 text-center w-[120px]\">Date</th>
            <th class=\"px-2 py-1.5 text-center w-[60px]\">Seats</th>
            <th class=\"px-2 py-1.5 text-center w-[100px]\">Status</th>
            <th class=\"px-2 py-1.5 text-center w-[70px]\">Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 25
            yield "            ";
            $context["status"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 25));
            // line 26
            yield "            <tr class=\"border-t text-xs\">
              <td class=\"px-2 py-1.5 truncate max-w-[140px]\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
              <td class=\"px-2 py-1.5 truncate max-w-[180px]\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 28), "departure", [], "any", false, false, false, 28), "html", null, true);
            yield " → ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 28), "destination", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
              <td class=\"px-2 py-1.5 text-center\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reservationDate", [], "any", false, false, false, 29), "Y-m-d H:i"), "html", null, true);
            yield "</td>
              <td class=\"px-2 py-1.5 text-center\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "numberOfSeats", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
              <td class=\"px-2 py-1.5 text-center\">
                <span class=\"px-2 py-1 rounded text-white text-[10px] font-bold uppercase
                  ";
            // line 33
            if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 33, $this->source); })()) == "confirmed")) {
                yield " bg-green-500
                  ";
            } elseif ((            // line 34
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 34, $this->source); })()) == "pending")) {
                yield " bg-yellow-500
                  ";
            } elseif (((            // line 35
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 35, $this->source); })()) == "canceled") || ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 35, $this->source); })()) == "cancelled"))) {
                yield " bg-red-500
                  ";
            } else {
                // line 36
                yield " bg-gray-400 ";
            }
            yield "\">
                  ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 37, $this->source); })()), "html", null, true);
            yield "
                </span>
              </td>
              <td class=\"px-2 py-1.5 text-center\">
                <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_reservation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"text-blue-500 underline\">Show</a>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 44
        if (!$context['_iterated']) {
            // line 45
            yield "            <tr>
              <td colspan=\"6\" class=\"px-2 py-2 text-center text-slate-400\">No reservations found</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "        </tbody>
      </table>
    </div>
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
        return "reservation/reservations.html.twig";
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
        return array (  195 => 49,  186 => 45,  184 => 44,  176 => 41,  169 => 37,  164 => 36,  159 => 35,  155 => 34,  151 => 33,  145 => 30,  141 => 29,  135 => 28,  131 => 27,  128 => 26,  125 => 25,  120 => 24,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Reservations{% endblock %}

{% block body %}
<div class=\"relative flex flex-col w-full min-w-0 bg-white border shadow rounded-2xl\" style=\"margin-left: 280px;\">
  <div class=\"p-4 pb-2 bg-white rounded-t-2xl\">
    <h6 class=\"text-sm font-semibold\">Reservations List</h6>
  </div>
  <div class=\"flex-auto px-4 pt-0 pb-2\">
    <div class=\"overflow-x-auto\">
      <table class=\"table-auto w-full text-xs text-slate-700\">
        <thead>
          <tr class=\"uppercase bg-gray-100 text-slate-500\">
            <th class=\"px-2 py-1.5 text-left w-[140px]\">User</th>
            <th class=\"px-2 py-1.5 text-left w-[180px]\">Trajet</th>
            <th class=\"px-2 py-1.5 text-center w-[120px]\">Date</th>
            <th class=\"px-2 py-1.5 text-center w-[60px]\">Seats</th>
            <th class=\"px-2 py-1.5 text-center w-[100px]\">Status</th>
            <th class=\"px-2 py-1.5 text-center w-[70px]\">Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for reservation in reservations %}
            {% set status = reservation.status|lower %}
            <tr class=\"border-t text-xs\">
              <td class=\"px-2 py-1.5 truncate max-w-[140px]\">{{ reservation.user.email }}</td>
              <td class=\"px-2 py-1.5 truncate max-w-[180px]\">{{ reservation.trajet.departure }} → {{ reservation.trajet.destination }}</td>
              <td class=\"px-2 py-1.5 text-center\">{{ reservation.reservationDate|date('Y-m-d H:i') }}</td>
              <td class=\"px-2 py-1.5 text-center\">{{ reservation.numberOfSeats }}</td>
              <td class=\"px-2 py-1.5 text-center\">
                <span class=\"px-2 py-1 rounded text-white text-[10px] font-bold uppercase
                  {% if status == 'confirmed' %} bg-green-500
                  {% elseif status == 'pending' %} bg-yellow-500
                  {% elseif status == 'canceled' or status == 'cancelled' %} bg-red-500
                  {% else %} bg-gray-400 {% endif %}\">
                  {{ status }}
                </span>
              </td>
              <td class=\"px-2 py-1.5 text-center\">
                <a href=\"{{ path('show_reservation', {'id': reservation.id}) }}\" class=\"text-blue-500 underline\">Show</a>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"6\" class=\"px-2 py-2 text-center text-slate-400\">No reservations found</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
</div>
{% endblock %}
", "reservation/reservations.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\reservation\\reservations.html.twig");
    }
}
