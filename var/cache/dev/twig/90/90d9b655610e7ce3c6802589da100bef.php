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

/* contact/index.html.twig */
class __TwigTemplate_7db510e3b1bcdbd03fa2e1a2bbe43e4d extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "contact/index.html.twig", 1);
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

        yield "Contactez-nous - EzGo";
        
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
    <style>
        .contact-section {
            padding: 100px 0;
            background-color: #f8f9fa;
        }
        .contact-info {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .contact-info i {
            color: #ff6b35;
            font-size: 24px;
            margin-bottom: 15px;
        }
        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 12px;
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #ff6b35;
            box-shadow: none;
        }
        .btn-submit {
            background: #ff6b35;
            border: none;
            padding: 12px 30px;
            color: white;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .btn-submit:hover {
            background: #ff8c5a;
            transform: translateY(-2px);
        }
        .section-title {
            margin-bottom: 50px;
            text-align: center;
        }
        .section-title h2 {
            color: #333;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .section-title p {
            color: #666;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
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

        // line 68
        yield "    <div class=\"contact-section\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Contactez-nous</h2>
                <p>Nous sommes là pour répondre à toutes vos questions</p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"contact-info\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        <h4>Notre adresse</h4>
                        <p>123 Rue de la République<br>Tunis, Tunisie</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"contact-info\">
                        <i class=\"fas fa-phone\"></i>
                        <h4>Téléphone</h4>
                        <p>+216 71 234 567<br>+216 71 234 568</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"contact-info\">
                        <i class=\"fas fa-envelope\"></i>
                        <h4>Email</h4>
                        <p>contact@ezgo.tn<br>info@ezgo.tn</p>
                    </div>
                </div>
            </div>
            <div class=\"row mt-5\">
                <div class=\"col-lg-8 mx-auto\">
                    <div class=\"contact-form\">
                        <form>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom\" required>
                                </div>
                                <div class=\"col-md-6\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Votre email\" required>
                                </div>
                            </div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Sujet\">
                            <textarea class=\"form-control\" rows=\"5\" placeholder=\"Votre message\" required></textarea>
                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-submit\">Envoyer le message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "contact/index.html.twig";
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
        return array (  186 => 68,  173 => 67,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Contactez-nous - EzGo{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .contact-section {
            padding: 100px 0;
            background-color: #f8f9fa;
        }
        .contact-info {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .contact-info i {
            color: #ff6b35;
            font-size: 24px;
            margin-bottom: 15px;
        }
        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 12px;
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #ff6b35;
            box-shadow: none;
        }
        .btn-submit {
            background: #ff6b35;
            border: none;
            padding: 12px 30px;
            color: white;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .btn-submit:hover {
            background: #ff8c5a;
            transform: translateY(-2px);
        }
        .section-title {
            margin-bottom: 50px;
            text-align: center;
        }
        .section-title h2 {
            color: #333;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .section-title p {
            color: #666;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"contact-section\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Contactez-nous</h2>
                <p>Nous sommes là pour répondre à toutes vos questions</p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"contact-info\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        <h4>Notre adresse</h4>
                        <p>123 Rue de la République<br>Tunis, Tunisie</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"contact-info\">
                        <i class=\"fas fa-phone\"></i>
                        <h4>Téléphone</h4>
                        <p>+216 71 234 567<br>+216 71 234 568</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"contact-info\">
                        <i class=\"fas fa-envelope\"></i>
                        <h4>Email</h4>
                        <p>contact@ezgo.tn<br>info@ezgo.tn</p>
                    </div>
                </div>
            </div>
            <div class=\"row mt-5\">
                <div class=\"col-lg-8 mx-auto\">
                    <div class=\"contact-form\">
                        <form>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom\" required>
                                </div>
                                <div class=\"col-md-6\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Votre email\" required>
                                </div>
                            </div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Sujet\">
                            <textarea class=\"form-control\" rows=\"5\" placeholder=\"Votre message\" required></textarea>
                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-submit\">Envoyer le message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "contact/index.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\contact\\index.html.twig");
    }
}
