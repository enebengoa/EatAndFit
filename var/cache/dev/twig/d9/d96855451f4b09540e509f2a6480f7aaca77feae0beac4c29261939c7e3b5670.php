<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e1cfc65ef8ccfb40ed70cae59df61252ffbc447b68da6ad226170439cbed699c extends Twig_Template
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
        $__internal_50457988ada7d87b6e0ca20ea4cca9d9c7b2629ff6af9d0a34d2bffa6ea5c2b6 = $this->env->getExtension("native_profiler");
        $__internal_50457988ada7d87b6e0ca20ea4cca9d9c7b2629ff6af9d0a34d2bffa6ea5c2b6->enter($__internal_50457988ada7d87b6e0ca20ea4cca9d9c7b2629ff6af9d0a34d2bffa6ea5c2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_50457988ada7d87b6e0ca20ea4cca9d9c7b2629ff6af9d0a34d2bffa6ea5c2b6->leave($__internal_50457988ada7d87b6e0ca20ea4cca9d9c7b2629ff6af9d0a34d2bffa6ea5c2b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
