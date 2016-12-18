<?php

/* @User/Menu/list.html.twig */
class __TwigTemplate_5317f9659d5215779b4b8059a56fb61901af75ed14f29ca15173830a371116ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout_menu.html.twig", "@User/Menu/list.html.twig", 1);
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
        $__internal_b06e2e1a640019d66f155ce8c5710b1cea7f66cbf1537822d3b44a6c23e7152c = $this->env->getExtension("native_profiler");
        $__internal_b06e2e1a640019d66f155ce8c5710b1cea7f66cbf1537822d3b44a6c23e7152c->enter($__internal_b06e2e1a640019d66f155ce8c5710b1cea7f66cbf1537822d3b44a6c23e7152c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Menu/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b06e2e1a640019d66f155ce8c5710b1cea7f66cbf1537822d3b44a6c23e7152c->leave($__internal_b06e2e1a640019d66f155ce8c5710b1cea7f66cbf1537822d3b44a6c23e7152c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e1d2f1253cfdfd3b7982797306b54212d32c195743b7b05a2f5eb449e8bde58 = $this->env->getExtension("native_profiler");
        $__internal_7e1d2f1253cfdfd3b7982797306b54212d32c195743b7b05a2f5eb449e8bde58->enter($__internal_7e1d2f1253cfdfd3b7982797306b54212d32c195743b7b05a2f5eb449e8bde58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_7e1d2f1253cfdfd3b7982797306b54212d32c195743b7b05a2f5eb449e8bde58->leave($__internal_7e1d2f1253cfdfd3b7982797306b54212d32c195743b7b05a2f5eb449e8bde58_prof);

    }

    // line 7
    public function block_head2($context, array $blocks = array())
    {
        $__internal_ddc1d58e05222ffd712d98215dfac5dc65456d81b74b77ca402b169af9b07400 = $this->env->getExtension("native_profiler");
        $__internal_ddc1d58e05222ffd712d98215dfac5dc65456d81b74b77ca402b169af9b07400->enter($__internal_ddc1d58e05222ffd712d98215dfac5dc65456d81b74b77ca402b169af9b07400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        // line 8
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_showServicio");
        echo "\">Menús</a>
";
        
        $__internal_ddc1d58e05222ffd712d98215dfac5dc65456d81b74b77ca402b169af9b07400->leave($__internal_ddc1d58e05222ffd712d98215dfac5dc65456d81b74b77ca402b169af9b07400_prof);

    }

    // line 11
    public function block_body3($context, array $blocks = array())
    {
        $__internal_54eb90d83c01dc5991ff400dab23589f402e65b1cd3128e554aff34dfa4105b0 = $this->env->getExtension("native_profiler");
        $__internal_54eb90d83c01dc5991ff400dab23589f402e65b1cd3128e554aff34dfa4105b0->enter($__internal_54eb90d83c01dc5991ff400dab23589f402e65b1cd3128e554aff34dfa4105b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body3"));

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
        
        $__internal_54eb90d83c01dc5991ff400dab23589f402e65b1cd3128e554aff34dfa4105b0->leave($__internal_54eb90d83c01dc5991ff400dab23589f402e65b1cd3128e554aff34dfa4105b0_prof);

    }

    // line 37
    public function block_body2($context, array $blocks = array())
    {
        $__internal_5cb104e4634542bec009f688586fa2d3795e5b728e5e7c27ebd01e6dc8068b73 = $this->env->getExtension("native_profiler");
        $__internal_5cb104e4634542bec009f688586fa2d3795e5b728e5e7c27ebd01e6dc8068b73->enter($__internal_5cb104e4634542bec009f688586fa2d3795e5b728e5e7c27ebd01e6dc8068b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

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
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["menu"], "imagen", array()))), "html", null, true);
            echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["menu"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "descripcion", array(0 => 40), "method"), "html", null, true);
            echo "</p>
            <a class=\"btn btn-success\" data-href=";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo " data-toggle=\"modal\" data-target=\"#confirm-comision\"><i class=\"glyphicon glyphicon-plus\"> </i></a>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t";
            // line 70
            if ((((isset($context["numMenu"]) ? $context["numMenu"] : $this->getContext($context, "numMenu")) % 3) == 0)) {
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
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
        // line 95
        $this->loadTemplate("UserBundle:Menu:add.html.twig", "@User/Menu/list.html.twig", 95)->display(array_merge($context, array("formMenu" => (isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")))));
        // line 96
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
        // line 138
        $this->loadTemplate("UserBundle:OrdenCompra:add.html.twig", "@User/Menu/list.html.twig", 138)->display(array_merge($context, array("formOrdenCompra" => (isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")))));
        // line 139
        echo "
                        <p class=\"debug-url\"></p>
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        <a id=\"menuAdd\"class=\"btn btn-success btn-ok\">Guardar</a>
                    </div>
                </div>
            </div>
        </div>

";
        
        $__internal_5cb104e4634542bec009f688586fa2d3795e5b728e5e7c27ebd01e6dc8068b73->leave($__internal_5cb104e4634542bec009f688586fa2d3795e5b728e5e7c27ebd01e6dc8068b73_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3fb4bd10d717cf91defe29658f4f17ca45881da605823fe3893d9a9f61961aa = $this->env->getExtension("native_profiler");
        $__internal_b3fb4bd10d717cf91defe29658f4f17ca45881da605823fe3893d9a9f61961aa->enter($__internal_b3fb4bd10d717cf91defe29658f4f17ca45881da605823fe3893d9a9f61961aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
        echo "<script>
        \$('body').on('submit', '.ajaxForm', function (e) {

        e.preventDefault();

        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(jqXHR) {
                        \$('#myModal').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Añadir')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

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

<script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/addMenuOrdenCompra.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_b3fb4bd10d717cf91defe29658f4f17ca45881da605823fe3893d9a9f61961aa->leave($__internal_b3fb4bd10d717cf91defe29658f4f17ca45881da605823fe3893d9a9f61961aa_prof);

    }

    public function getTemplateName()
    {
        return "@User/Menu/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 183,  303 => 154,  297 => 153,  278 => 139,  276 => 138,  232 => 96,  230 => 95,  210 => 78,  206 => 76,  200 => 75,  194 => 71,  192 => 70,  182 => 63,  177 => 61,  173 => 60,  167 => 57,  160 => 55,  155 => 53,  148 => 50,  144 => 49,  141 => 48,  139 => 47,  128 => 38,  122 => 37,  111 => 31,  106 => 29,  101 => 27,  93 => 22,  88 => 20,  84 => 19,  79 => 17,  72 => 12,  66 => 11,  56 => 8,  50 => 7,  38 => 4,  11 => 1,);
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
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset ('imagenes/'~menu.imagen)}}\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"{{ path('App_user_showMenu', { 'id': menu.id }) }}\">{{menu.nombre}}</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ menu.fechaCreacion|date('Y-m-d') }}</span>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>{{menu.descripcion(40)}}</p>
            <a class=\"btn btn-success\" data-href={{menu.id}} data-toggle=\"modal\" data-target=\"#confirm-comision\"><i class=\"glyphicon glyphicon-plus\"> </i></a>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
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
                        <a id=\"menuAdd\"class=\"btn btn-success btn-ok\">Guardar</a>
                    </div>
                </div>
            </div>
        </div>

{% endblock %}

{% block javascripts %}
<script>
        \$('body').on('submit', '.ajaxForm', function (e) {

        e.preventDefault();

        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(jqXHR) {
                        \$('#myModal').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Añadir')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

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

<script type=\"text/javascript\" src=\"{{ asset('js/addMenuOrdenCompra.js') }}\"></script>
   {% endblock %}";
    }
}
