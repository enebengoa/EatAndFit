<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f735c1311edbaeb9aae8e6658805760496443ffdaabc90aec40dbf2f16bc9049 extends Twig_Template
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
        $__internal_84b9510f2588685b6ccc839bc7339a68e228de16758c0e0b334d5b17443969cb = $this->env->getExtension("native_profiler");
        $__internal_84b9510f2588685b6ccc839bc7339a68e228de16758c0e0b334d5b17443969cb->enter($__internal_84b9510f2588685b6ccc839bc7339a68e228de16758c0e0b334d5b17443969cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_84b9510f2588685b6ccc839bc7339a68e228de16758c0e0b334d5b17443969cb->leave($__internal_84b9510f2588685b6ccc839bc7339a68e228de16758c0e0b334d5b17443969cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
