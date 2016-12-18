<?php

/* AdminBundle:TipoReceta:list.html.twig */
class __TwigTemplate_7d32b851a876f4d05fb1f1b52e9598be3f95c58a5bd22e4e52aac13784f3dc8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:TipoReceta:list.html.twig", 1);
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
        $__internal_4aa65fa9fb2d55fc535f5ebda977458237d3761be33c9847bbd5042fa647fc2b = $this->env->getExtension("native_profiler");
        $__internal_4aa65fa9fb2d55fc535f5ebda977458237d3761be33c9847bbd5042fa647fc2b->enter($__internal_4aa65fa9fb2d55fc535f5ebda977458237d3761be33c9847bbd5042fa647fc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TipoReceta:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aa65fa9fb2d55fc535f5ebda977458237d3761be33c9847bbd5042fa647fc2b->leave($__internal_4aa65fa9fb2d55fc535f5ebda977458237d3761be33c9847bbd5042fa647fc2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7b096b702e1efca505e4178783b2ce32f68ee0fcdc2ba14508237c36b5efa62 = $this->env->getExtension("native_profiler");
        $__internal_e7b096b702e1efca505e4178783b2ce32f68ee0fcdc2ba14508237c36b5efa62->enter($__internal_e7b096b702e1efca505e4178783b2ce32f68ee0fcdc2ba14508237c36b5efa62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de tipos de recetas";
        
        $__internal_e7b096b702e1efca505e4178783b2ce32f68ee0fcdc2ba14508237c36b5efa62->leave($__internal_e7b096b702e1efca505e4178783b2ce32f68ee0fcdc2ba14508237c36b5efa62_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d89e252af6e86bdc58ad30d1861c9f9aca37439a66c4dd0f93713c8b43797f7 = $this->env->getExtension("native_profiler");
        $__internal_7d89e252af6e86bdc58ad30d1861c9f9aca37439a66c4dd0f93713c8b43797f7->enter($__internal_7d89e252af6e86bdc58ad30d1861c9f9aca37439a66c4dd0f93713c8b43797f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_7d89e252af6e86bdc58ad30d1861c9f9aca37439a66c4dd0f93713c8b43797f7->leave($__internal_7d89e252af6e86bdc58ad30d1861c9f9aca37439a66c4dd0f93713c8b43797f7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_16087cbdfcc749eda805c8c386f82d26b901c87d2e89ef8f87ada522e7dee0f0 = $this->env->getExtension("native_profiler");
        $__internal_16087cbdfcc749eda805c8c386f82d26b901c87d2e89ef8f87ada522e7dee0f0->enter($__internal_16087cbdfcc749eda805c8c386f82d26b901c87d2e89ef8f87ada522e7dee0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TIPOS DE RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de tipos de recetas</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("App_admin_addTipoReceta");
        echo "\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tiposReceta"]) ? $context["tiposReceta"] : $this->getContext($context, "tiposReceta")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoReceta"]) {
            // line 38
            echo "                                                <tr>
                                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipoReceta"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyTipoReceta", array("id" => $this->getAttribute($context["tipoReceta"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteTipoReceta", array("id" => $this->getAttribute($context["tipoReceta"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoReceta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        
        $__internal_16087cbdfcc749eda805c8c386f82d26b901c87d2e89ef8f87ada522e7dee0f0->leave($__internal_16087cbdfcc749eda805c8c386f82d26b901c87d2e89ef8f87ada522e7dee0f0_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e12f0d79f9ccb7106457e5a3113b902943042dab769ae4ed269af6739c7547b = $this->env->getExtension("native_profiler");
        $__internal_2e12f0d79f9ccb7106457e5a3113b902943042dab769ae4ed269af6739c7547b->enter($__internal_2e12f0d79f9ccb7106457e5a3113b902943042dab769ae4ed269af6739c7547b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
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
        
        $__internal_2e12f0d79f9ccb7106457e5a3113b902943042dab769ae4ed269af6739c7547b->leave($__internal_2e12f0d79f9ccb7106457e5a3113b902943042dab769ae4ed269af6739c7547b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TipoReceta:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 78,  165 => 77,  131 => 48,  120 => 43,  116 => 42,  110 => 39,  107 => 38,  103 => 37,  90 => 27,  72 => 11,  66 => 10,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de tipos de recetas{% endblock %}
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
                        <span class=\"title\">TIPOS DE RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de tipos de recetas</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"{{path('App_admin_addTipoReceta') }}\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for tipoReceta in tiposReceta %}
                                                <tr>
                                                    <td>{{tipoReceta.nombre}}</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"{{path('App_admin_modifyTipoReceta',{id : tipoReceta.id}) }}\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteTipoReceta',{id : tipoReceta.id}) }}\">Eliminar</a>
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

{% endblock %}

";
    }
}
