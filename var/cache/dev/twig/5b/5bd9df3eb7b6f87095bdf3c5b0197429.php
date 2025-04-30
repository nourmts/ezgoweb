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

/* location/_form.html.twig */
class __TwigTemplate_5f085ee5c48a1a3f58723fd8f9fc184a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3 needs-validation", "id" => "location-form"]]);
        yield "
    <div class=\"col-md-6\">
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "dateDebut", [], "any", false, false, false, 3), 'label', ["label_attr" => ["class" => "form-label required"], "label" => "Date de début"]);
        yield "
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "dateDebut", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "dateDebut", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4))) ? (" is-invalid") : ("")))]]);
        yield "
        <div class=\"invalid-feedback\">
            ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "dateDebut", [], "any", false, false, false, 6), 'errors')), "html", null, true);
        yield "
        </div>
    </div>

    <div class=\"col-md-6\">
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "dateFin", [], "any", false, false, false, 11), 'label', ["label_attr" => ["class" => "form-label required"], "label" => "Date de fin"]);
        yield "
        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "dateFin", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "dateFin", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12))) ? (" is-invalid") : ("")))]]);
        yield "
        <div class=\"invalid-feedback\">
            ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "dateFin", [], "any", false, false, false, 14), 'errors')), "html", null, true);
        yield "
        </div>
    </div>

    <div class=\"col-md-12\">
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "partenaire", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label required"], "label" => "Partenaire"]);
        yield "
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "partenaire", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "partenaire", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "errors", [], "any", false, false, false, 22))) ? (" is-invalid") : (""))), "data-action" => "change->location#onPartenaireChange"]]);
        // line 25
        yield "
        <div class=\"invalid-feedback\">
            ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "partenaire", [], "any", false, false, false, 27), 'errors')), "html", null, true);
        yield "
        </div>
    </div>

    <div class=\"col-md-6\" id=\"service-container\">
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "service", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label required"], "label" => "Service"]);
        yield "
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "service", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "service", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "errors", [], "any", false, false, false, 33))) ? (" is-invalid") : ("")))]]);
        yield "
        <div class=\"invalid-feedback\">
            ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "service", [], "any", false, false, false, 35), 'errors')), "html", null, true);
        yield "
        </div>
    </div>

    <div class=\"col-md-6\" id=\"marque-container\">
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "marque", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label required"], "label" => "Marque"]);
        yield "
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "marque", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "marque", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41))) ? (" is-invalid") : ("")))]]);
        yield "
        <div class=\"invalid-feedback\">
            ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "marque", [], "any", false, false, false, 43), 'errors')), "html", null, true);
        yield "
        </div>
    </div>

    <div class=\"col-md-12\">
        <div class=\"form-group\">
            <label class=\"form-label\">Prix Total</label>
            <div class=\"price-display\">
                <span id=\"prix-total\">0.00</span> DT
            </div>
        </div>
    </div>

    <div class=\"col-12 mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 57, $this->source); })()), "Créer la Location")) : ("Créer la Location")), "html", null, true);
        yield "</button>
        <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_index");
        yield "\" class=\"btn btn-secondary\">Retour</a>
    </div>
";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        yield "

";
        // line 62
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 63
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('location-form');
    const partenaireSelect = form.querySelector('[name=\"location[partenaire]\"]');
    const serviceSelect = form.querySelector('[name=\"location[service]\"]');
    const marqueSelect = form.querySelector('[name=\"location[marque]\"]');
    const dateDebutInput = form.querySelector('[name=\"location[dateDebut]\"]');
    const dateFinInput = form.querySelector('[name=\"location[dateFin]\"]');
    const prixTotalDisplay = document.getElementById('prix-total');

    function reloadForm() {
        const formData = new FormData(form);
        const params = new URLSearchParams(formData);

        fetch(window.location.pathname + '?' + params.toString(), {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            
            // Mettre à jour les conteneurs de service et marque
            const newServiceContainer = doc.getElementById('service-container');
            const newMarqueContainer = doc.getElementById('marque-container');
            
            if (newServiceContainer) {
                document.getElementById('service-container').innerHTML = newServiceContainer.innerHTML;
            }
            if (newMarqueContainer) {
                document.getElementById('marque-container').innerHTML = newMarqueContainer.innerHTML;
            }

            // Recalculer le prix total
            calculatePrixTotal();
        });
    }

    function calculatePrixTotal() {
        const partenaireId = partenaireSelect.value;
        const dateDebut = dateDebutInput.value;
        const dateFin = dateFinInput.value;

        if (!partenaireId || !dateDebut || !dateFin) {
            prixTotalDisplay.textContent = '0.00';
            return;
        }

        fetch(`/api/partenaire/\${partenaireId}/tarif`)
            .then(response => response.json())
            .then(data => {
                const tarif = data.tarif;
                const debut = new Date(dateDebut);
                const fin = new Date(dateFin);
                const diffTime = Math.abs(fin - debut);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1;
                const prixTotal = (tarif * diffDays).toFixed(2);
                prixTotalDisplay.textContent = prixTotal;
            })
            .catch(error => {
                console.error('Erreur lors du calcul du prix:', error);
                prixTotalDisplay.textContent = '0.00';
            });
    }

    // Écouteurs d'événements
    partenaireSelect.addEventListener('change', function() {
        reloadForm();
    });

    dateDebutInput.addEventListener('change', calculatePrixTotal);
    dateFinInput.addEventListener('change', calculatePrixTotal);

    // Calculer le prix initial si les données sont présentes
    if (partenaireSelect.value && dateDebutInput.value && dateFinInput.value) {
        calculatePrixTotal();
    }
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
        return "location/_form.html.twig";
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
        return array (  187 => 63,  164 => 62,  159 => 60,  154 => 58,  150 => 57,  133 => 43,  128 => 41,  124 => 40,  116 => 35,  111 => 33,  107 => 32,  99 => 27,  95 => 25,  93 => 22,  92 => 20,  88 => 19,  80 => 14,  75 => 12,  71 => 11,  63 => 6,  58 => 4,  54 => 3,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'row g-3 needs-validation', 'id': 'location-form'}}) }}
    <div class=\"col-md-6\">
        {{ form_label(form.dateDebut, 'Date de début', {'label_attr': {'class': 'form-label required'}}) }}
        {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control' ~ (form.dateDebut.vars.errors|length ? ' is-invalid' : '')}}) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.dateDebut)|striptags }}
        </div>
    </div>

    <div class=\"col-md-6\">
        {{ form_label(form.dateFin, 'Date de fin', {'label_attr': {'class': 'form-label required'}}) }}
        {{ form_widget(form.dateFin, {'attr': {'class': 'form-control' ~ (form.dateFin.vars.errors|length ? ' is-invalid' : '')}}) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.dateFin)|striptags }}
        </div>
    </div>

    <div class=\"col-md-12\">
        {{ form_label(form.partenaire, 'Partenaire', {'label_attr': {'class': 'form-label required'}}) }}
        {{ form_widget(form.partenaire, {
            'attr': {
                'class': 'form-control' ~ (form.partenaire.vars.errors|length ? ' is-invalid' : ''),
                'data-action': 'change->location#onPartenaireChange'
            }
        }) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.partenaire)|striptags }}
        </div>
    </div>

    <div class=\"col-md-6\" id=\"service-container\">
        {{ form_label(form.service, 'Service', {'label_attr': {'class': 'form-label required'}}) }}
        {{ form_widget(form.service, {'attr': {'class': 'form-control' ~ (form.service.vars.errors|length ? ' is-invalid' : '')}}) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.service)|striptags }}
        </div>
    </div>

    <div class=\"col-md-6\" id=\"marque-container\">
        {{ form_label(form.marque, 'Marque', {'label_attr': {'class': 'form-label required'}}) }}
        {{ form_widget(form.marque, {'attr': {'class': 'form-control' ~ (form.marque.vars.errors|length ? ' is-invalid' : '')}}) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.marque)|striptags }}
        </div>
    </div>

    <div class=\"col-md-12\">
        <div class=\"form-group\">
            <label class=\"form-label\">Prix Total</label>
            <div class=\"price-display\">
                <span id=\"prix-total\">0.00</span> DT
            </div>
        </div>
    </div>

    <div class=\"col-12 mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Créer la Location') }}</button>
        <a href=\"{{ path('app_location_index') }}\" class=\"btn btn-secondary\">Retour</a>
    </div>
{{ form_end(form) }}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('location-form');
    const partenaireSelect = form.querySelector('[name=\"location[partenaire]\"]');
    const serviceSelect = form.querySelector('[name=\"location[service]\"]');
    const marqueSelect = form.querySelector('[name=\"location[marque]\"]');
    const dateDebutInput = form.querySelector('[name=\"location[dateDebut]\"]');
    const dateFinInput = form.querySelector('[name=\"location[dateFin]\"]');
    const prixTotalDisplay = document.getElementById('prix-total');

    function reloadForm() {
        const formData = new FormData(form);
        const params = new URLSearchParams(formData);

        fetch(window.location.pathname + '?' + params.toString(), {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            
            // Mettre à jour les conteneurs de service et marque
            const newServiceContainer = doc.getElementById('service-container');
            const newMarqueContainer = doc.getElementById('marque-container');
            
            if (newServiceContainer) {
                document.getElementById('service-container').innerHTML = newServiceContainer.innerHTML;
            }
            if (newMarqueContainer) {
                document.getElementById('marque-container').innerHTML = newMarqueContainer.innerHTML;
            }

            // Recalculer le prix total
            calculatePrixTotal();
        });
    }

    function calculatePrixTotal() {
        const partenaireId = partenaireSelect.value;
        const dateDebut = dateDebutInput.value;
        const dateFin = dateFinInput.value;

        if (!partenaireId || !dateDebut || !dateFin) {
            prixTotalDisplay.textContent = '0.00';
            return;
        }

        fetch(`/api/partenaire/\${partenaireId}/tarif`)
            .then(response => response.json())
            .then(data => {
                const tarif = data.tarif;
                const debut = new Date(dateDebut);
                const fin = new Date(dateFin);
                const diffTime = Math.abs(fin - debut);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1;
                const prixTotal = (tarif * diffDays).toFixed(2);
                prixTotalDisplay.textContent = prixTotal;
            })
            .catch(error => {
                console.error('Erreur lors du calcul du prix:', error);
                prixTotalDisplay.textContent = '0.00';
            });
    }

    // Écouteurs d'événements
    partenaireSelect.addEventListener('change', function() {
        reloadForm();
    });

    dateDebutInput.addEventListener('change', calculatePrixTotal);
    dateFinInput.addEventListener('change', calculatePrixTotal);

    // Calculer le prix initial si les données sont présentes
    if (partenaireSelect.value && dateDebutInput.value && dateFinInput.value) {
        calculatePrixTotal();
    }
});
</script>
{% endblock %}", "location/_form.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\templates\\location\\_form.html.twig");
    }
}
