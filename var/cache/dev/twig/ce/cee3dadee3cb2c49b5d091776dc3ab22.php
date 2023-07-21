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
class __TwigTemplate_de0afb041b6da559100bd7f2da8e16d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<form method=\"post\">
    ";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "    <style>
        .user-panel {
          width: 60%;
          margin: 0 auto;
          background: #f6f6f6;
          border: 1px solid #ddd;
          padding: 20px;
          border-radius: 8px;
        }
      
        .user-panel p {
          font-size: 18px;
          color: #333;
        }
      
        .user-panel a {
          display: block;
          background-color: #007bff;
          color: white;
          padding: 10px 20px;
          text-decoration: none;
          border-radius: 4px;
          margin-bottom: 10px;
          text-align: center;
        }
      
        .user-panel a:hover {
          background-color: #0056b3;
        }
        
        .user-panel .logout-container {
          display: flex;
          justify-content: space-between;
          background-color: transparent;
          margin-bottom: 20px;
        }
        
        .logout-container a {
          background-color: #000;
        }
      </style>
      
      <div class=\"user-panel mb-3\">
        <div class=\"logout-container\">
          <p>Vous êtes connecté en tant que :  ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "email", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
          <a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
        <hr>
        <a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_info_profil");
            echo "\">Modifier les informations du compte</a>
        <hr>
        <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_livraison");
            echo "\">Valider la livraison d'une commande</a>
        <hr>
        <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_history");
            echo "\">Voir toutes mes commandes</a>
        <hr>
      </div>
      
    ";
        } else {
            // line 69
            echo "
    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\"
    >

    ";
            // line 90
            echo "
    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Se connecter
    </button>
    <hr>
    Si vous n'avez pas de compte aller sur la page <a href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">inscription</a>
    ";
        }
        // line 97
        echo "</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  209 => 97,  204 => 95,  197 => 90,  191 => 77,  183 => 72,  178 => 69,  170 => 64,  165 => 62,  160 => 60,  154 => 57,  150 => 56,  104 => 12,  102 => 11,  99 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block content %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
    <style>
        .user-panel {
          width: 60%;
          margin: 0 auto;
          background: #f6f6f6;
          border: 1px solid #ddd;
          padding: 20px;
          border-radius: 8px;
        }
      
        .user-panel p {
          font-size: 18px;
          color: #333;
        }
      
        .user-panel a {
          display: block;
          background-color: #007bff;
          color: white;
          padding: 10px 20px;
          text-decoration: none;
          border-radius: 4px;
          margin-bottom: 10px;
          text-align: center;
        }
      
        .user-panel a:hover {
          background-color: #0056b3;
        }
        
        .user-panel .logout-container {
          display: flex;
          justify-content: space-between;
          background-color: transparent;
          margin-bottom: 20px;
        }
        
        .logout-container a {
          background-color: #000;
        }
      </style>
      
      <div class=\"user-panel mb-3\">
        <div class=\"logout-container\">
          <p>Vous êtes connecté en tant que :  {{ app.user.email }}</p>
          <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
        <hr>
        <a href=\"{{ path('app_info_profil') }}\">Modifier les informations du compte</a>
        <hr>
        <a href=\"{{ path('order_livraison') }}\">Valider la livraison d'une commande</a>
        <hr>
        <a href=\"{{ path('order_history') }}\">Voir toutes mes commandes</a>
        <hr>
      </div>
      
    {% else %}

    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}

    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Se connecter
    </button>
    <hr>
    Si vous n'avez pas de compte aller sur la page <a href=\"{{ path('app_register') }}\">inscription</a>
    {% endif %}
</form>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\noval\\OneDrive\\Bureau\\repo_git\\projet-ecommerce\\templates\\security\\login.html.twig");
    }
}
