<?php

/* @User/Tecnica/list.html.twig */
class __TwigTemplate_1ffbd03315f1f869983fac0366bf37bba931c964823928863dd21a6618024aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/Tecnica/list.html.twig", 1);
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
        $__internal_507b4e56e018284d69efe6588392609add00e1c38b86ecc0e928c8a799d32675 = $this->env->getExtension("native_profiler");
        $__internal_507b4e56e018284d69efe6588392609add00e1c38b86ecc0e928c8a799d32675->enter($__internal_507b4e56e018284d69efe6588392609add00e1c38b86ecc0e928c8a799d32675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Tecnica/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_507b4e56e018284d69efe6588392609add00e1c38b86ecc0e928c8a799d32675->leave($__internal_507b4e56e018284d69efe6588392609add00e1c38b86ecc0e928c8a799d32675_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d7dc8b41746c0e132c217db718029b8b4377c55ae1fc70989d67f1af06e1534 = $this->env->getExtension("native_profiler");
        $__internal_3d7dc8b41746c0e132c217db718029b8b4377c55ae1fc70989d67f1af06e1534->enter($__internal_3d7dc8b41746c0e132c217db718029b8b4377c55ae1fc70989d67f1af06e1534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_3d7dc8b41746c0e132c217db718029b8b4377c55ae1fc70989d67f1af06e1534->leave($__internal_3d7dc8b41746c0e132c217db718029b8b4377c55ae1fc70989d67f1af06e1534_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e086dda8e59968700bac7fc10a84d6056cd43d15496f985718a4be6d00017bd = $this->env->getExtension("native_profiler");
        $__internal_7e086dda8e59968700bac7fc10a84d6056cd43d15496f985718a4be6d00017bd->enter($__internal_7e086dda8e59968700bac7fc10a84d6056cd43d15496f985718a4be6d00017bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_7e086dda8e59968700bac7fc10a84d6056cd43d15496f985718a4be6d00017bd->leave($__internal_7e086dda8e59968700bac7fc10a84d6056cd43d15496f985718a4be6d00017bd_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa52705289863267bdf57f8444113afdb1d0179e0ae3ef6581b839ae143558c9 = $this->env->getExtension("native_profiler");
        $__internal_aa52705289863267bdf57f8444113afdb1d0179e0ae3ef6581b839ae143558c9->enter($__internal_aa52705289863267bdf57f8444113afdb1d0179e0ae3ef6581b839ae143558c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_aa52705289863267bdf57f8444113afdb1d0179e0ae3ef6581b839ae143558c9->leave($__internal_aa52705289863267bdf57f8444113afdb1d0179e0ae3ef6581b839ae143558c9_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_083ccd5376bf8017cf8406a532f75bcd72468f21a33832a10bdd1a3d2cf92027 = $this->env->getExtension("native_profiler");
        $__internal_083ccd5376bf8017cf8406a532f75bcd72468f21a33832a10bdd1a3d2cf92027->enter($__internal_083ccd5376bf8017cf8406a532f75bcd72468f21a33832a10bdd1a3d2cf92027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<!--content-->
<div class=\"content\">
\t<div class=\"events\">
\t\t<div class=\"container\">
\t\t\t<div class=\"events-top\">
\t\t\t\t<div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h3><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("App_user_showBlog");
        echo "\">Técnicas</a></h3>
\t\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t\t<span>Para los más entusiastas</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 events-right animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["tecnica"]) {
            // line 36
            echo "\t\t\t\t<div class=\"events-bottom\">
\t\t\t\t\t<div class=\"col-md-7 events-bottom2 animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<h3>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["tecnica"], "nombre", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t\t\t<p>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["tecnica"], "descripcion", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<div class=\"bs-example\" data-example-id=\"simple-table\">
\t\t                    <table class=\"table\">
\t\t                      <thead>
\t\t                        <tr>
\t\t                          <th>#</th>
\t\t                          <th>Utensilio</th>
\t\t                        </tr>
\t\t                      </thead>
\t\t                      <tbody>
\t\t                        ";
            // line 50
            $context["fila"] = 0;
            // line 51
            echo "\t\t                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tecnica"], "utensilios", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["utensilio"]) {
                // line 52
                echo "\t\t                          ";
                $context["fila"] = ((isset($context["fila"]) ? $context["fila"] : $this->getContext($context, "fila")) + 1);
                echo "   
\t\t                            <tr>
\t\t                              <th scope=\"row\">";
                // line 54
                echo twig_escape_filter($this->env, (isset($context["fila"]) ? $context["fila"] : $this->getContext($context, "fila")), "html", null, true);
                echo "</th>
\t\t                              <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["utensilio"], "nombre", array()), "html", null, true);
                echo "</td>
\t\t                            </tr>
\t\t                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utensilio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t                      </tbody>
\t\t                    </table>
\t\t                    </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5 events-bottom1 animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<div class=\"videoWrapper\">
\t\t\t\t\t\t    <!-- Copy & Pasted from YouTube -->
\t\t\t\t\t\t    <iframe width=\"400\" height=\"250\" src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["tecnica"], "vid", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tecnica'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t</br>
\t\t\t<div class=\"navigation\">
\t\t\t    ";
        // line 73
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>


";
        
        $__internal_083ccd5376bf8017cf8406a532f75bcd72468f21a33832a10bdd1a3d2cf92027->leave($__internal_083ccd5376bf8017cf8406a532f75bcd72468f21a33832a10bdd1a3d2cf92027_prof);

    }

    public function getTemplateName()
    {
        return "@User/Tecnica/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 73,  198 => 71,  186 => 65,  177 => 58,  168 => 55,  164 => 54,  158 => 52,  153 => 51,  151 => 50,  138 => 40,  133 => 38,  129 => 36,  125 => 35,  119 => 32,  114 => 30,  109 => 28,  98 => 20,  90 => 14,  84 => 13,  76 => 10,  70 => 9,  58 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseuser.html.twig' %}
{% block stylesheets %}

{% block title %}Eat&Fit{% endblock%}
{{ parent() }}

{% endblock %}

{% block head %}
\t
{% endblock %}

{% block body %}
<!--content-->
<div class=\"content\">
\t<div class=\"events\">
\t\t<div class=\"container\">
\t\t\t<div class=\"events-top\">
\t\t\t\t<div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t<h3><a href=\"{{ path('App_user_showBlog') }}\">Técnicas</a></h3>
\t\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t\t<span>Para los más entusiastas</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 events-right animated wow fadeInRight\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t<div class=\"buscador\">
\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_row(form.nombre) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{{form_end(form)}}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% for tecnica in pagination %}
\t\t\t\t<div class=\"events-bottom\">
\t\t\t\t\t<div class=\"col-md-7 events-bottom2 animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<h3>{{tecnica.nombre}}</h3>
\t\t\t\t\t\t<label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
\t\t\t\t\t\t<p>{{tecnica.descripcion}}</p>
\t\t\t\t\t\t<div class=\"bs-example\" data-example-id=\"simple-table\">
\t\t                    <table class=\"table\">
\t\t                      <thead>
\t\t                        <tr>
\t\t                          <th>#</th>
\t\t                          <th>Utensilio</th>
\t\t                        </tr>
\t\t                      </thead>
\t\t                      <tbody>
\t\t                        {% set fila=0%}
\t\t                        {% for utensilio in tecnica.utensilios %}
\t\t                          {% set fila=fila+1%}   
\t\t                            <tr>
\t\t                              <th scope=\"row\">{{fila}}</th>
\t\t                              <td>{{utensilio.nombre}}</td>
\t\t                            </tr>
\t\t                        {% endfor %}
\t\t                      </tbody>
\t\t                    </table>
\t\t                    </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5 events-bottom1 animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
\t\t\t\t\t\t<div class=\"videoWrapper\">
\t\t\t\t\t\t    <!-- Copy & Pasted from YouTube -->
\t\t\t\t\t\t    <iframe width=\"400\" height=\"250\" src=\"{{tecnica.vid}}\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t</br>
\t\t\t<div class=\"navigation\">
\t\t\t    {{ knp_pagination_render(pagination) }}
\t\t\t</div>
\t\t</div>
\t</div>
</div>


{% endblock %}

";
    }
}
