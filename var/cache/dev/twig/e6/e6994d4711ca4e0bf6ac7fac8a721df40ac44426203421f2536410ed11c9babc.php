<?php

/* UserBundle:Menu:list.html.twig */
class __TwigTemplate_398620f8b95799aaf4a07249f7eadc4fdf0bec490d4b494672d39189d1cc302f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout_menu.html.twig", "UserBundle:Menu:list.html.twig", 1);
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
        $__internal_95e93ed881ed51718e23ebe9979ea809671340d4c6003edd37d890b766d7ff13 = $this->env->getExtension("native_profiler");
        $__internal_95e93ed881ed51718e23ebe9979ea809671340d4c6003edd37d890b766d7ff13->enter($__internal_95e93ed881ed51718e23ebe9979ea809671340d4c6003edd37d890b766d7ff13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Menu:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e93ed881ed51718e23ebe9979ea809671340d4c6003edd37d890b766d7ff13->leave($__internal_95e93ed881ed51718e23ebe9979ea809671340d4c6003edd37d890b766d7ff13_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ecb605e9d6ba7a2e968755b2846eabfff82448bfa35697d8e09eb5569fbda11 = $this->env->getExtension("native_profiler");
        $__internal_7ecb605e9d6ba7a2e968755b2846eabfff82448bfa35697d8e09eb5569fbda11->enter($__internal_7ecb605e9d6ba7a2e968755b2846eabfff82448bfa35697d8e09eb5569fbda11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_7ecb605e9d6ba7a2e968755b2846eabfff82448bfa35697d8e09eb5569fbda11->leave($__internal_7ecb605e9d6ba7a2e968755b2846eabfff82448bfa35697d8e09eb5569fbda11_prof);

    }

    // line 7
    public function block_head2($context, array $blocks = array())
    {
        $__internal_934e0f7189c861b63de70ec4f15d2c4f3293917d6d935c3174593b0aba4a8116 = $this->env->getExtension("native_profiler");
        $__internal_934e0f7189c861b63de70ec4f15d2c4f3293917d6d935c3174593b0aba4a8116->enter($__internal_934e0f7189c861b63de70ec4f15d2c4f3293917d6d935c3174593b0aba4a8116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_showServicio");
        echo "\">Menús</a>
";
        
        $__internal_934e0f7189c861b63de70ec4f15d2c4f3293917d6d935c3174593b0aba4a8116->leave($__internal_934e0f7189c861b63de70ec4f15d2c4f3293917d6d935c3174593b0aba4a8116_prof);

    }

    // line 11
    public function block_body3($context, array $blocks = array())
    {
        $__internal_e130fa6b0296681c14959339c5245404ea492c6d0846da8df3e5e9b4b55352ef = $this->env->getExtension("native_profiler");
        $__internal_e130fa6b0296681c14959339c5245404ea492c6d0846da8df3e5e9b4b55352ef->enter($__internal_e130fa6b0296681c14959339c5245404ea492c6d0846da8df3e5e9b4b55352ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

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
\t\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publico", array()), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t</div>
          </br>
          <h4>Lista</h4>
          <div class=\"buscador\">
              ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), 'form_start');
        echo "
                <div class=\"form-group\">
                  ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), "lista", array()), 'row');
        echo "
                </div>
              ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), 'form_end');
        echo "
          </div>
\t\t\t\t</div>
";
        
        $__internal_e130fa6b0296681c14959339c5245404ea492c6d0846da8df3e5e9b4b55352ef->leave($__internal_e130fa6b0296681c14959339c5245404ea492c6d0846da8df3e5e9b4b55352ef_prof);

    }

    // line 37
    public function block_body2($context, array $blocks = array())
    {
        $__internal_022830233a67880e85ac25817dec34d6c32612b02c2ca72099e9c6aaffab4428 = $this->env->getExtension("native_profiler");
        $__internal_022830233a67880e85ac25817dec34d6c32612b02c2ca72099e9c6aaffab4428->enter($__internal_022830233a67880e85ac25817dec34d6c32612b02c2ca72099e9c6aaffab4428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 38
        echo "


<div class=\"col-md-9 blog-header\">
<div class=\"col-sm-12\">
                            <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo menú</button>
                            <hr>
</div>
\t</br>
\t";
        // line 47
        $context["numMenu"] = 0;
        // line 48
        echo "\t<div class=\" blog-head\">
\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 50
            echo "        ";
            $context["numMenu"] = ((isset($context["numMenu"]) ? $context["numMenu"] : $this->getContext($context, "numMenu")) + 1);
            echo "                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["menu"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "descripcion", array(0 => 40), "method"), "html", null, true);
            echo "</p>
            <a class=\"btn btn-success\" data-href=";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo " data-toggle=\"modal\" data-target=\"#confirm-comision\"><i class=\"glyphicon glyphicon-plus\"> </i></a>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t";
            // line 69
            if ((((isset($context["numMenu"]) ? $context["numMenu"] : $this->getContext($context, "numMenu")) % 3) == 0)) {
                // line 70
                echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
            }
            // line 74
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t</br>
\t\t<div class=\"navigation\">
\t\t\t";
        // line 77
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
                <h4 class=\"modal-title\">Añadir Menú</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      ";
        // line 94
        $this->loadTemplate("UserBundle:Menu:add.html.twig", "UserBundle:Menu:list.html.twig", 94)->display(array_merge($context, array("formMenu" => (isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")))));
        // line 95
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

        <!-- Modal  OrdenCompra-->
        <div class=\"modal fade\" id=\"confirm-comision\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">

                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                    </div>

                    <div class=\"modal-body\">
                                             ";
        // line 137
        $this->loadTemplate("UserBundle:OrdenCompra:add.html.twig", "UserBundle:Menu:list.html.twig", 137)->display(array_merge($context, array("formOrdenCompra" => (isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")))));
        // line 138
        echo "
                        <p class=\"debug-url\"></p>
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        <a id=\"menuAdd\"class=\"btn btn-success btn-ok\">Guardar</a>
                    </div>
                </div>
            </div>
        </div>

";
        
        $__internal_022830233a67880e85ac25817dec34d6c32612b02c2ca72099e9c6aaffab4428->leave($__internal_022830233a67880e85ac25817dec34d6c32612b02c2ca72099e9c6aaffab4428_prof);

    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65eb09d3fab292adab2f5879db099f1ca910d93e3f09dc580a9979a6e438a51a = $this->env->getExtension("native_profiler");
        $__internal_65eb09d3fab292adab2f5879db099f1ca910d93e3f09dc580a9979a6e438a51a->enter($__internal_65eb09d3fab292adab2f5879db099f1ca910d93e3f09dc580a9979a6e438a51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 153
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

<script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/addMenuOrdenCompra.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_65eb09d3fab292adab2f5879db099f1ca910d93e3f09dc580a9979a6e438a51a->leave($__internal_65eb09d3fab292adab2f5879db099f1ca910d93e3f09dc580a9979a6e438a51a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Menu:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 182,  299 => 153,  293 => 152,  274 => 138,  272 => 137,  228 => 95,  226 => 94,  206 => 77,  202 => 75,  196 => 74,  190 => 70,  188 => 69,  178 => 62,  173 => 60,  169 => 59,  163 => 56,  156 => 54,  148 => 50,  144 => 49,  141 => 48,  139 => 47,  128 => 38,  122 => 37,  111 => 31,  106 => 29,  101 => 27,  93 => 22,  88 => 20,  84 => 19,  79 => 17,  72 => 12,  66 => 11,  56 => 8,  50 => 7,  38 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'UserBundle::layout_menu.html.twig' %}


{% block title %}Eat&Fit{% endblock%}


{% block head2 %}
<a href=\"{{ path('App_user_showServicio') }}\">Menús</a>
{% endblock %}

{% block body3 %}


<div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h4>Categoría</h4>
\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t{{ form_row(form.nombre) }}
\t\t\t\t\t\t\t\t\t{{ form_row(form.publico) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t</div>
          </br>
          <h4>Lista</h4>
          <div class=\"buscador\">
              {{form_start(formLista)}}
                <div class=\"form-group\">
                  {{ form_row(formLista.lista) }}
                </div>
              {{form_end(formLista)}}
          </div>
\t\t\t\t</div>
{% endblock %}


{% block body2 %}



<div class=\"col-md-9 blog-header\">
<div class=\"col-sm-12\">
                            <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo menú</button>
                            <hr>
</div>
\t</br>
\t{% set numMenu=0%}
\t<div class=\" blog-head\">
\t{% for menu in pagination %}
        {% set numMenu=numMenu+1%}                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"{{ path('App_user_showMenu', { 'id': menu.id }) }}\">{{menu.nombre}}</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ menu.fechaCreacion|date('Y-m-d') }}</span>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>{{menu.descripcion(40)}}</p>
            <a class=\"btn btn-success\" data-href={{menu.id}} data-toggle=\"modal\" data-target=\"#confirm-comision\"><i class=\"glyphicon glyphicon-plus\"> </i></a>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"{{ path('App_user_showMenu', { 'id': menu.id }) }}\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t{% if (numMenu % 3 == 0)%}
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
                <h4 class=\"modal-title\">Añadir Menú</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      {% include \"UserBundle:Menu:add.html.twig\"  with {'formMenu': formMenu} %}
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

        <!-- Modal  OrdenCompra-->
        <div class=\"modal fade\" id=\"confirm-comision\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">

                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                    </div>

                    <div class=\"modal-body\">
                                             {% include \"UserBundle:OrdenCompra:add.html.twig\"  with {'formOrdenCompra': formOrdenCompra} %}

                        <p class=\"debug-url\"></p>
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        <a id=\"menuAdd\"class=\"btn btn-success btn-ok\">Guardar</a>
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

<script type=\"text/javascript\" src=\"{{ asset('js/addMenuOrdenCompra.js') }}\"></script>
   {% endblock %}";
    }
}
