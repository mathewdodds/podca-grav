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

/* home.html.twig */
class __TwigTemplate_880b6da63e2713fb5b977a83cb0e57ed029997a4af427178ade25ea846753084 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'modules' => [$this, 'block_modules'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
";
        // line 5
        $context["podcasts"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/podcast"], "method");
        // line 6
        echo "    ";
        $context["taxlist"] = $this->getAttribute(($context["taxonomylist"] ?? null), "get", [], "method");
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, ($context["taxlist"] ?? null));
        echo "
        ";
        // line 8
        $context["collection"] = null;
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["podcasts"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["series"]) {
            // line 10
            echo "            ";
            if ((null === ($context["collection"] ?? null))) {
                // line 11
                echo "                ";
                $context["collection"] = $this->getAttribute($context["series"], "children", []);
                // line 12
                echo "            ";
            } else {
                // line 13
                echo "                ";
                $context["collection"] = $this->getAttribute(($context["collection"] ?? null), "merge", [0 => $this->getAttribute($context["series"], "children", [])], "method");
                // line 14
                echo "            ";
            }
            // line 15
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['series'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collection"] ?? null), "order", [0 => "date", 1 => "desc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 17
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["episode"], "header", []), "featured", []) == true)) {
                // line 18
                echo "

                    <div class=\"site-blocks-cover overlay\" style=\"background-image: url(

                    ";
                // line 22
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "media", []), "hero_lg.jpg", [], "array"), "exists", [], "method") == false)) {
                    // line 23
                    echo "                    '";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "parent", []), "media", []), "hero_lg.jpg", [], "array"), "url", []);
                    echo "'
                    ";
                } else {
                    // line 25
                    echo "                        '";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "media", []), "hero_lg.jpg", [], "array"), "url", []);
                    echo "'
                    ";
                }
                // line 27
                echo "

                    );\"
                         data-aos=\"fade\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"container\">
                            <div class=\"row align-items-center justify-content-center text-center\">

                                <div class=\"col-md-8\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                    <h2 class=\"text-white font-weight-light mb-2 display-4\">";
                // line 35
                echo $this->getAttribute($context["episode"], "title", []);
                echo "</h2>
                                    <div class=\"text-white mb-4\"><span class=\"text-white-opacity-05\">Posted in ";
                // line 36
                echo $this->getAttribute($this->getAttribute($context["episode"], "parent", []), "title", []);
                echo " on ";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
                echo "</span></div>
                                    <p><a href=\"";
                // line 37
                echo $this->getAttribute($context["episode"], "url", []);
                echo "\" class=\"btn primary-ele btn-sm py-3 px-4 small\">Show
                                    Notes</a></p>

                                    <div class=\"player\">
                                        <audio id=\"player2\" preload=\"none\" controls style=\"max-width: 100%\">
                                            <source src=\"";
                // line 42
                echo $this->getAttribute($this->getAttribute($context["episode"], "header", []), "mp3link", []);
                echo "\" type=\"audio/mp3\">
                                        </audio>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                ";
            } else {
                // line 51
                echo "                    ";
                // line 52
                echo "                ";
            }
            // line 53
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "<div class=\"site-section bg-light\">
    <div class=\"container\">

        <div class=\"row mb-5\" data-aos=\"fade-up\">
            <div class=\"col-md-12 text-center\">
                <h2 class=\"font-weight-bold text-black\">Recent Episodes</h2>
            </div>
        </div>
        ";
        // line 64
        $context["collection"] = null;
        // line 65
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["podcasts"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["series"]) {
            // line 66
            echo "            ";
            if ((null === ($context["collection"] ?? null))) {
                // line 67
                echo "                ";
                $context["collection"] = $this->getAttribute($context["series"], "children", []);
                // line 68
                echo "            ";
            } else {
                // line 69
                echo "                ";
                $context["collection"] = $this->getAttribute(($context["collection"] ?? null), "merge", [0 => $this->getAttribute($context["series"], "children", [])], "method");
                // line 70
                echo "            ";
            }
            // line 71
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['series'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collection"] ?? null), "order", [0 => "date", 1 => "desc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 73
            echo "
            ";
            // line 74
            if (($this->getAttribute($this->getAttribute($context["episode"], "header", []), "featured", []) == true)) {
                // line 75
                echo "            ";
                // line 76
                echo "            ";
            } else {
                // line 77
                echo "

                <div class=\"d-block d-md-flex podcast-entry bg-white mb-5\" data-aos=\"fade-up\">
                    <div class=\"image\" style=\"background-image: url(
                    ";
                // line 81
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "media", []), "img_small.jpg", [], "array"), "exists", [], "method") == false)) {
                    // line 82
                    echo "                                    '";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "parent", []), "media", []), "img_small.jpg", [], "array"), "url", []);
                    echo "'
                                    ";
                } else {
                    // line 84
                    echo "                                        '";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "media", []), "img_small.jpg", [], "array"), "url", []);
                    echo "'
                                    ";
                }
                // line 86
                echo "
                            );\"></div>
                    <div class=\"text\">

                        <h3 class=\"font-weight-light\"><a class=\"title-clr\" href=\"";
                // line 90
                echo $this->getAttribute($context["episode"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["episode"], "title", []);
                echo "</a></h3>
                        <div class=\"text-white mb-3\"><span class=\"text-black-opacity-05\"><small>Posted in ";
                // line 91
                echo $this->getAttribute($this->getAttribute($context["episode"], "parent", []), "title", []);
                echo " on ";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
                echo "  </small></span></div>

                                        <div class=\"tax-list\">

                                            ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["episode"], "header", []), "taxonomy", []));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    // line 96
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["t"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                        // line 97
                        echo "

                                                    <a  href=\"";
                        // line 99
                        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/utility/tagfind"], "method"), "url", []) . "?") . $context["v"]);
                        echo "\" class=\"tax-block\">";
                        echo $context["v"];
                        echo "</a>


                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "
                                        </div>

                        <p class=\"mb-4\">";
                // line 107
                echo $this->getAttribute($this->getAttribute($context["episode"], "header", []), "description", []);
                echo "</p>

                        <div class=\"player\">
                            <audio id=\"player2\" preload=\"none\" controls style=\"max-width: 100%\">
                                <source src=\"";
                // line 111
                echo $this->getAttribute($this->getAttribute($context["episode"], "header", []), "mp3link", []);
                echo "\" type=\"audio/mp3\">
                            </audio>
                        </div>

                    </div>
                </div>

            ";
            }
            // line 119
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "    </div>
    </div>

    ";
        // line 125
        $this->displayBlock('modules', $context, $blocks);
        // line 138
        echo "




";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 125
    public function block_modules($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modules"));

        // line 126
        echo "

        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "modular", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 129
            echo "
            ";
            // line 130
            echo $this->getAttribute($context["module"], "content", []);
            echo "


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "


    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 134,  365 => 130,  362 => 129,  358 => 128,  354 => 126,  348 => 125,  336 => 138,  334 => 125,  329 => 122,  321 => 119,  310 => 111,  303 => 107,  298 => 104,  292 => 103,  280 => 99,  276 => 97,  271 => 96,  267 => 95,  258 => 91,  252 => 90,  246 => 86,  240 => 84,  234 => 82,  232 => 81,  226 => 77,  223 => 76,  221 => 75,  219 => 74,  216 => 73,  211 => 72,  205 => 71,  202 => 70,  199 => 69,  196 => 68,  193 => 67,  190 => 66,  185 => 65,  183 => 64,  173 => 56,  165 => 53,  162 => 52,  160 => 51,  148 => 42,  140 => 37,  134 => 36,  130 => 35,  120 => 27,  114 => 25,  108 => 23,  106 => 22,  100 => 18,  97 => 17,  92 => 16,  86 => 15,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  66 => 9,  64 => 8,  60 => 7,  57 => 6,  55 => 5,  52 => 4,  46 => 3,  30 => 1,);
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

{% set podcasts = page.find('/podcast') %}
    {% set taxlist = taxonomylist.get()  %}
{{ dump(taxlist) }}
        {% set collection = null %}
        {% for series in podcasts.children %}
            {% if collection is null %}
                {% set collection = series.children %}
            {% else %}
                {% set collection = collection.merge(series.children) %}
            {% endif %}
        {% endfor %}
        {% for episode in collection.order('date','desc') %}
            {% if episode.header.featured == true %}


                    <div class=\"site-blocks-cover overlay\" style=\"background-image: url(

                    {% if episode.media['hero_lg.jpg'].exists() == false %}
                    '{{ episode.parent.media['hero_lg.jpg'].url }}'
                    {% else %}
                        '{{ episode.media['hero_lg.jpg'].url }}'
                    {% endif %}


                    );\"
                         data-aos=\"fade\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"container\">
                            <div class=\"row align-items-center justify-content-center text-center\">

                                <div class=\"col-md-8\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                    <h2 class=\"text-white font-weight-light mb-2 display-4\">{{episode.title}}</h2>
                                    <div class=\"text-white mb-4\"><span class=\"text-white-opacity-05\">Posted in {{ episode.parent.title }} on {{ episode.date|date(system.pages.dateformat.short) }}</span></div>
                                    <p><a href=\"{{episode.url}}\" class=\"btn primary-ele btn-sm py-3 px-4 small\">Show
                                    Notes</a></p>

                                    <div class=\"player\">
                                        <audio id=\"player2\" preload=\"none\" controls style=\"max-width: 100%\">
                                            <source src=\"{{ episode.header.mp3link }}\" type=\"audio/mp3\">
                                        </audio>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                {% else %}
                    {# do nothing #}
                {% endif %}


    {% endfor %}
<div class=\"site-section bg-light\">
    <div class=\"container\">

        <div class=\"row mb-5\" data-aos=\"fade-up\">
            <div class=\"col-md-12 text-center\">
                <h2 class=\"font-weight-bold text-black\">Recent Episodes</h2>
            </div>
        </div>
        {% set collection = null %}
        {% for series in podcasts.children %}
            {% if collection is null %}
                {% set collection = series.children %}
            {% else %}
                {% set collection = collection.merge(series.children) %}
            {% endif %}
        {% endfor %}
        {% for episode in collection.order('date','desc') %}

            {% if episode.header.featured == true %}
            {# do nothing #}
            {% else %}


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

            {% endif %}


    {% endfor %}
    </div>
    </div>

    {% block modules %}


        {% for module in page.children.modular() %}

            {{ module.content }}


        {% endfor %}



    {% endblock %}





{% endblock %}





", "home.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\home.html.twig");
    }
}
