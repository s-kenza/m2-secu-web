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

/* adminUser/atelier/_form.html.twig */
class __TwigTemplate_7731e245daf4533b269c09ce3a5b33b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/atelier/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminUser/atelier/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6 mb-4"]]);
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3) != "_token")) {
                // line 4
                echo "        <div class=\"mb-4\">
            ";
                // line 5
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
                echo "
            ";
                // line 6
                if (twig_matches("/ressource|salle|metier/", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 6), "full_name", [], "any", false, false, false, 6))) {
                    // line 7
                    echo "                <div class=\"mt-2\">
                    ";
                    // line 8
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 9
                        echo "                        <div class=\"flex items-center mb-2\">
                            ";
                        // line 10
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "shadow border rounded mr-2 leading-tight focus:outline-none focus:shadow-outline"]]);
                        echo "
                            ";
                        // line 11
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["label_attr" => ["class" => "text-gray-700"]]);
                        echo "
                        </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "                </div>
            ";
                } else {
                    // line 16
                    echo "                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"]]);
                    echo "
            ";
                }
                // line 18
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                echo "
        </div>
    ";
            } else {
                // line 21
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "hidden"]]);
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        <div class=\"inline-flex justify-end space-x-2 mt-8 w-full\">
            <button type=\"submit\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold p-2 rounded\">
                Valider ";
        // line 28
        echo "            </button>
            ";
        // line 29
        if ((isset($context["deleteBtn"]) || array_key_exists("deleteBtn", $context) ? $context["deleteBtn"] : (function () { throw new RuntimeError('Variable "deleteBtn" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you want to delete this item?');\" class=\"inline-block bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded\">
                    Delete ";
            // line 32
            echo "                </a>
            ";
        }
        // line 34
        echo "        </div>
";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
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
        return "adminUser/atelier/_form.html.twig";
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
        return array (  135 => 35,  132 => 34,  128 => 32,  123 => 30,  121 => 29,  118 => 28,  113 => 24,  103 => 21,  96 => 18,  90 => 16,  86 => 14,  77 => 11,  73 => 10,  70 => 9,  66 => 8,  63 => 7,  61 => 6,  57 => 5,  54 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'space-y-6 mb-4'}}) }}
{% for field in form %}
    {% if field.vars.name != '_token' %}
        <div class=\"mb-4\">
            {{ form_label(field) }}
            {% if field.vars.full_name matches '/ressource|salle|metier/' %}
                <div class=\"mt-2\">
                    {% for child in field %}
                        <div class=\"flex items-center mb-2\">
                            {{ form_widget(child, {'attr': {'class': 'shadow border rounded mr-2 leading-tight focus:outline-none focus:shadow-outline'}}) }}
                            {{ form_label(child, null, {'label_attr': {'class': 'text-gray-700'}}) }}
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                {{ form_widget(field, {'attr': {'class': 'shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'}}) }}
            {% endif %}
            {{ form_errors(field) }}
        </div>
    {% else %}
        {{ form_widget(field, {'attr': {'class': 'hidden'}}) }}
    {% endif %}
{% endfor %}

        <div class=\"inline-flex justify-end space-x-2 mt-8 w-full\">
            <button type=\"submit\" class=\"bg-green-500 hover:bg-green-700 text-white font-bold p-2 rounded\">
                Valider {#<i class=\"fa-solid fa-floppy-disk fa-xl\"></i>#}
            </button>
            {% if deleteBtn %}
                <a href=\"{{ path('app_atelier_delete', {'id': atelier.id}) }}\" onclick=\"return confirm('Are you sure you want to delete this item?');\" class=\"inline-block bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded\">
                    Delete {#<i class=\"fa-solid fa-trash fa-xl\"></i>#}
                </a>
            {% endif %}
        </div>
{{ form_end(form) }}
", "adminUser/atelier/_form.html.twig", "/var/www/app/templates/adminUser/atelier/_form.html.twig");
    }
}
