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
        $__internal_2019d226d647820b234f620470135158adff444a46a5974fcce0bcbd07bdc370 = $this->env->getExtension("native_profiler");
        $__internal_2019d226d647820b234f620470135158adff444a46a5974fcce0bcbd07bdc370->enter($__internal_2019d226d647820b234f620470135158adff444a46a5974fcce0bcbd07bdc370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Comentario/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2019d226d647820b234f620470135158adff444a46a5974fcce0bcbd07bdc370->leave($__internal_2019d226d647820b234f620470135158adff444a46a5974fcce0bcbd07bdc370_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ee5462e543e9f1542576b5ce0af5c04f1329aded3ef7ce0609f78d34141acdb = $this->env->getExtension("native_profiler");
        $__internal_2ee5462e543e9f1542576b5ce0af5c04f1329aded3ef7ce0609f78d34141acdb->enter($__internal_2ee5462e543e9f1542576b5ce0af5c04f1329aded3ef7ce0609f78d34141acdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario ";
        
        $__internal_2ee5462e543e9f1542576b5ce0af5c04f1329aded3ef7ce0609f78d34141acdb->leave($__internal_2ee5462e543e9f1542576b5ce0af5c04f1329aded3ef7ce0609f78d34141acdb_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8aec40b6b31803afe99851d9a343983b1eab10557e61f62fe2d648ea543aafd = $this->env->getExtension("native_profiler");
        $__internal_d8aec40b6b31803afe99851d9a343983b1eab10557e61f62fe2d648ea543aafd->enter($__internal_d8aec40b6b31803afe99851d9a343983b1eab10557e61f62fe2d648ea543aafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_d8aec40b6b31803afe99851d9a343983b1eab10557e61f62fe2d648ea543aafd->leave($__internal_d8aec40b6b31803afe99851d9a343983b1eab10557e61f62fe2d648ea543aafd_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a59a1cbd24fc7609b525b78b33441b7f087e8c0bca353b605a173ed5c2def918 = $this->env->getExtension("native_profiler");
        $__internal_a59a1cbd24fc7609b525b78b33441b7f087e8c0bca353b605a173ed5c2def918->enter($__internal_a59a1cbd24fc7609b525b78b33441b7f087e8c0bca353b605a173ed5c2def918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a59a1cbd24fc7609b525b78b33441b7f087e8c0bca353b605a173ed5c2def918->leave($__internal_a59a1cbd24fc7609b525b78b33441b7f087e8c0bca353b605a173ed5c2def918_prof);

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
