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
        $__internal_e7fddbc77131365e3285872563fe0c65fbcb4459ef0cb6d090ca9a6cb6fb3381 = $this->env->getExtension("native_profiler");
        $__internal_e7fddbc77131365e3285872563fe0c65fbcb4459ef0cb6d090ca9a6cb6fb3381->enter($__internal_e7fddbc77131365e3285872563fe0c65fbcb4459ef0cb6d090ca9a6cb6fb3381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e7fddbc77131365e3285872563fe0c65fbcb4459ef0cb6d090ca9a6cb6fb3381->leave($__internal_e7fddbc77131365e3285872563fe0c65fbcb4459ef0cb6d090ca9a6cb6fb3381_prof);

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
