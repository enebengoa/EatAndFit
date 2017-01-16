<?php

/* AdminBundle:HoraIngesta:list.html.twig */
class __TwigTemplate_23fd9e4a6d02cdc4b9fd259f24850a4c531a2eda2e739e3c487459bb75d3ee86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:HoraIngesta:list.html.twig", 1);
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
        $__internal_7009af5814f59137f39ebb5a239c7b90b5980fd2d8f135d44ec0b1dd57ca8690 = $this->env->getExtension("native_profiler");
        $__internal_7009af5814f59137f39ebb5a239c7b90b5980fd2d8f135d44ec0b1dd57ca8690->enter($__internal_7009af5814f59137f39ebb5a239c7b90b5980fd2d8f135d44ec0b1dd57ca8690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:HoraIngesta:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7009af5814f59137f39ebb5a239c7b90b5980fd2d8f135d44ec0b1dd57ca8690->leave($__internal_7009af5814f59137f39ebb5a239c7b90b5980fd2d8f135d44ec0b1dd57ca8690_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_266008bec19daca43d376eaafb0a4edf198a5953f945987fc13b4e6c18fb83ab = $this->env->getExtension("native_profiler");
        $__internal_266008bec19daca43d376eaafb0a4edf198a5953f945987fc13b4e6c18fb83ab->enter($__internal_266008bec19daca43d376eaafb0a4edf198a5953f945987fc13b4e6c18fb83ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de horas de ingesta";
        
        $__internal_266008bec19daca43d376eaafb0a4edf198a5953f945987fc13b4e6c18fb83ab->leave($__internal_266008bec19daca43d376eaafb0a4edf198a5953f945987fc13b4e6c18fb83ab_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52dcb6485fe7f7eb66759f301b248dc0acc6e979a55e1880b3a1a9829f59588e = $this->env->getExtension("native_profiler");
        $__internal_52dcb6485fe7f7eb66759f301b248dc0acc6e979a55e1880b3a1a9829f59588e->enter($__internal_52dcb6485fe7f7eb66759f301b248dc0acc6e979a55e1880b3a1a9829f59588e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_52dcb6485fe7f7eb66759f301b248dc0acc6e979a55e1880b3a1a9829f59588e->leave($__internal_52dcb6485fe7f7eb66759f301b248dc0acc6e979a55e1880b3a1a9829f59588e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_63ba11374996f351b41f1cb020f385b22f631b6224ab5c83846f8cce80a4ef7f = $this->env->getExtension("native_profiler");
        $__internal_63ba11374996f351b41f1cb020f385b22f631b6224ab5c83846f8cce80a4ef7f->enter($__internal_63ba11374996f351b41f1cb020f385b22f631b6224ab5c83846f8cce80a4ef7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">HORAS DE INGESTA</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de horas de ingesta</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nueva hora de ingesta</button>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["horasIngesta"]) ? $context["horasIngesta"] : $this->getContext($context, "horasIngesta")));
        foreach ($context['_seq'] as $context["_key"] => $context["horaIngesta"]) {
            // line 38
            echo "                                                <tr>
                                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaIngesta"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyHoraIngesta", array("id" => $this->getAttribute($context["horaIngesta"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteHoraIngesta", array("id" => $this->getAttribute($context["horaIngesta"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horaIngesta'], $context['_parent'], $context['loop']);
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
                <h4 class=\"modal-title\">Añadir Hora de Ingesta</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      ";
        // line 87
        $this->loadTemplate("AdminBundle:HoraIngesta:add.html.twig", "AdminBundle:HoraIngesta:list.html.twig", 87)->display(array_merge($context, array("formHora" => (isset($context["formHora"]) ? $context["formHora"] : $this->getContext($context, "formHora")))));
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
        
        $__internal_63ba11374996f351b41f1cb020f385b22f631b6224ab5c83846f8cce80a4ef7f->leave($__internal_63ba11374996f351b41f1cb020f385b22f631b6224ab5c83846f8cce80a4ef7f_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d8fdb1b2b7940d384e5ea41bedfc7462867005035d4433d0418a69467a81ccc = $this->env->getExtension("native_profiler");
        $__internal_5d8fdb1b2b7940d384e5ea41bedfc7462867005035d4433d0418a69467a81ccc->enter($__internal_5d8fdb1b2b7940d384e5ea41bedfc7462867005035d4433d0418a69467a81ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

    !-- /.Para añadir nueva hora de ingesta-->
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
        
        $__internal_5d8fdb1b2b7940d384e5ea41bedfc7462867005035d4433d0418a69467a81ccc->leave($__internal_5d8fdb1b2b7940d384e5ea41bedfc7462867005035d4433d0418a69467a81ccc_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:HoraIngesta:list.html.twig";
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

{% block title %}Lista de horas de ingesta{% endblock %}
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
                        <span class=\"title\">HORAS DE INGESTA</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de horas de ingesta</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nueva hora de ingesta</button>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for horaIngesta in horasIngesta %}
                                                <tr>
                                                    <td>{{horaIngesta.nombre}}</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"{{path('App_admin_modifyHoraIngesta',{id : horaIngesta.id}) }}\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteHoraIngesta',{id : horaIngesta.id}) }}\">Eliminar</a>
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
                <h4 class=\"modal-title\">Añadir Hora de Ingesta</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      {% include \"AdminBundle:HoraIngesta:add.html.twig\"  with {'formHora': formHora} %}
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

    !-- /.Para añadir nueva hora de ingesta-->
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
