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

/* config.html.twig */
class __TwigTemplate_66d9278e0e78fc3a0921fc077067b48ae1226fc71a86987920016a7447ed949f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_top' => [$this, 'block_content_top'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "config.html.twig"));

        // line 3
        $context["config_slug"] = $this->getAttribute(($context["uri"] ?? null), "basename", []);
        // line 4
        if ((($context["config_slug"] ?? null) == "config")) {
            // line 5
            $context["config_slug"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration.system", 1 => "admin.super"])) ? ("system") : ("site"));
        }
        // line 7
        $context["isInfo"] = (($context["config_slug"] ?? null) == "info");
        // line 9
        $context["tab_title_string"] = ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["config_slug"] ?? null)));
        // line 10
        $context["tab_title"] = ((($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["tab_title_string"] ?? null)) == ($context["tab_title_string"] ?? null))) ? (twig_capitalize_string_filter($this->env, ($context["config_slug"] ?? null))) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["tab_title_string"] ?? null))));
        // line 11
        $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION") . ": ") . ($context["tab_title"] ?? null));
        // line 13
        $context["config_ignores"] = [0 => "scheduler", 1 => "backups"];
        // line 15
        if ( !($context["isInfo"] ?? null)) {
            // line 16
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("config/" . ($context["config_slug"] ?? null))], "method");
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")], "method");
        // line 21
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 28
    public function block_titlebar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlebar"));

        // line 29
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/"), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
        ";
        // line 31
        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", [])) {
            // line 32
            echo "        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 34
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["tab_title"] ?? null), "html", null, true);
        echo "</h1>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 38
    public function block_content_top($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top"));

        // line 39
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", [])) {
            // line 40
            echo "    <div class=\"alert notice\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", []), [($context["base_path"] ?? null) => ""]), "html", null, true);
            echo "</b></div>
    ";
        }
        // line 42
        echo "
    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">

            ";
        // line 46
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration.system", 1 => "admin.super"])) {
            // line 47
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "system")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/config/system"), "html", null, true);
            echo "\">
                <span>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 51
        echo "
            ";
        // line 52
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration.site", 1 => "admin.super"])) {
            // line 53
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "site")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/config/site"), "html", null, true);
            echo "\">
                <span>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 57
        echo "
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "configurations", []));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            if (!twig_in_filter($context["configuration"], ($context["config_ignores"] ?? null))) {
                // line 59
                echo "                ";
                if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => ("admin.configuration." . $context["configuration"]), 1 => ("admin.configuration_" . $context["configuration"]), 2 => "admin.super"])) {
                    // line 60
                    echo "                    ";
                    $context["current_blueprints"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "data", [0 => ("config/" . $context["configuration"])], "method"), "blueprints", []), "toArray", [], "method");
                    // line 61
                    echo "                    ";
                    if ((((($context["configuration"] != "system") && ($context["configuration"] != "site")) &&  !$this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "hidden", [])) && ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "fields", [])) ||  !twig_test_empty($this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "field", []))))) {
                        // line 62
                        echo "                        <a ";
                        if ((($context["config_slug"] ?? null) == $context["configuration"])) {
                            echo "class=\"active\"";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/config/" . $context["configuration"])), "html", null, true);
                        echo "\">
                            ";
                        // line 63
                        $context["configuration_string"] = ("PLUGIN_ADMIN." . twig_upper_filter($this->env, $context["configuration"]));
                        // line 64
                        echo "                            <span>";
                        echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["configuration_string"] ?? null)) == ($context["configuration_string"] ?? null))) ? (twig_capitalize_string_filter($this->env, $context["configuration"])) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["configuration_string"] ?? null)))), "html", null, true);
                        echo "</span>
                        </a>
                    ";
                    }
                    // line 67
                    echo "                ";
                }
                // line 68
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
            ";
        // line 70
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration.info", 1 => "admin.super"])) {
            // line 71
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "info")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/config/info"), "html", null, true);
            echo "\">
                <span>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 75
        echo "
        </div>
    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 80
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 81
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => ("admin.configuration." . ($context["config_slug"] ?? null)), 1 => ("admin.configuration_" . ($context["config_slug"] ?? null)), 2 => "admin.super"])) {
            // line 82
            echo "        ";
            if (($context["isInfo"] ?? null)) {
                // line 83
                echo "            <div id=\"phpinfo\">
                <div style=\"margin-left:1.5rem\">
                    <a class=\"button button-big\" href=\"#\" style=\"text-align: center;\" data-remodal-target=\"changelog\" data-remodal-changelog=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/changelog/type:plugins/slug:" . $this->getAttribute(($context["plugin"] ?? null), "slug", []))), "html", null, true);
                echo "\"><i class=\"fa fa-binoculars\"></i> View Grav Changelog</a>
                </div>
                ";
                // line 87
                echo $this->getAttribute(($context["admin"] ?? null), "phpinfo", []);
                echo "
            </div>
        ";
            } else {
                // line 90
                echo "            <div class=\"config-wrapper-";
                echo twig_escape_filter($this->env, ($context["config_slug"] ?? null), "html", null, true);
                echo "\">
            ";
                // line 91
                $this->loadTemplate("partials/blueprints.html.twig", "config.html.twig", 91)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", []), "data" => ($context["data"] ?? null)]));
                // line 92
                echo "            </div>
        ";
            }
            // line 94
            echo "    ";
        }
        // line 95
        echo "    ";
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "config.html.twig", 95)->display($context);
        // line 96
        echo "    ";
        $this->loadTemplate("partials/modal-changelog.html.twig", "config.html.twig", 96)->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 96,  320 => 95,  317 => 94,  313 => 92,  311 => 91,  306 => 90,  300 => 87,  295 => 85,  291 => 83,  288 => 82,  285 => 81,  279 => 80,  269 => 75,  263 => 72,  254 => 71,  252 => 70,  249 => 69,  242 => 68,  239 => 67,  232 => 64,  230 => 63,  221 => 62,  218 => 61,  215 => 60,  212 => 59,  207 => 58,  204 => 57,  198 => 54,  189 => 53,  187 => 52,  184 => 51,  178 => 48,  169 => 47,  167 => 46,  161 => 42,  153 => 40,  150 => 39,  144 => 38,  133 => 35,  130 => 34,  124 => 32,  122 => 31,  116 => 30,  113 => 29,  107 => 28,  97 => 25,  91 => 24,  81 => 21,  78 => 20,  72 => 19,  64 => 1,  61 => 16,  59 => 15,  57 => 13,  55 => 11,  53 => 10,  51 => 9,  49 => 7,  46 => 5,  44 => 4,  42 => 3,  33 => 1,);
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

{% set config_slug = uri.basename %}
{% if config_slug == 'config' %}
    {% set config_slug = authorize(['admin.configuration.system', 'admin.super']) ? 'system' : 'site' %}
{% endif %}
{% set isInfo = (config_slug == 'info') %}

{% set tab_title_string = \"PLUGIN_ADMIN.\" ~ config_slug|upper %}
{% set tab_title = (tab_title_string|tu == tab_title_string ? config_slug|capitalize : tab_title_string|tu)  %}
{% set title = \"PLUGIN_ADMIN.CONFIGURATION\"|tu ~ \": \" ~ tab_title %}

{% set config_ignores = ['scheduler', 'backups'] %}

{% if not isInfo %}
    {% set data = admin.data('config/' ~ config_slug) %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss(theme_url ~ '/css/codemirror/codemirror.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block titlebar %}
    <div class=\"button-bar\">
        <a class=\"button\" href=\"{{ admin_route('/') }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        {% if data.file.filename %}
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
        {% endif %}
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> {{ \"PLUGIN_ADMIN.CONFIGURATION\"|tu }} - {{ tab_title }}</h1>
{% endblock %}

{% block content_top %}
    {% if data.file.filename %}
    <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>
    {% endif %}

    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">

            {% if authorize(['admin.configuration.system', 'admin.super']) %}
            <a {% if config_slug == 'system' %}class=\"active\"{% endif %} href=\"{{ admin_route('/config/system') }}\">
                <span>{{ \"PLUGIN_ADMIN.SYSTEM\"|tu }}</span>
            </a>
            {% endif %}

            {% if authorize(['admin.configuration.site', 'admin.super']) %}
            <a {% if config_slug == 'site' %}class=\"active\"{% endif %} href=\"{{ admin_route('/config/site') }}\">
                <span>{{ \"PLUGIN_ADMIN.SITE\"|tu }}</span>
            </a>
            {% endif %}

            {% for configuration in admin.configurations if (configuration not in config_ignores) %}
                {% if authorize(['admin.configuration.' ~ configuration, 'admin.configuration_' ~ configuration, 'admin.super']) %}
                    {% set current_blueprints = admin.data('config/' ~ configuration).blueprints.toArray() %}
                    {% if configuration != 'system' and configuration != 'site' and not current_blueprints.form.hidden and (current_blueprints.form.fields is not empty or current_blueprints.form.field is not empty) %}
                        <a {% if config_slug == configuration %}class=\"active\"{% endif %} href=\"{{ admin_route('/config/' ~ configuration) }}\">
                            {% set configuration_string = \"PLUGIN_ADMIN.\" ~ configuration|upper %}
                            <span>{{ (configuration_string|tu == configuration_string ? configuration|capitalize : configuration_string|tu) }}</span>
                        </a>
                    {% endif %}
                {% endif %}
            {% endfor %}

            {% if authorize(['admin.configuration.info', 'admin.super']) %}
            <a {% if config_slug == 'info' %}class=\"active\"{% endif %} href=\"{{ admin_route('/config/info') }}\">
                <span>{{ \"PLUGIN_ADMIN.INFO\"|tu }}</span>
            </a>
            {% endif %}

        </div>
    </div>
{% endblock %}

{% block content %}
    {% if authorize(['admin.configuration.' ~ config_slug, 'admin.configuration_' ~ config_slug, 'admin.super']) %}
        {% if isInfo %}
            <div id=\"phpinfo\">
                <div style=\"margin-left:1.5rem\">
                    <a class=\"button button-big\" href=\"#\" style=\"text-align: center;\" data-remodal-target=\"changelog\" data-remodal-changelog=\"{{ admin_route('/changelog/type:plugins/slug:' ~ plugin.slug) }}\"><i class=\"fa fa-binoculars\"></i> View Grav Changelog</a>
                </div>
                {{ admin.phpinfo|raw }}
            </div>
        {% else %}
            <div class=\"config-wrapper-{{  config_slug }}\">
            {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}
            </div>
        {% endif %}
    {% endif %}
    {% include 'partials/modal-changes-detected.html.twig' %}
    {% include 'partials/modal-changelog.html.twig' %}
{% endblock %}
", "config.html.twig", "F:\\laragon\\www\\podca\\user\\plugins\\admin\\themes\\grav\\templates\\config.html.twig");
    }
}
