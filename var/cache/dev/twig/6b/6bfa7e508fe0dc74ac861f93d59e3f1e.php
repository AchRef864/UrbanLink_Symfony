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

/* sidebar.html.twig */
class __TwigTemplate_2ee724ac8fe0cdfbc5af289c0de8cb3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 2
        yield "
<aside class=\"fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0\" aria-expanded=\"false\">
    <div class=\"h-19\">
        <i class=\"absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden\" sidenav-close></i>
        <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700\" href=\"https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html\" target=\"_blank\">
            <img src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct-dark.png"), "html", null, true);
        yield "\" class=\"inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8\" alt=\"main_logo\" />
            <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct.png"), "html", null, true);
        yield "\" class=\"hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8\" alt=\"main_logo\" />
            <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">Argon Dashboard 2</span>
        </a>
    </div>

    <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />

    <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
        <ul class=\"flex flex-col pl-0 mb-0\">
            <li class=\"mt-0.5 w-full\">
                <a class=\"py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">
                    <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                        <i class=\"relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2\"></i>
                    </div>
                    <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Dashboard</span>
                </a>
            </li>

            <!-- Add other sidebar items here -->
        </ul>
    </div>

    <div class=\"mx-4\">
        <!-- load phantom colors for card after: -->
        <p class=\"invisible hidden text-gray-800 text-red-500 text-red-600 text-blue-500 bg-gray-500/30 bg-cyan-500/30 bg-emerald-500/30 bg-orange-500/30 bg-red-500/30 after:bg-gradient-to-tl after:from-zinc-800 after:to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 after:from-blue-700 after:to-cyan-500 after:from-orange-500 after:to-yellow-500 after:from-green-600 after:to-lime-400 after:from-red-600 after:to-orange-600 after:from-slate-600 after:to-slate-300 text-emerald-500 text-cyan-500 text-slate-400\"></p>
        <div class=\"relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border\" sidenav-card>
            <img class=\"w-1/2 mx-auto\" src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/illustrations/icon-documentation.svg"), "html", null, true);
        yield "\" alt=\"sidebar illustrations\" />
            <div class=\"flex-auto w-full p-4 pt-0 text-center\">
                <div class=\"transition-all duration-200 ease-nav-brand\">
                    <h6 class=\"mb-0 dark:text-white text-slate-700\">Need help?</h6>
                    <p class=\"mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60\">Please check our docs</p>
                </div>
            </div>
        </div>
        <a href=\"https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/\" target=\"_blank\" class=\"inline-block w-full px-8 py-2 mb-4 text-xs font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px\">Documentation</a>
        <!-- pro btn  -->
        <a class=\"inline-block w-full px-8 py-2 text-xs font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md select-none bg-150 bg-x-25 hover:shadow-xs hover:-translate-y-px\" href=\"https://www.creative-tim.com/product/argon-dashboard-pro-tailwind?ref=sidebarfree\" target=\"_blank\">Upgrade to pro</a>
    </div>
</aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sidebar.html.twig";
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
        return array (  91 => 34,  72 => 18,  59 => 8,  55 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/sidebar.html.twig #}

<aside class=\"fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0\" aria-expanded=\"false\">
    <div class=\"h-19\">
        <i class=\"absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden\" sidenav-close></i>
        <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700\" href=\"https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html\" target=\"_blank\">
            <img src=\"{{ asset('assets/img/logo-ct-dark.png') }}\" class=\"inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8\" alt=\"main_logo\" />
            <img src=\"{{ asset('assets/img/logo-ct.png') }}\" class=\"hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8\" alt=\"main_logo\" />
            <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">Argon Dashboard 2</span>
        </a>
    </div>

    <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />

    <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
        <ul class=\"flex flex-col pl-0 mb-0\">
            <li class=\"mt-0.5 w-full\">
                <a class=\"py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"{{ path('dashboard') }}\">
                    <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                        <i class=\"relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2\"></i>
                    </div>
                    <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Dashboard</span>
                </a>
            </li>

            <!-- Add other sidebar items here -->
        </ul>
    </div>

    <div class=\"mx-4\">
        <!-- load phantom colors for card after: -->
        <p class=\"invisible hidden text-gray-800 text-red-500 text-red-600 text-blue-500 bg-gray-500/30 bg-cyan-500/30 bg-emerald-500/30 bg-orange-500/30 bg-red-500/30 after:bg-gradient-to-tl after:from-zinc-800 after:to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 after:from-blue-700 after:to-cyan-500 after:from-orange-500 after:to-yellow-500 after:from-green-600 after:to-lime-400 after:from-red-600 after:to-orange-600 after:from-slate-600 after:to-slate-300 text-emerald-500 text-cyan-500 text-slate-400\"></p>
        <div class=\"relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border\" sidenav-card>
            <img class=\"w-1/2 mx-auto\" src=\"{{ asset('assets/img/illustrations/icon-documentation.svg') }}\" alt=\"sidebar illustrations\" />
            <div class=\"flex-auto w-full p-4 pt-0 text-center\">
                <div class=\"transition-all duration-200 ease-nav-brand\">
                    <h6 class=\"mb-0 dark:text-white text-slate-700\">Need help?</h6>
                    <p class=\"mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60\">Please check our docs</p>
                </div>
            </div>
        </div>
        <a href=\"https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/\" target=\"_blank\" class=\"inline-block w-full px-8 py-2 mb-4 text-xs font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px\">Documentation</a>
        <!-- pro btn  -->
        <a class=\"inline-block w-full px-8 py-2 text-xs font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md select-none bg-150 bg-x-25 hover:shadow-xs hover:-translate-y-px\" href=\"https://www.creative-tim.com/product/argon-dashboard-pro-tailwind?ref=sidebarfree\" target=\"_blank\">Upgrade to pro</a>
    </div>
</aside>", "sidebar.html.twig", "C:\\Users\\skonb\\Desktop\\symfony\\my_project_directory\\templates\\sidebar.html.twig");
    }
}
