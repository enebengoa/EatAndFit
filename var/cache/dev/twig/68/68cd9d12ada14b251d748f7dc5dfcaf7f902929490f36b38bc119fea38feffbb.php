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
        $__internal_f95b82e3a756975e385b82d747538ea8ab65db4eb910070f8bfcfb3e9b15ccf7 = $this->env->getExtension("native_profiler");
        $__internal_f95b82e3a756975e385b82d747538ea8ab65db4eb910070f8bfcfb3e9b15ccf7->enter($__internal_f95b82e3a756975e385b82d747538ea8ab65db4eb910070f8bfcfb3e9b15ccf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Menu/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f95b82e3a756975e385b82d747538ea8ab65db4eb910070f8bfcfb3e9b15ccf7->leave($__internal_f95b82e3a756975e385b82d747538ea8ab65db4eb910070f8bfcfb3e9b15ccf7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71d9256a03e08e55b173eaf170b55b095b1d660e1c93757385642f003ac39856 = $this->env->getExtension("native_profiler");
        $__internal_71d9256a03e08e55b173eaf170b55b095b1d660e1c93757385642f003ac39856->enter($__internal_71d9256a03e08e55b173eaf170b55b095b1d660e1c93757385642f003ac39856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_71d9256a03e08e55b173eaf170b55b095b1d660e1c93757385642f003ac39856->leave($__internal_71d9256a03e08e55b173eaf170b55b095b1d660e1c93757385642f003ac39856_prof);

    }

    // line 5
    public function block_head2($context, array $blocks = array())
    {
        $__internal_97702fe240f3ece8d12e390155b1cfa788f6551626f7ba5ef443adeeaefe78f7 = $this->env->getExtension("native_profiler");
        $__internal_97702fe240f3ece8d12e390155b1cfa788f6551626f7ba5ef443adeeaefe78f7->enter($__internal_97702fe240f3ece8d12e390155b1cfa788f6551626f7ba5ef443adeeaefe78f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head2"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("App_user_listMenu");
        echo "\">Menú \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "nombre", array()), "html", null, true);
        echo "\"</a>";
        
        $__internal_97702fe240f3ece8d12e390155b1cfa788f6551626f7ba5ef443adeeaefe78f7->leave($__internal_97702fe240f3ece8d12e390155b1cfa788f6551626f7ba5ef443adeeaefe78f7_prof);

    }

    // line 7
    public function block_body2($context, array $blocks = array())
    {
        $__internal_89b68a8ac2d695202bab3ffe62c6df9ed2b4381796e6a0788ced9a81161c777f = $this->env->getExtension("native_profiler");
        $__internal_89b68a8ac2d695202bab3ffe62c6df9ed2b4381796e6a0788ced9a81161c777f->enter($__internal_89b68a8ac2d695202bab3ffe62c6df9ed2b4381796e6a0788ced9a81161c777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 8
        echo "
<div class=\"col-md-9 blog-header\">
<a class=\"btn btn-lg btn-success\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("App_user_listReceta");
        echo "\">Añadir nueva receta</a>
</br>
</br>
";
        // line 13
        if (twig_test_empty((isset($context["desayuno"]) ? $context["desayuno"] : $this->getContext($context, "desayuno")))) {
        } else {
            // line 15
            echo "<div class=\"col-md-9 blog-header\">
\t<h2>Desayuno</h2>
\t";
            // line 17
            $context["numReceta"] = 0;
            // line 18
            echo "\t<div class=\" blog-head\">
\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["desayuno"]) ? $context["desayuno"] : $this->getContext($context, "desayuno")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 20
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                echo " 
        <div id=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-6\">                                    
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 29
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 6)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 35
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
                // line 43
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 44
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 48
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 53
        echo "
";
        // line 54
        if (twig_test_empty((isset($context["almuerzo"]) ? $context["almuerzo"] : $this->getContext($context, "almuerzo")))) {
            // line 55
            echo "
";
        } else {
            // line 57
            echo "

<div class=\"col-md-9 blog-header\">
\t</br>
\t<h2>Almuerzo</h2>
\t";
            // line 62
            $context["numReceta"] = 0;
            // line 63
            echo "\t<div class=\" blog-head\">
\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["almuerzo"]) ? $context["almuerzo"] : $this->getContext($context, "almuerzo")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 65
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                // line 66
                echo "        <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-7\">                                      
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 74
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 7)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 80
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
                // line 88
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 89
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 93
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t\t</br>
\t</div>
</div>

";
        }
        // line 99
        echo "


";
        // line 102
        if (twig_test_empty((isset($context["comida"]) ? $context["comida"] : $this->getContext($context, "comida")))) {
            // line 103
            echo "
";
        } else {
            // line 105
            echo "<div class=\"col-md-9 blog-header\">
\t<h2>Comida</h2>
\t";
            // line 107
            $context["numReceta"] = 0;
            // line 108
            echo "\t<div class=\" blog-head\">
\t";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comida"]) ? $context["comida"] : $this->getContext($context, "comida")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 110
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                echo " 
        <div id=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-8\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 118
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 119
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 8)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 125
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
                // line 133
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 134
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 138
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 143
        echo "
";
        // line 144
        if (twig_test_empty((isset($context["merienda"]) ? $context["merienda"] : $this->getContext($context, "merienda")))) {
            // line 145
            echo "
";
        } else {
            // line 147
            echo "<div class=\"col-md-9 blog-header\">
\t<h2>Merienda</h2>
\t";
            // line 149
            $context["numReceta"] = 0;
            // line 150
            echo "\t<div class=\" blog-head\">
\t";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["merienda"]) ? $context["merienda"] : $this->getContext($context, "merienda")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 152
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                echo " 
        <div id=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-9\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 160
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 161
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 9)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 167
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
                // line 175
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 176
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 180
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 185
        echo "
";
        // line 186
        if (twig_test_empty((isset($context["cena"]) ? $context["cena"] : $this->getContext($context, "cena")))) {
            // line 187
            echo "
";
        } else {
            // line 189
            echo "<div class=\"col-md-9 blog-header\">
\t<h2>Cena</h2>
\t";
            // line 191
            $context["numReceta"] = 0;
            // line 192
            echo "\t<div class=\" blog-head\">
\t";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cena"]) ? $context["cena"] : $this->getContext($context, "cena")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 194
                echo "        ";
                $context["numReceta"] = ((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) + 1);
                echo " 
        <div id=\"";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
                echo "-10\">                                     
\t\t\t<div class=\"col-md-4 blog-top\">
\t\t\t\t<div class=\"blog-in\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 198
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("imagenes/" . $this->getAttribute($context["receta"], "imagen", array()))), "html", null, true);
                echo "\" alt=\" \">
\t\t\t\t\t<div class=\"blog-grid\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 200
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t<span class=\"date-in\"><i class=\"glyphicon glyphicon-calendar\"> </i>";
                // line 202
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<a href=\"single.html\" class=\"comments\"><i class=\"glyphicon glyphicon-comment\"></i>";
                // line 203
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["receta"], "comentarios", array())), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "descripcion", array(0 => 40), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-href=\"";
                // line 207
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("App_user_deleteSubMenu", array("receta" => $this->getAttribute($context["receta"], "id", array()), "menu" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id", array()), "horaIngesta" => 10)), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\"><i class=\"glyphicon glyphicon-trash\"> </i></button>
\t\t\t\t\t\t<div class=\"more\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"link link-yaku\" href=\"";
                // line 209
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
                // line 217
                if ((((isset($context["numReceta"]) ? $context["numReceta"] : $this->getContext($context, "numReceta")) % 3) == 0)) {
                    // line 218
                    echo "\t\t</div>
\t\t<div class=\"clearfix\"> </div>
\t\t<div class=\" blog-head\">
\t";
                }
                // line 222
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "\t\t</br>
\t</div>
</div>
";
        }
        // line 227
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
        
        $__internal_89b68a8ac2d695202bab3ffe62c6df9ed2b4381796e6a0788ced9a81161c777f->leave($__internal_89b68a8ac2d695202bab3ffe62c6df9ed2b4381796e6a0788ced9a81161c777f_prof);

    }

    // line 252
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_95470f311d3128c69460fc5c98b87bec1093fbfdbb3ba5c9b3bbaf6bdc947e01 = $this->env->getExtension("native_profiler");
        $__internal_95470f311d3128c69460fc5c98b87bec1093fbfdbb3ba5c9b3bbaf6bdc947e01->enter($__internal_95470f311d3128c69460fc5c98b87bec1093fbfdbb3ba5c9b3bbaf6bdc947e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 253
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
        
        $__internal_95470f311d3128c69460fc5c98b87bec1093fbfdbb3ba5c9b3bbaf6bdc947e01->leave($__internal_95470f311d3128c69460fc5c98b87bec1093fbfdbb3ba5c9b3bbaf6bdc947e01_prof);

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
        return array (  592 => 253,  586 => 252,  555 => 227,  549 => 223,  543 => 222,  537 => 218,  535 => 217,  524 => 209,  519 => 207,  515 => 206,  509 => 203,  505 => 202,  498 => 200,  493 => 198,  487 => 195,  482 => 194,  478 => 193,  475 => 192,  473 => 191,  469 => 189,  465 => 187,  463 => 186,  460 => 185,  454 => 181,  448 => 180,  442 => 176,  440 => 175,  429 => 167,  424 => 165,  420 => 164,  414 => 161,  410 => 160,  403 => 158,  398 => 156,  392 => 153,  387 => 152,  383 => 151,  380 => 150,  378 => 149,  374 => 147,  370 => 145,  368 => 144,  365 => 143,  359 => 139,  353 => 138,  347 => 134,  345 => 133,  334 => 125,  329 => 123,  325 => 122,  319 => 119,  315 => 118,  308 => 116,  303 => 114,  297 => 111,  292 => 110,  288 => 109,  285 => 108,  283 => 107,  279 => 105,  275 => 103,  273 => 102,  268 => 99,  261 => 94,  255 => 93,  249 => 89,  247 => 88,  236 => 80,  231 => 78,  227 => 77,  221 => 74,  217 => 73,  210 => 71,  205 => 69,  198 => 66,  195 => 65,  191 => 64,  188 => 63,  186 => 62,  179 => 57,  175 => 55,  173 => 54,  170 => 53,  164 => 49,  158 => 48,  152 => 44,  150 => 43,  139 => 35,  134 => 33,  130 => 32,  124 => 29,  120 => 28,  113 => 26,  108 => 24,  102 => 21,  97 => 20,  93 => 19,  90 => 18,  88 => 17,  84 => 15,  81 => 13,  75 => 10,  71 => 8,  65 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'UserBundle::layout_menu.html.twig' %}

{% block title %}Eat&Fit{% endblock%}

{% block head2 %}<a href=\"{{ path('App_user_listMenu') }}\">Menú \"{{menu.nombre}}\"</a>{% endblock %}

{% block body2 %}

<div class=\"col-md-9 blog-header\">
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
