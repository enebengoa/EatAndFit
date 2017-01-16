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
        $__internal_5bae0c4e41da9c5a12e0b26a594157db67ae1b475f04293e0d82870e254bfeea = $this->env->getExtension("native_profiler");
        $__internal_5bae0c4e41da9c5a12e0b26a594157db67ae1b475f04293e0d82870e254bfeea->enter($__internal_5bae0c4e41da9c5a12e0b26a594157db67ae1b475f04293e0d82870e254bfeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bae0c4e41da9c5a12e0b26a594157db67ae1b475f04293e0d82870e254bfeea->leave($__internal_5bae0c4e41da9c5a12e0b26a594157db67ae1b475f04293e0d82870e254bfeea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eabbddd2eea2b29b7162b6caf05c6ac2545e8a918c0f4cba84692b02876d9999 = $this->env->getExtension("native_profiler");
        $__internal_eabbddd2eea2b29b7162b6caf05c6ac2545e8a918c0f4cba84692b02876d9999->enter($__internal_eabbddd2eea2b29b7162b6caf05c6ac2545e8a918c0f4cba84692b02876d9999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_eabbddd2eea2b29b7162b6caf05c6ac2545e8a918c0f4cba84692b02876d9999->leave($__internal_eabbddd2eea2b29b7162b6caf05c6ac2545e8a918c0f4cba84692b02876d9999_prof);

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
