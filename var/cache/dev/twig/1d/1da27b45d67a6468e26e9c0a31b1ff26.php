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

/* reservation/pdf.html.twig */
class __TwigTemplate_867ba928521027441f37db2180b81313 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Détails de Réservation #";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 30px; position: relative; }
        .header h1 { color: #3498db; }
        .info-section { margin-bottom: 20px; }
        .info-section h2 { color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 5px; }
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .info-item { margin-bottom: 10px; }
        .info-label { font-weight: bold; color: #7f8c8d; }
        .status-badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-weight: bold;
            color: white;
        }
        .status-confirmed { background-color: #2ecc71; }
        .status-pending { background-color: #f39c12; }
        .status-canceled { background-color: #e74c3c; }
        .footer { 
            margin-top: 50px; 
            text-align: center; 
            font-size: 0.8em; 
            color: #7f8c8d;
        }
        .qr-container {
            position: absolute;
            top: 0;
            right: 0;
            text-align: center;
            border: 1px solid #eee;
            padding: 10px;
        }
        .qr-code {
            width: 100px;
            height: 100px;
        }
        .qr-label {
            font-size: 0.8em;
            margin-top: 5px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <div class=\"qr-container\">
            <img class=\"qr-code\" src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCodeImage"]) || array_key_exists("qrCodeImage", $context) ? $context["qrCodeImage"] : (function () { throw new RuntimeError('Variable "qrCodeImage" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "\" alt=\"QR Code de la réservation\">
            <div class=\"qr-label\">Scan this QR code</div>
        </div>
        <h1>Confirmation de Réservation</h1>
        <p>Référence: #";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
        yield "</p>
        <p>Date d'émission: ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</p>
    </div>

    <div class=\"info-section\">
        <h2>Informations Client</h2>
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <span class=\"info-label\">Nom:</span> ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
        yield "
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Email:</span> ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "email", [], "any", false, false, false, 68), "html", null, true);
        yield "
            </div>
        </div>
    </div>

    <div class=\"info-section\">
        <h2>Détails du Trajet</h2>
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <span class=\"info-label\">Départ:</span> ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 77, $this->source); })()), "trajet", [], "any", false, false, false, 77), "departure", [], "any", false, false, false, 77), "html", null, true);
        yield "
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Destination:</span> ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 80, $this->source); })()), "trajet", [], "any", false, false, false, 80), "destination", [], "any", false, false, false, 80), "html", null, true);
        yield "
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Date/Heure:</span> ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 83, $this->source); })()), "trajet", [], "any", false, false, false, 83), "departureTime", [], "any", false, false, false, 83), "d/m/Y H:i"), "html", null, true);
        yield "
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Durée:</span> ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 86, $this->source); })()), "trajet", [], "any", false, false, false, 86), "duration", [], "any", false, false, false, 86), "html", null, true);
        yield "
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Type de transport:</span> ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 89, $this->source); })()), "trajet", [], "any", false, false, false, 89), "typeTransport", [], "any", false, false, false, 89), "html", null, true);
        yield "
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Prix unitaire:</span> ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 92, $this->source); })()), "trajet", [], "any", false, false, false, 92), "price", [], "any", false, false, false, 92), "html", null, true);
        yield " DT
            </div>
        </div>
    </div>

    <div class=\"info-section\">
        <h2>Détails de Réservation</h2>
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <span class=\"info-label\">Date réservation:</span> ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 101, $this->source); })()), "reservationDate", [], "any", false, false, false, 101), "d/m/Y H:i"), "html", null, true);
        yield "
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Nombre de places:</span> ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 104, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 104), "html", null, true);
        yield "
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Prix total:</span> ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 107, $this->source); })()), "totalPrice", [], "any", false, false, false, 107), "html", null, true);
        yield " DT
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Statut:</span>
                <span class=\"status-badge status-";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 111, $this->source); })()), "status", [], "any", false, false, false, 111)), "html", null, true);
        yield "\">
                    ";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 112, $this->source); })()), "status", [], "any", false, false, false, 112), "html", null, true);
        yield "
                </span>
            </div>
        </div>
    </div>

    <div class=\"footer\">
        <p>Merci d'avoir choisi notre service de réservation</p>
        <p>Pour toute question, contactez-nous à Urbanlink@gmail.com</p>
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
        return "reservation/pdf.html.twig";
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
        return array (  209 => 112,  205 => 111,  198 => 107,  192 => 104,  186 => 101,  174 => 92,  168 => 89,  162 => 86,  156 => 83,  150 => 80,  144 => 77,  132 => 68,  126 => 65,  116 => 58,  112 => 57,  105 => 53,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Détails de Réservation #{{ reservation.id }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 30px; position: relative; }
        .header h1 { color: #3498db; }
        .info-section { margin-bottom: 20px; }
        .info-section h2 { color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 5px; }
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .info-item { margin-bottom: 10px; }
        .info-label { font-weight: bold; color: #7f8c8d; }
        .status-badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-weight: bold;
            color: white;
        }
        .status-confirmed { background-color: #2ecc71; }
        .status-pending { background-color: #f39c12; }
        .status-canceled { background-color: #e74c3c; }
        .footer { 
            margin-top: 50px; 
            text-align: center; 
            font-size: 0.8em; 
            color: #7f8c8d;
        }
        .qr-container {
            position: absolute;
            top: 0;
            right: 0;
            text-align: center;
            border: 1px solid #eee;
            padding: 10px;
        }
        .qr-code {
            width: 100px;
            height: 100px;
        }
        .qr-label {
            font-size: 0.8em;
            margin-top: 5px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <div class=\"qr-container\">
            <img class=\"qr-code\" src=\"{{ qrCodeImage }}\" alt=\"QR Code de la réservation\">
            <div class=\"qr-label\">Scan this QR code</div>
        </div>
        <h1>Confirmation de Réservation</h1>
        <p>Référence: #{{ reservation.id }}</p>
        <p>Date d'émission: {{ \"now\"|date('d/m/Y H:i') }}</p>
    </div>

    <div class=\"info-section\">
        <h2>Informations Client</h2>
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <span class=\"info-label\">Nom:</span> {{ reservation.user.name }}
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Email:</span> {{ reservation.user.email }}
            </div>
        </div>
    </div>

    <div class=\"info-section\">
        <h2>Détails du Trajet</h2>
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <span class=\"info-label\">Départ:</span> {{ reservation.trajet.departure }}
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Destination:</span> {{ reservation.trajet.destination }}
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Date/Heure:</span> {{ reservation.trajet.departureTime|date('d/m/Y H:i') }}
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Durée:</span> {{ reservation.trajet.duration }}
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Type de transport:</span> {{ reservation.trajet.typeTransport }}
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Prix unitaire:</span> {{ reservation.trajet.price }} DT
            </div>
        </div>
    </div>

    <div class=\"info-section\">
        <h2>Détails de Réservation</h2>
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <span class=\"info-label\">Date réservation:</span> {{ reservation.reservationDate|date('d/m/Y H:i') }}
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Nombre de places:</span> {{ reservation.numberOfSeats }}
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Prix total:</span> {{ reservation.totalPrice }} DT
            </div>
            <div class=\"info-item\">
                <span class=\"info-label\">Statut:</span>
                <span class=\"status-badge status-{{ reservation.status|lower }}\">
                    {{ reservation.status }}
                </span>
            </div>
        </div>
    </div>

    <div class=\"footer\">
        <p>Merci d'avoir choisi notre service de réservation</p>
        <p>Pour toute question, contactez-nous à Urbanlink@gmail.com</p>
    </div>
</body>
</html>", "reservation/pdf.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\reservation\\pdf.html.twig");
    }
}
