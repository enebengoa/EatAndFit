<?php

/* UserBundle:Home:main.html.twig */
class __TwigTemplate_58e3ae7f4c5067ef68f393f7e6307f0605c8710ebfa6c0d0055afcf5aa5341bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "UserBundle:Home:main.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b80b9adebf279389f72b7a026361a2abb91196d3cb27f5535f3a97a7a2a0dfbd = $this->env->getExtension("native_profiler");
        $__internal_b80b9adebf279389f72b7a026361a2abb91196d3cb27f5535f3a97a7a2a0dfbd->enter($__internal_b80b9adebf279389f72b7a026361a2abb91196d3cb27f5535f3a97a7a2a0dfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Home:main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b80b9adebf279389f72b7a026361a2abb91196d3cb27f5535f3a97a7a2a0dfbd->leave($__internal_b80b9adebf279389f72b7a026361a2abb91196d3cb27f5535f3a97a7a2a0dfbd_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a652fc3c51bca4412f0d2b93886070272d26a418b023a1ef47fd4a7e22c5ea9 = $this->env->getExtension("native_profiler");
        $__internal_4a652fc3c51bca4412f0d2b93886070272d26a418b023a1ef47fd4a7e22c5ea9->enter($__internal_4a652fc3c51bca4412f0d2b93886070272d26a418b023a1ef47fd4a7e22c5ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_4a652fc3c51bca4412f0d2b93886070272d26a418b023a1ef47fd4a7e22c5ea9->leave($__internal_4a652fc3c51bca4412f0d2b93886070272d26a418b023a1ef47fd4a7e22c5ea9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdb9e2c1e273967fbc04005f44a1562a51d5822fef466d1ac3df331a648e619e = $this->env->getExtension("native_profiler");
        $__internal_bdb9e2c1e273967fbc04005f44a1562a51d5822fef466d1ac3df331a648e619e->enter($__internal_bdb9e2c1e273967fbc04005f44a1562a51d5822fef466d1ac3df331a648e619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_bdb9e2c1e273967fbc04005f44a1562a51d5822fef466d1ac3df331a648e619e->leave($__internal_bdb9e2c1e273967fbc04005f44a1562a51d5822fef466d1ac3df331a648e619e_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_01f602f97b1a5e0d207882e99029d9c91e7ad3580597c0b1f45067d1e9e968b5 = $this->env->getExtension("native_profiler");
        $__internal_01f602f97b1a5e0d207882e99029d9c91e7ad3580597c0b1f45067d1e9e968b5->enter($__internal_01f602f97b1a5e0d207882e99029d9c91e7ad3580597c0b1f45067d1e9e968b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t<div class=\"banner\">
        <p class=\"animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">Para tener un cuerpo saludable es esencial comer saludable</p>
        <label></label>
        <h4 class=\"animated wow fadeInTop\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">Calidad + Variedad + Salud</h4>
        <a class=\"scroll down\" href=\"#content-down\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateUser/images/down.png"), "html", null, true);
        echo "\" alt=\"\"></a>
    </div>
    <br></br>\t
";
        
        $__internal_01f602f97b1a5e0d207882e99029d9c91e7ad3580597c0b1f45067d1e9e968b5->leave($__internal_01f602f97b1a5e0d207882e99029d9c91e7ad3580597c0b1f45067d1e9e968b5_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_58a2ff8f7289fd86434c700cfeea4ad48f8232334df3a378a2dc3d857abafcbb = $this->env->getExtension("native_profiler");
        $__internal_58a2ff8f7289fd86434c700cfeea4ad48f8232334df3a378a2dc3d857abafcbb->enter($__internal_58a2ff8f7289fd86434c700cfeea4ad48f8232334df3a378a2dc3d857abafcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "<!--content-->
<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
            <div class=\"content-top\">
                <div class=\"col-md-4 content-left animated wow fadeInLeft\" data-wow-duration=\"100ms\" data-wow-delay=\"500ms\">
                    <h3>Blog</h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span>Existe una gran variedad</span>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"content-mid\">
                <a  href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("App_user_listReceta");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\" >
                        <div class=\" hover-fold\">
                          <h4>RECETAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>Hay una gran variedad de recetas disponibles que se adaptan a tus gustos y necesidades </p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("App_user_listUtensilio");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>UTENSILIOS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de utensilios que te ayudarán a realizar tus recetas eficiente y eficazmente</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("App_user_listTecnica");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>TÉCNICAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de técnicas que te ayudarán a obtener las habilidades culinarias necesarias para iniciarte en el mundo de la comida saludable</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
<!--services-->
";
        // line 74
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 75
            echo "<div class=\"services\">
    <div class=\"container\">
        <div class=\"services-top\">      
            <div class=\"col-md-8 services-right animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <p>A través de Eat&Fit va a ser capaz de  crear diferentes menús personalizados a tus necesidades y gustos los cuales podrás agregar a una lista de supermercado virtual la cuál te ayudará a realizar tu compra facilmente, y al mismo tiempo podrá consultar cualquier duda existente tanto a diferentes expertos en la materia de nutrición como a los otros usuarios a través de un foro interactivo</p>
            </div>
            <div class=\"col-md-4 services-left animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                <h3>Servicios</h3>
                <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                <span>Pensados para tí</span>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"service-top\">
            <div class=\"content-mid\">
                <a  href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("App_user_listForo");
            echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>FORO</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>En caso de que tengas una duda que quieras compartir con el resto de usuarios podrás crear nuevos temas para el foro para lograr así obtener diferentes respuestas a la duda planteada</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
            // line 102
            echo $this->env->getExtension('routing')->getPath("App_user_listMenu");
            echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>MENÚ</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Con las diferentes recetas disponibles serás capaz de crear menús totalmente personalizados a tus necesidades</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("App_user_listForo");
            echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>LISTA DE COMPRA</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Por último, a través de esta herramienta serás capaz de crear diferentes listas de mercado conformada por los ingredientes de las recetas y menús seleccionados</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>
";
        } else {
            // line 132
            echo "<div class=\"services\">
    <div class=\"container\">
        <div class=\"services-top\">      
            <div class=\"col-md-8 services-right animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <p>A través de Eat&Fit va a ser capaz de  crear diferentes menús personalizados a tus necesidades y gustos los cuales podrás agregar a una lista de supermercado virtual la cuál te ayudará a realizar tu compra facilmente, y al mismo tiempo podrá consultar cualquier duda existente tanto a diferentes expertos en la materia de nutrición como a los otros usuarios a través de un foro interactivo</p>
            </div>
            <div class=\"col-md-4 services-left animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                <h3>Servicios</h3>
                <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                <span>Pensados para tí</span>
                </br>
                </br>
                <a class=\"btn btn-lg btn-success\" href=\"";
            // line 144
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login para utilizar servicios</a>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
</div>
";
        }
        // line 151
        echo "<!--//services-->
<!--news-->
    <div class=\"content-top-top\">
        <div class=\"container\">
            <div class=\"content-top\">
                <div class=\"col-md-4 content-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3>Top recetas</h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span>¿Qué opinan los usuarios?</span>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"news-bottom\"> 
                ";
        // line 164
        $context["numReceta"] = 1;
        // line 165
        echo "                    <div class=\"news-bot\"> 
                        ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastRecetas"]) ? $context["lastRecetas"] : $this->getContext($context, "lastRecetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 167
            echo "                                <div class=\"col-md-6 news-bottom1 animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                                    <a href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">
                                        <div class=\"content-item\" style=\"background-image: url(";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
            echo ");\">
                                            <div class=\"overlay\"></div>
                                            <div class=\" news-bottom2\">
                                                <ul class=\"grid-news\">
                                                    <li><span><i class=\"glyphicon glyphicon-calendar\"> </i>";
            // line 173
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            echo "</span><b>/</b></li>
                                                    <li><span><i class=\"glyphicon glyphicon-comment\"> </i>";
            // line 174
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
            echo " comentarios</span><b>/</b></li>
                                                    <li><span><i class=\"glyphicon glyphicon-share\"> </i>Agregar</span></li>
                                                </ul>
                                                <p>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array(), "method"), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                              ";
            // line 182
            if (((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 2) == 0) && ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) != 4))) {
                // line 183
                echo "                                    </div>
                                    <div class=\"news-bot\">
                                ";
            }
            // line 186
            echo "                            ";
            $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
            echo "  

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                    </div>   
            </div>
        </div>
    </div>
</div>
\t
";
        
        $__internal_58a2ff8f7289fd86434c700cfeea4ad48f8232334df3a378a2dc3d857abafcbb->leave($__internal_58a2ff8f7289fd86434c700cfeea4ad48f8232334df3a378a2dc3d857abafcbb_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Home:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 189,  321 => 186,  316 => 183,  314 => 182,  306 => 177,  300 => 174,  296 => 173,  289 => 169,  285 => 168,  282 => 167,  278 => 166,  275 => 165,  273 => 164,  258 => 151,  248 => 144,  234 => 132,  213 => 114,  198 => 102,  183 => 90,  166 => 75,  164 => 74,  144 => 57,  129 => 45,  114 => 33,  99 => 20,  93 => 19,  82 => 14,  76 => 10,  70 => 9,  58 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseuser.html.twig' %}
{% block stylesheets %}

{% block title %}Eat&Fit{% endblock%}
{{ parent() }}

{% endblock %}

{% block head %}
\t<div class=\"banner\">
        <p class=\"animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">Para tener un cuerpo saludable es esencial comer saludable</p>
        <label></label>
        <h4 class=\"animated wow fadeInTop\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">Calidad + Variedad + Salud</h4>
        <a class=\"scroll down\" href=\"#content-down\"><img src=\"{{ asset('TemplateUser/images/down.png') }}\" alt=\"\"></a>
    </div>
    <br></br>\t
{% endblock %}

{% block body %}
<!--content-->
<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
            <div class=\"content-top\">
                <div class=\"col-md-4 content-left animated wow fadeInLeft\" data-wow-duration=\"100ms\" data-wow-delay=\"500ms\">
                    <h3>Blog</h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span>Existe una gran variedad</span>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"content-mid\">
                <a  href=\"{{ path('App_user_listReceta') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\" >
                        <div class=\" hover-fold\">
                          <h4>RECETAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>Hay una gran variedad de recetas disponibles que se adaptan a tus gustos y necesidades </p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listUtensilio') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>UTENSILIOS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de utensilios que te ayudarán a realizar tus recetas eficiente y eficazmente</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listTecnica') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>TÉCNICAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de técnicas que te ayudarán a obtener las habilidades culinarias necesarias para iniciarte en el mundo de la comida saludable</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
<!--services-->
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
<div class=\"services\">
    <div class=\"container\">
        <div class=\"services-top\">      
            <div class=\"col-md-8 services-right animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <p>A través de Eat&Fit va a ser capaz de  crear diferentes menús personalizados a tus necesidades y gustos los cuales podrás agregar a una lista de supermercado virtual la cuál te ayudará a realizar tu compra facilmente, y al mismo tiempo podrá consultar cualquier duda existente tanto a diferentes expertos en la materia de nutrición como a los otros usuarios a través de un foro interactivo</p>
            </div>
            <div class=\"col-md-4 services-left animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                <h3>Servicios</h3>
                <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                <span>Pensados para tí</span>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"service-top\">
            <div class=\"content-mid\">
                <a  href=\"{{ path('App_user_listForo') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>FORO</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>En caso de que tengas una duda que quieras compartir con el resto de usuarios podrás crear nuevos temas para el foro para lograr así obtener diferentes respuestas a la duda planteada</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listMenu') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>MENÚ</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Con las diferentes recetas disponibles serás capaz de crear menús totalmente personalizados a tus necesidades</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listForo') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>LISTA DE COMPRA</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Por último, a través de esta herramienta serás capaz de crear diferentes listas de mercado conformada por los ingredientes de las recetas y menús seleccionados</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>
{% else %}
<div class=\"services\">
    <div class=\"container\">
        <div class=\"services-top\">      
            <div class=\"col-md-8 services-right animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <p>A través de Eat&Fit va a ser capaz de  crear diferentes menús personalizados a tus necesidades y gustos los cuales podrás agregar a una lista de supermercado virtual la cuál te ayudará a realizar tu compra facilmente, y al mismo tiempo podrá consultar cualquier duda existente tanto a diferentes expertos en la materia de nutrición como a los otros usuarios a través de un foro interactivo</p>
            </div>
            <div class=\"col-md-4 services-left animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                <h3>Servicios</h3>
                <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                <span>Pensados para tí</span>
                </br>
                </br>
                <a class=\"btn btn-lg btn-success\" href=\"{{path('fos_user_security_login') }}\">Login para utilizar servicios</a>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
</div>
{% endif %}
<!--//services-->
<!--news-->
    <div class=\"content-top-top\">
        <div class=\"container\">
            <div class=\"content-top\">
                <div class=\"col-md-4 content-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3>Top recetas</h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span>¿Qué opinan los usuarios?</span>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"news-bottom\"> 
                {% set numReceta=1 %}
                    <div class=\"news-bot\"> 
                        {% for receta in lastRecetas %}
                                <div class=\"col-md-6 news-bottom1 animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                                    <a href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">
                                        <div class=\"content-item\" style=\"background-image: url({{ asset ('imagenes/'~receta.imagen)}});\">
                                            <div class=\"overlay\"></div>
                                            <div class=\" news-bottom2\">
                                                <ul class=\"grid-news\">
                                                    <li><span><i class=\"glyphicon glyphicon-calendar\"> </i>{{ receta.fechaCreacion|date('Y-m-d') }}</span><b>/</b></li>
                                                    <li><span><i class=\"glyphicon glyphicon-comment\"> </i>{{receta.comentarios|length}} comentarios</span><b>/</b></li>
                                                    <li><span><i class=\"glyphicon glyphicon-share\"> </i>Agregar</span></li>
                                                </ul>
                                                <p>{{receta.nombre()}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                              {% if (numReceta % 2 == 0) and (numReceta != 4) %}
                                    </div>
                                    <div class=\"news-bot\">
                                {% endif %}
                            {% set numReceta=numReceta+1%}  

                        {% endfor %}
                    </div>   
            </div>
        </div>
    </div>
</div>
\t
{% endblock %}
";
    }
}