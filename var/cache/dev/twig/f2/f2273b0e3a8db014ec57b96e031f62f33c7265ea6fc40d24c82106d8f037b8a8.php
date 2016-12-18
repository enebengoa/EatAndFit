<?php

/* @User/layout_foro.html.twig */
class __TwigTemplate_aa51d8e6c2d89578b700689d4922a9f0a6fe65f01d7b7ee7e7e2ca7a5b6d8d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/layout_foro.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'head2' => array($this, 'block_head2'),
            'body2' => array($this, 'block_body2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c457b4abf7bf76b705ef90b981c429f530a3f9c843eed2f1fec771b51dd97ba8 = $this->env->getExtension("native_profiler");
        $__internal_c457b4abf7bf76b705ef90b981c429f530a3f9c843eed2f1fec771b51dd97ba8->enter($__internal_c457b4abf7bf76b705ef90b981c429f530a3f9c843eed2f1fec771b51dd97ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout_foro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c457b4abf7bf76b705ef90b981c429f530a3f9c843eed2f1fec771b51dd97ba8->leave($__internal_c457b4abf7bf76b705ef90b981c429f530a3f9c843eed2f1fec771b51dd97ba8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c53d52ccd0a6f6dad47273fa6143c37cfae3d29c70738b2f1a8b27cd866b0f42 = $this->env->getExtension("native_profiler");
        $__internal_c53d52ccd0a6f6dad47273fa6143c37cfae3d29c70738b2f1a8b27cd866b0f42->enter($__internal_c53d52ccd0a6f6dad47273fa6143c37cfae3d29c70738b2f1a8b27cd866b0f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_c53d52ccd0a6f6dad47273fa6143c37cfae3d29c70738b2f1a8b27cd866b0f42->leave($__internal_c53d52ccd0a6f6dad47273fa6143c37cfae3d29c70738b2f1a8b27cd866b0f42_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3998d4dfc435f10f1af81f9c1fdeb1bfc66d6a7f70890d14fe07cf33027c5dc = $this->env->getExtension("native_profiler");
        $__internal_e3998d4dfc435f10f1af81f9c1fdeb1bfc66d6a7f70890d14fe07cf33027c5dc->enter($__internal_e3998d4dfc435f10f1af81f9c1fdeb1bfc66d6a7f70890d14fe07cf33027c5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_e3998d4dfc435f10f1af81f9c1fdeb1bfc66d6a7f70890d14fe07cf33027c5dc->leave($__internal_e3998d4dfc435f10f1af81f9c1fdeb1bfc66d6a7f70890d14fe07cf33027c5dc_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe550af267605345da33d94b57d9c6ac9cc2a71f124be080a71fcf0d55d2bd5f = $this->env->getExtension("native_profiler");
        $__internal_fe550af267605345da33d94b57d9c6ac9cc2a71f124be080a71fcf0d55d2bd5f->enter($__internal_fe550af267605345da33d94b57d9c6ac9cc2a71f124be080a71fcf0d55d2bd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_fe550af267605345da33d94b57d9c6ac9cc2a71f124be080a71fcf0d55d2bd5f->leave($__internal_fe550af267605345da33d94b57d9c6ac9cc2a71f124be080a71fcf0d55d2bd5f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_1058e798b05174e15b05beb90c15957da07955ad5475fbfc0f2928964affa1c6 = $this->env->getExtension("native_profiler");
        $__internal_1058e798b05174e15b05beb90c15957da07955ad5475fbfc0f2928964affa1c6->enter($__internal_1058e798b05174e15b05beb90c15957da07955ad5475fbfc0f2928964affa1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t<div class=\"search-in animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t<h4>Buscar</h4>
\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\" required=\"\" >
\t\t\t\t\t\t<input type=\"submit\" value=\"\" >
\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h4>Categoría</h4>
\t\t\t\t\t<ul class=\"popular\">
\t\t\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tiposReceta"]) ? $context["tiposReceta"] : $this->getContext($context, "tiposReceta")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoReceta"]) {
            // line 44
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_listRecetaTipoReceta", array("id" => $this->getAttribute($context["tipoReceta"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-menu-right\"> </i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipoReceta"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoReceta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h4>Hora</h4>
\t\t\t\t\t<ul class=\"popular\">
\t\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horasIngesta"]) ? $context["horasIngesta"] : $this->getContext($context, "horasIngesta")));
        foreach ($context['_seq'] as $context["_key"] => $context["horaIngesta"]) {
            // line 52
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_listRecetaHoraIngesta", array("id" => $this->getAttribute($context["horaIngesta"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-menu-right\"> </i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaIngesta"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horaIngesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"blog-bottom animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<h4>Recetas recientes</h4>\t
\t\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastRecetas"]) ? $context["lastRecetas"] : $this->getContext($context, "lastRecetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["lastReceta"]) {
            // line 59
            echo "\t\t\t\t\t\t\t<div class=\"product-go\">
\t\t\t\t\t\t\t\t<a href=\"single.html\" class=\"fashion\"><img class=\"img-responsive \" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["lastReceta"], "imagen", array()))), "html", null, true);
            echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t<div class=\"grid-product\">
\t\t\t\t\t\t\t\t\t<a href=\"single.html\" class=\"elit\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["lastReceta"], "nombre", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t<p>";
            // line 63
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
        // line 67
        echo "\t
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t</div>
</div>

</div>
<!--//content-->

";
        
        $__internal_1058e798b05174e15b05beb90c15957da07955ad5475fbfc0f2928964affa1c6->leave($__internal_1058e798b05174e15b05beb90c15957da07955ad5475fbfc0f2928964affa1c6_prof);

    }

    // line 22
    public function block_head2($context, array $blocks = array())
    {
        $__internal_1ff6d02fdda6b9fdc54f4fd6cc7128c9d1a8f8315d2cd97516ac9a2657fa925d = $this->env->getExtension("native_profiler");
        $__internal_1ff6d02fdda6b9fdc54f4fd6cc7128c9d1a8f8315d2cd97516ac9a2657fa925d->enter($__internal_1ff6d02fdda6b9fdc54f4fd6cc7128c9d1a8f8315d2cd97516ac9a2657fa925d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo " ";
        
        $__internal_1ff6d02fdda6b9fdc54f4fd6cc7128c9d1a8f8315d2cd97516ac9a2657fa925d->leave($__internal_1ff6d02fdda6b9fdc54f4fd6cc7128c9d1a8f8315d2cd97516ac9a2657fa925d_prof);

    }

    // line 29
    public function block_body2($context, array $blocks = array())
    {
        $__internal_f8e6e8943962453c6631323f30494fe0f63a5f2fc4c9fa94003bc6653a63c613 = $this->env->getExtension("native_profiler");
        $__internal_f8e6e8943962453c6631323f30494fe0f63a5f2fc4c9fa94003bc6653a63c613->enter($__internal_f8e6e8943962453c6631323f30494fe0f63a5f2fc4c9fa94003bc6653a63c613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        echo " ";
        
        $__internal_f8e6e8943962453c6631323f30494fe0f63a5f2fc4c9fa94003bc6653a63c613->leave($__internal_f8e6e8943962453c6631323f30494fe0f63a5f2fc4c9fa94003bc6653a63c613_prof);

    }

    public function getTemplateName()
    {
        return "@User/layout_foro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 29,  218 => 22,  201 => 67,  190 => 63,  186 => 62,  181 => 60,  178 => 59,  174 => 58,  167 => 53,  156 => 52,  152 => 51,  144 => 45,  133 => 44,  129 => 43,  114 => 30,  112 => 29,  102 => 22,  92 => 14,  86 => 13,  78 => 10,  72 => 9,  60 => 4,  50 => 5,  48 => 4,  45 => 3,  39 => 2,  11 => 1,);
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
\t\t\t<div class=\"search-in animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t<h4>Buscar</h4>
\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\" required=\"\" >
\t\t\t\t\t\t<input type=\"submit\" value=\"\" >
\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h4>Categoría</h4>
\t\t\t\t\t<ul class=\"popular\">
\t\t\t\t\t\t{% for tipoReceta in tiposReceta %}
\t\t\t\t\t\t\t<li><a href=\"{{ path('App_user_listRecetaTipoReceta', { 'id': tipoReceta.id }) }}\"><i class=\"glyphicon glyphicon-menu-right\"> </i>{{tipoReceta.nombre}}</a></li>
\t\t\t\t\t\t{% endfor %}\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h4>Hora</h4>
\t\t\t\t\t<ul class=\"popular\">
\t\t\t\t\t\t{% for horaIngesta in horasIngesta %}
\t\t\t\t\t\t\t<li><a href=\"{{ path('App_user_listRecetaHoraIngesta', { 'id': horaIngesta.id }) }}\"><i class=\"glyphicon glyphicon-menu-right\"> </i>{{horaIngesta.nombre}}</a></li>
\t\t\t\t\t\t{% endfor %}\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"blog-bottom animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<h4>Recetas recientes</h4>\t
\t\t\t\t\t\t{% for lastReceta in lastRecetas %}
\t\t\t\t\t\t\t<div class=\"product-go\">
\t\t\t\t\t\t\t\t<a href=\"single.html\" class=\"fashion\"><img class=\"img-responsive \" src=\"{{ asset ('imagenes/'~lastReceta.imagen)}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t<div class=\"grid-product\">
\t\t\t\t\t\t\t\t\t<a href=\"single.html\" class=\"elit\">{{lastReceta.nombre}}</a>
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
