<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_9d0cd2c755d0b0f32e7479473e3dcb83324c32a80ca40ae482b1b479c2a32536 extends Twig_Template
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
        $__internal_261dd84e1ff64aeacc30a2e8b5179a63a3895cf91bb7d000656db68424c8b482 = $this->env->getExtension("native_profiler");
        $__internal_261dd84e1ff64aeacc30a2e8b5179a63a3895cf91bb7d000656db68424c8b482->enter($__internal_261dd84e1ff64aeacc30a2e8b5179a63a3895cf91bb7d000656db68424c8b482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
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
                            <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                            <div>
                                ";
        // line 15
        if (array_key_exists("invalid_username", $context)) {
            // line 16
            echo "                                    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                                ";
        }
        // line 18
        echo "                                <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                            </div>
                            <div class=\"login-button text-center\">
                                <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </form>   
                        </div>  
                    </div>
                </div>
            </div>
        </div>



";
        
        $__internal_261dd84e1ff64aeacc30a2e8b5179a63a3895cf91bb7d000656db68424c8b482->leave($__internal_261dd84e1ff64aeacc30a2e8b5179a63a3895cf91bb7d000656db68424c8b482_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  48 => 18,  42 => 16,  40 => 15,  35 => 13,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}


<div class=\"login-box\">
            <div>
                <div class=\"login-form row\">
                    <div class=\"col-sm-12 text-center login-header\">
                        <i class=\"icon fa fa-cutlery\"></i>
                        <h4 class=\"login-title\">Eat&Fit</h4>
                    </div>
                    <div class=\"col-sm-12\">
                        <div class=\"login-body\">
                            <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
                            <div>
                                {% if invalid_username is defined %}
                                    <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>
                                {% endif %}
                                <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
                                <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                            </div>
                            <div class=\"login-button text-center\">
                                <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
                        </form>   
                        </div>  
                    </div>
                </div>
            </div>
        </div>



";
    }
}
