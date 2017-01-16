<?php

/* AdminBundle:Receta:list.html.twig */
class __TwigTemplate_b808fed2365783f1fc5c8025f343fa03c71b3c7f3125e8322285560998490234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Receta:list.html.twig", 1);
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
        $__internal_1090ac6e8765b1ac4c3c37da300a9a018577fed3e658e4e729ed63d11c77ed44 = $this->env->getExtension("native_profiler");
        $__internal_1090ac6e8765b1ac4c3c37da300a9a018577fed3e658e4e729ed63d11c77ed44->enter($__internal_1090ac6e8765b1ac4c3c37da300a9a018577fed3e658e4e729ed63d11c77ed44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Receta:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1090ac6e8765b1ac4c3c37da300a9a018577fed3e658e4e729ed63d11c77ed44->leave($__internal_1090ac6e8765b1ac4c3c37da300a9a018577fed3e658e4e729ed63d11c77ed44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed22c7a1a45c5028b89ef118d4b7ee4e3040d3a29bd637ab60e8d1b59acc123c = $this->env->getExtension("native_profiler");
        $__internal_ed22c7a1a45c5028b89ef118d4b7ee4e3040d3a29bd637ab60e8d1b59acc123c->enter($__internal_ed22c7a1a45c5028b89ef118d4b7ee4e3040d3a29bd637ab60e8d1b59acc123c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de recetas";
        
        $__internal_ed22c7a1a45c5028b89ef118d4b7ee4e3040d3a29bd637ab60e8d1b59acc123c->leave($__internal_ed22c7a1a45c5028b89ef118d4b7ee4e3040d3a29bd637ab60e8d1b59acc123c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e24904d4b81d84c01499acdd8f09b19d937834394401617936e6120778acf397 = $this->env->getExtension("native_profiler");
        $__internal_e24904d4b81d84c01499acdd8f09b19d937834394401617936e6120778acf397->enter($__internal_e24904d4b81d84c01499acdd8f09b19d937834394401617936e6120778acf397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_e24904d4b81d84c01499acdd8f09b19d937834394401617936e6120778acf397->leave($__internal_e24904d4b81d84c01499acdd8f09b19d937834394401617936e6120778acf397_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_94400e49eb94ecc8dec611d6b5ece319cc46e1247ed2ce303bf66b8d43c6e576 = $this->env->getExtension("native_profiler");
        $__internal_94400e49eb94ecc8dec611d6b5ece319cc46e1247ed2ce303bf66b8d43c6e576->enter($__internal_94400e49eb94ecc8dec611d6b5ece319cc46e1247ed2ce303bf66b8d43c6e576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_94400e49eb94ecc8dec611d6b5ece319cc46e1247ed2ce303bf66b8d43c6e576->leave($__internal_94400e49eb94ecc8dec611d6b5ece319cc46e1247ed2ce303bf66b8d43c6e576_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e02e88128906cefb4106ff0a3874ae7e650d8a944d422e03941aa162d05f96e6 = $this->env->getExtension("native_profiler");
        $__internal_e02e88128906cefb4106ff0a3874ae7e650d8a944d422e03941aa162d05f96e6->enter($__internal_e02e88128906cefb4106ff0a3874ae7e650d8a944d422e03941aa162d05f96e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

    !-- /.Para añadir nueva receta-->
    <script>
        \$('body').on('submit', '.ajaxForm', function (e) {

        e.preventDefault();

        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(jqXHR) {
                        \$('#myModal').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Añadir')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();
                        window.location.reload();
                    },
                    error: function(jqXHR) {
                        if (jqXHR.responseJSON.hasOwnProperty('form')) {
                            \$('#form_body').html(jqXHR.responseJSON.form);
                        }

                        \$('.form_error').html(jqXHR.responseJSON.message);
                    },
            });
        });
    </script>

";
        
        $__internal_e02e88128906cefb4106ff0a3874ae7e650d8a944d422e03941aa162d05f96e6->leave($__internal_e02e88128906cefb4106ff0a3874ae7e650d8a944d422e03941aa162d05f96e6_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Receta:list.html.twig";
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

    !-- /.Para añadir nueva receta-->
    <script>
        \$('body').on('submit', '.ajaxForm', function (e) {

        e.preventDefault();

        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(jqXHR) {
                        \$('#myModal').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Añadir')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();
                        window.location.reload();
                    },
                    error: function(jqXHR) {
                        if (jqXHR.responseJSON.hasOwnProperty('form')) {
                            \$('#form_body').html(jqXHR.responseJSON.form);
                        }

                        \$('.form_error').html(jqXHR.responseJSON.message);
                    },
            });
        });
    </script>

{% endblock %}";
    }
}
