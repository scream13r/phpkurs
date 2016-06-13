<?php

/* onas_view.twig */
class __TwigTemplate_cf28f19d87c4a4140e3ba3eb5b394dcda3aee042fbb73fab7a80e1f16962ba22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "onas_view.twig", 1);
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
        echo "    <h1>О сайте</h1>
    <p>Этот сайта создан силами Меня на уроке по MVC!</p>
";
    }

    public function getTemplateName()
    {
        return "onas_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block content %}*/
/*     <h1>О сайте</h1>*/
/*     <p>Этот сайта создан силами Меня на уроке по MVC!</p>*/
/* {% endblock %}*/
