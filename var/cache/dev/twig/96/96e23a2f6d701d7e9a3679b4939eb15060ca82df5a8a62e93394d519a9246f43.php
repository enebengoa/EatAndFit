<?php

/* UserBundle::layout_blog.html.twig */
class __TwigTemplate_35351b200c844e86a995523befae7fb46e1c0935faa6d67b8251e955461d206e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "UserBundle::layout_blog.html.twig", 1);
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
        $__internal_1e96feb6e55307966aa4b69b026e66e0d8d60f2834b33b6553281a096e25d8fa = $this->env->getExtension("native_profiler");
        $__internal_1e96feb6e55307966aa4b69b026e66e0d8d60f2834b33b6553281a096e25d8fa->enter($__internal_1e96feb6e55307966aa4b69b026e66e0d8d60f2834b33b6553281a096e25d8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout_blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e96feb6e55307966aa4b69b026e66e0d8d60f2834b33b6553281a096e25d8fa->leave($__internal_1e96feb6e55307966aa4b69b026e66e0d8d60f2834b33b6553281a096e25d8fa_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b2a6f7befeb589d52eccdab78119093ec252f23333f6791a8bc88ae648c66e8 = $this->env->getExtension("native_profiler");
        $__internal_0b2a6f7befeb589d52eccdab78119093ec252f23333f6791a8bc88ae648c66e8->enter($__internal_0b2a6f7befeb589d52eccdab78119093ec252f23333f6791a8bc88ae648c66e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_0b2a6f7befeb589d52eccdab78119093ec252f23333f6791a8bc88ae648c66e8->leave($__internal_0b2a6f7befeb589d52eccdab78119093ec252f23333f6791a8bc88ae648c66e8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f54f1632a9fd33eb0bdc5af9325a7a7fb91fe6079903a8ced66c117c005dcb6e = $this->env->getExtension("native_profiler");
        $__internal_f54f1632a9fd33eb0bdc5af9325a7a7fb91fe6079903a8ced66c117c005dcb6e->enter($__internal_f54f1632a9fd33eb0bdc5af9325a7a7fb91fe6079903a8ced66c117c005dcb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_f54f1632a9fd33eb0bdc5af9325a7a7fb91fe6079903a8ced66c117c005dcb6e->leave($__internal_f54f1632a9fd33eb0bdc5af9325a7a7fb91fe6079903a8ced66c117c005dcb6e_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_11508c03c2e5c577ae8ba040fbcc13ee4941b9ee2f2d7a1fbc9046ab707c2870 = $this->env->getExtension("native_profiler");
        $__internal_11508c03c2e5c577ae8ba040fbcc13ee4941b9ee2f2d7a1fbc9046ab707c2870->enter($__internal_11508c03c2e5c577ae8ba040fbcc13ee4941b9ee2f2d7a1fbc9046ab707c2870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_11508c03c2e5c577ae8ba040fbcc13ee4941b9ee2f2d7a1fbc9046ab707c2870->leave($__internal_11508c03c2e5c577ae8ba040fbcc13ee4941b9ee2f2d7a1fbc9046ab707c2870_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c92d321dc2adfabdadc85f1125c63ce0192808be86518b6d24dc2f81bfeb5e3 = $this->env->getExtension("native_profiler");
        $__internal_7c92d321dc2adfabdadc85f1125c63ce0192808be86518b6d24dc2f81bfeb5e3->enter($__internal_7c92d321dc2adfabdadc85f1125c63ce0192808be86518b6d24dc2f81bfeb5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t\t\t\t<p><strong>Calorías: </strong> ";
            // line 42
            echo twig_escape_filter($this->env, ($this->getAttribute($context["lastReceta"], "calorias", array()) / $this->getAttribute($context["lastReceta"], "numeroComensales", array())), "html", null, true);
            echo " cal/pers </p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lastReceta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t</div>
</div>

</div>
<!--//content-->

";
        
        $__internal_7c92d321dc2adfabdadc85f1125c63ce0192808be86518b6d24dc2f81bfeb5e3->leave($__internal_7c92d321dc2adfabdadc85f1125c63ce0192808be86518b6d24dc2f81bfeb5e3_prof);

    }

    // line 22
    public function block_head2($context, array $blocks = array())
    {
        $__internal_26b1ced765c84832da908ec72f643da16fafcc68bc358629fafd598cc217f87a = $this->env->getExtension("native_profiler");
        $__internal_26b1ced765c84832da908ec72f643da16fafcc68bc358629fafd598cc217f87a->enter($__internal_26b1ced765c84832da908ec72f643da16fafcc68bc358629fafd598cc217f87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo " ";
        
        $__internal_26b1ced765c84832da908ec72f643da16fafcc68bc358629fafd598cc217f87a->leave($__internal_26b1ced765c84832da908ec72f643da16fafcc68bc358629fafd598cc217f87a_prof);

    }

    // line 29
    public function block_body2($context, array $blocks = array())
    {
        $__internal_23c2a49dc3b3258d12e982e4c82ee4a0bd5100a742d5601de0ff0bf833f2245b = $this->env->getExtension("native_profiler");
        $__internal_23c2a49dc3b3258d12e982e4c82ee4a0bd5100a742d5601de0ff0bf833f2245b->enter($__internal_23c2a49dc3b3258d12e982e4c82ee4a0bd5100a742d5601de0ff0bf833f2245b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        echo " ";
        
        $__internal_23c2a49dc3b3258d12e982e4c82ee4a0bd5100a742d5601de0ff0bf833f2245b->leave($__internal_23c2a49dc3b3258d12e982e4c82ee4a0bd5100a742d5601de0ff0bf833f2245b_prof);

    }

    // line 33
    public function block_body3($context, array $blocks = array())
    {
        $__internal_28e56b035acfdc875235dc45b0e4c94df0877da27faba6017fefcf694f1bc3b8 = $this->env->getExtension("native_profiler");
        $__internal_28e56b035acfdc875235dc45b0e4c94df0877da27faba6017fefcf694f1bc3b8->enter($__internal_28e56b035acfdc875235dc45b0e4c94df0877da27faba6017fefcf694f1bc3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

        echo " ";
        
        $__internal_28e56b035acfdc875235dc45b0e4c94df0877da27faba6017fefcf694f1bc3b8->leave($__internal_28e56b035acfdc875235dc45b0e4c94df0877da27faba6017fefcf694f1bc3b8_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout_blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 33,  186 => 29,  174 => 22,  157 => 47,  145 => 42,  139 => 41,  134 => 39,  131 => 38,  127 => 37,  122 => 34,  120 => 33,  115 => 30,  113 => 29,  103 => 22,  93 => 14,  87 => 13,  79 => 10,  73 => 9,  61 => 4,  51 => 5,  49 => 4,  46 => 3,  40 => 2,  11 => 1,);
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
\t\t\t\t<div class=\"blog-bottom animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<h4>Recetas recientes</h4>\t
\t\t\t\t\t\t{% for lastReceta in lastRecetas %}
\t\t\t\t\t\t\t<div class=\"product-go\">
\t\t\t\t\t\t\t\t<a href=\"single.html\" class=\"fashion\"><img class=\"img-responsive \" src=\"{{ asset ('imagenes/'~lastReceta.imagen)}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t<div class=\"grid-product\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('App_user_showReceta', { 'id': lastReceta.id }) }}\" class=\"elit\">{{lastReceta.nombre}}</a>
\t\t\t\t\t\t\t\t\t<p><strong>Calorías: </strong> {{lastReceta.calorias/lastReceta.numeroComensales}} cal/pers </p>
\t\t\t\t\t\t\t\t\t
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
