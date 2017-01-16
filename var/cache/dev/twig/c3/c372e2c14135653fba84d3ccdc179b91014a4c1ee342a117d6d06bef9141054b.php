<?php

/* baseuser.html.twig */
class __TwigTemplate_b326e3d72fc8be0a280f08efb1367bade374e88482ee8ed750b8e5f4240d3005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e5cda4ed06926dc91f8cec94ca7ab06cb2f18a141f519545fe53b422532c79d = $this->env->getExtension("native_profiler");
        $__internal_4e5cda4ed06926dc91f8cec94ca7ab06cb2f18a141f519545fe53b422532c79d->enter($__internal_4e5cda4ed06926dc91f8cec94ca7ab06cb2f18a141f519545fe53b422532c79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseuser.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateUser/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateUser/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateUser/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />  
        <!--//theme-style-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"keywords\" content=\"Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!---->
        <link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
        
        <!-- JavaScript -->
        
        <!-- start-smoth-scrolling -->
                <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateUser/js/move-top.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateUser/js/easing.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\">
                    jQuery(document).ready(function(\$) {
                        \$(\".scroll\").click(function(event){     
                            event.preventDefault();
                            \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
                        });
                    });
                </script>
            <!-- start-smoth-scrolling -->
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateUser/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateUser/css/component.css"), "html", null, true);
        echo "\" />
            <!-- animation-effect -->
        <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateUser/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateUser/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script>
         new WOW().init();
        </script>
        <!-- //animation-effect -->


        ";
        // line 50
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 51
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>
    </head>

    <body>
    <div class=\"header head\">
            <div class=\"container\">
                <div class=\"logo animated wow pulse\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h1><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("App_user_homepage");
        echo "\"><span>Eat&Fit</span></h1>

                </div>
                <div class=\"nav-icon\">      
                    <a href=\"#\" class=\"navicon\"></a>
                        <div class=\"toggle\">
                            <ul class=\"toggle-menu\">
                                <li><a class=\"active\" href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("App_user_homepage");
        echo "\">Home</a></li>
                                <li><a  href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("App_user_showBlog");
        echo "\">Blog</a></li>
                                ";
        // line 67
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 68
            echo "                                <li><a  href=\"";
            echo $this->env->getExtension('routing')->getPath("App_user_showServicio");
            echo "\">Servicio</a></li>
                                ";
        }
        // line 70
        echo "                                <li><a  href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_listForo");
        echo "\">Foro</a></li>
                                <li><a  href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("App_user_contacto");
        echo "\">Contacto</a></li>
                                ";
        // line 72
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 73
            echo "                                <li><a  href=\"";
            echo $this->env->getExtension('routing')->getPath("App_admin_homepage");
            echo "\">Admin</a></li>
                                ";
        }
        // line 75
        echo "                                <li><a  href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_PYR");
        echo "\">P y R</a></li>
                                ";
        // line 76
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 77
            echo "                                <li><a  href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a></li>
                                ";
        } else {
            // line 79
            echo "                                <li><a  href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                                ";
        }
        // line 81
        echo "

                            </ul>
                        </div>
                        <script>
                            \$('.navicon').on('click', function (e) {
                              e.preventDefault();
                              \$(this).toggleClass('navicon--active');
                              \$('.toggle').toggleClass('toggle--active');
                            });
                        </script>
                </div>
                <div class=\"clearfix\"></div>
            </div>   
        ";
        // line 95
        $this->displayBlock('head', $context, $blocks);
        echo " 
    </div>

    <!--Main body-->
    ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "    
    <!--footer-->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"footer-head\">
                <div class=\"col-md-8 footer-top animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <ul class=\" in\">
                        <li><a class=\"active\" href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("App_user_homepage");
        echo "\">Home</a></li>
                        <li><a  href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("App_user_showBlog");
        echo "\">Blog</a></li>
                        ";
        // line 109
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 110
            echo "                        <li><a  href=\"";
            echo $this->env->getExtension('routing')->getPath("App_user_showServicio");
            echo "\">Servicio</a></li>
                        ";
        }
        // line 112
        echo "                        <li><a  href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_listForo");
        echo "\">Foro</a></li>
                        <li><a  href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("App_user_contacto");
        echo "\">Contacto</a></li>
                    </ul>                   
                        <span>Calidad+Variedad+Salud</span>
                </div>
                <div class=\"col-md-4 footer-bottom  animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h2>Síguenos</h2>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <p>Parte de la experiencia Eat&Fit puedes unirte al grupo de Facebook en el cuál se publicarán las nuevas recetas, menús, y técnicas necesarias para mejorar poco a poco en el mundo de la cocina saludable</p>
                    <ul class=\"social-ic\">
                        <li><a href=\"https://www.facebook.com/groups/1675328119358753/\"><i class=\"ic3\"></i></a></li>
                    </ul>

                </div>
            <div class=\"clearfix\"> </div>
                    
            </div>
            <p class=\"footer-class animated wow bounce\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">&copy; 2016-2017 Eat&Fit |  <a href=\"https://es.linkedin.com/in/enekobengoa\" target=\"_blank\">Eneko Bengoa San Sebastián</a> </p>
        </div>
    </div>      
    <!--//footer-->
        <script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 134
        $this->displayBlock('javascripts', $context, $blocks);
        // line 135
        echo "    </body>
</html>";
        
        $__internal_4e5cda4ed06926dc91f8cec94ca7ab06cb2f18a141f519545fe53b422532c79d->leave($__internal_4e5cda4ed06926dc91f8cec94ca7ab06cb2f18a141f519545fe53b422532c79d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f82fd1e4e3b69c5693bef19f69786490d7cab2a2662fb293ac533b45243179e5 = $this->env->getExtension("native_profiler");
        $__internal_f82fd1e4e3b69c5693bef19f69786490d7cab2a2662fb293ac533b45243179e5->enter($__internal_f82fd1e4e3b69c5693bef19f69786490d7cab2a2662fb293ac533b45243179e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_f82fd1e4e3b69c5693bef19f69786490d7cab2a2662fb293ac533b45243179e5->leave($__internal_f82fd1e4e3b69c5693bef19f69786490d7cab2a2662fb293ac533b45243179e5_prof);

    }

    // line 50
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6baa01bcad22297e96779ad2068bc8d112111531a8f6928eb3cd3daa6a6fdeae = $this->env->getExtension("native_profiler");
        $__internal_6baa01bcad22297e96779ad2068bc8d112111531a8f6928eb3cd3daa6a6fdeae->enter($__internal_6baa01bcad22297e96779ad2068bc8d112111531a8f6928eb3cd3daa6a6fdeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6baa01bcad22297e96779ad2068bc8d112111531a8f6928eb3cd3daa6a6fdeae->leave($__internal_6baa01bcad22297e96779ad2068bc8d112111531a8f6928eb3cd3daa6a6fdeae_prof);

    }

    // line 95
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cabdffdaf21070795f8570b220c0815d4edc411b4613e7e504903a74207b6e4 = $this->env->getExtension("native_profiler");
        $__internal_9cabdffdaf21070795f8570b220c0815d4edc411b4613e7e504903a74207b6e4->enter($__internal_9cabdffdaf21070795f8570b220c0815d4edc411b4613e7e504903a74207b6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9cabdffdaf21070795f8570b220c0815d4edc411b4613e7e504903a74207b6e4->leave($__internal_9cabdffdaf21070795f8570b220c0815d4edc411b4613e7e504903a74207b6e4_prof);

    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        $__internal_63cf5ff4f6b719615a9be5fe489b1494b881d9285a5c389d0ec015349b6d75e7 = $this->env->getExtension("native_profiler");
        $__internal_63cf5ff4f6b719615a9be5fe489b1494b881d9285a5c389d0ec015349b6d75e7->enter($__internal_63cf5ff4f6b719615a9be5fe489b1494b881d9285a5c389d0ec015349b6d75e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63cf5ff4f6b719615a9be5fe489b1494b881d9285a5c389d0ec015349b6d75e7->leave($__internal_63cf5ff4f6b719615a9be5fe489b1494b881d9285a5c389d0ec015349b6d75e7_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1e24b37da40743e35ba3ff6506c5cf787163c51fb29bad639d5f94b40f80f4a = $this->env->getExtension("native_profiler");
        $__internal_b1e24b37da40743e35ba3ff6506c5cf787163c51fb29bad639d5f94b40f80f4a->enter($__internal_b1e24b37da40743e35ba3ff6506c5cf787163c51fb29bad639d5f94b40f80f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b1e24b37da40743e35ba3ff6506c5cf787163c51fb29bad639d5f94b40f80f4a->leave($__internal_b1e24b37da40743e35ba3ff6506c5cf787163c51fb29bad639d5f94b40f80f4a_prof);

    }

    public function getTemplateName()
    {
        return "baseuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 134,  315 => 99,  304 => 95,  293 => 50,  281 => 5,  273 => 135,  271 => 134,  267 => 133,  244 => 113,  239 => 112,  233 => 110,  231 => 109,  227 => 108,  223 => 107,  214 => 100,  212 => 99,  205 => 95,  189 => 81,  183 => 79,  177 => 77,  175 => 76,  170 => 75,  164 => 73,  162 => 72,  158 => 71,  153 => 70,  147 => 68,  145 => 67,  141 => 66,  137 => 65,  127 => 58,  116 => 51,  114 => 50,  104 => 43,  100 => 42,  95 => 40,  91 => 39,  78 => 29,  74 => 28,  66 => 23,  54 => 14,  49 => 12,  43 => 9,  38 => 7,  33 => 5,  27 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Eat&Fit{% endblock %}</title>

        <link href=\"{{ asset('TemplateUser/css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type=\"text/javascript\" src=\"{{ asset('TemplateUser/js/jquery.min.js') }}\"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href=\"{{ asset('TemplateUser/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />  
        <!--//theme-style-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/font-awesome.min.css') }}\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"keywords\" content=\"Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!---->
        <link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />
        
        <!-- JavaScript -->
        
        <!-- start-smoth-scrolling -->
                <script type=\"text/javascript\" src=\"{{ asset('TemplateUser/js/move-top.js') }}\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('TemplateUser/js/easing.js') }}\"></script>
                <script type=\"text/javascript\">
                    jQuery(document).ready(function(\$) {
                        \$(\".scroll\").click(function(event){     
                            event.preventDefault();
                            \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
                        });
                    });
                </script>
            <!-- start-smoth-scrolling -->
        <link href=\"{{ asset('TemplateUser/css/styles.css') }}\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateUser/css/component.css') }}\" />
            <!-- animation-effect -->
        <link href=\"{{ asset('TemplateUser/css/animate.min.css') }}\" rel=\"stylesheet\"> 
        <script src=\"{{ asset('TemplateUser/js/wow.min.js') }}\"></script>
        <script>
         new WOW().init();
        </script>
        <!-- //animation-effect -->


        {% block stylesheets %}{% endblock %}
        <script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>
    </head>

    <body>
    <div class=\"header head\">
            <div class=\"container\">
                <div class=\"logo animated wow pulse\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h1><a href=\"{{ path('App_user_homepage')}}\"><span>Eat&Fit</span></h1>

                </div>
                <div class=\"nav-icon\">      
                    <a href=\"#\" class=\"navicon\"></a>
                        <div class=\"toggle\">
                            <ul class=\"toggle-menu\">
                                <li><a class=\"active\" href=\"{{ path('App_user_homepage') }}\">Home</a></li>
                                <li><a  href=\"{{ path('App_user_showBlog') }}\">Blog</a></li>
                                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <li><a  href=\"{{ path('App_user_showServicio') }}\">Servicio</a></li>
                                {% endif %}
                                <li><a  href=\"{{ path('App_user_listForo') }}\">Foro</a></li>
                                <li><a  href=\"{{ path('App_user_contacto') }}\">Contacto</a></li>
                                {% if is_granted(\"ROLE_ADMIN\") %}
                                <li><a  href=\"{{ path('App_admin_homepage') }}\">Admin</a></li>
                                {% endif %}
                                <li><a  href=\"{{ path('App_user_PYR') }}\">P y R</a></li>
                                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <li><a  href=\"{{ path('fos_user_security_logout') }}\">Logout</a></li>
                                {% else %}
                                <li><a  href=\"{{ path('fos_user_security_login') }}\">Login</a></li>
                                {% endif %}


                            </ul>
                        </div>
                        <script>
                            \$('.navicon').on('click', function (e) {
                              e.preventDefault();
                              \$(this).toggleClass('navicon--active');
                              \$('.toggle').toggleClass('toggle--active');
                            });
                        </script>
                </div>
                <div class=\"clearfix\"></div>
            </div>   
        {% block head %}{% endblock %} 
    </div>

    <!--Main body-->
    {% block body %}{% endblock %}
    
    <!--footer-->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"footer-head\">
                <div class=\"col-md-8 footer-top animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <ul class=\" in\">
                        <li><a class=\"active\" href=\"{{ path('App_user_homepage') }}\">Home</a></li>
                        <li><a  href=\"{{ path('App_user_showBlog') }}\">Blog</a></li>
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        <li><a  href=\"{{ path('App_user_showServicio') }}\">Servicio</a></li>
                        {% endif %}
                        <li><a  href=\"{{ path('App_user_listForo') }}\">Foro</a></li>
                        <li><a  href=\"{{ path('App_user_contacto') }}\">Contacto</a></li>
                    </ul>                   
                        <span>Calidad+Variedad+Salud</span>
                </div>
                <div class=\"col-md-4 footer-bottom  animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h2>Síguenos</h2>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <p>Parte de la experiencia Eat&Fit puedes unirte al grupo de Facebook en el cuál se publicarán las nuevas recetas, menús, y técnicas necesarias para mejorar poco a poco en el mundo de la cocina saludable</p>
                    <ul class=\"social-ic\">
                        <li><a href=\"https://www.facebook.com/groups/1675328119358753/\"><i class=\"ic3\"></i></a></li>
                    </ul>

                </div>
            <div class=\"clearfix\"> </div>
                    
            </div>
            <p class=\"footer-class animated wow bounce\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">&copy; 2016-2017 Eat&Fit |  <a href=\"https://es.linkedin.com/in/enekobengoa\" target=\"_blank\">Eneko Bengoa San Sebastián</a> </p>
        </div>
    </div>      
    <!--//footer-->
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/bootstrap.min.js') }}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>";
    }
}
