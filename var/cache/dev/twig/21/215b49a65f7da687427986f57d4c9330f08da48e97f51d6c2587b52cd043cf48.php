<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9c50a67b8f88c5673d1543c7467ce024188f8d51caa216046e85515db7f60029 extends Twig_Template
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
        $__internal_adb587199962755aee0e3878fb3ec6fac962d100a2b813fed35d003ab23f5d27 = $this->env->getExtension("native_profiler");
        $__internal_adb587199962755aee0e3878fb3ec6fac962d100a2b813fed35d003ab23f5d27->enter($__internal_adb587199962755aee0e3878fb3ec6fac962d100a2b813fed35d003ab23f5d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
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
                                <div class=\"login-button text-center\">
                                    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
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
        
        $__internal_adb587199962755aee0e3878fb3ec6fac962d100a2b813fed35d003ab23f5d27->leave($__internal_adb587199962755aee0e3878fb3ec6fac962d100a2b813fed35d003ab23f5d27_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
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
                                <div class=\"login-button text-center\">
                                    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"{{ 'registration.submit'|trans }}\" />
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
