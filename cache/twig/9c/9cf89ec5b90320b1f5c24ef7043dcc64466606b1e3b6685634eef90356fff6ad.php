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

/* episode.html.twig */
class __TwigTemplate_9f2acfef8232a2eeb2f7f68cd584230c0566995f18d9677e81ef04b968bae7e0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "episode.html.twig"));

        // line 3
        $context["bg_img"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "media", []), "hero_lg.jpg", [], "array"), "url", []);
        // line 4
        $context["b_img"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "media", []), "img_small.jpg", [], "array")), "url", []);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "episode.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "

    <div class=\"site-blocks-cover overlay inner-page-cover\" style=\"background-image: url(";
        // line 10
        echo ($context["bg_img"] ?? null);
        echo ");\" data-aos=\"fade\"
         data-stellar-background-ratio=\"0.5\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center text-center\">
                <div class=\"col-md-8\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    <h2 class=\"text-white font-weight-light mb-2 display-4\">";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
                    <div class=\"text-white mb-3\"><span class=\"text-white-opacity-05\"><small>By ";
        // line 16
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []);
        echo " <span class=\"sep\">/</span>  ";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
        echo "</small></span></div>
                    <p class=\"mb-4\">";
        // line 17
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []);
        echo "</p>
                </div>
            </div>
        </div>
    </div>


    <div class=\"site-section bg-light\">
        <div class=\"container\">


                <div class=\"player\">
                    <audio id=\"player2\" preload=\"none\" controls style=\"max-width: 100%\">
                        <source src=\"";
        // line 30
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "mp3link", []);
        echo "\" type=\"audio/mp3\">
                    </audio>
                </div>

            <br><br><br>


            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 39
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                </div>
            </div>

        </div>
    </div>







";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "episode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  94 => 30,  78 => 17,  72 => 16,  68 => 15,  60 => 10,  56 => 8,  50 => 7,  42 => 1,  40 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set bg_img = page.parent.media['hero_lg.jpg'].url %}
{% set b_img = page.parent.media['img_small.jpg']|first.url %}


{% block content %}


    <div class=\"site-blocks-cover overlay inner-page-cover\" style=\"background-image: url({{ bg_img }});\" data-aos=\"fade\"
         data-stellar-background-ratio=\"0.5\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center text-center\">
                <div class=\"col-md-8\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    <h2 class=\"text-white font-weight-light mb-2 display-4\">{{page.title}}</h2>
                    <div class=\"text-white mb-3\"><span class=\"text-white-opacity-05\"><small>By {{ page.header.author }} <span class=\"sep\">/</span>  {{ page.date|date(system.pages.dateformat.short) }}</small></span></div>
                    <p class=\"mb-4\">{{ page.header.description }}</p>
                </div>
            </div>
        </div>
    </div>


    <div class=\"site-section bg-light\">
        <div class=\"container\">


                <div class=\"player\">
                    <audio id=\"player2\" preload=\"none\" controls style=\"max-width: 100%\">
                        <source src=\"{{ page.header.mp3link }}\" type=\"audio/mp3\">
                    </audio>
                </div>

            <br><br><br>


            <div class=\"row\">
                <div class=\"col-md-12\">
                    {{ page.content|raw }}
                </div>
            </div>

        </div>
    </div>







{% endblock %}


", "episode.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\episode.html.twig");
    }
}
