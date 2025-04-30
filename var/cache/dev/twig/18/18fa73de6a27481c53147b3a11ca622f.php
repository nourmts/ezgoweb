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

/* back/homedashboard/index.html.twig */
class __TwigTemplate_41fc073219dc4a8286db6006073a24c4 extends Template
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
            'hero' => [$this, 'block_hero'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/homedashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/homedashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("back/baseback.html.twig", "back/homedashboard/index.html.twig", 1);
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

        yield "Accueil du Dashboard";
        
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

        yield "Tableau de bord";
        
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

        yield "Tableau de bord";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield " <div class=\"container-fluid py-4\">
      <div class=\"row\">
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-body p-3\">
              <div class=\"row\">
                <div class=\"col-8\">
                  <div class=\"numbers\">
                    <p class=\"text-sm mb-0 text-capitalize font-weight-bold\">Réclamations totales</p>
                    <h5 class=\"font-weight-bolder mb-0\">
                      ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 19, $this->source); })())), "html", null, true);
        yield "
                    </h5>
                  </div>
                </div>
                <div class=\"col-4 text-end\">
                  <div class=\"icon icon-shape bg-gradient-primary shadow text-center border-radius-md\">
                    <i class=\"fas fa-clipboard-list text-lg opacity-10\" aria-hidden=\"true\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-body p-3\">
              <div class=\"row\">
                <div class=\"col-8\">
                  <div class=\"numbers\">
                    <p class=\"text-sm mb-0 text-capitalize font-weight-bold\">Réclamations en cours</p>
                    <h5 class=\"font-weight-bolder mb-0\">
                      ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 40, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 40, $this->source); })()), "etat", [], "any", false, false, false, 40) == "en cours"); })), "html", null, true);
        yield "
                    </h5>
                  </div>
                </div>
                <div class=\"col-4 text-end\">
                  <div class=\"icon icon-shape bg-gradient-warning shadow text-center border-radius-md\">
                    <i class=\"fas fa-spinner text-lg opacity-10\" aria-hidden=\"true\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-body p-3\">
              <div class=\"row\">
                <div class=\"col-8\">
                  <div class=\"numbers\">
                    <p class=\"text-sm mb-0 text-capitalize font-weight-bold\">Réclamations traitées</p>
                    <h5 class=\"font-weight-bolder mb-0\">
                      ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 61, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 61, $this->source); })()), "etat", [], "any", false, false, false, 61) == "traité"); })), "html", null, true);
        yield "
                    </h5>
                  </div>
                </div>
                <div class=\"col-4 text-end\">
                  <div class=\"icon icon-shape bg-gradient-success shadow text-center border-radius-md\">
                    <i class=\"fas fa-check text-lg opacity-10\" aria-hidden=\"true\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6\">
          <div class=\"card\">
            <div class=\"card-body p-3\">
              <div class=\"row\">
                <div class=\"col-8\">
                  <div class=\"numbers\">
                    <p class=\"text-sm mb-0 text-capitalize font-weight-bold\">Nouvelles réclamations</p>
                    <h5 class=\"font-weight-bolder mb-0\">
                      ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 82, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 82, $this->source); })()), "etat", [], "any", false, false, false, 82) == "non traité"); })), "html", null, true);
        yield "
                    </h5>
                  </div>
                </div>
                <div class=\"col-4 text-end\">
                  <div class=\"icon icon-shape bg-gradient-danger shadow text-center border-radius-md\">
                    <i class=\"fas fa-exclamation-circle text-lg opacity-10\" aria-hidden=\"true\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Liste des réclamations -->
      <div class=\"row mt-4\">
        <div class=\"col-12\">
          <div class=\"card mb-4\">
            <div class=\"card-header pb-0\">
              <div class=\"d-flex justify-content-between\">
                <h6>Liste des réclamations</h6>
                <div>
                  <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-sm\" placeholder=\"Rechercher...\">
                </div>
              </div>
            </div>
            <div class=\"card-body px-0 pt-0 pb-2\">
              <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0\" id=\"reclamationsTable\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">ID</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Catégorie</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Réclamation</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">État</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Date</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 123, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 124
            yield "                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">#";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 128), "html", null, true);
            yield "</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "categorie", [], "any", true, true, false, 133)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "categorie", [], "any", false, false, false, 133), "Non définie")) : ("Non définie")), "html", null, true);
            yield "</p>
                      </td>
                      <td>
                        <p class=\"text-xs text-secondary mb-0\">";
            // line 136
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reclamation", [], "any", false, false, false, 136)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reclamation", [], "any", false, false, false, 136), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reclamation", [], "any", false, false, false, 136), "html", null, true)));
            yield "</p>
                      </td>
                      <td>
                        <span class=\"badge badge-sm ";
            // line 139
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 139) == "traité")) {
                yield "bg-gradient-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 139) == "en cours")) {
                yield "bg-gradient-warning";
            } else {
                yield "bg-gradient-danger";
            }
            yield "\">
                          ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 140), "html", null, true);
            yield "
                        </span>
                      </td>
                      <td>
                        <p class=\"text-xs text-secondary mb-0\">";
            // line 144
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 144)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 144), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</p>
                      </td>
                      <td class=\"align-middle text-center\">
                        <button class=\"btn btn-link text-secondary mb-0 view-discussion\" data-id=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 147), "html", null, true);
            yield "\" title=\"Voir les discussions\">
                          <i class=\"fas fa-comments\"></i>
                        </button>
                        ";
            // line 150
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 150) == "nouvelle")) {
                // line 151
                yield "                        <button class=\"btn btn-link text-secondary mb-0 start-discussion\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 151), "html", null, true);
                yield "\" title=\"Démarrer la discussion\">
                          <i class=\"fas fa-play text-success\"></i>
                        </button>
                        ";
            }
            // line 155
            yield "                        <button class=\"btn btn-link text-danger mb-0 delete-reclamation\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 155), "html", null, true);
            yield "\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\" title=\"Supprimer\">
                          <i class=\"fas fa-trash text-danger\"></i>
                        </button>
                      </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 160
        if (!$context['_iterated']) {
            // line 161
            yield "                    <tr>
                      <td colspan=\"6\" class=\"text-center py-5\">
                        <p class=\"text-secondary mb-0\">Aucune réclamation trouvée</p>
                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "                  </tbody>
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

    // line 177
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

        // line 178
        yield "  <!-- Modal de confirmation de suppression -->
  <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmer la suppression</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
        </div>
        <div class=\"modal-body\">
          Êtes-vous sûr de vouloir supprimer cette réclamation ? Cette action est irréversible.
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn bg-gradient-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
          <button type=\"button\" class=\"btn bg-gradient-danger\" id=\"confirmDelete\">Supprimer</button>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 198
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

        // line 199
        yield "<script>
  document.addEventListener('DOMContentLoaded', function () {
    let reclamationIdToDelete = null;
    let csrfToken = '";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_reclamation"), "html", null, true);
        yield "';

    // Gestionnaire pour le bouton de suppression
    document.querySelectorAll('.delete-reclamation').forEach(button => {
      button.addEventListener('click', function () {
        reclamationIdToDelete = this.dataset.id;
      });
    });

    // Confirmation de suppression
    document.getElementById('confirmDelete').addEventListener('click', function () {
      if (reclamationIdToDelete) {
        fetch(`/reclamation/delete/\${reclamationIdToDelete}`, {
          method: 'DELETE',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            _token: csrfToken
          })
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Recharger la page après la suppression
            window.location.reload();
          } else {
            alert(data.message || \"Erreur lors de la suppression.\");
          }
        })
        .catch(error => {
          console.error('Erreur:', error);
          alert(\"Erreur lors de la suppression. Veuillez réessayer.\");
        });
      }

      // Fermer le modal
      const modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
      modal.hide();
    });

    // Gestionnaire pour le bouton \"Voir les discussions\" qui met en cours et redirige
    document.querySelectorAll('.view-discussion').forEach(button => {
      button.addEventListener('click', function() {
        const id = this.dataset.id;
        const reclamationState = this.closest('tr').querySelector('.badge').textContent.trim();
        
        // Si la réclamation n'est pas déjà en cours, on la met en cours
        if (reclamationState !== 'en cours' && reclamationState !== 'traité') {
          fetch(`/back/reclamation/\${id}/start`, {
            method: 'POST',
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Content-Type': 'application/json'
            }
          })
          .then(response => response.json())
          .then(data => {
            // Rediriger vers l'interface de discussion
            window.location.href = `/back/reclamation/\${id}/discussion`;
          })
          .catch(error => {
            console.error('Erreur:', error);
            // Rediriger quand même en cas d'erreur
            window.location.href = `/back/reclamation/\${id}/discussion`;
          });
        } else {
          // Si déjà en cours ou traité, juste rediriger
          window.location.href = `/back/reclamation/\${id}/discussion`;
        }
      });
    });

    // Gestionnaire pour le bouton \"Démarrer la discussion\"
    document.querySelectorAll('.start-discussion').forEach(button => {
      button.addEventListener('click', function () {
        const id = this.dataset.id;

        fetch(`/back/reclamation/\${id}/start`, {
          method: 'POST',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json'
          },
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Rediriger vers l'interface de discussion
            window.location.href = `/back/reclamation/\${id}/discussion`;
          } else {
            alert(data.message || \"Erreur lors de la mise à jour.\");
          }
        })
        .catch(() => alert(\"Erreur lors de la mise à jour.\"));
      });
    });

    // Fonctionnalité de recherche dans le tableau
    document.getElementById('searchInput').addEventListener('keyup', function() {
      const searchValue = this.value.toLowerCase();
      const table = document.getElementById('reclamationsTable');
      const rows = table.getElementsByTagName('tr');

      for (let i = 1; i < rows.length; i++) {
        let found = false;
        const cells = rows[i].getElementsByTagName('td');
        
        for (let j = 0; j < cells.length; j++) {
          const cellValue = cells[j].textContent || cells[j].innerText;
          if (cellValue.toLowerCase().indexOf(searchValue) > -1) {
            found = true;
            break;
          }
        }
        
        rows[i].style.display = found ? '' : 'none';
      }
    });
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
        return "back/homedashboard/index.html.twig";
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
        return array (  451 => 202,  446 => 199,  433 => 198,  404 => 178,  391 => 177,  372 => 167,  361 => 161,  359 => 160,  348 => 155,  340 => 151,  338 => 150,  332 => 147,  326 => 144,  319 => 140,  309 => 139,  303 => 136,  297 => 133,  289 => 128,  283 => 124,  278 => 123,  234 => 82,  210 => 61,  186 => 40,  162 => 19,  150 => 9,  137 => 8,  114 => 6,  91 => 5,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/baseback.html.twig' %}

{% block title %}Accueil du Dashboard{% endblock %}

{% block current_page %}Tableau de bord{% endblock %}
{% block page_title %}Tableau de bord{% endblock %}

{% block hero %}
 <div class=\"container-fluid py-4\">
      <div class=\"row\">
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-body p-3\">
              <div class=\"row\">
                <div class=\"col-8\">
                  <div class=\"numbers\">
                    <p class=\"text-sm mb-0 text-capitalize font-weight-bold\">Réclamations totales</p>
                    <h5 class=\"font-weight-bolder mb-0\">
                      {{ reclamations|length }}
                    </h5>
                  </div>
                </div>
                <div class=\"col-4 text-end\">
                  <div class=\"icon icon-shape bg-gradient-primary shadow text-center border-radius-md\">
                    <i class=\"fas fa-clipboard-list text-lg opacity-10\" aria-hidden=\"true\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-body p-3\">
              <div class=\"row\">
                <div class=\"col-8\">
                  <div class=\"numbers\">
                    <p class=\"text-sm mb-0 text-capitalize font-weight-bold\">Réclamations en cours</p>
                    <h5 class=\"font-weight-bolder mb-0\">
                      {{ reclamations|filter(r => r.etat == 'en cours')|length }}
                    </h5>
                  </div>
                </div>
                <div class=\"col-4 text-end\">
                  <div class=\"icon icon-shape bg-gradient-warning shadow text-center border-radius-md\">
                    <i class=\"fas fa-spinner text-lg opacity-10\" aria-hidden=\"true\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-body p-3\">
              <div class=\"row\">
                <div class=\"col-8\">
                  <div class=\"numbers\">
                    <p class=\"text-sm mb-0 text-capitalize font-weight-bold\">Réclamations traitées</p>
                    <h5 class=\"font-weight-bolder mb-0\">
                      {{ reclamations|filter(r => r.etat == 'traité')|length }}
                    </h5>
                  </div>
                </div>
                <div class=\"col-4 text-end\">
                  <div class=\"icon icon-shape bg-gradient-success shadow text-center border-radius-md\">
                    <i class=\"fas fa-check text-lg opacity-10\" aria-hidden=\"true\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6\">
          <div class=\"card\">
            <div class=\"card-body p-3\">
              <div class=\"row\">
                <div class=\"col-8\">
                  <div class=\"numbers\">
                    <p class=\"text-sm mb-0 text-capitalize font-weight-bold\">Nouvelles réclamations</p>
                    <h5 class=\"font-weight-bolder mb-0\">
                      {{ reclamations|filter(r => r.etat == 'non traité')|length }}
                    </h5>
                  </div>
                </div>
                <div class=\"col-4 text-end\">
                  <div class=\"icon icon-shape bg-gradient-danger shadow text-center border-radius-md\">
                    <i class=\"fas fa-exclamation-circle text-lg opacity-10\" aria-hidden=\"true\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Liste des réclamations -->
      <div class=\"row mt-4\">
        <div class=\"col-12\">
          <div class=\"card mb-4\">
            <div class=\"card-header pb-0\">
              <div class=\"d-flex justify-content-between\">
                <h6>Liste des réclamations</h6>
                <div>
                  <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-sm\" placeholder=\"Rechercher...\">
                </div>
              </div>
            </div>
            <div class=\"card-body px-0 pt-0 pb-2\">
              <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0\" id=\"reclamationsTable\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">ID</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Catégorie</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Réclamation</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">État</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Date</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for reclamation in reclamations %}
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">#{{ reclamation.idReclamation }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-xs font-weight-bold mb-0\">{{ reclamation.categorie|default('Non définie') }}</p>
                      </td>
                      <td>
                        <p class=\"text-xs text-secondary mb-0\">{{ reclamation.reclamation|length > 50 ? reclamation.reclamation|slice(0, 50) ~ '...' : reclamation.reclamation }}</p>
                      </td>
                      <td>
                        <span class=\"badge badge-sm {% if reclamation.etat == 'traité' %}bg-gradient-success{% elseif reclamation.etat == 'en cours' %}bg-gradient-warning{% else %}bg-gradient-danger{% endif %}\">
                          {{ reclamation.etat }}
                        </span>
                      </td>
                      <td>
                        <p class=\"text-xs text-secondary mb-0\">{{ reclamation.date ? reclamation.date|date('d/m/Y') : 'N/A' }}</p>
                      </td>
                      <td class=\"align-middle text-center\">
                        <button class=\"btn btn-link text-secondary mb-0 view-discussion\" data-id=\"{{ reclamation.idReclamation }}\" title=\"Voir les discussions\">
                          <i class=\"fas fa-comments\"></i>
                        </button>
                        {% if reclamation.etat == 'nouvelle' %}
                        <button class=\"btn btn-link text-secondary mb-0 start-discussion\" data-id=\"{{ reclamation.idReclamation }}\" title=\"Démarrer la discussion\">
                          <i class=\"fas fa-play text-success\"></i>
                        </button>
                        {% endif %}
                        <button class=\"btn btn-link text-danger mb-0 delete-reclamation\" data-id=\"{{ reclamation.idReclamation }}\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\" title=\"Supprimer\">
                          <i class=\"fas fa-trash text-danger\"></i>
                        </button>
                      </td>
                    </tr>
                    {% else %}
                    <tr>
                      <td colspan=\"6\" class=\"text-center py-5\">
                        <p class=\"text-secondary mb-0\">Aucune réclamation trouvée</p>
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
{% endblock %}

{% block body %}
  <!-- Modal de confirmation de suppression -->
  <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmer la suppression</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
        </div>
        <div class=\"modal-body\">
          Êtes-vous sûr de vouloir supprimer cette réclamation ? Cette action est irréversible.
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn bg-gradient-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
          <button type=\"button\" class=\"btn bg-gradient-danger\" id=\"confirmDelete\">Supprimer</button>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
<script>
  document.addEventListener('DOMContentLoaded', function () {
    let reclamationIdToDelete = null;
    let csrfToken = '{{ csrf_token(\"delete_reclamation\") }}';

    // Gestionnaire pour le bouton de suppression
    document.querySelectorAll('.delete-reclamation').forEach(button => {
      button.addEventListener('click', function () {
        reclamationIdToDelete = this.dataset.id;
      });
    });

    // Confirmation de suppression
    document.getElementById('confirmDelete').addEventListener('click', function () {
      if (reclamationIdToDelete) {
        fetch(`/reclamation/delete/\${reclamationIdToDelete}`, {
          method: 'DELETE',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            _token: csrfToken
          })
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Recharger la page après la suppression
            window.location.reload();
          } else {
            alert(data.message || \"Erreur lors de la suppression.\");
          }
        })
        .catch(error => {
          console.error('Erreur:', error);
          alert(\"Erreur lors de la suppression. Veuillez réessayer.\");
        });
      }

      // Fermer le modal
      const modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
      modal.hide();
    });

    // Gestionnaire pour le bouton \"Voir les discussions\" qui met en cours et redirige
    document.querySelectorAll('.view-discussion').forEach(button => {
      button.addEventListener('click', function() {
        const id = this.dataset.id;
        const reclamationState = this.closest('tr').querySelector('.badge').textContent.trim();
        
        // Si la réclamation n'est pas déjà en cours, on la met en cours
        if (reclamationState !== 'en cours' && reclamationState !== 'traité') {
          fetch(`/back/reclamation/\${id}/start`, {
            method: 'POST',
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Content-Type': 'application/json'
            }
          })
          .then(response => response.json())
          .then(data => {
            // Rediriger vers l'interface de discussion
            window.location.href = `/back/reclamation/\${id}/discussion`;
          })
          .catch(error => {
            console.error('Erreur:', error);
            // Rediriger quand même en cas d'erreur
            window.location.href = `/back/reclamation/\${id}/discussion`;
          });
        } else {
          // Si déjà en cours ou traité, juste rediriger
          window.location.href = `/back/reclamation/\${id}/discussion`;
        }
      });
    });

    // Gestionnaire pour le bouton \"Démarrer la discussion\"
    document.querySelectorAll('.start-discussion').forEach(button => {
      button.addEventListener('click', function () {
        const id = this.dataset.id;

        fetch(`/back/reclamation/\${id}/start`, {
          method: 'POST',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json'
          },
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Rediriger vers l'interface de discussion
            window.location.href = `/back/reclamation/\${id}/discussion`;
          } else {
            alert(data.message || \"Erreur lors de la mise à jour.\");
          }
        })
        .catch(() => alert(\"Erreur lors de la mise à jour.\"));
      });
    });

    // Fonctionnalité de recherche dans le tableau
    document.getElementById('searchInput').addEventListener('keyup', function() {
      const searchValue = this.value.toLowerCase();
      const table = document.getElementById('reclamationsTable');
      const rows = table.getElementsByTagName('tr');

      for (let i = 1; i < rows.length; i++) {
        let found = false;
        const cells = rows[i].getElementsByTagName('td');
        
        for (let j = 0; j < cells.length; j++) {
          const cellValue = cells[j].textContent || cells[j].innerText;
          if (cellValue.toLowerCase().indexOf(searchValue) > -1) {
            found = true;
            break;
          }
        }
        
        rows[i].style.display = found ? '' : 'none';
      }
    });
  });
</script>
{% endblock %}
", "back/homedashboard/index.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\back\\homedashboard\\index.html.twig");
    }
}
