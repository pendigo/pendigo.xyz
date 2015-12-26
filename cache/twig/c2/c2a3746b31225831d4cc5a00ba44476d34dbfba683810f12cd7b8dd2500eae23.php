<?php

/* blog.html.twig */
class __TwigTemplate_bbed68a1b020d59018f0a54b939b3f027bbdbd4f9530c28c4b2be84f2d4e0b3d extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "213042076")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* blog.html.twig */
class __TwigTemplate_bbed68a1b020d59018f0a54b939b3f027bbdbd4f9530c28c4b2be84f2d4e0b3d_213042076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/master.html.twig", "blog.html.twig", 1);
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
        echo "    <main class=\"st-container st-main\">
        <div class=\"main-meta\">Những phần mới nhất</div>
        <section class=\"uk-grid uk-grid-medium\">

            ";
        // line 8
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 9
        echo "            ";
        $context["base_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        // line 10
        echo "            ";
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 11
        echo "
            ";
        // line 12
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 13
            echo "                ";
            $context["base_url"] = "";
            // line 14
            echo "            ";
        }
        // line 15
        echo "
            ";
        // line 16
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 17
            echo "                ";
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
            // line 18
            echo "            ";
        }
        // line 19
        echo "
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "                ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 21)->display(array_merge($context, array("page" => $context["item"])));
            // line 22
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </section>

        ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 26
            echo "            ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 26)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 27
            echo "        ";
        }
        // line 28
        echo "
    </main>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 28,  143 => 27,  140 => 26,  138 => 25,  134 => 23,  120 => 22,  117 => 21,  100 => 20,  97 => 19,  94 => 18,  91 => 17,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  78 => 12,  75 => 11,  72 => 10,  69 => 9,  67 => 8,  61 => 4,  58 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/master.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <main class="st-container st-main">*/
/*         <div class="main-meta">Những phần mới nhất</div>*/
/*         <section class="uk-grid uk-grid-medium">*/
/* */
/*             {% set collection = page.collection() %}*/
/*             {% set base_url = page.url %}*/
/*             {% set feed_url = base_url %}*/
/* */
/*             {% if base_url == '/' %}*/
/*                 {% set base_url = '' %}*/
/*             {% endif %}*/
/* */
/*             {% if base_url == base_url_relative %}*/
/*                 {% set feed_url = base_url~'/'~page.slug %}*/
/*             {% endif  %}*/
/* */
/*             {% for item in collection %}*/
/*                 {% include 'partials/blog_item.html.twig' with {'page':item} %}*/
/*             {% endfor %}*/
/*         </section>*/
/* */
/*         {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/*             {% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}*/
/*         {% endif %}*/
/* */
/*     </main>*/
/* {% endblock %}*/
/* */
/* {% endembed %}*/
