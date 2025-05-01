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

/* abonnement_reservation/index.html.twig */
class __TwigTemplate_743a73b75e6fa5aeb412c6e595c3926e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "abonnement_reservation/index.html.twig", 1);
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

        yield "Available Subscriptions";
        
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    :root {
        --primary: #6366f1;
        --primary-hover: #4f46e5;
        --primary-light: #e0e7ff;
        --secondary: #f43f5e;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --dark: #1e293b;
        --light: #f8fafc;
        --gray: #94a3b8;
        --gray-light: #e2e8f0;
        --radius: 12px;
        --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --shadow-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
        line-height: 1.5;
        color: var(--dark);
        background-color: var(--light);
        padding: 20px;
    }
    
    .subscriptions-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px 0;
    }
    
    .page-header {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }
    
    .page-header::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: linear-gradient(to right, var(--primary), var(--secondary));
        margin: 15px auto 0;
        border-radius: 2px;
    }
    
    .page-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--dark);
        margin-bottom: 10px;
        background: linear-gradient(to right, var(--primary), var(--secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }
    
    .page-subtitle {
        color: var(--gray);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 30px;
    }
    
    .subscription-card {
        background: white;
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: var(--transition);
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    
    .subscription-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-hover);
    }
    
    .card-image-container {
        height: 200px;
        width: 100%;
        background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
        position: relative;
        overflow: hidden;
    }
    
    .card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }
    
    .subscription-card:hover .card-image {
        transform: scale(1.05);
    }
    
    .image-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        color: var(--gray);
        font-size: 3.5rem;
        background: linear-gradient(135deg, #f8fafc, #f1f5f9);
    }
    
    .card-header {
        background: linear-gradient(to right, var(--primary), var(--primary-hover));
        color: white;
        padding: 18px;
        text-align: center;
        position: relative;
    }
    
    .card-header::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 20px;
        background: url(\"data:image/svg+xml,%3Csvg viewBox='0 0 1440 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='white' d='M0,70 C150,100 350,0 500,20 C700,40 800,80 1000,60 C1200,40 1300,0 1440,10 L1440,100 L0,100 Z'/%3E%3C/svg%3E\") no-repeat;
        background-size: cover;
    }
    
    .plan-name {
        font-size: 1.4rem;
        font-weight: 800;
        letter-spacing: -0.5px;
    }
    
    .plan-type {
        font-size: 0.9rem;
        opacity: 0.9;
        font-weight: 500;
    }
    
    /* Enhanced Card Body Styles */
    .card-body {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .price-container {
        text-align: center;
        margin-bottom: 20px;
        position: relative;
    }

    .price {
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--primary);
        display: flex;
        align-items: flex-start;
        justify-content: center;
        line-height: 1;
        margin-bottom: 5px;
    }

    .price-currency {
        font-size: 1.2rem;
        margin-top: 5px;
        margin-right: 3px;
    }

    .price-amount {
        line-height: 1;
    }

    .price-period {
        font-size: 1rem;
        color: var(--gray);
        font-weight: 500;
        margin-left: 5px;
        align-self: flex-end;
        margin-bottom: 3px;
    }

    .discount-badge {
        position: absolute;
        top: -10px;
        right: 20px;
        background: var(--secondary);
        color: white;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 700;
        display: flex;
        align-items: center;
    }

    .original-price {
        text-decoration: line-through;
        font-size: 0.8rem;
        margin-left: 5px;
        opacity: 0.8;
    }

    .details-list {
        margin: 20px 0;
        flex-grow: 1;
    }

    .detail-item {
        display: flex;
        margin-bottom: 15px;
        align-items: flex-start;
    }

    .detail-item.highlight-item {
        background: var(--primary-light);
        padding: 10px;
        border-radius: 8px;
        margin: 15px -10px;
    }

    .detail-icon {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--primary-light);
        color: var(--primary);
        border-radius: 8px;
        margin-right: 12px;
        flex-shrink: 0;
        font-size: 0.9rem;
    }

    .detail-content {
        flex-grow: 1;
    }

    .detail-label {
        font-weight: 600;
        color: var(--dark);
        font-size: 0.9rem;
        display: block;
        margin-bottom: 2px;
    }

    .detail-value {
        color: var(--gray);
        font-weight: 500;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .duration-days {
        font-size: 0.8rem;
        background: var(--gray-light);
        padding: 2px 6px;
        border-radius: 10px;
        margin-left: 8px;
    }

    .speed-indicator {
        display: inline-block;
        width: calc(var(--speed) * 50px);
        max-width: 100px;
        height: 4px;
        background: linear-gradient(to right, var(--primary), var(--success));
        border-radius: 2px;
        margin-left: 8px;
    }

    .status-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 15px 0;
        padding-top: 15px;
        border-top: 1px dashed var(--gray-light);
    }

    .remaining-days {
        font-size: 0.85rem;
        color: var(--gray);
        display: flex;
        align-items: center;
    }

    .remaining-days i {
        margin-right: 5px;
        color: var(--warning);
    }

    .action-buttons {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        margin-top: 10px;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 20px;
        border-radius: var(--radius);
        font-weight: 600;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        transition: var(--transition);
        border: none;
        font-size: 0.95rem;
    }

    .btn-block {
        display: flex;
        width: 100%;
    }

    .btn-primary {
        background: var(--primary);
        color: white;
    }

    .btn-primary:hover {
        background: var(--primary-hover);
        transform: translateY(-2px);
    }

    .btn-outline {
        background: transparent;
        border: 2px solid var(--primary);
        color: var(--primary);
    }

    .btn-outline:hover {
        background: var(--primary-light);
    }

    .benefits-list {
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px dashed var(--gray-light);
    }

    .benefits-title {
        font-size: 1rem;
        color: var(--dark);
        margin-bottom: 10px;
        font-weight: 600;
    }

    .benefit-item {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
        font-size: 0.9rem;
    }

    .benefit-icon {
        color: var(--success);
        margin-right: 8px;
        font-size: 0.8rem;
    }

    .empty-state {
        grid-column: 1/-1;
        text-align: center;
        padding: 60px 40px;
        background: white;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        max-width: 600px;
        margin: 0 auto;
    }
    
    .empty-icon {
        font-size: 4rem;
        color: var(--gray-light);
        margin-bottom: 20px;
    }
    
    .empty-title {
        font-size: 1.5rem;
        color: var(--dark);
        margin-bottom: 10px;
        font-weight: 700;
    }
    
    .empty-text {
        color: var(--gray);
        margin-bottom: 30px;
        font-size: 1.05rem;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .flash-message {
        padding: 16px 20px;
        margin-bottom: 30px;
        border-radius: var(--radius);
        animation: fadeIn 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: var(--shadow);
    }
    
    .flash-message i {
        margin-right: 12px;
        font-size: 1.2rem;
    }
    
    .flash-success {
        background: #ecfdf5;
        color: #047857;
        border-left: 4px solid #10b981;
    }
    
    .flash-error {
        background: #fef2f2;
        color: #b91c1c;
        border-left: 4px solid #ef4444;
    }
    
    .ribbon {
        position: absolute;
        top: 10px;
        right: -30px;
        width: 120px;
        padding: 6px 0;
        background: var(--secondary);
        color: white;
        text-align: center;
        font-size: 0.75rem;
        font-weight: 700;
        transform: rotate(45deg);
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        z-index: 1;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @media (max-width: 768px) {
        .page-title {
            font-size: 2rem;
        }
        
        .cards-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .subscription-card {
            max-width: 400px;
            margin: 0 auto;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 494
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

        // line 495
        yield "<div class=\"subscriptions-container\">
    <div class=\"page-header\">
        <h1 class=\"page-title\">Available Subscriptions</h1>
        <p class=\"page-subtitle\">Choose the perfect plan that fits your needs and budget</p>
    </div>
    
    ";
        // line 501
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 501, $this->source); })()), "flashes", ["success"], "method", false, false, false, 501));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 502
            yield "        <div class=\"flash-message flash-success\">
            <i class=\"fas fa-check-circle\"></i> ";
            // line 503
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 506
        yield "    
    ";
        // line 507
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 507, $this->source); })()), "flashes", ["error"], "method", false, false, false, 507));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 508
            yield "        <div class=\"flash-message flash-error\">
            <i class=\"fas fa-exclamation-circle\"></i> ";
            // line 509
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 512
        yield "
    <div class=\"cards-grid\">
        ";
        // line 514
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 514, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 515
            yield "            <div class=\"subscription-card\">
                ";
            // line 516
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "etat", [], "any", false, false, false, 516) == "active")) {
                // line 517
                yield "                    <div class=\"ribbon\">POPULAR</div>
                ";
            }
            // line 519
            yield "                
                <div class=\"card-image-container\">
                    ";
            // line 521
            if (CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "image", [], "any", false, false, false, 521)) {
                // line 522
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/abonnements/" . CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "image", [], "any", false, false, false, 522))), "html", null, true);
                yield "\" 
                             class=\"card-image\" 
                             alt=\"";
                // line 524
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 524), "html", null, true);
                yield "\"
                             onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'image-placeholder\\'><i class=\\'fas fa-image\\'></i></div>'\">
                    ";
            } else {
                // line 527
                yield "                        <div class=\"image-placeholder\">
                            <i class=\"fas fa-image\"></i>
                        </div>
                    ";
            }
            // line 531
            yield "                </div>
                
                <div class=\"card-header\">
                    <div class=\"plan-name\">";
            // line 534
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 534), "html", null, true);
            yield "</div>
                    <div class=\"plan-type\">Subscription Plan</div>
                </div>
                
                <div class=\"card-body\">
                    <div class=\"price-container\">
                        <div class=\"price\">
                            <span class=\"price-currency\">DT</span>
                            <span class=\"price-amount\">";
            // line 542
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "prix", [], "any", false, false, false, 542), "html", null, true);
            yield "</span>
                            <span class=\"price-period\">/month</span>
                        </div>
                        ";
            // line 545
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "discount", [], "any", true, true, false, 545) && (CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "discount", [], "any", false, false, false, 545) > 0))) {
                // line 546
                yield "                            <div class=\"discount-badge\">
                                <span class=\"discount-value\">-";
                // line 547
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "discount", [], "any", false, false, false, 547), "html", null, true);
                yield "%</span>
                                <span class=\"original-price\">";
                // line 548
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "originalPrice", [], "any", false, false, false, 548), "html", null, true);
                yield " DT</span>
                            </div>
                        ";
            }
            // line 551
            yield "                    </div>
                    
                    <div class=\"details-list\">
                        <div class=\"detail-item\">
                            <div class=\"detail-icon\">
                                <i class=\"fas fa-calendar-alt\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <span class=\"detail-label\">Duration:</span>
                                <span class=\"detail-value\">
                                    ";
            // line 561
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateDebut", [], "any", false, false, false, 561), "M d, Y"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateFin", [], "any", false, false, false, 561), "M d, Y"), "html", null, true);
            yield "
                                    ";
            // line 562
            if (CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "duration", [], "any", true, true, false, 562)) {
                // line 563
                yield "                                        <span class=\"duration-days\">(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "duration", [], "any", false, false, false, 563), "html", null, true);
                yield " days)</span>
                                    ";
            }
            // line 565
            yield "                                </span>
                            </div>
                        </div>
                        
                        ";
            // line 569
            if (CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "speed", [], "any", true, true, false, 569)) {
                // line 570
                yield "                        <div class=\"detail-item\">
                            <div class=\"detail-icon\">
                                <i class=\"fas fa-tachometer-alt\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <span class=\"detail-label\">Speed:</span>
                                <span class=\"detail-value\">
                                    ";
                // line 577
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "speed", [], "any", false, false, false, 577), "html", null, true);
                yield " Mbps
                                    ";
                // line 578
                if (CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "speed", [], "any", true, true, false, 578)) {
                    // line 579
                    yield "                                        <span class=\"speed-indicator\" style=\"--speed: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "speed", [], "any", false, false, false, 579) / 100), "html", null, true);
                    yield ";\"></span>
                                    ";
                }
                // line 581
                yield "                                </span>
                            </div>
                        </div>
                        ";
            }
            // line 585
            yield "                        
                        ";
            // line 586
            if (CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "data", [], "any", true, true, false, 586)) {
                // line 587
                yield "                        <div class=\"detail-item\">
                            <div class=\"detail-icon\">
                                <i class=\"fas fa-database\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <span class=\"detail-label\">Data:</span>
                                <span class=\"detail-value\">
                                    ";
                // line 594
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "data", [], "any", false, false, false, 594) ==  -1)) {
                    // line 595
                    yield "                                        Unlimited
                                    ";
                } else {
                    // line 597
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "data", [], "any", false, false, false, 597), "html", null, true);
                    yield " GB
                                    ";
                }
                // line 599
                yield "                                </span>
                            </div>
                        </div>
                        ";
            }
            // line 603
            yield "                        
                        ";
            // line 604
            if (CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "feature", [], "any", true, true, false, 604)) {
                // line 605
                yield "                        <div class=\"detail-item highlight-item\">
                            <div class=\"detail-icon\">
                                <i class=\"fas fa-star\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <span class=\"detail-label\">Special Feature:</span>
                                <span class=\"detail-value\">";
                // line 611
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "feature", [], "any", false, false, false, 611), "html", null, true);
                yield "</span>
                            </div>
                        </div>
                        ";
            }
            // line 615
            yield "                    </div>
                    
                    <div class=\"status-container\">
                        <span class=\"status-badge status-";
            // line 618
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "etat", [], "any", false, false, false, 618), "html", null, true);
            yield "\">
                            <i class=\"fas fa-";
            // line 619
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "etat", [], "any", false, false, false, 619) == "active")) {
                yield "check-circle";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "etat", [], "any", false, false, false, 619) == "expired")) {
                yield "times-circle";
            } else {
                yield "exclamation-circle";
            }
            yield "\"></i>
                            ";
            // line 620
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "etat", [], "any", false, false, false, 620)), "html", null, true);
            yield "
                        </span>
                        ";
            // line 622
            if (CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "remainingDays", [], "any", true, true, false, 622)) {
                // line 623
                yield "                            <span class=\"remaining-days\" title=\"Days remaining\">
                                <i class=\"fas fa-clock\"></i> ";
                // line 624
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "remainingDays", [], "any", false, false, false, 624), "html", null, true);
                yield " days left
                            </span>
                        ";
            }
            // line 627
            yield "                    </div>
                    
                    <div class=\"action-buttons\">
                        <a href=\"";
            // line 630
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_reserve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 630)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-shopping-cart mr-2\"></i> Reserve
                        </a>
                      
                    </div>
                    
                    ";
            // line 636
            if (CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "benefits", [], "any", true, true, false, 636)) {
                // line 637
                yield "                    <div class=\"benefits-list\">
                        <h4 class=\"benefits-title\">Includes:</h4>
                        <ul>
                            ";
                // line 640
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "benefits", [], "any", false, false, false, 640));
                foreach ($context['_seq'] as $context["_key"] => $context["benefit"]) {
                    // line 641
                    yield "                            <li class=\"benefit-item\">
                                <i class=\"fas fa-check-circle benefit-icon\"></i>
                                <span>";
                    // line 643
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["benefit"], "html", null, true);
                    yield "</span>
                            </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['benefit'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 646
                yield "                        </ul>
                    </div>
                    ";
            }
            // line 649
            yield "                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 651
        if (!$context['_iterated']) {
            // line 652
            yield "            <div class=\"empty-state\">
                <div class=\"empty-icon\">
                    <i class=\"fas fa-box-open\"></i>
                </div>
                <h3 class=\"empty-title\">No subscriptions available</h3>
                <p class=\"empty-text\">There are currently no subscription plans available. Please check back later or contact support for more information.</p>
                ";
            // line 658
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 659
                yield "                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_add");
                yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus mr-2\"></i> Add Subscription
                    </a>
                ";
            }
            // line 663
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['abonnement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 665
        yield "    </div>
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
        return "abonnement_reservation/index.html.twig";
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
        return array (  958 => 665,  951 => 663,  943 => 659,  941 => 658,  933 => 652,  931 => 651,  925 => 649,  920 => 646,  911 => 643,  907 => 641,  903 => 640,  898 => 637,  896 => 636,  887 => 630,  882 => 627,  876 => 624,  873 => 623,  871 => 622,  866 => 620,  856 => 619,  852 => 618,  847 => 615,  840 => 611,  832 => 605,  830 => 604,  827 => 603,  821 => 599,  815 => 597,  811 => 595,  809 => 594,  800 => 587,  798 => 586,  795 => 585,  789 => 581,  783 => 579,  781 => 578,  777 => 577,  768 => 570,  766 => 569,  760 => 565,  754 => 563,  752 => 562,  746 => 561,  734 => 551,  728 => 548,  724 => 547,  721 => 546,  719 => 545,  713 => 542,  702 => 534,  697 => 531,  691 => 527,  685 => 524,  679 => 522,  677 => 521,  673 => 519,  669 => 517,  667 => 516,  664 => 515,  659 => 514,  655 => 512,  646 => 509,  643 => 508,  639 => 507,  636 => 506,  627 => 503,  624 => 502,  620 => 501,  612 => 495,  599 => 494,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Available Subscriptions{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary: #6366f1;
        --primary-hover: #4f46e5;
        --primary-light: #e0e7ff;
        --secondary: #f43f5e;
        --success: #10b981;
        --warning: #f59e0b;
        --danger: #ef4444;
        --dark: #1e293b;
        --light: #f8fafc;
        --gray: #94a3b8;
        --gray-light: #e2e8f0;
        --radius: 12px;
        --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --shadow-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
        line-height: 1.5;
        color: var(--dark);
        background-color: var(--light);
        padding: 20px;
    }
    
    .subscriptions-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px 0;
    }
    
    .page-header {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }
    
    .page-header::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: linear-gradient(to right, var(--primary), var(--secondary));
        margin: 15px auto 0;
        border-radius: 2px;
    }
    
    .page-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--dark);
        margin-bottom: 10px;
        background: linear-gradient(to right, var(--primary), var(--secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }
    
    .page-subtitle {
        color: var(--gray);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 30px;
    }
    
    .subscription-card {
        background: white;
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: var(--transition);
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    
    .subscription-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-hover);
    }
    
    .card-image-container {
        height: 200px;
        width: 100%;
        background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
        position: relative;
        overflow: hidden;
    }
    
    .card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }
    
    .subscription-card:hover .card-image {
        transform: scale(1.05);
    }
    
    .image-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        color: var(--gray);
        font-size: 3.5rem;
        background: linear-gradient(135deg, #f8fafc, #f1f5f9);
    }
    
    .card-header {
        background: linear-gradient(to right, var(--primary), var(--primary-hover));
        color: white;
        padding: 18px;
        text-align: center;
        position: relative;
    }
    
    .card-header::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 20px;
        background: url(\"data:image/svg+xml,%3Csvg viewBox='0 0 1440 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='white' d='M0,70 C150,100 350,0 500,20 C700,40 800,80 1000,60 C1200,40 1300,0 1440,10 L1440,100 L0,100 Z'/%3E%3C/svg%3E\") no-repeat;
        background-size: cover;
    }
    
    .plan-name {
        font-size: 1.4rem;
        font-weight: 800;
        letter-spacing: -0.5px;
    }
    
    .plan-type {
        font-size: 0.9rem;
        opacity: 0.9;
        font-weight: 500;
    }
    
    /* Enhanced Card Body Styles */
    .card-body {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .price-container {
        text-align: center;
        margin-bottom: 20px;
        position: relative;
    }

    .price {
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--primary);
        display: flex;
        align-items: flex-start;
        justify-content: center;
        line-height: 1;
        margin-bottom: 5px;
    }

    .price-currency {
        font-size: 1.2rem;
        margin-top: 5px;
        margin-right: 3px;
    }

    .price-amount {
        line-height: 1;
    }

    .price-period {
        font-size: 1rem;
        color: var(--gray);
        font-weight: 500;
        margin-left: 5px;
        align-self: flex-end;
        margin-bottom: 3px;
    }

    .discount-badge {
        position: absolute;
        top: -10px;
        right: 20px;
        background: var(--secondary);
        color: white;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 700;
        display: flex;
        align-items: center;
    }

    .original-price {
        text-decoration: line-through;
        font-size: 0.8rem;
        margin-left: 5px;
        opacity: 0.8;
    }

    .details-list {
        margin: 20px 0;
        flex-grow: 1;
    }

    .detail-item {
        display: flex;
        margin-bottom: 15px;
        align-items: flex-start;
    }

    .detail-item.highlight-item {
        background: var(--primary-light);
        padding: 10px;
        border-radius: 8px;
        margin: 15px -10px;
    }

    .detail-icon {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--primary-light);
        color: var(--primary);
        border-radius: 8px;
        margin-right: 12px;
        flex-shrink: 0;
        font-size: 0.9rem;
    }

    .detail-content {
        flex-grow: 1;
    }

    .detail-label {
        font-weight: 600;
        color: var(--dark);
        font-size: 0.9rem;
        display: block;
        margin-bottom: 2px;
    }

    .detail-value {
        color: var(--gray);
        font-weight: 500;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .duration-days {
        font-size: 0.8rem;
        background: var(--gray-light);
        padding: 2px 6px;
        border-radius: 10px;
        margin-left: 8px;
    }

    .speed-indicator {
        display: inline-block;
        width: calc(var(--speed) * 50px);
        max-width: 100px;
        height: 4px;
        background: linear-gradient(to right, var(--primary), var(--success));
        border-radius: 2px;
        margin-left: 8px;
    }

    .status-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 15px 0;
        padding-top: 15px;
        border-top: 1px dashed var(--gray-light);
    }

    .remaining-days {
        font-size: 0.85rem;
        color: var(--gray);
        display: flex;
        align-items: center;
    }

    .remaining-days i {
        margin-right: 5px;
        color: var(--warning);
    }

    .action-buttons {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        margin-top: 10px;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 20px;
        border-radius: var(--radius);
        font-weight: 600;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        transition: var(--transition);
        border: none;
        font-size: 0.95rem;
    }

    .btn-block {
        display: flex;
        width: 100%;
    }

    .btn-primary {
        background: var(--primary);
        color: white;
    }

    .btn-primary:hover {
        background: var(--primary-hover);
        transform: translateY(-2px);
    }

    .btn-outline {
        background: transparent;
        border: 2px solid var(--primary);
        color: var(--primary);
    }

    .btn-outline:hover {
        background: var(--primary-light);
    }

    .benefits-list {
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px dashed var(--gray-light);
    }

    .benefits-title {
        font-size: 1rem;
        color: var(--dark);
        margin-bottom: 10px;
        font-weight: 600;
    }

    .benefit-item {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
        font-size: 0.9rem;
    }

    .benefit-icon {
        color: var(--success);
        margin-right: 8px;
        font-size: 0.8rem;
    }

    .empty-state {
        grid-column: 1/-1;
        text-align: center;
        padding: 60px 40px;
        background: white;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        max-width: 600px;
        margin: 0 auto;
    }
    
    .empty-icon {
        font-size: 4rem;
        color: var(--gray-light);
        margin-bottom: 20px;
    }
    
    .empty-title {
        font-size: 1.5rem;
        color: var(--dark);
        margin-bottom: 10px;
        font-weight: 700;
    }
    
    .empty-text {
        color: var(--gray);
        margin-bottom: 30px;
        font-size: 1.05rem;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .flash-message {
        padding: 16px 20px;
        margin-bottom: 30px;
        border-radius: var(--radius);
        animation: fadeIn 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: var(--shadow);
    }
    
    .flash-message i {
        margin-right: 12px;
        font-size: 1.2rem;
    }
    
    .flash-success {
        background: #ecfdf5;
        color: #047857;
        border-left: 4px solid #10b981;
    }
    
    .flash-error {
        background: #fef2f2;
        color: #b91c1c;
        border-left: 4px solid #ef4444;
    }
    
    .ribbon {
        position: absolute;
        top: 10px;
        right: -30px;
        width: 120px;
        padding: 6px 0;
        background: var(--secondary);
        color: white;
        text-align: center;
        font-size: 0.75rem;
        font-weight: 700;
        transform: rotate(45deg);
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        z-index: 1;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @media (max-width: 768px) {
        .page-title {
            font-size: 2rem;
        }
        
        .cards-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .subscription-card {
            max-width: 400px;
            margin: 0 auto;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"subscriptions-container\">
    <div class=\"page-header\">
        <h1 class=\"page-title\">Available Subscriptions</h1>
        <p class=\"page-subtitle\">Choose the perfect plan that fits your needs and budget</p>
    </div>
    
    {% for message in app.flashes('success') %}
        <div class=\"flash-message flash-success\">
            <i class=\"fas fa-check-circle\"></i> {{ message }}
        </div>
    {% endfor %}
    
    {% for message in app.flashes('error') %}
        <div class=\"flash-message flash-error\">
            <i class=\"fas fa-exclamation-circle\"></i> {{ message }}
        </div>
    {% endfor %}

    <div class=\"cards-grid\">
        {% for abonnement in abonnements %}
            <div class=\"subscription-card\">
                {% if abonnement.etat == 'active' %}
                    <div class=\"ribbon\">POPULAR</div>
                {% endif %}
                
                <div class=\"card-image-container\">
                    {% if abonnement.image %}
                        <img src=\"{{ asset('uploads/images/abonnements/' ~ abonnement.image) }}\" 
                             class=\"card-image\" 
                             alt=\"{{ abonnement.type }}\"
                             onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'image-placeholder\\'><i class=\\'fas fa-image\\'></i></div>'\">
                    {% else %}
                        <div class=\"image-placeholder\">
                            <i class=\"fas fa-image\"></i>
                        </div>
                    {% endif %}
                </div>
                
                <div class=\"card-header\">
                    <div class=\"plan-name\">{{ abonnement.type }}</div>
                    <div class=\"plan-type\">Subscription Plan</div>
                </div>
                
                <div class=\"card-body\">
                    <div class=\"price-container\">
                        <div class=\"price\">
                            <span class=\"price-currency\">DT</span>
                            <span class=\"price-amount\">{{ abonnement.prix }}</span>
                            <span class=\"price-period\">/month</span>
                        </div>
                        {% if abonnement.discount is defined and abonnement.discount > 0 %}
                            <div class=\"discount-badge\">
                                <span class=\"discount-value\">-{{ abonnement.discount }}%</span>
                                <span class=\"original-price\">{{ abonnement.originalPrice }} DT</span>
                            </div>
                        {% endif %}
                    </div>
                    
                    <div class=\"details-list\">
                        <div class=\"detail-item\">
                            <div class=\"detail-icon\">
                                <i class=\"fas fa-calendar-alt\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <span class=\"detail-label\">Duration:</span>
                                <span class=\"detail-value\">
                                    {{ abonnement.dateDebut|date('M d, Y') }} - {{ abonnement.dateFin|date('M d, Y') }}
                                    {% if abonnement.duration is defined %}
                                        <span class=\"duration-days\">({{ abonnement.duration }} days)</span>
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                        
                        {% if abonnement.speed is defined %}
                        <div class=\"detail-item\">
                            <div class=\"detail-icon\">
                                <i class=\"fas fa-tachometer-alt\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <span class=\"detail-label\">Speed:</span>
                                <span class=\"detail-value\">
                                    {{ abonnement.speed }} Mbps
                                    {% if abonnement.speed is defined %}
                                        <span class=\"speed-indicator\" style=\"--speed: {{ abonnement.speed / 100 }};\"></span>
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                        {% endif %}
                        
                        {% if abonnement.data is defined %}
                        <div class=\"detail-item\">
                            <div class=\"detail-icon\">
                                <i class=\"fas fa-database\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <span class=\"detail-label\">Data:</span>
                                <span class=\"detail-value\">
                                    {% if abonnement.data == -1 %}
                                        Unlimited
                                    {% else %}
                                        {{ abonnement.data }} GB
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                        {% endif %}
                        
                        {% if abonnement.feature is defined %}
                        <div class=\"detail-item highlight-item\">
                            <div class=\"detail-icon\">
                                <i class=\"fas fa-star\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <span class=\"detail-label\">Special Feature:</span>
                                <span class=\"detail-value\">{{ abonnement.feature }}</span>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                    
                    <div class=\"status-container\">
                        <span class=\"status-badge status-{{ abonnement.etat }}\">
                            <i class=\"fas fa-{% if abonnement.etat == 'active' %}check-circle{% elseif abonnement.etat == 'expired' %}times-circle{% else %}exclamation-circle{% endif %}\"></i>
                            {{ abonnement.etat|capitalize }}
                        </span>
                        {% if abonnement.remainingDays is defined %}
                            <span class=\"remaining-days\" title=\"Days remaining\">
                                <i class=\"fas fa-clock\"></i> {{ abonnement.remainingDays }} days left
                            </span>
                        {% endif %}
                    </div>
                    
                    <div class=\"action-buttons\">
                        <a href=\"{{ path('app_abonnement_reserve', {'id': abonnement.id}) }}\" class=\"btn btn-primary\">
                            <i class=\"fas fa-shopping-cart mr-2\"></i> Reserve
                        </a>
                      
                    </div>
                    
                    {% if abonnement.benefits is defined %}
                    <div class=\"benefits-list\">
                        <h4 class=\"benefits-title\">Includes:</h4>
                        <ul>
                            {% for benefit in abonnement.benefits %}
                            <li class=\"benefit-item\">
                                <i class=\"fas fa-check-circle benefit-icon\"></i>
                                <span>{{ benefit }}</span>
                            </li>
                            {% endfor %}
                        </ul>
                    </div>
                    {% endif %}
                </div>
            </div>
        {% else %}
            <div class=\"empty-state\">
                <div class=\"empty-icon\">
                    <i class=\"fas fa-box-open\"></i>
                </div>
                <h3 class=\"empty-title\">No subscriptions available</h3>
                <p class=\"empty-text\">There are currently no subscription plans available. Please check back later or contact support for more information.</p>
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('abonnement_add') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus mr-2\"></i> Add Subscription
                    </a>
                {% endif %}
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}", "abonnement_reservation/index.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal - Copie (2)\\templates\\abonnement_reservation\\index.html.twig");
    }
}
