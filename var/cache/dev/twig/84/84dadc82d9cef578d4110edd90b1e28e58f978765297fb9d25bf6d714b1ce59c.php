<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_cff87b17bd4d5dc8694341996b9d2043cb9602198bfb906d30e00b835664ae71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_b7fbec92c99d05db09ae4647994de0fd67ff38693ff75f7d1f7c4d80fb783997 = $this->env->getExtension("native_profiler");
        $__internal_b7fbec92c99d05db09ae4647994de0fd67ff38693ff75f7d1f7c4d80fb783997->enter($__internal_b7fbec92c99d05db09ae4647994de0fd67ff38693ff75f7d1f7c4d80fb783997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7fbec92c99d05db09ae4647994de0fd67ff38693ff75f7d1f7c4d80fb783997->leave($__internal_b7fbec92c99d05db09ae4647994de0fd67ff38693ff75f7d1f7c4d80fb783997_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_602b31f33c05fe20f09cfa8d65d39a93bf4298db23ac04ce8a8166a69ff7b89e = $this->env->getExtension("native_profiler");
        $__internal_602b31f33c05fe20f09cfa8d65d39a93bf4298db23ac04ce8a8166a69ff7b89e->enter($__internal_602b31f33c05fe20f09cfa8d65d39a93bf4298db23ac04ce8a8166a69ff7b89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_602b31f33c05fe20f09cfa8d65d39a93bf4298db23ac04ce8a8166a69ff7b89e->leave($__internal_602b31f33c05fe20f09cfa8d65d39a93bf4298db23ac04ce8a8166a69ff7b89e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
