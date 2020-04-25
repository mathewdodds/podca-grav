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

/* forms/fields/acl_picker/acl_picker.html.twig */
class __TwigTemplate_9a627de182fa92611fb301605f682759e9e38c5cfd374d2676b868a84060ba5c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/acl_picker/acl_picker.html.twig"));

        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/acl_picker/acl_picker.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 4
        echo "    ";
        $context["permissions"] = $this->getAttribute(($context["grav"] ?? null), "permissions", []);
        // line 5
        echo "    ";
        $context["tu"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true);
        // line 6
        echo "    ";
        $context["classes"] = ["" => "status-unchecked", 1 => "status-checked", 0 => "status-indeterminate"];
        // line 7
        echo "    ";
        $context["states"] = ["" => 0, 1 => 1, 0 => 2];
        // line 8
        echo "
    ";
        // line 9
        if (($this->getAttribute(($context["field"] ?? null), "data_type", []) == "access")) {
            // line 10
            echo "        ";
            $context["groupsList"] = [];
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 12
                echo "            ";
                if (((($this->getAttribute($context["action"], "visible", [], "any", true, true) &&  !(null === $this->getAttribute($context["action"], "visible", [])))) ? ($this->getAttribute($context["action"], "visible", [])) : (true))) {
                    // line 13
                    echo "            ";
                    $context["groupsList"] = twig_array_merge(($context["groupsList"] ?? null), [0 => ["label" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["action"], "label", [])), "value" => $this->getAttribute($context["action"], "name", [])]]);
                    // line 14
                    echo "            ";
                }
                // line 15
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
        ";
            // line 17
            $context["optionsList"] = [];
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["permissions"] ?? null), "instances", []));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 19
                echo "            ";
                if (((($this->getAttribute($context["action"], "visible", [], "any", true, true) &&  !(null === $this->getAttribute($context["action"], "visible", [])))) ? ($this->getAttribute($context["action"], "visible", [])) : (true))) {
                    // line 20
                    echo "            ";
                    $context["label"] = ((($this->getAttribute($this->getAttribute($context["action"], "params", []), "letter", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($this->getAttribute($context["action"], "parent", []), "label", [])) . " > ")) : ("")) . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["action"], "label", [])));
                    // line 21
                    echo "            ";
                    $context["optionsList"] = twig_array_merge(($context["optionsList"] ?? null), [0 => ["text" => (((($context["label"] ?? null) . " (") . $this->getAttribute($context["action"], "name", [])) . ")"), "value" => $this->getAttribute($context["action"], "name", []), "optgroup" => $this->getAttribute($context["action"], "scope", [])]]);
                    // line 22
                    echo "            ";
                }
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        } elseif (($this->getAttribute(($context["field"] ?? null), "data_type", []) == "permissions")) {
            // line 25
            echo "        ";
            $context["groups"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "flex", []), "directory", [0 => "user-groups"], "method");
            // line 26
            echo "        ";
            $context["groupsList"] = [];
            // line 27
            echo "        ";
            $context["crudp"] = ["create" => ["letter" => "C", "title" => "Create", "value" => ""], "read" => ["letter" => "R", "title" => "Read", "value" => ""], "update" => ["letter" => "U", "title" => "Update", "value" => ""], "delete" => ["letter" => "D", "title" => "Delete", "value" => ""]];
            // line 33
            echo "        ";
            $context["optionsList"] = [];
            // line 34
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groups"] ?? null), "index", []));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "        ";
                $context["optionsList"] = twig_array_merge(($context["optionsList"] ?? null), [0 => ["text" => ((($this->getAttribute($context["group"], "readableName", [], "any", true, true) &&  !(null === $this->getAttribute($context["group"], "readableName", [])))) ? ($this->getAttribute($context["group"], "readableName", [])) : ($this->getAttribute($context["group"], "groupname", []))), "value" => $this->getAttribute($context["group"], "groupname", [])]]);
                // line 36
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        }
        // line 38
        echo "
    <template data-id=\"acl_picker-";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
        echo "\">
        <div class=\"permissions-item\" data-field-type=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "data_type", []), "html", null, true);
        echo "\">
            <a href=\"#\" class=\"remove-item\"><i class=\"fa fa-trash\"></i></a>
            <select data-grav-selectize=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["options" => ($context["optionsList"] ?? null), "optgroups" => ($context["groupsList"] ?? null)]), "html", null, true);
        echo "\"></select>

            ";
        // line 44
        if (($this->getAttribute(($context["field"] ?? null), "data_type", []) == "access")) {
            // line 45
            echo "            <div class=\"switch-toggle switch-grav medium switch-3\">
                <input type=\"radio\" value=\"1\" id=\"";
            // line 46
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["field"] ?? null), "name", []) . "_"), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . "[]"), "html", null, true);
            echo "\" class=\"label1\" checked>

                <label for=\"";
            // line 48
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["field"] ?? null), "name", []) . "_"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($context["tu"] ?? null)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ALLOWED")) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ADMIN.ALLOWED"))), "html", null, true);
            echo "</label>

                <input type=\"radio\" value=\"0\" id=\"";
            // line 50
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["field"] ?? null), "name", []) . "_"), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . "[]"), "html", null, true);
            echo "\" class=\"label0\">

                <label for=\"";
            // line 52
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["field"] ?? null), "name", []) . "_"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($context["tu"] ?? null)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DENIED")) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ADMIN.DENIED"))), "html", null, true);
            echo "</label>

            </div>
            ";
        } elseif (($this->getAttribute(        // line 55
($context["field"] ?? null), "data_type", []) == "permissions")) {
            // line 56
            echo "                ";
            $context["data_field_name"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((($context["scope"] ?? null) . "_json.") . $this->getAttribute(($context["field"] ?? null), "name", [])));
            // line 57
            echo "                <div class=\"crudp-container\" data-field-name=\"";
            echo twig_escape_filter($this->env, (($context["data_field_name"] ?? null) . "[]"), "html", null, true);
            echo "\">
                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crudp"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["button"]) {
                // line 59
                echo "                        <div>
                            <span class=\"checkboxes indeterminate toggleable status-unchecked hint--top\"
                                  data-_check-status=\"0\"
                                  data-hint=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "title", []), "html", null, true);
                echo "\">
                                <input type=\"checkbox\"
                                       id=\"";
                // line 64
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["field"] ?? null), "name", []) . "_") . $context["key"]) . "_"), "html", null, true);
                echo "\"
                                       data-crudp-key=\"";
                // line 65
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                                      ";
                // line 67
                echo "                                       indeterminte=\"false\" value=\"\">
                                <label for=\"";
                // line 68
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["field"] ?? null), "name", []) . "_") . $context["key"]) . "_"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "letter", []), "html", null, true);
                echo "</label>
                            </span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "
                    <input type=\"hidden\" name=\"";
            // line 73
            echo twig_escape_filter($this->env, (((($context["data_field_name"] ?? null) . "[][") . ($context["key"] ?? null)) . "]"), "html", null, true);
            echo "\">
                </div>
            ";
        }
        // line 76
        echo "            <button class=\"button add-item\"><i class=\"fa fa-plus\"></i></button>
        </div>
    </template>


    <div class=\"permissions-container\" data-acl_picker_id=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
        echo "\" data-acl_picker=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["options" => ($context["optionsList"] ?? null), "optgroups" => ($context["groupsList"] ?? null)]), "html", null, true);
        echo "\">
        <div class=\"permissions-item empty-list ";
        // line 82
        echo ((twig_length_filter($this->env, ($context["value"] ?? null))) ? ("hidden") : (""));
        echo "\">
            <a href=\"#\" class=\"button add-item\"><i class=\"fa fa-plus\"></i></a>
        </div>

        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["access"]) {
            // line 87
            echo "            <div class=\"permissions-item\" data-field-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "data_type", []), "html", null, true);
            echo "\">
                <a href=\"#\" class=\"remove-item\"><i class=\"fa fa-trash\"></i></a>
                <select data-grav-selectize=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_jsonencode_filter(["options" => ($context["optionsList"] ?? null), "optgroups" => ($context["groupsList"] ?? null)]), "html", null, true);
            echo "\">
                    <option value=\"";
            // line 90
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</option>
                </select>
                ";
            // line 92
            if (($this->getAttribute(($context["field"] ?? null), "data_type", []) == "access")) {
                // line 93
                echo "                <div class=\"switch-toggle switch-grav medium switch-3\">
                    ";
                // line 94
                $context["rnd"] = twig_random($this->env, 100);
                // line 95
                echo "                    <input type=\"radio\" value=\"1\" id=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "name", []) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . "[") . $context["key"]) . "]"), "html", null, true);
                echo "\" class=\"label1\" ";
                echo (($context["access"]) ? ("checked") : (""));
                echo ">

                    <label for=\"";
                // line 97
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "name", []) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((($context["tu"] ?? null)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ALLOWED")) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ADMIN.ALLOWED"))), "html", null, true);
                echo "</label>

                    ";
                // line 99
                $context["rnd"] = twig_random($this->env, 100);
                // line 100
                echo "                    <input type=\"radio\" value=\"0\" id=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "name", []) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . "[") . $context["key"]) . "]"), "html", null, true);
                echo "\" class=\"label0\" ";
                echo (( !$context["access"]) ? ("checked") : (""));
                echo ">

                    <label for=\"";
                // line 102
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "name", []) . "_") . ($context["rnd"] ?? null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((($context["tu"] ?? null)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DENIED")) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ADMIN.DENIED"))), "html", null, true);
                echo "</label>

                </div>
                ";
            } elseif (($this->getAttribute(            // line 105
($context["field"] ?? null), "data_type", []) == "permissions")) {
                // line 106
                echo "                    ";
                $context["data_field_name"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((($context["scope"] ?? null) . "_json.") . $this->getAttribute(($context["field"] ?? null), "name", [])));
                // line 107
                echo "                    <div class=\"crudp-container\" data-field-name=\"";
                echo twig_escape_filter($this->env, (($context["data_field_name"] ?? null) . "[]"), "html", null, true);
                echo "\">
                        ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["crudp"] ?? null));
                foreach ($context['_seq'] as $context["crudp_key"] => $context["button"]) {
                    // line 109
                    echo "                            <div>
                                ";
                    // line 110
                    $context["crudp_value"] = $this->getAttribute($this->getAttribute(($context["value"] ?? null), $context["key"], [], "array"), $context["crudp_key"], [], "array");
                    // line 111
                    echo "                                <span class=\"checkboxes indeterminate toggleable ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["classes"] ?? null), ($context["crudp_value"] ?? null), [], "array"), "html", null, true);
                    echo " hint--top\"
                                      data-_check-status=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["states"] ?? null), ($context["crudp_value"] ?? null), [], "array"), "html", null, true);
                    echo "\"
                                      data-hint=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "title", []), "html", null, true);
                    echo "\">
                                    <input type=\"checkbox\"
                                           id=\"";
                    // line 115
                    echo twig_escape_filter($this->env, ((($this->getAttribute(($context["field"] ?? null), "name", []) . "_") . $context["crudp_key"]) . "_"), "html", null, true);
                    echo "\"
                                           data-crudp-key=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $context["crudp_key"], "html", null, true);
                    echo "\"
                                           ";
                    // line 118
                    echo "                                           indeterminate=\"false\" value=\"";
                    echo twig_escape_filter($this->env, ($context["crudp_value"] ?? null), "html", null, true);
                    echo "\">
                                    <label for=\"";
                    // line 119
                    echo twig_escape_filter($this->env, ((($this->getAttribute(($context["field"] ?? null), "name", []) . "_") . $context["crudp_key"]) . "_"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "letter", []), "html", null, true);
                    echo "</label>
                                </span>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['crudp_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "                        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (((($context["data_field_name"] ?? null) . "[") . $context["key"]) . "]"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute(($context["value"] ?? null), $context["key"], [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["value"] ?? null), $context["key"], [], "array"), [])) : ([]))), "html", null, true);
                echo "\">
                    </div>
                ";
            }
            // line 126
            echo "                <button class=\"button add-item\"><i class=\"fa fa-plus\"></i></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['access'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/acl_picker/acl_picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 129,  410 => 126,  401 => 123,  389 => 119,  384 => 118,  380 => 116,  376 => 115,  371 => 113,  367 => 112,  362 => 111,  360 => 110,  357 => 109,  353 => 108,  348 => 107,  345 => 106,  343 => 105,  335 => 102,  325 => 100,  323 => 99,  316 => 97,  306 => 95,  304 => 94,  301 => 93,  299 => 92,  292 => 90,  288 => 89,  282 => 87,  278 => 86,  271 => 82,  265 => 81,  258 => 76,  252 => 73,  249 => 72,  237 => 68,  234 => 67,  230 => 65,  226 => 64,  221 => 62,  216 => 59,  212 => 58,  207 => 57,  204 => 56,  202 => 55,  194 => 52,  187 => 50,  180 => 48,  173 => 46,  170 => 45,  168 => 44,  163 => 42,  158 => 40,  154 => 39,  151 => 38,  148 => 37,  142 => 36,  139 => 35,  134 => 34,  131 => 33,  128 => 27,  125 => 26,  122 => 25,  119 => 24,  113 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  96 => 18,  94 => 17,  91 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  45 => 3,  29 => 1,);
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

{% block input %}
    {% set permissions = grav.permissions %}
    {% set tu = grav.twig.twig.filters['tu'] is defined %}
    {% set classes = { '': 'status-unchecked', 1: 'status-checked', 0: 'status-indeterminate' } %}
    {% set states = { '': 0, 1: 1, 0: 2 } %}

    {% if field.data_type == 'access' %}
        {% set groupsList = [] %}
        {% for action in permissions %}
            {% if (action.visible ?? true) %}
            {% set groupsList = groupsList|merge([{ label: action.label|tu, value: action.name }]) %}
            {% endif %}
        {% endfor %}

        {% set optionsList = [] %}
        {% for action in permissions.instances %}
            {% if (action.visible ?? true) %}
            {% set label  = (action.params.letter ? action.parent.label|tu ~ ' > ') ~ action.label|tu %}
            {% set optionsList = optionsList|merge([{ text: label ~ ' (' ~ action.name ~ ')', value: action.name, optgroup: action.scope }]) %}
            {% endif %}
        {% endfor %}
    {% elseif field.data_type == 'permissions' %}
        {% set groups = grav.flex.directory('user-groups') %}
        {% set groupsList = [] %}
        {% set crudp = {
            create: { letter: 'C', title: 'Create', value: '' },
            read: { letter: 'R', title: 'Read', value: '' },
            update: { letter: 'U', title: 'Update', value: '' },
            delete: { letter: 'D', title: 'Delete', value: '' }
        } %}
        {% set optionsList = [] %}
        {% for group in groups.index %}
        {% set optionsList = optionsList|merge([{ text: group.readableName ?? group.groupname, value: group.groupname }]) %}
        {% endfor %}
    {% endif %}

    <template data-id=\"acl_picker-{{ field.name }}\">
        <div class=\"permissions-item\" data-field-type=\"{{ field.data_type }}\">
            <a href=\"#\" class=\"remove-item\"><i class=\"fa fa-trash\"></i></a>
            <select data-grav-selectize=\"{{ { options: optionsList, optgroups: groupsList }|json_encode }}\"></select>

            {% if field.data_type == 'access' %}
            <div class=\"switch-toggle switch-grav medium switch-3\">
                <input type=\"radio\" value=\"1\" id=\"{{ field.name ~ '_' }}\" name=\"{{ (scope ~ field.name)|fieldName ~ '[]' }}\" class=\"label1\" checked>

                <label for=\"{{ field.name ~ '_' }}\">{{ tu ? 'PLUGIN_ADMIN.ALLOWED'|tu : 'PLUGIN_ADMIN.ALLOWED'|t }}</label>

                <input type=\"radio\" value=\"0\" id=\"{{ field.name ~ '_' }}\" name=\"{{ (scope ~ field.name)|fieldName ~ '[]' }}\" class=\"label0\">

                <label for=\"{{ field.name ~ '_' }}\">{{ tu ? 'PLUGIN_ADMIN.DENIED'|tu : 'PLUGIN_ADMIN.DENIED'|t }}</label>

            </div>
            {% elseif field.data_type == 'permissions' %}
                {% set data_field_name = (scope ~ '_json.' ~ field.name)|fieldName %}
                <div class=\"crudp-container\" data-field-name=\"{{ data_field_name ~ '[]' }}\">
                    {% for key, button in crudp %}
                        <div>
                            <span class=\"checkboxes indeterminate toggleable status-unchecked hint--top\"
                                  data-_check-status=\"0\"
                                  data-hint=\"{{ button.title }}\">
                                <input type=\"checkbox\"
                                       id=\"{{ field.name ~ '_' ~ key ~ '_' }}\"
                                       data-crudp-key=\"{{ key }}\"
                                      {# name=\"{{ (scope ~ field.name)|fieldName ~ '[][' ~ key ~ ']' }}\"#}
                                       indeterminte=\"false\" value=\"\">
                                <label for=\"{{ field.name ~ '_' ~ key ~ '_' }}\">{{ button.letter }}</label>
                            </span>
                        </div>
                    {% endfor %}

                    <input type=\"hidden\" name=\"{{ data_field_name ~ '[][' ~ key ~ ']' }}\">
                </div>
            {% endif %}
            <button class=\"button add-item\"><i class=\"fa fa-plus\"></i></button>
        </div>
    </template>


    <div class=\"permissions-container\" data-acl_picker_id=\"{{ field.name }}\" data-acl_picker=\"{{ { options: optionsList, optgroups: groupsList }|json_encode }}\">
        <div class=\"permissions-item empty-list {{ value|length ? 'hidden' }}\">
            <a href=\"#\" class=\"button add-item\"><i class=\"fa fa-plus\"></i></a>
        </div>

        {% for key, access in value %}
            <div class=\"permissions-item\" data-field-type=\"{{ field.data_type }}\">
                <a href=\"#\" class=\"remove-item\"><i class=\"fa fa-trash\"></i></a>
                <select data-grav-selectize=\"{{ { options: optionsList, optgroups: groupsList }|json_encode }}\">
                    <option value=\"{{ key }}\" selected>{{ key }}</option>
                </select>
                {% if field.data_type == 'access' %}
                <div class=\"switch-toggle switch-grav medium switch-3\">
                    {% set rnd = random(100) %}
                    <input type=\"radio\" value=\"1\" id=\"{{ field.name ~ '_' ~ rnd }}\" name=\"{{ (scope ~ field.name)|fieldName ~ '[' ~ key ~ ']' }}\" class=\"label1\" {{ access ? 'checked' }}>

                    <label for=\"{{ field.name ~ '_' ~ rnd }}\">{{ tu ? 'PLUGIN_ADMIN.ALLOWED'|tu : 'PLUGIN_ADMIN.ALLOWED'|t }}</label>

                    {% set rnd = random(100) %}
                    <input type=\"radio\" value=\"0\" id=\"{{ field.name ~ '_' ~ rnd }}\" name=\"{{ (scope ~ field.name)|fieldName ~ '[' ~ key ~ ']' }}\" class=\"label0\" {{ not access ? 'checked' }}>

                    <label for=\"{{ field.name ~ '_' ~ rnd }}\">{{ tu ? 'PLUGIN_ADMIN.DENIED'|tu : 'PLUGIN_ADMIN.DENIED'|t }}</label>

                </div>
                {% elseif field.data_type == 'permissions' %}
                    {% set data_field_name = (scope ~ '_json.' ~ field.name)|fieldName %}
                    <div class=\"crudp-container\" data-field-name=\"{{ data_field_name ~ '[]' }}\">
                        {% for crudp_key, button in crudp %}
                            <div>
                                {% set crudp_value = value[key][crudp_key] %}
                                <span class=\"checkboxes indeterminate toggleable {{ classes[crudp_value] }} hint--top\"
                                      data-_check-status=\"{{ states[crudp_value] }}\"
                                      data-hint=\"{{ button.title }}\">
                                    <input type=\"checkbox\"
                                           id=\"{{ field.name ~ '_' ~ crudp_key ~ '_' }}\"
                                           data-crudp-key=\"{{ crudp_key }}\"
                                           {#name=\"{{ (scope ~ field.name)|fieldName ~ '[' ~ key ~ '][' ~ crudp_key ~ ']' }}\"#}
                                           indeterminate=\"false\" value=\"{{ crudp_value }}\">
                                    <label for=\"{{ field.name ~ '_' ~ crudp_key ~ '_' }}\">{{ button.letter }}</label>
                                </span>
                            </div>
                        {% endfor %}
                        <input type=\"hidden\" name=\"{{ data_field_name ~ '[' ~ key ~ ']' }}\" value=\"{{ value[key]|default([])|json_encode }}\">
                    </div>
                {% endif %}
                <button class=\"button add-item\"><i class=\"fa fa-plus\"></i></button>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "forms/fields/acl_picker/acl_picker.html.twig", "F:\\laragon\\www\\podca\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\acl_picker\\acl_picker.html.twig");
    }
}
