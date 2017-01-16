<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1b6b3c64f1c58b1b68a3fb9266d8c275b82b59d4aa871506bd145f948aed9885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_711efc83bd54171df39a9de7c5e5b262bcf43c40803240294ce8a5bd488c617e = $this->env->getExtension("native_profiler");
        $__internal_711efc83bd54171df39a9de7c5e5b262bcf43c40803240294ce8a5bd488c617e->enter($__internal_711efc83bd54171df39a9de7c5e5b262bcf43c40803240294ce8a5bd488c617e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711efc83bd54171df39a9de7c5e5b262bcf43c40803240294ce8a5bd488c617e->leave($__internal_711efc83bd54171df39a9de7c5e5b262bcf43c40803240294ce8a5bd488c617e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2372ad32478d4231b8ec086d2ac0f41fa326126dd2e2f3d754bd4c5f05a93685 = $this->env->getExtension("native_profiler");
        $__internal_2372ad32478d4231b8ec086d2ac0f41fa326126dd2e2f3d754bd4c5f05a93685->enter($__internal_2372ad32478d4231b8ec086d2ac0f41fa326126dd2e2f3d754bd4c5f05a93685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2372ad32478d4231b8ec086d2ac0f41fa326126dd2e2f3d754bd4c5f05a93685->leave($__internal_2372ad32478d4231b8ec086d2ac0f41fa326126dd2e2f3d754bd4c5f05a93685_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73acab8849d2019e0c4784c5325e131cfb697b027b50bb2145ed99f9fe45c7a3 = $this->env->getExtension("native_profiler");
        $__internal_73acab8849d2019e0c4784c5325e131cfb697b027b50bb2145ed99f9fe45c7a3->enter($__internal_73acab8849d2019e0c4784c5325e131cfb697b027b50bb2145ed99f9fe45c7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_73acab8849d2019e0c4784c5325e131cfb697b027b50bb2145ed99f9fe45c7a3->leave($__internal_73acab8849d2019e0c4784c5325e131cfb697b027b50bb2145ed99f9fe45c7a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4437275ab09b845d26ea820ef1a58bb43f2347d5650f744676d9a4c415dd611a = $this->env->getExtension("native_profiler");
        $__internal_4437275ab09b845d26ea820ef1a58bb43f2347d5650f744676d9a4c415dd611a->enter($__internal_4437275ab09b845d26ea820ef1a58bb43f2347d5650f744676d9a4c415dd611a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4437275ab09b845d26ea820ef1a58bb43f2347d5650f744676d9a4c415dd611a->leave($__internal_4437275ab09b845d26ea820ef1a58bb43f2347d5650f744676d9a4c415dd611a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
