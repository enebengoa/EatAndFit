<?php

/* AdminBundle:HoraIngesta:list.html.twig */
class __TwigTemplate_23fd9e4a6d02cdc4b9fd259f24850a4c531a2eda2e739e3c487459bb75d3ee86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:HoraIngesta:list.html.twig", 1);
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
        $__internal_14bc9836079aeb95fbd87261b2400c9fc898cdf522b98aeef65ab60bee32e35c = $this->env->getExtension("native_profiler");
        $__internal_14bc9836079aeb95fbd87261b2400c9fc898cdf522b98aeef65ab60bee32e35c->enter($__internal_14bc9836079aeb95fbd87261b2400c9fc898cdf522b98aeef65ab60bee32e35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:HoraIngesta:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14bc9836079aeb95fbd87261b2400c9fc898cdf522b98aeef65ab60bee32e35c->leave($__internal_14bc9836079aeb95fbd87261b2400c9fc898cdf522b98aeef65ab60bee32e35c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2ee15f247ee82e23dacb0781566017c5fb040731c04bf9a737292b24688e560 = $this->env->getExtension("native_profiler");
        $__internal_f2ee15f247ee82e23dacb0781566017c5fb040731c04bf9a737292b24688e560->enter($__internal_f2ee15f247ee82e23dacb0781566017c5fb040731c04bf9a737292b24688e560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de horas de ingesta";
        
        $__internal_f2ee15f247ee82e23dacb0781566017c5fb040731c04bf9a737292b24688e560->leave($__internal_f2ee15f247ee82e23dacb0781566017c5fb040731c04bf9a737292b24688e560_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1ee065094e286a0944b25d9e53624f353037f4560785920184feb216e0a74cf0 = $this->env->getExtension("native_profiler");
        $__internal_1ee065094e286a0944b25d9e53624f353037f4560785920184feb216e0a74cf0->enter($__internal_1ee065094e286a0944b25d9e53624f353037f4560785920184feb216e0a74cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_1ee065094e286a0944b25d9e53624f353037f4560785920184feb216e0a74cf0->leave($__internal_1ee065094e286a0944b25d9e53624f353037f4560785920184feb216e0a74cf0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6f3fc820c6504a8c5c7ebf88a99269169810f1f52bed49387b0ded187bdcb85 = $this->env->getExtension("native_profiler");
        $__internal_c6f3fc820c6504a8c5c7ebf88a99269169810f1f52bed49387b0ded187bdcb85->enter($__internal_c6f3fc820c6504a8c5c7ebf88a99269169810f1f52bed49387b0ded187bdcb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">HORAS DE INGESTA</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de horas de ingesta</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("App_admin_addHoraIngesta");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["horasIngesta"]) ? $context["horasIngesta"] : $this->getContext($context, "horasIngesta")));
        foreach ($context['_seq'] as $context["_key"] => $context["horaIngesta"]) {
            // line 38
            echo "                                                <tr>
                                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaIngesta"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyHoraIngesta", array("id" => $this->getAttribute($context["horaIngesta"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteHoraIngesta", array("id" => $this->getAttribute($context["horaIngesta"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horaIngesta'], $context['_parent'], $context['loop']);
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
        
        $__internal_c6f3fc820c6504a8c5c7ebf88a99269169810f1f52bed49387b0ded187bdcb85->leave($__internal_c6f3fc820c6504a8c5c7ebf88a99269169810f1f52bed49387b0ded187bdcb85_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a1b30e8a9332b23f60e3f0fc92ccd35b67d9db89401ad178191330fab4cdef5e = $this->env->getExtension("native_profiler");
        $__internal_a1b30e8a9332b23f60e3f0fc92ccd35b67d9db89401ad178191330fab4cdef5e->enter($__internal_a1b30e8a9332b23f60e3f0fc92ccd35b67d9db89401ad178191330fab4cdef5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a1b30e8a9332b23f60e3f0fc92ccd35b67d9db89401ad178191330fab4cdef5e->leave($__internal_a1b30e8a9332b23f60e3f0fc92ccd35b67d9db89401ad178191330fab4cdef5e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:HoraIngesta:list.html.twig";
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

{% block title %}Lista de horas de ingesta{% endblock %}
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
                        <span class=\"title\">HORAS DE INGESTA</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de horas de ingesta</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"{{path('App_admin_addHoraIngesta') }}\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for horaIngesta in horasIngesta %}
                                                <tr>
                                                    <td>{{horaIngesta.nombre}}</td>
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"{{path('App_admin_modifyHoraIngesta',{id : horaIngesta.id}) }}\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteHoraIngesta',{id : horaIngesta.id}) }}\">Eliminar</a>
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