<?php

/* @User/Foro/show.html.twig */
class __TwigTemplate_c2952326e49b62b092ef4e427e225138b951a74f6f49318a4eec6f6ff222b80c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/Foro/show.html.twig", 1);
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
        $__internal_7344319124540072a9ce7103440c48a39aa53577afef4714e8522fc8ef9eae3a = $this->env->getExtension("native_profiler");
        $__internal_7344319124540072a9ce7103440c48a39aa53577afef4714e8522fc8ef9eae3a->enter($__internal_7344319124540072a9ce7103440c48a39aa53577afef4714e8522fc8ef9eae3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Foro/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7344319124540072a9ce7103440c48a39aa53577afef4714e8522fc8ef9eae3a->leave($__internal_7344319124540072a9ce7103440c48a39aa53577afef4714e8522fc8ef9eae3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8d529b0688f5fac858abd8c6bd4d5dee9975cc9d52395d75a413d1e02265337 = $this->env->getExtension("native_profiler");
        $__internal_c8d529b0688f5fac858abd8c6bd4d5dee9975cc9d52395d75a413d1e02265337->enter($__internal_c8d529b0688f5fac858abd8c6bd4d5dee9975cc9d52395d75a413d1e02265337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver foro";
        
        $__internal_c8d529b0688f5fac858abd8c6bd4d5dee9975cc9d52395d75a413d1e02265337->leave($__internal_c8d529b0688f5fac858abd8c6bd4d5dee9975cc9d52395d75a413d1e02265337_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df84bbc5018187f09c61074ce07c8a664465cbddcd48c6944d4ec39e842c7d02 = $this->env->getExtension("native_profiler");
        $__internal_df84bbc5018187f09c61074ce07c8a664465cbddcd48c6944d4ec39e842c7d02->enter($__internal_df84bbc5018187f09c61074ce07c8a664465cbddcd48c6944d4ec39e842c7d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t
";
        
        $__internal_df84bbc5018187f09c61074ce07c8a664465cbddcd48c6944d4ec39e842c7d02->leave($__internal_df84bbc5018187f09c61074ce07c8a664465cbddcd48c6944d4ec39e842c7d02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4362916cdeff946e28a99bfad55222820174a69dfc1a046ff79e1ac3567c58f5 = $this->env->getExtension("native_profiler");
        $__internal_4362916cdeff946e28a99bfad55222820174a69dfc1a046ff79e1ac3567c58f5->enter($__internal_4362916cdeff946e28a99bfad55222820174a69dfc1a046ff79e1ac3567c58f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<!--content-->


<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
              <div class=\"events-top\">
                  <div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
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
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"glyphicon glyphicon-comment\"> </i>5 Comment</a></li>
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
\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a href=\"#\">Andey</a> <span>02 June 2014, 15:20</span></p>
\t\t\t\t\t\t\t\t\t\t<p class=\"reply\"><a href=\"#\"><i class=\"glyphicon glyphicon-repeat\"> </i>REPLY</a></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t    <div class=\"media-left\">
\t\t\t\t\t\t\t\t        <a href=\"#\">
\t\t\t\t\t\t\t\t        \t<img src=\"images/si1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t
\t\t\t\t\t\t\t\t\t\t<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t    <div class=\"media media-1 wow fadeInUp animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t<div class=\"code-in\">
\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a href=\"#\"> Rackham</a> <span>02 June 2014, 15:20</span></p>
\t\t\t\t\t\t\t\t\t\t<p class=\"reply\"><a href=\"#\"><i class=\"glyphicon glyphicon-repeat\"> </i>REPLY</a></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t    <div class=\"media-left\">
\t\t\t\t\t\t\t\t        <a href=\"#\">
\t\t\t\t\t\t\t\t        \t<img src=\"images/si.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t
\t\t\t\t\t\t\t\t\t\t<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t<div class=\"media wow fadeInRight animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t<div class=\"code-in\">
\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a href=\"#\">Clara</a> <span>02 June 2014, 15:20</span></p>
\t\t\t\t\t\t\t\t\t\t<p class=\"reply\"><a href=\"#\"><i class=\"glyphicon glyphicon-repeat\"> </i>REPLY</a></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t    <div class=\"media-left\">
\t\t\t\t\t\t\t\t        <a href=\"#\">
\t\t\t\t\t\t\t\t        \t<img src=\"images/si2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
\t\t\t\t\t\t\t\t     </div>
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
        
        $__internal_4362916cdeff946e28a99bfad55222820174a69dfc1a046ff79e1ac3567c58f5->leave($__internal_4362916cdeff946e28a99bfad55222820174a69dfc1a046ff79e1ac3567c58f5_prof);

    }

    public function getTemplateName()
    {
        return "@User/Foro/show.html.twig";
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
                  <div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
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
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"glyphicon glyphicon-comment\"> </i>5 Comment</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p class=\"wow fadeInLeft animated\" data-wow-delay=\".5s\"><span>{{foro.descripcion}}</span></p>
\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"comment\">
\t\t\t\t\t\t\t\t<h3>Commentarios</h3>
\t\t\t\t\t\t\t\t <div class=\"media wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t<div class=\"code-in\">
\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a href=\"#\">Andey</a> <span>02 June 2014, 15:20</span></p>
\t\t\t\t\t\t\t\t\t\t<p class=\"reply\"><a href=\"#\"><i class=\"glyphicon glyphicon-repeat\"> </i>REPLY</a></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t    <div class=\"media-left\">
\t\t\t\t\t\t\t\t        <a href=\"#\">
\t\t\t\t\t\t\t\t        \t<img src=\"images/si1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t
\t\t\t\t\t\t\t\t\t\t<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t    <div class=\"media media-1 wow fadeInUp animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t<div class=\"code-in\">
\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a href=\"#\"> Rackham</a> <span>02 June 2014, 15:20</span></p>
\t\t\t\t\t\t\t\t\t\t<p class=\"reply\"><a href=\"#\"><i class=\"glyphicon glyphicon-repeat\"> </i>REPLY</a></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t    <div class=\"media-left\">
\t\t\t\t\t\t\t\t        <a href=\"#\">
\t\t\t\t\t\t\t\t        \t<img src=\"images/si.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t
\t\t\t\t\t\t\t\t\t\t<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t<div class=\"media wow fadeInRight animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t<div class=\"code-in\">
\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a href=\"#\">Clara</a> <span>02 June 2014, 15:20</span></p>
\t\t\t\t\t\t\t\t\t\t<p class=\"reply\"><a href=\"#\"><i class=\"glyphicon glyphicon-repeat\"> </i>REPLY</a></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t    <div class=\"media-left\">
\t\t\t\t\t\t\t\t        <a href=\"#\">
\t\t\t\t\t\t\t\t        \t<img src=\"images/si2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
\t\t\t\t\t\t\t\t     </div>
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
