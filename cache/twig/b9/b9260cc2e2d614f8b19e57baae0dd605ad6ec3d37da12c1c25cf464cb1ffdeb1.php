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

/* partials/base.html.twig */
class __TwigTemplate_fbffc63d5f4d04af4cac5d51cb6586579f2d0a92ff5b405c572a581d5bbb0271 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/base.html.twig"));

        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "

";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 68
        echo "
    ";
        // line 69
        $this->displayBlock('assets', $context, $blocks);
        // line 73
        echo "
</head>


<body>


<div class=\"site-wrap\">


";
        // line 83
        $this->displayBlock('header', $context, $blocks);
        // line 140
        echo "

";
        // line 142
        $this->displayBlock('body', $context, $blocks);
        // line 148
        echo "

";
        // line 150
        $this->displayBlock('footer', $context, $blocks);
        // line 156
        echo "
</div>



";
        // line 161
        $this->displayBlock('javascripts', $context, $blocks);
        // line 203
        echo "

</body>
</html>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />



";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900\">
    <script src=\"https://cdn.jsdelivr.net/npm/vue@2.6.11\"></script>
    ";
        // line 25
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://fonts/icomoon/style.css"], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap.min.css"], "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/magnific-popup.css"], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/jquery-ui.css"], "method");
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/owl.carousel.min.css"], "method");
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/owl.theme.default.min.css"], "method");
        // line 31
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css\">

    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">


    ";
        // line 36
        $context["clr_p_bg"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("primary_bg");
        // line 37
        echo "    ";
        $context["clr_p_txt"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("primary_txt");
        // line 38
        echo "    ";
        $context["clr_s_bg"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("secondary_bg");
        // line 39
        echo "    ";
        $context["clr_title"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("title_colour");
        // line 40
        echo "
    <style>
        .primary-ele{
            color:";
        // line 43
        echo ($context["clr_p_txt"] ?? null);
        echo ";
            background-color:";
        // line 44
        echo ($context["clr_p_bg"] ?? null);
        echo ";
        }
        .primary-ele:hover{
            color:";
        // line 47
        echo ($context["clr_p_txt"] ?? null);
        echo ";
            background-color:";
        // line 48
        echo ($context["clr_p_bg"] ?? null);
        echo ";
            opacity:0.95;
        }
        .team-member::before{
            background: ";
        // line 52
        echo ($context["clr_s_bg"] ?? null);
        echo ";
        }
        .title-clr{
            color: ";
        // line 55
        echo ($context["clr_title"] ?? null);
        echo ";
        }
        .title-clr:hover{
            color:";
        // line 58
        echo ($context["clr_title"] ?? null);
        echo ";
            opacity:0.64;
        }


    </style>

    ";
        // line 65
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 66
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 69
    public function block_assets_deferred($context, array $blocks = array())
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "assets"));

        // line 70
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 83
    public function block_header($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 84
        echo "
    <div class=\"site-mobile-menu\">
        <div class=\"site-mobile-menu-header\">
            <div class=\"site-mobile-menu-close mt-3\">
                <span class=\"icon-close2 js-menu-toggle\"></span>
            </div>
        </div>
        <div class=\"site-mobile-menu-body\"></div>
    </div>


    <header class=\"site-navbar py-4 absolute transparent\" role=\"banner\">

        <div class=\"container\">
            <div class=\"row align-items-center\">


                <div class=\"col-3\" data-aos=\"fade-down\">
                    <h1><a href=\"";
        // line 102
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []);
        echo "\" class=\"text-white h2\"><i class=\"fa fa-podcast\"></i> Podcast</a></h1>
                </div>
                <div class=\"col-9\" data-aos=\"fade-down\">
                    <nav class=\"site-navigation position-relative text-right text-md-right\" role=\"navigation\">



                        <div class=\"d-inline-block ml-md-0 mr-auto py-3\"><a href=\"#\" class=\"site-menu-toggle js-menu-toggle text-white\"><span class=\"icon-menu h3\"></span></a></div>

                        <ul class=\"site-menu js-clone-nav d-none\">
                            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 113
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["child"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["child"], "title", []);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
                            <li class=\"has-children\">
                                <a class=\"dropme\" href=\"#\">Series</a>
                                <ul class=\"dropdown arrow-top\">
                                    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/podcast"], "method"), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["series"]) {
            // line 120
            echo "                                        <li><a href=\"";
            echo $this->getAttribute($context["series"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["series"], "title", []);
            echo "</a></li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['series'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                                </ul>
                            </li>
                            ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/info"], "method"), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 125
            echo "                                <li><a href=\"";
            echo $this->getAttribute($context["child"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["child"], "title", []);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                        </ul>
                    </nav>


                </div>

            </div>
        </div>

        </header>


";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 142
    public function block_body($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 143
        echo "
        ";
        // line 144
        $this->displayBlock('content', $context, $blocks);
        // line 145
        echo "

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 144
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 150
    public function block_footer($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 151
        echo "
    ";
        // line 152
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 152)->display($context);
        // line 153
        echo "

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 161
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-3.3.1.min.js"], "method");
        // line 163
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-migrate-3.0.1.min.js"], "method");
        // line 164
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-ui.js"], "method");
        // line 165
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/popper.min.js"], "method");
        // line 166
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/bootstrap.min.js"], "method");
        // line 167
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/owl.carousel.min.js"], "method");
        // line 168
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.stellar.min.js"], "method");
        // line 169
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.countdown.min.js"], "method");
        // line 170
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.magnific-popup.min.js"], "method");
        // line 171
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/aos.js"], "method");
        // line 172
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/slick.min.js"], "method");
        // line 173
        echo "

    ";
        // line 175
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/mediaelement-and-player.min.js"], "method");
        // line 176
        echo "


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

            for (var i = 0; i < total; i++) {
                new MediaElementPlayer(mediaElements[i], {
                    pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                    shimScriptAccess: 'always',
                    success: function () {
                        var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                        for (var j = 0; j < targetTotal; j++) {
                            target[j].style.visibility = 'visible';
                        }
                    }
                });
            }
        });
    </script>

    ";
        // line 198
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js"], "method");
        // line 199
        echo "
    ";
        // line 200
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 200,  514 => 199,  512 => 198,  488 => 176,  486 => 175,  482 => 173,  479 => 172,  476 => 171,  473 => 170,  470 => 169,  467 => 168,  464 => 167,  461 => 166,  458 => 165,  455 => 164,  452 => 163,  449 => 162,  443 => 161,  434 => 153,  432 => 152,  429 => 151,  423 => 150,  412 => 144,  403 => 145,  401 => 144,  398 => 143,  392 => 142,  373 => 127,  362 => 125,  358 => 124,  354 => 122,  343 => 120,  339 => 119,  333 => 115,  322 => 113,  318 => 112,  305 => 102,  285 => 84,  279 => 83,  267 => 70,  261 => 69,  248 => 66,  246 => 65,  236 => 58,  230 => 55,  224 => 52,  217 => 48,  213 => 47,  207 => 44,  203 => 43,  198 => 40,  195 => 39,  192 => 38,  189 => 37,  187 => 36,  180 => 31,  177 => 30,  174 => 29,  171 => 28,  168 => 27,  165 => 26,  163 => 25,  158 => 22,  152 => 21,  140 => 14,  136 => 13,  133 => 12,  131 => 11,  120 => 7,  117 => 6,  111 => 5,  99 => 203,  97 => 161,  90 => 156,  88 => 150,  84 => 148,  82 => 142,  78 => 140,  76 => 83,  64 => 73,  62 => 69,  59 => 68,  57 => 21,  53 => 19,  51 => 5,  46 => 3,  43 => 2,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />



{% endblock head %}


{% block stylesheets %}
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900\">
    <script src=\"https://cdn.jsdelivr.net/npm/vue@2.6.11\"></script>
    {% do assets.addCss('theme://fonts/icomoon/style.css') %}
    {% do assets.addCss('theme://css/bootstrap.min.css') %}
    {% do assets.addCss('theme://css/magnific-popup.css') %}
    {% do assets.addCss('theme://css/jquery-ui.css') %}
    {% do assets.addCss('theme://css/owl.carousel.min.css') %}
    {% do assets.addCss('theme://css/owl.theme.default.min.css') %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css\">

    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">


    {% set clr_p_bg = theme_var('primary_bg') %}
    {% set clr_p_txt = theme_var('primary_txt') %}
    {% set clr_s_bg = theme_var('secondary_bg') %}
    {% set clr_title = theme_var('title_colour') %}

    <style>
        .primary-ele{
            color:{{ clr_p_txt }};
            background-color:{{ clr_p_bg }};
        }
        .primary-ele:hover{
            color:{{ clr_p_txt }};
            background-color:{{ clr_p_bg }};
            opacity:0.95;
        }
        .team-member::before{
            background: {{ clr_s_bg }};
        }
        .title-clr{
            color: {{ clr_title }};
        }
        .title-clr:hover{
            color:{{ clr_title }};
            opacity:0.64;
        }


    </style>

    {% do assets.addCss('theme://css/style.css') %}

{% endblock %}

    {% block assets deferred %}
    {{ assets.css()|raw }}

    {% endblock %}

</head>


<body>


<div class=\"site-wrap\">


{% block header %}

    <div class=\"site-mobile-menu\">
        <div class=\"site-mobile-menu-header\">
            <div class=\"site-mobile-menu-close mt-3\">
                <span class=\"icon-close2 js-menu-toggle\"></span>
            </div>
        </div>
        <div class=\"site-mobile-menu-body\"></div>
    </div>


    <header class=\"site-navbar py-4 absolute transparent\" role=\"banner\">

        <div class=\"container\">
            <div class=\"row align-items-center\">


                <div class=\"col-3\" data-aos=\"fade-down\">
                    <h1><a href=\"{{ page.find('/home').url }}\" class=\"text-white h2\"><i class=\"fa fa-podcast\"></i> Podcast</a></h1>
                </div>
                <div class=\"col-9\" data-aos=\"fade-down\">
                    <nav class=\"site-navigation position-relative text-right text-md-right\" role=\"navigation\">



                        <div class=\"d-inline-block ml-md-0 mr-auto py-3\"><a href=\"#\" class=\"site-menu-toggle js-menu-toggle text-white\"><span class=\"icon-menu h3\"></span></a></div>

                        <ul class=\"site-menu js-clone-nav d-none\">
                            {% for child in page.find('/home').children.visible %}
                            <li><a href=\"{{ child.url }}\">{{ child.title }}</a></li>
                            {% endfor %}

                            <li class=\"has-children\">
                                <a class=\"dropme\" href=\"#\">Series</a>
                                <ul class=\"dropdown arrow-top\">
                                    {% for series in page.find('/podcast').children %}
                                        <li><a href=\"{{ series.url }}\">{{ series.title }}</a></li>
                                    {% endfor %}
                                </ul>
                            </li>
                            {% for child in page.find('/info').children.visible %}
                                <li><a href=\"{{ child.url }}\">{{ child.title }}</a></li>
                            {% endfor %}
                        </ul>
                    </nav>


                </div>

            </div>
        </div>

        </header>


{% endblock %}


{% block body %}

        {% block content %}{% endblock %}


{% endblock %}


{% block footer %}

    {% include 'partials/footer.html.twig' %}


{% endblock %}

</div>



{% block javascripts %}
    {% do assets.addJs('theme://js/jquery-3.3.1.min.js') %}
    {% do assets.addJs('theme://js/jquery-migrate-3.0.1.min.js') %}
    {% do assets.addJs('theme://js/jquery-ui.js') %}
    {% do assets.addJs('theme://js/popper.min.js') %}
    {% do assets.addJs('theme://js/bootstrap.min.js') %}
    {% do assets.addJs('theme://js/owl.carousel.min.js') %}
    {% do assets.addJs('theme://js/jquery.stellar.min.js') %}
    {% do assets.addJs('theme://js/jquery.countdown.min.js') %}
    {% do assets.addJs('theme://js/jquery.magnific-popup.min.js') %}
    {% do assets.addJs('theme://js/aos.js') %}
    {% do assets.addJs('theme://js/slick.min.js') %}


    {% do assets.addJs('theme://js/mediaelement-and-player.min.js') %}



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

            for (var i = 0; i < total; i++) {
                new MediaElementPlayer(mediaElements[i], {
                    pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                    shimScriptAccess: 'always',
                    success: function () {
                        var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                        for (var j = 0; j < targetTotal; j++) {
                            target[j].style.visibility = 'visible';
                        }
                    }
                });
            }
        });
    </script>

    {% do assets.addJs('theme://js/main.js') %}

    {{ assets.js()|raw }}

{% endblock %}


</body>
</html>
", "partials/base.html.twig", "F:\\laragon\\www\\podca\\user\\themes\\podca-grav\\templates\\partials\\base.html.twig");
    }
}
