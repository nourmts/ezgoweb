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

/* fronte/reclamation/show.html.twig */
class __TwigTemplate_06aeaaa2cd954059e98e2adfee43a487 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/reclamation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fronte/reclamation/show.html.twig", 1);
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
        yield " Détails de la réclamation";
        
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
        <h1 class=\"mb-3 bread\">Détails de la réclamation</h1>
        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        yield "\">Accueil <i class=\"fas fa-angle-right\"></i></a></span> <span class=\"mr-2\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\">Réclamations <i class=\"fas fa-angle-right\"></i></a></span> <span>Détails <i class=\"fas fa-angle-right\"></i></span></p>
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
        yield "<div class=\"row\">
    <div class=\"col-md-8\">
        <div class=\"card\">
           <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
    <h3 class=\"mb-0\">Réclamation #";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 24, $this->source); })()), "idReclamation", [], "any", false, false, false, 24), "html", null, true);
        yield "</h3>
 <span class=\"badge 
    ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 26, $this->source); })()), "etat", [], "any", false, false, false, 26) == "en cours")) {
            // line 27
            yield "        bg-warning text-dark
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 28, $this->source); })()), "etat", [], "any", false, false, false, 28) == "non traité")) {
            // line 29
            yield "        bg-danger
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 30, $this->source); })()), "etat", [], "any", false, false, false, 30) == "traité")) {
            // line 31
            yield "        bg-success
    ";
        } else {
            // line 33
            yield "        bg-secondary
    ";
        }
        // line 35
        yield "\">
    ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 36, $this->source); })()), "etat", [], "any", false, false, false, 36), "html", null, true);
        yield "
</span>
</div>

            <div class=\"card-body\">
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <h5 class=\"text-muted\">Catégorie</h5>
                        <p class=\"font-weight-bold\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 44, $this->source); })()), "categorie", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <h5 class=\"text-muted\">Date</h5>
                        <p class=\"font-weight-bold\">";
        // line 48
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 48, $this->source); })()), "date", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 48, $this->source); })()), "date", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true)) : (""));
        yield "</p>
                    </div>
                </div>
                
                <h5 class=\"text-muted\">Contenu de la réclamation</h5>
                <div class=\"p-3 bg-light rounded mb-4\">
                    <p>";
        // line 54
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 54, $this->source); })()), "reclamation", [], "any", false, false, false, 54), "html", null, true));
        yield "</p>
                </div>
            </div>
            <div class=\"card-footer d-flex justify-content-between\">
                <div>
                    <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Retour
                    </a>
                </div>
                <div>
                    <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["idReclamation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 64, $this->source); })()), "idReclamation", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                        <i class=\"fas fa-edit\"></i> Modifier
                    </a>
                </div>
              
                <div>
                    <a href=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 70, $this->source); })()), "idReclamation", [], "any", false, false, false, 70)]), "html", null, true);
        yield "\" class=\"btn btn-info\">
                        <i class=\"fas fa-comments\"></i> Ouvrir la discussion
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\">
            <div class=\"card-header bg-danger text-white\">
                <h4 class=\"mb-0\">Supprimer</h4>
            </div>
            <div class=\"card-body\">
                <p>Attention, cette action est irréversible. La réclamation sera définitivement supprimée.</p>
                ";
        // line 84
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reclamation/_delete_form.html.twig");
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"form-group text-center mt-4\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">Envoyer</button>
    <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"btn btn-secondary btn-lg px-5\">
        <i class=\"fas fa-arrow-left\"></i> Retour à la liste
    </a>
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
        return "fronte/reclamation/show.html.twig";
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
        return array (  255 => 91,  245 => 84,  228 => 70,  219 => 64,  211 => 59,  203 => 54,  194 => 48,  187 => 44,  176 => 36,  173 => 35,  169 => 33,  165 => 31,  163 => 30,  160 => 29,  158 => 28,  155 => 27,  153 => 26,  148 => 24,  142 => 20,  129 => 19,  110 => 12,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} Détails de la réclamation{% endblock %}

{% block hero %}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('/assets/images/bg_2.jpg');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-end justify-content-start\">
      <div class=\"col-md-9 ftco-animate pb-5\">
        <h1 class=\"mb-3 bread\">Détails de la réclamation</h1>
        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"{{ path('app_homepage') }}\">Accueil <i class=\"fas fa-angle-right\"></i></a></span> <span class=\"mr-2\"><a href=\"{{ path('app_reclamation_index') }}\">Réclamations <i class=\"fas fa-angle-right\"></i></a></span> <span>Détails <i class=\"fas fa-angle-right\"></i></span></p>
      </div>
    </div>
  </div>
</section>
{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-md-8\">
        <div class=\"card\">
           <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
    <h3 class=\"mb-0\">Réclamation #{{ reclamation.idReclamation }}</h3>
 <span class=\"badge 
    {% if reclamation.etat =='en cours' %}
        bg-warning text-dark
    {% elseif reclamation.etat =='non traité' %}
        bg-danger
    {% elseif reclamation.etat =='traité' %}
        bg-success
    {% else %}
        bg-secondary
    {% endif %}
\">
    {{ reclamation.etat }}
</span>
</div>

            <div class=\"card-body\">
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <h5 class=\"text-muted\">Catégorie</h5>
                        <p class=\"font-weight-bold\">{{ reclamation.categorie }}</p>
                    </div>
                    <div class=\"col-md-6\">
                        <h5 class=\"text-muted\">Date</h5>
                        <p class=\"font-weight-bold\">{{ reclamation.date ? reclamation.date|date('d/m/Y') : '' }}</p>
                    </div>
                </div>
                
                <h5 class=\"text-muted\">Contenu de la réclamation</h5>
                <div class=\"p-3 bg-light rounded mb-4\">
                    <p>{{ reclamation.reclamation|nl2br }}</p>
                </div>
            </div>
            <div class=\"card-footer d-flex justify-content-between\">
                <div>
                    <a href=\"{{ path('app_reclamation_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Retour
                    </a>
                </div>
                <div>
                    <a href=\"{{ path('app_reclamation_edit', {'idReclamation': reclamation.idReclamation}) }}\" class=\"btn btn-warning\">
                        <i class=\"fas fa-edit\"></i> Modifier
                    </a>
                </div>
              
                <div>
                    <a href=\"{{ path('app_discussion', {'id': reclamation.idReclamation}) }}\" class=\"btn btn-info\">
                        <i class=\"fas fa-comments\"></i> Ouvrir la discussion
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"card\">
            <div class=\"card-header bg-danger text-white\">
                <h4 class=\"mb-0\">Supprimer</h4>
            </div>
            <div class=\"card-body\">
                <p>Attention, cette action est irréversible. La réclamation sera définitivement supprimée.</p>
                {{ include('reclamation/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
</div>
<div class=\"form-group text-center mt-4\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">Envoyer</button>
    <a href=\"{{ path('app_reclamation_index') }}\" class=\"btn btn-secondary btn-lg px-5\">
        <i class=\"fas fa-arrow-left\"></i> Retour à la liste
    </a>
</div>
{% endblock %}
", "fronte/reclamation/show.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\fronte\\reclamation\\show.html.twig");
    }
}
