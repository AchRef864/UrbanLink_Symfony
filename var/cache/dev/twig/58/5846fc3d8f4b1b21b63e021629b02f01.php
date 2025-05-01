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

/* taxiste/liste.html.twig */
class __TwigTemplate_f50bca1598771e13d610cd11bc659ba4 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxiste/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxiste/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "taxiste/liste.html.twig", 1);
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

        yield "Gestion des Taxis – Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Pilotes de Taxi";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
  <style>
    .card-3d {
      background-color: #fff;
      border-radius: .75rem;
      box-shadow: 0 8px 24px rgba(0,0,0,0.15);
      transition: transform .3s ease, box-shadow .3s ease;
      transform-style: preserve-3d;
    }
    .card-3d:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 32px rgba(0,0,0,0.25);
    }
    .header-3d {
      padding: 1.25rem;
      background: linear-gradient(135deg,#2D3748,#4A5568);
      display: flex;
      align-items: center;
      color: #fff;   
    }
    .header-3d h6 {
      font-size: 1.25rem;
      font-weight: 600;
      margin: 0;
    }
    .table-3d {
      padding: 1rem;
    }
    table.dataTable thead {
      background-color: #edf2f7;
    }
    table.dataTable tbody tr:hover {
      background-color: #f7fafc;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
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

        // line 46
        yield "<div class=\"container mx-auto p-6\">
  <div class=\"card-3d\">
    <div class=\"header-3d\">
      <h6>Liste des Pilotes</h6>
    </div>
    <div class=\"table-3d overflow-x-auto\">
      <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
        <thead>
          <tr>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Nom</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Email</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Téléphone</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Permis</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Inscription</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["drivers"]) || array_key_exists("drivers", $context) ? $context["drivers"] : (function () { throw new RuntimeError('Variable "drivers" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 65
            yield "            <tr class=\"border-b border-gray-200\">
              <td class=\"px-6 py-3\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
              <td class=\"px-6 py-3\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
              <td class=\"px-6 py-3\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
              <td class=\"px-6 py-3\">";
            // line 69
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "license", [], "any", false, false, false, 69)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "license", [], "any", false, false, false, 69), "html", null, true)) : ("—"));
            yield "</td>
              <td class=\"px-6 py-3\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "joiningDate", [], "any", false, false, false, 70), "d/m/Y"), "html", null, true);
            yield "</td>
              <td class=\"px-6 py-3 space-x-2\">
                ";
            // line 72
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "taxis", [], "any", false, false, false, 72)) == 0)) {
                // line 73
                yield "                  <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_new", ["userId" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                yield "\">
                    <button type=\"button\"
                      class=\"inline-block px-4 py-1.5 text-xs font-bold uppercase rounded-lg shadow-xs hover:-translate-y-px active:opacity-85 hover:shadow-md text-white\"
                      style=\"background: #16a34a;\">
                      Ajouter Taxi
                    </button>
                  </a>
                ";
            } else {
                // line 81
                yield "                  ";
                $context["taxi"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "taxis", [], "any", false, false, false, 81));
                // line 82
                yield "                  <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
                yield "\">
                    <button type=\"button\"
                      class=\"inline-block px-4 py-1.5 text-xs font-bold uppercase rounded-lg shadow-xs hover:-translate-y-px active:opacity-85 hover:shadow-md text-white\"
                      style=\"background: #1d4ed8;\">
                      Modifier Taxi
                    </button>
                  </a>
                ";
            }
            // line 90
            yield "              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 92
        if (!$context['_iterated']) {
            // line 93
            yield "            <tr>
              <td colspan=\"6\" class=\"px-6 py-3 text-center text-gray-500\">Aucun pilote trouvé.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
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

    // line 104
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

        // line 105
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
  <script>
    \$(document).ready(function() {
      \$('#datatable-search').DataTable({
        language: {
          search: \"Rechercher :\",
          lengthMenu: \"Afficher _MENU_ entrées\",
          info: \"Affichage de _START_ à _END_ sur _TOTAL_ entrées\",
          paginate: { previous: \"Précédent\", next: \"Suivant\" },
          zeroRecords: \"Aucun enregistrement trouvé\"
        },
        responsive: true,
        autoWidth: false
      });
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
        return "taxiste/liste.html.twig";
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
        return array (  312 => 105,  299 => 104,  283 => 97,  274 => 93,  272 => 92,  266 => 90,  254 => 82,  251 => 81,  239 => 73,  237 => 72,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  213 => 65,  208 => 64,  188 => 46,  175 => 45,  126 => 7,  113 => 6,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Taxis – Utilisateurs{% endblock %}
{% block page_title %}Pilotes de Taxi{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
  <style>
    .card-3d {
      background-color: #fff;
      border-radius: .75rem;
      box-shadow: 0 8px 24px rgba(0,0,0,0.15);
      transition: transform .3s ease, box-shadow .3s ease;
      transform-style: preserve-3d;
    }
    .card-3d:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 32px rgba(0,0,0,0.25);
    }
    .header-3d {
      padding: 1.25rem;
      background: linear-gradient(135deg,#2D3748,#4A5568);
      display: flex;
      align-items: center;
      color: #fff;   
    }
    .header-3d h6 {
      font-size: 1.25rem;
      font-weight: 600;
      margin: 0;
    }
    .table-3d {
      padding: 1rem;
    }
    table.dataTable thead {
      background-color: #edf2f7;
    }
    table.dataTable tbody tr:hover {
      background-color: #f7fafc;
    }
  </style>
{% endblock %}

{% block body %}
<div class=\"container mx-auto p-6\">
  <div class=\"card-3d\">
    <div class=\"header-3d\">
      <h6>Liste des Pilotes</h6>
    </div>
    <div class=\"table-3d overflow-x-auto\">
      <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
        <thead>
          <tr>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Nom</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Email</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Téléphone</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Permis</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Inscription</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for user in drivers %}
            <tr class=\"border-b border-gray-200\">
              <td class=\"px-6 py-3\">{{ user.name }}</td>
              <td class=\"px-6 py-3\">{{ user.email }}</td>
              <td class=\"px-6 py-3\">{{ user.phone }}</td>
              <td class=\"px-6 py-3\">{{ user.license ?: '—' }}</td>
              <td class=\"px-6 py-3\">{{ user.joiningDate|date('d/m/Y') }}</td>
              <td class=\"px-6 py-3 space-x-2\">
                {% if user.taxis|length == 0 %}
                  <a href=\"{{ path('taxi_new', { userId: user.id }) }}\">
                    <button type=\"button\"
                      class=\"inline-block px-4 py-1.5 text-xs font-bold uppercase rounded-lg shadow-xs hover:-translate-y-px active:opacity-85 hover:shadow-md text-white\"
                      style=\"background: #16a34a;\">
                      Ajouter Taxi
                    </button>
                  </a>
                {% else %}
                  {% set taxi = user.taxis|first %}
                  <a href=\"{{ path('taxi_edit', { id: taxi.id }) }}\">
                    <button type=\"button\"
                      class=\"inline-block px-4 py-1.5 text-xs font-bold uppercase rounded-lg shadow-xs hover:-translate-y-px active:opacity-85 hover:shadow-md text-white\"
                      style=\"background: #1d4ed8;\">
                      Modifier Taxi
                    </button>
                  </a>
                {% endif %}
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"6\" class=\"px-6 py-3 text-center text-gray-500\">Aucun pilote trouvé.</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
  <script>
    \$(document).ready(function() {
      \$('#datatable-search').DataTable({
        language: {
          search: \"Rechercher :\",
          lengthMenu: \"Afficher _MENU_ entrées\",
          info: \"Affichage de _START_ à _END_ sur _TOTAL_ entrées\",
          paginate: { previous: \"Précédent\", next: \"Suivant\" },
          zeroRecords: \"Aucun enregistrement trouvé\"
        },
        responsive: true,
        autoWidth: false
      });
    });
  </script>
{% endblock %}
", "taxiste/liste.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\taxiste\\liste.html.twig");
    }
}
