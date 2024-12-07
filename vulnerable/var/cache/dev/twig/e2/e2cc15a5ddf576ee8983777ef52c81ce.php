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

/* metier/index.html.twig */
class __TwigTemplate_45393224c3bea6f4b5bb54944be01761 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "metier/index.html.twig", 1);
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

        echo "Metier index";
        
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
        echo "    <div class=\"max-w-2xl mx-auto mt-8 p-6 bg-white rounded-md shadow-md\">
        <h1 style=\"color: #333; text-align: center;\" class=\"text-2xl font-semibold mb-6\">Metier index</h1>

        <table class=\"table w-full border-collapse my-4\">
            <thead>
            <tr class=\"bg-gray-200\">
                <th class=\"py-2 px-1 border\">Id</th>
                <th class=\"py-2 px-4 border\">Nom</th>
                <th class=\"py-2 px-4 border\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metiers"]) || array_key_exists("metiers", $context) ? $context["metiers"] : (function () { throw new RuntimeError('Variable "metiers" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
            // line 19
            echo "                <tr class=\"border-b\">
                    <td class=\"py-2 px-1 border\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                    <td class=\"py-2 px-4 border\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td class=\"py-2 px-4 border\">
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"text-blue-500 hover:underline\">show<i class=\"fas fa-camera\"></i></a>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"text-yellow-500 hover:underline\">edit</a>
                        
                    </td>
                    
                    <td>
                            <div class=\"border-2 col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-2\">
            <p class=\"text-2xl\">Métier</p>
            <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white\" href=\"/admin/metier\">Détails</a>
        </div>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                <tr>
                    <td class=\"py-2 px-4 border\" colspan=\"3\">Aucun enregistrement trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_new");
        echo "\" class=\"block mt-4 text-blue-500 hover:underline my-custom-link-style\">Create new</a>
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
        return "metier/index.html.twig";
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
        return array (  154 => 43,  149 => 40,  140 => 36,  123 => 24,  119 => 23,  114 => 21,  110 => 20,  107 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Metier index{% endblock %}

{% block body %}
    <div class=\"max-w-2xl mx-auto mt-8 p-6 bg-white rounded-md shadow-md\">
        <h1 style=\"color: #333; text-align: center;\" class=\"text-2xl font-semibold mb-6\">Metier index</h1>

        <table class=\"table w-full border-collapse my-4\">
            <thead>
            <tr class=\"bg-gray-200\">
                <th class=\"py-2 px-1 border\">Id</th>
                <th class=\"py-2 px-4 border\">Nom</th>
                <th class=\"py-2 px-4 border\">Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for metier in metiers %}
                <tr class=\"border-b\">
                    <td class=\"py-2 px-1 border\">{{ metier.id }}</td>
                    <td class=\"py-2 px-4 border\">{{ metier.nom }}</td>
                    <td class=\"py-2 px-4 border\">
                        <a href=\"{{ path('app_metier_show', {'id': metier.id}) }}\" class=\"text-blue-500 hover:underline\">show<i class=\"fas fa-camera\"></i></a>
                        <a href=\"{{ path('app_metier_edit', {'id': metier.id}) }}\" class=\"text-yellow-500 hover:underline\">edit</a>
                        
                    </td>
                    
                    <td>
                            <div class=\"border-2 col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-2\">
            <p class=\"text-2xl\">Métier</p>
            <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white\" href=\"/admin/metier\">Détails</a>
        </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td class=\"py-2 px-4 border\" colspan=\"3\">Aucun enregistrement trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_metier_new') }}\" class=\"block mt-4 text-blue-500 hover:underline my-custom-link-style\">Create new</a>
    </div>
{% endblock %}
", "metier/index.html.twig", "/var/www/app/templates/metier/index.html.twig");
    }
}
