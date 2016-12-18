<?php

/* @Admin/Ingrediente/form.html.twig */
class __TwigTemplate_0a7d5c243da56e4010ca4c9b4370adba3f825445a64ec5c2584cd649cf1978ea extends Twig_Template
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
        $__internal_6260caf8aad43e27964e39cec7928fbe68d06c39f4c94815434045d7c8b3c617 = $this->env->getExtension("native_profiler");
        $__internal_6260caf8aad43e27964e39cec7928fbe68d06c39f4c94815434045d7c8b3c617->enter($__internal_6260caf8aad43e27964e39cec7928fbe68d06c39f4c94815434045d7c8b3c617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Ingrediente/form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6260caf8aad43e27964e39cec7928fbe68d06c39f4c94815434045d7c8b3c617->leave($__internal_6260caf8aad43e27964e39cec7928fbe68d06c39f4c94815434045d7c8b3c617_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7be8ba59e2851811a6e3d6c4e9a4e42ef6213f8421e932585d0c71d417938c43 = $this->env->getExtension("native_profiler");
        $__internal_7be8ba59e2851811a6e3d6c4e9a4e42ef6213f8421e932585d0c71d417938c43->enter($__internal_7be8ba59e2851811a6e3d6c4e9a4e42ef6213f8421e932585d0c71d417938c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7be8ba59e2851811a6e3d6c4e9a4e42ef6213f8421e932585d0c71d417938c43->leave($__internal_7be8ba59e2851811a6e3d6c4e9a4e42ef6213f8421e932585d0c71d417938c43_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Ingrediente/form.html.twig";
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
