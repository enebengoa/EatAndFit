<?php

/* @Admin/Ingrediente/list.html.twig */
class __TwigTemplate_f3e32b8b06e72307182e4d865b3919362a9fa617357cf8cfa73c107eb4254f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Ingrediente/list.html.twig", 1);
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
        $__internal_20c139db495f7fd132e12bd9b0aca8f7fa28bdf2c9629dc47812f1ce9463dade = $this->env->getExtension("native_profiler");
        $__internal_20c139db495f7fd132e12bd9b0aca8f7fa28bdf2c9629dc47812f1ce9463dade->enter($__internal_20c139db495f7fd132e12bd9b0aca8f7fa28bdf2c9629dc47812f1ce9463dade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Ingrediente/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20c139db495f7fd132e12bd9b0aca8f7fa28bdf2c9629dc47812f1ce9463dade->leave($__internal_20c139db495f7fd132e12bd9b0aca8f7fa28bdf2c9629dc47812f1ce9463dade_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdba76e2a8d29e0cc293e07d6dbc00fcfa1ae1ee5bd8491fd94854163bc61030 = $this->env->getExtension("native_profiler");
        $__internal_cdba76e2a8d29e0cc293e07d6dbc00fcfa1ae1ee5bd8491fd94854163bc61030->enter($__internal_cdba76e2a8d29e0cc293e07d6dbc00fcfa1ae1ee5bd8491fd94854163bc61030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de ingredientes";
        
        $__internal_cdba76e2a8d29e0cc293e07d6dbc00fcfa1ae1ee5bd8491fd94854163bc61030->leave($__internal_cdba76e2a8d29e0cc293e07d6dbc00fcfa1ae1ee5bd8491fd94854163bc61030_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db61b51ef46be3c8832e53f649b7a313a164a7d469cc136fdb187f525aad63ee = $this->env->getExtension("native_profiler");
        $__internal_db61b51ef46be3c8832e53f649b7a313a164a7d469cc136fdb187f525aad63ee->enter($__internal_db61b51ef46be3c8832e53f649b7a313a164a7d469cc136fdb187f525aad63ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_db61b51ef46be3c8832e53f649b7a313a164a7d469cc136fdb187f525aad63ee->leave($__internal_db61b51ef46be3c8832e53f649b7a313a164a7d469cc136fdb187f525aad63ee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_95e926fcb62d5da03f462672c89ceaf287883cad1a071a434e2a6a7abe270e0c = $this->env->getExtension("native_profiler");
        $__internal_95e926fcb62d5da03f462672c89ceaf287883cad1a071a434e2a6a7abe270e0c->enter($__internal_95e926fcb62d5da03f462672c89ceaf287883cad1a071a434e2a6a7abe270e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">INGREDIENTES</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de ingredientes</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("App_admin_addIngrediente");
        echo "\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Tipo</th>
                                                    <th>Unidad de medida</th>
                                                    <th>Calorías/Unidad</th>
                                                    <th>Apto para celiacos</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ingredientes"]) ? $context["ingredientes"] : $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 43
            echo "                                                <tr>
                                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "descripcion", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "tipoIngrediente", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "unidadMedida", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "caloriasUnidad", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 49
            echo (($this->getAttribute($context["ingrediente"], "celiaco", array())) ? ("Sí") : ("No"));
            echo "</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyIngrediente", array("id" => $this->getAttribute($context["ingrediente"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteIngrediente", array("id" => $this->getAttribute($context["ingrediente"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        
        $__internal_95e926fcb62d5da03f462672c89ceaf287883cad1a071a434e2a6a7abe270e0c->leave($__internal_95e926fcb62d5da03f462672c89ceaf287883cad1a071a434e2a6a7abe270e0c_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16e23f490282969beadb03b85d3ea5bd8c9db4461a1106ae97f21430c28317ec = $this->env->getExtension("native_profiler");
        $__internal_16e23f490282969beadb03b85d3ea5bd8c9db4461a1106ae97f21430c28317ec->enter($__internal_16e23f490282969beadb03b85d3ea5bd8c9db4461a1106ae97f21430c28317ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
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
        
        $__internal_16e23f490282969beadb03b85d3ea5bd8c9db4461a1106ae97f21430c28317ec->leave($__internal_16e23f490282969beadb03b85d3ea5bd8c9db4461a1106ae97f21430c28317ec_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Ingrediente/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 88,  190 => 87,  156 => 58,  145 => 53,  141 => 52,  135 => 49,  131 => 48,  127 => 47,  123 => 46,  119 => 45,  115 => 44,  112 => 43,  108 => 42,  90 => 27,  72 => 11,  66 => 10,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de ingredientes{% endblock %}
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
                        <span class=\"title\">INGREDIENTES</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de ingredientes</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"{{path('App_admin_addIngrediente') }}\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Tipo</th>
                                                    <th>Unidad de medida</th>
                                                    <th>Calorías/Unidad</th>
                                                    <th>Apto para celiacos</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for ingrediente in ingredientes %}
                                                <tr>
                                                    <td>{{ingrediente.nombre}}</td>
                                                    <td>{{ingrediente.descripcion}}</td>
                                                    <td>{{ingrediente.tipoIngrediente}}</td>
                                                    <td>{{ingrediente.unidadMedida}}</td>
                                                    <td>{{ingrediente.caloriasUnidad}}</td>
                                                    <td>{{ingrediente.celiaco ? 'Sí':'No'}}</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"{{path('App_admin_modifyIngrediente',{id : ingrediente.id}) }}\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteIngrediente',{id : ingrediente.id}) }}\">Eliminar</a>
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
