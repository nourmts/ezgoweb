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

/* fronte/reclamation/new.html.twig */
class __TwigTemplate_f3e2e6fb0b0f21a98927bcf7cd91d83c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/reclamation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/reclamation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fronte/reclamation/new.html.twig", 1);
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
        yield " Nouvelle réclamation";
        
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
        yield "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('/assets/images/bg_2.jpg');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-end justify-content-start\">
      <div class=\"col-md-9 ftco-animate pb-5\">
        <h1 class=\"mb-3 bread\">Nouvelle réclamation</h1>
        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">Accueil <i class=\"fas fa-angle-right\"></i></a></span> <span class=\"mr-2\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\">Réclamations <i class=\"fas fa-angle-right\"></i></a></span> <span>Nouvelle <i class=\"fas fa-angle-right\"></i></span></p>
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
        yield "<div class=\"row justify-content-center\">
    <div class=\"col-md-8\">
        <div class=\"card\">
            <div class=\"card-header bg-primary text-white\">
                <h3 class=\"mb-0\">Créer une nouvelle réclamation</h3>
            </div>
            <div class=\"card-body p-4\">
                ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "bg-light p-4"]]);
        yield "
                    <div class=\"form-group\">
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "categorie", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Catégorie"]);
        yield "
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "categorie", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "categorie", [], "any", false, false, false, 31), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "reclamation", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Votre réclamation"]);
        yield "
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "reclamation", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "rows" => 7, "placeholder" => "Décrivez votre réclamation en détail"]]);
        yield "
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "reclamation", [], "any", false, false, false, 37), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">Envoyer</button>
                        <button type=\"reset\" class=\"btn btn-secondary btn-lg px-5\">Annuler</button>
            
                    </div>
                ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        yield "
            </div>
            <div class=\"card-footer\">
                <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
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

    // line 57
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

        // line 58
        yield "<script>
    \$(document).ready(function(){
        // Initialiser datepicker pour les champs de date
        \$('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
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
        return "fronte/reclamation/new.html.twig";
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
        return array (  229 => 58,  216 => 57,  197 => 48,  191 => 45,  180 => 37,  176 => 36,  172 => 35,  165 => 31,  161 => 30,  157 => 29,  152 => 27,  143 => 20,  130 => 19,  111 => 12,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} Nouvelle réclamation{% endblock %}

{% block hero %}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('/assets/images/bg_2.jpg');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-end justify-content-start\">
      <div class=\"col-md-9 ftco-animate pb-5\">
        <h1 class=\"mb-3 bread\">Nouvelle réclamation</h1>
        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"{{ path('app_index') }}\">Accueil <i class=\"fas fa-angle-right\"></i></a></span> <span class=\"mr-2\"><a href=\"{{ path('app_reclamation_index') }}\">Réclamations <i class=\"fas fa-angle-right\"></i></a></span> <span>Nouvelle <i class=\"fas fa-angle-right\"></i></span></p>
      </div>
    </div>
  </div>
</section>
{% endblock %}

{% block body %}
<div class=\"row justify-content-center\">
    <div class=\"col-md-8\">
        <div class=\"card\">
            <div class=\"card-header bg-primary text-white\">
                <h3 class=\"mb-0\">Créer une nouvelle réclamation</h3>
            </div>
            <div class=\"card-body p-4\">
                {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'bg-light p-4'}}) }}
                    <div class=\"form-group\">
                        {{ form_label(form.categorie, 'Catégorie', {'label_attr': {'class': 'font-weight-bold'}}) }}
                        {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.categorie) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.reclamation, 'Votre réclamation', {'label_attr': {'class': 'font-weight-bold'}}) }}
                        {{ form_widget(form.reclamation, {'attr': {'class': 'form-control', 'rows': 7, 'placeholder': 'Décrivez votre réclamation en détail'}}) }}
                        {{ form_errors(form.reclamation) }}
                    </div>
                    
                    <div class=\"form-group text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">Envoyer</button>
                        <button type=\"reset\" class=\"btn btn-secondary btn-lg px-5\">Annuler</button>
            
                    </div>
                {{ form_end(form) }}
            </div>
            <div class=\"card-footer\">
                <a href=\"{{ path('app_reclamation_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
    \$(document).ready(function(){
        // Initialiser datepicker pour les champs de date
        \$('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>
{% endblock %}
", "fronte/reclamation/new.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\fronte\\reclamation\\new.html.twig");
    }
}
