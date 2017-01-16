<?php

/* AdminBundle:Ingrediente:list.html.twig */
class __TwigTemplate_fd5a15a90c3ccc8a34f7b1168bde639d2e0734bdcbae723c94d62fb6e828712e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Ingrediente:list.html.twig", 1);
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
        $__internal_53c1588033415a20a19a18b08902f9db2dbcc0d8d8bcacf53769a36d5fdc49a7 = $this->env->getExtension("native_profiler");
        $__internal_53c1588033415a20a19a18b08902f9db2dbcc0d8d8bcacf53769a36d5fdc49a7->enter($__internal_53c1588033415a20a19a18b08902f9db2dbcc0d8d8bcacf53769a36d5fdc49a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Ingrediente:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53c1588033415a20a19a18b08902f9db2dbcc0d8d8bcacf53769a36d5fdc49a7->leave($__internal_53c1588033415a20a19a18b08902f9db2dbcc0d8d8bcacf53769a36d5fdc49a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62aa87bc78ce78493742828c15feea478086c602d391b05db98dd52a38451f03 = $this->env->getExtension("native_profiler");
        $__internal_62aa87bc78ce78493742828c15feea478086c602d391b05db98dd52a38451f03->enter($__internal_62aa87bc78ce78493742828c15feea478086c602d391b05db98dd52a38451f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de ingredientes";
        
        $__internal_62aa87bc78ce78493742828c15feea478086c602d391b05db98dd52a38451f03->leave($__internal_62aa87bc78ce78493742828c15feea478086c602d391b05db98dd52a38451f03_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc2cc3fd642a9cc08b46716e6da19bd053f608e64a92893a50ad495c7991defe = $this->env->getExtension("native_profiler");
        $__internal_dc2cc3fd642a9cc08b46716e6da19bd053f608e64a92893a50ad495c7991defe->enter($__internal_dc2cc3fd642a9cc08b46716e6da19bd053f608e64a92893a50ad495c7991defe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_dc2cc3fd642a9cc08b46716e6da19bd053f608e64a92893a50ad495c7991defe->leave($__internal_dc2cc3fd642a9cc08b46716e6da19bd053f608e64a92893a50ad495c7991defe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_488d998827bd97013016efbe049bb26e32dcb500a8caf3ce21c490e6f9dec340 = $this->env->getExtension("native_profiler");
        $__internal_488d998827bd97013016efbe049bb26e32dcb500a8caf3ce21c490e6f9dec340->enter($__internal_488d998827bd97013016efbe049bb26e32dcb500a8caf3ce21c490e6f9dec340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">INGREDIENTES</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de ingredientes</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo ingrediente</button>
                                    <hr>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Tipo</th>
                                                    <th>Unidad de medida</th>
                                                    <th>Calorías/Unidad</th>
                                                    <th>Apto para celiacos</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
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
                    <button class=\"btn btn-danger btn-ok\" id = \"delete\">Eliminar</button>
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
                <h4 class=\"modal-title\">Añadir Ingrediente</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      ";
        // line 83
        $this->loadTemplate("AdminBundle:Ingrediente:add.html.twig", "AdminBundle:Ingrediente:list.html.twig", 83)->display(array_merge($context, array("formIngrediente" => (isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")))));
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

";
        
        $__internal_488d998827bd97013016efbe049bb26e32dcb500a8caf3ce21c490e6f9dec340->leave($__internal_488d998827bd97013016efbe049bb26e32dcb500a8caf3ce21c490e6f9dec340_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bfb8b36456415653b533c01d9f59261189887acc531562e6a7728fc6687b6a3c = $this->env->getExtension("native_profiler");
        $__internal_bfb8b36456415653b533c01d9f59261189887acc531562e6a7728fc6687b6a3c->enter($__internal_bfb8b36456415653b533c01d9f59261189887acc531562e6a7728fc6687b6a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "
 <!-- /.Botón de confirmación de eliminar-->
    <script>
        \$('#confirm-delete').on('show.bs.modal', function(e) 
        {\$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));});
    </script>

    <script>
    \$(document).ready(function() {
        var table = \$('#myTable').DataTable( {
            destroy: true,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                {
                    extend: 'pdfHtml5',
                    title: 'Lista de ingredientes',
                    exportOptions: {
                        columns: ':visible'
                    },
                    download: 'open'
                },                
                'colvis',
                {
                    text : 'Recargar',
                    action : function ( e, dt, node, config ) {
                        dt.ajax.reload();
                    }
                }
            ],
             \"language\": {
                \"url\": \"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatable/js/Spanish.json"), "html", null, true);
        echo "\"
            },
            autoWidth: false,
            \"sAjaxDataProp\":\"\",
            \"sAjaxSource\": \"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("App_admin_listIngrediente_reload");
        echo "\",
            \"columns\": [
                {
                    \"data\": \"nombre\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"descripcion\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"tipoIngrediente\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },  
                {
                    \"data\": \"unidadMedida\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },  
                {
                    \"data\": \"caloriasUnidad\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                }, 
                {
                    \"data\": \"celiaco\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"id\",
                    bSortable: false,
                    mRender: 
                    function (data, type, row) {                            
                           
                           myUrlShow = \"http://127.0.0.1/pfg_eneko/web/app_dev.php/admin/modifyIngrediente/\"+ data;

                           myUrlEdit = \"http://127.0.0.1/pfg_eneko/web/app_dev.php/admin/deleteIngrediente/\"+ data;

                           return '<a href=\\\"' + myUrlShow + '\\\" class=\"btn btn-primary\" > Ver</a> <a data-href=\\\"' + myUrlEdit + '\\\" class=\"btn btn-default\" data-toggle=\"modal\"data-target=\"#confirm-delete\"> Eliminar</a>';
                        }
                }
                ]
            });
        });
    </script>

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
                        \$('#addConfirm').find('.modal-title').html('Mensaje de confirmación')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();
                        \$('#myTable').DataTable().ajax.reload();

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
        \$('#confirm-delete').on('show.bs.modal', function(e) {

            \$(\"#delete\").click(function () {
               

                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \$(e.relatedTarget).data('href'),
                    success: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Borrar ingrediente')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();
                        \$('#myTable').DataTable().ajax.reload(); 

                    },
                    error: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.responseJSON.message);
                        \$('#addConfirm').find('.modal-title').html('No ha sido eliminado el ingrediente')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();
                    },
                }); 
            });
        });
    </script>

";
        
        $__internal_bfb8b36456415653b533c01d9f59261189887acc531562e6a7728fc6687b6a3c->leave($__internal_bfb8b36456415653b533c01d9f59261189887acc531562e6a7728fc6687b6a3c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Ingrediente:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 173,  245 => 169,  210 => 136,  204 => 135,  148 => 84,  146 => 83,  72 => 11,  66 => 10,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de ingredientes{% endblock %}
{% block stylesheets %}
{{ parent() }}
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">INGREDIENTES</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de ingredientes</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo ingrediente</button>
                                    <hr>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Tipo</th>
                                                    <th>Unidad de medida</th>
                                                    <th>Calorías/Unidad</th>
                                                    <th>Apto para celiacos</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
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
                    <button class=\"btn btn-danger btn-ok\" id = \"delete\">Eliminar</button>
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
                <h4 class=\"modal-title\">Añadir Ingrediente</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      {% include \"AdminBundle:Ingrediente:add.html.twig\"  with {'formIngrediente': formIngrediente} %}
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

{% endblock %}

{% block javascripts %}

 <!-- /.Botón de confirmación de eliminar-->
    <script>
        \$('#confirm-delete').on('show.bs.modal', function(e) 
        {\$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));});
    </script>

    <script>
    \$(document).ready(function() {
        var table = \$('#myTable').DataTable( {
            destroy: true,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                {
                    extend: 'pdfHtml5',
                    title: 'Lista de ingredientes',
                    exportOptions: {
                        columns: ':visible'
                    },
                    download: 'open'
                },                
                'colvis',
                {
                    text : 'Recargar',
                    action : function ( e, dt, node, config ) {
                        dt.ajax.reload();
                    }
                }
            ],
             \"language\": {
                \"url\": \"{{asset ('datatable/js/Spanish.json')}}\"
            },
            autoWidth: false,
            \"sAjaxDataProp\":\"\",
            \"sAjaxSource\": \"{{ path('App_admin_listIngrediente_reload')}}\",
            \"columns\": [
                {
                    \"data\": \"nombre\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"descripcion\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"tipoIngrediente\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },  
                {
                    \"data\": \"unidadMedida\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },  
                {
                    \"data\": \"caloriasUnidad\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                }, 
                {
                    \"data\": \"celiaco\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"id\",
                    bSortable: false,
                    mRender: 
                    function (data, type, row) {                            
                           
                           myUrlShow = \"http://127.0.0.1/pfg_eneko/web/app_dev.php/admin/modifyIngrediente/\"+ data;

                           myUrlEdit = \"http://127.0.0.1/pfg_eneko/web/app_dev.php/admin/deleteIngrediente/\"+ data;

                           return '<a href=\\\"' + myUrlShow + '\\\" class=\"btn btn-primary\" > Ver</a> <a data-href=\\\"' + myUrlEdit + '\\\" class=\"btn btn-default\" data-toggle=\"modal\"data-target=\"#confirm-delete\"> Eliminar</a>';
                        }
                }
                ]
            });
        });
    </script>

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
                        \$('#addConfirm').find('.modal-title').html('Mensaje de confirmación')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();
                        \$('#myTable').DataTable().ajax.reload();

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
        \$('#confirm-delete').on('show.bs.modal', function(e) {

            \$(\"#delete\").click(function () {
               

                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \$(e.relatedTarget).data('href'),
                    success: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Borrar ingrediente')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();
                        \$('#myTable').DataTable().ajax.reload(); 

                    },
                    error: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.responseJSON.message);
                        \$('#addConfirm').find('.modal-title').html('No ha sido eliminado el ingrediente')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();
                    },
                }); 
            });
        });
    </script>

{% endblock %}
";
    }
}
