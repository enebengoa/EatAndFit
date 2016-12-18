<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a88b7decd2cd72832bfb21aa72ca7ed911869c9859db09eeecab700071ce3b41 extends Twig_Template
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
        $__internal_cd57634267c93465bda8a500c3245271fbe916dc0c9b8049cba4117d8ab14b49 = $this->env->getExtension("native_profiler");
        $__internal_cd57634267c93465bda8a500c3245271fbe916dc0c9b8049cba4117d8ab14b49->enter($__internal_cd57634267c93465bda8a500c3245271fbe916dc0c9b8049cba4117d8ab14b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cd57634267c93465bda8a500c3245271fbe916dc0c9b8049cba4117d8ab14b49->leave($__internal_cd57634267c93465bda8a500c3245271fbe916dc0c9b8049cba4117d8ab14b49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
