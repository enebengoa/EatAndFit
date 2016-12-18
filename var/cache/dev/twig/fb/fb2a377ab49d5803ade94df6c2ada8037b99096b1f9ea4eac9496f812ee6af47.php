<?php

/* @Admin/Receta/form.html.twig */
class __TwigTemplate_fc1850970336b9942a10661c4ded9d138b350a140eb443d4c01d9195d6741848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c46409e2f9ea0aa0889472fd403128fd465f7ffc67fce99d77d42929735211d = $this->env->getExtension("native_profiler");
        $__internal_9c46409e2f9ea0aa0889472fd403128fd465f7ffc67fce99d77d42929735211d->enter($__internal_9c46409e2f9ea0aa0889472fd403128fd465f7ffc67fce99d77d42929735211d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Receta/form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_9c46409e2f9ea0aa0889472fd403128fd465f7ffc67fce99d77d42929735211d->leave($__internal_9c46409e2f9ea0aa0889472fd403128fd465f7ffc67fce99d77d42929735211d_prof);

    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        $__internal_2013c2a517cafeebce8ef962ef2eca0c3784a0f827987c26ea693b7ea721b546 = $this->env->getExtension("native_profiler");
        $__internal_2013c2a517cafeebce8ef962ef2eca0c3784a0f827987c26ea693b7ea721b546->enter($__internal_2013c2a517cafeebce8ef962ef2eca0c3784a0f827987c26ea693b7ea721b546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempoPreparacion", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroComensales", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "TipoReceta", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "utensilios", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dificultad", array()), 'label');
        echo "</br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dificultad", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasIngesta", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
        <p class=\"required\"><b>Ingredientes utilizados</b></p>
\t\t<ul class=\"tags\" data-prototype=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadesUtilizadas", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
\t        ";
        // line 34
        echo "\t        ";
        // line 35
        echo "\t        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadesUtilizadas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cant"]) {
            // line 36
            echo "\t            <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["cant"], "cantidad", array()), 'row');
            echo "</li>
\t           \t<li>";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["cant"], "Ingrediente", array()), 'row');
            echo "</li>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t    </ul>
\t</div>
\t\t ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_2013c2a517cafeebce8ef962ef2eca0c3784a0f827987c26ea693b7ea721b546->leave($__internal_2013c2a517cafeebce8ef962ef2eca0c3784a0f827987c26ea693b7ea721b546_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0382886786a73c697b702b4d3d2dae7cb201cdcbb36a7c7df6a7cdfd7825e67c = $this->env->getExtension("native_profiler");
        $__internal_0382886786a73c697b702b4d3d2dae7cb201cdcbb36a7c7df6a7cdfd7825e67c->enter($__internal_0382886786a73c697b702b4d3d2dae7cb201cdcbb36a7c7df6a7cdfd7825e67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/embededForm.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_0382886786a73c697b702b4d3d2dae7cb201cdcbb36a7c7df6a7cdfd7825e67c->leave($__internal_0382886786a73c697b702b4d3d2dae7cb201cdcbb36a7c7df6a7cdfd7825e67c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Receta/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  156 => 48,  153 => 47,  147 => 46,  137 => 42,  133 => 41,  129 => 39,  121 => 37,  116 => 36,  111 => 35,  109 => 34,  105 => 32,  98 => 28,  92 => 25,  84 => 22,  78 => 19,  72 => 16,  66 => 13,  60 => 10,  54 => 7,  48 => 4,  42 => 2,  36 => 1,  29 => 46,  26 => 45,  24 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t{{ form_start(form) }}
\t<div class=\"form-group\">
\t\t{{ form_row(form.nombre) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.descripcion) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.tiempoPreparacion) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.numeroComensales) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.TipoReceta) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.utensilios) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_label(form.dificultad) }}</br>{{ form_widget(form.dificultad) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.horasIngesta) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.imagen) }}
\t</div>
\t<div class=\"form-group\">
        <p class=\"required\"><b>Ingredientes utilizados</b></p>
\t\t<ul class=\"tags\" data-prototype=\"{{ form_widget(form.cantidadesUtilizadas.vars.prototype)|e('html_attr') }}\">
\t        {# iterate over each existing item and render its only field: you want #}
\t        {# En add se puede quitar pero si hacemos un solo form no #}
\t        {% for cant in form.cantidadesUtilizadas %}
\t            <li>{{ form_row(cant.cantidad) }}</li>
\t           \t<li>{{ form_row(cant.Ingrediente) }}</li>
\t        {% endfor %}
\t    </ul>
\t</div>
\t\t {{ form_errors(form) }}
\t{{ form_end(form) }}

{% endblock %}

{% block javascripts %}

<script src=\"{{ asset('js/embededForm.js') }}\"></script>

{% endblock %}
";
    }
}
