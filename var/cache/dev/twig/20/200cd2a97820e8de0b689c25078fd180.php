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

/* base.html.twig */
class __TwigTemplate_f72a80db8f2b689ddaaf1503c949f75d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 12
        echo "\t\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/assets/img/favicons/apple-touch-icon.png\">
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/img/favicons/favicon.png\">
\t\t<link rel=\"manifest\" href=\"assets/img/favicons/manifest.json\">
\t\t<meta name=\"msapplication-TileImage\" content=\"assets/img/favicons/mstile-150x150.png\">
\t\t<meta name=\"theme-color\" content=\"#ffffff\">
\t\t";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
\t\t";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "\t</head>


\t<body class=\"d-flex flex-column min-vh-100\">

\t\t<nav class=\"bg-img-title navbar navbar-expand-lg navbar-light sticky-top bg-warning pt-3 pb-3\" data-navbar-on-scroll=\"data-navbar-on-scroll\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"/assets/img/diseno/logo.png\" height=\"36\" alt=\"logo\"/></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse border-lg-0 mt-4 mt-lg-0\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Inicio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_index");
        echo "\">Juegos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#superhero\">Eventos</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62)) {
            // line 63
            echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\tAcciones
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservas");
            echo "\">Reservar</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_misreservas", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">Mis Reservas</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Mi perfil</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<b>Logout</b>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"d-flex ms-lg-4\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "userIdentifier", [], "any", false, false, false, 94), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        } else {
            // line 98
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"d-flex ms-lg-4\">
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-outline-light\" href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login<i class=\"fa-thin fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-warning ms-3\" href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registro</a>
\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t";
        // line 109
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "
\t\t";
        // line 112
        echo "
\t\t<footer
\t\t\tclass=\"bg-black text-center text-lg-start text-white\">
\t\t\t<!-- Grid container -->
\t\t\t<div
\t\t\t\tclass=\"container p-4\">
\t\t\t\t<!--Grid row-->
\t\t\t\t<div
\t\t\t\t\tclass=\"row my-4\">
\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">

\t\t\t\t\t\t<div class=\"rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto\" style=\"width: 250px; height: 150px;\">
\t\t\t\t\t\t\t<img src=\"/assets/img/diseno/logo.png\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p class=\"text-center\">Proyecto de Desarrollo de Aplicaciones Web</p>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-lg-flex col-lg-1 d-none\" style=\"height: 200px;\">
\t\t\t\t\t\t<div class=\"vr\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--Grid column-->


\t\t\t\t\t<!--Grid column-->
\t\t\t\t
\t\t\t\t\t<!--Grid column-->

\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t\t<h5 class=\"text-uppercase text-white mb-4\">Contacto</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt pe-2\"></i>Avenida Arjona Jaen,23005</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-phone pe-2\"></i>+ 01 234 567 89</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope pe-2 mb-0\"></i>jcasper2112@g.educaand.es</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t\t<h5 class=\"text-uppercase text-white mb-4\">Xokas Cia</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paw pe-3\"></i>Inicio</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paw pe-3\"></i>Contacto</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_index");
        echo "\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paw pe-3\"></i>Juegos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--Grid row-->
\t\t\t</div>
\t\t\t<!-- Grid container -->
\t\t</footer>


\t</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/jquery-ui.css\" type=\"text/css\" media=\"screen\" title=\"no title\" charset=\"utf-8\">
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/jquery-ui.structure.css\" type=\"text/css\" media=\"screen\" title=\"no title\" charset=\"utf-8\">
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/jquery-ui.theme.css\" type=\"text/css\" media=\"screen\" title=\"no title\" charset=\"utf-8\">
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/jquery.toast.css\"/>
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/theme.css\"/>
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/propio.css\"/>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "\t\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.js\" integrity=\"sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=\" crossorigin=\"anonymous\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/assets/js/jquery-ui.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"/assets/js/jquery.toast.js\"></script>
\t\t\t<script src=\"/assets/js/reservas.js\"></script>
\t\t\t<script src=\"/assets/js/mesa.js\"></script>
\t\t\t<script src=\"/assets/js/zonaReservas.js\"></script>


\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 109
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 109,  316 => 29,  309 => 28,  294 => 18,  287 => 17,  273 => 6,  250 => 174,  239 => 166,  183 => 112,  180 => 110,  177 => 109,  171 => 104,  166 => 102,  161 => 100,  157 => 98,  150 => 94,  136 => 83,  124 => 74,  118 => 71,  108 => 63,  106 => 62,  97 => 56,  91 => 53,  81 => 46,  72 => 39,  70 => 28,  67 => 27,  65 => 17,  58 => 12,  53 => 8,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
\t\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/assets/img/favicons/apple-touch-icon.png\">
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/img/favicons/favicon.png\">
\t\t<link rel=\"manifest\" href=\"assets/img/favicons/manifest.json\">
\t\t<meta name=\"msapplication-TileImage\" content=\"assets/img/favicons/mstile-150x150.png\">
\t\t<meta name=\"theme-color\" content=\"#ffffff\">
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/jquery-ui.css\" type=\"text/css\" media=\"screen\" title=\"no title\" charset=\"utf-8\">
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/jquery-ui.structure.css\" type=\"text/css\" media=\"screen\" title=\"no title\" charset=\"utf-8\">
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/jquery-ui.theme.css\" type=\"text/css\" media=\"screen\" title=\"no title\" charset=\"utf-8\">
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/jquery.toast.css\"/>
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/theme.css\"/>
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/propio.css\"/>
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.js\" integrity=\"sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=\" crossorigin=\"anonymous\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/assets/js/jquery-ui.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"/assets/js/jquery.toast.js\"></script>
\t\t\t<script src=\"/assets/js/reservas.js\"></script>
\t\t\t<script src=\"/assets/js/mesa.js\"></script>
\t\t\t<script src=\"/assets/js/zonaReservas.js\"></script>


\t\t{% endblock %}
\t</head>


\t<body class=\"d-flex flex-column min-vh-100\">

\t\t<nav class=\"bg-img-title navbar navbar-expand-lg navbar-light sticky-top bg-warning pt-3 pb-3\" data-navbar-on-scroll=\"data-navbar-on-scroll\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{path('index')}}\"><img src=\"/assets/img/diseno/logo.png\" height=\"36\" alt=\"logo\"/></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse border-lg-0 mt-4 mt-lg-0\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"{{path('index')}}\">Inicio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"{{path('app_juegos_index')}}\">Juegos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#superhero\">Eventos</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\tAcciones
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_reservas') }}\">Reservar</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_misreservas', {'id':app.user.id}) }}\">Mis Reservas</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Mi perfil</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<b>Logout</b>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"d-flex ms-lg-4\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t{{ app.user.userIdentifier }},
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"d-flex ms-lg-4\">
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-outline-light\" href=\"{{path('app_login')}}\">Login<i class=\"fa-thin fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-warning ms-3\" href=\"{{path('app_register')}}\">Registro</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t{#FIN  BARRA NAVEGACION ------------------------------------------------------------------------------------------------------------------------------------------ #}
\t\t{% block body %}{% endblock %}

\t\t{# FOOTER ------------------------------------------------------------------------------------------------------------------------------------------ #}

\t\t<footer
\t\t\tclass=\"bg-black text-center text-lg-start text-white\">
\t\t\t<!-- Grid container -->
\t\t\t<div
\t\t\t\tclass=\"container p-4\">
\t\t\t\t<!--Grid row-->
\t\t\t\t<div
\t\t\t\t\tclass=\"row my-4\">
\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t<div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">

\t\t\t\t\t\t<div class=\"rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto\" style=\"width: 250px; height: 150px;\">
\t\t\t\t\t\t\t<img src=\"/assets/img/diseno/logo.png\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p class=\"text-center\">Proyecto de Desarrollo de Aplicaciones Web</p>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-lg-flex col-lg-1 d-none\" style=\"height: 200px;\">
\t\t\t\t\t\t<div class=\"vr\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--Grid column-->


\t\t\t\t\t<!--Grid column-->
\t\t\t\t
\t\t\t\t\t<!--Grid column-->

\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t\t<h5 class=\"text-uppercase text-white mb-4\">Contacto</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt pe-2\"></i>Avenida Arjona Jaen,23005</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-phone pe-2\"></i>+ 01 234 567 89</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope pe-2 mb-0\"></i>jcasper2112@g.educaand.es</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t\t<h5 class=\"text-uppercase text-white mb-4\">Xokas Cia</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t<a href=\"{{path('index')}}\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paw pe-3\"></i>Inicio</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paw pe-3\"></i>Contacto</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t<a href=\"{{path('app_juegos_index')}}\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paw pe-3\"></i>Juegos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--Grid row-->
\t\t\t</div>
\t\t\t<!-- Grid container -->
\t\t</footer>


\t</body>

</html>
", "base.html.twig", "C:\\Users\\JoSePa\\Desktop\\2º DAW\\xokas_cia\\templates\\base.html.twig");
    }
}
