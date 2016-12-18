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
        $__internal_78ff891c83538a7e5c694c47f06fc5531c30c19b2fbeb8c9a26170325c4236d2 = $this->env->getExtension("native_profiler");
        $__internal_78ff891c83538a7e5c694c47f06fc5531c30c19b2fbeb8c9a26170325c4236d2->enter($__internal_78ff891c83538a7e5c694c47f06fc5531c30c19b2fbeb8c9a26170325c4236d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78ff891c83538a7e5c694c47f06fc5531c30c19b2fbeb8c9a26170325c4236d2->leave($__internal_78ff891c83538a7e5c694c47f06fc5531c30c19b2fbeb8c9a26170325c4236d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93e79fd8211e9b512a88fde470a3f79d93bcc9b43184019fee19bd180efd12ac = $this->env->getExtension("native_profiler");
        $__internal_93e79fd8211e9b512a88fde470a3f79d93bcc9b43184019fee19bd180efd12ac->enter($__internal_93e79fd8211e9b512a88fde470a3f79d93bcc9b43184019fee19bd180efd12ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_93e79fd8211e9b512a88fde470a3f79d93bcc9b43184019fee19bd180efd12ac->leave($__internal_93e79fd8211e9b512a88fde470a3f79d93bcc9b43184019fee19bd180efd12ac_prof);

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
