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
        $__internal_c8afedbb21414859592549cc39bfc88bb742a381340de31f71eef53caa91c5fa = $this->env->getExtension("native_profiler");
        $__internal_c8afedbb21414859592549cc39bfc88bb742a381340de31f71eef53caa91c5fa->enter($__internal_c8afedbb21414859592549cc39bfc88bb742a381340de31f71eef53caa91c5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8afedbb21414859592549cc39bfc88bb742a381340de31f71eef53caa91c5fa->leave($__internal_c8afedbb21414859592549cc39bfc88bb742a381340de31f71eef53caa91c5fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5428035f1467876e40050ead57b6fe7cdaddf66213c500d79493969c186219b8 = $this->env->getExtension("native_profiler");
        $__internal_5428035f1467876e40050ead57b6fe7cdaddf66213c500d79493969c186219b8->enter($__internal_5428035f1467876e40050ead57b6fe7cdaddf66213c500d79493969c186219b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5428035f1467876e40050ead57b6fe7cdaddf66213c500d79493969c186219b8->leave($__internal_5428035f1467876e40050ead57b6fe7cdaddf66213c500d79493969c186219b8_prof);

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
