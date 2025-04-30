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

/* fronte/ticket_qr.html.twig */
class __TwigTemplate_c1ff6d4c9392daf2c641ab120aa538f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/ticket_qr.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/ticket_qr.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fronte/ticket_qr.html.twig", 1);
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

        yield "Votre Ticket";
        
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
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h3 class=\"text-center mb-0\">Votre Ticket</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qr_code"]) || array_key_exists("qr_code", $context) ? $context["qr_code"] : (function () { throw new RuntimeError('Variable "qr_code" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\" alt=\"QR Code du ticket\" class=\"img-fluid\" style=\"max-width: 300px;\">
                        <p class=\"mt-2\">Scannez ce QR code pour voir les détails de votre ticket</p>
                    </div>
                    
                    <div class=\"ticket-info\">
                        <h4>Détails du ticket</h4>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">
                                <strong>Numéro de ticket:</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        yield "
                            </li>
                            <li class=\"list-group-item\">
                                <strong>Bus:</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 26, $this->source); })()), "bus", [], "any", false, false, false, 26), "html", null, true);
        yield "
                            </li>
                            <li class=\"list-group-item\">
                                <strong>Prix:</strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 29, $this->source); })()), "prix", [], "any", false, false, false, 29), "html", null, true);
        yield " DT
                            </li>
                            <li class=\"list-group-item\">
                                <strong>Date d'achat:</strong> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), "html", null, true);
        yield "
                            </li>
                        </ul>
                    </div>
                    
                    <div class=\"text-center mt-4\">
                        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\" class=\"btn btn-primary\">Retour à l'accueil</a>
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
        return "fronte/ticket_qr.html.twig";
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
        return array (  149 => 38,  140 => 32,  134 => 29,  128 => 26,  122 => 23,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre Ticket{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h3 class=\"text-center mb-0\">Votre Ticket</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <img src=\"{{ qr_code }}\" alt=\"QR Code du ticket\" class=\"img-fluid\" style=\"max-width: 300px;\">
                        <p class=\"mt-2\">Scannez ce QR code pour voir les détails de votre ticket</p>
                    </div>
                    
                    <div class=\"ticket-info\">
                        <h4>Détails du ticket</h4>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">
                                <strong>Numéro de ticket:</strong> {{ ticket.id }}
                            </li>
                            <li class=\"list-group-item\">
                                <strong>Bus:</strong> {{ ticket.bus }}
                            </li>
                            <li class=\"list-group-item\">
                                <strong>Prix:</strong> {{ ticket.prix }} DT
                            </li>
                            <li class=\"list-group-item\">
                                <strong>Date d'achat:</strong> {{ ticket.date }}
                            </li>
                        </ul>
                    </div>
                    
                    <div class=\"text-center mt-4\">
                        <a href=\"{{ path('app_index') }}\" class=\"btn btn-primary\">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "fronte/ticket_qr.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\fronte\\ticket_qr.html.twig");
    }
}
