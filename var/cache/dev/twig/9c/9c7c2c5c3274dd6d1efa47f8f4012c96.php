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

/* reserver_event/show.html.twig */
class __TwigTemplate_b3c76f446cec95a6db39bf030fd7dead extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserver_event/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserver_event/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reserver_event/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ReserverEvent";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>ReserverEvent</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id_reservation</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserver_event"]) || array_key_exists("reserver_event", $context) ? $context["reserver_event"] : (function () { throw new RuntimeError('Variable "reserver_event" does not exist.', 12, $this->source); })()), "idReservation", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserver_event"]) || array_key_exists("reserver_event", $context) ? $context["reserver_event"] : (function () { throw new RuntimeError('Variable "reserver_event" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbr_personne</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserver_event"]) || array_key_exists("reserver_event", $context) ? $context["reserver_event"] : (function () { throw new RuntimeError('Variable "reserver_event" does not exist.', 20, $this->source); })()), "nbrPersonne", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_reservation</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["reserver_event"]) || array_key_exists("reserver_event", $context) ? $context["reserver_event"] : (function () { throw new RuntimeError('Variable "reserver_event" does not exist.', 24, $this->source); })()), "dateReservation", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserver_event"]) || array_key_exists("reserver_event", $context) ? $context["reserver_event"] : (function () { throw new RuntimeError('Variable "reserver_event" does not exist.', 24, $this->source); })()), "dateReservation", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reserver_event"]) || array_key_exists("reserver_event", $context) ? $context["reserver_event"] : (function () { throw new RuntimeError('Variable "reserver_event" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserver_event_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserver_event_edit", ["id_reservation" => twig_get_attribute($this->env, $this->source, (isset($context["reserver_event"]) || array_key_exists("reserver_event", $context) ? $context["reserver_event"] : (function () { throw new RuntimeError('Variable "reserver_event" does not exist.', 35, $this->source); })()), "id_reservation", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "reserver_event/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reserver_event/show.html.twig";
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
        return array (  142 => 37,  137 => 35,  132 => 33,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ReserverEvent{% endblock %}

{% block body %}
    <h1>ReserverEvent</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id_reservation</th>
                <td>{{ reserver_event.idReservation }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ reserver_event.nom }}</td>
            </tr>
            <tr>
                <th>Nbr_personne</th>
                <td>{{ reserver_event.nbrPersonne }}</td>
            </tr>
            <tr>
                <th>Date_reservation</th>
                <td>{{ reserver_event.dateReservation ? reserver_event.dateReservation|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ reserver_event.email }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_reserver_event_index') }}\">back to list</a>

    <a href=\"{{ path('app_reserver_event_edit', {'id_reservation': reserver_event.id_reservation}) }}\">edit</a>

    {{ include('reserver_event/_delete_form.html.twig') }}
{% endblock %}
", "reserver_event/show.html.twig", "C:\\Users\\ghofrane\\Desktop\\projet-pidev\\PidevWeb\\PidevEvent\\templates\\reserver_event\\show.html.twig");
    }
}
