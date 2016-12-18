<?php

/* @Admin/Tecnica/add.html.twig */
class __TwigTemplate_710bc311702200d24e6397215f897b7d51ec8421b45bc8cd3b5079f0252bf195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Tecnica/add.html.twig", 1);
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
        $__internal_b6500da775012564c9aab588bcd1fc03608bdd1c9ee825c4147cc9bc7023890e = $this->env->getExtension("native_profiler");
        $__internal_b6500da775012564c9aab588bcd1fc03608bdd1c9ee825c4147cc9bc7023890e->enter($__internal_b6500da775012564c9aab588bcd1fc03608bdd1c9ee825c4147cc9bc7023890e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Tecnica/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6500da775012564c9aab588bcd1fc03608bdd1c9ee825c4147cc9bc7023890e->leave($__internal_b6500da775012564c9aab588bcd1fc03608bdd1c9ee825c4147cc9bc7023890e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_628520bde304fe2cc0277c0fe599660592d551ae526ff789edfdad36e128b5fb = $this->env->getExtension("native_profiler");
        $__internal_628520bde304fe2cc0277c0fe599660592d551ae526ff789edfdad36e128b5fb->enter($__internal_628520bde304fe2cc0277c0fe599660592d551ae526ff789edfdad36e128b5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir técnica";
        
        $__internal_628520bde304fe2cc0277c0fe599660592d551ae526ff789edfdad36e128b5fb->leave($__internal_628520bde304fe2cc0277c0fe599660592d551ae526ff789edfdad36e128b5fb_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4a594a25e4b37ba9b2d1ef8efe561275d1550c9e946b5c56cb82719333483ec = $this->env->getExtension("native_profiler");
        $__internal_f4a594a25e4b37ba9b2d1ef8efe561275d1550c9e946b5c56cb82719333483ec->enter($__internal_f4a594a25e4b37ba9b2d1ef8efe561275d1550c9e946b5c56cb82719333483ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_f4a594a25e4b37ba9b2d1ef8efe561275d1550c9e946b5c56cb82719333483ec->leave($__internal_f4a594a25e4b37ba9b2d1ef8efe561275d1550c9e946b5c56cb82719333483ec_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c740d56ddc731033d86d17de03ea7dc177678e2b9558a6310da9d2e1bc69756 = $this->env->getExtension("native_profiler");
        $__internal_0c740d56ddc731033d86d17de03ea7dc177678e2b9558a6310da9d2e1bc69756->enter($__internal_0c740d56ddc731033d86d17de03ea7dc177678e2b9558a6310da9d2e1bc69756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TÉCNICAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva técnica 
                                            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("App_admin_listTecnica");
        echo "\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        ";
        // line 30
        $this->loadTemplate("AdminBundle:Tecnica:form.html.twig", "@Admin/Tecnica/add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_0c740d56ddc731033d86d17de03ea7dc177678e2b9558a6310da9d2e1bc69756->leave($__internal_0c740d56ddc731033d86d17de03ea7dc177678e2b9558a6310da9d2e1bc69756_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Tecnica/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  99 => 30,  88 => 22,  73 => 9,  67 => 8,  58 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Añadir técnica{% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TÉCNICAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva técnica 
                                            <a href=\"{{ path('App_admin_listTecnica')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Tecnica:form.html.twig\" %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
{% endblock %}";
    }
}
