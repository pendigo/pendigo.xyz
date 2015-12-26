<?php

/* item.html.twig */
class __TwigTemplate_712fab1f18dbf4d2f36bc62d337dbbf8bbd26dabca99bf4f5d2d4b1a4725ad3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/master.html.twig", "item.html.twig", 1);
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
        echo "    <main class=\"st-container st-main st-main-single\">
        <section class=\"post-single-container\">
            <article class=\"post-single\">
                <div class=\"post-heading\">
                    <h2><a href=\"#\" class=\"post-title\">";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</a></h2>
                    <span class=\"post-meta\">";
        // line 9
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo " ";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo ", ";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "Y");
        echo "</span>
                </div>
                ";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </article>
        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/master.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <main class="st-container st-main st-main-single">*/
/*         <section class="post-single-container">*/
/*             <article class="post-single">*/
/*                 <div class="post-heading">*/
/*                     <h2><a href="#" class="post-title">{{ page.title }}</a></h2>*/
/*                     <span class="post-meta">{{ page.date|date('d') }} {{ page.date|date("M") }}, {{ page.date|date("Y") }}</span>*/
/*                 </div>*/
/*                 {{ page.content }}*/
/*             </article>*/
/*         </section>*/
/*     </main>*/
/* {% endblock %}*/
