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

/* adminUser/lycee/show.html.twig */
class __TwigTemplate_e79daa2db4da14d90b7412a6f7040e76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/lycee/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/lycee/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adminUser/lycee/show.html.twig", 1);
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

        echo "Lycée";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lycee_index");
        echo "\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                <p>Back ";
        // line 9
        echo "</p>
            </a>
        </div>
        <h1 class=\"text-2xl font-semibold mb-6 text-center\">Lycée</h1>

        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <tbody>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Id</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lycee"]) || array_key_exists("lycee", $context) ? $context["lycee"] : (function () { throw new RuntimeError('Variable "lycee" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Nom</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lycee"]) || array_key_exists("lycee", $context) ? $context["lycee"] : (function () { throw new RuntimeError('Variable "lycee" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
        <div class=\"flex justify-end space-x-2 mt-4\">
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lycee_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lycee"]) || array_key_exists("lycee", $context) ? $context["lycee"] : (function () { throw new RuntimeError('Variable "lycee" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded\">
                <p>Edit ";
        // line 28
        echo "</p>
            </a>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lycee_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lycee"]) || array_key_exists("lycee", $context) ? $context["lycee"] : (function () { throw new RuntimeError('Variable "lycee" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\" onclick=\"return confirm('Are you sure you want to delete this item?');\" class=\"inline-block bg-red-500 hover:bg-red-700 text-white p-2 rounded\">
                <p>Delete ";
        // line 31
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
        return "adminUser/lycee/show.html.twig";
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
        return array (  134 => 31,  130 => 30,  126 => 28,  122 => 27,  114 => 22,  107 => 18,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lycée{% endblock %}

{% block body %}
    <div class=\"max-w-5xl mx-auto my-8 p-6 bg-white rounded-md shadow-md\">
        <div class=\"flex my-4\">
            <a href=\"{{ path('app_lycee_index') }}\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                <p>Back {#<i class=\"fa-solid fa-arrow-left fa-xl\"></i>#}</p>
            </a>
        </div>
        <h1 class=\"text-2xl font-semibold mb-6 text-center\">Lycée</h1>

        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <tbody>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Id</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ lycee.id }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Nom</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ lycee.nom }}</td>
            </tr>
            </tbody>
        </table>
        <div class=\"flex justify-end space-x-2 mt-4\">
            <a href=\"{{ path('app_lycee_edit', {'id': lycee.id}) }}\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded\">
                <p>Edit {#<i class=\"fa-solid fa-pen-to-square fa-xl\"></i>#}</p>
            </a>
            <a href=\"{{ path('app_lycee_delete', {'id': lycee.id}) }}\" onclick=\"return confirm('Are you sure you want to delete this item?');\" class=\"inline-block bg-red-500 hover:bg-red-700 text-white p-2 rounded\">
                <p>Delete {#<i class=\"fa-solid fa-trash fa-xl\"></i>#}</p>
            </a>
        </div>
    </div>
{% endblock %}
", "adminUser/lycee/show.html.twig", "/var/www/app/templates/adminUser/lycee/show.html.twig");
    }
}
