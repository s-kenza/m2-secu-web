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

/* adminUser/atelier/index.html.twig */
class __TwigTemplate_64914de960df37e4550b9295617e4920 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/atelier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/atelier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adminUser/atelier/index.html.twig", 1);
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

        echo "Ateliers";
        
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
        <h1 class=\"text-2xl font-semibold mb-6 text-center\">Ateliers</h1>

        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <thead>
            <tr class=\"bg-blue-500 text-white p-5\">
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Id</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Nom</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Intervenant</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Métier</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Salle</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Ressource</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Date de début</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Date de fin</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
            // line 30
            echo "                <tr>
                    <td class=\"px-4 py-2\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["atelier"], "intervenant", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "intervenant", [], "any", false, false, false, 33), "html", null, true))) : (print ("Non défini")));
            echo "</td>
                    <td class=\"px-4 py-2\">
                        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["atelier"], "metier", [], "any", false, false, false, 35));
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
                // line 36
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metiers"], "nom", [], "any", false, false, false, 36), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 36)) {
                    echo ", ";
                }
                // line 37
                echo "                        ";
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
                echo "                            Aucun métier(s)
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metiers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    </td>
                    <td class=\"px-4 py-2\">
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["atelier"], "salle", [], "any", false, false, false, 42));
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
                // line 43
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salles"], "nom", [], "any", false, false, false, 43), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 43)) {
                    echo ", ";
                }
                // line 44
                echo "                        ";
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
                // line 45
                echo "                            Aucune salle(s)
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    </td>
                    <td class=\"px-4 py-2\">
                        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["atelier"], "ressource", [], "any", false, false, false, 49));
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
                // line 50
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressources"], "type", [], "any", false, false, false, 50), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 50)) {
                    echo ", ";
                }
                // line 51
                echo "                        ";
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
                // line 52
                echo "                            Aucune ressource(s)
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressources'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                    </td>
                    <td class=\"px-4 py-2\">";
            // line 55
            ((twig_get_attribute($this->env, $this->source, $context["atelier"], "getDateDebut", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "getDateDebut", [], "method", false, false, false, 55), "d-m-Y"), "html", null, true))) : (print ("Non défini")));
            echo "</td>
                    <td class=\"px-4 py-2\">";
            // line 56
            ((twig_get_attribute($this->env, $this->source, $context["atelier"], "getDateFin", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "getDateFin", [], "method", false, false, false, 56), "d-m-Y"), "html", null, true))) : (print ("Non défini")));
            echo "</td>
                    <td class=\"px-4 py-2 flex justify-center\">
                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"flex items-center inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                            <p>show";
            // line 59
            echo "</p>
                        </a>
                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded ml-4\">
                            <p>edit";
            // line 62
            echo "</p>
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "                <tr>
                    <td colspan=\"3\" class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">Aucun enregistrement trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atelier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_new");
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
        return "adminUser/atelier/index.html.twig";
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
        return array (  326 => 74,  321 => 71,  312 => 67,  303 => 62,  299 => 61,  295 => 59,  291 => 58,  286 => 56,  282 => 55,  279 => 54,  272 => 52,  259 => 51,  253 => 50,  235 => 49,  231 => 47,  224 => 45,  211 => 44,  205 => 43,  187 => 42,  183 => 40,  176 => 38,  163 => 37,  157 => 36,  139 => 35,  134 => 33,  130 => 32,  126 => 31,  123 => 30,  118 => 29,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ateliers{% endblock %}

{% block body %}
    <div class=\"max-w-7xl mx-auto mt-8 p-6 bg-white rounded-md shadow-md\">
        <div class=\"flex my-4\">
            <a href=\"{{ path('homepage') }}\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                <p>Back {#<i class=\"fa-solid fa-arrow-left fa-xl\"></i>#}</p>
            </a>
        </div>
        <h1 class=\"text-2xl font-semibold mb-6 text-center\">Ateliers</h1>

        <table class=\"min-w-full leading-normal mt-12 mb-12\">
            <thead>
            <tr class=\"bg-blue-500 text-white p-5\">
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Id</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Nom</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Intervenant</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Métier</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Salle</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Ressource</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Date de début</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider text-left pl-4\">Date de fin</th>
                <th class=\"px-5 py-3 text-sm font-semibold uppercase tracking-wider\">Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for atelier in ateliers %}
                <tr>
                    <td class=\"px-4 py-2\">{{ atelier.id }}</td>
                    <td class=\"px-4 py-2\">{{ atelier.nom }}</td>
                    <td class=\"px-4 py-2\">{{ atelier.intervenant ? atelier.intervenant : 'Non défini' }}</td>
                    <td class=\"px-4 py-2\">
                        {% for metiers in atelier.metier %}
                            {{ metiers.nom }}{% if not loop.last %}, {% endif %}
                        {% else %}
                            Aucun métier(s)
                        {% endfor %}
                    </td>
                    <td class=\"px-4 py-2\">
                        {% for salles in atelier.salle %}
                            {{ salles.nom }}{% if not loop.last %}, {% endif %}
                        {% else %}
                            Aucune salle(s)
                        {% endfor %}
                    </td>
                    <td class=\"px-4 py-2\">
                        {% for ressources in atelier.ressource %}
                            {{ ressources.type }}{% if not loop.last %}, {% endif %}
                        {% else %}
                            Aucune ressource(s)
                        {% endfor %}
                    </td>
                    <td class=\"px-4 py-2\">{{ atelier.getDateDebut ? atelier.getDateDebut()|date('d-m-Y') : 'Non défini' }}</td>
                    <td class=\"px-4 py-2\">{{ atelier.getDateFin ? atelier.getDateFin()|date('d-m-Y') : 'Non défini' }}</td>
                    <td class=\"px-4 py-2 flex justify-center\">
                        <a href=\"{{ path('app_atelier_show', {'id': atelier.id}) }}\" class=\"flex items-center inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                            <p>show{# <i class=\"fa-regular fa-eye fa-xl\"></i> #}</p>
                        </a>
                        <a href=\"{{ path('app_atelier_edit', {'id': atelier.id}) }}\" class=\"inline-block bg-yellow-500 hover:bg-yellow-700 text-white p-2 rounded ml-4\">
                            <p>edit{# <i class=\"fa-solid fa-pen-to-square fa-xl\"></i> #}</p>
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

        <a href=\"{{ path('app_atelier_new') }}\" class=\"mt-4 bg-green-500 hover:bg-green-700 text-white p-2 rounded inline-block\">
            <p>Add <i class=\"fa-solid fa-plus fa-xl\"></i></p>
        </a>
    </div>
{% endblock %}
", "adminUser/atelier/index.html.twig", "/var/www/app/templates/adminUser/atelier/index.html.twig");
    }
}
