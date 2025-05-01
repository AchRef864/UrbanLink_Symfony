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

/* admin/pdf.html.twig */
class __TwigTemplate_606806299ec96cebccbf2c03b1f745bb extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>UrbanLink - Users Report</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        .header { text-align: center; margin-bottom: 20px; }
        .title { font-size: 18px; font-weight: bold; margin-bottom: 10px; }
        .subtitle { font-size: 14px; margin-bottom: 20px; color: #555; }
        .logo { height: 60px; margin-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th { background-color: #f2f2f2; text-align: left; padding: 8px; border: 1px solid #ddd; }
        td { padding: 8px; border: 1px solid #ddd; }
        .status-active { color: green; }
        .status-blocked { color: red; }
        .footer { position: fixed; bottom: 0; left: 0; right: 0; text-align: center; font-size: 10px; padding: 10px; border-top: 1px solid #eee; }
    </style>
</head>
<body>
<div class=\"header\">
    <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png")), "html", null, true);
        yield "\" class=\"logo\" alt=\"UrbanLink Logo\">
    <div class=\"title\">Users Report</div>
    <div class=\"subtitle\">
        ";
        // line 25
        if (((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 25, $this->source); })()) != "all")) {
            yield "Role: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 25, $this->source); })())), "html", null, true);
        }
        // line 26
        yield "        ";
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 26, $this->source); })()) != "all")) {
            yield " | Status: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 26, $this->source); })())), "html", null, true);
        }
        // line 27
        yield "        | Generated on: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 27, $this->source); })()), "Y-m-d H:i"), "html", null, true);
        yield "
    </div>
</div>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Role</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            yield "        <tr>
            <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
            <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
            <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
            <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
            <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 49)), "html", null, true);
            yield "</td>
            <td class=\"status-";
            // line 50
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 50)) {
                yield "blocked";
            } else {
                yield "active";
            }
            yield "\">
                ";
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 51)) {
                yield "Blocked";
            } else {
                yield "Active";
            }
            // line 52
            yield "            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 54
        if (!$context['_iterated']) {
            // line 55
            yield "        <tr>
            <td colspan=\"6\" style=\"text-align: center;\">No users found with these filters</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "    </tbody>
</table>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/pdf.html.twig";
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
        return array (  167 => 59,  158 => 55,  156 => 54,  150 => 52,  144 => 51,  136 => 50,  132 => 49,  128 => 48,  124 => 47,  120 => 46,  116 => 45,  113 => 44,  108 => 43,  88 => 27,  82 => 26,  77 => 25,  71 => 22,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>UrbanLink - Users Report</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        .header { text-align: center; margin-bottom: 20px; }
        .title { font-size: 18px; font-weight: bold; margin-bottom: 10px; }
        .subtitle { font-size: 14px; margin-bottom: 20px; color: #555; }
        .logo { height: 60px; margin-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th { background-color: #f2f2f2; text-align: left; padding: 8px; border: 1px solid #ddd; }
        td { padding: 8px; border: 1px solid #ddd; }
        .status-active { color: green; }
        .status-blocked { color: red; }
        .footer { position: fixed; bottom: 0; left: 0; right: 0; text-align: center; font-size: 10px; padding: 10px; border-top: 1px solid #eee; }
    </style>
</head>
<body>
<div class=\"header\">
    <img src=\"{{ absolute_url(asset('assets/img/logo.png')) }}\" class=\"logo\" alt=\"UrbanLink Logo\">
    <div class=\"title\">Users Report</div>
    <div class=\"subtitle\">
        {% if role != 'all' %}Role: {{ role|capitalize }}{% endif %}
        {% if status != 'all' %} | Status: {{ status|capitalize }}{% endif %}
        | Generated on: {{ date|date('Y-m-d H:i') }}
    </div>
</div>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Role</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    {% for user in users %}
        <tr>
            <td>{{ user.id }}</td>
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.phone }}</td>
            <td>{{ user.role|capitalize }}</td>
            <td class=\"status-{% if user.isBlocked %}blocked{% else %}active{% endif %}\">
                {% if user.isBlocked %}Blocked{% else %}Active{% endif %}
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"6\" style=\"text-align: center;\">No users found with these filters</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
</body>
</html>", "admin/pdf.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\admin\\pdf.html.twig");
    }
}
