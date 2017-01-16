<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5dabdf5269f61969079f25f9229df33865d60dd3632f6d49a943d3ab991a6488 extends Twig_Template
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
        $__internal_fe105e319c225fcdb897d1761f1535f3e7726ae190a02f7cf48050af31bd3e3e = $this->env->getExtension("native_profiler");
        $__internal_fe105e319c225fcdb897d1761f1535f3e7726ae190a02f7cf48050af31bd3e3e->enter($__internal_fe105e319c225fcdb897d1761f1535f3e7726ae190a02f7cf48050af31bd3e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fe105e319c225fcdb897d1761f1535f3e7726ae190a02f7cf48050af31bd3e3e->leave($__internal_fe105e319c225fcdb897d1761f1535f3e7726ae190a02f7cf48050af31bd3e3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
