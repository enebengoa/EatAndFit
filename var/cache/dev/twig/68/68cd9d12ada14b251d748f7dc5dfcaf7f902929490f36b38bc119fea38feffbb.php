<?php

/* @User/Menu/show.html.twig */
class __TwigTemplate_cbb6c00c909e27187d65b55e5ffce9a0954341de9c31ebce8a018e9ad5320c45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout_menu.html.twig", "@User/Menu/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head2' => array($this, 'block_head2'),
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
        $__internal_77cc98a0bbcbcdbb0e68560161ff10f5f2de00c0d840c2a498809ab989e36ea3 = $this->env->getExtension("native_profiler");
        $__internal_77cc98a0bbcbcdbb0e68560161ff10f5f2de00c0d840c2a498809ab989e36ea3->enter($__internal_77cc98a0bbcbcdbb0e68560161ff10f5f2de00c0d840c2a498809ab989e36ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Menu/show.html.twig"));

        // line 4
        $context["calorias"] = 0;
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "subMenus", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
            // line 6
            $context["calorias"] = ((isset($context["calorias"]) ? $context["calorias"] : $this->getContext($context, "calorias")) + ($this->getAttribute($this->getAttribute($context["submenu"], "receta", array()), "calorias", array()) / $this->getAttribute($this->getAttribute($context["submenu"], "receta", array()), "numeroComensales", array())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77cc98a0bbcbcdbb0e68560161ff10f5f2de00c0d840c2a498809ab989e36ea3->leave($__internal_77cc98a0bbcbcdbb0e68560161ff10f5f2de00c0d840c2a498809ab989e36ea3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e30dfd22d6561d10efb5b64865cc730a696f0381ed6644a2b96e5a1e12f253b = $this->env->getExtension("native_profiler");
        $__internal_6e30dfd22d6561d10efb5b64865cc730a696f0381ed6644a2b96e5a1e12f253b->enter($__internal_6e30dfd22d6561d10efb5b64865cc730a696f0381ed6644a2b96e5a1e12f253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_6e30dfd22d6561d10efb5b64865cc730a696f0381ed6644a2b96e5a1e12f253b->leave($__internal_6e30dfd22d6561d10efb5b64865cc730a696f0381ed6644a2b96e5a1e12f253b_prof);

    }

    // line 8
    public function block_head2($context, array $blocks = array())
    {
        $__internal_3ad10c516cdc24a539d5c5b5aca1734360e981211df49f2dd6d9f45c157da008 = $this->env->getExtension("native_profiler");
        $__internal_3ad10c516cdc24a539d5c5b5aca1734360e981211df49f2dd6d9f45c157da008->enter($__internal_3ad10c516cdc24a539d5c5b5aca1734360e981211df49f2dd6d9f45c157da008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_listMenu");
        echo "\">Menú \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "nombre", array()), "html", null, true);
        echo "\" (";
        echo twig_escape_filter($this->env, (isset($context["calorias"]) ? $context["calorias"] : $this->getContext($context, "calorias")), "html", null, true);
        echo " cl/persona)</a>";
        
        $__internal_3ad10c516cdc24a539d5c5b5aca1734360e981211df49f2dd6d9f45c157da008->leave($__internal_3ad10c516cdc24a539d5c5b5aca1734360e981211df49f2dd6d9f45c157da008_prof);

    }

    // line 10
    public function block_body2($context, array $blocks = array())
    {
        $__internal_d13253b5960b65d4ae48b091052c5981f686c73fbaa80055b7ff7adb8fa97f27 = $this->env->getExtension("native_profiler");
        $__internal_d13253b5960b65d4ae48b091052c5981f686c73fbaa80055b7ff7adb8fa97f27->enter($__internal_d13253b5960b65d4ae48b091052c5981f686c73fbaa80055b7ff7adb8fa97f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 11
        echo "
<div class=\"col-md-12 blog-header\">
<a class=\"btn btn-lg btn-success\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("App_user_listReceta");
        echo "\">Añadir nueva receta</a>
</br>
</br>
";
        // line 16
        if (twig_test_empty((isset($context["desayuno"]) ? $context["desayuno"] : $this->getContext($context, "desayuno")))) {
        } else {
            // line 18
            echo "<div class=\"col-md-9 blog-header\">
\t<h2>Desayuno</h2>
\t";
            // line 20
            $context["numReceta"] = 0;
            // line 21
            echo "\t<div class=\" blog-head\">
\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["desayuno"]) ? $context["desayuno"] : $this->getContext($context, "desayuno")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 23
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                echo " 
        <div id=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-6\">                                    
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 32
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Calorías: ";
                // line 35
                echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
                echo " cl/persona </p>
\t\t\t\t\t\t<p>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 6)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t";
                // line 47
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 48
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 52
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 57
        echo "
";
        // line 58
        if (twig_test_empty((isset($context["almuerzo"]) ? $context["almuerzo"] : $this->getContext($context, "almuerzo")))) {
            // line 59
            echo "
";
        } else {
            // line 61
            echo "

<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Almuerzo</h2>
\t";
            // line 66
            $context["numReceta"] = 0;
            // line 67
            echo "\t<div class=\" blog-head\">
\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["almuerzo"]) ? $context["almuerzo"] : $this->getContext($context, "almuerzo")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 69
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                // line 70
                echo "        <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-7\">                                      
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 78
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Calorías: ";
                // line 81
                echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
                echo " cl/persona</p>
\t\t\t\t\t\t<p>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 7)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>\t
\t";
                // line 93
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 94
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 98
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t</br>
\t</div>
</div>

";
        }
        // line 104
        echo "


";
        // line 107
        if (twig_test_empty((isset($context["comida"]) ? $context["comida"] : $this->getContext($context, "comida")))) {
            // line 108
            echo "
";
        } else {
            // line 110
            echo "<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Comida</h2>
\t";
            // line 113
            $context["numReceta"] = 0;
            // line 114
            echo "\t<div class=\" blog-head\">
\t";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comida"]) ? $context["comida"] : $this->getContext($context, "comida")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 116
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                echo " 
        <div id=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-8\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 124
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 125
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Calorías: ";
                // line 128
                echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
                echo " cl/persona</p>
\t\t\t\t\t\t<p>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 8)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>\t
\t";
                // line 140
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 141
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 145
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 150
        echo "
";
        // line 151
        if (twig_test_empty((isset($context["merienda"]) ? $context["merienda"] : $this->getContext($context, "merienda")))) {
            // line 152
            echo "
";
        } else {
            // line 154
            echo "<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Merienda</h2>
\t";
            // line 157
            $context["numReceta"] = 0;
            // line 158
            echo "\t<div class=\" blog-head\">
\t";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["merienda"]) ? $context["merienda"] : $this->getContext($context, "merienda")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 160
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                echo " 
        <div id=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-9\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 166
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 168
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 169
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Calorías: ";
                // line 172
                echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
                echo " cl/persona</p>
\t\t\t\t\t\t<p>";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 9)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>\t
\t";
                // line 184
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 185
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 189
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 194
        echo "
";
        // line 195
        if (twig_test_empty((isset($context["cena"]) ? $context["cena"] : $this->getContext($context, "cena")))) {
            // line 196
            echo "
";
        } else {
            // line 198
            echo "<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Cena</h2>
\t";
            // line 201
            $context["numReceta"] = 0;
            // line 202
            echo "\t<div class=\" blog-head\">
\t";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cena"]) ? $context["cena"] : $this->getContext($context, "cena")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 204
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                echo " 
        <div id=\"";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-10\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 208
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 212
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 213
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Calorías: ";
                // line 216
                echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
                echo " cl/persona</p>
\t\t\t\t\t\t<p>";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 218
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 10)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>\t
\t";
                // line 228
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 229
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 233
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 238
        echo "</div>


<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                </div>

                <div class=\"modal-body\">
                    <p>¿Desea borrar la receta de este menú?</p>
                    <p class=\"debug-url\"></p>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-danger btn-ok\">Borrar</a>
                </div>
            </div>
        </div>

";
        
        $__internal_d13253b5960b65d4ae48b091052c5981f686c73fbaa80055b7ff7adb8fa97f27->leave($__internal_d13253b5960b65d4ae48b091052c5981f686c73fbaa80055b7ff7adb8fa97f27_prof);

    }

    // line 263
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e472a5c9df3aa3835c504277b74f26c1f39922f45dde46d074719bc4d2943a35 = $this->env->getExtension("native_profiler");
        $__internal_e472a5c9df3aa3835c504277b74f26c1f39922f45dde46d074719bc4d2943a35->enter($__internal_e472a5c9df3aa3835c504277b74f26c1f39922f45dde46d074719bc4d2943a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 264
        echo "<script>
        \$('#confirm-delete').on('show.bs.modal', function(e) {
            \$(\".btn-ok\").click(function () {

                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \$(e.relatedTarget).data('href'),
                    success: function(jqXHR) {
                    \tconsole.log(jqXHR.id);
                        \$(jqXHR.id).remove();
                        \$('#confirm-delete').modal('hide');
                        

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Borrar')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();



                    },
                    error: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.responseJSON.message);
                        \$('#addConfirm').find('.modal-title').html('NO Borrado')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                    },
                });
            });
        });
  </script>
  
 ";
        
        $__internal_e472a5c9df3aa3835c504277b74f26c1f39922f45dde46d074719bc4d2943a35->leave($__internal_e472a5c9df3aa3835c504277b74f26c1f39922f45dde46d074719bc4d2943a35_prof);

    }

    public function getTemplateName()
    {
        return "@User/Menu/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 264,  624 => 263,  593 => 238,  587 => 234,  581 => 233,  575 => 229,  573 => 228,  562 => 220,  557 => 218,  553 => 217,  549 => 216,  543 => 213,  539 => 212,  532 => 210,  527 => 208,  521 => 205,  516 => 204,  512 => 203,  509 => 202,  507 => 201,  502 => 198,  498 => 196,  496 => 195,  493 => 194,  487 => 190,  481 => 189,  475 => 185,  473 => 184,  462 => 176,  457 => 174,  453 => 173,  449 => 172,  443 => 169,  439 => 168,  432 => 166,  427 => 164,  421 => 161,  416 => 160,  412 => 159,  409 => 158,  407 => 157,  402 => 154,  398 => 152,  396 => 151,  393 => 150,  387 => 146,  381 => 145,  375 => 141,  373 => 140,  362 => 132,  357 => 130,  353 => 129,  349 => 128,  343 => 125,  339 => 124,  332 => 122,  327 => 120,  321 => 117,  316 => 116,  312 => 115,  309 => 114,  307 => 113,  302 => 110,  298 => 108,  296 => 107,  291 => 104,  284 => 99,  278 => 98,  272 => 94,  270 => 93,  259 => 85,  254 => 83,  250 => 82,  246 => 81,  240 => 78,  236 => 77,  229 => 75,  224 => 73,  217 => 70,  214 => 69,  210 => 68,  207 => 67,  205 => 66,  198 => 61,  194 => 59,  192 => 58,  189 => 57,  183 => 53,  177 => 52,  171 => 48,  169 => 47,  158 => 39,  153 => 37,  149 => 36,  145 => 35,  139 => 32,  135 => 31,  128 => 29,  123 => 27,  117 => 24,  112 => 23,  108 => 22,  105 => 21,  103 => 20,  99 => 18,  96 => 16,  90 => 13,  86 => 11,  80 => 10,  62 => 8,  50 => 3,  43 => 1,  37 => 6,  33 => 5,  31 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'UserBundle::layout_menu.html.twig' %}

{% block title %}Eat&Fit{% endblock%}
\t\t\t{% set calorias = 0 %}
            {% for submenu in menu.subMenus %} 
                {% set calorias = calorias + (submenu.receta.calorias/submenu.receta.numeroComensales) %}                           
            {% endfor %}
{% block head2 %}<a href=\"{{ path('App_user_listMenu') }}\">Menú \"{{menu.nombre}}\" ({{calorias}} cl/persona)</a>{% endblock %}

{% block body2 %}

<div class=\"col-md-12 blog-header\">
<a class=\"btn btn-lg btn-success\" href=\"{{path('App_user_listReceta') }}\">Añadir nueva receta</a>
</br>
</br>
{% if (desayuno is empty)%}
{% else %}
<div class=\"col-md-9 blog-header\">
\t<h2>Desayuno</h2>
\t{% set numReceta=0%}
\t<div class=\" blog-head\">
\t{% for receta in desayuno %}
        {% set numReceta=numReceta+1%} 
        <div id=\"{{receta.id}}-6\">                                    
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset ('imagenes/'~receta.imagen)}}\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">{{receta.nombre}}</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ receta.fechaCreacion|date('Y-m-d') }}</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>{{receta.comentarios|length}}</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Calorías: {{receta.calorias/receta.numeroComensales}} cl/persona </p>
\t\t\t\t\t\t<p>{{receta.descripcion(40)}}</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteSubMenu', { 'receta': receta.id , 'menu': menu.id, 'horaIngesta' : 6}) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t{% if (numReceta % 3 == 0)%}
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t{% endif %}
\t\t{% endfor %}
\t\t</br>
\t</div>
</div>
{% endif %}

{% if (almuerzo is empty)%}

{% else %}


<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Almuerzo</h2>
\t{% set numReceta=0%}
\t<div class=\" blog-head\">
\t{% for receta in almuerzo %}
        {% set numReceta=numReceta+1%}
        <div id=\"{{receta.id}}-7\">                                      
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset ('imagenes/'~receta.imagen)}}\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">{{receta.nombre}}</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ receta.fechaCreacion|date('Y-m-d') }}</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>{{receta.comentarios|length}}</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Calorías: {{receta.calorias/receta.numeroComensales}} cl/persona</p>
\t\t\t\t\t\t<p>{{receta.descripcion(40)}}</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteSubMenu', { 'receta': receta.id , 'menu': menu.id, 'horaIngesta' : 7}) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>\t
\t{% if (numReceta % 3 == 0)%}
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t{% endif %}
\t\t{% endfor %}
\t\t</br>
\t</div>
</div>

{% endif %}



{% if (comida is empty)%}

{% else %}
<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Comida</h2>
\t{% set numReceta=0%}
\t<div class=\" blog-head\">
\t{% for receta in comida %}
        {% set numReceta=numReceta+1%} 
        <div id=\"{{receta.id}}-8\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset ('imagenes/'~receta.imagen)}}\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">{{receta.nombre}}</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ receta.fechaCreacion|date('Y-m-d') }}</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>{{receta.comentarios|length}}</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Calorías: {{receta.calorias/receta.numeroComensales}} cl/persona</p>
\t\t\t\t\t\t<p>{{receta.descripcion(40)}}</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteSubMenu', { 'receta': receta.id , 'menu': menu.id, 'horaIngesta' : 8}) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>\t
\t{% if (numReceta % 3 == 0)%}
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t{% endif %}
\t\t{% endfor %}
\t\t</br>
\t</div>
</div>
{% endif %}

{% if (merienda is empty)%}

{% else %}
<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Merienda</h2>
\t{% set numReceta=0%}
\t<div class=\" blog-head\">
\t{% for receta in merienda %}
        {% set numReceta=numReceta+1%} 
        <div id=\"{{receta.id}}-9\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset ('imagenes/'~receta.imagen)}}\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">{{receta.nombre}}</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ receta.fechaCreacion|date('Y-m-d') }}</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>{{receta.comentarios|length}}</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Calorías: {{receta.calorias/receta.numeroComensales}} cl/persona</p>
\t\t\t\t\t\t<p>{{receta.descripcion(40)}}</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteSubMenu', { 'receta': receta.id , 'menu': menu.id, 'horaIngesta' : 9}) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>\t
\t{% if (numReceta % 3 == 0)%}
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t{% endif %}
\t\t{% endfor %}
\t\t</br>
\t</div>
</div>
{% endif %}

{% if (cena is empty)%}

{% else %}
<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Cena</h2>
\t{% set numReceta=0%}
\t<div class=\" blog-head\">
\t{% for receta in cena %}
        {% set numReceta=numReceta+1%} 
        <div id=\"{{receta.id}}-10\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset ('imagenes/'~receta.imagen)}}\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">{{receta.nombre}}</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>{{ receta.fechaCreacion|date('Y-m-d') }}</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>{{receta.comentarios|length}}</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Calorías: {{receta.calorias/receta.numeroComensales}} cl/persona</p>
\t\t\t\t\t\t<p>{{receta.descripcion(40)}}</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteSubMenu', { 'receta': receta.id , 'menu': menu.id, 'horaIngesta' : 10}) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"{{ path('App_user_showReceta', { 'id': receta.id }) }}\">
\t\t\t\t\t\t\t\t<span>L</span><span>e</span><span>e</span><span>r</span> <span>m</span><span>á</span><span>s</span>\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>\t
\t{% if (numReceta % 3 == 0)%}
\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t{% endif %}
\t\t{% endfor %}
\t\t</br>
\t</div>
</div>
{% endif %}
</div>


<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Mensaje de confirmación</h4>
                </div>

                <div class=\"modal-body\">
                    <p>¿Desea borrar la receta de este menú?</p>
                    <p class=\"debug-url\"></p>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-danger btn-ok\">Borrar</a>
                </div>
            </div>
        </div>

{% endblock %}
{% block javascripts %}
<script>
        \$('#confirm-delete').on('show.bs.modal', function(e) {
            \$(\".btn-ok\").click(function () {

                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \$(e.relatedTarget).data('href'),
                    success: function(jqXHR) {
                    \tconsole.log(jqXHR.id);
                        \$(jqXHR.id).remove();
                        \$('#confirm-delete').modal('hide');
                        

                        \$('#addConfirm').find('.modal-body').html(jqXHR.message);
                        \$('#addConfirm').find('.modal-title').html('Borrar')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();



                    },
                    error: function(jqXHR) {
                        \$('#confirm-delete').modal('hide');

                        \$('#addConfirm').find('.modal-body').html(jqXHR.responseJSON.message);
                        \$('#addConfirm').find('.modal-title').html('NO Borrado')
                        \$('#addConfirm').modal('show');
                        \$(\"#addConfirm\").modal();

                    },
                });
            });
        });
  </script>
  
 {% endblock %}

";
    }
}
