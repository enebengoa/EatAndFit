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
        $__internal_39698c05d17d56d832db7262aaeb0f72ec04e3d76d7d6664d7abcbea198098fe = $this->env->getExtension("native_profiler");
        $__internal_39698c05d17d56d832db7262aaeb0f72ec04e3d76d7d6664d7abcbea198098fe->enter($__internal_39698c05d17d56d832db7262aaeb0f72ec04e3d76d7d6664d7abcbea198098fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Comentario:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39698c05d17d56d832db7262aaeb0f72ec04e3d76d7d6664d7abcbea198098fe->leave($__internal_39698c05d17d56d832db7262aaeb0f72ec04e3d76d7d6664d7abcbea198098fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96f00c6b15c23cc47cdb8b9a15e1cfca35377a6275bdc81e5327cff45b2ba7fc = $this->env->getExtension("native_profiler");
        $__internal_96f00c6b15c23cc47cdb8b9a15e1cfca35377a6275bdc81e5327cff45b2ba7fc->enter($__internal_96f00c6b15c23cc47cdb8b9a15e1cfca35377a6275bdc81e5327cff45b2ba7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario ";
        
        $__internal_96f00c6b15c23cc47cdb8b9a15e1cfca35377a6275bdc81e5327cff45b2ba7fc->leave($__internal_96f00c6b15c23cc47cdb8b9a15e1cfca35377a6275bdc81e5327cff45b2ba7fc_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c4be9ecdadc812b80b1eb213302fbb2312a42009560fda90606c3e5ec320621 = $this->env->getExtension("native_profiler");
        $__internal_0c4be9ecdadc812b80b1eb213302fbb2312a42009560fda90606c3e5ec320621->enter($__internal_0c4be9ecdadc812b80b1eb213302fbb2312a42009560fda90606c3e5ec320621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_0c4be9ecdadc812b80b1eb213302fbb2312a42009560fda90606c3e5ec320621->leave($__internal_0c4be9ecdadc812b80b1eb213302fbb2312a42009560fda90606c3e5ec320621_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd66dc0f47b53ac2cdd895b05f3eeff087e00eb4d9e6c803be886acb0e9f4e18 = $this->env->getExtension("native_profiler");
        $__internal_cd66dc0f47b53ac2cdd895b05f3eeff087e00eb4d9e6c803be886acb0e9f4e18->enter($__internal_cd66dc0f47b53ac2cdd895b05f3eeff087e00eb4d9e6c803be886acb0e9f4e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cd66dc0f47b53ac2cdd895b05f3eeff087e00eb4d9e6c803be886acb0e9f4e18->leave($__internal_cd66dc0f47b53ac2cdd895b05f3eeff087e00eb4d9e6c803be886acb0e9f4e18_prof);

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
