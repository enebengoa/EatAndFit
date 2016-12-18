<?php

/* AdminBundle:HoraIngesta:add.html.twig */
class __TwigTemplate_2c933b4abc0af07dcefb6553c0f656a2b283ccaf76db841b9df1e12dad322ab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:HoraIngesta:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_277ac25fd72d4799a03543d1c45528fce0753e2d9613657743ee618f3cdafdd3 = $this->env->getExtension("native_profiler");
        $__internal_277ac25fd72d4799a03543d1c45528fce0753e2d9613657743ee618f3cdafdd3->enter($__internal_277ac25fd72d4799a03543d1c45528fce0753e2d9613657743ee618f3cdafdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:HoraIngesta:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_277ac25fd72d4799a03543d1c45528fce0753e2d9613657743ee618f3cdafdd3->leave($__internal_277ac25fd72d4799a03543d1c45528fce0753e2d9613657743ee618f3cdafdd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ded2686b53a15c11920ca473f5164f5bba0a5ddca81689f29e04d0920ff62d49 = $this->env->getExtension("native_profiler");
        $__internal_ded2686b53a15c11920ca473f5164f5bba0a5ddca81689f29e04d0920ff62d49->enter($__internal_ded2686b53a15c11920ca473f5164f5bba0a5ddca81689f29e04d0920ff62d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir hora de ingesta ";
        
        $__internal_ded2686b53a15c11920ca473f5164f5bba0a5ddca81689f29e04d0920ff62d49->leave($__internal_ded2686b53a15c11920ca473f5164f5bba0a5ddca81689f29e04d0920ff62d49_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4b71618949c944b0119c6f036472b004ed9cb0f056e7d9cb4576fb98e132f8d = $this->env->getExtension("native_profiler");
        $__internal_f4b71618949c944b0119c6f036472b004ed9cb0f056e7d9cb4576fb98e132f8d->enter($__internal_f4b71618949c944b0119c6f036472b004ed9cb0f056e7d9cb4576fb98e132f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_f4b71618949c944b0119c6f036472b004ed9cb0f056e7d9cb4576fb98e132f8d->leave($__internal_f4b71618949c944b0119c6f036472b004ed9cb0f056e7d9cb4576fb98e132f8d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_37bcde526015825a78583c945da01afd73e007ebbb35c426971a44a445ce1d94 = $this->env->getExtension("native_profiler");
        $__internal_37bcde526015825a78583c945da01afd73e007ebbb35c426971a44a445ce1d94->enter($__internal_37bcde526015825a78583c945da01afd73e007ebbb35c426971a44a445ce1d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">HORAS DE INGESTA</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva hora de ingesta
                                            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("App_admin_listHoraIngesta");
        echo "\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                       ";
        // line 30
        $this->loadTemplate("AdminBundle:HoraIngesta:form.html.twig", "AdminBundle:HoraIngesta:add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_37bcde526015825a78583c945da01afd73e007ebbb35c426971a44a445ce1d94->leave($__internal_37bcde526015825a78583c945da01afd73e007ebbb35c426971a44a445ce1d94_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:HoraIngesta:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  99 => 30,  88 => 22,  73 => 9,  67 => 8,  58 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Añadir hora de ingesta {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">HORAS DE INGESTA</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva hora de ingesta
                                            <a href=\"{{ path('App_admin_listHoraIngesta')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                       {% include \"AdminBundle:HoraIngesta:form.html.twig\" %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
{% endblock %}";
    }
}
