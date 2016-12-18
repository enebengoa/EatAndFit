<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_29e21d05a7e253bb2f11ee5df38ee9945d69ceda8ee3e09a61b936b6296f68af extends Twig_Template
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
        $__internal_b1bb50bba1c73d7c19e1b7e9ee51554cf513b55a547f3191536b6d741a4a6a58 = $this->env->getExtension("native_profiler");
        $__internal_b1bb50bba1c73d7c19e1b7e9ee51554cf513b55a547f3191536b6d741a4a6a58->enter($__internal_b1bb50bba1c73d7c19e1b7e9ee51554cf513b55a547f3191536b6d741a4a6a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b1bb50bba1c73d7c19e1b7e9ee51554cf513b55a547f3191536b6d741a4a6a58->leave($__internal_b1bb50bba1c73d7c19e1b7e9ee51554cf513b55a547f3191536b6d741a4a6a58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
