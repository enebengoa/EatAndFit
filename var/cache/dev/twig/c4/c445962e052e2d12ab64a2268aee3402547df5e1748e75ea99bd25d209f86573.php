<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_adef31a9cfa570242077e06a5988d55ce3aff8ee2d8846fff954da5b2ae07a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_78ea92388c25ae54f5c0283815b8bd25c2bb0ddd85b410c9346d327559f41d2d = $this->env->getExtension("native_profiler");
        $__internal_78ea92388c25ae54f5c0283815b8bd25c2bb0ddd85b410c9346d327559f41d2d->enter($__internal_78ea92388c25ae54f5c0283815b8bd25c2bb0ddd85b410c9346d327559f41d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78ea92388c25ae54f5c0283815b8bd25c2bb0ddd85b410c9346d327559f41d2d->leave($__internal_78ea92388c25ae54f5c0283815b8bd25c2bb0ddd85b410c9346d327559f41d2d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ae4f1ca199f68f61c48e17064e82f937645e8d707326e8d451117c44a67cd46 = $this->env->getExtension("native_profiler");
        $__internal_7ae4f1ca199f68f61c48e17064e82f937645e8d707326e8d451117c44a67cd46->enter($__internal_7ae4f1ca199f68f61c48e17064e82f937645e8d707326e8d451117c44a67cd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7ae4f1ca199f68f61c48e17064e82f937645e8d707326e8d451117c44a67cd46->leave($__internal_7ae4f1ca199f68f61c48e17064e82f937645e8d707326e8d451117c44a67cd46_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
