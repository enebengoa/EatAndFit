<?php

/* @Admin/Dashboard/main.html.twig */
class __TwigTemplate_4043270b4a1fd438f541011a0271561576caa142ebe72d32f464ebf89a5d9db7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Dashboard/main.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_772ad76f43396836732b7468ab653cfb52f0a0daf077dae424bc3c7d18f9773a = $this->env->getExtension("native_profiler");
        $__internal_772ad76f43396836732b7468ab653cfb52f0a0daf077dae424bc3c7d18f9773a->enter($__internal_772ad76f43396836732b7468ab653cfb52f0a0daf077dae424bc3c7d18f9773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Dashboard/main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_772ad76f43396836732b7468ab653cfb52f0a0daf077dae424bc3c7d18f9773a->leave($__internal_772ad76f43396836732b7468ab653cfb52f0a0daf077dae424bc3c7d18f9773a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8a2426560fc68745a0f11d44eaa6535a6894287e3de7b3d867a30e8f589ffbd = $this->env->getExtension("native_profiler");
        $__internal_c8a2426560fc68745a0f11d44eaa6535a6894287e3de7b3d867a30e8f589ffbd->enter($__internal_c8a2426560fc68745a0f11d44eaa6535a6894287e3de7b3d867a30e8f589ffbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_c8a2426560fc68745a0f11d44eaa6535a6894287e3de7b3d867a30e8f589ffbd->leave($__internal_c8a2426560fc68745a0f11d44eaa6535a6894287e3de7b3d867a30e8f589ffbd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf9a842b91573fad812a5e6d4f9caaa70d949d5505073695c2bebaf273152b2f = $this->env->getExtension("native_profiler");
        $__internal_bf9a842b91573fad812a5e6d4f9caaa70d949d5505073695c2bebaf273152b2f->enter($__internal_bf9a842b91573fad812a5e6d4f9caaa70d949d5505073695c2bebaf273152b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_bf9a842b91573fad812a5e6d4f9caaa70d949d5505073695c2bebaf273152b2f->leave($__internal_bf9a842b91573fad812a5e6d4f9caaa70d949d5505073695c2bebaf273152b2f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_92295305df7ce5c0b6ee755ca971f384f9fe5c33240e2ae273b9a6aacc6cc957 = $this->env->getExtension("native_profiler");
        $__internal_92295305df7ce5c0b6ee755ca971f384f9fe5c33240e2ae273b9a6aacc6cc957->enter($__internal_92295305df7ce5c0b6ee755ca971f384f9fe5c33240e2ae273b9a6aacc6cc957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t            <div class=\"container-fluid\">
                <div class=\"side-body padding-top\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("App_admin_listUsuario");
        echo "\">
                                <div class=\"card blue summary-inline\">
                                    <div class=\"card-body\">
                                        <i class=\"icon glyphicon glyphicon-user fa-4x\"></i>
                                        <div class=\"content\">
                                            <div class=\"title\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")), "html", null, true);
        echo "</div>
                                            <div class=\"sub-title\">Usuarios</div>
                                        </div>
                                        <div class=\"clear-both\"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("App_admin_listReceta");
        echo "\">
                                <div class=\"card yellow summary-inline\">
                                    <div class=\"card-body\">
                                        <i class=\"icon fa fa-comments fa-4x\"></i>
                                        <div class=\"content\">
                                            <div class=\"title\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")), "html", null, true);
        echo "</div>
                                            <div class=\"sub-title\">Comentarios</div>
                                        </div>
                                        <div class=\"clear-both\"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("App_admin_listReceta");
        echo "\">
                                <div class=\"card green summary-inline\">
                                    <div class=\"card-body\">
                                        <i class=\"icon fa fa-cutlery fa-4x\"></i>
                                        <div class=\"content\">
                                            <div class=\"title\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["recetas"]) ? $context["recetas"] : $this->getContext($context, "recetas")), "html", null, true);
        echo "</div>
                                            <div class=\"sub-title\">Recetas</div>
                                        </div>
                                        <div class=\"clear-both\"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("App_admin_listLista");
        echo "\">
                                <div class=\"card red summary-inline\">
                                    <div class=\"card-body\">
                                        <i class=\"icon fa fa-inbox fa-4x\"></i>
                                        <div class=\"content\">
                                            <div class=\"title\">";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["listas"]) ? $context["listas"] : $this->getContext($context, "listas")), "html", null, true);
        echo "</div>
                                            <div class=\"sub-title\">Listas</div>
                                        </div>
                                        <div class=\"clear-both\"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"row  no-margin-bottom\">
                        <div class=\"col-sm-6 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"card primary\">
                                        <div class=\"card-jumbotron no-padding\">
                                            <div id=\"piechart\" ></div>
                                        </div>
                                        <div class=\"card-body half-padding\">
                                            <h4 class=\"float-left no-margin font-weight-300\">Ingredientes</h4>
                                            <h2 class=\"float-right no-margin font-weight-300\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["ingredientes"]) ? $context["ingredientes"] : $this->getContext($context, "ingredientes")), "html", null, true);
        echo "</h2>
                                            <div class=\"clear-both\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=\"col-sm-6 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"card primary\">
                                        <div class=\"card-jumbotron no-padding\">
                                            <div id=\"chart_div\"></div>
                                        </div>
                                        <div class=\"card-body half-padding\">
                                            <h4 class=\"float-left no-margin font-weight-300\">Menús</h4>
                                            <h2 class=\"float-right no-margin font-weight-300\">";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["menuss"]) ? $context["menuss"] : $this->getContext($context, "menuss")), "html", null, true);
        echo "</h2>
                                            <div class=\"clear-both\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
";
        
        $__internal_92295305df7ce5c0b6ee755ca971f384f9fe5c33240e2ae273b9a6aacc6cc957->leave($__internal_92295305df7ce5c0b6ee755ca971f384f9fe5c33240e2ae273b9a6aacc6cc957_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81595ba5450380272b6a28f75d0392eae388737c12f04d4289b9c208452d9a9c = $this->env->getExtension("native_profiler");
        $__internal_81595ba5450380272b6a28f75d0392eae388737c12f04d4289b9c208452d9a9c->enter($__internal_81595ba5450380272b6a28f75d0392eae388737c12f04d4289b9c208452d9a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "

      <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/graficos.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Ingrediente', 'Frecuencia'],
          ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 120
            echo "          ['";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "frecuencia", array()), "html", null, true);
            echo "],
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      \$(window).resize(function(){
      drawChart();
      drawChart2();
      drawStuff();
    });

    </script>

    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Fecha', 'Nº de Menús'],
          ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 148
            echo "          ['";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["menu"], "fechaCreacion", array()), "d-m-y"), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "frecuenciaMenus", array()), "html", null, true);
            echo "],
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "        ]);

        var options = {
          title: '',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Galaxy', 'Distance', 'Brightness'],
          ['Canis Major Dwarf', 8000, 23.3],
          ['Sagittarius Dwarf', 24000, 4.5],
          ['Ursa Major II Dwarf', 30000, 14.3],
          ['Lg. Magellanic Cloud', 50000, 0.9],
          ['Bootes I', 60000, 13.1]
        ]);

        var options = {
          width: 900,
          chart: {
            title: 'Nearby galaxies',
            subtitle: 'distance on the left, brightness on the right'
          },
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: 'parsecs'}, // Left y-axis.
              brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
            }
          }
        };

      var chart = new google.charts.Bar(document.getElementById('dual_y_div'));
      chart.draw(data, options);
    };
    </script>

";
        
        $__internal_81595ba5450380272b6a28f75d0392eae388737c12f04d4289b9c208452d9a9c->leave($__internal_81595ba5450380272b6a28f75d0392eae388737c12f04d4289b9c208452d9a9c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Dashboard/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 150,  277 => 148,  273 => 147,  246 => 122,  235 => 120,  231 => 119,  220 => 111,  216 => 109,  210 => 108,  192 => 96,  172 => 79,  150 => 60,  142 => 55,  130 => 46,  122 => 41,  110 => 32,  102 => 27,  90 => 18,  82 => 13,  76 => 9,  70 => 8,  58 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}
{% block stylesheets %}

{% block title %}Dashboard{% endblock%}
{{ parent() }}

{% endblock %}
{% block body %}
\t            <div class=\"container-fluid\">
                <div class=\"side-body padding-top\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                            <a href=\"{{path('App_admin_listUsuario') }}\">
                                <div class=\"card blue summary-inline\">
                                    <div class=\"card-body\">
                                        <i class=\"icon glyphicon glyphicon-user fa-4x\"></i>
                                        <div class=\"content\">
                                            <div class=\"title\">{{usuarios}}</div>
                                            <div class=\"sub-title\">Usuarios</div>
                                        </div>
                                        <div class=\"clear-both\"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                            <a href=\"{{path('App_admin_listReceta') }}\">
                                <div class=\"card yellow summary-inline\">
                                    <div class=\"card-body\">
                                        <i class=\"icon fa fa-comments fa-4x\"></i>
                                        <div class=\"content\">
                                            <div class=\"title\">{{comentarios}}</div>
                                            <div class=\"sub-title\">Comentarios</div>
                                        </div>
                                        <div class=\"clear-both\"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                            <a href=\"{{path('App_admin_listReceta') }}\">
                                <div class=\"card green summary-inline\">
                                    <div class=\"card-body\">
                                        <i class=\"icon fa fa-cutlery fa-4x\"></i>
                                        <div class=\"content\">
                                            <div class=\"title\">{{recetas}}</div>
                                            <div class=\"sub-title\">Recetas</div>
                                        </div>
                                        <div class=\"clear-both\"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                            <a href=\"{{path('App_admin_listLista') }}\">
                                <div class=\"card red summary-inline\">
                                    <div class=\"card-body\">
                                        <i class=\"icon fa fa-inbox fa-4x\"></i>
                                        <div class=\"content\">
                                            <div class=\"title\">{{listas}}</div>
                                            <div class=\"sub-title\">Listas</div>
                                        </div>
                                        <div class=\"clear-both\"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"row  no-margin-bottom\">
                        <div class=\"col-sm-6 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"card primary\">
                                        <div class=\"card-jumbotron no-padding\">
                                            <div id=\"piechart\" ></div>
                                        </div>
                                        <div class=\"card-body half-padding\">
                                            <h4 class=\"float-left no-margin font-weight-300\">Ingredientes</h4>
                                            <h2 class=\"float-right no-margin font-weight-300\">{{ingredientes}}</h2>
                                            <div class=\"clear-both\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=\"col-sm-6 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"card primary\">
                                        <div class=\"card-jumbotron no-padding\">
                                            <div id=\"chart_div\"></div>
                                        </div>
                                        <div class=\"card-body half-padding\">
                                            <h4 class=\"float-left no-margin font-weight-300\">Menús</h4>
                                            <h2 class=\"float-right no-margin font-weight-300\">{{menuss}}</h2>
                                            <div class=\"clear-both\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
{% endblock %}

{% block javascripts %}


      <script type=\"text/javascript\" src=\"{{ asset('js/graficos.js') }}\"></script>
    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Ingrediente', 'Frecuencia'],
          {%for ingrediente in entidad %}
          ['{{ingrediente.nombre}}', {{ingrediente.frecuencia}}],
          {% endfor %}
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      \$(window).resize(function(){
      drawChart();
      drawChart2();
      drawStuff();
    });

    </script>

    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Fecha', 'Nº de Menús'],
          {%for menu in menus %}
          ['{{menu.fechaCreacion|date('d-m-y')}}', {{menu.frecuenciaMenus}}],
          {% endfor %}
        ]);

        var options = {
          title: '',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Galaxy', 'Distance', 'Brightness'],
          ['Canis Major Dwarf', 8000, 23.3],
          ['Sagittarius Dwarf', 24000, 4.5],
          ['Ursa Major II Dwarf', 30000, 14.3],
          ['Lg. Magellanic Cloud', 50000, 0.9],
          ['Bootes I', 60000, 13.1]
        ]);

        var options = {
          width: 900,
          chart: {
            title: 'Nearby galaxies',
            subtitle: 'distance on the left, brightness on the right'
          },
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: 'parsecs'}, // Left y-axis.
              brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
            }
          }
        };

      var chart = new google.charts.Bar(document.getElementById('dual_y_div'));
      chart.draw(data, options);
    };
    </script>

{% endblock %}";
    }
}
