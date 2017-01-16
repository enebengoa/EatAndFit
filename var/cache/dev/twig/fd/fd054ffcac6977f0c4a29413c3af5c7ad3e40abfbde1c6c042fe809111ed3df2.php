<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_fe56628269aaa39aeb465ffedbf1afca024b8660a2afe80e59128c3323849683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_6e8cb0a6702ca0dbbb4295bd3a842116953c89bfeb7948895eef75ec23cd146a = $this->env->getExtension("native_profiler");
        $__internal_6e8cb0a6702ca0dbbb4295bd3a842116953c89bfeb7948895eef75ec23cd146a->enter($__internal_6e8cb0a6702ca0dbbb4295bd3a842116953c89bfeb7948895eef75ec23cd146a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e8cb0a6702ca0dbbb4295bd3a842116953c89bfeb7948895eef75ec23cd146a->leave($__internal_6e8cb0a6702ca0dbbb4295bd3a842116953c89bfeb7948895eef75ec23cd146a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b3193c3b96faba37ec22c88ddc16e1a4cde263c257cb74d3331a5858ef9c9c0 = $this->env->getExtension("native_profiler");
        $__internal_0b3193c3b96faba37ec22c88ddc16e1a4cde263c257cb74d3331a5858ef9c9c0->enter($__internal_0b3193c3b96faba37ec22c88ddc16e1a4cde263c257cb74d3331a5858ef9c9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_0b3193c3b96faba37ec22c88ddc16e1a4cde263c257cb74d3331a5858ef9c9c0->leave($__internal_0b3193c3b96faba37ec22c88ddc16e1a4cde263c257cb74d3331a5858ef9c9c0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
