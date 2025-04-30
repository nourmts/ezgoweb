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

/* fronte/our_car.html.twig */
class __TwigTemplate_21dcb043e93200923d21ac9dc4623f3a extends Template
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
        return "fronte/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/our_car.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fronte/our_car.html.twig"));

        $this->parent = $this->loadTemplate("fronte/base.html.twig", "fronte/our_car.html.twig", 1);
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

        yield "our car ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        yield " 

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

    <section class=\"ftco-section\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-1.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Audi</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-2.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Ford</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-3.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Cheverolet</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-4.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Mercedes</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>

    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-5.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Audi</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-6.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Ford</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-7.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Cheverolet</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-8.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Mercedes</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>

    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-9.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Audi</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-10.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Ford</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-11.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Cheverolet</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-12.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Mercedes</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t\t<div class=\"row mt-5\">
          <div class=\"col text-center\">
            <div class=\"block-27\">
              <ul>
                <li><a href=\"#\">&lt;</a></li>
                <li class=\"active\"><span>1</span></li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">4</a></li>
                <li><a href=\"#\">5</a></li>
                <li><a href=\"#\">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    \t</div>
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
        return "fronte/our_car.html.twig";
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
        return array (  87 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'fronte/base.html.twig' %}

{% block title %}our car {% endblock %}
{% block body %} 

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

    <section class=\"ftco-section\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-1.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Audi</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-2.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Ford</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-3.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Cheverolet</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-4.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Mercedes</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>

    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-5.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Audi</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-6.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Ford</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-7.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Cheverolet</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-8.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Mercedes</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>

    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-9.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Audi</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-10.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Ford</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-11.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Cheverolet</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-3\">
    \t\t\t\t<div class=\"car-wrap ftco-animate\">
    \t\t\t\t\t<div class=\"img d-flex align-items-end\" style=\"background-image: url(/assets/images/car-12.jpg);\">
    \t\t\t\t\t\t<div class=\"price-wrap d-flex\">
    \t\t\t\t\t\t\t<span class=\"rate\">\$25</span>
    \t\t\t\t\t\t\t<p class=\"from-day\">
    \t\t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t\t<span>/Day</span>
    \t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"text p-4 text-center\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">Mercedes Grand Sedan</a></h2>
    \t\t\t\t\t\t<span>Mercedes</span>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"#\" class=\"btn btn-black btn-outline-black mr-1\">Book now</a> <a href=\"#\" class=\"btn btn-black btn-outline-black ml-1\">Details</a></p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t\t<div class=\"row mt-5\">
          <div class=\"col text-center\">
            <div class=\"block-27\">
              <ul>
                <li><a href=\"#\">&lt;</a></li>
                <li class=\"active\"><span>1</span></li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">4</a></li>
                <li><a href=\"#\">5</a></li>
                <li><a href=\"#\">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    \t</div>
    </section>
{% endblock %}
", "fronte/our_car.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\fronte\\our_car.html.twig");
    }
}
