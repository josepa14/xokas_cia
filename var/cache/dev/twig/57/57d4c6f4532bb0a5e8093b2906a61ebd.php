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
";
        // line 5
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5)) {
            // line 6
            echo "<section class=\"pt-7\">
        <div class=\"container\">
          <div class=\"row align-items-center bg-white\" style=\"border-radius: 1rem;\">
            <div class=\"col-md-6 text-md-start text-center py-6 p-7\">
              <h1 class=\"mb-4 fs-9 fw-bold\">Xokas y cia proyect</h1>
              <p class=\"mb-6 lead text-secondary\">Diviertete con tus amigos jugando juegos de mesa, all<br class=\"d-none d-xl-block\" />y participando en nuestros eventos, tan solo<br class=\"d-none d-xl-block\" />registrate y empieza a disfrutar</p>
              <div class=\"text-center text-md-start\"><a class=\"btn btn-warning me-3 btn-lg p-3 text-white\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" role=\"button\">REGISTRO</a></div>
            </div>
            <div class=\"col-md-6 text-end\"><img class=\"pt-7 pt-md-0 img-fluid\" src=\"assets/img/juegos/juegosindex.jpg\" alt=\"\" /></div>
          </div>
        </div>
</section>
";
        }
        // line 19
        echo "  <div class=\"container\">
  <h1 class=\"fs-9 fw-bold mb-4 text-center\"> Algunos juegos <br class=\"d-none d-xl-block\">de nuestra coleccion</h1>
  <div class=\"row\">
            
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juegos"]) || array_key_exists("juegos", $context) ? $context["juegos"] : (function () { throw new RuntimeError('Variable "juegos" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["juego"]) {
            // line 24
            echo "
            <div class=\"shadow-sm col-lg-3 col-sm-6 mb-2 text-center\"> 
              <img class=\"mb-3 ms-n3\" src=\"/assets/img/juegos/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "imagen", [], "any", false, false, false, 26), "html", null, true);
            echo "\" width=\"75\" alt=\"Feature\" />
              <h4 class=\"mb-3\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "nombre", [], "any", false, false, false, 27), "html", null, true);
            echo "</h4>
              <p class=\"mb-0 fw-medium text-secondary\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "descripcion", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
              <p class=\"mb-0 fw-medium text-secondary\">Minimo de jugadores ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "minPlayers", [], "any", false, false, false, 29), "html", null, true);
            echo ", maximo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "maxPlayers", [], "any", false, false, false, 29), "html", null, true);
            echo " </p>
            </div>
            
          
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juego'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        <div class=\"text-center mt-2 mb-5\"><a class=\"btn btn-warning\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_index");
        echo "\" role=\"button\">Todos nuestros Juegos</a></div>
          </div>
          
  </div>
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
        return array (  122 => 35,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  92 => 24,  88 => 23,  82 => 19,  72 => 12,  64 => 6,  62 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}

{# PRESENTACION PARTE 1 SI NO ESTAS LOGEADO #}
{% if not app.user %}
<section class=\"pt-7\">
        <div class=\"container\">
          <div class=\"row align-items-center bg-white\" style=\"border-radius: 1rem;\">
            <div class=\"col-md-6 text-md-start text-center py-6 p-7\">
              <h1 class=\"mb-4 fs-9 fw-bold\">Xokas y cia proyect</h1>
              <p class=\"mb-6 lead text-secondary\">Diviertete con tus amigos jugando juegos de mesa, all<br class=\"d-none d-xl-block\" />y participando en nuestros eventos, tan solo<br class=\"d-none d-xl-block\" />registrate y empieza a disfrutar</p>
              <div class=\"text-center text-md-start\"><a class=\"btn btn-warning me-3 btn-lg p-3 text-white\" href=\"{{path('app_register')}}\" role=\"button\">REGISTRO</a></div>
            </div>
            <div class=\"col-md-6 text-end\"><img class=\"pt-7 pt-md-0 img-fluid\" src=\"assets/img/juegos/juegosindex.jpg\" alt=\"\" /></div>
          </div>
        </div>
</section>
{% endif %}
  <div class=\"container\">
  <h1 class=\"fs-9 fw-bold mb-4 text-center\"> Algunos juegos <br class=\"d-none d-xl-block\">de nuestra coleccion</h1>
  <div class=\"row\">
            
            {% for juego in juegos %}

            <div class=\"shadow-sm col-lg-3 col-sm-6 mb-2 text-center\"> 
              <img class=\"mb-3 ms-n3\" src=\"/assets/img/juegos/{{juego.imagen}}\" width=\"75\" alt=\"Feature\" />
              <h4 class=\"mb-3\">{{ juego.nombre }}</h4>
              <p class=\"mb-0 fw-medium text-secondary\">{{juego.descripcion}}</p>
              <p class=\"mb-0 fw-medium text-secondary\">Minimo de jugadores {{juego.minPlayers}}, maximo {{juego.maxPlayers}} </p>
            </div>
            
          
        
        {% endfor %}
        <div class=\"text-center mt-2 mb-5\"><a class=\"btn btn-warning\" href=\"{{path('app_juegos_index')}}\" role=\"button\">Todos nuestros Juegos</a></div>
          </div>
          
  </div>
{% endblock %}", "index.html.twig", "C:\\Users\\JoSePa\\Desktop\\2º DAW\\xokas_cia\\templates\\index.html.twig");
    }
}
