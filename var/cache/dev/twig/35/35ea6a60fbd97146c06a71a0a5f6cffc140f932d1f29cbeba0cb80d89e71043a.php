<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_21ac658a12b81c1420d55c1566d37589e6fac91dd1b594b1c6a7e75841964d14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_714a8d48886888e1f81fadd19a927faf5cbc1a2b44db356a5da16a005c198ccf = $this->env->getExtension("native_profiler");
        $__internal_714a8d48886888e1f81fadd19a927faf5cbc1a2b44db356a5da16a005c198ccf->enter($__internal_714a8d48886888e1f81fadd19a927faf5cbc1a2b44db356a5da16a005c198ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_714a8d48886888e1f81fadd19a927faf5cbc1a2b44db356a5da16a005c198ccf->leave($__internal_714a8d48886888e1f81fadd19a927faf5cbc1a2b44db356a5da16a005c198ccf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d3817350eb9d1b036d63d2a60a5e1365defb517261f42d7aefbf534eb2be698 = $this->env->getExtension("native_profiler");
        $__internal_3d3817350eb9d1b036d63d2a60a5e1365defb517261f42d7aefbf534eb2be698->enter($__internal_3d3817350eb9d1b036d63d2a60a5e1365defb517261f42d7aefbf534eb2be698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3d3817350eb9d1b036d63d2a60a5e1365defb517261f42d7aefbf534eb2be698->leave($__internal_3d3817350eb9d1b036d63d2a60a5e1365defb517261f42d7aefbf534eb2be698_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
