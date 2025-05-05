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

/* back_office/course/edit.html.twig */
class __TwigTemplate_7ee4c8e4427781f25449294796d3f9b7 extends Template
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
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/course/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/course/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back_office/course/edit.html.twig", 1);
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

        yield "Modifier une Course";
        
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

        yield "Modifier une Course";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"bg-white shadow-md rounded-2xl p-6 max-w-4xl mx-auto border border-yellow-300\">
  <div class=\"px-6 py-3 rounded-t-2xl\" style=\"background-color: #FFEB3B;\">
    <h1 class=\"text-xl font-bold\" style=\"color: #FF9800;\">Modifier une Course</h1>
  </div>

  ";
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12)) > 0)) {
            // line 13
            yield "    <div class=\"mb-4 p-4 bg-red-100 text-red-500 border border-red-300 rounded\">
      ";
            // line 14
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'errors');
            yield "
    </div>
  ";
        }
        // line 17
        yield "
  ";
        // line 19
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
      ";
        // line 22
        yield "      <div class=\"mb-4\" style=\"display: none;\">
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "taxi", [], "any", false, false, false, 23), 'label');
        yield "
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "taxi", [], "any", false, false, false, 24), 'widget');
        yield "
        <div class=\"text-red-500 text-sm mt-1\">";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "taxi", [], "any", false, false, false, 25), 'errors');
        yield "</div>
      </div>
      
      <div class=\"mb-4\">
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "dateCourse", [], "any", false, false, false, 29), 'label');
        yield "
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "dateCourse", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
        <div class=\"text-red-500 text-sm mt-1\">";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateCourse", [], "any", false, false, false, 31), 'errors');
        yield "</div>
      </div>
      
      ";
        // line 35
        yield "      <div class=\"mb-4\" style=\"display: none;\">
        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "villeDepart", [], "any", false, false, false, 36), 'label');
        yield "
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "villeDepart", [], "any", false, false, false, 37), 'widget');
        yield "
        <div class=\"text-red-500 text-sm mt-1\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "villeDepart", [], "any", false, false, false, 38), 'errors');
        yield "</div>
      </div>
      <div class=\"mb-4\" style=\"display: none;\">
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "villeArrivee", [], "any", false, false, false, 41), 'label');
        yield "
        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "villeArrivee", [], "any", false, false, false, 42), 'widget');
        yield "
        <div class=\"text-red-500 text-sm mt-1\">";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "villeArrivee", [], "any", false, false, false, 43), 'errors');
        yield "</div>
      </div>
      
      ";
        // line 47
        yield "      <div class=\"mb-4\">
        <label class=\"block font-medium mb-1\">Ville de départ</label>
        <span id=\"displayDepart\" class=\"block w-full px-4 py-2 border rounded-lg bg-gray-100\"></span>
      </div>
      <div class=\"mb-4\">
        <label class=\"block font-medium mb-1\">Ville d'arrivée</label>
        <span id=\"displayArrivee\" class=\"block w-full px-4 py-2 border rounded-lg bg-gray-100\"></span>
      </div>
      
      ";
        // line 57
        yield "      <div class=\"mb-4\">
        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "distanceKm", [], "any", false, false, false, 58), 'label');
        yield "
        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "distanceKm", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg", "readonly" => "readonly"]]);
        yield "
      </div>
      <div class=\"mb-4\">
        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "montant", [], "any", false, false, false, 62), 'label');
        yield "
        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "montant", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg", "readonly" => "readonly"]]);
        yield "
      </div>
      
      ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", true, true, false, 66)) {
            // line 67
            yield "      <div class=\"mb-4\">
        ";
            // line 68
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "statut", [], "any", false, false, false, 68), 'label');
            yield "
        ";
            // line 69
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "statut", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
            yield "
        <div class=\"text-red-500 text-sm mt-1\">";
            // line 70
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "statut", [], "any", false, false, false, 70), 'errors');
            yield "</div>
      </div>
      ";
        }
        // line 73
        yield "    </div>

    ";
        // line 76
        yield "    <div class=\"mb-4\">
      <button type=\"button\" id=\"selectTaxiBtn\" class=\"mode-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded\">Taxi</button>
      <button type=\"button\" id=\"selectDepartBtn\" class=\"mode-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded\">Départ</button>
      <button type=\"button\" id=\"selectArriveeBtn\" class=\"mode-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded\">Arrivée</button>
      <span id=\"selectionModeDisplay\" class=\"ml-4 font-semibold\">Mode: Sélection du taxi</span>
    </div>

    ";
        // line 84
        yield "    <div class=\"mb-4\">
      <label class=\"block font-medium mb-2\">Interagissez avec la carte :</label>
      <div id=\"userMapDiv\" style=\"height: 500px; width: 100%; border: 1px solid #ccc;\"></div>
    </div>

    <div class=\"mt-6 flex justify-between items-center\">
      <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg shadow-md transition\">
        Enregistrer
      </button>
      <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_index");
        yield "\" class=\"text-sm text-slate-500 hover:underline\">← Retour à la liste</a>
    </div>
  ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
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

        // line 100
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <style>
    .active-mode {
      background-color: #4F46E5 !important;
      color: white !important;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 109
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

        // line 110
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">
  <script src=\"https://js.arcgis.com/4.25/\" defer></script>
  <script>
    window.addEventListener(\"load\", function () {
      require([
        \"esri/Map\",
        \"esri/views/MapView\",
        \"esri/Graphic\",
        \"esri/geometry/geometryEngine\"
      ], function(Map, MapView, Graphic, geometryEngine) {

        // Variables pour stocker les marqueurs et sélections
        var departMarker = null;
        var arriveeMarker = null;
        var selectedTaxiMarker = null;
        var selectedTaxiRate = null;
        var selectionMode = \"taxi\"; // Modes: \"taxi\", \"depart\", \"arrivee\"
        document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du taxi\";

        // Fonction pour mettre à jour les boutons de mode
        function updateModeButtons(activeButtonId) {
          var modeButtons = document.querySelectorAll(\".mode-btn\");
          modeButtons.forEach(function(button) {
            button.classList.remove(\"active-mode\");
          });
          document.getElementById(activeButtonId).classList.add(\"active-mode\");
        }

        // Boutons pour changer le mode
        document.getElementById(\"selectTaxiBtn\").addEventListener(\"click\", function () {
          selectionMode = \"taxi\";
          document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du taxi\";
          updateModeButtons(\"selectTaxiBtn\");
          console.log(\"Mode taxi activé\");
        });
        document.getElementById(\"selectDepartBtn\").addEventListener(\"click\", function () {
          selectionMode = \"depart\";
          document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du départ\";
          updateModeButtons(\"selectDepartBtn\");
          console.log(\"Mode départ activé\");
        });
        document.getElementById(\"selectArriveeBtn\").addEventListener(\"click\", function () {
          selectionMode = \"arrivee\";
          document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection de l'arrivée\";
          updateModeButtons(\"selectArriveeBtn\");
          console.log(\"Mode arrivée activé\");
        });

        var map = new Map({ basemap: \"streets-navigation-vector\" });
        var view = new MapView({
          container: \"userMapDiv\",
          map: map,
          center: [10.18, 36.80],
          zoom: 12
        });

        function addMarker(geometry, color, size) {
          return new Graphic({
            geometry: geometry,
            symbol: { type: \"simple-marker\", color: color, size: size || \"12px\" }
          });
        }

        function computeDistance(from, to) {
          return geometryEngine.distance(from, to, \"kilometers\");
        }

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function (position) {
            var userLng = position.coords.longitude;
            var userLat = position.coords.latitude;
            view.center = [userLng, userLat];
            var userMarker = addMarker({ type: \"point\", longitude: userLng, latitude: userLat }, \"red\", \"14px\");
            view.graphics.add(userMarker);

            fetch(\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_nearby_taxis");
        yield "?longitude=\" + userLng + \"&latitude=\" + userLat)
              .then(response => response.json())
              .then(function (data) {
                data.forEach(function (taxi) {
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
              .catch(function (error) {
                console.error(\"Erreur lors de la récupération des taxis :\", error);
              });
          });
        } else {
          console.warn(\"La géolocalisation n'est pas supportée par ce navigateur.\");
        }

        // Gestion des clics sur la carte
        view.on(\"click\", function (event) {
          // Pour les modes 'depart' et 'arrivee', utiliser directement event.mapPoint
          if (selectionMode === \"depart\") {
            var clickedPoint = event.mapPoint;
            var lat = clickedPoint.latitude || clickedPoint.y;
            var lng = clickedPoint.longitude || clickedPoint.x;
            var coordText = lat.toFixed(4) + \", \" + lng.toFixed(4);
            // Mettre à jour les champs et l'affichage visible de ville de départ
            document.getElementById('";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "villeDepart", [], "any", false, false, false, 217), "vars", [], "any", false, false, false, 217), "id", [], "any", false, false, false, 217), "html", null, true);
        yield "').value = coordText;
            document.getElementById(\"displayDepart\").textContent = coordText;
            console.log(\"Départ sélectionné :\", coordText);
            if (departMarker) { view.graphics.remove(departMarker); }
            departMarker = addMarker(clickedPoint, \"orange\", \"12px\");
            view.graphics.add(departMarker);
          } else if (selectionMode === \"arrivee\") {
            var clickedPoint = event.mapPoint;
            var lat = clickedPoint.latitude || clickedPoint.y;
            var lng = clickedPoint.longitude || clickedPoint.x;
            var coordText = lat.toFixed(4) + \", \" + lng.toFixed(4);
            // Mise à jour des champs et de l'affichage visible pour l'arrivée
            document.getElementById('";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "villeArrivee", [], "any", false, false, false, 229), "vars", [], "any", false, false, false, 229), "id", [], "any", false, false, false, 229), "html", null, true);
        yield "').value = coordText;
            document.getElementById(\"displayArrivee\").textContent = coordText;
            console.log(\"Arrivée sélectionnée :\", coordText);
            if (arriveeMarker) { view.graphics.remove(arriveeMarker); }
            arriveeMarker = addMarker(clickedPoint, \"purple\", \"12px\");
            view.graphics.add(arriveeMarker);
          }
          else if (selectionMode === \"taxi\") {
            view.hitTest(event).then(function (response) {
              var results = response.results;
              var taxiResult = results.find(function (result) {
                return result.graphic.attributes && result.graphic.attributes.taxiId;
              });
              if (taxiResult) {
                // Réinitialiser le taxi sélectionné s'il en existait un
                if (selectedTaxiMarker) {
                  selectedTaxiMarker.symbol.color = \"blue\";
                  view.graphics.refresh();
                }
                selectedTaxiRate = taxiResult.graphic.attributes.tarifBase;
                console.log(\"Taxi sélectionné, Tarif:\", selectedTaxiRate);
                view.graphics.remove(taxiResult.graphic);
                selectedTaxiMarker = addMarker(taxiResult.graphic.geometry, \"green\", \"14px\");
                selectedTaxiMarker.attributes = taxiResult.graphic.attributes;
                view.graphics.add(selectedTaxiMarker);
                document.getElementById('";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "taxi", [], "any", false, false, false, 254), "vars", [], "any", false, false, false, 254), "id", [], "any", false, false, false, 254), "html", null, true);
        yield "').value = taxiResult.graphic.attributes.taxiId;
              } else {
                console.log(\"Aucun taxi détecté en mode taxi.\");
              }
            });
          }

          // Calcul si départ, arrivée et tarif taxi sont définis
          if (departMarker && arriveeMarker && selectedTaxiRate) {
            var distanceKm = computeDistance(departMarker.geometry, arriveeMarker.geometry);
            document.getElementById('";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "distanceKm", [], "any", false, false, false, 264), "vars", [], "any", false, false, false, 264), "id", [], "any", false, false, false, 264), "html", null, true);
        yield "').value = distanceKm.toFixed(2);
            var montant = distanceKm * selectedTaxiRate;
            document.getElementById('";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "montant", [], "any", false, false, false, 266), "vars", [], "any", false, false, false, 266), "id", [], "any", false, false, false, 266), "html", null, true);
        yield "').value = montant.toFixed(2);
            console.log(\"Distance:\", distanceKm, \"Montant:\", montant);
          }
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
        return "back_office/course/edit.html.twig";
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
        return array (  533 => 266,  528 => 264,  515 => 254,  487 => 229,  472 => 217,  438 => 186,  358 => 110,  345 => 109,  325 => 100,  312 => 99,  298 => 95,  293 => 93,  282 => 84,  273 => 76,  269 => 73,  263 => 70,  259 => 69,  255 => 68,  252 => 67,  250 => 66,  244 => 63,  240 => 62,  234 => 59,  230 => 58,  227 => 57,  216 => 47,  210 => 43,  206 => 42,  202 => 41,  196 => 38,  192 => 37,  188 => 36,  185 => 35,  179 => 31,  175 => 30,  171 => 29,  164 => 25,  160 => 24,  156 => 23,  153 => 22,  147 => 19,  144 => 17,  138 => 14,  135 => 13,  133 => 12,  126 => 7,  113 => 6,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier une Course{% endblock %}
{% block page_title %}Modifier une Course{% endblock %}

{% block body %}
<div class=\"bg-white shadow-md rounded-2xl p-6 max-w-4xl mx-auto border border-yellow-300\">
  <div class=\"px-6 py-3 rounded-t-2xl\" style=\"background-color: #FFEB3B;\">
    <h1 class=\"text-xl font-bold\" style=\"color: #FF9800;\">Modifier une Course</h1>
  </div>

  {% if form.vars.errors|length > 0 %}
    <div class=\"mb-4 p-4 bg-red-100 text-red-500 border border-red-300 rounded\">
      {{ form_errors(form) }}
    </div>
  {% endif %}

  {# Démarrer le formulaire (validation HTML5 désactivée) #}
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
      
      {# Champs de ville masqués dans le formulaire #}
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
        {{ form_widget(form.distanceKm, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg','readonly': 'readonly'}}) }}
      </div>
      <div class=\"mb-4\">
        {{ form_label(form.montant) }}
        {{ form_widget(form.montant, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg','readonly': 'readonly'}}) }}
      </div>
      
      {% if form.statut is defined %}
      <div class=\"mb-4\">
        {{ form_label(form.statut) }}
        {{ form_widget(form.statut, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
        <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.statut) }}</div>
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
        Enregistrer
      </button>
      <a href=\"{{ path('course_index') }}\" class=\"text-sm text-slate-500 hover:underline\">← Retour à la liste</a>
    </div>
  {{ form_end(form) }}
</div>
{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <style>
    .active-mode {
      background-color: #4F46E5 !important;
      color: white !important;
    }
  </style>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">
  <script src=\"https://js.arcgis.com/4.25/\" defer></script>
  <script>
    window.addEventListener(\"load\", function () {
      require([
        \"esri/Map\",
        \"esri/views/MapView\",
        \"esri/Graphic\",
        \"esri/geometry/geometryEngine\"
      ], function(Map, MapView, Graphic, geometryEngine) {

        // Variables pour stocker les marqueurs et sélections
        var departMarker = null;
        var arriveeMarker = null;
        var selectedTaxiMarker = null;
        var selectedTaxiRate = null;
        var selectionMode = \"taxi\"; // Modes: \"taxi\", \"depart\", \"arrivee\"
        document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du taxi\";

        // Fonction pour mettre à jour les boutons de mode
        function updateModeButtons(activeButtonId) {
          var modeButtons = document.querySelectorAll(\".mode-btn\");
          modeButtons.forEach(function(button) {
            button.classList.remove(\"active-mode\");
          });
          document.getElementById(activeButtonId).classList.add(\"active-mode\");
        }

        // Boutons pour changer le mode
        document.getElementById(\"selectTaxiBtn\").addEventListener(\"click\", function () {
          selectionMode = \"taxi\";
          document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du taxi\";
          updateModeButtons(\"selectTaxiBtn\");
          console.log(\"Mode taxi activé\");
        });
        document.getElementById(\"selectDepartBtn\").addEventListener(\"click\", function () {
          selectionMode = \"depart\";
          document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection du départ\";
          updateModeButtons(\"selectDepartBtn\");
          console.log(\"Mode départ activé\");
        });
        document.getElementById(\"selectArriveeBtn\").addEventListener(\"click\", function () {
          selectionMode = \"arrivee\";
          document.getElementById(\"selectionModeDisplay\").textContent = \"Mode: Sélection de l'arrivée\";
          updateModeButtons(\"selectArriveeBtn\");
          console.log(\"Mode arrivée activé\");
        });

        var map = new Map({ basemap: \"streets-navigation-vector\" });
        var view = new MapView({
          container: \"userMapDiv\",
          map: map,
          center: [10.18, 36.80],
          zoom: 12
        });

        function addMarker(geometry, color, size) {
          return new Graphic({
            geometry: geometry,
            symbol: { type: \"simple-marker\", color: color, size: size || \"12px\" }
          });
        }

        function computeDistance(from, to) {
          return geometryEngine.distance(from, to, \"kilometers\");
        }

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function (position) {
            var userLng = position.coords.longitude;
            var userLat = position.coords.latitude;
            view.center = [userLng, userLat];
            var userMarker = addMarker({ type: \"point\", longitude: userLng, latitude: userLat }, \"red\", \"14px\");
            view.graphics.add(userMarker);

            fetch(\"{{ path('get_nearby_taxis') }}?longitude=\" + userLng + \"&latitude=\" + userLat)
              .then(response => response.json())
              .then(function (data) {
                data.forEach(function (taxi) {
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
              .catch(function (error) {
                console.error(\"Erreur lors de la récupération des taxis :\", error);
              });
          });
        } else {
          console.warn(\"La géolocalisation n'est pas supportée par ce navigateur.\");
        }

        // Gestion des clics sur la carte
        view.on(\"click\", function (event) {
          // Pour les modes 'depart' et 'arrivee', utiliser directement event.mapPoint
          if (selectionMode === \"depart\") {
            var clickedPoint = event.mapPoint;
            var lat = clickedPoint.latitude || clickedPoint.y;
            var lng = clickedPoint.longitude || clickedPoint.x;
            var coordText = lat.toFixed(4) + \", \" + lng.toFixed(4);
            // Mettre à jour les champs et l'affichage visible de ville de départ
            document.getElementById('{{ form.villeDepart.vars.id }}').value = coordText;
            document.getElementById(\"displayDepart\").textContent = coordText;
            console.log(\"Départ sélectionné :\", coordText);
            if (departMarker) { view.graphics.remove(departMarker); }
            departMarker = addMarker(clickedPoint, \"orange\", \"12px\");
            view.graphics.add(departMarker);
          } else if (selectionMode === \"arrivee\") {
            var clickedPoint = event.mapPoint;
            var lat = clickedPoint.latitude || clickedPoint.y;
            var lng = clickedPoint.longitude || clickedPoint.x;
            var coordText = lat.toFixed(4) + \", \" + lng.toFixed(4);
            // Mise à jour des champs et de l'affichage visible pour l'arrivée
            document.getElementById('{{ form.villeArrivee.vars.id }}').value = coordText;
            document.getElementById(\"displayArrivee\").textContent = coordText;
            console.log(\"Arrivée sélectionnée :\", coordText);
            if (arriveeMarker) { view.graphics.remove(arriveeMarker); }
            arriveeMarker = addMarker(clickedPoint, \"purple\", \"12px\");
            view.graphics.add(arriveeMarker);
          }
          else if (selectionMode === \"taxi\") {
            view.hitTest(event).then(function (response) {
              var results = response.results;
              var taxiResult = results.find(function (result) {
                return result.graphic.attributes && result.graphic.attributes.taxiId;
              });
              if (taxiResult) {
                // Réinitialiser le taxi sélectionné s'il en existait un
                if (selectedTaxiMarker) {
                  selectedTaxiMarker.symbol.color = \"blue\";
                  view.graphics.refresh();
                }
                selectedTaxiRate = taxiResult.graphic.attributes.tarifBase;
                console.log(\"Taxi sélectionné, Tarif:\", selectedTaxiRate);
                view.graphics.remove(taxiResult.graphic);
                selectedTaxiMarker = addMarker(taxiResult.graphic.geometry, \"green\", \"14px\");
                selectedTaxiMarker.attributes = taxiResult.graphic.attributes;
                view.graphics.add(selectedTaxiMarker);
                document.getElementById('{{ form.taxi.vars.id }}').value = taxiResult.graphic.attributes.taxiId;
              } else {
                console.log(\"Aucun taxi détecté en mode taxi.\");
              }
            });
          }

          // Calcul si départ, arrivée et tarif taxi sont définis
          if (departMarker && arriveeMarker && selectedTaxiRate) {
            var distanceKm = computeDistance(departMarker.geometry, arriveeMarker.geometry);
            document.getElementById('{{ form.distanceKm.vars.id }}').value = distanceKm.toFixed(2);
            var montant = distanceKm * selectedTaxiRate;
            document.getElementById('{{ form.montant.vars.id }}').value = montant.toFixed(2);
            console.log(\"Distance:\", distanceKm, \"Montant:\", montant);
          }
        });
      });
    });
  </script>
{% endblock %}
", "back_office/course/edit.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\back_office\\course\\edit.html.twig");
    }
}
