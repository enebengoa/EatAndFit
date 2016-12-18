<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d595d452ab1a18ee3b04f20e5290d70203070341d7bca2280e22ee61be3bce07 extends Twig_Template
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
        $__internal_e7cccc35d165495f955052b3de1d464874a6e8b2fe1208e675cdeb4da6212c0f = $this->env->getExtension("native_profiler");
        $__internal_e7cccc35d165495f955052b3de1d464874a6e8b2fe1208e675cdeb4da6212c0f->enter($__internal_e7cccc35d165495f955052b3de1d464874a6e8b2fe1208e675cdeb4da6212c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e7cccc35d165495f955052b3de1d464874a6e8b2fe1208e675cdeb4da6212c0f->leave($__internal_e7cccc35d165495f955052b3de1d464874a6e8b2fe1208e675cdeb4da6212c0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
