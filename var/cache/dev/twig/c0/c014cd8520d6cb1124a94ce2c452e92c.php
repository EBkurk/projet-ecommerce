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

/* home/index.html.twig */
class __TwigTemplate_ac1735efa231965ccbb7e8d21fb1be99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "    <h1>Bienvenue sur le site</h1><hr>
    <h1></h1>
    <div class=\"d-flex justify-content-center\">
        <div id=\"carouselIndicators\" class=\"carousel slide\" style=\"width: 450px;height: 300px\" data-bs-ride=\"carousel\" data-bs-interval=\"3000\">
        <!-- Indicateurs de la diapositive -->
        <ol class=\"carousel-indicators\">
            ";
        // line 12
        $context["i"] = 0;
        // line 13
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 14
            echo "                ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 14, $this->source); })()) == 0)) {
                // line 15
                echo "                    <li data-bs-target=\"#carouselIndicators\" data-bs-slide-to=";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 15, $this->source); })()), "html", null, true);
                echo " class=\"active\"></li>
                ";
            } else {
                // line 17
                echo "                    <li data-bs-target=\"#carouselIndicators\" data-bs-slide-to=";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "></li>
                ";
            }
            // line 19
            echo "                ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 19, $this->source); })()) + 1);
            // line 20
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ol>

        <!-- Slides -->
        <div class=\"carousel-inner\" width=\"100px\" height=\"100px\">
            ";
        // line 25
        $context["i"] = 0;
        // line 26
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 27
            echo "                ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 27, $this->source); })()) == 0)) {
                // line 28
                echo "                    <div class=\"carousel-item active\">
                        <img src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" class=\"d-block w-100\" alt=";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 29, $this->source); })()), "html", null, true);
                echo ">
                    </div>
                ";
            } else {
                // line 32
                echo "                    <div class=\"carousel-item\">
                        <img src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" class=\"d-block w-100\" alt=";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 33, $this->source); })()), "html", null, true);
                echo ">
                    </div>
                ";
            }
            // line 36
            echo "                ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 36, $this->source); })()) + 1);
            // line 37
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>

        <!-- Boutons de contrôle -->
        <a class=\"carousel-control-prev\" href=\"#carouselIndicators\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselIndicators\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Next</span>
        </a>
      </div>
    </div>
    <hr>
    <div class=\"row mb-2\">
        <h1>Les catégories</h1>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
            // line 55
            echo "            <article class=\"col-4 mb-4\">
                <div class=\"card\">
                    <h2 class=\"card-header\">
                        ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categories"], "nom", [], "any", false, false, false, 58), "html", null, true);
            echo "
                    </h2>
                    <footer class=\"card-footer d-flex justify-content-between\">
                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category", ["id" => twig_get_attribute($this->env, $this->source, $context["categories"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">Cliquer ici pour voir les produits</a>
                    </footer>
                </div>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    </div>
    <hr>
    <div class=\"row\">
        <h1>Les Highlanders du moment</h1>
        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produits"]) {
            // line 71
            echo "            <article class=\"col-4 mb-4\">
                <div class=\"card\">
                    <h2 class=\"card-header\">
                        ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "nom", [], "any", false, false, false, 74), "html", null, true);
            echo "
                    </h2>
                    <div class=\"card-body article_contenu\">
                        ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "description", [], "any", false, false, false, 77), "html", null, true);
            echo "
                    </div>
                    <footer class=\"card-footer d-flex justify-content-between\">
                        <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_index", ["id" => twig_get_attribute($this->env, $this->source, $context["produits"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">Cliquer ici pour voir le produit</a>
                        <h5 class=\"mt-2\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "prix", [], "any", false, false, false, 81), "html", null, true);
            echo " €</h5>
                    </footer>
                </div>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 86,  245 => 81,  241 => 80,  235 => 77,  229 => 74,  224 => 71,  220 => 70,  214 => 66,  203 => 61,  197 => 58,  192 => 55,  188 => 54,  170 => 38,  164 => 37,  161 => 36,  155 => 33,  152 => 32,  146 => 29,  143 => 28,  140 => 27,  135 => 26,  133 => 25,  127 => 21,  121 => 20,  118 => 19,  112 => 17,  106 => 15,  103 => 14,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block content %}
    <h1>Bienvenue sur le site</h1><hr>
    <h1></h1>
    <div class=\"d-flex justify-content-center\">
        <div id=\"carouselIndicators\" class=\"carousel slide\" style=\"width: 450px;height: 300px\" data-bs-ride=\"carousel\" data-bs-interval=\"3000\">
        <!-- Indicateurs de la diapositive -->
        <ol class=\"carousel-indicators\">
            {% set i=0 %}
            {% for carousel in carousels %}
                {% if i == 0 %}
                    <li data-bs-target=\"#carouselIndicators\" data-bs-slide-to={{ i }} class=\"active\"></li>
                {% else %}
                    <li data-bs-target=\"#carouselIndicators\" data-bs-slide-to={{ i }}></li>
                {% endif %}
                {% set i = i+1 %}
            {% endfor %}
        </ol>

        <!-- Slides -->
        <div class=\"carousel-inner\" width=\"100px\" height=\"100px\">
            {% set i=0 %}
            {% for carousel in carousels %}
                {% if i == 0 %}
                    <div class=\"carousel-item active\">
                        <img src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" class=\"d-block w-100\" alt={{ i }}>
                    </div>
                {% else %}
                    <div class=\"carousel-item\">
                        <img src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" class=\"d-block w-100\" alt={{ i }}>
                    </div>
                {% endif %}
                {% set i = i+1 %}
            {% endfor %}
        </div>

        <!-- Boutons de contrôle -->
        <a class=\"carousel-control-prev\" href=\"#carouselIndicators\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselIndicators\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Next</span>
        </a>
      </div>
    </div>
    <hr>
    <div class=\"row mb-2\">
        <h1>Les catégories</h1>
        {% for categories in category %}
            <article class=\"col-4 mb-4\">
                <div class=\"card\">
                    <h2 class=\"card-header\">
                        {{ categories.nom }}
                    </h2>
                    <footer class=\"card-footer d-flex justify-content-between\">
                        <a href=\"{{ path('app_category', {'id': categories.id}) }}\">Cliquer ici pour voir les produits</a>
                    </footer>
                </div>
            </article>
        {% endfor %}
    </div>
    <hr>
    <div class=\"row\">
        <h1>Les Highlanders du moment</h1>
        {% for produits in product %}
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
", "home/index.html.twig", "E:\\repo_git\\symfony\\projet-ecommerce\\templates\\home\\index.html.twig");
    }
}
