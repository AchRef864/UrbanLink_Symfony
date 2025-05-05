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

/* front_office/Avis/reponses.html.twig */
class __TwigTemplate_301bb9c8be64c977a008f34ce0576df4 extends Template
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
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/reponses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/reponses.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "front_office/Avis/reponses.html.twig", 1);
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

        yield "Responses for complaints";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
    ";
        // line 9
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    <style>
        /* Rating Container Styles */
        .rate-container {
            display: inline-block;
            min-width: 120px;
            min-height: 30px;
            margin-bottom: 10px;
        }
        
        /* Force RateYo styles to be visible */
        .jq-ry-container {
            padding: 0 !important;
            line-height: 0 !important;
            min-width: 120px !important;
        }
        
        .jq-ry-container > svg {
            display: inline-block !important;
            width: 20px !important;
            height: 20px !important;
        }
        
        /* Form Styles */
        .rating-form {
            margin-top: 10px;
        }
        
        .rating-submit-btn {
            padding: 5px 10px;
            background-color: #4a5568;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        /* Table Styles */
        #reponses-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        #reponses-table th, #reponses-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }
        
        #reponses-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        /* Card Styles */
        .card-3d {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            margin: 20px 0;
        }
        
        .header-3d {
            padding: 15px 20px;
            background: linear-gradient(135deg, #2D3748, #4A5568);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header-3d h6 {
            margin: 0;
            font-size: 1.2rem;
        }
        
        .btn-add {
            display: inline-block;
            padding: 8px 15px;
            background-color: rgba(255,255,255,0.2);
            color: white;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .btn-add:hover {
            background-color: rgba(255,255,255,0.3);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
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

        // line 103
        yield "<div class=\"card-3d\">
    <div class=\"header-3d\">
        <h6>Responses for Complaint #";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "</h6>
        ";
        // line 106
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "roles", [], "any", false, false, false, 106)))) {
            // line 107
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new", ["avisId" => (isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 107, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn-add\">+ New Response</a>
        ";
        }
        // line 109
        yield "    </div>

    <div class=\"table-3d overflow-x-auto\">
        <table id=\"reponses-table\" class=\"display\">
            <thead>
                <tr>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>Admin</th>
                    <th>Rating</th>
                    ";
        // line 119
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "roles", [], "any", false, false, false, 119)))) {
            // line 120
            yield "                        <th>Actions</th>
                    ";
        }
        // line 122
        yield "                </tr>
            </thead>
            <tbody>
                ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 125, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 126
            yield "                    <tr data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 126), "html", null, true);
            yield "\">
                        <td>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "commentaire", [], "any", false, false, false, 127), "html", null, true);
            yield "</td>
                        <td>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 128), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                        <td>";
            // line 129
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 129)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 129), "username", [], "any", false, false, false, 129), "html", null, true)) : ("Unknown"));
            yield "</td>
                        <td>
                            <div class=\"rate-container\">
                                <div class=\"rate-yo\" 
                                    id=\"rating-";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 133), "html", null, true);
            yield "\" 
                                    data-rate=\"";
            // line 134
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", true, true, false, 134) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 134)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 134), "html", null, true)) : (0));
            yield "\" 
                                    data-readonly=\"";
            // line 135
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 135)) ||  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135) && CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "roles", [], "any", false, false, false, 135))))) ? ("true") : ("false"));
            yield "\">
                                </div>
                                ";
            // line 137
            if ((((null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 137)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137)) && CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "roles", [], "any", false, false, false, 137)))) {
                // line 138
                yield "                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 138)]), "html", null, true);
                yield "\" class=\"rating-form\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("rate" . CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 139))), "html", null, true);
                yield "\">
                                        <input type=\"hidden\" name=\"rate\" id=\"rate-input-";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 140), "html", null, true);
                yield "\" value=\"\">
                                        <button type=\"submit\" class=\"rating-submit-btn\">Submit Rating</button>
                                    </form>
                                ";
            }
            // line 144
            yield "                            </div>
                        </td>
                        ";
            // line 146
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "roles", [], "any", false, false, false, 146)))) {
                // line 147
                yield "                            <td class=\"action-buttons\">
                                <a href=\"";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                yield "\" class=\"btn-edit\">Edit</a>
                                <form method=\"post\" action=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 150))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn-delete\">Delete</button>
                                </form>
                            </td>
                        ";
            }
            // line 155
            yield "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 156
        if (!$context['_iterated']) {
            // line 157
            yield "                    <tr>
                        <td colspan=\"";
            // line 158
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "roles", [], "any", false, false, false, 158)))) {
                yield "5";
            } else {
                yield "4";
            }
            yield "\">
                            No responses found for this complaint.
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 169
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

        // line 170
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
    ";
        // line 174
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
    
    <script>
        \$(document).ready(function() {
            console.log('Document ready - initializing components');
            
            // Initialize DataTable
            \$('#reponses-table').DataTable({
                responsive: true,
                searching: false,
                paging: false,
                info: false
            });
            
            // Debug: Check if RateYo is loaded
            if (typeof \$.fn.rateYo === 'undefined') {
                console.error('RateYo plugin not loaded!');
            } else {
                console.log('RateYo plugin loaded successfully');
            }
            
            // Initialize RateYo for each rating element
            \$('.rate-yo').each(function() {
                const \$el = \$(this);
                const id = \$el.attr('id').split('-')[1];
                const rating = parseFloat(\$el.data('rate')) || 0;
                const readonly = \$el.data('readonly') === 'true';
                
                console.log(`Initializing rating for #\${\$el.attr('id')}`, {
                    rating: rating,
                    readonly: readonly
                });
                
                try {
                    \$el.rateYo({
                        rating: rating,
                        starWidth: \"20px\",
                        fullStar: true,
                        readOnly: readonly,
                        normalFill: \"#A0A0A0\",
                        ratedFill: \"#FFD700\",
                        spacing: \"5px\",
                        onSet: function(newRating) {
                            if (!readonly) {
                                console.log(`Rating set to: \${newRating} for response \${id}`);
                                \$('#rate-input-' + id).val(newRating);
                            }
                        }
                    });
                    
                    // Debug: Check if stars were rendered
                    if (\$el.find('svg').length === 0) {
                        console.error('No stars rendered for #' + \$el.attr('id'));
                    }
                } catch (e) {
                    console.error('Error initializing RateYo:', e);
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
        return "front_office/Avis/reponses.html.twig";
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
        return array (  406 => 174,  398 => 170,  385 => 169,  370 => 163,  355 => 158,  352 => 157,  350 => 156,  345 => 155,  337 => 150,  333 => 149,  329 => 148,  326 => 147,  324 => 146,  320 => 144,  313 => 140,  309 => 139,  304 => 138,  302 => 137,  297 => 135,  293 => 134,  289 => 133,  282 => 129,  278 => 128,  274 => 127,  269 => 126,  264 => 125,  259 => 122,  255 => 120,  253 => 119,  241 => 109,  235 => 107,  233 => 106,  229 => 105,  225 => 103,  212 => 102,  109 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Responses for complaints{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
    {{ encore_entry_link_tags('app') }}
    <style>
        /* Rating Container Styles */
        .rate-container {
            display: inline-block;
            min-width: 120px;
            min-height: 30px;
            margin-bottom: 10px;
        }
        
        /* Force RateYo styles to be visible */
        .jq-ry-container {
            padding: 0 !important;
            line-height: 0 !important;
            min-width: 120px !important;
        }
        
        .jq-ry-container > svg {
            display: inline-block !important;
            width: 20px !important;
            height: 20px !important;
        }
        
        /* Form Styles */
        .rating-form {
            margin-top: 10px;
        }
        
        .rating-submit-btn {
            padding: 5px 10px;
            background-color: #4a5568;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        /* Table Styles */
        #reponses-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        #reponses-table th, #reponses-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }
        
        #reponses-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        /* Card Styles */
        .card-3d {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            margin: 20px 0;
        }
        
        .header-3d {
            padding: 15px 20px;
            background: linear-gradient(135deg, #2D3748, #4A5568);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header-3d h6 {
            margin: 0;
            font-size: 1.2rem;
        }
        
        .btn-add {
            display: inline-block;
            padding: 8px 15px;
            background-color: rgba(255,255,255,0.2);
            color: white;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .btn-add:hover {
            background-color: rgba(255,255,255,0.3);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"card-3d\">
    <div class=\"header-3d\">
        <h6>Responses for Complaint #{{ avis_id }}</h6>
        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
            <a href=\"{{ path('app_reponse_new', {'avisId': avis_id}) }}\" class=\"btn-add\">+ New Response</a>
        {% endif %}
    </div>

    <div class=\"table-3d overflow-x-auto\">
        <table id=\"reponses-table\" class=\"display\">
            <thead>
                <tr>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>Admin</th>
                    <th>Rating</th>
                    {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                        <th>Actions</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
                {% for reponse in reponses %}
                    <tr data-id=\"{{ reponse.id }}\">
                        <td>{{ reponse.commentaire }}</td>
                        <td>{{ reponse.dateReponse|date('Y-m-d H:i') }}</td>
                        <td>{{ reponse.user ? reponse.user.username : 'Unknown' }}</td>
                        <td>
                            <div class=\"rate-container\">
                                <div class=\"rate-yo\" 
                                    id=\"rating-{{ reponse.id }}\" 
                                    data-rate=\"{{ reponse.rate ?? 0 }}\" 
                                    data-readonly=\"{{ (reponse.rate is not null or not (app.user and 'ROLE_CLIENT' in app.user.roles)) ? 'true' : 'false' }}\">
                                </div>
                                {% if reponse.rate is null and app.user and 'ROLE_CLIENT' in app.user.roles %}
                                    <form method=\"post\" action=\"{{ path('app_reponse_rate', {'id': reponse.id}) }}\" class=\"rating-form\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('rate' ~ reponse.id) }}\">
                                        <input type=\"hidden\" name=\"rate\" id=\"rate-input-{{ reponse.id }}\" value=\"\">
                                        <button type=\"submit\" class=\"rating-submit-btn\">Submit Rating</button>
                                    </form>
                                {% endif %}
                            </div>
                        </td>
                        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                            <td class=\"action-buttons\">
                                <a href=\"{{ path('app_reponse_edit', {'id': reponse.id}) }}\" class=\"btn-edit\">Edit</a>
                                <form method=\"post\" action=\"{{ path('app_reponse_delete', {'id': reponse.id}) }}\" onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reponse.id) }}\">
                                    <button type=\"submit\" class=\"btn-delete\">Delete</button>
                                </form>
                            </td>
                        {% endif %}
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"{% if app.user and 'ROLE_ADMIN' in app.user.roles %}5{% else %}4{% endif %}\">
                            No responses found for this complaint.
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
    {{ encore_entry_script_tags('app') }}
    
    <script>
        \$(document).ready(function() {
            console.log('Document ready - initializing components');
            
            // Initialize DataTable
            \$('#reponses-table').DataTable({
                responsive: true,
                searching: false,
                paging: false,
                info: false
            });
            
            // Debug: Check if RateYo is loaded
            if (typeof \$.fn.rateYo === 'undefined') {
                console.error('RateYo plugin not loaded!');
            } else {
                console.log('RateYo plugin loaded successfully');
            }
            
            // Initialize RateYo for each rating element
            \$('.rate-yo').each(function() {
                const \$el = \$(this);
                const id = \$el.attr('id').split('-')[1];
                const rating = parseFloat(\$el.data('rate')) || 0;
                const readonly = \$el.data('readonly') === 'true';
                
                console.log(`Initializing rating for #\${\$el.attr('id')}`, {
                    rating: rating,
                    readonly: readonly
                });
                
                try {
                    \$el.rateYo({
                        rating: rating,
                        starWidth: \"20px\",
                        fullStar: true,
                        readOnly: readonly,
                        normalFill: \"#A0A0A0\",
                        ratedFill: \"#FFD700\",
                        spacing: \"5px\",
                        onSet: function(newRating) {
                            if (!readonly) {
                                console.log(`Rating set to: \${newRating} for response \${id}`);
                                \$('#rate-input-' + id).val(newRating);
                            }
                        }
                    });
                    
                    // Debug: Check if stars were rendered
                    if (\$el.find('svg').length === 0) {
                        console.error('No stars rendered for #' + \$el.attr('id'));
                    }
                } catch (e) {
                    console.error('Error initializing RateYo:', e);
                }
            });
        });
    </script>
{% endblock %}", "front_office/Avis/reponses.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\front_office\\Avis\\reponses.html.twig");
    }
}
