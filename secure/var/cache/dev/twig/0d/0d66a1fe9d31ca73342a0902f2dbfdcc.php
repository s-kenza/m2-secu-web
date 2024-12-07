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

/* adminUser/competence/_form.html.twig */
class __TwigTemplate_2ec13945889ba4a990ed77bc4211dba1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/competence/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/competence/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6, mb-4, max-w-md, flex, justify-center"]]);
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3) != "_token")) {
                echo " ";
                // line 4
                echo "        <div class=\"mb-4 float-left mr-8 pb-2\">
            ";
                // line 5
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
                echo "
            ";
                // line 6
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "flex justify-around shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"]]);
                echo "
            ";
                // line 7
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                echo "
        </div>
    ";
            } else {
                // line 10
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "hidden"]]);
                echo " ";
                // line 11
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<div class=\"inline-flex justify-end space-x-2 mt-8 w-full\">
    <button type=\"submit\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-4\">
        Valider ";
        // line 16
        echo "    </button>
    ";
        // line 17
        if ((isset($context["deleteBtn"]) || array_key_exists("deleteBtn", $context) ? $context["deleteBtn"] : (function () { throw new RuntimeError('Variable "deleteBtn" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competence_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to delete this item?');\" class=\"inline-block bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded\">
            Delete ";
            // line 20
            echo "        </a>
    ";
        }
        // line 22
        echo "    </div>
";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "adminUser/competence/_form.html.twig";
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
        return array (  104 => 23,  101 => 22,  97 => 20,  92 => 18,  90 => 17,  87 => 16,  83 => 13,  76 => 11,  72 => 10,  66 => 7,  62 => 6,  58 => 5,  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'space-y-6, mb-4, max-w-md, flex, justify-center'}}) }}
{% for field in form %}
    {% if field.vars.name != '_token' %} {# Ne pas afficher le champ Token #}
        <div class=\"mb-4 float-left mr-8 pb-2\">
            {{ form_label(field) }}
            {{ form_widget(field, {'attr': {'class': 'flex justify-around shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'}}) }}
            {{ form_errors(field) }}
        </div>
    {% else %}
        {{ form_widget(field, {'attr': {'class': 'hidden'}}) }} {# Rendre le champ Token caché #}
    {% endif %}
{% endfor %}
<div class=\"inline-flex justify-end space-x-2 mt-8 w-full\">
    <button type=\"submit\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-4\">
        Valider {#<i class=\"fa-solid fa-floppy-disk fa-xl\"></i>#}
    </button>
    {% if deleteBtn %}
        <a href=\"{{ path('app_competence_delete', {'id': competence.id}) }}\" onclick=\"return confirm('Are you sure you want to delete this item?');\" class=\"inline-block bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded\">
            Delete {#<i class=\"fa-solid fa-trash fa-xl\"></i>#}
        </a>
    {% endif %}
    </div>
{{ form_end(form) }}
", "adminUser/competence/_form.html.twig", "/var/www/app/templates/adminUser/competence/_form.html.twig");
    }
}
