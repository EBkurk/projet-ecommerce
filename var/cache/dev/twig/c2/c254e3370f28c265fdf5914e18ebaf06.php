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

/* mails/registration_confirmation.html.twig */
class __TwigTemplate_b07c10505ab3aeb7063e0dead10d2d99 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mails/registration_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mails/registration_confirmation.html.twig"));

        // line 1
        echo "<h1>Confirmation de votre compte utilisateur</h1>
<p>
    Bonjour, ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "username", [], "any", false, false, false, 3), "html", null, true);
        echo " et bienvenue sur notre site.<br><br>
    Veuillez confirmer votre compte dès maintenant en cliquant sur le lien ci-dessous:<br><br>
    Ce lien est valable jusqu'au <strong>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["lifeTimeToken"]) || array_key_exists("lifeTimeToken", $context) ? $context["lifeTimeToken"] : (function () { throw new RuntimeError('Variable "lifeTimeToken" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</strong>. Après cette date, il ne sera plus valable.<br><br>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_verify", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 6, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)])), "html", null, true);
        echo "\"> Vérifier mon compte</a><br><br>
    <strong>Ceci est un email automatique, merci de ne pas y répondre</strong><br><br>
    A bientôt sur notre site !
</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mails/registration_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Confirmation de votre compte utilisateur</h1>
<p>
    Bonjour, {{ user.username }} et bienvenue sur notre site.<br><br>
    Veuillez confirmer votre compte dès maintenant en cliquant sur le lien ci-dessous:<br><br>
    Ce lien est valable jusqu'au <strong>{{ lifeTimeToken }}</strong>. Après cette date, il ne sera plus valable.<br><br>
    <a href=\"{{ absolute_url(path('account_verify', {token: token, id: user.id})) }}\"> Vérifier mon compte</a><br><br>
    <strong>Ceci est un email automatique, merci de ne pas y répondre</strong><br><br>
    A bientôt sur notre site !
</p>", "mails/registration_confirmation.html.twig", "E:\\repo_git\\symfony\\projet-ecommerce\\templates\\mails\\registration_confirmation.html.twig");
    }
}
