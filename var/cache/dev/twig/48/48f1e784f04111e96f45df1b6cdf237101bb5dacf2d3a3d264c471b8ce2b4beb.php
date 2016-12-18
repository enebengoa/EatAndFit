<?php

/* AdminBundle:TemaForo:list.html.twig */
class __TwigTemplate_49a4aa386ea7ce44d1d4bfa5d15cc138924c91522a76ba1f34a518842a347d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:TemaForo:list.html.twig", 1);
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
        $__internal_791dab876e441f095ec70704915afe27529ff0dd6dad30f5bf035411ed4926b6 = $this->env->getExtension("native_profiler");
        $__internal_791dab876e441f095ec70704915afe27529ff0dd6dad30f5bf035411ed4926b6->enter($__internal_791dab876e441f095ec70704915afe27529ff0dd6dad30f5bf035411ed4926b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TemaForo:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_791dab876e441f095ec70704915afe27529ff0dd6dad30f5bf035411ed4926b6->leave($__internal_791dab876e441f095ec70704915afe27529ff0dd6dad30f5bf035411ed4926b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_deb91703092000de8ff3d387a3cc07febb1f4b077c79a8f74669d80efb677ca7 = $this->env->getExtension("native_profiler");
        $__internal_deb91703092000de8ff3d387a3cc07febb1f4b077c79a8f74669d80efb677ca7->enter($__internal_deb91703092000de8ff3d387a3cc07febb1f4b077c79a8f74669d80efb677ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de temas de los foros";
        
        $__internal_deb91703092000de8ff3d387a3cc07febb1f4b077c79a8f74669d80efb677ca7->leave($__internal_deb91703092000de8ff3d387a3cc07febb1f4b077c79a8f74669d80efb677ca7_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b51387f3cd91c4507423b94b7396402addd520f718e3e435efd5767d88ca7fcf = $this->env->getExtension("native_profiler");
        $__internal_b51387f3cd91c4507423b94b7396402addd520f718e3e435efd5767d88ca7fcf->enter($__internal_b51387f3cd91c4507423b94b7396402addd520f718e3e435efd5767d88ca7fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_b51387f3cd91c4507423b94b7396402addd520f718e3e435efd5767d88ca7fcf->leave($__internal_b51387f3cd91c4507423b94b7396402addd520f718e3e435efd5767d88ca7fcf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa215386c2d626d56cd8b557e19861a7312658db32ef1f2f2aa1015ab4ff3bb8 = $this->env->getExtension("native_profiler");
        $__internal_fa215386c2d626d56cd8b557e19861a7312658db32ef1f2f2aa1015ab4ff3bb8->enter($__internal_fa215386c2d626d56cd8b557e19861a7312658db32ef1f2f2aa1015ab4ff3bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">FOROS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de foros</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("App_admin_addTemaForo");
        echo "\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Usuario creador</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["temasForos"]) ? $context["temasForos"] : $this->getContext($context, "temasForos")));
        foreach ($context['_seq'] as $context["_key"] => $context["temaForo"]) {
            // line 40
            echo "                                                <tr>
                                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["temaForo"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["temaForo"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["temaForo"], "Usuariooo", array()), "username", array()), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyTemaForo", array("id" => $this->getAttribute($context["temaForo"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteTemaForo", array("id" => $this->getAttribute($context["temaForo"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temaForo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        
        $__internal_fa215386c2d626d56cd8b557e19861a7312658db32ef1f2f2aa1015ab4ff3bb8->leave($__internal_fa215386c2d626d56cd8b557e19861a7312658db32ef1f2f2aa1015ab4ff3bb8_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7d1fff3c99fc60c7166bcee26b2c100dd1dd452f6650cb39dd707b0194714de = $this->env->getExtension("native_profiler");
        $__internal_a7d1fff3c99fc60c7166bcee26b2c100dd1dd452f6650cb39dd707b0194714de->enter($__internal_a7d1fff3c99fc60c7166bcee26b2c100dd1dd452f6650cb39dd707b0194714de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
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
        
        $__internal_a7d1fff3c99fc60c7166bcee26b2c100dd1dd452f6650cb39dd707b0194714de->leave($__internal_a7d1fff3c99fc60c7166bcee26b2c100dd1dd452f6650cb39dd707b0194714de_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TemaForo:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 82,  175 => 81,  141 => 52,  130 => 47,  126 => 46,  120 => 43,  116 => 42,  112 => 41,  109 => 40,  105 => 39,  90 => 27,  72 => 11,  66 => 10,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de temas de los foros{% endblock %}
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
                        <span class=\"title\">FOROS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de foros</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"{{path('App_admin_addTemaForo') }}\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Usuario creador</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for temaForo in temasForos %}
                                                <tr>
                                                    <td>{{temaForo.nombre}}</td>
                                                    <td>{{ temaForo.fechaCreacion|date('Y-m-d') }}</td>
                                                    <td>{{temaForo.Usuariooo.username}}</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"{{path('App_admin_modifyTemaForo',{id : temaForo.id}) }}\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteTemaForo',{id : temaForo.id}) }}\">Eliminar</a>
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
