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

/* adminUser/atelier/show.html.twig */
class __TwigTemplate_a9d439fd4a77c2bc0e6a9d7170482e14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/atelier/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/atelier/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adminUser/atelier/show.html.twig", 1);
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

        echo "Atelier";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_index");
        echo "\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                <i class=\"fa-solid fa-arrow-left fa-xl\"></i>
            </a>
        </div>
        <h1 class=\"text-2xl font-semibold mb-6 text-start\">Atelier</h1>

        <table class=\"min-w-full leading-normal\">
            <tbody>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Id</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Nom</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Intervenant</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 26
        echo twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 26, $this->source); })()), "intervenant", [], "any", false, false, false, 26);
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Secteur</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 30, $this->source); })()), "secteur", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Salle</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 35, $this->source); })()), "salle", [], "any", false, false, false, 35));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["salles"]) {
            // line 36
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salles"], "nom", [], "any", false, false, false, 36), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 36)) {
                echo ", ";
            }
            // line 37
            echo "                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                        Aucune salle associé
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Ressource</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 45, $this->source); })()), "ressource", [], "any", false, false, false, 45));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ressources"]) {
            // line 46
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressources"], "type", [], "any", false, false, false, 46), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 46)) {
                echo ", ";
            }
            // line 47
            echo "                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                        Aucune ressource associé
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressources'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Métier</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 55, $this->source); })()), "metier", [], "any", false, false, false, 55));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["metiers"]) {
            // line 56
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metiers"], "nom", [], "any", false, false, false, 56), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 56)) {
                echo ", ";
            }
            // line 57
            echo "                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                        Aucun métier associé
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metiers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Date de début</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 64
        ((twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 64, $this->source); })()), "getDateDebut", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 64, $this->source); })()), "getDateDebut", [], "method", false, false, false, 64), "d-m-Y"), "html", null, true))) : (print ("Non défini")));
        echo "</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Date de fin</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
        // line 68
        ((twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 68, $this->source); })()), "getDateFin", [], "any", false, false, false, 68)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 68, $this->source); })()), "getDateFin", [], "method", false, false, false, 68), "d-m-Y"), "html", null, true))) : (print ("Non défini")));
        echo "</td>
            </tr>
            </tbody>
        </table>

        <div class=\"flex justify-end space-x-2 mt-4\">
            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
        echo "\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded\">
                <p>Edit ";
        // line 75
        echo "</p>
            </a>
            <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
        echo "\" onclick=\"return confirm('Are you sure you want to delete this item?');\" class=\"inline-block bg-red-500 hover:bg-red-700 text-white p-2 rounded\">
                <p>Delete ";
        // line 78
        echo "</p>
            </a>
            ";
        // line 80
        echo twig_include($this->env, $context, "adminUser/atelier/_delete_form.html.twig");
        echo "
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
        return "adminUser/atelier/show.html.twig";
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
        return array (  318 => 80,  314 => 78,  310 => 77,  306 => 75,  302 => 74,  293 => 68,  286 => 64,  280 => 60,  273 => 58,  260 => 57,  254 => 56,  236 => 55,  229 => 50,  222 => 48,  209 => 47,  203 => 46,  185 => 45,  178 => 40,  171 => 38,  158 => 37,  152 => 36,  134 => 35,  126 => 30,  119 => 26,  112 => 22,  105 => 18,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Atelier{% endblock %}

{% block body %}
    <div class=\"max-w-5xl mx-auto my-8 p-6 bg-white rounded-md shadow-md\">
        <div class=\"flex my-4\">
            <a href=\"{{ path('app_atelier_index') }}\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                <i class=\"fa-solid fa-arrow-left fa-xl\"></i>
            </a>
        </div>
        <h1 class=\"text-2xl font-semibold mb-6 text-start\">Atelier</h1>

        <table class=\"min-w-full leading-normal\">
            <tbody>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Id</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ atelier.id }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Nom</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ atelier.nom }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Intervenant</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ atelier.intervenant|raw }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Secteur</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ atelier.secteur }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Salle</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                    {% for salles in atelier.salle %}
                        {{ salles.nom }}{% if not loop.last %}, {% endif %}
                    {% else %}
                        Aucune salle associé
                    {% endfor %}
                </td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Ressource</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                    {% for ressources in atelier.ressource %}
                        {{ ressources.type }}{% if not loop.last %}, {% endif %}
                    {% else %}
                        Aucune ressource associé
                    {% endfor %}
                </td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Métier</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                    {% for metiers in atelier.metier %}
                        {{ metiers.nom }}{% if not loop.last %}, {% endif %}
                    {% else %}
                        Aucun métier associé
                    {% endfor %}
                </td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Date de début</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ atelier.getDateDebut ? atelier.getDateDebut()|date('d-m-Y') : 'Non défini' }}</td>
            </tr>
            <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-right w-64 text-xs font-semibold text-gray-600 uppercase tracking-wider\">Date de fin</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ atelier.getDateFin ? atelier.getDateFin()|date('d-m-Y') : 'Non défini' }}</td>
            </tr>
            </tbody>
        </table>

        <div class=\"flex justify-end space-x-2 mt-4\">
            <a href=\"{{ path('app_atelier_edit', {'id': atelier.id}) }}\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded\">
                <p>Edit {#<i class=\"fa-solid fa-pen-to-square fa-xl\"></i>#}</p>
            </a>
            <a href=\"{{ path('app_atelier_delete', {'id': atelier.id}) }}\" onclick=\"return confirm('Are you sure you want to delete this item?');\" class=\"inline-block bg-red-500 hover:bg-red-700 text-white p-2 rounded\">
                <p>Delete {#<i class=\"fa-solid fa-trash fa-xl\"></i>#}</p>
            </a>
            {{ include('adminUser/atelier/_delete_form.html.twig') }}
        </div>
    </div>
{% endblock %}
", "adminUser/atelier/show.html.twig", "/var/www/app/templates/adminUser/atelier/show.html.twig");
    }
}
