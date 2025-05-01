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
class __TwigTemplate_2c16034edd14a4c8b19a9594eda09707 extends Template
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
    <title>URBANLINK MAINTENANCE RECEIPT #";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        @page {
            margin: 1cm;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333333;
            line-height: 1.4;
            max-width: 800px;
            margin: 0 auto;
        }
        .receipt-header {
            text-align: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #0056b3;
        }
        .logo {
            height: 50px;
            margin-bottom: 10px;
        }
        .receipt-title {
            font-size: 22px;
            font-weight: 700;
            color: #0056b3;
            margin: 5px 0;
            text-transform: uppercase;
        }
        .receipt-subtitle {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
        .receipt-number {
            font-size: 16px;
            font-weight: 600;
            margin: 10px 0;
        }
        .receipt-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
            font-size: 12px;
            color: #555;
        }
        .receipt-section {
            margin-bottom: 20px;
        }
        .section-title {
            background-color: #0056b3;
            color: white;
            padding: 6px 10px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 8px;
            font-size: 13px;
        }
        .detail-label {
            width: 150px;
            font-weight: 600;
            color: #555;
        }
        .detail-value {
            flex: 1;
        }
        .service-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
            font-size: 13px;
        }
        .service-table th {
            background-color: #f0f0f0;
            padding: 8px 10px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid #ddd;
        }
        .service-table td {
            padding: 8px 10px;
            border-bottom: 1px solid #eee;
        }
        .total-row {
            font-weight: 600;
            background-color: #f8f8f8;
        }
        .notes-box {
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #eee;
            border-radius: 4px;
            margin: 15px 0;
            font-size: 13px;
        }
        .signature-area {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        .signature-box {
            width: 45%;
            text-align: center;
            font-size: 12px;
        }
        .signature-line {
            border-top: 1px dashed #999;
            margin: 40px 0 5px 0;
        }
        .qr-code-container {
            text-align: center;
            margin: 20px 0;
        }
        .qr-code {
            width: 100px;
            height: 100px;
            border: 1px solid #ddd;
            padding: 5px;
            background: white;
        }
        .qr-code-label {
            font-size: 11px;
            margin-top: 5px;
            color: #666;
        }
        .receipt-footer {
            margin-top: 30px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            font-size: 10px;
            color: #777;
            text-align: center;
        }
        .status-badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 11px;
            font-weight: 600;
        }
        .status-0 { background-color: #d4edda; color: #155724; }
        .status-1 { background-color: #fff3cd; color: #856404; }
        .status-2 { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <div class=\"receipt-header\">
        <img src=\"https://www.urbanlink.tn/wp-content/uploads/2022/11/logo-urbanlink.png\" alt=\"UrbanLink Logo\" class=\"logo\">
        <h1 class=\"receipt-title\">Maintenance Receipt</h1>
        <div class=\"receipt-subtitle\">Service Record & Payment Confirmation</div>
        <div class=\"receipt-number\">Receipt #MNT-";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159), "Ymd"), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159), "html", null, true);
        yield "</div>
        <div class=\"receipt-details\">
            <div>Date: ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "F j, Y"), "html", null, true);
        yield "</div>
            <div>Time: ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i"), "html", null, true);
        yield "</div>
        </div>
    </div>

    <div class=\"receipt-section\">
        <div class=\"section-title\">Vehicle Information</div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Vehicle:</div>
            <div class=\"detail-value\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 170, $this->source); })()), "vehicle", [], "any", false, false, false, 170), "brand", [], "any", false, false, false, 170), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 170, $this->source); })()), "vehicle", [], "any", false, false, false, 170), "model", [], "any", false, false, false, 170), "html", null, true);
        yield "</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">License Plate:</div>
            <div class=\"detail-value\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 174, $this->source); })()), "vehicle", [], "any", false, false, false, 174), "licensePlate", [], "any", false, false, false, 174), "html", null, true);
        yield "</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Vehicle Type:</div>
            <div class=\"detail-value\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 178, $this->source); })()), "vehicle", [], "any", false, false, false, 178), "type", [], "any", false, false, false, 178), "html", null, true);
        yield "</div>
        </div>
    </div>

    <div class=\"receipt-section\">
        <div class=\"section-title\">Service Details</div>
        <table class=\"service-table\">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 194, $this->source); })()), "serviceType", [], "any", false, false, false, 194), "html", null, true);
        yield "</td>
                    <td>";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 195, $this->source); })()), "maintenanceDate", [], "any", false, false, false, 195), "M j, Y"), "html", null, true);
        yield "</td>
                    <td>";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 196, $this->source); })()), "cost", [], "any", false, false, false, 196), 3, ".", ","), "html", null, true);
        yield " TND</td>
                </tr>
                <tr class=\"total-row\">
                    <td colspan=\"2\" style=\"text-align: right;\">TOTAL:</td>
                    <td>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 200, $this->source); })()), "cost", [], "any", false, false, false, 200), 3, ".", ","), "html", null, true);
        yield " TND</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class=\"receipt-section\">
        <div class=\"section-title\">Service Provider</div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Provider:</div>
            <div class=\"detail-value\">";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 210, $this->source); })()), "serviceProvider", [], "any", false, false, false, 210), "html", null, true);
        yield "</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Status:</div>
            <div class=\"detail-value\">
                <span class=\"status-badge status-";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 215, $this->source); })()), "status", [], "any", false, false, false, 215), "html", null, true);
        yield "\">
                    ";
        // line 216
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 216, $this->source); })()), "status", [], "any", false, false, false, 216) == 0)) {
            // line 217
            yield "                        Not in maintenance
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 218
(isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 218, $this->source); })()), "status", [], "any", false, false, false, 218) == 1)) {
            // line 219
            yield "                        In maintenance
                    ";
        } else {
            // line 221
            yield "                        Reserved
                    ";
        }
        // line 223
        yield "                </span>
            </div>
        </div>
    </div>

    <div class=\"receipt-section\">
        <div class=\"section-title\">Service Notes</div>
        <div class=\"notes-box\">
            ";
        // line 231
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 231, $this->source); })()), "description", [], "any", false, false, false, 231)) {
            // line 232
            yield "                ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 232, $this->source); })()), "description", [], "any", false, false, false, 232), "html", null, true));
            yield "
            ";
        } else {
            // line 234
            yield "                <em>No additional notes provided for this service.</em>
            ";
        }
        // line 236
        yield "        </div>
    </div>

    <div class=\"qr-code-container\">
        <img src=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 240, $this->source); })()), "html", null, true);
        yield "\" alt=\"QR Code\" class=\"qr-code\">
        <div class=\"qr-code-label\">Scan to verify this receipt</div>
    </div>

    <div class=\"receipt-footer\">
        <p>URBANLINK TUNISIA • ";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " • This is an official maintenance receipt</p>
        <p>Thank you for your business • www.urbanlink.tn</p>
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
        return array (  359 => 245,  351 => 240,  345 => 236,  341 => 234,  335 => 232,  333 => 231,  323 => 223,  319 => 221,  315 => 219,  313 => 218,  310 => 217,  308 => 216,  304 => 215,  296 => 210,  283 => 200,  276 => 196,  272 => 195,  268 => 194,  249 => 178,  242 => 174,  233 => 170,  222 => 162,  218 => 161,  211 => 159,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>URBANLINK MAINTENANCE RECEIPT #{{ maintenance.id }}</title>
    <style>
        @page {
            margin: 1cm;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333333;
            line-height: 1.4;
            max-width: 800px;
            margin: 0 auto;
        }
        .receipt-header {
            text-align: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #0056b3;
        }
        .logo {
            height: 50px;
            margin-bottom: 10px;
        }
        .receipt-title {
            font-size: 22px;
            font-weight: 700;
            color: #0056b3;
            margin: 5px 0;
            text-transform: uppercase;
        }
        .receipt-subtitle {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
        .receipt-number {
            font-size: 16px;
            font-weight: 600;
            margin: 10px 0;
        }
        .receipt-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
            font-size: 12px;
            color: #555;
        }
        .receipt-section {
            margin-bottom: 20px;
        }
        .section-title {
            background-color: #0056b3;
            color: white;
            padding: 6px 10px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 8px;
            font-size: 13px;
        }
        .detail-label {
            width: 150px;
            font-weight: 600;
            color: #555;
        }
        .detail-value {
            flex: 1;
        }
        .service-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
            font-size: 13px;
        }
        .service-table th {
            background-color: #f0f0f0;
            padding: 8px 10px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid #ddd;
        }
        .service-table td {
            padding: 8px 10px;
            border-bottom: 1px solid #eee;
        }
        .total-row {
            font-weight: 600;
            background-color: #f8f8f8;
        }
        .notes-box {
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #eee;
            border-radius: 4px;
            margin: 15px 0;
            font-size: 13px;
        }
        .signature-area {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        .signature-box {
            width: 45%;
            text-align: center;
            font-size: 12px;
        }
        .signature-line {
            border-top: 1px dashed #999;
            margin: 40px 0 5px 0;
        }
        .qr-code-container {
            text-align: center;
            margin: 20px 0;
        }
        .qr-code {
            width: 100px;
            height: 100px;
            border: 1px solid #ddd;
            padding: 5px;
            background: white;
        }
        .qr-code-label {
            font-size: 11px;
            margin-top: 5px;
            color: #666;
        }
        .receipt-footer {
            margin-top: 30px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            font-size: 10px;
            color: #777;
            text-align: center;
        }
        .status-badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 11px;
            font-weight: 600;
        }
        .status-0 { background-color: #d4edda; color: #155724; }
        .status-1 { background-color: #fff3cd; color: #856404; }
        .status-2 { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <div class=\"receipt-header\">
        <img src=\"https://www.urbanlink.tn/wp-content/uploads/2022/11/logo-urbanlink.png\" alt=\"UrbanLink Logo\" class=\"logo\">
        <h1 class=\"receipt-title\">Maintenance Receipt</h1>
        <div class=\"receipt-subtitle\">Service Record & Payment Confirmation</div>
        <div class=\"receipt-number\">Receipt #MNT-{{ maintenance.id|date('Ymd') }}-{{ maintenance.id }}</div>
        <div class=\"receipt-details\">
            <div>Date: {{ \"now\"|date(\"F j, Y\") }}</div>
            <div>Time: {{ \"now\"|date(\"H:i\") }}</div>
        </div>
    </div>

    <div class=\"receipt-section\">
        <div class=\"section-title\">Vehicle Information</div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Vehicle:</div>
            <div class=\"detail-value\">{{ maintenance.vehicle.brand }} {{ maintenance.vehicle.model }}</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">License Plate:</div>
            <div class=\"detail-value\">{{ maintenance.vehicle.licensePlate }}</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Vehicle Type:</div>
            <div class=\"detail-value\">{{ maintenance.vehicle.type }}</div>
        </div>
    </div>

    <div class=\"receipt-section\">
        <div class=\"section-title\">Service Details</div>
        <table class=\"service-table\">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ maintenance.serviceType }}</td>
                    <td>{{ maintenance.maintenanceDate|date('M j, Y') }}</td>
                    <td>{{ maintenance.cost|number_format(3, '.', ',') }} TND</td>
                </tr>
                <tr class=\"total-row\">
                    <td colspan=\"2\" style=\"text-align: right;\">TOTAL:</td>
                    <td>{{ maintenance.cost|number_format(3, '.', ',') }} TND</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class=\"receipt-section\">
        <div class=\"section-title\">Service Provider</div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Provider:</div>
            <div class=\"detail-value\">{{ maintenance.serviceProvider }}</div>
        </div>
        <div class=\"detail-row\">
            <div class=\"detail-label\">Status:</div>
            <div class=\"detail-value\">
                <span class=\"status-badge status-{{ maintenance.status }}\">
                    {% if maintenance.status == 0 %}
                        Not in maintenance
                    {% elseif maintenance.status == 1 %}
                        In maintenance
                    {% else %}
                        Reserved
                    {% endif %}
                </span>
            </div>
        </div>
    </div>

    <div class=\"receipt-section\">
        <div class=\"section-title\">Service Notes</div>
        <div class=\"notes-box\">
            {% if maintenance.description %}
                {{ maintenance.description|nl2br }}
            {% else %}
                <em>No additional notes provided for this service.</em>
            {% endif %}
        </div>
    </div>

    <div class=\"qr-code-container\">
        <img src=\"{{ qrCode }}\" alt=\"QR Code\" class=\"qr-code\">
        <div class=\"qr-code-label\">Scan to verify this receipt</div>
    </div>

    <div class=\"receipt-footer\">
        <p>URBANLINK TUNISIA • {{ \"now\"|date(\"Y\") }} • This is an official maintenance receipt</p>
        <p>Thank you for your business • www.urbanlink.tn</p>
    </div>
</body>
</html>", "maintenance/export_pdf.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\maintenance\\export_pdf.html.twig");
    }
}
