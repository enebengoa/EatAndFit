<?php

/* @User/Contacto/contacto.html.twig */
class __TwigTemplate_1d2ba9172dadac3ff71d3e86a5f0ca68f9a412fb16aea6fb4aa37f5dc24264d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/Contacto/contacto.html.twig", 1);
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
        $__internal_ac2a85641e65ae83a361e3096603f696bcf9a5bb14f1f44989f6eaca694af9fa = $this->env->getExtension("native_profiler");
        $__internal_ac2a85641e65ae83a361e3096603f696bcf9a5bb14f1f44989f6eaca694af9fa->enter($__internal_ac2a85641e65ae83a361e3096603f696bcf9a5bb14f1f44989f6eaca694af9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Contacto/contacto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac2a85641e65ae83a361e3096603f696bcf9a5bb14f1f44989f6eaca694af9fa->leave($__internal_ac2a85641e65ae83a361e3096603f696bcf9a5bb14f1f44989f6eaca694af9fa_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a66d2da6a74115bc6a8870f8b5ebda340c33d31bfbb3990493717ef8150ef8c = $this->env->getExtension("native_profiler");
        $__internal_6a66d2da6a74115bc6a8870f8b5ebda340c33d31bfbb3990493717ef8150ef8c->enter($__internal_6a66d2da6a74115bc6a8870f8b5ebda340c33d31bfbb3990493717ef8150ef8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_6a66d2da6a74115bc6a8870f8b5ebda340c33d31bfbb3990493717ef8150ef8c->leave($__internal_6a66d2da6a74115bc6a8870f8b5ebda340c33d31bfbb3990493717ef8150ef8c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_396a20e4a3cb701e101688eeb5776722c8250650816d86ca8723a41d40812092 = $this->env->getExtension("native_profiler");
        $__internal_396a20e4a3cb701e101688eeb5776722c8250650816d86ca8723a41d40812092->enter($__internal_396a20e4a3cb701e101688eeb5776722c8250650816d86ca8723a41d40812092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_396a20e4a3cb701e101688eeb5776722c8250650816d86ca8723a41d40812092->leave($__internal_396a20e4a3cb701e101688eeb5776722c8250650816d86ca8723a41d40812092_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_f95a4eeafb68e5e3ea96564966813a5d03773f0fd3b14630d70f747e7521843b = $this->env->getExtension("native_profiler");
        $__internal_f95a4eeafb68e5e3ea96564966813a5d03773f0fd3b14630d70f747e7521843b->enter($__internal_f95a4eeafb68e5e3ea96564966813a5d03773f0fd3b14630d70f747e7521843b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_f95a4eeafb68e5e3ea96564966813a5d03773f0fd3b14630d70f747e7521843b->leave($__internal_f95a4eeafb68e5e3ea96564966813a5d03773f0fd3b14630d70f747e7521843b_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccfb8f37ea93e208a01e251bcc406e7272b02550482a54861d4025bf35b8912d = $this->env->getExtension("native_profiler");
        $__internal_ccfb8f37ea93e208a01e251bcc406e7272b02550482a54861d4025bf35b8912d->enter($__internal_ccfb8f37ea93e208a01e251bcc406e7272b02550482a54861d4025bf35b8912d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<!--content-->
\t<div class=\"contact\">
\t\t<div class=\"container\">
\t\t<div class=\"menu-top\">
\t\t\t\t<div class=\"col-md-4 menu-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h3>Contacto</h3>
\t\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t\t<span>Eneko Bengoa San Sebastián</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t<div class=\"contact-top\">
\t\t\t<div class=\"col-md-5 contact-map\">
\t\t\t<h5>Google Map</h5>
\t\t\t<div class=\"map animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46453.28084422356!2d-2.008902592688209!3d43.30734976716625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51affe3b68fe15%3A0xe43ec55994864649!2zU2FuIFNlYmFzdGnDoW4sIEd1aXDDunpjb2E!5e0!3m2!1ses!2ses!4v1475505537671\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t\t\t</div>
\t\t\t<div class=\"address\">
\t\t\t\t\t      <h4>Información</h4>
\t\t\t\t\t      <p> Eneko Bengoa </p>
\t\t\t\t\t\t  <p>ph : +34 680 43 44</p>
\t\t\t\t\t\t  <p>Email : <a href=\"mailto:enebengoa@hotmail.com\">enebengoa@hotmail.com</a></p>
\t\t\t\t\t </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-7 contact-para animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t<h5>Formulario</h5>
\t\t\t";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t<div class=\"grid-contact\">
\t\t\t\t\t<div class=\"col-md-6 contact-grid\">
\t\t\t\t\t<p class=\"your-para\">Nombre </p>
\t\t\t\t\t        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t\t\t\t        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 contact-grid\">
\t\t\t\t\t\t<p class=\"your-para\">Email</p>
\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t\t        \t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid-contact\">
\t\t\t\t\t<div class=\"col-md-12 contact-grid\">
\t\t\t\t\t\t<p class=\"your-para\">Motivo</p>
\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'widget');
        echo "
\t\t\t        \t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid-contact\">
\t\t\t\t\t<div class=\"col-md-12 contact-grid\">
\t\t\t\t\t\t<p class=\"your-para\">Mensaje</p>
\t\t\t\t        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
\t\t\t\t        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'errors');
        echo "
\t\t\t\t     </div>
\t\t\t\t     <div class=\"clearfix\"> </div>
\t\t\t    </div>
\t\t\t\t\t<div class=\"send\">
\t\t\t\t\t\t";
        // line 72
        echo "\t\t\t\t\t    <div style=\"display:none\">
\t\t\t\t\t        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t    </div>
\t\t\t\t\t    
\t\t\t\t\t    <input type=\"submit\" value=\"Enviar\">
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t</div>
\t</div>
";
        
        $__internal_ccfb8f37ea93e208a01e251bcc406e7272b02550482a54861d4025bf35b8912d->leave($__internal_ccfb8f37ea93e208a01e251bcc406e7272b02550482a54861d4025bf35b8912d_prof);

    }

    public function getTemplateName()
    {
        return "@User/Contacto/contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 79,  179 => 73,  176 => 72,  168 => 66,  164 => 65,  154 => 58,  150 => 57,  140 => 50,  136 => 49,  129 => 45,  125 => 44,  118 => 40,  90 => 14,  84 => 13,  76 => 10,  70 => 9,  58 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
\t<div class=\"contact\">
\t\t<div class=\"container\">
\t\t<div class=\"menu-top\">
\t\t\t\t<div class=\"col-md-4 menu-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h3>Contacto</h3>
\t\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t\t<span>Eneko Bengoa San Sebastián</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t<div class=\"contact-top\">
\t\t\t<div class=\"col-md-5 contact-map\">
\t\t\t<h5>Google Map</h5>
\t\t\t<div class=\"map animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46453.28084422356!2d-2.008902592688209!3d43.30734976716625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51affe3b68fe15%3A0xe43ec55994864649!2zU2FuIFNlYmFzdGnDoW4sIEd1aXDDunpjb2E!5e0!3m2!1ses!2ses!4v1475505537671\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t\t\t</div>
\t\t\t<div class=\"address\">
\t\t\t\t\t      <h4>Información</h4>
\t\t\t\t\t      <p> Eneko Bengoa </p>
\t\t\t\t\t\t  <p>ph : +34 680 43 44</p>
\t\t\t\t\t\t  <p>Email : <a href=\"mailto:enebengoa@hotmail.com\">enebengoa@hotmail.com</a></p>
\t\t\t\t\t </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-7 contact-para animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t<h5>Formulario</h5>
\t\t\t{{ form_start(form) }}
\t\t\t\t<div class=\"grid-contact\">
\t\t\t\t\t<div class=\"col-md-6 contact-grid\">
\t\t\t\t\t<p class=\"your-para\">Nombre </p>
\t\t\t\t\t        {{ form_widget(form.name) }}
\t\t\t\t\t        {{ form_errors(form.name) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 contact-grid\">
\t\t\t\t\t\t<p class=\"your-para\">Email</p>
\t\t\t\t\t\t\t{{ form_widget(form.email) }}
\t\t\t        \t\t{{ form_errors(form.email) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid-contact\">
\t\t\t\t\t<div class=\"col-md-12 contact-grid\">
\t\t\t\t\t\t<p class=\"your-para\">Motivo</p>
\t\t\t\t\t\t\t{{ form_widget(form.subject) }}
\t\t\t        \t\t{{ form_errors(form.subject) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid-contact\">
\t\t\t\t\t<div class=\"col-md-12 contact-grid\">
\t\t\t\t\t\t<p class=\"your-para\">Mensaje</p>
\t\t\t\t        {{ form_widget(form.message) }}
\t\t\t\t        {{ form_errors(form.message) }}
\t\t\t\t     </div>
\t\t\t\t     <div class=\"clearfix\"> </div>
\t\t\t    </div>
\t\t\t\t\t<div class=\"send\">
\t\t\t\t\t\t{# Render CSRF token etc .#}
\t\t\t\t\t    <div style=\"display:none\">
\t\t\t\t\t        {{ form_rest(form) }}
\t\t\t\t\t    </div>
\t\t\t\t\t    
\t\t\t\t\t    <input type=\"submit\" value=\"Enviar\">
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t{{ form_end(form) }}\t\t\t
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t</div>
\t</div>
{% endblock %}";
    }
}
