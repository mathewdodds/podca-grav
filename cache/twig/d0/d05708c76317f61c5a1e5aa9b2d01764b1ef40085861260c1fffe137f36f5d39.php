<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/guest.html.twig */
class __TwigTemplate_26e4df12a2837b2104a1350031d1c49ac4d33a52a1aac0be1fae278ae5199f72 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'guest' => [$this, 'block_guest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/guest.html.twig"));

        // line 1
        $this->displayBlock('guest', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_guest($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "guest"));

        // line 2
        echo "
    <div class=\"text-center p-3 p-md-5 bg-white\">
        <div class=\"mb-4\">
            <img src=\"";
        // line 5
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []);
        echo "\" alt=\"Image\" class=\"w-50 mx-auto img-fluid rounded-circle\">
        </div>
        <div class=\"\">
            <h3 class=\"font-weight-light h5\">";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3>
            <p>";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
        </div>
    </div>

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/guest.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  57 => 8,  51 => 5,  46 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block guest %}

    <div class=\"text-center p-3 p-md-5 bg-white\">
        <div class=\"mb-4\">
            <img src=\"{{ page.media.images|first.url }}\" alt=\"Image\" class=\"w-50 mx-auto img-fluid rounded-circle\">
        </div>
        <div class=\"\">
            <h3 class=\"font-weight-light h5\">{{ page.title }}</h3>
            <p>{{ page.content }}</p>
        </div>
    </div>

{% endblock %}", "modular/guest.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\modular\\guest.html.twig");
    }
}
