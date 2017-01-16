<?php

/* @Admin/Ingrediente/list.html.twig */
class __TwigTemplate_f3e32b8b06e72307182e4d865b3919362a9fa617357cf8cfa73c107eb4254f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Ingrediente/list.html.twig", 1);
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
        $__internal_ebbbd812a6df2edca434e93fde5c56385f2ee598c598dda986bfea6d93e76dfc = $this->env->getExtension("native_profiler");
        $__internal_ebbbd812a6df2edca434e93fde5c56385f2ee598c598dda986bfea6d93e76dfc->enter($__internal_ebbbd812a6df2edca434e93fde5c56385f2ee598c598dda986bfea6d93e76dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Ingrediente/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebbbd812a6df2edca434e93fde5c56385f2ee598c598dda986bfea6d93e76dfc->leave($__internal_ebbbd812a6df2edca434e93fde5c56385f2ee598c598dda986bfea6d93e76dfc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55290135a9eebc47377324f364a82c30369027eb96dfce795a63b5be35fa962e = $this->env->getExtension("native_profiler");
        $__internal_55290135a9eebc47377324f364a82c30369027eb96dfce795a63b5be35fa962e->enter($__internal_55290135a9eebc47377324f364a82c30369027eb96dfce795a63b5be35fa962e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de ingredientes";
        
        $__internal_55290135a9eebc47377324f364a82c30369027eb96dfce795a63b5be35fa962e->leave($__internal_55290135a9eebc47377324f364a82c30369027eb96dfce795a63b5be35fa962e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae430033680605b392e98c02637b0f50df4ff046b7c810ce328c752f20860014 = $this->env->getExtension("native_profiler");
        $__internal_ae430033680605b392e98c02637b0f50df4ff046b7c810ce328c752f20860014->enter($__internal_ae430033680605b392e98c02637b0f50df4ff046b7c810ce328c752f20860014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_ae430033680605b392e98c02637b0f50df4ff046b7c810ce328c752f20860014->leave($__internal_ae430033680605b392e98c02637b0f50df4ff046b7c810ce328c752f20860014_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ead2b3f71917fc0b75aca719312c379e1252420035af0d3093a7ee741657dfc = $this->env->getExtension("native_profiler");
        $__internal_8ead2b3f71917fc0b75aca719312c379e1252420035af0d3093a7ee741657dfc->enter($__internal_8ead2b3f71917fc0b75aca719312c379e1252420035af0d3093a7ee741657dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Ingrediente:add.html.twig", "@Admin/Ingrediente/list.html.twig", 83)->display(array_merge($context, array("formIngrediente" => (isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")))));
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
        
        $__internal_8ead2b3f71917fc0b75aca719312c379e1252420035af0d3093a7ee741657dfc->leave($__internal_8ead2b3f71917fc0b75aca719312c379e1252420035af0d3093a7ee741657dfc_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd7a55370695f0a9f7612771c1a687e3b0dfa1273489b08db27adf6a1ce5dcdd = $this->env->getExtension("native_profiler");
        $__internal_bd7a55370695f0a9f7612771c1a687e3b0dfa1273489b08db27adf6a1ce5dcdd->enter($__internal_bd7a55370695f0a9f7612771c1a687e3b0dfa1273489b08db27adf6a1ce5dcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                        \$('#addConfirm').find('.modal-title').html('Añadir')
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
        
        $__internal_bd7a55370695f0a9f7612771c1a687e3b0dfa1273489b08db27adf6a1ce5dcdd->leave($__internal_bd7a55370695f0a9f7612771c1a687e3b0dfa1273489b08db27adf6a1ce5dcdd_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Ingrediente/list.html.twig";
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
                        \$('#addConfirm').find('.modal-title').html('Añadir')
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
