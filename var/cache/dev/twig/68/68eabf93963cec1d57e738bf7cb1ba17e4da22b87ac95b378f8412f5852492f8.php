<?php

/* @Admin/Usuario/list.html.twig */
class __TwigTemplate_9f96bdbe8c769ab8638ba3d93031c9aa7d5e7996a9cd6dd61174f25a6e6e8d2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Usuario/list.html.twig", 1);
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
        $__internal_254e29dfb6c1ea8bb3f677150e4ced7401e5545cd372420c6cd45fbdd1072977 = $this->env->getExtension("native_profiler");
        $__internal_254e29dfb6c1ea8bb3f677150e4ced7401e5545cd372420c6cd45fbdd1072977->enter($__internal_254e29dfb6c1ea8bb3f677150e4ced7401e5545cd372420c6cd45fbdd1072977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Usuario/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254e29dfb6c1ea8bb3f677150e4ced7401e5545cd372420c6cd45fbdd1072977->leave($__internal_254e29dfb6c1ea8bb3f677150e4ced7401e5545cd372420c6cd45fbdd1072977_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8412e41ba9d1c59901f3e97fd3a73c30da11f533bf72652d21a36754c1c1aef5 = $this->env->getExtension("native_profiler");
        $__internal_8412e41ba9d1c59901f3e97fd3a73c30da11f533bf72652d21a36754c1c1aef5->enter($__internal_8412e41ba9d1c59901f3e97fd3a73c30da11f533bf72652d21a36754c1c1aef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de usuarios";
        
        $__internal_8412e41ba9d1c59901f3e97fd3a73c30da11f533bf72652d21a36754c1c1aef5->leave($__internal_8412e41ba9d1c59901f3e97fd3a73c30da11f533bf72652d21a36754c1c1aef5_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5dd4387f8c595d4808ecac72383171d09caf051ebc891c7fc00446b4c44c3e4 = $this->env->getExtension("native_profiler");
        $__internal_a5dd4387f8c595d4808ecac72383171d09caf051ebc891c7fc00446b4c44c3e4->enter($__internal_a5dd4387f8c595d4808ecac72383171d09caf051ebc891c7fc00446b4c44c3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_a5dd4387f8c595d4808ecac72383171d09caf051ebc891c7fc00446b4c44c3e4->leave($__internal_a5dd4387f8c595d4808ecac72383171d09caf051ebc891c7fc00446b4c44c3e4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_358a55bc7f275ace2596c55ade6b4256ee701aa3fe047b41d4664232c4cec2d5 = $this->env->getExtension("native_profiler");
        $__internal_358a55bc7f275ace2596c55ade6b4256ee701aa3fe047b41d4664232c4cec2d5->enter($__internal_358a55bc7f275ace2596c55ade6b4256ee701aa3fe047b41d4664232c4cec2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">USUARIOS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de usuarios</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 38
            echo "                                                <tr>
                                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["usuario"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 43
                echo "                                                        ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo ",
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "</td>
                                                    <td>
                                                        <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteUsuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
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

";
        
        $__internal_358a55bc7f275ace2596c55ade6b4256ee701aa3fe047b41d4664232c4cec2d5->leave($__internal_358a55bc7f275ace2596c55ade6b4256ee701aa3fe047b41d4664232c4cec2d5_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b62c8f2d2de599cce08a67f118400adb81b69f4717aa8b7d9227ad52e5aa9cdf = $this->env->getExtension("native_profiler");
        $__internal_b62c8f2d2de599cce08a67f118400adb81b69f4717aa8b7d9227ad52e5aa9cdf->enter($__internal_b62c8f2d2de599cce08a67f118400adb81b69f4717aa8b7d9227ad52e5aa9cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "
 <!-- /.Botón de confirmación de eliminar-->
    <script>
        \$('#confirm-delete').on('show.bs.modal', function(e) 
        {\$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));});
    </script>

    <script>
        \$(document).ready(function() {
        var table = \$('#dataTables').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                ]
            } );
        } );
    </script>

";
        
        $__internal_b62c8f2d2de599cce08a67f118400adb81b69f4717aa8b7d9227ad52e5aa9cdf->leave($__internal_b62c8f2d2de599cce08a67f118400adb81b69f4717aa8b7d9227ad52e5aa9cdf_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Usuario/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 80,  180 => 79,  146 => 50,  136 => 46,  132 => 44,  123 => 43,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  104 => 38,  100 => 37,  70 => 9,  64 => 8,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de usuarios{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}

{% block body %}
    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">USUARIOS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de usuarios</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for usuario in usuarios %}
                                                <tr>
                                                    <td>{{usuario.id}}</td>
                                                    <td>{{usuario.username}}</td>
                                                    <td>{{usuario.email}}</td>
                                                    <td>{% for role in usuario.roles %}
                                                        {{role}},
                                                    {% endfor %}</td>
                                                    <td>
                                                        <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteUsuario',{id : usuario.id}) }}\">Eliminar</a>
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

{% endblock %}

{% block javascripts %}

 <!-- /.Botón de confirmación de eliminar-->
    <script>
        \$('#confirm-delete').on('show.bs.modal', function(e) 
        {\$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));});
    </script>

    <script>
        \$(document).ready(function() {
        var table = \$('#dataTables').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                ]
            } );
        } );
    </script>

{% endblock %}
";
    }
}
