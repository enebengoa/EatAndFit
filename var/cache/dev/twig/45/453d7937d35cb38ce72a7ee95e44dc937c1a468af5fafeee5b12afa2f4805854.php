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
        $__internal_023696ef4390271d5a5a3e3f9dce93204dbf54e28e05b32142f9d647792152e1 = $this->env->getExtension("native_profiler");
        $__internal_023696ef4390271d5a5a3e3f9dce93204dbf54e28e05b32142f9d647792152e1->enter($__internal_023696ef4390271d5a5a3e3f9dce93204dbf54e28e05b32142f9d647792152e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_023696ef4390271d5a5a3e3f9dce93204dbf54e28e05b32142f9d647792152e1->leave($__internal_023696ef4390271d5a5a3e3f9dce93204dbf54e28e05b32142f9d647792152e1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1ae7f62e97de119bf9e00572faf06aee6344dbab547b149fb2e4dc75732fd6a = $this->env->getExtension("native_profiler");
        $__internal_e1ae7f62e97de119bf9e00572faf06aee6344dbab547b149fb2e4dc75732fd6a->enter($__internal_e1ae7f62e97de119bf9e00572faf06aee6344dbab547b149fb2e4dc75732fd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_e1ae7f62e97de119bf9e00572faf06aee6344dbab547b149fb2e4dc75732fd6a->leave($__internal_e1ae7f62e97de119bf9e00572faf06aee6344dbab547b149fb2e4dc75732fd6a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_82d3a93482d1203067487f8c24bf6f19ee3c697019a1c070121f443d6e6122d8 = $this->env->getExtension("native_profiler");
        $__internal_82d3a93482d1203067487f8c24bf6f19ee3c697019a1c070121f443d6e6122d8->enter($__internal_82d3a93482d1203067487f8c24bf6f19ee3c697019a1c070121f443d6e6122d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_82d3a93482d1203067487f8c24bf6f19ee3c697019a1c070121f443d6e6122d8->leave($__internal_82d3a93482d1203067487f8c24bf6f19ee3c697019a1c070121f443d6e6122d8_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_828fe1dd6fb4698884d45b1432098739b7eedf52a7a9948e15af7d169de3cc05 = $this->env->getExtension("native_profiler");
        $__internal_828fe1dd6fb4698884d45b1432098739b7eedf52a7a9948e15af7d169de3cc05->enter($__internal_828fe1dd6fb4698884d45b1432098739b7eedf52a7a9948e15af7d169de3cc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_828fe1dd6fb4698884d45b1432098739b7eedf52a7a9948e15af7d169de3cc05->leave($__internal_828fe1dd6fb4698884d45b1432098739b7eedf52a7a9948e15af7d169de3cc05_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5c69531580005ca7dcb2eb14b1a8a776b79b76522eb216713ccce0b0f7ebafc = $this->env->getExtension("native_profiler");
        $__internal_f5c69531580005ca7dcb2eb14b1a8a776b79b76522eb216713ccce0b0f7ebafc->enter($__internal_f5c69531580005ca7dcb2eb14b1a8a776b79b76522eb216713ccce0b0f7ebafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "


<!--content-->
<div class=\"blog\">
\t<div class=\"container\">
\t\t<div class=\"menu-top\">
\t\t\t<div class=\"col-md-4 menu-left\">
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
        
        $__internal_f5c69531580005ca7dcb2eb14b1a8a776b79b76522eb216713ccce0b0f7ebafc->leave($__internal_f5c69531580005ca7dcb2eb14b1a8a776b79b76522eb216713ccce0b0f7ebafc_prof);

    }

    // line 22
    public function block_head2($context, array $blocks = array())
    {
        $__internal_b3839e46c67c63a796bbbceeeb4ca3784695b9b4f9c1d434bec27fbde24d611a = $this->env->getExtension("native_profiler");
        $__internal_b3839e46c67c63a796bbbceeeb4ca3784695b9b4f9c1d434bec27fbde24d611a->enter($__internal_b3839e46c67c63a796bbbceeeb4ca3784695b9b4f9c1d434bec27fbde24d611a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo " ";
        
        $__internal_b3839e46c67c63a796bbbceeeb4ca3784695b9b4f9c1d434bec27fbde24d611a->leave($__internal_b3839e46c67c63a796bbbceeeb4ca3784695b9b4f9c1d434bec27fbde24d611a_prof);

    }

    // line 29
    public function block_body2($context, array $blocks = array())
    {
        $__internal_ef5fedd4a6d176449b9843aca1afcc253fb99f46ffbe24f7a32b769c9bba509b = $this->env->getExtension("native_profiler");
        $__internal_ef5fedd4a6d176449b9843aca1afcc253fb99f46ffbe24f7a32b769c9bba509b->enter($__internal_ef5fedd4a6d176449b9843aca1afcc253fb99f46ffbe24f7a32b769c9bba509b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        echo " ";
        
        $__internal_ef5fedd4a6d176449b9843aca1afcc253fb99f46ffbe24f7a32b769c9bba509b->leave($__internal_ef5fedd4a6d176449b9843aca1afcc253fb99f46ffbe24f7a32b769c9bba509b_prof);

    }

    // line 33
    public function block_body3($context, array $blocks = array())
    {
        $__internal_e05fcf3c4df976ea03b3481b4499ec9907536499fcdda505b4911e2b42159cd0 = $this->env->getExtension("native_profiler");
        $__internal_e05fcf3c4df976ea03b3481b4499ec9907536499fcdda505b4911e2b42159cd0->enter($__internal_e05fcf3c4df976ea03b3481b4499ec9907536499fcdda505b4911e2b42159cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

        echo " ";
        
        $__internal_e05fcf3c4df976ea03b3481b4499ec9907536499fcdda505b4911e2b42159cd0->leave($__internal_e05fcf3c4df976ea03b3481b4499ec9907536499fcdda505b4911e2b42159cd0_prof);

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
\t\t\t<div class=\"col-md-4 menu-left\">
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
