<?php

/* @User/SubMenu/add.html.twig */
class __TwigTemplate_30fde904ecac970e9b82697d873006c442255467effee500c8580f664dcfa801 extends Twig_Template
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
        $__internal_a3f4a1ec95ce1587436da1a6fef669a2ddfc2225b7c9c6508d15200f6f2c7e85 = $this->env->getExtension("native_profiler");
        $__internal_a3f4a1ec95ce1587436da1a6fef669a2ddfc2225b7c9c6508d15200f6f2c7e85->enter($__internal_a3f4a1ec95ce1587436da1a6fef669a2ddfc2225b7c9c6508d15200f6f2c7e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/SubMenu/add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSubMenu"]) ? $context["formSubMenu"] : $this->getContext($context, "formSubMenu")), 'form_start', array("class" => "ajaxForm", "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:SubMenu:form.html.twig", "@User/SubMenu/add.html.twig", 3)->display(array_merge($context, array("formSubMenu" => (isset($context["formSubMenu"]) ? $context["formSubMenu"] : $this->getContext($context, "formSubMenu")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSubMenu"]) ? $context["formSubMenu"] : $this->getContext($context, "formSubMenu")), 'form_end');
        echo "
";
        
        $__internal_a3f4a1ec95ce1587436da1a6fef669a2ddfc2225b7c9c6508d15200f6f2c7e85->leave($__internal_a3f4a1ec95ce1587436da1a6fef669a2ddfc2225b7c9c6508d15200f6f2c7e85_prof);

    }

    public function getTemplateName()
    {
        return "@User/SubMenu/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  29 => 4,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(formSubMenu, {'class': 'ajaxForm',  'attr': {'class': 'ajaxForm'}}) }}

{% include \"UserBundle:SubMenu:form.html.twig\"  with {'formSubMenu': formSubMenu} %}

{{ form_end(formSubMenu) }}
";
    }
}
