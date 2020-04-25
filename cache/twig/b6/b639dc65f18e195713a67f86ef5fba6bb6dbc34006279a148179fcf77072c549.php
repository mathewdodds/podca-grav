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

/* forms/fields/fieldset/fieldset.html.twig */
class __TwigTemplate_31902b3d0883de34eb0288cf3636dbb88cdcc41dcfdf403786fe1ac2f65e05ef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'actions' => [$this, 'block_actions'],
            'group' => [$this, 'block_group'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/fieldset/fieldset.html.twig"));

        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/fieldset/fieldset.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "  <div class=\"form-fieldset";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        }
        echo "\">
    ";
        // line 5
        $this->displayBlock('contents', $context, $blocks);
        // line 95
        echo "  </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 5
    public function block_contents($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        // line 6
        echo "      <input type=\"checkbox\" class=\"hidden\" id=\"fieldset_collapsible_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
        echo "\"";
        if (( !$this->getAttribute(($context["field"] ?? null), "collapsible", []) ||  !$this->getAttribute(($context["field"] ?? null), "collapsed", []))) {
            echo " checked=\"checked\"";
        }
        echo " />

      <div class=\"form-label form-fieldset--label\">
        <h2>
          <label";
        // line 10
        if ($this->getAttribute(($context["field"] ?? null), "collapsible", [])) {
            echo " for=\"fieldset_collapsible_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
            echo "\" class=\"form-fieldset--cursor\"";
        }
        echo ">
            ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 12
            echo "            <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", []))), "html", null, true);
            echo "\">
            ";
        }
        // line 14
        echo "            ";
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "          ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 25
            echo "          </span>
          ";
        }
        // line 27
        echo "
          ";
        // line 29
        echo "          <span class=\"actions\">
            ";
        // line 30
        $this->displayBlock('actions', $context, $blocks);
        // line 38
        echo "          </span>
        </label>
      </h2>
      </div>
      <div class=\"form-data\"
        ";
        // line 48
        echo "      >

          ";
        // line 50
        $this->displayBlock('group', $context, $blocks);
        // line 93
        echo "      </div>
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 14
    public function block_label($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "              ";
        if ($this->getAttribute(($context["field"] ?? null), "icon", [])) {
            // line 16
            echo "                <i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "icon", []), "html", null, true);
            echo "\"></i>
              ";
        }
        // line 18
        echo "              ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "title", [])), "html", null, true);
        echo "
              ";
        // line 19
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
              ";
        // line 20
        if ($this->getAttribute(($context["field"] ?? null), "info", [])) {
            // line 21
            echo "                <span class=\"form-fieldset--info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "info", [])), "html", null, true);
            echo "</span>
              ";
        }
        // line 23
        echo "            ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 30
    public function block_actions($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 31
        echo "              ";
        if ($this->getAttribute(($context["field"] ?? null), "collapsible", [])) {
            // line 32
            echo "                <span class=\"form-fieldset--collapsible\">
                  <i class=\"fa fa-chevron-down open\"></i>
                  <i class=\"fa fa-chevron-up close\"></i>
                </span>
              ";
        }
        // line 37
        echo "            ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 50
    public function block_group($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "group"));

        // line 51
        echo "          ";
        if ($this->getAttribute(($context["field"] ?? null), "text", [])) {
            // line 52
            echo "          <p>";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "text", [])), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "text", [])), "html", null, true);
            }
            // line 53
            echo "          <p>
              ";
        }
        // line 55
        echo "
              ";
        // line 56
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 57
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
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
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 58
                if (($context["childName"] == "value")) {
                    // line 59
                    $context["childKey"] = "";
                    // line 60
                    echo "                          ";
                    $context["childName"] = ($context["itemName"] ?? null);
                } elseif ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 // line 61
$context["childName"]) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ".") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                    // line 62
                    $context["childKey"] = twig_trim_filter($context["childName"], ".");
                    // line 63
                    echo "                          ";
                    $context["childName"] = (($context["itemName"] ?? null) . $context["childName"]);
                    // line 64
                    echo "                      ";
                } else {
                    // line 65
                    echo "                          ";
                    $context["childKey"] = $context["childName"];
                    // line 66
                    echo "                          ";
                    $context["childName"] = twig_replace_filter($context["childName"], ["*" => ($context["key"] ?? null)]);
                    // line 67
                    echo "                      ";
                }
                // line 68
                echo "                      ";
                $context["child"] = twig_array_merge($context["child"], ["name" => $context["childName"]]);
                // line 69
                echo "
                      ";
                // line 70
                if (($this->getAttribute($context["child"], "type", []) == "key")) {
                    // line 71
                    echo "                          ";
                    // line 72
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/fieldset/fieldset.html.twig", 72)->display(twig_array_merge($context, ["field" =>                     // line 73
$context["child"], "value" => ($context["key"] ?? null)]));
                    // line 75
                    echo "                      ";
                } elseif (($this->getAttribute($context["child"], "key", []) == true)) {
                    // line 76
                    echo "                          ";
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute(                    // line 77
$context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/key/key.html.twig"], "forms/fields/fieldset/fieldset.html.twig", 76)->display(twig_array_merge($context, ["field" =>                     // line 79
$context["child"], "value" => ($context["key"] ?? null)]));
                    // line 81
                    echo "                      ";
                } elseif ($this->getAttribute($context["child"], "type", [])) {
                    // line 82
                    echo "                          ";
                    $context["originalValue"] = $this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method");
                    // line 83
                    echo "                          ";
                    // line 84
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute(                    // line 85
$context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/fieldset/fieldset.html.twig", 84)->display(twig_array_merge($context, ["field" =>                     // line 87
$context["child"], "value" => $this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")]));
                    // line 89
                    echo "                      ";
                }
                // line 90
                echo "                  ";
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
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "              ";
        }
        // line 92
        echo "              ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/fieldset/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 92,  330 => 91,  316 => 90,  313 => 89,  311 => 87,  310 => 85,  309 => 84,  307 => 83,  304 => 82,  301 => 81,  299 => 79,  298 => 77,  296 => 76,  293 => 75,  291 => 73,  290 => 72,  288 => 71,  286 => 70,  283 => 69,  280 => 68,  277 => 67,  274 => 66,  271 => 65,  268 => 64,  265 => 63,  263 => 62,  261 => 61,  258 => 60,  256 => 59,  254 => 58,  236 => 57,  234 => 56,  231 => 55,  227 => 53,  220 => 52,  217 => 51,  211 => 50,  204 => 37,  197 => 32,  194 => 31,  188 => 30,  181 => 23,  175 => 21,  173 => 20,  169 => 19,  164 => 18,  158 => 16,  155 => 15,  149 => 14,  141 => 93,  139 => 50,  135 => 48,  128 => 38,  126 => 30,  123 => 29,  120 => 27,  116 => 25,  113 => 24,  110 => 14,  104 => 12,  102 => 11,  94 => 10,  82 => 6,  76 => 5,  68 => 95,  66 => 5,  55 => 4,  49 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
  <div class=\"form-fieldset{% if vertical %} vertical{% endif %}{% if field.classes is defined %} {{ field.classes }}{% endif %}\">
    {% block contents %}
      <input type=\"checkbox\" class=\"hidden\" id=\"fieldset_collapsible_{{ field.name }}\"{% if not field.collapsible or not field.collapsed %} checked=\"checked\"{% endif %} />

      <div class=\"form-label form-fieldset--label\">
        <h2>
          <label{% if field.collapsible %} for=\"fieldset_collapsible_{{ field.name }}\" class=\"form-fieldset--cursor\"{% endif %}>
            {% if field.help %}
            <span class=\"hint--bottom\" data-hint=\"{{ field.help|e|tu }}\">
            {% endif %}
            {% block label %}
              {% if field.icon %}
                <i class=\"fa fa-fw fa-{{ field.icon }}\"></i>
              {% endif %}
              {{ field.title|tu }}
              {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
              {% if field.info %}
                <span class=\"form-fieldset--info\">{{ field.info|tu }}</span>
              {% endif %}
            {% endblock %}
          {% if field.help %}
          </span>
          {% endif %}

          {# Actions panel #}
          <span class=\"actions\">
            {% block actions %}
              {% if field.collapsible %}
                <span class=\"form-fieldset--collapsible\">
                  <i class=\"fa fa-chevron-down open\"></i>
                  <i class=\"fa fa-chevron-up close\"></i>
                </span>
              {% endif %}
            {% endblock %}
          </span>
        </label>
      </h2>
      </div>
      <div class=\"form-data\"
        {#{% block global_attributes %}
          data-grav-field=\"{{ field.type }}\"
          data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
          data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
        {% endblock %}#}
      >

          {% block group %}
          {% if field.text %}
          <p>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.text|tu }}{% else %}{{ field.text|t }}{% endif %}
          <p>
              {% endif %}

              {% if field.fields %}
                  {% for childName, child in field.fields %}
                      {%- if childName == 'value' -%}
                          {% set childKey = '' %}
                          {% set childName = itemName -%}
                      {%- elseif childName starts with '.' -%}
                          {% set childKey = childName|trim('.') %}
                          {% set childName = itemName ~ childName %}
                      {% else %}
                          {% set childKey = childName %}
                          {% set childName = childName|replace({'*': key}) %}
                      {% endif %}
                      {% set child = child|merge({ name: childName }) %}

                      {% if child.type == 'key' %}
                          {%
                              include 'forms/fields/key/key.html.twig'
                              with { field: child, value: key }
                          %}
                      {% elseif child.key == true %}
                          {% include [
                              \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                              'forms/fields/key/key.html.twig'
                              ] with { field: child, value: key }
                          %}
                      {% elseif child.type %}
                          {% set originalValue = data.value(child.name) %}
                          {%
                              include [
                              \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                              'forms/fields/text/text.html.twig'
                              ] with { field: child, value: data.value(child.name) }
                          %}
                      {% endif %}
                  {% endfor %}
              {% endif %}
              {% endblock %}
      </div>
    {% endblock %}
  </div>
{% endblock %}
", "forms/fields/fieldset/fieldset.html.twig", "F:\\laragon\\www\\podca\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\fieldset\\fieldset.html.twig");
    }
}
