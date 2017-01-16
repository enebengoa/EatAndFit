<?php

/* AdminBundle:TemaForo:list.html.twig */
class __TwigTemplate_49a4aa386ea7ce44d1d4bfa5d15cc138924c91522a76ba1f34a518842a347d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:TemaForo:list.html.twig", 1);
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
        $__internal_1700ec500a6b67a79f62a1b0ef151207bae47f724f6420b86acc03f0ab64f9e3 = $this->env->getExtension("native_profiler");
        $__internal_1700ec500a6b67a79f62a1b0ef151207bae47f724f6420b86acc03f0ab64f9e3->enter($__internal_1700ec500a6b67a79f62a1b0ef151207bae47f724f6420b86acc03f0ab64f9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TemaForo:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1700ec500a6b67a79f62a1b0ef151207bae47f724f6420b86acc03f0ab64f9e3->leave($__internal_1700ec500a6b67a79f62a1b0ef151207bae47f724f6420b86acc03f0ab64f9e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc6a728a9aade65ea36405eb8aee074cd45ff4bb687a53e5724cce822c603e5a = $this->env->getExtension("native_profiler");
        $__internal_dc6a728a9aade65ea36405eb8aee074cd45ff4bb687a53e5724cce822c603e5a->enter($__internal_dc6a728a9aade65ea36405eb8aee074cd45ff4bb687a53e5724cce822c603e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de temas de los foros";
        
        $__internal_dc6a728a9aade65ea36405eb8aee074cd45ff4bb687a53e5724cce822c603e5a->leave($__internal_dc6a728a9aade65ea36405eb8aee074cd45ff4bb687a53e5724cce822c603e5a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e40515f4263dbe500b9ce2bc29830e3b5925d953d007d5fa45774cb38a1ed52 = $this->env->getExtension("native_profiler");
        $__internal_6e40515f4263dbe500b9ce2bc29830e3b5925d953d007d5fa45774cb38a1ed52->enter($__internal_6e40515f4263dbe500b9ce2bc29830e3b5925d953d007d5fa45774cb38a1ed52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_6e40515f4263dbe500b9ce2bc29830e3b5925d953d007d5fa45774cb38a1ed52->leave($__internal_6e40515f4263dbe500b9ce2bc29830e3b5925d953d007d5fa45774cb38a1ed52_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6e7bea4e77bbb3e3c7b7ec8839a45649a9f40f45c1aa546ab10021572401cc0 = $this->env->getExtension("native_profiler");
        $__internal_b6e7bea4e77bbb3e3c7b7ec8839a45649a9f40f45c1aa546ab10021572401cc0->enter($__internal_b6e7bea4e77bbb3e3c7b7ec8839a45649a9f40f45c1aa546ab10021572401cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">FOROS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de foros</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                   <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo tema del foro</button>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Usuario creador</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["temasForos"]) ? $context["temasForos"] : $this->getContext($context, "temasForos")));
        foreach ($context['_seq'] as $context["_key"] => $context["temaForo"]) {
            // line 40
            echo "                                                <tr>
                                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["temaForo"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["temaForo"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["temaForo"], "Usuariooo", array()), "username", array()), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showForo", array("id" => $this->getAttribute($context["temaForo"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteTemaForo", array("id" => $this->getAttribute($context["temaForo"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temaForo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
                <h4 class=\"modal-title\">Añadir Tema del Foro</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      ";
        // line 91
        $this->loadTemplate("AdminBundle:TemaForo:add.html.twig", "AdminBundle:TemaForo:list.html.twig", 91)->display(array_merge($context, array("formForo" => (isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")))));
        // line 92
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
        
        $__internal_b6e7bea4e77bbb3e3c7b7ec8839a45649a9f40f45c1aa546ab10021572401cc0->leave($__internal_b6e7bea4e77bbb3e3c7b7ec8839a45649a9f40f45c1aa546ab10021572401cc0_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8aa1e7285a6f09153277f4dad58510e1136fd0be09bc02d478c47bfb60590cc = $this->env->getExtension("native_profiler");
        $__internal_f8aa1e7285a6f09153277f4dad58510e1136fd0be09bc02d478c47bfb60590cc->enter($__internal_f8aa1e7285a6f09153277f4dad58510e1136fd0be09bc02d478c47bfb60590cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
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
        
        $__internal_f8aa1e7285a6f09153277f4dad58510e1136fd0be09bc02d478c47bfb60590cc->leave($__internal_f8aa1e7285a6f09153277f4dad58510e1136fd0be09bc02d478c47bfb60590cc_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TemaForo:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 126,  219 => 125,  181 => 92,  179 => 91,  138 => 52,  127 => 47,  123 => 46,  117 => 43,  113 => 42,  109 => 41,  106 => 40,  102 => 39,  72 => 11,  66 => 10,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de temas de los foros{% endblock %}
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
                        <span class=\"title\">FOROS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de foros</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                   <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo tema del foro</button>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Usuario creador</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for temaForo in temasForos %}
                                                <tr>
                                                    <td>{{temaForo.nombre}}</td>
                                                    <td>{{ temaForo.fechaCreacion|date('Y-m-d') }}</td>
                                                    <td>{{temaForo.Usuariooo.username}}</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"{{path('App_user_showForo',{id : temaForo.id}) }}\">Ver</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteTemaForo',{id : temaForo.id}) }}\">Eliminar</a>
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
                <h4 class=\"modal-title\">Añadir Tema del Foro</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      {% include \"AdminBundle:TemaForo:add.html.twig\"  with {'formForo': formForo} %}
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
