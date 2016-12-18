<?php

/* AdminBundle:TemaForo:form.html.twig */
class __TwigTemplate_ebb14c12d0328f8a8967b99aa389c62371087d6d254f7fd16a42a0234b95318c extends Twig_Template
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
        $__internal_765c0ebad5e6a568b3cfc5e62de240a91f63aeccd70f9ac686de1a5d1082c684 = $this->env->getExtension("native_profiler");
        $__internal_765c0ebad5e6a568b3cfc5e62de240a91f63aeccd70f9ac686de1a5d1082c684->enter($__internal_765c0ebad5e6a568b3cfc5e62de240a91f63aeccd70f9ac686de1a5d1082c684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TemaForo:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_765c0ebad5e6a568b3cfc5e62de240a91f63aeccd70f9ac686de1a5d1082c684->leave($__internal_765c0ebad5e6a568b3cfc5e62de240a91f63aeccd70f9ac686de1a5d1082c684_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_531d548ce20b2c5d19d76183a02da25c59b88790d8bab3742911edb37a688c1a = $this->env->getExtension("native_profiler");
        $__internal_531d548ce20b2c5d19d76183a02da25c59b88790d8bab3742911edb37a688c1a->enter($__internal_531d548ce20b2c5d19d76183a02da25c59b88790d8bab3742911edb37a688c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t<form class=\"blogger\" method=\"post\" >
\t";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'row');
        echo "
\t</div>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_531d548ce20b2c5d19d76183a02da25c59b88790d8bab3742911edb37a688c1a->leave($__internal_531d548ce20b2c5d19d76183a02da25c59b88790d8bab3742911edb37a688c1a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TemaForo:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  54 => 10,  49 => 8,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t<form class=\"blogger\" method=\"post\" >
\t{{ form_start(form) }}
\t<div class=\"form-group\">
\t\t{{ form_row(form.nombre) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.descripcion) }}
\t</div>
        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
