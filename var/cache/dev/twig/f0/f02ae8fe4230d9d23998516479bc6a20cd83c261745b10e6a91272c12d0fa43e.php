<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_c19b989ab0e51a4248dab1beff7d003b792b41c87b8e1f01213717de154e7e76 extends Twig_Template
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
        $__internal_85ee90c4fe3b56c91971dc71c741aa5831a3bad88b5d9e71ebdcb2f96bb4ab48 = $this->env->getExtension("native_profiler");
        $__internal_85ee90c4fe3b56c91971dc71c741aa5831a3bad88b5d9e71ebdcb2f96bb4ab48->enter($__internal_85ee90c4fe3b56c91971dc71c741aa5831a3bad88b5d9e71ebdcb2f96bb4ab48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
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
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t\t\t\t    <div class=\"login-button text-center\">
                                    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                </div>
                        </div>  
                    </div>
                </div>
            </div>
\t\t</div>
";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_85ee90c4fe3b56c91971dc71c741aa5831a3bad88b5d9e71ebdcb2f96bb4ab48->leave($__internal_85ee90c4fe3b56c91971dc71c741aa5831a3bad88b5d9e71ebdcb2f96bb4ab48_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 22,  43 => 15,  38 => 13,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
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
\t\t\t\t\t\t\t    <div class=\"login-button text-center\">
                                    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
                                </div>
                        </div>  
                    </div>
                </div>
            </div>
\t\t</div>
{{ form_end(form) }}
";
    }
}
