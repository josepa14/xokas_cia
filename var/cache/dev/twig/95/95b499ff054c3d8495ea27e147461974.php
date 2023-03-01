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
        echo " <h1>aaaa</h1> 
<button class=\"btn btn-primary\" id=\"agregar\">agregar</button>
        <div class=\"container\">
       
       
            <div id=\"sala\" class=\"sala\">
            </div>

            <div class=\"almacen\" id=\"almacen\">
            </div>

        </div>
        <div class=\"dialog\" title=\"Crear nueva mesa\">
            <label>altura</label>
            <input type=\"int\" id=\"altura\" name=\"altura\">
            <label>anchura</label>
            <input type=\"int\" id=\"anchura\" name=\"anchura\">
            <button id=\"anadir\" type=\"submit\">Añadir</button>
        </div>

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
        return array (  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
 <h1>aaaa</h1> 
<button class=\"btn btn-primary\" id=\"agregar\">agregar</button>
        <div class=\"container\">
       
       
            <div id=\"sala\" class=\"sala\">
            </div>

            <div class=\"almacen\" id=\"almacen\">
            </div>

        </div>
        <div class=\"dialog\" title=\"Crear nueva mesa\">
            <label>altura</label>
            <input type=\"int\" id=\"altura\" name=\"altura\">
            <label>anchura</label>
            <input type=\"int\" id=\"anchura\" name=\"anchura\">
            <button id=\"anadir\" type=\"submit\">Añadir</button>
        </div>

{% endblock %}
", "reservas/index.html.twig", "C:\\Users\\JoSePa\\Desktop\\2º DAW\\xokas_cia\\templates\\reservas\\index.html.twig");
    }
}
