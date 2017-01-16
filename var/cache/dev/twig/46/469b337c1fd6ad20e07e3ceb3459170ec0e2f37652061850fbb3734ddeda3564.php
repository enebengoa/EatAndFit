<?php

/* @Admin/Ingrediente/form.html.twig */
class __TwigTemplate_0a7d5c243da56e4010ca4c9b4370adba3f825445a64ec5c2584cd649cf1978ea extends Twig_Template
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
        $__internal_f4ad15deee5e078e0cc30cbffc500cd4e3f12b63ef70754bf4158ec5c9cd856f = $this->env->getExtension("native_profiler");
        $__internal_f4ad15deee5e078e0cc30cbffc500cd4e3f12b63ef70754bf4158ec5c9cd856f->enter($__internal_f4ad15deee5e078e0cc30cbffc500cd4e3f12b63ef70754bf4158ec5c9cd856f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Ingrediente/form.html.twig"));

        // line 1
        echo "\t<div class=\"form-group\">
\t\t";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), "nombre", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), "descripcion", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), "tipoIngrediente", array()), 'label');
        echo "</br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), "tipoIngrediente", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), "unidadMedida", array()), 'label');
        echo "</br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), "unidadMedida", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), "caloriasUnidad", array()), 'row');
        echo "
\t</div>
\t\t<div class=\"form-group\">
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), "celiaco", array()), 'label');
        echo "</br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), "celiaco", array()), 'widget');
        echo "
\t</div>
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), 'errors');
        echo "
\t\t
";
        
        $__internal_f4ad15deee5e078e0cc30cbffc500cd4e3f12b63ef70754bf4158ec5c9cd856f->leave($__internal_f4ad15deee5e078e0cc30cbffc500cd4e3f12b63ef70754bf4158ec5c9cd856f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Ingrediente/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  59 => 17,  53 => 14,  45 => 11,  37 => 8,  31 => 5,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "\t<div class=\"form-group\">
\t\t{{ form_row(formIngrediente.nombre) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(formIngrediente.descripcion) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_label(formIngrediente.tipoIngrediente) }}</br>{{ form_widget(formIngrediente.tipoIngrediente) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_label(formIngrediente.unidadMedida) }}</br>{{ form_widget(formIngrediente.unidadMedida) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(formIngrediente.caloriasUnidad) }}
\t</div>
\t\t<div class=\"form-group\">
\t\t{{ form_label(formIngrediente.celiaco) }}</br>{{ form_widget(formIngrediente.celiaco) }}
\t</div>
        {{ form_errors(formIngrediente) }}
\t\t
";
    }
}
