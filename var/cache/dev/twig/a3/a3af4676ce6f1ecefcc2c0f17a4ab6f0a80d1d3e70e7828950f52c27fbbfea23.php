<?php

/* @Admin/HoraIngesta/form.html.twig */
class __TwigTemplate_309917a4e22a64c9beb606bd183081c824b9e087df73924da77eb09360c00402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83a74c6a5087d25a71352329f582d7060e17cabd1499dde94738b9f1fda36095 = $this->env->getExtension("native_profiler");
        $__internal_83a74c6a5087d25a71352329f582d7060e17cabd1499dde94738b9f1fda36095->enter($__internal_83a74c6a5087d25a71352329f582d7060e17cabd1499dde94738b9f1fda36095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/HoraIngesta/form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_83a74c6a5087d25a71352329f582d7060e17cabd1499dde94738b9f1fda36095->leave($__internal_83a74c6a5087d25a71352329f582d7060e17cabd1499dde94738b9f1fda36095_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_827a260985204d2ad0543262a7dfe6b44fa33daf35fe5addd258addc9fd39ba6 = $this->env->getExtension("native_profiler");
        $__internal_827a260985204d2ad0543262a7dfe6b44fa33daf35fe5addd258addc9fd39ba6->enter($__internal_827a260985204d2ad0543262a7dfe6b44fa33daf35fe5addd258addc9fd39ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t<form class=\"blogger\" method=\"post\" >
\t";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t</div>
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_827a260985204d2ad0543262a7dfe6b44fa33daf35fe5addd258addc9fd39ba6->leave($__internal_827a260985204d2ad0543262a7dfe6b44fa33daf35fe5addd258addc9fd39ba6_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/HoraIngesta/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  48 => 7,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t<form class=\"blogger\" method=\"post\" >
\t{{ form_start(form) }}
\t<div class=\"form-group\">
\t\t{{ form_row(form.nombre) }}
\t</div>
        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
