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

/* student/delete.html.twig */
class __TwigTemplate_bf72d2d681c7abec9e4c857e0c4a1331 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/delete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/delete.html.twig"));

        // line 1
        echo "...
<tbody>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 4
            echo "    <tr id=\"evenement-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
        <td>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nom", [], "any", false, false, false, 5), "html", null, true);
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 6), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "categorie", [], "any", false, false, false, 7), "html", null, true);
            echo "</td>
        <td>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 8), "Y-m-d"), "html", null, true);
            echo "</td>
        <td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "prix", [], "any", false, false, false, 9), "html", null, true);
            echo "</td>
        <td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "cheminImage", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>
        <td><img src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "cheminImage", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"Image de l'événement\" style=\"max-width: 1000px;\"></td>
        <td>
            <button class=\"btn btn-danger btn-sm delete-event-btn\" data-event-id=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">Supprimer</button>
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</tbody>
</table>
</div>
</div>
</div>
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
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- Core plugin JavaScript-->
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts for all pages-->
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom script for event deletion -->
<script>
    \$(document).ready(function() {
        \$('.delete-event-btn').click(function() {
            var eventId = \$(this).data('event-id');
            if (confirm(\"Êtes-vous sûr de vouloir supprimer cet événement ?\")) {
                \$.ajax({
                    url: '/evenement/' + eventId,
                    type: 'DELETE',
                    success: function(result) {
                        // Suppression de la ligne de tableau correspondante
                        \$('#evenement-' + eventId).remove();
                    }
                });
            }
        });
    });
</script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "student/delete.html.twig";
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
        return array (  163 => 74,  157 => 71,  151 => 68,  147 => 67,  95 => 17,  85 => 13,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("...
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
        </td>
    </tr>
    {% endfor %}
</tbody>
</table>
</div>
</div>
</div>
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

<!-- Custom script for event deletion -->
<script>
    \$(document).ready(function() {
        \$('.delete-event-btn').click(function() {
            var eventId = \$(this).data('event-id');
            if (confirm(\"Êtes-vous sûr de vouloir supprimer cet événement ?\")) {
                \$.ajax({
                    url: '/evenement/' + eventId,
                    type: 'DELETE',
                    success: function(result) {
                        // Suppression de la ligne de tableau correspondante
                        \$('#evenement-' + eventId).remove();
                    }
                });
            }
        });
    });
</script>

</body>
</html>
", "student/delete.html.twig", "C:\\Users\\ghofrane\\Desktop\\projet-pidev\\PidevWeb\\PidevEvent\\templates\\student\\delete.html.twig");
    }
}
