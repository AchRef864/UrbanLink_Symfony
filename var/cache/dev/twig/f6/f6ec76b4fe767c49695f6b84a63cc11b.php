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

/* utils/_slide.html.twig */
class __TwigTemplate_c5ae6785292dc2dd71f781a7a9760b75 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'styles' => [$this, 'block_styles'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utils/_slide.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utils/_slide.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 112
        yield "
";
        // line 113
        yield from $this->unwrap()->yieldBlock('styles', $context, $blocks);
        // line 120
        yield "
";
        // line 121
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
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

        // line 2
        yield "  <div class=\"mySlides fade\" style=\"display: ";
        if (((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 2, $this->source); })()) == (isset($context["currentIndex"]) || array_key_exists("currentIndex", $context) ? $context["currentIndex"] : (function () { throw new RuntimeError('Variable "currentIndex" does not exist.', 2, $this->source); })()))) {
            yield "block";
        } else {
            yield "none";
        }
        yield "\">
    <div class=\"grid grid-cols-4 gap-4 p-4\">
      <!-- Car Info Section -->
      <div class=\"col-span-1 row-span-3 bg-gray-200 p-4 rounded-lg\">
        <div class=\"w-full bg-gray-400 rounded-lg mb-4\">
          <img 
          src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), "html", null, true);
        yield "\"
          class=\"w-full h-auto object-contain\" 
          style=\"min-height: 200px;\" 
          onload=\"console.log('Image loaded successfully')\" 
          onerror=\"
            console.log('Image failed to load: ' + this.src);
            this.onerror=null;
            this.src='https://placehold.co/600x400';
          \" 
          alt=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 17, $this->source); })()), "brand", [], "any", false, false, false, 17), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 17, $this->source); })()), "model", [], "any", false, false, false, 17), "html", null, true);
        yield "\">
        </div>
        <p class=\"text-center\">info</p>
        <p>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 20, $this->source); })()), "licensePlate", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
        <button id=\"openEditModal\" class=\"mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg w-full\">
          Edit Vehicle
        </button>
      </div>

      <!-- Rest of your content remains the same -->
      <!-- Driver Info Section -->
      <div class=\"col-span-3 bg-gray-200 p-4 rounded-lg flex items-center justify-between\">
        <div class=\"flex items-center gap-4\">
          <div class=\"w-16 h-16 bg-gray-400 rounded-full\"></div>
          <p>Driver Info</p>
          <p>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 32, $this->source); })()), "driverId", [], "any", false, false, false, 32), "html", null, true);
        yield "</p>
        </div>
        <div class=\"w-12 h-12 border-4 ";
        // line 34
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 34, $this->source); })()), "isVerified", [], "any", false, false, false, 34)) ? ("border-green-500") : ("border-red-500"));
        yield " rounded-full flex items-center justify-center\">
          ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 35, $this->source); })()), "isVerified", [], "any", false, false, false, 35)) {
            // line 36
            yield "            ✔
          ";
        } else {
            // line 38
            yield "            ✘
          ";
        }
        // line 40
        yield "        </div>
      </div>

      <!-- Last Maintenance Date -->
      <div class=\"col-span-1 bg-gray-200 p-4 rounded-lg text-center\">
        <p>Last Maintenance Date</p>
      </div>

      <!-- Maintenance History -->
      <div class=\"col-span-2 row-span-2 bg-gray-200 p-4 rounded-lg\">
        <p>Maintenance History</p>
        <table class=\"table-auto\">
          <thead>
            <tr>
              <th>Vehicle</th>
              <th>Maintenance</th>
              <th>Year</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 61, $this->source); })()), "model", [], "any", false, false, false, 61), "html", null, true);
        yield "</td>
              <td>Malcolm Lockyer</td>
              <td>1961</td>
            </tr>
            <tr>
              <td>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 66, $this->source); })()), "model", [], "any", false, false, false, 66), "html", null, true);
        yield "</td>
              <td>The Eagles</td>
              <td>1972</td>
            </tr>
            <tr>
              <td>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 71, $this->source); })()), "model", [], "any", false, false, false, 71), "html", null, true);
        yield "</td>
              <td>Earth, Wind, and Fire</td>
              <td>1975</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Maintenance Coloring Info -->
      <div class=\"col-span-1 bg-gray-200 p-4 rounded-lg text-center\">
        <p>Coloring Depending on Last Maintenance Date</p>
      </div>

      <!-- Badges -->
      <div class=\"col-span-4 flex justify-center gap-4\">
        <div class=\"w-12 h-12 bg-gray-400 rounded-full\"></div>
        <div class=\"w-12 h-12 bg-gray-400 rounded-full\"></div>
        <div class=\"w-12 h-12 bg-gray-400 rounded-full\"></div>
        <div class=\"w-12 h-12 bg-gray-400 rounded-full\"></div>
      </div>

      <!-- Buttons -->
      <div class=\"col-span-3 flex justify-end\">
        <button class=\"bg-blue-500 text-white px-4 py-2 rounded-lg\">
          Add Maintenance
        </button>
      </div>
      <div class=\"col-span-1\">
        <form method=\"POST\" action=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Are you sure you want to delete this vehicle?');\">
          <button class=\"bg-red-500 text-white px-4 py-2 rounded-lg w-full\">
            Delete Vehicle
          </button>
        </form>
      </div>
    </div>
  </div>

  ";
        // line 109
        yield "  ";
        yield from $this->loadTemplate("utils/_eModal.html.twig", "utils/_slide.html.twig", 109)->unwrap()->yield($context);
        // line 110
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 113
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

        // line 114
        yield "<style>
  .border-red-500 {
      border-color: #EF4444; /* Tailwind's red-500 */
  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
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

        // line 122
        yield "<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get the modal
    var modal = document.getElementById(\"simpleModal\");
    
    // Get the edit button
    var editBtn = document.getElementById(\"openEditModal\");
    
    // Get the close button
    var closeBtn = document.getElementsByClassName(\"close-button\")[0];
    
    // When the user clicks the edit button, open the modal
    editBtn.onclick = function() {
      modal.style.display = \"block\";
      document.body.style.overflow = \"hidden\"; // Prevent scrolling behind modal
    }
    
    // When the user clicks on close button, close the modal
    closeBtn.onclick = function() {
      modal.style.display = \"none\";
      document.body.style.overflow = \"auto\"; // Re-enable scrolling
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = \"none\";
        document.body.style.overflow = \"auto\"; // Re-enable scrolling
      }
    }
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
        return "utils/_slide.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  292 => 122,  279 => 121,  263 => 114,  250 => 113,  238 => 110,  235 => 109,  223 => 99,  192 => 71,  184 => 66,  176 => 61,  153 => 40,  149 => 38,  145 => 36,  143 => 35,  139 => 34,  134 => 32,  119 => 20,  111 => 17,  99 => 8,  85 => 2,  72 => 1,  61 => 121,  58 => 120,  56 => 113,  53 => 112,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
  <div class=\"mySlides fade\" style=\"display: {% if loop_index == currentIndex %}block{% else %}none{% endif %}\">
    <div class=\"grid grid-cols-4 gap-4 p-4\">
      <!-- Car Info Section -->
      <div class=\"col-span-1 row-span-3 bg-gray-200 p-4 rounded-lg\">
        <div class=\"w-full bg-gray-400 rounded-lg mb-4\">
          <img 
          src=\"{{ vehicle.image }}\"
          class=\"w-full h-auto object-contain\" 
          style=\"min-height: 200px;\" 
          onload=\"console.log('Image loaded successfully')\" 
          onerror=\"
            console.log('Image failed to load: ' + this.src);
            this.onerror=null;
            this.src='https://placehold.co/600x400';
          \" 
          alt=\"{{ vehicle.brand }} {{ vehicle.model }}\">
        </div>
        <p class=\"text-center\">info</p>
        <p>{{ vehicle.licensePlate }}</p>
        <button id=\"openEditModal\" class=\"mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg w-full\">
          Edit Vehicle
        </button>
      </div>

      <!-- Rest of your content remains the same -->
      <!-- Driver Info Section -->
      <div class=\"col-span-3 bg-gray-200 p-4 rounded-lg flex items-center justify-between\">
        <div class=\"flex items-center gap-4\">
          <div class=\"w-16 h-16 bg-gray-400 rounded-full\"></div>
          <p>Driver Info</p>
          <p>{{ vehicle.driverId }}</p>
        </div>
        <div class=\"w-12 h-12 border-4 {{ vehicle.isVerified ? 'border-green-500' : 'border-red-500' }} rounded-full flex items-center justify-center\">
          {% if vehicle.isVerified %}
            ✔
          {% else %}
            ✘
          {% endif %}
        </div>
      </div>

      <!-- Last Maintenance Date -->
      <div class=\"col-span-1 bg-gray-200 p-4 rounded-lg text-center\">
        <p>Last Maintenance Date</p>
      </div>

      <!-- Maintenance History -->
      <div class=\"col-span-2 row-span-2 bg-gray-200 p-4 rounded-lg\">
        <p>Maintenance History</p>
        <table class=\"table-auto\">
          <thead>
            <tr>
              <th>Vehicle</th>
              <th>Maintenance</th>
              <th>Year</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ vehicle.model }}</td>
              <td>Malcolm Lockyer</td>
              <td>1961</td>
            </tr>
            <tr>
              <td>{{ vehicle.model }}</td>
              <td>The Eagles</td>
              <td>1972</td>
            </tr>
            <tr>
              <td>{{ vehicle.model }}</td>
              <td>Earth, Wind, and Fire</td>
              <td>1975</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Maintenance Coloring Info -->
      <div class=\"col-span-1 bg-gray-200 p-4 rounded-lg text-center\">
        <p>Coloring Depending on Last Maintenance Date</p>
      </div>

      <!-- Badges -->
      <div class=\"col-span-4 flex justify-center gap-4\">
        <div class=\"w-12 h-12 bg-gray-400 rounded-full\"></div>
        <div class=\"w-12 h-12 bg-gray-400 rounded-full\"></div>
        <div class=\"w-12 h-12 bg-gray-400 rounded-full\"></div>
        <div class=\"w-12 h-12 bg-gray-400 rounded-full\"></div>
      </div>

      <!-- Buttons -->
      <div class=\"col-span-3 flex justify-end\">
        <button class=\"bg-blue-500 text-white px-4 py-2 rounded-lg\">
          Add Maintenance
        </button>
      </div>
      <div class=\"col-span-1\">
        <form method=\"POST\" action=\"{{ path('app_vehicle_delete', {'id': vehicle.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this vehicle?');\">
          <button class=\"bg-red-500 text-white px-4 py-2 rounded-lg w-full\">
            Delete Vehicle
          </button>
        </form>
      </div>
    </div>
  </div>

  {# Include the modal template here #}
  {% include 'utils/_eModal.html.twig' %}

{% endblock %}

{% block styles %}
<style>
  .border-red-500 {
      border-color: #EF4444; /* Tailwind's red-500 */
  }
</style>
{% endblock %}

{% block javascripts %}
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get the modal
    var modal = document.getElementById(\"simpleModal\");
    
    // Get the edit button
    var editBtn = document.getElementById(\"openEditModal\");
    
    // Get the close button
    var closeBtn = document.getElementsByClassName(\"close-button\")[0];
    
    // When the user clicks the edit button, open the modal
    editBtn.onclick = function() {
      modal.style.display = \"block\";
      document.body.style.overflow = \"hidden\"; // Prevent scrolling behind modal
    }
    
    // When the user clicks on close button, close the modal
    closeBtn.onclick = function() {
      modal.style.display = \"none\";
      document.body.style.overflow = \"auto\"; // Re-enable scrolling
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = \"none\";
        document.body.style.overflow = \"auto\"; // Re-enable scrolling
      }
    }
  });
</script>
{% endblock %}", "utils/_slide.html.twig", "D:\\GitHub\\WebApp\\UrbanLink\\UrbanLink_Symfony_Fork - Copy\\templates\\utils\\_slide.html.twig");
    }
}
