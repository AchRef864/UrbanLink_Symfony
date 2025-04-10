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

/* profile/delete.html.twig */
class __TwigTemplate_75e5b10533a01e81afacedfa26d40470 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/delete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/delete.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/delete.html.twig", 1);
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

        yield "User Management";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">User Management</h1>

        ";
        // line 10
        yield "        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header bg-dark text-white\">
                <h5 class=\"mb-0\">Search & Filter</h5>
            </div>
            <div class=\"card-body\">
                <form method=\"get\" action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete");
        yield "\" class=\"row g-3\">
                    <div class=\"col-md-5\">
                        <input type=\"text\" name=\"search\" class=\"form-control\"
                               placeholder=\"Search by name or email\"
                               value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "query", [], "any", false, false, false, 19), "get", ["search"], "method", false, false, false, 19), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-4\">
                        <select name=\"role\" class=\"form-select\">
                            <option value=\"\">All Roles</option>
                            <option value=\"admin\" ";
        // line 24
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "query", [], "any", false, false, false, 24), "get", ["role"], "method", false, false, false, 24) == "admin")) ? ("selected") : (""));
        yield ">Admin</option>
                            <option value=\"client\" ";
        // line 25
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "get", ["role"], "method", false, false, false, 25) == "client")) ? ("selected") : (""));
        yield ">Client</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">
                            <i class=\"fas fa-search me-2\"></i>Search
                        </button>
                    </div>
                </form>
            </div>
        </div>

        ";
        // line 38
        yield "        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-dark text-white\">
                <h5 class=\"mb-0\">Users List</h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0\">
                        <thead class=\"table-light\">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 57, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 58
            yield "                            <tr>
                                <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                                <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                                <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>
                                <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
                                <td>
                                        <span class=\"badge ";
            // line 64
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 64) == "admin")) ? ("bg-danger") : ("bg-primary"));
            yield "\">
                                            ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 65)), "html", null, true);
            yield "
                                        </span>
                                </td>
                                <td>
                                        <span class=\"badge ";
            // line 69
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 69)) ? ("bg-danger") : ("bg-success"));
            yield "\">
                                            ";
            // line 70
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 70)) ? ("Blocked") : ("Active"));
            yield "
                                        </span>
                                </td>
                                <td>
                                    <div class=\"d-flex gap-2\">
                                        ";
            // line 75
            if (!CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 75))) {
                // line 76
                yield "                                            ";
                // line 77
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                yield "\"
                                               class=\"btn btn-sm btn-primary\"
                                               title=\"Edit user\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>

                                            ";
                // line 84
                yield "                                            <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 84)) ? ("admin_user_unblock") : ("admin_user_block")), ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                yield "\"
                                                  method=\"post\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 86)) ? ("unblock") : ("block")) . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 86))), "html", null, true);
                yield "\">
                                                <button type=\"submit\"
                                                        class=\"btn btn-sm ";
                // line 88
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 88)) ? ("btn-success") : ("btn-warning"));
                yield "\"
                                                        title=\"";
                // line 89
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 89)) ? ("Unblock user") : ("Block user"));
                yield "\">
                                                    <i class=\"";
                // line 90
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 90)) ? ("fas fa-unlock") : ("fas fa-lock"));
                yield "\"></i>
                                                </button>
                                            </form>
                                        ";
            }
            // line 94
            yield "
                                        ";
            // line 96
            yield "                                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_confirm_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\"
                                           class=\"btn btn-sm btn-danger\"
                                           title=\"Delete user\">
                                            <i class=\"fas fa-trash\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 104
        if (!$context['_iterated']) {
            // line 105
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4\">No users found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "                        </tbody>
                    </table>
                </div>
            </div>

            ";
        // line 115
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 115, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 115) > 0)) {
            // line 116
            yield "                <div class=\"card-footer bg-white\">
                    <div class=\"navigation\">
                        ";
            // line 118
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 118, $this->source); })()));
            yield "
                    </div>
                </div>
            ";
        }
        // line 122
        yield "        </div>
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
        return "profile/delete.html.twig";
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
        return array (  304 => 122,  297 => 118,  293 => 116,  290 => 115,  283 => 109,  274 => 105,  272 => 104,  258 => 96,  255 => 94,  248 => 90,  244 => 89,  240 => 88,  235 => 86,  229 => 84,  219 => 77,  217 => 76,  215 => 75,  207 => 70,  203 => 69,  196 => 65,  192 => 64,  187 => 62,  183 => 61,  179 => 60,  175 => 59,  172 => 58,  167 => 57,  146 => 38,  131 => 25,  127 => 24,  119 => 19,  112 => 15,  105 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Management{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">User Management</h1>

        {# Search and Filter Card #}
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header bg-dark text-white\">
                <h5 class=\"mb-0\">Search & Filter</h5>
            </div>
            <div class=\"card-body\">
                <form method=\"get\" action=\"{{ path('admin_user_delete') }}\" class=\"row g-3\">
                    <div class=\"col-md-5\">
                        <input type=\"text\" name=\"search\" class=\"form-control\"
                               placeholder=\"Search by name or email\"
                               value=\"{{ app.request.query.get('search') }}\">
                    </div>
                    <div class=\"col-md-4\">
                        <select name=\"role\" class=\"form-select\">
                            <option value=\"\">All Roles</option>
                            <option value=\"admin\" {{ app.request.query.get('role') == 'admin' ? 'selected' }}>Admin</option>
                            <option value=\"client\" {{ app.request.query.get('role') == 'client' ? 'selected' }}>Client</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">
                            <i class=\"fas fa-search me-2\"></i>Search
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {# Users Table Card #}
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-dark text-white\">
                <h5 class=\"mb-0\">Users List</h5>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-0\">
                        <thead class=\"table-light\">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for user in users %}
                            <tr>
                                <td>{{ user.id }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.phone }}</td>
                                <td>
                                        <span class=\"badge {{ user.role == 'admin' ? 'bg-danger' : 'bg-primary' }}\">
                                            {{ user.role|capitalize }}
                                        </span>
                                </td>
                                <td>
                                        <span class=\"badge {{ user.isBlocked ? 'bg-danger' : 'bg-success' }}\">
                                            {{ user.isBlocked ? 'Blocked' : 'Active' }}
                                        </span>
                                </td>
                                <td>
                                    <div class=\"d-flex gap-2\">
                                        {% if 'ROLE_ADMIN' not in user.roles %}
                                            {# Edit Button #}
                                            <a href=\"{{ path('admin_user_edit', {'id': user.id}) }}\"
                                               class=\"btn btn-sm btn-primary\"
                                               title=\"Edit user\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>

                                            {# Block/Unblock Button #}
                                            <form action=\"{{ path(user.isBlocked ? 'admin_user_unblock' : 'admin_user_block', {'id': user.id}) }}\"
                                                  method=\"post\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token((user.isBlocked ? 'unblock' : 'block') ~ user.id) }}\">
                                                <button type=\"submit\"
                                                        class=\"btn btn-sm {{ user.isBlocked ? 'btn-success' : 'btn-warning' }}\"
                                                        title=\"{{ user.isBlocked ? 'Unblock user' : 'Block user' }}\">
                                                    <i class=\"{{ user.isBlocked ? 'fas fa-unlock' : 'fas fa-lock' }}\"></i>
                                                </button>
                                            </form>
                                        {% endif %}

                                        {# Delete Button #}
                                        <a href=\"{{ path('admin_user_confirm_delete', {'id': user.id}) }}\"
                                           class=\"btn btn-sm btn-danger\"
                                           title=\"Delete user\">
                                            <i class=\"fas fa-trash\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4\">No users found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>

            {# Pagination #}
            {% if users.getTotalItemCount > 0 %}
                <div class=\"card-footer bg-white\">
                    <div class=\"navigation\">
                        {{ knp_pagination_render(users) }}
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "profile/delete.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\profile\\delete.html.twig");
    }
}
