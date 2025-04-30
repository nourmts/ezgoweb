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

/* reclamation/index.html.twig */
class __TwigTemplate_943f38b50f9aabc76ecd9fd5b5d3c11b extends Template
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
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/index.html.twig", 1);
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

        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " Liste des réclamations";
        
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
        yield "<style>
    .badge-info {
        background-color: #17a2b8;
    }
    .badge-warning {
        background-color: #ffc107;
        color: #212529;
    }
    .badge-success {
        background-color: #28a745;
    }
    .badge-secondary {
        background-color: #6c757d;
    }
    .btn-group {
        display: flex;
    }
    .card {
        margin-bottom: 20px;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }
    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0,0,0,.03);
        border-bottom: 1px solid rgba(0,0,0,.125);
    }
    .card-body {
        padding: 1.25rem;
    }
    .card-footer {
        padding: .75rem 1.25rem;
        background-color: rgba(0,0,0,.03);
        border-top: 1px solid rgba(0,0,0,.125);
    }
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
    }
    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        border-collapse: collapse;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0,0,0,.05);
    }
    .table th, .table td {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
    .bg-light {
        background-color: #f8f9fa!important;
    }
    .badge {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 80
        yield "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_2.jpg"), "html", null, true);
        yield "');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-end justify-content-start\">
      <div class=\"col-md-9 ftco-animate pb-5\">
        <h1 class=\"mb-3 bread\">Liste des réclamations</h1>
        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        yield "\">Accueil <i class=\"fas fa-arrow-right\"></i></a></span> <span>Réclamations <i class=\"fas fa-arrow-right\"></i></span></p>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
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

        // line 94
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <h3 class=\"mb-0\">Liste des réclamations</h3>
                    <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i> Créer</a>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th>ID</th>
                                    <th>Réclamation</th>
                                    <th>Catégorie</th>
                                    <th>État</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 115, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 116
            yield "                                <tr>
                                    <td>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                                    <td>";
            // line 118
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reclamation", [], "any", false, false, false, 118)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reclamation", [], "any", false, false, false, 118), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reclamation", [], "any", false, false, false, 118), "html", null, true)));
            yield "</td>
                                    <td><span class=\"badge badge-info\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "categorie", [], "any", false, false, false, 119), "html", null, true);
            yield "</span></td>
                                    <td>
                                        ";
            // line 121
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 121) == "en cours")) {
                // line 122
                yield "                                            <span class=\"badge badge-warning\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 122), "html", null, true);
                yield "</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 123
$context["reclamation"], "etat", [], "any", false, false, false, 123) == "traité")) {
                // line 124
                yield "                                            <span class=\"badge badge-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 124), "html", null, true);
                yield "</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 125
$context["reclamation"], "etat", [], "any", false, false, false, 125) == "non traité")) {
                // line 126
                yield "                                            <span class=\"badge badge-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 126), "html", null, true);
                yield "</span>
                                        ";
            } else {
                // line 128
                yield "                                            <span class=\"badge badge-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 128), "html", null, true);
                yield "</span>
                                        ";
            }
            // line 130
            yield "                                    </td>
                                    <td>";
            // line 131
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 131)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 131), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                                    <td>
                                        <div class=\"btn-group\" role=\"group\">
                                            
                                            </a>
                                            <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["idReclamation" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                                                <i class=\"fas fa-edit\"> edit</i>
                                            </a>
                                            <a href=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_discussion", ["idReclamation" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 139)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                                                <i class=\"fas fa-comments\"></i> Ouvrir la discussion
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 145
        if (!$context['_iterated']) {
            // line 146
            yield "                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">Aucune réclamation trouvée</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-primary\">Nouvelle réclamation</a>
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
        return "reclamation/index.html.twig";
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
        return array (  359 => 155,  352 => 150,  343 => 146,  341 => 145,  330 => 139,  324 => 136,  316 => 131,  313 => 130,  307 => 128,  301 => 126,  299 => 125,  294 => 124,  292 => 123,  287 => 122,  285 => 121,  280 => 119,  276 => 118,  272 => 117,  269 => 116,  264 => 115,  245 => 99,  238 => 94,  225 => 93,  208 => 86,  198 => 80,  185 => 79,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} Liste des réclamations{% endblock %}

{% block stylesheets %}
<style>
    .badge-info {
        background-color: #17a2b8;
    }
    .badge-warning {
        background-color: #ffc107;
        color: #212529;
    }
    .badge-success {
        background-color: #28a745;
    }
    .badge-secondary {
        background-color: #6c757d;
    }
    .btn-group {
        display: flex;
    }
    .card {
        margin-bottom: 20px;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }
    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0,0,0,.03);
        border-bottom: 1px solid rgba(0,0,0,.125);
    }
    .card-body {
        padding: 1.25rem;
    }
    .card-footer {
        padding: .75rem 1.25rem;
        background-color: rgba(0,0,0,.03);
        border-top: 1px solid rgba(0,0,0,.125);
    }
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
    }
    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        border-collapse: collapse;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0,0,0,.05);
    }
    .table th, .table td {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
    .bg-light {
        background-color: #f8f9fa!important;
    }
    .badge {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
</style>
{% endblock %}

{% block hero %}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_2.jpg') }}');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-end justify-content-start\">
      <div class=\"col-md-9 ftco-animate pb-5\">
        <h1 class=\"mb-3 bread\">Liste des réclamations</h1>
        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"{{ path('app_homepage') }}\">Accueil <i class=\"fas fa-arrow-right\"></i></a></span> <span>Réclamations <i class=\"fas fa-arrow-right\"></i></span></p>
      </div>
    </div>
  </div>
</section>
{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <h3 class=\"mb-0\">Liste des réclamations</h3>
                    <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i> Créer</a>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th>ID</th>
                                    <th>Réclamation</th>
                                    <th>Catégorie</th>
                                    <th>État</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for reclamation in reclamations %}
                                <tr>
                                    <td>{{ reclamation.idReclamation }}</td>
                                    <td>{{ reclamation.reclamation|length > 50 ? reclamation.reclamation|slice(0, 50) ~ '...' : reclamation.reclamation }}</td>
                                    <td><span class=\"badge badge-info\">{{ reclamation.categorie }}</span></td>
                                    <td>
                                        {% if reclamation.etat == 'en cours' %}
                                            <span class=\"badge badge-warning\">{{ reclamation.etat }}</span>
                                        {% elseif reclamation.etat == 'traité' %}
                                            <span class=\"badge badge-success\">{{ reclamation.etat }}</span>
                                        {% elseif reclamation.etat == 'non traité' %}
                                            <span class=\"badge badge-danger\">{{ reclamation.etat }}</span>
                                        {% else %}
                                            <span class=\"badge badge-secondary\">{{ reclamation.etat }}</span>
                                        {% endif %}
                                    </td>
                                    <td>{{ reclamation.date ? reclamation.date|date('Y-m-d') : '' }}</td>
                                    <td>
                                        <div class=\"btn-group\" role=\"group\">
                                            
                                            </a>
                                            <a href=\"{{ path('app_reclamation_edit', {'idReclamation': reclamation.idReclamation}) }}\" class=\"btn btn-warning btn-sm\">
                                                <i class=\"fas fa-edit\"> edit</i>
                                            </a>
                                            <a href=\"{{ path('app_discussion', {'idReclamation': reclamation.idReclamation}) }}\" class=\"btn btn-info btn-sm\">
                                                <i class=\"fas fa-comments\"></i> Ouvrir la discussion
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">Aucune réclamation trouvée</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"card-footer\">
                    <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary\">Nouvelle réclamation</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\reclamation\\index.html.twig");
    }
}
