<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_600f1a9edd1454af50b30e2be3d4177d9530c585dabf17c90904624b10db0287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_2c77e896f53f6a56e683af18d2297b96aff008f91648b60749cc7a492a4ec7e3 = $this->env->getExtension("native_profiler");
        $__internal_2c77e896f53f6a56e683af18d2297b96aff008f91648b60749cc7a492a4ec7e3->enter($__internal_2c77e896f53f6a56e683af18d2297b96aff008f91648b60749cc7a492a4ec7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c77e896f53f6a56e683af18d2297b96aff008f91648b60749cc7a492a4ec7e3->leave($__internal_2c77e896f53f6a56e683af18d2297b96aff008f91648b60749cc7a492a4ec7e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d12b0dbd821057356c2d5a3f313b60bdfec511de0b3221679a43100c986aece4 = $this->env->getExtension("native_profiler");
        $__internal_d12b0dbd821057356c2d5a3f313b60bdfec511de0b3221679a43100c986aece4->enter($__internal_d12b0dbd821057356c2d5a3f313b60bdfec511de0b3221679a43100c986aece4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d12b0dbd821057356c2d5a3f313b60bdfec511de0b3221679a43100c986aece4->leave($__internal_d12b0dbd821057356c2d5a3f313b60bdfec511de0b3221679a43100c986aece4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
