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

/* reservation/reservation_show.html.twig */
class __TwigTemplate_4d6111e065e273dc5071d9fbd1e59a02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/reservation_show.html.twig", 1);
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

        yield "Reservation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " Details | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
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
        yield "<div class=\"ml-[280px] p-6 transition-all duration-300\">
  <div class=\"flex flex-col gap-6\">
    ";
        // line 9
        yield "    <div class=\"flex items-center justify-between\">
      <div class=\"flex items-center gap-4\">
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservations");
        yield "\" class=\"p-2 rounded-full hover:bg-gray-100 transition-colors\">
          <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"/>
          </svg>
        </a>
        <div>
          <h1 class=\"text-xl font-semibold text-gray-800\">Reservation Details</h1>
          <p class=\"text-xs text-gray-500\">ID: ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
        </div>
      </div>
      
      <div class=\"flex gap-2\">
        ";
        // line 23
        $context["status"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23));
        // line 24
        yield "        <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
          ";
        // line 25
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 25, $this->source); })()) == "confirmed")) {
            yield " bg-green-100 text-green-800
          ";
        } elseif ((        // line 26
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 26, $this->source); })()) == "pending")) {
            yield " bg-yellow-100 text-yellow-800
          ";
        } elseif (((        // line 27
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 27, $this->source); })()) == "canceled") || ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 27, $this->source); })()) == "cancelled"))) {
            yield " bg-red-100 text-red-800
          ";
        } else {
            // line 28
            yield " bg-gray-100 text-gray-800 ";
        }
        yield "\">
          ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 29, $this->source); })())), "html", null, true);
        yield "
        </span>
      </div>
    </div>

    ";
        // line 35
        yield "    <div class=\"bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden\">
      ";
        // line 37
        yield "      <div class=\"p-6 border-b border-gray-200\">
        <h2 class=\"text-sm font-medium text-gray-500 mb-4\">USER INFORMATION</h2>
        <div class=\"flex items-center gap-4\">
          <div class=\"flex-shrink-0 h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center text-lg font-medium text-blue-600\">
            ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41))), "html", null, true);
        yield "
          </div>
          <div>
            <p class=\"font-medium text-gray-900\">";
        // line 44
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "user", [], "any", false, true, false, 44), "name", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true)) : ("N/A"));
        yield "</p>
            <p class=\"text-sm text-gray-600\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "email", [], "any", false, false, false, 45), "html", null, true);
        yield "</p>
            <p class=\"text-xs text-gray-500 mt-1\">";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "user", [], "any", false, true, false, 46), "phone", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "phone", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "phone", [], "any", false, false, false, 46), "html", null, true)) : ("No phone provided"));
        yield "</p>
          </div>
        </div>
      </div>

      ";
        // line 52
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 52, $this->source); })()), "trajet", [], "any", false, false, false, 52)) {
            // line 53
            yield "      <div class=\"p-6 border-b border-gray-200\">
        <h2 class=\"text-sm font-medium text-gray-500 mb-4\">TRIP DETAILS</h2>
        <div class=\"space-y-4\">
          <div class=\"flex items-start gap-4\">
            <div class=\"flex-shrink-0 mt-1\">
              <div class=\"h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center\">
                <svg class=\"h-4 w-4 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7l4-4m0 0l4 4m-4-4v18\"/>
                </svg>
              </div>
            </div>
            <div>
              <p class=\"font-medium text-gray-900\">";
            // line 65
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "trajet", [], "any", false, true, false, 65), "departure", [], "any", true, true, false, 65) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 65, $this->source); })()), "trajet", [], "any", false, false, false, 65), "departure", [], "any", false, false, false, 65)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 65, $this->source); })()), "trajet", [], "any", false, false, false, 65), "departure", [], "any", false, false, false, 65), "html", null, true)) : ("Unknown departure"));
            yield "</p>
              <p class=\"text-xs text-gray-500\">Departure</p>
            </div>
          </div>

          <div class=\"flex items-center justify-center\">
            <div class=\"h-12 w-px bg-gray-200 mx-4\"></div>
          </div>

          <div class=\"flex items-start gap-4\">
            <div class=\"flex-shrink-0 mt-1\">
              <div class=\"h-8 w-8 rounded-full bg-green-100 flex items-center justify-center\">
                <svg class=\"h-4 w-4 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/>
                </svg>
              </div>
            </div>
            <div>
              <p class=\"font-medium text-gray-900\">";
            // line 83
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "trajet", [], "any", false, true, false, 83), "destination", [], "any", true, true, false, 83) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 83, $this->source); })()), "trajet", [], "any", false, false, false, 83), "destination", [], "any", false, false, false, 83)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 83, $this->source); })()), "trajet", [], "any", false, false, false, 83), "destination", [], "any", false, false, false, 83), "html", null, true)) : ("Unknown destination"));
            yield "</p>
              <p class=\"text-xs text-gray-500\">Destination</p>
            </div>
          </div>

          <div class=\"grid grid-cols-3 gap-4 mt-6\">
            <div>
              <p class=\"text-xs text-gray-500\">Distance</p>
              <p class=\"font-medium\">";
            // line 91
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "trajet", [], "any", false, true, false, 91), "distance", [], "any", true, true, false, 91) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 91, $this->source); })()), "trajet", [], "any", false, false, false, 91), "distance", [], "any", false, false, false, 91)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 91, $this->source); })()), "trajet", [], "any", false, false, false, 91), "distance", [], "any", false, false, false, 91), "html", null, true)) : ("N/A"));
            yield " km</p>
            </div>
            <div>
              <p class=\"text-xs text-gray-500\">Duration</p>
              <p class=\"font-medium\">";
            // line 95
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "trajet", [], "any", false, true, false, 95), "duration", [], "any", true, true, false, 95) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 95, $this->source); })()), "trajet", [], "any", false, false, false, 95), "duration", [], "any", false, false, false, 95)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 95, $this->source); })()), "trajet", [], "any", false, false, false, 95), "duration", [], "any", false, false, false, 95), "html", null, true)) : ("N/A"));
            yield " mins</p>
            </div>
            <div>
              <p class=\"text-xs text-gray-500\">Date & Time</p>
              <p class=\"font-medium\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 99, $this->source); })()), "reservationDate", [], "any", false, false, false, 99), "M j, Y H:i"), "html", null, true);
            yield "</p>
            </div>
          </div>
        </div>
      </div>
      ";
        } else {
            // line 105
            yield "      <div class=\"p-6 border-b border-gray-200\">
        <h2 class=\"text-sm font-medium text-gray-500 mb-4\">TRIP DETAILS</h2>
        <div class=\"text-gray-400 italic\">No trip information available for this reservation</div>
      </div>
      ";
        }
        // line 110
        yield "
      ";
        // line 112
        yield "      <div class=\"p-6\">
        <h2 class=\"text-sm font-medium text-gray-500 mb-4\">RESERVATION INFORMATION</h2>
        <div class=\"grid grid-cols-2 gap-6\">
          <div>
            <p class=\"text-xs text-gray-500\">Reservation Date</p>
            <p class=\"font-medium\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 117, $this->source); })()), "reservationDate", [], "any", false, false, false, 117), "M j, Y H:i"), "html", null, true);
        yield "</p>
          </div>
          <div>
            <p class=\"text-xs text-gray-500\">Number of Seats</p>
            <p class=\"font-medium\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 121, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 121), "html", null, true);
        yield "</p>
          </div>
          <div>
            <p class=\"text-xs text-gray-500\">Total Price</p>
            <p class=\"font-medium\">";
        // line 125
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "totalPrice", [], "any", true, true, false, 125) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 125, $this->source); })()), "totalPrice", [], "any", false, false, false, 125)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 125, $this->source); })()), "totalPrice", [], "any", false, false, false, 125), "html", null, true)) : ("0.00"));
        yield " DT</p>
          </div>
          <div>
            <p class=\"text-xs text-gray-500\">User Role</p>
            <p class=\"font-medium\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "role", [], "any", false, false, false, 129)), "html", null, true);
        yield "</p>
          </div>
        </div>
      </div>
    </div>
  </div>
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
        return "reservation/reservation_show.html.twig";
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
        return array (  301 => 129,  294 => 125,  287 => 121,  280 => 117,  273 => 112,  270 => 110,  263 => 105,  254 => 99,  247 => 95,  240 => 91,  229 => 83,  208 => 65,  194 => 53,  191 => 52,  183 => 46,  179 => 45,  175 => 44,  169 => 41,  163 => 37,  160 => 35,  152 => 29,  147 => 28,  142 => 27,  138 => 26,  134 => 25,  131 => 24,  129 => 23,  121 => 18,  111 => 11,  107 => 9,  103 => 6,  90 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation #{{ reservation.id }} Details | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"ml-[280px] p-6 transition-all duration-300\">
  <div class=\"flex flex-col gap-6\">
    {# Header with back button #}
    <div class=\"flex items-center justify-between\">
      <div class=\"flex items-center gap-4\">
        <a href=\"{{ path('admin_reservations') }}\" class=\"p-2 rounded-full hover:bg-gray-100 transition-colors\">
          <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"/>
          </svg>
        </a>
        <div>
          <h1 class=\"text-xl font-semibold text-gray-800\">Reservation Details</h1>
          <p class=\"text-xs text-gray-500\">ID: {{ reservation.id }}</p>
        </div>
      </div>
      
      <div class=\"flex gap-2\">
        {% set status = reservation.status|lower %}
        <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
          {% if status == 'confirmed' %} bg-green-100 text-green-800
          {% elseif status == 'pending' %} bg-yellow-100 text-yellow-800
          {% elseif status == 'canceled' or status == 'cancelled' %} bg-red-100 text-red-800
          {% else %} bg-gray-100 text-gray-800 {% endif %}\">
          {{ status|capitalize }}
        </span>
      </div>
    </div>

    {# Main card #}
    <div class=\"bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden\">
      {# User section #}
      <div class=\"p-6 border-b border-gray-200\">
        <h2 class=\"text-sm font-medium text-gray-500 mb-4\">USER INFORMATION</h2>
        <div class=\"flex items-center gap-4\">
          <div class=\"flex-shrink-0 h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center text-lg font-medium text-blue-600\">
            {{ reservation.user.email|first|upper }}
          </div>
          <div>
            <p class=\"font-medium text-gray-900\">{{ reservation.user.name ?? 'N/A' }}</p>
            <p class=\"text-sm text-gray-600\">{{ reservation.user.email }}</p>
            <p class=\"text-xs text-gray-500 mt-1\">{{ reservation.user.phone ?? 'No phone provided' }}</p>
          </div>
        </div>
      </div>

      {# Trip details - Only show if trajet exists #}
      {% if reservation.trajet %}
      <div class=\"p-6 border-b border-gray-200\">
        <h2 class=\"text-sm font-medium text-gray-500 mb-4\">TRIP DETAILS</h2>
        <div class=\"space-y-4\">
          <div class=\"flex items-start gap-4\">
            <div class=\"flex-shrink-0 mt-1\">
              <div class=\"h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center\">
                <svg class=\"h-4 w-4 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7l4-4m0 0l4 4m-4-4v18\"/>
                </svg>
              </div>
            </div>
            <div>
              <p class=\"font-medium text-gray-900\">{{ reservation.trajet.departure ?? 'Unknown departure' }}</p>
              <p class=\"text-xs text-gray-500\">Departure</p>
            </div>
          </div>

          <div class=\"flex items-center justify-center\">
            <div class=\"h-12 w-px bg-gray-200 mx-4\"></div>
          </div>

          <div class=\"flex items-start gap-4\">
            <div class=\"flex-shrink-0 mt-1\">
              <div class=\"h-8 w-8 rounded-full bg-green-100 flex items-center justify-center\">
                <svg class=\"h-4 w-4 text-green-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/>
                </svg>
              </div>
            </div>
            <div>
              <p class=\"font-medium text-gray-900\">{{ reservation.trajet.destination ?? 'Unknown destination' }}</p>
              <p class=\"text-xs text-gray-500\">Destination</p>
            </div>
          </div>

          <div class=\"grid grid-cols-3 gap-4 mt-6\">
            <div>
              <p class=\"text-xs text-gray-500\">Distance</p>
              <p class=\"font-medium\">{{ reservation.trajet.distance ?? 'N/A' }} km</p>
            </div>
            <div>
              <p class=\"text-xs text-gray-500\">Duration</p>
              <p class=\"font-medium\">{{ reservation.trajet.duration ?? 'N/A' }} mins</p>
            </div>
            <div>
              <p class=\"text-xs text-gray-500\">Date & Time</p>
              <p class=\"font-medium\">{{ reservation.reservationDate|date('M j, Y H:i') }}</p>
            </div>
          </div>
        </div>
      </div>
      {% else %}
      <div class=\"p-6 border-b border-gray-200\">
        <h2 class=\"text-sm font-medium text-gray-500 mb-4\">TRIP DETAILS</h2>
        <div class=\"text-gray-400 italic\">No trip information available for this reservation</div>
      </div>
      {% endif %}

      {# Reservation details #}
      <div class=\"p-6\">
        <h2 class=\"text-sm font-medium text-gray-500 mb-4\">RESERVATION INFORMATION</h2>
        <div class=\"grid grid-cols-2 gap-6\">
          <div>
            <p class=\"text-xs text-gray-500\">Reservation Date</p>
            <p class=\"font-medium\">{{ reservation.reservationDate|date('M j, Y H:i') }}</p>
          </div>
          <div>
            <p class=\"text-xs text-gray-500\">Number of Seats</p>
            <p class=\"font-medium\">{{ reservation.numberOfSeats }}</p>
          </div>
          <div>
            <p class=\"text-xs text-gray-500\">Total Price</p>
            <p class=\"font-medium\">{{ reservation.totalPrice ?? '0.00' }} DT</p>
          </div>
          <div>
            <p class=\"text-xs text-gray-500\">User Role</p>
            <p class=\"font-medium\">{{ reservation.user.role|capitalize }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "reservation/reservation_show.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\reservation\\reservation_show.html.twig");
    }
}
