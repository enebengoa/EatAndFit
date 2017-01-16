<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_1292461ae70fa4956c86c116dcf4c163316f7ef184ff6efb3f74b8379e516137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_54708f22237c72abec87f011c66595494a01ffb8682dc69e857553976030df1c = $this->env->getExtension("native_profiler");
        $__internal_54708f22237c72abec87f011c66595494a01ffb8682dc69e857553976030df1c->enter($__internal_54708f22237c72abec87f011c66595494a01ffb8682dc69e857553976030df1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54708f22237c72abec87f011c66595494a01ffb8682dc69e857553976030df1c->leave($__internal_54708f22237c72abec87f011c66595494a01ffb8682dc69e857553976030df1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81b8af84a7c002e6f757fef47ab3fb8fc7c528dc1f7a2696d1de9538fe8366c2 = $this->env->getExtension("native_profiler");
        $__internal_81b8af84a7c002e6f757fef47ab3fb8fc7c528dc1f7a2696d1de9538fe8366c2->enter($__internal_81b8af84a7c002e6f757fef47ab3fb8fc7c528dc1f7a2696d1de9538fe8366c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_81b8af84a7c002e6f757fef47ab3fb8fc7c528dc1f7a2696d1de9538fe8366c2->leave($__internal_81b8af84a7c002e6f757fef47ab3fb8fc7c528dc1f7a2696d1de9538fe8366c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
