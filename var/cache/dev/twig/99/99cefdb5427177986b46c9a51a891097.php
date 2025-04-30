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

/* back/discussion/index.html.twig */
class __TwigTemplate_f6d151b6a606cc196129988e39ea40bb extends Template
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
            'current_page' => [$this, 'block_current_page'],
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back/baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/discussion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/discussion/index.html.twig"));

        $this->parent = $this->loadTemplate("back/baseback.html.twig", "back/discussion/index.html.twig", 1);
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

        yield "Discussion - Réclamation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 3, $this->source); })()), "idReclamation", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_current_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "current_page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "current_page"));

        yield "Discussion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Discussion - Réclamation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 6, $this->source); })()), "idReclamation", [], "any", false, false, false, 6), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header pb-0\">
          <div class=\"d-flex justify-content-between align-items-center\">
            <h5>Détails de la réclamation</h5>
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_homedashboard");
        yield "\" class=\"btn btn-sm btn-outline-primary\">Retour</a>
          </div>
        </div>
        <div class=\"card-body\">
          <p><strong>Réclamation :</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 20, $this->source); })()), "reclamation", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
          <p><strong>Catégorie :</strong> ";
        // line 21
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["reclamation"] ?? null), "categorie", [], "any", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 21, $this->source); })()), "categorie", [], "any", false, false, false, 21)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 21, $this->source); })()), "categorie", [], "any", false, false, false, 21), "html", null, true)) : ("Non spécifiée"));
        yield "</p>
          <p>
            <strong>État :</strong> 
            <span class=\"badge ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 24, $this->source); })()), "etat", [], "any", false, false, false, 24) == "traité")) {
            yield "bg-success";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 24, $this->source); })()), "etat", [], "any", false, false, false, 24) == "en cours")) {
            yield "bg-warning";
        } else {
            yield "bg-danger";
        }
        yield "\">
              ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 25, $this->source); })()), "etat", [], "any", false, false, false, 25), "html", null, true);
        yield "
            </span>
          </p>
          
          ";
        // line 29
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 29, $this->source); })()), "etat", [], "any", false, false, false, 29) != "traité"))) {
            // line 30
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation_marquer_traite", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 30, $this->source); })()), "idReclamation", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-lg\">
              <i class=\"fas fa-check-circle me-2\"></i> Marquer comme traité
            </a>
          ";
        }
        // line 34
        yield "        </div>
      </div>
    </div>
  </div>

  <!-- Liste des discussions -->
  <div class=\"row mt-4\">
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header pb-0\">
          <h5>Historique des messages</h5>
        </div>
        <div class=\"card-body pt-0 pb-2\">
          <div class=\"discussions\">
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["discussions"]) || array_key_exists("discussions", $context) ? $context["discussions"] : (function () { throw new RuntimeError('Variable "discussions" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 49
            yield "              <div class=\"discussion p-3 mb-3 ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "auteur", [], "any", false, false, false, 49) == "Admin")) {
                yield "bg-light";
            } else {
                yield "bg-gradient-light";
            }
            yield " border-radius-md\">
                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                  <span class=\"font-weight-bold ";
            // line 51
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "auteur", [], "any", false, false, false, 51) == "Admin")) {
                yield "text-primary";
            } else {
                yield "text-info";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "auteur", [], "any", false, false, false, 51), "html", null, true);
            yield "</span>
                  <span class=\"text-xs text-secondary\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "date", [], "any", false, false, false, 52), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                </div>
                <p class=\"mb-0\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "message", [], "any", false, false, false, 54), "html", null, true);
            yield "</p>
              </div>
            ";
            $context['_iterated'] = true;
        }
        // line 56
        if (!$context['_iterated']) {
            // line 57
            yield "              <div class=\"text-center p-4\">
                <p class=\"opacity-8\">Aucun message pour cette réclamation.</p>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['discussion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Formulaire d'ajout de message -->
  <div class=\"row mt-4\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header pb-0\">
          <h5>Ajouter un message</h5>
        </div>
        <div class=\"card-body\">
          <form method=\"post\" action=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 75, $this->source); })()), "idReclamation", [], "any", false, false, false, 75)]), "html", null, true);
        yield "\">
            <div class=\"form-group\">
              <textarea name=\"message\" rows=\"4\" class=\"form-control\" placeholder=\"Écrivez votre message ici...\"></textarea>
            </div>
            <div class=\"text-end mt-3\">
              <button type=\"submit\" class=\"btn bg-gradient-primary\">Envoyer le message</button>
            </div>
          </form>
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

    // line 90
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

        // line 91
        yield "<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Faire défiler jusqu'au dernier message
    const discussions = document.querySelector('.discussions');
    if (discussions) {
      discussions.scrollTop = discussions.scrollHeight;
    }
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
        return "back/discussion/index.html.twig";
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
        return array (  322 => 91,  309 => 90,  284 => 75,  268 => 61,  259 => 57,  257 => 56,  250 => 54,  245 => 52,  235 => 51,  225 => 49,  220 => 48,  204 => 34,  196 => 30,  194 => 29,  187 => 25,  177 => 24,  171 => 21,  167 => 20,  160 => 16,  151 => 9,  138 => 8,  114 => 6,  91 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/baseback.html.twig' %}

{% block title %}Discussion - Réclamation #{{ reclamation.idReclamation }}{% endblock %}

{% block current_page %}Discussion{% endblock %}
{% block page_title %}Discussion - Réclamation #{{ reclamation.idReclamation }}{% endblock %}

{% block body %}
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header pb-0\">
          <div class=\"d-flex justify-content-between align-items-center\">
            <h5>Détails de la réclamation</h5>
            <a href=\"{{ path('app_back_homedashboard') }}\" class=\"btn btn-sm btn-outline-primary\">Retour</a>
          </div>
        </div>
        <div class=\"card-body\">
          <p><strong>Réclamation :</strong> {{ reclamation.reclamation }}</p>
          <p><strong>Catégorie :</strong> {{ reclamation.categorie ?? 'Non spécifiée' }}</p>
          <p>
            <strong>État :</strong> 
            <span class=\"badge {% if reclamation.etat == 'traité' %}bg-success{% elseif reclamation.etat == 'en cours' %}bg-warning{% else %}bg-danger{% endif %}\">
              {{ reclamation.etat }}
            </span>
          </p>
          
          {% if is_granted('ROLE_ADMIN') and reclamation.etat != 'traité' %}
            <a href=\"{{ path('app_back_reclamation_marquer_traite', {id: reclamation.idReclamation}) }}\" class=\"btn btn-success btn-lg\">
              <i class=\"fas fa-check-circle me-2\"></i> Marquer comme traité
            </a>
          {% endif %}
        </div>
      </div>
    </div>
  </div>

  <!-- Liste des discussions -->
  <div class=\"row mt-4\">
    <div class=\"col-12\">
      <div class=\"card mb-4\">
        <div class=\"card-header pb-0\">
          <h5>Historique des messages</h5>
        </div>
        <div class=\"card-body pt-0 pb-2\">
          <div class=\"discussions\">
            {% for discussion in discussions %}
              <div class=\"discussion p-3 mb-3 {% if discussion.auteur == 'Admin' %}bg-light{% else %}bg-gradient-light{% endif %} border-radius-md\">
                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                  <span class=\"font-weight-bold {% if discussion.auteur == 'Admin' %}text-primary{% else %}text-info{% endif %}\">{{ discussion.auteur }}</span>
                  <span class=\"text-xs text-secondary\">{{ discussion.date|date('d/m/Y H:i') }}</span>
                </div>
                <p class=\"mb-0\">{{ discussion.message }}</p>
              </div>
            {% else %}
              <div class=\"text-center p-4\">
                <p class=\"opacity-8\">Aucun message pour cette réclamation.</p>
              </div>
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Formulaire d'ajout de message -->
  <div class=\"row mt-4\">
    <div class=\"col-12\">
      <div class=\"card\">
        <div class=\"card-header pb-0\">
          <h5>Ajouter un message</h5>
        </div>
        <div class=\"card-body\">
          <form method=\"post\" action=\"{{ path('app_back_discussion', {id: reclamation.idReclamation}) }}\">
            <div class=\"form-group\">
              <textarea name=\"message\" rows=\"4\" class=\"form-control\" placeholder=\"Écrivez votre message ici...\"></textarea>
            </div>
            <div class=\"text-end mt-3\">
              <button type=\"submit\" class=\"btn bg-gradient-primary\">Envoyer le message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Faire défiler jusqu'au dernier message
    const discussions = document.querySelector('.discussions');
    if (discussions) {
      discussions.scrollTop = discussions.scrollHeight;
    }
  });
</script>
{% endblock %} ", "back/discussion/index.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\back\\discussion\\index.html.twig");
    }
}
