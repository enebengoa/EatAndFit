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
        $__internal_9140f0a00bfb312cf653d7fdee451d41f7573f821b3eacd5a06d13d3c693823b = $this->env->getExtension("native_profiler");
        $__internal_9140f0a00bfb312cf653d7fdee451d41f7573f821b3eacd5a06d13d3c693823b->enter($__internal_9140f0a00bfb312cf653d7fdee451d41f7573f821b3eacd5a06d13d3c693823b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout_blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9140f0a00bfb312cf653d7fdee451d41f7573f821b3eacd5a06d13d3c693823b->leave($__internal_9140f0a00bfb312cf653d7fdee451d41f7573f821b3eacd5a06d13d3c693823b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d47b61efb3067d92b46cb0da2931d709d9a7193c17d87c5bd3728cacc7db0f4 = $this->env->getExtension("native_profiler");
        $__internal_4d47b61efb3067d92b46cb0da2931d709d9a7193c17d87c5bd3728cacc7db0f4->enter($__internal_4d47b61efb3067d92b46cb0da2931d709d9a7193c17d87c5bd3728cacc7db0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_4d47b61efb3067d92b46cb0da2931d709d9a7193c17d87c5bd3728cacc7db0f4->leave($__internal_4d47b61efb3067d92b46cb0da2931d709d9a7193c17d87c5bd3728cacc7db0f4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a60b3146388b8c61c3c730f741041aa288b1ed7b1b61a20e53857613737a4ec = $this->env->getExtension("native_profiler");
        $__internal_4a60b3146388b8c61c3c730f741041aa288b1ed7b1b61a20e53857613737a4ec->enter($__internal_4a60b3146388b8c61c3c730f741041aa288b1ed7b1b61a20e53857613737a4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_4a60b3146388b8c61c3c730f741041aa288b1ed7b1b61a20e53857613737a4ec->leave($__internal_4a60b3146388b8c61c3c730f741041aa288b1ed7b1b61a20e53857613737a4ec_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ba0daba16bc4d1a709a153afa541b00c54ff57ba80fbd8bfbea149d605d83dd = $this->env->getExtension("native_profiler");
        $__internal_1ba0daba16bc4d1a709a153afa541b00c54ff57ba80fbd8bfbea149d605d83dd->enter($__internal_1ba0daba16bc4d1a709a153afa541b00c54ff57ba80fbd8bfbea149d605d83dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_1ba0daba16bc4d1a709a153afa541b00c54ff57ba80fbd8bfbea149d605d83dd->leave($__internal_1ba0daba16bc4d1a709a153afa541b00c54ff57ba80fbd8bfbea149d605d83dd_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_a19092d0929a5a85b8f59de60d086484a6351966b48b66444f57690f3c221bf1 = $this->env->getExtension("native_profiler");
        $__internal_a19092d0929a5a85b8f59de60d086484a6351966b48b66444f57690f3c221bf1->enter($__internal_a19092d0929a5a85b8f59de60d086484a6351966b48b66444f57690f3c221bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a19092d0929a5a85b8f59de60d086484a6351966b48b66444f57690f3c221bf1->leave($__internal_a19092d0929a5a85b8f59de60d086484a6351966b48b66444f57690f3c221bf1_prof);

    }

    // line 22
    public function block_head2($context, array $blocks = array())
    {
        $__internal_df950d946f4bfb79da49f2d8a1d4e600b5dfe3de22aedd41b752a0136b1c44bb = $this->env->getExtension("native_profiler");
        $__internal_df950d946f4bfb79da49f2d8a1d4e600b5dfe3de22aedd41b752a0136b1c44bb->enter($__internal_df950d946f4bfb79da49f2d8a1d4e600b5dfe3de22aedd41b752a0136b1c44bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo " ";
        
        $__internal_df950d946f4bfb79da49f2d8a1d4e600b5dfe3de22aedd41b752a0136b1c44bb->leave($__internal_df950d946f4bfb79da49f2d8a1d4e600b5dfe3de22aedd41b752a0136b1c44bb_prof);

    }

    // line 29
    public function block_body2($context, array $blocks = array())
    {
        $__internal_1fc982195a9410cea8dcc61610e8a0f9bd9e6bc2c99efe2342546a7f44bb4b07 = $this->env->getExtension("native_profiler");
        $__internal_1fc982195a9410cea8dcc61610e8a0f9bd9e6bc2c99efe2342546a7f44bb4b07->enter($__internal_1fc982195a9410cea8dcc61610e8a0f9bd9e6bc2c99efe2342546a7f44bb4b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        echo " ";
        
        $__internal_1fc982195a9410cea8dcc61610e8a0f9bd9e6bc2c99efe2342546a7f44bb4b07->leave($__internal_1fc982195a9410cea8dcc61610e8a0f9bd9e6bc2c99efe2342546a7f44bb4b07_prof);

    }

    // line 33
    public function block_body3($context, array $blocks = array())
    {
        $__internal_0790a5c8a0a614cc473558bb8c4af03c5e703c6d176e2345e1c03ca1179d9642 = $this->env->getExtension("native_profiler");
        $__internal_0790a5c8a0a614cc473558bb8c4af03c5e703c6d176e2345e1c03ca1179d9642->enter($__internal_0790a5c8a0a614cc473558bb8c4af03c5e703c6d176e2345e1c03ca1179d9642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

        echo " ";
        
        $__internal_0790a5c8a0a614cc473558bb8c4af03c5e703c6d176e2345e1c03ca1179d9642->leave($__internal_0790a5c8a0a614cc473558bb8c4af03c5e703c6d176e2345e1c03ca1179d9642_prof);

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
