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
        $__internal_0c9047ad3e29a55543d29bba69d17cf6b287fd6fc9ae55dbc270b80f22465728 = $this->env->getExtension("native_profiler");
        $__internal_0c9047ad3e29a55543d29bba69d17cf6b287fd6fc9ae55dbc270b80f22465728->enter($__internal_0c9047ad3e29a55543d29bba69d17cf6b287fd6fc9ae55dbc270b80f22465728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0c9047ad3e29a55543d29bba69d17cf6b287fd6fc9ae55dbc270b80f22465728->leave($__internal_0c9047ad3e29a55543d29bba69d17cf6b287fd6fc9ae55dbc270b80f22465728_prof);

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
