<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_5c71756d5117876e20338dde5be9f4d9aa4f941e559633b58d5bc65a8636585d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_320e5d59556b3fb42103bf9068e2e6945083ca876a24aaa311b49da397235248 = $this->env->getExtension("native_profiler");
        $__internal_320e5d59556b3fb42103bf9068e2e6945083ca876a24aaa311b49da397235248->enter($__internal_320e5d59556b3fb42103bf9068e2e6945083ca876a24aaa311b49da397235248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_320e5d59556b3fb42103bf9068e2e6945083ca876a24aaa311b49da397235248->leave($__internal_320e5d59556b3fb42103bf9068e2e6945083ca876a24aaa311b49da397235248_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
";
    }
}
