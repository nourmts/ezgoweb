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

/* voiture/front/index.html.twig */
class __TwigTemplate_1f7048801e87942fde945750577ec7b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/front/index.html.twig"));

        $this->parent = $this->loadTemplate("fronte/base.html.twig", "voiture/front/index.html.twig", 1);
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

        yield "Nos Véhicules - EzGo";
        
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
        .page-header {
            background: linear-gradient(rgba(51, 51, 51, 0.8), rgba(51, 51, 51, 0.8)), url('";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cars-bg.jpg"), "html", null, true);
        yield "');
            background-size: cover;
            background-position: center;
            color: var(--white);
            padding: 80px 0;
            margin-bottom: 50px;
        }
        .car-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
            margin-bottom: 30px;
            background: var(--white);
        }
        .car-card:hover {
            transform: translateY(-5px);
        }
        .car-image {
            height: 200px;
            object-fit: cover;
        }
        .car-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1;
        }
        .filter-section {
            background: var(--white);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        .form-select:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
        }
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        .btn-primary:hover {
            background-color: #ff5a1f;
            border-color: #ff5a1f;
        }
        .btn-secondary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        .btn-secondary:hover {
            background-color: #555555;
            border-color: #555555;
        }
        .pagination .page-link {
            color: var(--accent-color);
        }
        .pagination .page-item.active .page-link {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: var(--white);
        }
        .badge.bg-success {
            background-color: #28a745 !important;
        }
        .badge.bg-warning {
            background-color: #ffc107 !important;
        }
        .badge.bg-danger {
            background-color: #dc3545 !important;
        }
        .text-muted {
            color: var(--secondary-color) !important;
        }
        .breadcrumb-item a {
            color: var(--white);
            text-decoration: none;
        }
        .breadcrumb-item a:hover {
            color: var(--accent-color);
        }
        .breadcrumb-item.active {
            color: rgba(255, 255, 255, 0.8);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
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

        // line 100
        yield "    <!-- En-tête de Page -->
  <section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/assets/images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-start\">
          <div class=\"col-md-9 ftco-animate pb-5\">
          \t<p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>About us <i class=\"ion-ios-arrow-forward\"></i></span></p>
            <h1 class=\"mb-3 bread\">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Filtres -->
    <section class=\"py-4\">
        <div class=\"container\">
            <div class=\"filter-section\">
                <form method=\"get\" class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <label for=\"etat\" class=\"form-label\">État</label>
                        <select class=\"form-select\" id=\"etat\" name=\"etat\">
                            <option value=\"\">Tous les états</option>
                            <option value=\"disponible\" ";
        // line 122
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "request", [], "any", false, false, false, 122), "query", [], "any", false, false, false, 122), "get", ["etat"], "method", false, false, false, 122) == "disponible")) {
            yield "selected";
        }
        yield ">Disponible</option>
                            <option value=\"maintenance\" ";
        // line 123
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "request", [], "any", false, false, false, 123), "query", [], "any", false, false, false, 123), "get", ["etat"], "method", false, false, false, 123) == "maintenance")) {
            yield "selected";
        }
        yield ">En Maintenance</option>
                            <option value=\"reserve\" ";
        // line 124
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "request", [], "any", false, false, false, 124), "query", [], "any", false, false, false, 124), "get", ["etat"], "method", false, false, false, 124) == "reserve")) {
            yield "selected";
        }
        yield ">Réservé</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"contrat\" class=\"form-label\">Type de Contrat</label>
                        <select class=\"form-select\" id=\"contrat\" name=\"contrat\">
                            <option value=\"\">Tous les contrats</option>
                            <option value=\"premium\" ";
        // line 131
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "query", [], "any", false, false, false, 131), "get", ["contrat"], "method", false, false, false, 131) == "premium")) {
            yield "selected";
        }
        yield ">Premium</option>
                            <option value=\"standard\" ";
        // line 132
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "query", [], "any", false, false, false, 132), "get", ["contrat"], "method", false, false, false, 132) == "standard")) {
            yield "selected";
        }
        yield ">Standard</option>
                            <option value=\"economique\" ";
        // line 133
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "request", [], "any", false, false, false, 133), "query", [], "any", false, false, false, 133), "get", ["contrat"], "method", false, false, false, 133) == "economique")) {
            yield "selected";
        }
        yield ">Économique</option>
                        </select>
                    </div>
                    <div class=\"col-md-4 d-flex align-items-end\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">
                            <i class=\"fas fa-filter me-2\"></i> Filtrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div>
                        <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_statistics");
        yield "\" class=\"btn btn-primary w-100\">
                                            <i class=\"fas fa-info-circle me-2\"></i> Voir les statistics
                         </a>
    </div>
    <!-- Section Véhicules -->
    <section class=\"py-5\">
        <div class=\"container\">
            ";
        // line 153
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 153, $this->source); })())) > 0)) {
            // line 154
            yield "                <div class=\"row\">
                    ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 155, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["voiture"]) {
                // line 156
                yield "                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"car-card\">
                                ";
                // line 158
                if (CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "image", [], "any", false, false, false, 158)) {
                    // line 159
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cars/" . CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "image", [], "any", false, false, false, 159))), "html", null, true);
                    yield "\" class=\"card-img-top car-image\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "marque", [], "any", false, false, false, 159), "html", null, true);
                    yield "\">
                                ";
                } else {
                    // line 161
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/car-placeholder.jpg"), "html", null, true);
                    yield "\" class=\"card-img-top car-image\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "marque", [], "any", false, false, false, 161), "html", null, true);
                    yield "\">
                                ";
                }
                // line 163
                yield "                                <span class=\"badge bg-";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "etat", [], "any", false, false, false, 163) == "disponible")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "etat", [], "any", false, false, false, 163) == "maintenance")) ? ("warning") : ("danger"))));
                yield " car-badge\">
                                    ";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "etat", [], "any", false, false, false, 164)), "html", null, true);
                yield "
                                </span>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "marque", [], "any", false, false, false, 167), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text\">
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-hashtag me-1\"></i>";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "immatriculation", [], "any", false, false, false, 170), "html", null, true);
                yield "
                                        </small>
                                    </p>
                                    <p class=\"card-text\">
                                        <span class=\"badge bg-";
                // line 174
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "contrat", [], "any", false, false, false, 174) == "premium")) ? ("danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "contrat", [], "any", false, false, false, 174) == "standard")) ? ("primary") : ("success"))));
                yield "\">
                                            ";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "contrat", [], "any", false, false, false, 175)), "html", null, true);
                yield "
                                        </span>
                                    </p>
                                    ";
                // line 178
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "etat", [], "any", false, false, false, 178) == "disponible")) {
                    // line 179
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 179)]), "html", null, true);
                    yield "\" class=\"btn btn-primary w-100\">
                                            <i class=\"fas fa-info-circle me-2\"></i> Voir Détails
                                        </a>
                                    ";
                } else {
                    // line 183
                    yield "                                        <button class=\"btn btn-secondary w-100\" disabled>
                                            <i class=\"fas fa-ban me-2\"></i> Non Disponible
                                        </button>
                                    ";
                }
                // line 187
                yield "                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['voiture'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            yield "                </div>
                
                <!-- Pagination -->
                ";
            // line 194
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["voitures"] ?? null), "haveToPaginate", [], "any", true, true, false, 194) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 194, $this->source); })()), "haveToPaginate", [], "any", false, false, false, 194))) {
                // line 195
                yield "                    <div class=\"d-flex justify-content-center mt-4\">
                        <nav aria-label=\"Navigation des pages\">
                            <ul class=\"pagination\">
                                ";
                // line 198
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 198, $this->source); })()), "currentPage", [], "any", false, false, false, 198) > 1)) {
                    // line 199
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 200
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 200, $this->source); })()), "currentPage", [], "any", false, false, false, 200) - 1)]), "html", null, true);
                    yield "\" aria-label=\"Précédent\">
                                            <span aria-hidden=\"true\">&laquo;</span>
                                        </a>
                                    </li>
                                ";
                }
                // line 205
                yield "                                
                                ";
                // line 206
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 206, $this->source); })()), "lastPage", [], "any", false, false, false, 206)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 207
                    yield "                                    <li class=\"page-item ";
                    if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 207, $this->source); })()), "currentPage", [], "any", false, false, false, 207))) {
                        yield "active";
                    }
                    yield "\">
                                        <a class=\"page-link\" href=\"";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_index", ["page" => $context["i"]]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                yield "                                
                                ";
                // line 212
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 212, $this->source); })()), "currentPage", [], "any", false, false, false, 212) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 212, $this->source); })()), "lastPage", [], "any", false, false, false, 212))) {
                    // line 213
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 214, $this->source); })()), "currentPage", [], "any", false, false, false, 214) + 1)]), "html", null, true);
                    yield "\" aria-label=\"Suivant\">
                                            <span aria-hidden=\"true\">&raquo;</span>
                                        </a>
                                    </li>
                                ";
                }
                // line 219
                yield "                            </ul>
                        </nav>
                    </div>
                ";
            }
            // line 223
            yield "            ";
        } else {
            // line 224
            yield "                <div class=\"alert alert-info text-center\">
                    <i class=\"fas fa-info-circle me-2\"></i> Aucun véhicule ne correspond à vos critères de recherche.
                </div>
            ";
        }
        // line 228
        yield "        </div>
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
        return "voiture/front/index.html.twig";
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
        return array (  480 => 228,  474 => 224,  471 => 223,  465 => 219,  457 => 214,  454 => 213,  452 => 212,  449 => 211,  438 => 208,  431 => 207,  427 => 206,  424 => 205,  416 => 200,  413 => 199,  411 => 198,  406 => 195,  404 => 194,  399 => 191,  390 => 187,  384 => 183,  376 => 179,  374 => 178,  368 => 175,  364 => 174,  357 => 170,  351 => 167,  345 => 164,  340 => 163,  332 => 161,  324 => 159,  322 => 158,  318 => 156,  314 => 155,  311 => 154,  309 => 153,  299 => 146,  281 => 133,  275 => 132,  269 => 131,  257 => 124,  251 => 123,  245 => 122,  221 => 100,  208 => 99,  108 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'fronte/base.html.twig' %}

{% block title %}Nos Véhicules - EzGo{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .page-header {
            background: linear-gradient(rgba(51, 51, 51, 0.8), rgba(51, 51, 51, 0.8)), url('{{ asset('assets/images/cars-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            color: var(--white);
            padding: 80px 0;
            margin-bottom: 50px;
        }
        .car-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
            margin-bottom: 30px;
            background: var(--white);
        }
        .car-card:hover {
            transform: translateY(-5px);
        }
        .car-image {
            height: 200px;
            object-fit: cover;
        }
        .car-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1;
        }
        .filter-section {
            background: var(--white);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        .form-select:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
        }
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        .btn-primary:hover {
            background-color: #ff5a1f;
            border-color: #ff5a1f;
        }
        .btn-secondary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        .btn-secondary:hover {
            background-color: #555555;
            border-color: #555555;
        }
        .pagination .page-link {
            color: var(--accent-color);
        }
        .pagination .page-item.active .page-link {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: var(--white);
        }
        .badge.bg-success {
            background-color: #28a745 !important;
        }
        .badge.bg-warning {
            background-color: #ffc107 !important;
        }
        .badge.bg-danger {
            background-color: #dc3545 !important;
        }
        .text-muted {
            color: var(--secondary-color) !important;
        }
        .breadcrumb-item a {
            color: var(--white);
            text-decoration: none;
        }
        .breadcrumb-item a:hover {
            color: var(--accent-color);
        }
        .breadcrumb-item.active {
            color: rgba(255, 255, 255, 0.8);
        }
    </style>
{% endblock %}

{% block body %}
    <!-- En-tête de Page -->
  <section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/assets/images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-start\">
          <div class=\"col-md-9 ftco-animate pb-5\">
          \t<p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>About us <i class=\"ion-ios-arrow-forward\"></i></span></p>
            <h1 class=\"mb-3 bread\">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Filtres -->
    <section class=\"py-4\">
        <div class=\"container\">
            <div class=\"filter-section\">
                <form method=\"get\" class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <label for=\"etat\" class=\"form-label\">État</label>
                        <select class=\"form-select\" id=\"etat\" name=\"etat\">
                            <option value=\"\">Tous les états</option>
                            <option value=\"disponible\" {% if app.request.query.get('etat') == 'disponible' %}selected{% endif %}>Disponible</option>
                            <option value=\"maintenance\" {% if app.request.query.get('etat') == 'maintenance' %}selected{% endif %}>En Maintenance</option>
                            <option value=\"reserve\" {% if app.request.query.get('etat') == 'reserve' %}selected{% endif %}>Réservé</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"contrat\" class=\"form-label\">Type de Contrat</label>
                        <select class=\"form-select\" id=\"contrat\" name=\"contrat\">
                            <option value=\"\">Tous les contrats</option>
                            <option value=\"premium\" {% if app.request.query.get('contrat') == 'premium' %}selected{% endif %}>Premium</option>
                            <option value=\"standard\" {% if app.request.query.get('contrat') == 'standard' %}selected{% endif %}>Standard</option>
                            <option value=\"economique\" {% if app.request.query.get('contrat') == 'economique' %}selected{% endif %}>Économique</option>
                        </select>
                    </div>
                    <div class=\"col-md-4 d-flex align-items-end\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">
                            <i class=\"fas fa-filter me-2\"></i> Filtrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div>
                        <a href=\"{{ path('front_voiture_statistics') }}\" class=\"btn btn-primary w-100\">
                                            <i class=\"fas fa-info-circle me-2\"></i> Voir les statistics
                         </a>
    </div>
    <!-- Section Véhicules -->
    <section class=\"py-5\">
        <div class=\"container\">
            {% if voitures|length > 0 %}
                <div class=\"row\">
                    {% for voiture in voitures %}
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"car-card\">
                                {% if voiture.image %}
                                    <img src=\"{{ asset('uploads/cars/' ~ voiture.image) }}\" class=\"card-img-top car-image\" alt=\"{{ voiture.marque }}\">
                                {% else %}
                                    <img src=\"{{ asset('assets/images/car-placeholder.jpg') }}\" class=\"card-img-top car-image\" alt=\"{{ voiture.marque }}\">
                                {% endif %}
                                <span class=\"badge bg-{{ voiture.etat == 'disponible' ? 'success' : (voiture.etat == 'maintenance' ? 'warning' : 'danger') }} car-badge\">
                                    {{ voiture.etat|capitalize }}
                                </span>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ voiture.marque }}</h5>
                                    <p class=\"card-text\">
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-hashtag me-1\"></i>{{ voiture.immatriculation }}
                                        </small>
                                    </p>
                                    <p class=\"card-text\">
                                        <span class=\"badge bg-{{ voiture.contrat == 'premium' ? 'danger' : (voiture.contrat == 'standard' ? 'primary' : 'success') }}\">
                                            {{ voiture.contrat|capitalize }}
                                        </span>
                                    </p>
                                    {% if voiture.etat == 'disponible' %}
                                        <a href=\"{{ path('front_voiture_show', {'id': voiture.id}) }}\" class=\"btn btn-primary w-100\">
                                            <i class=\"fas fa-info-circle me-2\"></i> Voir Détails
                                        </a>
                                    {% else %}
                                        <button class=\"btn btn-secondary w-100\" disabled>
                                            <i class=\"fas fa-ban me-2\"></i> Non Disponible
                                        </button>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                
                <!-- Pagination -->
                {% if voitures.haveToPaginate is defined and voitures.haveToPaginate %}
                    <div class=\"d-flex justify-content-center mt-4\">
                        <nav aria-label=\"Navigation des pages\">
                            <ul class=\"pagination\">
                                {% if voitures.currentPage > 1 %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('front_voiture_index', {'page': voitures.currentPage - 1}) }}\" aria-label=\"Précédent\">
                                            <span aria-hidden=\"true\">&laquo;</span>
                                        </a>
                                    </li>
                                {% endif %}
                                
                                {% for i in 1..voitures.lastPage %}
                                    <li class=\"page-item {% if i == voitures.currentPage %}active{% endif %}\">
                                        <a class=\"page-link\" href=\"{{ path('front_voiture_index', {'page': i}) }}\">{{ i }}</a>
                                    </li>
                                {% endfor %}
                                
                                {% if voitures.currentPage < voitures.lastPage %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('front_voiture_index', {'page': voitures.currentPage + 1}) }}\" aria-label=\"Suivant\">
                                            <span aria-hidden=\"true\">&raquo;</span>
                                        </a>
                                    </li>
                                {% endif %}
                            </ul>
                        </nav>
                    </div>
                {% endif %}
            {% else %}
                <div class=\"alert alert-info text-center\">
                    <i class=\"fas fa-info-circle me-2\"></i> Aucun véhicule ne correspond à vos critères de recherche.
                </div>
            {% endif %}
        </div>
    </section>
{% endblock %} ", "voiture/front/index.html.twig", "C:\\Users\\Msi\\Desktop\\copy\\templates\\voiture\\front\\index.html.twig");
    }
}
