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
        $__internal_ccdf2b94c21a96e1f209dd99b7d42b73c5a79019deb8f34e759bd7727d5f11b2 = $this->env->getExtension("native_profiler");
        $__internal_ccdf2b94c21a96e1f209dd99b7d42b73c5a79019deb8f34e759bd7727d5f11b2->enter($__internal_ccdf2b94c21a96e1f209dd99b7d42b73c5a79019deb8f34e759bd7727d5f11b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccdf2b94c21a96e1f209dd99b7d42b73c5a79019deb8f34e759bd7727d5f11b2->leave($__internal_ccdf2b94c21a96e1f209dd99b7d42b73c5a79019deb8f34e759bd7727d5f11b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcde7dbb73ee63711ca92248d915616b18af2a3baffe0be960e96b0162dc9c76 = $this->env->getExtension("native_profiler");
        $__internal_bcde7dbb73ee63711ca92248d915616b18af2a3baffe0be960e96b0162dc9c76->enter($__internal_bcde7dbb73ee63711ca92248d915616b18af2a3baffe0be960e96b0162dc9c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_bcde7dbb73ee63711ca92248d915616b18af2a3baffe0be960e96b0162dc9c76->leave($__internal_bcde7dbb73ee63711ca92248d915616b18af2a3baffe0be960e96b0162dc9c76_prof);

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
