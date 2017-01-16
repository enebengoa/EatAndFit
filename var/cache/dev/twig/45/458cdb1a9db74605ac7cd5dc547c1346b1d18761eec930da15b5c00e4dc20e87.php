<?php

/* AdminBundle:Ingrediente:form.html.twig */
class __TwigTemplate_38dd73b595ad67f5b70f0892aa2c94c3a812b182b4a04fdd272786abc27f1557 extends Twig_Template
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
        $__internal_80d39aa8911026acf7abce4a3a06071eae2ad61b96c29a3a6dfe44ea0fa48c4c = $this->env->getExtension("native_profiler");
        $__internal_80d39aa8911026acf7abce4a3a06071eae2ad61b96c29a3a6dfe44ea0fa48c4c->enter($__internal_80d39aa8911026acf7abce4a3a06071eae2ad61b96c29a3a6dfe44ea0fa48c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Ingrediente:form.html.twig"));

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
        
        $__internal_80d39aa8911026acf7abce4a3a06071eae2ad61b96c29a3a6dfe44ea0fa48c4c->leave($__internal_80d39aa8911026acf7abce4a3a06071eae2ad61b96c29a3a6dfe44ea0fa48c4c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Ingrediente:form.html.twig";
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
