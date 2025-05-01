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

/* voiture/front/show.html.twig */
class __TwigTemplate_54bb029d7560daa4d8528ee16a4beb57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/front/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/front/show.html.twig"));

        $this->parent = $this->loadTemplate("fronte/base.html.twig", "voiture/front/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 3, $this->source); })()), "marque", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détails - EzGo";
        
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
        .car-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/car-detail-bg.jpg"), "html", null, true);
        yield "');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            margin-bottom: 50px;
        }
        .car-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .car-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .car-details {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        .car-details h3 {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .detail-item {
            margin-bottom: 15px;
        }
        .detail-item .label {
            font-weight: 600;
            color: #555;
        }
        .badge {
            font-size: 0.8rem;
            padding: 0.5rem 1rem;
            border-radius: 50px;
        }
        .btn-primary {
            background-color: #ff4d30;
            border-color: #ff4d30;
        }
        .btn-primary:hover {
            background-color: #e63e22;
            border-color: #e63e22;
        }
        .btn-outline-primary {
            color: #ff4d30;
            border-color: #ff4d30;
        }
        .btn-outline-primary:hover {
            background-color: #ff4d30;
            border-color: #ff4d30;
        }
        .features-list {
            list-style: none;
            padding: 0;
        }
        .features-list li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }
        .features-list li:before {
            content: '\\f00c';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #ff4d30;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
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

        // line 88
        yield "    <!-- Section Hero Voiture -->
    <section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/assets/images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-start\">
          <div class=\"col-md-9 ftco-animate pb-5\">
          \t<p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>About us <i class=\"ion-ios-arrow-forward\"></i></span></p>
           
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8\">
                    <h1 class=\"display-4 fw-bold mb-3\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 98, $this->source); })()), "marque", [], "any", false, false, false, 98), "html", null, true);
        yield "</h1>
                    <p class=\"lead mb-4\">Découvrez le confort et les performances de notre véhicule premium.</p>
                    <span class=\"badge bg-";
        // line 100
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 100, $this->source); })()), "etat", [], "any", false, false, false, 100) == "disponible")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 100, $this->source); })()), "etat", [], "any", false, false, false, 100) == "maintenance")) ? ("warning") : ("danger"))));
        yield " mb-3\">
                        ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 101, $this->source); })()), "etat", [], "any", false, false, false, 101)), "html", null, true);
        yield "
                    </span>
                </div>
                <div class=\"col-lg-4 text-end\">
                    ";
        // line 105
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 105, $this->source); })()), "etat", [], "any", false, false, false, 105) == "disponible")) {
            // line 106
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservations_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-calendar-check me-2\"></i> Réserver
                        </a>
                    ";
        } else {
            // line 110
            yield "                        <button class=\"btn btn-secondary btn-lg\" disabled>
                            <i class=\"fas fa-ban me-2\"></i> Non Disponible
                        </button>
                    ";
        }
        // line 114
        yield "                </div>
            </div>
        </div>
    </section>

    <!-- Section Détails Voiture -->
    <section class=\"py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"car-image\">
                        ";
        // line 125
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 125, $this->source); })()), "image", [], "any", false, false, false, 125)) {
            // line 126
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 126, $this->source); })()), "image", [], "any", false, false, false, 126))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 126, $this->source); })()), "marque", [], "any", false, false, false, 126), "html", null, true);
            yield "\" class=\"img-fluid\">
                        ";
        } else {
            // line 128
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/car-placeholder.jpg"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 128, $this->source); })()), "marque", [], "any", false, false, false, 128), "html", null, true);
            yield "\" class=\"img-fluid\">
                        ";
        }
        // line 130
        yield "                    </div>
                    
                    <div class=\"car-details\">
                        <h3>Détails du Véhicule</h3>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"detail-item\">
                                    <span class=\"label\">Marque:</span>
                                    <span class=\"value\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 138, $this->source); })()), "marque", [], "any", false, false, false, 138), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"detail-item\">
                                    <span class=\"label\">Immatriculation:</span>
                                    <span class=\"value\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 142, $this->source); })()), "immatriculation", [], "any", false, false, false, 142), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"detail-item\">
                                    <span class=\"label\">État:</span>
                                    <span class=\"badge bg-";
        // line 146
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 146, $this->source); })()), "etat", [], "any", false, false, false, 146) == "disponible")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 146, $this->source); })()), "etat", [], "any", false, false, false, 146) == "maintenance")) ? ("warning") : ("danger"))));
        yield "\">
                                        ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 147, $this->source); })()), "etat", [], "any", false, false, false, 147)), "html", null, true);
        yield "
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"detail-item\">
                                    <span class=\"label\">Type de Contrat:</span>
                                    <span class=\"badge bg-";
        // line 154
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 154, $this->source); })()), "contrat", [], "any", false, false, false, 154) == "premium")) ? ("danger") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 154, $this->source); })()), "contrat", [], "any", false, false, false, 154) == "standard")) ? ("primary") : ("success"))));
        yield "\">
                                        ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 155, $this->source); })()), "contrat", [], "any", false, false, false, 155)), "html", null, true);
        yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"car-details\">
                        <h3>Équipements</h3>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <ul class=\"features-list\">
                                    <li>Climatisation</li>
                                    <li>Bluetooth</li>
                                    <li>GPS</li>
                                    <li>Caméra de recul</li>
                                </ul>
                            </div>
                            <div class=\"col-md-6\">
                                <ul class=\"features-list\">
                                    <li>Sièges en cuir</li>
                                    <li>Régulateur de vitesse</li>
                                    <li>Port USB</li>
                                    <li>Verrous de sécurité enfants</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-lg-4\">
                    <div class=\"car-details\">
                        <h3>Réservation</h3>
                        ";
        // line 188
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 188, $this->source); })()), "etat", [], "any", false, false, false, 188) == "disponible")) {
            // line 189
            yield "                            <p>Ce véhicule est disponible à la réservation. Cliquez sur le bouton ci-dessous pour le réserver pour vos dates souhaitées.</p>
                            <a href=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservations_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 190, $this->source); })()), "id", [], "any", false, false, false, 190)]), "html", null, true);
            yield "\" class=\"btn btn-primary w-100 mb-3\">
                                <i class=\"fas fa-calendar-check me-2\"></i> Réserver Maintenant
                            </a>
                            <div class=\"alert alert-info\">
                                <i class=\"fas fa-info-circle me-2\"></i> Les réservations sont soumises à disponibilité.
                            </div>
                        ";
        } else {
            // line 197
            yield "                            <div class=\"alert alert-warning\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i> Ce véhicule n'est actuellement pas disponible à la réservation.
                            </div>
                            <p>Veuillez revenir plus tard ou consulter nos autres véhicules disponibles.</p>
                            <a href=\"";
            // line 201
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_index");
            yield "\" class=\"btn btn-outline-primary w-100\">
                                <i class=\"fas fa-car me-2\"></i> Voir Autres Véhicules
                            </a>
                        ";
        }
        // line 205
        yield "                    </div>
                    
                    <div class=\"car-details\">
                        <h3>Besoin d'Aide?</h3>
                        <p>Des questions sur ce véhicule ou le processus de réservation? Notre équipe est là pour vous aider!</p>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\">
                                <i class=\"fas fa-phone text-primary me-2\"></i> +33 1 23 45 67 89
                            </li>
                            <li class=\"mb-2\">
                                <i class=\"fas fa-envelope text-primary me-2\"></i> contact@ezgo.fr
                            </li>
                            <li>
                                <i class=\"fas fa-clock text-primary me-2\"></i> Lun-Ven: 9h00 - 18h00
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        return "voiture/front/show.html.twig";
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
        return array (  391 => 205,  384 => 201,  378 => 197,  368 => 190,  365 => 189,  363 => 188,  327 => 155,  323 => 154,  313 => 147,  309 => 146,  302 => 142,  295 => 138,  285 => 130,  277 => 128,  269 => 126,  267 => 125,  254 => 114,  248 => 110,  240 => 106,  238 => 105,  231 => 101,  227 => 100,  222 => 98,  210 => 88,  197 => 87,  109 => 9,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'fronte/base.html.twig' %}

{% block title %}{{ voiture.marque }} - Détails - EzGo{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .car-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('assets/images/car-detail-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            margin-bottom: 50px;
        }
        .car-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .car-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .car-details {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        .car-details h3 {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .detail-item {
            margin-bottom: 15px;
        }
        .detail-item .label {
            font-weight: 600;
            color: #555;
        }
        .badge {
            font-size: 0.8rem;
            padding: 0.5rem 1rem;
            border-radius: 50px;
        }
        .btn-primary {
            background-color: #ff4d30;
            border-color: #ff4d30;
        }
        .btn-primary:hover {
            background-color: #e63e22;
            border-color: #e63e22;
        }
        .btn-outline-primary {
            color: #ff4d30;
            border-color: #ff4d30;
        }
        .btn-outline-primary:hover {
            background-color: #ff4d30;
            border-color: #ff4d30;
        }
        .features-list {
            list-style: none;
            padding: 0;
        }
        .features-list li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }
        .features-list li:before {
            content: '\\f00c';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #ff4d30;
        }
    </style>
{% endblock %}

{% block body %}
    <!-- Section Hero Voiture -->
    <section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/assets/images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-start\">
          <div class=\"col-md-9 ftco-animate pb-5\">
          \t<p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>About us <i class=\"ion-ios-arrow-forward\"></i></span></p>
           
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8\">
                    <h1 class=\"display-4 fw-bold mb-3\">{{ voiture.marque }}</h1>
                    <p class=\"lead mb-4\">Découvrez le confort et les performances de notre véhicule premium.</p>
                    <span class=\"badge bg-{{ voiture.etat == 'disponible' ? 'success' : (voiture.etat == 'maintenance' ? 'warning' : 'danger') }} mb-3\">
                        {{ voiture.etat|capitalize }}
                    </span>
                </div>
                <div class=\"col-lg-4 text-end\">
                    {% if voiture.etat == 'disponible' %}
                        <a href=\"{{ path('app_reservations_new', {'id': voiture.id}) }}\" class=\"btn btn-primary btn-lg\">
                            <i class=\"fas fa-calendar-check me-2\"></i> Réserver
                        </a>
                    {% else %}
                        <button class=\"btn btn-secondary btn-lg\" disabled>
                            <i class=\"fas fa-ban me-2\"></i> Non Disponible
                        </button>
                    {% endif %}
                </div>
            </div>
        </div>
    </section>

    <!-- Section Détails Voiture -->
    <section class=\"py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"car-image\">
                        {% if voiture.image %}
                            <img src=\"{{ asset('uploads/cars/' ~ voiture.image) }}\" alt=\"{{ voiture.marque }}\" class=\"img-fluid\">
                        {% else %}
                            <img src=\"{{ asset('assets/images/car-placeholder.jpg') }}\" alt=\"{{ voiture.marque }}\" class=\"img-fluid\">
                        {% endif %}
                    </div>
                    
                    <div class=\"car-details\">
                        <h3>Détails du Véhicule</h3>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"detail-item\">
                                    <span class=\"label\">Marque:</span>
                                    <span class=\"value\">{{ voiture.marque }}</span>
                                </div>
                                <div class=\"detail-item\">
                                    <span class=\"label\">Immatriculation:</span>
                                    <span class=\"value\">{{ voiture.immatriculation }}</span>
                                </div>
                                <div class=\"detail-item\">
                                    <span class=\"label\">État:</span>
                                    <span class=\"badge bg-{{ voiture.etat == 'disponible' ? 'success' : (voiture.etat == 'maintenance' ? 'warning' : 'danger') }}\">
                                        {{ voiture.etat|capitalize }}
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"detail-item\">
                                    <span class=\"label\">Type de Contrat:</span>
                                    <span class=\"badge bg-{{ voiture.contrat == 'premium' ? 'danger' : (voiture.contrat == 'standard' ? 'primary' : 'success') }}\">
                                        {{ voiture.contrat|capitalize }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"car-details\">
                        <h3>Équipements</h3>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <ul class=\"features-list\">
                                    <li>Climatisation</li>
                                    <li>Bluetooth</li>
                                    <li>GPS</li>
                                    <li>Caméra de recul</li>
                                </ul>
                            </div>
                            <div class=\"col-md-6\">
                                <ul class=\"features-list\">
                                    <li>Sièges en cuir</li>
                                    <li>Régulateur de vitesse</li>
                                    <li>Port USB</li>
                                    <li>Verrous de sécurité enfants</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-lg-4\">
                    <div class=\"car-details\">
                        <h3>Réservation</h3>
                        {% if voiture.etat == 'disponible' %}
                            <p>Ce véhicule est disponible à la réservation. Cliquez sur le bouton ci-dessous pour le réserver pour vos dates souhaitées.</p>
                            <a href=\"{{ path('app_reservations_new', {'id': voiture.id}) }}\" class=\"btn btn-primary w-100 mb-3\">
                                <i class=\"fas fa-calendar-check me-2\"></i> Réserver Maintenant
                            </a>
                            <div class=\"alert alert-info\">
                                <i class=\"fas fa-info-circle me-2\"></i> Les réservations sont soumises à disponibilité.
                            </div>
                        {% else %}
                            <div class=\"alert alert-warning\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i> Ce véhicule n'est actuellement pas disponible à la réservation.
                            </div>
                            <p>Veuillez revenir plus tard ou consulter nos autres véhicules disponibles.</p>
                            <a href=\"{{ path('front_voiture_index') }}\" class=\"btn btn-outline-primary w-100\">
                                <i class=\"fas fa-car me-2\"></i> Voir Autres Véhicules
                            </a>
                        {% endif %}
                    </div>
                    
                    <div class=\"car-details\">
                        <h3>Besoin d'Aide?</h3>
                        <p>Des questions sur ce véhicule ou le processus de réservation? Notre équipe est là pour vous aider!</p>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\">
                                <i class=\"fas fa-phone text-primary me-2\"></i> +33 1 23 45 67 89
                            </li>
                            <li class=\"mb-2\">
                                <i class=\"fas fa-envelope text-primary me-2\"></i> contact@ezgo.fr
                            </li>
                            <li>
                                <i class=\"fas fa-clock text-primary me-2\"></i> Lun-Ven: 9h00 - 18h00
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %} ", "voiture/front/show.html.twig", "C:\\Users\\Msi\\Desktop\\copy\\templates\\voiture\\front\\show.html.twig");
    }
}
