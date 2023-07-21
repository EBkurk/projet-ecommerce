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
    <div class=\"d-flex justify-content-center carouselProduit\">
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
        <div class=\"carousel-inner\">
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
                        <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_index", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carousel"], "images", [], "any", false, false, false, 29), 0, [], "array", false, false, false, 29), "url", [], "any", false, false, false, 29)), "html", null, true);
                echo "\" class=\"d-block w-100 imageCarousel\" alt=";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "></a>
                    </div>
                ";
            } else {
                // line 32
                echo "                    <div class=\"carousel-item\">
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_index", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carousel"], "images", [], "any", false, false, false, 33), 0, [], "array", false, false, false, 33), "url", [], "any", false, false, false, 33)), "html", null, true);
                echo "\" class=\"d-block w-100 imageCarousel\" alt=";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 33, $this->source); })()), "html", null, true);
                echo "></a>
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
                    <div class=\"card-img article_contenu\">
                        ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categories"], "images", [], "any", false, true, false, 61), 0, [], "array", false, true, false, 61), "url", [], "any", true, true, false, 61)) {
                // line 62
                echo "                            <img class=\"imageCart\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categories"], "images", [], "any", false, false, false, 62), 0, [], "array", false, false, false, 62), "url", [], "any", false, false, false, 62)), "html", null, true);
                echo "\" alt=\"test\"/>
                        ";
            }
            // line 64
            echo "                    </div>
                    <hr>
                    <footer class=\"card-footer d-flex justify-content-between\">
                        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category", ["id" => twig_get_attribute($this->env, $this->source, $context["categories"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Cliquer ici pour voir les produits</a>
                    </footer>
                </div>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </div>
    <hr>
    <div class=\"row\">
        <h1>Les Highlanders du moment</h1>
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produits"]) {
            // line 77
            echo "            <article class=\"col-4 mb-4\">
                <div class=\"card\">
                    <h2 class=\"card-header\">
                        ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "nom", [], "any", false, false, false, 80), "html", null, true);
            echo "
                    </h2>
                    <div class=\"card-img article_contenu\">
                        ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produits"], "images", [], "any", false, true, false, 83), 0, [], "array", false, true, false, 83), "url", [], "any", true, true, false, 83)) {
                // line 84
                echo "                            <img class=\"imageCart\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produits"], "images", [], "any", false, false, false, 84), 0, [], "array", false, false, false, 84), "url", [], "any", false, false, false, 84)), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 86
            echo "                    </div>
                    <hr>
                    <div class=\"card-body article_contenu\">
                        ";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "description", [], "any", false, false, false, 89), "html", null, true);
            echo "
                    <hr>
                        ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, $context["produits"], "stock", [], "any", false, false, false, 91) > 0)) {
                // line 92
                echo "                            Stock : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "stock", [], "any", false, false, false, 92), "html", null, true);
                echo " produit(s)
                        ";
            } else {
                // line 94
                echo "                            STOCK ÉPUISÉ
                        ";
            }
            // line 96
            echo "                    </div>
                    <footer class=\"card-footer d-flex justify-content-between\">
                        <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_index", ["id" => twig_get_attribute($this->env, $this->source, $context["produits"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">Cliquer ici pour voir le produit</a>
                        <h5 class=\"mt-2\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "prix", [], "any", false, false, false, 99), "html", null, true);
            echo " €</h5>
                    </footer>
                </div>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
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
        return array (  305 => 104,  294 => 99,  290 => 98,  286 => 96,  282 => 94,  276 => 92,  274 => 91,  269 => 89,  264 => 86,  258 => 84,  256 => 83,  250 => 80,  245 => 77,  241 => 76,  235 => 72,  224 => 67,  219 => 64,  213 => 62,  211 => 61,  205 => 58,  200 => 55,  196 => 54,  178 => 38,  172 => 37,  169 => 36,  159 => 33,  156 => 32,  146 => 29,  143 => 28,  140 => 27,  135 => 26,  133 => 25,  127 => 21,  121 => 20,  118 => 19,  112 => 17,  106 => 15,  103 => 14,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block content %}
    <h1>Bienvenue sur le site</h1><hr>
    <h1></h1>
    <div class=\"d-flex justify-content-center carouselProduit\">
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
        <div class=\"carousel-inner\">
            {% set i=0 %}
            {% for carousel in carousels %}
                {% if i == 0 %}
                    <div class=\"carousel-item active\">
                        <a href=\"{{ path('shop_index', {'id': carousel.id}) }}\"><img src=\"{{ asset(carousel.images[0].url) }}\" class=\"d-block w-100 imageCarousel\" alt={{ i }}></a>
                    </div>
                {% else %}
                    <div class=\"carousel-item\">
                        <a href=\"{{ path('shop_index', {'id': carousel.id}) }}\"><img src=\"{{ asset(carousel.images[0].url) }}\" class=\"d-block w-100 imageCarousel\" alt={{ i }}></a>
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
                    <div class=\"card-img article_contenu\">
                        {% if categories.images[0].url is defined %}
                            <img class=\"imageCart\" src=\"{{ asset(categories.images[0].url) }}\" alt=\"test\"/>
                        {% endif %}
                    </div>
                    <hr>
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
                    <div class=\"card-img article_contenu\">
                        {% if produits.images[0].url is defined %}
                            <img class=\"imageCart\" src=\"{{ asset(produits.images[0].url) }}\"/>
                        {% endif %}
                    </div>
                    <hr>
                    <div class=\"card-body article_contenu\">
                        {{ produits.description }}
                    <hr>
                        {% if produits.stock > 0 %}
                            Stock : {{ produits.stock }} produit(s)
                        {% else %}
                            STOCK ÉPUISÉ
                        {% endif %}
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
", "home/index.html.twig", "C:\\Users\\noval\\OneDrive\\Bureau\\repo_git\\projet-ecommerce\\templates\\home\\index.html.twig");
    }
}
