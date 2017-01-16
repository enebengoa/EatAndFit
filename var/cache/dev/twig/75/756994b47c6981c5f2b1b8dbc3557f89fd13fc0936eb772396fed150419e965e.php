<?php

/* UserBundle:Foro:show.html.twig */
class __TwigTemplate_10104f37754f2f70c16ceb1a7ac88744979161e846700c3949f7528298780e94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "UserBundle:Foro:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a822aa0fd0b89422a8cfc37f5e20b78dfd451cf189fcff3a60fe6507f1d9ef3 = $this->env->getExtension("native_profiler");
        $__internal_7a822aa0fd0b89422a8cfc37f5e20b78dfd451cf189fcff3a60fe6507f1d9ef3->enter($__internal_7a822aa0fd0b89422a8cfc37f5e20b78dfd451cf189fcff3a60fe6507f1d9ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Foro:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a822aa0fd0b89422a8cfc37f5e20b78dfd451cf189fcff3a60fe6507f1d9ef3->leave($__internal_7a822aa0fd0b89422a8cfc37f5e20b78dfd451cf189fcff3a60fe6507f1d9ef3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fe668eb6e9bdce05059469011ac83bee4428de4597959195227ab063820e0f9 = $this->env->getExtension("native_profiler");
        $__internal_3fe668eb6e9bdce05059469011ac83bee4428de4597959195227ab063820e0f9->enter($__internal_3fe668eb6e9bdce05059469011ac83bee4428de4597959195227ab063820e0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver foro";
        
        $__internal_3fe668eb6e9bdce05059469011ac83bee4428de4597959195227ab063820e0f9->leave($__internal_3fe668eb6e9bdce05059469011ac83bee4428de4597959195227ab063820e0f9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0422010ee678904517b60ce1a9f5b7ded7f6782bc364321939f51210c1b1bf3 = $this->env->getExtension("native_profiler");
        $__internal_d0422010ee678904517b60ce1a9f5b7ded7f6782bc364321939f51210c1b1bf3->enter($__internal_d0422010ee678904517b60ce1a9f5b7ded7f6782bc364321939f51210c1b1bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t
";
        
        $__internal_d0422010ee678904517b60ce1a9f5b7ded7f6782bc364321939f51210c1b1bf3->leave($__internal_d0422010ee678904517b60ce1a9f5b7ded7f6782bc364321939f51210c1b1bf3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9b34cee61a86c0d64bcf10075cc5a46b75ab7ae431b65e38342d563feaf5d58 = $this->env->getExtension("native_profiler");
        $__internal_c9b34cee61a86c0d64bcf10075cc5a46b75ab7ae431b65e38342d563feaf5d58->enter($__internal_c9b34cee61a86c0d64bcf10075cc5a46b75ab7ae431b65e38342d563feaf5d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<!--content-->

<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
\t              <div class=\"events-top\">
\t                  <div class=\"col-md-12 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t                    <h3><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("App_user_listForo");
        echo "\">Foro \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foro"]) ? $context["foro"] : $this->getContext($context, "foro")), "nombre", array()), "html", null, true);
        echo "\"</a></h3>
\t                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t                    <span></span>
\t                  </div>
\t                  <div class=\"clearfix\"> </div>
\t               </div>    
\t            <div class=\"content-mid\">
\t            \t<div class=\"col-md-9 \">
\t\t\t\t\t\t<div class=\"single\">
\t\t\t\t\t\t\t<div class=\"single-top\">
\t\t\t\t\t\t\t\t\t<div class=\"lone-line\">
\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foro"]) ? $context["foro"] : $this->getContext($context, "foro")), "nombre", array()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"grid-blog\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><span><i class=\"glyphicon glyphicon-time\"> </i>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["foro"]) ? $context["foro"] : $this->getContext($context, "foro")), "fechaCreacion", array()), "Y-m-d"), "html", null, true);
        echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"glyphicon glyphicon-comment\"> </i>";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["foro"]) ? $context["foro"] : $this->getContext($context, "foro")), "comentarios", array())), "html", null, true);
        echo " comentario/s</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"wow fadeInLeft animated\" data-wow-delay=\".5s\"><span>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foro"]) ? $context["foro"] : $this->getContext($context, "foro")), "descripcion", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t";
        // line 38
        $this->loadTemplate("UserBundle:Comentario:list.html.twig", "UserBundle:Foro:show.html.twig", 38)->display(array_merge($context, array("comentarios" => (isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")))));
        // line 39
        echo "
\t\t\t\t";
        // line 40
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "\t                <div class=\"leave\">
\t\t\t\t\t\t<h3>Agrega un comentario</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"single-grid wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 46
            $this->loadTemplate("UserBundle:Comentario:add2.html.twig", "UserBundle:Foro:show.html.twig", 46)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id" => $this->getAttribute((isset($context["foro"]) ? $context["foro"] : $this->getContext($context, "foro")), "id", array()), "username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))));
            // line 47
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>       
                ";
        } else {
            // line 51
            echo "                <a class=\"btn btn-lg btn-success\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>\t\t\t            
                ";
        }
        // line 52
        echo "\t

                </div>
\t\t\t\t</div>
\t\t        <div class=\"clearfix\"></div>
        </div>
    </div>
</div>



";
        
        $__internal_c9b34cee61a86c0d64bcf10075cc5a46b75ab7ae431b65e38342d563feaf5d58->leave($__internal_c9b34cee61a86c0d64bcf10075cc5a46b75ab7ae431b65e38342d563feaf5d58_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5060744b0d8d700575b49ecdc7ee9bc81d28042e2ae629b8db5b89ad847e2b47 = $this->env->getExtension("native_profiler");
        $__internal_5060744b0d8d700575b49ecdc7ee9bc81d28042e2ae629b8db5b89ad847e2b47->enter($__internal_5060744b0d8d700575b49ecdc7ee9bc81d28042e2ae629b8db5b89ad847e2b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
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
        
        $__internal_5060744b0d8d700575b49ecdc7ee9bc81d28042e2ae629b8db5b89ad847e2b47->leave($__internal_5060744b0d8d700575b49ecdc7ee9bc81d28042e2ae629b8db5b89ad847e2b47_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Foro:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 66,  165 => 65,  147 => 52,  141 => 51,  135 => 47,  133 => 46,  126 => 41,  124 => 40,  121 => 39,  119 => 38,  111 => 33,  106 => 31,  102 => 30,  97 => 28,  81 => 17,  71 => 9,  65 => 8,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseuser.html.twig' %}

{% block title %}Ver foro{% endblock %}
{% block stylesheets %}
{{ parent() }}
\t
{% endblock %}
{% block body %}

<!--content-->

<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
\t              <div class=\"events-top\">
\t                  <div class=\"col-md-12 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t                    <h3><a href=\"{{ path('App_user_listForo') }}\">Foro \"{{foro.nombre}}\"</a></h3>
\t                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t                    <span></span>
\t                  </div>
\t                  <div class=\"clearfix\"> </div>
\t               </div>    
\t            <div class=\"content-mid\">
\t            \t<div class=\"col-md-9 \">
\t\t\t\t\t\t<div class=\"single\">
\t\t\t\t\t\t\t<div class=\"single-top\">
\t\t\t\t\t\t\t\t\t<div class=\"lone-line\">
\t\t\t\t\t\t\t\t\t\t<h4>{{foro.nombre}}</h4>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"grid-blog\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><span><i class=\"glyphicon glyphicon-time\"> </i>{{ foro.fechaCreacion|date('Y-m-d') }}</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"glyphicon glyphicon-comment\"> </i>{{foro.comentarios|length}} comentario/s</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"wow fadeInLeft animated\" data-wow-delay=\".5s\"><span>{{foro.descripcion}}</span></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t{% include \"UserBundle:Comentario:list.html.twig\" with { 'comentarios' : comentarios} %}

\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t                <div class=\"leave\">
\t\t\t\t\t\t<h3>Agrega un comentario</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"single-grid wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% include \"UserBundle:Comentario:add2.html.twig\" with { 'form' : form, 'id': foro.id, 'username': app.user.id} %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>       
                {% else %}
                <a class=\"btn btn-lg btn-success\" href=\"{{path('fos_user_security_login') }}\">Login</a>\t\t\t            
                {% endif %}\t

                </div>
\t\t\t\t</div>
\t\t        <div class=\"clearfix\"></div>
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
