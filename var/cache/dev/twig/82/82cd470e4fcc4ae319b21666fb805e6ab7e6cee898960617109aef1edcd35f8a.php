<?php

/* @User/Receta/list.html.twig */
class __TwigTemplate_92c2ae138159418ae65cc8fc0226d0df3bb0e7a6c77eb8ac598b925671f76937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout_blog.html.twig", "@User/Receta/list.html.twig", 1);
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
        $__internal_f7b4cea1f7a2718a86177172b56a6107380758d34724fc4e9d58176c726991f7 = $this->env->getExtension("native_profiler");
        $__internal_f7b4cea1f7a2718a86177172b56a6107380758d34724fc4e9d58176c726991f7->enter($__internal_f7b4cea1f7a2718a86177172b56a6107380758d34724fc4e9d58176c726991f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Receta/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b4cea1f7a2718a86177172b56a6107380758d34724fc4e9d58176c726991f7->leave($__internal_f7b4cea1f7a2718a86177172b56a6107380758d34724fc4e9d58176c726991f7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_be9c19c8344b2041ede8fb78f22088931554437d7209ca34746ae0f975de7ab3 = $this->env->getExtension("native_profiler");
        $__internal_be9c19c8344b2041ede8fb78f22088931554437d7209ca34746ae0f975de7ab3->enter($__internal_be9c19c8344b2041ede8fb78f22088931554437d7209ca34746ae0f975de7ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_be9c19c8344b2041ede8fb78f22088931554437d7209ca34746ae0f975de7ab3->leave($__internal_be9c19c8344b2041ede8fb78f22088931554437d7209ca34746ae0f975de7ab3_prof);

    }

    // line 7
    public function block_head2($context, array $blocks = array())
    {
        $__internal_06ce558e6e197ea6cc87c700530aa10900e77008d268c25b36d1a896358409fe = $this->env->getExtension("native_profiler");
        $__internal_06ce558e6e197ea6cc87c700530aa10900e77008d268c25b36d1a896358409fe->enter($__internal_06ce558e6e197ea6cc87c700530aa10900e77008d268c25b36d1a896358409fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_showBlog");
        echo "\">Recetas</a>
";
        
        $__internal_06ce558e6e197ea6cc87c700530aa10900e77008d268c25b36d1a896358409fe->leave($__internal_06ce558e6e197ea6cc87c700530aa10900e77008d268c25b36d1a896358409fe_prof);

    }

    // line 11
    public function block_body3($context, array $blocks = array())
    {
        $__internal_3bb935aa710c3dd96cb2a7c031a10e2dd1026f9fafd606c650abb0c3e15595ba = $this->env->getExtension("native_profiler");
        $__internal_3bb935aa710c3dd96cb2a7c031a10e2dd1026f9fafd606c650abb0c3e15595ba->enter($__internal_3bb935aa710c3dd96cb2a7c031a10e2dd1026f9fafd606c650abb0c3e15595ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

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
        
        $__internal_3bb935aa710c3dd96cb2a7c031a10e2dd1026f9fafd606c650abb0c3e15595ba->leave($__internal_3bb935aa710c3dd96cb2a7c031a10e2dd1026f9fafd606c650abb0c3e15595ba_prof);

    }

    // line 40
    public function block_body2($context, array $blocks = array())
    {
        $__internal_37f6f0c130376af610a308a7188edfe8de793c4a18d689d855b7ddc3778f6739 = $this->env->getExtension("native_profiler");
        $__internal_37f6f0c130376af610a308a7188edfe8de793c4a18d689d855b7ddc3778f6739->enter($__internal_37f6f0c130376af610a308a7188edfe8de793c4a18d689d855b7ddc3778f6739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

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
\t\t\t\t\t\t<p>Calorías: ";
            // line 61
            echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
            echo " cal/persona </p>
\t\t\t\t\t\t<p>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t";
            // line 63
            if (((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")) != null)) {
                // line 64
                echo "\t\t\t\t\t\t<a class=\"btn btn-success\" data-href=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo " data-toggle=\"modal\" data-target=\"#confirm-comision\"><i class=\"glyphicon glyphicon-plus\"> </i></a>
\t\t\t\t\t\t";
            }
            // line 66
            echo "
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t";
            // line 75
            if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                // line 76
                echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
            }
            // line 80
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t</br>
\t\t<div class=\"navigation\">
\t\t\t";
        // line 83
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
        // line 124
        $this->loadTemplate("UserBundle:SubMenu:add.html.twig", "@User/Receta/list.html.twig", 124)->display(array_merge($context, array("formSubMenu" => (isset($context["formSubMenu"]) ? $context["formSubMenu"] : $this->getContext($context, "formSubMenu")))));
        // line 125
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
        
        $__internal_37f6f0c130376af610a308a7188edfe8de793c4a18d689d855b7ddc3778f6739->leave($__internal_37f6f0c130376af610a308a7188edfe8de793c4a18d689d855b7ddc3778f6739_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64d23fbf5cac365dbc10d42686e04ae79d7b534eb7a55143b01fde02ff20f1d1 = $this->env->getExtension("native_profiler");
        $__internal_64d23fbf5cac365dbc10d42686e04ae79d7b534eb7a55143b01fde02ff20f1d1->enter($__internal_64d23fbf5cac365dbc10d42686e04ae79d7b534eb7a55143b01fde02ff20f1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
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
        
        $__internal_64d23fbf5cac365dbc10d42686e04ae79d7b534eb7a55143b01fde02ff20f1d1->leave($__internal_64d23fbf5cac365dbc10d42686e04ae79d7b534eb7a55143b01fde02ff20f1d1_prof);

    }

    public function getTemplateName()
    {
        return "@User/Receta/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 140,  301 => 139,  282 => 125,  280 => 124,  236 => 83,  232 => 81,  226 => 80,  220 => 76,  218 => 75,  208 => 68,  204 => 66,  198 => 64,  196 => 63,  192 => 62,  188 => 61,  182 => 58,  178 => 57,  171 => 55,  166 => 53,  159 => 50,  155 => 49,  152 => 48,  150 => 47,  142 => 41,  136 => 40,  128 => 36,  121 => 32,  116 => 30,  111 => 28,  107 => 26,  105 => 25,  99 => 22,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  77 => 15,  72 => 12,  66 => 11,  56 => 8,  50 => 7,  38 => 4,  11 => 1,);
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
\t\t\t\t\t\t<p>Calorías: {{receta.calorias/receta.numeroComensales}} cal/persona </p>
\t\t\t\t\t\t<p>{{receta.descripcion(40)}}</p>
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
