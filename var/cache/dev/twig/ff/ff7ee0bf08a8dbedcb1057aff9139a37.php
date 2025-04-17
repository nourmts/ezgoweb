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

/* home/contact.html.twig */
class __TwigTemplate_1b159869cd1677f4947c92180ea11343 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "home/contact.html.twig", 1);
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

        yield "contact ";
        
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
          \t<p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Contact <i class=\"ion-ios-arrow-forward\"></i></span></p>
            <h1 class=\"mb-3 bread\">Contact us</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Ticket Purchase Section -->
    <section class=\"ftco-section\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-5\">
                <div class=\"col-md-7 text-center heading-section ftco-animate\">
                    <h2>Acheter un Ticket</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <form id=\"ticketForm\" class=\"p-5 bg-light\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"station\">Choisir une Station</label>
                                    <select class=\"form-control\" id=\"station\" required>
                                        <option value=\"\">Sélectionnez une station</option>
                                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
            // line 36
            yield "                                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "idS", [], "any", false, false, false, 36), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "nom", [], "any", false, false, false, 36), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "region", [], "any", false, false, false, 36), "html", null, true);
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['station'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                                    </select>
                                </div>
                            </form>

                            <div id=\"busList\" class=\"row mt-4\" style=\"display: none;\">
                                <!-- Buses will be displayed here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bus Modal -->
    <div class=\"modal fade\" id=\"busModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"busModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"busModalLabel\">Détails du Bus</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"text-center mb-3\">
                                <img id=\"modalBusImage\" src=\"\" alt=\"Bus Image\" class=\"img-fluid rounded\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"bus-details\">
                                <h4 class=\"mb-4\">Informations du Bus</h4>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Numéro du Bus</h6>
                                    <p class=\"mb-0\" id=\"modalBusNumber\"></p>
                                </div>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Nombre de places</h6>
                                    <p class=\"mb-0\" id=\"modalNbPlaces\"></p>
                                </div>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Date d'arrivée</h6>
                                    <p class=\"mb-0\" id=\"modalDateArrive\"></p>
                                </div>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Date de sortie</h6>
                                    <p class=\"mb-0\" id=\"modalDateSortie\"></p>
                                </div>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Catégorie</h6>
                                    <p class=\"mb-0 text-capitalize\" id=\"modalCategorie\"></p>
                                </div>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Prix du ticket</h6>
                                    <p class=\"mb-0 fw-bold\" id=\"modalPrix\"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"purchaseTicket\">
                        <i class=\"fas fa-ticket-alt me-2\"></i>Acheter le Ticket
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stationSelect = document.getElementById('station');
            const busList = document.getElementById('busList');
            let selectedBusId = null;

            // Store buses data
            const buses = ";
        // line 117
        yield json_encode((isset($context["buses"]) || array_key_exists("buses", $context) ? $context["buses"] : (function () { throw new RuntimeError('Variable "buses" does not exist.', 117, $this->source); })()));
        yield ";
            console.log('Tous les bus:', buses); // Debug log pour voir la structure complète des données

            stationSelect.addEventListener('change', function() {
                const selectedStationId = this.value;
                busList.innerHTML = '';
                busList.style.display = 'none';

                if (selectedStationId) {
                    // Filter buses for the selected station
                    const stationBuses = buses.filter(bus => bus.idStation == selectedStationId);
                    console.log('Bus de la station:', stationBuses); // Debug log
                    
                    if (stationBuses.length > 0) {
                        stationBuses.forEach(bus => {
                            console.log('Bus en cours:', bus); // Debug log pour voir chaque bus
                            const busCard = document.createElement('div');
                            busCard.className = 'col-md-4 mb-4';
                            busCard.innerHTML = `
                                <div class=\"card h-100 shadow-sm\">
                                    <div class=\"position-relative\">
                                        <img src=\"/assets/images/bus\${bus.imatriculation % 3 + 1}.jpg\" class=\"card-img-top\" alt=\"Bus \${bus.imatriculation}\" style=\"height: 200px; object-fit: cover;\">
                                        <div class=\"position-absolute top-0 end-0 m-2\">
                                            <span class=\"badge bg-primary\">\${bus.nbPlace} places</span>
                                        </div>
                                    </div>
                                    <div class=\"card-body d-flex flex-column\">
                                        <h5 class=\"card-title\">Bus \${bus.imatriculation}</h5>
                                        <p class=\"text-muted mb-2\">Catégorie: \${bus.categorie}</p>
                                        <div class=\"mt-auto\">
                                            <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                                <span class=\"text-muted\">Prix:</span>
                                                <span class=\"fw-bold\">\${bus.categorie === 'confort' ? '30 TND' : '20 TND'}</span>
                                            </div>
                                            <button class=\"btn btn-primary w-100 view-bus\" data-bus-id=\"\${bus.imatriculation}\">
                                                <i class=\"fas fa-eye me-2\"></i>Voir détails et acheter
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            `;
                            busList.appendChild(busCard);
                        });
                        busList.style.display = 'flex';
                    } else {
                        busList.innerHTML = `
                            <div class=\"col-12 text-center\">
                                <div class=\"alert alert-info\">
                                    Aucun bus disponible pour cette station.
                                </div>
                            </div>
                        `;
                        busList.style.display = 'block';
                    }
                }
            });

            // Handle bus card click
            busList.addEventListener('click', function(e) {
                const viewBusButton = e.target.closest('.view-bus');
                if (viewBusButton) {
                    const busId = viewBusButton.dataset.busId;
                    const bus = buses.find(b => b.imatriculation == busId);
                    if (bus) {
                        selectedBusId = busId;
                        console.log('Bus sélectionné pour modal:', bus); // Debug log
                        
                        // Update modal content with bus details
                        const modal = document.getElementById('busModal');
                        const modalImage = modal.querySelector('#modalBusImage');
                        const modalNumber = modal.querySelector('#modalBusNumber');
                        const modalPlaces = modal.querySelector('#modalNbPlaces');
                        const modalArrive = modal.querySelector('#modalDateArrive');
                        const modalSortie = modal.querySelector('#modalDateSortie');
                        const modalCategorie = modal.querySelector('#modalCategorie');
                        const modalPrix = modal.querySelector('#modalPrix');

                        // Set bus image
                        modalImage.src = `/assets/images/bus\${bus.imatriculation % 3 + 1}.jpg`;
                        modalImage.alt = `Bus \${bus.imatriculation}`;

                        // Set bus details
                        modalNumber.textContent = `Bus \${bus.imatriculation}`;
                        modalPlaces.textContent = `\${bus.nbPlace} places`;
                        
                        // Set category and price
                        console.log('Catégorie du bus:', bus.categorie); // Debug log
                        modalCategorie.textContent = bus.categorie || 'Non spécifiée';
                        const prixTicket = bus.categorie === 'confort' ? '30 TND' : '20 TND';
                        console.log('Prix calculé:', prixTicket); // Debug log
                        modalPrix.textContent = prixTicket;
                        
                        // Format dates in French
                        const dateArrive = new Date(bus.dateArrive);
                        const dateSortie = new Date(bus.dateSortie);
                        
                        modalArrive.textContent = dateArrive.toLocaleDateString('fr-FR', {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit'
                        });
                        
                        modalSortie.textContent = dateSortie.toLocaleDateString('fr-FR', {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit'
                        });

                        // Show the modal using Bootstrap's modal method
                        const modalInstance = new bootstrap.Modal(modal);
                        modalInstance.show();
                    }
                }
            });

            // Handle ticket purchase
            document.getElementById('purchaseTicket').addEventListener('click', function() {
                if (selectedBusId) {
                    fetch(`/pi/purchase-ticket/\${selectedBusId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Ticket acheté avec succès!');
                            const modal = document.getElementById('busModal');
                            const modalInstance = bootstrap.Modal.getInstance(modal);
                            modalInstance.hide();
                            stationSelect.value = '';
                            busList.style.display = 'none';
                        } else {
                            alert('Erreur lors de l\\'achat du ticket: ' + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Une erreur est survenue lors de l\\'achat du ticket.');
                    });
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
        return "home/contact.html.twig";
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
        return array (  230 => 117,  149 => 38,  136 => 36,  132 => 35,  87 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'home/base.html.twig' %}

{% block title %}contact {% endblock %}
{% block body %} 

<section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/assets/images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-start\">
          <div class=\"col-md-9 ftco-animate pb-5\">
          \t<p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Contact <i class=\"ion-ios-arrow-forward\"></i></span></p>
            <h1 class=\"mb-3 bread\">Contact us</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Ticket Purchase Section -->
    <section class=\"ftco-section\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-5\">
                <div class=\"col-md-7 text-center heading-section ftco-animate\">
                    <h2>Acheter un Ticket</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <form id=\"ticketForm\" class=\"p-5 bg-light\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"station\">Choisir une Station</label>
                                    <select class=\"form-control\" id=\"station\" required>
                                        <option value=\"\">Sélectionnez une station</option>
                                        {% for station in stations %}
                                            <option value=\"{{ station.idS }}\">{{ station.nom }} - {{ station.region }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </form>

                            <div id=\"busList\" class=\"row mt-4\" style=\"display: none;\">
                                <!-- Buses will be displayed here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bus Modal -->
    <div class=\"modal fade\" id=\"busModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"busModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"busModalLabel\">Détails du Bus</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"text-center mb-3\">
                                <img id=\"modalBusImage\" src=\"\" alt=\"Bus Image\" class=\"img-fluid rounded\" style=\"max-height: 300px; width: 100%; object-fit: cover;\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"bus-details\">
                                <h4 class=\"mb-4\">Informations du Bus</h4>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Numéro du Bus</h6>
                                    <p class=\"mb-0\" id=\"modalBusNumber\"></p>
                                </div>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Nombre de places</h6>
                                    <p class=\"mb-0\" id=\"modalNbPlaces\"></p>
                                </div>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Date d'arrivée</h6>
                                    <p class=\"mb-0\" id=\"modalDateArrive\"></p>
                                </div>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Date de sortie</h6>
                                    <p class=\"mb-0\" id=\"modalDateSortie\"></p>
                                </div>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Catégorie</h6>
                                    <p class=\"mb-0 text-capitalize\" id=\"modalCategorie\"></p>
                                </div>
                                <div class=\"detail-item mb-3\">
                                    <h6 class=\"text-muted\">Prix du ticket</h6>
                                    <p class=\"mb-0 fw-bold\" id=\"modalPrix\"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"purchaseTicket\">
                        <i class=\"fas fa-ticket-alt me-2\"></i>Acheter le Ticket
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stationSelect = document.getElementById('station');
            const busList = document.getElementById('busList');
            let selectedBusId = null;

            // Store buses data
            const buses = {{ buses|json_encode|raw }};
            console.log('Tous les bus:', buses); // Debug log pour voir la structure complète des données

            stationSelect.addEventListener('change', function() {
                const selectedStationId = this.value;
                busList.innerHTML = '';
                busList.style.display = 'none';

                if (selectedStationId) {
                    // Filter buses for the selected station
                    const stationBuses = buses.filter(bus => bus.idStation == selectedStationId);
                    console.log('Bus de la station:', stationBuses); // Debug log
                    
                    if (stationBuses.length > 0) {
                        stationBuses.forEach(bus => {
                            console.log('Bus en cours:', bus); // Debug log pour voir chaque bus
                            const busCard = document.createElement('div');
                            busCard.className = 'col-md-4 mb-4';
                            busCard.innerHTML = `
                                <div class=\"card h-100 shadow-sm\">
                                    <div class=\"position-relative\">
                                        <img src=\"/assets/images/bus\${bus.imatriculation % 3 + 1}.jpg\" class=\"card-img-top\" alt=\"Bus \${bus.imatriculation}\" style=\"height: 200px; object-fit: cover;\">
                                        <div class=\"position-absolute top-0 end-0 m-2\">
                                            <span class=\"badge bg-primary\">\${bus.nbPlace} places</span>
                                        </div>
                                    </div>
                                    <div class=\"card-body d-flex flex-column\">
                                        <h5 class=\"card-title\">Bus \${bus.imatriculation}</h5>
                                        <p class=\"text-muted mb-2\">Catégorie: \${bus.categorie}</p>
                                        <div class=\"mt-auto\">
                                            <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                                <span class=\"text-muted\">Prix:</span>
                                                <span class=\"fw-bold\">\${bus.categorie === 'confort' ? '30 TND' : '20 TND'}</span>
                                            </div>
                                            <button class=\"btn btn-primary w-100 view-bus\" data-bus-id=\"\${bus.imatriculation}\">
                                                <i class=\"fas fa-eye me-2\"></i>Voir détails et acheter
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            `;
                            busList.appendChild(busCard);
                        });
                        busList.style.display = 'flex';
                    } else {
                        busList.innerHTML = `
                            <div class=\"col-12 text-center\">
                                <div class=\"alert alert-info\">
                                    Aucun bus disponible pour cette station.
                                </div>
                            </div>
                        `;
                        busList.style.display = 'block';
                    }
                }
            });

            // Handle bus card click
            busList.addEventListener('click', function(e) {
                const viewBusButton = e.target.closest('.view-bus');
                if (viewBusButton) {
                    const busId = viewBusButton.dataset.busId;
                    const bus = buses.find(b => b.imatriculation == busId);
                    if (bus) {
                        selectedBusId = busId;
                        console.log('Bus sélectionné pour modal:', bus); // Debug log
                        
                        // Update modal content with bus details
                        const modal = document.getElementById('busModal');
                        const modalImage = modal.querySelector('#modalBusImage');
                        const modalNumber = modal.querySelector('#modalBusNumber');
                        const modalPlaces = modal.querySelector('#modalNbPlaces');
                        const modalArrive = modal.querySelector('#modalDateArrive');
                        const modalSortie = modal.querySelector('#modalDateSortie');
                        const modalCategorie = modal.querySelector('#modalCategorie');
                        const modalPrix = modal.querySelector('#modalPrix');

                        // Set bus image
                        modalImage.src = `/assets/images/bus\${bus.imatriculation % 3 + 1}.jpg`;
                        modalImage.alt = `Bus \${bus.imatriculation}`;

                        // Set bus details
                        modalNumber.textContent = `Bus \${bus.imatriculation}`;
                        modalPlaces.textContent = `\${bus.nbPlace} places`;
                        
                        // Set category and price
                        console.log('Catégorie du bus:', bus.categorie); // Debug log
                        modalCategorie.textContent = bus.categorie || 'Non spécifiée';
                        const prixTicket = bus.categorie === 'confort' ? '30 TND' : '20 TND';
                        console.log('Prix calculé:', prixTicket); // Debug log
                        modalPrix.textContent = prixTicket;
                        
                        // Format dates in French
                        const dateArrive = new Date(bus.dateArrive);
                        const dateSortie = new Date(bus.dateSortie);
                        
                        modalArrive.textContent = dateArrive.toLocaleDateString('fr-FR', {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit'
                        });
                        
                        modalSortie.textContent = dateSortie.toLocaleDateString('fr-FR', {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit'
                        });

                        // Show the modal using Bootstrap's modal method
                        const modalInstance = new bootstrap.Modal(modal);
                        modalInstance.show();
                    }
                }
            });

            // Handle ticket purchase
            document.getElementById('purchaseTicket').addEventListener('click', function() {
                if (selectedBusId) {
                    fetch(`/pi/purchase-ticket/\${selectedBusId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Ticket acheté avec succès!');
                            const modal = document.getElementById('busModal');
                            const modalInstance = bootstrap.Modal.getInstance(modal);
                            modalInstance.hide();
                            stationSelect.value = '';
                            busList.style.display = 'none';
                        } else {
                            alert('Erreur lors de l\\'achat du ticket: ' + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Une erreur est survenue lors de l\\'achat du ticket.');
                    });
                }
            });
        });
    </script>
{% endblock %}", "home/contact.html.twig", "C:\\Users\\Msi\\Desktop\\piWeb\\piWeb\\templates\\home\\contact.html.twig");
    }
}
