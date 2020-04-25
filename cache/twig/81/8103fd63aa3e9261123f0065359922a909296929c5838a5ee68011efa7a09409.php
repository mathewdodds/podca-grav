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

/* flex-objects/types/pages/edit.html.twig */
class __TwigTemplate_5adc257903fa1a0d629aceeb249ec321f0cd5f070ba9f0e20d15e820e857f577 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'back_button' => [$this, 'block_back_button'],
            'preview_button' => [$this, 'block_preview_button'],
            'delete_button' => [$this, 'block_delete_button'],
            'extra_buttons' => [$this, 'block_extra_buttons'],
            'save_button' => [$this, 'block_save_button'],
            'content_top' => [$this, 'block_content_top'],
            'topbar' => [$this, 'block_topbar'],
            'edit' => [$this, 'block_edit'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "flex-objects/types/default/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/pages/edit.html.twig"));

        // line 3
        $context["form"] = (($context["form"]) ?? ($this->getAttribute(($context["object"] ?? null), "form", [0 => ((($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) != "0")) ? ("raw") : (""))], "method")));
        // line 4
        $context["title"] = (($context["title"]) ?? (((($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method")) : (((($this->getAttribute(($context["object"] ?? null), "title", [], "any", true, true) &&  !(null === $this->getAttribute(($context["object"] ?? null), "title", [])))) ? ($this->getAttribute(($context["object"] ?? null), "title", [])) : (($context["key"] ?? null)))))));
        // line 5
        $context["can_translate"] = (($context["can_translate"]) ?? ((($this->getAttribute(($context["admin"] ?? null), "multilang", []) && $this->getAttribute(($context["object"] ?? null), "hasFlexFeature", [0 => "page-translate"], "method")) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))));
        // line 10
        $context["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("flex-objects/types/default/edit.html.twig", "flex-objects/types/pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $context["current_route"] = ("/" . $this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1], "method"));
        // line 14
        echo "
    ";
        // line 15
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 16
            echo "    ";
            $context["parent"] = $this->getAttribute(($context["object"] ?? null), "parent", []);
            // line 17
            echo "    ";
            $context["child"] = $this->getAttribute($this->getAttribute(($context["object"] ?? null), "children", []), "first", []);
            // line 18
            echo "    ";
            $context["prev"] = $this->getAttribute(($context["object"] ?? null), "prevSibling", []);
            // line 19
            echo "    ";
            $context["next"] = $this->getAttribute(($context["object"] ?? null), "nextSibling", []);
            // line 20
            echo "
    ";
            // line 21
            $context["parent_url"] = (((($context["parent"] ?? null) &&  !$this->getAttribute(($context["parent"] ?? null), "root", []))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(($context["back_route"] ?? null))) : (""));
            // line 22
            echo "    ";
            $context["child_url"] = ((($context["child"] ?? null)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["current_route"] ?? null) . "/") . $this->getAttribute(($context["child"] ?? null), "slug", [])))) : (""));
            // line 23
            echo "    ";
            $context["prev_url"] = ((($context["prev"] ?? null)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["back_route"] ?? null) . "/") . $this->getAttribute(($context["prev"] ?? null), "slug", [])))) : (""));
            // line 24
            echo "    ";
            $context["next_url"] = ((($context["next"] ?? null)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["back_route"] ?? null) . "/") . $this->getAttribute(($context["next"] ?? null), "slug", [])))) : (""));
            // line 25
            echo "    ";
        }
        // line 26
        echo "    ";
        $context["back_url"] = (($context["back_url"]) ?? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc($this->getAttribute(($context["flex"] ?? null), "adminRoute", [0 => $this->getAttribute(($context["directory"] ?? null), "getFlexType", [], "method")], "method"))));
        // line 27
        echo "
    ";
        // line 28
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 31
    public function block_back_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "back_button"));

        // line 32
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), 1 => "flex-objects/types/pages/buttons/back.html.twig"], "flex-objects/types/pages/edit.html.twig", 32)->display(twig_array_merge($context, ["back_url" =>         // line 33
($context["back_url"] ?? null)]));
        // line 34
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 35
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-prev.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-prev.html.twig"], "flex-objects/types/pages/edit.html.twig", 35)->display(twig_array_merge($context, ["prev_url" =>             // line 36
($context["prev_url"] ?? null), "title" => $this->getAttribute(($context["prev"] ?? null), "route", [])]));
            // line 37
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-parent.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-parent.html.twig"], "flex-objects/types/pages/edit.html.twig", 37)->display(twig_array_merge($context, ["parent_url" =>             // line 38
($context["parent_url"] ?? null), "title" => $this->getAttribute(($context["parent"] ?? null), "route", [])]));
            // line 39
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-child.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-child.html.twig"], "flex-objects/types/pages/edit.html.twig", 39)->display(twig_array_merge($context, ["child_url" =>             // line 40
($context["child_url"] ?? null), "title" => $this->getAttribute(($context["child"] ?? null), "route", [])]));
            // line 41
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-next.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-next.html.twig"], "flex-objects/types/pages/edit.html.twig", 41)->display(twig_array_merge($context, ["next_url" =>             // line 42
($context["next_url"] ?? null), "title" => $this->getAttribute(($context["next"] ?? null), "route", [])]));
            // line 43
            echo "    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 46
    public function block_preview_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview_button"));

        // line 47
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))) {
            // line 48
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/preview.html.twig"), 1 => "flex-objects/types/pages/buttons/preview.html.twig"], "flex-objects/types/pages/edit.html.twig", 48)->display($context);
            // line 49
            echo "    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 52
    public function block_delete_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_button"));

        // line 53
        echo "    ";
        // line 54
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 55
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/delete.html.twig"), 1 => "flex-objects/types/pages/buttons/delete.html.twig"], "flex-objects/types/pages/edit.html.twig", 55)->display($context);
            // line 56
            echo "    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 59
    public function block_extra_buttons($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_buttons"));

        // line 60
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))) {
            // line 61
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/add.html.twig"), 1 => "flex-objects/types/pages/buttons/add.html.twig"], "flex-objects/types/pages/edit.html.twig", 61)->display($context);
            // line 62
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/copy.html.twig"), 1 => "flex-objects/types/pages/buttons/copy.html.twig"], "flex-objects/types/pages/edit.html.twig", 62)->display($context);
            // line 63
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/move.html.twig"), 1 => "flex-objects/types/pages/buttons/move.html.twig"], "flex-objects/types/pages/edit.html.twig", 63)->display($context);
            // line 64
            echo "    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 67
    public function block_save_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "save_button"));

        // line 68
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/save.html.twig"), 1 => "flex-objects/types/pages/buttons/save.html.twig"], "flex-objects/types/pages/edit.html.twig", 68)->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 71
    public function block_content_top($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top"));

        // line 72
        echo "    ";
        if ((($context["allowed"] ?? null) && $this->getAttribute(($context["user"] ?? null), "authorize", [0 => "admin.super"], "method"))) {
            // line 73
            echo "    <div class=\"alert notice\">
        ";
            // line 74
            $context["save_location"] = (($this->getAttribute(($context["object"] ?? null), "getStorageFolder", [], "method")) ? ($this->getAttribute(($context["object"] ?? null), "getStorageFolder", [], "method")) : ($this->getAttribute(($context["directory"] ?? null), "getStorageFolder", [], "method")));
            // line 75
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_trim_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
            echo " ";
            echo (( !$this->getAttribute(($context["object"] ?? null), "exists", [])) ? ("[NEW]") : (""));
            echo "</b> (type: <b>";
            (($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "name"], "method")) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "getValue", [0 => "name"], "method"), "html", null, true))) : (print ("default")));
            echo "</b>)
    </div>
    ";
        }
        // line 78
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "flash", []), "exists", []))) {
            // line 79
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> You are editing a saved draft. <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESET"), "html", null, true);
            echo "</button>
        </div>
    ";
        }
        // line 83
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "exists", [])) {
            // line 84
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> This page will not exist until it is saved.
        </div>
    ";
        } elseif ((($this->getAttribute(        // line 87
($context["object"] ?? null), "exists", []) && ($context["can_translate"] ?? null)) &&  !($context["has_translation"] ?? null))) {
            // line 88
            echo "        <div class=\"alert warning\">
            This page has not been translated to <i class=\"fa fa-flag-o\"></i> <strong>";
            // line 89
            echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array")) : (($context["language"] ?? null))), "html", null, true);
            echo "</strong> language yet!
            ";
            // line 90
            if ((($context["language"] ?? null) == ($context["object_language"] ?? null))) {
                // line 91
                echo "                No fallback translations found.
            ";
            } else {
                // line 93
                echo "                Falling back to <strong>";
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")) : (($context["object_language"] ?? null))), "html", null, true);
                echo "</strong> language.
            ";
            }
            // line 95
            echo "        </div>
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 99
    public function block_topbar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        // line 100
        echo "    ";
        if (($context["can_translate"] ?? null)) {
            // line 101
            echo "        <div id=\"admin-lang-toggle\" class=\"button-group\">
            <button type=\"button\" class=\"button disabled\">
                <i class=\"fa fa-flag-o\"></i>
                ";
            // line 104
            echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")) : (($context["object_language"] ?? null))), "html", null, true);
            echo "
            </button>
            ";
            // line 106
            if ((count(($context["object_languages"] ?? null)) > $this->env->getExtension('Grav\Common\Twig\TwigExtension')->intFilter(twig_in_filter(($context["object_language"] ?? null), ($context["object_languages"] ?? null))))) {
                // line 107
                echo "                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu language-switcher\">
                ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["object_languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang_code"]) {
                    // line 112
                    echo "                    ";
                    if (($context["lang_code"] != ($context["object_language"] ?? null))) {
                        // line 113
                        echo "                    <li>
                        <a href=\"";
                        // line 114
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc($this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1], "method"), $context["lang_code"]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array")) : ($context["lang_code"])), "html", null, true);
                        echo "</a>
                    </li>
                    ";
                    }
                    // line 117
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_code'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "                </ul>
            ";
            }
            // line 120
            echo "        </div>
    ";
        }
        // line 122
        echo "
    <form id=\"admin-mode-toggle\">
        ";
        // line 124
        $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
        // line 125
        echo "        ";
        $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
        // line 126
        echo "        ";
        $context["maxLen"] = max([0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))]);
        // line 127
        echo "        ";
        $context["normalText"] = $context["macro"]->getspanToggle(($context["normalText"] ?? null), ($context["maxLen"] ?? null));
        // line 128
        echo "        ";
        $context["expertText"] = $context["macro"]->getspanToggle(($context["expertText"] ?? null), ($context["maxLen"] ?? null));
        // line 129
        echo "
        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "normal"], "method"), "toString", [0 => true], "method"), "html", null, true);
        echo "\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0")) {
            echo " checked=\"checked\"";
        }
        echo ">
            <label for=\"normal\">";
        // line 132
        echo ($context["normalText"] ?? null);
        echo "</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "expert"], "method"), "toString", [0 => true], "method"), "html", null, true);
        echo "\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "1")) {
            echo " checked=\"checked\"";
        }
        echo ">
            <label for=\"expert\">";
        // line 134
        echo ($context["expertText"] ?? null);
        echo "</label>
            <a></a>
        </div>
    </form>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 140
    public function block_edit($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edit"));

        // line 141
        echo "    ";
        $this->loadTemplate("partials/blueprints.html.twig", "flex-objects/types/pages/edit.html.twig", 141)->display(twig_array_merge($context, ["context" => ($context["object"] ?? null), "data" => ($context["object"] ?? null), "blueprints" => $this->getAttribute(($context["form"] ?? null), "blueprint", [])]));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 144
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 145
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    ";
        // line 147
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "flex-objects/types/pages/edit.html.twig", 147)->display($context);
        // line 148
        echo "
    ";
        // line 149
        if ($this->getAttribute(($context["object"] ?? null), "exists", [])) {
            // line 150
            echo "        ";
            $context["modal_data"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->dataFunc(["route" => ("/" . $this->getAttribute(            // line 151
($context["object"] ?? null), "key", [])), "name" => ((($this->getAttribute($this->getAttribute(            // line 152
($context["object"] ?? null), "header", [], "any", false, true), "child_type", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["object"] ?? null), "header", [], "any", false, true), "child_type", [])))) ? ($this->getAttribute($this->getAttribute(($context["object"] ?? null), "header", [], "any", false, true), "child_type", [])) : (null))]);
            // line 154
            echo "
        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 156
            $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/edit.html.twig", 156)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-page"]));
            // line 157
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 160
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "flex-objects/types/pages/edit.html.twig", 160)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new_folder"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-folder"]));
            // line 161
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 164
            $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/edit.html.twig", 164)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/modular_new"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-module"]));
            // line 165
            echo "        </div>
    ";
        }
        // line 167
        echo "
    ";
        // line 169
        echo "
    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>Parents</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">Loading...</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    <div class=\"remodal parents-container\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">
        ";
        // line 183
        $this->loadTemplate("partials/page-move.html.twig", "flex-objects/types/pages/edit.html.twig", 183)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/move"], "method"), "data" => ($context["context"] ?? null)]));
        // line 184
        echo "    </div>

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 188
    public function block_bottom($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 189
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 7
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "spanToggle"));

            // line 8
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
            echo "
";
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 8,  548 => 7,  535 => 189,  529 => 188,  520 => 184,  518 => 183,  509 => 177,  505 => 176,  496 => 169,  493 => 167,  489 => 165,  487 => 164,  482 => 161,  480 => 160,  475 => 157,  473 => 156,  469 => 154,  467 => 152,  466 => 151,  464 => 150,  462 => 149,  459 => 148,  457 => 147,  451 => 145,  445 => 144,  437 => 141,  431 => 140,  419 => 134,  411 => 133,  407 => 132,  399 => 131,  395 => 129,  392 => 128,  389 => 127,  386 => 126,  383 => 125,  381 => 124,  377 => 122,  373 => 120,  369 => 118,  363 => 117,  355 => 114,  352 => 113,  349 => 112,  345 => 111,  339 => 107,  337 => 106,  332 => 104,  327 => 101,  324 => 100,  318 => 99,  309 => 95,  303 => 93,  299 => 91,  297 => 90,  293 => 89,  290 => 88,  288 => 87,  283 => 84,  280 => 83,  274 => 80,  271 => 79,  268 => 78,  255 => 75,  253 => 74,  250 => 73,  247 => 72,  241 => 71,  233 => 68,  227 => 67,  219 => 64,  216 => 63,  213 => 62,  210 => 61,  207 => 60,  201 => 59,  193 => 56,  190 => 55,  187 => 54,  185 => 53,  179 => 52,  171 => 49,  168 => 48,  165 => 47,  159 => 46,  151 => 43,  149 => 42,  147 => 41,  145 => 40,  143 => 39,  141 => 38,  139 => 37,  137 => 36,  135 => 35,  132 => 34,  130 => 33,  128 => 32,  122 => 31,  113 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 16,  76 => 15,  73 => 14,  70 => 13,  64 => 12,  56 => 1,  54 => 10,  52 => 5,  50 => 4,  48 => 3,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'flex-objects/types/default/edit.html.twig' %}

{% set form = form ?? object.form(admin.session.expert != '0' ? 'raw') %}
{% set title = title ?? form.getValue('header.title') ?? object.title ?? key %}
{% set can_translate = can_translate ?? (admin.multilang and object.hasFlexFeature('page-translate') and not object.root()) %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}
{% import _self as macro %}

{% block body %}
    {% set current_route = '/' ~ route.getRoute(1) %}

    {% if not object.root() %}
    {% set parent = object.parent %}
    {% set child = object.children.first %}
    {% set prev = object.prevSibling %}
    {% set next = object.nextSibling %}

    {% set parent_url = parent and not parent.root ? admin_route(back_route) %}
    {% set child_url = child ? admin_route(current_route ~ '/' ~ child.slug) %}
    {% set prev_url = prev ? admin_route(back_route ~ '/' ~ prev.slug) %}
    {% set next_url = next ? admin_route(back_route ~ '/' ~ next.slug) %}
    {% endif %}
    {% set back_url = back_url ?? admin_route(flex.adminRoute(directory.getFlexType())) %}

    {{ parent() }}
{% endblock body %}

{% block back_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/back.html.twig', 'flex-objects/types/pages/buttons/back.html.twig']
        with { back_url: back_url } %}
    {% if not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-prev.html.twig', 'flex-objects/types/pages/buttons/nav-prev.html.twig']
        with { prev_url: prev_url, title: prev.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-parent.html.twig', 'flex-objects/types/pages/buttons/nav-parent.html.twig']
        with { parent_url: parent_url, title: parent.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-child.html.twig', 'flex-objects/types/pages/buttons/nav-child.html.twig']
        with { child_url: child_url, title: child.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-next.html.twig', 'flex-objects/types/pages/buttons/nav-next.html.twig']
        with { next_url: next_url, title: next.route } %}
    {% endif %}
{% endblock back_button %}

{% block preview_button %}
    {% if object.exists and not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/preview.html.twig', 'flex-objects/types/pages/buttons/preview.html.twig'] %}
    {% endif %}
{% endblock preview_button %}

{% block delete_button %}
    {# FIXME: add support for deleting root file only #}
    {% if not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/delete.html.twig', 'flex-objects/types/pages/buttons/delete.html.twig'] %}
    {% endif %}
{% endblock delete_button %}

{% block extra_buttons %}
    {% if object.exists and not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/add.html.twig', 'flex-objects/types/pages/buttons/add.html.twig'] %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/copy.html.twig', 'flex-objects/types/pages/buttons/copy.html.twig'] %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/move.html.twig', 'flex-objects/types/pages/buttons/move.html.twig'] %}
    {% endif %}
{% endblock extra_buttons %}

{% block save_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/save.html.twig', 'flex-objects/types/pages/buttons/save.html.twig'] %}
{% endblock save_button %}

{% block content_top %}
    {% if allowed and user.authorize('admin.super') %}
    <div class=\"alert notice\">
        {% set save_location = object.getStorageFolder() ?: directory.getStorageFolder() %}
        {{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ url(save_location, false, true)|trim('/') }} {{ not object.exists ? '[NEW]' }}</b> (type: <b>{{ (form.getValue('name') ?: 'default') }}</b>)
    </div>
    {% endif %}
    {% if object.exists and form.flash.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> You are editing a saved draft. <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">{{ \"PLUGIN_ADMIN.RESET\"|tu }}</button>
        </div>
    {% endif %}
    {% if not object.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> This page will not exist until it is saved.
        </div>
    {% elseif object.exists and can_translate and not has_translation %}
        <div class=\"alert warning\">
            This page has not been translated to <i class=\"fa fa-flag-o\"></i> <strong>{{ all_languages[language] ?? language }}</strong> language yet!
            {% if language == object_language %}
                No fallback translations found.
            {% else %}
                Falling back to <strong>{{ all_languages[object_language] ?? object_language }}</strong> language.
            {% endif %}
        </div>
    {% endif %}
{% endblock content_top %}

{% block topbar %}
    {% if can_translate %}
        <div id=\"admin-lang-toggle\" class=\"button-group\">
            <button type=\"button\" class=\"button disabled\">
                <i class=\"fa fa-flag-o\"></i>
                {{ all_languages[object_language] ?? object_language }}
            </button>
            {% if count(object_languages) > (object_language in object_languages)|int %}
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu language-switcher\">
                {% for lang_code in object_languages %}
                    {% if lang_code != object_language %}
                    <li>
                        <a href=\"{{ admin_route(route.getRoute(1), lang_code) }}\">{{ all_languages[lang_code] ?? lang_code }}</a>
                    </li>
                    {% endif %}
                {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}

    <form id=\"admin-mode-toggle\">
        {% set normalText = 'PLUGIN_ADMIN.NORMAL'|tu %}
        {% set expertText = 'PLUGIN_ADMIN.EXPERT'|tu %}
        {% set maxLen = max([normalText|length, expertText|length]) %}
        {% set normalText = macro.spanToggle(normalText, maxLen) %}
        {% set expertText = macro.spanToggle(expertText, maxLen) %}

        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ route.withGravParam('mode', 'normal').toString(true) }}\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
            <label for=\"normal\">{{ normalText|raw }}</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ route.withGravParam('mode', 'expert').toString(true) }}\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
            <label for=\"expert\">{{ expertText|raw }}</label>
            <a></a>
        </div>
    </form>
{% endblock topbar %}

{% block edit %}
    {% include 'partials/blueprints.html.twig' with { context: object, data: object, blueprints: form.blueprint } %}
{% endblock edit %}

{% block content %}
    {{ parent() }}

    {% include 'partials/modal-changes-detected.html.twig' %}

    {% if object.exists %}
        {% set modal_data = data({
            route: '/' ~ object.key,
            name: object.header.child_type ?? null
        }) %}

        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/new'), data: modal_data, form_id: 'new-page' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new-folder.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/new_folder'), data: modal_data, form_id: 'new-folder' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/modular_new'), data: modal_data, form_id: 'new-module' } %}
        </div>
    {% endif %}

    {# TODO: regular pages support extra modals from admin config #}

    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>Parents</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">Loading...</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

    <div class=\"remodal parents-container\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('admin/pages/move'), data: context } %}
    </div>

{% endblock content %}

{% block bottom %}
    {{ parent() }}
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
{% endblock bottom %}
", "flex-objects/types/pages/edit.html.twig", "F:\\laragon\\www\\podca\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\edit.html.twig");
    }
}
