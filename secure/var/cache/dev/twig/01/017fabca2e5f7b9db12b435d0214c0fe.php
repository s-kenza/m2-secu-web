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

/* front/detail-atelier.html.twig */
class __TwigTemplate_6ab04d2b5ee126b15fb306d38c5a75b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/detail-atelier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/detail-atelier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/detail-atelier.html.twig", 1);
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
        echo "
    ";
        // line 7
        if ( !twig_test_empty((isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "        <div class=\"max-w-5xl mx-auto my-8 p-6 bg-white rounded-md shadow-md\">
            <div class=\"flex my-4\">
                <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                    <i class=\"fa-solid fa-arrow-left fa-xl\"></i>
                </a>
            </div>
            <h1 class=\"text-2xl font-semibold mb-6 text-start\">Atelier: ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "</h1>

            <table class=\"min-w-full leading-normal\">
                <tbody>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Nom</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                </tr>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Intervenant</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 24, $this->source); })()), "intervenant", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                </tr>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Salle</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 29, $this->source); })()), "salle", [], "any", false, false, false, 29));
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
            foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
                // line 30
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salle"], "nom", [], "any", false, false, false, 30), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 30)) {
                    echo ", ";
                }
                // line 31
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
                // line 32
                echo "                            Aucun salle associé
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </td>
                </tr>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Métier</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 39, $this->source); })()), "metier", [], "any", false, false, false, 39));
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
            foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                // line 40
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 40), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 40)) {
                    echo ", ";
                }
                // line 41
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
                // line 42
                echo "                            Aucun métier associé
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                    </td>
                </tr>
                <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Secteur</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 48, $this->source); })()), "secteur", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                </tr>
                <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Ressource</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                    ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 53, $this->source); })()), "getRessource", [], "method", false, false, false, 53));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
                // line 54
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "getNom", [], "method", false, false, false, 54), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 54)) {
                    echo ", ";
                }
                // line 55
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
                // line 56
                echo "                        Aucune ressource associé
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </td>
                </tr>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Date de début</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                        ";
            // line 63
            ((twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 63, $this->source); })()), "dateDebut", [], "any", false, false, false, 63)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 63, $this->source); })()), "dateDebut", [], "any", false, false, false, 63), "d-m-Y"), "html", null, true))) : (print ("Non défini")));
            echo "
                    </td>
                </tr>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Date de fin</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                        ";
            // line 69
            ((twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 69, $this->source); })()), "dateFin", [], "any", false, false, false, 69)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 69, $this->source); })()), "dateFin", [], "any", false, false, false, 69), "d-m-Y"), "html", null, true))) : (print ("Non défini")));
            echo "
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 76
            echo "        <p class=\"text-gray-500 text-center my-8\">Aucun détail d'atelier disponible.</p>
    ";
        }
        // line 78
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
        return "front/detail-atelier.html.twig";
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
        return array (  311 => 78,  307 => 76,  297 => 69,  288 => 63,  281 => 58,  274 => 56,  261 => 55,  255 => 54,  237 => 53,  229 => 48,  223 => 44,  216 => 42,  203 => 41,  197 => 40,  179 => 39,  172 => 34,  165 => 32,  152 => 31,  146 => 30,  128 => 29,  120 => 24,  113 => 20,  104 => 14,  97 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Atelier{% endblock %}

{% block body %}

    {% if atelier is not empty %}
        <div class=\"max-w-5xl mx-auto my-8 p-6 bg-white rounded-md shadow-md\">
            <div class=\"flex my-4\">
                <a href=\"{{ path('homepage') }}\" class=\"inline-block bg-blue-500 hover:bg-blue-700 text-white p-2 rounded\">
                    <i class=\"fa-solid fa-arrow-left fa-xl\"></i>
                </a>
            </div>
            <h1 class=\"text-2xl font-semibold mb-6 text-start\">Atelier: {{ atelier.nom }}</h1>

            <table class=\"min-w-full leading-normal\">
                <tbody>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Nom</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ atelier.nom }}</td>
                </tr>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Intervenant</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ atelier.intervenant }}</td>
                </tr>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Salle</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                        {% for salle in atelier.salle %}
                            {{ salle.nom }}{% if not loop.last %}, {% endif %}
                        {% else %}
                            Aucun salle associé
                        {% endfor %}
                    </td>
                </tr>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Métier</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                        {% for metier in atelier.metier %}
                            {{ metier.nom }}{% if not loop.last %}, {% endif %}
                        {% else %}
                            Aucun métier associé
                        {% endfor %}
                    </td>
                </tr>
                <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Secteur</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">{{ atelier.secteur }}</td>
                </tr>
                <tr class=\"border-b\">
                <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Ressource</th>
                <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                    {% for ressource in atelier.getRessource() %}
                        {{ ressource.getNom() }}{% if not loop.last %}, {% endif %}
                    {% else %}
                        Aucune ressource associé
                    {% endfor %}
                </td>
                </tr>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Date de début</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                        {{ atelier.dateDebut ? atelier.dateDebut|date('d-m-Y') : 'Non défini' }}
                    </td>
                </tr>
                <tr class=\"border-b\">
                    <th class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider\">Date de fin</th>
                    <td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm\">
                        {{ atelier.dateFin ? atelier.dateFin|date('d-m-Y') : 'Non défini' }}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    {% else %}
        <p class=\"text-gray-500 text-center my-8\">Aucun détail d'atelier disponible.</p>
    {% endif %}

{% endblock %}
", "front/detail-atelier.html.twig", "/var/www/app/templates/front/detail-atelier.html.twig");
    }
}
