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
        $__internal_31f6f7ac097e5103b1567f1acd9c203ded5c29cc8f082380aacab3e80a975207 = $this->env->getExtension("native_profiler");
        $__internal_31f6f7ac097e5103b1567f1acd9c203ded5c29cc8f082380aacab3e80a975207->enter($__internal_31f6f7ac097e5103b1567f1acd9c203ded5c29cc8f082380aacab3e80a975207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f6f7ac097e5103b1567f1acd9c203ded5c29cc8f082380aacab3e80a975207->leave($__internal_31f6f7ac097e5103b1567f1acd9c203ded5c29cc8f082380aacab3e80a975207_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17a84fa197fe2dd7c4921b257795bdc42370133563daea26dc10794a89038023 = $this->env->getExtension("native_profiler");
        $__internal_17a84fa197fe2dd7c4921b257795bdc42370133563daea26dc10794a89038023->enter($__internal_17a84fa197fe2dd7c4921b257795bdc42370133563daea26dc10794a89038023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_17a84fa197fe2dd7c4921b257795bdc42370133563daea26dc10794a89038023->leave($__internal_17a84fa197fe2dd7c4921b257795bdc42370133563daea26dc10794a89038023_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4103365834e1a71756a6f8a37c9a39b192ffbf3286644035f541c42f58182acb = $this->env->getExtension("native_profiler");
        $__internal_4103365834e1a71756a6f8a37c9a39b192ffbf3286644035f541c42f58182acb->enter($__internal_4103365834e1a71756a6f8a37c9a39b192ffbf3286644035f541c42f58182acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_4103365834e1a71756a6f8a37c9a39b192ffbf3286644035f541c42f58182acb->leave($__internal_4103365834e1a71756a6f8a37c9a39b192ffbf3286644035f541c42f58182acb_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_810215988db49fe7a9926ea70df6043814b2207e8bac29d8568a3cb29c62c54d = $this->env->getExtension("native_profiler");
        $__internal_810215988db49fe7a9926ea70df6043814b2207e8bac29d8568a3cb29c62c54d->enter($__internal_810215988db49fe7a9926ea70df6043814b2207e8bac29d8568a3cb29c62c54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_810215988db49fe7a9926ea70df6043814b2207e8bac29d8568a3cb29c62c54d->leave($__internal_810215988db49fe7a9926ea70df6043814b2207e8bac29d8568a3cb29c62c54d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_44e8c2d1702917c283c068e9d1393d01890e64fff08fa044b56d9d92d2978f3d = $this->env->getExtension("native_profiler");
        $__internal_44e8c2d1702917c283c068e9d1393d01890e64fff08fa044b56d9d92d2978f3d->enter($__internal_44e8c2d1702917c283c068e9d1393d01890e64fff08fa044b56d9d92d2978f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_44e8c2d1702917c283c068e9d1393d01890e64fff08fa044b56d9d92d2978f3d->leave($__internal_44e8c2d1702917c283c068e9d1393d01890e64fff08fa044b56d9d92d2978f3d_prof);

    }

    // line 22
    public function block_head2($context, array $blocks = array())
    {
        $__internal_67ef788be968765cad20f9d517e4220d9cd18f2ec08710dbeacfe330dfaa8c0f = $this->env->getExtension("native_profiler");
        $__internal_67ef788be968765cad20f9d517e4220d9cd18f2ec08710dbeacfe330dfaa8c0f->enter($__internal_67ef788be968765cad20f9d517e4220d9cd18f2ec08710dbeacfe330dfaa8c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo " ";
        
        $__internal_67ef788be968765cad20f9d517e4220d9cd18f2ec08710dbeacfe330dfaa8c0f->leave($__internal_67ef788be968765cad20f9d517e4220d9cd18f2ec08710dbeacfe330dfaa8c0f_prof);

    }

    // line 29
    public function block_body2($context, array $blocks = array())
    {
        $__internal_dcf0594c56cef2a0074f053d141d5ecd6b88ee1ca3065c74e2137ef6eed2d9c1 = $this->env->getExtension("native_profiler");
        $__internal_dcf0594c56cef2a0074f053d141d5ecd6b88ee1ca3065c74e2137ef6eed2d9c1->enter($__internal_dcf0594c56cef2a0074f053d141d5ecd6b88ee1ca3065c74e2137ef6eed2d9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        echo " ";
        
        $__internal_dcf0594c56cef2a0074f053d141d5ecd6b88ee1ca3065c74e2137ef6eed2d9c1->leave($__internal_dcf0594c56cef2a0074f053d141d5ecd6b88ee1ca3065c74e2137ef6eed2d9c1_prof);

    }

    // line 33
    public function block_body3($context, array $blocks = array())
    {
        $__internal_eeebe120b3dbbb0de6da668560be90e431769fcce7c6c9c7bd9c2528b30984fb = $this->env->getExtension("native_profiler");
        $__internal_eeebe120b3dbbb0de6da668560be90e431769fcce7c6c9c7bd9c2528b30984fb->enter($__internal_eeebe120b3dbbb0de6da668560be90e431769fcce7c6c9c7bd9c2528b30984fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

        echo " ";
        
        $__internal_eeebe120b3dbbb0de6da668560be90e431769fcce7c6c9c7bd9c2528b30984fb->leave($__internal_eeebe120b3dbbb0de6da668560be90e431769fcce7c6c9c7bd9c2528b30984fb_prof);

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
