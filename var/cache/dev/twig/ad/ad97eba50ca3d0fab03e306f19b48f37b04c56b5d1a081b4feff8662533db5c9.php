<?php

/* AdminBundle:TemaForo:form.html.twig */
class __TwigTemplate_ebb14c12d0328f8a8967b99aa389c62371087d6d254f7fd16a42a0234b95318c extends Twig_Template
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
        $__internal_aa23288f37994ca921181599b429de3c1833e708c1a4844eea0cd461402f0514 = $this->env->getExtension("native_profiler");
        $__internal_aa23288f37994ca921181599b429de3c1833e708c1a4844eea0cd461402f0514->enter($__internal_aa23288f37994ca921181599b429de3c1833e708c1a4844eea0cd461402f0514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TemaForo:form.html.twig"));

        // line 1
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), "nombre", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), "descripcion", array()), 'row');
        echo "
\t</div>
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), 'errors');
        echo "
\t\t
";
        
        $__internal_aa23288f37994ca921181599b429de3c1833e708c1a4844eea0cd461402f0514->leave($__internal_aa23288f37994ca921181599b429de3c1833e708c1a4844eea0cd461402f0514_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TemaForo:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  32 => 6,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "
\t<div class=\"form-group\">
\t\t{{ form_row(formForo.nombre) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(formForo.descripcion) }}
\t</div>
        {{ form_errors(formForo) }}
\t\t
";
    }
}
