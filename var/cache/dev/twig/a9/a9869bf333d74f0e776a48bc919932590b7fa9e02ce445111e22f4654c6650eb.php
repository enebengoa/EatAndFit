<?php

/* AdminBundle:Comentario:add.html.twig */
class __TwigTemplate_14262a2880579e61da886c32e1375fdfaad96c8013bba7f9a5dfa62dfd28de4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Comentario:add.html.twig", 1);
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
        $__internal_e06d613b2113c326bb3c8e4e3ecff3795b1cfe5b1f1635324d0efeef65257bef = $this->env->getExtension("native_profiler");
        $__internal_e06d613b2113c326bb3c8e4e3ecff3795b1cfe5b1f1635324d0efeef65257bef->enter($__internal_e06d613b2113c326bb3c8e4e3ecff3795b1cfe5b1f1635324d0efeef65257bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Comentario:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e06d613b2113c326bb3c8e4e3ecff3795b1cfe5b1f1635324d0efeef65257bef->leave($__internal_e06d613b2113c326bb3c8e4e3ecff3795b1cfe5b1f1635324d0efeef65257bef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e849c432b9e1d3ee14767c8fe987a55aa91eee64bb3579a34e4fcdf229b237a4 = $this->env->getExtension("native_profiler");
        $__internal_e849c432b9e1d3ee14767c8fe987a55aa91eee64bb3579a34e4fcdf229b237a4->enter($__internal_e849c432b9e1d3ee14767c8fe987a55aa91eee64bb3579a34e4fcdf229b237a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario ";
        
        $__internal_e849c432b9e1d3ee14767c8fe987a55aa91eee64bb3579a34e4fcdf229b237a4->leave($__internal_e849c432b9e1d3ee14767c8fe987a55aa91eee64bb3579a34e4fcdf229b237a4_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2b6dc22a91a550a4a9429829b63244c09c703e2eb564d4606fec191630b88da = $this->env->getExtension("native_profiler");
        $__internal_b2b6dc22a91a550a4a9429829b63244c09c703e2eb564d4606fec191630b88da->enter($__internal_b2b6dc22a91a550a4a9429829b63244c09c703e2eb564d4606fec191630b88da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_b2b6dc22a91a550a4a9429829b63244c09c703e2eb564d4606fec191630b88da->leave($__internal_b2b6dc22a91a550a4a9429829b63244c09c703e2eb564d4606fec191630b88da_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_64ac5c387f56cb8391150ce4a3301629f7c27c50fc129458f2b77b4cd6a1e414 = $this->env->getExtension("native_profiler");
        $__internal_64ac5c387f56cb8391150ce4a3301629f7c27c50fc129458f2b77b4cd6a1e414->enter($__internal_64ac5c387f56cb8391150ce4a3301629f7c27c50fc129458f2b77b4cd6a1e414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Comentario:form.html.twig", "AdminBundle:Comentario:add.html.twig", 20)->display($context);
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
        
        $__internal_64ac5c387f56cb8391150ce4a3301629f7c27c50fc129458f2b77b4cd6a1e414->leave($__internal_64ac5c387f56cb8391150ce4a3301629f7c27c50fc129458f2b77b4cd6a1e414_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Comentario:add.html.twig";
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
