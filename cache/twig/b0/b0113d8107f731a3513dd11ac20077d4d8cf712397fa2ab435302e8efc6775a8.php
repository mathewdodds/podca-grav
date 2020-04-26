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

/* search.html.twig */
class __TwigTemplate_415773e762f3007b54faa3d079f02eb1745ce714a2193ba66a4a6feee7118798 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "search.html.twig", 1);
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



                    <div id=\"search\" class=\"container\">

                        <div class=\"row\">
                            <div class=\"col-5\">
                                <p>Search</p>
                                <input type=\"text\" name=\"search\" v-model=\"live\"><br><br>
                            </div>
                            <div class=\"col-7\">
                                <p>Tags</p>


                                ";
        // line 27
        $context["ct"] = 0;
        // line 28
        echo "                                ";
        $context["count"] = 0;
        // line 29
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["taxlist"] ?? null));
        foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
            // line 30
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($context["value"]));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 31
                echo "                                        ";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 32
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                                ";
        $context["ct"] = ($context["count"] ?? null);
        // line 35
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["taxlist"] ?? null));
        foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
            // line 36
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($context["value"]));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 37
                echo "                                        <input type=\"checkbox\" v-on:click=\" generateList('";
                echo $context["v"];
                echo "',";
                echo ($context["ct"] ?? null);
                echo ") \">
                                        <label>";
                // line 38
                echo $context["v"];
                echo "</label> &nbsp;
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "

                            </div>
                        </div>

                        ";
        // line 47
        echo "
                        ";
        // line 49
        echo "                        ";
        // line 50
        echo "
                        ";
        // line 52
        echo "
                        ";
        // line 54
        echo "                        ";
        // line 55
        echo "




                        ";
        // line 60
        $context["collection"] = null;
        // line 61
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["podcasts"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["series"]) {
            // line 62
            echo "                            ";
            if ((null === ($context["collection"] ?? null))) {
                // line 63
                echo "                                ";
                $context["collection"] = $this->getAttribute($context["series"], "children", []);
                // line 64
                echo "                            ";
            } else {
                // line 65
                echo "                                ";
                $context["collection"] = $this->getAttribute(($context["collection"] ?? null), "merge", [0 => $this->getAttribute($context["series"], "children", [])], "method");
                // line 66
                echo "                            ";
            }
            // line 67
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['series'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "

                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collection"] ?? null), "order", [0 => "date", 1 => "desc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 71
            echo "
                            ";
            // line 72
            $context["passArray"] = [0 => "1029348"];
            // line 73
            echo "
                            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["episode"], "header", []), "taxonomy", []));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 75
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["t"]);
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 76
                    echo "
                                    ";
                    // line 77
                    $context["passArray"] = twig_array_merge(($context["passArray"] ?? null), [0 => $context["v"]]);
                    // line 78
                    echo "

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "
                            ";
            // line 84
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFilter(($context["passArray"] ?? null)));
            echo "

                            <script>
                                var passTax";
            // line 87
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($context["episode"], "title", []));
            echo ";
                                passTax";
            // line 88
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($context["episode"], "title", []));
            echo " = ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFilter(($context["passArray"] ?? null));
            echo ";
                            </script>

                            <div v-show= \"match('";
            // line 91
            echo $this->getAttribute($context["episode"], "title", []);
            echo $this->getAttribute($this->getAttribute($context["episode"], "header", []), "description", []);
            echo "',passTax";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($context["episode"], "title", []));
            echo ")\">
                                <h3 class=\"font-weight-light\"><a class=\"title-clr\" href=\"";
            // line 92
            echo $this->getAttribute($context["episode"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["episode"], "title", []);
            echo "</a></h3>
                                <div class=\"text-white\"><span class=\"text-black-opacity-05\">
                        <small>
                            Posted in ";
            // line 95
            echo $this->getAttribute($this->getAttribute($context["episode"], "parent", []), "title", []);
            echo " on ";
            echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "header", []), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
            echo "
                        </small>
                    </span>
                                </div>
                                <div class=\"tax-list\">

                                    ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["episode"], "header", []), "taxonomy", []));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 102
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["t"]);
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 103
                    echo "

                                            <a  href=\"";
                    // line 105
                    echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/utility/tagfind"], "method"), "url", []) . "?") . $context["v"]);
                    echo "\" class=\"tax-block\">";
                    echo $context["v"];
                    echo "</a>


                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "
                                </div>

                                <p class=\"mb-4\">";
            // line 113
            echo $this->getAttribute($this->getAttribute($context["episode"], "header", []), "description", []);
            echo "</p>
                                <hr>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "




                    </div>

                </div>





    ";
        // line 131
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/search.js"], "method");
        // line 132
        echo "


";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 132,  352 => 131,  337 => 118,  326 => 113,  321 => 110,  315 => 109,  303 => 105,  299 => 103,  294 => 102,  290 => 101,  279 => 95,  271 => 92,  264 => 91,  256 => 88,  252 => 87,  246 => 84,  243 => 83,  236 => 81,  228 => 78,  226 => 77,  223 => 76,  218 => 75,  214 => 74,  211 => 73,  209 => 72,  206 => 71,  202 => 70,  198 => 68,  192 => 67,  189 => 66,  186 => 65,  183 => 64,  180 => 63,  177 => 62,  172 => 61,  170 => 60,  163 => 55,  161 => 54,  158 => 52,  155 => 50,  153 => 49,  150 => 47,  143 => 41,  137 => 40,  129 => 38,  122 => 37,  117 => 36,  112 => 35,  109 => 34,  103 => 33,  97 => 32,  94 => 31,  89 => 30,  84 => 29,  81 => 28,  79 => 27,  57 => 7,  54 => 6,  51 => 5,  45 => 4,  29 => 1,);
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



                    <div id=\"search\" class=\"container\">

                        <div class=\"row\">
                            <div class=\"col-5\">
                                <p>Search</p>
                                <input type=\"text\" name=\"search\" v-model=\"live\"><br><br>
                            </div>
                            <div class=\"col-7\">
                                <p>Tags</p>


                                {% set ct = 0 %}
                                {% set count = 0 %}
                                {% for tax,value in taxlist %}
                                    {% for v in value|keys %}
                                        {% set count = count + 1 %}
                                    {% endfor %}
                                {% endfor %}
                                {% set ct = count %}
                                {% for tax,value in taxlist %}
                                    {% for v in value|keys %}
                                        <input type=\"checkbox\" v-on:click=\" generateList('{{ v }}',{{ ct }}) \">
                                        <label>{{ v }}</label> &nbsp;
                                    {% endfor %}
                                {% endfor %}


                            </div>
                        </div>

                        {#        {% set pass_list = [] %}#}

                        {#        {% for ta,val in e_list %}#}
                        {#            {% for va in val|keys %}#}

                        {#                {% set pass_list = pass_list|merge(val) %}#}

                        {#            {% endfor %}#}
                        {#        {% endfor %}#}





                        {% set collection = null %}
                        {% for series in podcasts.children %}
                            {% if collection is null %}
                                {% set collection = series.children %}
                            {% else %}
                                {% set collection = collection.merge(series.children) %}
                            {% endif %}
                        {% endfor %}


                        {% for episode in collection.order('date','desc') %}

                            {% set passArray = [\"1029348\"] %}

                            {% for t in episode.header.taxonomy %}
                                {% for v in t  %}

                                    {% set passArray = passArray|merge([v]) %}


                                {%endfor %}

                            {% endfor %}

                            {{ dump(passArray|string) }}

                            <script>
                                var passTax{{ episode.title|hyphenize }};
                                passTax{{ episode.title|hyphenize }} = {{ passArray|string }};
                            </script>

                            <div v-show= \"match('{{ episode.title }}{{ episode.header.description }}',passTax{{ episode.title|hyphenize }})\">
                                <h3 class=\"font-weight-light\"><a class=\"title-clr\" href=\"{{ episode.url }}\">{{ episode.title }}</a></h3>
                                <div class=\"text-white\"><span class=\"text-black-opacity-05\">
                        <small>
                            Posted in {{ episode.parent.title }} on {{ episode.header.date|date(system.pages.dateformat.short) }}
                        </small>
                    </span>
                                </div>
                                <div class=\"tax-list\">

                                    {% for t in episode.header.taxonomy %}
                                        {% for v in t  %}


                                            <a  href=\"{{ page.find('/utility/tagfind').url ~ \"?\" ~ v }}\" class=\"tax-block\">{{ v }}</a>


                                        {% endfor %}
                                    {% endfor %}

                                </div>

                                <p class=\"mb-4\">{{ episode.header.description }}</p>
                                <hr>
                            </div>

                        {% endfor %}





                    </div>

                </div>





    {% do assets.addJs('theme://js/search.js') %}



{% endblock %}





", "search.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\search.html.twig");
    }
}
