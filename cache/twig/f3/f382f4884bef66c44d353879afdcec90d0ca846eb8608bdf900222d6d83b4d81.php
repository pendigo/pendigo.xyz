<?php

/* error.html.twig */
class __TwigTemplate_d592f12c55cd244bde6fee9258a8c2545b2f04226d1355c760d434935fc4c3ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/master.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"error\">
        <div>
            <h1>Error ";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
            <p>
                ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/master.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div id="error">*/
/*         <div>*/
/*             <h1>Error {{ page.header.http_response_code }}</h1>*/
/*             <p>*/
/*                 {{ page.content }}*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
