<?php

/* partials/master.html.twig */
class __TwigTemplate_019ddd1bead2a82f360b2316d07288ba9f21270ccfe6ea95964a6318a95c0fcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "</head>
<body>
<div class=\"wrapper\">
    <nav class=\"st-nav\">
        <div class=\"st-container\">
            <button class=\"offcanvas-toggle-btn uk-visible-small\" data-uk-offcanvas=\"{target: '#offcanvas-menu-mobile'}\"><i class=\"uk-icon-bars\"></i> Menu</button>
            <ul class=\"uk-clearfix uk-hidden-small menu\">
                ";
        // line 25
        $this->loadTemplate("partials/navigation.html.twig", "partials/master.html.twig", 25)->display($context);
        // line 26
        echo "            </ul>
        </div>
    </nav>

    <header class=\"st-container st-header\">
        <h1><a href=\"";
        // line 31
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()));
        echo "</a></h1>
        <p>";
        // line 32
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo "</p>
    </header>
    ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "    <footer class=\"st-footer\">
        <div class=\"st-container\">
            <a href=\"";
        // line 37
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()));
        echo "</a> &copy; 2016 - All Rights Reserved.
        </div>
    </footer>
</div>
<div id=\"offcanvas-menu-mobile\" class=\"uk-offcanvas\">
    <div class=\"uk-offcanvas-bar\">
        <ul class=\"menu\">
            ";
        // line 44
        $this->loadTemplate("partials/navigation.html.twig", "partials/master.html.twig", 44)->display($context);
        // line 45
        echo "        </ul>
    </div>
</div>

";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <title>";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
        }
        echo " - ";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/master.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin,vietnamese"), "method");
        // line 12
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin,vietnamese"), "method");
        // line 13
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/css/uikit.min.css"), "method");
        // line 14
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/css/pendigo-v2.css"), "method");
        // line 15
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"), "method");
        // line 51
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/js/uikit.min.js"), "method");
        // line 52
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 52,  146 => 51,  143 => 50,  140 => 49,  135 => 34,  128 => 15,  125 => 14,  122 => 13,  119 => 12,  116 => 11,  109 => 10,  107 => 9,  95 => 5,  92 => 4,  87 => 54,  85 => 49,  79 => 45,  77 => 44,  65 => 37,  61 => 35,  59 => 34,  54 => 32,  48 => 31,  41 => 26,  39 => 25,  30 => 18,  28 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* {% block head %}*/
/*     <title>{%  if header.title %}{{ header.title }}{% endif %} - {{ site.title }}</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     {% block stylesheets %}*/
/*         {% do assets.add('https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin,vietnamese') %}*/
/*         {% do assets.add('https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin,vietnamese') %}*/
/*         {% do assets.add('https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/css/uikit.min.css') %}*/
/*         {% do assets.add('theme://assets/css/pendigo-v2.css') %}*/
/*         {{ assets.css() }}*/
/*     {% endblock %}*/
/* {% endblock head %}*/
/* </head>*/
/* <body>*/
/* <div class="wrapper">*/
/*     <nav class="st-nav">*/
/*         <div class="st-container">*/
/*             <button class="offcanvas-toggle-btn uk-visible-small" data-uk-offcanvas="{target: '#offcanvas-menu-mobile'}"><i class="uk-icon-bars"></i> Menu</button>*/
/*             <ul class="uk-clearfix uk-hidden-small menu">*/
/*                 {% include 'partials/navigation.html.twig' %}*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/*     <header class="st-container st-header">*/
/*         <h1><a href="{{ base_url_absolute }}">{{ site.title|capitalize }}</a></h1>*/
/*         <p>{{ site.metadata.description }}</p>*/
/*     </header>*/
/*     {% block content %}{% endblock %}*/
/*     <footer class="st-footer">*/
/*         <div class="st-container">*/
/*             <a href="{{ base_url_absolute }}">{{ site.title|capitalize }}</a> &copy; 2016 - All Rights Reserved.*/
/*         </div>*/
/*     </footer>*/
/* </div>*/
/* <div id="offcanvas-menu-mobile" class="uk-offcanvas">*/
/*     <div class="uk-offcanvas-bar">*/
/*         <ul class="menu">*/
/*             {% include 'partials/navigation.html.twig' %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/*     {% do assets.add('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') %}*/
/*     {% do assets.add('https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/js/uikit.min.js') %}*/
/*     {{  assets.js() }}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
