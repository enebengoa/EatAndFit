<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b86fcb9fae9f1f4b7e0e0a4071eab075241c416000eddbcf92fe9d5e25d986eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1eb5a236f810680820bd8262932dd0234f8b65b5cc62b1d3ef790fa9aa9df8a = $this->env->getExtension("native_profiler");
        $__internal_f1eb5a236f810680820bd8262932dd0234f8b65b5cc62b1d3ef790fa9aa9df8a->enter($__internal_f1eb5a236f810680820bd8262932dd0234f8b65b5cc62b1d3ef790fa9aa9df8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1eb5a236f810680820bd8262932dd0234f8b65b5cc62b1d3ef790fa9aa9df8a->leave($__internal_f1eb5a236f810680820bd8262932dd0234f8b65b5cc62b1d3ef790fa9aa9df8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_434cbf926f09d9398a07ce90a7f582758e8ecf7cb5e1f7c2b64005cb1230a5f3 = $this->env->getExtension("native_profiler");
        $__internal_434cbf926f09d9398a07ce90a7f582758e8ecf7cb5e1f7c2b64005cb1230a5f3->enter($__internal_434cbf926f09d9398a07ce90a7f582758e8ecf7cb5e1f7c2b64005cb1230a5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_434cbf926f09d9398a07ce90a7f582758e8ecf7cb5e1f7c2b64005cb1230a5f3->leave($__internal_434cbf926f09d9398a07ce90a7f582758e8ecf7cb5e1f7c2b64005cb1230a5f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
