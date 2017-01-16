<?php

/* UserBundle:Menu:list.html.twig */
class __TwigTemplate_398620f8b95799aaf4a07249f7eadc4fdf0bec490d4b494672d39189d1cc302f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout_menu.html.twig", "UserBundle:Menu:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head2' => array($this, 'block_head2'),
            'body3' => array($this, 'block_body3'),
            'body2' => array($this, 'block_body2'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80da22e0e8f9e3a6172207762a91c39b25fed59e9b2ae8a4e8fae54ab6be8f2b = $this->env->getExtension("native_profiler");
        $__internal_80da22e0e8f9e3a6172207762a91c39b25fed59e9b2ae8a4e8fae54ab6be8f2b->enter($__internal_80da22e0e8f9e3a6172207762a91c39b25fed59e9b2ae8a4e8fae54ab6be8f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Menu:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80da22e0e8f9e3a6172207762a91c39b25fed59e9b2ae8a4e8fae54ab6be8f2b->leave($__internal_80da22e0e8f9e3a6172207762a91c39b25fed59e9b2ae8a4e8fae54ab6be8f2b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_49950110bfb1522406765ad0ae091658868a10310703d1e6dfdd83a7c0b32a48 = $this->env->getExtension("native_profiler");
        $__internal_49950110bfb1522406765ad0ae091658868a10310703d1e6dfdd83a7c0b32a48->enter($__internal_49950110bfb1522406765ad0ae091658868a10310703d1e6dfdd83a7c0b32a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_49950110bfb1522406765ad0ae091658868a10310703d1e6dfdd83a7c0b32a48->leave($__internal_49950110bfb1522406765ad0ae091658868a10310703d1e6dfdd83a7c0b32a48_prof);

    }

    // line 7
    public function block_head2($context, array $blocks = array())
    {
        $__internal_329fe4eba8db67b59fb4508caa6ec54a363f0e67d040d68074cd3a2b5bd64082 = $this->env->getExtension("native_profiler");
        $__internal_329fe4eba8db67b59fb4508caa6ec54a363f0e67d040d68074cd3a2b5bd64082->enter($__internal_329fe4eba8db67b59fb4508caa6ec54a363f0e67d040d68074cd3a2b5bd64082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_showServicio");
        echo "\">Menús</a>
";
        
        $__internal_329fe4eba8db67b59fb4508caa6ec54a363f0e67d040d68074cd3a2b5bd64082->leave($__internal_329fe4eba8db67b59fb4508caa6ec54a363f0e67d040d68074cd3a2b5bd64082_prof);

    }

    // line 11
    public function block_body3($context, array $blocks = array())
    {
        $__internal_ec1d11679f081e34a1df86229ef867436a6c689b211dfdc68d7bb547758eb66e = $this->env->getExtension("native_profiler");
        $__internal_ec1d11679f081e34a1df86229ef867436a6c689b211dfdc68d7bb547758eb66e->enter($__internal_ec1d11679f081e34a1df86229ef867436a6c689b211dfdc68d7bb547758eb66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

        // line 12
        echo "

<div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h4>Categoría</h4>
\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publico", array()), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t</div>
          </br>
          <h4>Lista</h4>
          <div class=\"buscador\">
              ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), 'form_start');
        echo "
                <div class=\"form-group\">
                  ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), "lista", array()), 'row');
        echo "
                </div>
              ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), 'form_end');
        echo "
          </div>
\t\t\t\t</div>
";
        
        $__internal_ec1d11679f081e34a1df86229ef867436a6c689b211dfdc68d7bb547758eb66e->leave($__internal_ec1d11679f081e34a1df86229ef867436a6c689b211dfdc68d7bb547758eb66e_prof);

    }

    // line 37
    public function block_body2($context, array $blocks = array())
    {
        $__internal_a00829840b5057bc2c0cceeacfaf42788944cee98d1f7f46eaa5914bf207db71 = $this->env->getExtension("native_profiler");
        $__internal_a00829840b5057bc2c0cceeacfaf42788944cee98d1f7f46eaa5914bf207db71->enter($__internal_a00829840b5057bc2c0cceeacfaf42788944cee98d1f7f46eaa5914bf207db71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 38
        echo "


<div class=\"col-md-9 blog-header\">
<div class=\"col-sm-12\">
                            <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo menú</button>
                            <hr>
</div>
\t</br>
\t";
        // line 47
        $context["numMenu"] = 0;
        // line 48
        echo "\t<div class=\" blog-head\">
\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 50
            echo "        ";
            $context["numMenu"] = ((isset($context["numMenu"]) ? $context["numMenu"] : $this->getContext($context, "numMenu")) + 1);
            echo "                                     
\t\t\t<div class=\"col-md-4 blog-top\" id=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["menu"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
            ";
            // line 59
            $context["calorias"] = 0;
            // line 60
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "subMenus", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                echo " 
                ";
                // line 61
                $context["calorias"] = ((isset($context["calorias"]) ? $context["calorias"] : $this->getContext($context, "calorias")) + ($this->getAttribute($this->getAttribute($context["submenu"], "receta", array()), "calorias", array()) / $this->getAttribute($this->getAttribute($context["submenu"], "receta", array()), "numeroComensales", array())));
                echo "                           
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            <p><string>Calorías:</strong> ";
            echo twig_escape_filter($this->env, (isset($context["calorias"]) ? $context["calorias"] : $this->getContext($context, "calorias")), "html", null, true);
            echo " cl/persona </p>
            <button class=\"btn btn-success\" data-href=";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo " data-toggle=\"modal\" data-target=\"#confirm-comision\" onclick=\"myFunction(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo ")\"><i class=\"glyphicon glyphicon-plus\"> </i></button>
\t\t\t\t\t\t";
            // line 65
            if (($this->getAttribute($context["menu"], "Usuario", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 66
                echo "                <button class=\"btn btn-danger\" data-href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
            ";
            }
            // line 68
            echo "
            <div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t";
            // line 77
            if ((((isset($context["numMenu"]) ? $context["numMenu"] : $this->getContext($context, "numMenu")) % 3) == 0)) {
                // line 78
                echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
            }
            // line 82
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t</br>
\t\t<div class=\"navigation\">
\t\t\t";
        // line 85
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t</div>
\t</div>
</div>

<!-- Modal  ADDING -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Añadir Menú</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      ";
        // line 102
        $this->loadTemplate("UserBundle:Menu:add.html.twig", "UserBundle:Menu:list.html.twig", 102)->display(array_merge($context, array("formMenu" => (isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")))));
        // line 103
        echo "                  </div>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal  ADDING Confirm -->
        <div id=\"addConfirm\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\"></h4>
              </div>
              <div class=\"modal-body\">

              </div>
              <div class=\"modal-footer\">
                <button  type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
              </div>
            </div>

          </div>
        </div>

        <!-- Modal  OrdenCompra-->
        <div class=\"modal fade\" id=\"confirm-comision\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">

                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                    </div>

                    <div class=\"modal-body\">
                                             ";
        // line 145
        $this->loadTemplate("UserBundle:OrdenCompra:add.html.twig", "UserBundle:Menu:list.html.twig", 145)->display(array_merge($context, array("formOrdenCompra" => (isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")))));
        // line 146
        echo "
                        <p class=\"debug-url\"></p>
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        <a id=\"menuAdd\"class=\"btn btn-success btn-ok\" >Guardar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                </div>

                <div class=\"modal-body\">
                    <p>¿Desea borrar el menú seleccionado?</p>
                    <p class=\"debug-url\"></p>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-danger btn-ok\" id=\"delete\">Borrar</a>
                </div>
            </div>
        </div>
        </div>

";
        
        $__internal_a00829840b5057bc2c0cceeacfaf42788944cee98d1f7f46eaa5914bf207db71->leave($__internal_a00829840b5057bc2c0cceeacfaf42788944cee98d1f7f46eaa5914bf207db71_prof);

    }

    // line 182
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77bd4eef7bce75bd141c104523ce749f8c723fe20e738a3e56dbb8fd92be3f06 = $this->env->getExtension("native_profiler");
        $__internal_77bd4eef7bce75bd141c104523ce749f8c723fe20e738a3e56dbb8fd92be3f06->enter($__internal_77bd4eef7bce75bd141c104523ce749f8c723fe20e738a3e56dbb8fd92be3f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 183
        echo "<script>

        function myFunction(menu) {
                                          console.log(\"myfunction\");

                            var lista= jQuery('#form_lista').val();
          \$.ajax({
            type: 'POST',
            url: \"http://127.0.0.1/pfg_eneko/web/app_dev.php/GetNumeroComensales/\"+menu+\"/\"+lista,
            data: \$(this).serialize(),
            success: function(jqXHR) {
                                        console.log(jqXHR);

                    document.getElementById(\"orden_compra_cantidad\").value = parseInt(jqXHR.message);
                    },
                    error: function(jqXHR) {

                      document.getElementById(\"orden_compra_cantidad\").value = jqXHR.message;
                                  console.log(\"myfunction\");

                    },
            });
        }
        

        \$('body').on('submit', '.ajaxForm', function (e) {
                                          console.log(\"body\");

        e.preventDefault();


        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(jqXHR) {
                        \$('#myModal').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Mensaje de confirmación')
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

    <script>
        var ei;
        \$('#confirm-delete').on('show.bs.modal', function(e) {
                                                  console.log(\"delete\");

          ei = e;
        });
            \$(\"#delete\").click(function () {
                                                  console.log(\"delete\");

                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \$(ei.relatedTarget).data('href'),
                    success: function(jqXHR) {
                      console.log(jqXHR);
                        \$('#'+jqXHR.id).remove();
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Borrar')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                    },
                    error: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(\"El menu No ha sido borrado\");
                        \$('#addConfirm').find('.modal-title').html('NO Borrado')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                    }
                
            });
        });
  </script>

<script>
        var requestSend =false;
        var data;
        \$('#confirm-comision').on('show.bs.modal', function(e) {
                                                                console.log(\"cpmi\");

            event.preventDefault();
            data = \$(e.relatedTarget).data();

            \$('.btn-ok', this).data('href', data.href);
            

           });
            jQuery(\"#menuAdd\").on('click',(function () {
                                                        console.log(\"eeee\");

                if(!requestSend)
                {
                    requestSend=true;

                    var id = jQuery(this).data('href');
                    
                    var lista= jQuery('#form_lista').val();
                    var cantidad= jQuery('#orden_compra_cantidad').val();

                    \$.ajax({
                        type: 'POST',
                        url: \"http://127.0.0.1/pfg_eneko/web/app_dev.php/AddOrdenCompra/\"+lista+\"/\"+id+\"/\"+cantidad,
                        data: \$(this).serialize(),
                        success: function(jqXHR) {
                            jQuery('#confirm-comision').modal('hide');
                            requestSend=false;
                            \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                            \$('#addConfirm').find('.modal-title').html('Añadido')
                            \$('#addConfirm').modal('show');
                            \$(\"#addConfirm\").modal();
                        },
                        error: function(jqXHR) {
                            console.log(jqXHR);

                            jQuery('#confirm-comision').modal('hide');
                            requestSend=false;
                            \$('#addConfirm').find('.modal-body').html('El menú ha sido agregado correctamente a la lista');
                            \$('#addConfirm').find('.modal-title').html('Mensaje de confirmación')
                            \$('#addConfirm').modal('show');
                            \$(\"#addConfirm\").modal();

                        }
                    });
                }
            }));
</script>
   ";
        
        $__internal_77bd4eef7bce75bd141c104523ce749f8c723fe20e738a3e56dbb8fd92be3f06->leave($__internal_77bd4eef7bce75bd141c104523ce749f8c723fe20e738a3e56dbb8fd92be3f06_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Menu:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 183,  349 => 182,  308 => 146,  306 => 145,  262 => 103,  260 => 102,  240 => 85,  236 => 83,  230 => 82,  224 => 78,  222 => 77,  212 => 70,  208 => 68,  202 => 66,  200 => 65,  194 => 64,  189 => 63,  181 => 61,  174 => 60,  172 => 59,  166 => 56,  159 => 54,  153 => 51,  148 => 50,  144 => 49,  141 => 48,  139 => 47,  128 => 38,  122 => 37,  111 => 31,  106 => 29,  101 => 27,  93 => 22,  88 => 20,  84 => 19,  79 => 17,  72 => 12,  66 => 11,  56 => 8,  50 => 7,  38 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'UserBundle::layout_menu.html.twig' %}


{% block title %}Eat&Fit{% endblock%}


{% block head2 %}
<a href=\"{{ path('App_user_showServicio') }}\">Menús</a>
{% endblock %}

{% block body3 %}


<div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h4>Categoría</h4>
\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t{{ form_row(form.nombre) }}
\t\t\t\t\t\t\t\t\t{{ form_row(form.publico) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t</div>
          </br>
          <h4>Lista</h4>
          <div class=\"buscador\">
              {{form_start(formLista)}}
                <div class=\"form-group\">
                  {{ form_row(formLista.lista) }}
                </div>
              {{form_end(formLista)}}
          </div>
\t\t\t\t</div>
{% endblock %}


{% block body2 %}



<div class=\"col-md-9 blog-header\">
<div class=\"col-sm-12\">
                            <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;  Añadir nuevo menú</button>
                            <hr>
</div>
\t</br>
\t{% set numMenu=0%}
\t<div class=\" blog-head\">
\t{% for menu in pagination %}
        {% set numMenu=numMenu+1%}                                     
\t\t\t<div class=\"col-md-4 blog-top\" id=\"{{menu.id}}\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"{{ path('App_user_showMenu', { 'id': menu.id }) }}\">{{menu.nombre}}</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ menu.fechaCreacion|date('Y-m-d') }}</span>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
            {% set calorias = 0 %}
            {% for submenu in menu.subMenus %} 
                {% set calorias = calorias + (submenu.receta.calorias/submenu.receta.numeroComensales) %}                           
            {% endfor %}
            <p><string>Calorías:</strong> {{calorias}} cl/persona </p>
            <button class=\"btn btn-success\" data-href={{menu.id}} data-toggle=\"modal\" data-target=\"#confirm-comision\" onclick=\"myFunction({{menu.id}})\"><i class=\"glyphicon glyphicon-plus\"> </i></button>
\t\t\t\t\t\t{% if menu.Usuario == app.user %}
                <button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteMenu', { 'id': menu.id }) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
            {% endif %}

            <div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"{{ path('App_user_showMenu', { 'id': menu.id }) }}\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t{% if (numMenu % 3 == 0)%}
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t{% endif %}
\t\t{% endfor %}
\t\t</br>
\t\t<div class=\"navigation\">
\t\t\t{{ knp_pagination_render(pagination) }}
\t\t</div>
\t</div>
</div>

<!-- Modal  ADDING -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Añadir Menú</h4>
              </div>
              <div class=\"modal-body\">
                  <div id=\"form_body\">
                      {% include \"UserBundle:Menu:add.html.twig\"  with {'formMenu': formMenu} %}
                  </div>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal  ADDING Confirm -->
        <div id=\"addConfirm\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\"></h4>
              </div>
              <div class=\"modal-body\">

              </div>
              <div class=\"modal-footer\">
                <button  type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
              </div>
            </div>

          </div>
        </div>

        <!-- Modal  OrdenCompra-->
        <div class=\"modal fade\" id=\"confirm-comision\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">

                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                    </div>

                    <div class=\"modal-body\">
                                             {% include \"UserBundle:OrdenCompra:add.html.twig\"  with {'formOrdenCompra': formOrdenCompra} %}

                        <p class=\"debug-url\"></p>
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        <a id=\"menuAdd\"class=\"btn btn-success btn-ok\" >Guardar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                </div>

                <div class=\"modal-body\">
                    <p>¿Desea borrar el menú seleccionado?</p>
                    <p class=\"debug-url\"></p>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-danger btn-ok\" id=\"delete\">Borrar</a>
                </div>
            </div>
        </div>
        </div>

{% endblock %}

{% block javascripts %}
<script>

        function myFunction(menu) {
                                          console.log(\"myfunction\");

                            var lista= jQuery('#form_lista').val();
          \$.ajax({
            type: 'POST',
            url: \"http://127.0.0.1/pfg_eneko/web/app_dev.php/GetNumeroComensales/\"+menu+\"/\"+lista,
            data: \$(this).serialize(),
            success: function(jqXHR) {
                                        console.log(jqXHR);

                    document.getElementById(\"orden_compra_cantidad\").value = parseInt(jqXHR.message);
                    },
                    error: function(jqXHR) {

                      document.getElementById(\"orden_compra_cantidad\").value = jqXHR.message;
                                  console.log(\"myfunction\");

                    },
            });
        }
        

        \$('body').on('submit', '.ajaxForm', function (e) {
                                          console.log(\"body\");

        e.preventDefault();


        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(jqXHR) {
                        \$('#myModal').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Mensaje de confirmación')
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

    <script>
        var ei;
        \$('#confirm-delete').on('show.bs.modal', function(e) {
                                                  console.log(\"delete\");

          ei = e;
        });
            \$(\"#delete\").click(function () {
                                                  console.log(\"delete\");

                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \$(ei.relatedTarget).data('href'),
                    success: function(jqXHR) {
                      console.log(jqXHR);
                        \$('#'+jqXHR.id).remove();
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Borrar')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                    },
                    error: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(\"El menu No ha sido borrado\");
                        \$('#addConfirm').find('.modal-title').html('NO Borrado')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                    }
                
            });
        });
  </script>

<script>
        var requestSend =false;
        var data;
        \$('#confirm-comision').on('show.bs.modal', function(e) {
                                                                console.log(\"cpmi\");

            event.preventDefault();
            data = \$(e.relatedTarget).data();

            \$('.btn-ok', this).data('href', data.href);
            

           });
            jQuery(\"#menuAdd\").on('click',(function () {
                                                        console.log(\"eeee\");

                if(!requestSend)
                {
                    requestSend=true;

                    var id = jQuery(this).data('href');
                    
                    var lista= jQuery('#form_lista').val();
                    var cantidad= jQuery('#orden_compra_cantidad').val();

                    \$.ajax({
                        type: 'POST',
                        url: \"http://127.0.0.1/pfg_eneko/web/app_dev.php/AddOrdenCompra/\"+lista+\"/\"+id+\"/\"+cantidad,
                        data: \$(this).serialize(),
                        success: function(jqXHR) {
                            jQuery('#confirm-comision').modal('hide');
                            requestSend=false;
                            \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                            \$('#addConfirm').find('.modal-title').html('Añadido')
                            \$('#addConfirm').modal('show');
                            \$(\"#addConfirm\").modal();
                        },
                        error: function(jqXHR) {
                            console.log(jqXHR);

                            jQuery('#confirm-comision').modal('hide');
                            requestSend=false;
                            \$('#addConfirm').find('.modal-body').html('El menú ha sido agregado correctamente a la lista');
                            \$('#addConfirm').find('.modal-title').html('Mensaje de confirmación')
                            \$('#addConfirm').modal('show');
                            \$(\"#addConfirm\").modal();

                        }
                    });
                }
            }));
</script>
   {% endblock %}";
    }
}
