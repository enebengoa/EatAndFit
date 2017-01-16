<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_29e21d05a7e253bb2f11ee5df38ee9945d69ceda8ee3e09a61b936b6296f68af extends Twig_Template
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
        $__internal_6c368a4eaa83681b3cc0c9d169c6ac5e1d7a6f693ede0a51677f15f34b38e572 = $this->env->getExtension("native_profiler");
        $__internal_6c368a4eaa83681b3cc0c9d169c6ac5e1d7a6f693ede0a51677f15f34b38e572->enter($__internal_6c368a4eaa83681b3cc0c9d169c6ac5e1d7a6f693ede0a51677f15f34b38e572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6c368a4eaa83681b3cc0c9d169c6ac5e1d7a6f693ede0a51677f15f34b38e572->leave($__internal_6c368a4eaa83681b3cc0c9d169c6ac5e1d7a6f693ede0a51677f15f34b38e572_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
