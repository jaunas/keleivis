<?php

/* ::base.html.twig */
class __TwigTemplate_de19bad66eb6da2f8b14d891620f3dc31546693d6fe7364b659a6a95cb571fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t\t<!-- Bootstrap -->
\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

\t\t<!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
\t\t";
        // line 12
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 13
        echo "
\t\t";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4fe151e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4fe151e_0") : $this->env->getExtension('assets')->getAssetUrl("css/4fe151e_part_1_dashboard_1.css");
            // line 15
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
            // asset "4fe151e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4fe151e_1") : $this->env->getExtension('assets')->getAssetUrl("css/4fe151e_part_1_signin_2.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
        } else {
            // asset "4fe151e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4fe151e") : $this->env->getExtension('assets')->getAssetUrl("css/4fe151e.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 17
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t</head>
\t<body>
\t\t";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "
\t\t<!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Include all JavaScripts, compiled by Assetic -->
\t\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('assets')->getAssetUrl("js/bb54fd1_part_1_custom_1.js");
            // line 28
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1") : $this->env->getExtension('assets')->getAssetUrl("js/bb54fd1.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 30
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "\t</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Keleivis";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 30,  134 => 21,  129 => 17,  123 => 5,  117 => 31,  114 => 30,  100 => 28,  96 => 27,  92 => 26,  87 => 24,  83 => 22,  81 => 21,  74 => 18,  71 => 17,  51 => 15,  47 => 14,  44 => 13,  42 => 12,  36 => 9,  29 => 5,  23 => 1,);
    }
}
