<?php

/* @Admin/Utensilio/list.html.twig */
class __TwigTemplate_be6819106d449f750ee07af86192b57fd97671c57d1324042e913c8e46ac20fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Utensilio/list.html.twig", 1);
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
        $__internal_3520d4934cf107b14c6f531e709f6c9fcfeaf656c89cb3742514da8a031aa1b6 = $this->env->getExtension("native_profiler");
        $__internal_3520d4934cf107b14c6f531e709f6c9fcfeaf656c89cb3742514da8a031aa1b6->enter($__internal_3520d4934cf107b14c6f531e709f6c9fcfeaf656c89cb3742514da8a031aa1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Utensilio/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3520d4934cf107b14c6f531e709f6c9fcfeaf656c89cb3742514da8a031aa1b6->leave($__internal_3520d4934cf107b14c6f531e709f6c9fcfeaf656c89cb3742514da8a031aa1b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fc30852834012609ca5afb81e1755ba3e9a3b21e3fbf5e1ee9779b597386bcc = $this->env->getExtension("native_profiler");
        $__internal_9fc30852834012609ca5afb81e1755ba3e9a3b21e3fbf5e1ee9779b597386bcc->enter($__internal_9fc30852834012609ca5afb81e1755ba3e9a3b21e3fbf5e1ee9779b597386bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de utensilios";
        
        $__internal_9fc30852834012609ca5afb81e1755ba3e9a3b21e3fbf5e1ee9779b597386bcc->leave($__internal_9fc30852834012609ca5afb81e1755ba3e9a3b21e3fbf5e1ee9779b597386bcc_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4948547a5fb99a89e9845aab8feedb54f9f034d3fd3688bd21dbbf34502d64ab = $this->env->getExtension("native_profiler");
        $__internal_4948547a5fb99a89e9845aab8feedb54f9f034d3fd3688bd21dbbf34502d64ab->enter($__internal_4948547a5fb99a89e9845aab8feedb54f9f034d3fd3688bd21dbbf34502d64ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_4948547a5fb99a89e9845aab8feedb54f9f034d3fd3688bd21dbbf34502d64ab->leave($__internal_4948547a5fb99a89e9845aab8feedb54f9f034d3fd3688bd21dbbf34502d64ab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b533a3c6ac643a2c97d49b4a994795c861dfdff55ee45036dca7c2ffd7f38d84 = $this->env->getExtension("native_profiler");
        $__internal_b533a3c6ac643a2c97d49b4a994795c861dfdff55ee45036dca7c2ffd7f38d84->enter($__internal_b533a3c6ac643a2c97d49b4a994795c861dfdff55ee45036dca7c2ffd7f38d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
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
                                    <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("App_admin_addUtensilio");
        echo "\">Añadir</a>
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utensilios"]) ? $context["utensilios"] : $this->getContext($context, "utensilios")));
        foreach ($context['_seq'] as $context["_key"] => $context["utensilio"]) {
            // line 39
            echo "                                                <tr>
                                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["utensilio"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["utensilio"], "descripcion", array()), "html", null, true);
            echo "</td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                    <td>
                                                            <a class=\"btn btn-default\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyUtensilio", array("id" => $this->getAttribute($context["utensilio"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteUtensilio", array("id" => $this->getAttribute($context["utensilio"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utensilio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        
        $__internal_b533a3c6ac643a2c97d49b4a994795c861dfdff55ee45036dca7c2ffd7f38d84->leave($__internal_b533a3c6ac643a2c97d49b4a994795c861dfdff55ee45036dca7c2ffd7f38d84_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1cd833ab0309c8d1c7d538cda1ec91d2944a743e04cc19068868157d66fa01ae = $this->env->getExtension("native_profiler");
        $__internal_1cd833ab0309c8d1c7d538cda1ec91d2944a743e04cc19068868157d66fa01ae->enter($__internal_1cd833ab0309c8d1c7d538cda1ec91d2944a743e04cc19068868157d66fa01ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "
 <!-- /.Botón de confirmación de eliminar-->
    <script>
        \$('#confirm-delete').on('show.bs.modal', function(e) 
        {\$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));});
    </script>

     <!-- /.Buscador -->
    <script src=\"https://code.jquery.com/jquery-1.12.3.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js\"></script>

    <script>
        \$(document).ready(function(){\$('#myTable').DataTable();
        });
    </script>

";
        
        $__internal_1cd833ab0309c8d1c7d538cda1ec91d2944a743e04cc19068868157d66fa01ae->leave($__internal_1cd833ab0309c8d1c7d538cda1ec91d2944a743e04cc19068868157d66fa01ae_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Utensilio/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 79,  169 => 78,  135 => 49,  125 => 45,  121 => 44,  115 => 41,  111 => 40,  108 => 39,  104 => 38,  90 => 27,  72 => 11,  66 => 10,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de utensilios{% endblock %}
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
                                    <a class=\"btn btn-default\" href=\"{{path('App_admin_addUtensilio') }}\">Añadir</a>
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

{% endblock %}

{% block javascripts %}

 <!-- /.Botón de confirmación de eliminar-->
    <script>
        \$('#confirm-delete').on('show.bs.modal', function(e) 
        {\$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));});
    </script>

     <!-- /.Buscador -->
    <script src=\"https://code.jquery.com/jquery-1.12.3.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js\"></script>

    <script>
        \$(document).ready(function(){\$('#myTable').DataTable();
        });
    </script>

{% endblock %}
";
    }
}
