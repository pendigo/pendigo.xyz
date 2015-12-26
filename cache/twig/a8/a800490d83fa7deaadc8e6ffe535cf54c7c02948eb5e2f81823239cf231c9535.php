<?php

/* partials/navigation.html.twig */
class __TwigTemplate_f2c8aa878710f45d76c52d930beb0a1c61944e5b94a7e84d26d2fa269364dcb2 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 3
                echo "        <li>
            <a href=\"";
                // line 4
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                ";
                // line 5
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
            </a>
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for page in pages.children %}*/
/*     {% if page.visible %}*/
/*         <li>*/
/*             <a href="{{ page.url }}">*/
/*                 {{ page.menu }}*/
/*             </a>*/
/*         </li>*/
/*     {% endif %}*/
/* {% endfor %}*/
