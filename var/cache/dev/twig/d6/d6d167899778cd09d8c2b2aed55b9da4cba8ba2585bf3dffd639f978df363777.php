<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_88733636b9cf79e08c97c6c0c606c3fdd170f16ac221af83a496ffefac17286b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_d91b4fe0bb1125ebf1790c07a43cc5b44dac8de4c73c40d661eac07150ad5f8c = $this->env->getExtension("native_profiler");
        $__internal_d91b4fe0bb1125ebf1790c07a43cc5b44dac8de4c73c40d661eac07150ad5f8c->enter($__internal_d91b4fe0bb1125ebf1790c07a43cc5b44dac8de4c73c40d661eac07150ad5f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d91b4fe0bb1125ebf1790c07a43cc5b44dac8de4c73c40d661eac07150ad5f8c->leave($__internal_d91b4fe0bb1125ebf1790c07a43cc5b44dac8de4c73c40d661eac07150ad5f8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e12751009da107d4abec21b6a5dacfa765c2e1c8d371c476e283ae48a717aa45 = $this->env->getExtension("native_profiler");
        $__internal_e12751009da107d4abec21b6a5dacfa765c2e1c8d371c476e283ae48a717aa45->enter($__internal_e12751009da107d4abec21b6a5dacfa765c2e1c8d371c476e283ae48a717aa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_e12751009da107d4abec21b6a5dacfa765c2e1c8d371c476e283ae48a717aa45->leave($__internal_e12751009da107d4abec21b6a5dacfa765c2e1c8d371c476e283ae48a717aa45_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
