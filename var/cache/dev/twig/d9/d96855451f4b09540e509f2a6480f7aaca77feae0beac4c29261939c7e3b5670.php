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
        $__internal_f64046b419b83c47c2fa39a0f6a31bd2ec71e2f494115d9fb617456ac47d2681 = $this->env->getExtension("native_profiler");
        $__internal_f64046b419b83c47c2fa39a0f6a31bd2ec71e2f494115d9fb617456ac47d2681->enter($__internal_f64046b419b83c47c2fa39a0f6a31bd2ec71e2f494115d9fb617456ac47d2681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_f64046b419b83c47c2fa39a0f6a31bd2ec71e2f494115d9fb617456ac47d2681->leave($__internal_f64046b419b83c47c2fa39a0f6a31bd2ec71e2f494115d9fb617456ac47d2681_prof);

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
