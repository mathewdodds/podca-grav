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

/* simplesearch_results.html.twig */
class __TwigTemplate_3a37ace73e639962c2cadfb182851b164ff8d2c8312fd3ed6b168d58a31c8b76 extends \Twig\Template
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
        return "partials/simplesearch_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "simplesearch_results.html.twig"));

        $this->parent = $this->loadTemplate("partials/simplesearch_base.html.twig", "simplesearch_results.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    test
    <div class=\"content-padding simplesearch\">
        <h1 class=\"search-header\">";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_RESULTS");
        echo "</h1>
        <div class=\"center\">
            ";
        // line 8
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "simplesearch_results.html.twig", 8)->display($context);
        // line 9
        echo "        </div>
        <p>
            ";
        // line 11
        if (($context["query"] ?? null)) {
            // line 12
            echo "                ";
            $context["count"] = ((($context["search_results"] ?? null)) ? ($this->getAttribute(($context["search_results"] ?? null), "count", [])) : (0));
            // line 13
            echo "                ";
            if ((($context["count"] ?? null) === 1)) {
                // line 14
                echo "                    ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR", twig_escape_filter($this->env, ($context["query"] ?? null)));
                echo "
                ";
            } else {
                // line 16
                echo "                    ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL", twig_escape_filter($this->env, ($context["query"] ?? null)), ($context["count"] ?? null));
                echo "
                ";
            }
            // line 18
            echo "            ";
        }
        // line 19
        echo "        </p>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["search_results"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 21
            echo "            ";
            $this->loadTemplate("partials/simplesearch_item.html.twig", "simplesearch_results.html.twig", 21)->display(twig_array_merge($context, ["page" => $context["page"]]));
            // line 22
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "simplesearch_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 23,  112 => 22,  109 => 21,  92 => 20,  89 => 19,  86 => 18,  80 => 16,  74 => 14,  71 => 13,  68 => 12,  66 => 11,  62 => 9,  60 => 8,  55 => 6,  51 => 4,  45 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/simplesearch_base.html.twig' %}

{% block content %}
    test
    <div class=\"content-padding simplesearch\">
        <h1 class=\"search-header\">{{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS\"|t }}</h1>
        <div class=\"center\">
            {% include 'partials/simplesearch_searchbox.html.twig' %}
        </div>
        <p>
            {% if query %}
                {% set count = search_results ? search_results.count : 0 %}
                {% if count is same as( 1 ) %}
                    {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR\"|t(query|e)|raw }}
                {% else %}
                    {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL\"|t(query|e, count)|raw }}
                {% endif %}
            {% endif %}
        </p>
        {% for page in search_results %}
            {% include 'partials/simplesearch_item.html.twig' with {'page': page} %}
        {% endfor %}
    </div>
{% endblock %}
", "simplesearch_results.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\simplesearch_results.html.twig");
    }
}
