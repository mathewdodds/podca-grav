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

/* modular/artist.html.twig */
class __TwigTemplate_f0df2c341051e97d656c9b338f79e42951e063fe21f0816861712a1917f502c6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'artist' => [$this, 'block_artist'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/artist.html.twig"));

        // line 1
        $this->displayBlock('artist', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_artist($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "artist"));

        // line 2
        echo "
    <div class=\"col-md-6 col-lg-4 mb-5 mb-lg-5\">
        <div class=\"team-member\">

            <img src=\"";
        // line 6
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []);
        echo "\" alt=\"Image\" class=\"img-fluid\">

            <div class=\"text\">

                <h2 class=\"mb-2 font-weight-light h4\">";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
                <span class=\"d-block mb-2 text-white-opacity-05\">";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "role", []);
        echo "</span>
                <p class=\"mb-4\">";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
                <p>
                    ";
        // line 14
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "facebook", []) != "")) {
            echo "<a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "facebook", []);
            echo "\" class=\"text-white
                    p-2\"><span class=\"icon-facebook\"></span></a>
                    ";
        }
        // line 17
        echo "                    ";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "twitter", []) != "")) {
            echo "<a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "twitter", []);
            echo "\" class=\"text-white p-2\"><span class=\"icon-twitter\"></span></a>
                    ";
        }
        // line 19
        echo "                    ";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "linkedin", []) != "")) {
            echo "<a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "linkedin", []);
            echo "\" class=\"text-white
                    p-2\"><span class=\"icon-linkedin\"></span></a>
                    ";
        }
        // line 22
        echo "                </p>
            </div>

        </div>
    </div>



";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/artist.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  88 => 19,  80 => 17,  72 => 14,  67 => 12,  63 => 11,  59 => 10,  52 => 6,  46 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block artist %}

    <div class=\"col-md-6 col-lg-4 mb-5 mb-lg-5\">
        <div class=\"team-member\">

            <img src=\"{{ page.media.images|first.url }}\" alt=\"Image\" class=\"img-fluid\">

            <div class=\"text\">

                <h2 class=\"mb-2 font-weight-light h4\">{{ page.title }}</h2>
                <span class=\"d-block mb-2 text-white-opacity-05\">{{ page.header.role }}</span>
                <p class=\"mb-4\">{{ page.content }}</p>
                <p>
                    {% if page.header.facebook != \"\" %}<a href=\"{{ page.header.facebook }}\" class=\"text-white
                    p-2\"><span class=\"icon-facebook\"></span></a>
                    {% endif %}
                    {% if page.header.twitter != \"\" %}<a href=\"{{ page.header.twitter }}\" class=\"text-white p-2\"><span class=\"icon-twitter\"></span></a>
                    {% endif %}
                    {% if page.header.linkedin != \"\" %}<a href=\"{{ page.header.linkedin }}\" class=\"text-white
                    p-2\"><span class=\"icon-linkedin\"></span></a>
                    {% endif %}
                </p>
            </div>

        </div>
    </div>



{% endblock %}", "modular/artist.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\modular\\artist.html.twig");
    }
}
