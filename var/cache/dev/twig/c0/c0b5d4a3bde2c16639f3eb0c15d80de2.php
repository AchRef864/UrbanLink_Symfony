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

/* front_office/Avis/index.html.twig */
class __TwigTemplate_52ea527a108c2e57f08ff6092b694bc1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/Avis/index.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "front_office/Avis/index.html.twig", 1);
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

        yield "Complaints";
        
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
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
    <style>
        .course-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .card-3d {
            background-color: #fff;
            border-radius: 0.75rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            margin-bottom: 1.5rem;
        }

        .header-3d {
            padding: 1.25rem;
            background: linear-gradient(135deg, #2D3748, #4A5568);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
            border-radius: 0.75rem 0.75rem 0 0;
        }

        .btn-primary {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-weight: 700;
            text-transform: uppercase;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            background: linear-gradient(135deg, #06B6D4, #0284C7);
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            font-size: 0.875rem;
            color: #fff;
            text-decoration: none;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
        }

        .status-badge {
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: bold;
            border-radius: 0.25rem;
            padding: 0.25rem 0.5rem;
            text-align: center;
        }

        .status-processed { background-color: #10B981; color: #fff; }
        .status-pending   { background-color: #FACC15; color: #1F2937; }
        .status-closed    { background-color: #EF4444; color: #fff; }
        .status-na        { background-color: #EF4444; color: #fff; }

        .search-form input {
            padding: 0.5rem 1rem;
            border: 2px solid #fff;
            border-radius: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        table.dataTable {
            width: 100% !important;
            margin: 1rem 0 !important;
            border-collapse: collapse;
        }

        table.dataTable thead th {
            padding: 1rem;
            background-color: #F8FAFC;
            text-transform: uppercase;
            font-size: 0.75rem;
            color: #6B7280;
        }

        table.dataTable tbody td {
            padding: 1rem;
            border-bottom: 1px solid #E5E7EB;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            align-items: center;
        }

        .btn-edit {
            background: linear-gradient(135deg, #00007d, #1E40AF);
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-responses {
            background: linear-gradient(135deg, #28a745, #10B981);
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-delete {
            background: linear-gradient(135deg, #b91c1c, #EF4444);
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
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

        // line 137
        yield "<div class=\"course-container\">
    <div class=\"card-3d\">
        <div class=\"header-3d\">
            <h2>Complaints Management</h2>
            <div class=\"flex items-center gap-2\">
                <form method=\"get\" action=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_front");
        yield "\" class=\"search-form\">
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 143, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search complaints...\" class=\"mr-2\">
                    <button type=\"submit\" class=\"btn-primary\">Search</button>
                </form>
                ";
        // line 146
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146) && CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "roles", [], "any", false, false, false, 146)))) {
            // line 147
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new");
            yield "\" class=\"btn-primary\">+ New Complaint</a>
                ";
        }
        // line 149
        yield "            </div>
        </div>

        <div style=\"padding: 1.5rem;\">
            <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th class=\"text-center\">Status</th>
                        <th>Taxi Registration</th>
                        <th>Vehicle License</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
    ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 166, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 167
            yield "        <tr>
            <td>";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "type", [], "any", false, false, false, 168), "html", null, true);
            yield "</td>
            <td class=\"description-cell\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 169), "html", null, true);
            yield "</td>
            <td>";
            // line 170
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 170)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 170), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
            <td class=\"text-center\">
                <span class=\"status-badge
                    ";
            // line 173
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "statut", [], "any", false, false, false, 173) == "processed")) {
                yield "status-processed
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 174
$context["avi"], "statut", [], "any", false, false, false, 174) == "not processed")) {
                yield "status-pending
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 175
$context["avi"], "statut", [], "any", false, false, false, 175) == "closed")) {
                yield "status-closed
                    ";
            } else {
                // line 176
                yield "status-na";
            }
            yield "\">
                    ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "statut", [], "any", false, false, false, 177)), "html", null, true);
            yield "
                </span>
            </td>
            <td>";
            // line 180
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 180)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 180), "immatriculation", [], "any", false, false, false, 180), "html", null, true)) : ("N/A"));
            yield "</td>
            <td>";
            // line 181
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "vehicle", [], "any", false, false, false, 181)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "vehicle", [], "any", false, false, false, 181), "licensePlate", [], "any", false, false, false, 181), "html", null, true)) : ("N/A"));
            yield "</td>
            <td>
                <div class=\"action-buttons\">
                    <button type=\"button\" class=\"btn-primary tts-btn\" data-id=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 184), "html", null, true);
            yield "\" data-tts-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_tts", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 184)]), "html", null, true);
            yield "\" aria-label=\"Play description\">🔊</button>
                    <audio id=\"tts-audio-";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 185), "html", null, true);
            yield "\" hidden></audio>

                    <a href=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_reponses", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 187)]), "html", null, true);
            yield "\" class=\"btn-responses\">Responses</a>

                    ";
            // line 189
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 190
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 190)]), "html", null, true);
                yield "\" class=\"btn-edit\">Edit</a>
                    ";
            }
            // line 192
            yield "
                    ";
            // line 193
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193), "id", [], "any", false, false, false, 193) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "user", [], "any", false, false, false, 193), "id", [], "any", false, false, false, 193)))) {
                // line 194
                yield "                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 194)]), "html", null, true);
                yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this complaint?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 195))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn-delete\">Delete</button>
                        </form>
                    ";
            }
            // line 199
            yield "                </div>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 202
        if (!$context['_iterated']) {
            // line 203
            yield "        <tr>
            <td colspan=\"7\" class=\"text-center py-4 text-gray-500\">No complaints found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"card-3d\" style=\"margin-top: 1.5rem;\">
        <div style=\"padding: 1.5rem;\">
            ";
        // line 214
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 214, $this->source); })()));
        yield "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 220
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

        // line 221
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        let currentAudio = null;
        \$(document).ready(function() {
            \$('#datatable-search tbody').on('click', '.tts-btn', function() {
                const btn = \$(this);
                const id  = btn.data('id');
                const row = btn.closest('tr');
                const text= row.find('.description-cell').text().trim();
                const audioId = 'tts-audio-' + id;
                let audio = document.getElementById(audioId);

                btn.text('⏳');
                if (currentAudio) {
                    currentAudio.pause();
                    if (currentAudio === audio) {
                        currentAudio = null;
                        btn.text('🔊');
                        return;
                    }
                }
                if (!audio) {
                    audio = document.createElement('audio');
                    audio.id = audioId;
                    audio.controls = true;
                    audio.style.display = 'block';
                    document.body.appendChild(audio);
                }
                audio.onloadeddata = () => btn.text('⏸️');
                audio.onended      = () => { btn.text('🔊'); currentAudio = null; };
                audio.onerror      = () => { btn.text('❌'); setTimeout(() => btn.text('🔊'), 2000); currentAudio = null; };

                const baseUrl = btn.data('tts-url');
                const url     = `\${baseUrl}?text=\${encodeURIComponent(text)}`;

                fetch(url)
                  .then(response => {
                    if (!response.ok) {
                      return response.json().then(err => { throw new Error(err.error || `Server error \${response.status}`); });
                    }
                    return response.blob();
                  })
                  .then(blob => {
                    const blobUrl = URL.createObjectURL(blob);
                    audio.src = blobUrl;
                    return audio.play();
                  })
                  .then(() => { currentAudio = audio; })
                  .catch(err => {
                    console.error('TTS error:', err);
                    btn.text('🔊');
                    alert(`Could not play TTS: \${err.message}`);
                  });
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
        return "front_office/Avis/index.html.twig";
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
        return array (  453 => 221,  440 => 220,  424 => 214,  415 => 207,  406 => 203,  404 => 202,  397 => 199,  390 => 195,  385 => 194,  383 => 193,  380 => 192,  374 => 190,  372 => 189,  367 => 187,  362 => 185,  356 => 184,  350 => 181,  346 => 180,  340 => 177,  335 => 176,  330 => 175,  326 => 174,  322 => 173,  316 => 170,  312 => 169,  308 => 168,  305 => 167,  300 => 166,  281 => 149,  275 => 147,  273 => 146,  267 => 143,  263 => 142,  256 => 137,  243 => 136,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Complaints{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
    <style>
        .course-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .card-3d {
            background-color: #fff;
            border-radius: 0.75rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            margin-bottom: 1.5rem;
        }

        .header-3d {
            padding: 1.25rem;
            background: linear-gradient(135deg, #2D3748, #4A5568);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
            border-radius: 0.75rem 0.75rem 0 0;
        }

        .btn-primary {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-weight: 700;
            text-transform: uppercase;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            background: linear-gradient(135deg, #06B6D4, #0284C7);
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            font-size: 0.875rem;
            color: #fff;
            text-decoration: none;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
        }

        .status-badge {
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: bold;
            border-radius: 0.25rem;
            padding: 0.25rem 0.5rem;
            text-align: center;
        }

        .status-processed { background-color: #10B981; color: #fff; }
        .status-pending   { background-color: #FACC15; color: #1F2937; }
        .status-closed    { background-color: #EF4444; color: #fff; }
        .status-na        { background-color: #EF4444; color: #fff; }

        .search-form input {
            padding: 0.5rem 1rem;
            border: 2px solid #fff;
            border-radius: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        table.dataTable {
            width: 100% !important;
            margin: 1rem 0 !important;
            border-collapse: collapse;
        }

        table.dataTable thead th {
            padding: 1rem;
            background-color: #F8FAFC;
            text-transform: uppercase;
            font-size: 0.75rem;
            color: #6B7280;
        }

        table.dataTable tbody td {
            padding: 1rem;
            border-bottom: 1px solid #E5E7EB;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            align-items: center;
        }

        .btn-edit {
            background: linear-gradient(135deg, #00007d, #1E40AF);
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-responses {
            background: linear-gradient(135deg, #28a745, #10B981);
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-delete {
            background: linear-gradient(135deg, #b91c1c, #EF4444);
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"course-container\">
    <div class=\"card-3d\">
        <div class=\"header-3d\">
            <h2>Complaints Management</h2>
            <div class=\"flex items-center gap-2\">
                <form method=\"get\" action=\"{{ path('app_avis_front') }}\" class=\"search-form\">
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" placeholder=\"Search complaints...\" class=\"mr-2\">
                    <button type=\"submit\" class=\"btn-primary\">Search</button>
                </form>
                {% if app.user and 'ROLE_CLIENT' in app.user.roles %}
                    <a href=\"{{ path('app_avis_new') }}\" class=\"btn-primary\">+ New Complaint</a>
                {% endif %}
            </div>
        </div>

        <div style=\"padding: 1.5rem;\">
            <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th class=\"text-center\">Status</th>
                        <th>Taxi Registration</th>
                        <th>Vehicle License</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
    {% for avi in avis %}
        <tr>
            <td>{{ avi.type }}</td>
            <td class=\"description-cell\">{{ avi.commentaire }}</td>
            <td>{{ avi.dateAvis ? avi.dateAvis|date('Y-m-d') : '' }}</td>
            <td class=\"text-center\">
                <span class=\"status-badge
                    {% if avi.statut == 'processed' %}status-processed
                    {% elseif avi.statut == 'not processed' %}status-pending
                    {% elseif avi.statut == 'closed' %}status-closed
                    {% else %}status-na{% endif %}\">
                    {{ avi.statut|capitalize }}
                </span>
            </td>
            <td>{{ avi.taxi ? avi.taxi.immatriculation : 'N/A' }}</td>
            <td>{{ avi.vehicle ? avi.vehicle.licensePlate : 'N/A' }}</td>
            <td>
                <div class=\"action-buttons\">
                    <button type=\"button\" class=\"btn-primary tts-btn\" data-id=\"{{ avi.id }}\" data-tts-url=\"{{ path('app_avis_tts', {'id': avi.id}) }}\" aria-label=\"Play description\">🔊</button>
                    <audio id=\"tts-audio-{{ avi.id }}\" hidden></audio>

                    <a href=\"{{ path('app_avis_reponses', {'id': avi.id}) }}\" class=\"btn-responses\">Responses</a>

                    {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('app_avis_edit', {'id': avi.id}) }}\" class=\"btn-edit\">Edit</a>
                    {% endif %}

                    {% if app.user and app.user.id == avi.user.id %}
                        <form method=\"post\" action=\"{{ path('app_avis_delete', {'id': avi.id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this complaint?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ avi.id) }}\">
                            <button type=\"submit\" class=\"btn-delete\">Delete</button>
                        </form>
                    {% endif %}
                </div>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"7\" class=\"text-center py-4 text-gray-500\">No complaints found</td>
        </tr>
    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"card-3d\" style=\"margin-top: 1.5rem;\">
        <div style=\"padding: 1.5rem;\">
            {{ knp_pagination_render(avis) }}
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        let currentAudio = null;
        \$(document).ready(function() {
            \$('#datatable-search tbody').on('click', '.tts-btn', function() {
                const btn = \$(this);
                const id  = btn.data('id');
                const row = btn.closest('tr');
                const text= row.find('.description-cell').text().trim();
                const audioId = 'tts-audio-' + id;
                let audio = document.getElementById(audioId);

                btn.text('⏳');
                if (currentAudio) {
                    currentAudio.pause();
                    if (currentAudio === audio) {
                        currentAudio = null;
                        btn.text('🔊');
                        return;
                    }
                }
                if (!audio) {
                    audio = document.createElement('audio');
                    audio.id = audioId;
                    audio.controls = true;
                    audio.style.display = 'block';
                    document.body.appendChild(audio);
                }
                audio.onloadeddata = () => btn.text('⏸️');
                audio.onended      = () => { btn.text('🔊'); currentAudio = null; };
                audio.onerror      = () => { btn.text('❌'); setTimeout(() => btn.text('🔊'), 2000); currentAudio = null; };

                const baseUrl = btn.data('tts-url');
                const url     = `\${baseUrl}?text=\${encodeURIComponent(text)}`;

                fetch(url)
                  .then(response => {
                    if (!response.ok) {
                      return response.json().then(err => { throw new Error(err.error || `Server error \${response.status}`); });
                    }
                    return response.blob();
                  })
                  .then(blob => {
                    const blobUrl = URL.createObjectURL(blob);
                    audio.src = blobUrl;
                    return audio.play();
                  })
                  .then(() => { currentAudio = audio; })
                  .catch(err => {
                    console.error('TTS error:', err);
                    btn.text('🔊');
                    alert(`Could not play TTS: \${err.message}`);
                  });
            });
        });
    </script>
{% endblock %}", "front_office/Avis/index.html.twig", "C:\\Users\\PC\\OneDrive\\Documents\\GitHub\\UrbanLInk_Symfony\\UrbanLink_Symfony\\templates\\front_office\\Avis\\index.html.twig");
    }
}
