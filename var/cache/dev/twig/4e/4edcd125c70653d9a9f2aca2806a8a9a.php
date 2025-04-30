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

/* reclamation/edit.html.twig */
class __TwigTemplate_8c22fa87fc274b115a8e4f6ed13a58ef extends Template
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
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/edit.html.twig", 1);
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
        yield " Modifier la réclamation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_2.jpg"), "html", null, true);
        yield "');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-end justify-content-start\">
      <div class=\"col-md-9 ftco-animate pb-5\">
        <h1 class=\"mb-3 bread\">Modifier la réclamation</h1>
        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        yield "\">Accueil <i class=\"fas fa-angle-right\"></i></a></span> <span class=\"mr-2\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\">Réclamations <i class=\"fas fa-angle-right\"></i></a></span> <span>Modifier <i class=\"fas fa-angle-right\"></i></span></p>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
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

        // line 20
        yield "<div class=\"row\">
    <div class=\"col-md-8\">
        <div class=\"card\">
            <div class=\"card-header bg-warning text-white\">
                <h3 class=\"mb-0\">Modifier la réclamation #";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 24, $this->source); })()), "idReclamation", [], "any", false, false, false, 24), "html", null, true);
        yield "</h3>
            </div>
            <div class=\"card-body p-4\">
                ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "bg-light p-4"]]);
        yield "
                    <div class=\"form-group\">
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "reclamation", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Votre réclamation"]);
        yield "
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "reclamation", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "rows" => 7]]);
        yield "
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "reclamation", [], "any", false, false, false, 31), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "categorie", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Catégorie"]);
        yield "
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "categorie", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "categorie", [], "any", false, false, false, 37), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-warning btn-lg px-5\">Mettre à jour</button>
                    </div>
                ";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        yield "
            </div>
            <div class=\"card-footer d-flex justify-content-between\">
                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
                ";
        // line 49
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reclamation/_delete_form.html.twig", ["button_class" => "btn btn-danger"]);
        yield "
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\">
            <div class=\"card-header bg-info text-white\">
                <h4 class=\"mb-0\">Informations</h4>
            </div>
            <div class=\"card-body\">
                <p>Vous pouvez modifier les informations de votre réclamation. Tous les champs sont obligatoires.</p>
                <p>Une fois vos modifications terminées, cliquez sur \"Mettre à jour\" pour enregistrer vos changements.</p>
            </div>
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
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        yield "<script>
    \$(document).ready(function(){
        // No need for datepicker initialization as date field has been removed
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
        return "reclamation/edit.html.twig";
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
        return array (  247 => 68,  234 => 67,  206 => 49,  200 => 46,  194 => 43,  185 => 37,  181 => 36,  177 => 35,  170 => 31,  166 => 30,  162 => 29,  157 => 27,  151 => 24,  145 => 20,  132 => 19,  113 => 12,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} Modifier la réclamation{% endblock %}

{% block hero %}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_2.jpg') }}');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-end justify-content-start\">
      <div class=\"col-md-9 ftco-animate pb-5\">
        <h1 class=\"mb-3 bread\">Modifier la réclamation</h1>
        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"{{ path('app_homepage') }}\">Accueil <i class=\"fas fa-angle-right\"></i></a></span> <span class=\"mr-2\"><a href=\"{{ path('app_reclamation_index') }}\">Réclamations <i class=\"fas fa-angle-right\"></i></a></span> <span>Modifier <i class=\"fas fa-angle-right\"></i></span></p>
      </div>
    </div>
  </div>
</section>
{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-md-8\">
        <div class=\"card\">
            <div class=\"card-header bg-warning text-white\">
                <h3 class=\"mb-0\">Modifier la réclamation #{{ reclamation.idReclamation }}</h3>
            </div>
            <div class=\"card-body p-4\">
                {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'bg-light p-4'}}) }}
                    <div class=\"form-group\">
                        {{ form_label(form.reclamation, 'Votre réclamation', {'label_attr': {'class': 'font-weight-bold'}}) }}
                        {{ form_widget(form.reclamation, {'attr': {'class': 'form-control', 'rows': 7}}) }}
                        {{ form_errors(form.reclamation) }}
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(form.categorie, 'Catégorie', {'label_attr': {'class': 'font-weight-bold'}}) }}
                        {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.categorie) }}
                    </div>
                    
                    <div class=\"form-group text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-warning btn-lg px-5\">Mettre à jour</button>
                    </div>
                {{ form_end(form) }}
            </div>
            <div class=\"card-footer d-flex justify-content-between\">
                <a href=\"{{ path('app_reclamation_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
                {{ include('reclamation/_delete_form.html.twig', {'button_class': 'btn btn-danger'}) }}
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\">
            <div class=\"card-header bg-info text-white\">
                <h4 class=\"mb-0\">Informations</h4>
            </div>
            <div class=\"card-body\">
                <p>Vous pouvez modifier les informations de votre réclamation. Tous les champs sont obligatoires.</p>
                <p>Une fois vos modifications terminées, cliquez sur \"Mettre à jour\" pour enregistrer vos changements.</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
    \$(document).ready(function(){
        // No need for datepicker initialization as date field has been removed
    });
</script>
{% endblock %}
", "reclamation/edit.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\reclamation\\edit.html.twig");
    }
}
