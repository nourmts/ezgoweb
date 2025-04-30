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

/* fronte/home/index.html.twig */
class __TwigTemplate_a9662b511d249450411e5f6ec6b58baa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fronte/home/index.html.twig", 1);
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
        yield " Accueil";
        
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
        yield "<div class=\"hero-wrap\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_1.jpg"), "html", null, true);
        yield "');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text justify-content-start align-items-center\">
            <div class=\"col-lg-6 col-md-6 ftco-animate d-flex align-items-end\">
                <div class=\"text\">
                    <h1 class=\"mb-4\">Bienvenue sur <span>notre plateforme</span> <span>de location</span></h1>
                    <p style=\"font-size: 18px;\">Notre service client est à votre écoute. Vous pouvez déposer une réclamation à tout moment.</p>
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-primary py-3 px-4 mt-3\">Déposer une réclamation</a>
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

    // line 22
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

        // line 23
        yield "<div class=\"row justify-content-center mb-5\">
    <div class=\"col-md-7 text-center heading-section ftco-animate\">
        <span class=\"subheading\">Nos services</span>
        <h2 class=\"mb-3\">Ce que nous proposons</h2>
    </div>
</div>

<div class=\"row d-flex\">
    <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
        <div class=\"media block-6 services\">
            <div class=\"media-body py-md-4\">
                <div class=\"d-flex mb-3 align-items-center\">
                    <div class=\"icon\"><i class=\"fas fa-headset fa-2x text-primary\"></i></div>
                    <h3 class=\"heading mb-0 pl-3\">Support 24/7</h3>
                </div>
                <p>Notre service client est disponible 24h/24 et 7j/7 pour répondre à vos questions.</p>
            </div>
        </div>      
    </div>
    <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
        <div class=\"media block-6 services\">
            <div class=\"media-body py-md-4\">
                <div class=\"d-flex mb-3 align-items-center\">
                    <div class=\"icon\"><i class=\"fas fa-map-marked-alt fa-2x text-primary\"></i></div>
                    <h3 class=\"heading mb-0 pl-3\">Nombreuses destinations</h3>
                </div>
                <p>Nos agences sont présentes dans de nombreuses villes pour vous servir.</p>
            </div>
        </div>      
    </div>
    <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
        <div class=\"media block-6 services\">
            <div class=\"media-body py-md-4\">
                <div class=\"d-flex mb-3 align-items-center\">
                    <div class=\"icon\"><i class=\"fas fa-calendar-check fa-2x text-primary\"></i></div>
                    <h3 class=\"heading mb-0 pl-3\">Réservations</h3>
                </div>
                <p>Réservez votre voiture en quelques clics, 24h/24.</p>
            </div>
        </div>      
    </div>
    <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
        <div class=\"media block-6 services\">
            <div class=\"media-body py-md-4\">
                <div class=\"d-flex mb-3 align-items-center\">
                    <div class=\"icon\"><i class=\"fas fa-car fa-2x text-primary\"></i></div>
                    <h3 class=\"heading mb-0 pl-3\">Location de voitures</h3>
                </div>
                <p>Large choix de véhicules pour tous vos besoins.</p>
            </div>
        </div>      
    </div>
</div>

<div class=\"row justify-content-center mt-5\">
    <div class=\"col-md-4\">
        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"btn btn-primary btn-lg btn-block py-3\">
            <i class=\"fas fa-list mr-2\"></i> Voir toutes les réclamations
        </a>
    </div>
    <div class=\"col-md-4\">
        <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-success btn-lg btn-block py-3\">
            <i class=\"fas fa-plus mr-2\"></i> Nouvelle réclamation
        </a>
    </div>
</div>

<div class=\"row justify-content-center mt-5\">
    <div class=\"col-md-4\">
        <a href=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-eye\"></i> Voir
        </a>
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
        return "fronte/home/index.html.twig";
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
        return array (  222 => 92,  211 => 84,  203 => 79,  145 => 23,  132 => 22,  114 => 14,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} Accueil{% endblock %}

{% block hero %}
<div class=\"hero-wrap\" style=\"background-image: url('{{ asset('images/bg_1.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text justify-content-start align-items-center\">
            <div class=\"col-lg-6 col-md-6 ftco-animate d-flex align-items-end\">
                <div class=\"text\">
                    <h1 class=\"mb-4\">Bienvenue sur <span>notre plateforme</span> <span>de location</span></h1>
                    <p style=\"font-size: 18px;\">Notre service client est à votre écoute. Vous pouvez déposer une réclamation à tout moment.</p>
                    <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary py-3 px-4 mt-3\">Déposer une réclamation</a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block body %}
<div class=\"row justify-content-center mb-5\">
    <div class=\"col-md-7 text-center heading-section ftco-animate\">
        <span class=\"subheading\">Nos services</span>
        <h2 class=\"mb-3\">Ce que nous proposons</h2>
    </div>
</div>

<div class=\"row d-flex\">
    <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
        <div class=\"media block-6 services\">
            <div class=\"media-body py-md-4\">
                <div class=\"d-flex mb-3 align-items-center\">
                    <div class=\"icon\"><i class=\"fas fa-headset fa-2x text-primary\"></i></div>
                    <h3 class=\"heading mb-0 pl-3\">Support 24/7</h3>
                </div>
                <p>Notre service client est disponible 24h/24 et 7j/7 pour répondre à vos questions.</p>
            </div>
        </div>      
    </div>
    <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
        <div class=\"media block-6 services\">
            <div class=\"media-body py-md-4\">
                <div class=\"d-flex mb-3 align-items-center\">
                    <div class=\"icon\"><i class=\"fas fa-map-marked-alt fa-2x text-primary\"></i></div>
                    <h3 class=\"heading mb-0 pl-3\">Nombreuses destinations</h3>
                </div>
                <p>Nos agences sont présentes dans de nombreuses villes pour vous servir.</p>
            </div>
        </div>      
    </div>
    <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
        <div class=\"media block-6 services\">
            <div class=\"media-body py-md-4\">
                <div class=\"d-flex mb-3 align-items-center\">
                    <div class=\"icon\"><i class=\"fas fa-calendar-check fa-2x text-primary\"></i></div>
                    <h3 class=\"heading mb-0 pl-3\">Réservations</h3>
                </div>
                <p>Réservez votre voiture en quelques clics, 24h/24.</p>
            </div>
        </div>      
    </div>
    <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
        <div class=\"media block-6 services\">
            <div class=\"media-body py-md-4\">
                <div class=\"d-flex mb-3 align-items-center\">
                    <div class=\"icon\"><i class=\"fas fa-car fa-2x text-primary\"></i></div>
                    <h3 class=\"heading mb-0 pl-3\">Location de voitures</h3>
                </div>
                <p>Large choix de véhicules pour tous vos besoins.</p>
            </div>
        </div>      
    </div>
</div>

<div class=\"row justify-content-center mt-5\">
    <div class=\"col-md-4\">
        <a href=\"{{ path('app_reclamation_index') }}\" class=\"btn btn-primary btn-lg btn-block py-3\">
            <i class=\"fas fa-list mr-2\"></i> Voir toutes les réclamations
        </a>
    </div>
    <div class=\"col-md-4\">
        <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-success btn-lg btn-block py-3\">
            <i class=\"fas fa-plus mr-2\"></i> Nouvelle réclamation
        </a>
    </div>
</div>

<div class=\"row justify-content-center mt-5\">
    <div class=\"col-md-4\">
        <a href=\"{{ path('app_back_reclamation_show', { id: reclamation.id }) }}\" class=\"btn btn-primary\">
            <i class=\"fas fa-eye\"></i> Voir
        </a>
    </div>
</div>
{% endblock %}", "fronte/home/index.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\fronte\\home\\index.html.twig");
    }
}
