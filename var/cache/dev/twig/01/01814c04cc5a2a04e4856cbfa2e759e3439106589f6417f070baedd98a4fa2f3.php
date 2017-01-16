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
        $__internal_517c926ff66129e8bf0129983f778e5813076827a239e2d6641b9ecd0f5a9b00 = $this->env->getExtension("native_profiler");
        $__internal_517c926ff66129e8bf0129983f778e5813076827a239e2d6641b9ecd0f5a9b00->enter($__internal_517c926ff66129e8bf0129983f778e5813076827a239e2d6641b9ecd0f5a9b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Lista:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_517c926ff66129e8bf0129983f778e5813076827a239e2d6641b9ecd0f5a9b00->leave($__internal_517c926ff66129e8bf0129983f778e5813076827a239e2d6641b9ecd0f5a9b00_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a53970db974a15aa6470bf9fb2ea6fc491f3eeffeb1097a885f8b314d0202311 = $this->env->getExtension("native_profiler");
        $__internal_a53970db974a15aa6470bf9fb2ea6fc491f3eeffeb1097a885f8b314d0202311->enter($__internal_a53970db974a15aa6470bf9fb2ea6fc491f3eeffeb1097a885f8b314d0202311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_a53970db974a15aa6470bf9fb2ea6fc491f3eeffeb1097a885f8b314d0202311->leave($__internal_a53970db974a15aa6470bf9fb2ea6fc491f3eeffeb1097a885f8b314d0202311_prof);

    }

    // line 7
    public function block_head2($context, array $blocks = array())
    {
        $__internal_e5bc7c8b6745f4a5168f6f981099f043f6c708ab642c44737de778a13e8b075b = $this->env->getExtension("native_profiler");
        $__internal_e5bc7c8b6745f4a5168f6f981099f043f6c708ab642c44737de778a13e8b075b->enter($__internal_e5bc7c8b6745f4a5168f6f981099f043f6c708ab642c44737de778a13e8b075b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_showServicio");
        echo "\">Listas de compra</a>
";
        
        $__internal_e5bc7c8b6745f4a5168f6f981099f043f6c708ab642c44737de778a13e8b075b->leave($__internal_e5bc7c8b6745f4a5168f6f981099f043f6c708ab642c44737de778a13e8b075b_prof);

    }

    // line 11
    public function block_body3($context, array $blocks = array())
    {
        $__internal_5f6a9eb64ce3f461ad34ed044340f8a712b7cff0c2b8eb601413e0897efdaeb3 = $this->env->getExtension("native_profiler");
        $__internal_5f6a9eb64ce3f461ad34ed044340f8a712b7cff0c2b8eb601413e0897efdaeb3->enter($__internal_5f6a9eb64ce3f461ad34ed044340f8a712b7cff0c2b8eb601413e0897efdaeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

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
        
        $__internal_5f6a9eb64ce3f461ad34ed044340f8a712b7cff0c2b8eb601413e0897efdaeb3->leave($__internal_5f6a9eb64ce3f461ad34ed044340f8a712b7cff0c2b8eb601413e0897efdaeb3_prof);

    }

    // line 27
    public function block_body2($context, array $blocks = array())
    {
        $__internal_3f40c1cd739cdf1e4dcf3e636df578f1b68030022732d536248fcc3cab01e3da = $this->env->getExtension("native_profiler");
        $__internal_3f40c1cd739cdf1e4dcf3e636df578f1b68030022732d536248fcc3cab01e3da->enter($__internal_3f40c1cd739cdf1e4dcf3e636df578f1b68030022732d536248fcc3cab01e3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

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
\t\t\t<div class=\"col-md-4 blog-top\" id=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\">
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
              <button class=\"btn btn-danger\" data-href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteLista", array("id" => $this->getAttribute($context["lista"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showLista", array("id" => $this->getAttribute($context["lista"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t";
            // line 58
            if ((((isset($context["numLista"]) ? $context["numLista"] : $this->getContext($context, "numLista")) % 3) == 0)) {
                // line 59
                echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
            }
            // line 63
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t</br>
\t\t<div class=\"navigation\">
\t\t\t";
        // line 66
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
        // line 83
        $this->loadTemplate("UserBundle:Lista:add.html.twig", "UserBundle:Lista:list.html.twig", 83)->display(array_merge($context, array("formLista" => (isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")))));
        // line 84
        echo "                  </div>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal  ADDING Confirm -->
        <div id=\"addConfirm\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\"></h4>
              </div>
              <div class=\"modal-body\">

              </div>
              <div class=\"modal-footer\">
                <button  type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
              </div>
            </div>

          </div>
        </div>





           <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                </div>

                <div class=\"modal-body\">
                    <p>¿Desea borrar la lista seleccionada?</p>
                    <p class=\"debug-url\"></p>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-danger btn-ok\">Borrar</a>
                </div>
            </div>
        </div>
        </div>

";
        
        $__internal_3f40c1cd739cdf1e4dcf3e636df578f1b68030022732d536248fcc3cab01e3da->leave($__internal_3f40c1cd739cdf1e4dcf3e636df578f1b68030022732d536248fcc3cab01e3da_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_830f362ee1e11835a713dd1ce2dec50e215003bd83fa3dfcc72d20b3614d4fc4 = $this->env->getExtension("native_profiler");
        $__internal_830f362ee1e11835a713dd1ce2dec50e215003bd83fa3dfcc72d20b3614d4fc4->enter($__internal_830f362ee1e11835a713dd1ce2dec50e215003bd83fa3dfcc72d20b3614d4fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        echo "<script>
        \$('body').on('submit', '.ajaxForm', function (e) {

        e.preventDefault();

        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(jqXHR) {
                        \$('#myModal').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Añadir')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();
                        window.location.reload();

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

    <script>
        var ei;
        \$('#confirm-delete').on('show.bs.modal', function(e) {
          ei = e;
        });
            \$(\".btn-ok\").click(function () {

                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \$(ei.relatedTarget).data('href'),
                    success: function(jqXHR) {
                      console.log(jqXHR);
                        \$('#'+jqXHR.id).remove();
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Borrar')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                    },
                    error: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(\"La lista No ha sido borrada correctamente\");
                        \$('#addConfirm').find('.modal-title').html('NO Borrado')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                    },
                
            });
        });
  </script>
   ";
        
        $__internal_830f362ee1e11835a713dd1ce2dec50e215003bd83fa3dfcc72d20b3614d4fc4->leave($__internal_830f362ee1e11835a713dd1ce2dec50e215003bd83fa3dfcc72d20b3614d4fc4_prof);

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
        return array (  274 => 143,  268 => 142,  205 => 84,  203 => 83,  183 => 66,  179 => 64,  173 => 63,  167 => 59,  165 => 58,  155 => 51,  149 => 48,  144 => 46,  137 => 44,  131 => 41,  126 => 40,  122 => 39,  119 => 38,  117 => 37,  106 => 28,  100 => 27,  89 => 21,  84 => 19,  79 => 17,  72 => 12,  66 => 11,  56 => 8,  50 => 7,  38 => 4,  11 => 1,);
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
\t\t\t<div class=\"col-md-4 blog-top\" id=\"{{lista.id}}\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"{{ path('App_user_showLista', { 'id': lista.id }) }}\">{{lista.nombre}}</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ lista.fechaCreacion|date('Y-m-d') }}</span>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
              <button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteLista', { 'id': lista.id }) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
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

        <!-- Modal  ADDING Confirm -->
        <div id=\"addConfirm\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\"></h4>
              </div>
              <div class=\"modal-body\">

              </div>
              <div class=\"modal-footer\">
                <button  type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
              </div>
            </div>

          </div>
        </div>





           <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                </div>

                <div class=\"modal-body\">
                    <p>¿Desea borrar la lista seleccionada?</p>
                    <p class=\"debug-url\"></p>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-danger btn-ok\">Borrar</a>
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

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Añadir')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();
                        window.location.reload();

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

    <script>
        var ei;
        \$('#confirm-delete').on('show.bs.modal', function(e) {
          ei = e;
        });
            \$(\".btn-ok\").click(function () {

                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \$(ei.relatedTarget).data('href'),
                    success: function(jqXHR) {
                      console.log(jqXHR);
                        \$('#'+jqXHR.id).remove();
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Borrar')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                    },
                    error: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(\"La lista No ha sido borrada correctamente\");
                        \$('#addConfirm').find('.modal-title').html('NO Borrado')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                    },
                
            });
        });
  </script>
   {% endblock %}";
    }
}
