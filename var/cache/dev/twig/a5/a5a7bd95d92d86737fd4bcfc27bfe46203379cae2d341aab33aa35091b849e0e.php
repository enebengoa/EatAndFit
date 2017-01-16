<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8918f8d63e30aecb95cfff53968a841fed375967ec9ac12bec217305eb417e42 extends Twig_Template
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
        $__internal_c0be8d7613e6f4a498c4df7056513871db9559c8ce43cd97d4dfaf11aa7f93e1 = $this->env->getExtension("native_profiler");
        $__internal_c0be8d7613e6f4a498c4df7056513871db9559c8ce43cd97d4dfaf11aa7f93e1->enter($__internal_c0be8d7613e6f4a498c4df7056513871db9559c8ce43cd97d4dfaf11aa7f93e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c0be8d7613e6f4a498c4df7056513871db9559c8ce43cd97d4dfaf11aa7f93e1->leave($__internal_c0be8d7613e6f4a498c4df7056513871db9559c8ce43cd97d4dfaf11aa7f93e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
