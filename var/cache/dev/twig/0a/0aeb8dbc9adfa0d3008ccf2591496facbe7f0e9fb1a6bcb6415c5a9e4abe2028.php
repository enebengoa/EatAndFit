<?php

/* @User/Comentario/list.html.twig */
class __TwigTemplate_188860c15d543bfb6d3339da61072d0895a191b547e8a51e6a8f9677e888984d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_311325d621ecb6c0191ba291edfe32fd57c06a30ec8c5c09b5bf5e55a87478ff = $this->env->getExtension("native_profiler");
        $__internal_311325d621ecb6c0191ba291edfe32fd57c06a30ec8c5c09b5bf5e55a87478ff->enter($__internal_311325d621ecb6c0191ba291edfe32fd57c06a30ec8c5c09b5bf5e55a87478ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Comentario/list.html.twig"));

        // line 1
        echo "<div class=\"comment\">
\t\t\t\t\t\t\t\t<h3>Commentarios</h3>
\t\t\t\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 4
            echo "\t\t\t\t\t\t\t\t\t <div class=\"media wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"code-in\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comentario"], "Usuarioo", array()), "username", array()), "html", null, true);
            echo "</a> <span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comentario"], "fechaCreacion", array()), "Y-M-d"), "html", null, true);
            echo "</span></p>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t    <div class=\"media-left\"></div>
\t\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "contenido", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t\t</div>";
        
        $__internal_311325d621ecb6c0191ba291edfe32fd57c06a30ec8c5c09b5bf5e55a87478ff->leave($__internal_311325d621ecb6c0191ba291edfe32fd57c06a30ec8c5c09b5bf5e55a87478ff_prof);

    }

    public function getTemplateName()
    {
        return "@User/Comentario/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  45 => 12,  34 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"comment\">
\t\t\t\t\t\t\t\t<h3>Commentarios</h3>
\t\t\t\t\t\t\t\t{% for comentario in comentarios %}
\t\t\t\t\t\t\t\t\t <div class=\"media wow fadeInLeft animated\" data-wow-delay=\".5s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"code-in\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"smith\"><a>{{ comentario.Usuarioo.username}}</a> <span>{{ comentario.fechaCreacion|date('Y-M-d') }}</span></p>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t    <div class=\"media-left\"></div>
\t\t\t\t\t\t\t\t\t    <div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>{{ comentario.contenido}}</p>
\t\t\t\t\t\t\t\t\t     </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t</div>";
    }
}
