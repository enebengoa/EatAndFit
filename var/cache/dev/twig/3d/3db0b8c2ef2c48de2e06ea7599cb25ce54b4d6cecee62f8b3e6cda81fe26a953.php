<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b86fcb9fae9f1f4b7e0e0a4071eab075241c416000eddbcf92fe9d5e25d986eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_069cc1c5ec52527fd7269fb12ac4f8446661ee127bb539fabc3d5d03eea6fdcf = $this->env->getExtension("native_profiler");
        $__internal_069cc1c5ec52527fd7269fb12ac4f8446661ee127bb539fabc3d5d03eea6fdcf->enter($__internal_069cc1c5ec52527fd7269fb12ac4f8446661ee127bb539fabc3d5d03eea6fdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_069cc1c5ec52527fd7269fb12ac4f8446661ee127bb539fabc3d5d03eea6fdcf->leave($__internal_069cc1c5ec52527fd7269fb12ac4f8446661ee127bb539fabc3d5d03eea6fdcf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84568bea025d3af3a64a0cc8a15bb5614c3e2f566a912ed2930081424c77c23f = $this->env->getExtension("native_profiler");
        $__internal_84568bea025d3af3a64a0cc8a15bb5614c3e2f566a912ed2930081424c77c23f->enter($__internal_84568bea025d3af3a64a0cc8a15bb5614c3e2f566a912ed2930081424c77c23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_84568bea025d3af3a64a0cc8a15bb5614c3e2f566a912ed2930081424c77c23f->leave($__internal_84568bea025d3af3a64a0cc8a15bb5614c3e2f566a912ed2930081424c77c23f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
