<?php

/* @Admin/SubMenu/form.html.twig */
class __TwigTemplate_f5906e5d9b390f451ff52360fe4f18176b57529e215024497e473cf09774abca extends Twig_Template
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
        $__internal_e4281db6891341d0452fe03f897f6f1c941d015cb0f72fc74661d11b65789e59 = $this->env->getExtension("native_profiler");
        $__internal_e4281db6891341d0452fe03f897f6f1c941d015cb0f72fc74661d11b65789e59->enter($__internal_e4281db6891341d0452fe03f897f6f1c941d015cb0f72fc74661d11b65789e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/SubMenu/form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_e4281db6891341d0452fe03f897f6f1c941d015cb0f72fc74661d11b65789e59->leave($__internal_e4281db6891341d0452fe03f897f6f1c941d015cb0f72fc74661d11b65789e59_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_61418bcc8007dc509e063980d0d0d05173caeed8558dde45187db8f0be5c484d = $this->env->getExtension("native_profiler");
        $__internal_61418bcc8007dc509e063980d0d0d05173caeed8558dde45187db8f0be5c484d->enter($__internal_61418bcc8007dc509e063980d0d0d05173caeed8558dde45187db8f0be5c484d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t<form class=\"blogger\" method=\"post\" >
\t";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_61418bcc8007dc509e063980d0d0d05173caeed8558dde45187db8f0be5c484d->leave($__internal_61418bcc8007dc509e063980d0d0d05173caeed8558dde45187db8f0be5c484d_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/SubMenu/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t<form class=\"blogger\" method=\"post\" >
\t{{ form_start(form) }}
\t
        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
