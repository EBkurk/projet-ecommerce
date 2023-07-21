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
                    ";
        // line 23
        if (((null === (isset($context["lsession"]) || array_key_exists("lsession", $context) ? $context["lsession"] : (function () { throw new RuntimeError('Variable "lsession" does not exist.', 23, $this->source); })())) || ((isset($context["lsession"]) || array_key_exists("lsession", $context) ? $context["lsession"] : (function () { throw new RuntimeError('Variable "lsession" does not exist.', 23, $this->source); })()) == []))) {
            // line 24
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
            echo "\"><i class=\"bi bi-cart-fill noLink\"></i></a>
                    ";
        } else {
            // line 26
            echo "                        <div class=\"notification\">
                            <span class=\"notification-badge\"></span>
                            <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
            echo "\"><i class=\"bi bi-cart-fill noLink\"></i></a>
                        </div>
                    ";
        }
        // line 31
        echo "                </li>
            </ul>
            ";
        // line 33
        if (array_key_exists("form", $context)) {
            // line 34
            echo "                <ul class=\"navbar-nav\">
                    <li class=\"navbar-item mx-3\">
                        <i id=\"menuButton\" onclick=\"menuSearch()\" class=\"bi bi-zoom-in noLink\"></i>
                    </li>
                </ul>
            ";
        }
        // line 40
        echo "            <ul class=\"navbar-nav\">
                <li class=\"navbar-item mx-3\">
                    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><i class=\"bi bi-person-circle noLink border-white\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    <div id=\"menu\" class=\"hidden\">
        ";
        // line 48
        if (array_key_exists("form", $context)) {
            // line 49
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start');
            echo "
                <div class=\"search\">
                    Recherche par titre ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "findTextBy", [], "any", false, false, false, 51), 'widget');
            echo "<br>
                    ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "titre", [], "any", false, false, false, 52), 'widget');
            echo "
                </div>
                <div class=\"search\">
                    Recherche par description ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "findTextBy2", [], "any", false, false, false, 55), 'widget');
            echo "<br>
                    ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), 'widget');
            echo "
                </div>
             ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", true, true, false, 58)) {
                // line 59
                echo "                <div class=\"search\">
                    Par catégorie : ";
                // line 60
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "category", [], "any", false, false, false, 60), 'widget');
                echo "
                </div>
            ";
            }
            // line 63
            echo "                <div class=\"search\">
                    Par matériaux : ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "materiaux", [], "any", false, false, false, 64), 'widget');
            echo "
                </div>
                <div class=\"search\">
                    Prix minimum : ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "prix_min", [], "any", false, false, false, 67), 'widget');
            echo " €
                </div>
                <div class=\"search\">
                    Prix maximum : ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "prix_max", [], "any", false, false, false, 70), 'widget');
            echo " €<br>
                </div>
                <div class=\"search\">
                    Uniquement en stock : ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "stock", [], "any", false, false, false, 73), 'widget');
            echo "<br>
                </div>
                <hr>
                <div class=\"search\">
                    Trier par : ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "trie", [], "any", false, false, false, 77), 'widget');
            echo "
                    ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "trieSens", [], "any", false, false, false, 78), 'widget');
            echo "
                </div>
                <div class=\"search\">
                    ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "submitSearch", [], "any", false, false, false, 81), 'widget');
            echo "
                    ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "ReniSearch", [], "any", false, false, false, 82), 'widget');
            echo "
                </div>
            ";
            // line 84
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
            echo "
        ";
        }
        // line 86
        echo "    </div>
    ";
        // line 87
        $this->loadTemplate("_partials/_flash.html.twig", "base.html.twig", 87)->display($context);
        // line 88
        echo "    <div class=\"px-3\">
        ";
        // line 89
        $this->displayBlock('content', $context, $blocks);
        // line 90
        echo "    </div>
    <footer id=\"footerSite\" class=\"bg-light text-center text-lg-start d-flex justify-content-between align-items-center\">
        <div class=\"text-center p-3\">
            <a class=\"text-dark\" href=\"";
        // line 93
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

    // line 89
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
        return array (  278 => 89,  259 => 5,  231 => 93,  226 => 90,  224 => 89,  221 => 88,  219 => 87,  216 => 86,  211 => 84,  206 => 82,  202 => 81,  196 => 78,  192 => 77,  185 => 73,  179 => 70,  173 => 67,  167 => 64,  164 => 63,  158 => 60,  155 => 59,  153 => 58,  148 => 56,  144 => 55,  138 => 52,  134 => 51,  128 => 49,  126 => 48,  117 => 42,  113 => 40,  105 => 34,  103 => 33,  99 => 31,  93 => 28,  89 => 26,  83 => 24,  81 => 23,  74 => 19,  63 => 12,  58 => 9,  51 => 5,  45 => 1,);
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
                    {% if lsession is null or lsession == [] %}
                        <a href=\"{{ path('cart_index') }}\"><i class=\"bi bi-cart-fill noLink\"></i></a>
                    {% else %}
                        <div class=\"notification\">
                            <span class=\"notification-badge\"></span>
                            <a href=\"{{ path('cart_index') }}\"><i class=\"bi bi-cart-fill noLink\"></i></a>
                        </div>
                    {% endif %}
                </li>
            </ul>
            {% if form is defined %}
                <ul class=\"navbar-nav\">
                    <li class=\"navbar-item mx-3\">
                        <i id=\"menuButton\" onclick=\"menuSearch()\" class=\"bi bi-zoom-in noLink\"></i>
                    </li>
                </ul>
            {% endif %}
            <ul class=\"navbar-nav\">
                <li class=\"navbar-item mx-3\">
                    <a href=\"{{ path('app_login') }}\"><i class=\"bi bi-person-circle noLink border-white\"></i></a>
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
