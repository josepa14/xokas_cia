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
class __TwigTemplate_2100b9f8c5e6e72676f84a88ee85d5b6 extends Template
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
        echo "    <h1>Juegos</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 16, $this->source); })()), "nombre", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ancho</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 20, $this->source); })()), "ancho", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Alto</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 24, $this->source); })()), "alto", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>MinPlayers</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 28, $this->source); })()), "minPlayers", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>MaxPlayers</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 32, $this->source); })()), "maxPlayers", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "juegos/_delete_form.html.twig");
        echo "
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
        return array (  134 => 41,  129 => 39,  124 => 37,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Juegos{% endblock %}

{% block body %}
    <h1>Juegos</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ juego.id }}</td>
            </tr>
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
                <th>MaxPlayers</th>
                <td>{{ juego.maxPlayers }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_juegos_index') }}\">back to list</a>

    <a href=\"{{ path('app_juegos_edit', {'id': juego.id}) }}\">edit</a>

    {{ include('juegos/_delete_form.html.twig') }}
{% endblock %}
", "juegos/show.html.twig", "C:\\xampp\\htdocs\\training\\15.Symfony\\xokas_cia\\templates\\juegos\\show.html.twig");
    }
}
