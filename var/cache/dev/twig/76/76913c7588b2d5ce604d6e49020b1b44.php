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

/* partenaire/front.html.twig */
class __TwigTemplate_e6a4f17020284214ba7e7b26f86a9f5a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "fronte/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/front.html.twig"));

        $this->parent = $this->loadTemplate("fronte/base.html.twig", "partenaire/front.html.twig", 1);
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

        yield "Nos Partenaires - EzGo";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .partners-section {
            padding: 100px 0;
            background-color: #f8f9fa;
        }
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        .section-title h2 {
            color: #333;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .section-title p {
            color: #666;
        }
        .partner-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        .partner-card:hover {
            transform: translateY(-5px);
        }
        .partner-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .partner-info {
            padding: 20px;
        }
        .partner-info h3 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .partner-info p {
            color: #666;
            margin-bottom: 15px;
        }
        .partner-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #f8f9fa;
            border-top: 1px solid #eee;
        }
        .partner-price {
            color: #ff6b35;
            font-weight: 600;
            font-size: 1.2rem;
        }
        .btn-details {
            background: #ff6b35;
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .btn-details:hover {
            background: #ff8c5a;
            color: white;
        }
        .partner-services {
            margin: 15px 0;
        }
        .service-tag {
            display: inline-block;
            padding: 5px 10px;
            background: #e9ecef;
            border-radius: 15px;
            margin: 0 5px 5px 0;
            font-size: 0.9rem;
            color: #666;
        }
        .regions-list {
            margin: 10px 0;
            font-size: 0.9rem;
            color: #666;
        }
        .regions-list i {
            color: #ff6b35;
            margin-right: 5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
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

        // line 102
        yield "    <div class=\"partners-section\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Nos Partenaires EzGo</h2>
                <p>Découvrez notre réseau de partenaires de confiance</p>
            </div>
            <div class=\"row\">
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partenaires"]) || array_key_exists("partenaires", $context) ? $context["partenaires"] : (function () { throw new RuntimeError('Variable "partenaires" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 110
            yield "                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"partner-card\">
                            <div class=\"partner-info\">
                                <h3>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partenaire"], "nom", [], "any", false, false, false, 113), "html", null, true);
            yield "</h3>
                                <p>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partenaire"], "specialite", [], "any", false, false, false, 114), "html", null, true);
            yield "</p>
                                
                                <div class=\"partner-services\">
                                    ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["partenaire"], "services", [], "any", false, false, false, 117));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 118
                yield "                                        <span class=\"service-tag\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["service"], "html", null, true);
                yield "</span>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "                                </div>

                                <div class=\"regions-list\">
                                    <i class=\"fas fa-map-marker-alt\"></i>
                                    ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["partenaire"], "regions", [], "any", false, false, false, 124));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 125
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["region"], "html", null, true);
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 125)) {
                    yield ", ";
                }
                // line 126
                yield "                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "                                </div>
                            </div>
                            
                            <div class=\"partner-meta\">
                                <div class=\"partner-price\">
                                    ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partenaire"], "tarif", [], "any", false, false, false, 132), "html", null, true);
            yield " DT/jour
                                </div>
                                <a href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_new", ["idPartenaire" => CoreExtension::getAttribute($this->env, $this->source, $context["partenaire"], "idPartenaire", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\" class=\"btn-details\">
                                    Réserver
                                </a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['partenaire'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "            </div>
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
        return "partenaire/front.html.twig";
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
        return array (  329 => 141,  316 => 134,  311 => 132,  304 => 127,  290 => 126,  284 => 125,  267 => 124,  261 => 120,  252 => 118,  248 => 117,  242 => 114,  238 => 113,  233 => 110,  229 => 109,  220 => 102,  207 => 101,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'fronte/base.html.twig' %}

{% block title %}Nos Partenaires - EzGo{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .partners-section {
            padding: 100px 0;
            background-color: #f8f9fa;
        }
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        .section-title h2 {
            color: #333;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .section-title p {
            color: #666;
        }
        .partner-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        .partner-card:hover {
            transform: translateY(-5px);
        }
        .partner-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .partner-info {
            padding: 20px;
        }
        .partner-info h3 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .partner-info p {
            color: #666;
            margin-bottom: 15px;
        }
        .partner-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #f8f9fa;
            border-top: 1px solid #eee;
        }
        .partner-price {
            color: #ff6b35;
            font-weight: 600;
            font-size: 1.2rem;
        }
        .btn-details {
            background: #ff6b35;
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .btn-details:hover {
            background: #ff8c5a;
            color: white;
        }
        .partner-services {
            margin: 15px 0;
        }
        .service-tag {
            display: inline-block;
            padding: 5px 10px;
            background: #e9ecef;
            border-radius: 15px;
            margin: 0 5px 5px 0;
            font-size: 0.9rem;
            color: #666;
        }
        .regions-list {
            margin: 10px 0;
            font-size: 0.9rem;
            color: #666;
        }
        .regions-list i {
            color: #ff6b35;
            margin-right: 5px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"partners-section\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Nos Partenaires EzGo</h2>
                <p>Découvrez notre réseau de partenaires de confiance</p>
            </div>
            <div class=\"row\">
                {% for partenaire in partenaires %}
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"partner-card\">
                            <div class=\"partner-info\">
                                <h3>{{ partenaire.nom }}</h3>
                                <p>{{ partenaire.specialite }}</p>
                                
                                <div class=\"partner-services\">
                                    {% for service in partenaire.services %}
                                        <span class=\"service-tag\">{{ service }}</span>
                                    {% endfor %}
                                </div>

                                <div class=\"regions-list\">
                                    <i class=\"fas fa-map-marker-alt\"></i>
                                    {% for region in partenaire.regions %}
                                        {{ region }}{% if not loop.last %}, {% endif %}
                                    {% endfor %}
                                </div>
                            </div>
                            
                            <div class=\"partner-meta\">
                                <div class=\"partner-price\">
                                    {{ partenaire.tarif }} DT/jour
                                </div>
                                <a href=\"{{ path('app_location_new', {'idPartenaire': partenaire.idPartenaire}) }}\" class=\"btn-details\">
                                    Réserver
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %} ", "partenaire/front.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\partenaire\\front.html.twig");
    }
}
