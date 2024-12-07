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

/* user-profile/index.html.twig */
class __TwigTemplate_311f6be9b8def22275d91e22ff3a57c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user-profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user-profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user-profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ( !twig_test_empty((isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "        <div class=\"max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md\">
            <h1 class=\"text-2xl font-semibold mb-6\">Utilisateur: ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
            echo "</h1>

            <table class=\"table\">
                <tbody>
                <tr>
                    <th class=\"py-2 px-4 border\">Nom</th>
                    <td class=\"py-2 px-4 border\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Prénom</th>
                    <td class=\"py-2 px-4 border\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Téléphone</th>
                    <td class=\"py-2 px-4 border\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 21, $this->source); })()), "telephone", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Lycée</th>
                    <td class=\"py-2 px-4 border\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 25, $this->source); })()), "lycee", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Section</th>
                    <td class=\"py-2 px-4 border\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 29, $this->source); })()), "section", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Date d'inscription</th>
                    <td class=\"py-2 px-4 border\">";
            // line 33
            ((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 33, $this->source); })()), "date", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 33, $this->source); })()), "date", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Email</th>
                    <td class=\"py-2 px-4 border\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                </tr>
                </tbody>
            </table>

            ";
            // line 42
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form');
            echo "
            <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "imageFilename", [], "any", false, false, false, 43))), "html", null, true);
            echo "\" class=\"py-2\">

        </div>
    ";
        } else {
            // line 47
            echo "        <p class=\"text-gray-500\">Utilisateur non disponible.</p>
    ";
        }
        // line 49
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user-profile/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  150 => 49,  146 => 47,  139 => 43,  135 => 42,  127 => 37,  120 => 33,  113 => 29,  106 => 25,  99 => 21,  92 => 17,  85 => 13,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {% if inscription is not empty %}
        <div class=\"max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md\">
            <h1 class=\"text-2xl font-semibold mb-6\">Utilisateur: {{ inscription.nom }}</h1>

            <table class=\"table\">
                <tbody>
                <tr>
                    <th class=\"py-2 px-4 border\">Nom</th>
                    <td class=\"py-2 px-4 border\">{{ inscription.nom }}</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Prénom</th>
                    <td class=\"py-2 px-4 border\">{{ inscription.prenom }}</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Téléphone</th>
                    <td class=\"py-2 px-4 border\">{{ inscription.telephone }}</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Lycée</th>
                    <td class=\"py-2 px-4 border\">{{ inscription.lycee }}</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Section</th>
                    <td class=\"py-2 px-4 border\">{{ inscription.section }}</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Date d'inscription</th>
                    <td class=\"py-2 px-4 border\">{{ inscription.date ? inscription.date|date('Y-m-d') : '' }}</td>
                </tr>
                <tr>
                    <th class=\"py-2 px-4 border\">Email</th>
                    <td class=\"py-2 px-4 border\">{{ inscription.user.email }}</td>
                </tr>
                </tbody>
            </table>

            {{ form(form) }}
            <img src=\"{{ asset('uploads/images/' ~ app.user.imageFilename) }}\" class=\"py-2\">

        </div>
    {% else %}
        <p class=\"text-gray-500\">Utilisateur non disponible.</p>
    {% endif %}

{% endblock %}
", "user-profile/index.html.twig", "/var/www/app/templates/user-profile/index.html.twig");
    }
}
