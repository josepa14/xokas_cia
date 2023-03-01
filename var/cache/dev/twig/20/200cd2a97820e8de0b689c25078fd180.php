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
        // line 25
        echo "
\t\t";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "\t</head>

\t";
        // line 37
        echo "

\t<body class=\"d-flex flex-column min-vh-150\">

\t\t<nav class=\"bg-img-title navbar navbar-expand-lg navbar-light sticky-top bg-warning pt-3 pb-3\" data-navbar-on-scroll=\"data-navbar-on-scroll\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"/assets/img/diseno/logo.png\" height=\"36\" alt=\"logo\"/></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse border-lg-0 mt-4 mt-lg-0\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#feature\">Product</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#validation\">Customers</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#superhero\">Pricing</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#marketing\">Resources</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"d-flex ms-lg-4\">
\t\t\t\t\t\t";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "\t\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "userIdentifier", [], "any", false, false, false, 66), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-outline-light\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-warning ms-3\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registro</a>
\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t";
        // line 79
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "
\t\t";
        // line 82
        echo "
\t\t<footer class=\"bg-dark text-center text-lg-start text-white mt-auto\">
\t\t\t<!-- Grid container -->
\t\t\t<div
\t\t\t\tclass=\"container p-4\">
\t\t\t\t<!--Grid row-->
\t\t\t\t<div
\t\t\t\t\tclass=\"row mt-4\">
\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t\t<h5 class=\"text-uppercase\">See other books</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-book fa-fw fa-sm me-2\"></i>Bestsellers</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-book fa-fw fa-sm me-2\"></i>All books</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-edit fa-fw fa-sm me-2\"></i>Our authors</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!--Grid column-->

\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t\t<h5 class=\"text-uppercase\">Execution of the contract</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-shipping-fast fa-fw fa-sm me-2\"></i>Supply</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-backspace fa-fw fa-sm me-2\"></i>Returns</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-file-alt fa-fw fa-sm me-2\"></i>Regulations</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-file-alt fa-fw fa-sm me-2\"></i>Privacy policy</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!--Grid column-->

\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t\t<h5 class=\"text-uppercase\">Publishing house</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">The BookStore</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">123 Street</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">05765 NY</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-briefcase fa-fw fa-sm me-2\"></i>Send us a book</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!--Grid column-->

\t\t\t\t</div>
\t\t\t\t<!--Grid row-->
\t\t\t</div>


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
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/theme.css\"/>
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/propio.css\"/>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "\t\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.js\" integrity=\"sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=\" crossorigin=\"anonymous\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/assets/js/jquery-ui.js\"></script>
\t\t\t<script src=\"/vendors/bootstrap/bootstrap.min.js\"></script>
\t\t\t<script src=\"/assets/js/mesa.js\"></script>
\t\t\t<script src=\"/assets/js/zonaReservas.js\"></script>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 79
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
        return array (  294 => 79,  281 => 27,  274 => 26,  261 => 18,  254 => 17,  240 => 6,  146 => 82,  143 => 80,  140 => 79,  134 => 74,  129 => 72,  124 => 71,  117 => 67,  113 => 66,  109 => 64,  107 => 63,  84 => 43,  76 => 37,  72 => 34,  70 => 26,  67 => 25,  65 => 17,  58 => 12,  53 => 8,  51 => 6,  44 => 1,);
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
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/theme.css\"/>
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/propio.css\"/>
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.js\" integrity=\"sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=\" crossorigin=\"anonymous\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/assets/js/jquery-ui.js\"></script>
\t\t\t<script src=\"/vendors/bootstrap/bootstrap.min.js\"></script>
\t\t\t<script src=\"/assets/js/mesa.js\"></script>
\t\t\t<script src=\"/assets/js/zonaReservas.js\"></script>

\t\t{% endblock %}
\t</head>

\t{# de pruebas arriba #}


\t<body class=\"d-flex flex-column min-vh-150\">

\t\t<nav class=\"bg-img-title navbar navbar-expand-lg navbar-light sticky-top bg-warning pt-3 pb-3\" data-navbar-on-scroll=\"data-navbar-on-scroll\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{path('index')}}\"><img src=\"/assets/img/diseno/logo.png\" height=\"36\" alt=\"logo\"/></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse border-lg-0 mt-4 mt-lg-0\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#feature\">Product</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#validation\">Customers</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#superhero\">Pricing</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#marketing\">Resources</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"d-flex ms-lg-4\">
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t{{ app.user.userIdentifier }},
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-outline-light\" href=\"{{path('app_login')}}\">Login</a>
\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-warning ms-3\" href=\"{{path('app_register')}}\">Registro</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t{#FIN  BARRA NAVEGACION ------------------------------------------------------------------------------------------------------------------------------------------ #}
\t\t{% block body %}{% endblock %}

\t\t{# FOOTER ------------------------------------------------------------------------------------------------------------------------------------------ #}

\t\t<footer class=\"bg-dark text-center text-lg-start text-white mt-auto\">
\t\t\t<!-- Grid container -->
\t\t\t<div
\t\t\t\tclass=\"container p-4\">
\t\t\t\t<!--Grid row-->
\t\t\t\t<div
\t\t\t\t\tclass=\"row mt-4\">
\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t\t<h5 class=\"text-uppercase\">See other books</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-book fa-fw fa-sm me-2\"></i>Bestsellers</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-book fa-fw fa-sm me-2\"></i>All books</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-edit fa-fw fa-sm me-2\"></i>Our authors</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!--Grid column-->

\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t\t<h5 class=\"text-uppercase\">Execution of the contract</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-shipping-fast fa-fw fa-sm me-2\"></i>Supply</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-backspace fa-fw fa-sm me-2\"></i>Returns</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-file-alt fa-fw fa-sm me-2\"></i>Regulations</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-file-alt fa-fw fa-sm me-2\"></i>Privacy policy</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!--Grid column-->

\t\t\t\t\t<!--Grid column-->
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
\t\t\t\t\t\t<h5 class=\"text-uppercase\">Publishing house</h5>

\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">The BookStore</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">123 Street</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">05765 NY</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-white\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-briefcase fa-fw fa-sm me-2\"></i>Send us a book</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!--Grid column-->

\t\t\t\t</div>
\t\t\t\t<!--Grid row-->
\t\t\t</div>


\t\t</footer>


\t</body>

</html>
", "base.html.twig", "C:\\Users\\JoSePa\\Desktop\\2º DAW\\xokas_cia\\templates\\base.html.twig");
    }
}
