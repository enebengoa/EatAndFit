<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_051f21cd9bf6052d1c336e446cc1a721ae18657ad6ff9fb3e4e7219e54c4d7dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_788756a6c7cef3e6f423cc1f2ce9d624ed25c6e947b82adbf23fe90117696f7d = $this->env->getExtension("native_profiler");
        $__internal_788756a6c7cef3e6f423cc1f2ce9d624ed25c6e947b82adbf23fe90117696f7d->enter($__internal_788756a6c7cef3e6f423cc1f2ce9d624ed25c6e947b82adbf23fe90117696f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_788756a6c7cef3e6f423cc1f2ce9d624ed25c6e947b82adbf23fe90117696f7d->leave($__internal_788756a6c7cef3e6f423cc1f2ce9d624ed25c6e947b82adbf23fe90117696f7d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2d98ef1b17c97741259960e887bec044c2b0c194d05e90426f1cf02ba8c9425 = $this->env->getExtension("native_profiler");
        $__internal_d2d98ef1b17c97741259960e887bec044c2b0c194d05e90426f1cf02ba8c9425->enter($__internal_d2d98ef1b17c97741259960e887bec044c2b0c194d05e90426f1cf02ba8c9425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_d2d98ef1b17c97741259960e887bec044c2b0c194d05e90426f1cf02ba8c9425->leave($__internal_d2d98ef1b17c97741259960e887bec044c2b0c194d05e90426f1cf02ba8c9425_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
