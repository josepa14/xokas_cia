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

/* juegos/show.html.twig */
class __TwigTemplate_ab8857d9f91a568e2ad74d4088ce04af extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "juegos/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "juegos/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Juegos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container mt-3 mb-2 g--fondo-semi rounded shadow\">
    <h1>Acerca del juego</h1>

    <table class=\"table\">
        <tbody>
            
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 14, $this->source); })()), "nombre", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ancho</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 18, $this->source); })()), "ancho", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Alto</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 22, $this->source); })()), "alto", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>MinPlayers</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 26, $this->source); })()), "minPlayers", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>MaxPlayersa</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 30, $this->source); })()), "maxPlayers", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>descripcion</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 34, $this->source); })()), "descripcion", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagen</th>
                <td> <img src=\"/assets/img/juegos/";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 38, $this->source); })()), "imagen", [], "any", false, false, false, 38), "html", null, true);
        echo "\" class=\"img-thumbnail rounded w-25 g--transicion\" </td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_index");
        echo "\" class=\"btn btn-warning m-1 text-white\">Volver al Directorio</a>
    ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "        ";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "roles", [], "any", false, false, false, 45))) {
                // line 46
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" class=\"btn btn-info m-1 text-white\">EDITAR</a>
        ";
            }
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "        ";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50))) {
                // line 51
                echo "    ";
                echo twig_include($this->env, $context, "juegos/_delete_form.html.twig");
                echo "
     ";
            }
            // line 53
            echo "    ";
        }
        // line 54
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "juegos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 54,  163 => 53,  157 => 51,  154 => 50,  151 => 49,  148 => 48,  142 => 46,  139 => 45,  137 => 44,  133 => 43,  125 => 38,  118 => 34,  111 => 30,  104 => 26,  97 => 22,  90 => 18,  83 => 14,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Juegos{% endblock %}

{% block body %}
<div class=\"container mt-3 mb-2 g--fondo-semi rounded shadow\">
    <h1>Acerca del juego</h1>

    <table class=\"table\">
        <tbody>
            
            <tr>
                <th>Nombre</th>
                <td>{{ juego.nombre }}</td>
            </tr>
            <tr>
                <th>Ancho</th>
                <td>{{ juego.ancho }}</td>
            </tr>
            <tr>
                <th>Alto</th>
                <td>{{ juego.alto }}</td>
            </tr>
            <tr>
                <th>MinPlayers</th>
                <td>{{ juego.minPlayers }}</td>
            </tr>
            <tr>
                <th>MaxPlayersa</th>
                <td>{{ juego.maxPlayers }}</td>
            </tr>
            <tr>
                <th>descripcion</th>
                <td>{{ juego.descripcion }}</td>
            </tr>
            <tr>
                <th>Imagen</th>
                <td> <img src=\"/assets/img/juegos/{{ juego.imagen }}\" class=\"img-thumbnail rounded w-25 g--transicion\" </td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_juegos_index') }}\" class=\"btn btn-warning m-1 text-white\">Volver al Directorio</a>
    {% if app.user %}
        {% if \"ROLE_ADMIN\" in app.user.roles %}
    <a href=\"{{ path('app_juegos_edit', {'id': juego.id})}}\" class=\"btn btn-info m-1 text-white\">EDITAR</a>
        {% endif %}
    {% endif %}
    {% if app.user %}
        {% if \"ROLE_ADMIN\" in app.user.roles %}
    {{ include('juegos/_delete_form.html.twig') }}
     {% endif %}
    {% endif %}
    </div>
{% endblock %}
", "juegos/show.html.twig", "C:\\Users\\JoSePa\\Desktop\\2º DAW\\xokas_cia\\templates\\juegos\\show.html.twig");
    }
}
