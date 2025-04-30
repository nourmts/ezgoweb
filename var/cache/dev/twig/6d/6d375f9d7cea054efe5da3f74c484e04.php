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

/* emails/ticket_confirmation.html.twig */
class __TwigTemplate_e5a93d234fea558c84e4710828f1dc91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/ticket_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/ticket_confirmation.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation Ticket</title>
</head>
<body>
    <h1>Ticket Confirmé</h1>

    <p>Merci pour votre achat ! Voici les détails :</p>

    <ul>
        <li><strong>ID Ticket :</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 13, $this->source); })()), "ticketid", [], "any", false, false, false, 13), "html", null, true);
        yield "</li>
        <li><strong>Prix :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 14, $this->source); })()), "prix", [], "any", false, false, false, 14), "html", null, true);
        yield " DT</li>
        <li><strong>Date :</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 15, $this->source); })()), "dateAchat", [], "any", false, false, false, 15), "Y-m-d H:i:s"), "html", null, true);
        yield "</li>
    </ul>

    <h2>QR Code :</h2>
    <img src=\"data:image/png;base64,";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrImage"]) || array_key_exists("qrImage", $context) ? $context["qrImage"] : (function () { throw new RuntimeError('Variable "qrImage" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\" alt=\"QR Code du ticket\">

    <p>Présentez ce QR code à bord du bus.</p>

    <button onclick=\"window.print()\">🖨️ Imprimer</button>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/ticket_confirmation.html.twig";
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
        return array (  77 => 19,  70 => 15,  66 => 14,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation Ticket</title>
</head>
<body>
    <h1>Ticket Confirmé</h1>

    <p>Merci pour votre achat ! Voici les détails :</p>

    <ul>
        <li><strong>ID Ticket :</strong> {{ ticket.ticketid }}</li>
        <li><strong>Prix :</strong> {{ ticket.prix }} DT</li>
        <li><strong>Date :</strong> {{ ticket.dateAchat|date('Y-m-d H:i:s') }}</li>
    </ul>

    <h2>QR Code :</h2>
    <img src=\"data:image/png;base64,{{ qrImage }}\" alt=\"QR Code du ticket\">

    <p>Présentez ce QR code à bord du bus.</p>

    <button onclick=\"window.print()\">🖨️ Imprimer</button>
</body>
</html>
", "emails/ticket_confirmation.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\emails\\ticket_confirmation.html.twig");
    }
}
