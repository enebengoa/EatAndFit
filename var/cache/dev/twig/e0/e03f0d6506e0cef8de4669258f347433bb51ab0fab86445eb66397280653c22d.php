<?php

/* @User/Servicio/menuServicio.html.twig */
class __TwigTemplate_8946101f417744501a1bdf1c773ecda2a6105557bfe2d0b7453c4b8a14875e1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/Servicio/menuServicio.html.twig", 1);
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
        $__internal_47a519aadccdc99992ff2f3a94df39c7de35b5146d981f031fdd1d685ff62bac = $this->env->getExtension("native_profiler");
        $__internal_47a519aadccdc99992ff2f3a94df39c7de35b5146d981f031fdd1d685ff62bac->enter($__internal_47a519aadccdc99992ff2f3a94df39c7de35b5146d981f031fdd1d685ff62bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Servicio/menuServicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47a519aadccdc99992ff2f3a94df39c7de35b5146d981f031fdd1d685ff62bac->leave($__internal_47a519aadccdc99992ff2f3a94df39c7de35b5146d981f031fdd1d685ff62bac_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e658e1b18bfe57710ffca3f7e07662860a388aae4d89352db9ebc8742a918e1 = $this->env->getExtension("native_profiler");
        $__internal_6e658e1b18bfe57710ffca3f7e07662860a388aae4d89352db9ebc8742a918e1->enter($__internal_6e658e1b18bfe57710ffca3f7e07662860a388aae4d89352db9ebc8742a918e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_6e658e1b18bfe57710ffca3f7e07662860a388aae4d89352db9ebc8742a918e1->leave($__internal_6e658e1b18bfe57710ffca3f7e07662860a388aae4d89352db9ebc8742a918e1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc65c2f1d6e3ac2660d94ddef3f71a36eb35445f58bc8beacd3c1499183a284c = $this->env->getExtension("native_profiler");
        $__internal_dc65c2f1d6e3ac2660d94ddef3f71a36eb35445f58bc8beacd3c1499183a284c->enter($__internal_dc65c2f1d6e3ac2660d94ddef3f71a36eb35445f58bc8beacd3c1499183a284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_dc65c2f1d6e3ac2660d94ddef3f71a36eb35445f58bc8beacd3c1499183a284c->leave($__internal_dc65c2f1d6e3ac2660d94ddef3f71a36eb35445f58bc8beacd3c1499183a284c_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2a8fbefcd3bef4a513ce90b5a5e63edcde287380b8ce8ac1f6c2e22e9ba21bb = $this->env->getExtension("native_profiler");
        $__internal_f2a8fbefcd3bef4a513ce90b5a5e63edcde287380b8ce8ac1f6c2e22e9ba21bb->enter($__internal_f2a8fbefcd3bef4a513ce90b5a5e63edcde287380b8ce8ac1f6c2e22e9ba21bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_f2a8fbefcd3bef4a513ce90b5a5e63edcde287380b8ce8ac1f6c2e22e9ba21bb->leave($__internal_f2a8fbefcd3bef4a513ce90b5a5e63edcde287380b8ce8ac1f6c2e22e9ba21bb_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb4d4734091846fa542da6afd617b0ee6f099618eb3a328c69fbf27c581c33c5 = $this->env->getExtension("native_profiler");
        $__internal_fb4d4734091846fa542da6afd617b0ee6f099618eb3a328c69fbf27c581c33c5->enter($__internal_fb4d4734091846fa542da6afd617b0ee6f099618eb3a328c69fbf27c581c33c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fb4d4734091846fa542da6afd617b0ee6f099618eb3a328c69fbf27c581c33c5->leave($__internal_fb4d4734091846fa542da6afd617b0ee6f099618eb3a328c69fbf27c581c33c5_prof);

    }

    public function getTemplateName()
    {
        return "@User/Servicio/menuServicio.html.twig";
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
