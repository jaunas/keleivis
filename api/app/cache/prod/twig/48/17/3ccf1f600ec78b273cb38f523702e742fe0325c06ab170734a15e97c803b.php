<?php

/* AppBundle:Administration:userModalDelete.html.twig */
class __TwigTemplate_48173ccf1f600ec78b273cb38f523702e742fe0325c06ab170734a15e97c803b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AppBundle::modal.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tUsuwanie użytkownika ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\tCzy jesteś pewien, że chcesz usunąć użytkownika ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "?
";
    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
        // line 12
        echo "\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t<button type=\"button\" class=\"btn btn-danger\" onclick=\"ajax(this, '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_administration_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "')\">Delete</button>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Administration:userModalDelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  61 => 12,  58 => 11,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
