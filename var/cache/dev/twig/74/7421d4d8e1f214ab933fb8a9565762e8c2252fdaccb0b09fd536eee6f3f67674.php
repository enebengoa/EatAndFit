<?php

/* AdminBundle:HoraIngesta:add.html.twig */
class __TwigTemplate_2c933b4abc0af07dcefb6553c0f656a2b283ccaf76db841b9df1e12dad322ab6 extends Twig_Template
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
        $__internal_a9690b482ee52003d121114dd89125d5e18a768082fda788f10398012761c795 = $this->env->getExtension("native_profiler");
        $__internal_a9690b482ee52003d121114dd89125d5e18a768082fda788f10398012761c795->enter($__internal_a9690b482ee52003d121114dd89125d5e18a768082fda788f10398012761c795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:HoraIngesta:add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHora"]) ? $context["formHora"] : $this->getContext($context, "formHora")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_admin_addHoraIngesta"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("AdminBundle:HoraIngesta:form.html.twig", "AdminBundle:HoraIngesta:add.html.twig", 3)->display(array_merge($context, array("formHora" => (isset($context["formHora"]) ? $context["formHora"] : $this->getContext($context, "formHora")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHora"]) ? $context["formHora"] : $this->getContext($context, "formHora")), 'form_end');
        
        $__internal_a9690b482ee52003d121114dd89125d5e18a768082fda788f10398012761c795->leave($__internal_a9690b482ee52003d121114dd89125d5e18a768082fda788f10398012761c795_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:HoraIngesta:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  29 => 4,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(formHora, {'class': 'ajaxForm', 'action': path('App_admin_addHoraIngesta'), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"AdminBundle:HoraIngesta:form.html.twig\"  with {'formHora': formHora} %}

{{ form_end(formHora) }}";
    }
}
