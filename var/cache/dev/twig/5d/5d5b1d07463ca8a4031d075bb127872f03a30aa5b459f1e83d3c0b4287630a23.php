<?php

/* AdminBundle:Utensilio:list.html.twig */
class __TwigTemplate_9b8cbe7a56205dac7cafb5f3d2b6e5ff28c2d4b4e0964d726966a3ab8e02d673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Utensilio:list.html.twig", 1);
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
        $__internal_810c52ff724fed38ab43cdafedd9c7f91fef1d7eb572a462e3e10c726e6c9d47 = $this->env->getExtension("native_profiler");
        $__internal_810c52ff724fed38ab43cdafedd9c7f91fef1d7eb572a462e3e10c726e6c9d47->enter($__internal_810c52ff724fed38ab43cdafedd9c7f91fef1d7eb572a462e3e10c726e6c9d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Utensilio:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_810c52ff724fed38ab43cdafedd9c7f91fef1d7eb572a462e3e10c726e6c9d47->leave($__internal_810c52ff724fed38ab43cdafedd9c7f91fef1d7eb572a462e3e10c726e6c9d47_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc113c7619525cec961fd838ffdad96082f145ee7dcc5b85cf63ad4b75952b0e = $this->env->getExtension("native_profiler");
        $__internal_bc113c7619525cec961fd838ffdad96082f145ee7dcc5b85cf63ad4b75952b0e->enter($__internal_bc113c7619525cec961fd838ffdad96082f145ee7dcc5b85cf63ad4b75952b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de utensilios";
        
        $__internal_bc113c7619525cec961fd838ffdad96082f145ee7dcc5b85cf63ad4b75952b0e->leave($__internal_bc113c7619525cec961fd838ffdad96082f145ee7dcc5b85cf63ad4b75952b0e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1843f6081cabc49519c027267901e08a60d382c5a3bc9f32a9f96a1eea1b0d7 = $this->env->getExtension("native_profiler");
        $__internal_b1843f6081cabc49519c027267901e08a60d382c5a3bc9f32a9f96a1eea1b0d7->enter($__internal_b1843f6081cabc49519c027267901e08a60d382c5a3bc9f32a9f96a1eea1b0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_b1843f6081cabc49519c027267901e08a60d382c5a3bc9f32a9f96a1eea1b0d7->leave($__internal_b1843f6081cabc49519c027267901e08a60d382c5a3bc9f32a9f96a1eea1b0d7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_485859ef8d12390605b48b16a1f27adec1661f02aee3dd4deac868d05d7e514e = $this->env->getExtension("native_profiler");
        $__internal_485859ef8d12390605b48b16a1f27adec1661f02aee3dd4deac868d05d7e514e->enter($__internal_485859ef8d12390605b48b16a1f27adec1661f02aee3dd4deac868d05d7e514e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utensilios"]) ? $context["utensilios"] : $this->getContext($context, "utensilios")));
        foreach ($context['_seq'] as $context["_key"] => $context["utensilio"]) {
            // line 37
            echo "                                                <tr>
                                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["utensilio"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["utensilio"], "descripcion", array()), "html", null, true);
            echo "</td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                    <td>
                                                            <a class=\"btn btn-default\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyUtensilio", array("id" => $this->getAttribute($context["utensilio"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteUtensilio", array("id" => $this->getAttribute($context["utensilio"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utensilio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        // line 86
        $this->loadTemplate("AdminBundle:Utensilio:add.html.twig", "AdminBundle:Utensilio:list.html.twig", 86)->display(array_merge($context, array("formUtensilio" => (isset($context["formUtensilio"]) ? $context["formUtensilio"] : $this->getContext($context, "formUtensilio")))));
        // line 87
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
        
        $__internal_485859ef8d12390605b48b16a1f27adec1661f02aee3dd4deac868d05d7e514e->leave($__internal_485859ef8d12390605b48b16a1f27adec1661f02aee3dd4deac868d05d7e514e_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9991479c597f1251a2f5e18abbd9ed64c660a6c2228c7c9523ab9df9ee1e9534 = $this->env->getExtension("native_profiler");
        $__internal_9991479c597f1251a2f5e18abbd9ed64c660a6c2228c7c9523ab9df9ee1e9534->enter($__internal_9991479c597f1251a2f5e18abbd9ed64c660a6c2228c7c9523ab9df9ee1e9534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
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
                        \$('#addConfirm').find('.modal-title').html('Mesaje de confirmación')
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
        
        $__internal_9991479c597f1251a2f5e18abbd9ed64c660a6c2228c7c9523ab9df9ee1e9534->leave($__internal_9991479c597f1251a2f5e18abbd9ed64c660a6c2228c7c9523ab9df9ee1e9534_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Utensilio:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 121,  211 => 120,  173 => 87,  171 => 86,  130 => 47,  120 => 43,  116 => 42,  110 => 39,  106 => 38,  103 => 37,  99 => 36,  70 => 9,  64 => 8,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de utensilios{% endblock %}
{% block stylesheets %}
{{ parent() }}
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
                        \$('#addConfirm').find('.modal-title').html('Mesaje de confirmación')
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
