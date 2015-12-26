<?php

/* partials/pagination.html.twig */
class __TwigTemplate_4486e46e71e784ef30fc1e69ac188a965e08a89d33e7e2f9ee7a47e6ae5d5f7f extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 1)) {
            // line 2
            echo "    <div class=\"pager\">
        <ul class=\"uk-pagination\">
            ";
            // line 4
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
                // line 5
                echo "                ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array())), array("//" => "/"));
                // line 6
                echo "                <li><a href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\"><i class=\"uk-icon-chevron-left\"></i></a></li>
            ";
            }
            // line 8
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 9
                echo "
                ";
                // line 10
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 11
                    echo "                    <li><a href=\"#\" class=\"current\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a></li>
                ";
                } elseif ($this->getAttribute(                // line 12
$context["paginate"], "isInDelta", array())) {
                    // line 13
                    echo "                    ";
                    $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 14
                    echo "                    <li><a href=\"";
                    echo (isset($context["url"]) ? $context["url"] : null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a></li>
                ";
                } elseif ($this->getAttribute(                // line 15
$context["paginate"], "isDeltaBorder", array())) {
                    // line 16
                    echo "                    <li class=\"gap\"><span>&hellip;</span></li>
                ";
                }
                // line 18
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
            ";
            // line 21
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
                // line 22
                echo "                ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array())), array("//" => "/"));
                // line 23
                echo "                <li><a href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\"><i class=\"uk-icon-chevron-right\"></i></a></li>
            ";
            }
            // line 25
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  84 => 23,  81 => 22,  79 => 21,  76 => 20,  69 => 18,  65 => 16,  63 => 15,  56 => 14,  53 => 13,  51 => 12,  46 => 11,  44 => 10,  41 => 9,  36 => 8,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if pagination|length > 1 %}*/
/*     <div class="pager">*/
/*         <ul class="uk-pagination">*/
/*             {% if pagination.hasPrev %}*/
/*                 {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}*/
/*                 <li><a href="{{ url }}"><i class="uk-icon-chevron-left"></i></a></li>*/
/*             {% endif %}*/
/*             {% for paginate in pagination %}*/
/* */
/*                 {% if paginate.isCurrent %}*/
/*                     <li><a href="#" class="current">{{ paginate.number }}</a></li>*/
/*                 {% elseif paginate.isInDelta %}*/
/*                     {% set url =  (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}*/
/*                     <li><a href="{{ url }}">{{ paginate.number }}</a></li>*/
/*                 {% elseif paginate.isDeltaBorder %}*/
/*                     <li class="gap"><span>&hellip;</span></li>*/
/*                 {% endif %}*/
/* */
/*             {% endfor %}*/
/* */
/*             {% if pagination.hasNext %}*/
/*                 {% set url =  (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}*/
/*                 <li><a href="{{ url }}"><i class="uk-icon-chevron-right"></i></a></li>*/
/*             {% endif %}*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
/* */
