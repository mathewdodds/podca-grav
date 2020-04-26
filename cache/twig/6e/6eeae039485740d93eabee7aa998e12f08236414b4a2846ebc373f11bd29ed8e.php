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

/* partials/footer.html.twig */
class __TwigTemplate_fff849b1894947bf9f548f5b2db617725319444f98cab7521777fc25bb5e10eb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        $context["taxlistFoot"] = $this->getAttribute(($context["taxonomylist"] ?? null), "get", [], "method");
        // line 2
        echo "<footer class=\"site-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-12\">
                        <h3 class=\"footer-heading mb-4\">Popular Tags</h3>

                    </div>
                    <div id=\"footerTax\" class=\"col-md-6 col-lg-6\">



                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["taxlistFoot"] ?? null));
        foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
            // line 16
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_array_keys_filter($context["value"]), 0, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 17
                echo "                                <a class=\"tax-block-link\" href=\"";
                echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/utility/tagfind"], "method"), "url", []) . "?") . $context["v"]);
                echo "\">";
                echo $context["v"];
                echo "</a>
                                 &nbsp;
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "

                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h3 class=\"footer-heading mb-4\">Follow Us</h3>
                        ";
        // line 30
        $context["fbk"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("social_fb");
        // line 31
        echo "                        ";
        $context["twi"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("social_tw");
        // line 32
        echo "                        ";
        $context["ins"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("social_in");
        // line 33
        echo "


                        <div>
                            ";
        // line 37
        if (($context["fbk"] ?? null)) {
            echo "<a href=\"";
            echo ($context["fbk"] ?? null);
            echo "\" class=\"pl-0 pr-3\"><span class=\"icon-facebook\"></span></a>";
        }
        // line 38
        echo "                            ";
        if (($context["twi"] ?? null)) {
            echo "<a href=\"";
            echo ($context["twi"] ?? null);
            echo "\" class=\"pl-3 pr-3\"><span class=\"icon-twitter\"></span></a>";
        }
        // line 39
        echo "                            ";
        if (($context["ins"] ?? null)) {
            echo "<a href=\"";
            echo ($context["ins"] ?? null);
            echo "\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>";
        }
        // line 40
        echo "
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <div class=\"mb-5\">
                    <h3 class=\"footer-heading mb-2\">";
        // line 49
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/utility/_footer-snippet"], "method"), "title", []);
        echo "</h3>
                    ";
        // line 50
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/utility/_footer-snippet"], "method"), "content", []);
        echo "

                </div>

            </div>

        </div>
        <div class=\"row pt-5 mt-5 text-center\">
            <div class=\"col-md-12\">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script data-cfasync=\"false\" src=\"/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template was made with <i class=\"icon-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" >Colorlib</a>
                    and ported to Grav by <a href=\"http://mathewdodds.me\">Mathew Dodds</a>.
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </div>

    <script>



    </script>
</footer>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 50,  133 => 49,  122 => 40,  115 => 39,  108 => 38,  102 => 37,  96 => 33,  93 => 32,  90 => 31,  88 => 30,  77 => 21,  71 => 20,  59 => 17,  54 => 16,  50 => 15,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set taxlistFoot = taxonomylist.get()  %}
<footer class=\"site-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-12\">
                        <h3 class=\"footer-heading mb-4\">Popular Tags</h3>

                    </div>
                    <div id=\"footerTax\" class=\"col-md-6 col-lg-6\">



                        {% for tax,value in taxlistFoot %}
                            {% for v in value|keys|slice(0, 12) %}
                                <a class=\"tax-block-link\" href=\"{{ page.find('/utility/tagfind').url ~ \"?\" ~ v }}\">{{ v }}</a>
                                 &nbsp;
                            {% endfor %}
                        {% endfor %}


                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h3 class=\"footer-heading mb-4\">Follow Us</h3>
                        {% set fbk = theme_var('social_fb') %}
                        {% set twi = theme_var('social_tw') %}
                        {% set ins = theme_var('social_in') %}



                        <div>
                            {% if fbk %}<a href=\"{{ fbk }}\" class=\"pl-0 pr-3\"><span class=\"icon-facebook\"></span></a>{% endif %}
                            {% if twi %}<a href=\"{{ twi }}\" class=\"pl-3 pr-3\"><span class=\"icon-twitter\"></span></a>{% endif %}
                            {% if ins %}<a href=\"{{ ins }}\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>{% endif %}

                        </div>
                    </div>
                </div>

            </div>

            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <div class=\"mb-5\">
                    <h3 class=\"footer-heading mb-2\">{{ page.find('/utility/_footer-snippet').title }}</h3>
                    {{ page.find('/utility/_footer-snippet').content }}

                </div>

            </div>

        </div>
        <div class=\"row pt-5 mt-5 text-center\">
            <div class=\"col-md-12\">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script data-cfasync=\"false\" src=\"/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template was made with <i class=\"icon-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" >Colorlib</a>
                    and ported to Grav by <a href=\"http://mathewdodds.me\">Mathew Dodds</a>.
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </div>

    <script>



    </script>
</footer>", "partials/footer.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\partials\\footer.html.twig");
    }
}
