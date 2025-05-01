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

/* abonnement_reservation/reserve.html.twig */
class __TwigTemplate_07a669dd8e3dcf2004f90080e2ec3708 extends Template
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
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/reserve.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/reserve.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "abonnement_reservation/reserve.html.twig", 1);
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

        yield "Reserve Subscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
    .reservation-detail-card {
        background-color: #f8f9fa;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    .reservation-detail-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    .form-control {
        transition: all 0.3s ease;
    }
    .form-control:focus {
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5);
        border-color: #3b82f6;
    }
    .price-highlight {
        color: #1e40af;
        font-weight: 600;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
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

        // line 32
        yield "<div class=\"w-full px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8\">
    <div class=\"flex flex-col space-y-6\">
        <!-- Main Card -->
        <div class=\"overflow-hidden bg-white rounded-xl shadow-sm\">
            <!-- Card Header -->
            <div class=\"px-6 py-4 border-b border-gray-100\">
                <h3 class=\"text-2xl font-bold text-gray-900\">Reserve ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38)), "html", null, true);
        yield " Subscription</h3>
            </div>
            
            <!-- Flash Messages -->
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 43
            yield "                <div class=\"p-4 mx-6 mt-4 text-sm text-red-700 bg-red-100 rounded-lg\" role=\"alert\">
                    ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "
            <!-- Card Content -->
            <div class=\"p-6\">
                <!-- Details Grid -->
                <div class=\"grid grid-cols-1 gap-6 md:grid-cols-2\">
                    <!-- Subscription Details -->
                    <div class=\"p-5 reservation-detail-card\">
                        <h5 class=\"mb-4 text-lg font-bold text-gray-900\">Subscription Details</h5>
                        <ul class=\"space-y-3 text-gray-600\">
                            <li class=\"flex items-center justify-between\">
                                <span class=\"font-medium\">Type:</span>
                                <span>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58)), "html", null, true);
        yield "</span>
                            </li>
                            <li class=\"flex items-center justify-between\">
                                <span class=\"font-medium\">Price:</span>
                                <span class=\"price-highlight\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 62, $this->source); })()), "prix", [], "any", false, false, false, 62), "html", null, true);
        yield " DT</span>
                            </li>
                            <li class=\"flex items-center justify-between\">
                                <span class=\"font-medium\">Duration:</span>
                                <span>
                                    ";
        // line 67
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 67, $this->source); })()), "type", [], "any", false, false, false, 67) == "mensuel")) {
            // line 68
            yield "                                        1 Month
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 69
(isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 69, $this->source); })()), "type", [], "any", false, false, false, 69) == "trimestriel")) {
            // line 70
            yield "                                        3 Months
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 71
(isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 71, $this->source); })()), "type", [], "any", false, false, false, 71) == "annuel")) {
            // line 72
            yield "                                        1 Year
                                    ";
        }
        // line 74
        yield "                                </span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Reservation Period -->
                    <div class=\"p-5 reservation-detail-card\">
                        <h5 class=\"mb-4 text-lg font-bold text-gray-900\">Reservation Period</h5>
                        <ul class=\"space-y-3 text-gray-600\">
                            <li class=\"flex items-center justify-between\">
                                <span class=\"font-medium\">Start Date:</span>
                                <span>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 85, $this->source); })()), "dateDebut", [], "any", false, false, false, 85), "d/m/Y"), "html", null, true);
        yield "</span>
                            </li>
                            <li class=\"flex items-center justify-between\">
                                <span class=\"font-medium\">End Date:</span>
                                <span>";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 89, $this->source); })()), "dateFin", [], "any", false, false, false, 89), "d/m/Y"), "html", null, true);
        yield "</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Form -->
                ";
        // line 96
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'form_start', ["attr" => ["id" => "reservation-form", "class" => "mt-8"]]);
        yield "
                    <div class=\"mb-6\">
                        <label class=\"block mb-2 text-sm font-medium text-gray-700\">Full Name</label>
                        ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "fullname", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500", "placeholder" => "Enter your full name"]]);
        // line 104
        yield "
                        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "fullname", [], "any", false, false, false, 105), 'errors');
        yield "
                    </div>

                    <!-- Action Buttons -->
                    <div class=\"flex justify-end space-x-4\">
                        <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_index");
        yield "\" 
                           class=\"inline-block px-6 py-3 font-bold text-center text-gray-700 uppercase align-middle transition-all bg-white border border-gray-300 rounded-lg cursor-pointer leading-normal text-xs ease-in tracking-tight-rem shadow-md hover:shadow-lg hover:-translate-y-0.5\">
                            Cancel
                        </a>
                        <button id=\"stripe-checkout-btn\"
                                type=\"button\"
                                class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-800 to-blue-500 leading-normal text-xs ease-in tracking-tight-rem shadow-md hover:shadow-lg active:shadow-inner transform hover:-translate-y-0.5 active:translate-y-0\">
                            Pay & Confirm
                        </button>
                    </div>
                ";
        // line 120
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script>
    const stripe = Stripe('";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_key"]) || array_key_exists("stripe_key", $context) ? $context["stripe_key"] : (function () { throw new RuntimeError('Variable "stripe_key" does not exist.', 128, $this->source); })()), "html", null, true);
        yield "');

    document.getElementById('stripe-checkout-btn').addEventListener('click', function () {
        document.getElementById('reservation-form').submit();
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
        return "abonnement_reservation/reserve.html.twig";
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
        return array (  296 => 128,  285 => 120,  272 => 110,  264 => 105,  261 => 104,  259 => 99,  253 => 96,  243 => 89,  236 => 85,  223 => 74,  219 => 72,  217 => 71,  214 => 70,  212 => 69,  209 => 68,  207 => 67,  199 => 62,  192 => 58,  179 => 47,  170 => 44,  167 => 43,  163 => 42,  156 => 38,  148 => 32,  135 => 31,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Reserve Subscription{% endblock %}

{% block styles %}
<style>
    .reservation-detail-card {
        background-color: #f8f9fa;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    .reservation-detail-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    .form-control {
        transition: all 0.3s ease;
    }
    .form-control:focus {
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5);
        border-color: #3b82f6;
    }
    .price-highlight {
        color: #1e40af;
        font-weight: 600;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"w-full px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8\">
    <div class=\"flex flex-col space-y-6\">
        <!-- Main Card -->
        <div class=\"overflow-hidden bg-white rounded-xl shadow-sm\">
            <!-- Card Header -->
            <div class=\"px-6 py-4 border-b border-gray-100\">
                <h3 class=\"text-2xl font-bold text-gray-900\">Reserve {{ abonnement.type|capitalize }} Subscription</h3>
            </div>
            
            <!-- Flash Messages -->
            {% for message in app.flashes('danger') %}
                <div class=\"p-4 mx-6 mt-4 text-sm text-red-700 bg-red-100 rounded-lg\" role=\"alert\">
                    {{ message }}
                </div>
            {% endfor %}

            <!-- Card Content -->
            <div class=\"p-6\">
                <!-- Details Grid -->
                <div class=\"grid grid-cols-1 gap-6 md:grid-cols-2\">
                    <!-- Subscription Details -->
                    <div class=\"p-5 reservation-detail-card\">
                        <h5 class=\"mb-4 text-lg font-bold text-gray-900\">Subscription Details</h5>
                        <ul class=\"space-y-3 text-gray-600\">
                            <li class=\"flex items-center justify-between\">
                                <span class=\"font-medium\">Type:</span>
                                <span>{{ abonnement.type|capitalize }}</span>
                            </li>
                            <li class=\"flex items-center justify-between\">
                                <span class=\"font-medium\">Price:</span>
                                <span class=\"price-highlight\">{{ abonnement.prix }} DT</span>
                            </li>
                            <li class=\"flex items-center justify-between\">
                                <span class=\"font-medium\">Duration:</span>
                                <span>
                                    {% if abonnement.type == 'mensuel' %}
                                        1 Month
                                    {% elseif abonnement.type == 'trimestriel' %}
                                        3 Months
                                    {% elseif abonnement.type == 'annuel' %}
                                        1 Year
                                    {% endif %}
                                </span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Reservation Period -->
                    <div class=\"p-5 reservation-detail-card\">
                        <h5 class=\"mb-4 text-lg font-bold text-gray-900\">Reservation Period</h5>
                        <ul class=\"space-y-3 text-gray-600\">
                            <li class=\"flex items-center justify-between\">
                                <span class=\"font-medium\">Start Date:</span>
                                <span>{{ abonnement.dateDebut|date('d/m/Y') }}</span>
                            </li>
                            <li class=\"flex items-center justify-between\">
                                <span class=\"font-medium\">End Date:</span>
                                <span>{{ abonnement.dateFin|date('d/m/Y') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Form -->
                {{ form_start(form, {'attr': {'id': 'reservation-form', 'class': 'mt-8'}}) }}
                    <div class=\"mb-6\">
                        <label class=\"block mb-2 text-sm font-medium text-gray-700\">Full Name</label>
                        {{ form_widget(form.fullname, {
                            'attr': {
                                'class': 'w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500',
                                'placeholder': 'Enter your full name'
                            }
                        }) }}
                        {{ form_errors(form.fullname) }}
                    </div>

                    <!-- Action Buttons -->
                    <div class=\"flex justify-end space-x-4\">
                        <a href=\"{{ path('app_abonnement_index') }}\" 
                           class=\"inline-block px-6 py-3 font-bold text-center text-gray-700 uppercase align-middle transition-all bg-white border border-gray-300 rounded-lg cursor-pointer leading-normal text-xs ease-in tracking-tight-rem shadow-md hover:shadow-lg hover:-translate-y-0.5\">
                            Cancel
                        </a>
                        <button id=\"stripe-checkout-btn\"
                                type=\"button\"
                                class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-800 to-blue-500 leading-normal text-xs ease-in tracking-tight-rem shadow-md hover:shadow-lg active:shadow-inner transform hover:-translate-y-0.5 active:translate-y-0\">
                            Pay & Confirm
                        </button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script>
    const stripe = Stripe('{{ stripe_key }}');

    document.getElementById('stripe-checkout-btn').addEventListener('click', function () {
        document.getElementById('reservation-form').submit();
    });
</script>
{% endblock %}", "abonnement_reservation/reserve.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony1\\templates\\abonnement_reservation\\reserve.html.twig");
    }
}
