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

/* emails/trajet_supprime.html.twig */
class __TwigTemplate_4c6ec40a47114909562e939101b2af58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/trajet_supprime.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/trajet_supprime.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Trajet Supprimé</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { 
            background-color: #D32F2F; 
            color: white; 
            padding: 25px; 
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content { 
            padding: 25px; 
            background-color: #f9f9f9;
            border-radius: 0 0 8px 8px;
            border: 1px solid #eee;
        }
        .alert-box {
            background-color: #FFEBEE;
            border-left: 4px solid #D32F2F;
            padding: 15px;
            margin-bottom: 20px;
        }
        .journey-details {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #6C5CE7;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div style=\"margin-left: 280px;\">

    <div class=\"container\">
        <div class=\"header\">
            <h1>Trajet Supprimé</h1>
            <p>Notification d'annulation</p>
        </div>
        
        <div class=\"content\">
            <div class=\"alert-box\">
                <h2 style=\"margin-top: 0; color: #D32F2F;\">Trajet supprimé définitivement</h2>
                <p>Le conducteur a supprimé ce trajet et il n'est plus disponible.</p>
            </div>
            
            <p>Bonjour ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), "html", null, true);
        yield ",</p>
            
            <p>Nous vous informons que le trajet suivant a été <strong>supprimé définitivement</strong> :</p>
            
            <div class=\"journey-details\">
                <h3 style=\"margin-top: 0; color: #6C5CE7;\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 66, $this->source); })()), "departure", [], "any", false, false, false, 66), "html", null, true);
        yield " → ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 66, $this->source); })()), "destination", [], "any", false, false, false, 66), "html", null, true);
        yield "</h3>
                <p><strong>Date de départ:</strong> ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 67, $this->source); })()), "departureTime", [], "any", false, false, false, 67), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                <p><strong>Raison:</strong> Suppression définitive par le conducteur</p>
            </div>
            
            <h3>Que faire maintenant ?</h3>
            <ul>
                <li>Si vous avez payé, un remboursement automatique sera initié</li>
                <li>Consultez notre plateforme pour trouver un trajet alternatif</li>
                <li>Contactez notre support si vous avez des questions</li>
            </ul>
            
            <div style=\"text-align: center; margin-top: 30px;\">
                <a href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage")), "html", null, true);
        yield "\" class=\"btn\">
                    Trouver un autre trajet
                </a>
            </div>
        </div>
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
        return "emails/trajet_supprime.html.twig";
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
        return array (  139 => 79,  124 => 67,  118 => 66,  110 => 61,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Trajet Supprimé</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { 
            background-color: #D32F2F; 
            color: white; 
            padding: 25px; 
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content { 
            padding: 25px; 
            background-color: #f9f9f9;
            border-radius: 0 0 8px 8px;
            border: 1px solid #eee;
        }
        .alert-box {
            background-color: #FFEBEE;
            border-left: 4px solid #D32F2F;
            padding: 15px;
            margin-bottom: 20px;
        }
        .journey-details {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #6C5CE7;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div style=\"margin-left: 280px;\">

    <div class=\"container\">
        <div class=\"header\">
            <h1>Trajet Supprimé</h1>
            <p>Notification d'annulation</p>
        </div>
        
        <div class=\"content\">
            <div class=\"alert-box\">
                <h2 style=\"margin-top: 0; color: #D32F2F;\">Trajet supprimé définitivement</h2>
                <p>Le conducteur a supprimé ce trajet et il n'est plus disponible.</p>
            </div>
            
            <p>Bonjour {{ user.name }},</p>
            
            <p>Nous vous informons que le trajet suivant a été <strong>supprimé définitivement</strong> :</p>
            
            <div class=\"journey-details\">
                <h3 style=\"margin-top: 0; color: #6C5CE7;\">{{ trajet.departure }} → {{ trajet.destination }}</h3>
                <p><strong>Date de départ:</strong> {{ trajet.departureTime|date('d/m/Y à H:i') }}</p>
                <p><strong>Raison:</strong> Suppression définitive par le conducteur</p>
            </div>
            
            <h3>Que faire maintenant ?</h3>
            <ul>
                <li>Si vous avez payé, un remboursement automatique sera initié</li>
                <li>Consultez notre plateforme pour trouver un trajet alternatif</li>
                <li>Contactez notre support si vous avez des questions</li>
            </ul>
            
            <div style=\"text-align: center; margin-top: 30px;\">
                <a href=\"{{ absolute_url(path('trajet_affichage')) }}\" class=\"btn\">
                    Trouver un autre trajet
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>", "emails/trajet_supprime.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\emails\\trajet_supprime.html.twig");
    }
}
