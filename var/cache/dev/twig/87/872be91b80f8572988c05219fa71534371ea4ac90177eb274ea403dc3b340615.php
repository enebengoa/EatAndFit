<?php

/* UserBundle:SubMenu:form.html.twig */
class __TwigTemplate_32cda92dd4164e03830f23ae6a216e169987702011a1add63f081f1ef65f9974 extends Twig_Template
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
        $__internal_57b379df458c587da726e127b4cd7310d8ef08fc8ca7700973c795f40efd4d59 = $this->env->getExtension("native_profiler");
        $__internal_57b379df458c587da726e127b4cd7310d8ef08fc8ca7700973c795f40efd4d59->enter($__internal_57b379df458c587da726e127b4cd7310d8ef08fc8ca7700973c795f40efd4d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:SubMenu:form.html.twig"));

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
        
        $__internal_57b379df458c587da726e127b4cd7310d8ef08fc8ca7700973c795f40efd4d59->leave($__internal_57b379df458c587da726e127b4cd7310d8ef08fc8ca7700973c795f40efd4d59_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:SubMenu:form.html.twig";
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
