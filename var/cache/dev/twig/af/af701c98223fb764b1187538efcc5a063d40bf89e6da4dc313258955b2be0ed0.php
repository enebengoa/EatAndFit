<?php

/* AdminBundle:SubMenu:form.html.twig */
class __TwigTemplate_838331d586bb69f0a995e98f9c4e8420628223ce92b0ee1ff88e2b7e2e3a45d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09769746bfb4cff6d999a0a63d730641a459b8c791f78fa61c5306a81dafab25 = $this->env->getExtension("native_profiler");
        $__internal_09769746bfb4cff6d999a0a63d730641a459b8c791f78fa61c5306a81dafab25->enter($__internal_09769746bfb4cff6d999a0a63d730641a459b8c791f78fa61c5306a81dafab25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:SubMenu:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_09769746bfb4cff6d999a0a63d730641a459b8c791f78fa61c5306a81dafab25->leave($__internal_09769746bfb4cff6d999a0a63d730641a459b8c791f78fa61c5306a81dafab25_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_f6a5145710ce2ce7564384aa9512503a180228eac2274b3d54d67ec091131040 = $this->env->getExtension("native_profiler");
        $__internal_f6a5145710ce2ce7564384aa9512503a180228eac2274b3d54d67ec091131040->enter($__internal_f6a5145710ce2ce7564384aa9512503a180228eac2274b3d54d67ec091131040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t<form class=\"blogger\" method=\"post\" >
\t";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_f6a5145710ce2ce7564384aa9512503a180228eac2274b3d54d67ec091131040->leave($__internal_f6a5145710ce2ce7564384aa9512503a180228eac2274b3d54d67ec091131040_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:SubMenu:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t<form class=\"blogger\" method=\"post\" >
\t{{ form_start(form) }}
\t
        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
