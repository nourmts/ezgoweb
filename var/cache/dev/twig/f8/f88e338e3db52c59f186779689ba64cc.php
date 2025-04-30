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

/* station/index.html.twig */
class __TwigTemplate_f7072543cd00a36ec43fe74cc51405c3 extends Template
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
        return "back/gestion_station.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "station/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "station/index.html.twig"));

        $this->parent = $this->loadTemplate("back/gestion_station.html.twig", "station/index.html.twig", 1);
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

        yield "Stations List";
        
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
        yield "<div class=\"container-fluid py-4\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header pb-0 d-flex justify-content-between align-items-center\">
          <h5>Stations List</h5>
          <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_new");
        yield "\" class=\"btn bg-gradient-primary btn-sm mb-0\">
            <i class=\"fas fa-plus me-2\"></i> Create New
          </a>
        </div>
        <div class=\"card-body px-0 pt-0 pb-2\">
          <div class=\"table-responsive p-0\">
            <table class=\"table align-items-center mb-0\">
              <thead>
                <tr>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">ID</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Name</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Region</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Coordinates</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
            // line 30
            yield "                <tr>
                  <td class=\"ps-4\">
                    <p class=\"text-xs font-weight-bold mb-0\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "idS", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                  </td>
                  <td>
                    <p class=\"text-xs font-weight-bold mb-0\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "nom", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
                  </td>
                  <td>
                    <p class=\"text-xs font-weight-bold mb-0\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "region", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
                  </td>
                  <td>
                    <p class=\"text-xs font-weight-bold mb-0\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "cordonnes", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
                  </td>
                  <td class=\"align-middle\">
                    <div class=\"d-flex gap-2\">
                      <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_show", ["idS" => CoreExtension::getAttribute($this->env, $this->source, $context["station"], "idS", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" 
                         class=\"btn btn-link text-info px-3 mb-0\">
                        <i class=\"fas fa-eye me-2\"></i>View
                      </a>
                      <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_edit", ["idS" => CoreExtension::getAttribute($this->env, $this->source, $context["station"], "idS", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" 
                         class=\"btn btn-link text-warning px-3 mb-0\">
                        <i class=\"fas fa-pencil-alt me-2\"></i>Edit
                      </a>
                      <form method=\"post\" action=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_delete", ["idS" => CoreExtension::getAttribute($this->env, $this->source, $context["station"], "idS", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" 
                            onsubmit=\"return confirm('Are you sure you want to delete this station?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["station"], "idS", [], "any", false, false, false, 55))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-link text-danger px-3 mb-0\">
                          <i class=\"fas fa-trash-alt me-2\"></i>Delete
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "                <tr>
                  <td colspan=\"5\" class=\"text-center py-4\">
                    <p class=\"text-sm text-secondary mb-0\">No stations found</p>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['station'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "              </tbody>
            </table>
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
        return "station/index.html.twig";
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
        return array (  207 => 70,  196 => 64,  194 => 63,  181 => 55,  176 => 53,  169 => 49,  162 => 45,  155 => 41,  149 => 38,  143 => 35,  137 => 32,  133 => 30,  128 => 29,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/gestion_station.html.twig' %}

{% block title %}Stations List{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header pb-0 d-flex justify-content-between align-items-center\">
          <h5>Stations List</h5>
          <a href=\"{{ path('app_station_new') }}\" class=\"btn bg-gradient-primary btn-sm mb-0\">
            <i class=\"fas fa-plus me-2\"></i> Create New
          </a>
        </div>
        <div class=\"card-body px-0 pt-0 pb-2\">
          <div class=\"table-responsive p-0\">
            <table class=\"table align-items-center mb-0\">
              <thead>
                <tr>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">ID</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Name</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Region</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Coordinates</th>
                  <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for station in stations %}
                <tr>
                  <td class=\"ps-4\">
                    <p class=\"text-xs font-weight-bold mb-0\">{{ station.idS }}</p>
                  </td>
                  <td>
                    <p class=\"text-xs font-weight-bold mb-0\">{{ station.nom }}</p>
                  </td>
                  <td>
                    <p class=\"text-xs font-weight-bold mb-0\">{{ station.region }}</p>
                  </td>
                  <td>
                    <p class=\"text-xs font-weight-bold mb-0\">{{ station.cordonnes }}</p>
                  </td>
                  <td class=\"align-middle\">
                    <div class=\"d-flex gap-2\">
                      <a href=\"{{ path('app_station_show', {'idS': station.idS}) }}\" 
                         class=\"btn btn-link text-info px-3 mb-0\">
                        <i class=\"fas fa-eye me-2\"></i>View
                      </a>
                      <a href=\"{{ path('app_station_edit', {'idS': station.idS}) }}\" 
                         class=\"btn btn-link text-warning px-3 mb-0\">
                        <i class=\"fas fa-pencil-alt me-2\"></i>Edit
                      </a>
                      <form method=\"post\" action=\"{{ path('app_station_delete', {'idS': station.idS}) }}\" 
                            onsubmit=\"return confirm('Are you sure you want to delete this station?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ station.idS) }}\">
                        <button class=\"btn btn-link text-danger px-3 mb-0\">
                          <i class=\"fas fa-trash-alt me-2\"></i>Delete
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
                {% else %}
                <tr>
                  <td colspan=\"5\" class=\"text-center py-4\">
                    <p class=\"text-sm text-secondary mb-0\">No stations found</p>
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %} ", "station/index.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\station\\index.html.twig");
    }
}
