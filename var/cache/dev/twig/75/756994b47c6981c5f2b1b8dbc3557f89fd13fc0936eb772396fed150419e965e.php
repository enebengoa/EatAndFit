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
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3da17fd0bc3cb704fbdd31e9ff2a5a88791cdb6b3f88a92fb1d13a9102368ec7 = $this->env->getExtension("native_profiler");
        $__internal_3da17fd0bc3cb704fbdd31e9ff2a5a88791cdb6b3f88a92fb1d13a9102368ec7->enter($__internal_3da17fd0bc3cb704fbdd31e9ff2a5a88791cdb6b3f88a92fb1d13a9102368ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Foro:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3da17fd0bc3cb704fbdd31e9ff2a5a88791cdb6b3f88a92fb1d13a9102368ec7->leave($__internal_3da17fd0bc3cb704fbdd31e9ff2a5a88791cdb6b3f88a92fb1d13a9102368ec7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6069488a9c4287ae1a0b5fcdab64ac50b37fc5f246539ea7cc6aafc0f0444662 = $this->env->getExtension("native_profiler");
        $__internal_6069488a9c4287ae1a0b5fcdab64ac50b37fc5f246539ea7cc6aafc0f0444662->enter($__internal_6069488a9c4287ae1a0b5fcdab64ac50b37fc5f246539ea7cc6aafc0f0444662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver foro";
        
        $__internal_6069488a9c4287ae1a0b5fcdab64ac50b37fc5f246539ea7cc6aafc0f0444662->leave($__internal_6069488a9c4287ae1a0b5fcdab64ac50b37fc5f246539ea7cc6aafc0f0444662_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f01cdb3819a3e2a4ce7c1a225c9282ebdaeeace2df66e438222fc87cc5645314 = $this->env->getExtension("native_profiler");
        $__internal_f01cdb3819a3e2a4ce7c1a225c9282ebdaeeace2df66e438222fc87cc5645314->enter($__internal_f01cdb3819a3e2a4ce7c1a225c9282ebdaeeace2df66e438222fc87cc5645314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t
";
        
        $__internal_f01cdb3819a3e2a4ce7c1a225c9282ebdaeeace2df66e438222fc87cc5645314->leave($__internal_f01cdb3819a3e2a4ce7c1a225c9282ebdaeeace2df66e438222fc87cc5645314_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9143c04d10b0fcd03e44711765c7fe52ffaead3ed23ac814369d7673d9d3e2a = $this->env->getExtension("native_profiler");
        $__internal_f9143c04d10b0fcd03e44711765c7fe52ffaead3ed23ac814369d7673d9d3e2a->enter($__internal_f9143c04d10b0fcd03e44711765c7fe52ffaead3ed23ac814369d7673d9d3e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<!--content-->


<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
              <div class=\"events-top\">
                  <div class=\"col-md-12 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("App_user_listForo");
        echo "\">Foro \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foro"]) ? $context["foro"] : $this->getContext($context, "foro")), "nombre", array()), "html", null, true);
        echo "\"</a></h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span></span>
                  </div>
                  <div class=\"clearfix\"> </div>
            </div>    
            <div class=\"content-mid\">

            \t<div class=\"col-md-9 \">
\t\t\t<div class=\"single\">
\t\t\t\t<div class=\"single-top\">
\t\t\t\t\t\t<div class=\"lone-line\">
\t\t\t\t\t\t\t<h4>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foro"]) ? $context["foro"] : $this->getContext($context, "foro")), "nombre", array()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t<ul class=\"grid-blog\">
\t\t\t\t\t\t\t\t\t<li><span><i class=\"glyphicon glyphicon-time\"> </i>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["foro"]) ? $context["foro"] : $this->getContext($context, "foro")), "fechaCreacion", array()), "Y-m-d"), "html", null, true);
        echo "</span></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"glyphicon glyphicon-comment\"> </i>4 Comment</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p class=\"wow fadeInLeft animated\" data-wow-delay=\".5s\"><span>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foro"]) ? $context["foro"] : $this->getContext($context, "foro")), "descripcion", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"comment\">
\t\t\t\t\t\t\t\t<h3>Commentarios</h3>
\t\t\t\t\t\t\t\t <div class=\"media wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t<div class=\"code-in\">
\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a href=\"#\">Eneko</a> <span>15 Noviembre 2016</span></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t    <div class=\"media-left\">
\t\t\t\t\t\t\t\t        <a href=\"#\">
\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t
\t\t\t\t\t\t\t\t\t\t<p>La avena con leche de almendras es un desayuno muy saludable.</p>
\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t    <div class=\"media media-1 wow fadeInUp animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t<div class=\"code-in\">
\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a href=\"#\"> Naia</a> <span>16 Noviembre 2016</span></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t    <div class=\"media-left\">
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t
\t\t\t\t\t\t\t\t\t\t<p>La ingesta de fruta también es considerada uno de los mejores desayunos.</p>
\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"leave\">
\t\t\t\t\t<h3>Leave a comment</h3>
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"single-grid wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"Name\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value = 'Name';}\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"E-mail\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value = 'E-mail';}\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"Web site\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value = 'Web site';}\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<textarea value=\" \" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value = 'Comment';}\">Comment</textarea>
\t\t\t\t\t\t\t\t\t<label class=\"hvr-rectangle-out\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Send\">
\t\t\t\t\t\t\t\t\t</label>\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t</div>
\t</div>
                    





                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>




\t\t
</div>

";
        
        $__internal_f9143c04d10b0fcd03e44711765c7fe52ffaead3ed23ac814369d7673d9d3e2a->leave($__internal_f9143c04d10b0fcd03e44711765c7fe52ffaead3ed23ac814369d7673d9d3e2a_prof);

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
        return array (  109 => 35,  103 => 32,  98 => 30,  81 => 18,  70 => 9,  64 => 8,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
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
              <div class=\"events-top\">
                  <div class=\"col-md-12 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3><a href=\"{{ path('App_user_listForo') }}\">Foro \"{{foro.nombre}}\"</a></h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span></span>
                  </div>
                  <div class=\"clearfix\"> </div>
            </div>    
            <div class=\"content-mid\">

            \t<div class=\"col-md-9 \">
\t\t\t<div class=\"single\">
\t\t\t\t<div class=\"single-top\">
\t\t\t\t\t\t<div class=\"lone-line\">
\t\t\t\t\t\t\t<h4>{{foro.nombre}}</h4>
\t\t\t\t\t\t\t\t<ul class=\"grid-blog\">
\t\t\t\t\t\t\t\t\t<li><span><i class=\"glyphicon glyphicon-time\"> </i>{{ foro.fechaCreacion|date('Y-m-d') }}</span></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"glyphicon glyphicon-comment\"> </i>4 Comment</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p class=\"wow fadeInLeft animated\" data-wow-delay=\".5s\"><span>{{foro.descripcion}}</span></p>
\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"comment\">
\t\t\t\t\t\t\t\t<h3>Commentarios</h3>
\t\t\t\t\t\t\t\t <div class=\"media wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t<div class=\"code-in\">
\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a href=\"#\">Eneko</a> <span>15 Noviembre 2016</span></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t    <div class=\"media-left\">
\t\t\t\t\t\t\t\t        <a href=\"#\">
\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t
\t\t\t\t\t\t\t\t\t\t<p>La avena con leche de almendras es un desayuno muy saludable.</p>
\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t    <div class=\"media media-1 wow fadeInUp animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t<div class=\"code-in\">
\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a href=\"#\"> Naia</a> <span>16 Noviembre 2016</span></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t    <div class=\"media-left\">
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t
\t\t\t\t\t\t\t\t\t\t<p>La ingesta de fruta también es considerada uno de los mejores desayunos.</p>
\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"leave\">
\t\t\t\t\t<h3>Leave a comment</h3>
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"single-grid wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"Name\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value = 'Name';}\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"E-mail\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value = 'E-mail';}\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"Web site\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value = 'Web site';}\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<textarea value=\" \" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value = 'Comment';}\">Comment</textarea>
\t\t\t\t\t\t\t\t\t<label class=\"hvr-rectangle-out\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Send\">
\t\t\t\t\t\t\t\t\t</label>\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t</div>
\t</div>
                    





                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>




\t\t
</div>

{% endblock %}";
    }
}
