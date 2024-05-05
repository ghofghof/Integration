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

/* student/add-student.html.twig */
class __TwigTemplate_582268b3e867e8ca31d5d7ac2df69485 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/add-student.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/add-student.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin 2 - Events</title>

    <!-- Custom fonts for this template-->
   <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
   <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
   <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
</head>

<body id=\"page-top\">

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">STUDENTORS <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"index.html\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\"
                    aria-controls=\"collapseTwo\">
                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Evenement</span>
                </a>
                <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\"
                    data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Custom Evenement:</h6>
                        <a class=\"collapse-item\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_element");
        echo "\">Ajouter Evenement</a>
                        <a class=\"collapse-item\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_student");
        echo "\">Afficher Evenement</a>
                        
                        <a class=\"collapse-item\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserver_event_new");
        echo "\">Ajouter Reservation</a>
                        <a class=\"collapse-item\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficher_reservation");
        echo "\">Afficher Reservation</a>
                        
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                    aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                    <i class=\"fas fa-fw fa-wrench\"></i>
                    <span>Utilities</span>
                </a>
                <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                    data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Custom Utilities:</h6>
                        <a class=\"collapse-item\" href=\"utilities-color.html\">Colors</a>
                        <a class=\"collapse-item\" href=\"utilities-border.html\">Borders</a>
                        <a class=\"collapse-item\" href=\"utilities-animation.html\">Animations</a>
                        <a class=\"collapse-item\" href=\"utilities-other.html\">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
                    aria-expanded=\"true\" aria-controls=\"collapsePages\">
                    <i class=\"fas fa-fw fa-folder\"></i>
                    <span>Pages</span>
                </a>
                <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Login Screens:</h6>
                        <a class=\"collapse-item\" href=\"login.html\">Login</a>
                        <a class=\"collapse-item\" href=\"register.html\">Register</a>
                        <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
                        <div class=\"collapse-divider\"></div>
                        <h6 class=\"collapse-header\">Other Pages:</h6>
                        <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
                        <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"charts.html\">
                    <i class=\"fas fa-fw fa-chart-area\"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"tables.html\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class=\"nav-item dropdown no-arrow d-sm-none\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-search fa-fw\"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                aria-labelledby=\"searchDropdown\">
                                <form class=\"form-inline mr-auto w-100 navbar-search\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                            placeholder=\"Search for...\" aria-label=\"Search\"
                                            aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\">
                                                <i class=\"fas fa-search fa-sm\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-bell fa-fw\"></i>
                                <!-- Counter - Alerts -->
                                <span class=\"badge badge-danger badge-counter\">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-envelope fa-fw\"></i>
                                <!-- Counter - Messages -->
                                <span class=\"badge badge-danger badge-counter\">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/undraw_profile_1.svg"), "html", null, true);
        echo "\" alt=\"...\">

                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/undraw_profile_2.svg"), "html", null, true);
        echo "\" alt=\"...\">

                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/undraw_profile_3.svg"), "html", null, true);
        echo "\" alt=\"...\">

                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>

                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/undraw_profile.svg"), "html", null, true);
        echo "\">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profile
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Settings
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Activity Log
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                  <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <h1 class=\"h3 mb-2 text-gray-800\">Les événements disponibles</h1>
                    <p class=\"mb-4\">Accélérez votre parcours d'apprentissage avec Mentors : votre plateforme e-learning de choix !
                        For more information about DataTables, please visit the <a target=\"_blank\"
                            href=\"https://datatables.net\">official DataTables documentation</a>.</p>
                 <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                            <div class=\"input-group mb-3\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"searchInput\">
                            </div>
                             <h1>Liste des événements </h1>
                             

<select id=\"sortOrderSelect\">
     <option value=\"none\">Choix de tri</option>
    <option value=\"price_asc\">Prix - Croissant</option>
    <option value=\"price_desc\">Prix - Décroissant</option>
    <option value=\"date_asc\">Date - Croissante</option>
    <option value=\"date_desc\">Date - Décroissante</option>
</select>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sortOrderSelect = document.getElementById('sortOrderSelect');

        function sortTable() {
            const sortOrder = sortOrderSelect.value;
            const eventsTable = document.getElementById('dataTable');
            const rows = Array.from(eventsTable.getElementsByTagName('tr'));
            
            // Supprimer la première ligne (en-têtes)
            rows.shift();
            
            rows.sort((rowA, rowB) => {
                let valueA, valueB;

                if (sortOrder.includes('price')) {
                    valueA = parseFloat(rowA.cells[4].textContent); // Index de la colonne de prix
                    valueB = parseFloat(rowB.cells[4].textContent);
                } else if (sortOrder.includes('date')) {
                    valueA = new Date(rowA.cells[3].textContent).getTime(); // Index de la colonne de date
                    valueB = new Date(rowB.cells[3].textContent).getTime();
                }

                if (sortOrder.includes('asc')) {
                    return valueA - valueB;
                } else {
                    return valueB - valueA;
                }
            });
            
            // Vider le tableau
            while (eventsTable.rows.length > 1) {
                eventsTable.deleteRow(1);
            }
            
            // Réinsérer les lignes triées
            rows.forEach(row => {
                eventsTable.appendChild(row);
            });
        }

        sortOrderSelect.addEventListener('change', sortTable);
        
        // Tri initial au chargement de la page
        sortTable();
    });
</script>


<label for=\"minPrice\">Prix minimum:</label>
<input type=\"number\" id=\"minPrice\" placeholder=\"Prix minimum\">

<label for=\"maxPrice\">Prix maximum:</label>
<input type=\"number\" id=\"maxPrice\" placeholder=\"Prix maximum\">


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Récupérer les références des éléments HTML
        const minPriceInput = document.getElementById('minPrice');
        const maxPriceInput = document.getElementById('maxPrice');
        const eventsTable = document.getElementById('dataTable');
        
        // Convertir les lignes de la table en tableau
        let rows = Array.from(eventsTable.getElementsByTagName('tr'));

        // Fonction pour filtrer le tableau par prix
        function filterTableByPrice() {
            const minPrice = parseFloat(minPriceInput.value);
            const maxPrice = parseFloat(maxPriceInput.value);

            // Parcourir chaque ligne du tableau
            rows.forEach(row => {
                // Récupérer le prix dans la colonne appropriée
                const priceCell = row.cells[4]; // Index de la colonne de prix
                const price = parseFloat(priceCell.textContent.trim());

                // Vérifier si le prix est dans la plage spécifiée
                if ((isNaN(minPrice) || price >= minPrice) && (isNaN(maxPrice) || price <= maxPrice)) {
                    row.style.display = ''; // Afficher la ligne si elle se situe dans la plage de prix
                } else {
                    row.style.display = 'none'; // Masquer la ligne sinon
                }
            });
        }

        // Ajouter un écouteur d'événements au changement des valeurs de prix
        minPriceInput.addEventListener('input', filterTableByPrice);
        maxPriceInput.addEventListener('input', filterTableByPrice);
    });
</script>




<table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>description</th>
            <th>categorie</th>
            <th>date</th>
            <th>prix</th>
            <th>CheminImage</th>
            <!-- Ajoutez la colonne pour le bouton de suppression -->
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 500
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 500, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 501
            echo "        <tr id=\"evenement-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 501), "html", null, true);
            echo "\">
            <td>";
            // line 502
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nom", [], "any", false, false, false, 502), "html", null, true);
            echo "</td>
            <td>";
            // line 503
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 503), "html", null, true);
            echo "</td>
            <td>";
            // line 504
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "categorie", [], "any", false, false, false, 504), "html", null, true);
            echo "</td>
            <td>";
            // line 505
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 505), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>";
            // line 506
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "prix", [], "any", false, false, false, 506), "html", null, true);
            echo "</td>
            <td>";
            // line 507
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "cheminImage", [], "any", false, false, false, 507), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 508
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "cheminImage", [], "any", false, false, false, 508), "html", null, true);
            echo "\" alt=\"Image de l'événement\" style=\"max-width: 1000px;\"></td>
            <td>
                <button class=\"btn btn-danger btn-sm delete-event-btn\" data-event-id=\"";
            // line 510
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 510), "html", null, true);
            echo "\">Supprimer</button>
                <a href=\"";
            // line 511
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 511)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 515
        echo "    </tbody>
</table>

<!-- Ajoutez un canvas pour le graphique -->
<canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#searchInput').on('keyup', function() {
            var searchText = \$(this).val().toLowerCase();
            \$('#dataTable tbody tr').each(function() {
                var nom = \$(this).find('td:first').text().toLowerCase();
                if (nom.startsWith(searchText)) {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        });
    });

<!-- Ajoutez un canvas pour le graphique -->
";
        // line 539
        echo "<canvas id=\"myChart\" width=\"300\" height=\"300\"></canvas>


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js\"></script>
<script>
    // Récupérer les statistiques depuis le modèle Twig
    var statistiques = ";
        // line 545
        echo json_encode((isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 545, $this->source); })()));
        echo ";
    
    // Extraire les catégories et les nombres d'événements
    var categories = Object.keys(statistiques);
    var nbEvenements = Object.values(statistiques);

    // Dessiner le graphique
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: categories,
            datasets: [{
                label: 'Nombre d\\'événements par catégorie',
                data: nbEvenements,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>




                                    



                            
    
</tbody>

                                       
                                    </tbody>
                                



                                
                          <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
   <script>
  \$(document).ready(function() {
    \$('.delete-event-btn').click(function() {
        var eventId = \$(this).data('event-id');
        if (confirm(\"Êtes-vous sûr de vouloir supprimer cet événement ?\")) {
            \$.ajax({
                url: '";
        // line 614
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_delete", ["id" => "EVENT_ID"]);
        echo "'.replace('EVENT_ID', eventId),
                type: 'DELETE',
                success: function(result) {
                    // Suppression de la ligne de tableau correspondante si la suppression réussit
                    \$('#evenement-' + eventId).remove();
                    alert(\"L'événement a été supprimé avec succès.\");
                },
                error: function(xhr, status, error) {
                    alert(\"Une erreur s'est produite lors de la suppression de l'événement.\");
                    console.error(xhr.responseText);
                }
            });
        }
    });
});
</script>  







                <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    

                    <div class=\"row\">

                        <div class=\"col-lg-6\">

                       

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "student/add-student.html.twig";
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
        return array (  835 => 703,  829 => 700,  823 => 697,  819 => 696,  734 => 614,  662 => 545,  654 => 539,  629 => 515,  619 => 511,  615 => 510,  610 => 508,  606 => 507,  602 => 506,  598 => 505,  594 => 504,  590 => 503,  586 => 502,  581 => 501,  577 => 500,  409 => 335,  372 => 301,  357 => 289,  342 => 277,  137 => 75,  133 => 74,  128 => 72,  124 => 71,  72 => 22,  68 => 21,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin 2 - Events</title>

    <!-- Custom fonts for this template-->
   <link href=\"{{ asset('back-office/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
   <link href=\"{{ asset('back-office/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
   <link href=\"{{ asset('back-office/vendor/datatables/dataTables.bootstrap4.min.css')}}\" rel=\"stylesheet\">
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
</head>

<body id=\"page-top\">

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">STUDENTORS <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"index.html\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\"
                    aria-controls=\"collapseTwo\">
                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Evenement</span>
                </a>
                <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\"
                    data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Custom Evenement:</h6>
                        <a class=\"collapse-item\" href=\"{{ path('app_student_element') }}\">Ajouter Evenement</a>
                        <a class=\"collapse-item\" href=\"{{ path('app_add_student') }}\">Afficher Evenement</a>
                        
                        <a class=\"collapse-item\" href=\"{{ path('app_reserver_event_new') }}\">Ajouter Reservation</a>
                        <a class=\"collapse-item\" href=\"{{ path('app_afficher_reservation') }}\">Afficher Reservation</a>
                        
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                    aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                    <i class=\"fas fa-fw fa-wrench\"></i>
                    <span>Utilities</span>
                </a>
                <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                    data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Custom Utilities:</h6>
                        <a class=\"collapse-item\" href=\"utilities-color.html\">Colors</a>
                        <a class=\"collapse-item\" href=\"utilities-border.html\">Borders</a>
                        <a class=\"collapse-item\" href=\"utilities-animation.html\">Animations</a>
                        <a class=\"collapse-item\" href=\"utilities-other.html\">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
                    aria-expanded=\"true\" aria-controls=\"collapsePages\">
                    <i class=\"fas fa-fw fa-folder\"></i>
                    <span>Pages</span>
                </a>
                <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Login Screens:</h6>
                        <a class=\"collapse-item\" href=\"login.html\">Login</a>
                        <a class=\"collapse-item\" href=\"register.html\">Register</a>
                        <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
                        <div class=\"collapse-divider\"></div>
                        <h6 class=\"collapse-header\">Other Pages:</h6>
                        <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
                        <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"charts.html\">
                    <i class=\"fas fa-fw fa-chart-area\"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"tables.html\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class=\"nav-item dropdown no-arrow d-sm-none\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-search fa-fw\"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                aria-labelledby=\"searchDropdown\">
                                <form class=\"form-inline mr-auto w-100 navbar-search\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                            placeholder=\"Search for...\" aria-label=\"Search\"
                                            aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\">
                                                <i class=\"fas fa-search fa-sm\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-bell fa-fw\"></i>
                                <!-- Counter - Alerts -->
                                <span class=\"badge badge-danger badge-counter\">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-envelope fa-fw\"></i>
                                <!-- Counter - Messages -->
                                <span class=\"badge badge-danger badge-counter\">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"{{ asset('back-office/img/undraw_profile_1.svg') }}\" alt=\"...\">

                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"{{ asset('back-office/img/undraw_profile_2.svg') }}\" alt=\"...\">

                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"{{ asset('back-office/img/undraw_profile_3.svg') }}\" alt=\"...\">

                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>

                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=\"{{asset('back-office/img/undraw_profile.svg')}}\">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profile
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Settings
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Activity Log
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                  <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <h1 class=\"h3 mb-2 text-gray-800\">Les événements disponibles</h1>
                    <p class=\"mb-4\">Accélérez votre parcours d'apprentissage avec Mentors : votre plateforme e-learning de choix !
                        For more information about DataTables, please visit the <a target=\"_blank\"
                            href=\"https://datatables.net\">official DataTables documentation</a>.</p>
                 <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                            <div class=\"input-group mb-3\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"searchInput\">
                            </div>
                             <h1>Liste des événements </h1>
                             

<select id=\"sortOrderSelect\">
     <option value=\"none\">Choix de tri</option>
    <option value=\"price_asc\">Prix - Croissant</option>
    <option value=\"price_desc\">Prix - Décroissant</option>
    <option value=\"date_asc\">Date - Croissante</option>
    <option value=\"date_desc\">Date - Décroissante</option>
</select>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sortOrderSelect = document.getElementById('sortOrderSelect');

        function sortTable() {
            const sortOrder = sortOrderSelect.value;
            const eventsTable = document.getElementById('dataTable');
            const rows = Array.from(eventsTable.getElementsByTagName('tr'));
            
            // Supprimer la première ligne (en-têtes)
            rows.shift();
            
            rows.sort((rowA, rowB) => {
                let valueA, valueB;

                if (sortOrder.includes('price')) {
                    valueA = parseFloat(rowA.cells[4].textContent); // Index de la colonne de prix
                    valueB = parseFloat(rowB.cells[4].textContent);
                } else if (sortOrder.includes('date')) {
                    valueA = new Date(rowA.cells[3].textContent).getTime(); // Index de la colonne de date
                    valueB = new Date(rowB.cells[3].textContent).getTime();
                }

                if (sortOrder.includes('asc')) {
                    return valueA - valueB;
                } else {
                    return valueB - valueA;
                }
            });
            
            // Vider le tableau
            while (eventsTable.rows.length > 1) {
                eventsTable.deleteRow(1);
            }
            
            // Réinsérer les lignes triées
            rows.forEach(row => {
                eventsTable.appendChild(row);
            });
        }

        sortOrderSelect.addEventListener('change', sortTable);
        
        // Tri initial au chargement de la page
        sortTable();
    });
</script>


<label for=\"minPrice\">Prix minimum:</label>
<input type=\"number\" id=\"minPrice\" placeholder=\"Prix minimum\">

<label for=\"maxPrice\">Prix maximum:</label>
<input type=\"number\" id=\"maxPrice\" placeholder=\"Prix maximum\">


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Récupérer les références des éléments HTML
        const minPriceInput = document.getElementById('minPrice');
        const maxPriceInput = document.getElementById('maxPrice');
        const eventsTable = document.getElementById('dataTable');
        
        // Convertir les lignes de la table en tableau
        let rows = Array.from(eventsTable.getElementsByTagName('tr'));

        // Fonction pour filtrer le tableau par prix
        function filterTableByPrice() {
            const minPrice = parseFloat(minPriceInput.value);
            const maxPrice = parseFloat(maxPriceInput.value);

            // Parcourir chaque ligne du tableau
            rows.forEach(row => {
                // Récupérer le prix dans la colonne appropriée
                const priceCell = row.cells[4]; // Index de la colonne de prix
                const price = parseFloat(priceCell.textContent.trim());

                // Vérifier si le prix est dans la plage spécifiée
                if ((isNaN(minPrice) || price >= minPrice) && (isNaN(maxPrice) || price <= maxPrice)) {
                    row.style.display = ''; // Afficher la ligne si elle se situe dans la plage de prix
                } else {
                    row.style.display = 'none'; // Masquer la ligne sinon
                }
            });
        }

        // Ajouter un écouteur d'événements au changement des valeurs de prix
        minPriceInput.addEventListener('input', filterTableByPrice);
        maxPriceInput.addEventListener('input', filterTableByPrice);
    });
</script>




<table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>description</th>
            <th>categorie</th>
            <th>date</th>
            <th>prix</th>
            <th>CheminImage</th>
            <!-- Ajoutez la colonne pour le bouton de suppression -->
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        {% for evenement in evenements %}
        <tr id=\"evenement-{{ evenement.id }}\">
            <td>{{ evenement.nom }}</td>
            <td>{{ evenement.description }}</td>
            <td>{{ evenement.categorie }}</td>
            <td>{{ evenement.date|date('Y-m-d') }}</td>
            <td>{{ evenement.prix }}</td>
            <td>{{ evenement.cheminImage }}</td>
            <td><img src=\"{{ evenement.cheminImage }}\" alt=\"Image de l'événement\" style=\"max-width: 1000px;\"></td>
            <td>
                <button class=\"btn btn-danger btn-sm delete-event-btn\" data-event-id=\"{{ evenement.id }}\">Supprimer</button>
                <a href=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\" class=\"btn btn-primary\">Modifier</a>
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>

<!-- Ajoutez un canvas pour le graphique -->
<canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#searchInput').on('keyup', function() {
            var searchText = \$(this).val().toLowerCase();
            \$('#dataTable tbody tr').each(function() {
                var nom = \$(this).find('td:first').text().toLowerCase();
                if (nom.startsWith(searchText)) {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        });
    });

<!-- Ajoutez un canvas pour le graphique -->
{# <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas> #}
<canvas id=\"myChart\" width=\"300\" height=\"300\"></canvas>


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js\"></script>
<script>
    // Récupérer les statistiques depuis le modèle Twig
    var statistiques = {{ statistiques|json_encode|raw }};
    
    // Extraire les catégories et les nombres d'événements
    var categories = Object.keys(statistiques);
    var nbEvenements = Object.values(statistiques);

    // Dessiner le graphique
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: categories,
            datasets: [{
                label: 'Nombre d\\'événements par catégorie',
                data: nbEvenements,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>




                                    



                            
    
</tbody>

                                       
                                    </tbody>
                                



                                
                          <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
   <script>
  \$(document).ready(function() {
    \$('.delete-event-btn').click(function() {
        var eventId = \$(this).data('event-id');
        if (confirm(\"Êtes-vous sûr de vouloir supprimer cet événement ?\")) {
            \$.ajax({
                url: '{{ path(\"app_evenement_delete\", { id: \"EVENT_ID\" }) }}'.replace('EVENT_ID', eventId),
                type: 'DELETE',
                success: function(result) {
                    // Suppression de la ligne de tableau correspondante si la suppression réussit
                    \$('#evenement-' + eventId).remove();
                    alert(\"L'événement a été supprimé avec succès.\");
                },
                error: function(xhr, status, error) {
                    alert(\"Une erreur s'est produite lors de la suppression de l'événement.\");
                    console.error(xhr.responseText);
                }
            });
        }
    });
});
</script>  







                <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    

                    <div class=\"row\">

                        <div class=\"col-lg-6\">

                       

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=\"{{asset('back-office/vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset('back-office/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"{{asset('back-office/vendor/jquery-easing/jquery.easing.min.js')}}\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"{{asset('back-office/js/sb-admin-2.min.js')}}\"></script>

</body>

</html>", "student/add-student.html.twig", "C:\\Users\\ghofrane\\Desktop\\projet-pidev\\PidevWeb\\PidevEvent\\templates\\student\\add-student.html.twig");
    }
}
