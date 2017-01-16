<?php

/* @User/layout_menu.html.twig */
class __TwigTemplate_05c881ac76ea298941752fc7d1096d19870be4a375bd637a0f47f5c658ea4b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/layout_menu.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'head2' => array($this, 'block_head2'),
            'body2' => array($this, 'block_body2'),
            'body3' => array($this, 'block_body3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18aa13c140ad71a65978038cfb2c644f4ba848e392251613109fee64f56e90a2 = $this->env->getExtension("native_profiler");
        $__internal_18aa13c140ad71a65978038cfb2c644f4ba848e392251613109fee64f56e90a2->enter($__internal_18aa13c140ad71a65978038cfb2c644f4ba848e392251613109fee64f56e90a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18aa13c140ad71a65978038cfb2c644f4ba848e392251613109fee64f56e90a2->leave($__internal_18aa13c140ad71a65978038cfb2c644f4ba848e392251613109fee64f56e90a2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b1669c249f59080ecbbe9631f6eeb08518a9cd2717eb5cdcc458c4a9370ffde = $this->env->getExtension("native_profiler");
        $__internal_8b1669c249f59080ecbbe9631f6eeb08518a9cd2717eb5cdcc458c4a9370ffde->enter($__internal_8b1669c249f59080ecbbe9631f6eeb08518a9cd2717eb5cdcc458c4a9370ffde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_8b1669c249f59080ecbbe9631f6eeb08518a9cd2717eb5cdcc458c4a9370ffde->leave($__internal_8b1669c249f59080ecbbe9631f6eeb08518a9cd2717eb5cdcc458c4a9370ffde_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c09a7e4970f52a1cbedcea4b8af7be60da94d940644e49017ef8671a862a90dd = $this->env->getExtension("native_profiler");
        $__internal_c09a7e4970f52a1cbedcea4b8af7be60da94d940644e49017ef8671a862a90dd->enter($__internal_c09a7e4970f52a1cbedcea4b8af7be60da94d940644e49017ef8671a862a90dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_c09a7e4970f52a1cbedcea4b8af7be60da94d940644e49017ef8671a862a90dd->leave($__internal_c09a7e4970f52a1cbedcea4b8af7be60da94d940644e49017ef8671a862a90dd_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_7285171cefa3759f13e40e2b2b4afe8f2ac5f9093ca4f0ccd18ef346a592fac4 = $this->env->getExtension("native_profiler");
        $__internal_7285171cefa3759f13e40e2b2b4afe8f2ac5f9093ca4f0ccd18ef346a592fac4->enter($__internal_7285171cefa3759f13e40e2b2b4afe8f2ac5f9093ca4f0ccd18ef346a592fac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_7285171cefa3759f13e40e2b2b4afe8f2ac5f9093ca4f0ccd18ef346a592fac4->leave($__internal_7285171cefa3759f13e40e2b2b4afe8f2ac5f9093ca4f0ccd18ef346a592fac4_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d6df75509ffb542f0847991394edf9d32120a98e4f4634f84f3a6fbc89915e2 = $this->env->getExtension("native_profiler");
        $__internal_4d6df75509ffb542f0847991394edf9d32120a98e4f4634f84f3a6fbc89915e2->enter($__internal_4d6df75509ffb542f0847991394edf9d32120a98e4f4634f84f3a6fbc89915e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "


<!--content-->
<div class=\"blog\">
\t<div class=\"container\">
\t\t<div class=\"menu-top\">
\t\t\t<div class=\"col-md-12 menu-left\">
\t\t\t\t<h3>";
        // line 22
        $this->displayBlock('head2', $context, $blocks);
        echo "</h3>
\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t<span></span>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>

\t\t";
        // line 29
        $this->displayBlock('body2', $context, $blocks);
        // line 30
        echo "\t\t<div class=\"col-md-3 categories-grid\">

\t\t\t\t
\t\t\t\t";
        // line 33
        $this->displayBlock('body3', $context, $blocks);
        // line 34
        echo "\t\t\t\t
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t</div>
</div>

</div>
<!--//content-->

";
        
        $__internal_4d6df75509ffb542f0847991394edf9d32120a98e4f4634f84f3a6fbc89915e2->leave($__internal_4d6df75509ffb542f0847991394edf9d32120a98e4f4634f84f3a6fbc89915e2_prof);

    }

    // line 22
    public function block_head2($context, array $blocks = array())
    {
        $__internal_2c53c56fd2fb9a909f786bd9a80ee9362d93f1f9cb61103d3324a650eacb7e8f = $this->env->getExtension("native_profiler");
        $__internal_2c53c56fd2fb9a909f786bd9a80ee9362d93f1f9cb61103d3324a650eacb7e8f->enter($__internal_2c53c56fd2fb9a909f786bd9a80ee9362d93f1f9cb61103d3324a650eacb7e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo " ";
        
        $__internal_2c53c56fd2fb9a909f786bd9a80ee9362d93f1f9cb61103d3324a650eacb7e8f->leave($__internal_2c53c56fd2fb9a909f786bd9a80ee9362d93f1f9cb61103d3324a650eacb7e8f_prof);

    }

    // line 29
    public function block_body2($context, array $blocks = array())
    {
        $__internal_c8cb07a3d60a9d7a3ca39678a07684b17c0ab01ead06102994cddfbce686db9e = $this->env->getExtension("native_profiler");
        $__internal_c8cb07a3d60a9d7a3ca39678a07684b17c0ab01ead06102994cddfbce686db9e->enter($__internal_c8cb07a3d60a9d7a3ca39678a07684b17c0ab01ead06102994cddfbce686db9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        echo " ";
        
        $__internal_c8cb07a3d60a9d7a3ca39678a07684b17c0ab01ead06102994cddfbce686db9e->leave($__internal_c8cb07a3d60a9d7a3ca39678a07684b17c0ab01ead06102994cddfbce686db9e_prof);

    }

    // line 33
    public function block_body3($context, array $blocks = array())
    {
        $__internal_12ab1409ceca5f94708cb7026dc19b9eadd31d0131d50f743a9a64eee0d62659 = $this->env->getExtension("native_profiler");
        $__internal_12ab1409ceca5f94708cb7026dc19b9eadd31d0131d50f743a9a64eee0d62659->enter($__internal_12ab1409ceca5f94708cb7026dc19b9eadd31d0131d50f743a9a64eee0d62659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

        echo " ";
        
        $__internal_12ab1409ceca5f94708cb7026dc19b9eadd31d0131d50f743a9a64eee0d62659->leave($__internal_12ab1409ceca5f94708cb7026dc19b9eadd31d0131d50f743a9a64eee0d62659_prof);

    }

    public function getTemplateName()
    {
        return "@User/layout_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 33,  150 => 29,  138 => 22,  122 => 34,  120 => 33,  115 => 30,  113 => 29,  103 => 22,  93 => 14,  87 => 13,  79 => 10,  73 => 9,  61 => 4,  51 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseuser.html.twig' %}
{% block stylesheets %}

{% block title %}Eat&Fit{% endblock%}
{{ parent() }}

{% endblock %}

{% block head %}
\t
{% endblock %}

{% block body %}



<!--content-->
<div class=\"blog\">
\t<div class=\"container\">
\t\t<div class=\"menu-top\">
\t\t\t<div class=\"col-md-12 menu-left\">
\t\t\t\t<h3>{% block head2 %} {% endblock %}</h3>
\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t<span></span>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>

\t\t{% block body2 %} {% endblock %}
\t\t<div class=\"col-md-3 categories-grid\">

\t\t\t\t
\t\t\t\t{% block body3 %} {% endblock %}
\t\t\t\t
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t</div>
</div>

</div>
<!--//content-->

{% endblock %}";
    }
}
