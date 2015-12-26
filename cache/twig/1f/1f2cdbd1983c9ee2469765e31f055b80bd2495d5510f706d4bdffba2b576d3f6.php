<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_7ced497f6a197b0ade70edd03b966d495692b0b10d14b1e5797f7d9d035b30e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<article class=\"uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 post\">
    <div class=\"uk-panel uk-panel-box\">
        <h2><a href=\"";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\" class=\"post-title\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</a></h2>
        <span class=\"post-meta\">";
        // line 4
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo " ";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo ", ";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "Y");
        echo "</span>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <article class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 post">*/
/*     <div class="uk-panel uk-panel-box">*/
/*         <h2><a href="{{ page.url }}" class="post-title">{{ page.title }}</a></h2>*/
/*         <span class="post-meta">{{ page.date|date("M") }} {{ page.date|date("d") }}, {{ page.date|date('Y') }}</span>*/
/*     </div>*/
/* </article>*/
