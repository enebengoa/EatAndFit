<?php

/* AdminBundle:Menu:list.html.twig */
class __TwigTemplate_a6a3c33d806cdcf02a4f5e07595d3bbebf257549b6a80755ebfaa0a901cc6740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Menu:list.html.twig", 1);
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
        $__internal_eaf83f9fb1877036011328e8447d92461718ef8edb434b719a0ff2c3aa113313 = $this->env->getExtension("native_profiler");
        $__internal_eaf83f9fb1877036011328e8447d92461718ef8edb434b719a0ff2c3aa113313->enter($__internal_eaf83f9fb1877036011328e8447d92461718ef8edb434b719a0ff2c3aa113313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Menu:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaf83f9fb1877036011328e8447d92461718ef8edb434b719a0ff2c3aa113313->leave($__internal_eaf83f9fb1877036011328e8447d92461718ef8edb434b719a0ff2c3aa113313_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85fc4d9d32364f31a5beb0e341600c0197f550f94154703760b39c5c4521be6a = $this->env->getExtension("native_profiler");
        $__internal_85fc4d9d32364f31a5beb0e341600c0197f550f94154703760b39c5c4521be6a->enter($__internal_85fc4d9d32364f31a5beb0e341600c0197f550f94154703760b39c5c4521be6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de menús";
        
        $__internal_85fc4d9d32364f31a5beb0e341600c0197f550f94154703760b39c5c4521be6a->leave($__internal_85fc4d9d32364f31a5beb0e341600c0197f550f94154703760b39c5c4521be6a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c062ce2ec7457c4878cc973a10a323bdad12d1e08140261f9326ebcd0cd1e72 = $this->env->getExtension("native_profiler");
        $__internal_8c062ce2ec7457c4878cc973a10a323bdad12d1e08140261f9326ebcd0cd1e72->enter($__internal_8c062ce2ec7457c4878cc973a10a323bdad12d1e08140261f9326ebcd0cd1e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_8c062ce2ec7457c4878cc973a10a323bdad12d1e08140261f9326ebcd0cd1e72->leave($__internal_8c062ce2ec7457c4878cc973a10a323bdad12d1e08140261f9326ebcd0cd1e72_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_687c9a58048183a732ec057c179f9ca8ef7a350aeb5d2b7e397f7eae6c223feb = $this->env->getExtension("native_profiler");
        $__internal_687c9a58048183a732ec057c179f9ca8ef7a350aeb5d2b7e397f7eae6c223feb->enter($__internal_687c9a58048183a732ec057c179f9ca8ef7a350aeb5d2b7e397f7eae6c223feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de menús</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("App_admin_addMenu");
        echo "\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descipción</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Calorias</th>
                                                    <th>Público</th>
                                                    <th>Apto para celiacos</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 41
            echo "                                                <tr>
                                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "descripcion", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["menu"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "caloriasTotales", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "publico", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 47
            echo (($this->getAttribute($context["menu"], "celiaco", array())) ? ("Sí") : ("No"));
            echo "</td>                                             
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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
        
        $__internal_687c9a58048183a732ec057c179f9ca8ef7a350aeb5d2b7e397f7eae6c223feb->leave($__internal_687c9a58048183a732ec057c179f9ca8ef7a350aeb5d2b7e397f7eae6c223feb_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cc386195a3b9cd6cd64279cec5062cf8e5acbca20b93e94040dbeedbcab7ed4 = $this->env->getExtension("native_profiler");
        $__internal_8cc386195a3b9cd6cd64279cec5062cf8e5acbca20b93e94040dbeedbcab7ed4->enter($__internal_8cc386195a3b9cd6cd64279cec5062cf8e5acbca20b93e94040dbeedbcab7ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
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
        
        $__internal_8cc386195a3b9cd6cd64279cec5062cf8e5acbca20b93e94040dbeedbcab7ed4->leave($__internal_8cc386195a3b9cd6cd64279cec5062cf8e5acbca20b93e94040dbeedbcab7ed4_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Menu:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 86,  188 => 85,  154 => 56,  143 => 51,  139 => 50,  133 => 47,  129 => 46,  125 => 45,  121 => 44,  117 => 43,  113 => 42,  110 => 41,  106 => 40,  88 => 25,  70 => 9,  64 => 8,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de menús{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}

{% block body %}
    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de menús</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"{{path('App_admin_addMenu') }}\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descipción</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Calorias</th>
                                                    <th>Público</th>
                                                    <th>Apto para celiacos</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for menu in menus %}
                                                <tr>
                                                    <td>{{menu.nombre}}</td>
                                                    <td>{{menu.descripcion}}</td>
                                                    <td>{{ menu.fechaCreacion|date('Y-m-d') }}</td>
                                                    <td>{{menu.caloriasTotales}}</td>
                                                    <td>{{menu.publico}}</td>
                                                    <td>{{menu.celiaco ? 'Sí':'No'}}</td>                                             
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"{{path('App_admin_modifyMenu',{id : menu.id}) }}\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteMenu',{id : menu.id}) }}\">Eliminar</a>
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

{% endblock %}";
    }
}
