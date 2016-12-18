<?php

/* @Admin/TemaForo/list.html.twig */
class __TwigTemplate_37b816495d24c8d4be657976240eb7f291d38597190dcdde8d0e00ab335e922d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/TemaForo/list.html.twig", 1);
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
        $__internal_3f039cb8294bf5ced1f9baca401f17b874fae753a17ad88f9d0911fb684adfbb = $this->env->getExtension("native_profiler");
        $__internal_3f039cb8294bf5ced1f9baca401f17b874fae753a17ad88f9d0911fb684adfbb->enter($__internal_3f039cb8294bf5ced1f9baca401f17b874fae753a17ad88f9d0911fb684adfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TemaForo/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f039cb8294bf5ced1f9baca401f17b874fae753a17ad88f9d0911fb684adfbb->leave($__internal_3f039cb8294bf5ced1f9baca401f17b874fae753a17ad88f9d0911fb684adfbb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e25350a8b7672ff65d0e3186e3f03ac03d5afef0b54c44fe9b3da21c5da04fd2 = $this->env->getExtension("native_profiler");
        $__internal_e25350a8b7672ff65d0e3186e3f03ac03d5afef0b54c44fe9b3da21c5da04fd2->enter($__internal_e25350a8b7672ff65d0e3186e3f03ac03d5afef0b54c44fe9b3da21c5da04fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de temas de los foros";
        
        $__internal_e25350a8b7672ff65d0e3186e3f03ac03d5afef0b54c44fe9b3da21c5da04fd2->leave($__internal_e25350a8b7672ff65d0e3186e3f03ac03d5afef0b54c44fe9b3da21c5da04fd2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f98fddca88d70fb2942596446142e290757a4037a9ce41362af7d34804433106 = $this->env->getExtension("native_profiler");
        $__internal_f98fddca88d70fb2942596446142e290757a4037a9ce41362af7d34804433106->enter($__internal_f98fddca88d70fb2942596446142e290757a4037a9ce41362af7d34804433106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_f98fddca88d70fb2942596446142e290757a4037a9ce41362af7d34804433106->leave($__internal_f98fddca88d70fb2942596446142e290757a4037a9ce41362af7d34804433106_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e57a7e5fa765003b342108668628885aaaea1691bb22bbee7af3fa5ad8fa50ae = $this->env->getExtension("native_profiler");
        $__internal_e57a7e5fa765003b342108668628885aaaea1691bb22bbee7af3fa5ad8fa50ae->enter($__internal_e57a7e5fa765003b342108668628885aaaea1691bb22bbee7af3fa5ad8fa50ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e57a7e5fa765003b342108668628885aaaea1691bb22bbee7af3fa5ad8fa50ae->leave($__internal_e57a7e5fa765003b342108668628885aaaea1691bb22bbee7af3fa5ad8fa50ae_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa579e1774679e9a7a3504ae6861f5243005718d271a2f16643c965a5a39a24a = $this->env->getExtension("native_profiler");
        $__internal_aa579e1774679e9a7a3504ae6861f5243005718d271a2f16643c965a5a39a24a->enter($__internal_aa579e1774679e9a7a3504ae6861f5243005718d271a2f16643c965a5a39a24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_aa579e1774679e9a7a3504ae6861f5243005718d271a2f16643c965a5a39a24a->leave($__internal_aa579e1774679e9a7a3504ae6861f5243005718d271a2f16643c965a5a39a24a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TemaForo/list.html.twig";
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
