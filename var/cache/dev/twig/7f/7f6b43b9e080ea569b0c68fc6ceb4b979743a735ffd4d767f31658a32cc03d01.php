<?php

/* AdminBundle:Menu:list.html.twig */
class __TwigTemplate_a6a3c33d806cdcf02a4f5e07595d3bbebf257549b6a80755ebfaa0a901cc6740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Menu:list.html.twig", 1);
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
        $__internal_d9848ea2d9c934d8a627a7dd648dcb870b5c70a2d9078f4c00fa31cf33e54599 = $this->env->getExtension("native_profiler");
        $__internal_d9848ea2d9c934d8a627a7dd648dcb870b5c70a2d9078f4c00fa31cf33e54599->enter($__internal_d9848ea2d9c934d8a627a7dd648dcb870b5c70a2d9078f4c00fa31cf33e54599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Menu:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9848ea2d9c934d8a627a7dd648dcb870b5c70a2d9078f4c00fa31cf33e54599->leave($__internal_d9848ea2d9c934d8a627a7dd648dcb870b5c70a2d9078f4c00fa31cf33e54599_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bffeb362ac86671d9608d256e9d7d8b8384e828858df18226065957bbfaa79d = $this->env->getExtension("native_profiler");
        $__internal_5bffeb362ac86671d9608d256e9d7d8b8384e828858df18226065957bbfaa79d->enter($__internal_5bffeb362ac86671d9608d256e9d7d8b8384e828858df18226065957bbfaa79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de menús";
        
        $__internal_5bffeb362ac86671d9608d256e9d7d8b8384e828858df18226065957bbfaa79d->leave($__internal_5bffeb362ac86671d9608d256e9d7d8b8384e828858df18226065957bbfaa79d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_022a8344d2a28d6ada4f1c39f4b36242a1a178663b08992b3d104dfb55db0620 = $this->env->getExtension("native_profiler");
        $__internal_022a8344d2a28d6ada4f1c39f4b36242a1a178663b08992b3d104dfb55db0620->enter($__internal_022a8344d2a28d6ada4f1c39f4b36242a1a178663b08992b3d104dfb55db0620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_022a8344d2a28d6ada4f1c39f4b36242a1a178663b08992b3d104dfb55db0620->leave($__internal_022a8344d2a28d6ada4f1c39f4b36242a1a178663b08992b3d104dfb55db0620_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd8d83a18deb0c96f94e6fbc6469e8832f9ebbebe0b227f5a97d60d7df21f221 = $this->env->getExtension("native_profiler");
        $__internal_cd8d83a18deb0c96f94e6fbc6469e8832f9ebbebe0b227f5a97d60d7df21f221->enter($__internal_cd8d83a18deb0c96f94e6fbc6469e8832f9ebbebe0b227f5a97d60d7df21f221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("UserBundle:Menu:add.html.twig", "AdminBundle:Menu:list.html.twig", 97)->display(array_merge($context, array("formMenu" => (isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")))));
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
        
        $__internal_cd8d83a18deb0c96f94e6fbc6469e8832f9ebbebe0b227f5a97d60d7df21f221->leave($__internal_cd8d83a18deb0c96f94e6fbc6469e8832f9ebbebe0b227f5a97d60d7df21f221_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1067bfa4cf4b8004a2ed1a38a0aa30cb150b973e9ad2c23b4bd9589cdc41e5ca = $this->env->getExtension("native_profiler");
        $__internal_1067bfa4cf4b8004a2ed1a38a0aa30cb150b973e9ad2c23b4bd9589cdc41e5ca->enter($__internal_1067bfa4cf4b8004a2ed1a38a0aa30cb150b973e9ad2c23b4bd9589cdc41e5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1067bfa4cf4b8004a2ed1a38a0aa30cb150b973e9ad2c23b4bd9589cdc41e5ca->leave($__internal_1067bfa4cf4b8004a2ed1a38a0aa30cb150b973e9ad2c23b4bd9589cdc41e5ca_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Menu:list.html.twig";
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
