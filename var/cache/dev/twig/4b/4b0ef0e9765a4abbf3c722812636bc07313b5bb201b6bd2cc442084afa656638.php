<?php

/* @Admin/Email/email.html.twig */
class __TwigTemplate_bcebe52878e1455d0c9a39d9a62da94d6ce50bc9dcbccbabc4576e4988911609 extends Twig_Template
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
        $__internal_a5c79ee2c579cc05e5befe2de8c485e3f3714833d317be4b8d677913acac77f6 = $this->env->getExtension("native_profiler");
        $__internal_a5c79ee2c579cc05e5befe2de8c485e3f3714833d317be4b8d677913acac77f6->enter($__internal_a5c79ee2c579cc05e5befe2de8c485e3f3714833d317be4b8d677913acac77f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Email/email.html.twig"));

        // line 1
        echo "</br>
Hola ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo ", 
</br>
</br>
Las <strong>TOP 3 RECETAS</strong> de esta semana son:
</br>
</br>
";
        // line 8
        $context["i"] = 0;
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastRecetas"]) ? $context["lastRecetas"] : $this->getContext($context, "lastRecetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["lastReceta"]) {
            // line 10
            echo "    <tr>
    ";
            // line 11
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 12
            echo "        <td>";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo ".- ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lastReceta"], "nombre", array()), "html", null, true);
            echo "</td></br>                                          
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lastReceta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</br>
Para acceder a la descripción de las recetas mostradas, acceder al <strong>PDF</strong> adjuntado.
</br>
</br>
Un cordial saludo,
</br>
</br>
Equipo de Eat&Fit
</br>
</br>
</br>
</br>
</br>
<strong>Contacto:</strong></br>
<i>Eneko Bengo San Sebastián</i></br>
Telf: <i> +34 680 11 43 44</i></br>
Email: <i> enebengoa@hotmail.com</i>

";
        
        $__internal_a5c79ee2c579cc05e5befe2de8c485e3f3714833d317be4b8d677913acac77f6->leave($__internal_a5c79ee2c579cc05e5befe2de8c485e3f3714833d317be4b8d677913acac77f6_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Email/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  45 => 12,  43 => 11,  40 => 10,  36 => 9,  34 => 8,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "</br>
Hola {{usuario.username}}, 
</br>
</br>
Las <strong>TOP 3 RECETAS</strong> de esta semana son:
</br>
</br>
{% set i = 0 %}
{% for lastReceta in lastRecetas %}
    <tr>
    {% set i = i + 1 %}
        <td>{{i}}.- {{lastReceta.nombre}}</td></br>                                          
    </tr>
{% endfor %}
</br>
Para acceder a la descripción de las recetas mostradas, acceder al <strong>PDF</strong> adjuntado.
</br>
</br>
Un cordial saludo,
</br>
</br>
Equipo de Eat&Fit
</br>
</br>
</br>
</br>
</br>
<strong>Contacto:</strong></br>
<i>Eneko Bengo San Sebastián</i></br>
Telf: <i> +34 680 11 43 44</i></br>
Email: <i> enebengoa@hotmail.com</i>

";
    }
}
