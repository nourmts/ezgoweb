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

/* asset_test/index.html.twig */
class __TwigTemplate_789889c45127bc347deba9a76b4e8662 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "asset_test/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "asset_test/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Asset Test</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_back/assets/css/soft-ui-dashboard.css", "app"), "html", null, true);
        yield "\">
    <style>
        .test-box {
            width: 200px;
            height: 200px;
            background-color: #5e72e4;
            margin: 50px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1 style=\"text-align: center;\">Asset Test Page</h1>
    <div class=\"test-box\">If this box is blue, CSS is working!</div>
    
    <script src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_back/assets/js/core/popper.min.js", "app"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_back/assets/js/core/bootstrap.min.js", "app"), "html", null, true);
        yield "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('JS is working!');
            alert('If you see this alert, JavaScript is working!');
        });
    </script>
</body>
</html> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "asset_test/index.html.twig";
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
        return array (  82 => 27,  78 => 26,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Asset Test</title>
    <link rel=\"stylesheet\" href=\"{{ asset('template_back/assets/css/soft-ui-dashboard.css', 'app') }}\">
    <style>
        .test-box {
            width: 200px;
            height: 200px;
            background-color: #5e72e4;
            margin: 50px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1 style=\"text-align: center;\">Asset Test Page</h1>
    <div class=\"test-box\">If this box is blue, CSS is working!</div>
    
    <script src=\"{{ asset('template_back/assets/js/core/popper.min.js', 'app') }}\"></script>
    <script src=\"{{ asset('template_back/assets/js/core/bootstrap.min.js', 'app') }}\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('JS is working!');
            alert('If you see this alert, JavaScript is working!');
        });
    </script>
</body>
</html> ", "asset_test/index.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\asset_test\\index.html.twig");
    }
}
