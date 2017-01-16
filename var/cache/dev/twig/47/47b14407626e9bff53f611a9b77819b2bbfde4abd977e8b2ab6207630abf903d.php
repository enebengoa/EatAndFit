<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6bdcc875e12da656b53fe2a9c5dec318871ac3803cc76150dbf25e619d65b9ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_e225be8a882af86ca90f2b81169aa9c39981b8dbde0ab1710fbdbf0c55dd772d = $this->env->getExtension("native_profiler");
        $__internal_e225be8a882af86ca90f2b81169aa9c39981b8dbde0ab1710fbdbf0c55dd772d->enter($__internal_e225be8a882af86ca90f2b81169aa9c39981b8dbde0ab1710fbdbf0c55dd772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e225be8a882af86ca90f2b81169aa9c39981b8dbde0ab1710fbdbf0c55dd772d->leave($__internal_e225be8a882af86ca90f2b81169aa9c39981b8dbde0ab1710fbdbf0c55dd772d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_755100bf00d46f552d7c54a58fd90fc192a24f79a6cc0a05d320a13b86a86175 = $this->env->getExtension("native_profiler");
        $__internal_755100bf00d46f552d7c54a58fd90fc192a24f79a6cc0a05d320a13b86a86175->enter($__internal_755100bf00d46f552d7c54a58fd90fc192a24f79a6cc0a05d320a13b86a86175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_755100bf00d46f552d7c54a58fd90fc192a24f79a6cc0a05d320a13b86a86175->leave($__internal_755100bf00d46f552d7c54a58fd90fc192a24f79a6cc0a05d320a13b86a86175_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
