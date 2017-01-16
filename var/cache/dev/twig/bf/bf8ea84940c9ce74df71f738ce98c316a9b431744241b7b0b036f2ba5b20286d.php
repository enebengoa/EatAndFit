<?php

/* UserBundle:Utensilio:list.html.twig */
class __TwigTemplate_bf9cd7329be98e169678181c9957daf6d5ac78d935178722a05ca53baa331438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "UserBundle:Utensilio:list.html.twig", 1);
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
        $__internal_3b6d391bf8bfd72502b8110d81832778f25af103a345575672c4acb7b0b65040 = $this->env->getExtension("native_profiler");
        $__internal_3b6d391bf8bfd72502b8110d81832778f25af103a345575672c4acb7b0b65040->enter($__internal_3b6d391bf8bfd72502b8110d81832778f25af103a345575672c4acb7b0b65040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Utensilio:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b6d391bf8bfd72502b8110d81832778f25af103a345575672c4acb7b0b65040->leave($__internal_3b6d391bf8bfd72502b8110d81832778f25af103a345575672c4acb7b0b65040_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6efae7e2a2b00887f7596bf8e86ce4636711187a0caba6f5360c069dafa87a99 = $this->env->getExtension("native_profiler");
        $__internal_6efae7e2a2b00887f7596bf8e86ce4636711187a0caba6f5360c069dafa87a99->enter($__internal_6efae7e2a2b00887f7596bf8e86ce4636711187a0caba6f5360c069dafa87a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_6efae7e2a2b00887f7596bf8e86ce4636711187a0caba6f5360c069dafa87a99->leave($__internal_6efae7e2a2b00887f7596bf8e86ce4636711187a0caba6f5360c069dafa87a99_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f09ef080ba2d4e71bd5d1df44b44338a57b3e4e6c84313a912f1a99f0eab6f97 = $this->env->getExtension("native_profiler");
        $__internal_f09ef080ba2d4e71bd5d1df44b44338a57b3e4e6c84313a912f1a99f0eab6f97->enter($__internal_f09ef080ba2d4e71bd5d1df44b44338a57b3e4e6c84313a912f1a99f0eab6f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_f09ef080ba2d4e71bd5d1df44b44338a57b3e4e6c84313a912f1a99f0eab6f97->leave($__internal_f09ef080ba2d4e71bd5d1df44b44338a57b3e4e6c84313a912f1a99f0eab6f97_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_4861c6ea7ac085eef25d9a64a8d133f492fca6e3686776879737c4ce79338720 = $this->env->getExtension("native_profiler");
        $__internal_4861c6ea7ac085eef25d9a64a8d133f492fca6e3686776879737c4ce79338720->enter($__internal_4861c6ea7ac085eef25d9a64a8d133f492fca6e3686776879737c4ce79338720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_4861c6ea7ac085eef25d9a64a8d133f492fca6e3686776879737c4ce79338720->leave($__internal_4861c6ea7ac085eef25d9a64a8d133f492fca6e3686776879737c4ce79338720_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f34ee1b22cd42fe54b89aa2115ce99892a32be42d6801b78b8603312634ab53c = $this->env->getExtension("native_profiler");
        $__internal_f34ee1b22cd42fe54b89aa2115ce99892a32be42d6801b78b8603312634ab53c->enter($__internal_f34ee1b22cd42fe54b89aa2115ce99892a32be42d6801b78b8603312634ab53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\" class=\"img-uten\">
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
        
        $__internal_f34ee1b22cd42fe54b89aa2115ce99892a32be42d6801b78b8603312634ab53c->leave($__internal_f34ee1b22cd42fe54b89aa2115ce99892a32be42d6801b78b8603312634ab53c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Utensilio:list.html.twig";
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
\t\t\t\t\t\t<img src=\"{{ asset ('imagenes/'~utensilio.imagen)}}\" class=\"img-uten\">
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
