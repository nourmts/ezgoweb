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

/* home/base.html.twig */
class __TwigTemplate_1017478ec1de73f45956d84a61fc6648 extends Template
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
            'css' => [$this, 'block_css'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 128 128'><text y='1.2em' font-size='96'>⚫️</text><text y='1.3em' x='0.2em' font-size='76' fill='%23fff'>sf</text></svg>\">
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 26
        yield "    ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 27
        yield "    
</head>

<body>
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">EZGO<span>Ride</span></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>

            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\"><a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\" class=\"nav-link\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-link\">About</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pricing");
        yield "\"  class=\"nav-link\">Pricing</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_our_car");
        yield "\"  class=\"nav-link\">Our Cars</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        yield "\"  class=\"nav-link\">Blog</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\"  class=\"nav-link\">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    
  

  <!-- loader -->
  <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>

    ";
        // line 58
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 59
        yield "
";
        // line 60
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 79
        yield "   ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 80
        yield "
   <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">About Autoroad</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                <li><a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"py-2 d-block\">About</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Services</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Term and Conditions</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Best Price Guarantee</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
             <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Customer Support</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">FAQ</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Payment Option</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Booking Tips</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">How it works</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
            \t<h2 class=\"ftco-heading-2\">Have a Questions?</h2>
            \t<div class=\"block-23 mb-3\">
\t              <ul>
\t                <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
\t                <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
\t                <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
\t              </ul>
\t            </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "EZGO";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 11
        yield "    <link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap\" rel=\"stylesheet\">
    
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
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

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
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

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 61
        yield "    <script src=\"/assets/js/jquery.min.js\"></script>
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/base.html.twig";
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
        return array (  362 => 79,  334 => 61,  321 => 60,  299 => 58,  276 => 26,  251 => 11,  238 => 10,  215 => 7,  158 => 99,  137 => 80,  134 => 79,  132 => 60,  129 => 59,  127 => 58,  111 => 45,  107 => 44,  103 => 43,  99 => 42,  95 => 41,  91 => 40,  81 => 33,  73 => 27,  70 => 26,  68 => 10,  62 => 7,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <title>{% block title %}EZGO{% endblock %}</title>
    
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 128 128'><text y='1.2em' font-size='96'>⚫️</text><text y='1.3em' x='0.2em' font-size='76' fill='%23fff'>sf</text></svg>\">
    {% block css%}
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
{% endblock %}
    {% block stylesheets %} {% endblock %}
    
</head>

<body>
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"{{path('app_index' )}}\">EZGO<span>Ride</span></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>

            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\"><a href=\"{{path('app_index' )}}\" class=\"nav-link\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"{{path('app_about' )}}\" class=\"nav-link\">About</a></li>
                    <li class=\"nav-item\"><a href=\"{{path('app_pricing' )}}\"  class=\"nav-link\">Pricing</a></li>
                    <li class=\"nav-item\"><a href=\"{{path('app_our_car' )}}\"  class=\"nav-link\">Our Cars</a></li>
                    <li class=\"nav-item\"><a href=\"{{path('app_blog' )}}\"  class=\"nav-link\">Blog</a></li>
                    <li class=\"nav-item\"><a href=\"{{path('app_contact' )}}\"  class=\"nav-link\">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    
  

  <!-- loader -->
  <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>

    {% block body %}{% endblock %}

{% block  js %}
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
{% endblock %}
   {% block javascripts %} {% endblock %}

   <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">About Autoroad</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                <li><a href=\"{{path('app_about' )}}\" class=\"py-2 d-block\">About</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Services</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Term and Conditions</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Best Price Guarantee</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
             <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Customer Support</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">FAQ</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Payment Option</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Booking Tips</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">How it works</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
            \t<h2 class=\"ftco-heading-2\">Have a Questions?</h2>
            \t<div class=\"block-23 mb-3\">
\t              <ul>
\t                <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
\t                <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
\t                <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
\t              </ul>
\t            </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>
", "home/base.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\piWeb\\templates\\home\\base.html.twig");
    }
}
