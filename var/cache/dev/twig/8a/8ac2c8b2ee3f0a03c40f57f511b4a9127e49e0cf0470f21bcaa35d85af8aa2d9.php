<?php

/* UserBundle:Menu:show.html.twig */
class __TwigTemplate_c0833dcd4f18bc9dfc0ab4434c18eba055e2b717b0b1fb907a09efb43737bb34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout_menu.html.twig", "UserBundle:Menu:show.html.twig", 1);
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
        $__internal_6b179e5236d5a0265bd95dd74c0d5ea2c84078874947eb97691279fc734ff8d0 = $this->env->getExtension("native_profiler");
        $__internal_6b179e5236d5a0265bd95dd74c0d5ea2c84078874947eb97691279fc734ff8d0->enter($__internal_6b179e5236d5a0265bd95dd74c0d5ea2c84078874947eb97691279fc734ff8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Menu:show.html.twig"));

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
        
        $__internal_6b179e5236d5a0265bd95dd74c0d5ea2c84078874947eb97691279fc734ff8d0->leave($__internal_6b179e5236d5a0265bd95dd74c0d5ea2c84078874947eb97691279fc734ff8d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9900990ef4556e6034b917a1deca4bb352ea671378744283f011c1bbdb60e012 = $this->env->getExtension("native_profiler");
        $__internal_9900990ef4556e6034b917a1deca4bb352ea671378744283f011c1bbdb60e012->enter($__internal_9900990ef4556e6034b917a1deca4bb352ea671378744283f011c1bbdb60e012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_9900990ef4556e6034b917a1deca4bb352ea671378744283f011c1bbdb60e012->leave($__internal_9900990ef4556e6034b917a1deca4bb352ea671378744283f011c1bbdb60e012_prof);

    }

    // line 8
    public function block_head2($context, array $blocks = array())
    {
        $__internal_53a62e6e192b85aacc5c1c1b15cf69e407c49a4a8d2179885954b7e05d92a42c = $this->env->getExtension("native_profiler");
        $__internal_53a62e6e192b85aacc5c1c1b15cf69e407c49a4a8d2179885954b7e05d92a42c->enter($__internal_53a62e6e192b85aacc5c1c1b15cf69e407c49a4a8d2179885954b7e05d92a42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_listMenu");
        echo "\">Menú \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "nombre", array()), "html", null, true);
        echo "\" (";
        echo twig_escape_filter($this->env, (isset($context["calorias"]) ? $context["calorias"] : $this->getContext($context, "calorias")), "html", null, true);
        echo " cl/persona)</a>";
        
        $__internal_53a62e6e192b85aacc5c1c1b15cf69e407c49a4a8d2179885954b7e05d92a42c->leave($__internal_53a62e6e192b85aacc5c1c1b15cf69e407c49a4a8d2179885954b7e05d92a42c_prof);

    }

    // line 10
    public function block_body2($context, array $blocks = array())
    {
        $__internal_ea3b23d1e919139a7423da508c20acd58748356b084580dfd508fd4f7702d1ab = $this->env->getExtension("native_profiler");
        $__internal_ea3b23d1e919139a7423da508c20acd58748356b084580dfd508fd4f7702d1ab->enter($__internal_ea3b23d1e919139a7423da508c20acd58748356b084580dfd508fd4f7702d1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

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
                echo "-1\">                                    
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
\t\t\t\t\t\t<p><srong>Calorías: </strong> ";
                // line 35
                echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
                echo " cl/persona </p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 1)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 38
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
                // line 46
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 47
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 51
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 56
        echo "
";
        // line 57
        if (twig_test_empty((isset($context["almuerzo"]) ? $context["almuerzo"] : $this->getContext($context, "almuerzo")))) {
            // line 58
            echo "
";
        } else {
            // line 60
            echo "

<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Almuerzo</h2>
\t";
            // line 65
            $context["numReceta"] = 0;
            // line 66
            echo "\t<div class=\" blog-head\">
\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["almuerzo"]) ? $context["almuerzo"] : $this->getContext($context, "almuerzo")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 68
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                // line 69
                echo "        <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-2\">                                      
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 76
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 77
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p><srong>Calorías: </strong> ";
                // line 80
                echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
                echo " cl/persona</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 2)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 83
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
                // line 91
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 92
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 96
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t</br>
\t</div>
</div>

";
        }
        // line 102
        echo "


";
        // line 105
        if (twig_test_empty((isset($context["comida"]) ? $context["comida"] : $this->getContext($context, "comida")))) {
            // line 106
            echo "
";
        } else {
            // line 108
            echo "<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Comida</h2>
\t";
            // line 111
            $context["numReceta"] = 0;
            // line 112
            echo "\t<div class=\" blog-head\">
\t";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comida"]) ? $context["comida"] : $this->getContext($context, "comida")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 114
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                echo " 
        <div id=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-3\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 122
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 123
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p><srong>Calorías: </strong> ";
                // line 126
                echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
                echo " cl/persona</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 3)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 129
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
                // line 137
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 138
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 142
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 147
        echo "
";
        // line 148
        if (twig_test_empty((isset($context["merienda"]) ? $context["merienda"] : $this->getContext($context, "merienda")))) {
            // line 149
            echo "
";
        } else {
            // line 151
            echo "<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Merienda</h2>
\t";
            // line 154
            $context["numReceta"] = 0;
            // line 155
            echo "\t<div class=\" blog-head\">
\t";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["merienda"]) ? $context["merienda"] : $this->getContext($context, "merienda")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 157
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                echo " 
        <div id=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-4\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 163
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 165
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 166
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p><srong>Calorías: </strong> ";
                // line 169
                echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
                echo " cl/persona</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 4)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 172
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
                // line 180
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 181
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 185
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 190
        echo "
";
        // line 191
        if (twig_test_empty((isset($context["cena"]) ? $context["cena"] : $this->getContext($context, "cena")))) {
            // line 192
            echo "
";
        } else {
            // line 194
            echo "<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Cena</h2>
\t";
            // line 197
            $context["numReceta"] = 0;
            // line 198
            echo "\t<div class=\" blog-head\">
\t";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cena"]) ? $context["cena"] : $this->getContext($context, "cena")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 200
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                echo " 
        <div id=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-6\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 208
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 209
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p><srong>Calorías: </strong> ";
                // line 212
                echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
                echo " cl/persona</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 213
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 6)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 215
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
                // line 223
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 224
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 228
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 233
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
        
        $__internal_ea3b23d1e919139a7423da508c20acd58748356b084580dfd508fd4f7702d1ab->leave($__internal_ea3b23d1e919139a7423da508c20acd58748356b084580dfd508fd4f7702d1ab_prof);

    }

    // line 258
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84dd3d58015ca3beb7d57f4b19ecfc9d659d3bce12bb9f9f1dedffe76b08cb00 = $this->env->getExtension("native_profiler");
        $__internal_84dd3d58015ca3beb7d57f4b19ecfc9d659d3bce12bb9f9f1dedffe76b08cb00->enter($__internal_84dd3d58015ca3beb7d57f4b19ecfc9d659d3bce12bb9f9f1dedffe76b08cb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 259
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
        
        $__internal_84dd3d58015ca3beb7d57f4b19ecfc9d659d3bce12bb9f9f1dedffe76b08cb00->leave($__internal_84dd3d58015ca3beb7d57f4b19ecfc9d659d3bce12bb9f9f1dedffe76b08cb00_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Menu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 259,  604 => 258,  573 => 233,  567 => 229,  561 => 228,  555 => 224,  553 => 223,  542 => 215,  537 => 213,  533 => 212,  527 => 209,  523 => 208,  516 => 206,  511 => 204,  505 => 201,  500 => 200,  496 => 199,  493 => 198,  491 => 197,  486 => 194,  482 => 192,  480 => 191,  477 => 190,  471 => 186,  465 => 185,  459 => 181,  457 => 180,  446 => 172,  441 => 170,  437 => 169,  431 => 166,  427 => 165,  420 => 163,  415 => 161,  409 => 158,  404 => 157,  400 => 156,  397 => 155,  395 => 154,  390 => 151,  386 => 149,  384 => 148,  381 => 147,  375 => 143,  369 => 142,  363 => 138,  361 => 137,  350 => 129,  345 => 127,  341 => 126,  335 => 123,  331 => 122,  324 => 120,  319 => 118,  313 => 115,  308 => 114,  304 => 113,  301 => 112,  299 => 111,  294 => 108,  290 => 106,  288 => 105,  283 => 102,  276 => 97,  270 => 96,  264 => 92,  262 => 91,  251 => 83,  246 => 81,  242 => 80,  236 => 77,  232 => 76,  225 => 74,  220 => 72,  213 => 69,  210 => 68,  206 => 67,  203 => 66,  201 => 65,  194 => 60,  190 => 58,  188 => 57,  185 => 56,  179 => 52,  173 => 51,  167 => 47,  165 => 46,  154 => 38,  149 => 36,  145 => 35,  139 => 32,  135 => 31,  128 => 29,  123 => 27,  117 => 24,  112 => 23,  108 => 22,  105 => 21,  103 => 20,  99 => 18,  96 => 16,  90 => 13,  86 => 11,  80 => 10,  62 => 8,  50 => 3,  43 => 1,  37 => 6,  33 => 5,  31 => 4,  11 => 1,);
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
        <div id=\"{{receta.id}}-1\">                                    
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
\t\t\t\t\t\t<p><srong>Calorías: </strong> {{receta.calorias/receta.numeroComensales}} cl/persona </p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteSubMenu', { 'receta': receta.id , 'menu': menu.id, 'horaIngesta' : 1}) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
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
        <div id=\"{{receta.id}}-2\">                                      
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
\t\t\t\t\t\t<p><srong>Calorías: </strong> {{receta.calorias/receta.numeroComensales}} cl/persona</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteSubMenu', { 'receta': receta.id , 'menu': menu.id, 'horaIngesta' : 2}) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
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
        <div id=\"{{receta.id}}-3\">                                     
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
\t\t\t\t\t\t<p><srong>Calorías: </strong> {{receta.calorias/receta.numeroComensales}} cl/persona</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteSubMenu', { 'receta': receta.id , 'menu': menu.id, 'horaIngesta' : 3}) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
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
        <div id=\"{{receta.id}}-4\">                                     
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
\t\t\t\t\t\t<p><srong>Calorías: </strong> {{receta.calorias/receta.numeroComensales}} cl/persona</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteSubMenu', { 'receta': receta.id , 'menu': menu.id, 'horaIngesta' : 4}) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
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
\t\t\t\t\t\t<p><srong>Calorías: </strong> {{receta.calorias/receta.numeroComensales}} cl/persona</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"{{ path('App_user_deleteSubMenu', { 'receta': receta.id , 'menu': menu.id, 'horaIngesta' : 6}) }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
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
