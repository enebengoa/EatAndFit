<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_5bf846ca8e6d8ed1dbd78fbc58d24e168331df8d76a7c95230ea8719683bcecd extends Twig_Template
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
        $__internal_6595abea114e0a86fd86bb22e00ce87b9d28de8b58f909c22037022052871d54 = $this->env->getExtension("native_profiler");
        $__internal_6595abea114e0a86fd86bb22e00ce87b9d28de8b58f909c22037022052871d54->enter($__internal_6595abea114e0a86fd86bb22e00ce87b9d28de8b58f909c22037022052871d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6595abea114e0a86fd86bb22e00ce87b9d28de8b58f909c22037022052871d54->leave($__internal_6595abea114e0a86fd86bb22e00ce87b9d28de8b58f909c22037022052871d54_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
