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

/* reservations/front/new.html.twig */
class __TwigTemplate_d684cb3eb0c11c85c26cbdfa72081962 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservations/front/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservations/front/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservations/front/new.html.twig", 1);
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

        yield "Nouvelle Réservation - EzGo";
        
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
        .reservation-form {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            margin-bottom: 2rem;
            border-bottom: 2px solid #f8f9fa;
            padding-bottom: 1rem;
        }
        .car-preview {
            background-color: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
        }
        .car-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-taxi {
            background-color: #ff4d30;
            border-color: #ff4d30;
            color: white;
        }
        .btn-taxi:hover {
            background-color: #e63e23;
            border-color: #e63e23;
            color: white;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-control:focus {
            border-color: #ff4d30;
            box-shadow: 0 0 0 0.2rem rgba(255, 77, 48, 0.25);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
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

        // line 53
        yield "    <!-- Hero Section -->
    <div class=\"hero-section\">
        <div class=\"hero-content\">
            <div class=\"container\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">ACCUEIL</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_index");
        yield "\">VÉHICULES</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_car"]) || array_key_exists("selected_car", $context) ? $context["selected_car"] : (function () { throw new RuntimeError('Variable "selected_car" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_car"]) || array_key_exists("selected_car", $context) ? $context["selected_car"] : (function () { throw new RuntimeError('Variable "selected_car" does not exist.', 61, $this->source); })()), "marque", [], "any", false, false, false, 61), "html", null, true);
        yield "</a></li>
                        <li class=\"breadcrumb-item active\">RÉSERVER</li>
                    </ol>
                </nav>
                <h1 class=\"display-4 fw-bold\">Faire une Réservation</h1>
            </div>
        </div>
    </div>

    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"car-preview\">
                    <h3 class=\"h4 mb-4\">Véhicule Sélectionné</h3>
                    ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_car"]) || array_key_exists("selected_car", $context) ? $context["selected_car"] : (function () { throw new RuntimeError('Variable "selected_car" does not exist.', 75, $this->source); })()), "image", [], "any", false, false, false, 75)) {
            // line 76
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_car"]) || array_key_exists("selected_car", $context) ? $context["selected_car"] : (function () { throw new RuntimeError('Variable "selected_car" does not exist.', 76, $this->source); })()), "image", [], "any", false, false, false, 76))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_car"]) || array_key_exists("selected_car", $context) ? $context["selected_car"] : (function () { throw new RuntimeError('Variable "selected_car" does not exist.', 76, $this->source); })()), "marque", [], "any", false, false, false, 76), "html", null, true);
            yield "\" class=\"car-image\">
                    ";
        } else {
            // line 78
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/default-car.jpg"), "html", null, true);
            yield "\" alt=\"Véhicule par défaut\" class=\"car-image\">
                    ";
        }
        // line 80
        yield "                    <h4 class=\"h5 mt-3\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_car"]) || array_key_exists("selected_car", $context) ? $context["selected_car"] : (function () { throw new RuntimeError('Variable "selected_car" does not exist.', 80, $this->source); })()), "marque", [], "any", false, false, false, 80), "html", null, true);
        yield "</h4>
                    <p class=\"text-muted mb-2\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_car"]) || array_key_exists("selected_car", $context) ? $context["selected_car"] : (function () { throw new RuntimeError('Variable "selected_car" does not exist.', 81, $this->source); })()), "immatriculation", [], "any", false, false, false, 81), "html", null, true);
        yield "</p>
                    <p class=\"mb-0\"><strong>Type de Contrat:</strong> ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_car"]) || array_key_exists("selected_car", $context) ? $context["selected_car"] : (function () { throw new RuntimeError('Variable "selected_car" does not exist.', 82, $this->source); })()), "contrat", [], "any", false, false, false, 82), "html", null, true);
        yield "</p>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"reservation-form\">
                    <div class=\"form-header\">
                        <h2 class=\"h3 mb-0\">Détails de la Réservation</h2>
                    </div>

                    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        yield "
                    
                    <div class=\"form-group\">
                        ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "nameRes", [], "any", false, false, false, 94), 'label', ["label" => "Nom complet"]);
        yield "
                        ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "nameRes", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre nom complet"]]);
        // line 100
        yield "
                        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "nameRes", [], "any", false, false, false, 101), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "dateRes", [], "any", false, false, false, 105), 'label', ["label" => "Date de réservation"]);
        yield "
                        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "dateRes", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 110
        yield "
                        ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "dateRes", [], "any", false, false, false, 111), 'errors');
        yield "
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected_car"]) || array_key_exists("selected_car", $context) ? $context["selected_car"] : (function () { throw new RuntimeError('Variable "selected_car" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Retour
                        </a>
                        <button type=\"submit\" class=\"btn btn-taxi\">
                            <i class=\"fas fa-check\"></i> Confirmer la Réservation
                        </button>
                    </div>

                    ";
        // line 123
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>

    <style>
        .hero-section {
            position: relative;
            background-color: #1a1a1a;
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), 
                            url('https://images.unsplash.com/photo-1544829099-b9a0c07fad1a?auto=format&fit=crop&w=1920&q=80');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 40vh;
            margin-top: -76px;
            padding-top: 76px;
            display: flex;
            align-items: center;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
            padding: 4rem 0;
            color: white;
        }

        .breadcrumb {
            background: transparent;
            margin-bottom: 1rem;
        }

        .breadcrumb-item a {
            color: #fff;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #ff4d30;
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
        return "reservations/front/new.html.twig";
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
        return array (  292 => 123,  281 => 115,  274 => 111,  271 => 110,  269 => 106,  265 => 105,  258 => 101,  255 => 100,  253 => 95,  249 => 94,  243 => 91,  231 => 82,  227 => 81,  222 => 80,  216 => 78,  208 => 76,  206 => 75,  187 => 61,  183 => 60,  179 => 59,  171 => 53,  158 => 52,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Réservation - EzGo{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .reservation-form {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            margin-bottom: 2rem;
            border-bottom: 2px solid #f8f9fa;
            padding-bottom: 1rem;
        }
        .car-preview {
            background-color: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
        }
        .car-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-taxi {
            background-color: #ff4d30;
            border-color: #ff4d30;
            color: white;
        }
        .btn-taxi:hover {
            background-color: #e63e23;
            border-color: #e63e23;
            color: white;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-control:focus {
            border-color: #ff4d30;
            box-shadow: 0 0 0 0.2rem rgba(255, 77, 48, 0.25);
        }
    </style>
{% endblock %}

{% block body %}
    <!-- Hero Section -->
    <div class=\"hero-section\">
        <div class=\"hero-content\">
            <div class=\"container\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_index') }}\">ACCUEIL</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('front_voiture_index') }}\">VÉHICULES</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('front_voiture_show', {'id': selected_car.id}) }}\">{{ selected_car.marque }}</a></li>
                        <li class=\"breadcrumb-item active\">RÉSERVER</li>
                    </ol>
                </nav>
                <h1 class=\"display-4 fw-bold\">Faire une Réservation</h1>
            </div>
        </div>
    </div>

    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"car-preview\">
                    <h3 class=\"h4 mb-4\">Véhicule Sélectionné</h3>
                    {% if selected_car.image %}
                        <img src=\"{{ asset('uploads/cars/' ~ selected_car.image) }}\" alt=\"{{ selected_car.marque }}\" class=\"car-image\">
                    {% else %}
                        <img src=\"{{ asset('assets/images/default-car.jpg') }}\" alt=\"Véhicule par défaut\" class=\"car-image\">
                    {% endif %}
                    <h4 class=\"h5 mt-3\">{{ selected_car.marque }}</h4>
                    <p class=\"text-muted mb-2\">{{ selected_car.immatriculation }}</p>
                    <p class=\"mb-0\"><strong>Type de Contrat:</strong> {{ selected_car.contrat }}</p>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"reservation-form\">
                    <div class=\"form-header\">
                        <h2 class=\"h3 mb-0\">Détails de la Réservation</h2>
                    </div>

                    {{ form_start(form, {'attr': {'class': 'needs-validation'}}) }}
                    
                    <div class=\"form-group\">
                        {{ form_label(form.nameRes, 'Nom complet') }}
                        {{ form_widget(form.nameRes, {
                            'attr': {
                                'class': 'form-control',
                                'placeholder': 'Entrez votre nom complet'
                            }
                        }) }}
                        {{ form_errors(form.nameRes) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.dateRes, 'Date de réservation') }}
                        {{ form_widget(form.dateRes, {
                            'attr': {
                                'class': 'form-control'
                            }
                        }) }}
                        {{ form_errors(form.dateRes) }}
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('front_voiture_show', {'id': selected_car.id}) }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Retour
                        </a>
                        <button type=\"submit\" class=\"btn btn-taxi\">
                            <i class=\"fas fa-check\"></i> Confirmer la Réservation
                        </button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>

    <style>
        .hero-section {
            position: relative;
            background-color: #1a1a1a;
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), 
                            url('https://images.unsplash.com/photo-1544829099-b9a0c07fad1a?auto=format&fit=crop&w=1920&q=80');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 40vh;
            margin-top: -76px;
            padding-top: 76px;
            display: flex;
            align-items: center;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
            padding: 4rem 0;
            color: white;
        }

        .breadcrumb {
            background: transparent;
            margin-bottom: 1rem;
        }

        .breadcrumb-item a {
            color: #fff;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #ff4d30;
        }
    </style>
{% endblock %} ", "reservations/front/new.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\reservations\\front\\new.html.twig");
    }
}
