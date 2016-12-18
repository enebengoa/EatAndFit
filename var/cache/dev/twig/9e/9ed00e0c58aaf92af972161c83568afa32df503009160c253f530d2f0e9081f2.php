<?php

/* @Admin/TipoReceta/list.html.twig */
class __TwigTemplate_68c2dcfd6754e957a99c729a6cc0f63cc0b8b0e37f0c59938b4709fc8a2333f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/TipoReceta/list.html.twig", 1);
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
        $__internal_c17c948180e3a86a28cfffe42cdccad061e43dbaf66568a70bb41034d872ef6d = $this->env->getExtension("native_profiler");
        $__internal_c17c948180e3a86a28cfffe42cdccad061e43dbaf66568a70bb41034d872ef6d->enter($__internal_c17c948180e3a86a28cfffe42cdccad061e43dbaf66568a70bb41034d872ef6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TipoReceta/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c17c948180e3a86a28cfffe42cdccad061e43dbaf66568a70bb41034d872ef6d->leave($__internal_c17c948180e3a86a28cfffe42cdccad061e43dbaf66568a70bb41034d872ef6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac11e4fd18ae8eb0dc16c21e668188f3c95ae586f777d3c398f890d2b3cde718 = $this->env->getExtension("native_profiler");
        $__internal_ac11e4fd18ae8eb0dc16c21e668188f3c95ae586f777d3c398f890d2b3cde718->enter($__internal_ac11e4fd18ae8eb0dc16c21e668188f3c95ae586f777d3c398f890d2b3cde718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de tipos de recetas";
        
        $__internal_ac11e4fd18ae8eb0dc16c21e668188f3c95ae586f777d3c398f890d2b3cde718->leave($__internal_ac11e4fd18ae8eb0dc16c21e668188f3c95ae586f777d3c398f890d2b3cde718_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b33d8fb187b1297ae6aa706a91cf3dec519faf4178232314fa6e9afa9df9f569 = $this->env->getExtension("native_profiler");
        $__internal_b33d8fb187b1297ae6aa706a91cf3dec519faf4178232314fa6e9afa9df9f569->enter($__internal_b33d8fb187b1297ae6aa706a91cf3dec519faf4178232314fa6e9afa9df9f569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_b33d8fb187b1297ae6aa706a91cf3dec519faf4178232314fa6e9afa9df9f569->leave($__internal_b33d8fb187b1297ae6aa706a91cf3dec519faf4178232314fa6e9afa9df9f569_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7198de54c7c100f7713f53c85b881580a9853649baa917631d131dc0dab659f1 = $this->env->getExtension("native_profiler");
        $__internal_7198de54c7c100f7713f53c85b881580a9853649baa917631d131dc0dab659f1->enter($__internal_7198de54c7c100f7713f53c85b881580a9853649baa917631d131dc0dab659f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7198de54c7c100f7713f53c85b881580a9853649baa917631d131dc0dab659f1->leave($__internal_7198de54c7c100f7713f53c85b881580a9853649baa917631d131dc0dab659f1_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d6509f2f40d0771307b2623166d4afa0b931adcd539aaf5577dbaea90f3dd81 = $this->env->getExtension("native_profiler");
        $__internal_1d6509f2f40d0771307b2623166d4afa0b931adcd539aaf5577dbaea90f3dd81->enter($__internal_1d6509f2f40d0771307b2623166d4afa0b931adcd539aaf5577dbaea90f3dd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1d6509f2f40d0771307b2623166d4afa0b931adcd539aaf5577dbaea90f3dd81->leave($__internal_1d6509f2f40d0771307b2623166d4afa0b931adcd539aaf5577dbaea90f3dd81_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TipoReceta/list.html.twig";
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
