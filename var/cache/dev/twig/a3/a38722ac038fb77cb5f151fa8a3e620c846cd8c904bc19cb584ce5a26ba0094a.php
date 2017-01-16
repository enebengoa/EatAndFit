<?php

/* AdminBundle:Dashboard:main.html.twig */
class __TwigTemplate_f3fc1bda23267334ed8b9c42c90bd2c4e0e895de93317810d4ddcc83a55488ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Dashboard:main.html.twig", 1);
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
        $__internal_8cd718a14cfe7c45f859870bf959418ca33286db38618d9cb3bc46f1a047a62b = $this->env->getExtension("native_profiler");
        $__internal_8cd718a14cfe7c45f859870bf959418ca33286db38618d9cb3bc46f1a047a62b->enter($__internal_8cd718a14cfe7c45f859870bf959418ca33286db38618d9cb3bc46f1a047a62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Dashboard:main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd718a14cfe7c45f859870bf959418ca33286db38618d9cb3bc46f1a047a62b->leave($__internal_8cd718a14cfe7c45f859870bf959418ca33286db38618d9cb3bc46f1a047a62b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b97cfd5029f39d9b7d465f52733e9fd26cd0b9d4864e2d1776ed9eadfbe36e8e = $this->env->getExtension("native_profiler");
        $__internal_b97cfd5029f39d9b7d465f52733e9fd26cd0b9d4864e2d1776ed9eadfbe36e8e->enter($__internal_b97cfd5029f39d9b7d465f52733e9fd26cd0b9d4864e2d1776ed9eadfbe36e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_b97cfd5029f39d9b7d465f52733e9fd26cd0b9d4864e2d1776ed9eadfbe36e8e->leave($__internal_b97cfd5029f39d9b7d465f52733e9fd26cd0b9d4864e2d1776ed9eadfbe36e8e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_387dba15ab302980fc6eac4f3d7c48632ea90688ac9957b31a981e460be0384b = $this->env->getExtension("native_profiler");
        $__internal_387dba15ab302980fc6eac4f3d7c48632ea90688ac9957b31a981e460be0384b->enter($__internal_387dba15ab302980fc6eac4f3d7c48632ea90688ac9957b31a981e460be0384b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_387dba15ab302980fc6eac4f3d7c48632ea90688ac9957b31a981e460be0384b->leave($__internal_387dba15ab302980fc6eac4f3d7c48632ea90688ac9957b31a981e460be0384b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_41f09aa1a1e9ec1af5440467ffb9afde82b8b67c94a691b73d3ff7738dfa53f8 = $this->env->getExtension("native_profiler");
        $__internal_41f09aa1a1e9ec1af5440467ffb9afde82b8b67c94a691b73d3ff7738dfa53f8->enter($__internal_41f09aa1a1e9ec1af5440467ffb9afde82b8b67c94a691b73d3ff7738dfa53f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41f09aa1a1e9ec1af5440467ffb9afde82b8b67c94a691b73d3ff7738dfa53f8->leave($__internal_41f09aa1a1e9ec1af5440467ffb9afde82b8b67c94a691b73d3ff7738dfa53f8_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9e6aec166193903f941161e5e4583380300dddb4394f6298578f46e05624daf = $this->env->getExtension("native_profiler");
        $__internal_b9e6aec166193903f941161e5e4583380300dddb4394f6298578f46e05624daf->enter($__internal_b9e6aec166193903f941161e5e4583380300dddb4394f6298578f46e05624daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b9e6aec166193903f941161e5e4583380300dddb4394f6298578f46e05624daf->leave($__internal_b9e6aec166193903f941161e5e4583380300dddb4394f6298578f46e05624daf_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Dashboard:main.html.twig";
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
