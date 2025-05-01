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

/* front_office/course/index.html.twig */
class __TwigTemplate_84fbd849aeb9cea7173ef4da0d41de0c extends Template
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
        // line 2
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/course/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/course/index.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "front_office/course/index.html.twig", 2);
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

        yield "Mes Courses";
        
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
        yield "<div style=\"max-width: 1200px; margin: 0 auto; background-color: #F9FAFB; min-height: 100vh; padding: 2rem; font-family: sans-serif;\">
  
  <!-- Titre + bouton Ajouter Course -->
  <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;\">
    <h2 style=\"font-size: 1.25rem; font-weight: bold; color: #374151;\">
      <span style=\"
        display: inline-block;
        padding: 0.75rem 1.5rem;
        background: linear-gradient(135deg, #1E40AF, #06B6D4);
        color: #FFFFFF;
        border-radius: 0.5rem;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
      \">
        Mes Courses
      </span>
    </h2>
    <!-- Bouton Ajouter Course -->
    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_course_new");
        yield "\"
       style=\"
         display: inline-block;
         padding: 0.75rem 1.5rem;
         background-color: #06B6D4;
         color: #FFFFFF;
         border-radius: 0.5rem;
         font-weight: bold;
         text-transform: uppercase;
         text-decoration: none;
         transition: background-color 0.3s;
       \"
       onmouseover=\"this.style.backgroundColor='#0284C7';\"
       onmouseout=\"this.style.backgroundColor='#06B6D4';\"
    >
      Ajouter Course
    </a>
  </div>

  <!-- Boucle sur les courses -->
  ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 45
            yield "    <div style=\"
         margin-bottom: 0.75rem;
         border-radius: 0.5rem;
         box-shadow: 0 1px 3px rgba(0,0,0,0.1);
         transition: transform 0.3s;
         font-size: 0.875rem;
         color: #374151;
         background-color:
           ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 53) == "Acceptée")) {
                yield "#ECFDF5
           ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 54
$context["course"], "statut", [], "any", false, false, false, 54) == "Refusée")) {
                yield "#FEE2E2
           ";
            } else {
                // line 55
                yield "#FEF3C7";
            }
            yield ";
         border-left: 8px solid
           ";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 57) == "Acceptée")) {
                yield "#10B981
           ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 58
$context["course"], "statut", [], "any", false, false, false, 58) == "Refusée")) {
                yield "#EF4444
           ";
            } else {
                // line 59
                yield "#FACC15";
            }
            yield ";
       \">
      <div style=\"display: flex; padding: 1rem;\">
        
        <!-- Bloc 1 : Client / Chauffeur / Date -->
        <div style=\"border-right: 1px solid #E5E7EB; padding-right: 1rem; margin-right: 1rem;\">
          <div style=\"font-weight: 600; margin-bottom: 0.25rem;\">
            <span style=\"font-size: 0.75rem; color: #6B7280; display: block;\">Client</span>
            ";
            // line 67
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "user", [], "any", false, false, false, 67)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "user", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true)) : ("--"));
            yield "
          </div>
          <div style=\"font-weight: 600; margin-bottom: 0.25rem;\">
            <span style=\"font-size: 0.75rem; color: #6B7280; display: block;\">Chauffeur</span>
            ";
            // line 71
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 71)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 71), "user", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71), "html", null, true)) : ("--"));
            yield "
          </div>
          <div style=\"font-weight: 600;\">
            ";
            // line 74
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "dateCourse", [], "any", false, false, false, 74)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "dateCourse", [], "any", false, false, false, 74), "d/m/Y H:i"), "html", null, true)) : ("--"));
            yield "
          </div>
        </div>

        <!-- Bloc 2 : Marque / Modèle, Départ, Arrivée -->
        <div style=\"flex: 1;\">
          <div style=\"margin-bottom: 0.5rem; padding-right: 1rem; border-right: 1px solid #E5E7EB;\">
            <div style=\"margin-left: 1rem; margin-bottom: 0.25rem; font-size: 1rem; font-weight: normal; color: #1F2937;\">
              ";
            // line 82
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 82)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 82), "marque", [], "any", false, false, false, 82) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 82), "modele", [], "any", false, false, false, 82)), "html", null, true)) : ("--"));
            yield "
            </div>
            <div style=\"margin-left: 1rem; margin-bottom: 0.25rem;\">
              <span style=\"font-size: 0.75rem; color: #6B7280;\">Départ</span>
              <span style=\"margin-left: 0.5rem;\">
                ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["presentation"]) || array_key_exists("presentation", $context) ? $context["presentation"] : (function () { throw new RuntimeError('Variable "presentation" does not exist.', 87, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 87), [], "array", false, false, false, 87), "depart", [], "any", false, false, false, 87), "html", null, true);
            yield "
              </span>
            </div>
            <div style=\"margin-left: 1rem;\">
              <span style=\"font-size: 0.75rem; color: #6B7280;\">Arrivée</span>
              <span style=\"margin-left: 0.5rem;\">
                ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["presentation"]) || array_key_exists("presentation", $context) ? $context["presentation"] : (function () { throw new RuntimeError('Variable "presentation" does not exist.', 93, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 93), [], "array", false, false, false, 93), "arrivee", [], "any", false, false, false, 93), "html", null, true);
            yield "
              </span>
            </div>
          </div>
        </div>

        <!-- Bloc 3 : Immatriculation -->
        <div style=\"border-right: 1px solid #E5E7EB; padding-right: 1rem; margin-right: 1rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #D1D5DB; background-color: #E5E7EB; padding: 0.25rem; border-radius: 0.25rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600;\">Immatriculation</div>
              <div style=\"font-size: 0.875rem; font-weight: 700; color: #1F2937;\">
                ";
            // line 105
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 105)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 105), "immatriculation", [], "any", false, false, false, 105), "html", null, true)) : ("--"));
            yield "
              </div>
            </div>
          </div>
        </div>

        <!-- Bloc 4 : Distance -->
        <div style=\"border-right: 1px solid #E5E7EB; padding-right: 1rem; margin-right: 1rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #D1D5DB; background-color: #E5E7EB; padding: 0.25rem; border-radius: 0.25rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600;\">Distance</div>
              <div style=\"font-size: 0.875rem; font-weight: 700; color: #1F2937;\">
                <span style=\"
                  display: inline-block;
                  padding: 0.25rem 0.5rem;
                  background: linear-gradient(135deg, #1E40AF, #06B6D4);
                  color: #FFFFFF;
                  text-transform: uppercase;
                  font-weight: bold;
                  border-radius: 0.25rem;
                \">
                  ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "distanceKm", [], "any", false, false, false, 126), "html", null, true);
            yield " km
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Bloc 5 : Montant -->
        <div style=\"border-right: 1px solid #E5E7EB; padding-right: 1rem; margin-right: 1rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #D1D5DB; background-color: #E5E7EB; padding: 0.25rem; border-radius: 0.25rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600;\">Montant</div>
              <div style=\"font-size: 0.875rem; font-weight: 700; color: #1F2937;\">
                ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "montant", [], "any", false, false, false, 139), "html", null, true);
            yield " TND
              </div>
            </div>
          </div>
        </div>

        <!-- Bloc 6 : Statut + Boutons -->
<div style=\"margin-left: 1rem;\">
  <div style=\"
    margin-top: 0.5rem;
    width: 6rem;
    text-align: center;
    text-transform: uppercase;
    font-size: 0.75rem;
    font-weight: bold;
    color: #FFFFFF;
    border-radius: 0.25rem;
    padding: 0.25rem 0;
    background-color:
      ";
            // line 158
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 158) == "Acceptée")) {
                yield "#10B981
      ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 159
$context["course"], "statut", [], "any", false, false, false, 159) == "Refusée")) {
                yield "#EF4444
      ";
            } else {
                // line 160
                yield "#FACC15";
            }
            yield ";  <!-- Jaune clair pour \"En attente\" -->
  
    ";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 162), "html", null, true);
            yield "
  </div>
  <div style=\"display: flex; flex-direction: column; margin-top: 0.5rem; gap: 0.25rem;\">
    <div style=\"display: flex; gap: 0.25rem; margin-top: 0.25rem;\">
      <form method=\"post\" action=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_course_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 166)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Annuler cette course ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 167))), "html", null, true);
            yield "\">
        <button type=\"submit\"
                style=\"background-color: #D97706; color: #FFFFFF; padding: 0.5rem 0.75rem; border-radius: 0.25rem; font-size: 0.75rem; font-weight: 600; text-decoration: none; border: none; cursor: pointer;\"
                onmouseover=\"this.style.backgroundColor='#B45309';\"
                onmouseout=\"this.style.backgroundColor='#D97706';\">
          Annuler
        </button>
      </form>
      ";
            // line 175
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 175) == "Terminée") && CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 175))) {
                // line 176
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 176), "id", [], "any", false, false, false, 176)]), "html", null, true);
                yield "\"
           style=\"background: linear-gradient(135deg, #3B82F6, #8B5CF6); color: #FFFFFF; padding: 0.5rem 0.75rem; border-radius: 0.25rem; font-size: 0.75rem; font-weight: 600; text-decoration: none;\"
           onmouseover=\"this.style.opacity='0.85';\"
           onmouseout=\"this.style.opacity='1';\">
          Noter
        </a>
      ";
            }
            // line 183
            yield "    </div>
  </div>
</div>
      </div>
    </div>
  ";
            $context['_iterated'] = true;
        }
        // line 188
        if (!$context['_iterated']) {
            // line 189
            yield "    <div style=\"
      background-color: #E5E7EB;
      margin: 0 auto;
      border: 1px solid #9CA3AF;
      border-radius: 0.375rem;
      color: #374151;
      margin-bottom: 1rem;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 1px 2px rgba(0,0,0,0.05);
    \">
      <div style=\"margin-bottom: 1rem;\">
        <span style=\"
          display: inline-block;
          padding: 0.25rem 0.5rem;
          font-size: 0.75rem;
          border-radius: 0.25rem;
          background: linear-gradient(135deg, #9CA3AF, #D1D5DB);
          text-transform: uppercase;
          font-weight: bold;
          color: #374151;
        \">
          Aucune donnée
        </span>
      </div>
      <p style=\"font-size: 0.875rem; color: #6B7280;\">Vos courses apparaîtront ici</p>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "
  <!-- Pied de page -->
  <div style=\"
       background-color: #F8FAFC;
       padding: 1.5rem;
       border: 1px solid #E2E8F0;
       border-radius: 0.75rem;
       margin-top: 1rem;
       box-shadow: 0 1px 2px rgba(0,0,0,0.05);
       display: flex;
       justify-content: space-between;
       align-items: center;
     \">
    <span style=\"
         display: inline-block;
         padding: 0.25rem 0.5rem;
         background: linear-gradient(135deg, #27272A, #1F2937);
         text-transform: uppercase;
         font-weight: bold;
         font-size: 0.75rem;
         color: white;
       \">
      Total : ";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 239, $this->source); })())), "html", null, true);
        yield " courses
    </span>
    ";
        // line 241
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 241, $this->source); })())) > 0)) {
            // line 242
            yield "      <span style=\"font-size: 0.75rem; color: #6B7280;\">
        Dernière course : ";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 243, $this->source); })())), "dateCourse", [], "any", false, false, false, 243), "d/m/Y"), "html", null, true);
            yield "
      </span>
    ";
        }
        // line 246
        yield "  </div>
</div>
<div class=\"text-center my-5\">
  <h3>Téléchargez votre rapport PDF</h3>

  <div class=\"my-3\">
    <img
      src=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_qr", ["userId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 253, $this->source); })()), "user", [], "any", false, false, false, 253), "id", [], "any", false, false, false, 253)]), "html", null, true);
        yield "\"
      alt=\"QR Code Rapport\"
      style=\"width:200px; height:200px;\"
    />
  </div>

  <a
    href=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_pdf", ["userId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "user", [], "any", false, false, false, 260), "id", [], "any", false, false, false, 260)]), "html", null, true);
        yield "\"
    class=\"btn btn-primary\"
  >
    Télécharger le PDF
  </a>
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
        return "front_office/course/index.html.twig";
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
        return array (  464 => 260,  454 => 253,  445 => 246,  439 => 243,  436 => 242,  434 => 241,  429 => 239,  405 => 217,  372 => 189,  370 => 188,  361 => 183,  350 => 176,  348 => 175,  337 => 167,  333 => 166,  326 => 162,  320 => 160,  315 => 159,  311 => 158,  289 => 139,  273 => 126,  249 => 105,  234 => 93,  225 => 87,  217 => 82,  206 => 74,  200 => 71,  193 => 67,  181 => 59,  176 => 58,  172 => 57,  166 => 55,  161 => 54,  157 => 53,  147 => 45,  142 => 44,  119 => 24,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/front_office/course/index.html.twig #}
{% extends 'basef.html.twig' %}

{% block title %}Mes Courses{% endblock %}

{% block body %}
<div style=\"max-width: 1200px; margin: 0 auto; background-color: #F9FAFB; min-height: 100vh; padding: 2rem; font-family: sans-serif;\">
  
  <!-- Titre + bouton Ajouter Course -->
  <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;\">
    <h2 style=\"font-size: 1.25rem; font-weight: bold; color: #374151;\">
      <span style=\"
        display: inline-block;
        padding: 0.75rem 1.5rem;
        background: linear-gradient(135deg, #1E40AF, #06B6D4);
        color: #FFFFFF;
        border-radius: 0.5rem;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
      \">
        Mes Courses
      </span>
    </h2>
    <!-- Bouton Ajouter Course -->
    <a href=\"{{ path('user_course_new') }}\"
       style=\"
         display: inline-block;
         padding: 0.75rem 1.5rem;
         background-color: #06B6D4;
         color: #FFFFFF;
         border-radius: 0.5rem;
         font-weight: bold;
         text-transform: uppercase;
         text-decoration: none;
         transition: background-color 0.3s;
       \"
       onmouseover=\"this.style.backgroundColor='#0284C7';\"
       onmouseout=\"this.style.backgroundColor='#06B6D4';\"
    >
      Ajouter Course
    </a>
  </div>

  <!-- Boucle sur les courses -->
  {% for course in courses %}
    <div style=\"
         margin-bottom: 0.75rem;
         border-radius: 0.5rem;
         box-shadow: 0 1px 3px rgba(0,0,0,0.1);
         transition: transform 0.3s;
         font-size: 0.875rem;
         color: #374151;
         background-color:
           {% if course.statut == 'Acceptée' %}#ECFDF5
           {% elseif course.statut == 'Refusée' %}#FEE2E2
           {% else %}#FEF3C7{% endif %};
         border-left: 8px solid
           {% if course.statut == 'Acceptée' %}#10B981
           {% elseif course.statut == 'Refusée' %}#EF4444
           {% else %}#FACC15{% endif %};
       \">
      <div style=\"display: flex; padding: 1rem;\">
        
        <!-- Bloc 1 : Client / Chauffeur / Date -->
        <div style=\"border-right: 1px solid #E5E7EB; padding-right: 1rem; margin-right: 1rem;\">
          <div style=\"font-weight: 600; margin-bottom: 0.25rem;\">
            <span style=\"font-size: 0.75rem; color: #6B7280; display: block;\">Client</span>
            {{ course.user ? course.user.name : '--' }}
          </div>
          <div style=\"font-weight: 600; margin-bottom: 0.25rem;\">
            <span style=\"font-size: 0.75rem; color: #6B7280; display: block;\">Chauffeur</span>
            {{ course.taxi ? course.taxi.user.name : '--' }}
          </div>
          <div style=\"font-weight: 600;\">
            {{ course.dateCourse ? course.dateCourse|date('d/m/Y H:i') : '--' }}
          </div>
        </div>

        <!-- Bloc 2 : Marque / Modèle, Départ, Arrivée -->
        <div style=\"flex: 1;\">
          <div style=\"margin-bottom: 0.5rem; padding-right: 1rem; border-right: 1px solid #E5E7EB;\">
            <div style=\"margin-left: 1rem; margin-bottom: 0.25rem; font-size: 1rem; font-weight: normal; color: #1F2937;\">
              {{ course.taxi ? course.taxi.marque ~ ' ' ~ course.taxi.modele : '--' }}
            </div>
            <div style=\"margin-left: 1rem; margin-bottom: 0.25rem;\">
              <span style=\"font-size: 0.75rem; color: #6B7280;\">Départ</span>
              <span style=\"margin-left: 0.5rem;\">
                {{ presentation[course.id].depart }}
              </span>
            </div>
            <div style=\"margin-left: 1rem;\">
              <span style=\"font-size: 0.75rem; color: #6B7280;\">Arrivée</span>
              <span style=\"margin-left: 0.5rem;\">
                {{ presentation[course.id].arrivee }}
              </span>
            </div>
          </div>
        </div>

        <!-- Bloc 3 : Immatriculation -->
        <div style=\"border-right: 1px solid #E5E7EB; padding-right: 1rem; margin-right: 1rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #D1D5DB; background-color: #E5E7EB; padding: 0.25rem; border-radius: 0.25rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600;\">Immatriculation</div>
              <div style=\"font-size: 0.875rem; font-weight: 700; color: #1F2937;\">
                {{ course.taxi ? course.taxi.immatriculation : '--' }}
              </div>
            </div>
          </div>
        </div>

        <!-- Bloc 4 : Distance -->
        <div style=\"border-right: 1px solid #E5E7EB; padding-right: 1rem; margin-right: 1rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #D1D5DB; background-color: #E5E7EB; padding: 0.25rem; border-radius: 0.25rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600;\">Distance</div>
              <div style=\"font-size: 0.875rem; font-weight: 700; color: #1F2937;\">
                <span style=\"
                  display: inline-block;
                  padding: 0.25rem 0.5rem;
                  background: linear-gradient(135deg, #1E40AF, #06B6D4);
                  color: #FFFFFF;
                  text-transform: uppercase;
                  font-weight: bold;
                  border-radius: 0.25rem;
                \">
                  {{ course.distanceKm }} km
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Bloc 5 : Montant -->
        <div style=\"border-right: 1px solid #E5E7EB; padding-right: 1rem; margin-right: 1rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #D1D5DB; background-color: #E5E7EB; padding: 0.25rem; border-radius: 0.25rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600;\">Montant</div>
              <div style=\"font-size: 0.875rem; font-weight: 700; color: #1F2937;\">
                {{ course.montant }} TND
              </div>
            </div>
          </div>
        </div>

        <!-- Bloc 6 : Statut + Boutons -->
<div style=\"margin-left: 1rem;\">
  <div style=\"
    margin-top: 0.5rem;
    width: 6rem;
    text-align: center;
    text-transform: uppercase;
    font-size: 0.75rem;
    font-weight: bold;
    color: #FFFFFF;
    border-radius: 0.25rem;
    padding: 0.25rem 0;
    background-color:
      {% if course.statut == 'Acceptée' %}#10B981
      {% elseif course.statut == 'Refusée' %}#EF4444
      {% else %}#FACC15{% endif %};  <!-- Jaune clair pour \"En attente\" -->
  
    {{ course.statut }}
  </div>
  <div style=\"display: flex; flex-direction: column; margin-top: 0.5rem; gap: 0.25rem;\">
    <div style=\"display: flex; gap: 0.25rem; margin-top: 0.25rem;\">
      <form method=\"post\" action=\"{{ path('user_course_cancel', {'id': course.id}) }}\" onsubmit=\"return confirm('Annuler cette course ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel' ~ course.id) }}\">
        <button type=\"submit\"
                style=\"background-color: #D97706; color: #FFFFFF; padding: 0.5rem 0.75rem; border-radius: 0.25rem; font-size: 0.75rem; font-weight: 600; text-decoration: none; border: none; cursor: pointer;\"
                onmouseover=\"this.style.backgroundColor='#B45309';\"
                onmouseout=\"this.style.backgroundColor='#D97706';\">
          Annuler
        </button>
      </form>
      {% if course.statut == 'Terminée' and course.taxi %}
        <a href=\"{{ path('taxi_rate', {'id': course.taxi.id}) }}\"
           style=\"background: linear-gradient(135deg, #3B82F6, #8B5CF6); color: #FFFFFF; padding: 0.5rem 0.75rem; border-radius: 0.25rem; font-size: 0.75rem; font-weight: 600; text-decoration: none;\"
           onmouseover=\"this.style.opacity='0.85';\"
           onmouseout=\"this.style.opacity='1';\">
          Noter
        </a>
      {% endif %}
    </div>
  </div>
</div>
      </div>
    </div>
  {% else %}
    <div style=\"
      background-color: #E5E7EB;
      margin: 0 auto;
      border: 1px solid #9CA3AF;
      border-radius: 0.375rem;
      color: #374151;
      margin-bottom: 1rem;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 1px 2px rgba(0,0,0,0.05);
    \">
      <div style=\"margin-bottom: 1rem;\">
        <span style=\"
          display: inline-block;
          padding: 0.25rem 0.5rem;
          font-size: 0.75rem;
          border-radius: 0.25rem;
          background: linear-gradient(135deg, #9CA3AF, #D1D5DB);
          text-transform: uppercase;
          font-weight: bold;
          color: #374151;
        \">
          Aucune donnée
        </span>
      </div>
      <p style=\"font-size: 0.875rem; color: #6B7280;\">Vos courses apparaîtront ici</p>
    </div>
  {% endfor %}

  <!-- Pied de page -->
  <div style=\"
       background-color: #F8FAFC;
       padding: 1.5rem;
       border: 1px solid #E2E8F0;
       border-radius: 0.75rem;
       margin-top: 1rem;
       box-shadow: 0 1px 2px rgba(0,0,0,0.05);
       display: flex;
       justify-content: space-between;
       align-items: center;
     \">
    <span style=\"
         display: inline-block;
         padding: 0.25rem 0.5rem;
         background: linear-gradient(135deg, #27272A, #1F2937);
         text-transform: uppercase;
         font-weight: bold;
         font-size: 0.75rem;
         color: white;
       \">
      Total : {{ courses|length }} courses
    </span>
    {% if courses|length > 0 %}
      <span style=\"font-size: 0.75rem; color: #6B7280;\">
        Dernière course : {{ courses|first.dateCourse|date('d/m/Y') }}
      </span>
    {% endif %}
  </div>
</div>
<div class=\"text-center my-5\">
  <h3>Téléchargez votre rapport PDF</h3>

  <div class=\"my-3\">
    <img
      src=\"{{ path('report_qr', {'userId': app.user.id}) }}\"
      alt=\"QR Code Rapport\"
      style=\"width:200px; height:200px;\"
    />
  </div>

  <a
    href=\"{{ path('report_pdf', {'userId': app.user.id}) }}\"
    class=\"btn btn-primary\"
  >
    Télécharger le PDF
  </a>
</div>
{% endblock %}
", "front_office/course/index.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\front_office\\course\\index.html.twig");
    }
}
