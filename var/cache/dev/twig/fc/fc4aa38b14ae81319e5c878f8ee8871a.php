<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* event.html.twig */
class __TwigTemplate_acdc0e518bb3a8395a0e890a00c687cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Events - Mentor Bootstrap Template</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"front-office/assets/img/favicon.png\" rel=\"icon\">
  <link href=\"front-office/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"front-office/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"front-office/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"front-office/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"front-office/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"front-office/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"front-office/assets/css/main.css\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Mar 19 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"front-office/assets/img/logo.png\" alt=\"\"> -->
        <h1 class=\"\">STUDENTORS</h1>
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"index.html\" class=\"\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"courses.html\">Courses</a></li>
          <li><a href=\"trainers.html\">Trainers</a></li>
          <li><a href=\"events.html\" class=\"active\">Events</a></li>
          <li><a href=\"pricing.html\">Pricing</a></li>
          <li class=\"dropdown has-dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Dropdown 1</a></li>
              <li class=\"dropdown has-dropdown\"><a href=\"#\"><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Dropdown 1</a></li>
                  <li><a href=\"#\">Deep Dropdown 2</a></li>
                  <li><a href=\"#\">Deep Dropdown 3</a></li>
                  <li><a href=\"#\">Deep Dropdown 4</a></li>
                  <li><a href=\"#\">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Dropdown 2</a></li>
              <li><a href=\"#\">Dropdown 3</a></li>
              <li><a href=\"#\">Dropdown 4</a></li>
            </ul>
          </li>
          <li class=\"megamenu has-dropdown\"><a href=\"#\"><span>Mega Menu</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li>
                <a href=\"#\">Column 1 link 1</a>
                <a href=\"#\">Column 1 link 2</a>
                <a href=\"#\">Column 1 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 2 link 1</a>
                <a href=\"#\">Column 2 link 2</a>
                <a href=\"#\">Column 3 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 3 link 1</a>
                <a href=\"#\">Column 3 link 2</a>
                <a href=\"#\">Column 3 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 4 link 1</a>
                <a href=\"#\">Column 4 link 2</a>
                <a href=\"#\">Column 4 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 5 link 1</a>
                <a href=\"#\">Column 5 link 2</a>
                <a href=\"#\">Column 5 link 3</a>
              </li>
            </ul>
          </li>
          <li><a href=\"contact.html\">Contact</a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <a class=\"btn-getstarted\" href=\"courses.html\">Get Started</a>

    </div>
  </header>

  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title\" data-aos=\"fade\">
      <div class=\"heading\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center text-center\">
            <div class=\"col-lg-8\">
              <h1>Events</h1>
              <p class=\"mb-0\">Bien sûr, voici un slogan accrocheur pour promouvoir votre événement en ligne :

\"Rejoignez la révolution de l'apprentissage en ligne : Explorez, Apprenez, Connectez-vous !\".</p>
            </div>
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\">
        <div class=\"container\">
          <ol>
            <li><a href=\"index.html\">Home</a></li>
            <li class=\"current\">Events</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Events Section -->
  ";
        // line 142
        echo "
";
        // line 144
        echo "






<div style=\"margin-bottom: 20px; display: flex; align-items: center;\">
    <label for=\"sortOrderSelect\" style=\"margin-right: 10px;\">Trier par :</label>
    <select id=\"sortOrderSelect\" style=\"width: 50%; padding: 5px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; outline: none; transition: border-color 0.3s ease; background-color: #f8f9fa; color: #495057;\">
        <option value=\"\" style=\"color: #495057;\">Choisir...</option>
        <option value=\"priceAsc\" style=\"color: #495057;\">Prix croissant</option>
        <option value=\"priceDesc\" style=\"color: #495057;\">Prix décroissant</option>
        <option value=\"dateAsc\" style=\"color: #495057;\">Date croissante</option>
        <option value=\"dateDesc\" style=\"color: #495057;\">Date décroissante</option>
    </select>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sortOrderSelect = document.getElementById('sortOrderSelect');
        const eventContainer = document.querySelector('.events .container .row');
        function sortEvents() {
            const selectedValue = sortOrderSelect.value;

            if (selectedValue !== \"\") {
                const eventCards = Array.from(document.querySelectorAll('.event-card'));

                eventCards.sort((cardA, cardB) => {
                    const valueA = getValue(cardA);
                    const valueB = getValue(cardB);

                    if (selectedValue.includes('Asc')) {
                        return valueA - valueB;
                    } else {
                        return valueB - valueA;
                    }
                });

                eventContainer.innerHTML = ''; // Vider les événements existants

                eventCards.forEach(card => {
                    eventContainer.appendChild(card);
                });
            }
        }

        function getValue(card) {
            if (sortOrderSelect.value.includes('price')) {
                return parseFloat(card.querySelector('.card-text:last-child').textContent);
            } else {
                return new Date(card.querySelector('.text-center').textContent);
            }
        }

        sortOrderSelect.addEventListener('change', sortEvents);

        // Si une option est déjà sélectionnée, trier les événements
        if (sortOrderSelect.value !== \"\") {
            sortEvents();
        }
    });
</script>

<section id=\"events\" class=\"events section\" style=\"margin-top: 10px;\">
    <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"row\">
            ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 211, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 212
            echo "                <div class=\"col-md-6 d-flex align-items-stretch event-card\">
                    <div class=\"card\">
                        <!-- Card image -->
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"card-img-top\" src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["event"], "getCheminImage", [], "method", false, false, false, 216))), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                        <!-- Card body -->
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getNom", [], "method", false, false, false, 220), "html", null, true);
            echo "</h5>
                            <p class=\"fst-italic text-center\">";
            // line 221
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getDate", [], "method", false, false, false, 221), "Y-m-d"), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getDescription", [], "method", false, false, false, 222), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getCategorie", [], "method", false, false, false, 223), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getPrix", [], "method", false, false, false, 224), "html", null, true);
            echo " DT</p>
                            ";
            // line 225
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["event"], "getTempsRestant", [], "method", false, false, false, 225))) {
                // line 226
                echo "                                <p class=\"card-text\">
                                    Temps restant : ";
                // line 227
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "getTempsRestant", [], "method", false, false, false, 227), "jours", [], "array", false, false, false, 227), "html", null, true);
                echo " jours, 
                                    ";
                // line 228
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "getTempsRestant", [], "method", false, false, false, 228), "heures", [], "array", false, false, false, 228), "html", null, true);
                echo " heures, 
                                    ";
                // line 229
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "getTempsRestant", [], "method", false, false, false, 229), "minutes", [], "array", false, false, false, 229), "html", null, true);
                echo " minutes
                                </p>
                            ";
            } else {
                // line 232
                echo "                                <p class=\"card-text\">Cet événement est terminé.</p>
                            ";
            }
            // line 234
            echo "                        </div>
                        <!-- Card footer -->
                        <div class=\"card-footer\">
                            <!-- Button to open the reservation modal -->
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#reservationModal";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 238), "html", null, true);
            echo "\" data-event-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 238), "html", null, true);
            echo "\">
                                Ajouter une réservation
                            </button>
                            <!-- Button for translation -->
                            <button type=\"button\" class=\"btn btn-secondary translate-btn\" data-event-name=\"";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getNom", [], "method", false, false, false, 242), "html", null, true);
            echo "\" onclick=\"translateEvent('";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getNom", [], "method", false, false, false, 242), "js"), "html", null, true);
            echo "')\">Traduire</button>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "        </div>
    </div>
</section>

";
        // line 251
        $this->displayBlock('javascripts', $context, $blocks);
        // line 256
        echo "
";
        // line 295
        echo "































<!-- Reservation Modal -->
";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 328, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 329
            echo "<div class=\"modal fade\" id=\"reservationModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 329), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"reservationModalLabel";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 329), "html", null, true);
            echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"reservationModalLabel";
            // line 333
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 333), "html", null, true);
            echo "\">Ajouter une réservation pour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getNom", [], "method", false, false, false, 333), "html", null, true);
            echo "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <!-- Reservation form -->
                <form action=\"";
            // line 338
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new");
            echo "\" method=\"post\">
                    <!-- Hidden input for event ID -->
                    <input type=\"hidden\" name=\"id_evenement\" value=\"";
            // line 340
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 340), "html", null, true);
            echo "\">
                    <!-- Name field -->
                    <div class=\"mb-3\">
                        <label for=\"inputNom";
            // line 343
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 343), "html", null, true);
            echo "\">Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputNom";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 344), "html", null, true);
            echo "\" name=\"nom\">
                    </div>
                    <!-- Number of people field -->
                    <div class=\"mb-3\">
                        <label for=\"inputNombre";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 348), "html", null, true);
            echo "\">Nombre de personnes</label>
                        <input type=\"number\" class=\"form-control\" id=\"inputNombre";
            // line 349
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 349), "html", null, true);
            echo "\" name=\"nbr_personne\">
                    </div>
                    <!-- Email field -->
                    <div class=\"mb-3\">
                        <label for=\"inputEmail";
            // line 353
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 353), "html", null, true);
            echo "\">E-mail</label>
                        <input type=\"email\" class=\"form-control\" id=\"inputEmail";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 354), "html", null, true);
            echo "\" name=\"email\">
                    </div>
                    <!-- QR code image -->
                    <div class=\"mb-3\">
                        <img src=\"";
            // line 358
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/reservation_qr_code.png"), "html", null, true);
            echo "\" alt=\"QR Code\" class=\"img-fluid\">
                    </div>
                    <!-- Submission button -->
                    <button type=\"submit\" class=\"btn btn-primary\">Confirmer la réservation</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 368
        echo "















 
 ";
        // line 392
        echo "
<script>
    // Fonction pour traduire le nom de l'événement
    function translateEvent(eventName) {
        // Envoie d'une requête AJAX au serveur pour traduire l'événement
        \$.ajax({
            url: '/translate-event', // Endpoint Symfony pour la traduction
            method: 'POST',
            data: { eventName: eventName },
            success: function(response) {
                alert(\"Traduction de : \" + response.translatedContent); // Afficher la traduction
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la traduction de l\\'événement : ' + error);
            }
        });
    }
</script>






<!-- /Events Section -->

  </main>

  <footer id=\"footer\" class=\"footer position-relative\">

    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-4 col-md-6 footer-about\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <span class=\"\">STUDENTORS</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
            <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">About us</a></li>
            <li><a href=\"#\">Services</a></li>
            <li><a href=\"#\">Terms of service</a></li>
            <li><a href=\"#\">Privacy policy</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"#\">Web Design</a></li>
            <li><a href=\"#\">Web Development</a></li>
            <li><a href=\"#\">Product Management</a></li>
            <li><a href=\"#\">Marketing</a></li>
            <li><a href=\"#\">Graphic Design</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action=\"forms/newsletter.php\" method=\"post\" class=\"php-email-form\">
            <div class=\"newsletter-form\"><input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\"></div>
            <div class=\"loading\">Loading</div>
            <div class=\"error-message\"></div>
            <div class=\"sent-message\">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1\">SiteName</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src=\"front-office/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"front-office/assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"front-office/assets/vendor/aos/aos.js\"></script>
  <script src=\"front-office/assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"front-office/assets/vendor/purecounter/purecounter_vanilla.js\"></script>
  <script src=\"front-office/assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"front-office/assets/js/main.js\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 251
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 252
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/assets/js/translate.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "event.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  639 => 254,  633 => 252,  623 => 251,  495 => 392,  476 => 368,  460 => 358,  453 => 354,  449 => 353,  442 => 349,  438 => 348,  431 => 344,  427 => 343,  421 => 340,  416 => 338,  406 => 333,  396 => 329,  392 => 328,  357 => 295,  354 => 256,  352 => 251,  346 => 247,  333 => 242,  324 => 238,  318 => 234,  314 => 232,  308 => 229,  304 => 228,  300 => 227,  297 => 226,  295 => 225,  291 => 224,  287 => 223,  283 => 222,  279 => 221,  275 => 220,  268 => 216,  262 => 212,  258 => 211,  189 => 144,  186 => 142,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Events - Mentor Bootstrap Template</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"front-office/assets/img/favicon.png\" rel=\"icon\">
  <link href=\"front-office/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"front-office/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"front-office/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"front-office/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"front-office/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"front-office/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"front-office/assets/css/main.css\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Mar 19 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"front-office/assets/img/logo.png\" alt=\"\"> -->
        <h1 class=\"\">STUDENTORS</h1>
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"index.html\" class=\"\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"courses.html\">Courses</a></li>
          <li><a href=\"trainers.html\">Trainers</a></li>
          <li><a href=\"events.html\" class=\"active\">Events</a></li>
          <li><a href=\"pricing.html\">Pricing</a></li>
          <li class=\"dropdown has-dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Dropdown 1</a></li>
              <li class=\"dropdown has-dropdown\"><a href=\"#\"><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Dropdown 1</a></li>
                  <li><a href=\"#\">Deep Dropdown 2</a></li>
                  <li><a href=\"#\">Deep Dropdown 3</a></li>
                  <li><a href=\"#\">Deep Dropdown 4</a></li>
                  <li><a href=\"#\">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Dropdown 2</a></li>
              <li><a href=\"#\">Dropdown 3</a></li>
              <li><a href=\"#\">Dropdown 4</a></li>
            </ul>
          </li>
          <li class=\"megamenu has-dropdown\"><a href=\"#\"><span>Mega Menu</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li>
                <a href=\"#\">Column 1 link 1</a>
                <a href=\"#\">Column 1 link 2</a>
                <a href=\"#\">Column 1 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 2 link 1</a>
                <a href=\"#\">Column 2 link 2</a>
                <a href=\"#\">Column 3 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 3 link 1</a>
                <a href=\"#\">Column 3 link 2</a>
                <a href=\"#\">Column 3 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 4 link 1</a>
                <a href=\"#\">Column 4 link 2</a>
                <a href=\"#\">Column 4 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 5 link 1</a>
                <a href=\"#\">Column 5 link 2</a>
                <a href=\"#\">Column 5 link 3</a>
              </li>
            </ul>
          </li>
          <li><a href=\"contact.html\">Contact</a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <a class=\"btn-getstarted\" href=\"courses.html\">Get Started</a>

    </div>
  </header>

  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title\" data-aos=\"fade\">
      <div class=\"heading\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center text-center\">
            <div class=\"col-lg-8\">
              <h1>Events</h1>
              <p class=\"mb-0\">Bien sûr, voici un slogan accrocheur pour promouvoir votre événement en ligne :

\"Rejoignez la révolution de l'apprentissage en ligne : Explorez, Apprenez, Connectez-vous !\".</p>
            </div>
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\">
        <div class=\"container\">
          <ol>
            <li><a href=\"index.html\">Home</a></li>
            <li class=\"current\">Events</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Events Section -->
  {# Dans votre template Twig #}

{# Dans votre template Twig #}







<div style=\"margin-bottom: 20px; display: flex; align-items: center;\">
    <label for=\"sortOrderSelect\" style=\"margin-right: 10px;\">Trier par :</label>
    <select id=\"sortOrderSelect\" style=\"width: 50%; padding: 5px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; outline: none; transition: border-color 0.3s ease; background-color: #f8f9fa; color: #495057;\">
        <option value=\"\" style=\"color: #495057;\">Choisir...</option>
        <option value=\"priceAsc\" style=\"color: #495057;\">Prix croissant</option>
        <option value=\"priceDesc\" style=\"color: #495057;\">Prix décroissant</option>
        <option value=\"dateAsc\" style=\"color: #495057;\">Date croissante</option>
        <option value=\"dateDesc\" style=\"color: #495057;\">Date décroissante</option>
    </select>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sortOrderSelect = document.getElementById('sortOrderSelect');
        const eventContainer = document.querySelector('.events .container .row');
        function sortEvents() {
            const selectedValue = sortOrderSelect.value;

            if (selectedValue !== \"\") {
                const eventCards = Array.from(document.querySelectorAll('.event-card'));

                eventCards.sort((cardA, cardB) => {
                    const valueA = getValue(cardA);
                    const valueB = getValue(cardB);

                    if (selectedValue.includes('Asc')) {
                        return valueA - valueB;
                    } else {
                        return valueB - valueA;
                    }
                });

                eventContainer.innerHTML = ''; // Vider les événements existants

                eventCards.forEach(card => {
                    eventContainer.appendChild(card);
                });
            }
        }

        function getValue(card) {
            if (sortOrderSelect.value.includes('price')) {
                return parseFloat(card.querySelector('.card-text:last-child').textContent);
            } else {
                return new Date(card.querySelector('.text-center').textContent);
            }
        }

        sortOrderSelect.addEventListener('change', sortEvents);

        // Si une option est déjà sélectionnée, trier les événements
        if (sortOrderSelect.value !== \"\") {
            sortEvents();
        }
    });
</script>

<section id=\"events\" class=\"events section\" style=\"margin-top: 10px;\">
    <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"row\">
            {% for event in events %}
                <div class=\"col-md-6 d-flex align-items-stretch event-card\">
                    <div class=\"card\">
                        <!-- Card image -->
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"card-img-top\" src=\"{{ asset('images/' ~ event.getCheminImage()) }}\" alt=\"\">
                        </div>
                        <!-- Card body -->
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ event.getNom() }}</h5>
                            <p class=\"fst-italic text-center\">{{ event.getDate()|date('Y-m-d') }}</p>
                            <p class=\"card-text\">{{ event.getDescription() }}</p>
                            <p class=\"card-text\">{{ event.getCategorie() }}</p>
                            <p class=\"card-text\">{{ event.getPrix() }} DT</p>
                            {% if event.getTempsRestant() is not null %}
                                <p class=\"card-text\">
                                    Temps restant : {{ event.getTempsRestant()['jours'] }} jours, 
                                    {{ event.getTempsRestant()['heures'] }} heures, 
                                    {{ event.getTempsRestant()['minutes'] }} minutes
                                </p>
                            {% else %}
                                <p class=\"card-text\">Cet événement est terminé.</p>
                            {% endif %}
                        </div>
                        <!-- Card footer -->
                        <div class=\"card-footer\">
                            <!-- Button to open the reservation modal -->
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#reservationModal{{ event.id }}\" data-event-id=\"{{ event.id }}\">
                                Ajouter une réservation
                            </button>
                            <!-- Button for translation -->
                            <button type=\"button\" class=\"btn btn-secondary translate-btn\" data-event-name=\"{{ event.getNom() }}\" onclick=\"translateEvent('{{ event.getNom()|escape('js') }}')\">Traduire</button>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</section>

{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
    <script src=\"{{ asset('front-office/assets/js/translate.js') }}\"></script>
{% endblock %}

{# 
<!-- Reservation Modal -->
{% for event in events %}
<div class=\"modal fade\" id=\"reservationModal{{ event.id }}\" tabindex=\"-1\" aria-labelledby=\"reservationModalLabel{{ event.id }}\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"reservationModalLabel{{ event.id }}\">Ajouter une réservation pour {{ event.getNom() }}</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <!-- Reservation form -->
                <form action=\"{{ path('reservation_new') }}\" method=\"post\">
                    <!-- Hidden input for event ID -->
                    <input type=\"hidden\" name=\"id_evenement\" value=\"{{ event.id }}\">
                    <!-- Name field -->
                    <div class=\"mb-3\">
                        <label for=\"inputNom{{ event.id }}\">Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputNom{{ event.id }}\" name=\"nom\">
                    </div>
                    <!-- Number of people field -->
                    <div class=\"mb-3\">
                        <label for=\"inputNombre{{ event.id }}\">Nombre de personnes</label>
                        <input type=\"number\" class=\"form-control\" id=\"inputNombre{{ event.id }}\" name=\"nbr_personne\">
                    </div>
                    <!-- Email field -->
                    <div class=\"mb-3\">
                        <label for=\"inputEmail{{ event.id }}\">E-mail</label>
                        <input type=\"email\" class=\"form-control\" id=\"inputEmail{{ event.id }}\" name=\"email\">
                    </div>
                    <!-- Submission button -->
                    <button type=\"submit\" class=\"btn btn-primary\">Confirmer la réservation</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endfor %} #}
































<!-- Reservation Modal -->
{% for event in events %}
<div class=\"modal fade\" id=\"reservationModal{{ event.id }}\" tabindex=\"-1\" aria-labelledby=\"reservationModalLabel{{ event.id }}\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"reservationModalLabel{{ event.id }}\">Ajouter une réservation pour {{ event.getNom() }}</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <!-- Reservation form -->
                <form action=\"{{ path('reservation_new') }}\" method=\"post\">
                    <!-- Hidden input for event ID -->
                    <input type=\"hidden\" name=\"id_evenement\" value=\"{{ event.id }}\">
                    <!-- Name field -->
                    <div class=\"mb-3\">
                        <label for=\"inputNom{{ event.id }}\">Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputNom{{ event.id }}\" name=\"nom\">
                    </div>
                    <!-- Number of people field -->
                    <div class=\"mb-3\">
                        <label for=\"inputNombre{{ event.id }}\">Nombre de personnes</label>
                        <input type=\"number\" class=\"form-control\" id=\"inputNombre{{ event.id }}\" name=\"nbr_personne\">
                    </div>
                    <!-- Email field -->
                    <div class=\"mb-3\">
                        <label for=\"inputEmail{{ event.id }}\">E-mail</label>
                        <input type=\"email\" class=\"form-control\" id=\"inputEmail{{ event.id }}\" name=\"email\">
                    </div>
                    <!-- QR code image -->
                    <div class=\"mb-3\">
                        <img src=\"{{ asset('images/reservation_qr_code.png') }}\" alt=\"QR Code\" class=\"img-fluid\">
                    </div>
                    <!-- Submission button -->
                    <button type=\"submit\" class=\"btn btn-primary\">Confirmer la réservation</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endfor %}
















 
 {# <script>
    // Fonction pour traduire le nom de l'événement
    function translate(nom) {
        // Appeler ici la fonction de traduction avec le nom de l'événement
        alert(\"Traduction de : \" + nom); // Remplacez cette alerte par l'appel à votre fonction de traduction
    }
</script>   #}

<script>
    // Fonction pour traduire le nom de l'événement
    function translateEvent(eventName) {
        // Envoie d'une requête AJAX au serveur pour traduire l'événement
        \$.ajax({
            url: '/translate-event', // Endpoint Symfony pour la traduction
            method: 'POST',
            data: { eventName: eventName },
            success: function(response) {
                alert(\"Traduction de : \" + response.translatedContent); // Afficher la traduction
            },
            error: function(xhr, status, error) {
                console.error('Erreur lors de la traduction de l\\'événement : ' + error);
            }
        });
    }
</script>






<!-- /Events Section -->

  </main>

  <footer id=\"footer\" class=\"footer position-relative\">

    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-4 col-md-6 footer-about\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <span class=\"\">STUDENTORS</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
            <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">About us</a></li>
            <li><a href=\"#\">Services</a></li>
            <li><a href=\"#\">Terms of service</a></li>
            <li><a href=\"#\">Privacy policy</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"#\">Web Design</a></li>
            <li><a href=\"#\">Web Development</a></li>
            <li><a href=\"#\">Product Management</a></li>
            <li><a href=\"#\">Marketing</a></li>
            <li><a href=\"#\">Graphic Design</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action=\"forms/newsletter.php\" method=\"post\" class=\"php-email-form\">
            <div class=\"newsletter-form\"><input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\"></div>
            <div class=\"loading\">Loading</div>
            <div class=\"error-message\"></div>
            <div class=\"sent-message\">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1\">SiteName</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src=\"front-office/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"front-office/assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"front-office/assets/vendor/aos/aos.js\"></script>
  <script src=\"front-office/assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"front-office/assets/vendor/purecounter/purecounter_vanilla.js\"></script>
  <script src=\"front-office/assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"front-office/assets/js/main.js\"></script>

</body>

</html>", "event.html.twig", "C:\\Users\\ghofrane\\Desktop\\projet-pidev\\PidevWeb\\PidevEvent\\templates\\event.html.twig");
    }
}
