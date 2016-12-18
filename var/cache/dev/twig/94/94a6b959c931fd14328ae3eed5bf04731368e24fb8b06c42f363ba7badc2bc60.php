<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_40dbfb4de50da04210548af2450e0d2275e8ee9da7b5df7370d7cad93aa8b73e extends Twig_Template
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
        $__internal_680714dd25661fe898dc46d731f5e301bb5bc4f27032c01bb1075a70f36409aa = $this->env->getExtension("native_profiler");
        $__internal_680714dd25661fe898dc46d731f5e301bb5bc4f27032c01bb1075a70f36409aa->enter($__internal_680714dd25661fe898dc46d731f5e301bb5bc4f27032c01bb1075a70f36409aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "

<div class=\"login-box\">
    <div>
        <div class=\"login-form row\">
            <div class=\"col-sm-12 text-center login-header\">
                <i class=\"icon fa fa-cutlery\"></i>
                <h4 class=\"login-title\">Eat&Fit</h4>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"login-body\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    \t\t\t\t\t<div>
        \t\t\t\t\t<input type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    \t\t\t\t\t</div>
\t\t\t\t\t";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>  
            </div>
        </div>
    </div>
</div>

    ";
        
        $__internal_680714dd25661fe898dc46d731f5e301bb5bc4f27032c01bb1075a70f36409aa->leave($__internal_680714dd25661fe898dc46d731f5e301bb5bc4f27032c01bb1075a70f36409aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  44 => 16,  39 => 14,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}

<div class=\"login-box\">
    <div>
        <div class=\"login-form row\">
            <div class=\"col-sm-12 text-center login-header\">
                <i class=\"icon fa fa-cutlery\"></i>
                <h4 class=\"login-title\">Eat&Fit</h4>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"login-body\">
                    {{ form_widget(form) }}
    \t\t\t\t\t<div>
        \t\t\t\t\t<input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    \t\t\t\t\t</div>
\t\t\t\t\t{{ form_end(form) }}
                </div>  
            </div>
        </div>
    </div>
</div>

    ";
    }
}
