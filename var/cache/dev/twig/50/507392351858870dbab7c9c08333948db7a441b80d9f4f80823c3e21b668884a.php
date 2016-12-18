<?php

/* AdminBundle:Usuario:list.html.twig */
class __TwigTemplate_01554e554178b55ac3e0b8f874b36f0e0411008471db0f558c44a5dfb526e4bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Usuario:list.html.twig", 1);
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
        $__internal_fbfddd87ca24810c4941dcc4e5a0cde4189043595c135a2c2a14f2040223f6c6 = $this->env->getExtension("native_profiler");
        $__internal_fbfddd87ca24810c4941dcc4e5a0cde4189043595c135a2c2a14f2040223f6c6->enter($__internal_fbfddd87ca24810c4941dcc4e5a0cde4189043595c135a2c2a14f2040223f6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Usuario:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbfddd87ca24810c4941dcc4e5a0cde4189043595c135a2c2a14f2040223f6c6->leave($__internal_fbfddd87ca24810c4941dcc4e5a0cde4189043595c135a2c2a14f2040223f6c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7877a6ded5c6601dc658ffb55427a04eeb8a807f62ddf81af61c13c69af5eb76 = $this->env->getExtension("native_profiler");
        $__internal_7877a6ded5c6601dc658ffb55427a04eeb8a807f62ddf81af61c13c69af5eb76->enter($__internal_7877a6ded5c6601dc658ffb55427a04eeb8a807f62ddf81af61c13c69af5eb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de usuarios";
        
        $__internal_7877a6ded5c6601dc658ffb55427a04eeb8a807f62ddf81af61c13c69af5eb76->leave($__internal_7877a6ded5c6601dc658ffb55427a04eeb8a807f62ddf81af61c13c69af5eb76_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d3da4b0c648f3266bb06cee8ec0e7d1a41f6ce6e387bc77b61d64b1c8727206 = $this->env->getExtension("native_profiler");
        $__internal_5d3da4b0c648f3266bb06cee8ec0e7d1a41f6ce6e387bc77b61d64b1c8727206->enter($__internal_5d3da4b0c648f3266bb06cee8ec0e7d1a41f6ce6e387bc77b61d64b1c8727206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5d3da4b0c648f3266bb06cee8ec0e7d1a41f6ce6e387bc77b61d64b1c8727206->leave($__internal_5d3da4b0c648f3266bb06cee8ec0e7d1a41f6ce6e387bc77b61d64b1c8727206_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9bbadad31f93e5db06a27f9fb176b62d3e76efa6a0badddc52fb1908e164243 = $this->env->getExtension("native_profiler");
        $__internal_b9bbadad31f93e5db06a27f9fb176b62d3e76efa6a0badddc52fb1908e164243->enter($__internal_b9bbadad31f93e5db06a27f9fb176b62d3e76efa6a0badddc52fb1908e164243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\">Activar/Desactivar</a>
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
        
        $__internal_b9bbadad31f93e5db06a27f9fb176b62d3e76efa6a0badddc52fb1908e164243->leave($__internal_b9bbadad31f93e5db06a27f9fb176b62d3e76efa6a0badddc52fb1908e164243_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b455f63d67624e3973f813bf504e8c58ce4c75970671db15aa834344eaf942f1 = $this->env->getExtension("native_profiler");
        $__internal_b455f63d67624e3973f813bf504e8c58ce4c75970671db15aa834344eaf942f1->enter($__internal_b455f63d67624e3973f813bf504e8c58ce4c75970671db15aa834344eaf942f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b455f63d67624e3973f813bf504e8c58ce4c75970671db15aa834344eaf942f1->leave($__internal_b455f63d67624e3973f813bf504e8c58ce4c75970671db15aa834344eaf942f1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Usuario:list.html.twig";
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
                                                        <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteUsuario',{id : usuario.id}) }}\">Activar/Desactivar</a>
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
