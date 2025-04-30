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

/* base.html.twig */
class __TwigTemplate_fe6a33cf2ea68e993d136ecf41ee8298 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
   <link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap\" rel=\"stylesheet\">
    
    <link rel=\"stylesheet\" href=\"/assets/css/open-iconic-bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/animate.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/aos.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/jquery.timepicker.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/icomoon.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
    
    ";
        // line 23
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 24
        yield "  </head>
  <body>
    
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">Auto<span>road</span></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"fas fa-bars\"></span> Menu
        </button>

       <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\"><a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\" class=\"nav-link\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-link\">About</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pricing");
        yield "\"  class=\"nav-link\">Pricing</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_our_car");
        yield "\"  class=\"nav-link\">Our Cars</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\"  class=\"nav-link\">Reclamation</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\"  class=\"nav-link\">Station</a></li>
                </ul>
            </div>
      </div>
    </nav>
    <!-- END nav -->
    
    ";
        // line 48
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 49
        yield "    
    <section class=\"ftco-section\">
      <div class=\"container\">
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "flashes", ["success"], "method", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 53
            yield "          <div class=\"alert alert-success\">
            ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "flashes", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 59
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 60
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
              ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "
        ";
        // line 69
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 70
        yield "      </div>
    </section>

    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">À propos d'Autoroad</h2>
              <p>Plateforme de location de voitures avec système de réclamation intégré.</p>
              <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4 ml-md-5\">
              <h2 class=\"ftco-heading-2\">Information</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">À propos</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Services</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Conditions générales</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Support client</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">FAQ</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Contact</a></li>
                <li><a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"py-2 d-block\">Réclamations</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- loader -->
    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>

    <script src=\"/assets/js/jquery.min.js\"></script>
    <script src=\"/assets/js/jquery-migrate-3.0.1.min.js\"></script>
    <script src=\"/assets/js/popper.min.js\"></script>
    <script src=\"/assets/js/bootstrap.min.js\"></script>
    <script src=\"/assets/js/jquery.easing.1.3.js\"></script>
    <script src=\"/assets/js/jquery.waypoints.min.js\"></script>
    <script src=\"/assets/js/jquery.stellar.min.js\"></script>
    <script src=\"/assets/js/owl.carousel.min.js\"></script>
    <script src=\"/assets/js/jquery.magnific-popup.min.js\"></script>
    <script src=\"/assets/js/aos.js\"></script>
    <script src=\"/assets/js/jquery.animateNumber.min.js\"></script>
    <script src=\"/assets/js/bootstrap-datepicker.js\"></script>
    <script src=\"/assets/js/jquery.timepicker.min.js\"></script>
    <script src=\"/assets/js/scrollax.min.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"/assets/js/google-map.js\"></script>
    <script src=\"/assets/js/main.js\"></script>
    
    ";
        // line 137
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 138
        yield "    
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
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

        yield "Autoroad - ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 137
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  368 => 137,  346 => 69,  324 => 48,  302 => 23,  279 => 4,  266 => 138,  264 => 137,  227 => 103,  192 => 70,  190 => 69,  187 => 68,  181 => 67,  169 => 61,  164 => 60,  159 => 59,  155 => 58,  152 => 57,  143 => 54,  140 => 53,  136 => 52,  131 => 49,  129 => 48,  119 => 41,  115 => 40,  111 => 39,  107 => 38,  103 => 37,  99 => 36,  89 => 29,  82 => 24,  80 => 23,  58 => 4,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <title>{% block title %}Autoroad - {% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
   <link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap\" rel=\"stylesheet\">
    
    <link rel=\"stylesheet\" href=\"/assets/css/open-iconic-bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/animate.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/aos.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/jquery.timepicker.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/icomoon.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
    
    {% block stylesheets %}{% endblock %}
  </head>
  <body>
    
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('app_index') }}\">Auto<span>road</span></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"fas fa-bars\"></span> Menu
        </button>

       <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\"><a href=\"{{path('app_index' )}}\" class=\"nav-link\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"{{path('app_about' )}}\" class=\"nav-link\">About</a></li>
                    <li class=\"nav-item\"><a href=\"{{path('app_pricing' )}}\"  class=\"nav-link\">Pricing</a></li>
                    <li class=\"nav-item\"><a href=\"{{path('app_our_car' )}}\"  class=\"nav-link\">Our Cars</a></li>
                    <li class=\"nav-item\"><a href=\"{{path('app_reclamation_new' )}}\"  class=\"nav-link\">Reclamation</a></li>
                    <li class=\"nav-item\"><a href=\"{{path('app_contact' )}}\"  class=\"nav-link\">Station</a></li>
                </ul>
            </div>
      </div>
    </nav>
    <!-- END nav -->
    
    {% block hero %}{% endblock %}
    
    <section class=\"ftco-section\">
      <div class=\"container\">
        {% for message in app.flashes('success') %}
          <div class=\"alert alert-success\">
            {{ message }}
          </div>
        {% endfor %}

        {% for label, messages in app.flashes %}
          {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
              {{ message }}
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
          {% endfor %}
        {% endfor %}

        {% block body %}{% endblock %}
      </div>
    </section>

    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">À propos d'Autoroad</h2>
              <p>Plateforme de location de voitures avec système de réclamation intégré.</p>
              <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4 ml-md-5\">
              <h2 class=\"ftco-heading-2\">Information</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">À propos</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Services</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Conditions générales</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Support client</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">FAQ</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Contact</a></li>
                <li><a href=\"{{ path('app_reclamation_new') }}\" class=\"py-2 d-block\">Réclamations</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- loader -->
    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>

    <script src=\"/assets/js/jquery.min.js\"></script>
    <script src=\"/assets/js/jquery-migrate-3.0.1.min.js\"></script>
    <script src=\"/assets/js/popper.min.js\"></script>
    <script src=\"/assets/js/bootstrap.min.js\"></script>
    <script src=\"/assets/js/jquery.easing.1.3.js\"></script>
    <script src=\"/assets/js/jquery.waypoints.min.js\"></script>
    <script src=\"/assets/js/jquery.stellar.min.js\"></script>
    <script src=\"/assets/js/owl.carousel.min.js\"></script>
    <script src=\"/assets/js/jquery.magnific-popup.min.js\"></script>
    <script src=\"/assets/js/aos.js\"></script>
    <script src=\"/assets/js/jquery.animateNumber.min.js\"></script>
    <script src=\"/assets/js/bootstrap-datepicker.js\"></script>
    <script src=\"/assets/js/jquery.timepicker.min.js\"></script>
    <script src=\"/assets/js/scrollax.min.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"/assets/js/google-map.js\"></script>
    <script src=\"/assets/js/main.js\"></script>
    
    {% block javascripts %}{% endblock %}
    
  </body>
</html>", "base.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\base.html.twig");
    }
}
