<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_3f4a9786142e91bf320449ae5d595a7c135e24cd4db7efb5573fabd7edd9b00c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe33e96d6ea216ceee65aaf5a2526461a37bcada90812b20b72a2b3e4230e6e6 = $this->env->getExtension("native_profiler");
        $__internal_fe33e96d6ea216ceee65aaf5a2526461a37bcada90812b20b72a2b3e4230e6e6->enter($__internal_fe33e96d6ea216ceee65aaf5a2526461a37bcada90812b20b72a2b3e4230e6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <title>Eat&Fit</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/checkbox3.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/css/select2.min.css"), "html", null, true);
        echo "\">\"
    <!-- CSS App -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/css/themes/flat-blue.css"), "html", null, true);
        echo "\">

    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
</head>

<body class=\"flat-blue login-page\">
    <div class=\"container\">
        ";
        // line 28
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 30
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 31
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 32
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        ";
        }
        // line 37
        echo "
        <div>
            ";
        // line 39
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 41
        echo "        </div>
    </div>

    <!-- Javascript Libs -->
    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/jquery.matchHeight-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/ace/mode-html.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/lib/js/ace/theme-github.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/js/app.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("TemplateAdmin/dist/js/index.js"), "html", null, true);
        echo "\"></script>
         ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "</body>

</html>";
        
        $__internal_fe33e96d6ea216ceee65aaf5a2526461a37bcada90812b20b72a2b3e4230e6e6->leave($__internal_fe33e96d6ea216ceee65aaf5a2526461a37bcada90812b20b72a2b3e4230e6e6_prof);

    }

    // line 39
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7cccc3bd61c3e36ba080fa20f3aa523f2f1af570e57a4c3f4256a1c7abb1e702 = $this->env->getExtension("native_profiler");
        $__internal_7cccc3bd61c3e36ba080fa20f3aa523f2f1af570e57a4c3f4256a1c7abb1e702->enter($__internal_7cccc3bd61c3e36ba080fa20f3aa523f2f1af570e57a4c3f4256a1c7abb1e702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 40
        echo "            ";
        
        $__internal_7cccc3bd61c3e36ba080fa20f3aa523f2f1af570e57a4c3f4256a1c7abb1e702->leave($__internal_7cccc3bd61c3e36ba080fa20f3aa523f2f1af570e57a4c3f4256a1c7abb1e702_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3464b3c08f3ce3f7755462df0b0aa448acda12408d1a42e4c0212dd39a197842 = $this->env->getExtension("native_profiler");
        $__internal_3464b3c08f3ce3f7755462df0b0aa448acda12408d1a42e4c0212dd39a197842->enter($__internal_3464b3c08f3ce3f7755462df0b0aa448acda12408d1a42e4c0212dd39a197842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3464b3c08f3ce3f7755462df0b0aa448acda12408d1a42e4c0212dd39a197842->leave($__internal_3464b3c08f3ce3f7755462df0b0aa448acda12408d1a42e4c0212dd39a197842_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 57,  198 => 40,  192 => 39,  183 => 58,  181 => 57,  177 => 56,  173 => 55,  169 => 54,  165 => 53,  161 => 52,  157 => 51,  153 => 50,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  133 => 45,  127 => 41,  125 => 39,  121 => 37,  118 => 36,  112 => 35,  103 => 32,  98 => 31,  93 => 30,  88 => 29,  86 => 28,  78 => 23,  73 => 21,  69 => 20,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  40 => 12,  36 => 11,  24 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>

<head>
    <title>Eat&Fit</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/animate.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/bootstrap-switch.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/checkbox3.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/jquery.dataTables.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/dataTables.bootstrap.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/lib/css/select2.min.css') }}\">\"
    <!-- CSS App -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/dist/css/style.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('TemplateAdmin/css/themes/flat-blue.css') }}\">

    <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/jquery.min.js') }}\"></script>
</head>

<body class=\"flat-blue login-page\">
    <div class=\"container\">
        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </div>

    <!-- Javascript Libs -->
    <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/Chart.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/bootstrap-switch.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/jquery.matchHeight-min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/jquery.dataTables.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/dataTables.bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/select2.full.min.js') }}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/ace/ace.js') }}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/ace/mode-html.js') }}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/lib/js/ace/theme-github.js') }}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/js/app.js') }}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset('TemplateAdmin/dist/js/index.js') }}\"></script>
         {% block javascripts %}{% endblock %}
</body>

</html>";
    }
}
