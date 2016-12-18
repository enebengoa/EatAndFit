<?php

/* @User/layout_blog.html.twig */
class __TwigTemplate_f5ca70a8084b05b83fdf788e2df094910295561da4f3c9283cb7193869af481f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/layout_blog.html.twig", 1);
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
        $__internal_212993e2e9c1faf005f4ed8703a968cce0da1a90cf5f67bfacf33f98d7f0d43a = $this->env->getExtension("native_profiler");
        $__internal_212993e2e9c1faf005f4ed8703a968cce0da1a90cf5f67bfacf33f98d7f0d43a->enter($__internal_212993e2e9c1faf005f4ed8703a968cce0da1a90cf5f67bfacf33f98d7f0d43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout_blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_212993e2e9c1faf005f4ed8703a968cce0da1a90cf5f67bfacf33f98d7f0d43a->leave($__internal_212993e2e9c1faf005f4ed8703a968cce0da1a90cf5f67bfacf33f98d7f0d43a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c4611b0c7b8a54a41685bb03683d01cd3263f2c3a7ef3c42dfb5591e39fd0cc = $this->env->getExtension("native_profiler");
        $__internal_1c4611b0c7b8a54a41685bb03683d01cd3263f2c3a7ef3c42dfb5591e39fd0cc->enter($__internal_1c4611b0c7b8a54a41685bb03683d01cd3263f2c3a7ef3c42dfb5591e39fd0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_1c4611b0c7b8a54a41685bb03683d01cd3263f2c3a7ef3c42dfb5591e39fd0cc->leave($__internal_1c4611b0c7b8a54a41685bb03683d01cd3263f2c3a7ef3c42dfb5591e39fd0cc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_412dfdacc0ca08799013a2100feb0d208d0e2d8e21d93ac0db9d90935fb7743b = $this->env->getExtension("native_profiler");
        $__internal_412dfdacc0ca08799013a2100feb0d208d0e2d8e21d93ac0db9d90935fb7743b->enter($__internal_412dfdacc0ca08799013a2100feb0d208d0e2d8e21d93ac0db9d90935fb7743b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_412dfdacc0ca08799013a2100feb0d208d0e2d8e21d93ac0db9d90935fb7743b->leave($__internal_412dfdacc0ca08799013a2100feb0d208d0e2d8e21d93ac0db9d90935fb7743b_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_14ebce390409b168906c49e8b525634275c35921bbedccabff941f1b54b83476 = $this->env->getExtension("native_profiler");
        $__internal_14ebce390409b168906c49e8b525634275c35921bbedccabff941f1b54b83476->enter($__internal_14ebce390409b168906c49e8b525634275c35921bbedccabff941f1b54b83476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_14ebce390409b168906c49e8b525634275c35921bbedccabff941f1b54b83476->leave($__internal_14ebce390409b168906c49e8b525634275c35921bbedccabff941f1b54b83476_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f28e5a9b5ead93b5be25d4c02044447505e88a4ff02348c175a728604a1d5e64 = $this->env->getExtension("native_profiler");
        $__internal_f28e5a9b5ead93b5be25d4c02044447505e88a4ff02348c175a728604a1d5e64->enter($__internal_f28e5a9b5ead93b5be25d4c02044447505e88a4ff02348c175a728604a1d5e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t<div class=\"blog-bottom animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<h4>Recetas recientes</h4>\t
\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastRecetas"]) ? $context["lastRecetas"] : $this->getContext($context, "lastRecetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["lastReceta"]) {
            // line 38
            echo "\t\t\t\t\t\t\t<div class=\"product-go\">
\t\t\t\t\t\t\t\t<a href=\"single.html\" class=\"fashion\"><img class=\"img-responsive \" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["lastReceta"], "imagen", array()))), "html", null, true);
            echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t<div class=\"grid-product\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["lastReceta"], "id", array()))), "html", null, true);
            echo "\" class=\"elit\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lastReceta"], "nombre", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t<p>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["lastReceta"], "descripcion", array(0 => 20), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lastReceta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t</div>
</div>

</div>
<!--//content-->

";
        
        $__internal_f28e5a9b5ead93b5be25d4c02044447505e88a4ff02348c175a728604a1d5e64->leave($__internal_f28e5a9b5ead93b5be25d4c02044447505e88a4ff02348c175a728604a1d5e64_prof);

    }

    // line 22
    public function block_head2($context, array $blocks = array())
    {
        $__internal_e6728383fbfcecd5f61a4664b0c78f12e84f50a070ec59185e480e25cf7d411e = $this->env->getExtension("native_profiler");
        $__internal_e6728383fbfcecd5f61a4664b0c78f12e84f50a070ec59185e480e25cf7d411e->enter($__internal_e6728383fbfcecd5f61a4664b0c78f12e84f50a070ec59185e480e25cf7d411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo " ";
        
        $__internal_e6728383fbfcecd5f61a4664b0c78f12e84f50a070ec59185e480e25cf7d411e->leave($__internal_e6728383fbfcecd5f61a4664b0c78f12e84f50a070ec59185e480e25cf7d411e_prof);

    }

    // line 29
    public function block_body2($context, array $blocks = array())
    {
        $__internal_43f2a28c4064febc8ec98fee1b14545970d44b7ba4ea513cf9765985079f96f7 = $this->env->getExtension("native_profiler");
        $__internal_43f2a28c4064febc8ec98fee1b14545970d44b7ba4ea513cf9765985079f96f7->enter($__internal_43f2a28c4064febc8ec98fee1b14545970d44b7ba4ea513cf9765985079f96f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        echo " ";
        
        $__internal_43f2a28c4064febc8ec98fee1b14545970d44b7ba4ea513cf9765985079f96f7->leave($__internal_43f2a28c4064febc8ec98fee1b14545970d44b7ba4ea513cf9765985079f96f7_prof);

    }

    // line 33
    public function block_body3($context, array $blocks = array())
    {
        $__internal_2a13f2b339566b51ebb7eb3610d3e847563f785e9570ee6274b7a4a1fc5ad72d = $this->env->getExtension("native_profiler");
        $__internal_2a13f2b339566b51ebb7eb3610d3e847563f785e9570ee6274b7a4a1fc5ad72d->enter($__internal_2a13f2b339566b51ebb7eb3610d3e847563f785e9570ee6274b7a4a1fc5ad72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

        echo " ";
        
        $__internal_2a13f2b339566b51ebb7eb3610d3e847563f785e9570ee6274b7a4a1fc5ad72d->leave($__internal_2a13f2b339566b51ebb7eb3610d3e847563f785e9570ee6274b7a4a1fc5ad72d_prof);

    }

    public function getTemplateName()
    {
        return "@User/layout_blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 33,  185 => 29,  173 => 22,  156 => 46,  145 => 42,  139 => 41,  134 => 39,  131 => 38,  127 => 37,  122 => 34,  120 => 33,  115 => 30,  113 => 29,  103 => 22,  93 => 14,  87 => 13,  79 => 10,  73 => 9,  61 => 4,  51 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
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
\t\t\t\t<div class=\"blog-bottom animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<h4>Recetas recientes</h4>\t
\t\t\t\t\t\t{% for lastReceta in lastRecetas %}
\t\t\t\t\t\t\t<div class=\"product-go\">
\t\t\t\t\t\t\t\t<a href=\"single.html\" class=\"fashion\"><img class=\"img-responsive \" src=\"{{ asset ('imagenes/'~lastReceta.imagen)}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t<div class=\"grid-product\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('App_user_showReceta', { 'id': lastReceta.id }) }}\" class=\"elit\">{{lastReceta.nombre}}</a>
\t\t\t\t\t\t\t\t\t<p>{{lastReceta.descripcion(20)}}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}\t
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t</div>
</div>

</div>
<!--//content-->

{% endblock %}";
    }
}
