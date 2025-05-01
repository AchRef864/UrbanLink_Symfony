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

/* admin/pdf_footer.html.twig */
class __TwigTemplate_7a8840471d7828cc76a43a890f9229b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf_footer.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <style>
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 10px;
            color: #666;
            width: 100%;
        }
        .footer-logo { height: 30px; }
        .page-info { text-align: center; }
    </style>
</head>
<body>
<div class=\"footer-content\">
    <div>
        <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png")), "html", null, true);
        yield "\" class=\"footer-logo\" alt=\"UrbanLink Logo\">
    </div>
    <div class=\"page-info\">
        Page <span class=\"pageNumber\"></span> of <span class=\"totalPages\"></span>
    </div>
    <div>
        <img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/esprit.png")), "html", null, true);
        yield "\" class=\"footer-logo\" alt=\"Esprit Logo\">
    </div>
</div>
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
        return "admin/pdf_footer.html.twig";
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
        return array (  78 => 26,  69 => 20,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <style>
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 10px;
            color: #666;
            width: 100%;
        }
        .footer-logo { height: 30px; }
        .page-info { text-align: center; }
    </style>
</head>
<body>
<div class=\"footer-content\">
    <div>
        <img src=\"{{ absolute_url(asset('assets/img/logo.png')) }}\" class=\"footer-logo\" alt=\"UrbanLink Logo\">
    </div>
    <div class=\"page-info\">
        Page <span class=\"pageNumber\"></span> of <span class=\"totalPages\"></span>
    </div>
    <div>
        <img src=\"{{ absolute_url(asset('assets/img/esprit.png')) }}\" class=\"footer-logo\" alt=\"Esprit Logo\">
    </div>
</div>
</body>
</html>", "admin/pdf_footer.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\admin\\pdf_footer.html.twig");
    }
}
