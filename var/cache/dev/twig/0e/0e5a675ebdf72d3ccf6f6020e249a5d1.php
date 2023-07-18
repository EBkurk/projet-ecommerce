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

/* base.html.twig */
class __TwigTemplate_cddf4452ad102a69c494a19ae7b151c4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
        ";
        // line 12
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
    <div id=\"main\">
    <div class=\"bg-dark display-table sticky-top\">
        <nav class=\"navbar navbar-expand navbar-dark container justify-content-between\">
        <span class=\"navbar-brand fs-3 me-auto\">
            <h5><a class=\"noLink\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">AIRNEIS</a></h5>
        </span>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item mx-3\">
                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\"><i class=\"bi bi-cart-fill noLink\"></i></a>
                </li>
            </ul>
            ";
        // line 26
        if (array_key_exists("form", $context)) {
            // line 27
            echo "                <ul class=\"navbar-nav\">
                    <li class=\"navbar-item\">
                        <i id=\"menuButton\" onclick=\"menuSearch()\" class=\"bi bi-zoom-in noLink\"></i>
                    </li>
                </ul>
            ";
        }
        // line 33
        echo "            <ul class=\"navbar-nav ms-2\">
                <li class=\"navbar-item\">
                    <a href=\"\"><i class=\"bi bi-list noLink border-white\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    <div id=\"menu\" class=\"hidden\">
        ";
        // line 41
        if (array_key_exists("form", $context)) {
            // line 42
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start');
            echo "
                <div class=\"search\">
                    Recherche par titre ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "findTextBy", [], "any", false, false, false, 44), 'widget');
            echo "<br>
                    ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "titre", [], "any", false, false, false, 45), 'widget');
            echo "
                </div>
                <div class=\"search\">
                    Recherche par description ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "findTextBy2", [], "any", false, false, false, 48), 'widget');
            echo "<br>
                    ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'widget');
            echo "
                </div>
             ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", true, true, false, 51)) {
                // line 52
                echo "                <div class=\"search\">
                    Par catégorie : ";
                // line 53
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "category", [], "any", false, false, false, 53), 'widget');
                echo "
                </div>
            ";
            }
            // line 56
            echo "                <div class=\"search\">
                    Par matériaux : ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "materiaux", [], "any", false, false, false, 57), 'widget');
            echo "
                </div>
                <div class=\"search\">
                    Prix minimum : ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "prix_min", [], "any", false, false, false, 60), 'widget');
            echo " €
                </div>
                <div class=\"search\">
                    Prix maximum : ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "prix_max", [], "any", false, false, false, 63), 'widget');
            echo " €<br>
                </div>
                <div class=\"search\">
                    Uniquement en stock : ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "stock", [], "any", false, false, false, 66), 'widget');
            echo "<br>
                </div>
                <hr>
                <div class=\"search\">
                    Trier par : ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "trie", [], "any", false, false, false, 70), 'widget');
            echo "
                    ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "trieSens", [], "any", false, false, false, 71), 'widget');
            echo "
                </div>
                <div class=\"search\">
                    ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "submitSearch", [], "any", false, false, false, 74), 'widget');
            echo "
                    ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "ReniSearch", [], "any", false, false, false, 75), 'widget');
            echo "
                </div>
            ";
            // line 77
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
            echo "
        ";
        }
        // line 79
        echo "    </div>
    ";
        // line 80
        $this->loadTemplate("_partials/_flash.html.twig", "base.html.twig", 80)->display($context);
        // line 81
        echo "    <div class=\"px-3\">
        ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "    </div>
    <footer id=\"footerSite\" class=\"bg-light text-center text-lg-start d-flex justify-content-between align-items-center\">
        <div class=\"text-center p-3\">
            <a class=\"text-dark\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">CGU - Mentions Légales - Contact</a>
        </div>
        <div class=\"text-center p-3 ms-auto\">
            <a class=\"text-dark\" href=\"https://www.facebook.com/h3hitema/\"><i class=\"bi bi-facebook\"></i></a>
        </div>
        <div class=\"text-center p-3\">
            <a class=\"text-dark\" href=\"https://www.instagram.com/h3hitema/\"><i class=\"bi bi-instagram\"></i></a>
        </div>
        <div class=\"text-center p-3\">
            <a class=\"text-dark\" href=\"https://fr.linkedin.com/school/h3hitema/\"><i class=\"bi bi-linkedin\"></i></a>
        </div>

    </footer>
    </div>
    </body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 82,  240 => 5,  212 => 86,  207 => 83,  205 => 82,  202 => 81,  200 => 80,  197 => 79,  192 => 77,  187 => 75,  183 => 74,  177 => 71,  173 => 70,  166 => 66,  160 => 63,  154 => 60,  148 => 57,  145 => 56,  139 => 53,  136 => 52,  134 => 51,  129 => 49,  125 => 48,  119 => 45,  115 => 44,  109 => 42,  107 => 41,  97 => 33,  89 => 27,  87 => 26,  81 => 23,  74 => 19,  63 => 12,  58 => 9,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        <script src=\"{{ asset('js/script.js') }}\"></script>
    </head>
    <body>
    <div id=\"main\">
    <div class=\"bg-dark display-table sticky-top\">
        <nav class=\"navbar navbar-expand navbar-dark container justify-content-between\">
        <span class=\"navbar-brand fs-3 me-auto\">
            <h5><a class=\"noLink\" href=\"{{ path('homepage') }}\">AIRNEIS</a></h5>
        </span>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item mx-3\">
                    <a href=\"{{ path('cart_index') }}\"><i class=\"bi bi-cart-fill noLink\"></i></a>
                </li>
            </ul>
            {% if form is defined %}
                <ul class=\"navbar-nav\">
                    <li class=\"navbar-item\">
                        <i id=\"menuButton\" onclick=\"menuSearch()\" class=\"bi bi-zoom-in noLink\"></i>
                    </li>
                </ul>
            {% endif %}
            <ul class=\"navbar-nav ms-2\">
                <li class=\"navbar-item\">
                    <a href=\"\"><i class=\"bi bi-list noLink border-white\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    <div id=\"menu\" class=\"hidden\">
        {% if form is defined %}
            {{ form_start(form) }}
                <div class=\"search\">
                    Recherche par titre {{ form_widget(form.findTextBy) }}<br>
                    {{ form_widget(form.titre) }}
                </div>
                <div class=\"search\">
                    Recherche par description {{ form_widget(form.findTextBy2) }}<br>
                    {{ form_widget(form.description) }}
                </div>
             {% if form.category is defined %}
                <div class=\"search\">
                    Par catégorie : {{ form_widget(form.category) }}
                </div>
            {% endif %}
                <div class=\"search\">
                    Par matériaux : {{ form_widget(form.materiaux) }}
                </div>
                <div class=\"search\">
                    Prix minimum : {{ form_widget(form.prix_min) }} €
                </div>
                <div class=\"search\">
                    Prix maximum : {{ form_widget(form.prix_max) }} €<br>
                </div>
                <div class=\"search\">
                    Uniquement en stock : {{ form_widget(form.stock) }}<br>
                </div>
                <hr>
                <div class=\"search\">
                    Trier par : {{ form_widget(form.trie) }}
                    {{ form_widget(form.trieSens) }}
                </div>
                <div class=\"search\">
                    {{ form_widget(form.submitSearch) }}
                    {{ form_widget(form.ReniSearch) }}
                </div>
            {{ form_end(form) }}
        {% endif %}
    </div>
    {% include '_partials/_flash.html.twig' %}
    <div class=\"px-3\">
        {% block content %}{% endblock %}
    </div>
    <footer id=\"footerSite\" class=\"bg-light text-center text-lg-start d-flex justify-content-between align-items-center\">
        <div class=\"text-center p-3\">
            <a class=\"text-dark\" href=\"{{ path('app_contact') }}\">CGU - Mentions Légales - Contact</a>
        </div>
        <div class=\"text-center p-3 ms-auto\">
            <a class=\"text-dark\" href=\"https://www.facebook.com/h3hitema/\"><i class=\"bi bi-facebook\"></i></a>
        </div>
        <div class=\"text-center p-3\">
            <a class=\"text-dark\" href=\"https://www.instagram.com/h3hitema/\"><i class=\"bi bi-instagram\"></i></a>
        </div>
        <div class=\"text-center p-3\">
            <a class=\"text-dark\" href=\"https://fr.linkedin.com/school/h3hitema/\"><i class=\"bi bi-linkedin\"></i></a>
        </div>

    </footer>
    </div>
    </body>

</html>
", "base.html.twig", "C:\\Users\\noval\\OneDrive\\Bureau\\repo_git\\projet-ecommerce\\templates\\base.html.twig");
    }
}
