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

/* security/login.html.twig */
class __TwigTemplate_44b7fcd53a35c9dd4efd62a86c7607f0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    

    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "        <div class=\"container mt-1 h5\">
            Ya te encuentras logeado como ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "userIdentifier", [], "any", false, false, false, 10), "html", null, true);
            echo ", desconectate <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><b>AQUI</b></a>
        </div>
    ";
        }
        // line 13
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "    <section class=\"\" style=\"\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col col-xl-10\">
        <div class=\"card\" style=\"border-radius: 1rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-6 col-lg-5 d-none d-md-block\">
              <img src=\"/assets/img/juegos/login.jpg\"
                alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem;\" />
            </div>
            <div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
              <div class=\"card-body p-4 p-lg-5 text-black bg-white\">

                <form method=\"post\">

                  <div class=\"d-flex align-items-center mb-3 pb-1\">
                    <i class=\"fas fa-cubes fa-2x me-3\" style=\"color: #ff6219;\"></i>
                    <span class=\"h1 fw-bold mb-0\"><img src=\"/assets/img/diseno/logo.png\"/></span>
                  </div>

                  <h5 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Identificate</h5>

                  <div class=\"form-outline mb-4\">
                    <input type=\"email\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-lg\" autocomplete=\"email\" required autofocus />
                    <label class=\"form-label\" for=\"inputEmail\">Correo electronico</label>
                  </div>

                  <div class=\"form-outline mb-4\">
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg\"autocomplete=\"current-password\" required />
                    <label class=\"form-label\" for=\"password\" >Contraseña</label>
                  </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
                ";
            // line 46
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })())) {
                // line 47
                echo "                  <div class=\"alert alert-danger\">Email o passowrd incorrectos</div>
                ";
            }
            // line 49
            echo "                  <div class=\"pt-1 mb-4\">
                    <button class=\"btn btn-warning btn-lg btn-block\" type=\"submit\">Login</button>
                  </div>
                  <p class=\"mb-5 pb-lg-2\" style=\"color: #393f81;\">¿No tienes cuenta? <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"
                      style=\"color: #393f81;\">REGISTRATE AQUI</a></p>
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
    
    ";
            // line 78
            echo "
    
";
        }
        // line 81
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 81,  163 => 78,  144 => 52,  139 => 49,  135 => 47,  133 => 46,  129 => 45,  118 => 37,  93 => 14,  90 => 13,  82 => 10,  79 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
    

    {% if app.user %}
        <div class=\"container mt-1 h5\">
            Ya te encuentras logeado como {{ app.user.userIdentifier }}, desconectate <a href=\"{{ path('app_logout') }}\"><b>AQUI</b></a>
        </div>
    {% endif %}
    {% if not app.user %}
    <section class=\"\" style=\"\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col col-xl-10\">
        <div class=\"card\" style=\"border-radius: 1rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-6 col-lg-5 d-none d-md-block\">
              <img src=\"/assets/img/juegos/login.jpg\"
                alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem;\" />
            </div>
            <div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
              <div class=\"card-body p-4 p-lg-5 text-black bg-white\">

                <form method=\"post\">

                  <div class=\"d-flex align-items-center mb-3 pb-1\">
                    <i class=\"fas fa-cubes fa-2x me-3\" style=\"color: #ff6219;\"></i>
                    <span class=\"h1 fw-bold mb-0\"><img src=\"/assets/img/diseno/logo.png\"/></span>
                  </div>

                  <h5 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Identificate</h5>

                  <div class=\"form-outline mb-4\">
                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-lg\" autocomplete=\"email\" required autofocus />
                    <label class=\"form-label\" for=\"inputEmail\">Correo electronico</label>
                  </div>

                  <div class=\"form-outline mb-4\">
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg\"autocomplete=\"current-password\" required />
                    <label class=\"form-label\" for=\"password\" >Contraseña</label>
                  </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                {% if error %}
                  <div class=\"alert alert-danger\">Email o passowrd incorrectos</div>
                {% endif %}
                  <div class=\"pt-1 mb-4\">
                    <button class=\"btn btn-warning btn-lg btn-block\" type=\"submit\">Login</button>
                  </div>
                  <p class=\"mb-5 pb-lg-2\" style=\"color: #393f81;\">¿No tienes cuenta? <a href=\"{{path('app_register')}}\"
                      style=\"color: #393f81;\">REGISTRATE AQUI</a></p>
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
    
    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}

    
{% endif %}

{% endblock %}
", "security/login.html.twig", "C:\\xampp\\htdocs\\training\\15.Symfony\\xokas_cia\\templates\\security\\login.html.twig");
    }
}
