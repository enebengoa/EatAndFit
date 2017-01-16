<?php

/* UserBundle:Blog:menuBlog.html.twig */
class __TwigTemplate_fa97a6e70809c5f0aaa9069472f678f2c33182a3d46cc4ebd6d2633a2f5d0db3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "UserBundle:Blog:menuBlog.html.twig", 1);
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
        $__internal_2b602953e71ba9d289e8e782e3245e3ad24691d73f1659979d87335b8e7e37c8 = $this->env->getExtension("native_profiler");
        $__internal_2b602953e71ba9d289e8e782e3245e3ad24691d73f1659979d87335b8e7e37c8->enter($__internal_2b602953e71ba9d289e8e782e3245e3ad24691d73f1659979d87335b8e7e37c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Blog:menuBlog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b602953e71ba9d289e8e782e3245e3ad24691d73f1659979d87335b8e7e37c8->leave($__internal_2b602953e71ba9d289e8e782e3245e3ad24691d73f1659979d87335b8e7e37c8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30da75e9476d12207ed1a68cdf56caeede2f8882328da4b72cc1b8fd07cbd0b8 = $this->env->getExtension("native_profiler");
        $__internal_30da75e9476d12207ed1a68cdf56caeede2f8882328da4b72cc1b8fd07cbd0b8->enter($__internal_30da75e9476d12207ed1a68cdf56caeede2f8882328da4b72cc1b8fd07cbd0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_30da75e9476d12207ed1a68cdf56caeede2f8882328da4b72cc1b8fd07cbd0b8->leave($__internal_30da75e9476d12207ed1a68cdf56caeede2f8882328da4b72cc1b8fd07cbd0b8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e28f27945e2634a597e757338b6d6ce2058a90705c7ac0ebd8828ac2043241c = $this->env->getExtension("native_profiler");
        $__internal_3e28f27945e2634a597e757338b6d6ce2058a90705c7ac0ebd8828ac2043241c->enter($__internal_3e28f27945e2634a597e757338b6d6ce2058a90705c7ac0ebd8828ac2043241c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_3e28f27945e2634a597e757338b6d6ce2058a90705c7ac0ebd8828ac2043241c->leave($__internal_3e28f27945e2634a597e757338b6d6ce2058a90705c7ac0ebd8828ac2043241c_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_e108b32e5916025649ad549f147e460460032fc60e089c9968ceb4f88a197f2a = $this->env->getExtension("native_profiler");
        $__internal_e108b32e5916025649ad549f147e460460032fc60e089c9968ceb4f88a197f2a->enter($__internal_e108b32e5916025649ad549f147e460460032fc60e089c9968ceb4f88a197f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_e108b32e5916025649ad549f147e460460032fc60e089c9968ceb4f88a197f2a->leave($__internal_e108b32e5916025649ad549f147e460460032fc60e089c9968ceb4f88a197f2a_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a6bc57c57516cc6d24c2b63d3a4558e9e6fb2612335f7b328e9aa6173727331 = $this->env->getExtension("native_profiler");
        $__internal_9a6bc57c57516cc6d24c2b63d3a4558e9e6fb2612335f7b328e9aa6173727331->enter($__internal_9a6bc57c57516cc6d24c2b63d3a4558e9e6fb2612335f7b328e9aa6173727331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
            <div class=\"content-mid\">
                <a  href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("App_user_listReceta");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\" >
                        <div class=\" hover-fold\">
                          <h4>RECETAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>Hay una gran variedad de recetas disponibles que se adaptan a tus gustos y necesidades </p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("App_user_listUtensilio");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>UTENSILIOS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de utensilios que te ayudarán a realizar tus recetas eficiente y eficazmente</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("App_user_listTecnica");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>TÉCNICAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de técnicas que te ayudarán a obtener las habilidades culinarias necesarias para iniciarte en el mundo de la comida saludable</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_9a6bc57c57516cc6d24c2b63d3a4558e9e6fb2612335f7b328e9aa6173727331->leave($__internal_9a6bc57c57516cc6d24c2b63d3a4558e9e6fb2612335f7b328e9aa6173727331_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Blog:menuBlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 43,  112 => 31,  97 => 19,  90 => 14,  84 => 13,  76 => 10,  70 => 9,  58 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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

<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
            <div class=\"content-mid\">
                <a  href=\"{{ path('App_user_listReceta') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\" >
                        <div class=\" hover-fold\">
                          <h4>RECETAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>Hay una gran variedad de recetas disponibles que se adaptan a tus gustos y necesidades </p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listUtensilio') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>UTENSILIOS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de utensilios que te ayudarán a realizar tus recetas eficiente y eficazmente</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listTecnica') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>TÉCNICAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de técnicas que te ayudarán a obtener las habilidades culinarias necesarias para iniciarte en el mundo de la comida saludable</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>

{% endblock %}";
    }
}
