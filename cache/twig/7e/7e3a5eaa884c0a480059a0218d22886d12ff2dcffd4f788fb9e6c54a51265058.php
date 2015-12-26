<?php

/* partials/base.html.twig */
class __TwigTemplate_1df86bf134d9bc4f33b3bb8287ae689c679afb2ab9f147339e4eae2b9b90301b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 47
        echo "</head>

<body class=\"";
        // line 49
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "sidebar_position", array());
        echo "-sidebar\">
    <div id=\"wrapper\">
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "        ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 62
        echo "
    </div>

</body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

        <!--[if lte IE 8]><script src=\"";
        // line 27
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://assets/js/ie/html5shiv.js");
        echo "\"></script><![endif]-->

        ";
        // line 29
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "calendar", array())) {
            // line 30
            echo "           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       ";
        }
        // line 32
        echo "
       <!--[if lte IE 8]><script src=\"";
        // line 33
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://assets/js/ie/respond.min.js");
        echo "\"></script><![endif]-->
       <!--[if lte IE 8]><script src=\"";
        // line 34
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://assets/css/ie8.css");
        echo "\"></script><![endif]-->

       ";
        // line 36
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "calendar", array())) {
            // line 37
            echo "        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    ";
        }
        // line 45
        echo "
    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/main.css"), "method");
        // line 16
        echo "        ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 21
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 22
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/util.js"), "method");
        // line 23
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/main.js"), "method");
        // line 24
        echo "        ";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "            <div id=\"content\">
                <div class=\"inner\">
                    ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "                </div>
            </div>
        ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "                    ";
    }

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
        // line 60
        echo "            ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "        ";
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
        return array (  195 => 61,  192 => 60,  189 => 59,  185 => 55,  182 => 54,  176 => 56,  174 => 54,  170 => 52,  167 => 51,  163 => 24,  160 => 23,  157 => 22,  154 => 21,  151 => 20,  148 => 19,  144 => 16,  141 => 15,  138 => 14,  133 => 45,  123 => 37,  121 => 36,  116 => 34,  112 => 33,  109 => 32,  105 => 30,  103 => 29,  98 => 27,  92 => 25,  90 => 19,  84 => 17,  82 => 14,  77 => 12,  74 => 11,  72 => 10,  64 => 9,  61 => 8,  58 => 7,  49 => 62,  46 => 59,  44 => 51,  39 => 49,  35 => 47,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->*/
/* <!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->*/
/* <!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->*/
/* <!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8" />*/
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*         <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png') }}" />*/
/* */
/*         {% block stylesheets %}*/
/*             {% do assets.addCss('theme://assets/css/main.css') %}*/
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.add('jquery',101) %}*/
/*             {% do assets.addJs('theme://assets/js/skel.min.js') %}*/
/*             {% do assets.addJs('theme://assets/js/util.js') %}*/
/*             {% do assets.addJs('theme://assets/js/main.js') %}*/
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/* */
/*         <!--[if lte IE 8]><script src="{{ url('theme://assets/js/ie/html5shiv.js') }}"></script><![endif]-->*/
/* */
/*         {% if site.calendar %}*/
/*            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>*/
/*        {% endif %}*/
/* */
/*        <!--[if lte IE 8]><script src="{{ url('theme://assets/js/ie/respond.min.js') }}"></script><![endif]-->*/
/*        <!--[if lte IE 8]><script src="{{ url('theme://assets/css/ie8.css') }}"></script><![endif]-->*/
/* */
/*        {% if site.calendar %}*/
/*         <script type="text/javascript">*/
/*         $(function() {*/
/*             $( "#datepicker" ).datepicker({*/
/*                 hideIfNoPrevNext: true*/
/*             });*/
/*         });*/
/*         </script>*/
/*     {% endif %}*/
/* */
/*     {% endblock head%}*/
/* </head>*/
/* */
/* <body class="{{ site.sidebar_position }}-sidebar">*/
/*     <div id="wrapper">*/
/*         {% block body %}*/
/*             <div id="content">*/
/*                 <div class="inner">*/
/*                     {% block content %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endblock %}*/
/*         {% block sidebar %}*/
/*             {% include 'partials/sidebar.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*     </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
