<?php

/* AdminBundle:Tecnica:list.html.twig */
class __TwigTemplate_29c7294d88c753d13c4c88c948319e85b02254baa1083b63f7054c658e6d7ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Tecnica:list.html.twig", 1);
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
        $__internal_7d8d0e70d91e3dd552ad2c58b2eb34d065a3f63c4ab807708427ecad32f049eb = $this->env->getExtension("native_profiler");
        $__internal_7d8d0e70d91e3dd552ad2c58b2eb34d065a3f63c4ab807708427ecad32f049eb->enter($__internal_7d8d0e70d91e3dd552ad2c58b2eb34d065a3f63c4ab807708427ecad32f049eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Tecnica:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d8d0e70d91e3dd552ad2c58b2eb34d065a3f63c4ab807708427ecad32f049eb->leave($__internal_7d8d0e70d91e3dd552ad2c58b2eb34d065a3f63c4ab807708427ecad32f049eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cbaa3eb899c51d8f6eb66c1b82839af8f7d9e697c4ae36279158cf86177ca9e = $this->env->getExtension("native_profiler");
        $__internal_6cbaa3eb899c51d8f6eb66c1b82839af8f7d9e697c4ae36279158cf86177ca9e->enter($__internal_6cbaa3eb899c51d8f6eb66c1b82839af8f7d9e697c4ae36279158cf86177ca9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de técnicas";
        
        $__internal_6cbaa3eb899c51d8f6eb66c1b82839af8f7d9e697c4ae36279158cf86177ca9e->leave($__internal_6cbaa3eb899c51d8f6eb66c1b82839af8f7d9e697c4ae36279158cf86177ca9e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1b17ad28c57696e887b1635b61465e0f154640b776a60056aec6d35eea7b55a = $this->env->getExtension("native_profiler");
        $__internal_b1b17ad28c57696e887b1635b61465e0f154640b776a60056aec6d35eea7b55a->enter($__internal_b1b17ad28c57696e887b1635b61465e0f154640b776a60056aec6d35eea7b55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_b1b17ad28c57696e887b1635b61465e0f154640b776a60056aec6d35eea7b55a->leave($__internal_b1b17ad28c57696e887b1635b61465e0f154640b776a60056aec6d35eea7b55a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f31dc169a37034c182baf7411502e89650b823a7a0676170c559252fb9abbcb = $this->env->getExtension("native_profiler");
        $__internal_8f31dc169a37034c182baf7411502e89650b823a7a0676170c559252fb9abbcb->enter($__internal_8f31dc169a37034c182baf7411502e89650b823a7a0676170c559252fb9abbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TÉCNICAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de técnicas</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("App_admin_addTecnica");
        echo "\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Utensilios requeridos</th>
                                                    <th>Video</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tecnicas"]) ? $context["tecnicas"] : $this->getContext($context, "tecnicas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tecnica"]) {
            // line 40
            echo "                                                <tr>
                                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["tecnica"], "nombre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["tecnica"], "descripcion", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tecnica"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tecnica"], "utensilios", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["utensilio"]) {
                // line 45
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["utensilio"], "nombre", array()), "html", null, true);
                echo ",
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utensilio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "</td>
                                                    ";
            // line 47
            if (($this->getAttribute($context["tecnica"], "vid", array()) == null)) {
                // line 48
                echo "                                                    <td>No video disponible</td>
                                                    ";
            } else {
                // line 50
                echo "                                                    <td><iframe width=\"75%\" height=\"75%\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tecnica"], "vid", array()), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe></td>
                                                    ";
            }
            // line 52
            echo "                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_modifyTecnica", array("id" => $this->getAttribute($context["tecnica"], "id", array()))), "html", null, true);
            echo "\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_admin_deleteTecnica", array("id" => $this->getAttribute($context["tecnica"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tecnica'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        
        $__internal_8f31dc169a37034c182baf7411502e89650b823a7a0676170c559252fb9abbcb->leave($__internal_8f31dc169a37034c182baf7411502e89650b823a7a0676170c559252fb9abbcb_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_369020e758882841e07a902f57cef7e63a225ff51a69510fa23ba223600c35cf = $this->env->getExtension("native_profiler");
        $__internal_369020e758882841e07a902f57cef7e63a225ff51a69510fa23ba223600c35cf->enter($__internal_369020e758882841e07a902f57cef7e63a225ff51a69510fa23ba223600c35cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
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
        
        $__internal_369020e758882841e07a902f57cef7e63a225ff51a69510fa23ba223600c35cf->leave($__internal_369020e758882841e07a902f57cef7e63a225ff51a69510fa23ba223600c35cf_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Tecnica:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 90,  205 => 89,  171 => 60,  160 => 55,  156 => 54,  152 => 52,  146 => 50,  142 => 48,  140 => 47,  137 => 46,  128 => 45,  124 => 44,  120 => 43,  116 => 42,  112 => 41,  109 => 40,  105 => 39,  88 => 25,  70 => 9,  64 => 8,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Lista de técnicas{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}

{% block body %}
    <!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TÉCNICAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                    <div class=\"title\">Lista de técnicas</div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <a class=\"btn btn-default\" href=\"{{path('App_admin_addTecnica') }}\">Añadir</a>
                                    <div class=\"card-body\">
                                        <table id=\"myTable\" class=\"datatable table table-striped\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Fecha de creación</th>
                                                    <th>Utensilios requeridos</th>
                                                    <th>Video</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for tecnica in tecnicas %}
                                                <tr>
                                                    <td>{{tecnica.nombre}}</td>
                                                    <td>{{tecnica.descripcion}}</td>
                                                    <td>{{ tecnica.fechaCreacion|date('Y-m-d') }}</td>
                                                    <td>{% for utensilio in tecnica.utensilios %}
                                                        {{utensilio.nombre}},
                                                    {% endfor %}</td>
                                                    {% if tecnica.vid==NULL%}
                                                    <td>No video disponible</td>
                                                    {% else%}
                                                    <td><iframe width=\"75%\" height=\"75%\" src=\"{{tecnica.vid}}\" frameborder=\"0\" allowfullscreen></iframe></td>
                                                    {% endif%}
                                                    <td>
                                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Default button group\">
                                                            <a class=\"btn btn-default\" href=\"{{path('App_admin_modifyTecnica',{id : tecnica.id}) }}\">Ver/Modificar</a>
                                                            <a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#confirm-delete\" data-href=\"{{path('App_admin_deleteTecnica',{id : tecnica.id}) }}\">Eliminar</a>
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
