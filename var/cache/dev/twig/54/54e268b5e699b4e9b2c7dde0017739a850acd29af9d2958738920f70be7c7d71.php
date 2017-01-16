<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_208ff001de4d5edc8b89a2b8f730878441556197f41cd6236077f2ac79574425 extends Twig_Template
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
        $__internal_122b03f6675f753e1076b0d2b73c5a47c1d23aded75ab8f0fbaa5f7c9dcc5aff = $this->env->getExtension("native_profiler");
        $__internal_122b03f6675f753e1076b0d2b73c5a47c1d23aded75ab8f0fbaa5f7c9dcc5aff->enter($__internal_122b03f6675f753e1076b0d2b73c5a47c1d23aded75ab8f0fbaa5f7c9dcc5aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_122b03f6675f753e1076b0d2b73c5a47c1d23aded75ab8f0fbaa5f7c9dcc5aff->leave($__internal_122b03f6675f753e1076b0d2b73c5a47c1d23aded75ab8f0fbaa5f7c9dcc5aff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
