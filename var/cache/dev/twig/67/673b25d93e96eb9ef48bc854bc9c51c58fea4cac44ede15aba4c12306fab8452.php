<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f9ab0c8bebe0d528215a1803efa3bd1307d1e459302898da26765cc66a38ae76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6a7522628d69b6774ae96f2a767035b6137a8a3bad8c33c8101d083c07b00eb9 = $this->env->getExtension("native_profiler");
        $__internal_6a7522628d69b6774ae96f2a767035b6137a8a3bad8c33c8101d083c07b00eb9->enter($__internal_6a7522628d69b6774ae96f2a767035b6137a8a3bad8c33c8101d083c07b00eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a7522628d69b6774ae96f2a767035b6137a8a3bad8c33c8101d083c07b00eb9->leave($__internal_6a7522628d69b6774ae96f2a767035b6137a8a3bad8c33c8101d083c07b00eb9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_056d42bf26a1fe22b8ac748fa62d1c0452786b953d64190cf68544eaa6fce511 = $this->env->getExtension("native_profiler");
        $__internal_056d42bf26a1fe22b8ac748fa62d1c0452786b953d64190cf68544eaa6fce511->enter($__internal_056d42bf26a1fe22b8ac748fa62d1c0452786b953d64190cf68544eaa6fce511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_056d42bf26a1fe22b8ac748fa62d1c0452786b953d64190cf68544eaa6fce511->leave($__internal_056d42bf26a1fe22b8ac748fa62d1c0452786b953d64190cf68544eaa6fce511_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
