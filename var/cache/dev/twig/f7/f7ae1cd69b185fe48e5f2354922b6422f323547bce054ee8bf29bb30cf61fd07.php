<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ffb3d770e4c19a0c29909f7ff950b0b68fe1b688e8c678d074a783b814ce2d33 extends Twig_Template
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
        $__internal_956a32d08d254fe30c696eaab66dbc641e1368525abbf5d41007e5c8c4b5beb8 = $this->env->getExtension("native_profiler");
        $__internal_956a32d08d254fe30c696eaab66dbc641e1368525abbf5d41007e5c8c4b5beb8->enter($__internal_956a32d08d254fe30c696eaab66dbc641e1368525abbf5d41007e5c8c4b5beb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_956a32d08d254fe30c696eaab66dbc641e1368525abbf5d41007e5c8c4b5beb8->leave($__internal_956a32d08d254fe30c696eaab66dbc641e1368525abbf5d41007e5c8c4b5beb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
