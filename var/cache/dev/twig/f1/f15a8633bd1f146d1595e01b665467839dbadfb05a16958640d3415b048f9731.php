<?php

/* UserBundle::layout_foro.html.twig */
class __TwigTemplate_52314627d82e7e49ca5856b307daa33585acb9dbc9efe0bc77bdaa7c386f5054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "UserBundle::layout_foro.html.twig", 1);
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
        $__internal_db515ba7008157bef14cccaf51003f9443aad22dde3e392d0824f88416e03ebd = $this->env->getExtension("native_profiler");
        $__internal_db515ba7008157bef14cccaf51003f9443aad22dde3e392d0824f88416e03ebd->enter($__internal_db515ba7008157bef14cccaf51003f9443aad22dde3e392d0824f88416e03ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout_foro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db515ba7008157bef14cccaf51003f9443aad22dde3e392d0824f88416e03ebd->leave($__internal_db515ba7008157bef14cccaf51003f9443aad22dde3e392d0824f88416e03ebd_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcc9bf1141192c70db43cb90f258a80cfa3444947065d75a67d30ef4190103ad = $this->env->getExtension("native_profiler");
        $__internal_bcc9bf1141192c70db43cb90f258a80cfa3444947065d75a67d30ef4190103ad->enter($__internal_bcc9bf1141192c70db43cb90f258a80cfa3444947065d75a67d30ef4190103ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_bcc9bf1141192c70db43cb90f258a80cfa3444947065d75a67d30ef4190103ad->leave($__internal_bcc9bf1141192c70db43cb90f258a80cfa3444947065d75a67d30ef4190103ad_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_75d8f98aac814f45375f19ac98ab6f1e05a660f8624024895b9d013a109435df = $this->env->getExtension("native_profiler");
        $__internal_75d8f98aac814f45375f19ac98ab6f1e05a660f8624024895b9d013a109435df->enter($__internal_75d8f98aac814f45375f19ac98ab6f1e05a660f8624024895b9d013a109435df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_75d8f98aac814f45375f19ac98ab6f1e05a660f8624024895b9d013a109435df->leave($__internal_75d8f98aac814f45375f19ac98ab6f1e05a660f8624024895b9d013a109435df_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_19bb969e7a201f723a62c0151fbffb40680c8b58033f2fa46b3c5ae2c13e255f = $this->env->getExtension("native_profiler");
        $__internal_19bb969e7a201f723a62c0151fbffb40680c8b58033f2fa46b3c5ae2c13e255f->enter($__internal_19bb969e7a201f723a62c0151fbffb40680c8b58033f2fa46b3c5ae2c13e255f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_19bb969e7a201f723a62c0151fbffb40680c8b58033f2fa46b3c5ae2c13e255f->leave($__internal_19bb969e7a201f723a62c0151fbffb40680c8b58033f2fa46b3c5ae2c13e255f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fd45f8cd77cee86085951af42da4400065ed7b68db714a03c3c5fb236f5ceec = $this->env->getExtension("native_profiler");
        $__internal_1fd45f8cd77cee86085951af42da4400065ed7b68db714a03c3c5fb236f5ceec->enter($__internal_1fd45f8cd77cee86085951af42da4400065ed7b68db714a03c3c5fb236f5ceec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1fd45f8cd77cee86085951af42da4400065ed7b68db714a03c3c5fb236f5ceec->leave($__internal_1fd45f8cd77cee86085951af42da4400065ed7b68db714a03c3c5fb236f5ceec_prof);

    }

    // line 22
    public function block_head2($context, array $blocks = array())
    {
        $__internal_5b158c19ad7134a13cc5d83c2b10e0f066d9d45d82b1dc57e2f8a73b7265a9b8 = $this->env->getExtension("native_profiler");
        $__internal_5b158c19ad7134a13cc5d83c2b10e0f066d9d45d82b1dc57e2f8a73b7265a9b8->enter($__internal_5b158c19ad7134a13cc5d83c2b10e0f066d9d45d82b1dc57e2f8a73b7265a9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo " ";
        
        $__internal_5b158c19ad7134a13cc5d83c2b10e0f066d9d45d82b1dc57e2f8a73b7265a9b8->leave($__internal_5b158c19ad7134a13cc5d83c2b10e0f066d9d45d82b1dc57e2f8a73b7265a9b8_prof);

    }

    // line 29
    public function block_body2($context, array $blocks = array())
    {
        $__internal_610fbbd03d063e1e3e7d5430df731e7602fad6e7695bb1b3cc56fb0f74449f9e = $this->env->getExtension("native_profiler");
        $__internal_610fbbd03d063e1e3e7d5430df731e7602fad6e7695bb1b3cc56fb0f74449f9e->enter($__internal_610fbbd03d063e1e3e7d5430df731e7602fad6e7695bb1b3cc56fb0f74449f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        echo " ";
        
        $__internal_610fbbd03d063e1e3e7d5430df731e7602fad6e7695bb1b3cc56fb0f74449f9e->leave($__internal_610fbbd03d063e1e3e7d5430df731e7602fad6e7695bb1b3cc56fb0f74449f9e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout_foro.html.twig";
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