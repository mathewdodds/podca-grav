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

/* series.html.twig */
class __TwigTemplate_fbef146dd8c8996f635f376b10b4b3893e830287304f700bc85446893286ed69 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "series.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "series.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <div class=\"site-blocks-cover overlay inner-page-cover\" style=\"background-image: url(


                    '";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "hero_lg.jpg", [], "array"), "url", []);
        echo "'


    );\" data-aos=\"fade\" data-stellar-background-ratio=\"0.5\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center text-center\">
                <div class=\"col-md-8\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    <h2 class=\"text-white font-weight-light mb-2 display-4\">";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
                    <div class=\"text-white mb-3\"><span class=\"text-white-opacity-05\"><small>By ";
        // line 17
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []);
        echo " <span class=\"sep\">/</span> ";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
        echo " </small></span></div>
                    <p class=\"mb-4\">";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []);
        echo "</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"site-section bg-light\">
        <div class=\"container\">

            <div class=\"row mb-5\" data-aos=\"fade-up\">
                <div class=\"col-md-12 text-center\">
                    <h2 class=\"font-weight-bold text-black\">Episodes</h2>
                </div>
            </div>

";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "order", [0 => "date", 1 => "desc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 34
            echo "
    <div class=\"d-block d-md-flex podcast-entry bg-white mb-5\" data-aos=\"fade-up\">
        <div class=\"image\" style=\"background-image: url(

                    ";
            // line 38
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "media", []), "img_small.jpg", [], "array"), "exists", [], "method") == false)) {
                // line 39
                echo "                                    '";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "parent", []), "media", []), "img_small.jpg", [], "array"), "url", []);
                echo "'
                     ";
            } else {
                // line 41
                echo "                                    '";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "media", []), "img_small.jpg", [], "array"), "url", []);
                echo "'
                    ";
            }
            // line 43
            echo "
        );\"></div>
        <div class=\"text\">

            <h3 class=\"font-weight-light\"><a class=\"title-clr\" href=\"";
            // line 47
            echo $this->getAttribute($context["episode"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["episode"], "title", []);
            echo "</a></h3>
            <div class=\"text-white mb-3\"><span class=\"text-black-opacity-05\"><small>Posted in ";
            // line 48
            echo $this->getAttribute($this->getAttribute($context["episode"], "parent", []), "title", []);
            echo " on ";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
            echo "  </small></span></div>

                                                    <div class=\"tax-list\">

                                            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["episode"], "header", []), "taxonomy", []));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 53
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["t"]);
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 54
                    echo "

                                                    <a  href=\"";
                    // line 56
                    echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/utility/tagfind"], "method"), "url", []) . "?") . $context["v"]);
                    echo "\" class=\"tax-block\">";
                    echo $context["v"];
                    echo "</a>


                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
                                        </div>

            <p class=\"mb-4\">";
            // line 64
            echo $this->getAttribute($this->getAttribute($context["episode"], "header", []), "description", []);
            echo "</p>

            <div class=\"player\">
                <audio id=\"player2\" preload=\"none\" controls style=\"max-width: 100%\">
                    <source src=\"";
            // line 68
            echo $this->getAttribute($this->getAttribute($context["episode"], "header", []), "mp3link", []);
            echo "\" type=\"audio/mp3\">
                </audio>
            </div>

        </div>
    </div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
        </div>
    </div>

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "series.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 77,  184 => 68,  177 => 64,  172 => 61,  166 => 60,  154 => 56,  150 => 54,  145 => 53,  141 => 52,  132 => 48,  126 => 47,  120 => 43,  114 => 41,  108 => 39,  106 => 38,  100 => 34,  96 => 33,  78 => 18,  72 => 17,  68 => 16,  58 => 9,  51 => 4,  45 => 3,  29 => 1,);
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

{% block content %}


    <div class=\"site-blocks-cover overlay inner-page-cover\" style=\"background-image: url(


                    '{{ page.media['hero_lg.jpg'].url }}'


    );\" data-aos=\"fade\" data-stellar-background-ratio=\"0.5\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center text-center\">
                <div class=\"col-md-8\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    <h2 class=\"text-white font-weight-light mb-2 display-4\">{{page.title}}</h2>
                    <div class=\"text-white mb-3\"><span class=\"text-white-opacity-05\"><small>By {{ page.header.author }} <span class=\"sep\">/</span> {{ page.date|date(system.pages.dateformat.short) }} </small></span></div>
                    <p class=\"mb-4\">{{ page.header.description }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"site-section bg-light\">
        <div class=\"container\">

            <div class=\"row mb-5\" data-aos=\"fade-up\">
                <div class=\"col-md-12 text-center\">
                    <h2 class=\"font-weight-bold text-black\">Episodes</h2>
                </div>
            </div>

{% for episode in page.children.order('date','desc') %}

    <div class=\"d-block d-md-flex podcast-entry bg-white mb-5\" data-aos=\"fade-up\">
        <div class=\"image\" style=\"background-image: url(

                    {% if episode.media['img_small.jpg'].exists() == false %}
                                    '{{ episode.parent.media['img_small.jpg'].url }}'
                     {% else %}
                                    '{{ episode.media['img_small.jpg'].url }}'
                    {% endif %}

        );\"></div>
        <div class=\"text\">

            <h3 class=\"font-weight-light\"><a class=\"title-clr\" href=\"{{ episode.url }}\">{{ episode.title }}</a></h3>
            <div class=\"text-white mb-3\"><span class=\"text-black-opacity-05\"><small>Posted in {{ episode.parent.title }} on {{ episode.date|date(system.pages.dateformat.short) }}  </small></span></div>

                                                    <div class=\"tax-list\">

                                            {% for t in episode.header.taxonomy %}
                                                {% for v in t  %}


                                                    <a  href=\"{{ page.find('/utility/tagfind').url ~ \"?\" ~ v }}\" class=\"tax-block\">{{ v }}</a>


                                                {% endfor %}
                                            {% endfor %}

                                        </div>

            <p class=\"mb-4\">{{ episode.header.description }}</p>

            <div class=\"player\">
                <audio id=\"player2\" preload=\"none\" controls style=\"max-width: 100%\">
                    <source src=\"{{ episode.header.mp3link }}\" type=\"audio/mp3\">
                </audio>
            </div>

        </div>
    </div>


{% endfor %}

        </div>
    </div>

{% endblock %}


", "series.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\series.html.twig");
    }
}
