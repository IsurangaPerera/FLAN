<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_50f9f5ca465fdb5b57786b6e1bc2b4207e3aa4911bf390e25f6a58dc6794759b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa7b652708d8b3db99879adeabd3188ef42b52ba45bfef7e857443b1b4ec8906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7b652708d8b3db99879adeabd3188ef42b52ba45bfef7e857443b1b4ec8906->enter($__internal_fa7b652708d8b3db99879adeabd3188ef42b52ba45bfef7e857443b1b4ec8906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa7b652708d8b3db99879adeabd3188ef42b52ba45bfef7e857443b1b4ec8906->leave($__internal_fa7b652708d8b3db99879adeabd3188ef42b52ba45bfef7e857443b1b4ec8906_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b8a44c23aaa40bec5469b0b69f32eaf46f777fc7b7d5c67f17077f794ba53caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44c23aaa40bec5469b0b69f32eaf46f777fc7b7d5c67f17077f794ba53caf->enter($__internal_b8a44c23aaa40bec5469b0b69f32eaf46f777fc7b7d5c67f17077f794ba53caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b8a44c23aaa40bec5469b0b69f32eaf46f777fc7b7d5c67f17077f794ba53caf->leave($__internal_b8a44c23aaa40bec5469b0b69f32eaf46f777fc7b7d5c67f17077f794ba53caf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1daae43799ddbcb55bc1e6178f4df90b7aa72017010513492c5c9e2d6c12727b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1daae43799ddbcb55bc1e6178f4df90b7aa72017010513492c5c9e2d6c12727b->enter($__internal_1daae43799ddbcb55bc1e6178f4df90b7aa72017010513492c5c9e2d6c12727b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1daae43799ddbcb55bc1e6178f4df90b7aa72017010513492c5c9e2d6c12727b->leave($__internal_1daae43799ddbcb55bc1e6178f4df90b7aa72017010513492c5c9e2d6c12727b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_72a66cb35fcd8fdd8af54fcdf52cf7c744d5100a799da4e09ce702c41a4de7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a66cb35fcd8fdd8af54fcdf52cf7c744d5100a799da4e09ce702c41a4de7a4->enter($__internal_72a66cb35fcd8fdd8af54fcdf52cf7c744d5100a799da4e09ce702c41a4de7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_72a66cb35fcd8fdd8af54fcdf52cf7c744d5100a799da4e09ce702c41a4de7a4->leave($__internal_72a66cb35fcd8fdd8af54fcdf52cf7c744d5100a799da4e09ce702c41a4de7a4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
