<?php

/* AdminBundle:Utensilio:form.html.twig */
class __TwigTemplate_735834f125bb970970176b5ad407f88bc70e00bdc5e28dadb9f2f12b742cc307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6943be10c439b9e7f550988d0eeda0942e2998785675b6ccce43352c97bf9726 = $this->env->getExtension("native_profiler");
        $__internal_6943be10c439b9e7f550988d0eeda0942e2998785675b6ccce43352c97bf9726->enter($__internal_6943be10c439b9e7f550988d0eeda0942e2998785675b6ccce43352c97bf9726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Utensilio:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6943be10c439b9e7f550988d0eeda0942e2998785675b6ccce43352c97bf9726->leave($__internal_6943be10c439b9e7f550988d0eeda0942e2998785675b6ccce43352c97bf9726_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_fd12b4e129610a2bbebc7a673c3da5693a90a45df010b49c6a3bd7387f344193 = $this->env->getExtension("native_profiler");
        $__internal_fd12b4e129610a2bbebc7a673c3da5693a90a45df010b49c6a3bd7387f344193->enter($__internal_fd12b4e129610a2bbebc7a673c3da5693a90a45df010b49c6a3bd7387f344193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rating", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'row');
        echo "
\t</div>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_fd12b4e129610a2bbebc7a673c3da5693a90a45df010b49c6a3bd7387f344193->leave($__internal_fd12b4e129610a2bbebc7a673c3da5693a90a45df010b49c6a3bd7387f344193_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Utensilio:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  64 => 15,  59 => 13,  53 => 10,  47 => 7,  41 => 4,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t{{ form_start(form) }}
\t<div class=\"form-group\">
\t\t{{ form_row(form.nombre) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.descripcion) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.rating) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.imagen) }}
\t</div>
        {{ form_errors(form) }}
\t{{ form_end(form) }}
{% endblock %}
";
    }
}
