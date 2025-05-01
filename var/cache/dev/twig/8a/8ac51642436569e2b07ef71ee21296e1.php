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

/* profile/myprofile.html.twig */
class __TwigTemplate_2cf9bb409fc20b6c2c25f504ee66e4d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprofile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprofile.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "profile/myprofile.html.twig", 1);
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

        yield "Edit Profile - UrbanLink";
        
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
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\" />
    <style>
        .input-field {
            transition: all 0.3s ease;
            border: 1px solid #d1d5db;
        }
        .input-field:hover {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .input-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            outline: none;
        }
        .password-field {
            border: 1px solid #d1d5db;
            transition: all 0.3s ease;
        }
        .password-field:hover, .password-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
        .section-header {
            position: relative;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }
        .section-header:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 3rem;
            height: 3px;
            background: #3b82f6;
            border-radius: 3px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
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

        // line 49
        yield "    <div class=\"min-h-screen bg-gray-50\">
        <div class=\"bg-gradient-to-r from-blue-600 to-blue-500 shadow\">
            <div class=\"max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8\">
                <h1 class=\"text-3xl font-bold text-white\">
                    Edit Your Profile
                </h1>
            </div>
        </div>

        <main class=\"py-8\">
            <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
                <div class=\"bg-white shadow-xl rounded-lg overflow-hidden\">
                    <div class=\"divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x\">
                        <aside class=\"py-6 lg:col-span-3\">
                            <nav class=\"space-y-1\">
                                <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"border-l-4 border-blue-600 bg-blue-50 text-blue-700 group flex items-center px-3 py-2 text-sm font-medium\">
                                    <i class=\"fas fa-user-edit text-blue-500 group-hover:text-blue-600 flex-shrink-0 -ml-1 mr-3 h-6 w-6\"></i>
                                    <span class=\"truncate\">Edit Profile</span>
                                </a>
                            </nav>
                        </aside>

                        <div class=\"lg:col-span-9 p-8\">
                            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "flashes", ["success"], "method", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 73
            yield "                                <div class=\"rounded-md bg-green-50 p-4 mb-6\">
                                    <div class=\"flex\">
                                        <div class=\"flex-shrink-0\">
                                            <i class=\"fas fa-check-circle h-5 w-5 text-green-400\"></i>
                                        </div>
                                        <div class=\"ml-3\">
                                            <p class=\"text-sm font-medium text-green-800\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "</p>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "
                            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "flashes", ["error"], "method", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 86
            yield "                                <div class=\"rounded-md bg-red-50 p-4 mb-6\">
                                    <div class=\"flex\">
                                        <div class=\"flex-shrink-0\">
                                            <i class=\"fas fa-exclamation-circle h-5 w-5 text-red-400\"></i>
                                        </div>
                                        <div class=\"ml-3\">
                                            <p class=\"text-sm font-medium text-red-800\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "</p>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "
                            ";
        // line 98
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-8", "enctype" => "multipart/form-data"]]);
        yield "

                            <div class=\"space-y-6\">
                                <div>
                                    <h2 class=\"section-header text-2xl font-semibold leading-7 text-gray-900\">Personal Information</h2>
                                    <p class=\"mt-2 text-sm text-gray-600\">Update your personal details to keep your account information current.</p>
                                </div>

                                <div class=\"grid grid-cols-1 gap-y-6 gap-x-6 sm:grid-cols-6\">
                                    <div class=\"sm:col-span-3\">
                                        ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "name", [], "any", false, false, false, 108), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Full Name"]);
        yield "
                                        <div class=\"relative rounded-md shadow-sm\">
                                            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "name", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
        yield "
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "name", [], "any", false, false, false, 113), 'errors');
        yield "
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-4\">
                                        ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "email", [], "any", false, false, false, 118), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Email Address"]);
        yield "
                                        <div class=\"relative rounded-md shadow-sm\">
                                            ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "email", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
        yield "
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "email", [], "any", false, false, false, 123), 'errors');
        yield "
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-4\">
                                        <label for=\"phone\" class=\"block text-sm font-medium text-gray-700 mb-1\">Phone Number</label>
                                        <div class=\"flex rounded-md shadow-sm\">
                                            <select id=\"countryCode\" class=\"inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm\">
                                                <option value=\"+1\">US +1</option>
                                                <option value=\"+216\">TN +216</option>
                                                <option value=\"+33\">FR +33</option>
                                                <option value=\"+49\">DE +49</option>
                                                <option value=\"+44\">UK +44</option>
                                            </select>
                                            <div class=\"relative flex-grow\">
                                                ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "phone", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "input-field pl-3 block w-full min-w-0 flex-1 rounded-none rounded-r-md py-2 px-3 sm:text-sm", "id" => "phone"]]);
        yield "
                                            </div>
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "phone", [], "any", false, false, false, 142), 'errors');
        yield "
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-6\">
                                        ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "homeAddress", [], "any", false, false, false, 147), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Home Address"]);
        yield "
                                        <div class=\"relative rounded-md shadow-sm\">
                                            ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "homeAddress", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => "input-field block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
        yield "
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "homeAddress", [], "any", false, false, false, 152), 'errors');
        yield "
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-6\">
                                        ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "image", [], "any", false, false, false, 157), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Profile Image"]);
        yield "
                                        <div class=\"mt-1 relative rounded-md shadow-sm\">
                                            ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "image", [], "any", false, false, false, 159), 'widget', ["attr" => ["class" => "input-field block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
        yield "
                                        </div>
                                        <p class=\"mt-1 text-sm text-gray-500\">Upload a new profile picture (JPEG, PNG, GIF - max 2MB).</p>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "image", [], "any", false, false, false, 163), 'errors');
        yield "
                                        </div>
                                        ";
        // line 165
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "user", [], "any", false, false, false, 165), "image", [], "any", false, false, false, 165)) {
            // line 166
            yield "                                            <div class=\"mt-2\">
                                                <img src=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167), "image", [], "any", false, false, false, 167)), "html", null, true);
            yield "\" alt=\"Current Profile Picture\" class=\"rounded-full h-16 w-16 object-cover shadow-sm\">
                                                <p class=\"text-xs text-gray-500\">Current profile picture</p>
                                            </div>
                                        ";
        }
        // line 171
        yield "                                    </div>

                                    ";
        // line 173
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", true, true, false, 173)) {
            // line 174
            yield "                                        <div class=\"sm:col-span-6 pt-6 border-t border-gray-200\">
                                            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Password Update</h3>

                                            <div class=\"sm:col-span-4 mb-4\">
                                                ";
            // line 178
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "plainPassword", [], "any", false, false, false, 178), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "New Password"]);
            yield "
                                                <div class=\"relative rounded-md shadow-sm\">
                                                    <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                                                        <i class=\"fas fa-lock text-gray-400\"></i>
                                                    </div>
                                                    ";
            // line 183
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "plainPassword", [], "any", false, false, false, 183), 'widget', ["attr" => ["class" => "password-field pl-10 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
            yield "
                                                </div>
                                                <div class=\"mt-1 text-sm text-red-600\">
                                                    ";
            // line 186
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "plainPassword", [], "any", false, false, false, 186), 'errors');
            yield "
                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        // line 191
        yield "
                                </div>
                            </div>

                            ";
        // line 195
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "license", [], "any", true, true, false, 195)) {
            // line 196
            yield "                                <div class=\"pt-8 border-t border-gray-200\">
                                    <div>
                                        <h2 class=\"section-header text-xl font-semibold leading-6 text-gray-900\">License Information</h2>
                                        <p class=\"mt-2 text-sm text-gray-600\">Your driving license details for verification purposes.</p>
                                    </div>

                                    <div class=\"mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6\">
                                        <div class=\"sm:col-span-4\">
                                            ";
            // line 204
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "license", [], "any", false, false, false, 204), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "License Number"]);
            yield "
                                            <div class=\"relative rounded-md shadow-sm\">
                                                <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                                                    <i class=\"fas fa-id-card text-gray-400\"></i>
                                                </div>
                                                ";
            // line 209
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "license", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => "input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
            yield "
                                            </div>
                                            <div class=\"mt-1 text-sm text-red-600\">
                                                ";
            // line 212
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "license", [], "any", false, false, false, 212), 'errors');
            yield "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 218
        yield "
                            <div class=\"pt-8 border-t border-gray-200\">
                                <div class=\"flex justify-end\">
                                    <button type=\"submit\" class=\"inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 py-2 px-6 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200\">
                                        <i class=\"fas fa-save mr-2\"></i> Save Changes
                                    </button>
                                </div>
                            </div>
                            ";
        // line 226
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 235
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

        // line 236
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set the country code based on the current phone number
            const phoneInput = document.getElementById('phone');
            const countryCodeSelect = document.getElementById('countryCode');

            if (phoneInput.value) {
                // Extract country code from phone number
                const phoneValue = phoneInput.value;
                const plusIndex = phoneValue.indexOf('+');

                if (plusIndex !== -1) {
                    const spaceIndex = phoneValue.indexOf(' ');
                    const code = phoneValue.substring(plusIndex, spaceIndex !== -1 ? spaceIndex : undefined);

                    // Find matching option
                    for (let i = 0; i < countryCodeSelect.options.length; i++) {
                        if (countryCodeSelect.options[i].value === code) {
                            countryCodeSelect.selectedIndex = i;
                            break;
                        }
                    }

                    // Remove country code from display
                    if (spaceIndex !== -1) {
                        phoneInput.value = phoneValue.substring(spaceIndex + 1);
                    } else if (plusIndex === 0) {
                        phoneInput.value = '';
                    }
                }
            }

            // Update phone number with country code before form submission
            const form = document.querySelector('form');
            form.addEventListener('submit', function() {
                const selectedCode = countryCodeSelect.options[countryCodeSelect.selectedIndex].value;
                if (!phoneInput.value.startsWith(selectedCode)) {
                    phoneInput.value = selectedCode + ' ' + phoneInput.value;
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
        return "profile/myprofile.html.twig";
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
        return array (  489 => 236,  476 => 235,  457 => 226,  447 => 218,  438 => 212,  432 => 209,  424 => 204,  414 => 196,  412 => 195,  406 => 191,  398 => 186,  392 => 183,  384 => 178,  378 => 174,  376 => 173,  372 => 171,  365 => 167,  362 => 166,  360 => 165,  355 => 163,  348 => 159,  343 => 157,  335 => 152,  329 => 149,  324 => 147,  316 => 142,  309 => 138,  291 => 123,  285 => 120,  280 => 118,  272 => 113,  266 => 110,  261 => 108,  248 => 98,  245 => 97,  234 => 92,  226 => 86,  222 => 85,  219 => 84,  208 => 79,  200 => 73,  196 => 72,  185 => 64,  168 => 49,  155 => 48,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Edit Profile - UrbanLink{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\" />
    <style>
        .input-field {
            transition: all 0.3s ease;
            border: 1px solid #d1d5db;
        }
        .input-field:hover {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .input-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            outline: none;
        }
        .password-field {
            border: 1px solid #d1d5db;
            transition: all 0.3s ease;
        }
        .password-field:hover, .password-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
        .section-header {
            position: relative;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }
        .section-header:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 3rem;
            height: 3px;
            background: #3b82f6;
            border-radius: 3px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen bg-gray-50\">
        <div class=\"bg-gradient-to-r from-blue-600 to-blue-500 shadow\">
            <div class=\"max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8\">
                <h1 class=\"text-3xl font-bold text-white\">
                    Edit Your Profile
                </h1>
            </div>
        </div>

        <main class=\"py-8\">
            <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
                <div class=\"bg-white shadow-xl rounded-lg overflow-hidden\">
                    <div class=\"divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x\">
                        <aside class=\"py-6 lg:col-span-3\">
                            <nav class=\"space-y-1\">
                                <a href=\"{{ path('app_profile_edit') }}\" class=\"border-l-4 border-blue-600 bg-blue-50 text-blue-700 group flex items-center px-3 py-2 text-sm font-medium\">
                                    <i class=\"fas fa-user-edit text-blue-500 group-hover:text-blue-600 flex-shrink-0 -ml-1 mr-3 h-6 w-6\"></i>
                                    <span class=\"truncate\">Edit Profile</span>
                                </a>
                            </nav>
                        </aside>

                        <div class=\"lg:col-span-9 p-8\">
                            {% for flash in app.flashes('success') %}
                                <div class=\"rounded-md bg-green-50 p-4 mb-6\">
                                    <div class=\"flex\">
                                        <div class=\"flex-shrink-0\">
                                            <i class=\"fas fa-check-circle h-5 w-5 text-green-400\"></i>
                                        </div>
                                        <div class=\"ml-3\">
                                            <p class=\"text-sm font-medium text-green-800\">{{ flash }}</p>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}

                            {% for flash in app.flashes('error') %}
                                <div class=\"rounded-md bg-red-50 p-4 mb-6\">
                                    <div class=\"flex\">
                                        <div class=\"flex-shrink-0\">
                                            <i class=\"fas fa-exclamation-circle h-5 w-5 text-red-400\"></i>
                                        </div>
                                        <div class=\"ml-3\">
                                            <p class=\"text-sm font-medium text-red-800\">{{ flash }}</p>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}

                            {{ form_start(form, {'attr': {'class': 'space-y-8', 'enctype': 'multipart/form-data'}}) }}

                            <div class=\"space-y-6\">
                                <div>
                                    <h2 class=\"section-header text-2xl font-semibold leading-7 text-gray-900\">Personal Information</h2>
                                    <p class=\"mt-2 text-sm text-gray-600\">Update your personal details to keep your account information current.</p>
                                </div>

                                <div class=\"grid grid-cols-1 gap-y-6 gap-x-6 sm:grid-cols-6\">
                                    <div class=\"sm:col-span-3\">
                                        {{ form_label(form.name, 'Full Name', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                        <div class=\"relative rounded-md shadow-sm\">
                                            {{ form_widget(form.name, {'attr': {'class': 'input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            {{ form_errors(form.name) }}
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-4\">
                                        {{ form_label(form.email, 'Email Address', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                        <div class=\"relative rounded-md shadow-sm\">
                                            {{ form_widget(form.email, {'attr': {'class': 'input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            {{ form_errors(form.email) }}
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-4\">
                                        <label for=\"phone\" class=\"block text-sm font-medium text-gray-700 mb-1\">Phone Number</label>
                                        <div class=\"flex rounded-md shadow-sm\">
                                            <select id=\"countryCode\" class=\"inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm\">
                                                <option value=\"+1\">US +1</option>
                                                <option value=\"+216\">TN +216</option>
                                                <option value=\"+33\">FR +33</option>
                                                <option value=\"+49\">DE +49</option>
                                                <option value=\"+44\">UK +44</option>
                                            </select>
                                            <div class=\"relative flex-grow\">
                                                {{ form_widget(form.phone, {'attr': {'class': 'input-field pl-3 block w-full min-w-0 flex-1 rounded-none rounded-r-md py-2 px-3 sm:text-sm', 'id': 'phone'}}) }}
                                            </div>
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            {{ form_errors(form.phone) }}
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-6\">
                                        {{ form_label(form.homeAddress, 'Home Address', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                        <div class=\"relative rounded-md shadow-sm\">
                                            {{ form_widget(form.homeAddress, {'attr': {'class': 'input-field block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            {{ form_errors(form.homeAddress) }}
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-6\">
                                        {{ form_label(form.image, 'Profile Image', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                        <div class=\"mt-1 relative rounded-md shadow-sm\">
                                            {{ form_widget(form.image, {'attr': {'class': 'input-field block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                        </div>
                                        <p class=\"mt-1 text-sm text-gray-500\">Upload a new profile picture (JPEG, PNG, GIF - max 2MB).</p>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            {{ form_errors(form.image) }}
                                        </div>
                                        {% if app.user.image %}
                                            <div class=\"mt-2\">
                                                <img src=\"{{ asset(app.user.image) }}\" alt=\"Current Profile Picture\" class=\"rounded-full h-16 w-16 object-cover shadow-sm\">
                                                <p class=\"text-xs text-gray-500\">Current profile picture</p>
                                            </div>
                                        {% endif %}
                                    </div>

                                    {% if form.plainPassword is defined %}
                                        <div class=\"sm:col-span-6 pt-6 border-t border-gray-200\">
                                            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Password Update</h3>

                                            <div class=\"sm:col-span-4 mb-4\">
                                                {{ form_label(form.plainPassword, 'New Password', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                                <div class=\"relative rounded-md shadow-sm\">
                                                    <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                                                        <i class=\"fas fa-lock text-gray-400\"></i>
                                                    </div>
                                                    {{ form_widget(form.plainPassword, {'attr': {'class': 'password-field pl-10 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                                </div>
                                                <div class=\"mt-1 text-sm text-red-600\">
                                                    {{ form_errors(form.plainPassword) }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}

                                </div>
                            </div>

                            {% if form.license is defined %}
                                <div class=\"pt-8 border-t border-gray-200\">
                                    <div>
                                        <h2 class=\"section-header text-xl font-semibold leading-6 text-gray-900\">License Information</h2>
                                        <p class=\"mt-2 text-sm text-gray-600\">Your driving license details for verification purposes.</p>
                                    </div>

                                    <div class=\"mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6\">
                                        <div class=\"sm:col-span-4\">
                                            {{ form_label(form.license, 'License Number', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                            <div class=\"relative rounded-md shadow-sm\">
                                                <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                                                    <i class=\"fas fa-id-card text-gray-400\"></i>
                                                </div>
                                                {{ form_widget(form.license, {'attr': {'class': 'input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                            </div>
                                            <div class=\"mt-1 text-sm text-red-600\">
                                                {{ form_errors(form.license) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}

                            <div class=\"pt-8 border-t border-gray-200\">
                                <div class=\"flex justify-end\">
                                    <button type=\"submit\" class=\"inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 py-2 px-6 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200\">
                                        <i class=\"fas fa-save mr-2\"></i> Save Changes
                                    </button>
                                </div>
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set the country code based on the current phone number
            const phoneInput = document.getElementById('phone');
            const countryCodeSelect = document.getElementById('countryCode');

            if (phoneInput.value) {
                // Extract country code from phone number
                const phoneValue = phoneInput.value;
                const plusIndex = phoneValue.indexOf('+');

                if (plusIndex !== -1) {
                    const spaceIndex = phoneValue.indexOf(' ');
                    const code = phoneValue.substring(plusIndex, spaceIndex !== -1 ? spaceIndex : undefined);

                    // Find matching option
                    for (let i = 0; i < countryCodeSelect.options.length; i++) {
                        if (countryCodeSelect.options[i].value === code) {
                            countryCodeSelect.selectedIndex = i;
                            break;
                        }
                    }

                    // Remove country code from display
                    if (spaceIndex !== -1) {
                        phoneInput.value = phoneValue.substring(spaceIndex + 1);
                    } else if (plusIndex === 0) {
                        phoneInput.value = '';
                    }
                }
            }

            // Update phone number with country code before form submission
            const form = document.querySelector('form');
            form.addEventListener('submit', function() {
                const selectedCode = countryCodeSelect.options[countryCodeSelect.selectedIndex].value;
                if (!phoneInput.value.startsWith(selectedCode)) {
                    phoneInput.value = selectedCode + ' ' + phoneInput.value;
                }
            });
        });
    </script>
{% endblock %}", "profile/myprofile.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\profile\\myprofile.html.twig");
    }
}
