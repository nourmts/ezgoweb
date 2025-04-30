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

/* home/base.html.twig */
class __TwigTemplate_1017478ec1de73f45956d84a61fc6648 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/base.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/base.html.twig", 1);
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

        yield "EZGO";
        
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
        yield "    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">EZGO<span>Ride</span></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>

            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\"><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\" class=\"nav-link\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-link\">About</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pricing");
        yield "\" class=\"nav-link\">Pricing</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_our_car");
        yield "\" class=\"nav-link\">Our Cars</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        yield "\" class=\"nav-link\">Blog</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-link\">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    ";
        // line 27
        yield "    <div class=\"container mt-4\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["category"] => $context["messages"]) {
            // line 29
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 30
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['category'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "    </div>

    <!-- loader -->
    <div id=\"ftco-loader\" class=\"show fullscreen\">
        <svg class=\"circular\" width=\"48px\" height=\"48px\">
            <circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/>
            <circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/>
        </svg>
    </div>

    ";
        // line 48
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 49
        yield "
    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-4\">
                        <h2 class=\"ftco-heading-2\">About EzGo</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-4 ml-md-5\">
                        <h2 class=\"ftco-heading-2\">Information</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"py-2 d-block\">About</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Services</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Term and Conditions</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Best Price Guarantee</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Privacy &amp; Cookies Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-4\">
                        <h2 class=\"ftco-heading-2\">Customer Support</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-2 d-block\">FAQ</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Payment Option</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Booking Tips</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">How it works</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-4\">
                        <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
                        <div class=\"block-23 mb-3\">
                            <ul>
                                <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                                <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 
                        This template is made with <i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i> by 
                        <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/base.html.twig";
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
        return array (  270 => 48,  214 => 68,  193 => 49,  191 => 48,  179 => 38,  173 => 37,  161 => 31,  156 => 30,  151 => 29,  147 => 28,  144 => 27,  135 => 20,  131 => 19,  127 => 18,  123 => 17,  119 => 16,  115 => 15,  105 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}EZGO{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"{{ path('app_index') }}\">EZGO<span>Ride</span></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>

            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\"><a href=\"{{ path('app_index') }}\" class=\"nav-link\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_about') }}\" class=\"nav-link\">About</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_pricing') }}\" class=\"nav-link\">Pricing</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_our_car') }}\" class=\"nav-link\">Our Cars</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_blog') }}\" class=\"nav-link\">Blog</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_contact') }}\" class=\"nav-link\">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {# Messages Flash #}
    <div class=\"container mt-4\">
        {% for category, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ category }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    <!-- loader -->
    <div id=\"ftco-loader\" class=\"show fullscreen\">
        <svg class=\"circular\" width=\"48px\" height=\"48px\">
            <circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/>
            <circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/>
        </svg>
    </div>

    {% block content %}{% endblock %}

    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-4\">
                        <h2 class=\"ftco-heading-2\">About EzGo</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-4 ml-md-5\">
                        <h2 class=\"ftco-heading-2\">Information</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"{{ path('app_about') }}\" class=\"py-2 d-block\">About</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Services</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Term and Conditions</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Best Price Guarantee</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Privacy &amp; Cookies Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-4\">
                        <h2 class=\"ftco-heading-2\">Customer Support</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-2 d-block\">FAQ</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Payment Option</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Booking Tips</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">How it works</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-4\">
                        <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
                        <div class=\"block-23 mb-3\">
                            <ul>
                                <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                                <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 
                        This template is made with <i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i> by 
                        <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
{% endblock %}", "home/base.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\home\\base.html.twig");
    }
}
