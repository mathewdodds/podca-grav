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

/* taxresult.html.twig */
class __TwigTemplate_f44d99190337c8230d6818987bdb2f1069f6fe696d89130f8700a5d1d690fe00 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxresult.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "taxresult.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $context["podcasts"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/podcast"], "method");
        // line 6
        echo "    ";
        $context["taxlist"] = $this->getAttribute(($context["taxonomylist"] ?? null), "get", [], "method");
        // line 7
        echo "


    <div class=\"site-block-top bg-dark\">
    </div>

    <div class=\"site-block-def\">



                    <div id=\"taxResults\" class=\"container\">

                        <div class=\"row\">
                            <div class=\"col-7\">
                                <small class=\"text-info\">TAG SEARCH RESULTS</small>
                                <h4 class=\"no-margin-top\"><% tagTitle %></h4>
                                <br>

                            </div>
                        </div>

                        ";
        // line 28
        $context["collection"] = null;
        // line 29
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["podcasts"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["series"]) {
            // line 30
            echo "                            ";
            if ((null === ($context["collection"] ?? null))) {
                // line 31
                echo "                                ";
                $context["collection"] = $this->getAttribute($context["series"], "children", []);
                // line 32
                echo "                            ";
            } else {
                // line 33
                echo "                                ";
                $context["collection"] = $this->getAttribute(($context["collection"] ?? null), "merge", [0 => $this->getAttribute($context["series"], "children", [])], "method");
                // line 34
                echo "                            ";
            }
            // line 35
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['series'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collection"] ?? null), "order", [0 => "date", 1 => "desc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 39
            echo "

                            ";
            // line 41
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "media", []), "img_small.jpg", [], "array"), "exists", [], "method") == false)) {
                // line 42
                echo "                                ";
                $context["epi_pic"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "parent", []), "media", []), "img_small.jpg", [], "array"), "url", []);
                // line 43
                echo "                            ";
            } else {
                // line 44
                echo "                                ";
                $context["epi_pic"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "media", []), "img_small.jpg", [], "array"), "url", []);
                // line 45
                echo "                            ";
            }
            // line 46
            echo "
                            ";
            // line 47
            $context["passArray"] = [0 => "1029348"];
            // line 48
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["episode"], "header", []), "taxonomy", []));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 49
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["t"]);
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 50
                    echo "                                    ";
                    $context["passArray"] = twig_array_merge(($context["passArray"] ?? null), [0 => $context["v"]]);
                    // line 51
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
                            <script>
                                var passTax";
            // line 55
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($context["episode"], "title", []));
            echo ";
                                passTax";
            // line 56
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($context["episode"], "title", []));
            echo " = ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFilter(($context["passArray"] ?? null));
            echo ";
                            </script>

                            <div v-if= \"taxmatch(passTax";
            // line 59
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($context["episode"], "title", []));
            echo ")\">


                                <div class=\"d-block d-md-flex podcast-entry bg-white mb-5\" data-aos=\"fade-up\">
                                    <div class=\"image\" style=\"background-image: url(";
            // line 63
            echo ($context["epi_pic"] ?? null);
            echo ");\"></div>
                                    <div class=\"text\">
 
                                        <h3 class=\"font-weight-light\"><a class=\"title-clr\" href=\"";
            // line 66
            echo $this->getAttribute($context["episode"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["episode"], "title", []);
            echo "</a></h3>
                                        <div class=\"text-white mb-3\"><span class=\"text-black-opacity-05\"><small>Posted in ";
            // line 67
            echo $this->getAttribute($this->getAttribute($context["episode"], "parent", []), "title", []);
            echo " on ";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
            echo "  </small></span></div>

                                        <div class=\"tax-list\">

                                            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["episode"], "header", []), "taxonomy", []));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 72
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["t"]);
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 73
                    echo "

                                                    <a  href=\"";
                    // line 75
                    echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/utility/tagfind"], "method"), "url", []) . "?") . $context["v"]);
                    echo "\" class=\"tax-block\">";
                    echo $context["v"];
                    echo "</a>


                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "
                                        </div>

                                        <p class=\"mb-4\">";
            // line 83
            echo $this->getAttribute($this->getAttribute($context["episode"], "header", []), "description", []);
            echo "</p>

                                        <div class=\"player\">
                                            <audio id=\"player2\" preload=\"none\" controls style=\"max-width: 100%\">
                                                <source src=\"";
            // line 87
            echo $this->getAttribute($this->getAttribute($context["episode"], "header", []), "mp3link", []);
            echo "\" type=\"audio/mp3\">
                                            </audio>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "





                    </div>



    </div>


    <script>


        var url = window.location.href;
        var params = url.split('?');


        const capitalize = (s) => {
            if (typeof s !== 'string') return ''
            return s.charAt(0).toUpperCase() + s.slice(1)
        }





        var app2 =  new Vue({
            el: '#taxResults',

            data () {
                return {
                    tagTitle:'',
                }
            },

            delimiters: ['<%','%>'],

            methods: {


                taxmatch: function (taxable) {

                    // console.log(taxable)

                    console.log(\"taxable: \" + taxable + \" params: \" + params[1])
                    const found = taxable.includes(params[1]);
                    this.tagTitle = capitalize(params[1]);
                    console.log(this.tagTitle[1]);

                    if (found == true) {
                        return true;


                    }



                }
            }

        })


    </script>






";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "taxresult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 96,  251 => 87,  244 => 83,  239 => 80,  233 => 79,  221 => 75,  217 => 73,  212 => 72,  208 => 71,  199 => 67,  193 => 66,  187 => 63,  180 => 59,  172 => 56,  168 => 55,  164 => 53,  158 => 52,  152 => 51,  149 => 50,  144 => 49,  139 => 48,  137 => 47,  134 => 46,  131 => 45,  128 => 44,  125 => 43,  122 => 42,  120 => 41,  116 => 39,  112 => 38,  108 => 36,  102 => 35,  99 => 34,  96 => 33,  93 => 32,  90 => 31,  87 => 30,  82 => 29,  80 => 28,  57 => 7,  54 => 6,  51 => 5,  45 => 4,  29 => 1,);
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



    <div class=\"site-block-top bg-dark\">
    </div>

    <div class=\"site-block-def\">



                    <div id=\"taxResults\" class=\"container\">

                        <div class=\"row\">
                            <div class=\"col-7\">
                                <small class=\"text-info\">TAG SEARCH RESULTS</small>
                                <h4 class=\"no-margin-top\"><% tagTitle %></h4>
                                <br>

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


                            {% if episode.media['img_small.jpg'].exists() == false %}
                                {% set epi_pic = episode.parent.media['img_small.jpg'].url %}
                            {% else %}
                                {% set epi_pic = episode.media['img_small.jpg'].url %}
                            {% endif %}

                            {% set passArray = [\"1029348\"] %}
                            {% for t in episode.header.taxonomy %}
                                {% for v in t  %}
                                    {% set passArray = passArray|merge([v]) %}
                                {%endfor %}
                            {% endfor %}

                            <script>
                                var passTax{{ episode.title|hyphenize }};
                                passTax{{ episode.title|hyphenize }} = {{ passArray|string }};
                            </script>

                            <div v-if= \"taxmatch(passTax{{ episode.title|hyphenize }})\">


                                <div class=\"d-block d-md-flex podcast-entry bg-white mb-5\" data-aos=\"fade-up\">
                                    <div class=\"image\" style=\"background-image: url({{ epi_pic }});\"></div>
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

                            </div>
                        {% endfor %}






                    </div>



    </div>


    <script>


        var url = window.location.href;
        var params = url.split('?');


        const capitalize = (s) => {
            if (typeof s !== 'string') return ''
            return s.charAt(0).toUpperCase() + s.slice(1)
        }





        var app2 =  new Vue({
            el: '#taxResults',

            data () {
                return {
                    tagTitle:'',
                }
            },

            delimiters: ['<%','%>'],

            methods: {


                taxmatch: function (taxable) {

                    // console.log(taxable)

                    console.log(\"taxable: \" + taxable + \" params: \" + params[1])
                    const found = taxable.includes(params[1]);
                    this.tagTitle = capitalize(params[1]);
                    console.log(this.tagTitle[1]);

                    if (found == true) {
                        return true;


                    }



                }
            }

        })


    </script>






{% endblock %}





", "taxresult.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\taxresult.html.twig");
    }
}
