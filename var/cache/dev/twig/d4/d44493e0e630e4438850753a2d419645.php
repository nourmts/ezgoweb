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

/* home/about.html.twig */
class __TwigTemplate_555414f14ff79dad5d573e03350e6e60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "home/about.html.twig", 1);
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

        yield "about ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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
            <h1 class=\"mb-3 bread\">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section services-section\">
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
\t              \t<div class=\"icon\"><span class=\"flaticon-placeholder\"></span></div>
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
\t              \t<div class=\"icon\"><span class=\"flaticon-placeholder\"></span></div>
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
\t              \t<div class=\"icon\"><span class=\"flaticon-placeholder\"></span></div>
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
\t              \t<div class=\"icon\"><span class=\"flaticon-placeholder\"></span></div>
\t                <h3 class=\"heading mb-0 pl-3\">Rental Cars</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section services-section img\" style=\"background-image: url(images/bg_2.jpg);\">
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
                  <div class=\"user-img mb-4\" style=\"background-image: url(images/person_1.jpg)\">
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
                  <div class=\"user-img mb-4\" style=\"background-image: url(images/person_2.jpg)\">
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
                  <div class=\"user-img mb-4\" style=\"background-image: url(images/person_3.jpg)\">
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
                  <div class=\"user-img mb-4\" style=\"background-image: url(images/person_1.jpg)\">
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
                  <div class=\"user-img mb-4\" style=\"background-image: url(images/person_1.jpg)\">
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
\t\t\t\t\t<div class=\"col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(images/about.jpg);\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 wrap-about py-md-5 ftco-animate\">
\t          <div class=\"heading-section mb-5 pl-md-5\">
\t          \t<span class=\"subheading\">About us</span>
\t            <h2 class=\"mb-4\">Choose A Perfect Car</h2>

\t            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
\t            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
\t            <p><a href=\"#\" class=\"btn btn-primary\">Search Vehicle</a></p>
\t          </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
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
        return "home/about.html.twig";
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
        return array (  87 => 8,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'home/base.html.twig' %}

{% block title %}about {% endblock %}




{% block body %} 
<section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/assets/images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-start\">
          <div class=\"col-md-9 ftco-animate pb-5\">
          \t<p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>About us <i class=\"ion-ios-arrow-forward\"></i></span></p>
            <h1 class=\"mb-3 bread\">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section services-section\">
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
\t              \t<div class=\"icon\"><span class=\"flaticon-placeholder\"></span></div>
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
\t              \t<div class=\"icon\"><span class=\"flaticon-placeholder\"></span></div>
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
\t              \t<div class=\"icon\"><span class=\"flaticon-placeholder\"></span></div>
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
\t              \t<div class=\"icon\"><span class=\"flaticon-placeholder\"></span></div>
\t                <h3 class=\"heading mb-0 pl-3\">Rental Cars</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section services-section img\" style=\"background-image: url(images/bg_2.jpg);\">
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
                  <div class=\"user-img mb-4\" style=\"background-image: url(images/person_1.jpg)\">
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
                  <div class=\"user-img mb-4\" style=\"background-image: url(images/person_2.jpg)\">
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
                  <div class=\"user-img mb-4\" style=\"background-image: url(images/person_3.jpg)\">
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
                  <div class=\"user-img mb-4\" style=\"background-image: url(images/person_1.jpg)\">
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
                  <div class=\"user-img mb-4\" style=\"background-image: url(images/person_1.jpg)\">
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
\t\t\t\t\t<div class=\"col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(images/about.jpg);\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 wrap-about py-md-5 ftco-animate\">
\t          <div class=\"heading-section mb-5 pl-md-5\">
\t          \t<span class=\"subheading\">About us</span>
\t            <h2 class=\"mb-4\">Choose A Perfect Car</h2>

\t            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
\t            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
\t            <p><a href=\"#\" class=\"btn btn-primary\">Search Vehicle</a></p>
\t          </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


{% endblock %}", "home/about.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\piWeb\\templates\\home\\about.html.twig");
    }
}
