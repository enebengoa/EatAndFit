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
        $__internal_21a7c63d78259615152e9bafb1b555585839a764ae402b5ea7612b940a192e5d = $this->env->getExtension("native_profiler");
        $__internal_21a7c63d78259615152e9bafb1b555585839a764ae402b5ea7612b940a192e5d->enter($__internal_21a7c63d78259615152e9bafb1b555585839a764ae402b5ea7612b940a192e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Receta/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a7c63d78259615152e9bafb1b555585839a764ae402b5ea7612b940a192e5d->leave($__internal_21a7c63d78259615152e9bafb1b555585839a764ae402b5ea7612b940a192e5d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_686d3e20536b4123f7456c1ff6d5a83ccbfbc82e20c74a369dd72941a6d82dab = $this->env->getExtension("native_profiler");
        $__internal_686d3e20536b4123f7456c1ff6d5a83ccbfbc82e20c74a369dd72941a6d82dab->enter($__internal_686d3e20536b4123f7456c1ff6d5a83ccbfbc82e20c74a369dd72941a6d82dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_686d3e20536b4123f7456c1ff6d5a83ccbfbc82e20c74a369dd72941a6d82dab->leave($__internal_686d3e20536b4123f7456c1ff6d5a83ccbfbc82e20c74a369dd72941a6d82dab_prof);

    }

    // line 7
    public function block_head2($context, array $blocks = array())
    {
        $__internal_ff3328af2ba069a6beb7beb0ae0cb0dc7887b2d188b5059af9255c71eb590bbc = $this->env->getExtension("native_profiler");
        $__internal_ff3328af2ba069a6beb7beb0ae0cb0dc7887b2d188b5059af9255c71eb590bbc->enter($__internal_ff3328af2ba069a6beb7beb0ae0cb0dc7887b2d188b5059af9255c71eb590bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_showBlog");
        echo "\">Recetas</a>
";
        
        $__internal_ff3328af2ba069a6beb7beb0ae0cb0dc7887b2d188b5059af9255c71eb590bbc->leave($__internal_ff3328af2ba069a6beb7beb0ae0cb0dc7887b2d188b5059af9255c71eb590bbc_prof);

    }

    // line 11
    public function block_body3($context, array $blocks = array())
    {
        $__internal_29c33f5c741a95f31bd67a68cd03d04756f49a74b7dd8d64bd12129f6d952f52 = $this->env->getExtension("native_profiler");
        $__internal_29c33f5c741a95f31bd67a68cd03d04756f49a74b7dd8d64bd12129f6d952f52->enter($__internal_29c33f5c741a95f31bd67a68cd03d04756f49a74b7dd8d64bd12129f6d952f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

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
\t\t\t\t\t<h4>Menú</h4>
\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), 'form_start');
        echo "
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), "menu", array()), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), 'form_end');
        echo "
\t\t\t\t\t\t\t<button id=\"verMenu\" class=\"btn btn-success\" >Ver</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
";
        
        $__internal_29c33f5c741a95f31bd67a68cd03d04756f49a74b7dd8d64bd12129f6d952f52->leave($__internal_29c33f5c741a95f31bd67a68cd03d04756f49a74b7dd8d64bd12129f6d952f52_prof);

    }

    // line 38
    public function block_body2($context, array $blocks = array())
    {
        $__internal_8d3d74cda37aab7e454133a704628dc1e50c6a60e961d1d4645841d1e7539faf = $this->env->getExtension("native_profiler");
        $__internal_8d3d74cda37aab7e454133a704628dc1e50c6a60e961d1d4645841d1e7539faf->enter($__internal_8d3d74cda37aab7e454133a704628dc1e50c6a60e961d1d4645841d1e7539faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 39
        echo "


<div class=\"col-md-9 blog-header\">

\t</br>
\t";
        // line 45
        $context["numReceta"] = 0;
        // line 46
        echo "\t<div class=\" blog-head\">
\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 48
            echo "        ";
            $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
            echo "                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
            echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
            // line 56
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<a class=\"btn btn-success\" data-href=";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
            echo " data-toggle=\"modal\" data-target=\"#confirm-comision\"><i class=\"glyphicon glyphicon-plus\"> </i></a>

\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t";
            // line 70
            if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                // line 71
                echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
            }
            // line 75
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t</br>
\t\t<div class=\"navigation\">
\t\t\t";
        // line 78
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
        // line 119
        $this->loadTemplate("UserBundle:SubMenu:add.html.twig", "@User/Receta/list.html.twig", 119)->display(array_merge($context, array("formSubMenu" => (isset($context["formSubMenu"]) ? $context["formSubMenu"] : $this->getContext($context, "formSubMenu")))));
        // line 120
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
        
        $__internal_8d3d74cda37aab7e454133a704628dc1e50c6a60e961d1d4645841d1e7539faf->leave($__internal_8d3d74cda37aab7e454133a704628dc1e50c6a60e961d1d4645841d1e7539faf_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7961d0495d8c8dcf851f29d653a3ff9433d941d41b587f7b3452bf28d2cc7d5 = $this->env->getExtension("native_profiler");
        $__internal_a7961d0495d8c8dcf851f29d653a3ff9433d941d41b587f7b3452bf28d2cc7d5->enter($__internal_a7961d0495d8c8dcf851f29d653a3ff9433d941d41b587f7b3452bf28d2cc7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/addReceta.js"), "html", null, true);
        echo "\"></script>

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
        
        $__internal_a7961d0495d8c8dcf851f29d653a3ff9433d941d41b587f7b3452bf28d2cc7d5->leave($__internal_a7961d0495d8c8dcf851f29d653a3ff9433d941d41b587f7b3452bf28d2cc7d5_prof);

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
        return array (  293 => 136,  290 => 135,  284 => 134,  265 => 120,  263 => 119,  219 => 78,  215 => 76,  209 => 75,  203 => 71,  201 => 70,  191 => 63,  185 => 60,  181 => 59,  175 => 56,  171 => 55,  164 => 53,  159 => 51,  152 => 48,  148 => 47,  145 => 46,  143 => 45,  135 => 39,  129 => 38,  117 => 31,  112 => 29,  107 => 27,  99 => 22,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  77 => 15,  72 => 12,  66 => 11,  56 => 8,  50 => 7,  38 => 4,  11 => 1,);
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
\t\t\t\t\t<h4>Menú</h4>
\t\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t\t\t{{form_start(formMenu)}}
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t{{ form_row(formMenu.menu) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{form_end(formMenu)}}
\t\t\t\t\t\t\t<button id=\"verMenu\" class=\"btn btn-success\" >Ver</button>
\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>{{receta.comentarios|length}}</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>{{receta.descripcion(40)}}</p>
\t\t\t\t\t\t<a class=\"btn btn-success\" data-href={{receta.id}} data-toggle=\"modal\" data-target=\"#confirm-comision\"><i class=\"glyphicon glyphicon-plus\"> </i></a>

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

  <script type=\"text/javascript\" src=\"{{ asset('js/addReceta.js') }}\"></script>

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
