<?php

/* UserBundle:Servicio:menuServicio.html.twig */
class __TwigTemplate_441450fbd29e972719c2c3ee6d7356d8ac942582a0ec815467277b8a7040a75a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "UserBundle:Servicio:menuServicio.html.twig", 1);
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
        $__internal_6449c7cadfdbd58c042d9af5ef7deab8515e23fcc32a5ce1e8dcd4ab0b388059 = $this->env->getExtension("native_profiler");
        $__internal_6449c7cadfdbd58c042d9af5ef7deab8515e23fcc32a5ce1e8dcd4ab0b388059->enter($__internal_6449c7cadfdbd58c042d9af5ef7deab8515e23fcc32a5ce1e8dcd4ab0b388059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Servicio:menuServicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6449c7cadfdbd58c042d9af5ef7deab8515e23fcc32a5ce1e8dcd4ab0b388059->leave($__internal_6449c7cadfdbd58c042d9af5ef7deab8515e23fcc32a5ce1e8dcd4ab0b388059_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5cbb6ca8094bf3652fe81614f2ddb3fb7edd101a98c08479f0215592205ce46 = $this->env->getExtension("native_profiler");
        $__internal_b5cbb6ca8094bf3652fe81614f2ddb3fb7edd101a98c08479f0215592205ce46->enter($__internal_b5cbb6ca8094bf3652fe81614f2ddb3fb7edd101a98c08479f0215592205ce46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_b5cbb6ca8094bf3652fe81614f2ddb3fb7edd101a98c08479f0215592205ce46->leave($__internal_b5cbb6ca8094bf3652fe81614f2ddb3fb7edd101a98c08479f0215592205ce46_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7a813c6bccd2d5498ff9023b3b62cf04915e6638c57195edee14c76b9443c6e = $this->env->getExtension("native_profiler");
        $__internal_c7a813c6bccd2d5498ff9023b3b62cf04915e6638c57195edee14c76b9443c6e->enter($__internal_c7a813c6bccd2d5498ff9023b3b62cf04915e6638c57195edee14c76b9443c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_c7a813c6bccd2d5498ff9023b3b62cf04915e6638c57195edee14c76b9443c6e->leave($__internal_c7a813c6bccd2d5498ff9023b3b62cf04915e6638c57195edee14c76b9443c6e_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_75dab0626401a9d7f4641be220b17398fdedd8ccfc3986ce600a175e4b587555 = $this->env->getExtension("native_profiler");
        $__internal_75dab0626401a9d7f4641be220b17398fdedd8ccfc3986ce600a175e4b587555->enter($__internal_75dab0626401a9d7f4641be220b17398fdedd8ccfc3986ce600a175e4b587555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_75dab0626401a9d7f4641be220b17398fdedd8ccfc3986ce600a175e4b587555->leave($__internal_75dab0626401a9d7f4641be220b17398fdedd8ccfc3986ce600a175e4b587555_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4175fa2af9593303c0226ba5005cbd82073205e46d709b308cad839219540a1b = $this->env->getExtension("native_profiler");
        $__internal_4175fa2af9593303c0226ba5005cbd82073205e46d709b308cad839219540a1b->enter($__internal_4175fa2af9593303c0226ba5005cbd82073205e46d709b308cad839219540a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
            <div class=\"content-mid\">
                <a  href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("App_user_listForo");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>FORO</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>En caso de que tengas una duda que quieras compartir con el resto de usuarios podrás crear nuevos temas para el foro para lograr así obtener diferentes respuestas a la duda planteada</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("App_user_listMenu");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>MENÚ</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Con las diferentes recetas disponibles serás capaz de crear menús totalmente personalizados a tus necesidades</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("App_user_listLista");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>LISTA DE COMPRA</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Por último, a través de esta herramienta serás capaz de crear diferentes listas de mercado conformada por los ingredientes de las recetas y menús seleccionados</p>
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
        
        $__internal_4175fa2af9593303c0226ba5005cbd82073205e46d709b308cad839219540a1b->leave($__internal_4175fa2af9593303c0226ba5005cbd82073205e46d709b308cad839219540a1b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Servicio:menuServicio.html.twig";
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
                <a  href=\"{{ path('App_user_listForo') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>FORO</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>En caso de que tengas una duda que quieras compartir con el resto de usuarios podrás crear nuevos temas para el foro para lograr así obtener diferentes respuestas a la duda planteada</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listMenu') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>MENÚ</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Con las diferentes recetas disponibles serás capaz de crear menús totalmente personalizados a tus necesidades</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listLista') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>LISTA DE COMPRA</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Por último, a través de esta herramienta serás capaz de crear diferentes listas de mercado conformada por los ingredientes de las recetas y menús seleccionados</p>
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
