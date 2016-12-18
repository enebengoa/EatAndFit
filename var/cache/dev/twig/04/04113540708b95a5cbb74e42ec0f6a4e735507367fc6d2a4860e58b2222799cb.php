<?php

/* UserBundle:Foro:list.html.twig */
class __TwigTemplate_fa2fbb1d9fa612522117c686231687df5e2bd4d90e3a8d9545093ada0d031eb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "UserBundle:Foro:list.html.twig", 1);
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
        $__internal_bb452a7ff1968b47d449484b82ea7552b09eac2c2ff25e7ae7e78864b1b5452e = $this->env->getExtension("native_profiler");
        $__internal_bb452a7ff1968b47d449484b82ea7552b09eac2c2ff25e7ae7e78864b1b5452e->enter($__internal_bb452a7ff1968b47d449484b82ea7552b09eac2c2ff25e7ae7e78864b1b5452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Foro:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb452a7ff1968b47d449484b82ea7552b09eac2c2ff25e7ae7e78864b1b5452e->leave($__internal_bb452a7ff1968b47d449484b82ea7552b09eac2c2ff25e7ae7e78864b1b5452e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3102388750c7ce65cf270c7f9fe79f562d234ec77377c3f2685bb65dc8917b61 = $this->env->getExtension("native_profiler");
        $__internal_3102388750c7ce65cf270c7f9fe79f562d234ec77377c3f2685bb65dc8917b61->enter($__internal_3102388750c7ce65cf270c7f9fe79f562d234ec77377c3f2685bb65dc8917b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_3102388750c7ce65cf270c7f9fe79f562d234ec77377c3f2685bb65dc8917b61->leave($__internal_3102388750c7ce65cf270c7f9fe79f562d234ec77377c3f2685bb65dc8917b61_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e5b0efa3006bb42b810c22f98e50a7883f9a1f2ec99f5ae5db4b8f53857dcda = $this->env->getExtension("native_profiler");
        $__internal_2e5b0efa3006bb42b810c22f98e50a7883f9a1f2ec99f5ae5db4b8f53857dcda->enter($__internal_2e5b0efa3006bb42b810c22f98e50a7883f9a1f2ec99f5ae5db4b8f53857dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_2e5b0efa3006bb42b810c22f98e50a7883f9a1f2ec99f5ae5db4b8f53857dcda->leave($__internal_2e5b0efa3006bb42b810c22f98e50a7883f9a1f2ec99f5ae5db4b8f53857dcda_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e5503ee5b1fb0bb7a33ee8205ef33b68a5cd87d79b4e73116a81ce3b34e18a1 = $this->env->getExtension("native_profiler");
        $__internal_8e5503ee5b1fb0bb7a33ee8205ef33b68a5cd87d79b4e73116a81ce3b34e18a1->enter($__internal_8e5503ee5b1fb0bb7a33ee8205ef33b68a5cd87d79b4e73116a81ce3b34e18a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_8e5503ee5b1fb0bb7a33ee8205ef33b68a5cd87d79b4e73116a81ce3b34e18a1->leave($__internal_8e5503ee5b1fb0bb7a33ee8205ef33b68a5cd87d79b4e73116a81ce3b34e18a1_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_bea9fa282c812492faba99aefd46cdb8828bd0565df0f62a7b6ad89d6b331546 = $this->env->getExtension("native_profiler");
        $__internal_bea9fa282c812492faba99aefd46cdb8828bd0565df0f62a7b6ad89d6b331546->enter($__internal_bea9fa282c812492faba99aefd46cdb8828bd0565df0f62a7b6ad89d6b331546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                      <a class=\"btn btn-lg btn-success\" href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("App_user_addForo");
            echo "\">Añadir nuevo tema</a>
                    ";
        } else {
            // line 28
            echo "                      </br>
                      </br>
                      <a class=\"btn btn-lg btn-success\" href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>
                    ";
        }
        // line 32
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
        // line 50
        $context["fila"] = 0;
        // line 51
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foros"]) ? $context["foros"] : $this->getContext($context, "foros")));
        foreach ($context['_seq'] as $context["_key"] => $context["foro"]) {
            // line 52
            echo "                                            ";
            $context["fila"] = ((isset($context["fila"]) ? $context["fila"] : $this->getContext($context, "fila")) + 1);
            echo " 
                                                <tr>
                                                    <td scope=\"row\">";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["fila"]) ? $context["fila"] : $this->getContext($context, "fila")), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["foro"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["foro"], "descripcion", array()), "html", null, true);
            echo "</td>
                                                    <td>@";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["foro"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["foro"], "Usuariooo", array()), "username", array()), "html", null, true);
            echo "</td>
                                                    <td>4</td>
                                                    <td>
                                                      <a class=\"btn btn-1 btn-primary\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showForo", array("id" => $this->getAttribute($context["foro"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                                                      <a class=\"btn btn-1 btn-danger\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteTemaForo", array("id" => $this->getAttribute($context["foro"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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

";
        
        $__internal_bea9fa282c812492faba99aefd46cdb8828bd0565df0f62a7b6ad89d6b331546->leave($__internal_bea9fa282c812492faba99aefd46cdb8828bd0565df0f62a7b6ad89d6b331546_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d989b82b1c9f6f6e68d1b4c38f16adc1312a86e3257621b3d80b8f091287e98 = $this->env->getExtension("native_profiler");
        $__internal_8d989b82b1c9f6f6e68d1b4c38f16adc1312a86e3257621b3d80b8f091287e98->enter($__internal_8d989b82b1c9f6f6e68d1b4c38f16adc1312a86e3257621b3d80b8f091287e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
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
     

";
        
        $__internal_8d989b82b1c9f6f6e68d1b4c38f16adc1312a86e3257621b3d80b8f091287e98->leave($__internal_8d989b82b1c9f6f6e68d1b4c38f16adc1312a86e3257621b3d80b8f091287e98_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Foro:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 102,  234 => 101,  194 => 66,  184 => 62,  180 => 61,  174 => 58,  170 => 57,  166 => 56,  162 => 55,  158 => 54,  152 => 52,  147 => 51,  145 => 50,  125 => 32,  120 => 30,  116 => 28,  111 => 26,  107 => 24,  105 => 23,  99 => 20,  91 => 14,  85 => 13,  77 => 10,  71 => 9,  59 => 4,  49 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
                      <a class=\"btn btn-lg btn-success\" href=\"{{path('App_user_addForo') }}\">Añadir nuevo tema</a>
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
                                                    <td>4</td>
                                                    <td>
                                                      <a class=\"btn btn-1 btn-primary\" href=\"{{ path('App_user_showForo', { 'id': foro.id }) }}\">Ver</a>
                                                      <a class=\"btn btn-1 btn-danger\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteTemaForo',{id : foro.id}) }}\">Eliminar</a>
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
     

{% endblock %}";
    }
}
