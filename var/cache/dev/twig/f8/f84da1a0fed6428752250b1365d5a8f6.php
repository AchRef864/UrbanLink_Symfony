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

/* back_office/course/index.html.twig */
class __TwigTemplate_85b5d2fe8f9d0373fb7005f125291b1b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/course/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/course/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back_office/course/index.html.twig", 2);
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

        yield "Gestion des Courses";
        
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

        yield "Courses";
        
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
      background: #fff;
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
      padding: 1rem 1.5rem;
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
    /* Bouton Ajouter une Course, style texte et bordure blancs */
    .btn-add {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      font-weight: 700;
      text-transform: uppercase;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      background: transparent;
      border: 2px solid #fff;
      border-radius: 0.5rem;
      cursor: pointer;
      font-size: 0.75rem;
      color: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.15);
    }
    .btn-add:hover {
      transform: translateY(-1px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.25);
    }
    /* Container de la table */
    .table-3d {
      padding: 1rem;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.75rem; /* Texte plus petit pour optimiser l'espace */
      min-width: 1200px;  /* Largeur minimale pour éviter le chevauchement */
    }
    thead {
      background-color: #edf2f7;
    }
    th, td {
      padding: 0.5rem 0.75rem;
      text-align: left;
    }
    th {
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: #4a5568;
    }
    td {
      color: #718096;
    }
    tbody tr:hover {
      background-color: #f7fafc;
    }
    /* Boutons actions avec effet 3D et même taille */
    .btn-action {
      display: inline-block;
      padding: 0.35rem 0.75rem;
      font-weight: 700;
      text-transform: uppercase;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
      font-size: 0.65rem;
      color: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.15);
      width: 100%;
    }
    .btn-edit {
      background: #00007d;
    }
    .btn-delete {
      background: #b91c1c;
    }
    .btn-action:hover {
      transform: translateY(-1px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.25);
    }
    /* Conteneur vertical pour les boutons d'actions */
    .actions-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
      max-width: 100px;
      margin: 0 auto;
    }
    /* Responsivité du conteneur pour permettre le défilement horizontal */
    .responsive-table {
      overflow-x: auto;
    }
    /* Fixation de la colonne Actions pour qu'elle reste visible */
    th.actions, td.actions {
      position: sticky;
      right: 0;
      background: #fff;
      z-index: 2;
      box-shadow: -2px 0 4px rgba(0,0,0,0.1);
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
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

        // line 137
        yield "<div class=\"container mx-auto p-6\">
  <div class=\"card-3d\">
    <div class=\"header-3d\">
      <h6>Liste des Courses</h6>
      <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_new");
        yield "\">
        <button type=\"button\" class=\"btn-add\">
          + Ajouter une Course
        </button>
      </a>
    </div>
    <div class=\"table-3d responsive-table\">
      <table id=\"datatable-courses\">
        <thead>
          <tr>
            <th>Nom Taxiste</th>
            <th>Marque Taxi</th>
            <th>Modèle Taxi</th>
            <th>Immatriculation</th>
            <th>Client</th>
            <th>Chauffeur</th>
            <th>Nom Client</th>
            <th>Date</th>
            <th>Départ</th>
            <th>Arrivée</th>
            <th>Distance</th>
            <th>Montant</th>
            <th>Statut</th>
            <th class=\"actions\">Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 168, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 169
            yield "            <tr>
              <td>";
            // line 170
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 170)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 170), "user", [], "any", false, false, false, 170), "name", [], "any", false, false, false, 170), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 171
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 171)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 171), "marque", [], "any", false, false, false, 171), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 172
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 172)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 172), "modele", [], "any", false, false, false, 172), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 173
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 173)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 173), "immatriculation", [], "any", false, false, false, 173), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 174
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "user", [], "any", false, false, false, 174)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "user", [], "any", false, false, false, 174), "name", [], "any", false, false, false, 174), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 175
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 175)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 175), "user", [], "any", false, false, false, 175), "name", [], "any", false, false, false, 175), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 176
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "user", [], "any", false, false, false, 176)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "user", [], "any", false, false, false, 176), "name", [], "any", false, false, false, 176), "html", null, true)) : ("—"));
            yield "</td>
              <td>";
            // line 177
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "dateCourse", [], "any", false, false, false, 177)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "dateCourse", [], "any", false, false, false, 177), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</td>
              ";
            // line 179
            yield "              <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["presentation"]) || array_key_exists("presentation", $context) ? $context["presentation"] : (function () { throw new RuntimeError('Variable "presentation" does not exist.', 179, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 179), [], "array", false, false, false, 179), "depart", [], "any", false, false, false, 179), "html", null, true);
            yield "</td>
              <td>";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["presentation"]) || array_key_exists("presentation", $context) ? $context["presentation"] : (function () { throw new RuntimeError('Variable "presentation" does not exist.', 180, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 180), [], "array", false, false, false, 180), "arrivee", [], "any", false, false, false, 180), "html", null, true);
            yield "</td>
              <td>";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "distanceKm", [], "any", false, false, false, 181), "html", null, true);
            yield " km</td>
              <td>";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "montant", [], "any", false, false, false, 182), "html", null, true);
            yield " DT</td>
              <td>
                ";
            // line 184
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 184) == "Acceptée")) {
                // line 185
                yield "                  <span class=\"text-green-600 font-semibold\">Acceptée</span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 186
$context["course"], "statut", [], "any", false, false, false, 186) == "Refusée")) {
                // line 187
                yield "                  <span class=\"text-red-500 font-semibold\">Refusée</span>
                ";
            } else {
                // line 189
                yield "                  <span class=\"text-yellow-500 font-semibold\">En attente</span>
                ";
            }
            // line 191
            yield "              </td>
              <td class=\"actions\">
                <div class=\"actions-container\">
                  <a href=\"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 194)]), "html", null, true);
            yield "\">
                    <button type=\"button\" class=\"btn-action btn-edit\">Modifier</button>
                  </a>
                  <form method=\"post\" action=\"";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 197)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 198))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn-action btn-delete\">Supprimer</button>
                  </form>
                </div>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 204
        if (!$context['_iterated']) {
            // line 205
            yield "            <tr>
              <td colspan=\"14\" class=\"text-center text-slate-400\">Aucune course trouvée.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
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

    // line 216
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

        // line 217
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
  <script>
    \$(document).ready(function() {
      // Initialisation de DataTables
      \$('#datatable-courses').DataTable({
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

      // Fonction de reverse geocoding via Nominatim
      
      
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
        return "back_office/course/index.html.twig";
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
        return array (  454 => 217,  441 => 216,  425 => 209,  416 => 205,  414 => 204,  403 => 198,  399 => 197,  393 => 194,  388 => 191,  384 => 189,  380 => 187,  378 => 186,  375 => 185,  373 => 184,  368 => 182,  364 => 181,  360 => 180,  355 => 179,  351 => 177,  347 => 176,  343 => 175,  339 => 174,  335 => 173,  331 => 172,  327 => 171,  323 => 170,  320 => 169,  315 => 168,  285 => 141,  279 => 137,  266 => 136,  131 => 10,  126 => 8,  113 => 7,  90 => 5,  67 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back_office/course/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Courses{% endblock %}
{% block page_title %}Courses{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  {# DataTables CSS via CDN #}
  <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
  <style>
    /* Carte avec effet 3D */
    .card-3d {
      background: #fff;
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
      padding: 1rem 1.5rem;
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
    /* Bouton Ajouter une Course, style texte et bordure blancs */
    .btn-add {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      font-weight: 700;
      text-transform: uppercase;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      background: transparent;
      border: 2px solid #fff;
      border-radius: 0.5rem;
      cursor: pointer;
      font-size: 0.75rem;
      color: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.15);
    }
    .btn-add:hover {
      transform: translateY(-1px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.25);
    }
    /* Container de la table */
    .table-3d {
      padding: 1rem;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.75rem; /* Texte plus petit pour optimiser l'espace */
      min-width: 1200px;  /* Largeur minimale pour éviter le chevauchement */
    }
    thead {
      background-color: #edf2f7;
    }
    th, td {
      padding: 0.5rem 0.75rem;
      text-align: left;
    }
    th {
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: #4a5568;
    }
    td {
      color: #718096;
    }
    tbody tr:hover {
      background-color: #f7fafc;
    }
    /* Boutons actions avec effet 3D et même taille */
    .btn-action {
      display: inline-block;
      padding: 0.35rem 0.75rem;
      font-weight: 700;
      text-transform: uppercase;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
      font-size: 0.65rem;
      color: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.15);
      width: 100%;
    }
    .btn-edit {
      background: #00007d;
    }
    .btn-delete {
      background: #b91c1c;
    }
    .btn-action:hover {
      transform: translateY(-1px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.25);
    }
    /* Conteneur vertical pour les boutons d'actions */
    .actions-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
      max-width: 100px;
      margin: 0 auto;
    }
    /* Responsivité du conteneur pour permettre le défilement horizontal */
    .responsive-table {
      overflow-x: auto;
    }
    /* Fixation de la colonne Actions pour qu'elle reste visible */
    th.actions, td.actions {
      position: sticky;
      right: 0;
      background: #fff;
      z-index: 2;
      box-shadow: -2px 0 4px rgba(0,0,0,0.1);
    }
  </style>
{% endblock %}

{% block body %}
<div class=\"container mx-auto p-6\">
  <div class=\"card-3d\">
    <div class=\"header-3d\">
      <h6>Liste des Courses</h6>
      <a href=\"{{ path('course_new') }}\">
        <button type=\"button\" class=\"btn-add\">
          + Ajouter une Course
        </button>
      </a>
    </div>
    <div class=\"table-3d responsive-table\">
      <table id=\"datatable-courses\">
        <thead>
          <tr>
            <th>Nom Taxiste</th>
            <th>Marque Taxi</th>
            <th>Modèle Taxi</th>
            <th>Immatriculation</th>
            <th>Client</th>
            <th>Chauffeur</th>
            <th>Nom Client</th>
            <th>Date</th>
            <th>Départ</th>
            <th>Arrivée</th>
            <th>Distance</th>
            <th>Montant</th>
            <th>Statut</th>
            <th class=\"actions\">Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for course in courses %}
            <tr>
              <td>{{ course.taxi ? course.taxi.user.name : '—' }}</td>
              <td>{{ course.taxi ? course.taxi.marque : '—' }}</td>
              <td>{{ course.taxi ? course.taxi.modele : '—' }}</td>
              <td>{{ course.taxi ? course.taxi.immatriculation : '—' }}</td>
              <td>{{ course.user ? course.user.name : '—' }}</td>
              <td>{{ course.taxi ? course.taxi.user.name : '—' }}</td>
              <td>{{ course.user ? course.user.name : '—' }}</td>
              <td>{{ course.dateCourse ? course.dateCourse|date('d/m/Y H:i') : '—' }}</td>
              {# Modification sur les colonnes Départ et Arrivée #}
              <td>{{ presentation[course.id].depart }}</td>
              <td>{{ presentation[course.id].arrivee }}</td>
              <td>{{ course.distanceKm }} km</td>
              <td>{{ course.montant }} DT</td>
              <td>
                {% if course.statut == 'Acceptée' %}
                  <span class=\"text-green-600 font-semibold\">Acceptée</span>
                {% elseif course.statut == 'Refusée' %}
                  <span class=\"text-red-500 font-semibold\">Refusée</span>
                {% else %}
                  <span class=\"text-yellow-500 font-semibold\">En attente</span>
                {% endif %}
              </td>
              <td class=\"actions\">
                <div class=\"actions-container\">
                  <a href=\"{{ path('course_edit', {'id': course.id}) }}\">
                    <button type=\"button\" class=\"btn-action btn-edit\">Modifier</button>
                  </a>
                  <form method=\"post\" action=\"{{ path('course_delete', {'id': course.id}) }}\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ course.id) }}\">
                    <button type=\"submit\" class=\"btn-action btn-delete\">Supprimer</button>
                  </form>
                </div>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"14\" class=\"text-center text-slate-400\">Aucune course trouvée.</td>
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
      // Initialisation de DataTables
      \$('#datatable-courses').DataTable({
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

      // Fonction de reverse geocoding via Nominatim
      
      
  </script>
{% endblock %}
", "back_office/course/index.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\back_office\\course\\index.html.twig");
    }
}
