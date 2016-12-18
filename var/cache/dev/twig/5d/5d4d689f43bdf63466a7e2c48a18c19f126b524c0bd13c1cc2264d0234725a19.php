<?php

/* StarRatingBundle:Display:ratingDisplay.html.twig */
class __TwigTemplate_995ddcae3ea8dba4fc339db8153f7a6a71b372ef088fc89e7636c32fccc14787 extends Twig_Template
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
        $__internal_516e03e678c7de2a975d739d7b71dac9beb8ec2b0648322241bad2b23af43b30 = $this->env->getExtension("native_profiler");
        $__internal_516e03e678c7de2a975d739d7b71dac9beb8ec2b0648322241bad2b23af43b30->enter($__internal_516e03e678c7de2a975d739d7b71dac9beb8ec2b0648322241bad2b23af43b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle:Display:ratingDisplay.html.twig"));

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
        
        $__internal_516e03e678c7de2a975d739d7b71dac9beb8ec2b0648322241bad2b23af43b30->leave($__internal_516e03e678c7de2a975d739d7b71dac9beb8ec2b0648322241bad2b23af43b30_prof);

    }

    public function getTemplateName()
    {
        return "StarRatingBundle:Display:ratingDisplay.html.twig";
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
