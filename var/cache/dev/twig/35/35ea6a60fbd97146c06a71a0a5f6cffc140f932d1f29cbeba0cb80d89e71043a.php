<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_21ac658a12b81c1420d55c1566d37589e6fac91dd1b594b1c6a7e75841964d14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_28568fb0b0152d41884a936054b07410c1a38a99569442feee93a7b2620da25a = $this->env->getExtension("native_profiler");
        $__internal_28568fb0b0152d41884a936054b07410c1a38a99569442feee93a7b2620da25a->enter($__internal_28568fb0b0152d41884a936054b07410c1a38a99569442feee93a7b2620da25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28568fb0b0152d41884a936054b07410c1a38a99569442feee93a7b2620da25a->leave($__internal_28568fb0b0152d41884a936054b07410c1a38a99569442feee93a7b2620da25a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7adce3825e0de8c338b0c04d7716337d67a4b9511f244455658b3d45720f3ac = $this->env->getExtension("native_profiler");
        $__internal_c7adce3825e0de8c338b0c04d7716337d67a4b9511f244455658b3d45720f3ac->enter($__internal_c7adce3825e0de8c338b0c04d7716337d67a4b9511f244455658b3d45720f3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c7adce3825e0de8c338b0c04d7716337d67a4b9511f244455658b3d45720f3ac->leave($__internal_c7adce3825e0de8c338b0c04d7716337d67a4b9511f244455658b3d45720f3ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
