<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_514074d33257fad8dfb1644c8b22cdcc1779c43c0661516e32cd2d004945bcef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_1b065e2ed2138a9e03d761794df4f9c490b1159b4aeae2cdc3d7abc9a2d6bb1e = $this->env->getExtension("native_profiler");
        $__internal_1b065e2ed2138a9e03d761794df4f9c490b1159b4aeae2cdc3d7abc9a2d6bb1e->enter($__internal_1b065e2ed2138a9e03d761794df4f9c490b1159b4aeae2cdc3d7abc9a2d6bb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b065e2ed2138a9e03d761794df4f9c490b1159b4aeae2cdc3d7abc9a2d6bb1e->leave($__internal_1b065e2ed2138a9e03d761794df4f9c490b1159b4aeae2cdc3d7abc9a2d6bb1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b94b42db2b35323994204a4b043407a3d0766620675b0798246a34bd6e5479e7 = $this->env->getExtension("native_profiler");
        $__internal_b94b42db2b35323994204a4b043407a3d0766620675b0798246a34bd6e5479e7->enter($__internal_b94b42db2b35323994204a4b043407a3d0766620675b0798246a34bd6e5479e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b94b42db2b35323994204a4b043407a3d0766620675b0798246a34bd6e5479e7->leave($__internal_b94b42db2b35323994204a4b043407a3d0766620675b0798246a34bd6e5479e7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
