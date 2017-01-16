<?php

/* @Admin/Tecnica/list.html.twig */
class __TwigTemplate_fb0953e3b68b54d0bda4dcd71380545c696cd9cdb17237d47e3a27cc402e6e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Tecnica/list.html.twig", 1);
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
        $__internal_1713bfcaaac17e66ec7135174d26969b9c914b7530c28c8235149f904a72e9bc = $this->env->getExtension("native_profiler");
        $__internal_1713bfcaaac17e66ec7135174d26969b9c914b7530c28c8235149f904a72e9bc->enter($__internal_1713bfcaaac17e66ec7135174d26969b9c914b7530c28c8235149f904a72e9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Tecnica/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1713bfcaaac17e66ec7135174d26969b9c914b7530c28c8235149f904a72e9bc->leave($__internal_1713bfcaaac17e66ec7135174d26969b9c914b7530c28c8235149f904a72e9bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4ddf77399acb6e55fd74eac5d897e6aadbb221c61c6329bbec7a987f1aff05b = $this->env->getExtension("native_profiler");
        $__internal_c4ddf77399acb6e55fd74eac5d897e6aadbb221c61c6329bbec7a987f1aff05b->enter($__internal_c4ddf77399acb6e55fd74eac5d897e6aadbb221c61c6329bbec7a987f1aff05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de técnicas";
        
        $__internal_c4ddf77399acb6e55fd74eac5d897e6aadbb221c61c6329bbec7a987f1aff05b->leave($__internal_c4ddf77399acb6e55fd74eac5d897e6aadbb221c61c6329bbec7a987f1aff05b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fcbaf4611453d62132442b46e2741e10d1a3ea52eaba1a42314b5a014bd1a830 = $this->env->getExtension("native_profiler");
        $__internal_fcbaf4611453d62132442b46e2741e10d1a3ea52eaba1a42314b5a014bd1a830->enter($__internal_fcbaf4611453d62132442b46e2741e10d1a3ea52eaba1a42314b5a014bd1a830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_fcbaf4611453d62132442b46e2741e10d1a3ea52eaba1a42314b5a014bd1a830->leave($__internal_fcbaf4611453d62132442b46e2741e10d1a3ea52eaba1a42314b5a014bd1a830_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cfe5c2a18e0750b9c5e270c2cd142e4962cae659e75b0d65dcf1fbcbab05c66 = $this->env->getExtension("native_profiler");
        $__internal_1cfe5c2a18e0750b9c5e270c2cd142e4962cae659e75b0d65dcf1fbcbab05c66->enter($__internal_1cfe5c2a18e0750b9c5e270c2cd142e4962cae659e75b0d65dcf1fbcbab05c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TÉCNICAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de técnicas</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir técnica</button>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Utensilios requeridos</th>
                                                    <th>Video</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tecnicas"]) ? $context["tecnicas"] : $this->getContext($context, "tecnicas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tecnica"]) {
            // line 39
            echo "                                                <tr>
                                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["tecnica"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["tecnica"], "descripcion", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tecnica"], "utensilios", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["utensilio"]) {
                // line 43
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["utensilio"], "nombre", array()), "html", null, true);
                echo ",
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utensilio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "</td>
                                                    ";
            // line 45
            if (($this->getAttribute($context["tecnica"], "vid", array()) == null)) {
                // line 46
                echo "                                                    <td>No video disponible</td>
                                                    ";
            } else {
                // line 48
                echo "                                                    <td><iframe width=\"75%\" height=\"75%\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tecnica"], "vid", array()), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe></td>
                                                    ";
            }
            // line 50
            echo "                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyTecnica", array("id" => $this->getAttribute($context["tecnica"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteTecnica", array("id" => $this->getAttribute($context["tecnica"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tecnica'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
                <h4 class=\"modal-title\">Añadir Técnica</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      ";
        // line 97
        $this->loadTemplate("AdminBundle:Tecnica:add.html.twig", "@Admin/Tecnica/list.html.twig", 97)->display(array_merge($context, array("formTecnica" => (isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")))));
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
        
        $__internal_1cfe5c2a18e0750b9c5e270c2cd142e4962cae659e75b0d65dcf1fbcbab05c66->leave($__internal_1cfe5c2a18e0750b9c5e270c2cd142e4962cae659e75b0d65dcf1fbcbab05c66_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a79c24dbf0ca4a06c98b8c5b1b031cbbcfe3f3d30eb0a865729656734f161c9b = $this->env->getExtension("native_profiler");
        $__internal_a79c24dbf0ca4a06c98b8c5b1b031cbbcfe3f3d30eb0a865729656734f161c9b->enter($__internal_a79c24dbf0ca4a06c98b8c5b1b031cbbcfe3f3d30eb0a865729656734f161c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

    !-- /.Para añadir nueva técnica-->
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
        
        $__internal_a79c24dbf0ca4a06c98b8c5b1b031cbbcfe3f3d30eb0a865729656734f161c9b->leave($__internal_a79c24dbf0ca4a06c98b8c5b1b031cbbcfe3f3d30eb0a865729656734f161c9b_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Tecnica/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 132,  244 => 131,  206 => 98,  204 => 97,  163 => 58,  152 => 53,  148 => 52,  144 => 50,  138 => 48,  134 => 46,  132 => 45,  129 => 44,  120 => 43,  116 => 42,  112 => 41,  108 => 40,  105 => 39,  101 => 38,  70 => 9,  64 => 8,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de técnicas{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}

{% block body %}
    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TÉCNICAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de técnicas</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir técnica</button>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Utensilios requeridos</th>
                                                    <th>Video</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for tecnica in tecnicas %}
                                                <tr>
                                                    <td>{{tecnica.nombre}}</td>
                                                    <td>{{tecnica.descripcion}}</td>
                                                    <td>{% for utensilio in tecnica.utensilios %}
                                                        {{utensilio.nombre}},
                                                    {% endfor %}</td>
                                                    {% if tecnica.vid==NULL%}
                                                    <td>No video disponible</td>
                                                    {% else%}
                                                    <td><iframe width=\"75%\" height=\"75%\" src=\"{{tecnica.vid}}\" frameborder=\"0\" allowfullscreen></iframe></td>
                                                    {% endif%}
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"{{path('App_admin_modifyTecnica',{id : tecnica.id}) }}\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteTecnica',{id : tecnica.id}) }}\">Eliminar</a>
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
                <h4 class=\"modal-title\">Añadir Técnica</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      {% include \"AdminBundle:Tecnica:add.html.twig\"  with {'formTecnica': formTecnica} %}
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

    !-- /.Para añadir nueva técnica-->
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
