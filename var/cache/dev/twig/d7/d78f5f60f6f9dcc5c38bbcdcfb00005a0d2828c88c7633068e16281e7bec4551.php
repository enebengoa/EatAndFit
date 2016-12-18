<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1bf06bc98a124bdae5006d2db28e88dd3073e46345ea226789a9bd7526bfb88a extends Twig_Template
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
        $__internal_33fcfad539c1ab9c0d7e7335eb00a620e89ca072a739c6b4447b00668e8629ca = $this->env->getExtension("native_profiler");
        $__internal_33fcfad539c1ab9c0d7e7335eb00a620e89ca072a739c6b4447b00668e8629ca->enter($__internal_33fcfad539c1ab9c0d7e7335eb00a620e89ca072a739c6b4447b00668e8629ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_33fcfad539c1ab9c0d7e7335eb00a620e89ca072a739c6b4447b00668e8629ca->leave($__internal_33fcfad539c1ab9c0d7e7335eb00a620e89ca072a739c6b4447b00668e8629ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
