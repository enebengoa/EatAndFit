<?php

/* @User/Foro/add.html.twig */
class __TwigTemplate_a8c4f6e4f880cf53de67d3db171e9ff4f420c717216abbf7e5d1eebe815a2375 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/Foro/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34d54838d51ba351920e2c76925c16a23fd86f1ff858785f7ce3654731fecaa3 = $this->env->getExtension("native_profiler");
        $__internal_34d54838d51ba351920e2c76925c16a23fd86f1ff858785f7ce3654731fecaa3->enter($__internal_34d54838d51ba351920e2c76925c16a23fd86f1ff858785f7ce3654731fecaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Foro/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d54838d51ba351920e2c76925c16a23fd86f1ff858785f7ce3654731fecaa3->leave($__internal_34d54838d51ba351920e2c76925c16a23fd86f1ff858785f7ce3654731fecaa3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc733b064c418b83b95b9dce0634a97c6eb80265f2d8ada5c6e1a9ab67e43224 = $this->env->getExtension("native_profiler");
        $__internal_cc733b064c418b83b95b9dce0634a97c6eb80265f2d8ada5c6e1a9ab67e43224->enter($__internal_cc733b064c418b83b95b9dce0634a97c6eb80265f2d8ada5c6e1a9ab67e43224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir  nuevo foro ";
        
        $__internal_cc733b064c418b83b95b9dce0634a97c6eb80265f2d8ada5c6e1a9ab67e43224->leave($__internal_cc733b064c418b83b95b9dce0634a97c6eb80265f2d8ada5c6e1a9ab67e43224_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_505845e9bd7e79eab6abe86ded95b742d5de12fd92cb7723f97e9e78f72635e0 = $this->env->getExtension("native_profiler");
        $__internal_505845e9bd7e79eab6abe86ded95b742d5de12fd92cb7723f97e9e78f72635e0->enter($__internal_505845e9bd7e79eab6abe86ded95b742d5de12fd92cb7723f97e9e78f72635e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_505845e9bd7e79eab6abe86ded95b742d5de12fd92cb7723f97e9e78f72635e0->leave($__internal_505845e9bd7e79eab6abe86ded95b742d5de12fd92cb7723f97e9e78f72635e0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c53d3bd00cba9a93023e8263fb03b9008c3ab6dc4c0f48197501b1b4cb2f32a = $this->env->getExtension("native_profiler");
        $__internal_6c53d3bd00cba9a93023e8263fb03b9008c3ab6dc4c0f48197501b1b4cb2f32a->enter($__internal_6c53d3bd00cba9a93023e8263fb03b9008c3ab6dc4c0f48197501b1b4cb2f32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
              <div class=\"events-top\">
                  <div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("App_user_listForo");
        echo "\">Nuevo foro</a></h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span></span>
                  </div>
                  <div class=\"clearfix\"> </div>
            </div>    
            <div class=\"content-mid\">
                    <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                       ";
        // line 32
        $this->loadTemplate("AdminBundle:TemaForo:form.html.twig", "@User/Foro/add.html.twig", 32)->display($context);
        // line 33
        echo "                                    </div>
                                </div>
                            </div>
                    </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6c53d3bd00cba9a93023e8263fb03b9008c3ab6dc4c0f48197501b1b4cb2f32a->leave($__internal_6c53d3bd00cba9a93023e8263fb03b9008c3ab6dc4c0f48197501b1b4cb2f32a_prof);

    }

    public function getTemplateName()
    {
        return "@User/Foro/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  101 => 32,  81 => 15,  73 => 9,  67 => 8,  58 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseuser.html.twig' %}

{% block title %}Añadir  nuevo foro {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
              <div class=\"events-top\">
                  <div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3><a href=\"{{ path('App_user_listForo') }}\">Nuevo foro</a></h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span></span>
                  </div>
                  <div class=\"clearfix\"> </div>
            </div>    
            <div class=\"content-mid\">
                    <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                       {% include \"AdminBundle:TemaForo:form.html.twig\" %}
                                    </div>
                                </div>
                            </div>
                    </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>
{% endblock %}";
    }
}
