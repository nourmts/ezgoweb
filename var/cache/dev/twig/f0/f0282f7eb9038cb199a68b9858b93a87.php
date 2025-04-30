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

/* location/success.html.twig */
class __TwigTemplate_558effe085cae914ad69e2cb3b74727d extends Template
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
        return "fronte/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/success.html.twig"));

        $this->parent = $this->loadTemplate("fronte/base.html.twig", "location/success.html.twig", 1);
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

        yield "Location Confirmée";
        
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
    <style>
        .success-container {
            max-width: 800px;
            margin: 4rem auto;
            padding: 2rem;
            text-align: center;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .success-icon {
            color: #28a745;
            font-size: 4rem;
            margin-bottom: 1.5rem;
        }
        .success-title {
            color: #2d3436;
            font-size: 2rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }
        .success-message {
            color: #6c757d;
            font-size: 1.1rem;
            margin-bottom: 2rem;
            line-height: 1.6;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        .success-message i {
            color: #ff6b35;
        }
        .location-details {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 2rem 0;
            text-align: left;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            padding: 0.5rem 0;
            border-bottom: 1px solid #dee2e6;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            color: #6c757d;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .detail-label i {
            color: #ff6b35;
            width: 20px;
        }
        .detail-value {
            color: #2d3436;
            font-weight: 600;
        }
        .contact-section {
            background: #fff3ef;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 2rem 0;
            text-align: left;
            border-left: 4px solid #ff6b35;
        }
        .contact-title {
            color: #ff6b35;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .contact-info {
            display: grid;
            gap: 1rem;
        }
        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .contact-item i {
            color: #ff6b35;
            width: 20px;
        }
        .btn-group {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }
        .btn-locations {
            background: #ff6b35;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-locations:hover {
            background: #ff8c5a;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
        .btn-partenaires {
            background: #6c757d;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-partenaires:hover {
            background: #5a6268;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 148
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

        // line 149
        yield "    <div class=\"success-container\">
        <i class=\"fas fa-check-circle success-icon\"></i>
        <h1 class=\"success-title\">Location Confirmée avec Succès!</h1>
        <p class=\"success-message\">
            <i class=\"fas fa-info-circle\"></i>
            Vous pouvez contacter votre agence pour plus des informations
        </p>

        <div class=\"contact-section\">
            <h3 class=\"contact-title\">
                <i class=\"fas fa-address-card\"></i>
                Informations de l'agence
            </h3>
            <div class=\"contact-info\">
                <div class=\"contact-item\">
                    <i class=\"fas fa-building\"></i>
                    <strong>Agence:</strong> ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 165, $this->source); })()), "partenaire", [], "any", false, false, false, 165), "nom", [], "any", false, false, false, 165), "html", null, true);
        yield "
                </div>
                <div class=\"contact-item\">
                    <i class=\"fas fa-phone\"></i>
                    <strong>Téléphone:</strong> ";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 169, $this->source); })()), "partenaire", [], "any", false, false, false, 169), "telephone", [], "any", false, false, false, 169), "html", null, true);
        yield "
                </div>
                <div class=\"contact-item\">
                    <i class=\"fas fa-envelope\"></i>
                    <strong>Email:</strong> ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 173, $this->source); })()), "partenaire", [], "any", false, false, false, 173), "email", [], "any", false, false, false, 173), "html", null, true);
        yield "
                </div>
                <div class=\"contact-item\">
                    <i class=\"fas fa-tools\"></i>
                    <strong>Spécialité:</strong> ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 177, $this->source); })()), "partenaire", [], "any", false, false, false, 177), "specialite", [], "any", false, false, false, 177), "html", null, true);
        yield "
                </div>
            </div>
        </div>

        <div class=\"location-details\">
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"far fa-calendar-alt\"></i>
                    Dates:
                </span>
                <span class=\"detail-value\">Du ";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 188, $this->source); })()), "dateDebut", [], "any", false, false, false, 188), "d/m/Y"), "html", null, true);
        yield " au ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 188, $this->source); })()), "dateFin", [], "any", false, false, false, 188), "d/m/Y"), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-cogs\"></i>
                    Service:
                </span>
                <span class=\"detail-value\">";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 195, $this->source); })()), "service", [], "any", false, false, false, 195), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-car\"></i>
                    Marque:
                </span>
                <span class=\"detail-value\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 202, $this->source); })()), "marque", [], "any", false, false, false, 202), "html", null, true);
        yield "</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-tag\"></i>
                    Prix Total:
                </span>
                <span class=\"detail-value\">";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 209, $this->source); })()), "prixTotal", [], "any", false, false, false, 209), "html", null, true);
        yield " DT</span>
            </div>
        </div>

        <div class=\"btn-group\">
            <a href=\"";
        // line 214
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire_front");
        yield "\" class=\"btn-partenaires\">
                <i class=\"fas fa-arrow-left\"></i>
                <span>Retour aux partenaires</span>
            </a>
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
        return "location/success.html.twig";
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
        return array (  360 => 214,  352 => 209,  342 => 202,  332 => 195,  320 => 188,  306 => 177,  299 => 173,  292 => 169,  285 => 165,  267 => 149,  254 => 148,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'fronte/base.html.twig' %}

{% block title %}Location Confirmée{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
    <style>
        .success-container {
            max-width: 800px;
            margin: 4rem auto;
            padding: 2rem;
            text-align: center;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .success-icon {
            color: #28a745;
            font-size: 4rem;
            margin-bottom: 1.5rem;
        }
        .success-title {
            color: #2d3436;
            font-size: 2rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }
        .success-message {
            color: #6c757d;
            font-size: 1.1rem;
            margin-bottom: 2rem;
            line-height: 1.6;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        .success-message i {
            color: #ff6b35;
        }
        .location-details {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 2rem 0;
            text-align: left;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            padding: 0.5rem 0;
            border-bottom: 1px solid #dee2e6;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            color: #6c757d;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .detail-label i {
            color: #ff6b35;
            width: 20px;
        }
        .detail-value {
            color: #2d3436;
            font-weight: 600;
        }
        .contact-section {
            background: #fff3ef;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 2rem 0;
            text-align: left;
            border-left: 4px solid #ff6b35;
        }
        .contact-title {
            color: #ff6b35;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .contact-info {
            display: grid;
            gap: 1rem;
        }
        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .contact-item i {
            color: #ff6b35;
            width: 20px;
        }
        .btn-group {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }
        .btn-locations {
            background: #ff6b35;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-locations:hover {
            background: #ff8c5a;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
        .btn-partenaires {
            background: #6c757d;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-partenaires:hover {
            background: #5a6268;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"success-container\">
        <i class=\"fas fa-check-circle success-icon\"></i>
        <h1 class=\"success-title\">Location Confirmée avec Succès!</h1>
        <p class=\"success-message\">
            <i class=\"fas fa-info-circle\"></i>
            Vous pouvez contacter votre agence pour plus des informations
        </p>

        <div class=\"contact-section\">
            <h3 class=\"contact-title\">
                <i class=\"fas fa-address-card\"></i>
                Informations de l'agence
            </h3>
            <div class=\"contact-info\">
                <div class=\"contact-item\">
                    <i class=\"fas fa-building\"></i>
                    <strong>Agence:</strong> {{ location.partenaire.nom }}
                </div>
                <div class=\"contact-item\">
                    <i class=\"fas fa-phone\"></i>
                    <strong>Téléphone:</strong> {{ location.partenaire.telephone }}
                </div>
                <div class=\"contact-item\">
                    <i class=\"fas fa-envelope\"></i>
                    <strong>Email:</strong> {{ location.partenaire.email }}
                </div>
                <div class=\"contact-item\">
                    <i class=\"fas fa-tools\"></i>
                    <strong>Spécialité:</strong> {{ location.partenaire.specialite }}
                </div>
            </div>
        </div>

        <div class=\"location-details\">
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"far fa-calendar-alt\"></i>
                    Dates:
                </span>
                <span class=\"detail-value\">Du {{ location.dateDebut|date('d/m/Y') }} au {{ location.dateFin|date('d/m/Y') }}</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-cogs\"></i>
                    Service:
                </span>
                <span class=\"detail-value\">{{ location.service }}</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-car\"></i>
                    Marque:
                </span>
                <span class=\"detail-value\">{{ location.marque }}</span>
            </div>
            <div class=\"detail-row\">
                <span class=\"detail-label\">
                    <i class=\"fas fa-tag\"></i>
                    Prix Total:
                </span>
                <span class=\"detail-value\">{{ location.prixTotal }} DT</span>
            </div>
        </div>

        <div class=\"btn-group\">
            <a href=\"{{ path('app_partenaire_front') }}\" class=\"btn-partenaires\">
                <i class=\"fas fa-arrow-left\"></i>
                <span>Retour aux partenaires</span>
            </a>
        </div>
    </div>
{% endblock %} ", "location/success.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\location\\success.html.twig");
    }
}
