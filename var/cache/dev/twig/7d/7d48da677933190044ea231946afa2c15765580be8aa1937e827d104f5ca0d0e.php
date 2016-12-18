<?php

/* AdminBundle:TemaForo:modify.html.twig */
class __TwigTemplate_43fd94382fb78704a78bc05f30dd631179ac7cca142760e04aa589c32ec4f90e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:TemaForo:modify.html.twig", 1);
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
        $__internal_203406af84bbd93bffb29a7cdea37ec57ecd51b697d78e8c2141fff5392b0547 = $this->env->getExtension("native_profiler");
        $__internal_203406af84bbd93bffb29a7cdea37ec57ecd51b697d78e8c2141fff5392b0547->enter($__internal_203406af84bbd93bffb29a7cdea37ec57ecd51b697d78e8c2141fff5392b0547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TemaForo:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_203406af84bbd93bffb29a7cdea37ec57ecd51b697d78e8c2141fff5392b0547->leave($__internal_203406af84bbd93bffb29a7cdea37ec57ecd51b697d78e8c2141fff5392b0547_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f27f056f73634a56ccccee4fbd9c6aea61b837ae78de10b58d2d85e4874ef19b = $this->env->getExtension("native_profiler");
        $__internal_f27f056f73634a56ccccee4fbd9c6aea61b837ae78de10b58d2d85e4874ef19b->enter($__internal_f27f056f73634a56ccccee4fbd9c6aea61b837ae78de10b58d2d85e4874ef19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar foro ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_f27f056f73634a56ccccee4fbd9c6aea61b837ae78de10b58d2d85e4874ef19b->leave($__internal_f27f056f73634a56ccccee4fbd9c6aea61b837ae78de10b58d2d85e4874ef19b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74bbb26248073cddd58ed8350f2f68ff18c73957f593808cc65494eab98aafc0 = $this->env->getExtension("native_profiler");
        $__internal_74bbb26248073cddd58ed8350f2f68ff18c73957f593808cc65494eab98aafc0->enter($__internal_74bbb26248073cddd58ed8350f2f68ff18c73957f593808cc65494eab98aafc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_74bbb26248073cddd58ed8350f2f68ff18c73957f593808cc65494eab98aafc0->leave($__internal_74bbb26248073cddd58ed8350f2f68ff18c73957f593808cc65494eab98aafc0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_403c95f7121e6619bb359f4be916b7d0cff717b7fd5a0c5d93a229f47f206765 = $this->env->getExtension("native_profiler");
        $__internal_403c95f7121e6619bb359f4be916b7d0cff717b7fd5a0c5d93a229f47f206765->enter($__internal_403c95f7121e6619bb359f4be916b7d0cff717b7fd5a0c5d93a229f47f206765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">FOROS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar foro \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("App_admin_listTemaForo");
        echo "\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        ";
        // line 29
        $this->loadTemplate("AdminBundle:TemaForo:form.html.twig", "AdminBundle:TemaForo:modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_403c95f7121e6619bb359f4be916b7d0cff717b7fd5a0c5d93a229f47f206765->leave($__internal_403c95f7121e6619bb359f4be916b7d0cff717b7fd5a0c5d93a229f47f206765_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TemaForo:modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  99 => 29,  88 => 21,  84 => 20,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Ver/Modificar foro {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">FOROS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar foro \"{{entidad.nombre}}\"
                                            <a href=\"{{ path('App_admin_listTemaForo')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
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
                    </div>
                </div>
        <div>       
{% endblock %}

";
    }
}
