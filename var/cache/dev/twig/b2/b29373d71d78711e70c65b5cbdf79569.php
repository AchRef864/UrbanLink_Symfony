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

/* utils/_search.html.twig */
class __TwigTemplate_bc06638d420d38a821d63ce41e1f9b1c extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utils/_search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utils/_search.html.twig"));

        // line 1
        yield "<div class=\"w-full max-w-sm min-w-[200px]\">
  <div class=\"relative mt-2\">
    <div class=\"absolute top-1 left-1 flex items-center\">
      <button id=\"dropdownButton\" class=\"rounded border border-transparent py-1 px-1.5 text-center flex items-center text-sm transition-all text-slate-600\">
        <span id=\"dropdownSpan\" class=\"text-ellipsis overflow-hidden\">Themes</span>
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"h-4 w-4 ml-1\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m19.5 8.25-7.5 7.5-7.5-7.5\" />
        </svg>
      </button>
      <div class=\"h-6 border-l border-slate-200 ml-1\"></div>
      <div id=\"dropdownMenu\" class=\"min-w-[150px] overflow-hidden absolute left-0 w-full mt-10 hidden w-full bg-white border border-slate-200 rounded-md shadow-lg z-10\">
        <ul id=\"dropdownOptions\">
          <li class=\"px-4 py-2 text-slate-600 hover:bg-slate-50 text-sm cursor-pointer\" data-value=\"Themes\">Themes</li>
          <li class=\"px-4 py-2 text-slate-600 hover:bg-slate-50 text-sm cursor-pointer\" data-value=\"Plugins\">Plugins</li>
          <li class=\"px-4 py-2 text-slate-600 hover:bg-slate-50 text-sm cursor-pointer\" data-value=\"Snippets\">Snippets</li>
        </ul>
      </div>
    </div>
    <input
      type=\"text\"
      class=\"w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-28 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow\"
      placeholder=\"Widgets...\" />
 
    <button
      class=\"absolute top-1 right-1 flex items-center rounded bg-slate-800 py-1 px-2.5 border border-transparent text-center text-sm text-white transition-all shadow-sm hover:shadow focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none\"
      type=\"button\"
    >
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 16 16\" fill=\"currentColor\" class=\"w-4 h-4 mr-1.5\">
        <path fill-rule=\"evenodd\" d=\"M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z\" clip-rule=\"evenodd\" />
      </svg>
 
      Search
    </button> 
  </div>   
</div>
 
<script>
  document.getElementById('dropdownButton').addEventListener('click', function() {
    var dropdownMenu = document.getElementById('dropdownMenu');
    if (dropdownMenu.classList.contains('hidden')) {
      dropdownMenu.classList.remove('hidden');
    } else {
      dropdownMenu.classList.add('hidden');
    }
  });
 
  document.getElementById('dropdownOptions').addEventListener('click', function(event) {
    if (event.target.tagName === 'LI') {
      const dataValue = event.target.getAttribute('data-value');
      document.getElementById('dropdownSpan').textContent = dataValue;
      document.getElementById('dropdownMenu').classList.add('hidden');
    }
  });
 
  document.addEventListener('click', function(event) {
    var isClickInside = document.getElementById('dropdownButton').contains(event.target) || document.getElementById('dropdownMenu').contains(event.target);
    var dropdownMenu = document.getElementById('dropdownMenu');
 
    if (!isClickInside) {
      dropdownMenu.classList.add('hidden');
    }
  });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "utils/_search.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"w-full max-w-sm min-w-[200px]\">
  <div class=\"relative mt-2\">
    <div class=\"absolute top-1 left-1 flex items-center\">
      <button id=\"dropdownButton\" class=\"rounded border border-transparent py-1 px-1.5 text-center flex items-center text-sm transition-all text-slate-600\">
        <span id=\"dropdownSpan\" class=\"text-ellipsis overflow-hidden\">Themes</span>
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"h-4 w-4 ml-1\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m19.5 8.25-7.5 7.5-7.5-7.5\" />
        </svg>
      </button>
      <div class=\"h-6 border-l border-slate-200 ml-1\"></div>
      <div id=\"dropdownMenu\" class=\"min-w-[150px] overflow-hidden absolute left-0 w-full mt-10 hidden w-full bg-white border border-slate-200 rounded-md shadow-lg z-10\">
        <ul id=\"dropdownOptions\">
          <li class=\"px-4 py-2 text-slate-600 hover:bg-slate-50 text-sm cursor-pointer\" data-value=\"Themes\">Themes</li>
          <li class=\"px-4 py-2 text-slate-600 hover:bg-slate-50 text-sm cursor-pointer\" data-value=\"Plugins\">Plugins</li>
          <li class=\"px-4 py-2 text-slate-600 hover:bg-slate-50 text-sm cursor-pointer\" data-value=\"Snippets\">Snippets</li>
        </ul>
      </div>
    </div>
    <input
      type=\"text\"
      class=\"w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-28 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow\"
      placeholder=\"Widgets...\" />
 
    <button
      class=\"absolute top-1 right-1 flex items-center rounded bg-slate-800 py-1 px-2.5 border border-transparent text-center text-sm text-white transition-all shadow-sm hover:shadow focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none\"
      type=\"button\"
    >
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 16 16\" fill=\"currentColor\" class=\"w-4 h-4 mr-1.5\">
        <path fill-rule=\"evenodd\" d=\"M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z\" clip-rule=\"evenodd\" />
      </svg>
 
      Search
    </button> 
  </div>   
</div>
 
<script>
  document.getElementById('dropdownButton').addEventListener('click', function() {
    var dropdownMenu = document.getElementById('dropdownMenu');
    if (dropdownMenu.classList.contains('hidden')) {
      dropdownMenu.classList.remove('hidden');
    } else {
      dropdownMenu.classList.add('hidden');
    }
  });
 
  document.getElementById('dropdownOptions').addEventListener('click', function(event) {
    if (event.target.tagName === 'LI') {
      const dataValue = event.target.getAttribute('data-value');
      document.getElementById('dropdownSpan').textContent = dataValue;
      document.getElementById('dropdownMenu').classList.add('hidden');
    }
  });
 
  document.addEventListener('click', function(event) {
    var isClickInside = document.getElementById('dropdownButton').contains(event.target) || document.getElementById('dropdownMenu').contains(event.target);
    var dropdownMenu = document.getElementById('dropdownMenu');
 
    if (!isClickInside) {
      dropdownMenu.classList.add('hidden');
    }
  });
</script>", "utils/_search.html.twig", "D:\\GitHub\\WebApp\\UrbanLink\\UrbanLink_Symfony_Fork - Copy\\templates\\utils\\_search.html.twig");
    }
}
