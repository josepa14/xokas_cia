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
            echo "\t\t<section class=\"pt-7\">
\t\t\t<div class=\"container\">
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
        echo "\t<div class=\"container\">
\t\t<h1 class=\"fs-9 fw-bold mb-4 text-center\">
\t\t\tAlgunos juegos
\t\t\t<br class=\"d-none d-xl-block\">de nuestra coleccion</h1>
\t\t<div class=\"row\">

\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juegos"]) || array_key_exists("juegos", $context) ? $context["juegos"] : (function () { throw new RuntimeError('Variable "juegos" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["juego"]) {
            // line 28
            echo "
\t\t\t\t<div class=\"shadow-sm col-lg-3 col-sm-6 mb-2 text-center\">
\t\t\t\t\t<img class=\"mb-3 ms-n3\" src=\"/assets/img/juegos/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "imagen", [], "any", false, false, false, 30), "html", null, true);
            echo "\" width=\"75\" alt=\"Feature\"/>
\t\t\t\t\t<h4 class=\"mb-3\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "nombre", [], "any", false, false, false, 31), "html", null, true);
            echo "</h4>
\t\t\t\t\t<p class=\"mb-0 fw-medium text-secondary\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "descripcion", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
\t\t\t\t\t<p class=\"mb-0 fw-medium text-secondary\">Minimo de jugadores
\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "minPlayers", [], "any", false, false, false, 34), "html", null, true);
            echo ", maximo
\t\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "maxPlayers", [], "any", false, false, false, 35), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
        ";
            // line 39
            echo "        <div class=\"col-md-6 col-lg-4 mb-5\">
                        <div class=\"portfolio-item mx-auto\" data-toggle=\"modal\" data-target=\"#portfolioModal0\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div><img class=\"img-fluid\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "imagen", [], "any", false, false, false, 43), "html", null, true);
            echo "\" alt=\"Monopoly\"/>
                        </div>
                    </div>
        ";
            // line 47
            echo "\t\t\t\t<div class=\"portfolio-modal modal fade\" id=\"portfolioModal0\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"#portfolioModal0Label\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"modal-dialog modal-xl\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"modal-body text-center\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Portfolio Modal - Title-->
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"portfolio-modal-title text-secondary mb-0\">Monopoly</h2>
\t\t\t\t\t\t\t\t\t\t\t<!-- Icon Divider-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"divider-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"divider-custom-line\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"divider-custom-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"divider-custom-line\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Portfolio Modal - Image-->
\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-fluid rounded mb-5\" src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/monopoly.jpg"), "html", null, true);
            echo "\" alt=\"Monopoly\"/>
\t\t\t\t\t\t\t\t\t\t\t<!-- Portfolio Modal - Text-->
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-5\"></p>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" href=\"#\" data-dismiss=\"modal\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times fa-fw\"></i>Close Window</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
        ";
            // line 85
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juego'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t<div class=\"text-center mt-2 mb-5\">
\t\t\t\t<a class=\"btn btn-warning\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_index");
        echo "\" role=\"button\">Todos nuestros Juegos</a>
\t\t\t</div>
\t\t</div>

\t</div>
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
        return array (  188 => 88,  185 => 87,  178 => 85,  163 => 72,  136 => 47,  130 => 43,  124 => 39,  118 => 35,  114 => 34,  109 => 32,  105 => 31,  101 => 30,  97 => 28,  93 => 27,  85 => 21,  74 => 13,  65 => 6,  62 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}

\t{# PRESENTACION PARTE 1 SI NO ESTAS LOGEADO #}
\t{% if not app.user %}
\t\t<section class=\"pt-7\">
\t\t\t<div class=\"container\">
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
\t<div class=\"container\">
\t\t<h1 class=\"fs-9 fw-bold mb-4 text-center\">
\t\t\tAlgunos juegos
\t\t\t<br class=\"d-none d-xl-block\">de nuestra coleccion</h1>
\t\t<div class=\"row\">

\t\t\t{% for juego in juegos %}

\t\t\t\t<div class=\"shadow-sm col-lg-3 col-sm-6 mb-2 text-center\">
\t\t\t\t\t<img class=\"mb-3 ms-n3\" src=\"/assets/img/juegos/{{juego.imagen}}\" width=\"75\" alt=\"Feature\"/>
\t\t\t\t\t<h4 class=\"mb-3\">{{ juego.nombre }}</h4>
\t\t\t\t\t<p class=\"mb-0 fw-medium text-secondary\">{{juego.descripcion}}</p>
\t\t\t\t\t<p class=\"mb-0 fw-medium text-secondary\">Minimo de jugadores
\t\t\t\t\t\t{{juego.minPlayers}}, maximo
\t\t\t\t\t\t{{juego.maxPlayers}}
\t\t\t\t\t</p>
\t\t\t\t</div>
        {# ESTE ES EL INDEX DEL MODAL #}
        <div class=\"col-md-6 col-lg-4 mb-5\">
                        <div class=\"portfolio-item mx-auto\" data-toggle=\"modal\" data-target=\"#portfolioModal0\">
                            <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                                <div class=\"portfolio-item-caption-content text-center text-white\"><i class=\"fas fa-plus fa-3x\"></i></div>
                            </div><img class=\"img-fluid\" src=\"{{juego.imagen}}\" alt=\"Monopoly\"/>
                        </div>
                    </div>
        {# ESTE ES EL MODAL QUE SE ABRE #}
\t\t\t\t<div class=\"portfolio-modal modal fade\" id=\"portfolioModal0\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"#portfolioModal0Label\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"modal-dialog modal-xl\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"modal-body text-center\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Portfolio Modal - Title-->
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"portfolio-modal-title text-secondary mb-0\">Monopoly</h2>
\t\t\t\t\t\t\t\t\t\t\t<!-- Icon Divider-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"divider-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"divider-custom-line\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"divider-custom-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"divider-custom-line\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Portfolio Modal - Image-->
\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-fluid rounded mb-5\" src=\"{{ asset('/img/monopoly.jpg') }}\" alt=\"Monopoly\"/>
\t\t\t\t\t\t\t\t\t\t\t<!-- Portfolio Modal - Text-->
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-5\"></p>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" href=\"#\" data-dismiss=\"modal\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times fa-fw\"></i>Close Window</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
        {# ESTE ES EL FIN DEL MODAL #}

\t\t\t{% endfor %}
\t\t\t<div class=\"text-center mt-2 mb-5\">
\t\t\t\t<a class=\"btn btn-warning\" href=\"{{path('app_juegos_index')}}\" role=\"button\">Todos nuestros Juegos</a>
\t\t\t</div>
\t\t</div>

\t</div>
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\training\\15.Symfony\\xokas_cia\\templates\\index.html.twig");
    }
}
