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

/* pages.html.twig */
class __TwigTemplate_eeb753b3f54041ea1f387779704f1f27866510aa929f9e1817b81a2721b1e9eb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages.html.twig"));

        // line 83
        $context["macro"] = $this;
        // line 85
        if ($this->getAttribute(($context["admin"] ?? null), "route", [])) {
            // line 86
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", [0 => true], "method");
        } elseif (($this->getAttribute($this->getAttribute(        // line 92
($context["grav"] ?? null), "language", []), "enabled", []) && ($this->getAttribute(($context["admin"] ?? null), "language", []) != $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "admin_lang", [])))) {
            // line 94
            $this->getAttribute(($context["admin"] ?? null), "redirect", [0 => $this->getAttribute(($context["admin"] ?? null), "adminRoute", [0 => "/pages", 1 => $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "admin_lang", [])], "method")], "method");
        }
        // line 97
        if ($this->getAttribute(($context["uri"] ?? null), "param", [0 => "new"], "method")) {
            // line 98
            $context["mode"] = "new";
        } elseif (        // line 99
($context["context"] ?? null)) {
            // line 100
            $context["mode"] = "edit";
            // line 101
            if ($this->getAttribute(($context["context"] ?? null), "exists", [])) {
                // line 102
                $context["page_url"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/pages" . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "routes", []), "default", [])) : ($this->getAttribute(($context["context"] ?? null), "rawRoute", [])))));
                // line 103
                $context["exists"] = true;
                // line 104
                $context["title"] = (((($this->getAttribute(($context["context"] ?? null), "exists", [])) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "title", [])) ? ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "title", [])) : ($this->getAttribute(($context["context"] ?? null), "title", []))));
            } else {
                // line 106
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 109
            $context["mode"] = "list";
            // line 110
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 113
        $context["modular"] = (($this->getAttribute(($context["context"] ?? null), "isModule", [])) ? ("modular_") : (""));
        // line 114
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "warnings", []), "delete_page", []);
        // line 115
        $context["secure_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "warnings", []), "secure_delete", []);
        // line 116
        $context["page_lang"] = $this->getAttribute(($context["context"] ?? null), "language", []);
        // line 117
        $context["type"] = "page";
        // line 130
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []) != "inline")) {
            // line 131
            $context["preview_route"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", [])) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", []))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", [])) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", []))))) : ("/"));
            // line 132
            $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []);
            // line 133
            $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", [])) ? ((((((("<a class=\"button\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_route"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        } else {
            // line 135
            $context["preview_route"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/preview" . (($this->getAttribute(($context["context"] ?? null), "home", [])) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", [])))));
            // line 136
            $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", [])) ? ((((("<a class=\"button\" href=\"" . ($context["preview_route"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 119
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 120
        echo "    ";
        if ((($context["mode"] ?? null) == "edit")) {
            // line 121
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")], "method");
            // line 122
            echo "    ";
        }
        // line 123
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 139
    public function block_titlebar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlebar"));

        // line 140
        echo "
    <div class=\"button-bar\">
        ";
        // line 142
        if ((($context["mode"] ?? null) == "list")) {
            // line 143
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/"), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>

            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "add_modals", []));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 146
                echo "                ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", []), "bar") == "bar")) {
                    // line 147
                    echo "                    <a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", []), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", [])), "html", null, true);
                    echo "</a>
                ";
                }
                // line 149
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "
            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> ";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
            echo "</a></li>
                    ";
            // line 161
            if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", []))) {
                // line 162
                echo "                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULE"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 164
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "add_modals", []));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 165
                echo "                        ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", []), "bar") == "dropdown")) {
                    // line 166
                    echo "                            <li><a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", []), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", [])), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 168
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                </ul>
            </div>

            ";
            // line 172
            if ($this->getAttribute(($context["admin"] ?? null), "multilang", [])) {
                // line 173
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 176
                $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", []), $this->getAttribute(($context["admin"] ?? null), "language", []), [], "array");
                // line 177
                echo "                        ";
                echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                echo "
                    </button>
                    ";
                // line 179
                if ((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "languages_enabled", [])) > 1)) {
                    // line 180
                    echo "                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                    // line 184
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "languages_enabled", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 185
                        echo "                            ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", []), $context["langCode"], [], "array");
                        // line 186
                        echo "                            ";
                        if (($context["langCode"] != $this->getAttribute(($context["admin"] ?? null), "language", []))) {
                            // line 187
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((((((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["theme"] ?? null), "slug", [])) . "/pages/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</a></li>
                            ";
                        }
                        // line 189
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 190
                    echo "                    </ul>
                    ";
                }
                // line 192
                echo "                </div>
            ";
            }
            // line 194
            echo "
        ";
        } elseif ((        // line 195
($context["mode"] ?? null) == "edit")) {
            // line 196
            echo "
            ";
            // line 197
            echo ($context["preview_link"] ?? null);
            echo "

            <a class=\"button\" href=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/pages"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i></a>

            ";
            // line 201
            if (($context["exists"] ?? null)) {
                // line 202
                echo "                ";
                $context["siblings"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "parent", [], "method"), "children", [], "method");
                // line 203
                echo "
                ";
                // line 204
                if ( !$this->getAttribute(($context["siblings"] ?? null), "isFirst", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method")) {
                    // line 205
                    echo "                    ";
                    $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method");
                    // line 206
                    echo "                    ";
                    $context["sib_url"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/pages" . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", [])))));
                    // line 207
                    echo "                    <a class=\"button hidden-mobile\" href=\"";
                    echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIOUS"), "html", null, true);
                    echo "\"><i class=\"fa fa-chevron-left\"></i></a>
                ";
                }
                // line 209
                echo "
                ";
                // line 210
                if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method")) {
                    // line 211
                    echo "                    ";
                    $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method");
                    // line 212
                    echo "                    ";
                    $context["sib_url"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/pages" . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", [])))));
                    // line 213
                    echo "                    <a class=\"button hidden-mobile\" href=\"";
                    echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEXT"), "html", null, true);
                    echo "\"><i class=\"fa fa-chevron-right\"></i></a>
                ";
                }
                // line 215
                echo "
                ";
                // line 216
                if (($context["warn"] ?? null)) {
                    // line 217
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-trash-o\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 219
                    echo "                    <a class=\"button disable-after-click\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((($this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-trash-o\"></i></a>
                ";
                }
                // line 221
                echo "
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 224
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
                // line 230
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
                echo "</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
                // line 231
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
                echo "</a></li>
                        ";
                // line 232
                if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", []))) {
                    // line 233
                    echo "                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULE"), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 235
                echo "                    </ul>
                </div>

                <a class=\"button disable-after-click\" href=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "copy"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\" data-parents=\"data[route]\"><i class=\"fa fa-arrows\"></i> ";
                // line 239
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
                echo "</a>
                ";
                // line 240
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin-pro", [], "array"), "enabled", [])) {
                    // line 241
                    echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 243
                echo "
            ";
            }
            // line 245
            echo "
            <div class=\"button-group\">
                <button class=\"button success\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
                ";
            // line 248
            if ((($context["exists"] ?? null) && $this->getAttribute(($context["admin"] ?? null), "multilang", []))) {
                // line 249
                echo "                    ";
                $context["untranslated"] = $this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", [0 => true], "method");
                // line 250
                echo "                    ";
                if (($context["untranslated"] ?? null)) {
                    // line 251
                    echo "                        <button type=\"button\" class=\"button success dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 255
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["untranslated"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 256
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", []), $context["langCode"], [], "array");
                        // line 257
                        echo "                                ";
                        if (($context["langCode"] != ($context["page_lang"] ?? null))) {
                            // line 258
                            echo "                                    <li><button class=\"button success task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo twig_escape_filter($this->env, $context["langCode"], "html", null, true);
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</button></li>
                                ";
                        }
                        // line 260
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 261
                    echo "                        </ul>
                    ";
                }
                // line 263
                echo "                ";
            }
            // line 264
            echo "            </div>


        ";
        }
        // line 268
        echo "    </div>
    ";
        // line 269
        if ((($context["mode"] ?? null) == "new")) {
            // line 270
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 271
($context["mode"] ?? null) == "edit")) {
            // line 272
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "title", []), "html", null, true);
            echo "
        </h1>
    ";
        } else {
            // line 276
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</h1>
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 280
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 281
        echo "    <div class=\"clear admin-pages\">
    ";
        // line 282
        if ((($context["mode"] ?? null) == "new")) {
            // line 283
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 283)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "pages/page"], "method"), "data" => ($context["context"] ?? null)]));
            // line 284
            echo "    ";
        } elseif ((($context["mode"] ?? null) == "edit")) {
            // line 285
            echo "        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                ";
            // line 288
            if ($this->getAttribute(($context["admin"] ?? null), "multilang", [])) {
                // line 289
                echo "                    ";
                $context["translated"] = $this->getAttribute(($context["context"] ?? null), "translatedLanguages", [0 => false], "method");
                // line 290
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 292
                if (($context["exists"] ?? null)) {
                    // line 293
                    echo "                                ";
                    echo twig_escape_filter($this->env, (($context["page_lang"]) ?? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEFAULT"))), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 295
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "language", []), "html", null, true);
                    echo "
                            ";
                }
                // line 297
                echo "                        </button>

                        ";
                // line 299
                if ((($context["exists"] ?? null) && (twig_length_filter($this->env, ($context["translated"] ?? null)) > (1 - $this->env->getExtension('Grav\Common\Twig\TwigExtension')->intFilter((($context["exists"] ?? null) &&  !($context["page_lang"] ?? null))))))) {
                    // line 300
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 304
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["translated"] ?? null));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 305
                        echo "                                    ";
                        if (($context["language"] != (($context["page_lang"]) ?? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "default", []))))) {
                            // line 306
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "\" redirect=\"";
                            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["context"] ?? null), "rawRoute", []), "/"), "html", null, true);
                            echo "\" form=\"blueprints\">";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "</button></li>
                                    ";
                        }
                        // line 308
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 309
                    echo "                                ";
                    if ((twig_length_filter($this->env, ($context["translated"] ?? null)) > 1)) {
                        // line 310
                        echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "default", []), "html", null, true);
                        echo "\" redirect=\"";
                        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["context"] ?? null), "rawRoute", []), "/"), "html", null, true);
                        echo "\" form=\"blueprints\">Default</button></li>
                                ";
                    }
                    // line 312
                    echo "                            </ul>
                        ";
                }
                // line 314
                echo "                    </div>
                ";
            }
            // line 316
            echo "
                ";
            // line 317
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", []), "fields", [])) {
                // line 318
                echo "                ";
                $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 319
                echo "                ";
                $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 320
                echo "                ";
                $context["maxLen"] = max([0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))]);
                // line 321
                echo "                ";
                $context["normalText"] = $context["macro"]->getspanToggle(($context["normalText"] ?? null), ($context["maxLen"] ?? null));
                // line 322
                echo "                ";
                $context["expertText"] = $context["macro"]->getspanToggle(($context["expertText"] ?? null), ($context["maxLen"] ?? null));
                // line 323
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 325
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc((((("/pages/" . twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/")) . "/mode") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "normal")), "html", null, true);
                echo "\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 326
                echo ($context["normalText"] ?? null);
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 327
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc((((("/pages/" . twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/")) . "/mode") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "expert")), "html", null, true);
                echo "\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 328
                echo ($context["expertText"] ?? null);
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 333
            echo "
            </div>

            ";
            // line 337
            echo "            ";
            if (($context["current_form_data"] ?? null)) {
                // line 338
                echo "                ";
                $this->getAttribute(($context["context"] ?? null), "header", [0 => $this->getAttribute(($context["current_form_data"] ?? null), "header", [])], "method");
                // line 339
                echo "                ";
                $this->getAttribute(($context["context"] ?? null), "content", [0 => $this->getAttribute(($context["current_form_data"] ?? null), "content", [])], "method");
                // line 340
                echo "            ";
            }
            // line 341
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", []), "fields", []) && ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0"))) {
                // line 342
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 342)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["context"] ?? null), "blueprints", []), "data" => ($context["context"] ?? null)]));
                // line 343
                echo "            ";
            } else {
                // line 344
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 344)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => (("admin/pages/" . ($context["modular"] ?? null)) . "raw")], "method"), "data" => ($context["context"] ?? null)]));
                // line 345
                echo "            ";
            }
            // line 346
            echo "        </div>
    ";
        } else {
            // line 348
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"";
            // line 350
            echo twig_escape_filter($this->env, twig_jsonencode_filter([0 => ["id" => "mode", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_MODES")], 1 => ["id" => "type", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_TYPES")], 2 => ["id" => "access", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_LEVELS")]]), "html_attr");
            echo "\" data-filter-types=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute(($context["admin"] ?? null), "types", []), $this->getAttribute(($context["admin"] ?? null), "modularTypes", []))), "html_attr");
            echo "\" data-filter-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["admin"] ?? null), "accessLevels", [])), "html_attr");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS"), "html", null, true);
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 353
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES"), "html", null, true);
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 356
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 357
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
            echo "</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                ";
            // line 362
            echo $context["macro"]->getloop(($context["pages"] ?? null), 0, $context);
            echo "
            </ul>
            ";
            // line 364
            $this->loadTemplate("partials/page-legend.html.twig", "pages.html.twig", 364)->display($context);
            // line 365
            echo "        </div>
    ";
        }
        // line 367
        echo "    </div>

    ";
        // line 369
        if (($context["context"] ?? null)) {
            // line 370
            echo "        ";
            $context["obj_data"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->cloneFunc(($context["context"] ?? null));
            // line 371
            echo "
        ";
            // line 372
            if ((($context["mode"] ?? null) == "edit")) {
                // line 373
                echo "            ";
                $this->getAttribute(($context["obj_data"] ?? null), "folder", [0 => ""], "method");
                // line 374
                echo "        ";
            }
            // line 375
            echo "    ";
        }
        // line 376
        echo "
    ";
        // line 377
        if (((($context["mode"] ?? null) == "list") || (($context["mode"] ?? null) == "edit"))) {
            // line 378
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 379
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 379)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new"], "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-page"]));
            // line 380
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 383
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "pages.html.twig", 383)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new_folder"], "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-folder"]));
            // line 384
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 387
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 387)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/modular_new"], "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-modular"]));
            // line 388
            echo "    </div>

    ";
            // line 390
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "add_modals", []));
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
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 391
                echo "        <div class=\"remodal ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "modal_classes", []), ""), "html", null, true);
                echo "\" data-remodal-id=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-options=\"hashTracking: false\">
            ";
                // line 392
                $this->loadTemplate($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "template", []), "partials/blueprints-new.html.twig"), "pages.html.twig", 392)->display(twig_array_merge($context, twig_array_merge(["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => $this->getAttribute($context["add_modal"], "blueprint", [])], "method"), "data" => ($context["context"] ?? null), "form_id" => "add-modal"], $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "with", []), []))));
                // line 393
                echo "        </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 395
            echo "    ";
        }
        // line 396
        echo "
    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>Parents</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">Loading...</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>
    ";
        // line 408
        if ((($context["mode"] ?? null) == "edit")) {
            // line 409
            echo "    <div class=\"remodal parents-container\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 410
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 410)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/move"], "method"), "data" => ($context["context"] ?? null)]));
            // line 411
            echo "    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 413
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate([0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"], "pages.html.twig", 413);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display(twig_array_merge($context, ["data" => ($context["context"] ?? null)]));
            }
            // line 414
            echo "    </div>
    ";
        }
        // line 416
        echo "
    ";
        // line 417
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "pages.html.twig", 417)->display($context);
        // line 418
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-optF#ions=\"hashTracking: false\">
        <form>
            <h1>";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 423
        if (($context["context"] ?? null)) {
            // line 424
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "title", []), "html", null, true);
            echo "</strong>
                ";
        }
        // line 426
        echo "            </p>
            <p class=\"bigger\">
              ";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            ";
        // line 430
        if (($context["secure_delete"] ?? null)) {
            // line 431
            echo "                <p class=\"form-secure-delete\">
                    <input id=\"secure-delete-field\" autofocus type=\"text\" placeholder=\"";
            // line 432
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SECURE_DELETE_DESC"), "html", null, true);
            echo "\" />
                </p>
            ";
        }
        // line 435
        echo "            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            ";
        // line 438
        if (($context["secure_delete"] ?? null)) {
            // line 439
            echo "                <button id=\"secure-delete-btn\" disabled=\"true\" class=\"button danger disable-after-click\" data-delete-action><i class=\"fa fa-fw fa-check\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIRM"), "html", null, true);
            echo "</button>
            ";
        } else {
            // line 441
            echo "                <a class=\"button danger disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</a>
            ";
        }
        // line 443
        echo "            </div>
        </form>
    </div>

    ";
        // line 447
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
        try {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             $this->loadTemplate("partials/admin-pro-pages-addons.html.twig", "pages.html.twig", 447);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
        }
        // line 448
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 451
    public function block_bottom($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 452
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
        ";
        // line 455
        if (($context["secure_delete"] ?? null)) {
            // line 456
            echo "        \$('#secure-delete-field').keyup(function () {
            var inputValue = \$(this).val();
            if (inputValue == 'DELETE') {
                \$('#secure-delete-btn').attr('disabled', false);
            }else{
                \$('#secure-delete-btn').attr('disabled', true);
            }
        });
        \$(document).on('closing', '.remodal', function () {
            \$('#secure-delete-field').val('');
        });
        ";
        }
        // line 468
        echo "    </script>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
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

            // line 4
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

    // line 7
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "loop"));

            // line 8
            echo "    ";
            $context["self"] = $this;
            // line 9
            echo "
    ";
            // line 10
            $context["config"] = $this->getAttribute(($context["twig_vars"] ?? null), "config", [], "array");
            // line 11
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
            // line 12
            echo "    ";
            $context["display_field"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "pages_list_display_field", []);
            // line 13
            echo "    ";
            $context["base_url_relative_frontend"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative_frontend", [], "array");
            // line 14
            echo "    ";
            $context["admin"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin", [], "array");
            // line 15
            echo "    ";
            $context["warn"] = $this->getAttribute(($context["twig_vars"] ?? null), "warn", [], "array");
            // line 16
            echo "    ";
            $context["uri"] = $this->getAttribute(($context["twig_vars"] ?? null), "uri", [], "array");
            // line 17
            echo "
    ";
            // line 18
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "admin", []), "children_display_order", []) == "collection") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "by", []))) {
                // line 19
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "custom", [])) {
                    // line 20
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", [], "method"), "order", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "by", []), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", []), "asc")) : ("asc")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "custom", [])], "method");
                    // line 21
                    echo "        ";
                } else {
                    // line 22
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", [], "method"), "order", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "by", []), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", []), "asc")) : ("asc"))], "method");
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "    ";
            } else {
                // line 25
                echo "        ";
                $context["pcol"] = $this->getAttribute(($context["page"] ?? null), "children", [], "method");
                // line 26
                echo "    ";
            }
            // line 27
            echo "
    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pcol"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 29
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.FOLDER") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE") . " &bull; "))) . (($this->getAttribute(                // line 30
$context["p"], "isModule", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODULE") . " &bull; ")) : (""))) . (($this->getAttribute(                // line 31
$context["p"], "routable", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ROUTABLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_ROUTABLE") . " &bull; ")))) . (($this->getAttribute(                // line 32
$context["p"], "visible", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VISIBLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_VISIBLE") . " &bull; ")))) . (($this->getAttribute(                // line 33
$context["p"], "published", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PUBLISHED") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_PUBLISHED") . " &bull; "))));
                // line 34
                echo "
        ";
                // line 35
                $context["page_url"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->getPageUrl($context["p"]);
                // line 36
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", []), "html", null, true);
                echo "\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" ";
                // line 39
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo ">
                    <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 40
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "isModule", [])) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", [])) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", [])) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", [])) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"";
                // line 44
                echo twig_trim_filter(($context["description"] ?? null), " &bull; ");
                echo "\" class=\"hint--top page-item__content-hint\">
                            ";
                // line 45
                $context["page_label"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($context["p"], "header", []), ($context["display_field"] ?? null)), $this->getAttribute($context["p"], ($context["display_field"] ?? null))), $this->getAttribute($context["p"], "title", [])), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute($context["p"], "slug", [])));
                // line 46
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, ($context["page_url"] ?? null), "html", null, true);
                echo "\" class=\"page-edit\">";
                echo twig_escape_filter($this->env, ($context["page_label"] ?? null));
                echo "</a>
                        </span>
                        ";
                // line 48
                if ($this->getAttribute($context["p"], "language", [])) {
                    // line 49
                    echo "                            <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", []) == $this->getAttribute(($context["admin"] ?? null), "language", []))) {
                        echo "info";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "language", []), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 51
                echo "                        ";
                if ($this->getAttribute($context["p"], "home", [])) {
                    // line 52
                    echo "                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        ";
                }
                // line 54
                echo "                    </div>
                    <p class=\"page-route\">";
                // line 55
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) : ($this->getAttribute($context["p"], "route", []))), "html", null, true);
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "template", [], "method"), "html", null, true);
                echo "</p>
                </div>
                <span class=\"page-item__tools\">
                    ";
                // line 58
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []) != "inline")) {
                    // line 59
                    echo "                        ";
                    $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []);
                    // line 60
                    echo "                        ";
                    $context["preview_route"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute($context["p"], "home", [])) ? ("") : ($this->getAttribute($context["p"], "route", []))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute($context["p"], "home", [])) ? ("") : ($this->getAttribute($context["p"], "route", []))))) : ("/"));
                    // line 61
                    echo "                        ";
                    $context["preview_link"] = (($this->getAttribute($context["p"], "routable", [])) ? ((((((("<a class=\"page-view\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_route"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\"></i></a>")) : (""));
                    // line 62
                    echo "                    ";
                } else {
                    // line 63
                    echo "                        ";
                    $context["preview_route"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/preview" . (($this->getAttribute($context["p"], "home", [])) ? ("") : ($this->getAttribute($context["p"], "route", [])))));
                    // line 64
                    echo "                        ";
                    $context["preview_link"] = (($this->getAttribute($context["p"], "routable", [])) ? ((((("<a class=\"page-view\" href=\"" . ($context["preview_route"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\"></i></a>")) : (""));
                    // line 65
                    echo "                    ";
                }
                // line 66
                echo "                    ";
                echo ($context["preview_link"] ?? null);
                echo "
                    ";
                // line 67
                if (($context["warn"] ?? null)) {
                    // line 68
                    echo "                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-trash-o\"></i></a>
                    ";
                } else {
                    // line 70
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-trash-o\"></i></a>
                    ";
                }
                // line 72
                echo "                </span>
            </div>
            ";
                // line 74
                if (($this->getAttribute($this->getAttribute($context["p"], "children", [], "method"), "count", []) > 0)) {
                    // line 75
                    echo "                <ul class=\"depth-";
                    echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                    ";
                    // line 76
                    echo $context["self"]->getloop($context["p"], (($context["depth"] ?? null) + 1), ($context["twig_vars"] ?? null));
                    echo "
                </ul>
            ";
                }
                // line 79
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
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
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1297 => 79,  1291 => 76,  1286 => 75,  1284 => 74,  1280 => 72,  1274 => 70,  1268 => 68,  1266 => 67,  1261 => 66,  1258 => 65,  1255 => 64,  1252 => 63,  1249 => 62,  1246 => 61,  1243 => 60,  1240 => 59,  1238 => 58,  1230 => 55,  1227 => 54,  1223 => 52,  1220 => 51,  1210 => 49,  1208 => 48,  1200 => 46,  1198 => 45,  1194 => 44,  1185 => 40,  1181 => 39,  1176 => 37,  1173 => 36,  1171 => 35,  1168 => 34,  1166 => 33,  1165 => 32,  1164 => 31,  1163 => 30,  1161 => 29,  1157 => 28,  1154 => 27,  1151 => 26,  1148 => 25,  1145 => 24,  1142 => 23,  1139 => 22,  1136 => 21,  1133 => 20,  1130 => 19,  1128 => 18,  1125 => 17,  1122 => 16,  1119 => 15,  1116 => 14,  1113 => 13,  1110 => 12,  1107 => 11,  1105 => 10,  1102 => 9,  1099 => 8,  1082 => 7,  1061 => 4,  1045 => 3,  1037 => 468,  1023 => 456,  1021 => 455,  1014 => 452,  1008 => 451,  1000 => 448,  990 => 447,  984 => 443,  978 => 441,  972 => 439,  970 => 438,  966 => 437,  962 => 435,  956 => 432,  953 => 431,  951 => 430,  946 => 428,  942 => 426,  934 => 424,  932 => 423,  927 => 421,  922 => 418,  920 => 417,  917 => 416,  913 => 414,  903 => 413,  899 => 411,  897 => 410,  894 => 409,  892 => 408,  885 => 404,  881 => 403,  872 => 396,  869 => 395,  854 => 393,  852 => 392,  845 => 391,  828 => 390,  824 => 388,  822 => 387,  817 => 384,  815 => 383,  810 => 380,  808 => 379,  805 => 378,  803 => 377,  800 => 376,  797 => 375,  794 => 374,  791 => 373,  789 => 372,  786 => 371,  783 => 370,  781 => 369,  777 => 367,  773 => 365,  771 => 364,  766 => 362,  758 => 357,  754 => 356,  748 => 353,  736 => 350,  732 => 348,  728 => 346,  725 => 345,  722 => 344,  719 => 343,  716 => 342,  713 => 341,  710 => 340,  707 => 339,  704 => 338,  701 => 337,  696 => 333,  688 => 328,  680 => 327,  676 => 326,  668 => 325,  664 => 323,  661 => 322,  658 => 321,  655 => 320,  652 => 319,  649 => 318,  647 => 317,  644 => 316,  640 => 314,  636 => 312,  628 => 310,  625 => 309,  619 => 308,  609 => 306,  606 => 305,  602 => 304,  596 => 300,  594 => 299,  590 => 297,  584 => 295,  578 => 293,  576 => 292,  572 => 290,  569 => 289,  567 => 288,  562 => 285,  559 => 284,  556 => 283,  554 => 282,  551 => 281,  545 => 280,  534 => 276,  528 => 273,  525 => 272,  523 => 271,  518 => 270,  516 => 269,  513 => 268,  507 => 264,  504 => 263,  500 => 261,  494 => 260,  484 => 258,  481 => 257,  478 => 256,  474 => 255,  468 => 251,  465 => 250,  462 => 249,  460 => 248,  456 => 247,  452 => 245,  448 => 243,  442 => 241,  440 => 240,  436 => 239,  430 => 238,  425 => 235,  419 => 233,  417 => 232,  413 => 231,  409 => 230,  400 => 224,  395 => 221,  389 => 219,  381 => 217,  379 => 216,  376 => 215,  368 => 213,  365 => 212,  362 => 211,  360 => 210,  357 => 209,  349 => 207,  346 => 206,  343 => 205,  341 => 204,  338 => 203,  335 => 202,  333 => 201,  326 => 199,  321 => 197,  318 => 196,  316 => 195,  313 => 194,  309 => 192,  305 => 190,  299 => 189,  291 => 187,  288 => 186,  285 => 185,  281 => 184,  275 => 180,  273 => 179,  267 => 177,  265 => 176,  260 => 173,  258 => 172,  253 => 169,  247 => 168,  235 => 166,  232 => 165,  227 => 164,  221 => 162,  219 => 161,  215 => 160,  211 => 159,  202 => 153,  197 => 150,  191 => 149,  179 => 147,  176 => 146,  172 => 145,  164 => 143,  162 => 142,  158 => 140,  152 => 139,  142 => 127,  136 => 126,  126 => 123,  123 => 122,  120 => 121,  117 => 120,  111 => 119,  103 => 1,  100 => 136,  98 => 135,  95 => 133,  93 => 132,  91 => 131,  89 => 130,  87 => 117,  85 => 116,  83 => 115,  81 => 114,  79 => 113,  76 => 110,  74 => 109,  70 => 106,  67 => 104,  65 => 103,  63 => 102,  61 => 101,  59 => 100,  57 => 99,  55 => 98,  53 => 97,  50 => 94,  48 => 92,  46 => 86,  44 => 85,  42 => 83,  33 => 1,);
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

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}

{% macro loop(page, depth, twig_vars) %}
    {% import _self as self %}

    {% set config = twig_vars['config'] %}
    {% set separator = config.system.param_sep %}
    {% set display_field = config.plugins.admin.pages_list_display_field %}
    {% set base_url_relative_frontend = twig_vars['base_url_relative_frontend'] %}
    {% set admin = twig_vars['admin'] %}
    {% set warn = twig_vars['warn'] %}
    {% set uri = twig_vars['uri'] %}

    {% if page.header.admin.children_display_order == 'collection' and page.header.content.order.by %}
        {% if page.header.content.order.custom %}
            {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc'), page.header.content.order.custom) %}
        {% else %}
            {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc')) %}
        {% endif %}
    {% else %}
        {% set pcol = page.children() %}
    {% endif %}

    {% for p in pcol %}
        {% set description = (not p.page ? \"PLUGIN_ADMIN.FOLDER\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.PAGE\"|tu ~ ' &bull; ') ~
            (p.isModule ? \"PLUGIN_ADMIN.MODULE\"|tu ~ ' &bull; ' : '') ~
            (p.routable ? \"PLUGIN_ADMIN.ROUTABLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_ROUTABLE\"|tu ~ ' &bull; ') ~
            (p.visible ? \"PLUGIN_ADMIN.VISIBLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_VISIBLE\"|tu ~ ' &bull; ') ~
            (p.published ? \"PLUGIN_ADMIN.PUBLISHED\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_PUBLISHED\"|tu ~ ' &bull; ') %}

        {% set page_url = getPageUrl(p) %}

        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : ''}}>
                    <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.isModule ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"{{ description|trim(' &bull; ')|raw }}\" class=\"hint--top page-item__content-hint\">
                            {% set page_label = attribute(p.header, display_field)|defined(attribute(p, display_field))|defined(p.title)|default(p.slug|titleize) %}
                            <a href=\"{{ page_url }}\" class=\"page-edit\">{{ page_label|e }}</a>
                        </span>
                        {% if p.language %}
                            <span class=\"badge lang {% if p.language == admin.language %}info{% endif %}\">{{p.language}}</span>
                        {% endif %}
                        {% if p.home %}
                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        {% endif %}
                    </div>
                    <p class=\"page-route\">{{ p.header.routes.default ?: p.route }} <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> {{ p.template() }}</p>
                </div>
                <span class=\"page-item__tools\">
                    {% if config.plugins.admin.frontend_preview_target != 'inline' %}
                        {% set preview_target = config.plugins.admin.frontend_preview_target %}
                        {% set preview_route = (base_url_relative_frontend|rtrim('/') ~ (p.home ? '' : p.route)) ?: '/' %}
                        {% set preview_link = p.routable ? '<a class=\"page-view\" target=\"' ~ preview_target ~ '\" href=\"' ~ preview_route ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\"></i></a>' : '' %}
                    {% else %}
                        {% set preview_route = admin_route('/preview' ~ (p.home ? '' : p.route)) %}
                        {% set preview_link = p.routable ? '<a class=\"page-view\" href=\"' ~ preview_route ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\"></i></a>' : '' %}
                    {% endif %}
                    {{ preview_link|raw }}
                    {% if warn %}
                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-trash-o\"></i></a>
                    {% else %}
                        <a href=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-trash-o\"></i></a>
                    {% endif %}
                </span>
            </div>
            {% if p.children().count > 0 %}
                <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                    {{ self.loop(p, depth + 1, twig_vars) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as macro %}

{% if admin.route %}
    {% set context = admin.page(true) %}
    {#
    {% if admin.language != admin.session.admin_lang %}
        {% do admin.setMessage('Session language does not match') %}
    {% endif %}
    #}
{% elseif grav.language.enabled and admin.language != admin.session.admin_lang %}
    {# Redirect to last set language #}
    {% do admin.redirect(admin.adminRoute('/pages', admin.session.admin_lang)) %}
{% endif %}

{% if uri.param('new') %}
    {% set mode = 'new' %}
{%  elseif context %}
    {% set mode = 'edit' %}
    {% if context.exists %}
        {% set page_url = admin_route('/pages' ~ (context.header.routes.default ?: context.rawRoute)) %}
        {% set exists = true %}
        {% set title = (context.exists ? \"PLUGIN_ADMIN.EDIT\"|tu : \"PLUGIN_ADMIN.CREATE\"|tu ) ~ \" \" ~ (context.header.title ?: context.title) %}
    {% else %}
        {% set title = \"PLUGIN_ADMIN.ADD_PAGE\"|tu %}
    {% endif %}
{% else %}
    {% set mode = 'list' %}
    {% set title = \"PLUGIN_ADMIN.PAGES\"|tu %}
{% endif %}

{% set modular = context.isModule ? 'modular_' : '' %}
{% set warn = config.plugins.admin.warnings.delete_page %}
{% set secure_delete = config.plugins.admin.warnings.secure_delete %}
{% set page_lang = context.language %}
{% set type = 'page' %}

{% block stylesheets %}
    {% if mode == 'edit' %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% if config.plugins.admin.frontend_preview_target != 'inline' %}
    {% set preview_route = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}
    {% set preview_target = config.plugins.admin.frontend_preview_target %}
    {% set preview_link = context.routable ? '<a class=\"button\" target=\"' ~ preview_target ~ '\" href=\"' ~ preview_route ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}
{% else %}
    {% set preview_route = admin_route('/preview' ~ (context.home ? '' : context.route)) %}
    {% set preview_link = context.routable ? '<a class=\"button\" href=\"' ~ preview_route ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}
{% endif %}

{% block titlebar %}

    <div class=\"button-bar\">
        {% if mode == 'list' %}
            <a class=\"button\" href=\"{{ admin_route('/') }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>

            {% for key, add_modal in config.plugins.admin.add_modals %}
                {% if add_modal.show_in|defined('bar') == 'bar' %}
                    <a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\"><i class=\"fa fa-plus\"></i> {{ add_modal.label|tu }}</a>
                {% endif %}
            {% endfor %}

            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                    {% if admin.modularTypes is not empty %}
                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULE\"|tu }}</a></li>
                    {% endif %}
                    {% for key, add_modal in config.plugins.admin.add_modals %}
                        {% if add_modal.show_in|defined('bar') == 'dropdown' %}
                            <li><a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\">{{ add_modal.label|tu }}</a></li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>

            {% if admin.multilang %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        {% set langName = admin.siteLanguages[admin.language] %}
                        {{ langName[:1]|upper ~ langName[1:] }}
                    </button>
                    {%  if admin.languages_enabled|length > 1 %}
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        {% for langCode in admin.languages_enabled %}
                            {% set langName = admin.siteLanguages[langCode] %}
                            {% if langCode != admin.language %}
                                <li><a href=\"{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}\">{{ langName[:1]|upper ~ langName[1:] }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                    {% endif %}
                </div>
            {% endif %}

        {% elseif mode == 'edit' %}

            {{ preview_link|raw }}

            <a class=\"button\" href=\"{{ admin_route('/pages') }}\" title=\"{{ \"PLUGIN_ADMIN.BACK\"|tu }}\"><i class=\"fa fa-reply\"></i></a>

            {% if exists %}
                {% set siblings = context.parent().children() %}

                {% if not siblings.isFirst(context.path) %}
                    {% set sib = siblings.nextSibling(context.path) %}
                    {% set sib_url = admin_route('/pages' ~ (sib.header.routes.default ?: sib.rawRoute)) %}
                    <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.PREVIOUS\"|tu }}\"><i class=\"fa fa-chevron-left\"></i></a>
                {% endif %}

                {% if not siblings.isLast(context.path) %}
                    {% set sib = siblings.prevSibling(context.path) %}
                    {% set sib_url = admin_route('/pages' ~ (sib.header.routes.default ?: sib.rawRoute)) %}
                    <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.NEXT\"|tu }}\"><i class=\"fa fa-chevron-right\"></i></a>
                {% endif %}

                {% if warn %}
                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-trash-o\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
                {% else %}
                    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-trash-o\"></i></a>
                {% endif %}

                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                        {% if admin.modularTypes is not empty %}
                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULE\"|tu }}</a></li>
                        {% endif %}
                    </ul>
                </div>

                <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\" data-parents=\"data[route]\"><i class=\"fa fa-arrows\"></i> {{ \"PLUGIN_ADMIN.MOVE\"|tu }}</a>
                {% if config.plugins['admin-pro'].enabled %}
                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> {{ \"PLUGIN_ADMIN_PRO.REVISIONS\"|tu }}</a>
                {% endif %}

            {% endif %}

            <div class=\"button-group\">
                <button class=\"button success\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
                {% if exists and admin.multilang %}
                    {%  set untranslated = context.untranslatedLanguages(true) %}
                    {% if untranslated %}
                        <button type=\"button\" class=\"button success dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            {% for langCode in untranslated %}
                                {% set langName = admin.siteLanguages[langCode] %}
                                {% if langCode != page_lang %}
                                    <li><button class=\"button success task\" name=\"task\" value=\"saveas\" lang=\"{{langCode}}\" form=\"blueprints\" type=\"submit\">{{ \"PLUGIN_ADMIN.SAVE_AS\"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button></li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                {% endif %}
            </div>


        {% endif %}
    </div>
    {% if mode == 'new' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</h1>
    {% elseif mode == 'edit' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            {{ context.title }}
        </h1>
    {% else %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.MANAGE_PAGES\"|tu }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"clear admin-pages\">
    {% if mode == 'new' %}
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}
    {% elseif mode == 'edit' %}
        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                {% if admin.multilang %}
                    {% set translated = context.translatedLanguages(false) %}
                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            {% if exists %}
                                {{ page_lang ?? \"PLUGIN_ADMIN.DEFAULT\"|tu }}
                            {% else %}
                                {{ admin.language }}
                            {% endif %}
                        </button>

                        {% if exists and translated|length > 1 - (exists and not page_lang)|int %}
                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                {% for language, route in translated %}
                                    {% if language != page_lang ?? grav.language.default %}
                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"{{language}}\" redirect=\"{{context.rawRoute|trim('/')}}\" form=\"blueprints\">{{ language }}</button></li>
                                    {% endif %}
                                {% endfor %}
                                {% if translated|length > 1  %}
                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"{{ grav.language.default }}\" redirect=\"{{context.rawRoute|trim('/')}}\" form=\"blueprints\">Default</button></li>
                                {% endif %}
                            </ul>
                        {% endif %}
                    </div>
                {% endif %}

                {% if context.blueprints.fields %}
                {% set normalText = \"PLUGIN_ADMIN.NORMAL\"|tu %}
                {% set expertText = \"PLUGIN_ADMIN.EXPERT\"|tu %}
                {% set maxLen = max([normalText|length, expertText|length]) %}
                {% set normalText = macro.spanToggle(normalText, maxLen) %}
                {% set expertText = macro.spanToggle(expertText, maxLen) %}
                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ admin_route('/pages/' ~ admin.route|trim('/') ~ '/mode' ~ config.system.param_sep ~ 'normal') }}\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
                        <label for=\"normal\">{{ normalText|raw }}</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ admin_route('/pages/' ~ admin.route|trim('/') ~ '/mode' ~ config.system.param_sep ~ 'expert') }}\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
                        <label for=\"expert\">{{ expertText|raw }}</label>
                        <a></a>
                    </div>
                </form>
                {% endif %}

            </div>

            {# Set current form data back into page content #}
            {% if current_form_data %}
                {% do context.header(current_form_data.header) %}
                {% do context.content(current_form_data.content) %}
            {% endif %}
            {% if context.blueprints.fields and admin.session.expert == '0' %}
                {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}
            {% else %}
                {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('admin/pages/'~modular~'raw'), data: context } %}
            {% endif %}
        </div>
    {% else %}
        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"{{ [{'id': 'mode', 'name': 'PLUGIN_ADMIN.PAGE_MODES'|tu}, {'id': 'type', 'name': 'PLUGIN_ADMIN.PAGE_TYPES'|tu}, {'id': 'access', 'name': 'PLUGIN_ADMIN.ACCESS_LEVELS'|tu}] |json_encode|e('html_attr')}}\" data-filter-types=\"{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}\" data-filter-access-levels=\"{{ admin.accessLevels|json_encode|e('html_attr') }}\" placeholder=\"{{ \"PLUGIN_ADMIN.ADD_FILTERS\"|tu }}\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.SEARCH_PAGES\"|tu }}\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|tu }}</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|tu }}</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                {{ macro.loop(pages, 0, _context) }}
            </ul>
            {% include 'partials/page-legend.html.twig' %}
        </div>
    {% endif %}
    </div>

    {% if context %}
        {% set obj_data = clone(context) %}

        {% if mode == 'edit' %}
            {% do obj_data.folder('') %}
        {% endif %}
    {% endif %}

    {% if mode == 'list' or mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/new'), data: obj_data, form_id:'new-page' } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new-folder.html.twig' with { blueprints: admin.blueprints('admin/pages/new_folder'), data: obj_data, form_id:'new-folder' } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/modular_new'), data: obj_data, form_id:'new-modular' } %}
    </div>

    {% for key, add_modal in config.plugins.admin.add_modals %}
        <div class=\"remodal {{ add_modal.modal_classes|defined('') }}\" data-remodal-id=\"modal-add_modal-{{ key }}\" data-remodal-options=\"hashTracking: false\">
            {% include add_modal.template|defined('partials/blueprints-new.html.twig') with { blueprints: admin.blueprints(add_modal.blueprint), data: context, form_id:'add-modal' }|merge(add_modal.with|defined({})) %}
        </div>
    {% endfor %}
    {% endif %}

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
    {% if mode == 'edit' %}
    <div class=\"remodal parents-container\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('admin/pages/move'), data: context } %}
    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        {% include ['partials/page-revisions.html.twig', 'empty.html.twig'] ignore missing with { data: context } %}
    </div>
    {% endif %}

    {% include 'partials/modal-changes-detected.html.twig' %}

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-optF#ions=\"hashTracking: false\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {% if context %}
                    <strong>{{ \"PLUGIN_ADMIN.PAGE\"|tu }}: {{ context.title }}</strong>
                {% endif %}
            </p>
            <p class=\"bigger\">
              {{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC\"|tu }}
            </p>
            {% if secure_delete %}
                <p class=\"form-secure-delete\">
                    <input id=\"secure-delete-field\" autofocus type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.SECURE_DELETE_DESC\"|tu }}\" />
                </p>
            {% endif %}
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            {% if secure_delete %}
                <button id=\"secure-delete-btn\" disabled=\"true\" class=\"button danger disable-after-click\" data-delete-action><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONFIRM\"|tu }}</button>
            {% else %}
                <a class=\"button danger disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            {% endif %}
            </div>
        </form>
    </div>

    {% include 'partials/admin-pro-pages-addons.html.twig' ignore missing %}

{% endblock %}

{% block bottom %}
    {{ parent() }}
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
        {% if secure_delete %}
        \$('#secure-delete-field').keyup(function () {
            var inputValue = \$(this).val();
            if (inputValue == 'DELETE') {
                \$('#secure-delete-btn').attr('disabled', false);
            }else{
                \$('#secure-delete-btn').attr('disabled', true);
            }
        });
        \$(document).on('closing', '.remodal', function () {
            \$('#secure-delete-field').val('');
        });
        {% endif %}
    </script>
{% endblock %}
", "pages.html.twig", "F:\\laragon\\www\\podca\\user\\plugins\\admin\\themes\\grav\\templates\\pages.html.twig");
    }
}
