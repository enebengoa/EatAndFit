<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_68f72f0f684e0fd620a1b4c1befe17d98f0888a6d9dc04bc0871b72c4a9aa224 extends Twig_Template
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
        $__internal_efa5e7e5e1b72cfd417852a47460e92edc83c50b675d73ebd0ccb72dbc40a8f7 = $this->env->getExtension("native_profiler");
        $__internal_efa5e7e5e1b72cfd417852a47460e92edc83c50b675d73ebd0ccb72dbc40a8f7->enter($__internal_efa5e7e5e1b72cfd417852a47460e92edc83c50b675d73ebd0ccb72dbc40a8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_efa5e7e5e1b72cfd417852a47460e92edc83c50b675d73ebd0ccb72dbc40a8f7->leave($__internal_efa5e7e5e1b72cfd417852a47460e92edc83c50b675d73ebd0ccb72dbc40a8f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
