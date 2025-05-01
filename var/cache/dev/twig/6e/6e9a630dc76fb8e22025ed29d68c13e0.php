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

/* back_office/taxi/new.html.twig */
class __TwigTemplate_67e0048d6525eac95b87c3c7a4589242 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/taxi/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/taxi/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back_office/taxi/new.html.twig", 1);
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

        yield "Ajouter Taxi";
        
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
        yield "<div class=\"bg-white shadow-md rounded-2xl max-w-3xl mx-auto border border-yellow-300\">
  <!-- Section Titre -->
  <div class=\"px-6 py-3 rounded-t-2xl\" style=\"background-color: rgb(163, 209, 207);\">
    <h1 class=\"text-xl font-bold\" style=\"color: rgb(0, 11, 222);\">Ajouter un nouveau Taxi</h1>
  </div>
  
  <!-- Formulaire -->
  <div class=\"p-6\">
    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
      <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
        <!-- Champ Immatriculation -->
        <div class=\"mb-4\">
          ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "immatriculation", [], "any", false, false, false, 18), 'label');
        yield "
          ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "immatriculation", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
          <div class=\"text-red-500 text-sm mt-1\">";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "immatriculation", [], "any", false, false, false, 20), 'errors');
        yield "</div>
        </div>
        <!-- Champ Marque -->
        <div class=\"mb-4\">
          ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "marque", [], "any", false, false, false, 24), 'label');
        yield "
          ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "marque", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
          <div class=\"text-red-500 text-sm mt-1\">";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "marque", [], "any", false, false, false, 26), 'errors');
        yield "</div>
        </div>
        <!-- Champ Modèle -->
        <div class=\"mb-4\">
          ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "modele", [], "any", false, false, false, 30), 'label');
        yield "
          ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "modele", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
          <div class=\"text-red-500 text-sm mt-1\">";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "modele", [], "any", false, false, false, 32), 'errors');
        yield "</div>
        </div>
        <!-- Champ Année de Fabrication -->
        <div class=\"mb-4\">
          ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "anneeFabrication", [], "any", false, false, false, 36), 'label');
        yield "
          ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "anneeFabrication", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
          <div class=\"text-red-500 text-sm mt-1\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "anneeFabrication", [], "any", false, false, false, 38), 'errors');
        yield "</div>
        </div>
        <!-- Champ Capacité -->
        <div class=\"mb-4\">
          ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "capacite", [], "any", false, false, false, 42), 'label');
        yield "
          ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "capacite", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
          <div class=\"text-red-500 text-sm mt-1\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "capacite", [], "any", false, false, false, 44), 'errors');
        yield "</div>
        </div>
        <!-- Champ Zone Desserte -->
        <div class=\"mb-4\">
          ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "zoneDesserte", [], "any", false, false, false, 48), 'label');
        yield "
          ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "zoneDesserte", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
          <div class=\"text-red-500 text-sm mt-1\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "zoneDesserte", [], "any", false, false, false, 50), 'errors');
        yield "</div>
        </div>
        <!-- Champ Statut -->
        <div class=\"mb-4\">
          ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "statut", [], "any", false, false, false, 54), 'label');
        yield "
          ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "statut", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
          <div class=\"text-red-500 text-sm mt-1\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "statut", [], "any", false, false, false, 56), 'errors');
        yield "</div>
        </div>
        <!-- Champ Numéro de Licence -->
        <div class=\"mb-4\">
          ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "licenceNumero", [], "any", false, false, false, 60), 'label');
        yield "
          ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "licenceNumero", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
          <div class=\"text-red-500 text-sm mt-1\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "licenceNumero", [], "any", false, false, false, 62), 'errors');
        yield "</div>
        </div>
        <!-- Champ Date d'Obtention de Licence -->
        <div class=\"mb-4\">
          ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "licenceDateObtention", [], "any", false, false, false, 66), 'label');
        yield "
          ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "licenceDateObtention", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
          <div class=\"text-red-500 text-sm mt-1\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "licenceDateObtention", [], "any", false, false, false, 68), 'errors');
        yield "</div>
        </div>
        <!-- Champ Tarif de Base -->
        <div class=\"mb-4\">
          ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "tarifBase", [], "any", false, false, false, 72), 'label');
        yield "
          ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "tarifBase", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border rounded-lg"]]);
        yield "
          <div class=\"text-red-500 text-sm mt-1\">";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "tarifBase", [], "any", false, false, false, 74), 'errors');
        yield "</div>
        </div>
      </div>
      
      <!-- Section Carte -->
      <div class=\"mb-4\">
        <label class=\"block font-medium mb-2\">Sélectionnez la position du Taxi :</label>
        <div id=\"mapDiv\" style=\"height: 400px; width: 100%; border: 1px solid #ccc;\"></div>
      </div>
      
      <!-- Champs cachés pour Longitude & Latitude -->
      ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "longitude", [], "any", false, false, false, 85), 'widget');
        yield "
      ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "latitude", [], "any", false, false, false, 86), 'widget');
        yield "
      
      <!-- Bouton -->
      <div class=\"mt-6 flex justify-between items-center\">
        <button type=\"submit\" style=\"background-color: #FFEB3B; color: #ffffff; font-weight: bold; padding: 0.5rem 1.5rem; border: none; border-radius: 0.5rem; box-shadow: 0 2px 4px rgba(0,0,0,0.1);\">
          Ajouter Taxi
        </button>
        <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_index");
        yield "\" class=\"text-sm text-slate-500 hover:underline\">← Retour à la liste</a>
      </div>
    ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        yield "
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

        // line 101
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  ";
        // line 103
        yield "  <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">
  <script src=\"https://js.arcgis.com/4.25/\" defer></script>

  <script>
    // Utilisation de window.load pour attendre toutes les ressources
    window.addEventListener(\"load\", function () {
      require([
        \"esri/Map\",
        \"esri/views/MapView\",
        \"esri/Graphic\"
      ], function(Map, MapView, Graphic) {

        console.log(\"Modules ArcGIS chargés (Ajout Taxi)\");

        const map = new Map({ basemap: \"streets-navigation-vector\" });

        // Utilisation des valeurs du formulaire ou valeurs par défaut
        const longitude = ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 120), "value", [], "any", false, true, false, 120), "longitude", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "vars", [], "any", false, false, false, 120), "value", [], "any", false, false, false, 120), "longitude", [], "any", false, false, false, 120), 10.18)) : (10.18)), "html", null, true);
        yield ";
        const latitude = ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 121), "value", [], "any", false, true, false, 121), "latitude", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "vars", [], "any", false, false, false, 121), "value", [], "any", false, false, false, 121), "latitude", [], "any", false, false, false, 121), 36.8)) : (36.8)), "html", null, true);
        yield ";
        console.log(\"Coordonnées initiales (Ajout Taxi) :\", longitude, latitude);

        const view = new MapView({
          container: \"mapDiv\",
          map: map,
          zoom: 12,
          center: [longitude, latitude]
        });

        ";
        // line 131
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "vars", [], "any", false, false, false, 131), "value", [], "any", false, false, false, 131) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "vars", [], "any", false, false, false, 131), "value", [], "any", false, false, false, 131), "longitude", [], "any", false, false, false, 131))) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "vars", [], "any", false, false, false, 131), "value", [], "any", false, false, false, 131), "latitude", [], "any", false, false, false, 131)))) {
            // line 132
            yield "          const initialGraphic = new Graphic({
            geometry: { type: \"point\", longitude: longitude, latitude: latitude },
            symbol: { type: \"simple-marker\", color: \"blue\", size: \"12px\" }
          });
          view.graphics.add(initialGraphic);
          console.log(\"Marqueur initial ajouté (Ajout Taxi)\");
        ";
        }
        // line 139
        yield "
        view.on(\"click\", function(event) {
          console.log(\"Clic sur la carte (Ajout Taxi) :\", event.mapPoint);
          view.graphics.removeAll();
          const point = { type: \"point\", longitude: event.mapPoint.longitude, latitude: event.mapPoint.latitude };
          const marker = new Graphic({
            geometry: point,
            symbol: { type: \"simple-marker\", color: \"blue\", size: \"12px\" }
          });
          view.graphics.add(marker);

          const lngField = document.getElementById('";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "longitude", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "id", [], "any", false, false, false, 150), "html", null, true);
        yield "');
          const latField = document.getElementById('";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "latitude", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151), "html", null, true);
        yield "');
          if(lngField && latField){
            lngField.value = event.mapPoint.longitude;
            latField.value = event.mapPoint.latitude;
            console.log(\"Coordonnées mises à jour (Ajout Taxi) :\", lngField.value, latField.value);
          } else {
            console.error(\"Champs de coordonnées introuvables (Ajout Taxi)\");
          }
        });
      });
    });
  </script>

  ";
        // line 165
        yield "  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script>
    \$(document).ready(function () {
      \$('#";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "marque", [], "any", false, false, false, 168), "vars", [], "any", false, false, false, 168), "id", [], "any", false, false, false, 168), "html", null, true);
        yield "').on('change', function () {
        const marque = \$(this).val();
        const modeleField = \$('#";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "modele", [], "any", false, false, false, 170), "vars", [], "any", false, false, false, 170), "id", [], "any", false, false, false, 170), "html", null, true);
        yield "');
        if (marque) {
          \$.ajax({
            url: '";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_models");
        yield "',
            method: 'POST',
            data: { marque: marque },
            success: function (data) {
              modeleField.empty();
              modeleField.append('<option value=\"\">Choisissez un modèle</option>');
              data.forEach(function (model) {
                modeleField.append('<option value=\"' + model + '\">' + model + '</option>');
              });
            },
            error: function () {
              alert('Une erreur est survenue lors du chargement des modèles.');
            }
          });
        } else {
          modeleField.empty();
          modeleField.append('<option value=\"\">Choisissez d\\'abord une marque</option>');
        }
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
        return "back_office/taxi/new.html.twig";
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
        return array (  423 => 173,  417 => 170,  412 => 168,  407 => 165,  391 => 151,  387 => 150,  374 => 139,  365 => 132,  363 => 131,  350 => 121,  346 => 120,  327 => 103,  322 => 101,  309 => 100,  294 => 95,  289 => 93,  279 => 86,  275 => 85,  261 => 74,  257 => 73,  253 => 72,  246 => 68,  242 => 67,  238 => 66,  231 => 62,  227 => 61,  223 => 60,  216 => 56,  212 => 55,  208 => 54,  201 => 50,  197 => 49,  193 => 48,  186 => 44,  182 => 43,  178 => 42,  171 => 38,  167 => 37,  163 => 36,  156 => 32,  152 => 31,  148 => 30,  141 => 26,  137 => 25,  133 => 24,  126 => 20,  122 => 19,  118 => 18,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter Taxi{% endblock %}

{% block body %}
<div class=\"bg-white shadow-md rounded-2xl max-w-3xl mx-auto border border-yellow-300\">
  <!-- Section Titre -->
  <div class=\"px-6 py-3 rounded-t-2xl\" style=\"background-color: rgb(163, 209, 207);\">
    <h1 class=\"text-xl font-bold\" style=\"color: rgb(0, 11, 222);\">Ajouter un nouveau Taxi</h1>
  </div>
  
  <!-- Formulaire -->
  <div class=\"p-6\">
    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
      <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
        <!-- Champ Immatriculation -->
        <div class=\"mb-4\">
          {{ form_label(form.immatriculation) }}
          {{ form_widget(form.immatriculation, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
          <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.immatriculation) }}</div>
        </div>
        <!-- Champ Marque -->
        <div class=\"mb-4\">
          {{ form_label(form.marque) }}
          {{ form_widget(form.marque, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
          <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.marque) }}</div>
        </div>
        <!-- Champ Modèle -->
        <div class=\"mb-4\">
          {{ form_label(form.modele) }}
          {{ form_widget(form.modele, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
          <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.modele) }}</div>
        </div>
        <!-- Champ Année de Fabrication -->
        <div class=\"mb-4\">
          {{ form_label(form.anneeFabrication) }}
          {{ form_widget(form.anneeFabrication, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
          <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.anneeFabrication) }}</div>
        </div>
        <!-- Champ Capacité -->
        <div class=\"mb-4\">
          {{ form_label(form.capacite) }}
          {{ form_widget(form.capacite, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
          <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.capacite) }}</div>
        </div>
        <!-- Champ Zone Desserte -->
        <div class=\"mb-4\">
          {{ form_label(form.zoneDesserte) }}
          {{ form_widget(form.zoneDesserte, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
          <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.zoneDesserte) }}</div>
        </div>
        <!-- Champ Statut -->
        <div class=\"mb-4\">
          {{ form_label(form.statut) }}
          {{ form_widget(form.statut, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
          <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.statut) }}</div>
        </div>
        <!-- Champ Numéro de Licence -->
        <div class=\"mb-4\">
          {{ form_label(form.licenceNumero) }}
          {{ form_widget(form.licenceNumero, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
          <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.licenceNumero) }}</div>
        </div>
        <!-- Champ Date d'Obtention de Licence -->
        <div class=\"mb-4\">
          {{ form_label(form.licenceDateObtention) }}
          {{ form_widget(form.licenceDateObtention, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
          <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.licenceDateObtention) }}</div>
        </div>
        <!-- Champ Tarif de Base -->
        <div class=\"mb-4\">
          {{ form_label(form.tarifBase) }}
          {{ form_widget(form.tarifBase, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg'}}) }}
          <div class=\"text-red-500 text-sm mt-1\">{{ form_errors(form.tarifBase) }}</div>
        </div>
      </div>
      
      <!-- Section Carte -->
      <div class=\"mb-4\">
        <label class=\"block font-medium mb-2\">Sélectionnez la position du Taxi :</label>
        <div id=\"mapDiv\" style=\"height: 400px; width: 100%; border: 1px solid #ccc;\"></div>
      </div>
      
      <!-- Champs cachés pour Longitude & Latitude -->
      {{ form_widget(form.longitude) }}
      {{ form_widget(form.latitude) }}
      
      <!-- Bouton -->
      <div class=\"mt-6 flex justify-between items-center\">
        <button type=\"submit\" style=\"background-color: #FFEB3B; color: #ffffff; font-weight: bold; padding: 0.5rem 1.5rem; border: none; border-radius: 0.5rem; box-shadow: 0 2px 4px rgba(0,0,0,0.1);\">
          Ajouter Taxi
        </button>
        <a href=\"{{ path('taxi_index') }}\" class=\"text-sm text-slate-500 hover:underline\">← Retour à la liste</a>
      </div>
    {{ form_end(form) }}
  </div>
</div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  {# Inclusion de l'API ArcGIS avec defer pour s'assurer qu'elle se charge après le parsing du DOM #}
  <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">
  <script src=\"https://js.arcgis.com/4.25/\" defer></script>

  <script>
    // Utilisation de window.load pour attendre toutes les ressources
    window.addEventListener(\"load\", function () {
      require([
        \"esri/Map\",
        \"esri/views/MapView\",
        \"esri/Graphic\"
      ], function(Map, MapView, Graphic) {

        console.log(\"Modules ArcGIS chargés (Ajout Taxi)\");

        const map = new Map({ basemap: \"streets-navigation-vector\" });

        // Utilisation des valeurs du formulaire ou valeurs par défaut
        const longitude = {{ form.vars.value.longitude|default(10.18) }};
        const latitude = {{ form.vars.value.latitude|default(36.80) }};
        console.log(\"Coordonnées initiales (Ajout Taxi) :\", longitude, latitude);

        const view = new MapView({
          container: \"mapDiv\",
          map: map,
          zoom: 12,
          center: [longitude, latitude]
        });

        {% if form.vars.value and form.vars.value.longitude is not null and form.vars.value.latitude is not null %}
          const initialGraphic = new Graphic({
            geometry: { type: \"point\", longitude: longitude, latitude: latitude },
            symbol: { type: \"simple-marker\", color: \"blue\", size: \"12px\" }
          });
          view.graphics.add(initialGraphic);
          console.log(\"Marqueur initial ajouté (Ajout Taxi)\");
        {% endif %}

        view.on(\"click\", function(event) {
          console.log(\"Clic sur la carte (Ajout Taxi) :\", event.mapPoint);
          view.graphics.removeAll();
          const point = { type: \"point\", longitude: event.mapPoint.longitude, latitude: event.mapPoint.latitude };
          const marker = new Graphic({
            geometry: point,
            symbol: { type: \"simple-marker\", color: \"blue\", size: \"12px\" }
          });
          view.graphics.add(marker);

          const lngField = document.getElementById('{{ form.longitude.vars.id }}');
          const latField = document.getElementById('{{ form.latitude.vars.id }}');
          if(lngField && latField){
            lngField.value = event.mapPoint.longitude;
            latField.value = event.mapPoint.latitude;
            console.log(\"Coordonnées mises à jour (Ajout Taxi) :\", lngField.value, latField.value);
          } else {
            console.error(\"Champs de coordonnées introuvables (Ajout Taxi)\");
          }
        });
      });
    });
  </script>

  {# Script AJAX pour le champ modèle (si nécessaire) #}
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script>
    \$(document).ready(function () {
      \$('#{{ form.marque.vars.id }}').on('change', function () {
        const marque = \$(this).val();
        const modeleField = \$('#{{ form.modele.vars.id }}');
        if (marque) {
          \$.ajax({
            url: '{{ path(\"get_models\") }}',
            method: 'POST',
            data: { marque: marque },
            success: function (data) {
              modeleField.empty();
              modeleField.append('<option value=\"\">Choisissez un modèle</option>');
              data.forEach(function (model) {
                modeleField.append('<option value=\"' + model + '\">' + model + '</option>');
              });
            },
            error: function () {
              alert('Une erreur est survenue lors du chargement des modèles.');
            }
          });
        } else {
          modeleField.empty();
          modeleField.append('<option value=\"\">Choisissez d\\'abord une marque</option>');
        }
      });
    });
  </script>

{% endblock %}
", "back_office/taxi/new.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\back_office\\taxi\\new.html.twig");
    }
}
