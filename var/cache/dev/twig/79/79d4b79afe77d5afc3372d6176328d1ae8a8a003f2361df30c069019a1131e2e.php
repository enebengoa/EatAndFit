<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_49948e4548be65d957365dd9c066bd3a1f7aefe6a9e15d504fdfb53962bd1441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7578de4a9515b510ae279f57ddb276abb3d94508a2714075c1788dbcd42387ee = $this->env->getExtension("native_profiler");
        $__internal_7578de4a9515b510ae279f57ddb276abb3d94508a2714075c1788dbcd42387ee->enter($__internal_7578de4a9515b510ae279f57ddb276abb3d94508a2714075c1788dbcd42387ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7578de4a9515b510ae279f57ddb276abb3d94508a2714075c1788dbcd42387ee->leave($__internal_7578de4a9515b510ae279f57ddb276abb3d94508a2714075c1788dbcd42387ee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8196c7fa17bb50e275cbd3d9565b2e1c479298e3789e4a5157476e3e36e9880 = $this->env->getExtension("native_profiler");
        $__internal_f8196c7fa17bb50e275cbd3d9565b2e1c479298e3789e4a5157476e3e36e9880->enter($__internal_f8196c7fa17bb50e275cbd3d9565b2e1c479298e3789e4a5157476e3e36e9880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f8196c7fa17bb50e275cbd3d9565b2e1c479298e3789e4a5157476e3e36e9880->leave($__internal_f8196c7fa17bb50e275cbd3d9565b2e1c479298e3789e4a5157476e3e36e9880_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
