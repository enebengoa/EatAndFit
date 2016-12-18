<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0ee8cde201ccf1b5327a145e292a73ede9b2cb036cc11d83f7d7deeb034b5c86 extends Twig_Template
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
        $__internal_c65b511ba71dc3fb4778c2f814d6192aacc2c937b4d9bd72caecea56eb44f1e3 = $this->env->getExtension("native_profiler");
        $__internal_c65b511ba71dc3fb4778c2f814d6192aacc2c937b4d9bd72caecea56eb44f1e3->enter($__internal_c65b511ba71dc3fb4778c2f814d6192aacc2c937b4d9bd72caecea56eb44f1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c65b511ba71dc3fb4778c2f814d6192aacc2c937b4d9bd72caecea56eb44f1e3->leave($__internal_c65b511ba71dc3fb4778c2f814d6192aacc2c937b4d9bd72caecea56eb44f1e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
