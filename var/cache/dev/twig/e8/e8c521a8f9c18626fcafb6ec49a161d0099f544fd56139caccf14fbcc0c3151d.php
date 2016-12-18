<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_999adba7e340676cb9a07fc00abe42fbd00f80a8ad26ef8b22a7b969a63f2750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_afcdd902db16d001d4cd19c77f020a18db3aa03815bcbb6f8ebb07a2bd2e84d2 = $this->env->getExtension("native_profiler");
        $__internal_afcdd902db16d001d4cd19c77f020a18db3aa03815bcbb6f8ebb07a2bd2e84d2->enter($__internal_afcdd902db16d001d4cd19c77f020a18db3aa03815bcbb6f8ebb07a2bd2e84d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afcdd902db16d001d4cd19c77f020a18db3aa03815bcbb6f8ebb07a2bd2e84d2->leave($__internal_afcdd902db16d001d4cd19c77f020a18db3aa03815bcbb6f8ebb07a2bd2e84d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4b0fb83badf704c7b1b88f917f53e60c169bbb9ceb4cef7e69f322c6113958e = $this->env->getExtension("native_profiler");
        $__internal_e4b0fb83badf704c7b1b88f917f53e60c169bbb9ceb4cef7e69f322c6113958e->enter($__internal_e4b0fb83badf704c7b1b88f917f53e60c169bbb9ceb4cef7e69f322c6113958e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e4b0fb83badf704c7b1b88f917f53e60c169bbb9ceb4cef7e69f322c6113958e->leave($__internal_e4b0fb83badf704c7b1b88f917f53e60c169bbb9ceb4cef7e69f322c6113958e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
