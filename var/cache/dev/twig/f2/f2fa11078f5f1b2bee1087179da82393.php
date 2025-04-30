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

/* location/index.html.twig */
class __TwigTemplate_a01f49400e30e586ad3ce142bab1bc4f extends Template
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
        return "fronte/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/index.html.twig"));

        $this->parent = $this->loadTemplate("fronte/base.html.twig", "location/index.html.twig", 1);
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

        yield "Nos Locations";
        
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
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .title-section {
            display: flex;
            flex-direction: column;
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
        .btn-creer {
            background: #ff6b35;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .btn-creer:hover {
            background: #ff8c5a;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
        }
        .table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 0.5rem;
            margin-top: 1rem;
        }
        .table th, .table td {
            padding: 1rem;
            text-align: left;
            vertical-align: middle;
        }
        .table th {
            font-weight: 600;
            color: #495057;
            border-bottom: 2px solid #dee2e6;
            text-transform: uppercase;
            font-size: 0.875rem;
        }
        .table tbody tr {
            background-color: #fff;
            transition: all 0.3s ease;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .table tbody tr:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
        }
        .action-buttons {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-start;
        }
        .action-btn {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            cursor: pointer;
            color: white;
            text-decoration: none;
            margin: 0 2px;
        }
        .action-btn i {
            font-size: 1rem;
        }
        .view-btn {
            background-color: #00BCD4;
        }
        .view-btn:hover {
            background-color: #0097A7;
        }
        .edit-btn {
            background-color: #FFC107;
        }
        .edit-btn:hover {
            background-color: #FFA000;
        }
        .delete-btn {
            background-color: #FF5252;
        }
        .delete-btn:hover {
            background-color: #D32F2F;
        }
        .text-center {
            text-align: center;
        }
        .empty-message {
            text-align: center;
            padding: 2rem;
            color: #6c757d;
            font-size: 1.1rem;
        }
        .price-column {
            font-weight: 600;
            color: #2d3436;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 140
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

        // line 141
        yield "    <div class=\"location-container\">
        <div class=\"header\">
            <div class=\"title-section\">
                <span class=\"road-text\">road</span>
                <h1>Nos Locations</h1>
            </div>
            <div class=\"btn-group\">
                <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire_index");
        yield "\" class=\"btn-creer\">
                    <i class=\"fas fa-plus\"></i>
                    <span>Créer une Location</span>
                </a>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Service</th>
                        <th>Marque</th>
                        <th>Prix Total</th>
                        <th>Partenaire</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 170, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 171
            yield "                        <tr>
                            <td>";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "idLocation", [], "any", false, false, false, 172), "html", null, true);
            yield "</td>
                            <td>";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "dateDebut", [], "any", false, false, false, 173), "d/m/Y"), "html", null, true);
            yield "</td>
                            <td>";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "dateFin", [], "any", false, false, false, 174), "d/m/Y"), "html", null, true);
            yield "</td>
                            <td>";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "service", [], "any", false, false, false, 175), "html", null, true);
            yield "</td>
                            <td>";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "marque", [], "any", false, false, false, 176), "html", null, true);
            yield "</td>
                            <td class=\"price-column\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "prixTotal", [], "any", false, false, false, 177), "html", null, true);
            yield " DT</td>
                            <td>";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["location"], "partenaire", [], "any", false, false, false, 178), "nom", [], "any", false, false, false, 178), "html", null, true);
            yield "</td>
                            <td class=\"action-buttons\">
                                <a href=\"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_show", ["idLocation" => CoreExtension::getAttribute($this->env, $this->source, $context["location"], "idLocation", [], "any", false, false, false, 180)]), "html", null, true);
            yield "\" 
                                   class=\"action-btn view-btn\" 
                                   data-bs-toggle=\"tooltip\" 
                                   title=\"Voir les détails\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_edit", ["idLocation" => CoreExtension::getAttribute($this->env, $this->source, $context["location"], "idLocation", [], "any", false, false, false, 186)]), "html", null, true);
            yield "\" 
                                   class=\"action-btn edit-btn\" 
                                   data-bs-toggle=\"tooltip\" 
                                   title=\"Modifier\">
                                    <i class=\"fas fa-pencil-alt\"></i>
                                </a>
                                <form method=\"post\" action=\"";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_delete", ["idLocation" => CoreExtension::getAttribute($this->env, $this->source, $context["location"], "idLocation", [], "any", false, false, false, 192)]), "html", null, true);
            yield "\" 
                                      style=\"display: inline-block\" 
                                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette location?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["location"], "idLocation", [], "any", false, false, false, 195))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" 
                                            class=\"action-btn delete-btn\" 
                                            data-bs-toggle=\"tooltip\" 
                                            title=\"Supprimer\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 205
        if (!$context['_iterated']) {
            // line 206
            yield "                        <tr>
                            <td colspan=\"8\" class=\"empty-message\">Aucune location trouvée</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 216
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

        // line 217
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
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
        return "location/index.html.twig";
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
        return array (  409 => 217,  396 => 216,  381 => 210,  372 => 206,  370 => 205,  355 => 195,  349 => 192,  340 => 186,  331 => 180,  326 => 178,  322 => 177,  318 => 176,  314 => 175,  310 => 174,  306 => 173,  302 => 172,  299 => 171,  294 => 170,  269 => 148,  260 => 141,  247 => 140,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'fronte/base.html.twig' %}

{% block title %}Nos Locations{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
    <style>
        .location-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .title-section {
            display: flex;
            flex-direction: column;
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
        .btn-creer {
            background: #ff6b35;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .btn-creer:hover {
            background: #ff8c5a;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
        }
        .table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 0.5rem;
            margin-top: 1rem;
        }
        .table th, .table td {
            padding: 1rem;
            text-align: left;
            vertical-align: middle;
        }
        .table th {
            font-weight: 600;
            color: #495057;
            border-bottom: 2px solid #dee2e6;
            text-transform: uppercase;
            font-size: 0.875rem;
        }
        .table tbody tr {
            background-color: #fff;
            transition: all 0.3s ease;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .table tbody tr:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
        }
        .action-buttons {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-start;
        }
        .action-btn {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            cursor: pointer;
            color: white;
            text-decoration: none;
            margin: 0 2px;
        }
        .action-btn i {
            font-size: 1rem;
        }
        .view-btn {
            background-color: #00BCD4;
        }
        .view-btn:hover {
            background-color: #0097A7;
        }
        .edit-btn {
            background-color: #FFC107;
        }
        .edit-btn:hover {
            background-color: #FFA000;
        }
        .delete-btn {
            background-color: #FF5252;
        }
        .delete-btn:hover {
            background-color: #D32F2F;
        }
        .text-center {
            text-align: center;
        }
        .empty-message {
            text-align: center;
            padding: 2rem;
            color: #6c757d;
            font-size: 1.1rem;
        }
        .price-column {
            font-weight: 600;
            color: #2d3436;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"location-container\">
        <div class=\"header\">
            <div class=\"title-section\">
                <span class=\"road-text\">road</span>
                <h1>Nos Locations</h1>
            </div>
            <div class=\"btn-group\">
                <a href=\"{{ path('app_partenaire_index') }}\" class=\"btn-creer\">
                    <i class=\"fas fa-plus\"></i>
                    <span>Créer une Location</span>
                </a>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Service</th>
                        <th>Marque</th>
                        <th>Prix Total</th>
                        <th>Partenaire</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for location in locations %}
                        <tr>
                            <td>{{ location.idLocation }}</td>
                            <td>{{ location.dateDebut|date('d/m/Y') }}</td>
                            <td>{{ location.dateFin|date('d/m/Y') }}</td>
                            <td>{{ location.service }}</td>
                            <td>{{ location.marque }}</td>
                            <td class=\"price-column\">{{ location.prixTotal }} DT</td>
                            <td>{{ location.partenaire.nom }}</td>
                            <td class=\"action-buttons\">
                                <a href=\"{{ path('app_location_show', {'idLocation': location.idLocation}) }}\" 
                                   class=\"action-btn view-btn\" 
                                   data-bs-toggle=\"tooltip\" 
                                   title=\"Voir les détails\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"{{ path('app_location_edit', {'idLocation': location.idLocation}) }}\" 
                                   class=\"action-btn edit-btn\" 
                                   data-bs-toggle=\"tooltip\" 
                                   title=\"Modifier\">
                                    <i class=\"fas fa-pencil-alt\"></i>
                                </a>
                                <form method=\"post\" action=\"{{ path('app_location_delete', {'idLocation': location.idLocation}) }}\" 
                                      style=\"display: inline-block\" 
                                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette location?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ location.idLocation) }}\">
                                    <button type=\"submit\" 
                                            class=\"action-btn delete-btn\" 
                                            data-bs-toggle=\"tooltip\" 
                                            title=\"Supprimer\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"8\" class=\"empty-message\">Aucune location trouvée</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
{% endblock %}", "location/index.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\location\\index.html.twig");
    }
}
