<?php

/* @Admin/Comentario/add.html.twig */
class __TwigTemplate_086664be7b0e5fad3227df1675c6f7d918a98ba82937e635362a150866a134c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Comentario/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c2835e2ef0b78c81eb3d09472b66a51bb98567cff5f87f12ea92d80b545eced = $this->env->getExtension("native_profiler");
        $__internal_0c2835e2ef0b78c81eb3d09472b66a51bb98567cff5f87f12ea92d80b545eced->enter($__internal_0c2835e2ef0b78c81eb3d09472b66a51bb98567cff5f87f12ea92d80b545eced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Comentario/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c2835e2ef0b78c81eb3d09472b66a51bb98567cff5f87f12ea92d80b545eced->leave($__internal_0c2835e2ef0b78c81eb3d09472b66a51bb98567cff5f87f12ea92d80b545eced_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2851b4f6ba729e97c1880c50a4f0c7aae14273063d4dc5e5c51f1af859b91dce = $this->env->getExtension("native_profiler");
        $__internal_2851b4f6ba729e97c1880c50a4f0c7aae14273063d4dc5e5c51f1af859b91dce->enter($__internal_2851b4f6ba729e97c1880c50a4f0c7aae14273063d4dc5e5c51f1af859b91dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario ";
        
        $__internal_2851b4f6ba729e97c1880c50a4f0c7aae14273063d4dc5e5c51f1af859b91dce->leave($__internal_2851b4f6ba729e97c1880c50a4f0c7aae14273063d4dc5e5c51f1af859b91dce_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a228f89555ce6a4487bfbbd99a015c4d0d37662bbcd355f15a17f206c4b45dc4 = $this->env->getExtension("native_profiler");
        $__internal_a228f89555ce6a4487bfbbd99a015c4d0d37662bbcd355f15a17f206c4b45dc4->enter($__internal_a228f89555ce6a4487bfbbd99a015c4d0d37662bbcd355f15a17f206c4b45dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_a228f89555ce6a4487bfbbd99a015c4d0d37662bbcd355f15a17f206c4b45dc4->leave($__internal_a228f89555ce6a4487bfbbd99a015c4d0d37662bbcd355f15a17f206c4b45dc4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_217929ddc9f0fe235bda9ccac6781b0ae3bf09bfb2ac295aa699a2e04a52fd0e = $this->env->getExtension("native_profiler");
        $__internal_217929ddc9f0fe235bda9ccac6781b0ae3bf09bfb2ac295aa699a2e04a52fd0e->enter($__internal_217929ddc9f0fe235bda9ccac6781b0ae3bf09bfb2ac295aa699a2e04a52fd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "       <div class=\"row\">
       <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h1>Añadir comentario</h1>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                        
                            <div class=\"form-group\">
                                ";
        // line 20
        $this->loadTemplate("AdminBundle:Comentario:form.html.twig", "@Admin/Comentario/add.html.twig", 20)->display($context);
        // line 21
        echo "                                </section>
                            </div>
                        </div>
                    </div>
                </div>
           \t</div>
       \t</div>
        
    </div>
    <!-- /.row -->\t
    <div class=\"clearfix\"></div>

";
        
        $__internal_217929ddc9f0fe235bda9ccac6781b0ae3bf09bfb2ac295aa699a2e04a52fd0e->leave($__internal_217929ddc9f0fe235bda9ccac6781b0ae3bf09bfb2ac295aa699a2e04a52fd0e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Comentario/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  86 => 20,  73 => 9,  67 => 8,  58 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Añadir comentario {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
       <div class=\"row\">
       <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h1>Añadir comentario</h1>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                        
                            <div class=\"form-group\">
                                {% include \"AdminBundle:Comentario:form.html.twig\" %}
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
           \t</div>
       \t</div>
        
    </div>
    <!-- /.row -->\t
    <div class=\"clearfix\"></div>

{% endblock %}";
    }
}
