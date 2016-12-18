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
        $__internal_4ff6db67308a51c392b7b561578b7796e2a7ce3c60702614b82aec7e1174240e = $this->env->getExtension("native_profiler");
        $__internal_4ff6db67308a51c392b7b561578b7796e2a7ce3c60702614b82aec7e1174240e->enter($__internal_4ff6db67308a51c392b7b561578b7796e2a7ce3c60702614b82aec7e1174240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4ff6db67308a51c392b7b561578b7796e2a7ce3c60702614b82aec7e1174240e->leave($__internal_4ff6db67308a51c392b7b561578b7796e2a7ce3c60702614b82aec7e1174240e_prof);

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
