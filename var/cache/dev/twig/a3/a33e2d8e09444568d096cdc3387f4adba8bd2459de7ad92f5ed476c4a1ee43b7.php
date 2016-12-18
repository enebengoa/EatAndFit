<?php

/* AdminBundle:Menu:form.html.twig */
class __TwigTemplate_1bb0378d086dd79eaa8d6cde6994de7d2c604d3e8940175628830b4260a55984 extends Twig_Template
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
        $__internal_6143257576e940f83fb355b2eea3a2890527b4c2b526bfdc3bab8d4135fd9417 = $this->env->getExtension("native_profiler");
        $__internal_6143257576e940f83fb355b2eea3a2890527b4c2b526bfdc3bab8d4135fd9417->enter($__internal_6143257576e940f83fb355b2eea3a2890527b4c2b526bfdc3bab8d4135fd9417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Menu:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "


";
        
        $__internal_6143257576e940f83fb355b2eea3a2890527b4c2b526bfdc3bab8d4135fd9417->leave($__internal_6143257576e940f83fb355b2eea3a2890527b4c2b526bfdc3bab8d4135fd9417_prof);

    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        $__internal_15cc5e90fc29d354900adb1fc3a95c46fe246ab3da1eaba24b34ff919cee1259 = $this->env->getExtension("native_profiler");
        $__internal_15cc5e90fc29d354900adb1fc3a95c46fe246ab3da1eaba24b34ff919cee1259->enter($__internal_15cc5e90fc29d354900adb1fc3a95c46fe246ab3da1eaba24b34ff919cee1259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publico", array()), 'label');
        echo "</br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publico", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t<p class=\"required\"><b>Recetas </b></p>
\t\t<ul class=\"tags\" data-prototype=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subMenus", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
\t        ";
        // line 19
        echo "\t        ";
        // line 20
        echo "\t        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subMenus", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
            // line 21
            echo "\t            <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["subMenu"], "HoraIngesta", array()), 'row');
            echo "</li>
\t           \t<li>";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["subMenu"], "recetas", array()), 'row');
            echo "</li>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subMenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t    </ul>
\t</div>

\t\t ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_15cc5e90fc29d354900adb1fc3a95c46fe246ab3da1eaba24b34ff919cee1259->leave($__internal_15cc5e90fc29d354900adb1fc3a95c46fe246ab3da1eaba24b34ff919cee1259_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee0ce796df238035014e2ca835124e35c83dcee7b7c52592fde81b00cc7cf030 = $this->env->getExtension("native_profiler");
        $__internal_ee0ce796df238035014e2ca835124e35c83dcee7b7c52592fde81b00cc7cf030->enter($__internal_ee0ce796df238035014e2ca835124e35c83dcee7b7c52592fde81b00cc7cf030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/embededForm.js"), "html", null, true);
        echo "\"></script>

<script>

\t


    var \$HoraIngesta = \$('#menu_subMenus_1_HoraIngesta');

    var \$form = \$HoraIngesta.closest('form');

    // cada vez que el usuario cambie el HoraIngesta en el select
    \$HoraIngesta.on('change', function() {

        // creamos la data, solo con el HoraIngesta del HoraIngesta,
        // ya que es el dato relevante en este caso.
        var data = \$HoraIngesta.serialize();

        // Hacemos un envío del formulario, lo que ejecutará el evento preSubmit
        // del listener AddHoraIngestaFieldSubscriber,
        // y actualizará el HoraIngesta invernadero, con los estados del HoraIngesta seleccionado.

        \$.ajax({
            url : \"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("App_admin_ajax_add_subMenu_form");
        echo "\",
            type: \$form.attr('method'),
            data : data,
            success: function(html) {

                // la variable html representa toda la página junto con el select de estados.
                // el cual tomamos y colocamos para reemplazar el select actual.

                \$('##menu_subMenus_1_Receta').replaceWith(\$(html).find('#menu_subMenus_1_Receta'));
            }
        });
    });
</script>

";
        
        $__internal_ee0ce796df238035014e2ca835124e35c83dcee7b7c52592fde81b00cc7cf030->leave($__internal_ee0ce796df238035014e2ca835124e35c83dcee7b7c52592fde81b00cc7cf030_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Menu:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  131 => 33,  128 => 32,  122 => 31,  113 => 28,  109 => 27,  104 => 24,  96 => 22,  91 => 21,  86 => 20,  84 => 19,  80 => 17,  73 => 13,  65 => 10,  59 => 7,  53 => 4,  47 => 2,  41 => 1,  31 => 71,  29 => 31,  26 => 30,  24 => 1,);
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
\t\t{{ form_label(form.publico) }}</br>{{ form_widget(form.publico) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.imagen) }}
\t</div>
\t<div class=\"form-group\">
\t\t<p class=\"required\"><b>Recetas </b></p>
\t\t<ul class=\"tags\" data-prototype=\"{{ form_widget(form.subMenus.vars.prototype)|e('html_attr') }}\">
\t        {# iterate over each existing item and render its only field: you want #}
\t        {# En add se puede quitar pero si hacemos un solo form no #}
\t        {% for subMenu in form.subMenus %}
\t            <li>{{ form_row(subMenu.HoraIngesta) }}</li>
\t           \t<li>{{ form_row(subMenu.recetas) }}</li>
\t        {% endfor %}
\t    </ul>
\t</div>

\t\t {{ form_errors(form) }}
\t{{ form_end(form) }}
{% endblock %}

{% block javascripts %}

<script src=\"{{ asset('js/embededForm.js') }}\"></script>

<script>

\t


    var \$HoraIngesta = \$('#menu_subMenus_1_HoraIngesta');

    var \$form = \$HoraIngesta.closest('form');

    // cada vez que el usuario cambie el HoraIngesta en el select
    \$HoraIngesta.on('change', function() {

        // creamos la data, solo con el HoraIngesta del HoraIngesta,
        // ya que es el dato relevante en este caso.
        var data = \$HoraIngesta.serialize();

        // Hacemos un envío del formulario, lo que ejecutará el evento preSubmit
        // del listener AddHoraIngestaFieldSubscriber,
        // y actualizará el HoraIngesta invernadero, con los estados del HoraIngesta seleccionado.

        \$.ajax({
            url : \"{{ path('App_admin_ajax_add_subMenu_form') }}\",
            type: \$form.attr('method'),
            data : data,
            success: function(html) {

                // la variable html representa toda la página junto con el select de estados.
                // el cual tomamos y colocamos para reemplazar el select actual.

                \$('##menu_subMenus_1_Receta').replaceWith(\$(html).find('#menu_subMenus_1_Receta'));
            }
        });
    });
</script>

{% endblock %}



";
    }
}
