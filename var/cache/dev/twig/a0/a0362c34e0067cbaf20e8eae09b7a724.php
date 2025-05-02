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

/* home/index.html.twig */
class __TwigTemplate_df88cdd6d46d3dfc73e546228f138721 extends Template
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
        // line 1
        return "baseh.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("baseh.html.twig", "home/index.html.twig", 1);
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

        yield "Hello LandingpageController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <style>
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 8rem 2rem 4rem;
            position: relative;
            overflow: hidden;
            max-width: 1400px;
            margin: 0 auto;
        }

        .hero-content {
            flex: 1;
            padding-right: 2rem;
            z-index: 2;
        }

        .hero-image {
            flex: 1;
            position: relative;
            height: 100%;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero h1 span {
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .subtitle {
            font-size: 1.2rem;
            color: var(--gray);
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .search-container {
            background: var(--glass);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 1.5rem;
            border: 1px solid var(--glass-border);
            box-shadow: var(--shadow);
            margin-top: 2rem;
        }

        .search-tabs {
            display: flex;
            margin-bottom: 1rem;
            border-bottom: 1px solid var(--glass-border);
        }

        .tab {
            padding: 0.8rem 1.5rem;
            background: transparent;
            border: none;
            color: var(--gray);
            font-weight: 600;
            cursor: pointer;
            position: relative;
            transition: var(--transition);
        }

        .tab.active {
            color: var(--light);
        }

        .tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--gradient);
            border-radius: 3px 3px 0 0;
        }

        .search-box {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .input-group {
            display: flex;
            align-items: center;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 0.8rem 1rem;
        }

        .input-group i {
            color: var(--primary-light);
            margin-right: 0.8rem;
        }

        .input-group input {
            background: transparent;
            border: none;
            color: var(--light);
            font-family: 'Poppins', sans-serif;
            width: 100%;
            outline: none;
        }

        .input-group input::placeholder {
            color: var(--gray);
        }

        .search-btn {
            grid-column: 1 / -1;
            background: var(--gradient);
            color: var(--light);
            border: none;
            padding: 1rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
        }

        .hero-image img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .element {
            position: absolute;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            animation: float 6s ease-in-out infinite;
        }

        .element.bus {
            background: rgba(67, 97, 238, 0.2);
            color: var(--primary);
            top: 20%;
            left: 10%;
        }

        .element.car {
            background: rgba(248, 37, 133, 0.2);
            color: var(--accent);
            top: 60%;
            left: 70%;
            animation-delay: 1s;
        }

        .element.train {
            background: rgba(72, 149, 239, 0.2);
            color: var(--primary-light);
            top: 40%;
            left: 50%;
            animation-delay: 2s;
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
            100% { transform: translateY(0) rotate(0deg); }
        }
    </style>

    <section class=\"hero\">
        <div class=\"hero-content\">
            <h1>Smart Mobility <span>Reinvented</span></h1>
            <p class=\"subtitle\">Seamlessly combine carpooling with public transport for your daily commute. Save money, reduce traffic, and help the environment.</p>
            <div class=\"search-container\">
                <div class=\"search-tabs\">
                    <button class=\"tab active\" data-tab=\"carpool\">Find a Ride</button>
                </div>
                <div class=\"search-box\">
                    <div class=\"input-group\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        <input type=\"text\" placeholder=\"From...\">
                    </div>
                    <div class=\"input-group\">
                        <i class=\"fas fa-flag\"></i>
                        <input type=\"text\" placeholder=\"To...\">
                    </div>
                    <div class=\"input-group\">
                        <i class=\"fas fa-calendar\"></i>
                        <input type=\"text\" placeholder=\"When...\">
                    </div>
                    <button class=\"search-btn\">Search Routes</button>
                </div>
            </div>
        </div>
        <div class=\"hero-image\">
            <img src=\"https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80\" alt=\"Modern transportation\">
            <div class=\"floating-elements\">
                <div class=\"element bus\"><i class=\"fas fa-bus\"></i></div>
                <div class=\"element car\"><i class=\"fas fa-car\"></i></div>
                <div class=\"element train\"><i class=\"fas fa-train\"></i></div>
            </div>
        </div>
    </section>

    <section class=\"benefits\">
        <div class=\"section-header\">
            <h2>Why Choose UrbanLink</h2>
            <p>We're revolutionizing urban mobility with smart solutions</p>
        </div>
        <div class=\"benefits-grid\">
            <div class=\"benefit-card\">
                <div class=\"icon-container\">
                    <i class=\"fas fa-leaf\"></i>
                </div>
                <h3>Eco-Friendly</h3>
                <p>Reduce your carbon footprint by sharing rides and using public transport.</p>
            </div>
            <div class=\"benefit-card\">
                <div class=\"icon-container\">
                    <i class=\"fas fa-wallet\"></i>
                </div>
                <h3>Cost Effective</h3>
                <p>Save up to 60% compared to driving alone or using ride-hailing services.</p>
            </div>
            <div class=\"benefit-card\">
                <div class=\"icon-container\">
                    <i class=\"fas fa-clock\"></i>
                </div>
                <h3>Time Saving</h3>
                <p>Optimized routes combine carpool segments with the fastest transit options.</p>
            </div>
            <div class=\"benefit-card\">
                <div class=\"icon-container\">
                    <i class=\"fas fa-users\"></i>
                </div>
                <h3>Community</h3>
                <p>Connect with reliable commuters and build your trusted network.</p>
            </div>
        </div>
    </section>

    <section class=\"how-it-works\">
        <div class=\"section-header\">
            <h2>How It Works</h2>
            <p>Get started in just a few simple steps</p>
        </div>
        <div class=\"steps-container\">
            <div class=\"step\">
                <div class=\"step-number\">1</div>
                <div class=\"step-content\">
                    <h3>Create Your Profile</h3>
                    <p>Set up your account with your preferences and regular routes.</p>
                </div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">2</div>
                <div class=\"step-content\">
                    <h3>Find or Offer a Ride</h3>
                    <p>Search for available carpools or list your own vehicle.</p>
                </div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">3</div>
                <div class=\"step-content\">
                    <h3>Plan Your Journey</h3>
                    <p>Combine carpool segments with public transport for the best route.</p>
                </div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">4</div>
                <div class=\"step-content\">
                    <h3>Travel Smart</h3>
                    <p>Enjoy your commute while saving money and the environment.</p>
                </div>
            </div>
        </div>
    </section>

    <section class=\"app-showcase\">
        <div class=\"app-content\">
            <h2>Download Our Mobile App</h2>
            <p>Access all UrbanLink features on the go. Get real-time updates, notifications, and seamless payment options.</p>
            <div class=\"app-badges\">
                <a href=\"#\" class=\"app-badge\">
                    <i class=\"fab fa-apple\"></i>
                    <div>
                        <span>Download on the</span>
                        <span>App Store</span>
                    </div>
                </a>
                <a href=\"#\" class=\"app-badge\">
                    <i class=\"fab fa-google-play\"></i>
                    <div>
                        <span>Get it on</span>
                        <span>Google Play</span>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"app-image\">
            <img src=\"https://images.unsplash.com/photo-1558655146-d09347e92766?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80\" alt=\"Mobile app\">
        </div>
    </section>

    <section class=\"testimonials\">
        <div class=\"section-header\">
            <h2>What Our Users Say</h2>
            <p>Join thousands of happy commuters</p>
        </div>
        <div class=\"testimonial-cards\">
            <div class=\"testimonial-card\">
                <div class=\"rating\">
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                </div>
                <p>\"UrbanLink cut my commute costs in half  I've met some great people along the way!\"</p>
                <div class=\"user\">
                    <img src=\"https://randomuser.me/api/portraits/women/43.jpg\" alt=\"Sarah J.\">
                    <div>
                        <h4>Sarah J.</h4>
                        <span>Daily Commuter</span>
                    </div>
                </div>
            </div>
            <div class=\"testimonial-card\">
                <div class=\"rating\">
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                </div>
                <p>\"The route optimization is amazing. I get to work faster than when I drove myself!\"</p>
                <div class=\"user\">
                    <img src=\"https://randomuser.me/api/portraits/men/32.jpg\" alt=\"Michael T.\">
                    <div>
                        <h4>Michael T.</h4>
                        <span>UrbanLink Member</span>
                    </div>
                </div>
            </div>
            <div class=\"testimonial-card\">
                <div class=\"rating\">
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star-half-alt\"></i>
                </div>
                <p>\"As someone who cares about the environment, UrbanLink aligns perfectly with my values.\"</p>
                <div class=\"user\">
                    <img src=\"https://randomuser.me/api/portraits/women/65.jpg\" alt=\"Priya K.\">
                    <div>
                        <h4>Priya K.</h4>
                        <span>Environmentalist</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"cta-section\">
        <div class=\"cta-content\">
            <h2>Ready to Transform Your Commute?</h2>
            <p>Join thousands of smart commuters today and experience the future of urban mobility.</p>
            <div class=\"cta-buttons\">
                <a href=\"#\" class=\"btn-primary\">Sign Up Free</a>
                <a href=\"#\" class=\"btn-secondary\">Learn More</a>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 408
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

        // line 409
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Search tabs functionality
        const tabs = document.querySelectorAll('.tab');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });

        // Animate elements when they come into view
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.benefit-card, .step, .testimonial-card');

            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (elementPosition < windowHeight - 100) {
                    element.classList.add('animate');
                }
            });
        };

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
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
        return "home/index.html.twig";
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
        return array (  525 => 409,  512 => 408,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseh.html.twig' %}

{% block title %}Hello LandingpageController!{% endblock %}

{% block body %}
    <style>
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 8rem 2rem 4rem;
            position: relative;
            overflow: hidden;
            max-width: 1400px;
            margin: 0 auto;
        }

        .hero-content {
            flex: 1;
            padding-right: 2rem;
            z-index: 2;
        }

        .hero-image {
            flex: 1;
            position: relative;
            height: 100%;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero h1 span {
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .subtitle {
            font-size: 1.2rem;
            color: var(--gray);
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .search-container {
            background: var(--glass);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 1.5rem;
            border: 1px solid var(--glass-border);
            box-shadow: var(--shadow);
            margin-top: 2rem;
        }

        .search-tabs {
            display: flex;
            margin-bottom: 1rem;
            border-bottom: 1px solid var(--glass-border);
        }

        .tab {
            padding: 0.8rem 1.5rem;
            background: transparent;
            border: none;
            color: var(--gray);
            font-weight: 600;
            cursor: pointer;
            position: relative;
            transition: var(--transition);
        }

        .tab.active {
            color: var(--light);
        }

        .tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--gradient);
            border-radius: 3px 3px 0 0;
        }

        .search-box {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .input-group {
            display: flex;
            align-items: center;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 0.8rem 1rem;
        }

        .input-group i {
            color: var(--primary-light);
            margin-right: 0.8rem;
        }

        .input-group input {
            background: transparent;
            border: none;
            color: var(--light);
            font-family: 'Poppins', sans-serif;
            width: 100%;
            outline: none;
        }

        .input-group input::placeholder {
            color: var(--gray);
        }

        .search-btn {
            grid-column: 1 / -1;
            background: var(--gradient);
            color: var(--light);
            border: none;
            padding: 1rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
        }

        .hero-image img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .element {
            position: absolute;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            animation: float 6s ease-in-out infinite;
        }

        .element.bus {
            background: rgba(67, 97, 238, 0.2);
            color: var(--primary);
            top: 20%;
            left: 10%;
        }

        .element.car {
            background: rgba(248, 37, 133, 0.2);
            color: var(--accent);
            top: 60%;
            left: 70%;
            animation-delay: 1s;
        }

        .element.train {
            background: rgba(72, 149, 239, 0.2);
            color: var(--primary-light);
            top: 40%;
            left: 50%;
            animation-delay: 2s;
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
            100% { transform: translateY(0) rotate(0deg); }
        }
    </style>

    <section class=\"hero\">
        <div class=\"hero-content\">
            <h1>Smart Mobility <span>Reinvented</span></h1>
            <p class=\"subtitle\">Seamlessly combine carpooling with public transport for your daily commute. Save money, reduce traffic, and help the environment.</p>
            <div class=\"search-container\">
                <div class=\"search-tabs\">
                    <button class=\"tab active\" data-tab=\"carpool\">Find a Ride</button>
                </div>
                <div class=\"search-box\">
                    <div class=\"input-group\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        <input type=\"text\" placeholder=\"From...\">
                    </div>
                    <div class=\"input-group\">
                        <i class=\"fas fa-flag\"></i>
                        <input type=\"text\" placeholder=\"To...\">
                    </div>
                    <div class=\"input-group\">
                        <i class=\"fas fa-calendar\"></i>
                        <input type=\"text\" placeholder=\"When...\">
                    </div>
                    <button class=\"search-btn\">Search Routes</button>
                </div>
            </div>
        </div>
        <div class=\"hero-image\">
            <img src=\"https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80\" alt=\"Modern transportation\">
            <div class=\"floating-elements\">
                <div class=\"element bus\"><i class=\"fas fa-bus\"></i></div>
                <div class=\"element car\"><i class=\"fas fa-car\"></i></div>
                <div class=\"element train\"><i class=\"fas fa-train\"></i></div>
            </div>
        </div>
    </section>

    <section class=\"benefits\">
        <div class=\"section-header\">
            <h2>Why Choose UrbanLink</h2>
            <p>We're revolutionizing urban mobility with smart solutions</p>
        </div>
        <div class=\"benefits-grid\">
            <div class=\"benefit-card\">
                <div class=\"icon-container\">
                    <i class=\"fas fa-leaf\"></i>
                </div>
                <h3>Eco-Friendly</h3>
                <p>Reduce your carbon footprint by sharing rides and using public transport.</p>
            </div>
            <div class=\"benefit-card\">
                <div class=\"icon-container\">
                    <i class=\"fas fa-wallet\"></i>
                </div>
                <h3>Cost Effective</h3>
                <p>Save up to 60% compared to driving alone or using ride-hailing services.</p>
            </div>
            <div class=\"benefit-card\">
                <div class=\"icon-container\">
                    <i class=\"fas fa-clock\"></i>
                </div>
                <h3>Time Saving</h3>
                <p>Optimized routes combine carpool segments with the fastest transit options.</p>
            </div>
            <div class=\"benefit-card\">
                <div class=\"icon-container\">
                    <i class=\"fas fa-users\"></i>
                </div>
                <h3>Community</h3>
                <p>Connect with reliable commuters and build your trusted network.</p>
            </div>
        </div>
    </section>

    <section class=\"how-it-works\">
        <div class=\"section-header\">
            <h2>How It Works</h2>
            <p>Get started in just a few simple steps</p>
        </div>
        <div class=\"steps-container\">
            <div class=\"step\">
                <div class=\"step-number\">1</div>
                <div class=\"step-content\">
                    <h3>Create Your Profile</h3>
                    <p>Set up your account with your preferences and regular routes.</p>
                </div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">2</div>
                <div class=\"step-content\">
                    <h3>Find or Offer a Ride</h3>
                    <p>Search for available carpools or list your own vehicle.</p>
                </div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">3</div>
                <div class=\"step-content\">
                    <h3>Plan Your Journey</h3>
                    <p>Combine carpool segments with public transport for the best route.</p>
                </div>
            </div>
            <div class=\"step\">
                <div class=\"step-number\">4</div>
                <div class=\"step-content\">
                    <h3>Travel Smart</h3>
                    <p>Enjoy your commute while saving money and the environment.</p>
                </div>
            </div>
        </div>
    </section>

    <section class=\"app-showcase\">
        <div class=\"app-content\">
            <h2>Download Our Mobile App</h2>
            <p>Access all UrbanLink features on the go. Get real-time updates, notifications, and seamless payment options.</p>
            <div class=\"app-badges\">
                <a href=\"#\" class=\"app-badge\">
                    <i class=\"fab fa-apple\"></i>
                    <div>
                        <span>Download on the</span>
                        <span>App Store</span>
                    </div>
                </a>
                <a href=\"#\" class=\"app-badge\">
                    <i class=\"fab fa-google-play\"></i>
                    <div>
                        <span>Get it on</span>
                        <span>Google Play</span>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"app-image\">
            <img src=\"https://images.unsplash.com/photo-1558655146-d09347e92766?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80\" alt=\"Mobile app\">
        </div>
    </section>

    <section class=\"testimonials\">
        <div class=\"section-header\">
            <h2>What Our Users Say</h2>
            <p>Join thousands of happy commuters</p>
        </div>
        <div class=\"testimonial-cards\">
            <div class=\"testimonial-card\">
                <div class=\"rating\">
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                </div>
                <p>\"UrbanLink cut my commute costs in half  I've met some great people along the way!\"</p>
                <div class=\"user\">
                    <img src=\"https://randomuser.me/api/portraits/women/43.jpg\" alt=\"Sarah J.\">
                    <div>
                        <h4>Sarah J.</h4>
                        <span>Daily Commuter</span>
                    </div>
                </div>
            </div>
            <div class=\"testimonial-card\">
                <div class=\"rating\">
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                </div>
                <p>\"The route optimization is amazing. I get to work faster than when I drove myself!\"</p>
                <div class=\"user\">
                    <img src=\"https://randomuser.me/api/portraits/men/32.jpg\" alt=\"Michael T.\">
                    <div>
                        <h4>Michael T.</h4>
                        <span>UrbanLink Member</span>
                    </div>
                </div>
            </div>
            <div class=\"testimonial-card\">
                <div class=\"rating\">
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star-half-alt\"></i>
                </div>
                <p>\"As someone who cares about the environment, UrbanLink aligns perfectly with my values.\"</p>
                <div class=\"user\">
                    <img src=\"https://randomuser.me/api/portraits/women/65.jpg\" alt=\"Priya K.\">
                    <div>
                        <h4>Priya K.</h4>
                        <span>Environmentalist</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"cta-section\">
        <div class=\"cta-content\">
            <h2>Ready to Transform Your Commute?</h2>
            <p>Join thousands of smart commuters today and experience the future of urban mobility.</p>
            <div class=\"cta-buttons\">
                <a href=\"#\" class=\"btn-primary\">Sign Up Free</a>
                <a href=\"#\" class=\"btn-secondary\">Learn More</a>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Search tabs functionality
        const tabs = document.querySelectorAll('.tab');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });

        // Animate elements when they come into view
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.benefit-card, .step, .testimonial-card');

            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (elementPosition < windowHeight - 100) {
                    element.classList.add('animate');
                }
            });
        };

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
{% endblock %}", "home/index.html.twig", "C:\\Users\\sbiss\\OneDrive - ESPRIT\\Desktop\\GitHub\\UrbanLink_Symfony2\\UrbanLink_Main\\templates\\home\\index.html.twig");
    }
}
