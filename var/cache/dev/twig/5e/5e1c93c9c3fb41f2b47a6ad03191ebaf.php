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

/* emails/ticket.html.twig */
class __TwigTemplate_0c4a86b997092a464d7680dfb9f302f0 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/ticket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/ticket.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation de ticket</title>
    <style>
        .ticket-info {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .qr-code {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class=\"ticket-info\">
        <h1 style=\"color: #2c3e50;\">Merci pour votre achat!</h1>
        
        <h2>Détails du ticket</h2>
        <ul>
            <li><strong>Numéro:</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 25, $this->source); })()), "ticketid", [], "any", false, false, false, 25), "html", null, true);
        yield "</li>
            <li><strong>Bus:</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bus"]) || array_key_exists("bus", $context) ? $context["bus"] : (function () { throw new RuntimeError('Variable "bus" does not exist.', 26, $this->source); })()), "imatriculation", [], "any", false, false, false, 26), "html", null, true);
        yield "</li>
            <li><strong>Prix:</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 27, $this->source); })()), "prix", [], "any", false, false, false, 27), "html", null, true);
        yield " DT</li>
            <li><strong>Date:</strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 28, $this->source); })()), "dateAchat", [], "any", false, false, false, 28), "d/m/Y H:i"), "html", null, true);
        yield "</li>
        </ul>
    </div>
    
    <div class=\"qr-code\">
        <h3>QR Code de validation</h3>
        <img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "\" alt=\"QR Code du ticket\" style=\"max-width: 300px;\">
        <p>Présentez ce code à l'embarquement</p>
    </div>
</body>
</html> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/ticket.html.twig";
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
        return array (  95 => 34,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation de ticket</title>
    <style>
        .ticket-info {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .qr-code {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class=\"ticket-info\">
        <h1 style=\"color: #2c3e50;\">Merci pour votre achat!</h1>
        
        <h2>Détails du ticket</h2>
        <ul>
            <li><strong>Numéro:</strong> {{ ticket.ticketid }}</li>
            <li><strong>Bus:</strong> {{ bus.imatriculation }}</li>
            <li><strong>Prix:</strong> {{ ticket.prix }} DT</li>
            <li><strong>Date:</strong> {{ ticket.dateAchat|date('d/m/Y H:i') }}</li>
        </ul>
    </div>
    
    <div class=\"qr-code\">
        <h3>QR Code de validation</h3>
        <img src=\"{{ qrCode }}\" alt=\"QR Code du ticket\" style=\"max-width: 300px;\">
        <p>Présentez ce code à l'embarquement</p>
    </div>
</body>
</html> ", "emails/ticket.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\emails\\ticket.html.twig");
    }
}
