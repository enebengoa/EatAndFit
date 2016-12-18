<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f831ae17c32f3c628f3e76bdac2ab318954336d031628eef648fc66c676849f8 extends Twig_Template
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
        $__internal_a878c5615451987a9e24de05ea8ced73626a03eebdee79a34c5f82bd36a8f577 = $this->env->getExtension("native_profiler");
        $__internal_a878c5615451987a9e24de05ea8ced73626a03eebdee79a34c5f82bd36a8f577->enter($__internal_a878c5615451987a9e24de05ea8ced73626a03eebdee79a34c5f82bd36a8f577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a878c5615451987a9e24de05ea8ced73626a03eebdee79a34c5f82bd36a8f577->leave($__internal_a878c5615451987a9e24de05ea8ced73626a03eebdee79a34c5f82bd36a8f577_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
