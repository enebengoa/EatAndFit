<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_1338c6424d58c45d32f7711e1f9b0f424de2f4908ad35dcd58b62f3463c24f26 extends Twig_Template
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
        $__internal_0c198bf6a602ee35d375e831686a7367a8319c10bce4e07cef1f3f15822c56da = $this->env->getExtension("native_profiler");
        $__internal_0c198bf6a602ee35d375e831686a7367a8319c10bce4e07cef1f3f15822c56da->enter($__internal_0c198bf6a602ee35d375e831686a7367a8319c10bce4e07cef1f3f15822c56da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

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
        
        $__internal_0c198bf6a602ee35d375e831686a7367a8319c10bce4e07cef1f3f15822c56da->leave($__internal_0c198bf6a602ee35d375e831686a7367a8319c10bce4e07cef1f3f15822c56da_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
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
