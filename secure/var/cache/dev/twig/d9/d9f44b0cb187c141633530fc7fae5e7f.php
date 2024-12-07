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

/* front/all-articles.html.twig */
class __TwigTemplate_e782f5ffd0bc28d0a35ae45c98433793 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/all-articles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/all-articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/all-articles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container mx-auto\">
        ";
        // line 4
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "            <div class=\"grid gap-2 m-24 mb-0 mt-8\">
                <div class=\"col-span-12 border-blue-500 rounded-lg align-center flex flex-col gap-y-2 text-center items-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Ateliers</p>
                    <p>Liste de tous les ateliers disponibles</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_index");
            echo "\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Métier</p>
                    <p>Liste de tous les métiers disponibles</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_index");
            echo "\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Activités</p>
                    <p>Liste de toutes les activités disponibles</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
            echo "\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Compétences</p>
                    <p>Liste de toutes les compétences</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competence_index");
            echo "\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Secteurs</p>
                    <p>Liste de tous les secteurs</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secteur_index");
            echo "\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Ressources</p>
                    <p>Liste de toutes les ressources disponibles</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ressource_index");
            echo "\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Salles</p>
                    <p>Liste de toutes les salles</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
            echo "\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Lycéens</p>
                    <p>Liste de tous les lycéens</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_index");
            echo "\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Lycée</p>
                    <p>Liste de tous les lycées des lycéens</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lycee_index");
            echo "\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Sections</p>
                    <p>Liste de toutes les sections</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_section_index");
            echo "\">Détails</a>
                </div>
            </div>
        ";
        }
        // line 58
        echo "        <div class=\"mb-20 mt-4\">
            <h1 class=\"text-2xl font-bold mb-4 p-6 text-center\">Forum 2024 - Liste des ateliers</h1>

            ";
        // line 61
        if ( !twig_test_empty((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 61, $this->source); })()))) {
            // line 62
            echo "                <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4\">
                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
                // line 64
                echo "                        <div class=\"bg-white p-6 rounded-lg shadow-md\">
                            <h2 class=\"text-xl font-semibold mb-2\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "getNom", [], "method", false, false, false, 65), "html", null, true);
                echo "</h2>
                            <p class=\"text-gray-600 text-sm mb-2\">
                                <span class=\"font-semibold\">Date :</span> Du ";
                // line 67
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "getDateDebut", [], "method", false, false, false, 67), "d-m-Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "getDateFin", [], "method", false, false, false, 67), "d-m-Y"), "html", null, true);
                echo "
                            </p>
                            <p class=\"text-gray-600 text-sm mb-2\">
                                <span class=\"font-semibold\">Salle :</span>
                                ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["atelier"], "getSalle", [], "method", false, false, false, 71));
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
                    // line 72
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salle"], "getNom", [], "method", false, false, false, 72), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 72)) {
                        echo ", ";
                    }
                    // line 73
                    echo "                                ";
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
                    // line 74
                    echo "                                    Aucune salle associé
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                            </p>
                            <p class=\"text-gray-600 text-sm mb-2\">
                                <span class=\"font-semibold\">Métier(s) :</span>
                                ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["atelier"], "getMetier", [], "method", false, false, false, 79));
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
                    // line 80
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metier"], "getNom", [], "method", false, false, false, 80), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 80)) {
                        echo ", ";
                    }
                    // line 81
                    echo "                                ";
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
                    // line 82
                    echo "                                    Aucun métier associé
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                            </p>
                            <p class=\"text-gray-600 text-sm mb-2\">
                                <span class=\"font-semibold\">Ressource :</span>
                                ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["atelier"], "getRessource", [], "method", false, false, false, 87));
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
                    // line 88
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "getType", [], "method", false, false, false, 88), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 88)) {
                        echo ", ";
                    }
                    // line 89
                    echo "                                ";
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
                    // line 90
                    echo "                                    Aucune ressource associé
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                            </p>
                            <p class=\"text-gray-600 text-sm mb-2\">
                                <span class=\"font-semibold\">Secteur :</span> ";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "getSecteur", [], "method", false, false, false, 94), "html", null, true);
                echo "
                            </p>
                            <div class=\"flex flex-col gap-2 items-center justify-center\">
                                <p class=\"inline-block px-5 bg-gray-500 text-white border rounded\">
                                    <span class=\"font-semibold\">Intervenant(s):</span> ";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atelier"], "getIntervenant", [], "method", false, false, false, 98), "html", null, true);
                echo "
                                </p>
                                <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail-atelier", ["id" => twig_get_attribute($this->env, $this->source, $context["atelier"], "getId", [], "method", false, false, false, 100)]), "html", null, true);
                echo "\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-semibold px-2 border border-blue-500 rounded\">
                                    Détail
                                </a>
                            </div>

                            <!-- Ajoutez d'autres informations selon vos besoins -->
                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atelier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                </div>
            ";
        } else {
            // line 111
            echo "                <p class=\"text-gray-500\">Aucun atelier trouvé.</p>
            ";
        }
        // line 113
        echo "        </div>
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
        return "front/all-articles.html.twig";
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
        return array (  370 => 113,  366 => 111,  362 => 109,  347 => 100,  342 => 98,  335 => 94,  331 => 92,  324 => 90,  311 => 89,  305 => 88,  287 => 87,  282 => 84,  275 => 82,  262 => 81,  256 => 80,  238 => 79,  233 => 76,  226 => 74,  213 => 73,  207 => 72,  189 => 71,  180 => 67,  175 => 65,  172 => 64,  168 => 63,  165 => 62,  163 => 61,  158 => 58,  151 => 54,  143 => 49,  135 => 44,  127 => 39,  119 => 34,  111 => 29,  103 => 24,  95 => 19,  87 => 14,  79 => 9,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container mx-auto\">
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"grid gap-2 m-24 mb-0 mt-8\">
                <div class=\"col-span-12 border-blue-500 rounded-lg align-center flex flex-col gap-y-2 text-center items-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Ateliers</p>
                    <p>Liste de tous les ateliers disponibles</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"{{ path('app_atelier_index') }}\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Métier</p>
                    <p>Liste de tous les métiers disponibles</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"{{ path('app_metier_index') }}\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Activités</p>
                    <p>Liste de toutes les activités disponibles</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"{{ path('app_activite_index') }}\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Compétences</p>
                    <p>Liste de toutes les compétences</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"{{ path('app_competence_index') }}\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Secteurs</p>
                    <p>Liste de tous les secteurs</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"{{ path('app_secteur_index') }}\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Ressources</p>
                    <p>Liste de toutes les ressources disponibles</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"{{ path('app_ressource_index') }}\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Salles</p>
                    <p>Liste de toutes les salles</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"{{ path('app_salle_index') }}\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Lycéens</p>
                    <p>Liste de tous les lycéens</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"{{ path('app_inscription_index') }}\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Lycée</p>
                    <p>Liste de tous les lycées des lycéens</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"{{ path('app_lycee_index') }}\">Détails</a>
                </div>
                <div class=\"col-span-4 border-blue-500 rounded-lg flex flex-col gap-y-2 items-center text-center justify-center p-8 shadow-lg m-8 hover:bg-gray-100\">
                    <p class=\"text-2xl mb-4\">Sections</p>
                    <p>Liste de toutes les sections</p>
                    <a class=\"bg-blue-500 py-1 px-3 rounded-lg text-white mt-4\" href=\"{{ path('app_section_index') }}\">Détails</a>
                </div>
            </div>
        {% endif %}
        <div class=\"mb-20 mt-4\">
            <h1 class=\"text-2xl font-bold mb-4 p-6 text-center\">Forum 2024 - Liste des ateliers</h1>

            {% if ateliers is not empty %}
                <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4\">
                    {% for atelier in ateliers %}
                        <div class=\"bg-white p-6 rounded-lg shadow-md\">
                            <h2 class=\"text-xl font-semibold mb-2\">{{ atelier.getNom() }}</h2>
                            <p class=\"text-gray-600 text-sm mb-2\">
                                <span class=\"font-semibold\">Date :</span> Du {{ atelier.getDateDebut()|date('d-m-Y') }} au {{ atelier.getDateFin()|date('d-m-Y') }}
                            </p>
                            <p class=\"text-gray-600 text-sm mb-2\">
                                <span class=\"font-semibold\">Salle :</span>
                                {% for salle in atelier.getSalle() %}
                                    {{ salle.getNom() }}{% if not loop.last %}, {% endif %}
                                {% else %}
                                    Aucune salle associé
                                {% endfor %}
                            </p>
                            <p class=\"text-gray-600 text-sm mb-2\">
                                <span class=\"font-semibold\">Métier(s) :</span>
                                {% for metier in atelier.getMetier() %}
                                    {{ metier.getNom() }}{% if not loop.last %}, {% endif %}
                                {% else %}
                                    Aucun métier associé
                                {% endfor %}
                            </p>
                            <p class=\"text-gray-600 text-sm mb-2\">
                                <span class=\"font-semibold\">Ressource :</span>
                                {% for ressource in atelier.getRessource() %}
                                    {{ ressource.getType() }}{% if not loop.last %}, {% endif %}
                                {% else %}
                                    Aucune ressource associé
                                {% endfor %}
                            </p>
                            <p class=\"text-gray-600 text-sm mb-2\">
                                <span class=\"font-semibold\">Secteur :</span> {{ atelier.getSecteur() }}
                            </p>
                            <div class=\"flex flex-col gap-2 items-center justify-center\">
                                <p class=\"inline-block px-5 bg-gray-500 text-white border rounded\">
                                    <span class=\"font-semibold\">Intervenant(s):</span> {{ atelier.getIntervenant() }}
                                </p>
                                <a href=\"{{ path('detail-atelier', {'id': atelier.getId()}) }}\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-semibold px-2 border border-blue-500 rounded\">
                                    Détail
                                </a>
                            </div>

                            <!-- Ajoutez d'autres informations selon vos besoins -->
                        </div>

                    {% endfor %}
                </div>
            {% else %}
                <p class=\"text-gray-500\">Aucun atelier trouvé.</p>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "front/all-articles.html.twig", "/var/www/app/templates/front/all-articles.html.twig");
    }
}
