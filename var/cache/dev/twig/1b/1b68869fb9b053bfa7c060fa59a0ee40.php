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

/* product/index.html.twig */
class __TwigTemplate_943d304f243edb26a7176184937383e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        echo "Produit";
        
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
    <h3>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        echo "</h3><hr>
    Description : <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), "html", null, true);
        echo "<br><br>
    Prix : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "prix", [], "any", false, false, false, 10), "html", null, true);
        echo " €<br>
    ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "stock", [], "any", false, false, false, 11) > 0)) {
            // line 12
            echo "        Stock : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "stock", [], "any", false, false, false, 12), "html", null, true);
            echo "
    ";
        } else {
            // line 14
            echo "        <p>STOCK ÉPUISÉ</p>
    ";
        }
        // line 16
        echo "    <br>
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStock"]) || array_key_exists("formStock", $context) ? $context["formStock"] : (function () { throw new RuntimeError('Variable "formStock" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStock"]) || array_key_exists("formStock", $context) ? $context["formStock"] : (function () { throw new RuntimeError('Variable "formStock" does not exist.', 18, $this->source); })()), "nombre", [], "any", false, false, false, 18), 'widget');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStock"]) || array_key_exists("formStock", $context) ? $context["formStock"] : (function () { throw new RuntimeError('Variable "formStock" does not exist.', 19, $this->source); })()), "submit", [], "any", false, false, false, 19), 'widget');
        echo "
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStock"]) || array_key_exists("formStock", $context) ? $context["formStock"] : (function () { throw new RuntimeError('Variable "formStock" does not exist.', 20, $this->source); })()), 'form_end');
        echo "<hr>

    <div class=\"row\">
        <h1>Similaires</h1>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["similaires"]) || array_key_exists("similaires", $context) ? $context["similaires"] : (function () { throw new RuntimeError('Variable "similaires" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produits"]) {
            // line 25
            echo "            <article class=\"col-4 mb-4\">
                <div class=\"card\">
                    <h2 class=\"card-header\">
                        ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "
                    </h2>
                    <div class=\"card-body article_contenu\">
                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "description", [], "any", false, false, false, 31), "html", null, true);
            echo "
                    </div>
                    <footer class=\"card-footer d-flex justify-content-between\">
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_index", ["id" => twig_get_attribute($this->env, $this->source, $context["produits"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">Cliquer ici pour voir le produit</a>
                        <h5 class=\"mt-2\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "prix", [], "any", false, false, false, 35), "html", null, true);
            echo " €</h5>
                    </footer>
                </div>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 40,  163 => 35,  159 => 34,  153 => 31,  147 => 28,  142 => 25,  138 => 24,  131 => 20,  127 => 19,  123 => 18,  119 => 17,  116 => 16,  112 => 14,  106 => 12,  104 => 11,  100 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit{% endblock %}

{% block content %}

    <h3>{{ product.nom }}</h3><hr>
    Description : <br>
        {{ product.description }}<br><br>
    Prix : {{ product.prix }} €<br>
    {% if product.stock > 0 %}
        Stock : {{ product.stock }}
    {% else %}
        <p>STOCK ÉPUISÉ</p>
    {% endif %}
    <br>
    {{ form_start(formStock) }}
        {{ form_widget(formStock.nombre) }}
        {{ form_widget(formStock.submit) }}
    {{ form_end(formStock) }}<hr>

    <div class=\"row\">
        <h1>Similaires</h1>
        {% for produits in similaires %}
            <article class=\"col-4 mb-4\">
                <div class=\"card\">
                    <h2 class=\"card-header\">
                        {{ produits.nom }}
                    </h2>
                    <div class=\"card-body article_contenu\">
                        {{ produits.description }}
                    </div>
                    <footer class=\"card-footer d-flex justify-content-between\">
                        <a href=\"{{ path('shop_index', {'id': produits.id}) }}\">Cliquer ici pour voir le produit</a>
                        <h5 class=\"mt-2\">{{ produits.prix }} €</h5>
                    </footer>
                </div>
            </article>
        {% endfor %}
    </div>

{% endblock %}
", "product/index.html.twig", "E:\\repo_git\\symfony\\projet-ecommerce\\templates\\product\\index.html.twig");
    }
}
