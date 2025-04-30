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

/* partenaire/show.html.twig */
class __TwigTemplate_062de9fc889422a9baa091cac99bc53f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/show.html.twig"));

        $this->parent = $this->loadTemplate("fronte/base.html.twig", "partenaire/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détails";
        
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
        .garage-details {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin: 30px 0;
            overflow: hidden;
        }
        .garage-header {
            background: #ff6b35;
            color: white;
            padding: 2rem;
            position: relative;
        }
        .garage-title {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        .garage-title i {
            font-size: 2.5rem;
        }
        .garage-title h1 {
            font-size: 2.5rem;
            margin: 0;
        }
        .garage-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        .info-section {
            padding: 2rem;
            border-bottom: 1px solid #eee;
        }
        .info-section:last-child {
            border-bottom: none;
        }
        .info-section h3 {
            color: #2d3436;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .info-section h3 i {
            color: #ff6b35;
        }
        .info-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .info-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
            padding: 0.5rem;
            background: #f8f9fa;
            border-radius: 4px;
        }
        .info-item i {
            color: #ff6b35;
            width: 20px;
        }
        .service-list, .marque-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
        .service-item, .marque-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem;
            background: #f8f9fa;
            border-radius: 4px;
        }
        .service-item i, .marque-item i {
            color: #28a745;
        }
        .price-box {
            background: #fff3ef;
            border-left: 4px solid #ff6b35;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1.5rem 0;
        }
        .price-title {
            color: #ff6b35;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .price-amount {
            font-size: 2.5rem;
            color: #2d3436;
            font-weight: bold;
        }
        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn-rent {
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
        .btn-rent:hover {
            background: #ff8c5a;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
        .btn-back {
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
        .btn-back:hover {
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

    // line 154
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

        // line 155
        yield "<div class=\"container py-5\">
    <div class=\"garage-details\">
        <div class=\"garage-header\">
            <div class=\"garage-title\">
                <i class=\"fas fa-building\"></i>
                <h1>";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 160, $this->source); })()), "nom", [], "any", false, false, false, 160), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"garage-subtitle\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 162, $this->source); })()), "specialite", [], "any", false, false, false, 162), "html", null, true);
        yield "</div>
        </div>

        <div class=\"info-section\">
            <h3>
                <i class=\"fas fa-info-circle\"></i>
                Informations de contact
            </h3>
            <div class=\"info-list\">
                <div class=\"info-item\">
                    <i class=\"fas fa-phone\"></i>
                    <span>";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 173, $this->source); })()), "telephone", [], "any", false, false, false, 173), "html", null, true);
        yield "</span>
                </div>
                <div class=\"info-item\">
                    <i class=\"fas fa-envelope\"></i>
                    <span>";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 177, $this->source); })()), "email", [], "any", false, false, false, 177), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        <div class=\"info-section\">
            <h3>
                <i class=\"fas fa-cogs\"></i>
                Services disponibles
            </h3>
            <div class=\"service-list\">
                ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 188, $this->source); })()), "services", [], "any", false, false, false, 188));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 189
            yield "                    <div class=\"service-item\">
                        <i class=\"fas fa-check-circle\"></i>
                        <span>";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["service"], "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "            </div>
        </div>

        <div class=\"info-section\">
            <h3>
                <i class=\"fas fa-car\"></i>
                Marques disponibles
            </h3>
            <div class=\"marque-list\">
                ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 203, $this->source); })()), "marquesDisponibles", [], "any", false, false, false, 203));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 204
            yield "                    <div class=\"marque-item\">
                        <i class=\"fas fa-check-circle\"></i>
                        <span>";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["marque"], "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['marque'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "            </div>
        </div>

        <div class=\"info-section\">
            <div class=\"price-box\">
                <h3 class=\"price-title\">
                    <i class=\"fas fa-tag\"></i>
                    Tarif journalier
                </h3>
                <div class=\"price-amount\">";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 218, $this->source); })()), "tarif", [], "any", false, false, false, 218), "html", null, true);
        yield " DT</div>
            </div>

            <div class=\"action-buttons\">
                <a href=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_new", ["idPartenaire" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 222, $this->source); })()), "idPartenaire", [], "any", false, false, false, 222)]), "html", null, true);
        yield "\" class=\"btn-rent\">
                    <i class=\"fas fa-calendar-plus\"></i>
                    <span>Réserver maintenant</span>
                </a>
                <a href=\"";
        // line 226
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire_index");
        yield "\" class=\"btn-back\">
                    <i class=\"fas fa-arrow-left\"></i>
                    <span>Retour à la liste</span>
                </a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 236
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

        // line 237
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
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
        return "partenaire/show.html.twig";
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
        return array (  425 => 237,  412 => 236,  392 => 226,  385 => 222,  378 => 218,  367 => 209,  358 => 206,  354 => 204,  350 => 203,  339 => 194,  330 => 191,  326 => 189,  322 => 188,  308 => 177,  301 => 173,  287 => 162,  282 => 160,  275 => 155,  262 => 154,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'fronte/base.html.twig' %}

{% block title %}{{ partenaire.nom }} - Détails{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
    <style>
        .garage-details {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin: 30px 0;
            overflow: hidden;
        }
        .garage-header {
            background: #ff6b35;
            color: white;
            padding: 2rem;
            position: relative;
        }
        .garage-title {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        .garage-title i {
            font-size: 2.5rem;
        }
        .garage-title h1 {
            font-size: 2.5rem;
            margin: 0;
        }
        .garage-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        .info-section {
            padding: 2rem;
            border-bottom: 1px solid #eee;
        }
        .info-section:last-child {
            border-bottom: none;
        }
        .info-section h3 {
            color: #2d3436;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .info-section h3 i {
            color: #ff6b35;
        }
        .info-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .info-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
            padding: 0.5rem;
            background: #f8f9fa;
            border-radius: 4px;
        }
        .info-item i {
            color: #ff6b35;
            width: 20px;
        }
        .service-list, .marque-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
        .service-item, .marque-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem;
            background: #f8f9fa;
            border-radius: 4px;
        }
        .service-item i, .marque-item i {
            color: #28a745;
        }
        .price-box {
            background: #fff3ef;
            border-left: 4px solid #ff6b35;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1.5rem 0;
        }
        .price-title {
            color: #ff6b35;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .price-amount {
            font-size: 2.5rem;
            color: #2d3436;
            font-weight: bold;
        }
        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn-rent {
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
        .btn-rent:hover {
            background: #ff8c5a;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
        .btn-back {
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
        .btn-back:hover {
            background: #5a6268;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"garage-details\">
        <div class=\"garage-header\">
            <div class=\"garage-title\">
                <i class=\"fas fa-building\"></i>
                <h1>{{ partenaire.nom }}</h1>
            </div>
            <div class=\"garage-subtitle\">{{ partenaire.specialite }}</div>
        </div>

        <div class=\"info-section\">
            <h3>
                <i class=\"fas fa-info-circle\"></i>
                Informations de contact
            </h3>
            <div class=\"info-list\">
                <div class=\"info-item\">
                    <i class=\"fas fa-phone\"></i>
                    <span>{{ partenaire.telephone }}</span>
                </div>
                <div class=\"info-item\">
                    <i class=\"fas fa-envelope\"></i>
                    <span>{{ partenaire.email }}</span>
                </div>
            </div>
        </div>

        <div class=\"info-section\">
            <h3>
                <i class=\"fas fa-cogs\"></i>
                Services disponibles
            </h3>
            <div class=\"service-list\">
                {% for service in partenaire.services %}
                    <div class=\"service-item\">
                        <i class=\"fas fa-check-circle\"></i>
                        <span>{{ service }}</span>
                    </div>
                {% endfor %}
            </div>
        </div>

        <div class=\"info-section\">
            <h3>
                <i class=\"fas fa-car\"></i>
                Marques disponibles
            </h3>
            <div class=\"marque-list\">
                {% for marque in partenaire.marquesDisponibles %}
                    <div class=\"marque-item\">
                        <i class=\"fas fa-check-circle\"></i>
                        <span>{{ marque }}</span>
                    </div>
                {% endfor %}
            </div>
        </div>

        <div class=\"info-section\">
            <div class=\"price-box\">
                <h3 class=\"price-title\">
                    <i class=\"fas fa-tag\"></i>
                    Tarif journalier
                </h3>
                <div class=\"price-amount\">{{ partenaire.tarif }} DT</div>
            </div>

            <div class=\"action-buttons\">
                <a href=\"{{ path('app_location_new', {'idPartenaire': partenaire.idPartenaire}) }}\" class=\"btn-rent\">
                    <i class=\"fas fa-calendar-plus\"></i>
                    <span>Réserver maintenant</span>
                </a>
                <a href=\"{{ path('app_partenaire_index') }}\" class=\"btn-back\">
                    <i class=\"fas fa-arrow-left\"></i>
                    <span>Retour à la liste</span>
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
{% endblock %}", "partenaire/show.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\partenaire\\show.html.twig");
    }
}
