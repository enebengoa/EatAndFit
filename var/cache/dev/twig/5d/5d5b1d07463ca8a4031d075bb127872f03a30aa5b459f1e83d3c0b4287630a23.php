<?php

/* AdminBundle:Utensilio:list.html.twig */
class __TwigTemplate_9b8cbe7a56205dac7cafb5f3d2b6e5ff28c2d4b4e0964d726966a3ab8e02d673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Utensilio:list.html.twig", 1);
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
        $__internal_d160b2061d82e5eb994c33e6d520219bf9d3b37b685d8a9bd8aa79ed3a7bcdf9 = $this->env->getExtension("native_profiler");
        $__internal_d160b2061d82e5eb994c33e6d520219bf9d3b37b685d8a9bd8aa79ed3a7bcdf9->enter($__internal_d160b2061d82e5eb994c33e6d520219bf9d3b37b685d8a9bd8aa79ed3a7bcdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Utensilio:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d160b2061d82e5eb994c33e6d520219bf9d3b37b685d8a9bd8aa79ed3a7bcdf9->leave($__internal_d160b2061d82e5eb994c33e6d520219bf9d3b37b685d8a9bd8aa79ed3a7bcdf9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ba8095a9680e92bd0e1cbe619e2094ea066623e05b800957b3e1a00ce562a61 = $this->env->getExtension("native_profiler");
        $__internal_2ba8095a9680e92bd0e1cbe619e2094ea066623e05b800957b3e1a00ce562a61->enter($__internal_2ba8095a9680e92bd0e1cbe619e2094ea066623e05b800957b3e1a00ce562a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de utensilios";
        
        $__internal_2ba8095a9680e92bd0e1cbe619e2094ea066623e05b800957b3e1a00ce562a61->leave($__internal_2ba8095a9680e92bd0e1cbe619e2094ea066623e05b800957b3e1a00ce562a61_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c05a76dafd3a5f6fb54df1f519918522103af3a38e44c0f6881c746c913b2b4 = $this->env->getExtension("native_profiler");
        $__internal_3c05a76dafd3a5f6fb54df1f519918522103af3a38e44c0f6881c746c913b2b4->enter($__internal_3c05a76dafd3a5f6fb54df1f519918522103af3a38e44c0f6881c746c913b2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_3c05a76dafd3a5f6fb54df1f519918522103af3a38e44c0f6881c746c913b2b4->leave($__internal_3c05a76dafd3a5f6fb54df1f519918522103af3a38e44c0f6881c746c913b2b4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a40e6c43b36a91ef850f814490eb22f7f27769b39e8c0260bac2870e1ca9eff = $this->env->getExtension("native_profiler");
        $__internal_1a40e6c43b36a91ef850f814490eb22f7f27769b39e8c0260bac2870e1ca9eff->enter($__internal_1a40e6c43b36a91ef850f814490eb22f7f27769b39e8c0260bac2870e1ca9eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a40e6c43b36a91ef850f814490eb22f7f27769b39e8c0260bac2870e1ca9eff->leave($__internal_1a40e6c43b36a91ef850f814490eb22f7f27769b39e8c0260bac2870e1ca9eff_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3485857f017036400e49047da76e8bbe92dca06e7356281c5b78f2774da2dd5 = $this->env->getExtension("native_profiler");
        $__internal_f3485857f017036400e49047da76e8bbe92dca06e7356281c5b78f2774da2dd5->enter($__internal_f3485857f017036400e49047da76e8bbe92dca06e7356281c5b78f2774da2dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f3485857f017036400e49047da76e8bbe92dca06e7356281c5b78f2774da2dd5->leave($__internal_f3485857f017036400e49047da76e8bbe92dca06e7356281c5b78f2774da2dd5_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Utensilio:list.html.twig";
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
