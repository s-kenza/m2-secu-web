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

/* adminUser/inscription/index.html.twig */
class __TwigTemplate_8611a179a809e64af4a0745f45eb03a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/inscription/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/inscription/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adminUser/inscription/index.html.twig", 1);
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

        echo "Lycéens";
        
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
        echo "    <div class=\"max-w-7xl mx-auto mt-8 p-6 bg-white rounded-md shadow-md\">
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
        <h1 class=\"text-2xl font-semibold mb-6 text-center\">Lycéens</h1>

        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <thead>
            <tr class=\"bg-blue-500 text-white p-5\">
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Id</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Telephone</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Date</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Nom</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Prenom</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Lycée</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Section</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) || array_key_exists("inscriptions", $context) ? $context["inscriptions"] : (function () { throw new RuntimeError('Variable "inscriptions" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 29
            echo "                <tr class=\"hover:bg-gray-100\">
                    <td class=\"px-4 py-2\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "telephone", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["inscription"], "date", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "date", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "prenom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "lycee", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "section", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2 flex justify-center\">
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_show", ["id" => twig_get_attribute($this->env, $this->source, $context["inscription"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"flex items-center inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                            <p>show";
            // line 39
            echo "</p>
                        </a>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["inscription"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded ml-4\">
                            <p>edit";
            // line 42
            echo "</p>
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                <tr>
                    <td colspan=\"8\" class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_new");
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
        return "adminUser/inscription/index.html.twig";
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
        return array (  189 => 54,  184 => 51,  175 => 47,  166 => 42,  162 => 41,  158 => 39,  154 => 38,  149 => 36,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  122 => 29,  117 => 28,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lycéens{% endblock %}

{% block body %}
    <div class=\"max-w-7xl mx-auto mt-8 p-6 bg-white rounded-md shadow-md\">
        <div class=\"flex my-4\">
            <a href=\"{{ path('homepage') }}\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                <p>Back {#<i class=\"fa-solid fa-arrow-left fa-xl\"></i>#}</p>
            </a>
        </div>
        <h1 class=\"text-2xl font-semibold mb-6 text-center\">Lycéens</h1>

        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <thead>
            <tr class=\"bg-blue-500 text-white p-5\">
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Id</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Telephone</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Date</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Nom</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Prenom</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Lycée</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Section</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider\">Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for inscription in inscriptions %}
                <tr class=\"hover:bg-gray-100\">
                    <td class=\"px-4 py-2\">{{ inscription.id }}</td>
                    <td class=\"px-4 py-2\">{{ inscription.telephone }}</td>
                    <td class=\"px-4 py-2\">{{ inscription.date ? inscription.date|date('Y-m-d') : '' }}</td>
                    <td class=\"px-4 py-2\">{{ inscription.nom }}</td>
                    <td class=\"px-4 py-2\">{{ inscription.prenom }}</td>
                    <td class=\"px-4 py-2\">{{ inscription.lycee }}</td>
                    <td class=\"px-4 py-2\">{{ inscription.section }}</td>
                    <td class=\"px-4 py-2 flex justify-center\">
                        <a href=\"{{ path('app_inscription_show', {'id': inscription.id}) }}\" class=\"flex items-center inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                            <p>show{# <i class=\"fa-solid fa-eye fa-xl\"></i> #}</p>
                        </a>
                        <a href=\"{{ path('app_inscription_edit', {'id': inscription.id}) }}\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded ml-4\">
                            <p>edit{# <i class=\"fa-solid fa-pen fa-xl\"></i> #}</p>
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\" class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">No records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_inscription_new') }}\" class=\"mt-4 bg-green-500 hover:bg-green-700 text-white p-2 rounded inline-block\">
            <p>Add <i class=\"fa-solid fa-plus fa-xl\"></i></p>
        </a>
    </div>
{% endblock %}
", "adminUser/inscription/index.html.twig", "/var/www/app/templates/adminUser/inscription/index.html.twig");
    }
}
