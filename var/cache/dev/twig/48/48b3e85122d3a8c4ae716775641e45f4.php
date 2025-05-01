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

/* datatables_example.html.twig */
class __TwigTemplate_e7e7387681d7d0507a261303814bf4ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datatables_example.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datatables_example.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>Exemple DataTables</title>
  <!-- CSS DataTables via CDN -->
  <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
  <!-- Optionnel : vos propres feuilles de style -->
  <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        yield "\">
</head>
<body class=\"bg-gray-100 p-6\">
  <div class=\"container mx-auto\">
    <div class=\"relative flex flex-col w-full min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border\">
      <div class=\"p-6 pb-0 mb-0 bg-white rounded-t-2xl\">
        <h6 class=\"text-lg font-semibold text-slate-700\">Exemple de Table avec DataTables</h6>
      </div>
      <div class=\"flex-auto px-0 pt-0 pb-2\">
        <div class=\"p-0 overflow-x-auto\">
          <table id=\"datatable-search\" class=\"w-full items-center mb-0 align-top border-gray-200 text-slate-500\">
            <thead class=\"bg-transparent\">
              <tr>
                <th class=\"px-6 py-3 font-bold text-left uppercase border-b border-gray-200 text-xxs whitespace-nowrap text-slate-400 opacity-70\">
                  Nom
                </th>
                <th class=\"px-6 py-3 font-bold text-left uppercase border-b border-gray-200 text-xxs whitespace-nowrap text-slate-400 opacity-70\">
                  Position
                </th>
                <th class=\"px-6 py-3 font-bold text-left uppercase border-b border-gray-200 text-xxs whitespace-nowrap text-slate-400 opacity-70\">
                  Bureau
                </th>
                <th class=\"px-6 py-3 font-bold text-left uppercase border-b border-gray-200 text-xxs whitespace-nowrap text-slate-400 opacity-70\">
                  Âge
                </th>
                <th class=\"px-6 py-3 font-bold text-left uppercase border-b border-gray-200 text-xxs whitespace-nowrap text-slate-400 opacity-70\">
                  Salaire
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class=\"p-2 border-b whitespace-nowrap\">Tiger Nixon</td>
                <td class=\"p-2 border-b whitespace-nowrap\">System Architect</td>
                <td class=\"p-2 border-b whitespace-nowrap\">Edinburgh</td>
                <td class=\"p-2 border-b whitespace-nowrap\">61</td>
                <td class=\"p-2 border-b whitespace-nowrap\">\$320,800</td>
              </tr>
              <tr>
                <td class=\"p-2 border-b whitespace-nowrap\">Garrett Winters</td>
                <td class=\"p-2 border-b whitespace-nowrap\">Accountant</td>
                <td class=\"p-2 border-b whitespace-nowrap\">Tokyo</td>
                <td class=\"p-2 border-b whitespace-nowrap\">63</td>
                <td class=\"p-2 border-b whitespace-nowrap\">\$170,750</td>
              </tr>
              <tr>
                <td class=\"p-2 border-b whitespace-nowrap\">Ashton Cox</td>
                <td class=\"p-2 border-b whitespace-nowrap\">Junior Technical Author</td>
                <td class=\"p-2 border-b whitespace-nowrap\">San Francisco</td>
                <td class=\"p-2 border-b whitespace-nowrap\">66</td>
                <td class=\"p-2 border-b whitespace-nowrap\">\$86,000</td>
              </tr>
              <!-- Ajoutez d'autres lignes ici si nécessaire -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery requis par DataTables (via CDN) -->
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <!-- JS DataTables via CDN -->
  <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
  <script>
    \$(document).ready(function() {
      \$('#datatable-search').DataTable({
        language: {
          search: \"Rechercher:\",
          lengthMenu: \"Afficher _MENU_ entrées\",
          info: \"Affichage de _START_ à _END_ sur _TOTAL_ entrées\",
          paginate: {
            previous: \"Précédent\",
            next: \"Suivant\"
          },
          zeroRecords: \"Aucun enregistrement correspondant trouvé\"
        }
      });
    });
  </script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "datatables_example.html.twig";
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
        return array (  58 => 10,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/datatables_example.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>Exemple DataTables</title>
  <!-- CSS DataTables via CDN -->
  <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
  <!-- Optionnel : vos propres feuilles de style -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
</head>
<body class=\"bg-gray-100 p-6\">
  <div class=\"container mx-auto\">
    <div class=\"relative flex flex-col w-full min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border\">
      <div class=\"p-6 pb-0 mb-0 bg-white rounded-t-2xl\">
        <h6 class=\"text-lg font-semibold text-slate-700\">Exemple de Table avec DataTables</h6>
      </div>
      <div class=\"flex-auto px-0 pt-0 pb-2\">
        <div class=\"p-0 overflow-x-auto\">
          <table id=\"datatable-search\" class=\"w-full items-center mb-0 align-top border-gray-200 text-slate-500\">
            <thead class=\"bg-transparent\">
              <tr>
                <th class=\"px-6 py-3 font-bold text-left uppercase border-b border-gray-200 text-xxs whitespace-nowrap text-slate-400 opacity-70\">
                  Nom
                </th>
                <th class=\"px-6 py-3 font-bold text-left uppercase border-b border-gray-200 text-xxs whitespace-nowrap text-slate-400 opacity-70\">
                  Position
                </th>
                <th class=\"px-6 py-3 font-bold text-left uppercase border-b border-gray-200 text-xxs whitespace-nowrap text-slate-400 opacity-70\">
                  Bureau
                </th>
                <th class=\"px-6 py-3 font-bold text-left uppercase border-b border-gray-200 text-xxs whitespace-nowrap text-slate-400 opacity-70\">
                  Âge
                </th>
                <th class=\"px-6 py-3 font-bold text-left uppercase border-b border-gray-200 text-xxs whitespace-nowrap text-slate-400 opacity-70\">
                  Salaire
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class=\"p-2 border-b whitespace-nowrap\">Tiger Nixon</td>
                <td class=\"p-2 border-b whitespace-nowrap\">System Architect</td>
                <td class=\"p-2 border-b whitespace-nowrap\">Edinburgh</td>
                <td class=\"p-2 border-b whitespace-nowrap\">61</td>
                <td class=\"p-2 border-b whitespace-nowrap\">\$320,800</td>
              </tr>
              <tr>
                <td class=\"p-2 border-b whitespace-nowrap\">Garrett Winters</td>
                <td class=\"p-2 border-b whitespace-nowrap\">Accountant</td>
                <td class=\"p-2 border-b whitespace-nowrap\">Tokyo</td>
                <td class=\"p-2 border-b whitespace-nowrap\">63</td>
                <td class=\"p-2 border-b whitespace-nowrap\">\$170,750</td>
              </tr>
              <tr>
                <td class=\"p-2 border-b whitespace-nowrap\">Ashton Cox</td>
                <td class=\"p-2 border-b whitespace-nowrap\">Junior Technical Author</td>
                <td class=\"p-2 border-b whitespace-nowrap\">San Francisco</td>
                <td class=\"p-2 border-b whitespace-nowrap\">66</td>
                <td class=\"p-2 border-b whitespace-nowrap\">\$86,000</td>
              </tr>
              <!-- Ajoutez d'autres lignes ici si nécessaire -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery requis par DataTables (via CDN) -->
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <!-- JS DataTables via CDN -->
  <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
  <script>
    \$(document).ready(function() {
      \$('#datatable-search').DataTable({
        language: {
          search: \"Rechercher:\",
          lengthMenu: \"Afficher _MENU_ entrées\",
          info: \"Affichage de _START_ à _END_ sur _TOTAL_ entrées\",
          paginate: {
            previous: \"Précédent\",
            next: \"Suivant\"
          },
          zeroRecords: \"Aucun enregistrement correspondant trouvé\"
        }
      });
    });
  </script>
</body>
</html>
", "datatables_example.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\datatables_example.html.twig");
    }
}
