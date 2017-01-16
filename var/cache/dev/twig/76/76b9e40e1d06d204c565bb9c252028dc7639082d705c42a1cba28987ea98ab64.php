<?php

/* @Admin/Utensilio/list.html.twig */
class __TwigTemplate_be6819106d449f750ee07af86192b57fd97671c57d1324042e913c8e46ac20fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Utensilio/list.html.twig", 1);
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
        $__internal_3502ce3d809341b8634f409ca67c11caeaf125f8bb5b953c3c40d927e5d76c31 = $this->env->getExtension("native_profiler");
        $__internal_3502ce3d809341b8634f409ca67c11caeaf125f8bb5b953c3c40d927e5d76c31->enter($__internal_3502ce3d809341b8634f409ca67c11caeaf125f8bb5b953c3c40d927e5d76c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Utensilio/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3502ce3d809341b8634f409ca67c11caeaf125f8bb5b953c3c40d927e5d76c31->leave($__internal_3502ce3d809341b8634f409ca67c11caeaf125f8bb5b953c3c40d927e5d76c31_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10909919a75e52868ef5a3388cc67d13d51e189a1c53582f086156c3ce8ecc4d = $this->env->getExtension("native_profiler");
        $__internal_10909919a75e52868ef5a3388cc67d13d51e189a1c53582f086156c3ce8ecc4d->enter($__internal_10909919a75e52868ef5a3388cc67d13d51e189a1c53582f086156c3ce8ecc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de utensilios";
        
        $__internal_10909919a75e52868ef5a3388cc67d13d51e189a1c53582f086156c3ce8ecc4d->leave($__internal_10909919a75e52868ef5a3388cc67d13d51e189a1c53582f086156c3ce8ecc4d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b46a1eae19299a8e9106516e30eb0559f28c9ead63624ae3922333025586b16 = $this->env->getExtension("native_profiler");
        $__internal_2b46a1eae19299a8e9106516e30eb0559f28c9ead63624ae3922333025586b16->enter($__internal_2b46a1eae19299a8e9106516e30eb0559f28c9ead63624ae3922333025586b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_2b46a1eae19299a8e9106516e30eb0559f28c9ead63624ae3922333025586b16->leave($__internal_2b46a1eae19299a8e9106516e30eb0559f28c9ead63624ae3922333025586b16_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9dfcb0b78652518052c41aa999c89598684c56729c441d31381dba67ead1379 = $this->env->getExtension("native_profiler");
        $__internal_c9dfcb0b78652518052c41aa999c89598684c56729c441d31381dba67ead1379->enter($__internal_c9dfcb0b78652518052c41aa999c89598684c56729c441d31381dba67ead1379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">UTENSILIOS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de utensilios</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                   <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir utensilio</button>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utensilios"]) ? $context["utensilios"] : $this->getContext($context, "utensilios")));
        foreach ($context['_seq'] as $context["_key"] => $context["utensilio"]) {
            // line 39
            echo "                                                <tr>
                                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["utensilio"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["utensilio"], "descripcion", array()), "html", null, true);
            echo "</td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                    <td>
                                                            <a class=\"btn btn-default\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyUtensilio", array("id" => $this->getAttribute($context["utensilio"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteUtensilio", array("id" => $this->getAttribute($context["utensilio"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utensilio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
                <h4 class=\"modal-title\">Añadir Utensilio</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      ";
        // line 88
        $this->loadTemplate("AdminBundle:Utensilio:add.html.twig", "@Admin/Utensilio/list.html.twig", 88)->display(array_merge($context, array("formUtensilio" => (isset($context["formUtensilio"]) ? $context["formUtensilio"] : $this->getContext($context, "formUtensilio")))));
        // line 89
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
        
        $__internal_c9dfcb0b78652518052c41aa999c89598684c56729c441d31381dba67ead1379->leave($__internal_c9dfcb0b78652518052c41aa999c89598684c56729c441d31381dba67ead1379_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22ce525c04b69707678f5c72f60ab8edb472bfd441326562efe74e46084d23c9 = $this->env->getExtension("native_profiler");
        $__internal_22ce525c04b69707678f5c72f60ab8edb472bfd441326562efe74e46084d23c9->enter($__internal_22ce525c04b69707678f5c72f60ab8edb472bfd441326562efe74e46084d23c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
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

    !-- /.Para añadir nuevo utensilio-->
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
        
        $__internal_22ce525c04b69707678f5c72f60ab8edb472bfd441326562efe74e46084d23c9->leave($__internal_22ce525c04b69707678f5c72f60ab8edb472bfd441326562efe74e46084d23c9_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Utensilio/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 123,  213 => 122,  175 => 89,  173 => 88,  132 => 49,  122 => 45,  118 => 44,  112 => 41,  108 => 40,  105 => 39,  101 => 38,  72 => 11,  66 => 10,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de utensilios{% endblock %}
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
                        <span class=\"title\">UTENSILIOS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de utensilios</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                   <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir utensilio</button>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for utensilio in utensilios %}
                                                <tr>
                                                    <td>{{utensilio.nombre}}</td>
                                                    <td>{{utensilio.descripcion}}</td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                    <td>
                                                            <a class=\"btn btn-default\" href=\"{{path('App_admin_modifyUtensilio',{id : utensilio.id}) }}\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteUtensilio',{id : utensilio.id}) }}\">Eliminar</a>
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
                <h4 class=\"modal-title\">Añadir Utensilio</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      {% include \"AdminBundle:Utensilio:add.html.twig\"  with {'formUtensilio': formUtensilio} %}
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

    !-- /.Para añadir nuevo utensilio-->
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

{% endblock %}
";
    }
}
