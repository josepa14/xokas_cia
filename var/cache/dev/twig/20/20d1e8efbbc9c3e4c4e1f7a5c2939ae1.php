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

/* juegos/index.html.twig */
class __TwigTemplate_f47ba91acd1cfcb61aca330918f83740 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "juegos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "juegos/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Juegos index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1 class=\"container mt-3\">Directorio de Juegos</h1>
<div class=\"container mt-3 p-2 rounder g--fondo-semi shadow\">

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                
                <th>descripcion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juegos"]) || array_key_exists("juegos", $context) ? $context["juegos"] : (function () { throw new RuntimeError('Variable "juegos" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["juego"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "nombre", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>

                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "descripcion", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-warning text-white\"  href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_show", ["id" => twig_get_attribute($this->env, $this->source, $context["juego"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"> Ver</a>
                    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
                // line 29
                echo "                    ";
                if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "roles", [], "any", false, false, false, 29))) {
                    echo "   
                    <a class=\"btn btn-info text-white\" href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["juego"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                    echo "\">editar</a>
                    ";
                }
                // line 32
                echo "                    ";
            }
            // line 33
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juego'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
    ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "        ";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "roles", [], "any", false, false, false, 43))) {
                // line 44
                echo "    <a class=\"btn btn-warning\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_new");
                echo "\">Crear nuevo juego</a>
    ";
            }
            // line 46
            echo "    ";
        }
        // line 47
        echo "    </div>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "juegos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 47,  161 => 46,  155 => 44,  152 => 43,  150 => 42,  146 => 40,  137 => 36,  130 => 33,  127 => 32,  122 => 30,  117 => 29,  115 => 28,  111 => 27,  106 => 25,  101 => 23,  97 => 22,  94 => 21,  89 => 20,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Juegos index{% endblock %}

{% block body %}
<h1 class=\"container mt-3\">Directorio de Juegos</h1>
<div class=\"container mt-3 p-2 rounder g--fondo-semi shadow\">

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                
                <th>descripcion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        {% for juego in juegos %}
            <tr>
                <td>{{ juego.id }}</td>
                <td>{{ juego.nombre }}</td>

                <td>{{ juego.descripcion }}</td>
                <td>
                    <a class=\"btn btn-warning text-white\"  href=\"{{ path('app_juegos_show', {'id': juego.id}) }}\"> Ver</a>
                    {% if app.user %}
                    {% if \"ROLE_ADMIN\" in app.user.roles %}   
                    <a class=\"btn btn-info text-white\" href=\"{{ path('app_juegos_edit', {'id': juego.id}) }}\">editar</a>
                    {% endif %}
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% if app.user %}
        {% if \"ROLE_ADMIN\" in app.user.roles %}
    <a class=\"btn btn-warning\" href=\"{{ path('app_juegos_new') }}\">Crear nuevo juego</a>
    {% endif %}
    {% endif %}
    </div>

    
{% endblock %}
", "juegos/index.html.twig", "C:\\Users\\JoSePa\\Desktop\\2º DAW\\xokas_cia\\templates\\juegos\\index.html.twig");
    }
}
