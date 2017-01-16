<?php

/* UserBundle:MyPaginationTemplate:custom_pagination.html.twig */
class __TwigTemplate_174f6092415f931174a3979c2f5f27e52f3f7efb7364203a92f43baf896bafa0 extends Twig_Template
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
        $__internal_de96183443530926fdf496b46e680098cb0346a1bdb033dbfbe08140c13adc17 = $this->env->getExtension("native_profiler");
        $__internal_de96183443530926fdf496b46e680098cb0346a1bdb033dbfbe08140c13adc17->enter($__internal_de96183443530926fdf496b46e680098cb0346a1bdb033dbfbe08140c13adc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:MyPaginationTemplate:custom_pagination.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "    <div class=\"pagination\">
        ";
            // line 5
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 6
                echo "            <span class=\"first\">
            <a onclick=\"changePagination('";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "html", null, true);
                echo "')\" href=\"javascript:void(0)\">&lt;&lt;</a>
        </span>
        ";
            }
            // line 10
            echo "
        ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "            <span class=\"previous\">
            <a onclick=\"changePagination('";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "html", null, true);
                echo "')\" href=\"javascript:void(0)\">&lt;</a>
        </span>
        ";
            }
            // line 16
            echo "
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 19
                    echo "                <span class=\"page\">
                <a onclick=\"changePagination('";
                    // line 20
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "')\" href=\"javascript:void(0)\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </span>
            ";
                } else {
                    // line 23
                    echo "                <span class=\"current\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            ";
                }
                // line 25
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
        ";
            // line 28
            if (array_key_exists("next", $context)) {
                // line 29
                echo "            <span class=\"next\">
            <a onclick=\"changePagination('";
                // line 30
                echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "html", null, true);
                echo "')\" href=\"javascript:void(0)\">&gt;</a>
        </span>
        ";
            }
            // line 33
            echo "
        ";
            // line 34
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 35
                echo "            <span class=\"last\">
            <a onclick=\"changePagination('";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "html", null, true);
                echo "')\" href=\"javascript:void(0)\">&gt;&gt;</a>
        </span>
        ";
            }
            // line 39
            echo "    </div>
";
        }
        
        $__internal_de96183443530926fdf496b46e680098cb0346a1bdb033dbfbe08140c13adc17->leave($__internal_de96183443530926fdf496b46e680098cb0346a1bdb033dbfbe08140c13adc17_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:MyPaginationTemplate:custom_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 39,  111 => 36,  108 => 35,  106 => 34,  103 => 33,  97 => 30,  94 => 29,  92 => 28,  89 => 27,  82 => 25,  76 => 23,  68 => 20,  65 => 19,  62 => 18,  58 => 17,  55 => 16,  49 => 13,  46 => 12,  44 => 11,  41 => 10,  35 => 7,  32 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{# My AJAX pagination control implementation #}

{% if pageCount > 1 %}
    <div class=\"pagination\">
        {% if first is defined and current != first %}
            <span class=\"first\">
            <a onclick=\"changePagination('{{ first }}')\" href=\"javascript:void(0)\">&lt;&lt;</a>
        </span>
        {% endif %}

        {% if previous is defined %}
            <span class=\"previous\">
            <a onclick=\"changePagination('{{ previous }}')\" href=\"javascript:void(0)\">&lt;</a>
        </span>
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <span class=\"page\">
                <a onclick=\"changePagination('{{ page }}')\" href=\"javascript:void(0)\">{{ page }}</a>
            </span>
            {% else %}
                <span class=\"current\">{{ page }}</span>
            {% endif %}

        {% endfor %}

        {% if next is defined %}
            <span class=\"next\">
            <a onclick=\"changePagination('{{ next }}')\" href=\"javascript:void(0)\">&gt;</a>
        </span>
        {% endif %}

        {% if last is defined and current != last %}
            <span class=\"last\">
            <a onclick=\"changePagination('{{ last }}')\" href=\"javascript:void(0)\">&gt;&gt;</a>
        </span>
        {% endif %}
    </div>
{% endif %}";
    }
}
