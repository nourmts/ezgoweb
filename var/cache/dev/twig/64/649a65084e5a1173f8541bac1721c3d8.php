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

/* fronte/ticket_confirmation.html.twig */
class __TwigTemplate_6a2df08cd68740756bbd1427880ff0a2 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/ticket_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/ticket_confirmation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fronte/ticket_confirmation.html.twig", 1);
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

        yield "Confirmation d'achat de ticket";
        
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
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header bg-success text-white\">
                    <h2 class=\"text-center mb-0\">Confirmation d'achat de ticket</h2>
                </div>
                <div class=\"card-body\">
                    <div class=\"alert alert-success\">
                        <h4 class=\"alert-heading\">Félicitations !</h4>
                        <p>Votre ticket a été acheté avec succès.</p>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h4>Détails du ticket</h4>
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">
                                    <strong>Numéro de ticket :</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 24, $this->source); })()), "ticketid", [], "any", false, false, false, 24), "html", null, true);
        yield "
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Prix :</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 27, $this->source); })()), "prix", [], "any", false, false, false, 27), "html", null, true);
        yield " DT
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Date d'achat :</strong> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 30, $this->source); })()), "dateAchat", [], "any", false, false, false, 30), "d/m/Y H:i"), "html", null, true);
        yield "
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-6\">
                            <h4>Détails du bus</h4>
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">
                                    <strong>Station de départ :</strong> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bus"]) || array_key_exists("bus", $context) ? $context["bus"] : (function () { throw new RuntimeError('Variable "bus" does not exist.', 38, $this->source); })()), "idStation", [], "any", false, false, false, 38), "html", null, true);
        yield "
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Places restantes :</strong> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bus"]) || array_key_exists("bus", $context) ? $context["bus"] : (function () { throw new RuntimeError('Variable "bus" does not exist.', 41, $this->source); })()), "nbPlace", [], "any", false, false, false, 41), "html", null, true);
        yield "
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"mt-4 text-center\">
                        <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"btn btn-primary\">
                            Retour à la page d'accueil
                        </a>
                    </div>
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
        return "fronte/ticket_confirmation.html.twig";
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
        return array (  159 => 48,  149 => 41,  143 => 38,  132 => 30,  126 => 27,  120 => 24,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Confirmation d'achat de ticket{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header bg-success text-white\">
                    <h2 class=\"text-center mb-0\">Confirmation d'achat de ticket</h2>
                </div>
                <div class=\"card-body\">
                    <div class=\"alert alert-success\">
                        <h4 class=\"alert-heading\">Félicitations !</h4>
                        <p>Votre ticket a été acheté avec succès.</p>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h4>Détails du ticket</h4>
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">
                                    <strong>Numéro de ticket :</strong> {{ ticket.ticketid }}
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Prix :</strong> {{ ticket.prix }} DT
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Date d'achat :</strong> {{ ticket.dateAchat|date('d/m/Y H:i') }}
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-6\">
                            <h4>Détails du bus</h4>
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">
                                    <strong>Station de départ :</strong> {{ bus.idStation }}
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Places restantes :</strong> {{ bus.nbPlace }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"mt-4 text-center\">
                        <a href=\"{{ path('app_contact') }}\" class=\"btn btn-primary\">
                            Retour à la page d'accueil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "fronte/ticket_confirmation.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\fronte\\ticket_confirmation.html.twig");
    }
}
