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
        $__internal_9d12e882fbf956afbc7e9a4519dd3ca734d0d513ae37e028a5043bfd1ca3f1d0 = $this->env->getExtension("native_profiler");
        $__internal_9d12e882fbf956afbc7e9a4519dd3ca734d0d513ae37e028a5043bfd1ca3f1d0->enter($__internal_9d12e882fbf956afbc7e9a4519dd3ca734d0d513ae37e028a5043bfd1ca3f1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9d12e882fbf956afbc7e9a4519dd3ca734d0d513ae37e028a5043bfd1ca3f1d0->leave($__internal_9d12e882fbf956afbc7e9a4519dd3ca734d0d513ae37e028a5043bfd1ca3f1d0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b36ecb009561a5eaccf4a80e886c84dd4acdb96060a89819158b40c77fd433d = $this->env->getExtension("native_profiler");
        $__internal_2b36ecb009561a5eaccf4a80e886c84dd4acdb96060a89819158b40c77fd433d->enter($__internal_2b36ecb009561a5eaccf4a80e886c84dd4acdb96060a89819158b40c77fd433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2b36ecb009561a5eaccf4a80e886c84dd4acdb96060a89819158b40c77fd433d->leave($__internal_2b36ecb009561a5eaccf4a80e886c84dd4acdb96060a89819158b40c77fd433d_prof);

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
