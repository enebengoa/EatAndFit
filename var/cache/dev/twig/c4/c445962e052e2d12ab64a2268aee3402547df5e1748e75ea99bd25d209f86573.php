<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_adef31a9cfa570242077e06a5988d55ce3aff8ee2d8846fff954da5b2ae07a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_dbaf3118f0dda24b65191f115474ad590f40f58dd022b3371d1d5717fdd1741c = $this->env->getExtension("native_profiler");
        $__internal_dbaf3118f0dda24b65191f115474ad590f40f58dd022b3371d1d5717fdd1741c->enter($__internal_dbaf3118f0dda24b65191f115474ad590f40f58dd022b3371d1d5717fdd1741c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbaf3118f0dda24b65191f115474ad590f40f58dd022b3371d1d5717fdd1741c->leave($__internal_dbaf3118f0dda24b65191f115474ad590f40f58dd022b3371d1d5717fdd1741c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed979fcd689e8c46a6f3d47cc54a9ee2c6d5c434964b21892ee16b54ba0977eb = $this->env->getExtension("native_profiler");
        $__internal_ed979fcd689e8c46a6f3d47cc54a9ee2c6d5c434964b21892ee16b54ba0977eb->enter($__internal_ed979fcd689e8c46a6f3d47cc54a9ee2c6d5c434964b21892ee16b54ba0977eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ed979fcd689e8c46a6f3d47cc54a9ee2c6d5c434964b21892ee16b54ba0977eb->leave($__internal_ed979fcd689e8c46a6f3d47cc54a9ee2c6d5c434964b21892ee16b54ba0977eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
