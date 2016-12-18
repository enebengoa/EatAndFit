<?php

/* @Admin/Receta/list.html.twig */
class __TwigTemplate_62799a4819807308af9329d1925b52ffe9eed02005401e79d291aba6dcb67968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Receta/list.html.twig", 1);
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
        $__internal_c7d32220ec07e2f976b46aba6145281590ed566e352fa0efc8d05ebffc408502 = $this->env->getExtension("native_profiler");
        $__internal_c7d32220ec07e2f976b46aba6145281590ed566e352fa0efc8d05ebffc408502->enter($__internal_c7d32220ec07e2f976b46aba6145281590ed566e352fa0efc8d05ebffc408502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Receta/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7d32220ec07e2f976b46aba6145281590ed566e352fa0efc8d05ebffc408502->leave($__internal_c7d32220ec07e2f976b46aba6145281590ed566e352fa0efc8d05ebffc408502_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc909dfc3af4a37f35579fa0bced10edbede3b6de09b8d5de4413f345d234ec9 = $this->env->getExtension("native_profiler");
        $__internal_fc909dfc3af4a37f35579fa0bced10edbede3b6de09b8d5de4413f345d234ec9->enter($__internal_fc909dfc3af4a37f35579fa0bced10edbede3b6de09b8d5de4413f345d234ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de recetas";
        
        $__internal_fc909dfc3af4a37f35579fa0bced10edbede3b6de09b8d5de4413f345d234ec9->leave($__internal_fc909dfc3af4a37f35579fa0bced10edbede3b6de09b8d5de4413f345d234ec9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a5d4686490bb503c5e477664636c1c629c3699cf2ee2b1751835a08a327167e = $this->env->getExtension("native_profiler");
        $__internal_7a5d4686490bb503c5e477664636c1c629c3699cf2ee2b1751835a08a327167e->enter($__internal_7a5d4686490bb503c5e477664636c1c629c3699cf2ee2b1751835a08a327167e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_7a5d4686490bb503c5e477664636c1c629c3699cf2ee2b1751835a08a327167e->leave($__internal_7a5d4686490bb503c5e477664636c1c629c3699cf2ee2b1751835a08a327167e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d959d456e0a6dd4f8c4a8098c0d98c529e8ffee22d9dc12b8061b0ea30031db = $this->env->getExtension("native_profiler");
        $__internal_1d959d456e0a6dd4f8c4a8098c0d98c529e8ffee22d9dc12b8061b0ea30031db->enter($__internal_1d959d456e0a6dd4f8c4a8098c0d98c529e8ffee22d9dc12b8061b0ea30031db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de recetas</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("App_admin_addReceta");
        echo "\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Tiempo de preparación</th>
                                                    <th>Dificultad</th>
                                                    <th>Comensales</th>
                                                    <th>Calorias</th>
                                                    <th>Horas de ingesta</th>
                                                    <th>Apto para celiacos</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recetas"]) ? $context["recetas"] : $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 43
            echo "                                                <tr>
                                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "tiempoPreparacion", array()), "H-i-s"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "dificultad", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "numeroComensales", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "calorias", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["receta"], "horasIngesta", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["horaIngesta"]) {
                // line 51
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["horaIngesta"], "nombre", array()), "html", null, true);
                echo ",
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horaIngesta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "</td>
                                                    <td>";
            // line 53
            echo (($this->getAttribute($context["receta"], "celiaco", array())) ? ("Sí") : ("No"));
            echo "</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        
        $__internal_1d959d456e0a6dd4f8c4a8098c0d98c529e8ffee22d9dc12b8061b0ea30031db->leave($__internal_1d959d456e0a6dd4f8c4a8098c0d98c529e8ffee22d9dc12b8061b0ea30031db_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f21f1aebe9b0f404eae774d6c66063dd52bb482d4a147b8993eebf4a1bba78d9 = $this->env->getExtension("native_profiler");
        $__internal_f21f1aebe9b0f404eae774d6c66063dd52bb482d4a147b8993eebf4a1bba78d9->enter($__internal_f21f1aebe9b0f404eae774d6c66063dd52bb482d4a147b8993eebf4a1bba78d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
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
        
        $__internal_f21f1aebe9b0f404eae774d6c66063dd52bb482d4a147b8993eebf4a1bba78d9->leave($__internal_f21f1aebe9b0f404eae774d6c66063dd52bb482d4a147b8993eebf4a1bba78d9_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Receta/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 92,  210 => 91,  176 => 62,  165 => 57,  161 => 56,  155 => 53,  152 => 52,  143 => 51,  139 => 50,  135 => 49,  131 => 48,  127 => 47,  123 => 46,  119 => 45,  115 => 44,  112 => 43,  108 => 42,  88 => 25,  70 => 9,  64 => 8,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de recetas{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}

{% block body %}
    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de recetas</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"{{path('App_admin_addReceta') }}\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Tiempo de preparación</th>
                                                    <th>Dificultad</th>
                                                    <th>Comensales</th>
                                                    <th>Calorias</th>
                                                    <th>Horas de ingesta</th>
                                                    <th>Apto para celiacos</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for receta in recetas %}
                                                <tr>
                                                    <td>{{receta.nombre}}</td>
                                                    <td>{{ receta.fechaCreacion|date('Y-m-d') }}</td>
                                                    <td>{{receta.tiempoPreparacion|date('H-i-s')}}</td>
                                                    <td>{{receta.dificultad}}</td>
                                                    <td>{{receta.numeroComensales}}</td>
                                                    <td>{{receta.calorias}}</td>
                                                    <td>{% for horaIngesta in receta.horasIngesta %}
                                                        {{horaIngesta.nombre}},
                                                    {% endfor %}</td>
                                                    <td>{{receta.celiaco ? 'Sí':'No'}}</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"{{path('App_admin_modifyReceta',{id : receta.id}) }}\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteReceta',{id : receta.id}) }}\">Eliminar</a>
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
