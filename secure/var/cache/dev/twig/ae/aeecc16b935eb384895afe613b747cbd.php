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

/* login/index.html.twig */
class __TwigTemplate_dfdfc21e012114bb8b2184716b2418b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
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
        echo "    <div class=\"flex items-center bg-white rounded-md shadow-md\" style=\"gap: 60px; max-width: 900px; height: 500px; position: absolute; top:0; bottom: 0; left: 0; right: 0; margin: auto;\">
        <div style=\"width: 600px; margin-left: 40px;\">
            <h1 class=\"text-3xl font-semibold text-center mb-6\">Connexion</h1>

            ";
        // line 8
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "                <div class=\"text-red-500 mb-6\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "</div>
            ";
        }
        // line 11
        echo "
            <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
                <label for=\"username\" class=\"block text-sm font-medium text-gray-600 mb-2\">Email :</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" class=\"w-full p-2 mb-4 border rounded-md\">

                <label for=\"password\" class=\"block text-sm font-medium text-gray-600 mb-2\">Mot de passe :</label>
                <input type=\"password\" id=\"password\" name=\"_password\" class=\"w-full p-2 mb-4 border rounded-md\">

                ";
        // line 20
        echo "                <input type=\"hidden\" name=\"_target_path\" value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                <button type=\"submit\" class=\"bg-blue-500 text-white p-2 rounded-md hover:-600 focus:outline-none w-full shadow-md\">
                    Connexion
                </button>
                <div class=\"mt-2\">
                    <a href=\"#\" style=\"color: rgb(59 130 246);\">Mot de passe oublié ?</a>
                </div>
            </form>
        </div>
        <div class=\"flex justify-center\" style=\"width: auto; height: 500px;\">
            <h1 class=\"text-3xl font-semibold text-center mb-6\" style=\"position: absolute; top: 130px;\">Nouveau ici ?</h1>
            <p class=\"text-center\" style=\"width: 280px; position: absolute; top: 190px;\">Inscrivez vous et découvrez un grand nombre de nouvelles opportunités !</p>
            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" type=\"submit\" class=\"text-center bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none w-full shadow-md\" style=\"width: 280px; position: absolute; top: 260px;\">
                S'inscrire
            </a>
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/pencil.jpg"), "html", null, true);
        echo "\" alt=\"crayons de couleur\" style=\"object-fit: cover; border-top-right-radius: 6px; border-bottom-right-radius: 6px;\">
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/index.html.twig";
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
        return array (  126 => 38,  120 => 35,  104 => 22,  98 => 20,  90 => 14,  85 => 12,  82 => 11,  76 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"flex items-center bg-white rounded-md shadow-md\" style=\"gap: 60px; max-width: 900px; height: 500px; position: absolute; top:0; bottom: 0; left: 0; right: 0; margin: auto;\">
        <div style=\"width: 600px; margin-left: 40px;\">
            <h1 class=\"text-3xl font-semibold text-center mb-6\">Connexion</h1>

            {% if error %}
                <div class=\"text-red-500 mb-6\">{{ error }}</div>
            {% endif %}

            <form action=\"{{ path('app_login') }}\" method=\"post\">
                <label for=\"username\" class=\"block text-sm font-medium text-gray-600 mb-2\">Email :</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"w-full p-2 mb-4 border rounded-md\">

                <label for=\"password\" class=\"block text-sm font-medium text-gray-600 mb-2\">Mot de passe :</label>
                <input type=\"password\" id=\"password\" name=\"_password\" class=\"w-full p-2 mb-4 border rounded-md\">

                {# If you want to control the URL the user is redirected to on success#}
                <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('homepage') }}\">

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                <button type=\"submit\" class=\"bg-blue-500 text-white p-2 rounded-md hover:-600 focus:outline-none w-full shadow-md\">
                    Connexion
                </button>
                <div class=\"mt-2\">
                    <a href=\"#\" style=\"color: rgb(59 130 246);\">Mot de passe oublié ?</a>
                </div>
            </form>
        </div>
        <div class=\"flex justify-center\" style=\"width: auto; height: 500px;\">
            <h1 class=\"text-3xl font-semibold text-center mb-6\" style=\"position: absolute; top: 130px;\">Nouveau ici ?</h1>
            <p class=\"text-center\" style=\"width: 280px; position: absolute; top: 190px;\">Inscrivez vous et découvrez un grand nombre de nouvelles opportunités !</p>
            <a href=\"{{ path('app_register') }}\" type=\"submit\" class=\"text-center bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none w-full shadow-md\" style=\"width: 280px; position: absolute; top: 260px;\">
                S'inscrire
            </a>
            <img src=\"{{ asset(\"/images/pencil.jpg\") }}\" alt=\"crayons de couleur\" style=\"object-fit: cover; border-top-right-radius: 6px; border-bottom-right-radius: 6px;\">
        </div>
    </div>
{% endblock %}
", "login/index.html.twig", "/var/www/app/templates/login/index.html.twig");
    }
}
