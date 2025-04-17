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

/* home/blog.html.twig */
class __TwigTemplate_3f95c699100369f2b7bac585d8843083 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blog.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "home/blog.html.twig", 1);
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

        yield "blog ";
        
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
          \t<p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Blog <i class=\"ion-ios-arrow-forward\"></i></span></p>
            <h1 class=\"mb-3 bread\">Read our blog</h1>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section\">
      <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_1.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_2.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_3.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_4.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_5.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_6.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row mt-5\">
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
        return "home/blog.html.twig";
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

{% block title %}blog {% endblock %}
{% block body %} 

 <section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/assets/images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-start\">
          <div class=\"col-md-9 ftco-animate pb-5\">
          \t<p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Blog <i class=\"ion-ios-arrow-forward\"></i></span></p>
            <h1 class=\"mb-3 bread\">Read our blog</h1>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section\">
      <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_1.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_2.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_3.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_4.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_5.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-10 text-center d-flex ftco-animate\">
          \t<div class=\"blog-entry\">
              <a href=\"blog-single.html\" class=\"block-20 img\" style=\"background-image: url('/assets/images/image_6.jpg');\">
              </a>
              <div class=\"text pt-4\">
              \t<div class=\"meta mb-3\">
                  <div><a href=\"#\">July. 24, 2019</a></div>
                  <div><a href=\"#\">Admin</a></div>
                  <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                </div>
                <h3 class=\"heading mt-2\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href=\"blog-single.html\" class=\"btn-custom\">Continue <span class=\"icon-long-arrow-right\"></span></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row mt-5\">
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
      </div>
    </section>

{% endblock %}", "home/blog.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\piWeb\\templates\\home\\blog.html.twig");
    }
}
