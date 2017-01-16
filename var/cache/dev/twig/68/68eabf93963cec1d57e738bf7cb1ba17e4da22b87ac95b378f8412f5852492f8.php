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
        $__internal_9cf6263671dea580024e197aef27ee8172b1834643d0c5288c5ca404bc931ec8 = $this->env->getExtension("native_profiler");
        $__internal_9cf6263671dea580024e197aef27ee8172b1834643d0c5288c5ca404bc931ec8->enter($__internal_9cf6263671dea580024e197aef27ee8172b1834643d0c5288c5ca404bc931ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Usuario/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cf6263671dea580024e197aef27ee8172b1834643d0c5288c5ca404bc931ec8->leave($__internal_9cf6263671dea580024e197aef27ee8172b1834643d0c5288c5ca404bc931ec8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91e098a9ac367d37b97c06336f14e222e223d85e4d4adbf744759d0f6974e14a = $this->env->getExtension("native_profiler");
        $__internal_91e098a9ac367d37b97c06336f14e222e223d85e4d4adbf744759d0f6974e14a->enter($__internal_91e098a9ac367d37b97c06336f14e222e223d85e4d4adbf744759d0f6974e14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de usuarios";
        
        $__internal_91e098a9ac367d37b97c06336f14e222e223d85e4d4adbf744759d0f6974e14a->leave($__internal_91e098a9ac367d37b97c06336f14e222e223d85e4d4adbf744759d0f6974e14a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61ccb9eafd0e4f48189f4183b1ce589dfa37431d8a5437ed166b412fc7fcd888 = $this->env->getExtension("native_profiler");
        $__internal_61ccb9eafd0e4f48189f4183b1ce589dfa37431d8a5437ed166b412fc7fcd888->enter($__internal_61ccb9eafd0e4f48189f4183b1ce589dfa37431d8a5437ed166b412fc7fcd888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_61ccb9eafd0e4f48189f4183b1ce589dfa37431d8a5437ed166b412fc7fcd888->leave($__internal_61ccb9eafd0e4f48189f4183b1ce589dfa37431d8a5437ed166b412fc7fcd888_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_310ef8cbceeb2da9e0b900902061533a077096d9c8de360656ae30249234cbef = $this->env->getExtension("native_profiler");
        $__internal_310ef8cbceeb2da9e0b900902061533a077096d9c8de360656ae30249234cbef->enter($__internal_310ef8cbceeb2da9e0b900902061533a077096d9c8de360656ae30249234cbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                                    <th>Estado</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 39
            echo "                                                <tr>
                                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["usuario"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 44
                echo "                                                        ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo ",
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "</td>
                                                    <td>";
            // line 46
            echo (($this->getAttribute($context["usuario"], "locked", array())) ? ("Bloqueado") : ("Desbloqueado"));
            echo "</td>
                                                    <td>
                                                        <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_activateUsuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">Activar/Desactivar</a>
                                                    </td>

                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>

<!-- Mensaje de confirmación de bloquear/desbloquear-->
    <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    Mensaje de confirmación
                </div>
                <div class=\"modal-body\">
                    ¿Esta seguro de bloquear/desbloquear el elemento seleccionado?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-danger btn-ok\">Aceptar</a>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_310ef8cbceeb2da9e0b900902061533a077096d9c8de360656ae30249234cbef->leave($__internal_310ef8cbceeb2da9e0b900902061533a077096d9c8de360656ae30249234cbef_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ce666062985acaf68b3a5d4063b516c9ab75275643c9821582deb473460f476 = $this->env->getExtension("native_profiler");
        $__internal_5ce666062985acaf68b3a5d4063b516c9ab75275643c9821582deb473460f476->enter($__internal_5ce666062985acaf68b3a5d4063b516c9ab75275643c9821582deb473460f476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "
 <!-- /.Botón de confirmación de bloquear/desbloquear-->
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
        
        $__internal_5ce666062985acaf68b3a5d4063b516c9ab75275643c9821582deb473460f476->leave($__internal_5ce666062985acaf68b3a5d4063b516c9ab75275643c9821582deb473460f476_prof);

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
        return array (  192 => 83,  186 => 82,  152 => 53,  141 => 48,  136 => 46,  133 => 45,  124 => 44,  120 => 43,  116 => 42,  112 => 41,  108 => 40,  105 => 39,  101 => 38,  70 => 9,  64 => 8,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
                                                    <th>Estado</th>
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
                                                    <td>{{usuario.locked ? 'Bloqueado':'Desbloqueado'}}</td>
                                                    <td>
                                                        <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_activateUsuario',{id : usuario.id}) }}\">Activar/Desactivar</a>
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

<!-- Mensaje de confirmación de bloquear/desbloquear-->
    <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    Mensaje de confirmación
                </div>
                <div class=\"modal-body\">
                    ¿Esta seguro de bloquear/desbloquear el elemento seleccionado?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-danger btn-ok\">Aceptar</a>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}

 <!-- /.Botón de confirmación de bloquear/desbloquear-->
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
