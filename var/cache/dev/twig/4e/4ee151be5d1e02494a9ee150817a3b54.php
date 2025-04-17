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

/* home/index.html.twig */
class __TwigTemplate_4502709c0584a00f45ff8ec989b39591 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "home/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "home/index.html.twig", 1);
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

        yield "Hello ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        yield " <div class=\"hero-wrap\" style=\"background-image: url('/assets/images/bg_1.jpg');\" data-stellar-background-ratio=\"0.5\">
     <div class=\"hero-wrap\" style=\"background-image: url('/assets/images/bg_1.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text justify-content-start align-items-center\">
          <div class=\"col-lg-6 col-md-6 ftco-animate d-flex align-items-end\">
          \t<div class=\"text\">
\t            <h1 class=\"mb-4\">Now <span>It's easy for you</span> <span>rent a car</span></h1>
\t            <p style=\"font-size: 18px;\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
\t            <a href=\"https://vimeo.com/45830194\" class=\"icon-wrap popup-vimeo d-flex align-items-center mt-4\">
\t            \t<div class=\"icon d-flex align-items-center justify-content-center\">
\t            \t\t<span class=\"ion-ios-play\"></span>
\t            \t</div>
\t            \t<div class=\"heading-title ml-5\">
\t\t            \t<span>Easy steps for renting a car</span>
\t            \t</div>
\t            </a>
            </div>
          </div>
          <div class=\"col-lg-2 col\"></div>
          <div class=\"col-lg-4 col-md-6 mt-0 mt-md-5 d-flex\">
          \t<form action=\"#\" class=\"request-form ftco-animate\">
          \t\t<h2>Make your trip</h2>
\t    \t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t<label for=\"\" class=\"label\">Pick-up location</label>
\t    \t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City, Airport, Station, etc\">
\t    \t\t\t\t</div>
\t    \t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t<label for=\"\" class=\"label\">Drop-off location</label>
\t    \t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City, Airport, Station, etc\">
\t    \t\t\t\t</div>
\t    \t\t\t\t<div class=\"d-flex\">
\t    \t\t\t\t\t<div class=\"form-group mr-2\">
\t                <label for=\"\" class=\"label\">Pick-up date</label>
\t                <input type=\"text\" class=\"form-control\" id=\"book_pick_date\" placeholder=\"Date\">
\t              </div>
\t              <div class=\"form-group ml-2\">
\t                <label for=\"\" class=\"label\">Drop-off date</label>
\t                <input type=\"text\" class=\"form-control\" id=\"book_off_date\" placeholder=\"Date\">
\t              </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"label\">Pick-up time</label>
                <input type=\"text\" class=\"form-control\" id=\"time_pick\" placeholder=\"Time\">
              </div>
\t            <div class=\"form-group\">
\t              <input type=\"submit\" value=\"Search Vehicle\" class=\"btn btn-primary py-3 px-4\">
\t            </div>
\t    \t\t\t</form>
          </div>
        </div>
      </div>
    </div>

    <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
    \t<div class=\"container\">
\t    \t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"search-wrap-1 ftco-animate mb-5\">
\t\t\t\t\t\t\t<form action=\"#\" class=\"search-property-1\">
\t\t        \t\t<div class=\"row\">
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Select Model</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"select-wrap\">
\t\t                      <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
\t\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t\t                      \t<option value=\"\">Select Model</option>
\t\t                        <option value=\"\">Model 1</option>
\t\t                        <option value=\"\">Model 2</option>
\t\t                        <option value=\"\">Model 3</option>
\t\t                        <option value=\"\">Model 4</option>
\t\t                        <option value=\"\">Model 5</option>
\t\t                        <option value=\"\">Model 6</option>
\t\t                        <option value=\"\">Model 7</option>
\t\t                        <option value=\"\">Model 8</option>
\t\t                        <option value=\"\">Model 9</option>
\t\t                        <option value=\"\">Model 10</option>
\t\t                      </select>
\t\t                    </div>
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Select Brand</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"select-wrap\">
\t\t                      <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
\t\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t\t                      \t<option value=\"\">Select Brand</option>
\t\t                        <option value=\"\">Brand 1</option>
\t\t                        <option value=\"\">Brand 2</option>
\t\t                        <option value=\"\">Brand 3</option>
\t\t                        <option value=\"\">Brand 4</option>
\t\t                        <option value=\"\">Brand 5</option>
\t\t                        <option value=\"\">Brand 6</option>
\t\t                        <option value=\"\">Brand 7</option>
\t\t                        <option value=\"\">Brand 8</option>
\t\t                        <option value=\"\">Brand 9</option>
\t\t                        <option value=\"\">Brand 10</option>
\t\t                      </select>
\t\t                    </div>
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Year Model</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"select-wrap\">
\t\t                      <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
\t\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t\t                      \t<option value=\"\">Year Model</option>
\t\t                        <option value=\"\">2019</option>
\t\t                        <option value=\"\">2018</option>
\t\t                        <option value=\"\">2017</option>
\t\t                        <option value=\"\">2016</option>
\t\t                        <option value=\"\">2015</option>
\t\t                        <option value=\"\">2014</option>
\t\t                      </select>
\t\t                    </div>
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"select-wrap\">
\t\t                      <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
\t\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t\t                      \t<option value=\"\">\$1</option>
\t\t                        <option value=\"\">\$50</option>
\t\t                        <option value=\"\">\$100</option>
\t\t                        <option value=\"\">\$200</option>
\t\t                        <option value=\"\">\$300</option>
\t\t                        <option value=\"\">\$400</option>
\t\t                        <option value=\"\">\$500</option>
\t\t                        <option value=\"\">\$600</option>
\t\t                        <option value=\"\">\$700</option>
\t\t                        <option value=\"\">\$800</option>
\t\t                        <option value=\"\">\$900</option>
\t\t                        <option value=\"\">\$1000</option>
\t\t                      </select>
\t\t                    </div>
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-self-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t\t\t                <input type=\"submit\" value=\"Search\" class=\"form-control btn btn-primary\">
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t</div>
\t\t        \t</form>
\t\t        </div>
\t\t\t\t\t</div>
\t    \t</div>
\t    </div>
    </section>

    <section class=\"ftco-section services-section ftco-no-pt ftco-no-pb\">
      <div class=\"container\">
      \t<div class=\"row justify-content-center\">
          <div class=\"col-md-12 heading-section text-center ftco-animate mb-5\">
          \t<span class=\"subheading\">Our Services</span>
            <h2 class=\"mb-2\">Our Services</h2>
          </div>
        </div>
        <div class=\"row d-flex\">
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services\">
              <div class=\"media-body py-md-4\">
              \t<div class=\"d-flex mb-3 align-items-center\">
\t              \t<div class=\"icon\"><span class=\"flaticon-customer-support\"></span></div>
\t                <h3 class=\"heading mb-0 pl-3\">24/7 Car Support</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services\">
              <div class=\"media-body py-md-4\">
              \t<div class=\"d-flex mb-3 align-items-center\">
\t              \t<div class=\"icon\"><span class=\"flaticon-route\"></span></div>
\t                <h3 class=\"heading mb-0 pl-3\">Lots of location</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services\">
              <div class=\"media-body py-md-4\">
              \t<div class=\"d-flex mb-3 align-items-center\">
\t              \t<div class=\"icon\"><span class=\"flaticon-online-booking\"></span></div>
\t                <h3 class=\"heading mb-0 pl-3\">Reservation</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services\">
              <div class=\"media-body py-md-4\">
              \t<div class=\"d-flex mb-3 align-items-center\">
\t              \t<div class=\"icon\"><span class=\"flaticon-rent\"></span></div>
\t                <h3 class=\"heading mb-0 pl-3\">Rental Cars</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section\">
    \t<div class=\"container-fluid px-4\">
    \t\t<div class=\"row justify-content-center\">
          <div class=\"col-md-12 heading-section text-center ftco-animate mb-5\">
          \t<span class=\"subheading\">What we offer</span>
            <h2 class=\"mb-2\">Choose Your Car</h2>
          </div>
        </div>
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/car-1.jpg"), "html", null, true);
        yield "');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Audi</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/car-2.jpg"), "html", null, true);
        yield "');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Ford</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/car-3.jpg"), "html", null, true);
        yield "');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Cheverolet</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/car-4.jpg"), "html", null, true);
        yield "');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Mercedes</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>

    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/car-5.jpg"), "html", null, true);
        yield "');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Audi</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/car-6.jpg"), "html", null, true);
        yield "');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Ford</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/car-7.jpg"), "html", null, true);
        yield "');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Cheverolet</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/car-8.jpg"), "html", null, true);
        yield "');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Mercedes</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>

    <section class=\"ftco-section services-section img\" style=\"background-image: url('";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_2.jpg"), "html", null, true);
        yield "');\">
    \t<div class=\"overlay\"></div>
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-7 text-center heading-section heading-section-white ftco-animate\">
          \t<span class=\"subheading\">Work flow</span>
            <h2 class=\"mb-3\">How it works</h2>
          </div>
        </div>
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services services-2\">
              <div class=\"media-body py-md-4 text-center\">
              \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-route\"></span></div>
                <h3>Pick Destination</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services services-2\">
              <div class=\"media-body py-md-4 text-center\">
              \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-select\"></span></div>
                <h3>Select Term</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services services-2\">
              <div class=\"media-body py-md-4 text-center\">
              \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-rent\"></span></div>
                <h3>Choose A Car</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services services-2\">
              <div class=\"media-body py-md-4 text-center\">
              \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-review\"></span></div>
                <h3>Enjoy The Ride</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
    \t\t</div>
    \t</div>
    </section>

    <section class=\"ftco-section testimony-section\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-7 text-center heading-section ftco-animate\">
          \t<span class=\"subheading\">Testimonial</span>
            <h2 class=\"mb-3\">Happy Clients</h2>
          </div>
        </div>
        <div class=\"row ftco-animate\">
          <div class=\"col-md-12\">
            <div class=\"carousel-testimony owl-carousel ftco-owl\">
              <div class=\"item\">
                <div class=\"testimony-wrap text-center py-4 pb-5\">
                  <div class=\"user-img mb-4\" style=\"background-image: url('";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_1.jpg"), "html", null, true);
        yield "');\">
                  </div>
                  <div class=\"text pt-4\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Roger Scott</p>
                    <span class=\"position\">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap text-center py-4 pb-5\">
                  <div class=\"user-img mb-4\" style=\"background-image: url('";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_2.jpg"), "html", null, true);
        yield "');\">
                  </div>
                  <div class=\"text pt-4\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Roger Scott</p>
                    <span class=\"position\">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap text-center py-4 pb-5\">
                  <div class=\"user-img mb-4\" style=\"background-image: url('";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_3.jpg"), "html", null, true);
        yield "');\">
                  </div>
                  <div class=\"text pt-4\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Roger Scott</p>
                    <span class=\"position\">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap text-center py-4 pb-5\">
                  <div class=\"user-img mb-4\" style=\"background-image: url('";
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_1.jpg"), "html", null, true);
        yield "');\">
                  </div>
                  <div class=\"text pt-4\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Roger Scott</p>
                    <span class=\"position\">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap text-center py-4 pb-5\">
                  <div class=\"user-img mb-4\" style=\"background-image: url('";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_1.jpg"), "html", null, true);
        yield "');\">
                  </div>
                  <div class=\"text pt-4\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Roger Scott</p>
                    <span class=\"position\">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

\t\t<section class=\"ftco-section ftco-no-pt ftco-no-pb\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t<div class=\"col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url('";
        // line 510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/about.jpg"), "html", null, true);
        yield "');\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 wrap-about py-md-5 ftco-animate\">
\t          <div class=\"heading-section mb-5 pl-md-5\">
\t          \t<span class=\"subheading\">About us</span>
\t            <h2 class=\"mb-4\">Choose A Perfect Car</h2>

\t            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
\t            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn't take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
\t            <p><a href=\"#\" class=\"btn btn-primary\">Search Vehicle</a></p>
\t          </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

    <section class=\"ftco-section\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-7 heading-section text-center ftco-animate\">
          \t<span class=\"subheading\">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class=\"row d-flex\">
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('";
        // line 537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_1.jpg"), "html", null, true);
        yield "');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_2.jpg"), "html", null, true);
        yield "');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('";
        // line 567
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_3.jpg"), "html", null, true);
        yield "');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>\t

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
        return "home/index.html.twig";
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
        return array (  714 => 567,  696 => 552,  678 => 537,  648 => 510,  627 => 492,  613 => 481,  599 => 470,  585 => 459,  571 => 448,  505 => 385,  482 => 365,  461 => 347,  440 => 329,  419 => 311,  397 => 292,  376 => 274,  355 => 256,  334 => 238,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'home/base.html.twig' %}

{% block title %}Hello {% endblock %}

{% block body %} <div class=\"hero-wrap\" style=\"background-image: url('/assets/images/bg_1.jpg');\" data-stellar-background-ratio=\"0.5\">
     <div class=\"hero-wrap\" style=\"background-image: url('/assets/images/bg_1.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text justify-content-start align-items-center\">
          <div class=\"col-lg-6 col-md-6 ftco-animate d-flex align-items-end\">
          \t<div class=\"text\">
\t            <h1 class=\"mb-4\">Now <span>It's easy for you</span> <span>rent a car</span></h1>
\t            <p style=\"font-size: 18px;\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
\t            <a href=\"https://vimeo.com/45830194\" class=\"icon-wrap popup-vimeo d-flex align-items-center mt-4\">
\t            \t<div class=\"icon d-flex align-items-center justify-content-center\">
\t            \t\t<span class=\"ion-ios-play\"></span>
\t            \t</div>
\t            \t<div class=\"heading-title ml-5\">
\t\t            \t<span>Easy steps for renting a car</span>
\t            \t</div>
\t            </a>
            </div>
          </div>
          <div class=\"col-lg-2 col\"></div>
          <div class=\"col-lg-4 col-md-6 mt-0 mt-md-5 d-flex\">
          \t<form action=\"#\" class=\"request-form ftco-animate\">
          \t\t<h2>Make your trip</h2>
\t    \t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t<label for=\"\" class=\"label\">Pick-up location</label>
\t    \t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City, Airport, Station, etc\">
\t    \t\t\t\t</div>
\t    \t\t\t\t<div class=\"form-group\">
\t    \t\t\t\t\t<label for=\"\" class=\"label\">Drop-off location</label>
\t    \t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"City, Airport, Station, etc\">
\t    \t\t\t\t</div>
\t    \t\t\t\t<div class=\"d-flex\">
\t    \t\t\t\t\t<div class=\"form-group mr-2\">
\t                <label for=\"\" class=\"label\">Pick-up date</label>
\t                <input type=\"text\" class=\"form-control\" id=\"book_pick_date\" placeholder=\"Date\">
\t              </div>
\t              <div class=\"form-group ml-2\">
\t                <label for=\"\" class=\"label\">Drop-off date</label>
\t                <input type=\"text\" class=\"form-control\" id=\"book_off_date\" placeholder=\"Date\">
\t              </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"label\">Pick-up time</label>
                <input type=\"text\" class=\"form-control\" id=\"time_pick\" placeholder=\"Time\">
              </div>
\t            <div class=\"form-group\">
\t              <input type=\"submit\" value=\"Search Vehicle\" class=\"btn btn-primary py-3 px-4\">
\t            </div>
\t    \t\t\t</form>
          </div>
        </div>
      </div>
    </div>

    <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
    \t<div class=\"container\">
\t    \t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"search-wrap-1 ftco-animate mb-5\">
\t\t\t\t\t\t\t<form action=\"#\" class=\"search-property-1\">
\t\t        \t\t<div class=\"row\">
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Select Model</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"select-wrap\">
\t\t                      <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
\t\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t\t                      \t<option value=\"\">Select Model</option>
\t\t                        <option value=\"\">Model 1</option>
\t\t                        <option value=\"\">Model 2</option>
\t\t                        <option value=\"\">Model 3</option>
\t\t                        <option value=\"\">Model 4</option>
\t\t                        <option value=\"\">Model 5</option>
\t\t                        <option value=\"\">Model 6</option>
\t\t                        <option value=\"\">Model 7</option>
\t\t                        <option value=\"\">Model 8</option>
\t\t                        <option value=\"\">Model 9</option>
\t\t                        <option value=\"\">Model 10</option>
\t\t                      </select>
\t\t                    </div>
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Select Brand</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"select-wrap\">
\t\t                      <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
\t\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t\t                      \t<option value=\"\">Select Brand</option>
\t\t                        <option value=\"\">Brand 1</option>
\t\t                        <option value=\"\">Brand 2</option>
\t\t                        <option value=\"\">Brand 3</option>
\t\t                        <option value=\"\">Brand 4</option>
\t\t                        <option value=\"\">Brand 5</option>
\t\t                        <option value=\"\">Brand 6</option>
\t\t                        <option value=\"\">Brand 7</option>
\t\t                        <option value=\"\">Brand 8</option>
\t\t                        <option value=\"\">Brand 9</option>
\t\t                        <option value=\"\">Brand 10</option>
\t\t                      </select>
\t\t                    </div>
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Year Model</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"select-wrap\">
\t\t                      <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
\t\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t\t                      \t<option value=\"\">Year Model</option>
\t\t                        <option value=\"\">2019</option>
\t\t                        <option value=\"\">2018</option>
\t\t                        <option value=\"\">2017</option>
\t\t                        <option value=\"\">2016</option>
\t\t                        <option value=\"\">2015</option>
\t\t                        <option value=\"\">2014</option>
\t\t                      </select>
\t\t                    </div>
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"select-wrap\">
\t\t                      <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
\t\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t\t                      \t<option value=\"\">\$1</option>
\t\t                        <option value=\"\">\$50</option>
\t\t                        <option value=\"\">\$100</option>
\t\t                        <option value=\"\">\$200</option>
\t\t                        <option value=\"\">\$300</option>
\t\t                        <option value=\"\">\$400</option>
\t\t                        <option value=\"\">\$500</option>
\t\t                        <option value=\"\">\$600</option>
\t\t                        <option value=\"\">\$700</option>
\t\t                        <option value=\"\">\$800</option>
\t\t                        <option value=\"\">\$900</option>
\t\t                        <option value=\"\">\$1000</option>
\t\t                      </select>
\t\t                    </div>
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-self-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t\t\t                <input type=\"submit\" value=\"Search\" class=\"form-control btn btn-primary\">
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t</div>
\t\t        \t</form>
\t\t        </div>
\t\t\t\t\t</div>
\t    \t</div>
\t    </div>
    </section>

    <section class=\"ftco-section services-section ftco-no-pt ftco-no-pb\">
      <div class=\"container\">
      \t<div class=\"row justify-content-center\">
          <div class=\"col-md-12 heading-section text-center ftco-animate mb-5\">
          \t<span class=\"subheading\">Our Services</span>
            <h2 class=\"mb-2\">Our Services</h2>
          </div>
        </div>
        <div class=\"row d-flex\">
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services\">
              <div class=\"media-body py-md-4\">
              \t<div class=\"d-flex mb-3 align-items-center\">
\t              \t<div class=\"icon\"><span class=\"flaticon-customer-support\"></span></div>
\t                <h3 class=\"heading mb-0 pl-3\">24/7 Car Support</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services\">
              <div class=\"media-body py-md-4\">
              \t<div class=\"d-flex mb-3 align-items-center\">
\t              \t<div class=\"icon\"><span class=\"flaticon-route\"></span></div>
\t                <h3 class=\"heading mb-0 pl-3\">Lots of location</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services\">
              <div class=\"media-body py-md-4\">
              \t<div class=\"d-flex mb-3 align-items-center\">
\t              \t<div class=\"icon\"><span class=\"flaticon-online-booking\"></span></div>
\t                <h3 class=\"heading mb-0 pl-3\">Reservation</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services\">
              <div class=\"media-body py-md-4\">
              \t<div class=\"d-flex mb-3 align-items-center\">
\t              \t<div class=\"icon\"><span class=\"flaticon-rent\"></span></div>
\t                <h3 class=\"heading mb-0 pl-3\">Rental Cars</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section\">
    \t<div class=\"container-fluid px-4\">
    \t\t<div class=\"row justify-content-center\">
          <div class=\"col-md-12 heading-section text-center ftco-animate mb-5\">
          \t<span class=\"subheading\">What we offer</span>
            <h2 class=\"mb-2\">Choose Your Car</h2>
          </div>
        </div>
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('{{ asset('images/car-1.jpg') }}');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Audi</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('{{ asset('images/car-2.jpg') }}');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Ford</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('{{ asset('images/car-3.jpg') }}');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Cheverolet</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('{{ asset('images/car-4.jpg') }}');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Mercedes</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>

    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('{{ asset('images/car-5.jpg') }}');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Audi</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('{{ asset('images/car-6.jpg') }}');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Ford</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('{{ asset('images/car-7.jpg') }}');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Cheverolet</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url('{{ asset('images/car-8.jpg') }}');\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"#\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Mercedes</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>

    <section class=\"ftco-section services-section img\" style=\"background-image: url('{{ asset('images/bg_2.jpg') }}');\">
    \t<div class=\"overlay\"></div>
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-7 text-center heading-section heading-section-white ftco-animate\">
          \t<span class=\"subheading\">Work flow</span>
            <h2 class=\"mb-3\">How it works</h2>
          </div>
        </div>
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services services-2\">
              <div class=\"media-body py-md-4 text-center\">
              \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-route\"></span></div>
                <h3>Pick Destination</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services services-2\">
              <div class=\"media-body py-md-4 text-center\">
              \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-select\"></span></div>
                <h3>Select Term</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services services-2\">
              <div class=\"media-body py-md-4 text-center\">
              \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-rent\"></span></div>
                <h3>Choose A Car</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
            <div class=\"media block-6 services services-2\">
              <div class=\"media-body py-md-4 text-center\">
              \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-review\"></span></div>
                <h3>Enjoy The Ride</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
    \t\t</div>
    \t</div>
    </section>

    <section class=\"ftco-section testimony-section\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-7 text-center heading-section ftco-animate\">
          \t<span class=\"subheading\">Testimonial</span>
            <h2 class=\"mb-3\">Happy Clients</h2>
          </div>
        </div>
        <div class=\"row ftco-animate\">
          <div class=\"col-md-12\">
            <div class=\"carousel-testimony owl-carousel ftco-owl\">
              <div class=\"item\">
                <div class=\"testimony-wrap text-center py-4 pb-5\">
                  <div class=\"user-img mb-4\" style=\"background-image: url('{{ asset('images/person_1.jpg') }}');\">
                  </div>
                  <div class=\"text pt-4\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Roger Scott</p>
                    <span class=\"position\">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap text-center py-4 pb-5\">
                  <div class=\"user-img mb-4\" style=\"background-image: url('{{ asset('images/person_2.jpg') }}');\">
                  </div>
                  <div class=\"text pt-4\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Roger Scott</p>
                    <span class=\"position\">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap text-center py-4 pb-5\">
                  <div class=\"user-img mb-4\" style=\"background-image: url('{{ asset('images/person_3.jpg') }}');\">
                  </div>
                  <div class=\"text pt-4\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Roger Scott</p>
                    <span class=\"position\">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap text-center py-4 pb-5\">
                  <div class=\"user-img mb-4\" style=\"background-image: url('{{ asset('images/person_1.jpg') }}');\">
                  </div>
                  <div class=\"text pt-4\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Roger Scott</p>
                    <span class=\"position\">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap text-center py-4 pb-5\">
                  <div class=\"user-img mb-4\" style=\"background-image: url('{{ asset('images/person_1.jpg') }}');\">
                  </div>
                  <div class=\"text pt-4\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Roger Scott</p>
                    <span class=\"position\">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

\t\t<section class=\"ftco-section ftco-no-pt ftco-no-pb\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t<div class=\"col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url('{{ asset('images/about.jpg') }}');\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 wrap-about py-md-5 ftco-animate\">
\t          <div class=\"heading-section mb-5 pl-md-5\">
\t          \t<span class=\"subheading\">About us</span>
\t            <h2 class=\"mb-4\">Choose A Perfect Car</h2>

\t            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
\t            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn't take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
\t            <p><a href=\"#\" class=\"btn btn-primary\">Search Vehicle</a></p>
\t          </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

    <section class=\"ftco-section\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-7 heading-section text-center ftco-animate\">
          \t<span class=\"subheading\">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class=\"row d-flex\">
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('{{ asset('images/image_1.jpg') }}');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('{{ asset('images/image_2.jpg') }}');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('{{ asset('images/image_3.jpg') }}');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>\t

{% endblock %}
", "home/index.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\piWeb\\templates\\home\\index.html.twig");
    }
}
