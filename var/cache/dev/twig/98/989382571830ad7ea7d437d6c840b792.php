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

/* back_office/taxi/index.html.twig */
class __TwigTemplate_685f488885c6ef985f45f26a91937052 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/taxi/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/taxi/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back_office/taxi/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Gestion des Taxis";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        yield "Taxis";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  ";
        // line 10
        yield "  <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
  <style>
    /* Carte avec effet 3D */
    .card-3d {
      background-color: #fff;
      border-radius: 0.75rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      transform-style: preserve-3d;
    }
    .card-3d:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.25);
    }
    /* En-tête avec dégradé et titre blanc */
    .header-3d {
      padding: 1.25rem;
      background: linear-gradient(135deg, #2D3748, #4A5568);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .header-3d h6 {
      font-size: 1.25rem;
      font-weight: 600;
      margin: 0;
      color: #fff;
    }
    /* Bouton Ajouter Taxi en blanc */
    .btn-add {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      margin-left: 1rem;
      font-weight: 700;
      text-transform: uppercase;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      background: transparent;
      border: 2px solid #fff;
      border-radius: 0.5rem;
      cursor: pointer;
      font-size: 0.75rem;
      color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
    }
    .btn-add:hover {
      transform: translateY(-1px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
    }
    /* Container de la table */
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

    // line 73
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

        // line 74
        yield "<div class=\"container mx-auto p-6\">
  <div class=\"card-3d\">
    <div class=\"header-3d\">
      <h6>Liste des Taxis</h6>
      ";
        // line 79
        yield "      <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_user_list");
        yield "\">
        <button type=\"button\" class=\"btn-add hover:-translate-y-px active:opacity-85 hover:shadow-md\">
          + Ajouter Taxi ou Modifier Taxi
        </button>
      </a>
    </div>
    <div class=\"table-3d overflow-x-auto\">
      <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
        <thead>
          <tr>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Nom Taxiste</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Immatriculation</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Marque</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Modèle</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Année</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Capacité</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Zone</th>
            <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Statut</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taxis"]) || array_key_exists("taxis", $context) ? $context["taxis"] : (function () { throw new RuntimeError('Variable "taxis" does not exist.', 101, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["taxi"]) {
            // line 102
            yield "            <tr class=\"border-b border-gray-200\">
              <td class=\"px-6 py-3\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "user", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
            yield "</td>
              <td class=\"px-6 py-3\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "immatriculation", [], "any", false, false, false, 104), "html", null, true);
            yield "</td>
              <td class=\"px-6 py-3 font-semibold\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "marque", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
              <td class=\"px-6 py-3 font-semibold\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "modele", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
              <td class=\"px-6 py-3\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "anneeFabrication", [], "any", false, false, false, 107), "html", null, true);
            yield "</td>
              <td class=\"px-6 py-3 font-semibold\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "capacite", [], "any", false, false, false, 108), "html", null, true);
            yield "</td>
              <td class=\"px-6 py-3\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "zoneDesserte", [], "any", false, false, false, 109), "html", null, true);
            yield "</td>
              <td class=\"px-6 py-3 text-center\">
                ";
            // line 111
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "statut", [], "any", false, false, false, 111) == "Disponible")) {
                // line 112
                yield "                  <span class=\"bg-green-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                    Disponible
                  </span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 115
$context["taxi"], "statut", [], "any", false, false, false, 115) == "Occupé")) {
                // line 116
                yield "                  <span class=\"bg-yellow-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                    Occupé
                  </span>
                ";
            } else {
                // line 120
                yield "                  <span class=\"bg-red-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                    Indisponible
                  </span>
                ";
            }
            // line 124
            yield "              </td>
              <td class=\"px-6 py-3 space-x-2\">
                ";
            // line 127
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "id", [], "any", false, false, false, 127)]), "html", null, true);
            yield "\">
                  <button type=\"button\" class=\"mr-3 inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md text-white\"
                          style=\"background: #00007d;\">
                    Modifier
                  </button>
                </a>
                ";
            // line 134
            yield "                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\" class=\"inline\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "id", [], "any", false, false, false, 135))), "html", null, true);
            yield "\">
                  <button type=\"submit\" class=\"inline-block px-4 py-1.5 font-bold text-center uppercase transition-all rounded-lg cursor-pointer leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md text-white\"
                          style=\"background: #b91c1c;\">
                    Supprimer
                  </button>
                </form>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 143
        if (!$context['_iterated']) {
            // line 144
            yield "            <tr>
              <td colspan=\"9\" class=\"px-6 py-3 text-center text-gray-500\">Aucun taxi trouvé.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['taxi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
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

    // line 155
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

        // line 156
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
  <script>
    \$(document).ready(function() {
      \$('#datatable-search').DataTable({
        language: {
          search: \"Rechercher:\",
          lengthMenu: \"Afficher _MENU_ entrées\",
          info: \"Affichage de _START_ à _END_ sur _TOTAL_ entrées\",
          paginate: {
            previous: \"Précédent\",
            next: \"Suivant\"
          },
          zeroRecords: \"Aucun enregistrement correspondant trouvé\"
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
        return "back_office/taxi/index.html.twig";
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
        return array (  378 => 156,  365 => 155,  349 => 148,  340 => 144,  338 => 143,  325 => 135,  320 => 134,  310 => 127,  306 => 124,  300 => 120,  294 => 116,  292 => 115,  287 => 112,  285 => 111,  280 => 109,  276 => 108,  272 => 107,  268 => 106,  264 => 105,  260 => 104,  256 => 103,  253 => 102,  248 => 101,  222 => 79,  216 => 74,  203 => 73,  131 => 10,  126 => 8,  113 => 7,  90 => 5,  67 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back_office/taxi/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Taxis{% endblock %}
{% block page_title %}Taxis{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  {# DataTables CSS via CDN #}
  <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
  <style>
    /* Carte avec effet 3D */
    .card-3d {
      background-color: #fff;
      border-radius: 0.75rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      transform-style: preserve-3d;
    }
    .card-3d:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.25);
    }
    /* En-tête avec dégradé et titre blanc */
    .header-3d {
      padding: 1.25rem;
      background: linear-gradient(135deg, #2D3748, #4A5568);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .header-3d h6 {
      font-size: 1.25rem;
      font-weight: 600;
      margin: 0;
      color: #fff;
    }
    /* Bouton Ajouter Taxi en blanc */
    .btn-add {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      margin-left: 1rem;
      font-weight: 700;
      text-transform: uppercase;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      background: transparent;
      border: 2px solid #fff;
      border-radius: 0.5rem;
      cursor: pointer;
      font-size: 0.75rem;
      color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
    }
    .btn-add:hover {
      transform: translateY(-1px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
    }
    /* Container de la table */
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
      <h6>Liste des Taxis</h6>
      {# Bouton Ajouter Taxi dans l'en-tête avec texte et bordure blancs #}
      <a href=\"{{ path('taxi_user_list') }}\">
        <button type=\"button\" class=\"btn-add hover:-translate-y-px active:opacity-85 hover:shadow-md\">
          + Ajouter Taxi ou Modifier Taxi
        </button>
      </a>
    </div>
    <div class=\"table-3d overflow-x-auto\">
      <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
        <thead>
          <tr>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Nom Taxiste</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Immatriculation</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Marque</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Modèle</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Année</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Capacité</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Zone</th>
            <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Statut</th>
            <th class=\"px-6 py-3 uppercase tracking-wider\">Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for taxi in taxis %}
            <tr class=\"border-b border-gray-200\">
              <td class=\"px-6 py-3\">{{ taxi.user.name }}</td>
              <td class=\"px-6 py-3\">{{ taxi.immatriculation }}</td>
              <td class=\"px-6 py-3 font-semibold\">{{ taxi.marque }}</td>
              <td class=\"px-6 py-3 font-semibold\">{{ taxi.modele }}</td>
              <td class=\"px-6 py-3\">{{ taxi.anneeFabrication }}</td>
              <td class=\"px-6 py-3 font-semibold\">{{ taxi.capacite }}</td>
              <td class=\"px-6 py-3\">{{ taxi.zoneDesserte }}</td>
              <td class=\"px-6 py-3 text-center\">
                {% if taxi.statut == 'Disponible' %}
                  <span class=\"bg-green-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                    Disponible
                  </span>
                {% elseif taxi.statut == 'Occupé' %}
                  <span class=\"bg-yellow-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                    Occupé
                  </span>
                {% else %}
                  <span class=\"bg-red-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">
                    Indisponible
                  </span>
                {% endif %}
              </td>
              <td class=\"px-6 py-3 space-x-2\">
                {# Bouton Modifier avec la couleur imposée (#00007d) #}
                <a href=\"{{ path('taxi_edit', {'id': taxi.id}) }}\">
                  <button type=\"button\" class=\"mr-3 inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md text-white\"
                          style=\"background: #00007d;\">
                    Modifier
                  </button>
                </a>
                {# Bouton Supprimer avec la couleur imposée (#b91c1c) #}
                <form method=\"post\" action=\"{{ path('taxi_delete', {'id': taxi.id}) }}\" class=\"inline\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ taxi.id) }}\">
                  <button type=\"submit\" class=\"inline-block px-4 py-1.5 font-bold text-center uppercase transition-all rounded-lg cursor-pointer leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md text-white\"
                          style=\"background: #b91c1c;\">
                    Supprimer
                  </button>
                </form>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"9\" class=\"px-6 py-3 text-center text-gray-500\">Aucun taxi trouvé.</td>
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
          search: \"Rechercher:\",
          lengthMenu: \"Afficher _MENU_ entrées\",
          info: \"Affichage de _START_ à _END_ sur _TOTAL_ entrées\",
          paginate: {
            previous: \"Précédent\",
            next: \"Suivant\"
          },
          zeroRecords: \"Aucun enregistrement correspondant trouvé\"
        },
        responsive: true,
        autoWidth: false
      });
    });
  </script>
{% endblock %}
", "back_office/taxi/index.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\back_office\\taxi\\index.html.twig");
    }
}
