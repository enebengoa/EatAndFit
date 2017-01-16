<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_4ecef2135a1d42b90e8b86ef39d0aa538ad95a87d7975de957ab2f9f5e806238 extends Twig_Template
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
        $__internal_640b0f3867b72695e470037125972ec5b42384cc35bd6c0378b951cb5ffc520b = $this->env->getExtension("native_profiler");
        $__internal_640b0f3867b72695e470037125972ec5b42384cc35bd6c0378b951cb5ffc520b->enter($__internal_640b0f3867b72695e470037125972ec5b42384cc35bd6c0378b951cb5ffc520b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

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
                            <div class=\"progress hidden\" id=\"login-progress\">
                                <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
                                    Log In...
                                </div>
                            </div>
                            ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "\t\t\t\t\t\t\t    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 20
        echo "                            <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t<div class=\"control\">
\t\t\t\t\t\t\t    <label for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <div class=\"control\">
\t\t\t\t\t\t\t    <label for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <div class=\"control\">
\t\t\t\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t\t\t    <label for=\"remember_me\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <div class=\"login-button text-center\">
\t\t\t\t\t\t\t    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t</form>
                        </div>
                        <div class=\"login-footer\">
                            <span class=\"text-right\"><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"color-white\">New account</a></span>
                        </div>
                        <div class=\"login-footer\">
                            <span class=\"text-right\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\"   class=\"color-white\">Forgot password?</a></span>
                        </div>
                    </div>
                </div>
            </div>
</div>



";
        
        $__internal_640b0f3867b72695e470037125972ec5b42384cc35bd6c0378b951cb5ffc520b->leave($__internal_640b0f3867b72695e470037125972ec5b42384cc35bd6c0378b951cb5ffc520b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 43,  89 => 40,  81 => 35,  75 => 32,  67 => 27,  61 => 24,  57 => 23,  52 => 21,  47 => 20,  41 => 18,  39 => 17,  22 => 2,);
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
                            <div class=\"progress hidden\" id=\"login-progress\">
                                <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
                                    Log In...
                                </div>
                            </div>
                            {% if error %}
\t\t\t\t\t\t\t    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t\t{% endif %}
                            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
\t\t\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
\t\t\t\t\t\t\t\t<div class=\"control\">
\t\t\t\t\t\t\t    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
\t\t\t\t\t\t\t    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <div class=\"control\">
\t\t\t\t\t\t\t    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
\t\t\t\t\t\t\t    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <div class=\"control\">
\t\t\t\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t\t\t    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <div class=\"login-button text-center\">
\t\t\t\t\t\t\t    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t</form>
                        </div>
                        <div class=\"login-footer\">
                            <span class=\"text-right\"><a href=\"{{path('fos_user_registration_register')}}\" class=\"color-white\">New account</a></span>
                        </div>
                        <div class=\"login-footer\">
                            <span class=\"text-right\"><a href=\"{{path('fos_user_resetting_request')}}\"   class=\"color-white\">Forgot password?</a></span>
                        </div>
                    </div>
                </div>
            </div>
</div>



";
    }
}
