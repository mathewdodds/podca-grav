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

/* modular/artists.html.twig */
class __TwigTemplate_3aaa07b4d47d1b7daf1fbb3e10bb958531791678c9bb006a8a01e133a9f1a01c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'modules' => [$this, 'block_modules'],
            'artist' => [$this, 'block_artist'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/artists.html.twig"));

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
<div class=\"site-section\">
    <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"row mb-5\">
            <div class=\"col-md-12 text-center\">
                <h2 class=\"font-weight-bold text-black\">Behind The Mic</h2>
            </div>
        </div>
        <div class=\"row\">


            ";
        // line 13
        $this->displayBlock('artist', $context, $blocks);
        // line 18
        echo "


        </div>
    </div>
</div>


";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 13
    public function block_artist($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "artist"));

        // line 14
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 15
            echo "                    ";
            echo $this->getAttribute($context["a"], "content", []);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/artists.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 17,  88 => 15,  83 => 14,  77 => 13,  62 => 18,  60 => 13,  47 => 2,  35 => 1,);
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

<div class=\"site-section\">
    <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"row mb-5\">
            <div class=\"col-md-12 text-center\">
                <h2 class=\"font-weight-bold text-black\">Behind The Mic</h2>
            </div>
        </div>
        <div class=\"row\">


            {% block artist %}
                {%  for a in page.children %}
                    {{ a.content }}
                {% endfor %}
            {% endblock %}



        </div>
    </div>
</div>


{% endblock %}", "modular/artists.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\modular\\artists.html.twig");
    }
}
