<?php

/* UserBundle:Menu:form.html.twig */
class __TwigTemplate_86d52133cfc2d28b050c3ceede2cd8d4e6c9c3e46d23bdd6a6597c20ade47f37 extends Twig_Template
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
        $__internal_c7f720bd67519a212ad140a702bf0bbf3ef8ce0595f074ef0ad0dde758681bb7 = $this->env->getExtension("native_profiler");
        $__internal_c7f720bd67519a212ad140a702bf0bbf3ef8ce0595f074ef0ad0dde758681bb7->enter($__internal_c7f720bd67519a212ad140a702bf0bbf3ef8ce0595f074ef0ad0dde758681bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Menu:form.html.twig"));

        // line 1
        echo "\t<div class=\"form-group\">
\t\t";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), "nombre", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), "descripcion", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), "publico", array()), 'label');
        echo "</br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), "publico", array()), 'widget');
        echo "
\t</div>
\t\t ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), 'errors');
        echo "

";
        
        $__internal_c7f720bd67519a212ad140a702bf0bbf3ef8ce0595f074ef0ad0dde758681bb7->leave($__internal_c7f720bd67519a212ad140a702bf0bbf3ef8ce0595f074ef0ad0dde758681bb7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Menu:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  37 => 8,  31 => 5,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "\t<div class=\"form-group\">
\t\t{{ form_row(formMenu.nombre) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(formMenu.descripcion) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_label(formMenu.publico) }}</br>{{ form_widget(formMenu.publico) }}
\t</div>
\t\t {{ form_errors(formMenu) }}

";
    }
}
