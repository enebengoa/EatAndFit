<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_52556f9358dc64e7d9a3640a408ee522cd3518c61f9a9e397a2e312c0ebf4f49 extends Twig_Template
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
        $__internal_ac1365f93f30396040131bfb90d383bb853750b329e280d9fc5e466ae7a98510 = $this->env->getExtension("native_profiler");
        $__internal_ac1365f93f30396040131bfb90d383bb853750b329e280d9fc5e466ae7a98510->enter($__internal_ac1365f93f30396040131bfb90d383bb853750b329e280d9fc5e466ae7a98510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ac1365f93f30396040131bfb90d383bb853750b329e280d9fc5e466ae7a98510->leave($__internal_ac1365f93f30396040131bfb90d383bb853750b329e280d9fc5e466ae7a98510_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
