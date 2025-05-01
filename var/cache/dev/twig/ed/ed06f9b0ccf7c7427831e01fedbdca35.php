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

/* taxiste/dashboard.html.twig */
class __TwigTemplate_f06c1cde323df12d6c2fe34406cbef05 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxiste/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxiste/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("basef.html.twig", "taxiste/dashboard.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Tableau de bord Taxiste";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"bg-white shadow-lg rounded-2xl max-w-5xl mx-auto border border-gray-200\">

  ";
        // line 10
        yield "  <div class=\"px-6 py-4 rounded-t-2xl bg-indigo-900\">
    <h1 class=\"text-xl font-bold text-white\">Tableau de bord du Taxi</h1>
  </div>

  ";
        // line 15
        yield "  <div class=\"relative text-right p-4\">
    <button id=\"notifToggle\"
            class=\"relative inline-flex items-center p-2 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
      <svg class=\"h-6 w-6 text-gray-700\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\"
           viewBox=\"0 0 24 24\" stroke=\"currentColor\">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
              d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 
                 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 
                 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 
                 11-6 0v-1m6 0H9\"/>
      </svg>
      <span id=\"notifCount\"
            class=\"absolute -top-1 -right-1 inline-flex items-center justify-center
                   px-1.5 py-0.5 text-xs font-bold text-white bg-red-600 rounded-full hidden\">
        0
      </span>
    </button>

    <div id=\"notifList\"
         class=\"hidden origin-top-right absolute right-4 mt-2 w-80 max-h-96 overflow-y-auto
                bg-white border border-gray-200 rounded-2xl shadow-lg ring-1 ring-black
                ring-opacity-5 transition transform opacity-0 scale-95\">
      <ul id=\"notifItems\" class=\"divide-y divide-gray-100 p-1\"></ul>
    </div>
  </div>

  ";
        // line 42
        yield "  <div class=\"p-6\">

    ";
        // line 45
        yield "    <h2 class=\"text-lg font-semibold\">Votre Taxi</h2>
    <div class=\"mb-4\">
      <p class=\"text-gray-800\">
        📌 <span class=\"font-medium\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 48, $this->source); })()), "marque", [], "any", false, false, false, 48), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 48, $this->source); })()), "modele", [], "any", false, false, false, 48), "html", null, true);
        yield "</span>
        (<span class=\"text-sm text-gray-600\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 49, $this->source); })()), "immatriculation", [], "any", false, false, false, 49), "html", null, true);
        yield "</span>)
      </p>
      <p class=\"text-gray-600\">Statut : <span class=\"font-medium\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 51, $this->source); })()), "statut", [], "any", false, false, false, 51), "html", null, true);
        yield "</span></p>
    </div>
    <form action=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_taxi_change_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        yield "\"
          method=\"post\" class=\"mb-8 inline-block\">
      ";
        // line 55
        $context["st"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 55, $this->source); })()), "statut", [], "any", false, false, false, 55));
        // line 56
        yield "      <button type=\"submit\"
              class=\"font-bold py-2 px-6 rounded-lg shadow-md transition duration-200
                     ";
        // line 58
        yield ((CoreExtension::inFilter((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 58, $this->source); })()), ["disponible", "en course"])) ? ("bg-red-600 hover:bg-red-700 text-white") : ("bg-green-600 hover:bg-green-700 text-white"));
        // line 60
        yield "\">
        ";
        // line 61
        if (CoreExtension::inFilter((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 61, $this->source); })()), ["disponible", "en course"])) {
            // line 62
            yield "          Passer en indisponible
        ";
        } else {
            // line 64
            yield "          Passer en disponible
        ";
        }
        // line 66
        yield "      </button>
    </form>

    ";
        // line 70
        yield "    <h2 class=\"text-lg font-semibold mb-2\">Vos Courses</h2>
    <div class=\"overflow-x-auto\">
      <table class=\"w-full border-collapse bg-white\">
        <thead>
          <tr class=\"bg-gray-100\">
            <th class=\"py-2 px-4 border text-left\">Date</th>
            <th class=\"py-2 px-4 border text-left\">Départ</th>
            <th class=\"py-2 px-4 border text-left\">Arrivée</th>
            <th class=\"py-2 px-4 border text-left\">Distance</th>
            <th class=\"py-2 px-4 border text-left\">Montant</th>
            <th class=\"py-2 px-4 border text-left\">Client</th>
            <th class=\"py-2 px-4 border text-left\">Statut</th>
            <th class=\"py-2 px-4 border text-left\">Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 86, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 87
            yield "            <tr class=\"hover:bg-gray-50\">
              <td class=\"py-2 px-4 border\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "dateCourse", [], "any", false, false, false, 88), "d/m/Y H:i"), "html", null, true);
            yield "</td>

              ";
            // line 91
            yield "              <td class=\"py-2 px-4 border\">
                <span class=\"geo\" data-coords=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "villeDepart", [], "any", false, false, false, 92), "html", null, true);
            yield "\">Chargement…</span>
              </td>
              <td class=\"py-2 px-4 border\">
                <span class=\"geo\" data-coords=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "villeArrivee", [], "any", false, false, false, 95), "html", null, true);
            yield "\">Chargement…</span>
              </td>

              <td class=\"py-2 px-4 border\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "distanceKm", [], "any", false, false, false, 98), "html", null, true);
            yield " km</td>
              <td class=\"py-2 px-4 border\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "montant", [], "any", false, false, false, 99), "html", null, true);
            yield " DNT</td>
              <td class=\"py-2 px-4 border\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "user", [], "any", false, false, false, 100), "name", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
              <td class=\"py-2 px-4 border\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
              <td class=\"py-2 px-4 border space-x-2\">
                ";
            // line 103
            $context["cs"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 103));
            // line 104
            yield "                ";
            if (((isset($context["cs"]) || array_key_exists("cs", $context) ? $context["cs"] : (function () { throw new RuntimeError('Variable "cs" does not exist.', 104, $this->source); })()) == "en attente")) {
                // line 105
                yield "                  <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                yield "\"
                        method=\"post\" class=\"inline-block\">
                    <button type=\"submit\"
                            class=\"font-bold py-2 px-3 rounded-lg shadow-md transition duration-200
                                   bg-green-500 hover:bg-green-600 text-white\">
                      Accepter
                    </button>
                  </form>
                  <form action=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_refuse", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\"
                        method=\"post\" class=\"inline-block\"
                        onsubmit=\"return confirm('Refuser cette course ?');\">
                    <button type=\"submit\"
                            class=\"font-bold py-2 px-3 rounded-lg shadow-md transition duration-200
                                   bg-red-500 hover:bg-red-600 text-white\">
                      Refuser
                    </button>
                  </form>
                ";
            } elseif ((            // line 122
(isset($context["cs"]) || array_key_exists("cs", $context) ? $context["cs"] : (function () { throw new RuntimeError('Variable "cs" does not exist.', 122, $this->source); })()) == "acceptée")) {
                // line 123
                yield "                  <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_start", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 123)]), "html", null, true);
                yield "\"
                        method=\"post\" class=\"inline-block\">
                    <button type=\"submit\"
                            class=\"font-bold py-2 px-3 rounded-lg shadow-md transition duration-200
                                   bg-indigo-600 hover:bg-indigo-700 text-white\">
                      Déclencher
                    </button>
                  </form>
                ";
            } elseif ((            // line 131
(isset($context["cs"]) || array_key_exists("cs", $context) ? $context["cs"] : (function () { throw new RuntimeError('Variable "cs" does not exist.', 131, $this->source); })()) == "en course")) {
                // line 132
                yield "                  <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_finish", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                yield "\"
                        method=\"post\" class=\"inline-block\">
                    <button type=\"submit\"
                            class=\"font-bold py-2 px-3 rounded-lg shadow-md transition duration-200
                                   bg-purple-700 hover:bg-purple-800 text-white\">
                      Terminer
                    </button>
                  </form>
                ";
            } else {
                // line 141
                yield "                  <span class=\"text-sm text-gray-600\">—</span>
                ";
            }
            // line 143
            yield "              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 145
        if (!$context['_iterated']) {
            // line 146
            yield "            <tr>
              <td colspan=\"8\" class=\"py-4 px-4 border text-center text-gray-500\">
                Aucune course trouvée.
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "        </tbody>
      </table>
    </div>

  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 160
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

        // line 161
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script>
    // --- Notifications pop-up ---
    const toggleBtn  = document.getElementById('notifToggle'),
          notifList  = document.getElementById('notifList'),
          notifItems = document.getElementById('notifItems'),
          notifCount = document.getElementById('notifCount');

    // stopPropagation dans la liste
    notifList.addEventListener('click', e => e.stopPropagation());

    async function toggleNotifications() {
      const hidden = notifList.classList.contains('hidden');
      if (hidden) {
        const resp = await fetch('";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_notifications_ajax");
        yield "');
        const courses = await resp.json();
        notifItems.innerHTML = '';
        if (courses.length) {
          courses.forEach(c => {
            const dateTxt = c.date ? `<span class=\"text-sm text-gray-500\">le \${c.date}</span>` : '';
            const li = document.createElement('li');
            li.className = `
              bg-white hover:bg-gray-50 rounded-lg p-4 flex space-x-3
              transition-shadow shadow-sm hover:shadow-md cursor-pointer
            `;
            li.innerHTML = `
              <svg class=\"h-6 w-6 text-indigo-500 flex-shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\"
                   viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                      d=\"M3 10l1.528 3.056a9 9 0 0016.944 0L22 10M5 10v6a7 7 0 0014 0v-6\"/>
              </svg>
              <div class=\"flex-1\">
                <p class=\"font-medium text-gray-800\">
                  De <span class=\"font-semibold\">\${c.depart}</span> à <span class=\"font-semibold\">\${c.arrivee}</span>
                </p>
                <div class=\"mt-1 flex items-center space-x-2\">
                  <span class=\"text-xs text-gray-500\">#\${c.id}</span>
                  \${dateTxt}
                </div>
              </div>`;
            notifItems.appendChild(li);
          });
          notifCount.textContent = courses.length;
          notifCount.classList.remove('hidden');
        } else {
          const li = document.createElement('li');
          li.className = 'px-4 py-3 text-gray-500 text-center';
          li.textContent = 'Aucune course en attente.';
          notifItems.appendChild(li);
          notifCount.classList.add('hidden');
        }
        notifList.classList.remove('hidden');
        requestAnimationFrame(() => {
          notifList.classList.replace('opacity-0','opacity-100');
          notifList.classList.replace('scale-95','scale-100');
        });
      } else {
        notifList.classList.replace('opacity-100','opacity-0');
        notifList.classList.replace('scale-100','scale-95');
        notifList.addEventListener('transitionend', () => notifList.classList.add('hidden'), { once: true });
      }
    }

    toggleBtn.addEventListener('click', e => {
      e.stopPropagation();
      toggleNotifications();
    });
    document.addEventListener('click', () => {
      if (!notifList.classList.contains('hidden')) toggleNotifications();
    });

    // --- Reverse-geocoding pour le tableau ---
    async function reverseGeocode(lat, lng) {
      const url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=\${lat}&lon=\${lng}`;
      try {
        const r = await fetch(url);
        if (!r.ok) throw '';
        const j = await r.json();
        const addr = j.address || {};
        const city = addr.city || addr.town || addr.village || addr.county || 'Lieu inconnu';
        const road = addr.road || 'Unnamed road';
        return `\${city} – \${road}`;
      } catch {
        return `\${lat}, \${lng}`;
      }
    }

    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('span.geo').forEach(async el => {
        const [lat, lng] = el.dataset.coords.split(',').map(s => s.trim());
        el.textContent = await reverseGeocode(lat, lng);
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
        return "taxiste/dashboard.html.twig";
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
        return array (  387 => 175,  369 => 161,  356 => 160,  339 => 152,  328 => 146,  326 => 145,  320 => 143,  316 => 141,  303 => 132,  301 => 131,  289 => 123,  287 => 122,  275 => 113,  263 => 105,  260 => 104,  258 => 103,  253 => 101,  249 => 100,  245 => 99,  241 => 98,  235 => 95,  229 => 92,  226 => 91,  221 => 88,  218 => 87,  213 => 86,  195 => 70,  190 => 66,  186 => 64,  182 => 62,  180 => 61,  177 => 60,  175 => 58,  171 => 56,  169 => 55,  164 => 53,  159 => 51,  154 => 49,  148 => 48,  143 => 45,  139 => 42,  111 => 15,  105 => 10,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/taxiste/dashboard.html.twig #}
{% extends 'basef.html.twig' %}

{% block title %}Tableau de bord Taxiste{% endblock %}

{% block body %}
<div class=\"bg-white shadow-lg rounded-2xl max-w-5xl mx-auto border border-gray-200\">

  {# En-tête #}
  <div class=\"px-6 py-4 rounded-t-2xl bg-indigo-900\">
    <h1 class=\"text-xl font-bold text-white\">Tableau de bord du Taxi</h1>
  </div>

  {# Cloche de notifications #}
  <div class=\"relative text-right p-4\">
    <button id=\"notifToggle\"
            class=\"relative inline-flex items-center p-2 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
      <svg class=\"h-6 w-6 text-gray-700\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\"
           viewBox=\"0 0 24 24\" stroke=\"currentColor\">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
              d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 
                 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 
                 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 
                 11-6 0v-1m6 0H9\"/>
      </svg>
      <span id=\"notifCount\"
            class=\"absolute -top-1 -right-1 inline-flex items-center justify-center
                   px-1.5 py-0.5 text-xs font-bold text-white bg-red-600 rounded-full hidden\">
        0
      </span>
    </button>

    <div id=\"notifList\"
         class=\"hidden origin-top-right absolute right-4 mt-2 w-80 max-h-96 overflow-y-auto
                bg-white border border-gray-200 rounded-2xl shadow-lg ring-1 ring-black
                ring-opacity-5 transition transform opacity-0 scale-95\">
      <ul id=\"notifItems\" class=\"divide-y divide-gray-100 p-1\"></ul>
    </div>
  </div>

  {# Contenu principal #}
  <div class=\"p-6\">

    {# Votre Taxi #}
    <h2 class=\"text-lg font-semibold\">Votre Taxi</h2>
    <div class=\"mb-4\">
      <p class=\"text-gray-800\">
        📌 <span class=\"font-medium\">{{ taxi.marque }} {{ taxi.modele }}</span>
        (<span class=\"text-sm text-gray-600\">{{ taxi.immatriculation }}</span>)
      </p>
      <p class=\"text-gray-600\">Statut : <span class=\"font-medium\">{{ taxi.statut }}</span></p>
    </div>
    <form action=\"{{ path('taxiste_taxi_change_status', {'id': taxi.id}) }}\"
          method=\"post\" class=\"mb-8 inline-block\">
      {% set st = taxi.statut|lower %}
      <button type=\"submit\"
              class=\"font-bold py-2 px-6 rounded-lg shadow-md transition duration-200
                     {{ st in ['disponible','en course'] 
                        ? 'bg-red-600 hover:bg-red-700 text-white' 
                        : 'bg-green-600 hover:bg-green-700 text-white' }}\">
        {% if st in ['disponible','en course'] %}
          Passer en indisponible
        {% else %}
          Passer en disponible
        {% endif %}
      </button>
    </form>

    {# Tableau des Courses #}
    <h2 class=\"text-lg font-semibold mb-2\">Vos Courses</h2>
    <div class=\"overflow-x-auto\">
      <table class=\"w-full border-collapse bg-white\">
        <thead>
          <tr class=\"bg-gray-100\">
            <th class=\"py-2 px-4 border text-left\">Date</th>
            <th class=\"py-2 px-4 border text-left\">Départ</th>
            <th class=\"py-2 px-4 border text-left\">Arrivée</th>
            <th class=\"py-2 px-4 border text-left\">Distance</th>
            <th class=\"py-2 px-4 border text-left\">Montant</th>
            <th class=\"py-2 px-4 border text-left\">Client</th>
            <th class=\"py-2 px-4 border text-left\">Statut</th>
            <th class=\"py-2 px-4 border text-left\">Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for course in courses %}
            <tr class=\"hover:bg-gray-50\">
              <td class=\"py-2 px-4 border\">{{ course.dateCourse|date('d/m/Y H:i') }}</td>

              {# on stocke coords \"lat, lng\" dans data-coords #}
              <td class=\"py-2 px-4 border\">
                <span class=\"geo\" data-coords=\"{{ course.villeDepart }}\">Chargement…</span>
              </td>
              <td class=\"py-2 px-4 border\">
                <span class=\"geo\" data-coords=\"{{ course.villeArrivee }}\">Chargement…</span>
              </td>

              <td class=\"py-2 px-4 border\">{{ course.distanceKm }} km</td>
              <td class=\"py-2 px-4 border\">{{ course.montant }} DNT</td>
              <td class=\"py-2 px-4 border\">{{ course.user.name }}</td>
              <td class=\"py-2 px-4 border\">{{ course.statut }}</td>
              <td class=\"py-2 px-4 border space-x-2\">
                {% set cs = course.statut|lower %}
                {% if cs == 'en attente' %}
                  <form action=\"{{ path('taxiste_course_accept', {'id': course.id}) }}\"
                        method=\"post\" class=\"inline-block\">
                    <button type=\"submit\"
                            class=\"font-bold py-2 px-3 rounded-lg shadow-md transition duration-200
                                   bg-green-500 hover:bg-green-600 text-white\">
                      Accepter
                    </button>
                  </form>
                  <form action=\"{{ path('taxiste_course_refuse', {'id': course.id}) }}\"
                        method=\"post\" class=\"inline-block\"
                        onsubmit=\"return confirm('Refuser cette course ?');\">
                    <button type=\"submit\"
                            class=\"font-bold py-2 px-3 rounded-lg shadow-md transition duration-200
                                   bg-red-500 hover:bg-red-600 text-white\">
                      Refuser
                    </button>
                  </form>
                {% elseif cs == 'acceptée' %}
                  <form action=\"{{ path('taxiste_course_start', {'id': course.id}) }}\"
                        method=\"post\" class=\"inline-block\">
                    <button type=\"submit\"
                            class=\"font-bold py-2 px-3 rounded-lg shadow-md transition duration-200
                                   bg-indigo-600 hover:bg-indigo-700 text-white\">
                      Déclencher
                    </button>
                  </form>
                {% elseif cs == 'en course' %}
                  <form action=\"{{ path('taxiste_course_finish', {'id': course.id}) }}\"
                        method=\"post\" class=\"inline-block\">
                    <button type=\"submit\"
                            class=\"font-bold py-2 px-3 rounded-lg shadow-md transition duration-200
                                   bg-purple-700 hover:bg-purple-800 text-white\">
                      Terminer
                    </button>
                  </form>
                {% else %}
                  <span class=\"text-sm text-gray-600\">—</span>
                {% endif %}
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"8\" class=\"py-4 px-4 border text-center text-gray-500\">
                Aucune course trouvée.
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>

  </div>
</div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script>
    // --- Notifications pop-up ---
    const toggleBtn  = document.getElementById('notifToggle'),
          notifList  = document.getElementById('notifList'),
          notifItems = document.getElementById('notifItems'),
          notifCount = document.getElementById('notifCount');

    // stopPropagation dans la liste
    notifList.addEventListener('click', e => e.stopPropagation());

    async function toggleNotifications() {
      const hidden = notifList.classList.contains('hidden');
      if (hidden) {
        const resp = await fetch('{{ path(\"taxiste_notifications_ajax\") }}');
        const courses = await resp.json();
        notifItems.innerHTML = '';
        if (courses.length) {
          courses.forEach(c => {
            const dateTxt = c.date ? `<span class=\"text-sm text-gray-500\">le \${c.date}</span>` : '';
            const li = document.createElement('li');
            li.className = `
              bg-white hover:bg-gray-50 rounded-lg p-4 flex space-x-3
              transition-shadow shadow-sm hover:shadow-md cursor-pointer
            `;
            li.innerHTML = `
              <svg class=\"h-6 w-6 text-indigo-500 flex-shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\"
                   viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                      d=\"M3 10l1.528 3.056a9 9 0 0016.944 0L22 10M5 10v6a7 7 0 0014 0v-6\"/>
              </svg>
              <div class=\"flex-1\">
                <p class=\"font-medium text-gray-800\">
                  De <span class=\"font-semibold\">\${c.depart}</span> à <span class=\"font-semibold\">\${c.arrivee}</span>
                </p>
                <div class=\"mt-1 flex items-center space-x-2\">
                  <span class=\"text-xs text-gray-500\">#\${c.id}</span>
                  \${dateTxt}
                </div>
              </div>`;
            notifItems.appendChild(li);
          });
          notifCount.textContent = courses.length;
          notifCount.classList.remove('hidden');
        } else {
          const li = document.createElement('li');
          li.className = 'px-4 py-3 text-gray-500 text-center';
          li.textContent = 'Aucune course en attente.';
          notifItems.appendChild(li);
          notifCount.classList.add('hidden');
        }
        notifList.classList.remove('hidden');
        requestAnimationFrame(() => {
          notifList.classList.replace('opacity-0','opacity-100');
          notifList.classList.replace('scale-95','scale-100');
        });
      } else {
        notifList.classList.replace('opacity-100','opacity-0');
        notifList.classList.replace('scale-100','scale-95');
        notifList.addEventListener('transitionend', () => notifList.classList.add('hidden'), { once: true });
      }
    }

    toggleBtn.addEventListener('click', e => {
      e.stopPropagation();
      toggleNotifications();
    });
    document.addEventListener('click', () => {
      if (!notifList.classList.contains('hidden')) toggleNotifications();
    });

    // --- Reverse-geocoding pour le tableau ---
    async function reverseGeocode(lat, lng) {
      const url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=\${lat}&lon=\${lng}`;
      try {
        const r = await fetch(url);
        if (!r.ok) throw '';
        const j = await r.json();
        const addr = j.address || {};
        const city = addr.city || addr.town || addr.village || addr.county || 'Lieu inconnu';
        const road = addr.road || 'Unnamed road';
        return `\${city} – \${road}`;
      } catch {
        return `\${lat}, \${lng}`;
      }
    }

    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('span.geo').forEach(async el => {
        const [lat, lng] = el.dataset.coords.split(',').map(s => s.trim());
        el.textContent = await reverseGeocode(lat, lng);
      });
    });
  </script>
{% endblock %}
", "taxiste/dashboard.html.twig", "C:\\Users\\moham\\Downloads\\UrbanLInkfinal\\templates\\taxiste\\dashboard.html.twig");
    }
}
