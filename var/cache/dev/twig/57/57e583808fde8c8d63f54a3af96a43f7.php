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
    <section class=\"page-header\">
        <div class=\"container\">
            <nav aria-label=\"fil d'Ariane\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\" class=\"text-white\">Accueil</a></li>
                    <li class=\"breadcrumb-item active text-white\" aria-current=\"page\">Véhicules</li>
                </ol>
            </nav>
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8\">
                    <h1 class=\"display-4 fw-bold mb-3\">Nos Véhicules</h1>
                    <p class=\"lead mb-0\">Découvrez notre sélection de véhicules pour tous vos besoins de déplacement.</p>
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
        // line 127
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "query", [], "any", false, false, false, 127), "get", ["etat"], "method", false, false, false, 127) == "disponible")) {
            yield "selected";
        }
        yield ">Disponible</option>
                            <option value=\"maintenance\" ";
        // line 128
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "request", [], "any", false, false, false, 128), "query", [], "any", false, false, false, 128), "get", ["etat"], "method", false, false, false, 128) == "maintenance")) {
            yield "selected";
        }
        yield ">En Maintenance</option>
                            <option value=\"reserve\" ";
        // line 129
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "request", [], "any", false, false, false, 129), "query", [], "any", false, false, false, 129), "get", ["etat"], "method", false, false, false, 129) == "reserve")) {
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
        // line 136
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "request", [], "any", false, false, false, 136), "query", [], "any", false, false, false, 136), "get", ["contrat"], "method", false, false, false, 136) == "premium")) {
            yield "selected";
        }
        yield ">Premium</option>
                            <option value=\"standard\" ";
        // line 137
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "query", [], "any", false, false, false, 137), "get", ["contrat"], "method", false, false, false, 137) == "standard")) {
            yield "selected";
        }
        yield ">Standard</option>
                            <option value=\"economique\" ";
        // line 138
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "request", [], "any", false, false, false, 138), "query", [], "any", false, false, false, 138), "get", ["contrat"], "method", false, false, false, 138) == "economique")) {
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

    <!-- Section Véhicules -->
    <section class=\"py-5\">
        <div class=\"container\">
            ";
        // line 154
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 154, $this->source); })())) > 0)) {
            // line 155
            yield "                <div class=\"row\">
                    ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 156, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["voiture"]) {
                // line 157
                yield "                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"car-card\">
                                ";
                // line 159
                if (CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "image", [], "any", false, false, false, 159)) {
                    // line 160
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cars/" . CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "image", [], "any", false, false, false, 160))), "html", null, true);
                    yield "\" class=\"card-img-top car-image\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "marque", [], "any", false, false, false, 160), "html", null, true);
                    yield "\">
                                ";
                } else {
                    // line 162
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/car-placeholder.jpg"), "html", null, true);
                    yield "\" class=\"card-img-top car-image\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "marque", [], "any", false, false, false, 162), "html", null, true);
                    yield "\">
                                ";
                }
                // line 164
                yield "                                <span class=\"badge bg-";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "etat", [], "any", false, false, false, 164) == "disponible")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "etat", [], "any", false, false, false, 164) == "maintenance")) ? ("warning") : ("danger"))));
                yield " car-badge\">
                                    ";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "etat", [], "any", false, false, false, 165)), "html", null, true);
                yield "
                                </span>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "marque", [], "any", false, false, false, 168), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text\">
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-hashtag me-1\"></i>";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "immatriculation", [], "any", false, false, false, 171), "html", null, true);
                yield "
                                        </small>
                                    </p>
                                    <p class=\"card-text\">
                                        <span class=\"badge bg-";
                // line 175
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "contrat", [], "any", false, false, false, 175) == "premium")) ? ("danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "contrat", [], "any", false, false, false, 175) == "standard")) ? ("primary") : ("success"))));
                yield "\">
                                            ";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "contrat", [], "any", false, false, false, 176)), "html", null, true);
                yield "
                                        </span>
                                    </p>
                                    ";
                // line 179
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "etat", [], "any", false, false, false, 179) == "disponible")) {
                    // line 180
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 180)]), "html", null, true);
                    yield "\" class=\"btn btn-primary w-100\">
                                            <i class=\"fas fa-info-circle me-2\"></i> Voir Détails
                                        </a>
                                    ";
                } else {
                    // line 184
                    yield "                                        <button class=\"btn btn-secondary w-100\" disabled>
                                            <i class=\"fas fa-ban me-2\"></i> Non Disponible
                                        </button>
                                    ";
                }
                // line 188
                yield "                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['voiture'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            yield "                </div>
                
                <!-- Pagination -->
                ";
            // line 195
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["voitures"] ?? null), "haveToPaginate", [], "any", true, true, false, 195) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 195, $this->source); })()), "haveToPaginate", [], "any", false, false, false, 195))) {
                // line 196
                yield "                    <div class=\"d-flex justify-content-center mt-4\">
                        <nav aria-label=\"Navigation des pages\">
                            <ul class=\"pagination\">
                                ";
                // line 199
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 199, $this->source); })()), "currentPage", [], "any", false, false, false, 199) > 1)) {
                    // line 200
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 201
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 201, $this->source); })()), "currentPage", [], "any", false, false, false, 201) - 1)]), "html", null, true);
                    yield "\" aria-label=\"Précédent\">
                                            <span aria-hidden=\"true\">&laquo;</span>
                                        </a>
                                    </li>
                                ";
                }
                // line 206
                yield "                                
                                ";
                // line 207
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 207, $this->source); })()), "lastPage", [], "any", false, false, false, 207)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 208
                    yield "                                    <li class=\"page-item ";
                    if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 208, $this->source); })()), "currentPage", [], "any", false, false, false, 208))) {
                        yield "active";
                    }
                    yield "\">
                                        <a class=\"page-link\" href=\"";
                    // line 209
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
                // line 212
                yield "                                
                                ";
                // line 213
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 213, $this->source); })()), "currentPage", [], "any", false, false, false, 213) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 213, $this->source); })()), "lastPage", [], "any", false, false, false, 213))) {
                    // line 214
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 215
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_voiture_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 215, $this->source); })()), "currentPage", [], "any", false, false, false, 215) + 1)]), "html", null, true);
                    yield "\" aria-label=\"Suivant\">
                                            <span aria-hidden=\"true\">&raquo;</span>
                                        </a>
                                    </li>
                                ";
                }
                // line 220
                yield "                            </ul>
                        </nav>
                    </div>
                ";
            }
            // line 224
            yield "            ";
        } else {
            // line 225
            yield "                <div class=\"alert alert-info text-center\">
                    <i class=\"fas fa-info-circle me-2\"></i> Aucun véhicule ne correspond à vos critères de recherche.
                </div>
            ";
        }
        // line 229
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
        return array (  481 => 229,  475 => 225,  472 => 224,  466 => 220,  458 => 215,  455 => 214,  453 => 213,  450 => 212,  439 => 209,  432 => 208,  428 => 207,  425 => 206,  417 => 201,  414 => 200,  412 => 199,  407 => 196,  405 => 195,  400 => 192,  391 => 188,  385 => 184,  377 => 180,  375 => 179,  369 => 176,  365 => 175,  358 => 171,  352 => 168,  346 => 165,  341 => 164,  333 => 162,  325 => 160,  323 => 159,  319 => 157,  315 => 156,  312 => 155,  310 => 154,  289 => 138,  283 => 137,  277 => 136,  265 => 129,  259 => 128,  253 => 127,  228 => 105,  221 => 100,  208 => 99,  108 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
    <section class=\"page-header\">
        <div class=\"container\">
            <nav aria-label=\"fil d'Ariane\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_index') }}\" class=\"text-white\">Accueil</a></li>
                    <li class=\"breadcrumb-item active text-white\" aria-current=\"page\">Véhicules</li>
                </ol>
            </nav>
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8\">
                    <h1 class=\"display-4 fw-bold mb-3\">Nos Véhicules</h1>
                    <p class=\"lead mb-0\">Découvrez notre sélection de véhicules pour tous vos besoins de déplacement.</p>
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
{% endblock %} ", "voiture/front/index.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\voiture\\front\\index.html.twig");
    }
}
