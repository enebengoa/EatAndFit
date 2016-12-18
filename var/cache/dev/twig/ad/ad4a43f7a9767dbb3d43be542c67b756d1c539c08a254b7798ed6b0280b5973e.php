<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e8c51679ab120e26db6b9105152237fcab6e0d1c0137e4c8abd31197e0b168de extends Twig_Template
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
        $__internal_028df09a5ecce53547379b945523df3ea0bacb2ba75db1753a4c46e11a9b8a28 = $this->env->getExtension("native_profiler");
        $__internal_028df09a5ecce53547379b945523df3ea0bacb2ba75db1753a4c46e11a9b8a28->enter($__internal_028df09a5ecce53547379b945523df3ea0bacb2ba75db1753a4c46e11a9b8a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_028df09a5ecce53547379b945523df3ea0bacb2ba75db1753a4c46e11a9b8a28->leave($__internal_028df09a5ecce53547379b945523df3ea0bacb2ba75db1753a4c46e11a9b8a28_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
