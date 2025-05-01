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

/* abonnement/add.html.twig */
class __TwigTemplate_d069fecdaf370add935013dc7c7eae40 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnement/add.html.twig", 1);
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

        yield "Ajouter un Abonnement";
        
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
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --primary-light: #4895ef;
            --secondary: #7209b7;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #f8f9fa;
            --dark: #212529;
            --text: #2b2d42;
            --text-light: #8d99ae;
            --bg: #f8f9fa;
            --card-bg: #ffffff;
            --border: #dee2e6;
        }
        
        .dark {
            --primary: #4895ef;
            --primary-dark: #3a0ca3;
            --primary-light: #4cc9f0;
            --secondary: #b5179e;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #343a40;
            --dark: #f8f9fa;
            --text: #f8f9fa;
            --text-light: #adb5bd;
            --bg: #212529;
            --card-bg: #2b2d42;
            --border: #495057;
        }
        
        body {
            background-color: var(--bg);
            color: var(--text);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .custom-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .dark .custom-card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        
        .custom-header {
            border-bottom: 1px solid var(--border);
            padding: 1.5rem;
        }
        
        .custom-title {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 0.25rem;
        }
        
        .custom-subtitle {
            color: var(--text-light);
            font-size: 0.875rem;
        }
        
        .custom-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            font-size: 0.875rem;
            border: none;
            cursor: pointer;
        }
        
        .custom-btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.25);
        }
        
        .custom-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(67, 97, 238, 0.35);
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
        }
        
        .custom-btn-secondary {
            background-color: var(--light);
            color: var(--text);
            border: 1px solid var(--border);
        }
        
        .custom-btn-secondary:hover {
            background-color: var(--border);
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text);
            font-size: 0.875rem;
        }
        
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            border: 1px solid var(--border);
            background-color: var(--card-bg);
            color: var(--text);
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }
        
        .form-error {
            color: var(--danger);
            font-size: 0.75rem;
            margin-top: 0.25rem;
        }
        
        .image-preview-container {
            width: 4rem;
            height: 4rem;
            border-radius: 8px;
            border: 1px dashed var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: var(--light);
        }
        
        .image-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .image-placeholder {
            color: var(--text-light);
            font-size: 1.5rem;
        }
        
        .flash-message {
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: 8px;
            font-size: 0.875rem;
        }
        
        .flash-success {
            background-color: rgba(76, 201, 240, 0.15);
            color: var(--success);
            border: 1px solid var(--success);
        }
        
        .flash-error {
            background-color: rgba(247, 37, 133, 0.15);
            color: var(--danger);
            border: 1px solid var(--danger);
        }
        
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr !important;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 196
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

        // line 197
        yield "<div class=\"w-full px-4 py-6 mx-auto max-w-7xl\">
    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "flashes", ["success"], "method", false, false, false, 198));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 199
            yield "        <div class=\"flash-message flash-success\">
            ";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "flashes", ["error"], "method", false, false, false, 203));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 204
            yield "        <div class=\"flash-message flash-error\">
            ";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        yield "
    <div class=\"custom-card\">
        <div class=\"custom-header flex flex-col md:flex-row justify-between items-start md:items-center\">
            <div class=\"mb-4 md:mb-0\">
                <h1 class=\"custom-title\">Ajouter un Abonnement</h1>
                <p class=\"custom-subtitle\">Remplissez le formulaire pour créer un nouvel abonnement</p>
            </div>
            <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_list");
        yield "\" class=\"custom-btn custom-btn-secondary\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\" class=\"mr-2\">
                    <path fill-rule=\"evenodd\" d=\"M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z\"/>
                </svg>
                Retour à la liste
            </a>
        </div>

        <div class=\"p-6\">
            ";
        // line 224
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "space-y-6"]]);
        yield "

            <div>
                ";
        // line 227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "type", [], "any", false, false, false, 227), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "type", [], "any", false, false, false, 228), 'widget', ["attr" => ["class" => "form-input", "onchange" => "updateSubscriptionDetails()"]]);
        // line 231
        yield "
                <div class=\"form-error\">";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "type", [], "any", false, false, false, 232), 'errors');
        yield "</div>
            </div>

            <div>
                ";
        // line 236
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "prix", [], "any", false, false, false, 236), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                <div class=\"relative\">
                    <span class=\"absolute left-3 top-3 text-slate-500 dark:text-slate-400\"></span>
                    ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "prix", [], "any", false, false, false, 239), 'widget', ["attr" => ["class" => "form-input pl-10", "readonly" => "readonly", "id" => "abonnement_prix"]]);
        // line 243
        yield "
                </div>
                <div class=\"form-error\">";
        // line 245
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "prix", [], "any", false, false, false, 245), 'errors');
        yield "</div>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 form-grid\">
                <div>
                    ";
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "date_debut", [], "any", false, false, false, 250), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "date_debut", [], "any", false, false, false, 251), 'widget', ["attr" => ["class" => "form-input", "onchange" => "updateSubscriptionDetails()"]]);
        // line 254
        yield "
                    <div class=\"form-error\">";
        // line 255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "date_debut", [], "any", false, false, false, 255), 'errors');
        yield "</div>
                </div>
                <div>
                    ";
        // line 258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "date_fin", [], "any", false, false, false, 258), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    ";
        // line 259
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "date_fin", [], "any", false, false, false, 259), 'widget', ["attr" => ["class" => "form-input", "id" => "abonnement_date_fin", "readonly" => true]]);
        // line 263
        yield "
                    <div class=\"form-error\">";
        // line 264
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "date_fin", [], "any", false, false, false, 264), 'errors');
        yield "</div>
                </div>
            </div>

            <div>
                ";
        // line 269
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "imageFile", [], "any", false, false, false, 269), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                <div class=\"flex items-center space-x-4\">
                    <div class=\"image-preview-container\">
                        <div id=\"preview-image\" class=\"image-placeholder\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z\"/>
                                <path d=\"M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"flex-1\">
                        ";
        // line 280
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "imageFile", [], "any", false, false, false, 280), 'widget', ["attr" => ["class" => "form-input", "onchange" => "previewImage(this)"]]);
        // line 283
        yield "
                        <p class=\"text-xs text-slate-500 dark:text-slate-400 mt-1\">PNG, JPG ou JPEG (Max. 2MB)</p>
                    </div>
                </div>
                <div class=\"form-error\">";
        // line 287
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "imageFile", [], "any", false, false, false, 287), 'errors');
        yield "</div>
            </div>

            <div class=\"pt-4 text-right\">
                <button type=\"submit\" class=\"custom-btn custom-btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\" class=\"mr-2\">
                        <path d=\"M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z\"/>
                    </svg>
                    Enregistrer
                </button>
            </div>

            ";
        // line 299
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 305
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

        // line 306
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        const PRICES = {
            'mensuel': 50,
            'trimestriel': 140,
            'annuel': 200
        };

        function updateSubscriptionDetails() {
            const typeSelect = document.querySelector('#";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 315, $this->source); })()), "type", [], "any", false, false, false, 315), "vars", [], "any", false, false, false, 315), "id", [], "any", false, false, false, 315), "html", null, true);
        yield "');
            const priceInput = document.getElementById('abonnement_prix');
            const dateDebutInput = document.querySelector('#";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "date_debut", [], "any", false, false, false, 317), "vars", [], "any", false, false, false, 317), "id", [], "any", false, false, false, 317), "html", null, true);
        yield "');
            const dateFinInput = document.getElementById('abonnement_date_fin');
            
            // Update price
            if (typeSelect && priceInput) {
                priceInput.value = PRICES[typeSelect.value] || 0;
            }
            
            // Update end date
            if (typeSelect && dateDebutInput && dateFinInput && dateDebutInput.value) {
                const dateDebut = new Date(dateDebutInput.value);
                let dateFin = new Date(dateDebut);
                
                switch (typeSelect.value) {
                    case 'mensuel':
                        dateFin.setMonth(dateFin.getMonth() + 1);
                        break;
                    case 'trimestriel':
                        dateFin.setMonth(dateFin.getMonth() + 3);
                        break;
                    case 'annuel':
                        dateFin.setFullYear(dateFin.getFullYear() + 1);
                        break;
                }
                
                dateFinInput.value = dateFin.toISOString().split('T')[0];
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const typeSelect = document.querySelector('#";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()), "type", [], "any", false, false, false, 347), "vars", [], "any", false, false, false, 347), "id", [], "any", false, false, false, 347), "html", null, true);
        yield "');
            const dateDebutInput = document.querySelector('#";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), "date_debut", [], "any", false, false, false, 348), "vars", [], "any", false, false, false, 348), "id", [], "any", false, false, false, 348), "html", null, true);
        yield "');
            
            if (typeSelect) {
                typeSelect.addEventListener('change', updateSubscriptionDetails);
                updateSubscriptionDetails();
            }
            
            if (dateDebutInput) {
                dateDebutInput.addEventListener('change', updateSubscriptionDetails);
            }
        });

        function previewImage(input) {
            const preview = document.getElementById('preview-image');
            const file = input.files[0];
            const reader = new FileReader();

            if (file) {
                reader.onloadend = function() {
                    if (preview.tagName === 'DIV') {
                        const img = document.createElement('img');
                        img.id = 'preview-image';
                        img.className = 'image-preview';
                        img.src = reader.result;
                        preview.parentNode.replaceChild(img, preview);
                    } else {
                        preview.src = reader.result;
                    }
                }
                reader.readAsDataURL(file);
            }
        }
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
        return "abonnement/add.html.twig";
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
        return array (  568 => 348,  564 => 347,  531 => 317,  526 => 315,  513 => 306,  500 => 305,  484 => 299,  469 => 287,  463 => 283,  461 => 280,  447 => 269,  439 => 264,  436 => 263,  434 => 259,  430 => 258,  424 => 255,  421 => 254,  419 => 251,  415 => 250,  407 => 245,  403 => 243,  401 => 239,  395 => 236,  388 => 232,  385 => 231,  383 => 228,  379 => 227,  373 => 224,  361 => 215,  352 => 208,  343 => 205,  340 => 204,  335 => 203,  326 => 200,  323 => 199,  319 => 198,  316 => 197,  303 => 196,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un Abonnement{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --primary-light: #4895ef;
            --secondary: #7209b7;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #f8f9fa;
            --dark: #212529;
            --text: #2b2d42;
            --text-light: #8d99ae;
            --bg: #f8f9fa;
            --card-bg: #ffffff;
            --border: #dee2e6;
        }
        
        .dark {
            --primary: #4895ef;
            --primary-dark: #3a0ca3;
            --primary-light: #4cc9f0;
            --secondary: #b5179e;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #343a40;
            --dark: #f8f9fa;
            --text: #f8f9fa;
            --text-light: #adb5bd;
            --bg: #212529;
            --card-bg: #2b2d42;
            --border: #495057;
        }
        
        body {
            background-color: var(--bg);
            color: var(--text);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .custom-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .dark .custom-card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        
        .custom-header {
            border-bottom: 1px solid var(--border);
            padding: 1.5rem;
        }
        
        .custom-title {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 0.25rem;
        }
        
        .custom-subtitle {
            color: var(--text-light);
            font-size: 0.875rem;
        }
        
        .custom-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            font-size: 0.875rem;
            border: none;
            cursor: pointer;
        }
        
        .custom-btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.25);
        }
        
        .custom-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(67, 97, 238, 0.35);
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
        }
        
        .custom-btn-secondary {
            background-color: var(--light);
            color: var(--text);
            border: 1px solid var(--border);
        }
        
        .custom-btn-secondary:hover {
            background-color: var(--border);
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text);
            font-size: 0.875rem;
        }
        
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            border: 1px solid var(--border);
            background-color: var(--card-bg);
            color: var(--text);
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }
        
        .form-error {
            color: var(--danger);
            font-size: 0.75rem;
            margin-top: 0.25rem;
        }
        
        .image-preview-container {
            width: 4rem;
            height: 4rem;
            border-radius: 8px;
            border: 1px dashed var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: var(--light);
        }
        
        .image-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .image-placeholder {
            color: var(--text-light);
            font-size: 1.5rem;
        }
        
        .flash-message {
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: 8px;
            font-size: 0.875rem;
        }
        
        .flash-success {
            background-color: rgba(76, 201, 240, 0.15);
            color: var(--success);
            border: 1px solid var(--success);
        }
        
        .flash-error {
            background-color: rgba(247, 37, 133, 0.15);
            color: var(--danger);
            border: 1px solid var(--danger);
        }
        
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr !important;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"w-full px-4 py-6 mx-auto max-w-7xl\">
    {% for message in app.flashes('success') %}
        <div class=\"flash-message flash-success\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"flash-message flash-error\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"custom-card\">
        <div class=\"custom-header flex flex-col md:flex-row justify-between items-start md:items-center\">
            <div class=\"mb-4 md:mb-0\">
                <h1 class=\"custom-title\">Ajouter un Abonnement</h1>
                <p class=\"custom-subtitle\">Remplissez le formulaire pour créer un nouvel abonnement</p>
            </div>
            <a href=\"{{ path('abonnement_list') }}\" class=\"custom-btn custom-btn-secondary\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\" class=\"mr-2\">
                    <path fill-rule=\"evenodd\" d=\"M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z\"/>
                </svg>
                Retour à la liste
            </a>
        </div>

        <div class=\"p-6\">
            {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'space-y-6'}}) }}

            <div>
                {{ form_label(form.type, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.type, {'attr': {
                    'class': 'form-input',
                    'onchange': 'updateSubscriptionDetails()'
                }}) }}
                <div class=\"form-error\">{{ form_errors(form.type) }}</div>
            </div>

            <div>
                {{ form_label(form.prix, null, {'label_attr': {'class': 'form-label'}}) }}
                <div class=\"relative\">
                    <span class=\"absolute left-3 top-3 text-slate-500 dark:text-slate-400\"></span>
                    {{ form_widget(form.prix, {'attr': {
                        'class': 'form-input pl-10',
                        'readonly': 'readonly',
                        'id': 'abonnement_prix'
                    }}) }}
                </div>
                <div class=\"form-error\">{{ form_errors(form.prix) }}</div>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 form-grid\">
                <div>
                    {{ form_label(form.date_debut, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.date_debut, {'attr': {
                        'class': 'form-input',
                        'onchange': 'updateSubscriptionDetails()'
                    }}) }}
                    <div class=\"form-error\">{{ form_errors(form.date_debut) }}</div>
                </div>
                <div>
                    {{ form_label(form.date_fin, null, {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.date_fin, {'attr': {
                        'class': 'form-input',
                        'id': 'abonnement_date_fin',
                        'readonly': true
                    }}) }}
                    <div class=\"form-error\">{{ form_errors(form.date_fin) }}</div>
                </div>
            </div>

            <div>
                {{ form_label(form.imageFile, null, {'label_attr': {'class': 'form-label'}}) }}
                <div class=\"flex items-center space-x-4\">
                    <div class=\"image-preview-container\">
                        <div id=\"preview-image\" class=\"image-placeholder\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z\"/>
                                <path d=\"M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"flex-1\">
                        {{ form_widget(form.imageFile, {'attr': {
                            'class': 'form-input',
                            'onchange': 'previewImage(this)'
                        }}) }}
                        <p class=\"text-xs text-slate-500 dark:text-slate-400 mt-1\">PNG, JPG ou JPEG (Max. 2MB)</p>
                    </div>
                </div>
                <div class=\"form-error\">{{ form_errors(form.imageFile) }}</div>
            </div>

            <div class=\"pt-4 text-right\">
                <button type=\"submit\" class=\"custom-btn custom-btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\" class=\"mr-2\">
                        <path d=\"M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z\"/>
                    </svg>
                    Enregistrer
                </button>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        const PRICES = {
            'mensuel': 50,
            'trimestriel': 140,
            'annuel': 200
        };

        function updateSubscriptionDetails() {
            const typeSelect = document.querySelector('#{{ form.type.vars.id }}');
            const priceInput = document.getElementById('abonnement_prix');
            const dateDebutInput = document.querySelector('#{{ form.date_debut.vars.id }}');
            const dateFinInput = document.getElementById('abonnement_date_fin');
            
            // Update price
            if (typeSelect && priceInput) {
                priceInput.value = PRICES[typeSelect.value] || 0;
            }
            
            // Update end date
            if (typeSelect && dateDebutInput && dateFinInput && dateDebutInput.value) {
                const dateDebut = new Date(dateDebutInput.value);
                let dateFin = new Date(dateDebut);
                
                switch (typeSelect.value) {
                    case 'mensuel':
                        dateFin.setMonth(dateFin.getMonth() + 1);
                        break;
                    case 'trimestriel':
                        dateFin.setMonth(dateFin.getMonth() + 3);
                        break;
                    case 'annuel':
                        dateFin.setFullYear(dateFin.getFullYear() + 1);
                        break;
                }
                
                dateFinInput.value = dateFin.toISOString().split('T')[0];
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const typeSelect = document.querySelector('#{{ form.type.vars.id }}');
            const dateDebutInput = document.querySelector('#{{ form.date_debut.vars.id }}');
            
            if (typeSelect) {
                typeSelect.addEventListener('change', updateSubscriptionDetails);
                updateSubscriptionDetails();
            }
            
            if (dateDebutInput) {
                dateDebutInput.addEventListener('change', updateSubscriptionDetails);
            }
        });

        function previewImage(input) {
            const preview = document.getElementById('preview-image');
            const file = input.files[0];
            const reader = new FileReader();

            if (file) {
                reader.onloadend = function() {
                    if (preview.tagName === 'DIV') {
                        const img = document.createElement('img');
                        img.id = 'preview-image';
                        img.className = 'image-preview';
                        img.src = reader.result;
                        preview.parentNode.replaceChild(img, preview);
                    } else {
                        preview.src = reader.result;
                    }
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
{% endblock %}", "abonnement/add.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal - Copie (2)\\templates\\abonnement\\add.html.twig");
    }
}
