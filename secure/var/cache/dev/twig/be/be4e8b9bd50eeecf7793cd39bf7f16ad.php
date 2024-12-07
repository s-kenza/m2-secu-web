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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_8ec2e9e2fc2a8bde0863ab5d5a78d3b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        echo "<div class=\"max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md\">
    <h1 class=\"text-3xl font-semibold mb-6\">Bienvenue sur le site!</h1>

    <p class=\"text-lg\">
        Super ! Vous êtes maintenant inscrit !<br><br>
    </p>

    <p class=\"text-lg\">
        N'hésiter pas à découvrir tous nos ateliers !
    </p>

    <p class=\"text-lg\">
        À bientôt !
    </p>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md\">
    <h1 class=\"text-3xl font-semibold mb-6\">Bienvenue sur le site!</h1>

    <p class=\"text-lg\">
        Super ! Vous êtes maintenant inscrit !<br><br>
    </p>

    <p class=\"text-lg\">
        N'hésiter pas à découvrir tous nos ateliers !
    </p>

    <p class=\"text-lg\">
        À bientôt !
    </p>
</div>
", "registration/confirmation_email.html.twig", "/var/www/app/templates/registration/confirmation_email.html.twig");
    }
}
