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

/* maintenance/export_pdf.html.twig */
class __TwigTemplate_45108da8da58ef95abca9c13170716ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/export_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>URBANLINK MAINTENANCE REPORT #";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        @page {
            margin: 2cm;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333333;
            line-height: 1.5;
        }
        .header {
            border-bottom: 3px solid #0056b3;
            padding-bottom: 15px;
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }
        .logo {
            height: 60px;
        }
        .document-title {
            color: #0056b3;
            font-size: 24px;
            font-weight: 700;
            margin: 0;
            text-transform: uppercase;
        }
        .document-info {
            text-align: right;
            font-size: 12px;
            color: #666666;
        }
        .document-ref {
            font-weight: bold;
            color: #0056b3;
        }
        .section-title {
            background-color: #f5f5f5;
            color: #0056b3;
            padding: 8px 12px;
            font-size: 16px;
            font-weight: 600;
            margin: 25px 0 15px 0;
            border-left: 4px solid #0056b3;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }
        .details-table th {
            background-color: #f8f9fa;
            color: #495057;
            text-align: left;
            padding: 10px 12px;
            font-weight: 600;
            border-bottom: 2px solid #dee2e6;
            width: 30%;
        }
        .details-table td {
            padding: 10px 12px;
            border-bottom: 1px solid #dee2e6;
            vertical-align: top;
        }
        .status-badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }
        .status-0 { background-color: #d4edda; color: #155724; }
        .status-1 { background-color: #fff3cd; color: #856404; }
        .status-2 { background-color: #f8d7da; color: #721c24; }
        .footer {
            margin-top: 40px;
            padding-top: 15px;
            border-top: 1px solid #dee2e6;
            font-size: 10px;
            color: #6c757d;
            text-align: center;
        }
        .signature-area {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }
        .signature-box {
            width: 45%;
            border-top: 1px dashed #999;
            padding-top: 10px;
            font-size: 12px;
        }
        .qr-code-container {
            text-align: center;
            margin: 30px 0;
        }
        .qr-code {
            width: 120px;
            height: 120px;
            border: 1px solid #ddd;
            padding: 5px;
            background: white;
        }
        .qr-code-label {
            font-size: 12px;
            margin-top: 8px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <div>
            <img src=\"https://www.urbanlink.tn/wp-content/uploads/2022/11/logo-urbanlink.png\" alt=\"UrbanLink Logo\" class=\"logo\">
            <h1 class=\"document-title\">Maintenance Report</h1>
        </div>
        <div class=\"document-info\">
            <div>Document ID: <span class=\"document-ref\">MNT-";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124), "Ymd"), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124), "html", null, true);
        yield "</span></div>
            <div>Generated on: ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "F j, Y H:i"), "html", null, true);
        yield "</div>
        </div>
    </div>

    <div class=\"section-title\">Vehicle Information</div>
    <table class=\"details-table\">
        <tr>
            <th>Vehicle</th>
            <td>";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 133, $this->source); })()), "vehicle", [], "any", false, false, false, 133), "brand", [], "any", false, false, false, 133), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 133, $this->source); })()), "vehicle", [], "any", false, false, false, 133), "model", [], "any", false, false, false, 133), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 133, $this->source); })()), "vehicle", [], "any", false, false, false, 133), "licensePlate", [], "any", false, false, false, 133), "html", null, true);
        yield ")</td>
        </tr>
        <tr>
            <th>Vehicle Type</th>
            <td>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 137, $this->source); })()), "vehicle", [], "any", false, false, false, 137), "type", [], "any", false, false, false, 137), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Year</th>
            <td>";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 141, $this->source); })()), "vehicle", [], "any", false, false, false, 141), "year", [], "any", false, false, false, 141), "html", null, true);
        yield "</td>
        </tr>
    </table>

    <div class=\"section-title\">Maintenance Details</div>
    <table class=\"details-table\">
        <tr>
            <th>Maintenance ID</th>
            <td>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, false, 149), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Service Date</th>
            <td>";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 153, $this->source); })()), "maintenanceDate", [], "any", false, false, false, 153), "F j, Y"), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Service Type</th>
            <td>";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 157, $this->source); })()), "serviceType", [], "any", false, false, false, 157), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Service Provider</th>
            <td>";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 161, $this->source); })()), "serviceProvider", [], "any", false, false, false, 161), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Cost</th>
            <td>";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 165, $this->source); })()), "cost", [], "any", false, false, false, 165), 3, ".", ","), "html", null, true);
        yield " TND</td>
        </tr>
        <tr>
            <th>Current Status</th>
            <td>
                <span class=\"status-badge status-";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 170, $this->source); })()), "status", [], "any", false, false, false, 170), "html", null, true);
        yield "\">
                    ";
        // line 171
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 171, $this->source); })()), "status", [], "any", false, false, false, 171) == 0)) {
            // line 172
            yield "                        Not in maintenance
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 173
(isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 173, $this->source); })()), "status", [], "any", false, false, false, 173) == 1)) {
            // line 174
            yield "                        In maintenance
                    ";
        } else {
            // line 176
            yield "                        Reserved
                    ";
        }
        // line 178
        yield "                </span>
            </td>
        </tr>
    </table>

    <div class=\"section-title\">Service Notes</div>
    <div style=\"padding: 15px; background-color: #f8f9fa; border-radius: 4px; margin-bottom: 30px;\">
        ";
        // line 185
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 185, $this->source); })()), "description", [], "any", false, false, false, 185)) {
            // line 186
            yield "            ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 186, $this->source); })()), "description", [], "any", false, false, false, 186), "html", null, true));
            yield "
        ";
        } else {
            // line 188
            yield "            <em>No additional notes provided for this service.</em>
        ";
        }
        // line 190
        yield "    </div>

    <div class=\"signature-area\">
        <div class=\"signature-box\">
            <strong>Technician Signature:</strong><br><br><br>
            <div>Name: _________________________</div>
            <div>Date: _________________________</div>
        </div>
        <div class=\"signature-box\">
            <strong>Fleet Manager Approval:</strong><br><br><br>
            <div>Name: _________________________</div>
            <div>Date: _________________________</div>
        </div>
    </div>

    <div class=\"qr-code-container\">
        <img src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 206, $this->source); })()), "html", null, true);
        yield "\" alt=\"QR Code\" class=\"qr-code\">
        <div class=\"qr-code-label\">Scan for maintenance details</div>
    </div>

    <div class=\"footer\">
        <p>URBANLINK TUNISIA • ";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " • This is an official maintenance document</p>
        <p>Confidential - For internal use only</p>
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
        return "maintenance/export_pdf.html.twig";
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
        return array (  324 => 211,  316 => 206,  298 => 190,  294 => 188,  288 => 186,  286 => 185,  277 => 178,  273 => 176,  269 => 174,  267 => 173,  264 => 172,  262 => 171,  258 => 170,  250 => 165,  243 => 161,  236 => 157,  229 => 153,  222 => 149,  211 => 141,  204 => 137,  193 => 133,  182 => 125,  176 => 124,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>URBANLINK MAINTENANCE REPORT #{{ maintenance.id }}</title>
    <style>
        @page {
            margin: 2cm;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333333;
            line-height: 1.5;
        }
        .header {
            border-bottom: 3px solid #0056b3;
            padding-bottom: 15px;
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }
        .logo {
            height: 60px;
        }
        .document-title {
            color: #0056b3;
            font-size: 24px;
            font-weight: 700;
            margin: 0;
            text-transform: uppercase;
        }
        .document-info {
            text-align: right;
            font-size: 12px;
            color: #666666;
        }
        .document-ref {
            font-weight: bold;
            color: #0056b3;
        }
        .section-title {
            background-color: #f5f5f5;
            color: #0056b3;
            padding: 8px 12px;
            font-size: 16px;
            font-weight: 600;
            margin: 25px 0 15px 0;
            border-left: 4px solid #0056b3;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }
        .details-table th {
            background-color: #f8f9fa;
            color: #495057;
            text-align: left;
            padding: 10px 12px;
            font-weight: 600;
            border-bottom: 2px solid #dee2e6;
            width: 30%;
        }
        .details-table td {
            padding: 10px 12px;
            border-bottom: 1px solid #dee2e6;
            vertical-align: top;
        }
        .status-badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }
        .status-0 { background-color: #d4edda; color: #155724; }
        .status-1 { background-color: #fff3cd; color: #856404; }
        .status-2 { background-color: #f8d7da; color: #721c24; }
        .footer {
            margin-top: 40px;
            padding-top: 15px;
            border-top: 1px solid #dee2e6;
            font-size: 10px;
            color: #6c757d;
            text-align: center;
        }
        .signature-area {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }
        .signature-box {
            width: 45%;
            border-top: 1px dashed #999;
            padding-top: 10px;
            font-size: 12px;
        }
        .qr-code-container {
            text-align: center;
            margin: 30px 0;
        }
        .qr-code {
            width: 120px;
            height: 120px;
            border: 1px solid #ddd;
            padding: 5px;
            background: white;
        }
        .qr-code-label {
            font-size: 12px;
            margin-top: 8px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <div>
            <img src=\"https://www.urbanlink.tn/wp-content/uploads/2022/11/logo-urbanlink.png\" alt=\"UrbanLink Logo\" class=\"logo\">
            <h1 class=\"document-title\">Maintenance Report</h1>
        </div>
        <div class=\"document-info\">
            <div>Document ID: <span class=\"document-ref\">MNT-{{ maintenance.id|date('Ymd') }}-{{ maintenance.id }}</span></div>
            <div>Generated on: {{ \"now\"|date(\"F j, Y H:i\") }}</div>
        </div>
    </div>

    <div class=\"section-title\">Vehicle Information</div>
    <table class=\"details-table\">
        <tr>
            <th>Vehicle</th>
            <td>{{ maintenance.vehicle.brand }} {{ maintenance.vehicle.model }} ({{ maintenance.vehicle.licensePlate }})</td>
        </tr>
        <tr>
            <th>Vehicle Type</th>
            <td>{{ maintenance.vehicle.type }}</td>
        </tr>
        <tr>
            <th>Year</th>
            <td>{{ maintenance.vehicle.year }}</td>
        </tr>
    </table>

    <div class=\"section-title\">Maintenance Details</div>
    <table class=\"details-table\">
        <tr>
            <th>Maintenance ID</th>
            <td>{{ maintenance.id }}</td>
        </tr>
        <tr>
            <th>Service Date</th>
            <td>{{ maintenance.maintenanceDate|date('F j, Y') }}</td>
        </tr>
        <tr>
            <th>Service Type</th>
            <td>{{ maintenance.serviceType }}</td>
        </tr>
        <tr>
            <th>Service Provider</th>
            <td>{{ maintenance.serviceProvider }}</td>
        </tr>
        <tr>
            <th>Cost</th>
            <td>{{ maintenance.cost|number_format(3, '.', ',') }} TND</td>
        </tr>
        <tr>
            <th>Current Status</th>
            <td>
                <span class=\"status-badge status-{{ maintenance.status }}\">
                    {% if maintenance.status == 0 %}
                        Not in maintenance
                    {% elseif maintenance.status == 1 %}
                        In maintenance
                    {% else %}
                        Reserved
                    {% endif %}
                </span>
            </td>
        </tr>
    </table>

    <div class=\"section-title\">Service Notes</div>
    <div style=\"padding: 15px; background-color: #f8f9fa; border-radius: 4px; margin-bottom: 30px;\">
        {% if maintenance.description %}
            {{ maintenance.description|nl2br }}
        {% else %}
            <em>No additional notes provided for this service.</em>
        {% endif %}
    </div>

    <div class=\"signature-area\">
        <div class=\"signature-box\">
            <strong>Technician Signature:</strong><br><br><br>
            <div>Name: _________________________</div>
            <div>Date: _________________________</div>
        </div>
        <div class=\"signature-box\">
            <strong>Fleet Manager Approval:</strong><br><br><br>
            <div>Name: _________________________</div>
            <div>Date: _________________________</div>
        </div>
    </div>

    <div class=\"qr-code-container\">
        <img src=\"{{ qrCode }}\" alt=\"QR Code\" class=\"qr-code\">
        <div class=\"qr-code-label\">Scan for maintenance details</div>
    </div>

    <div class=\"footer\">
        <p>URBANLINK TUNISIA • {{ \"now\"|date(\"Y\") }} • This is an official maintenance document</p>
        <p>Confidential - For internal use only</p>
    </div>
</body>
</html>", "maintenance/export_pdf.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\maintenance\\export_pdf.html.twig");
    }
}
