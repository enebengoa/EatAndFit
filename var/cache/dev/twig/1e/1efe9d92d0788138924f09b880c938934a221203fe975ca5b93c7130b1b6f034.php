<?php

/* @Admin/Tecnica/list.html.twig */
class __TwigTemplate_fb0953e3b68b54d0bda4dcd71380545c696cd9cdb17237d47e3a27cc402e6e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Tecnica/list.html.twig", 1);
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
        $__internal_269f8b9d634573cf3c0ffc1813f551630ef556216417756fa528529c31e9033b = $this->env->getExtension("native_profiler");
        $__internal_269f8b9d634573cf3c0ffc1813f551630ef556216417756fa528529c31e9033b->enter($__internal_269f8b9d634573cf3c0ffc1813f551630ef556216417756fa528529c31e9033b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Tecnica/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_269f8b9d634573cf3c0ffc1813f551630ef556216417756fa528529c31e9033b->leave($__internal_269f8b9d634573cf3c0ffc1813f551630ef556216417756fa528529c31e9033b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2350e1a8fdde84b1165afed07ecc90e77ca45f3252c65f06fc025954b3b1c21c = $this->env->getExtension("native_profiler");
        $__internal_2350e1a8fdde84b1165afed07ecc90e77ca45f3252c65f06fc025954b3b1c21c->enter($__internal_2350e1a8fdde84b1165afed07ecc90e77ca45f3252c65f06fc025954b3b1c21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de técnicas";
        
        $__internal_2350e1a8fdde84b1165afed07ecc90e77ca45f3252c65f06fc025954b3b1c21c->leave($__internal_2350e1a8fdde84b1165afed07ecc90e77ca45f3252c65f06fc025954b3b1c21c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b4a3403c088817f7748c68e51451ae4b01fad1076a0e52350b26fcc0557491f = $this->env->getExtension("native_profiler");
        $__internal_1b4a3403c088817f7748c68e51451ae4b01fad1076a0e52350b26fcc0557491f->enter($__internal_1b4a3403c088817f7748c68e51451ae4b01fad1076a0e52350b26fcc0557491f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_1b4a3403c088817f7748c68e51451ae4b01fad1076a0e52350b26fcc0557491f->leave($__internal_1b4a3403c088817f7748c68e51451ae4b01fad1076a0e52350b26fcc0557491f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc1825d8cf474c67f230eb68d281ae82de21424504625f15d852bb55406084bd = $this->env->getExtension("native_profiler");
        $__internal_bc1825d8cf474c67f230eb68d281ae82de21424504625f15d852bb55406084bd->enter($__internal_bc1825d8cf474c67f230eb68d281ae82de21424504625f15d852bb55406084bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bc1825d8cf474c67f230eb68d281ae82de21424504625f15d852bb55406084bd->leave($__internal_bc1825d8cf474c67f230eb68d281ae82de21424504625f15d852bb55406084bd_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f75eb1188d83e7283b62d8f680f10644f7c353a9e25f44e0915232cefbc4651b = $this->env->getExtension("native_profiler");
        $__internal_f75eb1188d83e7283b62d8f680f10644f7c353a9e25f44e0915232cefbc4651b->enter($__internal_f75eb1188d83e7283b62d8f680f10644f7c353a9e25f44e0915232cefbc4651b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f75eb1188d83e7283b62d8f680f10644f7c353a9e25f44e0915232cefbc4651b->leave($__internal_f75eb1188d83e7283b62d8f680f10644f7c353a9e25f44e0915232cefbc4651b_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Tecnica/list.html.twig";
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
