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
        $__internal_3af255d4490ba681708ab39c27e94cb26e1a06510e15f1b521b78146872e26dd = $this->env->getExtension("native_profiler");
        $__internal_3af255d4490ba681708ab39c27e94cb26e1a06510e15f1b521b78146872e26dd->enter($__internal_3af255d4490ba681708ab39c27e94cb26e1a06510e15f1b521b78146872e26dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Menu:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "


";
        
        $__internal_3af255d4490ba681708ab39c27e94cb26e1a06510e15f1b521b78146872e26dd->leave($__internal_3af255d4490ba681708ab39c27e94cb26e1a06510e15f1b521b78146872e26dd_prof);

    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        $__internal_8599be607ceb16bc5b71b26f4d70d6a0f153f7ed0d8ff928ead806b1da56e7a7 = $this->env->getExtension("native_profiler");
        $__internal_8599be607ceb16bc5b71b26f4d70d6a0f153f7ed0d8ff928ead806b1da56e7a7->enter($__internal_8599be607ceb16bc5b71b26f4d70d6a0f153f7ed0d8ff928ead806b1da56e7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<p class=\"required\"><b>Recetas </b></p>
\t\t<ul class=\"tags\" data-prototype=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subMenus", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
\t        ";
        // line 16
        echo "\t        ";
        // line 17
        echo "\t        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subMenus", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
            // line 18
            echo "\t            <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["subMenu"], "HoraIngesta", array()), 'row');
            echo "</li>
\t           \t<li>";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["subMenu"], "recetas", array()), 'row');
            echo "</li>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subMenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t    </ul>
\t</div>

\t\t ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8599be607ceb16bc5b71b26f4d70d6a0f153f7ed0d8ff928ead806b1da56e7a7->leave($__internal_8599be607ceb16bc5b71b26f4d70d6a0f153f7ed0d8ff928ead806b1da56e7a7_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5847988c768bb075d711ad253a0b1cbbebd3da4ac59ce694644d4789b561e20 = $this->env->getExtension("native_profiler");
        $__internal_a5847988c768bb075d711ad253a0b1cbbebd3da4ac59ce694644d4789b561e20->enter($__internal_a5847988c768bb075d711ad253a0b1cbbebd3da4ac59ce694644d4789b561e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "
<script src=\"";
        // line 30
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
        // line 53
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
        
        $__internal_a5847988c768bb075d711ad253a0b1cbbebd3da4ac59ce694644d4789b561e20->leave($__internal_a5847988c768bb075d711ad253a0b1cbbebd3da4ac59ce694644d4789b561e20_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Menu:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 53,  125 => 30,  122 => 29,  116 => 28,  107 => 25,  103 => 24,  98 => 21,  90 => 19,  85 => 18,  80 => 17,  78 => 16,  74 => 14,  65 => 10,  59 => 7,  53 => 4,  47 => 2,  41 => 1,  31 => 68,  29 => 28,  26 => 27,  24 => 1,);
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
