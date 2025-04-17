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

/* back/ticket/modifier_ticket.html.twig */
class __TwigTemplate_4849e78c471b4014d7992691990532f4 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/ticket/modifier_ticket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/ticket/modifier_ticket.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/ticket/modifier_ticket.html.twig", 1);
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

        yield "Modifier Ticket";
        
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
        yield "    <div class=\"container-fluid py-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-lg-8\">
                <div class=\"card mb-4\">
                    <div class=\"card-header pb-0\">
                        <h2 class=\"h4 mb-0\">Modifier Ticket</h2>
                    </div>
                    <div class=\"card-body bg-white p-4\">
                        ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "form-container"]]);
        yield "
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "bus_id", [], "any", false, false, false, 17), 'row', ["label" => "ID de bus", "attr" => ["class" => "form-control"]]);
        // line 20
        yield "
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prix", [], "any", false, false, false, 23), 'row', ["label" => "Prix", "attr" => ["class" => "form-control"]]);
        // line 26
        yield "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 mb-3\">
                                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateAchat", [], "any", false, false, false, 31), 'row', ["label" => "Date d'achat", "attr" => ["class" => "form-control"]]);
        // line 34
        yield "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-12 text-end\">
                                    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket");
        yield "\" class=\"btn btn-secondary me-2\">Retour</a>
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                            </div>
                        ";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        yield "
                    </div>
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
        return "back/ticket/modifier_ticket.html.twig";
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
        return array (  148 => 43,  141 => 39,  134 => 34,  132 => 31,  125 => 26,  123 => 23,  118 => 20,  116 => 17,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/base.html.twig' %}

{% block title %}Modifier Ticket{% endblock %}

{% block body %}
    <div class=\"container-fluid py-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-lg-8\">
                <div class=\"card mb-4\">
                    <div class=\"card-header pb-0\">
                        <h2 class=\"h4 mb-0\">Modifier Ticket</h2>
                    </div>
                    <div class=\"card-body bg-white p-4\">
                        {{ form_start(form, {'attr': {'class': 'form-container'}}) }}
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    {{ form_row(form.bus_id, {
                                        'label': 'ID de bus',
                                        'attr': {'class': 'form-control'}
                                    }) }}
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    {{ form_row(form.prix, {
                                        'label': 'Prix',
                                        'attr': {'class': 'form-control'}
                                    }) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 mb-3\">
                                    {{ form_row(form.dateAchat, {
                                        'label': 'Date d\\'achat',
                                        'attr': {'class': 'form-control'}
                                    }) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-12 text-end\">
                                    <a href=\"{{ path('app_ticket') }}\" class=\"btn btn-secondary me-2\">Retour</a>
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "back/ticket/modifier_ticket.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\piWeb\\templates\\back\\ticket\\modifier_ticket.html.twig");
    }
}
