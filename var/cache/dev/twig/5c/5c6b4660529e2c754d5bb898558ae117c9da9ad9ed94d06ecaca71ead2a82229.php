<?php

/* @User/SubMenu/form.html.twig */
class __TwigTemplate_b522b4f3aa819031477d3147182137a9d921348c44c2202fb89ed2cb10300b6e extends Twig_Template
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
        $__internal_ed7533b5da0fed74ec60c926cdc47b57d408ff7fccb403ed45b96a26c64e5adc = $this->env->getExtension("native_profiler");
        $__internal_ed7533b5da0fed74ec60c926cdc47b57d408ff7fccb403ed45b96a26c64e5adc->enter($__internal_ed7533b5da0fed74ec60c926cdc47b57d408ff7fccb403ed45b96a26c64e5adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/SubMenu/form.html.twig"));

        // line 1
        echo "\t<div class=\"form-group\">
\t\t";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSubMenu"]) ? $context["formSubMenu"] : $this->getContext($context, "formSubMenu")), "HoraIngesta", array()), 'row');
        echo "
\t</div>
\t\t ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSubMenu"]) ? $context["formSubMenu"] : $this->getContext($context, "formSubMenu")), 'errors');
        echo "

";
        
        $__internal_ed7533b5da0fed74ec60c926cdc47b57d408ff7fccb403ed45b96a26c64e5adc->leave($__internal_ed7533b5da0fed74ec60c926cdc47b57d408ff7fccb403ed45b96a26c64e5adc_prof);

    }

    public function getTemplateName()
    {
        return "@User/SubMenu/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "\t<div class=\"form-group\">
\t\t{{ form_row(formSubMenu.HoraIngesta) }}
\t</div>
\t\t {{ form_errors(formSubMenu) }}

";
    }
}
