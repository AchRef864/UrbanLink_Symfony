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
class __TwigTemplate_aa2af78a742b969a40dfa89678a4d6d1 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        yield "    <div class=\"container mt-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <div>
                <h1 class=\"mb-0 text-dark fw-bold\"><i class=\"fas fa-users-cog me-2 text-primary\"></i>User Management</h1>
                <p class=\"text-muted mb-0\">Manage all system users and permissions</p>
            </div>
            <button class=\"btn btn-primary rounded-pill px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#addUserModal\">
                <i class=\"fas fa-user-plus me-2\"></i>Add User
            </button>
        </div>

        ";
        // line 18
        yield "        <div class=\"card mb-4 border-0 shadow-sm\">
            <div class=\"card-body p-4\">
                <div class=\"row g-4\">
                    ";
        // line 22
        yield "                    <div class=\"col-lg-5\">
                        <div class=\"search-box\">
                            <div class=\"form-floating\">
                                <input type=\"text\"
                                       name=\"search\"
                                       class=\"form-control search-input ps-5\"
                                       id=\"userSearch\"
                                       placeholder=\" \"
                                       value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", ["search"], "method", false, false, false, 30), "html", null, true);
        yield "\">
                                <label for=\"userSearch\" class=\"ps-5\">Search users...</label>
                                <i class=\"fas fa-search search-icon\"></i>
                                <button class=\"search-clear\" type=\"button\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    ";
        // line 41
        yield "                    <div class=\"col-lg-4\">
                        <div class=\"form-floating\">
                            <select name=\"role\" class=\"form-select\" id=\"roleFilter\">
                                <option value=\"\">All Roles</option>
                                <option value=\"admin\" ";
        // line 45
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "query", [], "any", false, false, false, 45), "get", ["role"], "method", false, false, false, 45) == "admin")) ? ("selected") : (""));
        yield ">Admin</option>
                                <option value=\"client\" ";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "query", [], "any", false, false, false, 46), "get", ["role"], "method", false, false, false, 46) == "client")) ? ("selected") : (""));
        yield ">Client</option>
                            </select>
                            <label for=\"roleFilter\">Filter by Role</label>
                        </div>
                    </div>

                    ";
        // line 53
        yield "                    <div class=\"col-lg-3\">
                        <div class=\"form-floating\">
                            <select name=\"status\" class=\"form-select\" id=\"statusFilter\">
                                <option value=\"\">All Statuses</option>
                                <option value=\"active\" ";
        // line 57
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "query", [], "any", false, false, false, 57), "get", ["status"], "method", false, false, false, 57) == "active")) ? ("selected") : (""));
        yield ">Active</option>
                                <option value=\"blocked\" ";
        // line 58
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "query", [], "any", false, false, false, 58), "get", ["status"], "method", false, false, false, 58) == "blocked")) ? ("selected") : (""));
        yield ">Blocked</option>
                            </select>
                            <label for=\"statusFilter\">Filter by Status</label>
                        </div>
                    </div>

                    ";
        // line 65
        yield "                    <div class=\"col-lg-6 d-flex gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary px-4 rounded-pill flex-grow-1\">
                            <i class=\"fas fa-filter me-2\"></i>Apply Filters
                        </button>
                        <button type=\"reset\" class=\"btn btn-outline-secondary px-4 rounded-pill\">
                            <i class=\"fas fa-undo me-2\"></i>Reset
                        </button>
                    </div>

                    ";
        // line 75
        yield "                    <div class=\"col-lg-6 text-end\">
                        <a href=\"#\" class=\"text-primary small\" data-bs-toggle=\"collapse\" data-bs-target=\"#advancedFilters\">
                            <i class=\"fas fa-sliders-h me-1\"></i> Advanced Filters
                        </a>
                    </div>

                    ";
        // line 82
        yield "                    <div class=\"col-12 collapse\" id=\"advancedFilters\">
                        <div class=\"card card-body bg-light border-0 p-4\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-4\">
                                    <div class=\"form-floating\">
                                        <input type=\"date\" class=\"form-control\" id=\"createdAfter\" name=\"created_after\">
                                        <label for=\"createdAfter\">Created After</label>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-floating\">
                                        <input type=\"date\" class=\"form-control\" id=\"createdBefore\" name=\"created_before\">
                                        <label for=\"createdBefore\">Created Before</label>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-floating\">
                                        <select class=\"form-select\" id=\"sortBy\" name=\"sort\">
                                            <option value=\"\">Default Sorting</option>
                                            <option value=\"name_asc\">Name (A-Z)</option>
                                            <option value=\"name_desc\">Name (Z-A)</option>
                                            <option value=\"newest\">Newest First</option>
                                            <option value=\"oldest\">Oldest First</option>
                                        </select>
                                        <label for=\"sortBy\">Sort By</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 117
        yield "        <div class=\"card border-0 shadow-sm\">
            <div class=\"card-header bg-white border-0 py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-list me-2 text-primary\"></i>Users</h5>
                    <div class=\"text-muted small\">
                        Showing <span class=\"fw-bold\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 122, $this->source); })())), "html", null, true);
        yield "</span> of <span class=\"fw-bold\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 122, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 122), "html", null, true);
        yield "</span> users
                    </div>
                </div>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead class=\"table-light\">
                        <tr>
                            <th class=\"ps-4 py-3 fw-semibold text-muted\">USER</th>
                            <th class=\"py-3 fw-semibold text-muted\">CONTACT</th>
                            <th class=\"py-3 fw-semibold text-muted\">ROLE</th>
                            <th class=\"py-3 fw-semibold text-muted\">STATUS</th>
                            <th class=\"pe-4 py-3 fw-semibold text-muted text-end\">ACTIONS</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 139, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 140
            yield "                            <tr class=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 140)) ? ("bg-light-danger") : (""));
            yield "\">
                                <td class=\"ps-4\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar avatar-md me-3 bg-primary bg-opacity-10 text-primary rounded-circle\">
                                            ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 144))), "html", null, true);
            yield "
                                        </div>
                                        <div>
                                            <div class=\"fw-semibold\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 147), "html", null, true);
            yield "</div>
                                            <div class=\"text-muted small\">ID: ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 148), "html", null, true);
            yield "</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"text-dark\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 153), "html", null, true);
            yield "</div>
                                    <div class=\"text-muted small\">";
            // line 154
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 154)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 154), "html", null, true)) : ("No phone"));
            yield "</div>
                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 157
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 157) == "admin")) ? ("bg-danger-soft text-danger") : ("bg-primary-soft text-primary"));
            yield " rounded-pill px-3 py-1\">
                                        <i class=\"fas ";
            // line 158
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 158) == "admin")) ? ("fa-shield-alt") : ("fa-user-tie"));
            yield " me-1\"></i>
                                        ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 159)), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 163
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 163)) ? ("bg-danger-soft text-danger") : ("bg-success-soft text-success"));
            yield " rounded-pill px-3 py-1\">
                                        <i class=\"fas ";
            // line 164
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 164)) ? ("fa-ban") : ("fa-check-circle"));
            yield " me-1\"></i>
                                        ";
            // line 165
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 165)) ? ("Blocked") : ("Active"));
            yield "
                                    </span>
                                </td>
                                <td class=\"pe-4 text-end\">
                                    <div class=\"d-flex justify-content-end gap-2\">
                                        ";
            // line 170
            if (!CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 170))) {
                // line 171
                yield "                                            ";
                // line 172
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 172)]), "html", null, true);
                yield "\"
                                               class=\"btn btn-sm btn-icon btn-outline-primary rounded-circle\"
                                               title=\"Edit\"
                                               data-bs-toggle=\"tooltip\">
                                                <i class=\"fas fa-pencil-alt\"></i>
                                            </a>

                                            ";
                // line 180
                yield "                                            <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 180)) ? ("admin_user_unblock") : ("admin_user_block")), ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 180)]), "html", null, true);
                yield "\"
                                                  method=\"post\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 182)) ? ("unblock") : ("block")) . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 182))), "html", null, true);
                yield "\">
                                                <button type=\"submit\"
                                                        class=\"btn btn-sm btn-icon ";
                // line 184
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 184)) ? ("btn-outline-success") : ("btn-outline-warning"));
                yield " rounded-circle\"
                                                        title=\"";
                // line 185
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 185)) ? ("Unblock") : ("Block"));
                yield "\"
                                                        data-bs-toggle=\"tooltip\">
                                                    <i class=\"";
                // line 187
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 187)) ? ("fas fa-unlock") : ("fas fa-lock"));
                yield "\"></i>
                                                </button>
                                            </form>
                                        ";
            }
            // line 191
            yield "
                                        ";
            // line 193
            yield "                                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_confirm_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 193)]), "html", null, true);
            yield "\"
                                           class=\"btn btn-sm btn-icon btn-outline-danger rounded-circle\"
                                           title=\"Delete\"
                                           data-bs-toggle=\"tooltip\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 202
        if (!$context['_iterated']) {
            // line 203
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-5\">
                                    <div class=\"py-4\">
                                        <i class=\"fas fa-user-slash text-muted fa-4x mb-3\"></i>
                                        <h4 class=\"text-muted\">No users found</h4>
                                        <p class=\"text-muted mb-4\">Try adjusting your search criteria or create a new user</p>
                                        <button class=\"btn btn-primary rounded-pill px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#addUserModal\">
                                            <i class=\"fas fa-user-plus me-2\"></i>Add User
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "                        </tbody>
                    </table>
                </div>
            </div>

            ";
        // line 222
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 222, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 222) > 0)) {
            // line 223
            yield "                <div class=\"card-footer bg-white border-top py-3\">
                    <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-center\">
                        <div class=\"text-muted small mb-2 mb-md-0\">
                            Showing ";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 226, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 226) * (CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 226, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 226) - 1)) + 1), "html", null, true);
            yield " to
                            ";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min((CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 227, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 227) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 227, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 227)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 227, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 227)), "html", null, true);
            yield "
                            of ";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 228, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 228), "html", null, true);
            yield " users
                        </div>
                        <div class=\"navigation\">
                            ";
            // line 231
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 231, $this->source); })()), null, [], ["align" => "center", "size" => "medium", "style" => "rounded"]);
            // line 235
            yield "
                        </div>
                    </div>
                </div>
            ";
        }
        // line 240
        yield "        </div>
    </div>

    ";
        // line 244
        yield "    <div class=\"modal fade\" id=\"addUserModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-primary text-yellow\">
                    <h5 class=\"modal-title\"><i class=\"fas fa-user-plus me-2\"></i>Add New User</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>User creation form would go here</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-outline-secondary rounded-pill px-4\" data-bs-toggle=\"modal\">Cancel</button>
                    <button type=\"button\" class=\"btn btn-primary rounded-pill px-4\">Create User</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 263
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

        // line 264
        yield "    <style>
        /* Search Box Styles */
        .search-box {
            position: relative;
        }
        .search-input {
            padding-left: 2.5rem;
            border-radius: 0.5rem;
            border: 1px solid #e0e0e0;
            transition: all 0.3s;
        }
        .search-input:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }
        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            z-index: 10;
        }
        .search-clear {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #6c757d;
            opacity: 0.5;
            transition: opacity 0.3s;
            z-index: 10;
        }
        .search-clear:hover {
            opacity: 1;
            color: #dc3545;
        }

        /* Avatar Styles */
        .avatar {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        /* Badge Styles */
        .badge {
            font-weight: 500;
            letter-spacing: 0.5px;
        }
        .bg-primary-soft {
            background-color: rgba(13, 110, 253, 0.1);
        }
        .bg-danger-soft {
            background-color: rgba(220, 53, 69, 0.1);
        }
        .bg-success-soft {
            background-color: rgba(25, 135, 84, 0.1);
        }

        /* Table Styles */
        .table-hover tbody tr:hover {
            background-color: rgba(13, 110, 253, 0.03) !important;
        }
        .bg-light-danger {
            background-color: rgba(220, 53, 69, 0.03);
        }

        /* Button Styles */
        .btn-icon {
            width: 2rem;
            height: 2rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        /* Form Floating Styles */
        .form-floating label {
            color: #6c757d;
        }
        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-select~label {
            transform: scale(0.85) translateY(-1.5rem) translateX(0.15rem);
            background: white;
            padding: 0 0.5rem;
            width: auto;
            height: auto;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 361
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

        // line 362
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Search clear button functionality
            document.querySelectorAll('.search-clear').forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.closest('.search-box').querySelector('input');
                    input.value = '';
                    input.focus();
                });
            });

            // Show/hide clear button based on input
            document.querySelectorAll('.search-input').forEach(input => {
                input.addEventListener('input', function() {
                    const clearBtn = this.closest('.search-box').querySelector('.search-clear');
                    clearBtn.style.display = this.value ? 'block' : 'none';
                });

                // Trigger input event to set initial state
                input.dispatchEvent(new Event('input'));
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
        return array (  620 => 362,  607 => 361,  501 => 264,  488 => 263,  460 => 244,  455 => 240,  448 => 235,  446 => 231,  440 => 228,  436 => 227,  432 => 226,  427 => 223,  424 => 222,  417 => 216,  399 => 203,  397 => 202,  382 => 193,  379 => 191,  372 => 187,  367 => 185,  363 => 184,  358 => 182,  352 => 180,  341 => 172,  339 => 171,  337 => 170,  329 => 165,  325 => 164,  321 => 163,  314 => 159,  310 => 158,  306 => 157,  300 => 154,  296 => 153,  288 => 148,  284 => 147,  278 => 144,  270 => 140,  265 => 139,  243 => 122,  236 => 117,  200 => 82,  192 => 75,  181 => 65,  172 => 58,  168 => 57,  162 => 53,  153 => 46,  149 => 45,  143 => 41,  130 => 30,  120 => 22,  115 => 18,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Management{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <div>
                <h1 class=\"mb-0 text-dark fw-bold\"><i class=\"fas fa-users-cog me-2 text-primary\"></i>User Management</h1>
                <p class=\"text-muted mb-0\">Manage all system users and permissions</p>
            </div>
            <button class=\"btn btn-primary rounded-pill px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#addUserModal\">
                <i class=\"fas fa-user-plus me-2\"></i>Add User
            </button>
        </div>

        {# Enhanced Search and Filter Section #}
        <div class=\"card mb-4 border-0 shadow-sm\">
            <div class=\"card-body p-4\">
                <div class=\"row g-4\">
                    {# Search Field #}
                    <div class=\"col-lg-5\">
                        <div class=\"search-box\">
                            <div class=\"form-floating\">
                                <input type=\"text\"
                                       name=\"search\"
                                       class=\"form-control search-input ps-5\"
                                       id=\"userSearch\"
                                       placeholder=\" \"
                                       value=\"{{ app.request.query.get('search') }}\">
                                <label for=\"userSearch\" class=\"ps-5\">Search users...</label>
                                <i class=\"fas fa-search search-icon\"></i>
                                <button class=\"search-clear\" type=\"button\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    {# Role Filter #}
                    <div class=\"col-lg-4\">
                        <div class=\"form-floating\">
                            <select name=\"role\" class=\"form-select\" id=\"roleFilter\">
                                <option value=\"\">All Roles</option>
                                <option value=\"admin\" {{ app.request.query.get('role') == 'admin' ? 'selected' }}>Admin</option>
                                <option value=\"client\" {{ app.request.query.get('role') == 'client' ? 'selected' }}>Client</option>
                            </select>
                            <label for=\"roleFilter\">Filter by Role</label>
                        </div>
                    </div>

                    {# Status Filter #}
                    <div class=\"col-lg-3\">
                        <div class=\"form-floating\">
                            <select name=\"status\" class=\"form-select\" id=\"statusFilter\">
                                <option value=\"\">All Statuses</option>
                                <option value=\"active\" {{ app.request.query.get('status') == 'active' ? 'selected' }}>Active</option>
                                <option value=\"blocked\" {{ app.request.query.get('status') == 'blocked' ? 'selected' }}>Blocked</option>
                            </select>
                            <label for=\"statusFilter\">Filter by Status</label>
                        </div>
                    </div>

                    {# Action Buttons #}
                    <div class=\"col-lg-6 d-flex gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary px-4 rounded-pill flex-grow-1\">
                            <i class=\"fas fa-filter me-2\"></i>Apply Filters
                        </button>
                        <button type=\"reset\" class=\"btn btn-outline-secondary px-4 rounded-pill\">
                            <i class=\"fas fa-undo me-2\"></i>Reset
                        </button>
                    </div>

                    {# Advanced Filters Toggle #}
                    <div class=\"col-lg-6 text-end\">
                        <a href=\"#\" class=\"text-primary small\" data-bs-toggle=\"collapse\" data-bs-target=\"#advancedFilters\">
                            <i class=\"fas fa-sliders-h me-1\"></i> Advanced Filters
                        </a>
                    </div>

                    {# Advanced Filters (Collapsed by default) #}
                    <div class=\"col-12 collapse\" id=\"advancedFilters\">
                        <div class=\"card card-body bg-light border-0 p-4\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-4\">
                                    <div class=\"form-floating\">
                                        <input type=\"date\" class=\"form-control\" id=\"createdAfter\" name=\"created_after\">
                                        <label for=\"createdAfter\">Created After</label>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-floating\">
                                        <input type=\"date\" class=\"form-control\" id=\"createdBefore\" name=\"created_before\">
                                        <label for=\"createdBefore\">Created Before</label>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-floating\">
                                        <select class=\"form-select\" id=\"sortBy\" name=\"sort\">
                                            <option value=\"\">Default Sorting</option>
                                            <option value=\"name_asc\">Name (A-Z)</option>
                                            <option value=\"name_desc\">Name (Z-A)</option>
                                            <option value=\"newest\">Newest First</option>
                                            <option value=\"oldest\">Oldest First</option>
                                        </select>
                                        <label for=\"sortBy\">Sort By</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {# Users Table #}
        <div class=\"card border-0 shadow-sm\">
            <div class=\"card-header bg-white border-0 py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0 fw-semibold\"><i class=\"fas fa-list me-2 text-primary\"></i>Users</h5>
                    <div class=\"text-muted small\">
                        Showing <span class=\"fw-bold\">{{ users|length }}</span> of <span class=\"fw-bold\">{{ users.getTotalItemCount }}</span> users
                    </div>
                </div>
            </div>
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead class=\"table-light\">
                        <tr>
                            <th class=\"ps-4 py-3 fw-semibold text-muted\">USER</th>
                            <th class=\"py-3 fw-semibold text-muted\">CONTACT</th>
                            <th class=\"py-3 fw-semibold text-muted\">ROLE</th>
                            <th class=\"py-3 fw-semibold text-muted\">STATUS</th>
                            <th class=\"pe-4 py-3 fw-semibold text-muted text-end\">ACTIONS</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for user in users %}
                            <tr class=\"{{ user.isBlocked ? 'bg-light-danger' : '' }}\">
                                <td class=\"ps-4\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar avatar-md me-3 bg-primary bg-opacity-10 text-primary rounded-circle\">
                                            {{ user.name|first|upper }}
                                        </div>
                                        <div>
                                            <div class=\"fw-semibold\">{{ user.name }}</div>
                                            <div class=\"text-muted small\">ID: {{ user.id }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"text-dark\">{{ user.email }}</div>
                                    <div class=\"text-muted small\">{{ user.phone ?: 'No phone' }}</div>
                                </td>
                                <td>
                                    <span class=\"badge {{ user.role == 'admin' ? 'bg-danger-soft text-danger' : 'bg-primary-soft text-primary' }} rounded-pill px-3 py-1\">
                                        <i class=\"fas {{ user.role == 'admin' ? 'fa-shield-alt' : 'fa-user-tie' }} me-1\"></i>
                                        {{ user.role|capitalize }}
                                    </span>
                                </td>
                                <td>
                                    <span class=\"badge {{ user.isBlocked ? 'bg-danger-soft text-danger' : 'bg-success-soft text-success' }} rounded-pill px-3 py-1\">
                                        <i class=\"fas {{ user.isBlocked ? 'fa-ban' : 'fa-check-circle' }} me-1\"></i>
                                        {{ user.isBlocked ? 'Blocked' : 'Active' }}
                                    </span>
                                </td>
                                <td class=\"pe-4 text-end\">
                                    <div class=\"d-flex justify-content-end gap-2\">
                                        {% if 'ROLE_ADMIN' not in user.roles %}
                                            {# Edit Button #}
                                            <a href=\"{{ path('admin_user_edit', {'id': user.id}) }}\"
                                               class=\"btn btn-sm btn-icon btn-outline-primary rounded-circle\"
                                               title=\"Edit\"
                                               data-bs-toggle=\"tooltip\">
                                                <i class=\"fas fa-pencil-alt\"></i>
                                            </a>

                                            {# Block/Unblock Button #}
                                            <form action=\"{{ path(user.isBlocked ? 'admin_user_unblock' : 'admin_user_block', {'id': user.id}) }}\"
                                                  method=\"post\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token((user.isBlocked ? 'unblock' : 'block') ~ user.id) }}\">
                                                <button type=\"submit\"
                                                        class=\"btn btn-sm btn-icon {{ user.isBlocked ? 'btn-outline-success' : 'btn-outline-warning' }} rounded-circle\"
                                                        title=\"{{ user.isBlocked ? 'Unblock' : 'Block' }}\"
                                                        data-bs-toggle=\"tooltip\">
                                                    <i class=\"{{ user.isBlocked ? 'fas fa-unlock' : 'fas fa-lock' }}\"></i>
                                                </button>
                                            </form>
                                        {% endif %}

                                        {# Delete Button #}
                                        <a href=\"{{ path('admin_user_confirm_delete', {'id': user.id}) }}\"
                                           class=\"btn btn-sm btn-icon btn-outline-danger rounded-circle\"
                                           title=\"Delete\"
                                           data-bs-toggle=\"tooltip\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-5\">
                                    <div class=\"py-4\">
                                        <i class=\"fas fa-user-slash text-muted fa-4x mb-3\"></i>
                                        <h4 class=\"text-muted\">No users found</h4>
                                        <p class=\"text-muted mb-4\">Try adjusting your search criteria or create a new user</p>
                                        <button class=\"btn btn-primary rounded-pill px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#addUserModal\">
                                            <i class=\"fas fa-user-plus me-2\"></i>Add User
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>

            {# Pagination #}
            {% if users.getTotalItemCount > 0 %}
                <div class=\"card-footer bg-white border-top py-3\">
                    <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-center\">
                        <div class=\"text-muted small mb-2 mb-md-0\">
                            Showing {{ users.getItemNumberPerPage * (users.getCurrentPageNumber - 1) + 1 }} to
                            {{ min(users.getItemNumberPerPage * users.getCurrentPageNumber, users.getTotalItemCount) }}
                            of {{ users.getTotalItemCount }} users
                        </div>
                        <div class=\"navigation\">
                            {{ knp_pagination_render(users, null, {}, {
                                'align': 'center',
                                'size': 'medium',
                                'style': 'rounded',
                            }) }}
                        </div>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>

    {# Add User Modal #}
    <div class=\"modal fade\" id=\"addUserModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-primary text-yellow\">
                    <h5 class=\"modal-title\"><i class=\"fas fa-user-plus me-2\"></i>Add New User</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>User creation form would go here</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-outline-secondary rounded-pill px-4\" data-bs-toggle=\"modal\">Cancel</button>
                    <button type=\"button\" class=\"btn btn-primary rounded-pill px-4\">Create User</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        /* Search Box Styles */
        .search-box {
            position: relative;
        }
        .search-input {
            padding-left: 2.5rem;
            border-radius: 0.5rem;
            border: 1px solid #e0e0e0;
            transition: all 0.3s;
        }
        .search-input:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }
        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            z-index: 10;
        }
        .search-clear {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #6c757d;
            opacity: 0.5;
            transition: opacity 0.3s;
            z-index: 10;
        }
        .search-clear:hover {
            opacity: 1;
            color: #dc3545;
        }

        /* Avatar Styles */
        .avatar {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        /* Badge Styles */
        .badge {
            font-weight: 500;
            letter-spacing: 0.5px;
        }
        .bg-primary-soft {
            background-color: rgba(13, 110, 253, 0.1);
        }
        .bg-danger-soft {
            background-color: rgba(220, 53, 69, 0.1);
        }
        .bg-success-soft {
            background-color: rgba(25, 135, 84, 0.1);
        }

        /* Table Styles */
        .table-hover tbody tr:hover {
            background-color: rgba(13, 110, 253, 0.03) !important;
        }
        .bg-light-danger {
            background-color: rgba(220, 53, 69, 0.03);
        }

        /* Button Styles */
        .btn-icon {
            width: 2rem;
            height: 2rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        /* Form Floating Styles */
        .form-floating label {
            color: #6c757d;
        }
        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-select~label {
            transform: scale(0.85) translateY(-1.5rem) translateX(0.15rem);
            background: white;
            padding: 0 0.5rem;
            width: auto;
            height: auto;
        }
    </style>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Search clear button functionality
            document.querySelectorAll('.search-clear').forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.closest('.search-box').querySelector('input');
                    input.value = '';
                    input.focus();
                });
            });

            // Show/hide clear button based on input
            document.querySelectorAll('.search-input').forEach(input => {
                input.addEventListener('input', function() {
                    const clearBtn = this.closest('.search-box').querySelector('.search-clear');
                    clearBtn.style.display = this.value ? 'block' : 'none';
                });

                // Trigger input event to set initial state
                input.dispatchEvent(new Event('input'));
            });
        });
    </script>
{% endblock %}", "profile/delete.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\profile\\delete.html.twig");
    }
}
