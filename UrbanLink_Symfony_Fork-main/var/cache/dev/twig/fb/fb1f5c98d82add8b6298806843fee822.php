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

/* auth/reset_password/verify_code.html.twig */
class __TwigTemplate_805ab3c7ef603ad6f4172f72206bf5ce extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset_password/verify_code.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset_password/verify_code.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/reset_password/verify_code.html.twig", 2);
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

        yield "Verify Reset Code";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <style>
        .auth-card {
            max-width: 480px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: white;
        }
        .auth-header {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 24px;
            text-align: center;
        }
        .auth-body {
            padding: 32px;
        }
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-align: center;
            font-size: 18px;
            letter-spacing: 4px;
        }
        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .btn-primary {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }
        .code-inputs {
            display: flex;
            justify-content: space-between;
            margin-bottom: 24px;
        }
        .code-input {
            width: 50px;
            height: 60px;
            text-align: center;
            font-size: 24px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .code-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "    <body class=\"font-sans antialiased bg-gray-50\">
    <div class=\"min-h-screen flex items-center justify-center p-4\">
        <div class=\"auth-card w-full\">
            <div class=\"auth-header\">
                <h1 class=\"text-2xl font-bold\">Verify Reset Code</h1>
                <p class=\"mt-2 opacity-90\">Enter the 6-digit code sent to your email</p>
            </div>

            <div class=\"auth-body\">
                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "flashes", ["error"], "method", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 85
            yield "                    <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4\" role=\"alert\">
                        <div class=\"flex items-center\">
                            <i class=\"fas fa-exclamation-circle mr-2\"></i>
                            <span>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</span>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "
                <form method=\"post\">
                    <div class=\"code-inputs\">
                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 96
            yield "                            <input type=\"text\" class=\"code-input\" name=\"code[]\" maxlength=\"1\"
                                   oninput=\"this.value=this.value.replace(/[^0-9]/g,''); if(this.value.length) nextElementSibling.focus()\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "                    </div>

                    <input type=\"hidden\" id=\"fullCode\" name=\"code\">

                    <button type=\"submit\" class=\"btn-primary w-full flex items-center justify-center\">
                        <i class=\"fas fa-check-circle mr-2\"></i>
                        Verify Code
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const codeInputs = document.querySelectorAll('.code-input');
            const fullCodeInput = document.getElementById('fullCode');

            codeInputs.forEach((input, index) => {
                // Focus first input on load
                if(index === 0) input.focus();

                // Handle paste event
                input.addEventListener('paste', (e) => {
                    e.preventDefault();
                    const pasteData = e.clipboardData.getData('text').trim();
                    if(pasteData.length === 6 && /^\\d+\$/.test(pasteData)) {
                        pasteData.split('').forEach((char, i) => {
                            if(codeInputs[i]) {
                                codeInputs[i].value = char;
                            }
                        });
                        codeInputs[5].focus();
                    }
                });

                // Handle backspace
                input.addEventListener('keydown', (e) => {
                    if(e.key === 'Backspace' && !input.value && index > 0) {
                        codeInputs[index-1].focus();
                    }
                });
            });

            // Update hidden input before form submission
            document.querySelector('form').addEventListener('submit', function() {
                let code = '';
                codeInputs.forEach(input => {
                    code += input.value;
                });
                fullCodeInput.value = code;
            });
        });
    </script>
    </body>
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
        return "auth/reset_password/verify_code.html.twig";
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
        return array (  239 => 99,  231 => 96,  227 => 95,  222 => 92,  212 => 88,  207 => 85,  203 => 84,  192 => 75,  179 => 74,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/auth/reset_password/verify_code.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Verify Reset Code{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <style>
        .auth-card {
            max-width: 480px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: white;
        }
        .auth-header {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 24px;
            text-align: center;
        }
        .auth-body {
            padding: 32px;
        }
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-align: center;
            font-size: 18px;
            letter-spacing: 4px;
        }
        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .btn-primary {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }
        .code-inputs {
            display: flex;
            justify-content: space-between;
            margin-bottom: 24px;
        }
        .code-input {
            width: 50px;
            height: 60px;
            text-align: center;
            font-size: 24px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .code-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
    </style>
{% endblock %}

{% block body %}
    <body class=\"font-sans antialiased bg-gray-50\">
    <div class=\"min-h-screen flex items-center justify-center p-4\">
        <div class=\"auth-card w-full\">
            <div class=\"auth-header\">
                <h1 class=\"text-2xl font-bold\">Verify Reset Code</h1>
                <p class=\"mt-2 opacity-90\">Enter the 6-digit code sent to your email</p>
            </div>

            <div class=\"auth-body\">
                {% for flash_error in app.flashes('error') %}
                    <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4\" role=\"alert\">
                        <div class=\"flex items-center\">
                            <i class=\"fas fa-exclamation-circle mr-2\"></i>
                            <span>{{ flash_error }}</span>
                        </div>
                    </div>
                {% endfor %}

                <form method=\"post\">
                    <div class=\"code-inputs\">
                        {% for i in 1..6 %}
                            <input type=\"text\" class=\"code-input\" name=\"code[]\" maxlength=\"1\"
                                   oninput=\"this.value=this.value.replace(/[^0-9]/g,''); if(this.value.length) nextElementSibling.focus()\">
                        {% endfor %}
                    </div>

                    <input type=\"hidden\" id=\"fullCode\" name=\"code\">

                    <button type=\"submit\" class=\"btn-primary w-full flex items-center justify-center\">
                        <i class=\"fas fa-check-circle mr-2\"></i>
                        Verify Code
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const codeInputs = document.querySelectorAll('.code-input');
            const fullCodeInput = document.getElementById('fullCode');

            codeInputs.forEach((input, index) => {
                // Focus first input on load
                if(index === 0) input.focus();

                // Handle paste event
                input.addEventListener('paste', (e) => {
                    e.preventDefault();
                    const pasteData = e.clipboardData.getData('text').trim();
                    if(pasteData.length === 6 && /^\\d+\$/.test(pasteData)) {
                        pasteData.split('').forEach((char, i) => {
                            if(codeInputs[i]) {
                                codeInputs[i].value = char;
                            }
                        });
                        codeInputs[5].focus();
                    }
                });

                // Handle backspace
                input.addEventListener('keydown', (e) => {
                    if(e.key === 'Backspace' && !input.value && index > 0) {
                        codeInputs[index-1].focus();
                    }
                });
            });

            // Update hidden input before form submission
            document.querySelector('form').addEventListener('submit', function() {
                let code = '';
                codeInputs.forEach(input => {
                    code += input.value;
                });
                fullCodeInput.value = code;
            });
        });
    </script>
    </body>
{% endblock %}", "auth/reset_password/verify_code.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\auth\\reset_password\\verify_code.html.twig");
    }
}
