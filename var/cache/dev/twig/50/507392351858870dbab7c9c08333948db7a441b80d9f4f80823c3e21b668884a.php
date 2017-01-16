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
        $__internal_4bf2ad1dd4853d28c18c58d284bd2751481eb45bf1862536f7370777c42439fd = $this->env->getExtension("native_profiler");
        $__internal_4bf2ad1dd4853d28c18c58d284bd2751481eb45bf1862536f7370777c42439fd->enter($__internal_4bf2ad1dd4853d28c18c58d284bd2751481eb45bf1862536f7370777c42439fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Usuario:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bf2ad1dd4853d28c18c58d284bd2751481eb45bf1862536f7370777c42439fd->leave($__internal_4bf2ad1dd4853d28c18c58d284bd2751481eb45bf1862536f7370777c42439fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eba5961fe9b122a11a49bf34bb66d87167f29d2624506cc78ec25537fa73e428 = $this->env->getExtension("native_profiler");
        $__internal_eba5961fe9b122a11a49bf34bb66d87167f29d2624506cc78ec25537fa73e428->enter($__internal_eba5961fe9b122a11a49bf34bb66d87167f29d2624506cc78ec25537fa73e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de usuarios";
        
        $__internal_eba5961fe9b122a11a49bf34bb66d87167f29d2624506cc78ec25537fa73e428->leave($__internal_eba5961fe9b122a11a49bf34bb66d87167f29d2624506cc78ec25537fa73e428_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46ddad0cddd10381a9968429759cdff664bd7b45a4448b679cde79a1c0940c14 = $this->env->getExtension("native_profiler");
        $__internal_46ddad0cddd10381a9968429759cdff664bd7b45a4448b679cde79a1c0940c14->enter($__internal_46ddad0cddd10381a9968429759cdff664bd7b45a4448b679cde79a1c0940c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_46ddad0cddd10381a9968429759cdff664bd7b45a4448b679cde79a1c0940c14->leave($__internal_46ddad0cddd10381a9968429759cdff664bd7b45a4448b679cde79a1c0940c14_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddf50e792c35aa3d3062034b501dbf3e782a632fe7ee5e9a547f5ecc51ffeacf = $this->env->getExtension("native_profiler");
        $__internal_ddf50e792c35aa3d3062034b501dbf3e782a632fe7ee5e9a547f5ecc51ffeacf->enter($__internal_ddf50e792c35aa3d3062034b501dbf3e782a632fe7ee5e9a547f5ecc51ffeacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ddf50e792c35aa3d3062034b501dbf3e782a632fe7ee5e9a547f5ecc51ffeacf->leave($__internal_ddf50e792c35aa3d3062034b501dbf3e782a632fe7ee5e9a547f5ecc51ffeacf_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86020ede48c75c12a62438ef9db4dd98f4daa28d3f7ddb2aa4849f799ba1915e = $this->env->getExtension("native_profiler");
        $__internal_86020ede48c75c12a62438ef9db4dd98f4daa28d3f7ddb2aa4849f799ba1915e->enter($__internal_86020ede48c75c12a62438ef9db4dd98f4daa28d3f7ddb2aa4849f799ba1915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_86020ede48c75c12a62438ef9db4dd98f4daa28d3f7ddb2aa4849f799ba1915e->leave($__internal_86020ede48c75c12a62438ef9db4dd98f4daa28d3f7ddb2aa4849f799ba1915e_prof);

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
