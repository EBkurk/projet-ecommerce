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
class __TwigTemplate_dc281886fcbeb44064f8476f0798ce27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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
        echo "
    <style>
        .form-container {
          width: 60%;
          margin: 0 auto;
          background: #f6f6f6;
          border: 1px solid #ddd;
          padding: 20px;
          border-radius: 8px;
        }
        
        .form-group {
          margin-bottom: 20px;
        }
        
        .form-group label {
          font-weight: bold;
          display: block;
        }
        
        .form-group input, .form-group textarea, .form-group select {
          width: 100%;
          padding: 10px;
          border-radius: 4px;
          border: 1px solid #ccc;
        }
        
        .form-group button {
          padding: 10px 20px;
          background-color: #007bff;
          border: none;
          color: white;
          border-radius: 4px;
          cursor: pointer;
        }
      
        .form-group button:hover {
          background-color: #0056b3;
        }
      </style>
      
      <div class=\"form-container\">
        <h1>Inscription</h1>
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), 'errors');
        echo "
        <form method=\"post\">
          <div class=\"form-group\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "prenom", [], "any", false, false, false, 52), 'row');
        echo "
          </div>
          <div class=\"form-group\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55), 'row');
        echo "
          </div>
          <div class=\"form-group\">
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "tel", [], "any", false, false, false, 58), 'row');
        echo "
          </div>
          <div class=\"form-group\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'row');
        echo "
          </div>
          <div class=\"form-group\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "plainPassword", [], "any", false, false, false, 64), 'row', ["label" => "Password"]);
        // line 66
        echo "
          </div>
          <div class=\"form-group\">
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "agreeTerms", [], "any", false, false, false, 69), 'row');
        echo "
          </div>
          <div class=\"form-group\">
            <button type=\"submit\" class=\"btn\">Valider</button>
          </div>
        </form>
      </div>
      
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  170 => 69,  165 => 66,  163 => 64,  157 => 61,  151 => 58,  145 => 55,  139 => 52,  133 => 49,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block content %}

    <style>
        .form-container {
          width: 60%;
          margin: 0 auto;
          background: #f6f6f6;
          border: 1px solid #ddd;
          padding: 20px;
          border-radius: 8px;
        }
        
        .form-group {
          margin-bottom: 20px;
        }
        
        .form-group label {
          font-weight: bold;
          display: block;
        }
        
        .form-group input, .form-group textarea, .form-group select {
          width: 100%;
          padding: 10px;
          border-radius: 4px;
          border: 1px solid #ccc;
        }
        
        .form-group button {
          padding: 10px 20px;
          background-color: #007bff;
          border: none;
          color: white;
          border-radius: 4px;
          cursor: pointer;
        }
      
        .form-group button:hover {
          background-color: #0056b3;
        }
      </style>
      
      <div class=\"form-container\">
        <h1>Inscription</h1>
        {{ form_errors(registrationForm) }}
        <form method=\"post\">
          <div class=\"form-group\">
            {{ form_row(registrationForm.prenom) }}
          </div>
          <div class=\"form-group\">
            {{ form_row(registrationForm.nom) }}
          </div>
          <div class=\"form-group\">
            {{ form_row(registrationForm.tel) }}
          </div>
          <div class=\"form-group\">
            {{ form_row(registrationForm.email) }}
          </div>
          <div class=\"form-group\">
            {{ form_row(registrationForm.plainPassword, {
                label: 'Password'
            }) }}
          </div>
          <div class=\"form-group\">
            {{ form_row(registrationForm.agreeTerms) }}
          </div>
          <div class=\"form-group\">
            <button type=\"submit\" class=\"btn\">Valider</button>
          </div>
        </form>
      </div>
      
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\noval\\OneDrive\\Bureau\\repo_git\\projet-ecommerce\\templates\\registration\\register.html.twig");
    }
}
