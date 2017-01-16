<?php

/* UserBundle:Receta:list.html.twig */
class __TwigTemplate_fba2d048e6425aa86745b21b82465eaa05a11135e27f1e74ac54d2a7d1999b52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout_blog.html.twig", "UserBundle:Receta:list.html.twig", 1);
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
        return "UserBundle::layout_blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7017021cac190652dc617f2b66e7b9f4966979e7112a7af4e01457f13fca38a6 = $this->env->getExtension("native_profiler");
        $__internal_7017021cac190652dc617f2b66e7b9f4966979e7112a7af4e01457f13fca38a6->enter($__internal_7017021cac190652dc617f2b66e7b9f4966979e7112a7af4e01457f13fca38a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Receta:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7017021cac190652dc617f2b66e7b9f4966979e7112a7af4e01457f13fca38a6->leave($__internal_7017021cac190652dc617f2b66e7b9f4966979e7112a7af4e01457f13fca38a6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f8f16ef79948193fe94b9600c4b414e3f9e51aba8a60eccb8efb5a0a84a1d85 = $this->env->getExtension("native_profiler");
        $__internal_8f8f16ef79948193fe94b9600c4b414e3f9e51aba8a60eccb8efb5a0a84a1d85->enter($__internal_8f8f16ef79948193fe94b9600c4b414e3f9e51aba8a60eccb8efb5a0a84a1d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_8f8f16ef79948193fe94b9600c4b414e3f9e51aba8a60eccb8efb5a0a84a1d85->leave($__internal_8f8f16ef79948193fe94b9600c4b414e3f9e51aba8a60eccb8efb5a0a84a1d85_prof);

    }

    // line 7
    public function block_head2($context, array $blocks = array())
    {
        $__internal_c093339bbd0354fdf62891aea35dcb35435ca9bce5a1cfe3752ac9960e824ca1 = $this->env->getExtension("native_profiler");
        $__internal_c093339bbd0354fdf62891aea35dcb35435ca9bce5a1cfe3752ac9960e824ca1->enter($__internal_c093339bbd0354fdf62891aea35dcb35435ca9bce5a1cfe3752ac9960e824ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_showBlog");
        echo "\">Recetas</a>
";
        
        $__internal_c093339bbd0354fdf62891aea35dcb35435ca9bce5a1cfe3752ac9960e824ca1->leave($__internal_c093339bbd0354fdf62891aea35dcb35435ca9bce5a1cfe3752ac9960e824ca1_prof);

    }

    // line 11
    public function block_body3($context, array $blocks = array())
    {
        $__internal_30f2788fd1b9240899d797b1fefd9480ffafa7438fd4210f1110f4e355fb4466 = $this->env->getExtension("native_profiler");
        $__internal_30f2788fd1b9240899d797b1fefd9480ffafa7438fd4210f1110f4e355fb4466->enter($__internal_30f2788fd1b9240899d797b1fefd9480ffafa7438fd4210f1110f4e355fb4466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

        // line 12
        echo "<div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h4>Categoría</h4>
\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroComensales", array()), 'row');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "TipoReceta", array()), 'row');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "celiaco", array()), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t</br>
\t\t\t\t\t";
        // line 25
        if (((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")) != null)) {
            // line 26
            echo "\t\t\t\t\t\t<h4>Menú</h4>
\t\t\t\t\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 28
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), 'form_start');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), "menu", array()), 'row');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 32
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), 'form_end');
            echo "
\t\t\t\t\t\t\t\t\t\t\t<button id=\"verMenu\" class=\"btn btn-success\" >Ver</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t</div>
";
        
        $__internal_30f2788fd1b9240899d797b1fefd9480ffafa7438fd4210f1110f4e355fb4466->leave($__internal_30f2788fd1b9240899d797b1fefd9480ffafa7438fd4210f1110f4e355fb4466_prof);

    }

    // line 40
    public function block_body2($context, array $blocks = array())
    {
        $__internal_aca6c88a26cab949b9e7a9ef25085b2ae8a98cb063d035202b89a1c8ced50f7f = $this->env->getExtension("native_profiler");
        $__internal_aca6c88a26cab949b9e7a9ef25085b2ae8a98cb063d035202b89a1c8ced50f7f->enter($__internal_aca6c88a26cab949b9e7a9ef25085b2ae8a98cb063d035202b89a1c8ced50f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 41
        echo "


<div class=\"col-md-9 blog-header\">

\t</br>
\t";
        // line 47
        $context["numReceta"] = 0;
        // line 48
        echo "\t<div class=\" blog-head\">
\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 50
            echo "        ";
            $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
            echo "                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
            echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<a  class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
            // line 58
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p><strong>Calorías: </strong> ";
            // line 61
            echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
            echo " cal/persona </p>
\t\t\t\t\t\t";
            // line 62
            if (((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")) != null)) {
                // line 63
                echo "\t\t\t\t\t\t<a class=\"btn btn-success\" data-href=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo " data-toggle=\"modal\" data-target=\"#confirm-comision\"><i class=\"glyphicon glyphicon-plus\"> </i></a>
\t\t\t\t\t\t";
            }
            // line 65
            echo "
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t";
            // line 74
            if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                // line 75
                echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
            }
            // line 79
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t</br>
\t\t<div class=\"navigation\">
\t\t\t";
        // line 82
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t</div>
\t</div>
</div>

<!-- Modal  ADDING -->
  

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
              <div id=\"menuActual\"> </div>
\t\t\t\t\t                

              </div>
              <div class=\"modal-footer\">
                <button  type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
              </div>
            </div>

          </div>
        </div>

        <div class=\"modal fade\" id=\"confirm-comision\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">

                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                    </div>

                    <div class=\"modal-body\">
                                              ";
        // line 123
        $this->loadTemplate("UserBundle:SubMenu:add.html.twig", "UserBundle:Receta:list.html.twig", 123)->display(array_merge($context, array("formSubMenu" => (isset($context["formSubMenu"]) ? $context["formSubMenu"] : $this->getContext($context, "formSubMenu")))));
        // line 124
        echo "
                        <p class=\"debug-url\"></p>
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        <a id=\"recetaAdd\"class=\"btn btn-success btn-ok\">Guardar</a>
                    </div>
                </div>
            </div>
        </div>

";
        
        $__internal_aca6c88a26cab949b9e7a9ef25085b2ae8a98cb063d035202b89a1c8ced50f7f->leave($__internal_aca6c88a26cab949b9e7a9ef25085b2ae8a98cb063d035202b89a1c8ced50f7f_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7b5abf22ff43e9a6be4dddccb8ec2594d818de2e04b01360786517bd3b599d4 = $this->env->getExtension("native_profiler");
        $__internal_c7b5abf22ff43e9a6be4dddccb8ec2594d818de2e04b01360786517bd3b599d4->enter($__internal_c7b5abf22ff43e9a6be4dddccb8ec2594d818de2e04b01360786517bd3b599d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "
  <script>


        var data; 

        \$('#confirm-comision').on('show.bs.modal', function(e) 
        {
            event.preventDefault();
            data = \$(e.relatedTarget).data();

        });
            var requestSend =false;
            console.log(data);
            jQuery(\"#recetaAdd\").on('click',(function () 
            {
                if(!requestSend)
                {
                    requestSend=true;

                    var id = data.href;
                    
                    var menu= jQuery('#form_menu').val();
                    var hora= jQuery('#sub_menu_HoraIngesta').val();

                    jQuery.ajax({
                        type: 'POST',
                        url: \"http://127.0.0.1/pfg_eneko/web/app_dev.php/AddSubMenu/\"+menu+\"/\"+id+\"/\"+hora,
                        data: jQuery(this).serialize(),
                        success: function(jqXHR) {
                            jQuery('#confirm-comision').modal('hide');
\t                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
\t                        \$('#addConfirm').find('.modal-title').html('Mensaje de confirmación')
\t                        \$('#addConfirm').modal('show');
\t                        \$(\"#addConfirm\").modal();
                            requestSend=false;
                        },
                        error: function(jqXHR)
                        {
                        \trequestSend=false;

                        \tjQuery('#confirm-comision').modal('hide');
                            \$('#addConfirm').find('.modal-body').html(jqXHR.responseJSON.message);
\t                        \$('#addConfirm').find('.modal-title').html('Mensaje de confirmación')
\t                        \$('#addConfirm').modal('show');
\t                        \$(\"#addConfirm\").modal();
                        }
                    });


                }

            }));




  </script>

  <script>


            \$(\"#verMenu\").on('click',(function () {
                    var menu= jQuery('#form_menu').val();

                    \$.ajax({
                        type: 'POST',
                        url: \"http://127.0.0.1/pfg_eneko/web/app_dev.php/RecetasMenu/\"+menu,
                        data: \$(this).serialize(),
                          success: function(returnData) {
                             \$(\"#menuActual\").html(returnData['html']);
                             console.log(returnData['html']);
                             jQuery('#addConfirm').modal('show');
                           
               
                        }
                       
                    });

            }));



  </script>
 ";
        
        $__internal_c7b5abf22ff43e9a6be4dddccb8ec2594d818de2e04b01360786517bd3b599d4->leave($__internal_c7b5abf22ff43e9a6be4dddccb8ec2594d818de2e04b01360786517bd3b599d4_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Receta:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 139,  297 => 138,  278 => 124,  276 => 123,  232 => 82,  228 => 80,  222 => 79,  216 => 75,  214 => 74,  204 => 67,  200 => 65,  194 => 63,  192 => 62,  188 => 61,  182 => 58,  178 => 57,  171 => 55,  166 => 53,  159 => 50,  155 => 49,  152 => 48,  150 => 47,  142 => 41,  136 => 40,  128 => 36,  121 => 32,  116 => 30,  111 => 28,  107 => 26,  105 => 25,  99 => 22,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  77 => 15,  72 => 12,  66 => 11,  56 => 8,  50 => 7,  38 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'UserBundle::layout_blog.html.twig' %}


{% block title %}Eat&Fit{% endblock%}


{% block head2 %}
<a href=\"{{ path('App_user_showBlog') }}\">Recetas</a>
{% endblock %}

{% block body3 %}
<div class=\"grid-categories animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h4>Categoría</h4>
\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t{{ form_row(form.nombre) }}
\t\t\t\t\t\t\t\t\t{{ form_row(form.numeroComensales) }}
\t\t\t\t\t\t\t\t\t{{ form_row(form.TipoReceta) }}
\t\t\t\t\t\t\t\t\t{{ form_row(form.celiaco) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t</div>
\t\t\t\t\t</br>
\t\t\t\t\t{% if formMenu!=NULL%}
\t\t\t\t\t\t<h4>Menú</h4>
\t\t\t\t\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t\t\t\t\t{{form_start(formMenu)}}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(formMenu.menu) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{{form_end(formMenu)}}
\t\t\t\t\t\t\t\t\t\t\t<button id=\"verMenu\" class=\"btn btn-success\" >Ver</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
{% endblock %}


{% block body2 %}



<div class=\"col-md-9 blog-header\">

\t</br>
\t{% set numReceta=0%}
\t<div class=\" blog-head\">
\t{% for receta in pagination %}
        {% set numReceta=numReceta+1%}                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset ('imagenes/'~receta.imagen)}}\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">{{receta.nombre}}</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ receta.fechaCreacion|date('Y-m-d') }}</span>
\t\t\t\t\t\t\t<a  class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>{{receta.comentarios|length}}</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p><strong>Calorías: </strong> {{receta.calorias/receta.numeroComensales}} cal/persona </p>
\t\t\t\t\t\t{% if formMenu!=NULL%}
\t\t\t\t\t\t<a class=\"btn btn-success\" data-href={{receta.id}} data-toggle=\"modal\" data-target=\"#confirm-comision\"><i class=\"glyphicon glyphicon-plus\"> </i></a>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t{% if (numReceta % 3 == 0)%}
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
              <div id=\"menuActual\"> </div>
\t\t\t\t\t                

              </div>
              <div class=\"modal-footer\">
                <button  type=\"button\" class=\"from-submit btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
              </div>
            </div>

          </div>
        </div>

        <div class=\"modal fade\" id=\"confirm-comision\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">

                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                    </div>

                    <div class=\"modal-body\">
                                              {% include \"UserBundle:SubMenu:add.html.twig\"  with {'formSubMenu': formSubMenu} %}

                        <p class=\"debug-url\"></p>
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        <a id=\"recetaAdd\"class=\"btn btn-success btn-ok\">Guardar</a>
                    </div>
                </div>
            </div>
        </div>

{% endblock %}

{% block javascripts %}

  <script>


        var data; 

        \$('#confirm-comision').on('show.bs.modal', function(e) 
        {
            event.preventDefault();
            data = \$(e.relatedTarget).data();

        });
            var requestSend =false;
            console.log(data);
            jQuery(\"#recetaAdd\").on('click',(function () 
            {
                if(!requestSend)
                {
                    requestSend=true;

                    var id = data.href;
                    
                    var menu= jQuery('#form_menu').val();
                    var hora= jQuery('#sub_menu_HoraIngesta').val();

                    jQuery.ajax({
                        type: 'POST',
                        url: \"http://127.0.0.1/pfg_eneko/web/app_dev.php/AddSubMenu/\"+menu+\"/\"+id+\"/\"+hora,
                        data: jQuery(this).serialize(),
                        success: function(jqXHR) {
                            jQuery('#confirm-comision').modal('hide');
\t                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
\t                        \$('#addConfirm').find('.modal-title').html('Mensaje de confirmación')
\t                        \$('#addConfirm').modal('show');
\t                        \$(\"#addConfirm\").modal();
                            requestSend=false;
                        },
                        error: function(jqXHR)
                        {
                        \trequestSend=false;

                        \tjQuery('#confirm-comision').modal('hide');
                            \$('#addConfirm').find('.modal-body').html(jqXHR.responseJSON.message);
\t                        \$('#addConfirm').find('.modal-title').html('Mensaje de confirmación')
\t                        \$('#addConfirm').modal('show');
\t                        \$(\"#addConfirm\").modal();
                        }
                    });


                }

            }));




  </script>

  <script>


            \$(\"#verMenu\").on('click',(function () {
                    var menu= jQuery('#form_menu').val();

                    \$.ajax({
                        type: 'POST',
                        url: \"http://127.0.0.1/pfg_eneko/web/app_dev.php/RecetasMenu/\"+menu,
                        data: \$(this).serialize(),
                          success: function(returnData) {
                             \$(\"#menuActual\").html(returnData['html']);
                             console.log(returnData['html']);
                             jQuery('#addConfirm').modal('show');
                           
               
                        }
                       
                    });

            }));



  </script>
 {% endblock %}";
    }
}
