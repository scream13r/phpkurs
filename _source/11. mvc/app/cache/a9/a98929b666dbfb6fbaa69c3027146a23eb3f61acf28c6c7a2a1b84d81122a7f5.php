<?php

/* contact_view.twig */
class __TwigTemplate_0e8a7ff6665d4c943a6752de4af37eefdb38e7811b4820577ef0275bbc59ee0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "contact_view.twig", 1);
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
        echo "    <h1>Контакты</h1>
    <p>Skype - simbikg</p>
    <p>Slack - simbik</p>
    <p>Телефон - не скажу</p>
    <form class=\"form-horizontal\">
        <div class=\"form-group\">
            <label for=\"inputName\" class=\"col-sm-2 control-label\">Имя:</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"Ваше имя\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputComment\" class=\"col-sm-2 control-label\">Комментарий:</label>
            <div class=\"col-sm-10\">
                <textarea class=\"form-control\" name=\"comment\"></textarea>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-default\">Отправить</button>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "contact_view.twig";
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
/*     <h1>Контакты</h1>*/
/*     <p>Skype - simbikg</p>*/
/*     <p>Slack - simbik</p>*/
/*     <p>Телефон - не скажу</p>*/
/*     <form class="form-horizontal">*/
/*         <div class="form-group">*/
/*             <label for="inputName" class="col-sm-2 control-label">Имя:</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="inputName" placeholder="Ваше имя">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="inputComment" class="col-sm-2 control-label">Комментарий:</label>*/
/*             <div class="col-sm-10">*/
/*                 <textarea class="form-control" name="comment"></textarea>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="submit" class="btn btn-default">Отправить</button>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
