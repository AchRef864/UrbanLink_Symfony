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

/* Admin/vehicle/index.html.twig */
class __TwigTemplate_a2c098108e45df5af932df21c478f427 extends Template
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
            'styles' => [$this, 'block_styles'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/vehicle/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/vehicle/index.html.twig"));

        // line 5
        $context["show_vr"] = false;
        // line 6
        $context["show_docs"] = false;
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Admin/vehicle/index.html.twig", 1);
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

        yield "Vehicle";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    <div>
        <h1>Vehicle</h1>
        <p>Welcome to the Vehicle!</p>
    </div>

    ";
        // line 14
        yield from $this->loadTemplate("utils/_search.html.twig", "Admin/vehicle/index.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "
    ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "        <!-- Slideshow container -->
        <div class=\"slideshow-container grid grid-cols-12 items-center gap-2 p-4\">
            ";
            // line 19
            $context["prevIndex"] = (((((isset($context["currentIndex"]) || array_key_exists("currentIndex", $context) ? $context["currentIndex"] : (function () { throw new RuntimeError('Variable "currentIndex" does not exist.', 19, $this->source); })()) - 1) >= 0)) ? (((isset($context["currentIndex"]) || array_key_exists("currentIndex", $context) ? $context["currentIndex"] : (function () { throw new RuntimeError('Variable "currentIndex" does not exist.', 19, $this->source); })()) - 1)) : ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 19, $this->source); })())) - 1)));
            // line 20
            yield "            ";
            $context["nextIndex"] = (((((isset($context["currentIndex"]) || array_key_exists("currentIndex", $context) ? $context["currentIndex"] : (function () { throw new RuntimeError('Variable "currentIndex" does not exist.', 20, $this->source); })()) + 1) < Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 20, $this->source); })())))) ? (((isset($context["currentIndex"]) || array_key_exists("currentIndex", $context) ? $context["currentIndex"] : (function () { throw new RuntimeError('Variable "currentIndex" does not exist.', 20, $this->source); })()) + 1)) : (0));
            // line 21
            yield "
            <!-- Previous Button (1 column) -->
            <a class=\"prev bg-gray-300 text-black px-2 py-1 rounded-lg text-center text-sm\" 
               href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_carousel", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 24, $this->source); })()), (isset($context["currentIndex"]) || array_key_exists("currentIndex", $context) ? $context["currentIndex"] : (function () { throw new RuntimeError('Variable "currentIndex" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24), "id", [], "any", false, false, false, 24), "action" => "prev"]), "html", null, true);
            yield "\"> 
                &#10094;
            </a>

            <!-- Slide Container (10 columns) -->
            <div class=\"col-span-10 flex justify-center\">
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 30, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["loop_index"] => $context["vehicle"]) {
                // line 31
                yield "                    ";
                yield from $this->loadTemplate("utils/_slide.html.twig", "Admin/vehicle/index.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["loop_index" =>                 // line 32
$context["loop_index"], "vehicle" =>                 // line 33
$context["vehicle"], "currentIndex" =>                 // line 34
(isset($context["currentIndex"]) || array_key_exists("currentIndex", $context) ? $context["currentIndex"] : (function () { throw new RuntimeError('Variable "currentIndex" does not exist.', 34, $this->source); })())]));
                // line 36
                yield "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['loop_index'], $context['vehicle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "            </div>

            <!-- Next Button (1 column) -->
            <a class=\"next bg-gray-300 text-black px-2 py-1 rounded-lg text-center text-sm\" 
               href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_carousel", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 41, $this->source); })()), (isset($context["currentIndex"]) || array_key_exists("currentIndex", $context) ? $context["currentIndex"] : (function () { throw new RuntimeError('Variable "currentIndex" does not exist.', 41, $this->source); })()), [], "array", false, false, false, 41), "id", [], "any", false, false, false, 41), "action" => "next"]), "html", null, true);
            yield "\"> 
                &#10095;
            </a>
        </div>

        <!-- The dots/circles -->
        <div style=\"text-align:center\">
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 48, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 49
                yield "                <span class=\"dot ";
                yield ((($context["i"] == (isset($context["currentIndex"]) || array_key_exists("currentIndex", $context) ? $context["currentIndex"] : (function () { throw new RuntimeError('Variable "currentIndex" does not exist.', 49, $this->source); })()))) ? ("active") : (""));
                yield "\"
                      onclick=\"window.location.href='";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_carousel", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 50, $this->source); })()), (isset($context["currentIndex"]) || array_key_exists("currentIndex", $context) ? $context["currentIndex"] : (function () { throw new RuntimeError('Variable "currentIndex" does not exist.', 50, $this->source); })()), [], "array", false, false, false, 50), "id", [], "any", false, false, false, 50), "action" => "goTo", "index" => $context["i"]]), "html", null, true);
                yield "'\">
                </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "        </div>
    ";
        } else {
            // line 55
            yield "        <div class=\"p-4 bg-yellow-50 text-yellow-700 rounded-lg text-center shadow-md border border-yellow-200 my-6 mx-auto max-w-lg\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-10 w-10 mx-auto mb-2 text-yellow-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
            </svg>
            <p class=\"font-medium\">No vehicles added at the moment.</p>
            <p class=\"text-sm mt-1 text-yellow-600\">Add a vehicle to get started.</p>
        </div>
    ";
        }
        // line 63
        yield "
    <br>
    <div class=\"col-span-3 flex justify-end\">
        <button id=\"openModal\" class=\"bg-blue-500 text-white px-4 py-2 rounded-lg\">
            Add Vehicle
        </button>
        ";
        // line 69
        yield from $this->loadTemplate("utils/_vModal.html.twig", "Admin/vehicle/index.html.twig", 69)->unwrap()->yield($context);
        // line 70
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 75
        yield "    <style>
        * { box-sizing: border-box; }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the \"next button\" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from { opacity: .4 }
            to { opacity: 1 }
        }
    </style>
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
        return "Admin/vehicle/index.html.twig";
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
        return array (  263 => 75,  250 => 74,  238 => 70,  236 => 69,  228 => 63,  218 => 55,  214 => 53,  205 => 50,  200 => 49,  196 => 48,  186 => 41,  180 => 37,  166 => 36,  164 => 34,  163 => 33,  162 => 32,  160 => 31,  143 => 30,  134 => 24,  129 => 21,  126 => 20,  124 => 19,  120 => 17,  118 => 16,  115 => 15,  113 => 14,  106 => 9,  93 => 8,  70 => 3,  59 => 1,  57 => 6,  55 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vehicle{% endblock %}

{% set show_vr = false %}
{% set show_docs = false %}

{% block body %}
    <div>
        <h1>Vehicle</h1>
        <p>Welcome to the Vehicle!</p>
    </div>

    {% include 'utils/_search.html.twig' %}

    {% if vehicles is not empty %}
        <!-- Slideshow container -->
        <div class=\"slideshow-container grid grid-cols-12 items-center gap-2 p-4\">
            {% set prevIndex = (currentIndex - 1 >= 0) ? currentIndex - 1 : vehicles|length - 1 %}
            {% set nextIndex = (currentIndex + 1 < vehicles|length) ? currentIndex + 1 : 0 %}

            <!-- Previous Button (1 column) -->
            <a class=\"prev bg-gray-300 text-black px-2 py-1 rounded-lg text-center text-sm\" 
               href=\"{{ path('app_vehicle_carousel', {'id': vehicles[currentIndex].id, 'action': 'prev'}) }}\"> 
                &#10094;
            </a>

            <!-- Slide Container (10 columns) -->
            <div class=\"col-span-10 flex justify-center\">
                {% for loop_index, vehicle in vehicles %}
                    {% include 'utils/_slide.html.twig' with {
                        'loop_index': loop_index,
                        'vehicle': vehicle,
                        'currentIndex': currentIndex
                    } %}
                {% endfor %}
            </div>

            <!-- Next Button (1 column) -->
            <a class=\"next bg-gray-300 text-black px-2 py-1 rounded-lg text-center text-sm\" 
               href=\"{{ path('app_vehicle_carousel', {'id': vehicles[currentIndex].id, 'action': 'next'}) }}\"> 
                &#10095;
            </a>
        </div>

        <!-- The dots/circles -->
        <div style=\"text-align:center\">
            {% for i in 0..vehicles|length - 1 %}
                <span class=\"dot {{ i == currentIndex ? 'active' : '' }}\"
                      onclick=\"window.location.href='{{ path('app_vehicle_carousel', {'id': vehicles[currentIndex].id, 'action': 'goTo', 'index': i}) }}'\">
                </span>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"p-4 bg-yellow-50 text-yellow-700 rounded-lg text-center shadow-md border border-yellow-200 my-6 mx-auto max-w-lg\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-10 w-10 mx-auto mb-2 text-yellow-500\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\" />
            </svg>
            <p class=\"font-medium\">No vehicles added at the moment.</p>
            <p class=\"text-sm mt-1 text-yellow-600\">Add a vehicle to get started.</p>
        </div>
    {% endif %}

    <br>
    <div class=\"col-span-3 flex justify-end\">
        <button id=\"openModal\" class=\"bg-blue-500 text-white px-4 py-2 rounded-lg\">
            Add Vehicle
        </button>
        {% include 'utils/_vModal.html.twig' %}
    </div>
{% endblock %}


{% block styles %}
    <style>
        * { box-sizing: border-box; }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the \"next button\" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from { opacity: .4 }
            to { opacity: 1 }
        }
    </style>
{% endblock %}
", "Admin/vehicle/index.html.twig", "D:\\GitHub\\WebApp\\UrbanLink\\UrbanLink_Symfony_Fork - Copy\\templates\\Admin\\vehicle\\index.html.twig");
    }
}
