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

/* flex-objects/types/default/edit.html.twig */
class __TwigTemplate_5e76d26c08b2842ee3db9ab8410c0cb4d3ffc397ff1da20b3313fe34c5b67a19 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("flex-objects/types/default/titlebar/edit.html.twig", "flex-objects/types/default/edit.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."flex-objects/types/default/titlebar/edit.html.twig".'" cannot be used as a trait.', 2, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'body' => [$this, 'block_body'],
                'content_top' => [$this, 'block_content_top'],
                'content' => [$this, 'block_content'],
                'topbar' => [$this, 'block_topbar'],
                'edit' => [$this, 'block_edit'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/default/edit.html.twig"));

        // line 5
        $context["form"] = (($context["form"]) ?? ($this->getAttribute(($context["object"] ?? null), "form", [])));
        // line 6
        $context["object"] = $this->getAttribute(($context["form"] ?? null), "object", []);
        // line 9
        $context["can_list"] = (($context["can_list"]) ?? ($this->getAttribute(($context["directory"] ?? null), "isAuthorized", [0 => "list", 1 => "admin", 2 => ($context["user"] ?? null)], "method")));
        // line 10
        $context["can_preview"] = (($context["can_preview"]) ?? (($this->getAttribute(($context["object"] ?? null), "exists", []) && $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.preview.enabled", 1 => false], "method"))));
        // line 11
        $context["can_read"] = (($context["can_read"]) ?? ((($this->getAttribute(($context["object"] ?? null), "exists", [])) ? ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "read", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) : ($this->getAttribute(($context["directory"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method")))));
        // line 12
        $context["can_save"] = (($context["can_save"]) ?? ((($this->getAttribute(($context["object"] ?? null), "exists", [])) ? ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "update", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) : ($this->getAttribute(($context["directory"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method")))));
        // line 13
        $context["can_delete"] = (($context["can_delete"]) ?? (($this->getAttribute(($context["object"] ?? null), "exists", []) && $this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "delete", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))));
        // line 14
        $context["can_translate"] = (($context["can_translate"]) ?? (($this->getAttribute(($context["admin"] ?? null), "multilang", []) && $this->getAttribute(($context["object"] ?? null), "hasFlexFeature", [0 => "flex-translate"], "method"))));
        // line 17
        if (($context["can_translate"] ?? null)) {
            // line 18
            $context["translate_include_default"] = (($context["translate_include_default"]) ?? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "get", [0 => "system.languages.include_default_lang_file_extension", 1 => true], "method")));
            // line 19
            $context["all_languages"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "admin", []), "siteLanguages", []);
            // line 20
            $context["admin_languages"] = $this->getAttribute(($context["admin"] ?? null), "languages_enabled", []);
            // line 21
            $context["default_language"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "default", []);
            // line 22
            $context["object_language"] = $this->getAttribute(($context["object"] ?? null), "language", []);
            // line 23
            $context["language"] = $this->getAttribute(($context["controller"] ?? null), "language", []);
            // line 24
            $context["has_translation"] = $this->getAttribute(($context["object"] ?? null), "hasTranslation", [0 => ($context["language"] ?? null), 1 => false], "method");
            // line 26
            if (($context["translate_include_default"] ?? null)) {
                // line 27
                $context["all_languages"] = twig_array_merge(($context["all_languages"] ?? null), ["" => "Default"]);
                // line 28
                $context["admin_languages"] = twig_array_merge(($context["admin_languages"] ?? null), ["" => ""]);
                // line 29
                $context["object_languages"] = $this->getAttribute(($context["object"] ?? null), "languages", [0 => true], "method");
            } else {
                // line 31
                $context["language"] = ((($context["language"] ?? null)) ? (($context["language"] ?? null)) : (($context["default_language"] ?? null)));
                // line 32
                $context["object_language"] = ((($context["object_language"] ?? null)) ? (($context["object_language"] ?? null)) : (($context["default_language"] ?? null)));
                // line 33
                $context["object_languages"] = $this->getAttribute(($context["object"] ?? null), "languages", [0 => false], "method");
                // line 34
                $context["has_translation"] = ((($context["has_translation"] ?? null)) ? (($context["has_translation"] ?? null)) : ((($context["language"] ?? null) === ($context["default_language"] ?? null))));
            }
        }
        // line 39
        $context["allowed"] = (($context["allowed"]) ?? (((($context["directory"] ?? null) && ($this->getAttribute(($context["object"] ?? null), "exists", []) && (($context["can_read"] ?? null) || ($context["can_save"] ?? null)))) || ((($context["action"] ?? null) == "add") && ($context["can_read"] ?? null)))));
        // line 40
        $context["back_route"] = (($context["back_route"]) ?? (("/" . ((((($context["action"] ?? null) != "edit") &&  !($context["key"] ?? null))) ? ($this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1, 1 => (( !($context["can_list"] ?? null)) ? ( -1) : (null))], "method")) : ($this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1, 1 => (( !($context["can_list"] ?? null)) ? ( -2) : ( -1))], "method"))))));
        // line 41
        $context["title_icon"] = (($context["title_icon"]) ?? (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["directory"] ?? null), "config", [], "any", false, true), "admin", [], "any", false, true), "menu", [], "any", false, true), "list", [], "any", false, true), "icon", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["directory"] ?? null), "config", [], "any", false, true), "admin", [], "any", false, true), "menu", [], "any", false, true), "list", [], "any", false, true), "icon", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["directory"] ?? null), "config", [], "any", false, true), "admin", [], "any", false, true), "menu", [], "any", false, true), "list", [], "any", false, true), "icon", [])) : ("fa-file-text-o"))));
        // line 42
        ob_start();
        // line 43
        $context["title_config"] = $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.edit.title"], "method");
        // line 44
        if ($this->getAttribute(($context["title_config"] ?? null), "template", [])) {
            // line 45
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute(($context["title_config"] ?? null), "template", []), "edit title template"));
        } else {
            // line 47
            echo twig_escape_filter($this->env, (($context["title"]) ?? (((($this->getAttribute($this->getAttribute(($context["object"] ?? null), "form", [], "any", false, true), "getValue", [0 => "title"], "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["object"] ?? null), "form", [], "any", false, true), "getValue", [0 => "title"], "method")))) ? ($this->getAttribute($this->getAttribute(($context["object"] ?? null), "form", [], "any", false, true), "getValue", [0 => "title"], "method")) : (((($this->getAttribute(($context["object"] ?? null), "title", [], "any", true, true) &&  !(null === $this->getAttribute(($context["object"] ?? null), "title", [])))) ? ($this->getAttribute(($context["object"] ?? null), "title", [])) : (($context["key"] ?? null))))))), "html", null, true);
        }
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "flex-objects/types/default/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "    ";
        $context["back_url"] = (($context["back_url"]) ?? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(($context["back_route"] ?? null))));
        // line 53
        echo "    ";
        $context["id"] = ($context["key"] ?? null);
        // line 54
        echo "    ";
        $context["blueprint"] = (($context["blueprint"]) ?? (((($this->getAttribute(($context["object"] ?? null), "blueprint", [], "any", true, true) &&  !(null === $this->getAttribute(($context["object"] ?? null), "blueprint", [])))) ? ($this->getAttribute(($context["object"] ?? null), "blueprint", [])) : ($this->getAttribute(($context["directory"] ?? null), "blueprint", [])))));
        // line 55
        echo "
    ";
        // line 56
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 59
    public function block_content_top($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top"));

        // line 60
        echo "    ";
        if ((($context["allowed"] ?? null) && $this->getAttribute(($context["user"] ?? null), "authorize", [0 => "admin.super"], "method"))) {
            // line 61
            echo "        ";
            if (((($context["directory"] ?? null) && ($context["object"] ?? null)) || (($context["action"] ?? null) == "add"))) {
                // line 62
                echo "            ";
                $context["save_location"] = ((($this->getAttribute(($context["object"] ?? null), "getStorageFolder", [], "method", true, true) &&  !(null === $this->getAttribute(($context["object"] ?? null), "getStorageFolder", [], "method")))) ? ($this->getAttribute(($context["object"] ?? null), "getStorageFolder", [], "method")) : ($this->getAttribute(($context["directory"] ?? null), "getStorageFolder", [], "method")));
                // line 63
                echo "            <div class=\"alert notice\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
                echo ": <b>";
                echo twig_escape_filter($this->env, twig_trim_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
                echo " ";
                echo (( !$this->getAttribute(($context["object"] ?? null), "exists", [])) ? ("[NEW]") : (""));
                echo "</b></div>
        ";
            }
            // line 65
            echo "    ";
        }
        // line 66
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "flash", []), "exists", []))) {
            // line 67
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> You are editing a saved draft. <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESET"), "html", null, true);
            echo "</button>
        </div>
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 73
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 74
        echo "    ";
        if (($context["allowed"] ?? null)) {
            // line 75
            echo "        <div class=\"clear directory admin-pages\">
            <div class=\"admin-form-wrapper\">
                <div id=\"admin-topbar\">
                    ";
            // line 78
            $this->displayBlock('topbar', $context, $blocks);
            // line 79
            echo "                </div>
                ";
            // line 80
            $this->displayBlock('edit', $context, $blocks);
            // line 83
            echo "            </div>
        </div>

        ";
            // line 86
            $this->loadTemplate("partials/modal-changes-detected.html.twig", "flex-objects/types/default/edit.html.twig", 86)->display($context);
            // line 87
            echo "
        ";
            // line 88
            if (($context["can_delete"] ?? null)) {
                // line 89
                echo "            ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/modals/remove.html.twig"), 1 => "flex-objects/types/default/modals/remove.html.twig"], "flex-objects/types/default/edit.html.twig", 89)->display(twig_array_merge($context, ["name" => ($context["target"] ?? null)]));
                // line 90
                echo "        ";
            }
            // line 91
            echo "
    ";
        } else {
            // line 93
            echo "
        ";
            // line 94
            $this->getAttribute(($context["page"] ?? null), "modifyHeader", [0 => "http_response_code", 1 => 404], "method");
            // line 95
            echo "        <div class=\"error-block\">
            <h1>Error 404</h1>
            <div class=\"padding\">
                <p>
                    Woops! Looks like this page doesn't exist.
                </p>
            </div>
        </div>

    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 78
    public function block_topbar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 80
    public function block_edit($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edit"));

        // line 81
        echo "                    ";
        $this->loadTemplate("partials/blueprints.html.twig", "flex-objects/types/default/edit.html.twig", 81)->display(twig_array_merge($context, ["form" => ($context["form"] ?? null), "context" => ($context["object"] ?? null), "data" => ($context["object"] ?? null)]));
        // line 82
        echo "                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 82,  286 => 81,  280 => 80,  269 => 78,  252 => 95,  250 => 94,  247 => 93,  243 => 91,  240 => 90,  237 => 89,  235 => 88,  232 => 87,  230 => 86,  225 => 83,  223 => 80,  220 => 79,  218 => 78,  213 => 75,  210 => 74,  204 => 73,  193 => 68,  190 => 67,  187 => 66,  184 => 65,  174 => 63,  171 => 62,  168 => 61,  165 => 60,  159 => 59,  150 => 56,  147 => 55,  144 => 54,  141 => 53,  138 => 52,  132 => 51,  124 => 1,  120 => 47,  117 => 45,  115 => 44,  113 => 43,  111 => 42,  109 => 41,  107 => 40,  105 => 39,  101 => 34,  99 => 33,  97 => 32,  95 => 31,  92 => 29,  90 => 28,  88 => 27,  86 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 14,  66 => 13,  64 => 12,  62 => 11,  60 => 10,  58 => 9,  56 => 6,  54 => 5,  45 => 1,  23 => 2,);
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
{% use 'flex-objects/types/default/titlebar/edit.html.twig' %}

{# Get updated object from the form #}
{% set form = form ?? object.form %}
{% set object = form.object %}

{# Allowed actions #}
{% set can_list = can_list ?? directory.isAuthorized('list', 'admin', user) %}
{% set can_preview = can_preview ?? (object.exists and directory.config('admin.preview.enabled', false)) %}
{% set can_read = can_read ?? (object.exists ? object.isAuthorized('read', 'admin', user) : directory.isAuthorized('create', 'admin', user)) %}
{% set can_save = can_save ?? (object.exists ? object.isAuthorized('update', 'admin', user) : directory.isAuthorized('create', 'admin', user)) %}
{% set can_delete = can_delete ?? (object.exists and object.isAuthorized('delete', 'admin', user)) %}
{% set can_translate = can_translate ?? (admin.multilang and object.hasFlexFeature('flex-translate')) %}

{# Translations #}
{% if can_translate %}
    {% set translate_include_default = translate_include_default ?? grav.config.get('system.languages.include_default_lang_file_extension', true) %}
    {% set all_languages = grav.admin.siteLanguages %}
    {% set admin_languages = admin.languages_enabled %}
    {% set default_language = grav.language.default %}
    {% set object_language = object.language %}
    {% set language = controller.language %}
    {% set has_translation = object.hasTranslation(language, false) %}

    {% if translate_include_default %}
        {% set all_languages = all_languages|merge({'': 'Default'}) %}
        {% set admin_languages = admin_languages|merge({'': ''}) %}
        {% set object_languages = object.languages(true) %}
    {% else %}
        {% set language = language ?: default_language %}
        {% set object_language = object_language ?: default_language %}
        {% set object_languages = object.languages(false) %}
        {% set has_translation = has_translation ?: language is same as(default_language) %}
    {% endif %}
{% endif %}

{# These variables can be overridden from the main template file #}
{% set allowed = allowed ?? (directory and (object.exists and (can_read or can_save)) or (action == 'add' and can_read)) %}
{% set back_route = back_route ?? ('/' ~ (action != 'edit' and not key ? route.getRoute(1, not can_list ? -1 : null) : route.getRoute(1, not can_list ? -2 : -1))) %}
{% set title_icon = title_icon ?? directory.config.admin.menu.list.icon ?? 'fa-file-text-o' %}
{% set title -%}
    {%- set title_config = directory.config('admin.edit.title') -%}
    {%- if title_config.template -%}
        {{- include(template_from_string(title_config.template, 'edit title template')) -}}
    {%- else -%}
        {{- title ?? object.form.getValue('title') ?? object.title ?? key -}}
    {% endif %}
{%- endset %}

{% block body %}
    {% set back_url = back_url ?? admin_route(back_route) %}
    {% set id = key %}
    {% set blueprint = blueprint ?? object.blueprint ?? directory.blueprint %}

    {{ parent() }}
{% endblock body %}

{% block content_top %}
    {% if allowed and user.authorize('admin.super') %}
        {% if directory and object or action == 'add' %}
            {% set save_location = object.getStorageFolder() ?? directory.getStorageFolder() %}
            <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ url(save_location, false, true)|trim('/') }} {{ not object.exists ? '[NEW]' }}</b></div>
        {% endif %}
    {% endif %}
    {% if object.exists and form.flash.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> You are editing a saved draft. <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">{{ \"PLUGIN_ADMIN.RESET\"|tu }}</button>
        </div>
    {% endif %}
{% endblock %}

{% block content %}
    {% if allowed %}
        <div class=\"clear directory admin-pages\">
            <div class=\"admin-form-wrapper\">
                <div id=\"admin-topbar\">
                    {% block topbar %}{% endblock %}
                </div>
                {% block edit %}
                    {% include 'partials/blueprints.html.twig' with { form: form, context: object, data: object } %}
                {% endblock %}
            </div>
        </div>

        {% include 'partials/modal-changes-detected.html.twig' %}

        {% if can_delete %}
            {% include ['flex-objects/types/' ~ target ~ '/modals/remove.html.twig', 'flex-objects/types/default/modals/remove.html.twig'] with { name: target } %}
        {% endif %}

    {% else %}

        {% do page.modifyHeader('http_response_code', 404) %}
        <div class=\"error-block\">
            <h1>Error 404</h1>
            <div class=\"padding\">
                <p>
                    Woops! Looks like this page doesn't exist.
                </p>
            </div>
        </div>

    {% endif %}
{% endblock %}
", "flex-objects/types/default/edit.html.twig", "F:\\laragon\\www\\podca\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\edit.html.twig");
    }
}
