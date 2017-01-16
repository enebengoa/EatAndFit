<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_58bdc9479afde22b6756601a8aa6afb990929f3f2a4870ee7ef985503e9ef21c extends Twig_Template
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
        $__internal_4b3c68cf655654452a0ac7ebe243ed72b3ceb2ace21f63de0502ac2807bdf255 = $this->env->getExtension("native_profiler");
        $__internal_4b3c68cf655654452a0ac7ebe243ed72b3ceb2ace21f63de0502ac2807bdf255->enter($__internal_4b3c68cf655654452a0ac7ebe243ed72b3ceb2ace21f63de0502ac2807bdf255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4b3c68cf655654452a0ac7ebe243ed72b3ceb2ace21f63de0502ac2807bdf255->leave($__internal_4b3c68cf655654452a0ac7ebe243ed72b3ceb2ace21f63de0502ac2807bdf255_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
