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

/* avis/reponses.html.twig */
class __TwigTemplate_ff1b2cf2250552f4aeb00b7414011689 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/reponses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/reponses.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/reponses.html.twig", 1);
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

        yield "Responses for complaints ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        yield " ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
 <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
 <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
 <style>
     .card-3d {
         background-color: #fff;
         border-radius: 0.75rem;
         box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
         overflow: hidden;
         transition: transform 0.3s ease, box-shadow 0.3s ease;
         margin: 1rem;
     }
 
     .header-3d {
         padding: 1.25rem;
         background: linear-gradient(135deg, #2D3748, #4A5568);
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: space-between;
         flex-wrap: wrap;
         gap: 1rem;
     }
 
     .header-3d h6 {
         font-size: 1.25rem;
         font-weight: 600;
         margin: 0;
         color: #fff;
     }
 
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
         text-decoration: none;
     }
 
     .btn-add:hover {
         transform: translateY(-1px);
         box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
     }
 
     .table-3d {
         padding: 1rem;
     }
 
     table.dataTable tbody tr:hover {
         background-color: #f7fafc !important;
     }
 
     .bg-green-500 { background-color: #28a745; }
     .bg-yellow-500 { background-color: #ffc107; }
     .bg-red-500 { background-color: #dc3545; }
 
     .text-gray-500 { color: #696969; }
     .border-gray-300 { border-color: #98FB98; }
     
     /* Rating styles */
     .rate-container {
         display: inline-block;
         margin-bottom: 10px;
     }
     
     .jq-ry-container {
         margin-bottom: 5px;
     }
     
     .rating-submit-btn {
         margin-top: 10px;
         padding: 5px 10px;
         background-color: #4A5568;
         color: white;
         border: none;
         border-radius: 4px;
         cursor: pointer;
     }
     
     .rating-submit-btn:hover {
         background-color: #2D3748;
     }
 
     .chart-container {
         margin: 1rem auto;
         padding: 1rem;
         max-width: 500px;
         background: #fff;
         border-radius: 8px;
         box-shadow: 0 4px 6px rgba(0,0,0,0.1);
         height: 350px;
     }
 
     #ratingsChart {
         max-width: 100%;
         max-height: 300px;
         margin: 0 auto;
     }
 </style>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
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

        // line 115
        yield " <div class=\"card-3d\">
     <div class=\"header-3d\">
         <h6>Responses for Complaint</h6>
         ";
        // line 118
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "roles", [], "any", false, false, false, 118)))) {
            // line 119
            yield "             <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new", ["avisId" => (isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 119, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn-add\">
                 + New Response
             </a>
         ";
        }
        // line 123
        yield "     </div>
 
     <div class=\"table-3d overflow-x-auto\">
         <table class=\"w-full text-sm text-left\">
             <thead>
                 <tr>
                     <th class=\"px-6 py-3 uppercase tracking-wider\">Comment</th>
                     <th class=\"px-6 py-3 uppercase tracking-wider\">Date</th>
                     <th class=\"px-6 py-3 uppercase tracking-wider\">Admin's Email</th>
                     <th class=\"px-6 py-3 uppercase tracking-wider\">Rating</th>
                     ";
        // line 133
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "roles", [], "any", false, false, false, 133)))) {
            // line 134
            yield "                         <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Actions</th>
                     ";
        }
        // line 136
        yield "                 </tr>
             </thead>
             <tbody>
                 ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 139, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 140
            yield "                     <tr class=\"border-b border-gray-200\">
                         <td class=\"px-6 py-3\">";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "commentaire", [], "any", false, false, false, 141), "html", null, true);
            yield "</td>
                         <td class=\"px-6 py-3\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 142), "Y-m-d"), "html", null, true);
            yield "</td>
                         <td class=\"px-6 py-3\">
                             ";
            // line 144
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 144)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 144), "username", [], "any", false, false, false, 144), "html", null, true)) : ("Unknown"));
            yield "
                         </td>
                         <td class=\"px-6 py-3\">
                             <div class=\"rate-container\">
                                 <div class=\"rating\" id=\"rating-";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 148), "html", null, true);
            yield "\" 
                                     data-rating=\"";
            // line 149
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", true, true, false, 149) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 149)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 149), "html", null, true)) : (0));
            yield "\" 
                                     data-readonly=\"";
            // line 150
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 150)) ||  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150) && CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "roles", [], "any", false, false, false, 150))))) ? ("true") : ("false"));
            yield "\"></div>
                                 ";
            // line 151
            if ((((null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 151)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151)) && CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "roles", [], "any", false, false, false, 151)))) {
                // line 152
                yield "                                     <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 152)]), "html", null, true);
                yield "\" class=\"rating-form\">
                                         <input type=\"hidden\" name=\"rate\" id=\"rate-value-";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 153), "html", null, true);
                yield "\" value=\"0\">
                                         <button type=\"submit\" class=\"rating-submit-btn\">Submit Rating</button>
                                     </form>
                                 ";
            }
            // line 157
            yield "                             </div>
                         </td>
                         ";
            // line 159
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "roles", [], "any", false, false, false, 159)))) {
                // line 160
                yield "                             <td class=\"px-6 py-3 space-x-2 text-center\">
                                 <a href=\"";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 161)]), "html", null, true);
                yield "\" 
                                    class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                    style=\"background: #00007d;\">
                                     Edit
                                 </a>
                                 <form method=\"post\" action=\"";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 166)]), "html", null, true);
                yield "\" 
                                       class=\"inline-block\" 
                                       onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                     <input type=\"hidden\" name=\"_token\" value=\"";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 169))), "html", null, true);
                yield "\">
                                     <button type=\"submit\"
                                             class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                             style=\"background: #b91c1c;\">
                                         Delete
                                     </button>
                                 </form>
                             </td>
                         ";
            }
            // line 178
            yield "                     </tr>
                 ";
            $context['_iterated'] = true;
        }
        // line 179
        if (!$context['_iterated']) {
            // line 180
            yield "                     <tr>
                         <td colspan=\"";
            // line 181
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "user", [], "any", false, false, false, 181) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "user", [], "any", false, false, false, 181), "roles", [], "any", false, false, false, 181)))) {
                yield "5";
            } else {
                yield "4";
            }
            yield "\" 
                             class=\"px-6 py-3 text-center text-gray-500\">
                             No responses found for this complaint.
                         </td>
                     </tr>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        yield "             </tbody>
         </table>
     </div>
 
     ";
        // line 191
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "user", [], "any", false, false, false, 191) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "user", [], "any", false, false, false, 191), "roles", [], "any", false, false, false, 191)))) {
            // line 192
            yield "     <div class=\"chart-container\">
         <h6 class=\"mb-4 text-center\">Global Rating Distribution</h6>
         <canvas id=\"ratingsChart\"></canvas>
     </div>
     ";
        }
        // line 197
        yield " 
     <div class=\"text-center mt-4 mb-4\">
         <a href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\" 
            class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
            style=\"background: #696969;\">
             Back to complaints list
         </a>
     </div>
 </div>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 208
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

        // line 209
        yield " ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
 <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
 <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
 <script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js\"></script>
 <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
 
 <script>
     \$(document).ready(function() {
         console.log(\"Document ready\");
         
         // Initialize DataTable
         \$('table').DataTable({
             searching: false,
             info: false,
             paging: false,
             responsive: true,
             autoWidth: false
         });

         // Debug - Check if jQuery and plugins are loaded
         if (typeof \$.fn.rateYo === 'undefined') {
             console.error(\"RateYo plugin not loaded\");
         } else {
             console.log(\"RateYo plugin loaded\");
         }
         
         if (typeof Chart === 'undefined') {
             console.error(\"Chart.js not loaded\");
         } else {
             console.log(\"Chart.js loaded\");
         }
 
         // Initialize rateYo ratings
         \$(\".rating\").each(function() {
             let \$this = \$(this);
             let id = \$this.attr('id').split('-')[1];
             let currentRating = parseFloat(\$this.data('rating')) || 0;
             let isReadonly = \$this.data('readonly') === 'true';
             
             console.log(\"Initializing rating:\", \$this.attr('id'), \"Rating:\", currentRating, \"ReadOnly:\", isReadonly);
             
             try {
                 \$this.rateYo({
                     rating: currentRating,
                     readOnly: isReadonly,
                     starWidth: \"20px\",
                     fullStar: true,
                     onSet: function(rating) {
                         // Update the hidden input value when rating changes
                         \$('#rate-value-' + id).val(rating);
                     }
                 });
             } catch (e) {
                 console.error(\"Error initializing RateYo:\", e);
             }
         });
 
         // Initialize Ratings Chart - Only for ROLE_ADMIN
         ";
        // line 267
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "user", [], "any", false, false, false, 267) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "user", [], "any", false, false, false, 267), "roles", [], "any", false, false, false, 267)))) {
            // line 268
            yield "         try {
             const ratingsCtx = document.getElementById('ratingsChart');
             if (ratingsCtx) {
                 console.log(\"Ratings chart canvas found\");
                 
                 ";
            // line 273
            if (array_key_exists("globalRatingStats", $context)) {
                // line 274
                yield "                     console.log(\"Global ratings stats defined\");
                     const stats = {
                         1: ";
                // line 276
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["globalRatingStats"] ?? null), 1, [], "array", true, true, false, 276) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 276, $this->source); })()), 1, [], "array", false, false, false, 276)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 276, $this->source); })()), 1, [], "array", false, false, false, 276), "html", null, true)) : (0));
                yield ",
                         2: ";
                // line 277
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["globalRatingStats"] ?? null), 2, [], "array", true, true, false, 277) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 277, $this->source); })()), 2, [], "array", false, false, false, 277)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 277, $this->source); })()), 2, [], "array", false, false, false, 277), "html", null, true)) : (0));
                yield ",
                         3: ";
                // line 278
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["globalRatingStats"] ?? null), 3, [], "array", true, true, false, 278) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 278, $this->source); })()), 3, [], "array", false, false, false, 278)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 278, $this->source); })()), 3, [], "array", false, false, false, 278), "html", null, true)) : (0));
                yield ",
                         4: ";
                // line 279
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["globalRatingStats"] ?? null), 4, [], "array", true, true, false, 279) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 279, $this->source); })()), 4, [], "array", false, false, false, 279)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 279, $this->source); })()), 4, [], "array", false, false, false, 279), "html", null, true)) : (0));
                yield ",
                         5: ";
                // line 280
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["globalRatingStats"] ?? null), 5, [], "array", true, true, false, 280) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 280, $this->source); })()), 5, [], "array", false, false, false, 280)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 280, $this->source); })()), 5, [], "array", false, false, false, 280), "html", null, true)) : (0));
                yield "
                     };
                     
                     console.log(\"Stats:\", stats);
                     
                     const chartData = {
                         labels: [
                             '1 Star (' + stats[1] + ')',
                             '2 Stars (' + stats[2] + ')',
                             '3 Stars (' + stats[3] + ')',
                             '4 Stars (' + stats[4] + ')',
                             '5 Stars (' + stats[5] + ')'
                         ],
                         datasets: [{
                             data: [stats[1], stats[2], stats[3], stats[4], stats[5]],
                             backgroundColor: [
                                 '#ff6384', '#ff9f40', '#ffcd56', '#4bc0c0', '#36a2eb'
                             ],
                             borderWidth: 1
                         }]
                     };
                     
                     new Chart(ratingsCtx, {
                         type: 'pie',
                         data: chartData,
                         options: {
                             responsive: true,
                             maintainAspectRatio: false,
                             plugins: {
                                 legend: {
                                     position: 'right'
                                 },
                                 tooltip: {
                                     callbacks: {
                                         label: function(context) {
                                             const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                             const value = context.raw;
                                             const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                                             return `\${value} ratings (\${percentage}%)`;
                                         }
                                     }
                                 }
                             }
                         }
                     });
                 ";
            } else {
                // line 326
                yield "                     console.log(\"Global ratings stats NOT defined\");
                     // Default chart with no data
                     new Chart(ratingsCtx, {
                         type: 'pie',
                         data: {
                             labels: ['No Rating Data Available'],
                             datasets: [{
                                 data: [1],
                                 backgroundColor: ['#e0e0e0'],
                                 borderWidth: 1
                             }]
                         },
                         options: {
                             responsive: true,
                             maintainAspectRatio: false,
                             plugins: {
                                 legend: {
                                     position: 'right'
                                 },
                                 tooltip: {
                                     callbacks: {
                                         label: function() {
                                             return 'No ratings available';
                                         }
                                     }
                                 }
                             }
                         }
                     });
                 ";
            }
            // line 356
            yield "             } else {
                 console.error(\"Ratings chart canvas NOT found\");
             }
         } catch (e) {
             console.error(\"Error initializing chart:\", e);
         }
         ";
        }
        // line 363
        yield "     });
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
        return "avis/reponses.html.twig";
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
        return array (  618 => 363,  609 => 356,  577 => 326,  528 => 280,  524 => 279,  520 => 278,  516 => 277,  512 => 276,  508 => 274,  506 => 273,  499 => 268,  497 => 267,  435 => 209,  422 => 208,  403 => 199,  399 => 197,  392 => 192,  390 => 191,  384 => 187,  368 => 181,  365 => 180,  363 => 179,  358 => 178,  346 => 169,  340 => 166,  332 => 161,  329 => 160,  327 => 159,  323 => 157,  316 => 153,  311 => 152,  309 => 151,  305 => 150,  301 => 149,  297 => 148,  290 => 144,  285 => 142,  281 => 141,  278 => 140,  273 => 139,  268 => 136,  264 => 134,  262 => 133,  250 => 123,  242 => 119,  240 => 118,  235 => 115,  222 => 114,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
 
 {% block title %}Responses for complaints {{ avis_id }}{% endblock %}
 
 {% block stylesheets %}
 {{ parent() }}
 <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
 <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
 <style>
     .card-3d {
         background-color: #fff;
         border-radius: 0.75rem;
         box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
         overflow: hidden;
         transition: transform 0.3s ease, box-shadow 0.3s ease;
         margin: 1rem;
     }
 
     .header-3d {
         padding: 1.25rem;
         background: linear-gradient(135deg, #2D3748, #4A5568);
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: space-between;
         flex-wrap: wrap;
         gap: 1rem;
     }
 
     .header-3d h6 {
         font-size: 1.25rem;
         font-weight: 600;
         margin: 0;
         color: #fff;
     }
 
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
         text-decoration: none;
     }
 
     .btn-add:hover {
         transform: translateY(-1px);
         box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
     }
 
     .table-3d {
         padding: 1rem;
     }
 
     table.dataTable tbody tr:hover {
         background-color: #f7fafc !important;
     }
 
     .bg-green-500 { background-color: #28a745; }
     .bg-yellow-500 { background-color: #ffc107; }
     .bg-red-500 { background-color: #dc3545; }
 
     .text-gray-500 { color: #696969; }
     .border-gray-300 { border-color: #98FB98; }
     
     /* Rating styles */
     .rate-container {
         display: inline-block;
         margin-bottom: 10px;
     }
     
     .jq-ry-container {
         margin-bottom: 5px;
     }
     
     .rating-submit-btn {
         margin-top: 10px;
         padding: 5px 10px;
         background-color: #4A5568;
         color: white;
         border: none;
         border-radius: 4px;
         cursor: pointer;
     }
     
     .rating-submit-btn:hover {
         background-color: #2D3748;
     }
 
     .chart-container {
         margin: 1rem auto;
         padding: 1rem;
         max-width: 500px;
         background: #fff;
         border-radius: 8px;
         box-shadow: 0 4px 6px rgba(0,0,0,0.1);
         height: 350px;
     }
 
     #ratingsChart {
         max-width: 100%;
         max-height: 300px;
         margin: 0 auto;
     }
 </style>
 {% endblock %}
 
 {% block body %}
 <div class=\"card-3d\">
     <div class=\"header-3d\">
         <h6>Responses for Complaint</h6>
         {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
             <a href=\"{{ path('app_reponse_new', {'avisId': avis_id}) }}\" class=\"btn-add\">
                 + New Response
             </a>
         {% endif %}
     </div>
 
     <div class=\"table-3d overflow-x-auto\">
         <table class=\"w-full text-sm text-left\">
             <thead>
                 <tr>
                     <th class=\"px-6 py-3 uppercase tracking-wider\">Comment</th>
                     <th class=\"px-6 py-3 uppercase tracking-wider\">Date</th>
                     <th class=\"px-6 py-3 uppercase tracking-wider\">Admin's Email</th>
                     <th class=\"px-6 py-3 uppercase tracking-wider\">Rating</th>
                     {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                         <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Actions</th>
                     {% endif %}
                 </tr>
             </thead>
             <tbody>
                 {% for reponse in reponses %}
                     <tr class=\"border-b border-gray-200\">
                         <td class=\"px-6 py-3\">{{ reponse.commentaire }}</td>
                         <td class=\"px-6 py-3\">{{ reponse.dateReponse|date('Y-m-d') }}</td>
                         <td class=\"px-6 py-3\">
                             {{ reponse.user ? reponse.user.username : 'Unknown' }}
                         </td>
                         <td class=\"px-6 py-3\">
                             <div class=\"rate-container\">
                                 <div class=\"rating\" id=\"rating-{{ reponse.id }}\" 
                                     data-rating=\"{{ reponse.rate ?? 0 }}\" 
                                     data-readonly=\"{{ (reponse.rate is not null or not (app.user and 'ROLE_CLIENT' in app.user.roles)) ? 'true' : 'false' }}\"></div>
                                 {% if reponse.rate is null and app.user and 'ROLE_CLIENT' in app.user.roles %}
                                     <form method=\"post\" action=\"{{ path('app_reponse_rate', {'id': reponse.id}) }}\" class=\"rating-form\">
                                         <input type=\"hidden\" name=\"rate\" id=\"rate-value-{{ reponse.id }}\" value=\"0\">
                                         <button type=\"submit\" class=\"rating-submit-btn\">Submit Rating</button>
                                     </form>
                                 {% endif %}
                             </div>
                         </td>
                         {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                             <td class=\"px-6 py-3 space-x-2 text-center\">
                                 <a href=\"{{ path('app_reponse_edit', {'id': reponse.id}) }}\" 
                                    class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                    style=\"background: #00007d;\">
                                     Edit
                                 </a>
                                 <form method=\"post\" action=\"{{ path('app_reponse_delete', {'id': reponse.id}) }}\" 
                                       class=\"inline-block\" 
                                       onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                     <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reponse.id) }}\">
                                     <button type=\"submit\"
                                             class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                             style=\"background: #b91c1c;\">
                                         Delete
                                     </button>
                                 </form>
                             </td>
                         {% endif %}
                     </tr>
                 {% else %}
                     <tr>
                         <td colspan=\"{% if app.user and 'ROLE_ADMIN' in app.user.roles %}5{% else %}4{% endif %}\" 
                             class=\"px-6 py-3 text-center text-gray-500\">
                             No responses found for this complaint.
                         </td>
                     </tr>
                 {% endfor %}
             </tbody>
         </table>
     </div>
 
     {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
     <div class=\"chart-container\">
         <h6 class=\"mb-4 text-center\">Global Rating Distribution</h6>
         <canvas id=\"ratingsChart\"></canvas>
     </div>
     {% endif %}
 
     <div class=\"text-center mt-4 mb-4\">
         <a href=\"{{ path('app_avis_index') }}\" 
            class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
            style=\"background: #696969;\">
             Back to complaints list
         </a>
     </div>
 </div>
 {% endblock %}
 
 {% block javascripts %}
 {{ parent() }}
 <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
 <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
 <script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js\"></script>
 <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
 
 <script>
     \$(document).ready(function() {
         console.log(\"Document ready\");
         
         // Initialize DataTable
         \$('table').DataTable({
             searching: false,
             info: false,
             paging: false,
             responsive: true,
             autoWidth: false
         });

         // Debug - Check if jQuery and plugins are loaded
         if (typeof \$.fn.rateYo === 'undefined') {
             console.error(\"RateYo plugin not loaded\");
         } else {
             console.log(\"RateYo plugin loaded\");
         }
         
         if (typeof Chart === 'undefined') {
             console.error(\"Chart.js not loaded\");
         } else {
             console.log(\"Chart.js loaded\");
         }
 
         // Initialize rateYo ratings
         \$(\".rating\").each(function() {
             let \$this = \$(this);
             let id = \$this.attr('id').split('-')[1];
             let currentRating = parseFloat(\$this.data('rating')) || 0;
             let isReadonly = \$this.data('readonly') === 'true';
             
             console.log(\"Initializing rating:\", \$this.attr('id'), \"Rating:\", currentRating, \"ReadOnly:\", isReadonly);
             
             try {
                 \$this.rateYo({
                     rating: currentRating,
                     readOnly: isReadonly,
                     starWidth: \"20px\",
                     fullStar: true,
                     onSet: function(rating) {
                         // Update the hidden input value when rating changes
                         \$('#rate-value-' + id).val(rating);
                     }
                 });
             } catch (e) {
                 console.error(\"Error initializing RateYo:\", e);
             }
         });
 
         // Initialize Ratings Chart - Only for ROLE_ADMIN
         {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
         try {
             const ratingsCtx = document.getElementById('ratingsChart');
             if (ratingsCtx) {
                 console.log(\"Ratings chart canvas found\");
                 
                 {% if globalRatingStats is defined %}
                     console.log(\"Global ratings stats defined\");
                     const stats = {
                         1: {{ globalRatingStats[1] ?? 0 }},
                         2: {{ globalRatingStats[2] ?? 0 }},
                         3: {{ globalRatingStats[3] ?? 0 }},
                         4: {{ globalRatingStats[4] ?? 0 }},
                         5: {{ globalRatingStats[5] ?? 0 }}
                     };
                     
                     console.log(\"Stats:\", stats);
                     
                     const chartData = {
                         labels: [
                             '1 Star (' + stats[1] + ')',
                             '2 Stars (' + stats[2] + ')',
                             '3 Stars (' + stats[3] + ')',
                             '4 Stars (' + stats[4] + ')',
                             '5 Stars (' + stats[5] + ')'
                         ],
                         datasets: [{
                             data: [stats[1], stats[2], stats[3], stats[4], stats[5]],
                             backgroundColor: [
                                 '#ff6384', '#ff9f40', '#ffcd56', '#4bc0c0', '#36a2eb'
                             ],
                             borderWidth: 1
                         }]
                     };
                     
                     new Chart(ratingsCtx, {
                         type: 'pie',
                         data: chartData,
                         options: {
                             responsive: true,
                             maintainAspectRatio: false,
                             plugins: {
                                 legend: {
                                     position: 'right'
                                 },
                                 tooltip: {
                                     callbacks: {
                                         label: function(context) {
                                             const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                             const value = context.raw;
                                             const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                                             return `\${value} ratings (\${percentage}%)`;
                                         }
                                     }
                                 }
                             }
                         }
                     });
                 {% else %}
                     console.log(\"Global ratings stats NOT defined\");
                     // Default chart with no data
                     new Chart(ratingsCtx, {
                         type: 'pie',
                         data: {
                             labels: ['No Rating Data Available'],
                             datasets: [{
                                 data: [1],
                                 backgroundColor: ['#e0e0e0'],
                                 borderWidth: 1
                             }]
                         },
                         options: {
                             responsive: true,
                             maintainAspectRatio: false,
                             plugins: {
                                 legend: {
                                     position: 'right'
                                 },
                                 tooltip: {
                                     callbacks: {
                                         label: function() {
                                             return 'No ratings available';
                                         }
                                     }
                                 }
                             }
                         }
                     });
                 {% endif %}
             } else {
                 console.error(\"Ratings chart canvas NOT found\");
             }
         } catch (e) {
             console.error(\"Error initializing chart:\", e);
         }
         {% endif %}
     });
 </script>
 {% endblock %}", "avis/reponses.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\avis\\reponses.html.twig");
    }
}
