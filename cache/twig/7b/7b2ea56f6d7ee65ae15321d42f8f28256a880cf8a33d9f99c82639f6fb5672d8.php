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

/* modular/guests.html.twig */
class __TwigTemplate_f000fe29bab5ad7cb1050e4c09af3710c0cf41edf42c971167b6db3bef5ac85a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'modules' => [$this, 'block_modules'],
            'guest' => [$this, 'block_guest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/guests.html.twig"));

        // line 1
        $this->displayBlock('modules', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_modules($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modules"));

        // line 2
        echo "



    <div class=\"site-section bg-light block-13\">
    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-md-12 text-center\">
                <h2 class=\"font-weight-bold text-black\">Featured Guests</h2>
            </div>
        </div>



        <div class=\"nonloop-block-13 owl-carousel\">
            ";
        // line 17
        $this->displayBlock('guest', $context, $blocks);
        // line 22
        echo "
        </div>
    </div>
</div>

";
        // line 27
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "


";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 17
    public function block_guest($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "guest"));

        // line 18
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 19
            echo "                    ";
            echo $this->getAttribute($context["g"], "content", []);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/guests.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 21,  95 => 19,  90 => 18,  84 => 17,  73 => 27,  66 => 22,  64 => 17,  47 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block modules %}




    <div class=\"site-section bg-light block-13\">
    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-md-12 text-center\">
                <h2 class=\"font-weight-bold text-black\">Featured Guests</h2>
            </div>
        </div>



        <div class=\"nonloop-block-13 owl-carousel\">
            {% block guest %}
                {%  for g in page.children %}
                    {{ g.content }}
                {% endfor %}
            {% endblock %}

        </div>
    </div>
</div>

{{ page.content }}


{% endblock %}", "modular/guests.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\modular\\guests.html.twig");
    }
}
