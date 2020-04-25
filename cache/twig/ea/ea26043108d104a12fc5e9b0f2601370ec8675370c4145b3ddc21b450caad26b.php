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

/* flex-objects.html.twig */
class __TwigTemplate_4bd406d25d4ee2893f38f7f134ad25c75d8822d278560684ae29209bac20480b extends \Twig\Template
{
    protected function doGetParent(array $context)
    {
        // line 27
        return $this->loadTemplate(((        // line 20
($context["target"] ?? null)) ? ([0 => (((("flex-objects/types/" .         // line 21
($context["type"] ?? null)) . "/") . ($context["template"] ?? null)) . ".html.twig"), 1 => (("flex-objects/types/default/" .         // line 22
($context["template"] ?? null)) . ".html.twig"), 2 => "flex-objects/layouts/404.html.twig"]) : ([0 => (("flex-objects/types/default/" .         // line 25
($context["template"] ?? null)) . ".html.twig"), 1 => "flex-objects/layouts/404.html.twig"])), "flex-objects.html.twig", 27);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects.html.twig"));

        // line 1
        $context["user"] = $this->getAttribute(($context["admin"] ?? null), "user", []);
        // line 2
        $context["route"] = $this->getAttribute(($context["controller"] ?? null), "route", []);
        // line 3
        $context["type"] = ((($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.template"], "method", true, true) &&  !(null === $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.template"], "method")))) ? ($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.template"], "method")) : (($context["target"] ?? null)));
        // line 4
        ob_start();
        // line 5
        if ((($context["key"] ?? null) && $this->getAttribute($this->getAttribute(($context["uri"] ?? null), "currentUri", [], "method"), "queryParam", [0 => "preview"], "method"))) {
            // line 6
            echo "preview";
        } elseif ( !(null === $this->getAttribute(        // line 7
($context["route"] ?? null), "gravParam", [0 => ""], "method"))) {
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["route"] ?? null), "gravParam", [0 => ""], "method"), "html", null, true);
        } elseif ((        // line 9
($context["action"] ?? null) == "add")) {
            // line 10
            echo "edit";
        } elseif ((        // line 11
($context["action"] ?? null) == "delete")) {
            // line 12
            echo "list";
        } else {
            // line 14
            echo twig_escape_filter($this->env, ((($context["action"] ?? null)) ? (($context["action"] ?? null)) : (((($context["task"] ?? null)) ? (($context["task"] ?? null)) : ("types")))), "html", null, true);
        }
        $context["template"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        $context["separator"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        // line 27
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 27,  62 => 18,  58 => 14,  55 => 12,  53 => 11,  51 => 10,  49 => 9,  47 => 8,  45 => 7,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,  24 => 25,  23 => 22,  22 => 21,  21 => 20,  20 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set user = admin.user %}
{% set route = controller.route %}
{% set type = directory.config('admin.template') ?? target %}
{% set template -%}
    {%- if key and uri.currentUri().queryParam('preview') -%}
        preview
    {%- elseif route.gravParam('') is not null -%}
        {{- route.gravParam('') -}}
    {%- elseif action == 'add' -%}
        edit
    {%- elseif action == 'delete' -%}
        list
    {%- else -%}
        {{- action ?: task ?: 'types' -}}
    {%- endif -%}
{%- endset %}

{% set separator = config.system.param_sep %}

{% extends target ? [
        'flex-objects/types/' ~ type ~ '/' ~ template ~ '.html.twig',
        'flex-objects/types/default/' ~ template ~ '.html.twig',
        'flex-objects/layouts/404.html.twig'
    ] : [
        'flex-objects/types/default/' ~ template ~ '.html.twig',
        'flex-objects/layouts/404.html.twig'
    ] %}
", "flex-objects.html.twig", "F:\\laragon\\www\\podca\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects.html.twig");
    }
}
