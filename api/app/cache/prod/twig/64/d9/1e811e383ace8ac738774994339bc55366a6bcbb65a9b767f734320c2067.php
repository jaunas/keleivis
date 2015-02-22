<?php

/* AppBundle:Administration:userModalInfo.html.twig */
class __TwigTemplate_64d91e811e383ace8ac738774994339bc55366a6bcbb65a9b767f734320c2067 extends Twig_Template
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
        echo "\tUżytkownik ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">Dane podstawowe</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">Imię:</div>
\t\t\t\t<div class=\"col-sm-6\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "fName", array()), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">Nazwisko:</div>
\t\t\t\t<div class=\"col-sm-6\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "fName", array()), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">E-mail:</div>
\t\t\t\t<div class=\"col-sm-6\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">Aktywny:</div>
\t\t\t\t<div class=\"col-sm-6\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "enabled", array()), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">Data ostatniego logowania:</div>
\t\t\t\t<div class=\"col-sm-6\">";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastLogin", array()), "Y-m-d, H:i:s"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">Zablokowany:</div>
\t\t\t\t<div class=\"col-sm-6\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locked", array()), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">Przypisane role</div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 41
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t</div>
\t</div>
";
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Administration:userModalInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 52,  127 => 51,  121 => 47,  111 => 43,  107 => 41,  103 => 40,  93 => 33,  86 => 29,  79 => 25,  72 => 21,  65 => 17,  58 => 13,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
