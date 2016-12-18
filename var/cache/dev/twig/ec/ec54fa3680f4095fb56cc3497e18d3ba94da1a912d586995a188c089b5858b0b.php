<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_73bd182192d90bdfcdd3299534dc8e069c44a44548a0fb0e364e340830bd94b9 extends Twig_Template
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
        $__internal_062f2c4920442206f9f2bbb6b167b4cf240d42c35b67c4e4b04f831598e6b77d = $this->env->getExtension("native_profiler");
        $__internal_062f2c4920442206f9f2bbb6b167b4cf240d42c35b67c4e4b04f831598e6b77d->enter($__internal_062f2c4920442206f9f2bbb6b167b4cf240d42c35b67c4e4b04f831598e6b77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_062f2c4920442206f9f2bbb6b167b4cf240d42c35b67c4e4b04f831598e6b77d->leave($__internal_062f2c4920442206f9f2bbb6b167b4cf240d42c35b67c4e4b04f831598e6b77d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_38df2185b91c74ed5955cc23640dbe9c68e97f67ecf25cbdd1927e79ad14dd86 = $this->env->getExtension("native_profiler");
        $__internal_38df2185b91c74ed5955cc23640dbe9c68e97f67ecf25cbdd1927e79ad14dd86->enter($__internal_38df2185b91c74ed5955cc23640dbe9c68e97f67ecf25cbdd1927e79ad14dd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_38df2185b91c74ed5955cc23640dbe9c68e97f67ecf25cbdd1927e79ad14dd86->leave($__internal_38df2185b91c74ed5955cc23640dbe9c68e97f67ecf25cbdd1927e79ad14dd86_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
