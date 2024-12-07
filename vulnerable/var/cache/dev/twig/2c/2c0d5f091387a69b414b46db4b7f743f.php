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

/* adminUser/competence/index.html.twig */
class __TwigTemplate_fd62bbc71526c9448f5619559b0d4338 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/competence/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/competence/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adminUser/competence/index.html.twig", 1);
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

        echo "Compétences";
        
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
        <h1 class=\"text-2xl font-semibold mb-6\">Compétences</h1>
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
            <p>Back ";
        // line 9
        echo "</p>
        </a>
        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <thead>
            <tr>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Id</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Nom</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) || array_key_exists("competences", $context) ? $context["competences"] : (function () { throw new RuntimeError('Variable "competences" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 21
            echo "                <tr class=\"hover:bg-gray-100\">
                    <td class=\"px-4 py-2\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2 flex justify-center\">
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["competence"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                            <p>show";
            // line 26
            echo "</p>
                        </a>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competence_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["competence"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded ml-4\">
                            <p>edit";
            // line 29
            echo "</p>
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <tr>
                    <td colspan=\"3\" class=\"px-4 py-2\">Aucun enregistrement trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competence_new");
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
        return "adminUser/competence/index.html.twig";
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
        return array (  161 => 41,  156 => 38,  147 => 34,  138 => 29,  134 => 28,  130 => 26,  126 => 25,  121 => 23,  117 => 22,  114 => 21,  109 => 20,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Compétences{% endblock %}

{% block body %}
    <div class=\"max-w-5xl mx-auto my-8 p-6 bg-white rounded-md shadow-md\">
        <h1 class=\"text-2xl font-semibold mb-6\">Compétences</h1>
        <a href=\"{{ path('homepage') }}\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
            <p>Back {#<i class=\"fa-solid fa-arrow-left fa-xl\"></i>#}</p>
        </a>
        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <thead>
            <tr>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Id</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Nom</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider\">Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for competence in competences %}
                <tr class=\"hover:bg-gray-100\">
                    <td class=\"px-4 py-2\">{{ competence.id }}</td>
                    <td class=\"px-4 py-2\">{{ competence.nom }}</td>
                    <td class=\"px-4 py-2 flex justify-center\">
                        <a href=\"{{ path('app_competence_show', {'id': competence.id}) }}\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                            <p>show{# <i class=\"fa-solid fa-eye fa-xl\"></i> #}</p>
                        </a>
                        <a href=\"{{ path('app_competence_edit', {'id': competence.id}) }}\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded ml-4\">
                            <p>edit{# <i class=\"fa-solid fa-pen fa-xl\"></i> #}</p>
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\" class=\"px-4 py-2\">Aucun enregistrement trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_competence_new') }}\" class=\"mt-4 bg-green-500 hover:bg-green-700 text-white p-2 rounded inline-block\">
            <p>Add <i class=\"fa-solid fa-plus fa-xl\"></i></p>
        </a>
    </div>
{% endblock %}
", "adminUser/competence/index.html.twig", "/var/www/app/templates/adminUser/competence/index.html.twig");
    }
}