<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f9ab0c8bebe0d528215a1803efa3bd1307d1e459302898da26765cc66a38ae76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e083f66c4e6a1babbaa0cf8eb0e0e378ac2b63351a9445fc807fd151d2c48c61 = $this->env->getExtension("native_profiler");
        $__internal_e083f66c4e6a1babbaa0cf8eb0e0e378ac2b63351a9445fc807fd151d2c48c61->enter($__internal_e083f66c4e6a1babbaa0cf8eb0e0e378ac2b63351a9445fc807fd151d2c48c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e083f66c4e6a1babbaa0cf8eb0e0e378ac2b63351a9445fc807fd151d2c48c61->leave($__internal_e083f66c4e6a1babbaa0cf8eb0e0e378ac2b63351a9445fc807fd151d2c48c61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25b9e30a5068b058f2335d4c1297892242d6ad20546f422f7bcd1286a5a89b12 = $this->env->getExtension("native_profiler");
        $__internal_25b9e30a5068b058f2335d4c1297892242d6ad20546f422f7bcd1286a5a89b12->enter($__internal_25b9e30a5068b058f2335d4c1297892242d6ad20546f422f7bcd1286a5a89b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_25b9e30a5068b058f2335d4c1297892242d6ad20546f422f7bcd1286a5a89b12->leave($__internal_25b9e30a5068b058f2335d4c1297892242d6ad20546f422f7bcd1286a5a89b12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
