<?php

/* AppBundle:Administration:users.html.twig */
class __TwigTemplate_e61afbce831080e2e4d9b1c540d67e0ea5b7a383e2d5672abde8d13ac5582617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AppBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Administracja - użytkownicy";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Imię</th>
\t\t\t\t<th>Nazwisko</th>
\t\t\t\t<th>Login</th>
\t\t\t\t<th>E-mail</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fName", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lName", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-info\" data-toggle=\"modal\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_administration_user_modal_info", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
\t\t\t\t\t\t<a class=\"btn btn-danger";
            // line 27
            echo (((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") && twig_in_filter("ROLE_ADMIN", $this->getAttribute($context["user"], "roles", array()))) || twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($context["user"], "roles", array())))) ? (" disabled") : (""));
            echo "\" data-toggle=\"modal\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_administration_user_modal_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-trash\"></i></a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Administration:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  92 => 27,  88 => 26,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  64 => 19,  60 => 18,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
