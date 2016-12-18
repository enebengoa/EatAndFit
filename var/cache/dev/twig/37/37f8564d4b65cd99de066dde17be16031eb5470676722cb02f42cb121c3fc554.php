<?php

/* ::baseadmin.html.twig */
class __TwigTemplate_3468a34faf67be1aa9f4966949c825d9ab810489a36b373ca571a002650573af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29b3d6db9a37a80cf603a819ddbe3c45837115fa1a85de0c277abb1577ca9f05 = $this->env->getExtension("native_profiler");
        $__internal_29b3d6db9a37a80cf603a819ddbe3c45837115fa1a85de0c277abb1577ca9f05->enter($__internal_29b3d6db9a37a80cf603a819ddbe3c45837115fa1a85de0c277abb1577ca9f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseadmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
            <title>Eat&Fit Admin</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/checkbox3.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/select2.min.css"), "html", null, true);
        echo "\">\"
    <!-- CSS App -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/css/themes/flat-blue.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs-3.3.6/dt-1.10.12/r-2.1.0/datatables.min.css\"/>
     <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body class=\"flat-blue\">
    <div class=\"app-container\">
        <div class=\"row content-container\">
            <nav class=\"navbar navbar-default navbar-fixed-top navbar-top\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-expand-toggle\">
                            <i class=\"fa fa-bars icon\"></i>
                        </button>
                        <ol class=\"breadcrumb navbar-breadcrumb\">
                            <li class=\"active\">Dashboard</li>
                        </ol>
                        <button type=\"button\" class=\"navbar-right-expand-toggle pull-right visible-xs\">
                            <i class=\"fa fa-th icon\"></i>
                        </button>
                    </div>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <button type=\"button\" class=\"navbar-right-expand-toggle pull-right visible-xs\">
                            <i class=\"fa fa-times icon\"></i>
                        </button>
                        <li class=\"dropdown profile\">
                            ";
        // line 45
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 46
            echo "                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                            ";
        } else {
            // line 49
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 51
        echo "
                            ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 53
            echo "                                <ul class=\"dropdown-menu animated fadeInDown\">
                                    <li class=\"profile-img\">
                                        <img src=\"\" class=\"profile-img\">
                                    </li>
                                    <li>
                                        <div class=\"profile-info\">
                                            <h4 class=\"username\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</h4>
                                            <div class=\"btn-group margin-bottom-2x\" role=\"group\">
                                                <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\" class=\"btn btn-default\" class=\"fa fa-user\">Profile</a>
                                                <a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\" class=\"btn btn-default\" class=\"fa fa-user\">Password</a>
                                                <a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-default\">
                                                Logout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            ";
        }
        // line 70
        echo "                        </li>
                    </ul>
                </div>
            </nav>
            <div class=\"side-menu sidebar-inverse\">
                <nav class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"side-menu-container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("App_user_homepage");
        echo "\">
                                <div class=\"icon fa fa-cutlery\"></div>
                                <div class=\"title\">Eat&Fit</div>
                            </a>
                            <button type=\"button\" class=\"navbar-expand-toggle pull-right visible-xs\">
                                <i class=\"fa fa-times icon\"></i>
                            </button>
                        </div>
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\">
                                <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("App_admin_homepage");
        echo "\">
                                    <span class=\"icon fa fa-tachometer\"></span><span class=\"title\">Dashboard</span>
                                </a>
                            </li>
                             <li class=\"panel panel-default dropdown\">
                                <a data-toggle=\"collapse\" href=\"#dropdown-a\">
                                    <span class=\"icon fa fa-desktop\"></span><span class=\"title\">Blog</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id=\"dropdown-a\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                        <ul class=\"nav navbar-nav\">
                                            <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("App_admin_listIngrediente");
        echo "\">Ingredientes</a>
                                            </li>
                                            <li><a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("App_admin_listTipoReceta");
        echo "\">Tipos de recetas</a>
                                            </li>
                                            <li><a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("App_admin_listHoraIngesta");
        echo "\">Horas de ingesta</a>
                                            </li>
                                            <li><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("App_admin_listUtensilio");
        echo "\">Utensilios</a>
                                            </li>
                                            <li><a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("App_admin_listTecnica");
        echo "\">Técnicas</a>
                                            </li>
                                            <li><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("App_admin_listReceta");
        echo "\">Recetas</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class=\"panel panel-default dropdown\">
                                <a data-toggle=\"collapse\" href=\"#dropdown-g\">
                                    <span class=\"icon glyphicon glyphicon-comment\"></span><span class=\"title\">Servicios</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id=\"dropdown-g\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                        <ul class=\"nav navbar-nav\">
                                            <li><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("App_admin_listMenu");
        echo "\">Menús</a>
                                            </li>
                                            <li><a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("App_admin_listLista");
        echo "\">Listas</a>
                                            </li>
                                            <li><a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("App_admin_listTemaForo");
        echo "\">Foros</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class=\"panel panel-default dropdown\">
                                <a data-toggle=\"collapse\" href=\"#dropdown-h\">
                                    <span class=\"icon glyphicon glyphicon-user\"></span><span class=\"title\">Usuarios</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id=\"dropdown-h\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                        <ul class=\"nav navbar-nav\">
                                            <li><a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("App_admin_listUsuario");
        echo "\">Listar usuarios</a>
                                            </li>
                                            <li><a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("App_admin_sendEmail");
        echo "\">Enviar newsletter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- Main Content -->
            <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"row\">
                      ";
        // line 160
        $this->displayBlock('body', $context, $blocks);
        echo "  
                    </div> 
                </div>
            </div>
            <footer class=\"app-footer\">
            <div class=\"wrapper\">
                <span class=\"pull-right\">Eat&Fit <a href=\"#\"><i class=\"fa fa-cutlery\"></i></a></span> © 2016-2017 PFG Eneko Bengoa 
            </div>
        </footer>
        </div>

                    <!-- Javascript Libs -->
        <script type=\"text/javascript\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/jquery.matchHeight-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/ace/mode-html.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/ace/theme-github.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/js/app.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 184
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "    </body>
</html>
";
        
        $__internal_29b3d6db9a37a80cf603a819ddbe3c45837115fa1a85de0c277abb1577ca9f05->leave($__internal_29b3d6db9a37a80cf603a819ddbe3c45837115fa1a85de0c277abb1577ca9f05_prof);

    }

    // line 160
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ca5a76a72e32953c28a9d627796f07f190e9e440e3a5ddd554297666b2c05f0 = $this->env->getExtension("native_profiler");
        $__internal_9ca5a76a72e32953c28a9d627796f07f190e9e440e3a5ddd554297666b2c05f0->enter($__internal_9ca5a76a72e32953c28a9d627796f07f190e9e440e3a5ddd554297666b2c05f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9ca5a76a72e32953c28a9d627796f07f190e9e440e3a5ddd554297666b2c05f0->leave($__internal_9ca5a76a72e32953c28a9d627796f07f190e9e440e3a5ddd554297666b2c05f0_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd68b3720ace343bc16d0b8ad6ba012ba333b2aaa6290e926ca1e3c0b18af9ca = $this->env->getExtension("native_profiler");
        $__internal_fd68b3720ace343bc16d0b8ad6ba012ba333b2aaa6290e926ca1e3c0b18af9ca->enter($__internal_fd68b3720ace343bc16d0b8ad6ba012ba333b2aaa6290e926ca1e3c0b18af9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fd68b3720ace343bc16d0b8ad6ba012ba333b2aaa6290e926ca1e3c0b18af9ca->leave($__internal_fd68b3720ace343bc16d0b8ad6ba012ba333b2aaa6290e926ca1e3c0b18af9ca_prof);

    }

    public function getTemplateName()
    {
        return "::baseadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 184,  359 => 160,  350 => 185,  348 => 184,  344 => 183,  340 => 182,  336 => 181,  332 => 180,  328 => 179,  324 => 178,  320 => 177,  316 => 176,  312 => 175,  308 => 174,  304 => 173,  300 => 172,  285 => 160,  267 => 145,  262 => 143,  245 => 129,  240 => 127,  235 => 125,  217 => 110,  212 => 108,  207 => 106,  202 => 104,  197 => 102,  192 => 100,  177 => 88,  164 => 78,  154 => 70,  144 => 63,  140 => 62,  136 => 61,  131 => 59,  123 => 53,  121 => 52,  118 => 51,  110 => 49,  105 => 47,  102 => 46,  100 => 45,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  40 => 12,  36 => 11,  24 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
            <title>Eat&Fit Admin</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/animate.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/bootstrap-switch.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/checkbox3.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/select2.min.css') }}\">\"
    <!-- CSS App -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/css/style.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/css/themes/flat-blue.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs-3.3.6/dt-1.10.12/r-2.1.0/datatables.min.css\"/>
     <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/jquery.min.js') }}\"></script>
    </head>
    <body class=\"flat-blue\">
    <div class=\"app-container\">
        <div class=\"row content-container\">
            <nav class=\"navbar navbar-default navbar-fixed-top navbar-top\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-expand-toggle\">
                            <i class=\"fa fa-bars icon\"></i>
                        </button>
                        <ol class=\"breadcrumb navbar-breadcrumb\">
                            <li class=\"active\">Dashboard</li>
                        </ol>
                        <button type=\"button\" class=\"navbar-right-expand-toggle pull-right visible-xs\">
                            <i class=\"fa fa-th icon\"></i>
                        </button>
                    </div>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <button type=\"button\" class=\"navbar-right-expand-toggle pull-right visible-xs\">
                            <i class=\"fa fa-times icon\"></i>
                        </button>
                        <li class=\"dropdown profile\">
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} <span class=\"caret\"></span></a>
                            {% else %}
                                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                            {% endif %}

                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <ul class=\"dropdown-menu animated fadeInDown\">
                                    <li class=\"profile-img\">
                                        <img src=\"\" class=\"profile-img\">
                                    </li>
                                    <li>
                                        <div class=\"profile-info\">
                                            <h4 class=\"username\">{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}</h4>
                                            <div class=\"btn-group margin-bottom-2x\" role=\"group\">
                                                <a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-default\" class=\"fa fa-user\">Profile</a>
                                                <a href=\"{{ path('fos_user_change_password') }}\" class=\"btn btn-default\" class=\"fa fa-user\">Password</a>
                                                <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-default\">
                                                Logout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            {% endif %}
                        </li>
                    </ul>
                </div>
            </nav>
            <div class=\"side-menu sidebar-inverse\">
                <nav class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"side-menu-container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"{{ path('App_user_homepage')}}\">
                                <div class=\"icon fa fa-cutlery\"></div>
                                <div class=\"title\">Eat&Fit</div>
                            </a>
                            <button type=\"button\" class=\"navbar-expand-toggle pull-right visible-xs\">
                                <i class=\"fa fa-times icon\"></i>
                            </button>
                        </div>
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\">
                                <a href=\"{{ path('App_admin_homepage')}}\">
                                    <span class=\"icon fa fa-tachometer\"></span><span class=\"title\">Dashboard</span>
                                </a>
                            </li>
                             <li class=\"panel panel-default dropdown\">
                                <a data-toggle=\"collapse\" href=\"#dropdown-a\">
                                    <span class=\"icon fa fa-desktop\"></span><span class=\"title\">Blog</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id=\"dropdown-a\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                        <ul class=\"nav navbar-nav\">
                                            <li><a href=\"{{ path('App_admin_listIngrediente')}}\">Ingredientes</a>
                                            </li>
                                            <li><a href=\"{{ path('App_admin_listTipoReceta')}}\">Tipos de recetas</a>
                                            </li>
                                            <li><a href=\"{{ path('App_admin_listHoraIngesta')}}\">Horas de ingesta</a>
                                            </li>
                                            <li><a href=\"{{ path('App_admin_listUtensilio')}}\">Utensilios</a>
                                            </li>
                                            <li><a href=\"{{ path('App_admin_listTecnica')}}\">Técnicas</a>
                                            </li>
                                            <li><a href=\"{{ path('App_admin_listReceta')}}\">Recetas</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class=\"panel panel-default dropdown\">
                                <a data-toggle=\"collapse\" href=\"#dropdown-g\">
                                    <span class=\"icon glyphicon glyphicon-comment\"></span><span class=\"title\">Servicios</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id=\"dropdown-g\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                        <ul class=\"nav navbar-nav\">
                                            <li><a href=\"{{ path('App_admin_listMenu')}}\">Menús</a>
                                            </li>
                                            <li><a href=\"{{ path('App_admin_listLista')}}\">Listas</a>
                                            </li>
                                            <li><a href=\"{{ path('App_admin_listTemaForo')}}\">Foros</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class=\"panel panel-default dropdown\">
                                <a data-toggle=\"collapse\" href=\"#dropdown-h\">
                                    <span class=\"icon glyphicon glyphicon-user\"></span><span class=\"title\">Usuarios</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id=\"dropdown-h\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                        <ul class=\"nav navbar-nav\">
                                            <li><a href=\"{{ path('App_admin_listUsuario')}}\">Listar usuarios</a>
                                            </li>
                                            <li><a href=\"{{ path('App_admin_sendEmail')}}\">Enviar newsletter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- Main Content -->
            <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"row\">
                      {% block body %}{% endblock %}  
                    </div> 
                </div>
            </div>
            <footer class=\"app-footer\">
            <div class=\"wrapper\">
                <span class=\"pull-right\">Eat&Fit <a href=\"#\"><i class=\"fa fa-cutlery\"></i></a></span> © 2016-2017 PFG Eneko Bengoa 
            </div>
        </footer>
        </div>

                    <!-- Javascript Libs -->
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/Chart.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/bootstrap-switch.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/jquery.matchHeight-min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/jquery.dataTables.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/dataTables.bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/select2.full.min.js') }}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/ace/ace.js') }}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/ace/mode-html.js') }}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/ace/theme-github.js') }}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/js/app.js') }}\"></script>
         <script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
