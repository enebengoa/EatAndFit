<?php

/* @User/Utensilio/list.html.twig */
class __TwigTemplate_8c3f279c5e223f7e46e92c93ba73e5b45011d1f16e0d916bdc2a1c61e54f7a65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/Utensilio/list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85ad03e24661b97751696877a66744144c2f343fb6a065ccd68107e9ecc6415a = $this->env->getExtension("native_profiler");
        $__internal_85ad03e24661b97751696877a66744144c2f343fb6a065ccd68107e9ecc6415a->enter($__internal_85ad03e24661b97751696877a66744144c2f343fb6a065ccd68107e9ecc6415a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Utensilio/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85ad03e24661b97751696877a66744144c2f343fb6a065ccd68107e9ecc6415a->leave($__internal_85ad03e24661b97751696877a66744144c2f343fb6a065ccd68107e9ecc6415a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6714ca0923f716086ce6dfc7adbb488ccea3aada45ba17b9e4d9b6b63690bd06 = $this->env->getExtension("native_profiler");
        $__internal_6714ca0923f716086ce6dfc7adbb488ccea3aada45ba17b9e4d9b6b63690bd06->enter($__internal_6714ca0923f716086ce6dfc7adbb488ccea3aada45ba17b9e4d9b6b63690bd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_6714ca0923f716086ce6dfc7adbb488ccea3aada45ba17b9e4d9b6b63690bd06->leave($__internal_6714ca0923f716086ce6dfc7adbb488ccea3aada45ba17b9e4d9b6b63690bd06_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e696e8b1b602473751a19cb33e1d4e55816d2d6f78297102a311e79937af4aab = $this->env->getExtension("native_profiler");
        $__internal_e696e8b1b602473751a19cb33e1d4e55816d2d6f78297102a311e79937af4aab->enter($__internal_e696e8b1b602473751a19cb33e1d4e55816d2d6f78297102a311e79937af4aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_e696e8b1b602473751a19cb33e1d4e55816d2d6f78297102a311e79937af4aab->leave($__internal_e696e8b1b602473751a19cb33e1d4e55816d2d6f78297102a311e79937af4aab_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_41302413928e0ad418c3001547d42d761a0fdc2e2217be0f436cfdac8826e22e = $this->env->getExtension("native_profiler");
        $__internal_41302413928e0ad418c3001547d42d761a0fdc2e2217be0f436cfdac8826e22e->enter($__internal_41302413928e0ad418c3001547d42d761a0fdc2e2217be0f436cfdac8826e22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_41302413928e0ad418c3001547d42d761a0fdc2e2217be0f436cfdac8826e22e->leave($__internal_41302413928e0ad418c3001547d42d761a0fdc2e2217be0f436cfdac8826e22e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0321d2dd5204d6b729a3d1d457de16d3d2308e054ab782cbfcc2adfb1e0b092 = $this->env->getExtension("native_profiler");
        $__internal_c0321d2dd5204d6b729a3d1d457de16d3d2308e054ab782cbfcc2adfb1e0b092->enter($__internal_c0321d2dd5204d6b729a3d1d457de16d3d2308e054ab782cbfcc2adfb1e0b092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<!--content-->
<div class=\"content\">
\t<div class=\"events\">
\t\t<div class=\"container\">
\t\t\t<div class=\"events-top\">
\t\t\t\t<div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h3><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("App_user_showBlog");
        echo "\">Utensilio</a></h3>
\t\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t\t<span>Necesarios para volverse un chef</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 events-right animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["utensilio"]) {
            // line 37
            echo "\t\t\t\t<div class=\"events-bottom\">
\t\t\t\t\t<div class=\"col-md-5 events-bottom1 animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["utensilio"], "imagen", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"img-uten\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7 events-bottom2 animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<h3>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["utensilio"], "nombre", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t\t\t<p>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["utensilio"], "descripcion", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utensilio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t</br>
\t\t\t<div class=\"navigation\">
\t\t\t    ";
        // line 52
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>
</div>



";
        
        $__internal_c0321d2dd5204d6b729a3d1d457de16d3d2308e054ab782cbfcc2adfb1e0b092->leave($__internal_c0321d2dd5204d6b729a3d1d457de16d3d2308e054ab782cbfcc2adfb1e0b092_prof);

    }

    public function getTemplateName()
    {
        return "@User/Utensilio/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 52,  157 => 50,  145 => 44,  140 => 42,  134 => 39,  130 => 37,  126 => 36,  119 => 32,  114 => 30,  109 => 28,  98 => 20,  90 => 14,  84 => 13,  76 => 10,  70 => 9,  58 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
<div class=\"content\">
\t<div class=\"events\">
\t\t<div class=\"container\">
\t\t\t<div class=\"events-top\">
\t\t\t\t<div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h3><a href=\"{{ path('App_user_showBlog') }}\">Utensilio</a></h3>
\t\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t\t<span>Necesarios para volverse un chef</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 events-right animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_row(form.nombre) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{{form_end(form)}}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% for utensilio in pagination %}
\t\t\t\t<div class=\"events-bottom\">
\t\t\t\t\t<div class=\"col-md-5 events-bottom1 animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<img src=\"{{ asset ('imagenes/'~utensilio.imagen)}}\" alt=\"\" class=\"img-uten\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7 events-bottom2 animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<h3>{{utensilio.nombre}}</h3>
\t\t\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t\t\t<p>{{utensilio.descripcion}}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t</br>
\t\t\t<div class=\"navigation\">
\t\t\t    {{ knp_pagination_render(pagination) }}
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>
</div>



{% endblock %}";
    }
}
