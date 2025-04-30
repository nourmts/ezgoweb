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

/* location/confirm.html.twig */
class __TwigTemplate_79810981d11463a8f4c848e7fee69e4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/confirm.html.twig"));

        $this->parent = $this->loadTemplate("fronte/base.html.twig", "location/confirm.html.twig", 1);
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

        yield "Confirmation de la Location";
        
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
        .location-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            margin-bottom: 2rem;
        }
        .title-section {
            display: flex;
            flex-direction: column;
            margin-bottom: 2rem;
        }
        .road-text {
            color: #ff6b35;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }
        .header h1 {
            font-size: 2.5rem;
            margin: 0;
            color: #000;
            font-weight: bold;
        }
        .details-section {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        .detail-group {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .detail-item {
            padding: 1rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .detail-label {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            display: block;
        }
        .detail-value {
            color: #2d3436;
            font-size: 1.1rem;
            font-weight: 600;
        }
        .price-section {
            background: #fff3ef;
            border-left: 4px solid #ff6b35;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
        }
        .price-title {
            color: #ff6b35;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        .price-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }
        .total-price {
            font-size: 1.5rem;
            color: #ff6b35;
            font-weight: bold;
            text-align: right;
        }
        .btn-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn-confirm {
            background: #ff6b35;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            border: none;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            min-width: 150px;
            justify-content: center;
            text-decoration: none;
        }
        .btn-confirm:hover {
            background: #ff8c5a;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
        .btn-edit {
            background: #6c757d;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            min-width: 150px;
            justify-content: center;
        }
        .btn-edit:hover {
            background: #5a6268;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
        }
        @media (max-width: 768px) {
            .detail-group {
                grid-template-columns: 1fr;
            }
            .price-details {
                grid-template-columns: 1fr;
            }
            .btn-group {
                flex-direction: column;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 150
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

        // line 151
        yield "    <div class=\"location-container\">
        <div class=\"header\">
            <div class=\"title-section\">
                <span class=\"road-text\">road</span>
                <h1>Confirmation de votre Location</h1>
            </div>
        </div>

        <div class=\"details-section\">
            <div class=\"detail-group\">
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Date de début</span>
                    <span class=\"detail-value\">";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 163, $this->source); })()), "dateDebut", [], "any", false, false, false, 163), "d/m/Y"), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Date de fin</span>
                    <span class=\"detail-value\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 167, $this->source); })()), "dateFin", [], "any", false, false, false, 167), "d/m/Y"), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Service</span>
                    <span class=\"detail-value\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 171, $this->source); })()), "service", [], "any", false, false, false, 171), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Marque</span>
                    <span class=\"detail-value\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 175, $this->source); })()), "marque", [], "any", false, false, false, 175), "html", null, true);
        yield "</span>
                </div>
            </div>

            <div class=\"price-section\">
                <h3 class=\"price-title\">Détails du prix</h3>
                <div class=\"price-details\">
                    <div>
                        <p><strong>Partenaire:</strong> ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 183, $this->source); })()), "partenaire", [], "any", false, false, false, 183), "nom", [], "any", false, false, false, 183), "html", null, true);
        yield "</p>
                        <p><strong>Tarif journalier:</strong> ";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 184, $this->source); })()), "partenaire", [], "any", false, false, false, 184), "tarif", [], "any", false, false, false, 184), "html", null, true);
        yield " DT</p>
                        ";
        // line 185
        $context["duration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 185, $this->source); })()), "dateDebut", [], "any", false, false, false, 185), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 185, $this->source); })()), "dateFin", [], "any", false, false, false, 185)], "method", false, false, false, 185);
        // line 186
        yield "                        <p><strong>Durée:</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 186, $this->source); })()), "days", [], "any", false, false, false, 186) + 1), "html", null, true);
        yield " jours</p>
                    </div>
                    <div class=\"total-price\">
                        Total: ";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 189, $this->source); })()), "prixTotal", [], "any", false, false, false, 189), "html", null, true);
        yield " DT
                    </div>
                </div>
            </div>
        </div>

        <div class=\"btn-group\">
            <form method=\"post\" action=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_confirm", ["idLocation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 196, $this->source); })()), "idLocation", [], "any", false, false, false, 196)]), "html", null, true);
        yield "\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"action\" value=\"confirm\">
                <button type=\"submit\" class=\"btn-confirm\">
                    <i class=\"fas fa-check\"></i>
                    <span>Confirmer la location</span>
                </button>
            </form>
            <a href=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_edit", ["idLocation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 203, $this->source); })()), "idLocation", [], "any", false, false, false, 203)]), "html", null, true);
        yield "\" class=\"btn-edit\">
                <i class=\"fas fa-pencil-alt\"></i>
                <span>Modifier</span>
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
        return "location/confirm.html.twig";
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
        return array (  352 => 203,  342 => 196,  332 => 189,  325 => 186,  323 => 185,  319 => 184,  315 => 183,  304 => 175,  297 => 171,  290 => 167,  283 => 163,  269 => 151,  256 => 150,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'fronte/base.html.twig' %}

{% block title %}Confirmation de la Location{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
    <style>
        .location-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            margin-bottom: 2rem;
        }
        .title-section {
            display: flex;
            flex-direction: column;
            margin-bottom: 2rem;
        }
        .road-text {
            color: #ff6b35;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }
        .header h1 {
            font-size: 2.5rem;
            margin: 0;
            color: #000;
            font-weight: bold;
        }
        .details-section {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        .detail-group {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .detail-item {
            padding: 1rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .detail-label {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            display: block;
        }
        .detail-value {
            color: #2d3436;
            font-size: 1.1rem;
            font-weight: 600;
        }
        .price-section {
            background: #fff3ef;
            border-left: 4px solid #ff6b35;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
        }
        .price-title {
            color: #ff6b35;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        .price-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }
        .total-price {
            font-size: 1.5rem;
            color: #ff6b35;
            font-weight: bold;
            text-align: right;
        }
        .btn-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn-confirm {
            background: #ff6b35;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            border: none;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            min-width: 150px;
            justify-content: center;
            text-decoration: none;
        }
        .btn-confirm:hover {
            background: #ff8c5a;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
        .btn-edit {
            background: #6c757d;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            min-width: 150px;
            justify-content: center;
        }
        .btn-edit:hover {
            background: #5a6268;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
        }
        @media (max-width: 768px) {
            .detail-group {
                grid-template-columns: 1fr;
            }
            .price-details {
                grid-template-columns: 1fr;
            }
            .btn-group {
                flex-direction: column;
            }
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"location-container\">
        <div class=\"header\">
            <div class=\"title-section\">
                <span class=\"road-text\">road</span>
                <h1>Confirmation de votre Location</h1>
            </div>
        </div>

        <div class=\"details-section\">
            <div class=\"detail-group\">
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Date de début</span>
                    <span class=\"detail-value\">{{ location.dateDebut|date('d/m/Y') }}</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Date de fin</span>
                    <span class=\"detail-value\">{{ location.dateFin|date('d/m/Y') }}</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Service</span>
                    <span class=\"detail-value\">{{ location.service }}</span>
                </div>
                <div class=\"detail-item\">
                    <span class=\"detail-label\">Marque</span>
                    <span class=\"detail-value\">{{ location.marque }}</span>
                </div>
            </div>

            <div class=\"price-section\">
                <h3 class=\"price-title\">Détails du prix</h3>
                <div class=\"price-details\">
                    <div>
                        <p><strong>Partenaire:</strong> {{ location.partenaire.nom }}</p>
                        <p><strong>Tarif journalier:</strong> {{ location.partenaire.tarif }} DT</p>
                        {% set duration = location.dateDebut.diff(location.dateFin) %}
                        <p><strong>Durée:</strong> {{ duration.days + 1 }} jours</p>
                    </div>
                    <div class=\"total-price\">
                        Total: {{ location.prixTotal }} DT
                    </div>
                </div>
            </div>
        </div>

        <div class=\"btn-group\">
            <form method=\"post\" action=\"{{ path('app_location_confirm', {'idLocation': location.idLocation}) }}\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"action\" value=\"confirm\">
                <button type=\"submit\" class=\"btn-confirm\">
                    <i class=\"fas fa-check\"></i>
                    <span>Confirmer la location</span>
                </button>
            </form>
            <a href=\"{{ path('app_location_edit', {'idLocation': location.idLocation}) }}\" class=\"btn-edit\">
                <i class=\"fas fa-pencil-alt\"></i>
                <span>Modifier</span>
            </a>
        </div>
    </div>
{% endblock %} ", "location/confirm.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\location\\confirm.html.twig");
    }
}
