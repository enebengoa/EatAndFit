<?php

/* UserBundle:Menu:listRecetas.html.twig */
class __TwigTemplate_ca1d7697ce1edba4c447584c77236cf857d181852838e384f5fc7bbb2effbb1c extends Twig_Template
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
        $__internal_b930f104da87388402270e3b05a88d6f5c09eba5660486b69ca0fe13283507af = $this->env->getExtension("native_profiler");
        $__internal_b930f104da87388402270e3b05a88d6f5c09eba5660486b69ca0fe13283507af->enter($__internal_b930f104da87388402270e3b05a88d6f5c09eba5660486b69ca0fe13283507af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Menu:listRecetas.html.twig"));

        // line 1
        echo "<h2>El menú seleccionado tiene las siguientes recetas: </h2>
<hr>
<ol>
\t\t";
        // line 4
        $context["calorias"] = 0;
        // line 5
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recetas"]) ? $context["recetas"] : $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 6
            echo "                <h3><li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())), "html", null, true);
            echo " cal/persona)</li> </h3>
                ";
            // line 7
            $context["calorias"] = ((isset($context["calorias"]) ? $context["calorias"] : $this->getContext($context, "calorias")) + ($this->getAttribute($context["receta"], "calorias", array()) / $this->getAttribute($context["receta"], "numeroComensales", array())));
            echo "                           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t   \t\t
</ol>
<hr>
<h3>Total de calorias: <strong>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["calorias"]) ? $context["calorias"] : $this->getContext($context, "calorias")), "html", null, true);
        echo "</strong> cal/persona</h3>";
        
        $__internal_b930f104da87388402270e3b05a88d6f5c09eba5660486b69ca0fe13283507af->leave($__internal_b930f104da87388402270e3b05a88d6f5c09eba5660486b69ca0fe13283507af_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Menu:listRecetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  49 => 8,  41 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<h2>El menú seleccionado tiene las siguientes recetas: </h2>
<hr>
<ol>
\t\t{% set calorias = 0 %}
        {% for receta in recetas %}
                <h3><li>{{receta.nombre}} ({{receta.calorias/receta.numeroComensales}} cal/persona)</li> </h3>
                {% set calorias = calorias + (receta.calorias/receta.numeroComensales) %}                           
        {% endfor %}\t   \t\t
</ol>
<hr>
<h3>Total de calorias: <strong>{{calorias}}</strong> cal/persona</h3>";
    }
}
