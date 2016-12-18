<?php

/* @User/Blog/menuBlog.html.twig */
class __TwigTemplate_cde679ea94c56a1825fdec18676d1d3de25d579eba1290c70866fc0fe7827e8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/Blog/menuBlog.html.twig", 1);
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
        $__internal_ca00b30109bbea7d43b39e6eea84bda14b9c83c83cd2489f7c7b86a9a73cef1f = $this->env->getExtension("native_profiler");
        $__internal_ca00b30109bbea7d43b39e6eea84bda14b9c83c83cd2489f7c7b86a9a73cef1f->enter($__internal_ca00b30109bbea7d43b39e6eea84bda14b9c83c83cd2489f7c7b86a9a73cef1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Blog/menuBlog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca00b30109bbea7d43b39e6eea84bda14b9c83c83cd2489f7c7b86a9a73cef1f->leave($__internal_ca00b30109bbea7d43b39e6eea84bda14b9c83c83cd2489f7c7b86a9a73cef1f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3461136d4c271338bef8f2706d1ace89de83f279163d0bbd2eeb8995ca6f78b = $this->env->getExtension("native_profiler");
        $__internal_b3461136d4c271338bef8f2706d1ace89de83f279163d0bbd2eeb8995ca6f78b->enter($__internal_b3461136d4c271338bef8f2706d1ace89de83f279163d0bbd2eeb8995ca6f78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_b3461136d4c271338bef8f2706d1ace89de83f279163d0bbd2eeb8995ca6f78b->leave($__internal_b3461136d4c271338bef8f2706d1ace89de83f279163d0bbd2eeb8995ca6f78b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_95b519087a4ad9367d7bcaa4e07dc848c1c44e64cf10cb309a60de386bad21c2 = $this->env->getExtension("native_profiler");
        $__internal_95b519087a4ad9367d7bcaa4e07dc848c1c44e64cf10cb309a60de386bad21c2->enter($__internal_95b519087a4ad9367d7bcaa4e07dc848c1c44e64cf10cb309a60de386bad21c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_95b519087a4ad9367d7bcaa4e07dc848c1c44e64cf10cb309a60de386bad21c2->leave($__internal_95b519087a4ad9367d7bcaa4e07dc848c1c44e64cf10cb309a60de386bad21c2_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_dcca60c32db1d7b90e2a2a26098feef4fdb12db1236ca695efcca4dea50aa65d = $this->env->getExtension("native_profiler");
        $__internal_dcca60c32db1d7b90e2a2a26098feef4fdb12db1236ca695efcca4dea50aa65d->enter($__internal_dcca60c32db1d7b90e2a2a26098feef4fdb12db1236ca695efcca4dea50aa65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_dcca60c32db1d7b90e2a2a26098feef4fdb12db1236ca695efcca4dea50aa65d->leave($__internal_dcca60c32db1d7b90e2a2a26098feef4fdb12db1236ca695efcca4dea50aa65d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e64b19dbf5c07b716488acdc20bf2e730dfb038c78d581ecb77f08d2206ed35 = $this->env->getExtension("native_profiler");
        $__internal_2e64b19dbf5c07b716488acdc20bf2e730dfb038c78d581ecb77f08d2206ed35->enter($__internal_2e64b19dbf5c07b716488acdc20bf2e730dfb038c78d581ecb77f08d2206ed35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e64b19dbf5c07b716488acdc20bf2e730dfb038c78d581ecb77f08d2206ed35->leave($__internal_2e64b19dbf5c07b716488acdc20bf2e730dfb038c78d581ecb77f08d2206ed35_prof);

    }

    public function getTemplateName()
    {
        return "@User/Blog/menuBlog.html.twig";
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
