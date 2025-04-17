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

/* bus/index.html.twig */
class __TwigTemplate_80e9da785f9cf080a214722ae94989f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bus/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bus/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<title>Bus index</title>

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
        yield "    <h1>Bus index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Imatriculation</th>
                <th>IdStation</th>
                <th>Nb_place</th>
                <th>Date_arrive</th>
                <th>Date_sortie</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["buses"]) || array_key_exists("buses", $context) ? $context["buses"] : (function () { throw new RuntimeError('Variable "buses" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bu"]) {
            // line 21
            yield "            <tr>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bu"], "imatriculation", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bu"], "idStation", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bu"], "nbPlace", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                <td>";
            // line 25
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["bu"], "dateArrive", [], "any", false, false, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bu"], "dateArrive", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 26
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["bu"], "dateSortie", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bu"], "dateSortie", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>
                    <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bus_show", ["imatriculation" => CoreExtension::getAttribute($this->env, $this->source, $context["bu"], "imatriculation", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bus_edit", ["imatriculation" => CoreExtension::getAttribute($this->env, $this->source, $context["bu"], "imatriculation", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 32
        if (!$context['_iterated']) {
            // line 33
            yield "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bu'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bus_new");
        yield "\">Create new</a>
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
        return "bus/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  151 => 40,  146 => 37,  137 => 33,  135 => 32,  127 => 29,  123 => 28,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  99 => 21,  94 => 20,  78 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<title>Bus index</title>

{% block body %}
    <h1>Bus index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Imatriculation</th>
                <th>IdStation</th>
                <th>Nb_place</th>
                <th>Date_arrive</th>
                <th>Date_sortie</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for bu in buses %}
            <tr>
                <td>{{ bu.imatriculation }}</td>
                <td>{{ bu.idStation }}</td>
                <td>{{ bu.nbPlace }}</td>
                <td>{{ bu.dateArrive ? bu.dateArrive|date('Y-m-d') : '' }}</td>
                <td>{{ bu.dateSortie ? bu.dateSortie|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_bus_show', {'imatriculation': bu.imatriculation}) }}\">show</a>
                    <a href=\"{{ path('app_bus_edit', {'imatriculation': bu.imatriculation}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_bus_new') }}\">Create new</a>
{% endblock %}
", "bus/index.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\piWeb\\templates\\bus\\index.html.twig");
    }
}
