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

/* location/show.html.twig */
class __TwigTemplate_e9a1bd9f5b7292a65321196267677c50 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/show.html.twig"));

        $this->parent = $this->loadTemplate("fronte/base.html.twig", "location/show.html.twig", 1);
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

        yield "Détails de la Location";
        
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
        yield "    <div class=\"location-container\">
        <div class=\"header\">
            <h1>Détails de la Location</h1>
            <div class=\"btn-group\">
                <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_index");
        yield "\" class=\"btn-retour\">Retour</a>
                <a href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_edit", ["idLocation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 11, $this->source); })()), "idLocation", [], "any", false, false, false, 11)]), "html", null, true);
        yield "\" class=\"btn-edit\">Modifier</a>
            </div>
        </div>

        <div class=\"details\">
            <div class=\"detail-group\">
                <h3>Informations de la Location</h3>
                <table class=\"table\">
                    <tr>
                        <th>Date de début</th>
                        <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 21, $this->source); })()), "dateDebut", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Date de fin</th>
                        <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 25, $this->source); })()), "dateFin", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Service</th>
                        <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 29, $this->source); })()), "service", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Marque</th>
                        <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 33, $this->source); })()), "marque", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Prix Total</th>
                        <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 37, $this->source); })()), "prixTotal", [], "any", false, false, false, 37), "html", null, true);
        yield " DT</td>
                    </tr>
                </table>
            </div>

            <div class=\"detail-group\">
                <h3>Informations du Partenaire</h3>
                <table class=\"table\">
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 47, $this->source); })()), "partenaire", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Spécialité</th>
                        <td>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 51, $this->source); })()), "partenaire", [], "any", false, false, false, 51), "specialite", [], "any", false, false, false, 51), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Régions</th>
                        <td>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 55, $this->source); })()), "partenaire", [], "any", false, false, false, 55), "regions", [], "any", false, false, false, 55), ", "), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Tarif Journalier</th>
                        <td>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 59, $this->source); })()), "partenaire", [], "any", false, false, false, 59), "tarif", [], "any", false, false, false, 59), "html", null, true);
        yield " DT</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
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

        // line 68
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
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
        .header h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #000;
        }
        .btn-group {
            margin-bottom: 2rem;
        }
        .btn-retour {
            background: #6c757d;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            margin-right: 1rem;
        }
        .btn-edit {
            background: #ff6b35;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
        }
        .details {
            margin-top: 2rem;
        }
        .detail-group {
            margin-bottom: 2rem;
        }
        .detail-group h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #000;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 0.75rem;
            border-bottom: 1px solid #dee2e6;
        }
        .table th {
            font-weight: 500;
            color: #495057;
            width: 30%;
        }
    </style>
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
        return "location/show.html.twig";
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
        return array (  217 => 68,  204 => 67,  186 => 59,  179 => 55,  172 => 51,  165 => 47,  152 => 37,  145 => 33,  138 => 29,  131 => 25,  124 => 21,  111 => 11,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'fronte/base.html.twig' %}

{% block title %}Détails de la Location{% endblock %}

{% block body %}
    <div class=\"location-container\">
        <div class=\"header\">
            <h1>Détails de la Location</h1>
            <div class=\"btn-group\">
                <a href=\"{{ path('app_location_index') }}\" class=\"btn-retour\">Retour</a>
                <a href=\"{{ path('app_location_edit', {'idLocation': location.idLocation}) }}\" class=\"btn-edit\">Modifier</a>
            </div>
        </div>

        <div class=\"details\">
            <div class=\"detail-group\">
                <h3>Informations de la Location</h3>
                <table class=\"table\">
                    <tr>
                        <th>Date de début</th>
                        <td>{{ location.dateDebut|date('d/m/Y') }}</td>
                    </tr>
                    <tr>
                        <th>Date de fin</th>
                        <td>{{ location.dateFin|date('d/m/Y') }}</td>
                    </tr>
                    <tr>
                        <th>Service</th>
                        <td>{{ location.service }}</td>
                    </tr>
                    <tr>
                        <th>Marque</th>
                        <td>{{ location.marque }}</td>
                    </tr>
                    <tr>
                        <th>Prix Total</th>
                        <td>{{ location.prixTotal }} DT</td>
                    </tr>
                </table>
            </div>

            <div class=\"detail-group\">
                <h3>Informations du Partenaire</h3>
                <table class=\"table\">
                    <tr>
                        <th>Nom</th>
                        <td>{{ location.partenaire.nom }}</td>
                    </tr>
                    <tr>
                        <th>Spécialité</th>
                        <td>{{ location.partenaire.specialite }}</td>
                    </tr>
                    <tr>
                        <th>Régions</th>
                        <td>{{ location.partenaire.regions|join(', ') }}</td>
                    </tr>
                    <tr>
                        <th>Tarif Journalier</th>
                        <td>{{ location.partenaire.tarif }} DT</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
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
        .header h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #000;
        }
        .btn-group {
            margin-bottom: 2rem;
        }
        .btn-retour {
            background: #6c757d;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            margin-right: 1rem;
        }
        .btn-edit {
            background: #ff6b35;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
        }
        .details {
            margin-top: 2rem;
        }
        .detail-group {
            margin-bottom: 2rem;
        }
        .detail-group h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #000;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 0.75rem;
            border-bottom: 1px solid #dee2e6;
        }
        .table th {
            font-weight: 500;
            color: #495057;
            width: 30%;
        }
    </style>
{% endblock %}", "location/show.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\location\\show.html.twig");
    }
}
