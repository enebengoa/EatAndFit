<?php

/* @Admin/Menu/list.html.twig */
class __TwigTemplate_b4f0efa459606a51472dbf32e1d73b9df75856f8d5059a33bbadb90e40d703f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Menu/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_462a3951a1c99bd34779b5ec8e4cc565a8e5224f6b1b040690ba773db03945b7 = $this->env->getExtension("native_profiler");
        $__internal_462a3951a1c99bd34779b5ec8e4cc565a8e5224f6b1b040690ba773db03945b7->enter($__internal_462a3951a1c99bd34779b5ec8e4cc565a8e5224f6b1b040690ba773db03945b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Menu/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_462a3951a1c99bd34779b5ec8e4cc565a8e5224f6b1b040690ba773db03945b7->leave($__internal_462a3951a1c99bd34779b5ec8e4cc565a8e5224f6b1b040690ba773db03945b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bbd5f141876c95874fe3026824588e9fc3953b4e047b05fc6e28b5e1954488f = $this->env->getExtension("native_profiler");
        $__internal_1bbd5f141876c95874fe3026824588e9fc3953b4e047b05fc6e28b5e1954488f->enter($__internal_1bbd5f141876c95874fe3026824588e9fc3953b4e047b05fc6e28b5e1954488f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de menús";
        
        $__internal_1bbd5f141876c95874fe3026824588e9fc3953b4e047b05fc6e28b5e1954488f->leave($__internal_1bbd5f141876c95874fe3026824588e9fc3953b4e047b05fc6e28b5e1954488f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1a75c091bea679ab7a96e0ca6adf76a5e66c84fba9b4b7e7418779011468495 = $this->env->getExtension("native_profiler");
        $__internal_c1a75c091bea679ab7a96e0ca6adf76a5e66c84fba9b4b7e7418779011468495->enter($__internal_c1a75c091bea679ab7a96e0ca6adf76a5e66c84fba9b4b7e7418779011468495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_c1a75c091bea679ab7a96e0ca6adf76a5e66c84fba9b4b7e7418779011468495->leave($__internal_c1a75c091bea679ab7a96e0ca6adf76a5e66c84fba9b4b7e7418779011468495_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_94835dedb8bd726b5a5f3e77ecd1340a0d6580ea1942bb54502ae48e4e859461 = $this->env->getExtension("native_profiler");
        $__internal_94835dedb8bd726b5a5f3e77ecd1340a0d6580ea1942bb54502ae48e4e859461->enter($__internal_94835dedb8bd726b5a5f3e77ecd1340a0d6580ea1942bb54502ae48e4e859461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de menús</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo menú</button>
                                    <hr>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descipción</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Calorias</th>
                                                    <th>Público</th>
                                                    <th>Apto para celiacos</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 42
            echo "                                                <tr>
                                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "descripcion", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["menu"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "caloriasTotales", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "publico", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 48
            echo (($this->getAttribute($context["menu"], "celiaco", array())) ? ("Sí") : ("No"));
            echo "</td>                                             
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                        <a class=\"btn btn-default\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>

<!-- Mensaje de confirmación de eliminación-->
    <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    Mensaje de confirmación
                </div>
                <div class=\"modal-body\">
                    ¿Esta seguro de eliminar el elemento seleccionado?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-danger btn-ok\">Eliminar</a>
                </div>
            </div>
        </div>
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
        // line 97
        $this->loadTemplate("UserBundle:Menu:add.html.twig", "@Admin/Menu/list.html.twig", 97)->display(array_merge($context, array("formMenu" => (isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")))));
        // line 98
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

";
        
        $__internal_94835dedb8bd726b5a5f3e77ecd1340a0d6580ea1942bb54502ae48e4e859461->leave($__internal_94835dedb8bd726b5a5f3e77ecd1340a0d6580ea1942bb54502ae48e4e859461_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bb2580647dbfc895a659430d233debc63097d8848a47ec9a8cdef247b794167 = $this->env->getExtension("native_profiler");
        $__internal_1bb2580647dbfc895a659430d233debc63097d8848a47ec9a8cdef247b794167->enter($__internal_1bb2580647dbfc895a659430d233debc63097d8848a47ec9a8cdef247b794167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        echo "
 <!-- /.Botón de confirmación de eliminar-->
    <script>
        \$('#confirm-delete').on('show.bs.modal', function(e) 
        {\$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));});
    </script>

    <script>
        \$(document).ready(function(){\$('#myTable').DataTable();
        });
    </script>
<!-- /.Para añadir nuevo menú-->
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

";
        
        $__internal_1bb2580647dbfc895a659430d233debc63097d8848a47ec9a8cdef247b794167->leave($__internal_1bb2580647dbfc895a659430d233debc63097d8848a47ec9a8cdef247b794167_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Menu/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 132,  234 => 131,  196 => 98,  194 => 97,  152 => 57,  141 => 52,  137 => 51,  131 => 48,  127 => 47,  123 => 46,  119 => 45,  115 => 44,  111 => 43,  108 => 42,  104 => 41,  70 => 9,  64 => 8,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de menús{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}

{% block body %}
    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de menús</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo menú</button>
                                    <hr>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descipción</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Calorias</th>
                                                    <th>Público</th>
                                                    <th>Apto para celiacos</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for menu in menus %}
                                                <tr>
                                                    <td>{{menu.nombre}}</td>
                                                    <td>{{menu.descripcion}}</td>
                                                    <td>{{ menu.fechaCreacion|date('Y-m-d') }}</td>
                                                    <td>{{menu.caloriasTotales}}</td>
                                                    <td>{{menu.publico}}</td>
                                                    <td>{{menu.celiaco ? 'Sí':'No'}}</td>                                             
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                        <a class=\"btn btn-default\" href=\"{{path('App_user_showMenu',{id : menu.id}) }}\">Ver</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteMenu',{id : menu.id}) }}\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            {% endfor %}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>

<!-- Mensaje de confirmación de eliminación-->
    <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    Mensaje de confirmación
                </div>
                <div class=\"modal-body\">
                    ¿Esta seguro de eliminar el elemento seleccionado?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-danger btn-ok\">Eliminar</a>
                </div>
            </div>
        </div>
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

{% endblock %}

{% block javascripts %}

 <!-- /.Botón de confirmación de eliminar-->
    <script>
        \$('#confirm-delete').on('show.bs.modal', function(e) 
        {\$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));});
    </script>

    <script>
        \$(document).ready(function(){\$('#myTable').DataTable();
        });
    </script>
<!-- /.Para añadir nuevo menú-->
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

{% endblock %}";
    }
}
