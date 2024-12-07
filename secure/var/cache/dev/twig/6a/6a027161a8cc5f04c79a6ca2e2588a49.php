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

/* adminUser/inscription/show.html.twig */
class __TwigTemplate_c202bf1e1b620a93531039ff8f76bf24 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/inscription/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/inscription/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adminUser/inscription/show.html.twig", 1);
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

        echo "Lycéen";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"max-w-5xl mx-auto my-8 p-6 bg-white rounded-md shadow-md\">
        <div class=\"flex my-4\">
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_index");
        echo "\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                <p>Back ";
        // line 9
        echo "</p>
            </a>
        </div>
        <h1 class=\"text-2xl font-semibold mb-6 text-center\">Lycéen</h1>

        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <tbody>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Id</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Téléphone</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 22, $this->source); })()), "telephone", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Date</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 26
        ((twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Nom</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Prénom</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Lycée</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 38, $this->source); })()), "lycee", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Section</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 42, $this->source); })()), "section", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
        <div class=\"flex justify-end space-x-2 mt-4\">
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded\">
                <p>Edit ";
        // line 48
        echo "</p>
            </a>
            <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\" onclick=\"return confirm('Are you sure you want to delete this item?');\" class=\"inline-block bg-red-500 hover:bg-red-700 text-white p-2 rounded\">
                <p>Delete ";
        // line 51
        echo "</p>
            </a>
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
        return "adminUser/inscription/show.html.twig";
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
        return array (  169 => 51,  165 => 50,  161 => 48,  157 => 47,  149 => 42,  142 => 38,  135 => 34,  128 => 30,  121 => 26,  114 => 22,  107 => 18,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lycéen{% endblock %}

{% block body %}
    <div class=\"max-w-5xl mx-auto my-8 p-6 bg-white rounded-md shadow-md\">
        <div class=\"flex my-4\">
            <a href=\"{{ path('app_inscription_index') }}\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                <p>Back {#<i class=\"fa-solid fa-arrow-left fa-xl\"></i>#}</p>
            </a>
        </div>
        <h1 class=\"text-2xl font-semibold mb-6 text-center\">Lycéen</h1>

        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <tbody>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Id</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ inscription.id }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Téléphone</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ inscription.telephone }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Date</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ inscription.date ? inscription.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Nom</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ inscription.nom }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Prénom</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ inscription.prenom }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Lycée</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ inscription.lycee }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Section</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ inscription.section }}</td>
            </tr>
            </tbody>
        </table>
        <div class=\"flex justify-end space-x-2 mt-4\">
            <a href=\"{{ path('app_inscription_edit', {'id': inscription.id}) }}\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded\">
                <p>Edit {#<i class=\"fa-solid fa-pen-to-square fa-xl\"></i>#}</p>
            </a>
            <a href=\"{{ path('app_inscription_delete', {'id': inscription.id}) }}\" onclick=\"return confirm('Are you sure you want to delete this item?');\" class=\"inline-block bg-red-500 hover:bg-red-700 text-white p-2 rounded\">
                <p>Delete {#<i class=\"fa-solid fa-trash fa-xl\"></i>#}</p>
            </a>
        </div>

    </div>
{% endblock %}
", "adminUser/inscription/show.html.twig", "/var/www/app/templates/adminUser/inscription/show.html.twig");
    }
}
