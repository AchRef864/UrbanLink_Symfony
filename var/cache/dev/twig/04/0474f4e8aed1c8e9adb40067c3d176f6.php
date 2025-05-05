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

/* front_office/course/new.html.twig */
class __TwigTemplate_920c1625ddf26d87aa6e185ee9a70e66 extends Template
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
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/course/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/course/new.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "front_office/course/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Réserver une Course";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        yield "Réserver une Course";
        
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
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <style>
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

    // line 16
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

        // line 17
        yield "<div class=\"bg-white shadow-md rounded-2xl p-6 max-w-3xl mx-auto\">
  <h1 class=\"text-xl font-semibold text-slate-700 mb-6\">Ajouter une Course</h1>

  ";
        // line 21
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21)) > 0)) {
            // line 22
            yield "    <div class=\"mb-4 p-4 bg-red-100 text-red-500 border border-red-300 rounded\">
      ";
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'errors');
            yield "
    </div>
  ";
        }
        // line 26
        yield "
  ";
        // line 28
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
      ";
        // line 31
        yield "      <div class=\"mb-4\" style=\"display: none;\">
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "taxi", [], "any", false, false, false, 32), 'label');
        yield "
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "taxi", [], "any", false, false, false, 33), 'widget');
        yield "
        <div class=\"text-red-500 text-sm mt-1\">";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "taxi", [], "any", false, false, false, 34), 'errors');
        yield "</div>
      </div>
      <div class=\"mb-4\">
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "dateCourse", [], "any", false, false, false, 37), 'label');
        yield "
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "dateCourse", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
        <div class=\"text-red-500 text-sm mt-1\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "dateCourse", [], "any", false, false, false, 39), 'errors');
        yield "</div>
      </div>
      ";
        // line 42
        yield "      <div class=\"mb-4\" style=\"display: none;\">
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "villeDepart", [], "any", false, false, false, 43), 'label');
        yield "
        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "villeDepart", [], "any", false, false, false, 44), 'widget');
        yield "
        <div class=\"text-red-500 text-sm mt-1\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "villeDepart", [], "any", false, false, false, 45), 'errors');
        yield "</div>
      </div>
      <div class=\"mb-4\" style=\"display: none;\">
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "villeArrivee", [], "any", false, false, false, 48), 'label');
        yield "
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "villeArrivee", [], "any", false, false, false, 49), 'widget');
        yield "
        <div class=\"text-red-500 text-sm mt-1\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "villeArrivee", [], "any", false, false, false, 50), 'errors');
        yield "</div>
      </div>
      ";
        // line 53
        yield "      <div class=\"mb-4\">
        <label class=\"block font-medium mb-1\">Ville de départ</label>
        <span id=\"displayDepart\" class=\"block w-full px-4 py-2 border rounded-lg bg-gray-100\"></span>
        
      </div>
      <div class=\"mb-4\">
        <label class=\"block font-medium mb-1\">Ville d'arrivée</label>
        <span id=\"displayArrivee\" class=\"block w-full px-4 py-2 border rounded-lg bg-gray-100\"></span>
      </div>
      ";
        // line 63
        yield "      <div class=\"mb-4\">
        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "distanceKm", [], "any", false, false, false, 64), 'label');
        yield "
        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "distanceKm", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg", "readonly" => "readonly"]]);
        yield "
      </div>
      <div class=\"mb-4\">
        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "montant", [], "any", false, false, false, 68), 'label');
        yield "
        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "montant", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg", "readonly" => "readonly"]]);
        yield "
      </div>
      ";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", true, true, false, 71)) {
            // line 72
            yield "      <div class=\"mb-4\">
        ";
            // line 73
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "statut", [], "any", false, false, false, 73), 'label');
            yield "
        ";
            // line 74
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "statut", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
            yield "
      </div>
      ";
        }
        // line 77
        yield "    </div>

    ";
        // line 80
        yield "    <div class=\"mb-4\">
  <button type=\"button\" id=\"selectTaxiBtn\" class=\"mode-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded\">Taxi</button>
  <button type=\"button\" id=\"selectDepartBtn\" class=\"mode-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded\">Départ</button>
  <button type=\"button\" id=\"selectArriveeBtn\" class=\"mode-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded\">Arrivée</button>
  <span id=\"selectionModeDisplay\" class=\"ml-4 font-semibold\">Mode: Sélection du taxi</span>
</div>


    ";
        // line 89
        yield "    <div class=\"mb-4\">
      <label class=\"block font-medium mb-2\">Interagissez avec la carte :</label>
      <div id=\"userMapDiv\" style=\"height: 500px; width: 100%; border: 1px solid #ccc;\"></div>
    </div>

    <div class=\"mt-6 flex justify-between items-center\">
      <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg shadow-md transition\">
        Réserver
      </button>
      <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_courses");
        yield "\" class=\"text-sm text-slate-500 hover:underline\">← Retour à la liste</a>
    </div>
  ";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
        yield "
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
        yield "  <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">
  <script src=\"https://js.arcgis.com/4.25/\" defer></script>
  <script>
    window.addEventListener(\"load\", function() {
      require([
        \"esri/Map\",
        \"esri/views/MapView\",
        \"esri/Graphic\",
        \"esri/geometry/geometryEngine\"
      ], function(Map, MapView, Graphic, geometryEngine) {

        // Variables pour stocker les marqueurs et le tarif du taxi sélectionné
        var departMarker = null;
        var arriveeMarker = null;
        var selectedTaxiMarker = null; // Permet de n'avoir qu'un taxi sélectionné en vert
        var selectedTaxiRate = null;
        var selectionMode = \"taxi\"; // Modes: \"taxi\", \"depart\", \"arrivee\"
        document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du taxi\";

        // Boutons pour changer le mode
        document.getElementById(\"selectTaxiBtn\").addEventListener(\"click\", function() {
  selectionMode = \"taxi\";
  document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du taxi\";
  console.log(\"Mode taxi activé\");
  updateModeButtons(\"selectTaxiBtn\");
});

        document.getElementById(\"selectDepartBtn\").addEventListener(\"click\", function() {
  selectionMode = \"depart\";
  document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du départ\";
  console.log(\"Mode départ activé\");
  updateModeButtons(\"selectDepartBtn\");
});

        document.getElementById(\"selectArriveeBtn\").addEventListener(\"click\", function() {
  selectionMode = \"arrivee\";
  document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection de l'arrivée\";
  console.log(\"Mode arrivée activé\");
  updateModeButtons(\"selectArriveeBtn\");
});


        // Création de la carte
        var map = new Map({ basemap: \"streets-navigation-vector\" });
        var view = new MapView({
          container: \"userMapDiv\",
          map: map,
          center: [10.18, 36.80],
          zoom: 12
        });

        // Fonction utilitaire pour ajouter un marqueur
        function addMarker(geometry, color, size) {
          return new Graphic({
            geometry: geometry,
            symbol: { type: \"simple-marker\", color: color, size: size || \"12px\" }
          });
        }
function updateModeButtons(activeButtonId) {
  var modeButtons = document.querySelectorAll(\".mode-btn\");
  modeButtons.forEach(function(button) {
    button.classList.remove(\"active-mode\");
  });
  document.getElementById(activeButtonId).classList.add(\"active-mode\");
}

        // Fonction utilitaire pour calculer la distance en kilomètres
        function computeDistance(from, to) {
          return geometryEngine.distance(from, to, \"kilometers\");
        }

        // Récupérer la position de l'utilisateur et charger les taxis proches
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var userLng = position.coords.longitude;
            var userLat = position.coords.latitude;
            view.center = [userLng, userLat];
            var userMarker = addMarker({ type: \"point\", longitude: userLng, latitude: userLat }, \"red\", \"14px\");
            view.graphics.add(userMarker);

            fetch(\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_nearby_taxis");
        yield "?longitude=\" + userLng + \"&latitude=\" + userLat)
              .then(response => response.json())
              .then(function(data) {
                data.forEach(function(taxi) {
                  var taxiPoint = { type: \"point\", longitude: taxi.longitude, latitude: taxi.latitude };
                  var taxiMarker = addMarker(taxiPoint, \"blue\", \"12px\");
                  taxiMarker.attributes = {
                    taxiId: taxi.id,
                    immatriculation: taxi.immatriculation,
                    tarifBase: taxi.tarifBase
                  };
                  view.graphics.add(taxiMarker);
                });
              })
              .catch(function(error) {
                console.error(\"Erreur lors de la récupération des taxis :\", error);
              });
          });
        } else {
          console.warn(\"La géolocalisation n'est pas supportée par ce navigateur.\");
        }

        // Gestion des clics sur la carte
        view.on(\"click\", function(event) {
          console.log(\"Clic détecté en mode :\", selectionMode);
          view.hitTest(event).then(function(response) {
            var results = response.results;
            console.log(\"Résultats hitTest :\", results);
            var clickedGeometry = null;

            if (selectionMode === \"taxi\") {
              // Mode taxi : Recherche d'un taxi parmi les graphiques
              var taxiGraphic = results.find(function(result) {
                return result.graphic.attributes && result.graphic.attributes.taxiId;
              });
              if (taxiGraphic) {
                clickedGeometry = taxiGraphic.graphic.geometry;
                selectedTaxiRate = taxiGraphic.graphic.attributes.tarifBase;
                console.log(\"Taxi sélectionné, Tarif :\", selectedTaxiRate);

                // Supprimer le précédent taxi sélectionné
                if (selectedTaxiMarker) {
                  view.graphics.remove(selectedTaxiMarker);
                }

                // Ajouter le nouveau marqueur en vert
                selectedTaxiMarker = addMarker(clickedGeometry, \"green\", \"14px\");
                selectedTaxiMarker.attributes = taxiGraphic.graphic.attributes;
                view.graphics.add(selectedTaxiMarker);
                document.getElementById('";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "taxi", [], "any", false, false, false, 234), "vars", [], "any", false, false, false, 234), "id", [], "any", false, false, false, 234), "html", null, true);
        yield "').value = taxiGraphic.graphic.attributes.taxiId;

                // Recalculer la distance et le montant si départ et arrivée existent
                if (departMarker && arriveeMarker && selectedTaxiRate) {
                  var distanceKm = computeDistance(departMarker.geometry, arriveeMarker.geometry);
                  console.log(\"Distance recalculée :\", distanceKm);
                  document.getElementById('";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "distanceKm", [], "any", false, false, false, 240), "vars", [], "any", false, false, false, 240), "id", [], "any", false, false, false, 240), "html", null, true);
        yield "').value = distanceKm.toFixed(2);
                  var montant = distanceKm * selectedTaxiRate;
                  console.log(\"Montant recalculé :\", montant);
                  document.getElementById('";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "montant", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "id", [], "any", false, false, false, 243), "html", null, true);
        yield "').value = montant.toFixed(2);
                }
                return;
              } else {
                console.log(\"Aucun taxi détecté en mode taxi.\");
                return;
              }
            }
            else if (selectionMode === \"depart\") {
              // Mode départ : Traitement du point de départ
              var nonTaxiResults = results.filter(function(result) {
                return !(result.graphic.attributes && result.graphic.attributes.taxiId);
              });
              if (nonTaxiResults.length > 0) {
                clickedGeometry = nonTaxiResults[0].graphic.geometry;
                console.log(\"HitTest non-taxi trouvé pour départ :\", clickedGeometry);
              }
              if (!clickedGeometry) {
                clickedGeometry = event.mapPoint;
                console.log(\"Utilisation de event.mapPoint pour départ :\", clickedGeometry);
              }
              var lat = clickedGeometry.latitude || clickedGeometry.y;
              var lng = clickedGeometry.longitude || clickedGeometry.x;
              var coordText = lat.toFixed(4) + \", \" + lng.toFixed(4);
              document.getElementById('";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "villeDepart", [], "any", false, false, false, 267), "vars", [], "any", false, false, false, 267), "id", [], "any", false, false, false, 267), "html", null, true);
        yield "').value = coordText;      // Met à jour l'input caché
              document.getElementById(\"displayDepart\").textContent = coordText;        
              // Mise à jour du marqueur de départ
              if (departMarker) { view.graphics.remove(departMarker); }
              departMarker = addMarker(clickedGeometry, \"orange\", \"12px\");
              view.graphics.add(departMarker);
            }
            else if (selectionMode === \"arrivee\") {
              // Mode arrivée : Traitement du point d'arrivée
              var nonTaxiResults = results.filter(function(result) {
                return !(result.graphic.attributes && result.graphic.attributes.taxiId);
              });
              if (nonTaxiResults.length > 0) {
                clickedGeometry = nonTaxiResults[0].graphic.geometry;
                console.log(\"HitTest non-taxi trouvé pour arrivée :\", clickedGeometry);
              }
              if (!clickedGeometry) {
                clickedGeometry = event.mapPoint;
                console.log(\"Utilisation de event.mapPoint pour arrivée :\", clickedGeometry);
              }
              var lat = clickedGeometry.latitude || clickedGeometry.y;
              var lng = clickedGeometry.longitude || clickedGeometry.x;
              var coordText = lat.toFixed(4) + \", \" + lng.toFixed(4);
              document.getElementById('";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "villeArrivee", [], "any", false, false, false, 290), "vars", [], "any", false, false, false, 290), "id", [], "any", false, false, false, 290), "html", null, true);
        yield "').value = coordText;
              document.getElementById(\"displayArrivee\").textContent = coordText;  
              if (arriveeMarker) { view.graphics.remove(arriveeMarker); }
              arriveeMarker = addMarker(clickedGeometry, \"purple\", \"12px\");
              view.graphics.add(arriveeMarker);
            }

            // Calcul du montant s'il y a déjà des points départ et arrivée et un taxi sélectionné
            if (departMarker && arriveeMarker && selectedTaxiRate) {
              var distanceKm = computeDistance(departMarker.geometry, arriveeMarker.geometry);
              console.log(\"Distance calculée :\", distanceKm);
              document.getElementById('";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "distanceKm", [], "any", false, false, false, 301), "vars", [], "any", false, false, false, 301), "id", [], "any", false, false, false, 301), "html", null, true);
        yield "').value = distanceKm.toFixed(2);
              var montant = distanceKm * selectedTaxiRate;
              console.log(\"Montant calculé :\", montant);
              document.getElementById('";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "montant", [], "any", false, false, false, 304), "vars", [], "any", false, false, false, 304), "id", [], "any", false, false, false, 304), "html", null, true);
        yield "').value = montant.toFixed(2);
            }
          });
        });
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
        return "front_office/course/new.html.twig";
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
        return array (  573 => 304,  567 => 301,  553 => 290,  527 => 267,  500 => 243,  494 => 240,  485 => 234,  433 => 185,  351 => 105,  338 => 104,  324 => 100,  319 => 98,  308 => 89,  298 => 80,  294 => 77,  288 => 74,  284 => 73,  281 => 72,  279 => 71,  274 => 69,  270 => 68,  264 => 65,  260 => 64,  257 => 63,  246 => 53,  241 => 50,  237 => 49,  233 => 48,  227 => 45,  223 => 44,  219 => 43,  216 => 42,  211 => 39,  207 => 38,  203 => 37,  197 => 34,  193 => 33,  189 => 32,  186 => 31,  180 => 28,  177 => 26,  171 => 23,  168 => 22,  165 => 21,  160 => 17,  147 => 16,  126 => 6,  113 => 5,  90 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}
{% block title %}Réserver une Course{% endblock %}
{% block page_title %}Réserver une Course{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <style>
    /* Style pour le bouton actif */
    .active-mode {
      background-color: #4F46E5 !important; /* Bleu foncé */
      color: white !important;
    }
  </style>
{% endblock %}

{% block body %}
<div class=\"bg-white shadow-md rounded-2xl p-6 max-w-3xl mx-auto\">
  <h1 class=\"text-xl font-semibold text-slate-700 mb-6\">Ajouter une Course</h1>

  {# Affichage global des erreurs du formulaire #}
  {% if form.vars.errors|length > 0 %}
    <div class=\"mb-4 p-4 bg-red-100 text-red-500 border border-red-300 rounded\">
      {{ form_errors(form) }}
    </div>
  {% endif %}

  {# Démarrage du formulaire (validation HTML5 désactivée) #}
  {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
      {# Champ taxi masqué – renseigné via la carte #}
      <div class=\"mb-4\" style=\"display: none;\">
        {{ form_label(form.taxi) }}
        {{ form_widget(form.taxi) }}
        <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.taxi) }}</div>
      </div>
      <div class=\"mb-4\">
        {{ form_label(form.dateCourse) }}
        {{ form_widget(form.dateCourse, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
        <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.dateCourse) }}</div>
      </div>
      {# Champs ville masqués dans le formulaire #}
      <div class=\"mb-4\" style=\"display: none;\">
        {{ form_label(form.villeDepart) }}
        {{ form_widget(form.villeDepart) }}
        <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.villeDepart) }}</div>
      </div>
      <div class=\"mb-4\" style=\"display: none;\">
        {{ form_label(form.villeArrivee) }}
        {{ form_widget(form.villeArrivee) }}
        <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.villeArrivee) }}</div>
      </div>
      {# Zones d'affichage pour la sélection visible #}
      <div class=\"mb-4\">
        <label class=\"block font-medium mb-1\">Ville de départ</label>
        <span id=\"displayDepart\" class=\"block w-full px-4 py-2 border rounded-lg bg-gray-100\"></span>
        
      </div>
      <div class=\"mb-4\">
        <label class=\"block font-medium mb-1\">Ville d'arrivée</label>
        <span id=\"displayArrivee\" class=\"block w-full px-4 py-2 border rounded-lg bg-gray-100\"></span>
      </div>
      {# Champs distance et montant en lecture seule #}
      <div class=\"mb-4\">
        {{ form_label(form.distanceKm) }}
        {{ form_widget(form.distanceKm, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg', 'readonly': 'readonly'}}) }}
      </div>
      <div class=\"mb-4\">
        {{ form_label(form.montant) }}
        {{ form_widget(form.montant, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg', 'readonly': 'readonly'}}) }}
      </div>
      {% if form.statut is defined %}
      <div class=\"mb-4\">
        {{ form_label(form.statut) }}
        {{ form_widget(form.statut, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
      </div>
      {% endif %}
    </div>

    {# Boutons de mode pour la carte #}
    <div class=\"mb-4\">
  <button type=\"button\" id=\"selectTaxiBtn\" class=\"mode-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded\">Taxi</button>
  <button type=\"button\" id=\"selectDepartBtn\" class=\"mode-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded\">Départ</button>
  <button type=\"button\" id=\"selectArriveeBtn\" class=\"mode-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded\">Arrivée</button>
  <span id=\"selectionModeDisplay\" class=\"ml-4 font-semibold\">Mode: Sélection du taxi</span>
</div>


    {# Conteneur pour la carte #}
    <div class=\"mb-4\">
      <label class=\"block font-medium mb-2\">Interagissez avec la carte :</label>
      <div id=\"userMapDiv\" style=\"height: 500px; width: 100%; border: 1px solid #ccc;\"></div>
    </div>

    <div class=\"mt-6 flex justify-between items-center\">
      <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg shadow-md transition\">
        Réserver
      </button>
      <a href=\"{{ path('user_courses') }}\" class=\"text-sm text-slate-500 hover:underline\">← Retour à la liste</a>
    </div>
  {{ form_end(form) }}
</div>
{% endblock %}

{% block javascripts %}
  <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">
  <script src=\"https://js.arcgis.com/4.25/\" defer></script>
  <script>
    window.addEventListener(\"load\", function() {
      require([
        \"esri/Map\",
        \"esri/views/MapView\",
        \"esri/Graphic\",
        \"esri/geometry/geometryEngine\"
      ], function(Map, MapView, Graphic, geometryEngine) {

        // Variables pour stocker les marqueurs et le tarif du taxi sélectionné
        var departMarker = null;
        var arriveeMarker = null;
        var selectedTaxiMarker = null; // Permet de n'avoir qu'un taxi sélectionné en vert
        var selectedTaxiRate = null;
        var selectionMode = \"taxi\"; // Modes: \"taxi\", \"depart\", \"arrivee\"
        document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du taxi\";

        // Boutons pour changer le mode
        document.getElementById(\"selectTaxiBtn\").addEventListener(\"click\", function() {
  selectionMode = \"taxi\";
  document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du taxi\";
  console.log(\"Mode taxi activé\");
  updateModeButtons(\"selectTaxiBtn\");
});

        document.getElementById(\"selectDepartBtn\").addEventListener(\"click\", function() {
  selectionMode = \"depart\";
  document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du départ\";
  console.log(\"Mode départ activé\");
  updateModeButtons(\"selectDepartBtn\");
});

        document.getElementById(\"selectArriveeBtn\").addEventListener(\"click\", function() {
  selectionMode = \"arrivee\";
  document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection de l'arrivée\";
  console.log(\"Mode arrivée activé\");
  updateModeButtons(\"selectArriveeBtn\");
});


        // Création de la carte
        var map = new Map({ basemap: \"streets-navigation-vector\" });
        var view = new MapView({
          container: \"userMapDiv\",
          map: map,
          center: [10.18, 36.80],
          zoom: 12
        });

        // Fonction utilitaire pour ajouter un marqueur
        function addMarker(geometry, color, size) {
          return new Graphic({
            geometry: geometry,
            symbol: { type: \"simple-marker\", color: color, size: size || \"12px\" }
          });
        }
function updateModeButtons(activeButtonId) {
  var modeButtons = document.querySelectorAll(\".mode-btn\");
  modeButtons.forEach(function(button) {
    button.classList.remove(\"active-mode\");
  });
  document.getElementById(activeButtonId).classList.add(\"active-mode\");
}

        // Fonction utilitaire pour calculer la distance en kilomètres
        function computeDistance(from, to) {
          return geometryEngine.distance(from, to, \"kilometers\");
        }

        // Récupérer la position de l'utilisateur et charger les taxis proches
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var userLng = position.coords.longitude;
            var userLat = position.coords.latitude;
            view.center = [userLng, userLat];
            var userMarker = addMarker({ type: \"point\", longitude: userLng, latitude: userLat }, \"red\", \"14px\");
            view.graphics.add(userMarker);

            fetch(\"{{ path('get_nearby_taxis') }}?longitude=\" + userLng + \"&latitude=\" + userLat)
              .then(response => response.json())
              .then(function(data) {
                data.forEach(function(taxi) {
                  var taxiPoint = { type: \"point\", longitude: taxi.longitude, latitude: taxi.latitude };
                  var taxiMarker = addMarker(taxiPoint, \"blue\", \"12px\");
                  taxiMarker.attributes = {
                    taxiId: taxi.id,
                    immatriculation: taxi.immatriculation,
                    tarifBase: taxi.tarifBase
                  };
                  view.graphics.add(taxiMarker);
                });
              })
              .catch(function(error) {
                console.error(\"Erreur lors de la récupération des taxis :\", error);
              });
          });
        } else {
          console.warn(\"La géolocalisation n'est pas supportée par ce navigateur.\");
        }

        // Gestion des clics sur la carte
        view.on(\"click\", function(event) {
          console.log(\"Clic détecté en mode :\", selectionMode);
          view.hitTest(event).then(function(response) {
            var results = response.results;
            console.log(\"Résultats hitTest :\", results);
            var clickedGeometry = null;

            if (selectionMode === \"taxi\") {
              // Mode taxi : Recherche d'un taxi parmi les graphiques
              var taxiGraphic = results.find(function(result) {
                return result.graphic.attributes && result.graphic.attributes.taxiId;
              });
              if (taxiGraphic) {
                clickedGeometry = taxiGraphic.graphic.geometry;
                selectedTaxiRate = taxiGraphic.graphic.attributes.tarifBase;
                console.log(\"Taxi sélectionné, Tarif :\", selectedTaxiRate);

                // Supprimer le précédent taxi sélectionné
                if (selectedTaxiMarker) {
                  view.graphics.remove(selectedTaxiMarker);
                }

                // Ajouter le nouveau marqueur en vert
                selectedTaxiMarker = addMarker(clickedGeometry, \"green\", \"14px\");
                selectedTaxiMarker.attributes = taxiGraphic.graphic.attributes;
                view.graphics.add(selectedTaxiMarker);
                document.getElementById('{{ form.taxi.vars.id }}').value = taxiGraphic.graphic.attributes.taxiId;

                // Recalculer la distance et le montant si départ et arrivée existent
                if (departMarker && arriveeMarker && selectedTaxiRate) {
                  var distanceKm = computeDistance(departMarker.geometry, arriveeMarker.geometry);
                  console.log(\"Distance recalculée :\", distanceKm);
                  document.getElementById('{{ form.distanceKm.vars.id }}').value = distanceKm.toFixed(2);
                  var montant = distanceKm * selectedTaxiRate;
                  console.log(\"Montant recalculé :\", montant);
                  document.getElementById('{{ form.montant.vars.id }}').value = montant.toFixed(2);
                }
                return;
              } else {
                console.log(\"Aucun taxi détecté en mode taxi.\");
                return;
              }
            }
            else if (selectionMode === \"depart\") {
              // Mode départ : Traitement du point de départ
              var nonTaxiResults = results.filter(function(result) {
                return !(result.graphic.attributes && result.graphic.attributes.taxiId);
              });
              if (nonTaxiResults.length > 0) {
                clickedGeometry = nonTaxiResults[0].graphic.geometry;
                console.log(\"HitTest non-taxi trouvé pour départ :\", clickedGeometry);
              }
              if (!clickedGeometry) {
                clickedGeometry = event.mapPoint;
                console.log(\"Utilisation de event.mapPoint pour départ :\", clickedGeometry);
              }
              var lat = clickedGeometry.latitude || clickedGeometry.y;
              var lng = clickedGeometry.longitude || clickedGeometry.x;
              var coordText = lat.toFixed(4) + \", \" + lng.toFixed(4);
              document.getElementById('{{ form.villeDepart.vars.id }}').value = coordText;      // Met à jour l'input caché
              document.getElementById(\"displayDepart\").textContent = coordText;        
              // Mise à jour du marqueur de départ
              if (departMarker) { view.graphics.remove(departMarker); }
              departMarker = addMarker(clickedGeometry, \"orange\", \"12px\");
              view.graphics.add(departMarker);
            }
            else if (selectionMode === \"arrivee\") {
              // Mode arrivée : Traitement du point d'arrivée
              var nonTaxiResults = results.filter(function(result) {
                return !(result.graphic.attributes && result.graphic.attributes.taxiId);
              });
              if (nonTaxiResults.length > 0) {
                clickedGeometry = nonTaxiResults[0].graphic.geometry;
                console.log(\"HitTest non-taxi trouvé pour arrivée :\", clickedGeometry);
              }
              if (!clickedGeometry) {
                clickedGeometry = event.mapPoint;
                console.log(\"Utilisation de event.mapPoint pour arrivée :\", clickedGeometry);
              }
              var lat = clickedGeometry.latitude || clickedGeometry.y;
              var lng = clickedGeometry.longitude || clickedGeometry.x;
              var coordText = lat.toFixed(4) + \", \" + lng.toFixed(4);
              document.getElementById('{{ form.villeArrivee.vars.id }}').value = coordText;
              document.getElementById(\"displayArrivee\").textContent = coordText;  
              if (arriveeMarker) { view.graphics.remove(arriveeMarker); }
              arriveeMarker = addMarker(clickedGeometry, \"purple\", \"12px\");
              view.graphics.add(arriveeMarker);
            }

            // Calcul du montant s'il y a déjà des points départ et arrivée et un taxi sélectionné
            if (departMarker && arriveeMarker && selectedTaxiRate) {
              var distanceKm = computeDistance(departMarker.geometry, arriveeMarker.geometry);
              console.log(\"Distance calculée :\", distanceKm);
              document.getElementById('{{ form.distanceKm.vars.id }}').value = distanceKm.toFixed(2);
              var montant = distanceKm * selectedTaxiRate;
              console.log(\"Montant calculé :\", montant);
              document.getElementById('{{ form.montant.vars.id }}').value = montant.toFixed(2);
            }
          });
        });
      });
    });
  </script>
{% endblock %}", "front_office/course/new.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\front_office\\course\\new.html.twig");
    }
}
