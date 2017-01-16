<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d316911d30f2463ed08b42a55286f73e593387bc9aae3601b7461340f29e8bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_aa6b22acd0931fce81f0df527d1bd2d06983ec4eb23674279cdff595642edb77 = $this->env->getExtension("native_profiler");
        $__internal_aa6b22acd0931fce81f0df527d1bd2d06983ec4eb23674279cdff595642edb77->enter($__internal_aa6b22acd0931fce81f0df527d1bd2d06983ec4eb23674279cdff595642edb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa6b22acd0931fce81f0df527d1bd2d06983ec4eb23674279cdff595642edb77->leave($__internal_aa6b22acd0931fce81f0df527d1bd2d06983ec4eb23674279cdff595642edb77_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23a067e71705a0094b9cec31b4c0a90568e35dc3bec2ee4c60fb9a43805cd2d7 = $this->env->getExtension("native_profiler");
        $__internal_23a067e71705a0094b9cec31b4c0a90568e35dc3bec2ee4c60fb9a43805cd2d7->enter($__internal_23a067e71705a0094b9cec31b4c0a90568e35dc3bec2ee4c60fb9a43805cd2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_23a067e71705a0094b9cec31b4c0a90568e35dc3bec2ee4c60fb9a43805cd2d7->leave($__internal_23a067e71705a0094b9cec31b4c0a90568e35dc3bec2ee4c60fb9a43805cd2d7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
