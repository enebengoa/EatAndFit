<?php

/* AdminBundle:Ingrediente:form.html.twig */
class __TwigTemplate_38dd73b595ad67f5b70f0892aa2c94c3a812b182b4a04fdd272786abc27f1557 extends Twig_Template
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
        $__internal_abf2cd2549ff4bd0e4210f1f8728c4161a6f6440a2e36ba149f4151beb25df09 = $this->env->getExtension("native_profiler");
        $__internal_abf2cd2549ff4bd0e4210f1f8728c4161a6f6440a2e36ba149f4151beb25df09->enter($__internal_abf2cd2549ff4bd0e4210f1f8728c4161a6f6440a2e36ba149f4151beb25df09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Ingrediente:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_abf2cd2549ff4bd0e4210f1f8728c4161a6f6440a2e36ba149f4151beb25df09->leave($__internal_abf2cd2549ff4bd0e4210f1f8728c4161a6f6440a2e36ba149f4151beb25df09_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_55b3ba3672e62ce1f9a64f4fc996f7343923dd716337f7d478d3df015e74966a = $this->env->getExtension("native_profiler");
        $__internal_55b3ba3672e62ce1f9a64f4fc996f7343923dd716337f7d478d3df015e74966a->enter($__internal_55b3ba3672e62ce1f9a64f4fc996f7343923dd716337f7d478d3df015e74966a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<div class=\"form-group\">
\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoIngrediente", array()), 'label');
        echo "</br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoIngrediente", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unidadMedida", array()), 'label');
        echo "</br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unidadMedida", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caloriasUnidad", array()), 'row');
        echo "
\t</div>
\t\t<div class=\"form-group\">
\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "celiaco", array()), 'label');
        echo "</br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "celiaco", array()), 'widget');
        echo "
\t</div>
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_55b3ba3672e62ce1f9a64f4fc996f7343923dd716337f7d478d3df015e74966a->leave($__internal_55b3ba3672e62ce1f9a64f4fc996f7343923dd716337f7d478d3df015e74966a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Ingrediente:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  84 => 22,  77 => 20,  71 => 17,  63 => 14,  55 => 11,  49 => 8,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
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
\t<div class=\"form-group\">
\t\t{{ form_label(form.tipoIngrediente) }}</br>{{ form_widget(form.tipoIngrediente) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_label(form.unidadMedida) }}</br>{{ form_widget(form.unidadMedida) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.caloriasUnidad) }}
\t</div>
\t\t<div class=\"form-group\">
\t\t{{ form_label(form.celiaco) }}</br>{{ form_widget(form.celiaco) }}
\t</div>
        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
