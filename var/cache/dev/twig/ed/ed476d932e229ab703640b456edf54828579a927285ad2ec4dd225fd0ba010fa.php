<?php

/* FOSUserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_a61e065d30111bf164b135a2e215f26447d148da8516f0621211a2aa6f884a90 extends Twig_Template
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
        $__internal_4a110cf366d8dbfc27d5b552cf468928851031681c0cf8805f22471ba848002c = $this->env->getExtension("native_profiler");
        $__internal_4a110cf366d8dbfc27d5b552cf468928851031681c0cf8805f22471ba848002c->enter($__internal_4a110cf366d8dbfc27d5b552cf468928851031681c0cf8805f22471ba848002c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
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
        
        $__internal_4a110cf366d8dbfc27d5b552cf468928851031681c0cf8805f22471ba848002c->leave($__internal_4a110cf366d8dbfc27d5b552cf468928851031681c0cf8805f22471ba848002c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
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
                                    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"{{ 'change_password.submit'|trans }}\" />
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
