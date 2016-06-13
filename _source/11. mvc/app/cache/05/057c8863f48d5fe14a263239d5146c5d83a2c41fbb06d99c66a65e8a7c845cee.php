<?php

/* portfolio_view.twig */
class __TwigTemplate_f944e192167daa7a038e89b92248802382a98ccb52a58e19ef797c27f71aa92a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "portfolio_view.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <h1>Портфолио</h1>
    <div class=\"row\">

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "        <div class=\"col-md-4\">
            <h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", array()), "html", null, true);
            echo "</h2>
            <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "year", array()), "html", null, true);
            echo "</p>
            <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "description", array()), "html", null, true);
            echo "</p>
            <p><a class=\"btn btn-default\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "site", array()), "html", null, true);
            echo "\" role=\"button\">Посмотреть »</a></p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    </div>


";
    }

    public function getTemplateName()
    {
        return "portfolio_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     <h1>Портфолио</h1>*/
/*     <div class="row">*/
/* */
/*     {% for row in data %}*/
/*         <div class="col-md-4">*/
/*             <h2>{{ row.name }}</h2>*/
/*             <p>{{ row.year }}</p>*/
/*             <p>{{ row.description }}</p>*/
/*             <p><a class="btn btn-default" href="{{ row.site }}" role="button">Посмотреть »</a></p>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
