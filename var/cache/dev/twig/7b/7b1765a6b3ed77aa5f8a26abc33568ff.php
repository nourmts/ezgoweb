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

/* bus/show.html.twig */
class __TwigTemplate_0dfc7a70f726a1b7da1f51e1ce195431 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bus/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bus/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<title>Bus</title>

";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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
        yield "    <h1>Bus</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Imatriculation</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bu"]) || array_key_exists("bu", $context) ? $context["bu"] : (function () { throw new RuntimeError('Variable "bu" does not exist.', 12, $this->source); })()), "imatriculation", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>IdStation</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bu"]) || array_key_exists("bu", $context) ? $context["bu"] : (function () { throw new RuntimeError('Variable "bu" does not exist.', 16, $this->source); })()), "idStation", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nb_place</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bu"]) || array_key_exists("bu", $context) ? $context["bu"] : (function () { throw new RuntimeError('Variable "bu" does not exist.', 20, $this->source); })()), "nbPlace", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date_arrive</th>
                <td>";
        // line 24
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bu"]) || array_key_exists("bu", $context) ? $context["bu"] : (function () { throw new RuntimeError('Variable "bu" does not exist.', 24, $this->source); })()), "dateArrive", [], "any", false, false, false, 24)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bu"]) || array_key_exists("bu", $context) ? $context["bu"] : (function () { throw new RuntimeError('Variable "bu" does not exist.', 24, $this->source); })()), "dateArrive", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Date_sortie</th>
                <td>";
        // line 28
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bu"]) || array_key_exists("bu", $context) ? $context["bu"] : (function () { throw new RuntimeError('Variable "bu" does not exist.', 28, $this->source); })()), "dateSortie", [], "any", false, false, false, 28)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bu"]) || array_key_exists("bu", $context) ? $context["bu"] : (function () { throw new RuntimeError('Variable "bu" does not exist.', 28, $this->source); })()), "dateSortie", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bus_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bus_edit", ["imatriculation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bu"]) || array_key_exists("bu", $context) ? $context["bu"] : (function () { throw new RuntimeError('Variable "bu" does not exist.', 35, $this->source); })()), "imatriculation", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 37
        yield Twig\Extension\CoreExtension::include($this->env, $context, "bus/_delete_form.html.twig");
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
        return "bus/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  132 => 37,  127 => 35,  122 => 33,  114 => 28,  107 => 24,  100 => 20,  93 => 16,  86 => 12,  78 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<title>Bus</title>

{% block body %}
    <h1>Bus</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Imatriculation</th>
                <td>{{ bu.imatriculation }}</td>
            </tr>
            <tr>
                <th>IdStation</th>
                <td>{{ bu.idStation }}</td>
            </tr>
            <tr>
                <th>Nb_place</th>
                <td>{{ bu.nbPlace }}</td>
            </tr>
            <tr>
                <th>Date_arrive</th>
                <td>{{ bu.dateArrive ? bu.dateArrive|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Date_sortie</th>
                <td>{{ bu.dateSortie ? bu.dateSortie|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_bus_index') }}\">back to list</a>

    <a href=\"{{ path('app_bus_edit', {'imatriculation': bu.imatriculation}) }}\">edit</a>

    {{ include('bus/_delete_form.html.twig') }}
{% endblock %}
", "bus/show.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\bus\\show.html.twig");
    }
}
