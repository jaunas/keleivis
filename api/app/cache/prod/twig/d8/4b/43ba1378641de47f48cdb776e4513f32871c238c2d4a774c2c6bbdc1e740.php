<?php

/* AppBundle::modal.html.twig */
class __TwigTemplate_d84b43ba1378641de47f48cdb776e4513f32871c238c2d4a774c2c6bbdc1e740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'start' => array($this, 'block_start'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'end' => array($this, 'block_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('start', $context, $blocks);
        // line 2
        echo "<div class=\"modal-header\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t<h4 class=\"modal-title\">";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
</div>
<div class=\"modal-body\">
\t";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 8
        echo "</div>
<div class=\"modal-footer\">
\t";
        // line 10
        $this->displayBlock('footer', $context, $blocks);
        // line 14
        echo "</div>
";
        // line 15
        $this->displayBlock('end', $context, $blocks);
    }

    // line 1
    public function block_start($context, array $blocks = array())
    {
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        // line 11
        echo "\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t<button type=\"button\" class=\"btn btn-primary\">Save changes</button>
\t";
    }

    // line 15
    public function block_end($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AppBundle::modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  69 => 11,  66 => 10,  61 => 7,  56 => 4,  51 => 1,  47 => 15,  44 => 14,  42 => 10,  38 => 8,  36 => 7,  30 => 4,  26 => 2,  24 => 1,);
    }
}
