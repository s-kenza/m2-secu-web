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

/* adminUser/ressource/index.html.twig */
class __TwigTemplate_4a09033f94456ab423caa5cf07443c20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/ressource/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/ressource/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adminUser/ressource/index.html.twig", 1);
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

        echo "Ressources";
        
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
        echo "    <div class=\"max-w-5xl mx-auto mt-8 p-6 bg-white rounded-md shadow-md\">
        <div class=\"flex my-4\">
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                <p>Back ";
        // line 9
        echo "</p>
            </a>
        </div>
        <h1 class=\"text-2xl font-semibold mb-6 text-center\">Ressources</h1>

        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <thead>
            <tr class=\"bg-blue-500 text-white p-5\">
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Id</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Type</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Contenu</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 25
            echo "                <tr class=\"hover:bg-gray-100\">
                    <td class=\"px-4 py-2\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "type", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "contenu", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2 flex justify-center\">
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ressource_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"flex items-center inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                            <p>show";
            // line 31
            echo "</p>
                        </a>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ressource_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ressource"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded ml-4\">
                            <p>edit";
            // line 34
            echo "</p>
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "                <tr>
                    <td colspan=\"3\" class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">Aucun enregistrement trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ressource_new");
        echo "\" class=\"mt-4 bg-green-500 hover:bg-green-700 text-white p-2 rounded inline-block\">
            <p>Add <i class=\"fa-solid fa-plus fa-xl\"></i></p>
        </a>
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
        return "adminUser/ressource/index.html.twig";
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
        return array (  169 => 46,  164 => 43,  155 => 39,  146 => 34,  142 => 33,  138 => 31,  134 => 30,  129 => 28,  125 => 27,  121 => 26,  118 => 25,  113 => 24,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ressources{% endblock %}

{% block body %}
    <div class=\"max-w-5xl mx-auto mt-8 p-6 bg-white rounded-md shadow-md\">
        <div class=\"flex my-4\">
            <a href=\"{{ path('homepage') }}\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                <p>Back {#<i class=\"fa-solid fa-arrow-left fa-xl\"></i>#}</p>
            </a>
        </div>
        <h1 class=\"text-2xl font-semibold mb-6 text-center\">Ressources</h1>

        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <thead>
            <tr class=\"bg-blue-500 text-white p-5\">
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Id</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Type</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Contenu</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider\">Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for ressource in ressources %}
                <tr class=\"hover:bg-gray-100\">
                    <td class=\"px-4 py-2\">{{ ressource.id }}</td>
                    <td class=\"px-4 py-2\">{{ ressource.type }}</td>
                    <td class=\"px-4 py-2\">{{ ressource.contenu }}</td>
                    <td class=\"px-4 py-2 flex justify-center\">
                        <a href=\"{{ path('app_ressource_show', {'id': ressource.id}) }}\" class=\"flex items-center inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                            <p>show{# <i class=\"fa-solid fa-eye fa-xl\"></i> #}</p>
                        </a>
                        <a href=\"{{ path('app_ressource_edit', {'id': ressource.id}) }}\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded ml-4\">
                            <p>edit{# <i class=\"fa-solid fa-pen fa-xl\"></i> #}</p>
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\" class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">Aucun enregistrement trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_ressource_new') }}\" class=\"mt-4 bg-green-500 hover:bg-green-700 text-white p-2 rounded inline-block\">
            <p>Add <i class=\"fa-solid fa-plus fa-xl\"></i></p>
        </a>
    </div>
{% endblock %}
", "adminUser/ressource/index.html.twig", "/var/www/app/templates/adminUser/ressource/index.html.twig");
    }
}
