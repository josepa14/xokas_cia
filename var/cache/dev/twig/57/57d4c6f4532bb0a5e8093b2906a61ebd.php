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

/* index.html.twig */
class __TwigTemplate_1a00b1a3ee435bff0853cca438ba9fdb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        echo "
\t";
        // line 5
        echo "\t";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5)) {
            // line 6
            echo "\t\t<section class=\"pt-7 container\">
\t\t\t<div class=\"container shadow g--transicion\">
\t\t\t\t<div class=\"row align-items-center bg-white\" style=\"border-radius: 1rem;\">
\t\t\t\t\t<div class=\"col-md-6 text-md-start text-center py-6 p-7\">
\t\t\t\t\t\t<h1 class=\"mb-4 fs-9 fw-bold\">Xokas y cia proyect</h1>
\t\t\t\t\t\t<p class=\"mb-6 lead text-secondary\">Diviertete con tus amigos jugando juegos de mesa, all<br class=\"d-none d-xl-block\"/>y participando en nuestros eventos, tan solo<br class=\"d-none d-xl-block\"/>registrate y empieza a disfrutar</p>
\t\t\t\t\t\t<div class=\"text-center text-md-start\">
\t\t\t\t\t\t\t<a class=\"btn btn-warning me-3 btn-lg p-3 text-white\" href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" role=\"button\">REGISTRO</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 text-end\"><img class=\"pt-7 pt-md-0 img-fluid\" src=\"assets/img/juegos/juegosindex.jpg\" alt=\"\"/></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
        }
        // line 21
        echo "\t<section class=\"pt-5\">

        <div class=\"container\">
          <div class=\"row g--transicion2\">
            <div class=\"col-lg-6\"><img class=\"img-fluid\" src=\"assets/img/manager/manager.png\" alt=\"\"></div>
            <div class=\"col-lg-6\">
              <p class=\"fs-7 fw-bold mt-5\">Participa en nuestros eventos!</p>
              <p class=\"mb-4 fw-medium text-secondary\">
                En Xokas cia organizamos competiciones y quedadas para dar a conocer el mundo de los juegos de Mesa, no lo dudes y participa! <br> Ademas tienes ventajas:
              </p>
              <div class=\"d-flex align-items-center mb-3\"> <img class=\"me-sm-4 me-2\" src=\"assets/img/manager/tick.png\" width=\"35\" alt=\"tick\">
                <p class=\"fw-medium mb-0 text-secondary\">Probabilidad de conseguir premios</p>
              </div>
              <div class=\"d-flex align-items-center mb-3\"> <img class=\"me-sm-4 me-2\" src=\"assets/img/manager/tick.png\" width=\"35\" alt=\"tick\">
                <p class=\"fw-medium mb-0 text-secondary\">Aumentar tu puntuacion final</p>
              </div>
              <div class=\"d-flex align-items-center mb-3\"><img class=\"me-sm-4 me-2\" src=\"assets/img/manager/tick.png\" width=\"35\" alt=\"tick\">
                <p class=\"fw-medium mb-0 text-secondary\">Y la mas importante, estar al tanto de las ultimas novedades</p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

    </section>
\t<section>
\t<div class=\"container g--transicion2\">
\t\t<h1 class=\"fs-9 fw-bold mb-4 text-center\">
\t\t\tAlgunos juegos
\t\t\t<br class=\"d-none d-xl-block\">de nuestra coleccion</h1>
\t\t<div class=\"row \">

\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juegos"]) || array_key_exists("juegos", $context) ? $context["juegos"] : (function () { throw new RuntimeError('Variable "juegos" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["juego"]) {
            // line 53
            echo "
\t\t\t\t<div class=\" col-lg-3 col-sm-6 mb-2 mt-3 text-center flip-card rounded\">
\t\t\t\t\t<div class=\"flip-card-inner shadow-lg rounded\">
\t\t\t\t\t\t<div class=\"flip-card-front pt-3 g--fondo-semi rounded\">
\t\t\t\t\t\t\t<img class=\"mb-3 ms-n3\" src=\"/assets/img/juegos/";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "imagen", [], "any", false, false, false, 57), "html", null, true);
            echo "\" width=\"75\" alt=\"Feature\"/>
\t\t\t\t\t\t\t<h4 class=\"mb-3\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "nombre", [], "any", false, false, false, 58), "html", null, true);
            echo "</h4>

\t\t\t\t\t\t\t<p class=\"mb-0 fw-medium text-secondary\">Minimo de jugadores
\t\t\t\t\t\t\t\t";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "minPlayers", [], "any", false, false, false, 61), "html", null, true);
            echo ", maximo
\t\t\t\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "maxPlayers", [], "any", false, false, false, 62), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back g--fondo-semi rounded\">
\t\t\t\t\t\t<p class=\"mb-0 fw-medium text-secondary pt-6\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "descripcion", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 72
            echo "
\t\t\t\t";
            // line 74
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juego'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t<div class=\"text-center mt-2 mb-5\">
\t\t\t\t<a class=\"btn btn-warning g--transicion3\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_index");
        echo "\" role=\"button\">Todos nuestros Juegos</a>
\t\t\t</div>
\t\t</div>

\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 77,  167 => 76,  160 => 74,  157 => 72,  149 => 66,  142 => 62,  138 => 61,  132 => 58,  128 => 57,  122 => 53,  118 => 52,  85 => 21,  74 => 13,  65 => 6,  62 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}

\t{# PRESENTACION PARTE 1 SI NO ESTAS LOGEADO #}
\t{% if not app.user %}
\t\t<section class=\"pt-7 container\">
\t\t\t<div class=\"container shadow g--transicion\">
\t\t\t\t<div class=\"row align-items-center bg-white\" style=\"border-radius: 1rem;\">
\t\t\t\t\t<div class=\"col-md-6 text-md-start text-center py-6 p-7\">
\t\t\t\t\t\t<h1 class=\"mb-4 fs-9 fw-bold\">Xokas y cia proyect</h1>
\t\t\t\t\t\t<p class=\"mb-6 lead text-secondary\">Diviertete con tus amigos jugando juegos de mesa, all<br class=\"d-none d-xl-block\"/>y participando en nuestros eventos, tan solo<br class=\"d-none d-xl-block\"/>registrate y empieza a disfrutar</p>
\t\t\t\t\t\t<div class=\"text-center text-md-start\">
\t\t\t\t\t\t\t<a class=\"btn btn-warning me-3 btn-lg p-3 text-white\" href=\"{{path('app_register')}}\" role=\"button\">REGISTRO</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 text-end\"><img class=\"pt-7 pt-md-0 img-fluid\" src=\"assets/img/juegos/juegosindex.jpg\" alt=\"\"/></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t{% endif %}
\t<section class=\"pt-5\">

        <div class=\"container\">
          <div class=\"row g--transicion2\">
            <div class=\"col-lg-6\"><img class=\"img-fluid\" src=\"assets/img/manager/manager.png\" alt=\"\"></div>
            <div class=\"col-lg-6\">
              <p class=\"fs-7 fw-bold mt-5\">Participa en nuestros eventos!</p>
              <p class=\"mb-4 fw-medium text-secondary\">
                En Xokas cia organizamos competiciones y quedadas para dar a conocer el mundo de los juegos de Mesa, no lo dudes y participa! <br> Ademas tienes ventajas:
              </p>
              <div class=\"d-flex align-items-center mb-3\"> <img class=\"me-sm-4 me-2\" src=\"assets/img/manager/tick.png\" width=\"35\" alt=\"tick\">
                <p class=\"fw-medium mb-0 text-secondary\">Probabilidad de conseguir premios</p>
              </div>
              <div class=\"d-flex align-items-center mb-3\"> <img class=\"me-sm-4 me-2\" src=\"assets/img/manager/tick.png\" width=\"35\" alt=\"tick\">
                <p class=\"fw-medium mb-0 text-secondary\">Aumentar tu puntuacion final</p>
              </div>
              <div class=\"d-flex align-items-center mb-3\"><img class=\"me-sm-4 me-2\" src=\"assets/img/manager/tick.png\" width=\"35\" alt=\"tick\">
                <p class=\"fw-medium mb-0 text-secondary\">Y la mas importante, estar al tanto de las ultimas novedades</p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

    </section>
\t<section>
\t<div class=\"container g--transicion2\">
\t\t<h1 class=\"fs-9 fw-bold mb-4 text-center\">
\t\t\tAlgunos juegos
\t\t\t<br class=\"d-none d-xl-block\">de nuestra coleccion</h1>
\t\t<div class=\"row \">

\t\t\t{% for juego in juegos %}

\t\t\t\t<div class=\" col-lg-3 col-sm-6 mb-2 mt-3 text-center flip-card rounded\">
\t\t\t\t\t<div class=\"flip-card-inner shadow-lg rounded\">
\t\t\t\t\t\t<div class=\"flip-card-front pt-3 g--fondo-semi rounded\">
\t\t\t\t\t\t\t<img class=\"mb-3 ms-n3\" src=\"/assets/img/juegos/{{juego.imagen}}\" width=\"75\" alt=\"Feature\"/>
\t\t\t\t\t\t\t<h4 class=\"mb-3\">{{ juego.nombre }}</h4>

\t\t\t\t\t\t\t<p class=\"mb-0 fw-medium text-secondary\">Minimo de jugadores
\t\t\t\t\t\t\t\t{{juego.minPlayers}}, maximo
\t\t\t\t\t\t\t\t{{juego.maxPlayers}}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back g--fondo-semi rounded\">
\t\t\t\t\t\t<p class=\"mb-0 fw-medium text-secondary pt-6\">{{juego.descripcion}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t{# ESTE ES EL INDEX DEL MODAL #}

\t\t\t\t{# ESTE ES EL FIN DEL MODAL #}

\t\t\t{% endfor %}
\t\t\t<div class=\"text-center mt-2 mb-5\">
\t\t\t\t<a class=\"btn btn-warning g--transicion3\" href=\"{{path('app_juegos_index')}}\" role=\"button\">Todos nuestros Juegos</a>
\t\t\t</div>
\t\t</div>

\t</div>
\t</section>
{% endblock %}
", "index.html.twig", "C:\\Users\\JoSePa\\Desktop\\2º DAW\\xokas_cia\\templates\\index.html.twig");
    }
}
