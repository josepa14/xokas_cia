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

/* juegos/edit.html.twig */
class __TwigTemplate_5947a5e64fe7c965a818ac874646fcf5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "juegos/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "juegos/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Juegos
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
        echo "\t<div class=\"container mb-4\">
\t\t\t<div class=\"row a\">
\t\t\t\t<h1>Agregar nuevo Juego</h1>
\t\t\t\t<div class=\"col-10 col-sm-6\">
\t\t\t\t\t";
        // line 11
        echo twig_include($this->env, $context, "juegos/_form.html.twig", ["button_label" => "Actualizar"]);
        echo "
\t\t\t\t\t";
        // line 12
        echo twig_include($this->env, $context, "juegos/_delete_form.html.twig");
        echo "
                    <a class=\"btn btn-warning\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juegos_index");
        echo "\">Volver a la lista</a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "juegos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 13,  84 => 12,  80 => 11,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Juegos
{% endblock %}

{% block body %}
\t<div class=\"container mb-4\">
\t\t\t<div class=\"row a\">
\t\t\t\t<h1>Agregar nuevo Juego</h1>
\t\t\t\t<div class=\"col-10 col-sm-6\">
\t\t\t\t\t{{ include('juegos/_form.html.twig', {'button_label': 'Actualizar'}) }}
\t\t\t\t\t{{ include('juegos/_delete_form.html.twig') }}
                    <a class=\"btn btn-warning\" href=\"{{ path('app_juegos_index') }}\">Volver a la lista</a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t</div>
{% endblock %}
", "juegos/edit.html.twig", "C:\\Users\\JoSePa\\Desktop\\2º DAW\\xokas_cia\\templates\\juegos\\edit.html.twig");
    }
}
