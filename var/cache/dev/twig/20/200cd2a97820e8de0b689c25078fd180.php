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
        // line 20
        echo "
\t\t";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "\t</head>
\t<header>
\t\t<nav class=\"navbar navbar-expand-lg navbar-light sticky-top bg-warning\" data-navbar-on-scroll=\"data-navbar-on-scroll\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"assets/img/logo.svg\" height=\"31\" alt=\"logo\"/></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0\" id=\"navbarSupportedContent\">
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
\t\t\t\t\t";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "        \t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
            \t\t\t";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "userIdentifier", [], "any", false, false, false, 51), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        \t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\t\t\t<a class=\"btn btn-secondary-outline\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
\t\t\t\t\t\t<a class=\"btn btn-warning ms-3\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registro</a>
\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>

\t<body>
\t\t";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "\t</body>
\t<footer></footer>
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
        echo "\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/theme.css\"/>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t <script src=\"vendors/bootstrap/bootstrap.min.js\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 65
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
        return array (  191 => 65,  183 => 22,  176 => 21,  168 => 18,  161 => 17,  147 => 6,  137 => 66,  135 => 65,  126 => 58,  121 => 56,  116 => 55,  107 => 51,  103 => 49,  101 => 48,  78 => 28,  72 => 24,  70 => 21,  67 => 20,  65 => 17,  58 => 12,  53 => 8,  51 => 6,  44 => 1,);
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
\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/theme.css\"/>
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t <script src=\"vendors/bootstrap/bootstrap.min.js\"></script>
\t\t{% endblock %}
\t</head>
\t<header>
\t\t<nav class=\"navbar navbar-expand-lg navbar-light sticky-top bg-warning\" data-navbar-on-scroll=\"data-navbar-on-scroll\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{path('index')}}\"><img src=\"assets/img/logo.svg\" height=\"31\" alt=\"logo\"/></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0\" id=\"navbarSupportedContent\">
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
\t\t\t\t\t{% if app.user %}
        \t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
            \t\t\t{{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        \t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a class=\"btn btn-secondary-outline\" href=\"{{path('app_login')}}\">Login</a>
\t\t\t\t\t\t<a class=\"btn btn-warning ms-3\" href=\"{{path('app_register')}}\">Registro</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>

\t<body>
\t\t{% block body %}{% endblock %}
\t</body>
\t<footer></footer>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\training\\15.Symfony\\xokas_cia\\templates\\base.html.twig");
    }
}
