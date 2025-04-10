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

/* admin/users/manage.html.twig */
class __TwigTemplate_fad0f70ee75e6ea88df1a42ede670595 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/manage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/manage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/manage.html.twig", 2);
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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 4, $this->source); })()) == "manage")) ? ("User Management") : ("User Profiles"));
        
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
    <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <style>
        .user-badge {
            transition: all 0.2s ease;
        }
        .user-badge:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .action-btn {
            transition: all 0.2s ease;
        }
        .action-btn:hover {
            transform: translateY(-1px);
        }
        .table-row-hover:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
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

        // line 34
        yield "    <div class=\"relative flex flex-col min-h-screen bg-gray-50\">
        <!-- Main Content -->
        <main class=\"relative h-full transition-all duration-200 ease-in-out\">
            <!-- Navbar -->
            <nav class=\"relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start\">
                <div class=\"flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit\">
                    <nav>
                        <ol class=\"flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16\">
                            <li class=\"text-sm leading-normal\">
                                <a class=\"text-slate-500\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">Admin</a>
                            </li>
                            <li class=\"text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-slate-500 before:content-['/']\">
                                ";
        // line 46
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 46, $this->source); })()) == "manage")) ? ("User Management") : ("User Profiles"));
        yield "
                            </li>
                        </ol>
                        <h4 class=\"mb-0 font-bold text-slate-700 capitalize\">
                            ";
        // line 50
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 50, $this->source); })()) == "manage")) ? ("User Management") : ("User Profiles"));
        yield "
                        </h4>
                    </nav>
                </div>
            </nav>

            <div class=\"w-full px-6 py-6 mx-auto\">
                <!-- Search Form -->
                <div class=\"mb-6\">
                    ";
        // line 59
        yield from $this->loadTemplate("admin/users/_search_form.html.twig", "admin/users/manage.html.twig", 59)->unwrap()->yield($context);
        // line 60
        yield "                </div>

                <!-- Users Table -->
                <div class=\"relative flex flex-col min-w-0 break-words bg-yellow border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border\">
                    <div class=\"p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl\">
                        <h6 class=\"mb-0 dark:text-yellow\">Users List</h6>
                    </div>
                    <div class=\"flex-auto p-4\">
                        <div class=\"overflow-x-auto\">
                            <table class=\"items-center w-full mb-0 align-top border-collapse dark:border-yellow/40 text-slate-500\">
                                <thead class=\"align-bottom\">
                                <tr>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">ID</th>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">Name</th>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">Email</th>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">Role</th>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">Status</th>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 81, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 82
            yield "                                    <tr class=\"table-row-hover\">
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                            <span class=\"text-xs font-semibold leading-tight dark:text-yellow\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 84), "html", null, true);
            yield "</span>
                                        </td>
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                            <span class=\"text-xs font-semibold leading-tight dark:text-yellow\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 87), "html", null, true);
            yield "</span>
                                        </td>
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                            <span class=\"text-xs font-semibold leading-tight dark:text-yellow\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 90), "html", null, true);
            yield "</span>
                                        </td>
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                                <span class=\"user-badge px-2.5 py-1.5 text-xs rounded-lg ";
            // line 93
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 93) == "admin")) ? ("bg-gradient-to-tl from-red-600 to-orange-600") : ("bg-gradient-to-tl from-blue-600 to-cyan-400"));
            yield " text-yellow\">
                                                    ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 94)), "html", null, true);
            yield "
                                                </span>
                                        </td>
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                                <span class=\"user-badge px-2.5 py-1.5 text-xs rounded-lg ";
            // line 98
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "method", false, false, false, 98)) ? ("bg-gradient-to-tl from-red-600 to-pink-500") : ("bg-gradient-to-tl from-emerald-600 to-teal-400"));
            yield " text-yellow\">
                                                    ";
            // line 99
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "method", false, false, false, 99)) ? ("Blocked") : ("Active"));
            yield "
                                                </span>
                                        </td>
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                            ";
            // line 103
            if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 103, $this->source); })()) == "manage")) {
                // line 104
                yield "                                                <div class=\"flex space-x-2\">
                                                    ";
                // line 105
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "method", false, false, false, 105)) {
                    // line 106
                    yield "                                                        <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_block", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                    yield "\" method=\"post\">
                                                            <button class=\"action-btn px-3 py-1.5 text-xs rounded-lg bg-gradient-to-tl from-yellow-600 to-orange-400 text-yellow\"
                                                                    title=\"Block ";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 108), "html", null, true);
                    yield "\"
                                                                    onclick=\"return confirm('Are you sure you want to block ";
                    // line 109
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 109), "html", null, true);
                    yield "?')\">
                                                                <i class=\"fas fa-lock mr-1\"></i> Block
                                                            </button>
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 112
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("block" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 112))), "html", null, true);
                    yield "\">
                                                        </form>
                                                    ";
                } else {
                    // line 115
                    yield "                                                        <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_unblock", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 115)]), "html", null, true);
                    yield "\" method=\"post\">
                                                            <button class=\"action-btn px-3 py-1.5 text-xs rounded-lg bg-gradient-to-tl from-emerald-600 to-teal-400 text-yellow\"
                                                                    title=\"Unblock ";
                    // line 117
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 117), "html", null, true);
                    yield "\"
                                                                    onclick=\"return confirm('Are you sure you want to unblock ";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 118), "html", null, true);
                    yield "?')\">
                                                                <i class=\"fas fa-unlock mr-1\"></i> Unblock
                                                            </button>
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("unblock" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 121))), "html", null, true);
                    yield "\">
                                                        </form>
                                                    ";
                }
                // line 124
                yield "                                                </div>
                                            ";
            } else {
                // line 126
                yield "                                                <div class=\"flex space-x-2\">
                                                    ";
                // line 127
                if (!CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 127))) {
                    // line 128
                    yield "                                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 128)]), "html", null, true);
                    yield "\"
                                                           class=\"action-btn px-3 py-1.5 text-xs rounded-lg bg-gradient-to-tl from-blue-600 to-cyan-400 text-yellow\"
                                                           title=\"Edit ";
                    // line 130
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 130), "html", null, true);
                    yield "\">
                                                            <i class=\"fas fa-edit mr-1\"></i> Edit
                                                        </a>
                                                    ";
                }
                // line 134
                yield "                                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_confirm_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 134)]), "html", null, true);
                yield "\"
                                                       class=\"action-btn px-3 py-1.5 text-xs rounded-lg bg-gradient-to-tl from-red-600 to-pink-500 text-yellow\"
                                                       title=\"Delete ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 136), "html", null, true);
                yield "\">
                                                        <i class=\"fas fa-trash mr-1\"></i> Delete
                                                    </a>
                                                </div>
                                            ";
            }
            // line 141
            yield "                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 143
        if (!$context['_iterated']) {
            // line 144
            yield "                                    <tr>
                                        <td colspan=\"6\" class=\"p-8 text-center text-slate-500 dark:text-yellow/80\">
                                            No users found
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        yield "                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        ";
        // line 155
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 155, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 155) > 0)) {
            // line 156
            yield "                            <div class=\"flex justify-center mt-6\">
                                ";
            // line 157
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 157, $this->source); })()), null, [], ["align" => "center", "size" => "small", "rounded" => true, "style" => "tailwind"]);
            // line 162
            yield "
                            </div>
                        ";
        }
        // line 165
        yield "                    </div>
                </div>
            </div>
        </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 172
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

        // line 173
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js"), "html", null, true);
        yield "\"></script>
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
        return "admin/users/manage.html.twig";
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
        return array (  434 => 175,  430 => 174,  425 => 173,  412 => 172,  396 => 165,  391 => 162,  389 => 157,  386 => 156,  384 => 155,  377 => 150,  366 => 144,  364 => 143,  358 => 141,  350 => 136,  344 => 134,  337 => 130,  331 => 128,  329 => 127,  326 => 126,  322 => 124,  316 => 121,  310 => 118,  306 => 117,  300 => 115,  294 => 112,  288 => 109,  284 => 108,  278 => 106,  276 => 105,  273 => 104,  271 => 103,  264 => 99,  260 => 98,  253 => 94,  249 => 93,  243 => 90,  237 => 87,  231 => 84,  227 => 82,  222 => 81,  199 => 60,  197 => 59,  185 => 50,  178 => 46,  172 => 43,  161 => 34,  148 => 33,  117 => 12,  113 => 11,  109 => 10,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/users/manage.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ mode == 'manage' ? 'User Management' : 'User Profiles' }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link href=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/argon-dashboard-tailwind.css') }}\" rel=\"stylesheet\" />
    <style>
        .user-badge {
            transition: all 0.2s ease;
        }
        .user-badge:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .action-btn {
            transition: all 0.2s ease;
        }
        .action-btn:hover {
            transform: translateY(-1px);
        }
        .table-row-hover:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"relative flex flex-col min-h-screen bg-gray-50\">
        <!-- Main Content -->
        <main class=\"relative h-full transition-all duration-200 ease-in-out\">
            <!-- Navbar -->
            <nav class=\"relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start\">
                <div class=\"flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit\">
                    <nav>
                        <ol class=\"flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16\">
                            <li class=\"text-sm leading-normal\">
                                <a class=\"text-slate-500\" href=\"{{ path('admin_dashboard') }}\">Admin</a>
                            </li>
                            <li class=\"text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-slate-500 before:content-['/']\">
                                {{ mode == 'manage' ? 'User Management' : 'User Profiles' }}
                            </li>
                        </ol>
                        <h4 class=\"mb-0 font-bold text-slate-700 capitalize\">
                            {{ mode == 'manage' ? 'User Management' : 'User Profiles' }}
                        </h4>
                    </nav>
                </div>
            </nav>

            <div class=\"w-full px-6 py-6 mx-auto\">
                <!-- Search Form -->
                <div class=\"mb-6\">
                    {% include 'admin/users/_search_form.html.twig' %}
                </div>

                <!-- Users Table -->
                <div class=\"relative flex flex-col min-w-0 break-words bg-yellow border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border\">
                    <div class=\"p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl\">
                        <h6 class=\"mb-0 dark:text-yellow\">Users List</h6>
                    </div>
                    <div class=\"flex-auto p-4\">
                        <div class=\"overflow-x-auto\">
                            <table class=\"items-center w-full mb-0 align-top border-collapse dark:border-yellow/40 text-slate-500\">
                                <thead class=\"align-bottom\">
                                <tr>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">ID</th>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">Name</th>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">Email</th>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">Role</th>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">Status</th>
                                    <th class=\"px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-yellow/40 dark:text-yellow text-xxs border-b-solid tracking-none whitespace-nowrap\">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for user in users %}
                                    <tr class=\"table-row-hover\">
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                            <span class=\"text-xs font-semibold leading-tight dark:text-yellow\">{{ user.id }}</span>
                                        </td>
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                            <span class=\"text-xs font-semibold leading-tight dark:text-yellow\">{{ user.name }}</span>
                                        </td>
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                            <span class=\"text-xs font-semibold leading-tight dark:text-yellow\">{{ user.email }}</span>
                                        </td>
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                                <span class=\"user-badge px-2.5 py-1.5 text-xs rounded-lg {{ user.role == 'admin' ? 'bg-gradient-to-tl from-red-600 to-orange-600' : 'bg-gradient-to-tl from-blue-600 to-cyan-400' }} text-yellow\">
                                                    {{ user.role|capitalize }}
                                                </span>
                                        </td>
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                                <span class=\"user-badge px-2.5 py-1.5 text-xs rounded-lg {{ user.isBlocked() ? 'bg-gradient-to-tl from-red-600 to-pink-500' : 'bg-gradient-to-tl from-emerald-600 to-teal-400' }} text-yellow\">
                                                    {{ user.isBlocked() ? 'Blocked' : 'Active' }}
                                                </span>
                                        </td>
                                        <td class=\"p-2 align-middle bg-transparent border-b dark:border-yellow/40 whitespace-nowrap shadow-transparent\">
                                            {% if mode == 'manage' %}
                                                <div class=\"flex space-x-2\">
                                                    {% if not user.isBlocked() %}
                                                        <form action=\"{{ path('admin_user_block', {'id': user.id}) }}\" method=\"post\">
                                                            <button class=\"action-btn px-3 py-1.5 text-xs rounded-lg bg-gradient-to-tl from-yellow-600 to-orange-400 text-yellow\"
                                                                    title=\"Block {{ user.name }}\"
                                                                    onclick=\"return confirm('Are you sure you want to block {{ user.name }}?')\">
                                                                <i class=\"fas fa-lock mr-1\"></i> Block
                                                            </button>
                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('block' ~ user.id) }}\">
                                                        </form>
                                                    {% else %}
                                                        <form action=\"{{ path('admin_user_unblock', {'id': user.id}) }}\" method=\"post\">
                                                            <button class=\"action-btn px-3 py-1.5 text-xs rounded-lg bg-gradient-to-tl from-emerald-600 to-teal-400 text-yellow\"
                                                                    title=\"Unblock {{ user.name }}\"
                                                                    onclick=\"return confirm('Are you sure you want to unblock {{ user.name }}?')\">
                                                                <i class=\"fas fa-unlock mr-1\"></i> Unblock
                                                            </button>
                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('unblock' ~ user.id) }}\">
                                                        </form>
                                                    {% endif %}
                                                </div>
                                            {% else %}
                                                <div class=\"flex space-x-2\">
                                                    {% if 'ROLE_ADMIN' not in user.roles %}
                                                        <a href=\"{{ path('admin_user_edit', {'id': user.id}) }}\"
                                                           class=\"action-btn px-3 py-1.5 text-xs rounded-lg bg-gradient-to-tl from-blue-600 to-cyan-400 text-yellow\"
                                                           title=\"Edit {{ user.name }}\">
                                                            <i class=\"fas fa-edit mr-1\"></i> Edit
                                                        </a>
                                                    {% endif %}
                                                    <a href=\"{{ path('admin_user_confirm_delete', {'id': user.id}) }}\"
                                                       class=\"action-btn px-3 py-1.5 text-xs rounded-lg bg-gradient-to-tl from-red-600 to-pink-500 text-yellow\"
                                                       title=\"Delete {{ user.name }}\">
                                                        <i class=\"fas fa-trash mr-1\"></i> Delete
                                                    </a>
                                                </div>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"6\" class=\"p-8 text-center text-slate-500 dark:text-yellow/80\">
                                            No users found
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        {% if users.getTotalItemCount > 0 %}
                            <div class=\"flex justify-center mt-6\">
                                {{ knp_pagination_render(users, null, {}, {
                                    'align': 'center',
                                    'size': 'small',
                                    'rounded': true,
                                    'style': 'tailwind'
                                }) }}
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </main>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/argon-dashboard-tailwind.js') }}\"></script>
{% endblock %}", "admin/users/manage.html.twig", "C:\\Users\\skonb\\Desktop\\pi\\UrbanLink_Symfony_Fork-main\\templates\\admin\\users\\manage.html.twig");
    }
}
