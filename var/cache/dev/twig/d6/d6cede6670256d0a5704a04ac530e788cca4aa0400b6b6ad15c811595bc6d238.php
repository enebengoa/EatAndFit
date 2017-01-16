<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2fc3d20e431d4d4a547eff1e53a3c313955966613e8f315147235c7d9eaabbfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d338779074fdef476d9a87d0ad2076a92d46ffbe8212d97490f54e6eec4f1aa = $this->env->getExtension("native_profiler");
        $__internal_7d338779074fdef476d9a87d0ad2076a92d46ffbe8212d97490f54e6eec4f1aa->enter($__internal_7d338779074fdef476d9a87d0ad2076a92d46ffbe8212d97490f54e6eec4f1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7d338779074fdef476d9a87d0ad2076a92d46ffbe8212d97490f54e6eec4f1aa->leave($__internal_7d338779074fdef476d9a87d0ad2076a92d46ffbe8212d97490f54e6eec4f1aa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e8f790a2e8ebb77a2dfe920362988bf7503ecee1bdc43ff5151450df8e57023 = $this->env->getExtension("native_profiler");
        $__internal_1e8f790a2e8ebb77a2dfe920362988bf7503ecee1bdc43ff5151450df8e57023->enter($__internal_1e8f790a2e8ebb77a2dfe920362988bf7503ecee1bdc43ff5151450df8e57023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1e8f790a2e8ebb77a2dfe920362988bf7503ecee1bdc43ff5151450df8e57023->leave($__internal_1e8f790a2e8ebb77a2dfe920362988bf7503ecee1bdc43ff5151450df8e57023_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
