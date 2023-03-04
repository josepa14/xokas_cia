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

/* reservas/index.html.twig */
class __TwigTemplate_ab6743053966832d503906130521dd63 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservas/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservas/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<script>
    const filters = JSON.parse('";
        // line 4
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "roles", [], "any", false, false, false, 4));
        echo "');
</script>
\t<div class=\"container\">
\t\t<h1>Reservas</h1>

\t\t<form>
\t\t\t<fieldset>
\t\t\t\t<label for=\"entrada\">Fecha de la reserva
\t\t\t\t</label>
\t\t\t\t<input type=\"text\" id=\"entrada\" name=\"entrada\"/>
\t\t\t</fieldset>
\t\t\t<fieldset id=\"horario\" style=\"display:none\">
\t\t\t\t<label for=\"horas\">Hora:</label>
\t\t\t\t<select name=\"horas\" id=\"horas\">
\t\t\t\t\t<option value=\"\" selected=\"selected\">Seleccione una hora</option>
\t\t\t\t\t<option value=\"10h\">10:00H</option>
\t\t\t\t\t<option value=\"11h\">11:00H</option>
\t\t\t\t\t<option value=\"12h\">12:00H</option>
\t\t\t\t\t<option value=\"13h\">13:00H</option>
\t\t\t\t\t<option value=\"16h\">16:00H</option>
\t\t\t\t\t<option value=\"17h\">17:00H</option>
\t\t\t\t\t<option value=\"18h\">18:00H</option>
\t\t\t\t</select>
\t\t\t</fieldset>
\t\t</form>
\t\t
\t\t";
        // line 30
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "roles", [], "any", false, false, false, 30))) {
            // line 31
            echo "\t\t<button class=\"btn btn-primary mb-4\" id=\"agregar\">agregar</button>
\t\t<div class=\"dialog\" title=\"Crear nueva mesa\" id=\"crearMesa\">
\t\t\t<label>altura</label>
\t\t\t<input type=\"int\" id=\"altura\" name=\"altura\">
\t\t\t<label>anchura</label>
\t\t\t<input type=\"int\" id=\"anchura\" name=\"anchura\">
\t\t\t<button id=\"anadir\" type=\"submit\">Añadir</button>
\t\t
\t";
        }
        // line 40
        echo "\t</div>
\t<div class=\"container\">


\t\t<div id=\"sala\" class=\"sala\"></div>

\t\t<div class=\"almacen\" id=\"almacen\"></div>

\t</div>
\t</div>
\t\t<div class=\"dialog\" title=\"Crear nueva Reserva\" id=\"crearReserva\">
\t\t<label for=\"idJuego\">Juego disponibles para la mesa</label>
\t\t<select id=\"idJuego\" name=\"idJuego\"></select>
\t\t<button id=\"reservar\" type=\"submit\">Reservar Mesa</button>
\t\t<input type=\"int\" id=\"idUser\" style=\"display:none\" disabled value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
\t</div>

\t

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 54,  104 => 40,  93 => 31,  91 => 30,  62 => 4,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<script>
    const filters = JSON.parse('{{ app.user.roles | json_encode | raw }}');
</script>
\t<div class=\"container\">
\t\t<h1>Reservas</h1>

\t\t<form>
\t\t\t<fieldset>
\t\t\t\t<label for=\"entrada\">Fecha de la reserva
\t\t\t\t</label>
\t\t\t\t<input type=\"text\" id=\"entrada\" name=\"entrada\"/>
\t\t\t</fieldset>
\t\t\t<fieldset id=\"horario\" style=\"display:none\">
\t\t\t\t<label for=\"horas\">Hora:</label>
\t\t\t\t<select name=\"horas\" id=\"horas\">
\t\t\t\t\t<option value=\"\" selected=\"selected\">Seleccione una hora</option>
\t\t\t\t\t<option value=\"10h\">10:00H</option>
\t\t\t\t\t<option value=\"11h\">11:00H</option>
\t\t\t\t\t<option value=\"12h\">12:00H</option>
\t\t\t\t\t<option value=\"13h\">13:00H</option>
\t\t\t\t\t<option value=\"16h\">16:00H</option>
\t\t\t\t\t<option value=\"17h\">17:00H</option>
\t\t\t\t\t<option value=\"18h\">18:00H</option>
\t\t\t\t</select>
\t\t\t</fieldset>
\t\t</form>
\t\t
\t\t{% if \"ROLE_ADMIN\" in app.user.roles %}
\t\t<button class=\"btn btn-primary mb-4\" id=\"agregar\">agregar</button>
\t\t<div class=\"dialog\" title=\"Crear nueva mesa\" id=\"crearMesa\">
\t\t\t<label>altura</label>
\t\t\t<input type=\"int\" id=\"altura\" name=\"altura\">
\t\t\t<label>anchura</label>
\t\t\t<input type=\"int\" id=\"anchura\" name=\"anchura\">
\t\t\t<button id=\"anadir\" type=\"submit\">Añadir</button>
\t\t
\t{% endif %}
\t</div>
\t<div class=\"container\">


\t\t<div id=\"sala\" class=\"sala\"></div>

\t\t<div class=\"almacen\" id=\"almacen\"></div>

\t</div>
\t</div>
\t\t<div class=\"dialog\" title=\"Crear nueva Reserva\" id=\"crearReserva\">
\t\t<label for=\"idJuego\">Juego disponibles para la mesa</label>
\t\t<select id=\"idJuego\" name=\"idJuego\"></select>
\t\t<button id=\"reservar\" type=\"submit\">Reservar Mesa</button>
\t\t<input type=\"int\" id=\"idUser\" style=\"display:none\" disabled value=\"{{app.user.id}}\">
\t</div>

\t

{% endblock %}
", "reservas/index.html.twig", "C:\\Users\\JoSePa\\Desktop\\2º DAW\\xokas_cia\\templates\\reservas\\index.html.twig");
    }
}
