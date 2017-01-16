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
        $__internal_fa4625fd4fee6e5bc846c02d983728a6b253051578c4d8c0c3eba27624dee089 = $this->env->getExtension("native_profiler");
        $__internal_fa4625fd4fee6e5bc846c02d983728a6b253051578c4d8c0c3eba27624dee089->enter($__internal_fa4625fd4fee6e5bc846c02d983728a6b253051578c4d8c0c3eba27624dee089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fa4625fd4fee6e5bc846c02d983728a6b253051578c4d8c0c3eba27624dee089->leave($__internal_fa4625fd4fee6e5bc846c02d983728a6b253051578c4d8c0c3eba27624dee089_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_84a6d38414ec5e3a900b4b43ddd0b804be42f4c4669a9894c9a594a93b62694a = $this->env->getExtension("native_profiler");
        $__internal_84a6d38414ec5e3a900b4b43ddd0b804be42f4c4669a9894c9a594a93b62694a->enter($__internal_84a6d38414ec5e3a900b4b43ddd0b804be42f4c4669a9894c9a594a93b62694a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_84a6d38414ec5e3a900b4b43ddd0b804be42f4c4669a9894c9a594a93b62694a->leave($__internal_84a6d38414ec5e3a900b4b43ddd0b804be42f4c4669a9894c9a594a93b62694a_prof);

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
