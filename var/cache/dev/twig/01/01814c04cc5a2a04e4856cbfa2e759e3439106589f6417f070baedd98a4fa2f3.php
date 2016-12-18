<?php

/* UserBundle:Lista:list.html.twig */
class __TwigTemplate_7b0e29c74f7ee669b23ca179486f693a73d1dee3c902c7edcf2991bfd15e30a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout_menu.html.twig", "UserBundle:Lista:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head2' => array($this, 'block_head2'),
            'body3' => array($this, 'block_body3'),
            'body2' => array($this, 'block_body2'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ee61d8de8e3bb3ae2c276e1ca1440594f762dcf1bb29f2f4a66c29b10f3df37 = $this->env->getExtension("native_profiler");
        $__internal_9ee61d8de8e3bb3ae2c276e1ca1440594f762dcf1bb29f2f4a66c29b10f3df37->enter($__internal_9ee61d8de8e3bb3ae2c276e1ca1440594f762dcf1bb29f2f4a66c29b10f3df37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Lista:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ee61d8de8e3bb3ae2c276e1ca1440594f762dcf1bb29f2f4a66c29b10f3df37->leave($__internal_9ee61d8de8e3bb3ae2c276e1ca1440594f762dcf1bb29f2f4a66c29b10f3df37_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_99e6e30c258370599328f24dcde0ffefe7f953dae1631fe2f9e9c98de19cb1f2 = $this->env->getExtension("native_profiler");
        $__internal_99e6e30c258370599328f24dcde0ffefe7f953dae1631fe2f9e9c98de19cb1f2->enter($__internal_99e6e30c258370599328f24dcde0ffefe7f953dae1631fe2f9e9c98de19cb1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_99e6e30c258370599328f24dcde0ffefe7f953dae1631fe2f9e9c98de19cb1f2->leave($__internal_99e6e30c258370599328f24dcde0ffefe7f953dae1631fe2f9e9c98de19cb1f2_prof);

    }

    // line 7
    public function block_head2($context, array $blocks = array())
    {
        $__internal_206dce5d454e767f5db9f3dd0f32e55962d1abaab22d2f6a998b9bf7973bc2e7 = $this->env->getExtension("native_profiler");
        $__internal_206dce5d454e767f5db9f3dd0f32e55962d1abaab22d2f6a998b9bf7973bc2e7->enter($__internal_206dce5d454e767f5db9f3dd0f32e55962d1abaab22d2f6a998b9bf7973bc2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_showServicio");
        echo "\">Listas de compra</a>
";
        
        $__internal_206dce5d454e767f5db9f3dd0f32e55962d1abaab22d2f6a998b9bf7973bc2e7->leave($__internal_206dce5d454e767f5db9f3dd0f32e55962d1abaab22d2f6a998b9bf7973bc2e7_prof);

    }

    // line 11
    public function block_body3($context, array $blocks = array())
    {
        $__internal_c87a6e354e726f784c7ee071a437452aafd6e54d82eee9b29dc618e4043de494 = $this->env->getExtension("native_profiler");
        $__internal_c87a6e354e726f784c7ee071a437452aafd6e54d82eee9b29dc618e4043de494->enter($__internal_c87a6e354e726f784c7ee071a437452aafd6e54d82eee9b29dc618e4043de494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

        // line 12
        echo "

<div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h4>Categoría</h4>
\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
";
        
        $__internal_c87a6e354e726f784c7ee071a437452aafd6e54d82eee9b29dc618e4043de494->leave($__internal_c87a6e354e726f784c7ee071a437452aafd6e54d82eee9b29dc618e4043de494_prof);

    }

    // line 27
    public function block_body2($context, array $blocks = array())
    {
        $__internal_7d9545a0fa9285fe131039c635b6f894e57c40a7a84c3a3e7e4832731721d379 = $this->env->getExtension("native_profiler");
        $__internal_7d9545a0fa9285fe131039c635b6f894e57c40a7a84c3a3e7e4832731721d379->enter($__internal_7d9545a0fa9285fe131039c635b6f894e57c40a7a84c3a3e7e4832731721d379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 28
        echo "


<div class=\"col-md-9 blog-header\">
<div class=\"col-sm-12\">
                            <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nueva lista</button>
                            <hr>
</div>
\t</br>
\t";
        // line 37
        $context["numLista"] = 0;
        // line 38
        echo "\t<div class=\" blog-head\">
\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 40
            echo "        ";
            $context["numLista"] = ((isset($context["numLista"]) ? $context["numLista"] : $this->getContext($context, "numLista")) + 1);
            echo "                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showLista", array("id" => $this->getAttribute($context["lista"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lista"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showLista", array("id" => $this->getAttribute($context["lista"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t";
            // line 57
            if ((((isset($context["numLista"]) ? $context["numLista"] : $this->getContext($context, "numLista")) % 3) == 0)) {
                // line 58
                echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
            }
            // line 62
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t</br>
\t\t<div class=\"navigation\">
\t\t\t";
        // line 65
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t</div>
\t</div>
</div>

<!-- Modal  ADDING -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Añadir lista</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      ";
        // line 82
        $this->loadTemplate("UserBundle:Lista:add.html.twig", "UserBundle:Lista:list.html.twig", 82)->display(array_merge($context, array("formLista" => (isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")))));
        // line 83
        echo "                  </div>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>
            </div>
          </div>
        </div>

";
        
        $__internal_7d9545a0fa9285fe131039c635b6f894e57c40a7a84c3a3e7e4832731721d379->leave($__internal_7d9545a0fa9285fe131039c635b6f894e57c40a7a84c3a3e7e4832731721d379_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67a8a6e056c3fbc4979abee4e75e1838dd6de29f4db617c3cc7fc0adac919a04 = $this->env->getExtension("native_profiler");
        $__internal_67a8a6e056c3fbc4979abee4e75e1838dd6de29f4db617c3cc7fc0adac919a04->enter($__internal_67a8a6e056c3fbc4979abee4e75e1838dd6de29f4db617c3cc7fc0adac919a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "<script>
        \$('body').on('submit', '.ajaxForm', function (e) {

        e.preventDefault();

        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(jqXHR) {
                        \$('#myModal').modal('hide');



                    },
                    error: function(jqXHR) {
                        if (jqXHR.responseJSON.hasOwnProperty('form')) {
                            \$('#form_body').html(jqXHR.responseJSON.form);
                        }

                        \$('.form_error').html(jqXHR.responseJSON.message);
                    },
            });
        });
    </script>


<script>
        function addReceta(){
        window.location.href= \"http://127.0.0.1/pfg_eneko/web/app_dev.php/\";
        }
    </script>
   ";
        
        $__internal_67a8a6e056c3fbc4979abee4e75e1838dd6de29f4db617c3cc7fc0adac919a04->leave($__internal_67a8a6e056c3fbc4979abee4e75e1838dd6de29f4db617c3cc7fc0adac919a04_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Lista:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 95,  214 => 94,  198 => 83,  196 => 82,  176 => 65,  172 => 63,  166 => 62,  160 => 58,  158 => 57,  148 => 50,  141 => 46,  134 => 44,  126 => 40,  122 => 39,  119 => 38,  117 => 37,  106 => 28,  100 => 27,  89 => 21,  84 => 19,  79 => 17,  72 => 12,  66 => 11,  56 => 8,  50 => 7,  38 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'UserBundle::layout_menu.html.twig' %}


{% block title %}Eat&Fit{% endblock%}


{% block head2 %}
<a href=\"{{ path('App_user_showServicio') }}\">Listas de compra</a>
{% endblock %}

{% block body3 %}


<div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h4>Categoría</h4>
\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t{{ form_row(form.nombre) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t</div>
\t\t\t\t</div>
{% endblock %}


{% block body2 %}



<div class=\"col-md-9 blog-header\">
<div class=\"col-sm-12\">
                            <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nueva lista</button>
                            <hr>
</div>
\t</br>
\t{% set numLista=0%}
\t<div class=\" blog-head\">
\t{% for lista in pagination %}
        {% set numLista=numLista+1%}                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"{{ path('App_user_showLista', { 'id': lista.id }) }}\">{{lista.nombre}}</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ lista.fechaCreacion|date('Y-m-d') }}</span>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"{{ path('App_user_showLista', { 'id': lista.id }) }}\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t{% if (numLista % 3 == 0)%}
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t{% endif %}
\t\t{% endfor %}
\t\t</br>
\t\t<div class=\"navigation\">
\t\t\t{{ knp_pagination_render(pagination) }}
\t\t</div>
\t</div>
</div>

<!-- Modal  ADDING -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Añadir lista</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      {% include \"UserBundle:Lista:add.html.twig\"  with {'formLista': formLista} %}
                  </div>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>
            </div>
          </div>
        </div>

{% endblock %}

{% block javascripts %}
<script>
        \$('body').on('submit', '.ajaxForm', function (e) {

        e.preventDefault();

        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(jqXHR) {
                        \$('#myModal').modal('hide');



                    },
                    error: function(jqXHR) {
                        if (jqXHR.responseJSON.hasOwnProperty('form')) {
                            \$('#form_body').html(jqXHR.responseJSON.form);
                        }

                        \$('.form_error').html(jqXHR.responseJSON.message);
                    },
            });
        });
    </script>


<script>
        function addReceta(){
        window.location.href= \"http://127.0.0.1/pfg_eneko/web/app_dev.php/\";
        }
    </script>
   {% endblock %}";
    }
}
