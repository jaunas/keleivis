<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_66a6b21c9b76554e273cd645013202c8899c75608c306093619f668372b04861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"body-signin\">
\t\t<div class=\"container\">

\t\t\t<form class=\"form-signin\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t<h2>Please sign in</h2>
\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

\t\t\t\t<label for=\"username\" class=\"sr-only\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t<input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" placeholder=\"Username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" autofocus />

\t\t\t\t<label for=\"password\" class=\"sr-only\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t<input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\" required=\"required\" />

\t\t\t\t";
        // line 19
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 20
            echo "\t\t\t\t\t<div class=\"has-error\">
\t\t\t\t\t\t<label class=\"control-label\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 24
        echo "
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"remember_me\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t<input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t</form>

\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  85 => 27,  80 => 24,  74 => 21,  71 => 20,  69 => 19,  63 => 16,  58 => 14,  54 => 13,  49 => 11,  44 => 9,  39 => 6,  36 => 5,  11 => 1,);
    }
}
