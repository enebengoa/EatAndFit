<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_595809ce4752b28879534d4923f7f5c6a98216a83dc5a8063f981b4ed85f3548 extends Twig_Template
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
        $__internal_104c1f7d14c18afd9906115d68dd841e2ca2ebb45eba2d6bbb5b71ac70c2b7ff = $this->env->getExtension("native_profiler");
        $__internal_104c1f7d14c18afd9906115d68dd841e2ca2ebb45eba2d6bbb5b71ac70c2b7ff->enter($__internal_104c1f7d14c18afd9906115d68dd841e2ca2ebb45eba2d6bbb5b71ac70c2b7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_104c1f7d14c18afd9906115d68dd841e2ca2ebb45eba2d6bbb5b71ac70c2b7ff->leave($__internal_104c1f7d14c18afd9906115d68dd841e2ca2ebb45eba2d6bbb5b71ac70c2b7ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
    }
}
