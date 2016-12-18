<?php

/* UserBundle:Receta:show.html.twig */
class __TwigTemplate_85440244d9605bcd7413cdbb37a2e5ce4e9e9048e2b725a17383c8af00535497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout_blog.html.twig", "UserBundle:Receta:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head2' => array($this, 'block_head2'),
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
        $__internal_31e9e3ebc90eeeedcd45f2c83e59a5da5c154ef57d1bbb55caa2d4fa657beda0 = $this->env->getExtension("native_profiler");
        $__internal_31e9e3ebc90eeeedcd45f2c83e59a5da5c154ef57d1bbb55caa2d4fa657beda0->enter($__internal_31e9e3ebc90eeeedcd45f2c83e59a5da5c154ef57d1bbb55caa2d4fa657beda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Receta:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e9e3ebc90eeeedcd45f2c83e59a5da5c154ef57d1bbb55caa2d4fa657beda0->leave($__internal_31e9e3ebc90eeeedcd45f2c83e59a5da5c154ef57d1bbb55caa2d4fa657beda0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c3def95f9b47dc98ec36afbe2c36941e343755b1a3d83dd87428bd4e0c3e0f6 = $this->env->getExtension("native_profiler");
        $__internal_1c3def95f9b47dc98ec36afbe2c36941e343755b1a3d83dd87428bd4e0c3e0f6->enter($__internal_1c3def95f9b47dc98ec36afbe2c36941e343755b1a3d83dd87428bd4e0c3e0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_1c3def95f9b47dc98ec36afbe2c36941e343755b1a3d83dd87428bd4e0c3e0f6->leave($__internal_1c3def95f9b47dc98ec36afbe2c36941e343755b1a3d83dd87428bd4e0c3e0f6_prof);

    }

    // line 5
    public function block_head2($context, array $blocks = array())
    {
        $__internal_1d9c9073ff7d1d5640e6f8af52bb4632742e0bc5e2b7bd6be0d9afa78a51088a = $this->env->getExtension("native_profiler");
        $__internal_1d9c9073ff7d1d5640e6f8af52bb4632742e0bc5e2b7bd6be0d9afa78a51088a->enter($__internal_1d9c9073ff7d1d5640e6f8af52bb4632742e0bc5e2b7bd6be0d9afa78a51088a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_listReceta");
        echo "\">Receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "nombre", array()), "html", null, true);
        echo "\"</a>";
        
        $__internal_1d9c9073ff7d1d5640e6f8af52bb4632742e0bc5e2b7bd6be0d9afa78a51088a->leave($__internal_1d9c9073ff7d1d5640e6f8af52bb4632742e0bc5e2b7bd6be0d9afa78a51088a_prof);

    }

    // line 7
    public function block_body2($context, array $blocks = array())
    {
        $__internal_dd7ef1cfef83c2b81e244b3f89cd647234e748508929cf95cb3b815313296c6f = $this->env->getExtension("native_profiler");
        $__internal_dd7ef1cfef83c2b81e244b3f89cd647234e748508929cf95cb3b815313296c6f->enter($__internal_dd7ef1cfef83c2b81e244b3f89cd647234e748508929cf95cb3b815313296c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 8
        echo "
<!--content-->
\t\t<div class=\"col-md-9 \">
\t\t\t<div class=\"single\">
\t\t\t\t<div class=\"single-top\">
\t\t\t\t\t<img class=\"img-responsive wow fadeInUp animated\" data-wow-delay=\".5s\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "imagen", array()))), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t<div class=\"lone-line\">
\t\t\t\t\t\t\t<h4>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "nombre", array()), "html", null, true);
        echo "</h4>\t

\t\t\t\t\t\t\t\t<ul class=\"grid-blog\">
\t\t\t\t\t\t\t\t\t<li><span><i class=\"glyphicon glyphicon-time\"> </i>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "fechaCreacion", array()), "Y-m-d"), "html", null, true);
        echo "/ /</span></li>
\t\t\t\t\t\t\t\t\t<li><span><i> </i> Tiempo de preparación: ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "tiempoPreparacion", array()), "H:i"), "html", null, true);
        echo " /</span></li>
\t\t\t\t\t\t\t\t\t<li><span><i> </i> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "numeroComensales", array()), "html", null, true);
        echo " comensales</span></li>
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t<li><span><i class=\"glyphicon glyphicon-comment\"> </i>";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios"))), "html", null, true);
        echo " comentarios /</span></li>
\t\t\t\t\t\t\t\t\t<li><span><i> </i> Dificultad: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "dificultad", array()), "html", null, true);
        echo " sobre 5 / </span></li>
\t\t\t\t\t\t\t\t\t<li><span><i> </i> Apto para celiacos: ";
        // line 25
        echo (($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "celiaco", array())) ? ("Sí") : ("No"));
        echo "  </span></li>
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t";
        // line 28
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 29
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"stars\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 30
            $this->loadTemplate("UserBundle:Puntuacion:add.html.twig", "UserBundle:Receta:show.html.twig", 30)->display(array_merge($context, array("form2" => (isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "id2" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id", array()), "user2" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))));
            // line 31
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t                ";
        } else {
            // line 34
            echo "\t\t\t\t\t                ";
            echo $this->env->getExtension('star_rating_extension')->rating((isset($context["puntuacionMedia"]) ? $context["puntuacionMedia"] : $this->getContext($context, "puntuacionMedia")));
            echo "
\t\t\t\t\t                </br>
\t\t\t\t\t                <a class=\"btn btn-lg btn-success\" href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>\t\t\t            
\t\t\t\t\t                ";
        }
        // line 37
        echo "\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t                      <thead>
\t\t                        <tr>
\t\t                          <th>#</th>
\t\t                          <th>Ingrediente</th>
\t\t                          <th>Cantidad</th>
\t\t                          <th>Unidad</th>
\t\t                        </tr>
\t\t                      </thead>
\t\t                      <tbody>
\t\t                        ";
        // line 51
        $context["fila"] = 0;
        // line 52
        echo "\t\t                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "cantidadesUtilizadas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cu"]) {
            // line 53
            echo "\t\t                          ";
            $context["fila"] = ((isset($context["fila"]) ? $context["fila"] : $this->getContext($context, "fila")) + 1);
            echo "   
\t\t                            <tr>
\t\t                              <th scope=\"row\">";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["fila"]) ? $context["fila"] : $this->getContext($context, "fila")), "html", null, true);
            echo "</th>
\t\t                              <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cu"], "Ingrediente", array()), "nombre", array()), "html", null, true);
            echo "</td>
\t\t                              <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["cu"], "cantidad", array()), "html", null, true);
            echo "</td>
\t\t                              <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cu"], "Ingrediente", array()), "unidadMedida", array()), "html", null, true);
            echo "</td>
\t\t                            </tr>
\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t                      </tbody>
\t\t                  </table>
\t\t                  </br>
\t\t\t\t\t\t\t\t<p class=\"wow fadeInLeft animated\" data-wow-delay=\".5s\"><span>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "descripcion", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t</div>
\t\t\t";
        // line 68
        $this->loadTemplate("UserBundle:Comentario:list.html.twig", "UserBundle:Receta:show.html.twig", 68)->display(array_merge($context, array("comentarios" => (isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")))));
        // line 69
        echo "
\t\t\t\t";
        // line 70
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 71
            echo "\t                <div class=\"leave\">
\t\t\t\t\t\t<h3>Agrega un comentario</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"single-grid wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 76
            $this->loadTemplate("UserBundle:Comentario:add.html.twig", "UserBundle:Receta:show.html.twig", 76)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id", array()), "username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))));
            // line 77
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>       
                ";
        } else {
            // line 81
            echo "                <a class=\"btn btn-lg btn-success\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>\t\t\t            
                ";
        }
        // line 82
        echo "\t\t\t
\t</div>
</div>

";
        
        $__internal_dd7ef1cfef83c2b81e244b3f89cd647234e748508929cf95cb3b815313296c6f->leave($__internal_dd7ef1cfef83c2b81e244b3f89cd647234e748508929cf95cb3b815313296c6f_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9b74704989ff158a12c374ada2624f9a36ef3dca8a78645e6f1ab0f9e3f91b2 = $this->env->getExtension("native_profiler");
        $__internal_d9b74704989ff158a12c374ada2624f9a36ef3dca8a78645e6f1ab0f9e3f91b2->enter($__internal_d9b74704989ff158a12c374ada2624f9a36ef3dca8a78645e6f1ab0f9e3f91b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "
<script>
        \$('body').on('submit', '.ajaxForm', function (e) {

        e.preventDefault();

        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(returnData) {
         \t\t\$(\".comment\").html(returnData['html']);
                        
                    },
                    error: function(jqXHR) {
                       
                    },
            });
        });
    </script>


    <script>
        \$('body').on('submit','.ajaxForm2', function (e) {

        e.preventDefault();


        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(returnData) {
                        \$(\"#stars\").html(returnData['html']);
                    },
                    error: function(jqXHR) {
                       
                    },
            });
        });
    </script>


";
        
        $__internal_d9b74704989ff158a12c374ada2624f9a36ef3dca8a78645e6f1ab0f9e3f91b2->leave($__internal_d9b74704989ff158a12c374ada2624f9a36ef3dca8a78645e6f1ab0f9e3f91b2_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Receta:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 89,  241 => 88,  230 => 82,  224 => 81,  218 => 77,  216 => 76,  209 => 71,  207 => 70,  204 => 69,  202 => 68,  195 => 64,  190 => 61,  181 => 58,  177 => 57,  173 => 56,  169 => 55,  163 => 53,  158 => 52,  156 => 51,  140 => 37,  135 => 36,  129 => 34,  124 => 31,  122 => 30,  119 => 29,  117 => 28,  111 => 25,  107 => 24,  103 => 23,  97 => 20,  93 => 19,  89 => 18,  83 => 15,  78 => 13,  71 => 8,  65 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'UserBundle::layout_blog.html.twig' %}

{% block title %}Eat&Fit{% endblock%}

{% block head2 %}<a href=\"{{ path('App_user_listReceta') }}\">Receta \"{{receta.nombre}}\"</a>{% endblock %}

{% block body2 %}

<!--content-->
\t\t<div class=\"col-md-9 \">
\t\t\t<div class=\"single\">
\t\t\t\t<div class=\"single-top\">
\t\t\t\t\t<img class=\"img-responsive wow fadeInUp animated\" data-wow-delay=\".5s\" src=\"{{ asset ('imagenes/'~receta.imagen)}}\" alt=\"\" />
\t\t\t\t\t\t<div class=\"lone-line\">
\t\t\t\t\t\t\t<h4>{{receta.nombre}}</h4>\t

\t\t\t\t\t\t\t\t<ul class=\"grid-blog\">
\t\t\t\t\t\t\t\t\t<li><span><i class=\"glyphicon glyphicon-time\"> </i>{{ receta.fechaCreacion|date('Y-m-d') }}/ /</span></li>
\t\t\t\t\t\t\t\t\t<li><span><i> </i> Tiempo de preparación: {{receta.tiempoPreparacion|date('H:i')}} /</span></li>
\t\t\t\t\t\t\t\t\t<li><span><i> </i> {{receta.numeroComensales}} comensales</span></li>
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t<li><span><i class=\"glyphicon glyphicon-comment\"> </i>{{comentarios|length}} comentarios /</span></li>
\t\t\t\t\t\t\t\t\t<li><span><i> </i> Dificultad: {{receta.dificultad}} sobre 5 / </span></li>
\t\t\t\t\t\t\t\t\t<li><span><i> </i> Apto para celiacos: {{receta.celiaco ? 'Sí':'No'}}  </span></li>
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"stars\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include \"UserBundle:Puntuacion:add.html.twig\" with { 'form2' : form2, 'id2': receta.id, 'user2': app.user.id} %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t                {% else %}
\t\t\t\t\t                {{ puntuacionMedia|rating() }}
\t\t\t\t\t                </br>
\t\t\t\t\t                <a class=\"btn btn-lg btn-success\" href=\"{{path('fos_user_security_login') }}\">Login</a>\t\t\t            
\t\t\t\t\t                {% endif %}\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t                      <thead>
\t\t                        <tr>
\t\t                          <th>#</th>
\t\t                          <th>Ingrediente</th>
\t\t                          <th>Cantidad</th>
\t\t                          <th>Unidad</th>
\t\t                        </tr>
\t\t                      </thead>
\t\t                      <tbody>
\t\t                        {% set fila=0%}
\t\t                        {% for cu in receta.cantidadesUtilizadas %}
\t\t                          {% set fila=fila+1%}   
\t\t                            <tr>
\t\t                              <th scope=\"row\">{{fila}}</th>
\t\t                              <td>{{cu.Ingrediente.nombre}}</td>
\t\t                              <td>{{cu.cantidad}}</td>
\t\t                              <td>{{cu.Ingrediente.unidadMedida}}</td>
\t\t                            </tr>
\t\t                        {% endfor %}
\t\t                      </tbody>
\t\t                  </table>
\t\t                  </br>
\t\t\t\t\t\t\t\t<p class=\"wow fadeInLeft animated\" data-wow-delay=\".5s\"><span>{{receta.descripcion}}</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t</div>
\t\t\t{% include \"UserBundle:Comentario:list.html.twig\" with { 'comentarios' : comentarios} %}

\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t                <div class=\"leave\">
\t\t\t\t\t\t<h3>Agrega un comentario</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"single-grid wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% include \"UserBundle:Comentario:add.html.twig\" with { 'form' : form, 'id': receta.id, 'username': app.user.id} %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>       
                {% else %}
                <a class=\"btn btn-lg btn-success\" href=\"{{path('fos_user_security_login') }}\">Login</a>\t\t\t            
                {% endif %}\t\t\t
\t</div>
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
            success: function(returnData) {
         \t\t\$(\".comment\").html(returnData['html']);
                        
                    },
                    error: function(jqXHR) {
                       
                    },
            });
        });
    </script>


    <script>
        \$('body').on('submit','.ajaxForm2', function (e) {

        e.preventDefault();


        \$.ajax({
            type: \$(this).attr('method'),
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function(returnData) {
                        \$(\"#stars\").html(returnData['html']);
                    },
                    error: function(jqXHR) {
                       
                    },
            });
        });
    </script>


{% endblock %}";
    }
}
