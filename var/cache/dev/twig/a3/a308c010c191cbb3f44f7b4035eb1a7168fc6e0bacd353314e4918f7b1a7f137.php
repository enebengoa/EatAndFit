<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6e05d6c07f84d2d8818635bdd1f80ed0acc510f7202f7bf42a811a578f53b6d3 extends Twig_Template
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
        $__internal_c3f74ea46e013830a52452015cbf72f7a03427c625e35a6902228c6e16a81536 = $this->env->getExtension("native_profiler");
        $__internal_c3f74ea46e013830a52452015cbf72f7a03427c625e35a6902228c6e16a81536->enter($__internal_c3f74ea46e013830a52452015cbf72f7a03427c625e35a6902228c6e16a81536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c3f74ea46e013830a52452015cbf72f7a03427c625e35a6902228c6e16a81536->leave($__internal_c3f74ea46e013830a52452015cbf72f7a03427c625e35a6902228c6e16a81536_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
