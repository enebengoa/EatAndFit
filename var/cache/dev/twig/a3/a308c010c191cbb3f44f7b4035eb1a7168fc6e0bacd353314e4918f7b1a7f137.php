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
        $__internal_c39202bf6c46ea63a3ea2670bb7b301d9d4b4db6f330cdfe281d474af6fcef9c = $this->env->getExtension("native_profiler");
        $__internal_c39202bf6c46ea63a3ea2670bb7b301d9d4b4db6f330cdfe281d474af6fcef9c->enter($__internal_c39202bf6c46ea63a3ea2670bb7b301d9d4b4db6f330cdfe281d474af6fcef9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c39202bf6c46ea63a3ea2670bb7b301d9d4b4db6f330cdfe281d474af6fcef9c->leave($__internal_c39202bf6c46ea63a3ea2670bb7b301d9d4b4db6f330cdfe281d474af6fcef9c_prof);

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
