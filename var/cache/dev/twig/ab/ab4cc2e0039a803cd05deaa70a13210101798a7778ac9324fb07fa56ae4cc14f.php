<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ae83a8ac398c121d6c03bdedd44a77e67af1865466dd2d367d3ee1d9ae9596fd extends Twig_Template
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
        $__internal_122e1e35421c6ece3cc260c75261f5caafedb25ae9822ca92f8424acd39e2721 = $this->env->getExtension("native_profiler");
        $__internal_122e1e35421c6ece3cc260c75261f5caafedb25ae9822ca92f8424acd39e2721->enter($__internal_122e1e35421c6ece3cc260c75261f5caafedb25ae9822ca92f8424acd39e2721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_122e1e35421c6ece3cc260c75261f5caafedb25ae9822ca92f8424acd39e2721->leave($__internal_122e1e35421c6ece3cc260c75261f5caafedb25ae9822ca92f8424acd39e2721_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
