<?php

/* AdminBundle:TipoReceta:list.html.twig */
class __TwigTemplate_7d32b851a876f4d05fb1f1b52e9598be3f95c58a5bd22e4e52aac13784f3dc8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:TipoReceta:list.html.twig", 1);
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
        $__internal_3dd10eae09d5f54e9b6c107c5c1352db0d217454a74feeccee54393ead566670 = $this->env->getExtension("native_profiler");
        $__internal_3dd10eae09d5f54e9b6c107c5c1352db0d217454a74feeccee54393ead566670->enter($__internal_3dd10eae09d5f54e9b6c107c5c1352db0d217454a74feeccee54393ead566670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TipoReceta:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd10eae09d5f54e9b6c107c5c1352db0d217454a74feeccee54393ead566670->leave($__internal_3dd10eae09d5f54e9b6c107c5c1352db0d217454a74feeccee54393ead566670_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e61bc88540f99384e6e6135918c1801e42d4c95f42a6635f82c0611dd3cd41a = $this->env->getExtension("native_profiler");
        $__internal_4e61bc88540f99384e6e6135918c1801e42d4c95f42a6635f82c0611dd3cd41a->enter($__internal_4e61bc88540f99384e6e6135918c1801e42d4c95f42a6635f82c0611dd3cd41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de tipos de recetas";
        
        $__internal_4e61bc88540f99384e6e6135918c1801e42d4c95f42a6635f82c0611dd3cd41a->leave($__internal_4e61bc88540f99384e6e6135918c1801e42d4c95f42a6635f82c0611dd3cd41a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c08de4c971bee353ef9513aa96d184d4f23d219340c7dff4fea4f890b0a7bfab = $this->env->getExtension("native_profiler");
        $__internal_c08de4c971bee353ef9513aa96d184d4f23d219340c7dff4fea4f890b0a7bfab->enter($__internal_c08de4c971bee353ef9513aa96d184d4f23d219340c7dff4fea4f890b0a7bfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_c08de4c971bee353ef9513aa96d184d4f23d219340c7dff4fea4f890b0a7bfab->leave($__internal_c08de4c971bee353ef9513aa96d184d4f23d219340c7dff4fea4f890b0a7bfab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_774f8e8544de4d5158e577876935eb033cb8eb2db737ab496bd8869e54db7485 = $this->env->getExtension("native_profiler");
        $__internal_774f8e8544de4d5158e577876935eb033cb8eb2db737ab496bd8869e54db7485->enter($__internal_774f8e8544de4d5158e577876935eb033cb8eb2db737ab496bd8869e54db7485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TIPOS DE RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de tipos de recetas</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo tipo de receta</button>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tiposReceta"]) ? $context["tiposReceta"] : $this->getContext($context, "tiposReceta")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoReceta"]) {
            // line 38
            echo "                                                <tr>
                                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipoReceta"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyTipoReceta", array("id" => $this->getAttribute($context["tipoReceta"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteTipoReceta", array("id" => $this->getAttribute($context["tipoReceta"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoReceta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
                <h4 class=\"modal-title\">Añadir Tipo de Receta</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      ";
        // line 87
        $this->loadTemplate("AdminBundle:TipoReceta:add.html.twig", "AdminBundle:TipoReceta:list.html.twig", 87)->display(array_merge($context, array("formTipo" => (isset($context["formTipo"]) ? $context["formTipo"] : $this->getContext($context, "formTipo")))));
        // line 88
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
        
        $__internal_774f8e8544de4d5158e577876935eb033cb8eb2db737ab496bd8869e54db7485->leave($__internal_774f8e8544de4d5158e577876935eb033cb8eb2db737ab496bd8869e54db7485_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3db1874e41b2285069c7328423f6a4920446c082745181c735693697bebcacbf = $this->env->getExtension("native_profiler");
        $__internal_3db1874e41b2285069c7328423f6a4920446c082745181c735693697bebcacbf->enter($__internal_3db1874e41b2285069c7328423f6a4920446c082745181c735693697bebcacbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
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

    !-- /.Para añadir nuevo tipo de receta-->
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
        
        $__internal_3db1874e41b2285069c7328423f6a4920446c082745181c735693697bebcacbf->leave($__internal_3db1874e41b2285069c7328423f6a4920446c082745181c735693697bebcacbf_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TipoReceta:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 122,  209 => 121,  171 => 88,  169 => 87,  128 => 48,  117 => 43,  113 => 42,  107 => 39,  104 => 38,  100 => 37,  72 => 11,  66 => 10,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de tipos de recetas{% endblock %}
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
                        <span class=\"title\">TIPOS DE RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de tipos de recetas</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo tipo de receta</button>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for tipoReceta in tiposReceta %}
                                                <tr>
                                                    <td>{{tipoReceta.nombre}}</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"{{path('App_admin_modifyTipoReceta',{id : tipoReceta.id}) }}\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteTipoReceta',{id : tipoReceta.id}) }}\">Eliminar</a>
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
                <h4 class=\"modal-title\">Añadir Tipo de Receta</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      {% include \"AdminBundle:TipoReceta:add.html.twig\"  with {'formTipo': formTipo} %}
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

    !-- /.Para añadir nuevo tipo de receta-->
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

{% endblock %}

";
    }
}
