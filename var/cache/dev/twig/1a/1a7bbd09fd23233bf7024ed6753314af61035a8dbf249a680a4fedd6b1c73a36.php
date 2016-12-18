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
        $__internal_7b18e5f1026ff0b9971bd6e3e58c7337db6f1bc8594fcc9bbcb8e27fa10c8126 = $this->env->getExtension("native_profiler");
        $__internal_7b18e5f1026ff0b9971bd6e3e58c7337db6f1bc8594fcc9bbcb8e27fa10c8126->enter($__internal_7b18e5f1026ff0b9971bd6e3e58c7337db6f1bc8594fcc9bbcb8e27fa10c8126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Servicio:menuServicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b18e5f1026ff0b9971bd6e3e58c7337db6f1bc8594fcc9bbcb8e27fa10c8126->leave($__internal_7b18e5f1026ff0b9971bd6e3e58c7337db6f1bc8594fcc9bbcb8e27fa10c8126_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa9f58ef9b4767d58cd2da5c464839700f62021ab01af51f233c652876bae593 = $this->env->getExtension("native_profiler");
        $__internal_aa9f58ef9b4767d58cd2da5c464839700f62021ab01af51f233c652876bae593->enter($__internal_aa9f58ef9b4767d58cd2da5c464839700f62021ab01af51f233c652876bae593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_aa9f58ef9b4767d58cd2da5c464839700f62021ab01af51f233c652876bae593->leave($__internal_aa9f58ef9b4767d58cd2da5c464839700f62021ab01af51f233c652876bae593_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cf661b87539cd08c5cf1180230408be2dc690725a5dea9327b7f06d73c7b4e6 = $this->env->getExtension("native_profiler");
        $__internal_5cf661b87539cd08c5cf1180230408be2dc690725a5dea9327b7f06d73c7b4e6->enter($__internal_5cf661b87539cd08c5cf1180230408be2dc690725a5dea9327b7f06d73c7b4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_5cf661b87539cd08c5cf1180230408be2dc690725a5dea9327b7f06d73c7b4e6->leave($__internal_5cf661b87539cd08c5cf1180230408be2dc690725a5dea9327b7f06d73c7b4e6_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb6d70378135466455ac306c3e944b62faf39f60db4b48390439663f5382f920 = $this->env->getExtension("native_profiler");
        $__internal_bb6d70378135466455ac306c3e944b62faf39f60db4b48390439663f5382f920->enter($__internal_bb6d70378135466455ac306c3e944b62faf39f60db4b48390439663f5382f920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_bb6d70378135466455ac306c3e944b62faf39f60db4b48390439663f5382f920->leave($__internal_bb6d70378135466455ac306c3e944b62faf39f60db4b48390439663f5382f920_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_34888ba7cf8b488fd78ef039b3801f24ab941b19a26a47685d9b31d8c8ee2d56 = $this->env->getExtension("native_profiler");
        $__internal_34888ba7cf8b488fd78ef039b3801f24ab941b19a26a47685d9b31d8c8ee2d56->enter($__internal_34888ba7cf8b488fd78ef039b3801f24ab941b19a26a47685d9b31d8c8ee2d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34888ba7cf8b488fd78ef039b3801f24ab941b19a26a47685d9b31d8c8ee2d56->leave($__internal_34888ba7cf8b488fd78ef039b3801f24ab941b19a26a47685d9b31d8c8ee2d56_prof);

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
