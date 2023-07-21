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
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        echo "</h3>
    <hr>
    <div class=\"displayProduit\">
        <div>
            Description : <br>
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), "html", null, true);
        echo "<br><br>
            Prix : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "prix", [], "any", false, false, false, 14), "html", null, true);
        echo " €<br>
            ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "stock", [], "any", false, false, false, 15) > 0)) {
            // line 16
            echo "                Stock : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "stock", [], "any", false, false, false, 16), "html", null, true);
            echo " produit(s)
            ";
        } else {
            // line 18
            echo "                <p>STOCK ÉPUISÉ</p>
            ";
        }
        // line 20
        echo "            <br>
            Matérieux : <br>
            <ul>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["compose"]) || array_key_exists("compose", $context) ? $context["compose"] : (function () { throw new RuntimeError('Variable "compose" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 24
            echo "                    <li>
                        ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comp"], "materiaux", [], "any", false, false, false, 25), "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </ul>
            ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "stock", [], "any", false, false, false, 29) > 0)) {
            // line 30
            echo "                ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStock"]) || array_key_exists("formStock", $context) ? $context["formStock"] : (function () { throw new RuntimeError('Variable "formStock" does not exist.', 30, $this->source); })()), 'form_start');
            echo "
                ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStock"]) || array_key_exists("formStock", $context) ? $context["formStock"] : (function () { throw new RuntimeError('Variable "formStock" does not exist.', 31, $this->source); })()), "nombre", [], "any", false, false, false, 31), 'widget');
            echo "
                ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStock"]) || array_key_exists("formStock", $context) ? $context["formStock"] : (function () { throw new RuntimeError('Variable "formStock" does not exist.', 32, $this->source); })()), "submit", [], "any", false, false, false, 32), 'widget');
            echo "
                ";
            // line 33
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStock"]) || array_key_exists("formStock", $context) ? $context["formStock"] : (function () { throw new RuntimeError('Variable "formStock" does not exist.', 33, $this->source); })()), 'form_end');
            echo "
            ";
        }
        // line 35
        echo "        </div>
        <div class=\"d-flex justify-content-center carouselProduit\">
            <div id=\"carouselIndicators\" class=\"carousel slide\" style=\"width: 450px;height: 300px\"
                 data-bs-ride=\"carousel\"
                 data-bs-interval=\"3000\">
                <!-- Indicateurs de la diapositive -->
                <ol class=\"carousel-indicators\">
                    ";
        // line 42
        $context["i"] = 0;
        // line 43
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 44
            echo "                        ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 44, $this->source); })()) == 0)) {
                // line 45
                echo "                            <li data-bs-target=\"#carouselIndicators\" data-bs-slide-to=";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 45, $this->source); })()), "html", null, true);
                echo " class=\"active\"></li>
                        ";
            } else {
                // line 47
                echo "                            <li data-bs-target=\"#carouselIndicators\" data-bs-slide-to=";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 47, $this->source); })()), "html", null, true);
                echo "></li>
                        ";
            }
            // line 49
            echo "                        ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 49, $this->source); })()) + 1);
            // line 50
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </ol>

                <!-- Slides -->
                <div class=\"carousel-inner\">
                    ";
        // line 55
        $context["i"] = 0;
        // line 56
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 57
            echo "                        ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 57, $this->source); })()) == 0)) {
                // line 58
                echo "                            <div class=\"carousel-item active\">
                                <img src=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["carousel"], "url", [], "any", false, false, false, 59)), "html", null, true);
                echo "\" class=\"d-block w-100 imageCarousel\" alt=";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 59, $this->source); })()), "html", null, true);
                echo ">
                            </div>
                        ";
            } else {
                // line 62
                echo "                            <div class=\"carousel-item\">
                                <img src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["carousel"], "url", [], "any", false, false, false, 63)), "html", null, true);
                echo "\" class=\"d-block w-100 imageCarousel\" alt=";
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 63, $this->source); })()), "html", null, true);
                echo ">
                            </div>
                        ";
            }
            // line 66
            echo "                        ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 66, $this->source); })()) + 1);
            // line 67
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </div>

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
    </div>
    <br><br>
    <hr>
    <div class=\"row\">
        <h1>Similaires</h1>
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["similaires"]) || array_key_exists("similaires", $context) ? $context["similaires"] : (function () { throw new RuntimeError('Variable "similaires" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produits"]) {
            // line 87
            echo "            <article class=\"col-4 mb-4\">
                <div class=\"card\">
                    <h2 class=\"card-header\">
                        ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "nom", [], "any", false, false, false, 90), "html", null, true);
            echo "
                    </h2>
                    <div class=\"card-body article_contenu\">
                        ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "description", [], "any", false, false, false, 93), "html", null, true);
            echo "
                    </div>
                    <footer class=\"card-footer d-flex justify-content-between\">
                        <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_index", ["id" => twig_get_attribute($this->env, $this->source, $context["produits"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\">Cliquer ici pour voir le produit</a>
                        <h5 class=\"mt-2\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "prix", [], "any", false, false, false, 97), "html", null, true);
            echo " €</h5>
                    </footer>
                </div>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
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
        return array (  307 => 102,  296 => 97,  292 => 96,  286 => 93,  280 => 90,  275 => 87,  271 => 86,  251 => 68,  245 => 67,  242 => 66,  234 => 63,  231 => 62,  223 => 59,  220 => 58,  217 => 57,  212 => 56,  210 => 55,  204 => 51,  198 => 50,  195 => 49,  189 => 47,  183 => 45,  180 => 44,  175 => 43,  173 => 42,  164 => 35,  159 => 33,  155 => 32,  151 => 31,  146 => 30,  144 => 29,  141 => 28,  132 => 25,  129 => 24,  125 => 23,  120 => 20,  116 => 18,  110 => 16,  108 => 15,  104 => 14,  100 => 13,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit{% endblock %}

{% block content %}


    <h3>{{ product.nom }}</h3>
    <hr>
    <div class=\"displayProduit\">
        <div>
            Description : <br>
            {{ product.description }}<br><br>
            Prix : {{ product.prix }} €<br>
            {% if product.stock > 0 %}
                Stock : {{ product.stock }} produit(s)
            {% else %}
                <p>STOCK ÉPUISÉ</p>
            {% endif %}
            <br>
            Matérieux : <br>
            <ul>
                {% for comp in compose %}
                    <li>
                        {{ comp.materiaux.nom }}
                    </li>
                {% endfor %}
            </ul>
            {% if product.stock > 0 %}
                {{ form_start(formStock) }}
                {{ form_widget(formStock.nombre) }}
                {{ form_widget(formStock.submit) }}
                {{ form_end(formStock) }}
            {% endif %}
        </div>
        <div class=\"d-flex justify-content-center carouselProduit\">
            <div id=\"carouselIndicators\" class=\"carousel slide\" style=\"width: 450px;height: 300px\"
                 data-bs-ride=\"carousel\"
                 data-bs-interval=\"3000\">
                <!-- Indicateurs de la diapositive -->
                <ol class=\"carousel-indicators\">
                    {% set i=0 %}
                    {% for carousel in images %}
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
                    {% for carousel in images %}
                        {% if i == 0 %}
                            <div class=\"carousel-item active\">
                                <img src=\"{{ asset(carousel.url) }}\" class=\"d-block w-100 imageCarousel\" alt={{ i }}>
                            </div>
                        {% else %}
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset(carousel.url) }}\" class=\"d-block w-100 imageCarousel\" alt={{ i }}>
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
    </div>
    <br><br>
    <hr>
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
", "product/index.html.twig", "C:\\Users\\noval\\OneDrive\\Bureau\\repo_git\\projet-ecommerce\\templates\\product\\index.html.twig");
    }
}
