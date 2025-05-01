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

/* back_office/course/map.html.twig */
class __TwigTemplate_17d5e0dac2014052c32a292e65d5fcb5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/course/map.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/course/map.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back_office/course/map.html.twig", 1);
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

        yield "Carte des zones actives";
        
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
  <!-- CSS ArcGIS -->
  <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.26/esri/themes/light/main.css\">
  <style>
    #viewDiv {
      width: 90%;
      height: 750px;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "<div style=\"margin-left: 50px;\">
  <h1 class=\"mb-4\">Zones de réservation</h1>
  <div id=\"viewDiv\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <!-- API ArcGIS for JavaScript -->
  <script src=\"https://js.arcgis.com/4.26/\"></script>
  <script>
    require([
      \"esri/Map\",
      \"esri/views/MapView\",
      \"esri/layers/FeatureLayer\"
    ], function(Map, MapView, FeatureLayer) {

      // Initialiser la carte
      const map = new Map({ basemap: \"streets-navigation-vector\" });
      const view = new MapView({
        container: \"viewDiv\",
        map: map,
        center: [10.2, 36.8], // [lon, lat]
        zoom: 10
      });

      // Récupérer les données PHP
      const zonePoints = ";
        // line 44
        yield json_encode((isset($context["zonePoints"]) || array_key_exists("zonePoints", $context) ? $context["zonePoints"] : (function () { throw new RuntimeError('Variable "zonePoints" does not exist.', 44, $this->source); })()));
        yield ";
      const maxCount  = ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxCount"]) || array_key_exists("maxCount", $context) ? $context["maxCount"] : (function () { throw new RuntimeError('Variable "maxCount" does not exist.', 45, $this->source); })()), "html", null, true);
        yield ";

      // Préparer les features
      const features = zonePoints.map(p => ({
        geometry: {
          type: \"point\",
          longitude: p.lon,
          latitude:  p.lat
        },
        attributes: {
          objectId: p.objectId,
          count:    p.count
        }
      }));

      // Créer un FeatureLayer client-side
      const layer = new FeatureLayer({
        source: features,
        objectIdField: \"objectId\",
        fields: [
          { name: \"objectId\", type: \"oid\" },
          { name: \"count\",    type: \"double\" }
        ],
        renderer: {
          type: \"simple\",
          symbol: {
            type: \"simple-marker\",
            outline: { color: [255, 255, 255, 0.8], width: 1 }
          },
          visualVariables: [
            {
              type: \"size\",
              field: \"count\",
              stops: [
                { value: 1,        size: 10 },
                { value: maxCount, size: 40 }
              ]
            },
            {
              type: \"color\",
              field: \"count\",
              stops: [
                { value: 1,        color: \"rgba(0, 255, 255, 0.6)\" },
                { value: maxCount, color: \"rgba(255, 0, 0, 0.6)\" }
              ]
            }
          ]
        },
        title: \"Zones actives\"
      });

      // Ajouter le layer à la carte
      map.add(layer);
    });
  </script>
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
        return "back_office/course/map.html.twig";
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
        return array (  192 => 45,  188 => 44,  164 => 24,  151 => 23,  137 => 18,  124 => 17,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Carte des zones actives{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <!-- CSS ArcGIS -->
  <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.26/esri/themes/light/main.css\">
  <style>
    #viewDiv {
      width: 90%;
      height: 750px;
    }
  </style>
{% endblock %}

{% block body %}
<div style=\"margin-left: 50px;\">
  <h1 class=\"mb-4\">Zones de réservation</h1>
  <div id=\"viewDiv\"></div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <!-- API ArcGIS for JavaScript -->
  <script src=\"https://js.arcgis.com/4.26/\"></script>
  <script>
    require([
      \"esri/Map\",
      \"esri/views/MapView\",
      \"esri/layers/FeatureLayer\"
    ], function(Map, MapView, FeatureLayer) {

      // Initialiser la carte
      const map = new Map({ basemap: \"streets-navigation-vector\" });
      const view = new MapView({
        container: \"viewDiv\",
        map: map,
        center: [10.2, 36.8], // [lon, lat]
        zoom: 10
      });

      // Récupérer les données PHP
      const zonePoints = {{ zonePoints|json_encode|raw }};
      const maxCount  = {{ maxCount }};

      // Préparer les features
      const features = zonePoints.map(p => ({
        geometry: {
          type: \"point\",
          longitude: p.lon,
          latitude:  p.lat
        },
        attributes: {
          objectId: p.objectId,
          count:    p.count
        }
      }));

      // Créer un FeatureLayer client-side
      const layer = new FeatureLayer({
        source: features,
        objectIdField: \"objectId\",
        fields: [
          { name: \"objectId\", type: \"oid\" },
          { name: \"count\",    type: \"double\" }
        ],
        renderer: {
          type: \"simple\",
          symbol: {
            type: \"simple-marker\",
            outline: { color: [255, 255, 255, 0.8], width: 1 }
          },
          visualVariables: [
            {
              type: \"size\",
              field: \"count\",
              stops: [
                { value: 1,        size: 10 },
                { value: maxCount, size: 40 }
              ]
            },
            {
              type: \"color\",
              field: \"count\",
              stops: [
                { value: 1,        color: \"rgba(0, 255, 255, 0.6)\" },
                { value: maxCount, color: \"rgba(255, 0, 0, 0.6)\" }
              ]
            }
          ]
        },
        title: \"Zones actives\"
      });

      // Ajouter le layer à la carte
      map.add(layer);
    });
  </script>
  </div>
{% endblock %}
", "back_office/course/map.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\back_office\\course\\map.html.twig");
    }
}
