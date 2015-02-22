<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_ad1bef418a012699dad78830a93226e8fd94cb97cfe62f54964924bf86d7ed90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Keleivis</a>
\t\t\t</div>
\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('knp_menu')->render("AppBundle:Builder:topMenu");
        echo "
\t\t\t\t<!--form class=\"navbar-form navbar-right\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
\t\t\t\t</form-->
\t\t\t</div>
\t\t</div>
    </nav>

    <div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-3 col-md-2 sidebar\">
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('knp_menu')->render("AppBundle:Builder:sidebarMenu", array("currentClass" => "active"));
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
\t\t\t\t";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "\t\t\t</div>
\t\t</div>
    </div>
\t\t\t\t
\t<div class=\"modal fade\" id=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  91 => 30,  76 => 32,  74 => 30,  68 => 27,  54 => 16,  40 => 4,  37 => 3,  11 => 1,);
    }
}
