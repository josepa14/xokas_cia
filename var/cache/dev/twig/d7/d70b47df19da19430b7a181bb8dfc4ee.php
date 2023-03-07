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

/* registration/register.html.twig */
class __TwigTemplate_50e0ca9fcc5cb28edec69f6734283f05 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Registro
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t
\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 8, $this->source); })()), 'form_start');
        echo "\t\t
\t<div class=\"container py-5 h-100\">
\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t<div class=\"col col-xl-10\">
\t\t\t\t<div class=\"card\" style=\"border-radius: 1rem;\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-5 d-none d-md-block\">
\t\t\t\t\t\t\t<img src=\"/assets/img/juegos/login.jpg\" alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem;\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
\t\t\t\t\t\t\t<div class=\"card-body p-4 p-lg-5 text-black bg-white\">

\t\t\t\t\t\t\t\t<form method=\"post\">

\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 pb-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cubes fa-2x me-3\" style=\"color: #ff6219;\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"h1 fw-bold mb-0\"><img src=\"/assets/img/diseno/logo.png\"/></span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h5 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Registro en el sitio</h5>

\t\t\t\t\t\t\t\t\t<div class=\"form-outline mb-4\">
\t\t\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-outline mb-4\">
\t\t\t\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-outline mb-4\">
\t\t\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), 'row', ["label" => "Password"]);
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "agreeTerms", [], "any", false, false, false, 40), 'row');
        echo "<button type=\"submit\" class=\"btn btn-warning p-2\">
\t\t\t\t\t\t\t\t\t\tRegistrar</button>
\t\t\t\t\t\t\t\t\t";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  121 => 40,  115 => 37,  109 => 34,  102 => 30,  77 => 8,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro
{% endblock %}

{% block body %}
\t
\t\t{{ form_start(registrationForm) }}\t\t
\t<div class=\"container py-5 h-100\">
\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t<div class=\"col col-xl-10\">
\t\t\t\t<div class=\"card\" style=\"border-radius: 1rem;\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-5 d-none d-md-block\">
\t\t\t\t\t\t\t<img src=\"/assets/img/juegos/login.jpg\" alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem;\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
\t\t\t\t\t\t\t<div class=\"card-body p-4 p-lg-5 text-black bg-white\">

\t\t\t\t\t\t\t\t<form method=\"post\">

\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 pb-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cubes fa-2x me-3\" style=\"color: #ff6219;\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"h1 fw-bold mb-0\"><img src=\"/assets/img/diseno/logo.png\"/></span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<h5 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Registro en el sitio</h5>

\t\t\t\t\t\t\t\t\t<div class=\"form-outline mb-4\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.username) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-outline mb-4\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.email) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-outline mb-4\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.plainPassword, {label: 'Password'}) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.agreeTerms) }}<button type=\"submit\" class=\"btn btn-warning p-2\">
\t\t\t\t\t\t\t\t\t\tRegistrar</button>
\t\t\t\t\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


{% endblock %}
", "registration/register.html.twig", "C:\\Users\\JoSePa\\Desktop\\2º DAW\\xokas_cia\\templates\\registration\\register.html.twig");
    }
}
