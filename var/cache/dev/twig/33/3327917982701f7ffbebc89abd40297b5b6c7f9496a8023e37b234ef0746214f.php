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
        $__internal_4933fba1331e1fd78c9059ce8980aabce49f6a4741ac43002adfb097db3c7c5c = $this->env->getExtension("native_profiler");
        $__internal_4933fba1331e1fd78c9059ce8980aabce49f6a4741ac43002adfb097db3c7c5c->enter($__internal_4933fba1331e1fd78c9059ce8980aabce49f6a4741ac43002adfb097db3c7c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4933fba1331e1fd78c9059ce8980aabce49f6a4741ac43002adfb097db3c7c5c->leave($__internal_4933fba1331e1fd78c9059ce8980aabce49f6a4741ac43002adfb097db3c7c5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2547f5150664048f8f57841475a385fa5a7d787d8d5fa97edaf182a9fb3ac29e = $this->env->getExtension("native_profiler");
        $__internal_2547f5150664048f8f57841475a385fa5a7d787d8d5fa97edaf182a9fb3ac29e->enter($__internal_2547f5150664048f8f57841475a385fa5a7d787d8d5fa97edaf182a9fb3ac29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_2547f5150664048f8f57841475a385fa5a7d787d8d5fa97edaf182a9fb3ac29e->leave($__internal_2547f5150664048f8f57841475a385fa5a7d787d8d5fa97edaf182a9fb3ac29e_prof);

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
