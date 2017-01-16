<?php

/* @User/Lista/show.html.twig */
class __TwigTemplate_a1a0e03fd7eb4c5d3acd3862a42ba5f8217b2442414cb2ec938e2c0887aa6447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/Lista/show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f20434c9469c684c05da803f6e0a7123c3574455cf6f60a80a8739ee98652c95 = $this->env->getExtension("native_profiler");
        $__internal_f20434c9469c684c05da803f6e0a7123c3574455cf6f60a80a8739ee98652c95->enter($__internal_f20434c9469c684c05da803f6e0a7123c3574455cf6f60a80a8739ee98652c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Lista/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f20434c9469c684c05da803f6e0a7123c3574455cf6f60a80a8739ee98652c95->leave($__internal_f20434c9469c684c05da803f6e0a7123c3574455cf6f60a80a8739ee98652c95_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e000e853e04862d0d27ebbe1ed27974d06ca3e97c64c9b557723000c3b9bf43e = $this->env->getExtension("native_profiler");
        $__internal_e000e853e04862d0d27ebbe1ed27974d06ca3e97c64c9b557723000c3b9bf43e->enter($__internal_e000e853e04862d0d27ebbe1ed27974d06ca3e97c64c9b557723000c3b9bf43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/select/1.2.0/css/select.bootstrap4.min.css\">

 <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatable/css/tablecostumize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />  

 ";
        
        $__internal_e000e853e04862d0d27ebbe1ed27974d06ca3e97c64c9b557723000c3b9bf43e->leave($__internal_e000e853e04862d0d27ebbe1ed27974d06ca3e97c64c9b557723000c3b9bf43e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_45586af0b0ae3aca490b94ff3d6ba44fe1f1e5ba145e3256bb83bb1e0fa2a457 = $this->env->getExtension("native_profiler");
        $__internal_45586af0b0ae3aca490b94ff3d6ba44fe1f1e5ba145e3256bb83bb1e0fa2a457->enter($__internal_45586af0b0ae3aca490b94ff3d6ba44fe1f1e5ba145e3256bb83bb1e0fa2a457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_45586af0b0ae3aca490b94ff3d6ba44fe1f1e5ba145e3256bb83bb1e0fa2a457->leave($__internal_45586af0b0ae3aca490b94ff3d6ba44fe1f1e5ba145e3256bb83bb1e0fa2a457_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7f2f102450b519e23aa49f16a6fa9a6cd9743d5e5ded50e8bfec06a62a06a70 = $this->env->getExtension("native_profiler");
        $__internal_b7f2f102450b519e23aa49f16a6fa9a6cd9743d5e5ded50e8bfec06a62a06a70->enter($__internal_b7f2f102450b519e23aa49f16a6fa9a6cd9743d5e5ded50e8bfec06a62a06a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
 <div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">

              <div class=\"events-top\">
                  <div class=\"col-md-12 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("App_user_listLista");
        echo "\">Lista de la compra \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista")), "nombre", array()), "html", null, true);
        echo " \"</a></h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                      </br>                      
                  </div>
            </div>
            <div class=\"row\">
\t\t        <div class=\"col-lg-12\">
\t\t            <h1 class=\"page-header\"> </h1>
\t\t        </div>
\t\t        <!-- /.col-lg-12 -->
\t\t    </div>
            
            <div class=\"row\">
\t\t\t        <div class=\"col-lg-12\">
\t\t\t                    <div class=\"row\">
\t\t\t                    </div>
\t\t\t                    <div class=\"dataTable_wrapper\">

\t\t\t                        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables\">
\t\t\t                            <thead>
\t\t\t                                <tr>
\t\t\t                                     <th>Ingrediente</th>
\t\t                                        <th>Cantidad</th>
\t\t                                        <th>Unidad de medida</th>
\t\t                                        <th>Comprado</th>
\t\t                                         <th></th>
\t\t\t                                </tr>
\t\t\t                            </thead>
\t\t\t                            <tbody>


\t\t\t                            </tbody>
\t\t\t                        </table>
\t\t\t                    </div>
\t\t\t                    <!-- /.table-responsive -->
\t\t\t        </div>
\t\t\t        <!-- /.col-lg-12 -->
\t\t\t    </div>
\t\t\t    <!-- /.row -->
        </br>
        <hr>
        </br>
            <div class=\"row\">
                    <div class=\"col-lg-12\">
                                <div class=\"row\">
                                </div>
                                <div class=\"dataTable_wrapper\">

                                    <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables2\">
                                        <thead>
                                            <tr>
                                                 <th>Menú</th>
                                                <th>Nº comensales</th>
                                                 <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
\t\t\t    <div class=\"clearfix\"></div>
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
                <h4 class=\"modal-title\">Confirmación </h4>
              </div>
              <div class=\"modal-body\">

              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
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

                    <div class=\"modal-body\" id=\"deleteMessage\">
                        <p>¿Desea borrar el elemento de esta lista?</p>
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        <a class=\"btn btn-danger btn-ok\">Borrar</a>
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
                <h4 class=\"modal-title\">Añadir ingrediente</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      ";
        // line 147
        $this->loadTemplate("UserBundle:OrdenCompra:add2.html.twig", "@User/Lista/show.html.twig", 147)->display(array_merge($context, array("formOrdenCompra" => (isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")))));
        // line 148
        echo "                  </div>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>
            </div>
          </div>
        </div>

";
        
        $__internal_b7f2f102450b519e23aa49f16a6fa9a6cd9743d5e5ded50e8bfec06a62a06a70->leave($__internal_b7f2f102450b519e23aa49f16a6fa9a6cd9743d5e5ded50e8bfec06a62a06a70_prof);

    }

    // line 158
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef106e4e63b62715a9f548f8d88b5bdae90253f8184100ff08d1591d618ea167 = $this->env->getExtension("native_profiler");
        $__internal_ef106e4e63b62715a9f548f8d88b5bdae90253f8184100ff08d1591d618ea167->enter($__internal_ef106e4e63b62715a9f548f8d88b5bdae90253f8184100ff08d1591d618ea167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 159
        echo "
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatable/js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatable/js/dataTables.select.min.js"), "html", null, true);
        echo "\"></script>

    <script>
    \$(document).ready(function() {
        var table = \$('#dataTables').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                {
                    extend: 'pdfHtml5',
                    title: 'La lista ";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista")), "nombre", array()), "html", null, true);
        echo " tienes los siguientes ingredientes:',
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
                },
                'selectAll'
            ],
             \"language\": {
                \"url\": \"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatable/js/Spanish.json"), "html", null, true);
        echo "\"
            },
            autoWidth: false,
            \"sAjaxDataProp\":\"\",
            \"sAjaxSource\": \"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showListaJson", array("id" => $this->getAttribute((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista")), "id", array()))), "html", null, true);
        echo "\",
            \"columns\": [
                {
                    \"data\": \"ingrediente\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"cantidad\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"unidad\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"estado\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\",
                    \"render\":function (data) {
                    if(data){
                    return \"Sí\";
                    }
                    else{
                    return \"No\";
                    }
                    }
                },
                {
                    \"data\": \"idOrden\",
                    bSortable: false,
                    \"defaultContent\": \"<i>Not set</i>\",
                    mRender:
                    function (data, type, row) {

                               Delete= \"http://127.0.0.1/pfg_eneko/web/app_dev.php/deleteOrdenCompra/\"+data;
                               return '<button onclick=\"modifyEstado(\\''+data+'\\')\" class=\"btn btn-warning\" ><i class=\"glyphicon glyphicon-edit\"> </i> Comprar </button> <button class=\"btn btn-danger\" data-href=\\\"' + Delete + '\\\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i> Borrar</button>';

                        }
                }
                ],
                select: {
                    style: 'multi'
                },
            });
        });
    </script>
    <script>
    \$(document).ready(function() {
        var table = \$('#dataTables2').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                {
                    extend: 'pdfHtml5',
                    title: 'La lista ";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista")), "nombre", array()), "html", null, true);
        echo " tienes los siguientes ingredientes:',
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
                },
                'selectAll'
            ],
             \"language\": {
                \"url\": \"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datatable/js/Spanish.json"), "html", null, true);
        echo "\"
            },
            autoWidth: false,
            \"sAjaxDataProp\":\"\",
            \"sAjaxSource\": \"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showMenuListaJson", array("id" => $this->getAttribute((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista")), "id", array()))), "html", null, true);
        echo "\",
            \"columns\": [
                {
                    \"data\": \"menu\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"comensales\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"idMenu\",
                    bSortable: false,
                    \"defaultContent\": \"<i>Not set</i>\",
                    mRender:
                    function (data, type, row) {

                               Delete= \"http://127.0.0.1/pfg_eneko/web/app_dev.php/deleteMenuLista/\"+data+\"/\"+'";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista")), "id", array()), "html", null, true);
        echo "';

                               return '<button class=\"btn btn-danger\" data-href=\\\"' + Delete + '\\\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i> Borrar</button>';

                        }
                }
                ],
                select: {
                    style: 'multi'
                },
            });
        });
    </script>
    <script>
        function modifyEstado(data)
        {
                \$.ajax
                ({
                    type: \"POST\",
                    url: \"http://127.0.0.1/pfg_eneko/web/app_dev.php/modifyEstadoOrdenCompra/\"+data,
                    complete: function(jqXHR) 
                    {
\t\t\t\t\t\t\t\$('#dataTables').DataTable().ajax.reload();
                            \$('#dataTables2').DataTable().ajax.reload();   

                    },
                });
        };
    </script>

    <script>
        \$('#confirm-delete').on('show.bs.modal', function(e) {
            \$(\".btn-ok\").click(function () {
                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \$(e.relatedTarget).data('href'),
                    success: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');
                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Borrar')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                        \$('#dataTables').DataTable().ajax.reload();
                            \$('#dataTables2').DataTable().ajax.reload();  

                    }
                });
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
            complete: function(jqXHR) {
                        \$('#myModal').modal('hide');

                        \$('#addConfirm').find('.modal-body').html('El ingrediente se ha sido agregado correctamente a la lista');
                        \$('#addConfirm').find('.modal-title').html('Añadir')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                        \$('#dataTables').DataTable().ajax.reload();
                            \$('#dataTables2').DataTable().ajax.reload();  

                    }
            });
        });
    </script>
";
        
        $__internal_ef106e4e63b62715a9f548f8d88b5bdae90253f8184100ff08d1591d618ea167->leave($__internal_ef106e4e63b62715a9f548f8d88b5bdae90253f8184100ff08d1591d618ea167_prof);

    }

    public function getTemplateName()
    {
        return "@User/Lista/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 285,  373 => 268,  366 => 264,  347 => 248,  289 => 193,  282 => 189,  263 => 173,  248 => 161,  244 => 160,  241 => 159,  235 => 158,  219 => 148,  217 => 147,  85 => 20,  76 => 13,  70 => 12,  58 => 10,  48 => 6,  43 => 3,  37 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseuser.html.twig' %}
{% block stylesheets %}

<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/select/1.2.0/css/select.bootstrap4.min.css\">

 <link href=\"{{ asset('datatable/css/tablecostumize.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />  

 {% endblock %}

{% block title %}Eat&Fit{% endblock%}

{% block body %}

 <div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">

              <div class=\"events-top\">
                  <div class=\"col-md-12 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3><a href=\"{{ path('App_user_listLista') }}\">Lista de la compra \"{{lista.nombre}} \"</a></h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                      </br>                      
                  </div>
            </div>
            <div class=\"row\">
\t\t        <div class=\"col-lg-12\">
\t\t            <h1 class=\"page-header\"> </h1>
\t\t        </div>
\t\t        <!-- /.col-lg-12 -->
\t\t    </div>
            
            <div class=\"row\">
\t\t\t        <div class=\"col-lg-12\">
\t\t\t                    <div class=\"row\">
\t\t\t                    </div>
\t\t\t                    <div class=\"dataTable_wrapper\">

\t\t\t                        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables\">
\t\t\t                            <thead>
\t\t\t                                <tr>
\t\t\t                                     <th>Ingrediente</th>
\t\t                                        <th>Cantidad</th>
\t\t                                        <th>Unidad de medida</th>
\t\t                                        <th>Comprado</th>
\t\t                                         <th></th>
\t\t\t                                </tr>
\t\t\t                            </thead>
\t\t\t                            <tbody>


\t\t\t                            </tbody>
\t\t\t                        </table>
\t\t\t                    </div>
\t\t\t                    <!-- /.table-responsive -->
\t\t\t        </div>
\t\t\t        <!-- /.col-lg-12 -->
\t\t\t    </div>
\t\t\t    <!-- /.row -->
        </br>
        <hr>
        </br>
            <div class=\"row\">
                    <div class=\"col-lg-12\">
                                <div class=\"row\">
                                </div>
                                <div class=\"dataTable_wrapper\">

                                    <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables2\">
                                        <thead>
                                            <tr>
                                                 <th>Menú</th>
                                                <th>Nº comensales</th>
                                                 <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
\t\t\t    <div class=\"clearfix\"></div>
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
                <h4 class=\"modal-title\">Confirmación </h4>
              </div>
              <div class=\"modal-body\">

              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
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

                    <div class=\"modal-body\" id=\"deleteMessage\">
                        <p>¿Desea borrar el elemento de esta lista?</p>
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        <a class=\"btn btn-danger btn-ok\">Borrar</a>
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
                <h4 class=\"modal-title\">Añadir ingrediente</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      {% include \"UserBundle:OrdenCompra:add2.html.twig\"  with {'formOrdenCompra': formOrdenCompra} %}
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

    <script src=\"{{ asset('datatable/js/datatables.min.js') }}\"></script>
    <script src=\"{{asset ('datatable/js/dataTables.select.min.js')}}\"></script>

    <script>
    \$(document).ready(function() {
        var table = \$('#dataTables').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                {
                    extend: 'pdfHtml5',
                    title: 'La lista {{lista.nombre}} tienes los siguientes ingredientes:',
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
                },
                'selectAll'
            ],
             \"language\": {
                \"url\": \"{{asset ('datatable/js/Spanish.json')}}\"
            },
            autoWidth: false,
            \"sAjaxDataProp\":\"\",
            \"sAjaxSource\": \"{{ path('App_user_showListaJson', {id : lista.id})}}\",
            \"columns\": [
                {
                    \"data\": \"ingrediente\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"cantidad\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"unidad\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"estado\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\",
                    \"render\":function (data) {
                    if(data){
                    return \"Sí\";
                    }
                    else{
                    return \"No\";
                    }
                    }
                },
                {
                    \"data\": \"idOrden\",
                    bSortable: false,
                    \"defaultContent\": \"<i>Not set</i>\",
                    mRender:
                    function (data, type, row) {

                               Delete= \"http://127.0.0.1/pfg_eneko/web/app_dev.php/deleteOrdenCompra/\"+data;
                               return '<button onclick=\"modifyEstado(\\''+data+'\\')\" class=\"btn btn-warning\" ><i class=\"glyphicon glyphicon-edit\"> </i> Comprar </button> <button class=\"btn btn-danger\" data-href=\\\"' + Delete + '\\\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i> Borrar</button>';

                        }
                }
                ],
                select: {
                    style: 'multi'
                },
            });
        });
    </script>
    <script>
    \$(document).ready(function() {
        var table = \$('#dataTables2').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                {
                    extend: 'pdfHtml5',
                    title: 'La lista {{lista.nombre}} tienes los siguientes ingredientes:',
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
                },
                'selectAll'
            ],
             \"language\": {
                \"url\": \"{{asset ('datatable/js/Spanish.json')}}\"
            },
            autoWidth: false,
            \"sAjaxDataProp\":\"\",
            \"sAjaxSource\": \"{{ path('App_user_showMenuListaJson', {id : lista.id})}}\",
            \"columns\": [
                {
                    \"data\": \"menu\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"comensales\", // can be null or undefined
                    \"defaultContent\": \"<i>Not set</i>\"
                },
                {
                    \"data\": \"idMenu\",
                    bSortable: false,
                    \"defaultContent\": \"<i>Not set</i>\",
                    mRender:
                    function (data, type, row) {

                               Delete= \"http://127.0.0.1/pfg_eneko/web/app_dev.php/deleteMenuLista/\"+data+\"/\"+'{{ lista.id }}';

                               return '<button class=\"btn btn-danger\" data-href=\\\"' + Delete + '\\\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i> Borrar</button>';

                        }
                }
                ],
                select: {
                    style: 'multi'
                },
            });
        });
    </script>
    <script>
        function modifyEstado(data)
        {
                \$.ajax
                ({
                    type: \"POST\",
                    url: \"http://127.0.0.1/pfg_eneko/web/app_dev.php/modifyEstadoOrdenCompra/\"+data,
                    complete: function(jqXHR) 
                    {
\t\t\t\t\t\t\t\$('#dataTables').DataTable().ajax.reload();
                            \$('#dataTables2').DataTable().ajax.reload();   

                    },
                });
        };
    </script>

    <script>
        \$('#confirm-delete').on('show.bs.modal', function(e) {
            \$(\".btn-ok\").click(function () {
                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \$(e.relatedTarget).data('href'),
                    success: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');
                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Borrar')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                        \$('#dataTables').DataTable().ajax.reload();
                            \$('#dataTables2').DataTable().ajax.reload();  

                    }
                });
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
            complete: function(jqXHR) {
                        \$('#myModal').modal('hide');

                        \$('#addConfirm').find('.modal-body').html('El ingrediente se ha sido agregado correctamente a la lista');
                        \$('#addConfirm').find('.modal-title').html('Añadir')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                        \$('#dataTables').DataTable().ajax.reload();
                            \$('#dataTables2').DataTable().ajax.reload();  

                    }
            });
        });
    </script>
{% endblock %}";
    }
}
