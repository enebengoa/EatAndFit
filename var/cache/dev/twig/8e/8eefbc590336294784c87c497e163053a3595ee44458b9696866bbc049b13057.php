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
        $__internal_83dc80db77ac9b0a8b731550de74e6f4a92a39076c6b915a4da16f1b4d0f57d8 = $this->env->getExtension("native_profiler");
        $__internal_83dc80db77ac9b0a8b731550de74e6f4a92a39076c6b915a4da16f1b4d0f57d8->enter($__internal_83dc80db77ac9b0a8b731550de74e6f4a92a39076c6b915a4da16f1b4d0f57d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout_blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83dc80db77ac9b0a8b731550de74e6f4a92a39076c6b915a4da16f1b4d0f57d8->leave($__internal_83dc80db77ac9b0a8b731550de74e6f4a92a39076c6b915a4da16f1b4d0f57d8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72419653f06c6e679f1667e63df5ebd942b66b16b6b714c1ce21bacc19d01993 = $this->env->getExtension("native_profiler");
        $__internal_72419653f06c6e679f1667e63df5ebd942b66b16b6b714c1ce21bacc19d01993->enter($__internal_72419653f06c6e679f1667e63df5ebd942b66b16b6b714c1ce21bacc19d01993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_72419653f06c6e679f1667e63df5ebd942b66b16b6b714c1ce21bacc19d01993->leave($__internal_72419653f06c6e679f1667e63df5ebd942b66b16b6b714c1ce21bacc19d01993_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bdca6251481b1f6deb25a7f7ae3ef85e7010d070619833af856b4cd1690e792 = $this->env->getExtension("native_profiler");
        $__internal_6bdca6251481b1f6deb25a7f7ae3ef85e7010d070619833af856b4cd1690e792->enter($__internal_6bdca6251481b1f6deb25a7f7ae3ef85e7010d070619833af856b4cd1690e792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_6bdca6251481b1f6deb25a7f7ae3ef85e7010d070619833af856b4cd1690e792->leave($__internal_6bdca6251481b1f6deb25a7f7ae3ef85e7010d070619833af856b4cd1690e792_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_71ff28c5ebd88b45955b1d303c7ee02ea5ab877664de9233d06edcb3478e89af = $this->env->getExtension("native_profiler");
        $__internal_71ff28c5ebd88b45955b1d303c7ee02ea5ab877664de9233d06edcb3478e89af->enter($__internal_71ff28c5ebd88b45955b1d303c7ee02ea5ab877664de9233d06edcb3478e89af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_71ff28c5ebd88b45955b1d303c7ee02ea5ab877664de9233d06edcb3478e89af->leave($__internal_71ff28c5ebd88b45955b1d303c7ee02ea5ab877664de9233d06edcb3478e89af_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_87de3026084c3d3acbb3069cf429ab72eeceb4b7f13a8a66244d2e3dc8299e02 = $this->env->getExtension("native_profiler");
        $__internal_87de3026084c3d3acbb3069cf429ab72eeceb4b7f13a8a66244d2e3dc8299e02->enter($__internal_87de3026084c3d3acbb3069cf429ab72eeceb4b7f13a8a66244d2e3dc8299e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_87de3026084c3d3acbb3069cf429ab72eeceb4b7f13a8a66244d2e3dc8299e02->leave($__internal_87de3026084c3d3acbb3069cf429ab72eeceb4b7f13a8a66244d2e3dc8299e02_prof);

    }

    // line 22
    public function block_head2($context, array $blocks = array())
    {
        $__internal_ce9e53c868fbdf78976d753a67b8b17f791ec9919fbdb09810a38920099b484e = $this->env->getExtension("native_profiler");
        $__internal_ce9e53c868fbdf78976d753a67b8b17f791ec9919fbdb09810a38920099b484e->enter($__internal_ce9e53c868fbdf78976d753a67b8b17f791ec9919fbdb09810a38920099b484e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo " ";
        
        $__internal_ce9e53c868fbdf78976d753a67b8b17f791ec9919fbdb09810a38920099b484e->leave($__internal_ce9e53c868fbdf78976d753a67b8b17f791ec9919fbdb09810a38920099b484e_prof);

    }

    // line 29
    public function block_body2($context, array $blocks = array())
    {
        $__internal_6f71dc683237da714a1144305f052a8c69c19f66fbb012ea39e98ee8f60bdd0f = $this->env->getExtension("native_profiler");
        $__internal_6f71dc683237da714a1144305f052a8c69c19f66fbb012ea39e98ee8f60bdd0f->enter($__internal_6f71dc683237da714a1144305f052a8c69c19f66fbb012ea39e98ee8f60bdd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        echo " ";
        
        $__internal_6f71dc683237da714a1144305f052a8c69c19f66fbb012ea39e98ee8f60bdd0f->leave($__internal_6f71dc683237da714a1144305f052a8c69c19f66fbb012ea39e98ee8f60bdd0f_prof);

    }

    // line 33
    public function block_body3($context, array $blocks = array())
    {
        $__internal_58ed7032725232e010efae55eb410150e854445c98c62c383d9db15fb27f0328 = $this->env->getExtension("native_profiler");
        $__internal_58ed7032725232e010efae55eb410150e854445c98c62c383d9db15fb27f0328->enter($__internal_58ed7032725232e010efae55eb410150e854445c98c62c383d9db15fb27f0328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

        echo " ";
        
        $__internal_58ed7032725232e010efae55eb410150e854445c98c62c383d9db15fb27f0328->leave($__internal_58ed7032725232e010efae55eb410150e854445c98c62c383d9db15fb27f0328_prof);

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
