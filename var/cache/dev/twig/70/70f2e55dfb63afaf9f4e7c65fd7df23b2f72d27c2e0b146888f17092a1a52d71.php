<?php

/* @StarRating/Display/ratingDisplay.html.twig */
class __TwigTemplate_7208dd5cb020ad374b5853828044daa35c0280ef5b57e522d0f6be0e115f793b extends Twig_Template
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
        $__internal_80a1ae0b6f20209ba5d9d9fe1d04a233411e055025939feb4ca84486100dccac = $this->env->getExtension("native_profiler");
        $__internal_80a1ae0b6f20209ba5d9d9fe1d04a233411e055025939feb4ca84486100dccac->enter($__internal_80a1ae0b6f20209ba5d9d9fe1d04a233411e055025939feb4ca84486100dccac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/Display/ratingDisplay.html.twig"));

        // line 1
        echo "<div class=\"rating\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    <div class=\"";
            if (($context["i"] <= (isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")))) {
                echo "star-full";
            } else {
                echo "star-empty";
            }
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["starSize"]) ? $context["starSize"] : $this->getContext($context, "starSize")), "html", null, true);
            echo "\"></div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
        
        $__internal_80a1ae0b6f20209ba5d9d9fe1d04a233411e055025939feb4ca84486100dccac->leave($__internal_80a1ae0b6f20209ba5d9d9fe1d04a233411e055025939feb4ca84486100dccac_prof);

    }

    public function getTemplateName()
    {
        return "@StarRating/Display/ratingDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"rating\">
  {% for i in 1..max %}
    <div class=\"{% if i <= stars %}star-full{% else %}star-empty{% endif %} {{ starSize }}\"></div>
  {% endfor %}
</div>";
    }
}
