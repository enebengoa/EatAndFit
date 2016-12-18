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
        $__internal_cc6daa44766c85244547440f81a80f853ed2e405742d62ae1b9ab5785a6e3e4c = $this->env->getExtension("native_profiler");
        $__internal_cc6daa44766c85244547440f81a80f853ed2e405742d62ae1b9ab5785a6e3e4c->enter($__internal_cc6daa44766c85244547440f81a80f853ed2e405742d62ae1b9ab5785a6e3e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Blog:menuBlog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc6daa44766c85244547440f81a80f853ed2e405742d62ae1b9ab5785a6e3e4c->leave($__internal_cc6daa44766c85244547440f81a80f853ed2e405742d62ae1b9ab5785a6e3e4c_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_accf52e0340c4dc6646d04a927998d86433cb756d02d1dd55d121feafdb06408 = $this->env->getExtension("native_profiler");
        $__internal_accf52e0340c4dc6646d04a927998d86433cb756d02d1dd55d121feafdb06408->enter($__internal_accf52e0340c4dc6646d04a927998d86433cb756d02d1dd55d121feafdb06408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_accf52e0340c4dc6646d04a927998d86433cb756d02d1dd55d121feafdb06408->leave($__internal_accf52e0340c4dc6646d04a927998d86433cb756d02d1dd55d121feafdb06408_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4ac8615ba01672217cab8484744f5c15c54ed610b2873b6b43610f5403d19ba = $this->env->getExtension("native_profiler");
        $__internal_b4ac8615ba01672217cab8484744f5c15c54ed610b2873b6b43610f5403d19ba->enter($__internal_b4ac8615ba01672217cab8484744f5c15c54ed610b2873b6b43610f5403d19ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_b4ac8615ba01672217cab8484744f5c15c54ed610b2873b6b43610f5403d19ba->leave($__internal_b4ac8615ba01672217cab8484744f5c15c54ed610b2873b6b43610f5403d19ba_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_a146de098799f8d73094599ef32320cafe76cbd897740aa9f927078da4dc0c53 = $this->env->getExtension("native_profiler");
        $__internal_a146de098799f8d73094599ef32320cafe76cbd897740aa9f927078da4dc0c53->enter($__internal_a146de098799f8d73094599ef32320cafe76cbd897740aa9f927078da4dc0c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_a146de098799f8d73094599ef32320cafe76cbd897740aa9f927078da4dc0c53->leave($__internal_a146de098799f8d73094599ef32320cafe76cbd897740aa9f927078da4dc0c53_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_799c5fe3b7b23bbad128bf229567d50653cebe837941990f62b1e26c95ba13d5 = $this->env->getExtension("native_profiler");
        $__internal_799c5fe3b7b23bbad128bf229567d50653cebe837941990f62b1e26c95ba13d5->enter($__internal_799c5fe3b7b23bbad128bf229567d50653cebe837941990f62b1e26c95ba13d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_799c5fe3b7b23bbad128bf229567d50653cebe837941990f62b1e26c95ba13d5->leave($__internal_799c5fe3b7b23bbad128bf229567d50653cebe837941990f62b1e26c95ba13d5_prof);

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
