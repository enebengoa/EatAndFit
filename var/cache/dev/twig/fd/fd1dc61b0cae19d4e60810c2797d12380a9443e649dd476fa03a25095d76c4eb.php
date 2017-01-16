<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_d3fd607ac26cfb6bbc7a7ff66b90616a0ee436a9d46dbd0e90c4960302725aa7 extends Twig_Template
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
        $__internal_af38f26ce938cd07183da557f5124849b42d5ad0127bb488c1bd3b020675fd42 = $this->env->getExtension("native_profiler");
        $__internal_af38f26ce938cd07183da557f5124849b42d5ad0127bb488c1bd3b020675fd42->enter($__internal_af38f26ce938cd07183da557f5124849b42d5ad0127bb488c1bd3b020675fd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_af38f26ce938cd07183da557f5124849b42d5ad0127bb488c1bd3b020675fd42->leave($__internal_af38f26ce938cd07183da557f5124849b42d5ad0127bb488c1bd3b020675fd42_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
";
    }
}
