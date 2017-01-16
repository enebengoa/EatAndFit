<?php

/* @User/Lista/list.html.twig */
class __TwigTemplate_e060caf4578be5a86a49c5a5ce14cfab6e6683d740a1292655ed8f3cfeaa89d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout_menu.html.twig", "@User/Lista/list.html.twig", 1);
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
        $__internal_43813d9bfcbf493a5c0b8a32856184fddc09a955f95e9de2cb75bf2667f657bc = $this->env->getExtension("native_profiler");
        $__internal_43813d9bfcbf493a5c0b8a32856184fddc09a955f95e9de2cb75bf2667f657bc->enter($__internal_43813d9bfcbf493a5c0b8a32856184fddc09a955f95e9de2cb75bf2667f657bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Lista/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43813d9bfcbf493a5c0b8a32856184fddc09a955f95e9de2cb75bf2667f657bc->leave($__internal_43813d9bfcbf493a5c0b8a32856184fddc09a955f95e9de2cb75bf2667f657bc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb8f4660e6ae18d3e9d84f50847134f18da585d95ec427f332c6661fa02bb589 = $this->env->getExtension("native_profiler");
        $__internal_cb8f4660e6ae18d3e9d84f50847134f18da585d95ec427f332c6661fa02bb589->enter($__internal_cb8f4660e6ae18d3e9d84f50847134f18da585d95ec427f332c6661fa02bb589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_cb8f4660e6ae18d3e9d84f50847134f18da585d95ec427f332c6661fa02bb589->leave($__internal_cb8f4660e6ae18d3e9d84f50847134f18da585d95ec427f332c6661fa02bb589_prof);

    }

    // line 7
    public function block_head2($context, array $blocks = array())
    {
        $__internal_d9caeb0f0d6213b0742e13831a11bfa4eb243c4adc51a97676d994b3f98fdff9 = $this->env->getExtension("native_profiler");
        $__internal_d9caeb0f0d6213b0742e13831a11bfa4eb243c4adc51a97676d994b3f98fdff9->enter($__internal_d9caeb0f0d6213b0742e13831a11bfa4eb243c4adc51a97676d994b3f98fdff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_showServicio");
        echo "\">Listas de compra</a>
";
        
        $__internal_d9caeb0f0d6213b0742e13831a11bfa4eb243c4adc51a97676d994b3f98fdff9->leave($__internal_d9caeb0f0d6213b0742e13831a11bfa4eb243c4adc51a97676d994b3f98fdff9_prof);

    }

    // line 11
    public function block_body3($context, array $blocks = array())
    {
        $__internal_1ba63c4e5def14fc2ff2c609ef14d3475d299176152f795fe92bae011ac509c8 = $this->env->getExtension("native_profiler");
        $__internal_1ba63c4e5def14fc2ff2c609ef14d3475d299176152f795fe92bae011ac509c8->enter($__internal_1ba63c4e5def14fc2ff2c609ef14d3475d299176152f795fe92bae011ac509c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

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
        
        $__internal_1ba63c4e5def14fc2ff2c609ef14d3475d299176152f795fe92bae011ac509c8->leave($__internal_1ba63c4e5def14fc2ff2c609ef14d3475d299176152f795fe92bae011ac509c8_prof);

    }

    // line 27
    public function block_body2($context, array $blocks = array())
    {
        $__internal_1c986d42cd612757278df67ef9fb332b86144693b9ce838e2271822940037552 = $this->env->getExtension("native_profiler");
        $__internal_1c986d42cd612757278df67ef9fb332b86144693b9ce838e2271822940037552->enter($__internal_1c986d42cd612757278df67ef9fb332b86144693b9ce838e2271822940037552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

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
        $this->loadTemplate("UserBundle:Lista:add.html.twig", "@User/Lista/list.html.twig", 83)->display(array_merge($context, array("formLista" => (isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")))));
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
        
        $__internal_1c986d42cd612757278df67ef9fb332b86144693b9ce838e2271822940037552->leave($__internal_1c986d42cd612757278df67ef9fb332b86144693b9ce838e2271822940037552_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f13e7c32840adeef6dae59b97f88b7b4cfebe0f24d5f1853bd2493da3016560a = $this->env->getExtension("native_profiler");
        $__internal_f13e7c32840adeef6dae59b97f88b7b4cfebe0f24d5f1853bd2493da3016560a->enter($__internal_f13e7c32840adeef6dae59b97f88b7b4cfebe0f24d5f1853bd2493da3016560a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f13e7c32840adeef6dae59b97f88b7b4cfebe0f24d5f1853bd2493da3016560a->leave($__internal_f13e7c32840adeef6dae59b97f88b7b4cfebe0f24d5f1853bd2493da3016560a_prof);

    }

    public function getTemplateName()
    {
        return "@User/Lista/list.html.twig";
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
