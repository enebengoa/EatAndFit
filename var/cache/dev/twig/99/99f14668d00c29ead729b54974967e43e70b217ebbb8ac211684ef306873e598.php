<?php

/* AdminBundle:Tecnica:list.html.twig */
class __TwigTemplate_29c7294d88c753d13c4c88c948319e85b02254baa1083b63f7054c658e6d7ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Tecnica:list.html.twig", 1);
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
        $__internal_6caf7ebe8805aff921ea5237b2dbd8609543f9069d8be68e609ffa3638b36b40 = $this->env->getExtension("native_profiler");
        $__internal_6caf7ebe8805aff921ea5237b2dbd8609543f9069d8be68e609ffa3638b36b40->enter($__internal_6caf7ebe8805aff921ea5237b2dbd8609543f9069d8be68e609ffa3638b36b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Tecnica:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6caf7ebe8805aff921ea5237b2dbd8609543f9069d8be68e609ffa3638b36b40->leave($__internal_6caf7ebe8805aff921ea5237b2dbd8609543f9069d8be68e609ffa3638b36b40_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d1ea7a092706707c4f91599e418af3c738806986104acb7acc05bbce6e25a23 = $this->env->getExtension("native_profiler");
        $__internal_1d1ea7a092706707c4f91599e418af3c738806986104acb7acc05bbce6e25a23->enter($__internal_1d1ea7a092706707c4f91599e418af3c738806986104acb7acc05bbce6e25a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de técnicas";
        
        $__internal_1d1ea7a092706707c4f91599e418af3c738806986104acb7acc05bbce6e25a23->leave($__internal_1d1ea7a092706707c4f91599e418af3c738806986104acb7acc05bbce6e25a23_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9c884f9828de8a1901d6f34eabfdd879f17cec92d8684fe5fd632afda91940d = $this->env->getExtension("native_profiler");
        $__internal_d9c884f9828de8a1901d6f34eabfdd879f17cec92d8684fe5fd632afda91940d->enter($__internal_d9c884f9828de8a1901d6f34eabfdd879f17cec92d8684fe5fd632afda91940d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_d9c884f9828de8a1901d6f34eabfdd879f17cec92d8684fe5fd632afda91940d->leave($__internal_d9c884f9828de8a1901d6f34eabfdd879f17cec92d8684fe5fd632afda91940d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_19dbb9d16bf1b3c9694a2e0002c991795fb51a74072c5a8ab6d620e167da25f2 = $this->env->getExtension("native_profiler");
        $__internal_19dbb9d16bf1b3c9694a2e0002c991795fb51a74072c5a8ab6d620e167da25f2->enter($__internal_19dbb9d16bf1b3c9694a2e0002c991795fb51a74072c5a8ab6d620e167da25f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Tecnica:add.html.twig", "AdminBundle:Tecnica:list.html.twig", 97)->display(array_merge($context, array("formTecnica" => (isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")))));
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
        
        $__internal_19dbb9d16bf1b3c9694a2e0002c991795fb51a74072c5a8ab6d620e167da25f2->leave($__internal_19dbb9d16bf1b3c9694a2e0002c991795fb51a74072c5a8ab6d620e167da25f2_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_033a79c0028f6d008256fc76edd60fab406a90e92035c6eb19e3c57a25c6552a = $this->env->getExtension("native_profiler");
        $__internal_033a79c0028f6d008256fc76edd60fab406a90e92035c6eb19e3c57a25c6552a->enter($__internal_033a79c0028f6d008256fc76edd60fab406a90e92035c6eb19e3c57a25c6552a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_033a79c0028f6d008256fc76edd60fab406a90e92035c6eb19e3c57a25c6552a->leave($__internal_033a79c0028f6d008256fc76edd60fab406a90e92035c6eb19e3c57a25c6552a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Tecnica:list.html.twig";
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
