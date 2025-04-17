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

/* home/pricing.html.twig */
class __TwigTemplate_868d9f03ec29a2816c05059813ea6b39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/pricing.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "home/pricing.html.twig", 1);
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

        yield "pricing ";
        
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
          \t<p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Pricing <i class=\"ion-ios-arrow-forward\"></i></span></p>
            <h1 class=\"mb-3 bread\">Car Rates Pricing</h1>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section ftco-cart\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-12 ftco-animate\">
    \t\t\t\t<div class=\"car-list\">
\t    \t\t\t\t<table class=\"table\">
\t\t\t\t\t\t    <thead class=\"thead-primary\">
\t\t\t\t\t\t      <tr class=\"text-center\">
\t\t\t\t\t\t        <th>&nbsp;</th>
\t\t\t\t\t\t        <th>&nbsp;</th>
\t\t\t\t\t\t        <th class=\"bg-primary heading\">Per Hour Rate</th>
\t\t\t\t\t\t        <th class=\"bg-dark heading\">Per Day Rate</th>
\t\t\t\t\t\t        <th class=\"bg-black heading\">Leasing</th>
\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t    </thead>
\t\t\t\t\t\t    <tbody>
\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-1.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->

\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-2.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->

\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-3.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->

\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-4.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->


\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-5.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->


\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-6.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->
\t\t\t\t\t\t    </tbody>
\t\t\t\t\t\t  </table>
\t\t\t\t\t  </div>
    \t\t\t</div>
    \t\t</div>
\t\t\t</div>


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
        return "home/pricing.html.twig";
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
        return new Source("{% extends 'home/base.html.twig' %}

{% block title %}pricing {% endblock %}
{% block body %} 
<section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/assets/images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-start\">
          <div class=\"col-md-9 ftco-animate pb-5\">
          \t<p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Pricing <i class=\"ion-ios-arrow-forward\"></i></span></p>
            <h1 class=\"mb-3 bread\">Car Rates Pricing</h1>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section ftco-cart\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-12 ftco-animate\">
    \t\t\t\t<div class=\"car-list\">
\t    \t\t\t\t<table class=\"table\">
\t\t\t\t\t\t    <thead class=\"thead-primary\">
\t\t\t\t\t\t      <tr class=\"text-center\">
\t\t\t\t\t\t        <th>&nbsp;</th>
\t\t\t\t\t\t        <th>&nbsp;</th>
\t\t\t\t\t\t        <th class=\"bg-primary heading\">Per Hour Rate</th>
\t\t\t\t\t\t        <th class=\"bg-dark heading\">Per Day Rate</th>
\t\t\t\t\t\t        <th class=\"bg-black heading\">Leasing</th>
\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t    </thead>
\t\t\t\t\t\t    <tbody>
\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-1.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->

\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-2.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->

\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-3.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->

\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-4.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->


\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-5.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->


\t\t\t\t\t\t      <tr class=\"\">
\t\t\t\t\t\t      \t<td class=\"car-image\"><div class=\"img\" style=\"background-image:url(images/car-6.jpg);\"></div></td>
\t\t\t\t\t\t        <td class=\"product-name\">
\t\t\t\t\t\t        \t<h3>Cheverolet SUV Car</h3>
\t\t\t\t\t\t        \t<p class=\"mb-0 rated\">
\t\t\t\t\t\t        \t\t<span>rated:</span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t\t<span class=\"ion-ios-star\"></span>
\t\t\t\t\t\t        \t</p>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 10.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per hour</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t        
\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 60.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per day</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>

\t\t\t\t\t\t        <td class=\"price\">
\t\t\t\t\t\t        \t<p class=\"btn-custom\"><a href=\"#\">Rent a car</a></p>
\t\t\t\t\t\t        \t<div class=\"price-rate\">
\t\t\t\t\t\t\t        \t<h3>
\t\t\t\t\t\t\t        \t\t<span class=\"num\"><small class=\"currency\">\$</small> 995.99</span>
\t\t\t\t\t\t\t        \t\t<span class=\"per\">/per month</span>
\t\t\t\t\t\t\t        \t</h3>
\t\t\t\t\t\t\t        \t<span class=\"subheading\">\$3/hour fuel surcharges</span>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        </td>
\t\t\t\t\t\t      </tr><!-- END TR-->
\t\t\t\t\t\t    </tbody>
\t\t\t\t\t\t  </table>
\t\t\t\t\t  </div>
    \t\t\t</div>
    \t\t</div>
\t\t\t</div>


{% endblock %}", "home/pricing.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\piWeb\\templates\\home\\pricing.html.twig");
    }
}
