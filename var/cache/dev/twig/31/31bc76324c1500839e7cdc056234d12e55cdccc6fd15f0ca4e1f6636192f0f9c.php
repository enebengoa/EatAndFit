<?php

/* UserBundle::layout_menu.html.twig */
class __TwigTemplate_1a081a65dd9367bb65d59968a915f9a2ef4a880b6b1b63d3cbdbf9d59c625045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "UserBundle::layout_menu.html.twig", 1);
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
        $__internal_67f89fe0655f0adfa59d377d3f2679a1efd9ccf903927135bc0826986609331d = $this->env->getExtension("native_profiler");
        $__internal_67f89fe0655f0adfa59d377d3f2679a1efd9ccf903927135bc0826986609331d->enter($__internal_67f89fe0655f0adfa59d377d3f2679a1efd9ccf903927135bc0826986609331d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67f89fe0655f0adfa59d377d3f2679a1efd9ccf903927135bc0826986609331d->leave($__internal_67f89fe0655f0adfa59d377d3f2679a1efd9ccf903927135bc0826986609331d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1de36158f3e142d66b8a51598cdb9980cbf67546f46fb440e8116fc85baf7c90 = $this->env->getExtension("native_profiler");
        $__internal_1de36158f3e142d66b8a51598cdb9980cbf67546f46fb440e8116fc85baf7c90->enter($__internal_1de36158f3e142d66b8a51598cdb9980cbf67546f46fb440e8116fc85baf7c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_1de36158f3e142d66b8a51598cdb9980cbf67546f46fb440e8116fc85baf7c90->leave($__internal_1de36158f3e142d66b8a51598cdb9980cbf67546f46fb440e8116fc85baf7c90_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_69cb62535ffd6a2b288a3c116282caacac57c9c2e6bac5f07fdc4ca3ff39060e = $this->env->getExtension("native_profiler");
        $__internal_69cb62535ffd6a2b288a3c116282caacac57c9c2e6bac5f07fdc4ca3ff39060e->enter($__internal_69cb62535ffd6a2b288a3c116282caacac57c9c2e6bac5f07fdc4ca3ff39060e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_69cb62535ffd6a2b288a3c116282caacac57c9c2e6bac5f07fdc4ca3ff39060e->leave($__internal_69cb62535ffd6a2b288a3c116282caacac57c9c2e6bac5f07fdc4ca3ff39060e_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_e03fd41472b055748723862cfae2ea6ac557d6221df97961712033d1f8f7d6b0 = $this->env->getExtension("native_profiler");
        $__internal_e03fd41472b055748723862cfae2ea6ac557d6221df97961712033d1f8f7d6b0->enter($__internal_e03fd41472b055748723862cfae2ea6ac557d6221df97961712033d1f8f7d6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_e03fd41472b055748723862cfae2ea6ac557d6221df97961712033d1f8f7d6b0->leave($__internal_e03fd41472b055748723862cfae2ea6ac557d6221df97961712033d1f8f7d6b0_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_834059b9a3126b0f7d6c0422fa7a1d93ff03e2f12b96008099ef3176b6310f90 = $this->env->getExtension("native_profiler");
        $__internal_834059b9a3126b0f7d6c0422fa7a1d93ff03e2f12b96008099ef3176b6310f90->enter($__internal_834059b9a3126b0f7d6c0422fa7a1d93ff03e2f12b96008099ef3176b6310f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "


<!--content-->
<div class=\"blog\">
\t<div class=\"container\">
\t\t<div class=\"menu-top\">
\t\t\t<div class=\"col-md-8 menu-left\">
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
        
        $__internal_834059b9a3126b0f7d6c0422fa7a1d93ff03e2f12b96008099ef3176b6310f90->leave($__internal_834059b9a3126b0f7d6c0422fa7a1d93ff03e2f12b96008099ef3176b6310f90_prof);

    }

    // line 22
    public function block_head2($context, array $blocks = array())
    {
        $__internal_fe7b50170f109aa04c5b6886782ff23905535bd9065f266d1978fd1b1e437c96 = $this->env->getExtension("native_profiler");
        $__internal_fe7b50170f109aa04c5b6886782ff23905535bd9065f266d1978fd1b1e437c96->enter($__internal_fe7b50170f109aa04c5b6886782ff23905535bd9065f266d1978fd1b1e437c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo " ";
        
        $__internal_fe7b50170f109aa04c5b6886782ff23905535bd9065f266d1978fd1b1e437c96->leave($__internal_fe7b50170f109aa04c5b6886782ff23905535bd9065f266d1978fd1b1e437c96_prof);

    }

    // line 29
    public function block_body2($context, array $blocks = array())
    {
        $__internal_8061a815d6c52cfea756ff4f3984067d747a0210c7983bbfcf6213d9ac46b6ad = $this->env->getExtension("native_profiler");
        $__internal_8061a815d6c52cfea756ff4f3984067d747a0210c7983bbfcf6213d9ac46b6ad->enter($__internal_8061a815d6c52cfea756ff4f3984067d747a0210c7983bbfcf6213d9ac46b6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        echo " ";
        
        $__internal_8061a815d6c52cfea756ff4f3984067d747a0210c7983bbfcf6213d9ac46b6ad->leave($__internal_8061a815d6c52cfea756ff4f3984067d747a0210c7983bbfcf6213d9ac46b6ad_prof);

    }

    // line 33
    public function block_body3($context, array $blocks = array())
    {
        $__internal_f83d93a9ef0a2fc26ed9d88aa748122a9aac4ec2f4bcbebc507400a8bf3ec63d = $this->env->getExtension("native_profiler");
        $__internal_f83d93a9ef0a2fc26ed9d88aa748122a9aac4ec2f4bcbebc507400a8bf3ec63d->enter($__internal_f83d93a9ef0a2fc26ed9d88aa748122a9aac4ec2f4bcbebc507400a8bf3ec63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

        echo " ";
        
        $__internal_f83d93a9ef0a2fc26ed9d88aa748122a9aac4ec2f4bcbebc507400a8bf3ec63d->leave($__internal_f83d93a9ef0a2fc26ed9d88aa748122a9aac4ec2f4bcbebc507400a8bf3ec63d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout_menu.html.twig";
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
\t\t\t<div class=\"col-md-8 menu-left\">
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
