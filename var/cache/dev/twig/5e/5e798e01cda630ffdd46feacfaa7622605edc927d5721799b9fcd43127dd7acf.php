<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2918c7f39f327c5d122ce9f8c3fc2b2462e1ed8ea9f99c274ed29831a9d8b707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_113c536b32452aa2a05601abeeff361e6f02d636bcfee667a48763b8f5323b50 = $this->env->getExtension("native_profiler");
        $__internal_113c536b32452aa2a05601abeeff361e6f02d636bcfee667a48763b8f5323b50->enter($__internal_113c536b32452aa2a05601abeeff361e6f02d636bcfee667a48763b8f5323b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_113c536b32452aa2a05601abeeff361e6f02d636bcfee667a48763b8f5323b50->leave($__internal_113c536b32452aa2a05601abeeff361e6f02d636bcfee667a48763b8f5323b50_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcd47026dcf3d81e1c2fd7e6aba1c5c2276a852fca6d184a498cd9fdff3cf57d = $this->env->getExtension("native_profiler");
        $__internal_fcd47026dcf3d81e1c2fd7e6aba1c5c2276a852fca6d184a498cd9fdff3cf57d->enter($__internal_fcd47026dcf3d81e1c2fd7e6aba1c5c2276a852fca6d184a498cd9fdff3cf57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_fcd47026dcf3d81e1c2fd7e6aba1c5c2276a852fca6d184a498cd9fdff3cf57d->leave($__internal_fcd47026dcf3d81e1c2fd7e6aba1c5c2276a852fca6d184a498cd9fdff3cf57d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
