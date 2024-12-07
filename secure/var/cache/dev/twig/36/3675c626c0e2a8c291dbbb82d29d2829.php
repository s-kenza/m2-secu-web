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

/* registration/register.html.twig */
class __TwigTemplate_136230d2f4a53820251d4854504dd8fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Inscription";
        
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
        echo "    <div class=\"mx-auto mt-8  bg-white rounded-md shadow-md\" style=\"width: 800px; height: 679px; position: absolute; top:0; bottom: 0; left: 0; right: 0; margin: auto;\">
        <div class=\"flex\">
            <div class=\"p-6\">
            <h1 class=\"text-2xl font-semibold mb-6 text-center\">Inscription</h1>
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 10, $this->source); })()), 'errors');
        echo "

                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-4"]]);
        echo "

                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), "inscription", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "block w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"]]);
        // line 16
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "inscription", [], "any", false, false, false, 17), "prenom", [], "any", false, false, false, 17), 'row', ["label" => "Prénom", "attr" => ["class" => "block w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"]]);
        // line 20
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "block w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"]]);
        // line 23
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "plainPassword", [], "any", false, false, false, 24), 'row', ["label" => "Mot de passe", "attr" => ["class" => "block w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"]]);
        // line 27
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "inscription", [], "any", false, false, false, 28), "telephone", [], "any", false, false, false, 28), 'row', ["label" => "Téléphone", "attr" => ["class" => "block w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"]]);
        // line 31
        echo "

                <div class=\"flex w-full gap-2\">
                    <div class=\"w-full\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "inscription", [], "any", false, false, false, 35), "lycee", [], "any", false, false, false, 35), 'row', ["label" => "Lycée", "attr" => ["class" => "w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"]]);
        // line 38
        echo "
                    </div>
                    <div class=\"w-full\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "inscription", [], "any", false, false, false, 41), "section", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"]]);
        // line 43
        echo "
                    </div>
                </div>

                <div class=\"flex items-center mt-4 gap-2\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "agreeTerms", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"]]);
        // line 50
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "agreeTerms", [], "any", false, false, false, 51), 'label', ["label" => "Accepter les conditions", "label_attr" => ["class" => "block text-sm font-medium text-gray-600"]]);
        // line 54
        echo "
                </div>

                <button type=\"submit\" class=\"w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50\">
                    S'inscrire
                </button>
                ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"flex justify-center\" style=\"width: auto;\">
                <div class=\"flex justify-center items-center half_circle h-full\" style=\"background-color: #FBAB7E; background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%); width: 250px; border-bottom-left-radius: 290px; border-top-left-radius: 290px;\">
                    <div class=\"flex flex-col justify-center items-center\" style=\"gap: 20px;\">
                        <div style=\"width: 0; height: 0; border-style: solid; border-width: 50.6px 32px 0 32px; border-color: white transparent transparent transparent;\"></div>
                        <p class=\"text-white font-small text-3xl text-center\" style=\"max-width: 150px;\">À un clic de nous rejoindre !</p>
                    </div>
                </div>
            </div>
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
        return "registration/register.html.twig";
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
        return array (  163 => 60,  155 => 54,  153 => 51,  150 => 50,  148 => 48,  141 => 43,  139 => 41,  134 => 38,  132 => 35,  126 => 31,  124 => 28,  121 => 27,  119 => 24,  116 => 23,  114 => 21,  111 => 20,  109 => 17,  106 => 16,  104 => 14,  99 => 12,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
    <div class=\"mx-auto mt-8  bg-white rounded-md shadow-md\" style=\"width: 800px; height: 679px; position: absolute; top:0; bottom: 0; left: 0; right: 0; margin: auto;\">
        <div class=\"flex\">
            <div class=\"p-6\">
            <h1 class=\"text-2xl font-semibold mb-6 text-center\">Inscription</h1>
                {{ form_errors(registrationForm) }}

                {{ form_start(registrationForm, {'attr': {'class': 'space-y-4'}}) }}

                {{ form_row(registrationForm.inscription.nom, {
                    'attr': {'class': 'block w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none'}
                }) }}
                {{ form_row(registrationForm.inscription.prenom, {
                    'label': 'Prénom',
                    'attr': {'class': 'block w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none'}
                }) }}
                {{ form_row(registrationForm.email, {
                    'attr': {'class': 'block w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none'}
                }) }}
                {{ form_row(registrationForm.plainPassword, {
                    'label': 'Mot de passe',
                    'attr': {'class': 'block w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none'}
                }) }}
                {{ form_row(registrationForm.inscription.telephone, {
                    'label': 'Téléphone',
                    'attr': {'class': 'block w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none'}
                }) }}

                <div class=\"flex w-full gap-2\">
                    <div class=\"w-full\">
                        {{ form_row(registrationForm.inscription.lycee, {
                                'label': 'Lycée',
                                'attr': {'class': 'w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none'}
                        }) }}
                    </div>
                    <div class=\"w-full\">
                        {{ form_row(registrationForm.inscription.section, {
                                'attr': {'class': 'w-full p-2 mb-2 border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none'}
                        }) }}
                    </div>
                </div>

                <div class=\"flex items-center mt-4 gap-2\">
                    {{ form_widget(registrationForm.agreeTerms, {
                        'attr': {'class': 'h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded'}
                    }) }}
                    {{ form_label(registrationForm.agreeTerms, null, {
                        'label': 'Accepter les conditions',
                        'label_attr': {'class': 'block text-sm font-medium text-gray-600'}
                    }) }}
                </div>

                <button type=\"submit\" class=\"w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50\">
                    S'inscrire
                </button>
                {{ form_end(registrationForm) }}
            </div>
            <div class=\"flex justify-center\" style=\"width: auto;\">
                <div class=\"flex justify-center items-center half_circle h-full\" style=\"background-color: #FBAB7E; background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%); width: 250px; border-bottom-left-radius: 290px; border-top-left-radius: 290px;\">
                    <div class=\"flex flex-col justify-center items-center\" style=\"gap: 20px;\">
                        <div style=\"width: 0; height: 0; border-style: solid; border-width: 50.6px 32px 0 32px; border-color: white transparent transparent transparent;\"></div>
                        <p class=\"text-white font-small text-3xl text-center\" style=\"max-width: 150px;\">À un clic de nous rejoindre !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "registration/register.html.twig", "/var/www/app/templates/registration/register.html.twig");
    }
}
