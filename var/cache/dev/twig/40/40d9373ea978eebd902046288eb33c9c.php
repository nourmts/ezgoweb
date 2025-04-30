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

/* location/edit.html.twig */
class __TwigTemplate_fe4d2e9c26a09059f2aa7ee32b402601 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/edit.html.twig"));

        $this->parent = $this->loadTemplate("fronte/base.html.twig", "location/edit.html.twig", 1);
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

        yield "Modifier la Location";
        
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
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-control {
            border-radius: 8px;
            padding: 0.75rem;
            border: 1px solid #dee2e6;
            font-size: 1rem;
            width: 100%;
            background-color: #fff;
            transition: all 0.3s ease;
            height: 48px;
        }
        .form-control:focus {
            border-color: #ff6b35;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
            outline: none;
        }
        select.form-control {
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23495057' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1em;
            padding-right: 2.5rem;
            cursor: pointer;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }
        .info-box {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-left: 4px solid #ff6b35;
        }
        .info-box p {
            margin: 0.5rem 0;
            font-size: 1rem;
            color: #495057;
        }
        .info-box strong {
            color: #2d3436;
            margin-right: 0.5rem;
        }
        label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.75rem;
            display: block;
            font-size: 1rem;
        }
        .btn-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn-save {
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
        }
        .btn-save:hover {
            background: #ff8c5a;
            transform: translateY(-2px);
        }
        .btn-back {
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
        .btn-back:hover {
            background: #5a6268;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
        }
        input[type=\"date\"] {
            min-height: 48px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 147
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

        // line 148
        yield "    <div class=\"location-container\">
        <div class=\"header\">
            <div class=\"title-section\">
                <span class=\"road-text\">road</span>
                <h1>Modifier la Location</h1>
            </div>
        </div>

        ";
        // line 156
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), 'form_start');
        yield "
            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "dateDebut", [], "any", false, false, false, 159), 'label', ["label" => "Date de début"]);
        yield "
                    ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "dateDebut", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 164
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "dateFin", [], "any", false, false, false, 167), 'label', ["label" => "Date de fin"]);
        yield "
                    ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "dateFin", [], "any", false, false, false, 168), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 172
        yield "
                </div>
            </div>

            ";
        // line 176
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "service", [], "any", true, true, false, 176)) {
            // line 177
            yield "            <div class=\"form-group\">
                ";
            // line 178
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "service", [], "any", false, false, false, 178), 'label', ["label" => "Service"]);
            yield "
                ";
            // line 179
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "service", [], "any", false, false, false, 179), 'widget', ["attr" => ["class" => "form-control"]]);
            // line 183
            yield "
            </div>
            ";
        }
        // line 186
        yield "
            ";
        // line 187
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "marque", [], "any", true, true, false, 187)) {
            // line 188
            yield "            <div class=\"form-group\">
                ";
            // line 189
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "marque", [], "any", false, false, false, 189), 'label', ["label" => "Marque"]);
            yield "
                ";
            // line 190
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "marque", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "form-control"]]);
            // line 194
            yield "
            </div>
            ";
        }
        // line 197
        yield "
            <div class=\"info-box\">
                <p><strong>Partenaire:</strong> ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 199, $this->source); })()), "nom", [], "any", false, false, false, 199), "html", null, true);
        yield "</p>
                <p><strong>Tarif journalier:</strong> ";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 200, $this->source); })()), "tarif", [], "any", false, false, false, 200), "html", null, true);
        yield " DT</p>
            </div>

            <div class=\"btn-group\">
                <button type=\"submit\" class=\"btn-save\">
                    <i class=\"fas fa-save\"></i>
                    <span>Enregistrer</span>
                </button>
                <a href=\"";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_index");
        yield "\" class=\"btn-back\">
                    <i class=\"fas fa-arrow-left\"></i>
                    <span>Retour</span>
                </a>
            </div>
        ";
        // line 213
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), 'form_end');
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 217
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

        // line 218
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
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
        return "location/edit.html.twig";
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
        return array (  395 => 218,  382 => 217,  368 => 213,  360 => 208,  349 => 200,  345 => 199,  341 => 197,  336 => 194,  334 => 190,  330 => 189,  327 => 188,  325 => 187,  322 => 186,  317 => 183,  315 => 179,  311 => 178,  308 => 177,  306 => 176,  300 => 172,  298 => 168,  294 => 167,  289 => 164,  287 => 160,  283 => 159,  277 => 156,  267 => 148,  254 => 147,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'fronte/base.html.twig' %}

{% block title %}Modifier la Location{% endblock %}

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
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-control {
            border-radius: 8px;
            padding: 0.75rem;
            border: 1px solid #dee2e6;
            font-size: 1rem;
            width: 100%;
            background-color: #fff;
            transition: all 0.3s ease;
            height: 48px;
        }
        .form-control:focus {
            border-color: #ff6b35;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
            outline: none;
        }
        select.form-control {
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23495057' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1em;
            padding-right: 2.5rem;
            cursor: pointer;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }
        .info-box {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-left: 4px solid #ff6b35;
        }
        .info-box p {
            margin: 0.5rem 0;
            font-size: 1rem;
            color: #495057;
        }
        .info-box strong {
            color: #2d3436;
            margin-right: 0.5rem;
        }
        label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.75rem;
            display: block;
            font-size: 1rem;
        }
        .btn-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn-save {
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
        }
        .btn-save:hover {
            background: #ff8c5a;
            transform: translateY(-2px);
        }
        .btn-back {
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
        .btn-back:hover {
            background: #5a6268;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
        }
        input[type=\"date\"] {
            min-height: 48px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"location-container\">
        <div class=\"header\">
            <div class=\"title-section\">
                <span class=\"road-text\">road</span>
                <h1>Modifier la Location</h1>
            </div>
        </div>

        {{ form_start(form) }}
            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.dateDebut, 'Date de début') }}
                    {{ form_widget(form.dateDebut, {
                        'attr': {
                            'class': 'form-control'
                        }
                    }) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.dateFin, 'Date de fin') }}
                    {{ form_widget(form.dateFin, {
                        'attr': {
                            'class': 'form-control'
                        }
                    }) }}
                </div>
            </div>

            {% if form.service is defined %}
            <div class=\"form-group\">
                {{ form_label(form.service, 'Service') }}
                {{ form_widget(form.service, {
                    'attr': {
                        'class': 'form-control'
                    }
                }) }}
            </div>
            {% endif %}

            {% if form.marque is defined %}
            <div class=\"form-group\">
                {{ form_label(form.marque, 'Marque') }}
                {{ form_widget(form.marque, {
                    'attr': {
                        'class': 'form-control'
                    }
                }) }}
            </div>
            {% endif %}

            <div class=\"info-box\">
                <p><strong>Partenaire:</strong> {{ partenaire.nom }}</p>
                <p><strong>Tarif journalier:</strong> {{ partenaire.tarif }} DT</p>
            </div>

            <div class=\"btn-group\">
                <button type=\"submit\" class=\"btn-save\">
                    <i class=\"fas fa-save\"></i>
                    <span>Enregistrer</span>
                </button>
                <a href=\"{{ path('app_location_index') }}\" class=\"btn-back\">
                    <i class=\"fas fa-arrow-left\"></i>
                    <span>Retour</span>
                </a>
            </div>
        {{ form_end(form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "location/edit.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\location\\edit.html.twig");
    }
}
