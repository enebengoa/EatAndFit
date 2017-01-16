<?php

/* @User/Foro/list.html.twig */
class __TwigTemplate_78447ca4d16834e7e6aa6cba0b391eceda2df49c6f034bf30f76cb10e2267338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/Foro/list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
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
        $__internal_6cda165335b91acc36bf6ba4f7843c6d0b1e6949012c138d027d3d66a02a14b0 = $this->env->getExtension("native_profiler");
        $__internal_6cda165335b91acc36bf6ba4f7843c6d0b1e6949012c138d027d3d66a02a14b0->enter($__internal_6cda165335b91acc36bf6ba4f7843c6d0b1e6949012c138d027d3d66a02a14b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Foro/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cda165335b91acc36bf6ba4f7843c6d0b1e6949012c138d027d3d66a02a14b0->leave($__internal_6cda165335b91acc36bf6ba4f7843c6d0b1e6949012c138d027d3d66a02a14b0_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7832357ed5a06d3731f4a0fefe336271ad93e61c0f8f2a48606b5c391adfa1b9 = $this->env->getExtension("native_profiler");
        $__internal_7832357ed5a06d3731f4a0fefe336271ad93e61c0f8f2a48606b5c391adfa1b9->enter($__internal_7832357ed5a06d3731f4a0fefe336271ad93e61c0f8f2a48606b5c391adfa1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_7832357ed5a06d3731f4a0fefe336271ad93e61c0f8f2a48606b5c391adfa1b9->leave($__internal_7832357ed5a06d3731f4a0fefe336271ad93e61c0f8f2a48606b5c391adfa1b9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_026f677413246bde83a64e1ef7a1f2ab0eb6c2eec0da53790f421a5c22eaa843 = $this->env->getExtension("native_profiler");
        $__internal_026f677413246bde83a64e1ef7a1f2ab0eb6c2eec0da53790f421a5c22eaa843->enter($__internal_026f677413246bde83a64e1ef7a1f2ab0eb6c2eec0da53790f421a5c22eaa843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_026f677413246bde83a64e1ef7a1f2ab0eb6c2eec0da53790f421a5c22eaa843->leave($__internal_026f677413246bde83a64e1ef7a1f2ab0eb6c2eec0da53790f421a5c22eaa843_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_accd314e5e3553781b34551e8500a0af976382e785971834147724a92a5d50d1 = $this->env->getExtension("native_profiler");
        $__internal_accd314e5e3553781b34551e8500a0af976382e785971834147724a92a5d50d1->enter($__internal_accd314e5e3553781b34551e8500a0af976382e785971834147724a92a5d50d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_accd314e5e3553781b34551e8500a0af976382e785971834147724a92a5d50d1->leave($__internal_accd314e5e3553781b34551e8500a0af976382e785971834147724a92a5d50d1_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_edda296f177d77c35514f0047785d964f9a32160afc15356d1618a6ea21f4931 = $this->env->getExtension("native_profiler");
        $__internal_edda296f177d77c35514f0047785d964f9a32160afc15356d1618a6ea21f4931->enter($__internal_edda296f177d77c35514f0047785d964f9a32160afc15356d1618a6ea21f4931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
              <div class=\"events-top\">
                  <div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("App_user_showServicio");
        echo "\">Foro</a></h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span>Pregunta y responde</span>
                    ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 24
            echo "                      </br>
                      </br>
                      <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo tema del foro</button>
                            <hr>
                    ";
        } else {
            // line 29
            echo "                      </br>
                      </br>
                      <a class=\"btn btn-lg btn-success\" href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>
                    ";
        }
        // line 33
        echo "                  </div>
                  <div class=\"clearfix\"> </div>
            </div>
            <div class=\"content-mid\">
                 <div class=\"bs-example\" data-example-id=\"simple-table\">
                    <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Fecha de publicación</th>
                                                    <th>Creador</th>
                                                    <th>Nº Comentarios</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 51
        $context["fila"] = 0;
        // line 52
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foros"]) ? $context["foros"] : $this->getContext($context, "foros")));
        foreach ($context['_seq'] as $context["_key"] => $context["foro"]) {
            // line 53
            echo "                                            ";
            $context["fila"] = ((isset($context["fila"]) ? $context["fila"] : $this->getContext($context, "fila")) + 1);
            echo " 
                                                <tr>
                                                    <td scope=\"row\">";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["fila"]) ? $context["fila"] : $this->getContext($context, "fila")), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["foro"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["foro"], "descripcion", array()), "html", null, true);
            echo "</td>
                                                    <td>@";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["foro"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["foro"], "Usuariooo", array()), "username", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["foro"], "comentarios", array())), "html", null, true);
            echo "</td>
                                                    <td>
                                                      <a class=\"btn btn-1 btn-primary\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showForo", array("id" => $this->getAttribute($context["foro"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                                                      
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                            </tbody>
                                        </table>





                    
                  </div>
                <div class=\"clearfix\"></div>
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


<!-- Modal  ADDING -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Añadir Tema</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      ";
        // line 113
        $this->loadTemplate("UserBundle:Foro:add.html.twig", "@User/Foro/list.html.twig", 113)->display(array_merge($context, array("formForo" => (isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")))));
        // line 114
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
        
        $__internal_edda296f177d77c35514f0047785d964f9a32160afc15356d1618a6ea21f4931->leave($__internal_edda296f177d77c35514f0047785d964f9a32160afc15356d1618a6ea21f4931_prof);

    }

    // line 147
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a19fabf5a5a745ef90ec7452389b781246651a822eb390344ccc8d14a88ea2a = $this->env->getExtension("native_profiler");
        $__internal_3a19fabf5a5a745ef90ec7452389b781246651a822eb390344ccc8d14a88ea2a->enter($__internal_3a19fabf5a5a745ef90ec7452389b781246651a822eb390344ccc8d14a88ea2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 148
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
        
        $__internal_3a19fabf5a5a745ef90ec7452389b781246651a822eb390344ccc8d14a88ea2a->leave($__internal_3a19fabf5a5a745ef90ec7452389b781246651a822eb390344ccc8d14a88ea2a_prof);

    }

    public function getTemplateName()
    {
        return "@User/Foro/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 148,  280 => 147,  242 => 114,  240 => 113,  192 => 67,  181 => 62,  176 => 60,  172 => 59,  168 => 58,  164 => 57,  160 => 56,  156 => 55,  150 => 53,  145 => 52,  143 => 51,  123 => 33,  118 => 31,  114 => 29,  107 => 24,  105 => 23,  99 => 20,  91 => 14,  85 => 13,  77 => 10,  71 => 9,  59 => 4,  49 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseuser.html.twig' %}
{% block stylesheets %}

{% block title %}Eat&Fit{% endblock%}
{{ parent() }}

{% endblock %}

{% block head %}
\t
{% endblock %}

{% block body %}

<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
              <div class=\"events-top\">
                  <div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3><a href=\"{{ path('App_user_showServicio') }}\">Foro</a></h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span>Pregunta y responde</span>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                      </br>
                      </br>
                      <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo tema del foro</button>
                            <hr>
                    {% else %}
                      </br>
                      </br>
                      <a class=\"btn btn-lg btn-success\" href=\"{{path('fos_user_security_login') }}\">Login</a>
                    {% endif %}
                  </div>
                  <div class=\"clearfix\"> </div>
            </div>
            <div class=\"content-mid\">
                 <div class=\"bs-example\" data-example-id=\"simple-table\">
                    <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Fecha de publicación</th>
                                                    <th>Creador</th>
                                                    <th>Nº Comentarios</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% set fila=0%}
                                            {% for foro in foros %}
                                            {% set fila=fila+1%} 
                                                <tr>
                                                    <td scope=\"row\">{{fila}}</td>
                                                    <td>{{foro.nombre}}</td>
                                                    <td>{{foro.descripcion}}</td>
                                                    <td>@{{ foro.fechaCreacion|date('Y-m-d') }}</td>
                                                    <td>{{foro.Usuariooo.username}}</td>
                                                    <td>{{foro.comentarios|length}}</td>
                                                    <td>
                                                      <a class=\"btn btn-1 btn-primary\" href=\"{{ path('App_user_showForo', { 'id': foro.id }) }}\">Ver</a>
                                                      
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>





                    
                  </div>
                <div class=\"clearfix\"></div>
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


<!-- Modal  ADDING -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Añadir Tema</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      {% include \"UserBundle:Foro:add.html.twig\"  with {'formForo': formForo} %}
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
