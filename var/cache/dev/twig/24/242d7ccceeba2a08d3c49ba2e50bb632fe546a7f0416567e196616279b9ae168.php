<?php

/* @StarRating/rating.html.twig */
class __TwigTemplate_6f05e12d8a4d657ac7fc01ddb7077cfcc48b8588a992fb018b53b9eaecd6e363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'rating_widget' => array($this, 'block_rating_widget'),
            'rating_widget_container_attributes' => array($this, 'block_rating_widget_container_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28f510981d6e8ac4b826d0c94acfa40d7ff3ea00297f1c5467461cf1a33330c0 = $this->env->getExtension("native_profiler");
        $__internal_28f510981d6e8ac4b826d0c94acfa40d7ff3ea00297f1c5467461cf1a33330c0->enter($__internal_28f510981d6e8ac4b826d0c94acfa40d7ff3ea00297f1c5467461cf1a33330c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/rating.html.twig"));

        // line 2
        $this->displayBlock('rating_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('rating_widget_container_attributes', $context, $blocks);
        
        $__internal_28f510981d6e8ac4b826d0c94acfa40d7ff3ea00297f1c5467461cf1a33330c0->leave($__internal_28f510981d6e8ac4b826d0c94acfa40d7ff3ea00297f1c5467461cf1a33330c0_prof);

    }

    // line 2
    public function block_rating_widget($context, array $blocks = array())
    {
        $__internal_9c15e4b5b0eea4acfc5d932cf7834fabe7e5d6703f8104b7195dceadd5a4ff4e = $this->env->getExtension("native_profiler");
        $__internal_9c15e4b5b0eea4acfc5d932cf7834fabe7e5d6703f8104b7195dceadd5a4ff4e->enter($__internal_9c15e4b5b0eea4acfc5d932cf7834fabe7e5d6703f8104b7195dceadd5a4ff4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        // line 3
        echo "  ";
        ob_start();
        // line 4
        echo "    <div ";
        $this->displayBlock("rating_widget_container_attributes", $context, $blocks);
        echo ">
      ";
        // line 6
        echo "      ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 7
        echo "      <div class=\"rating-well\">";
        // line 8
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars"))));
        foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
            // line 10
            echo "          <div id=\"rating_star_";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
            echo "\" class=\"star\" data-value=\"";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9c15e4b5b0eea4acfc5d932cf7834fabe7e5d6703f8104b7195dceadd5a4ff4e->leave($__internal_9c15e4b5b0eea4acfc5d932cf7834fabe7e5d6703f8104b7195dceadd5a4ff4e_prof);

    }

    // line 17
    public function block_rating_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_a25876007a9b75d06204deac59ee0ed631da8e5fb469e31a62507b82bb671f11 = $this->env->getExtension("native_profiler");
        $__internal_a25876007a9b75d06204deac59ee0ed631da8e5fb469e31a62507b82bb671f11->enter($__internal_a25876007a9b75d06204deac59ee0ed631da8e5fb469e31a62507b82bb671f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        // line 18
        ob_start();
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 20
            echo " ";
            // line 21
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 22
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 23
$context["attrvalue"] === true)) {
                // line 24
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 25
$context["attrvalue"] === false)) {
                // line 26
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a25876007a9b75d06204deac59ee0ed631da8e5fb469e31a62507b82bb671f11->leave($__internal_a25876007a9b75d06204deac59ee0ed631da8e5fb469e31a62507b82bb671f11_prof);

    }

    public function getTemplateName()
    {
        return "@StarRating/rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  110 => 25,  105 => 24,  103 => 23,  98 => 22,  96 => 21,  94 => 20,  90 => 19,  88 => 18,  82 => 17,  72 => 12,  61 => 10,  57 => 9,  55 => 8,  53 => 7,  50 => 6,  45 => 4,  42 => 3,  36 => 2,  29 => 17,  26 => 16,  24 => 2,);
    }

    public function getSource()
    {
        return "{# blackknight467/StarRatingBundle/Resources/views/rating.html.twig #}
{% block rating_widget %}
  {% spaceless %}
    <div {{ block('rating_widget_container_attributes') }}>
      {# type=\"number\" doesn't work with floats #}
      {% set type = type|default('text') %}
      <div class=\"rating-well\">
        {{- block('form_widget_simple') -}}
        {% for star in 1..stars %}
          <div id=\"rating_star_{{ stars - star + 1 }}\" class=\"star\" data-value=\"{{ stars - star + 1 }}\"></div>
        {% endfor %}
      </div>
    </div>
  {% endspaceless %}
{% endblock rating_widget %}

{% block rating_widget_container_attributes %}
{% spaceless %}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{% endspaceless %}
{% endblock rating_widget_container_attributes %}";
    }
}
