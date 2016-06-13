<?php

/* layout.twig */
class __TwigTemplate_3b2bdf4a7320b8cded689ea077a654fa99dfb076b9b93d85500490d9252570cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"utf-8\"/>
    <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"/assets/template/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/template/css/bootstrap-theme.min.css\">
</head>
<body>

<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Учим MVC</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/\">Главная</a></li>
                <li><a href=\"/about/\">О сайте</a></li>
                <li><a href=\"/portfolio/\">Портфолио</a></li>
                <li><a href=\"/contact/\">Контакты</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "    </div>
</div>

<div class=\"container\">
    <hr>

    <footer>
        <p>© 2016 LoftSchool</p>
    </footer>
</div> <!-- /container -->

<script src=\"https://code.jquery.com/jquery-1.12.4.min.js\"></script>
<script src=\"/assets/template/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 37,  80 => 36,  62 => 38,  60 => 36,  26 => 5,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="ru">*/
/* <head>*/
/*     <meta charset="utf-8"/>*/
/*     <title>{{ title }}</title>*/
/*     <link rel="stylesheet" href="/assets/template/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="/assets/template/css/bootstrap-theme.min.css">*/
/* </head>*/
/* <body>*/
/* */
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/">Учим MVC</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li><a href="/">Главная</a></li>*/
/*                 <li><a href="/about/">О сайте</a></li>*/
/*                 <li><a href="/portfolio/">Портфолио</a></li>*/
/*                 <li><a href="/contact/">Контакты</a></li>*/
/*             </ul>*/
/*         </div><!--/.navbar-collapse -->*/
/*     </div>*/
/* </nav>*/
/* */
/* <!-- Main jumbotron for a primary marketing message or call to action -->*/
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         {% block content %}*/
/*         {% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <hr>*/
/* */
/*     <footer>*/
/*         <p>© 2016 LoftSchool</p>*/
/*     </footer>*/
/* </div> <!-- /container -->*/
/* */
/* <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>*/
/* <script src="/assets/template/js/bootstrap.min.js"></script>*/
/* </body>*/
/* </html>*/
