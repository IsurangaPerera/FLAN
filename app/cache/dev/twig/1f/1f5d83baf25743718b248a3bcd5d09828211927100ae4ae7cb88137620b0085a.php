<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eff71c939870b73e21becb7f6a18c92a36df12cd882dfb90fffbb5870b787322 extends Twig_Template
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
        $__internal_3d9dd9c51a8a0c65c6613fe724e2f975bd1e1e43f7c38937a779c7b3d23b14e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9dd9c51a8a0c65c6613fe724e2f975bd1e1e43f7c38937a779c7b3d23b14e1->enter($__internal_3d9dd9c51a8a0c65c6613fe724e2f975bd1e1e43f7c38937a779c7b3d23b14e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d9dd9c51a8a0c65c6613fe724e2f975bd1e1e43f7c38937a779c7b3d23b14e1->leave($__internal_3d9dd9c51a8a0c65c6613fe724e2f975bd1e1e43f7c38937a779c7b3d23b14e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0e945be82bbcac32a0098b62bb8e31b228e2dc6e30360858e512ea733478fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e945be82bbcac32a0098b62bb8e31b228e2dc6e30360858e512ea733478fb7->enter($__internal_c0e945be82bbcac32a0098b62bb8e31b228e2dc6e30360858e512ea733478fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c0e945be82bbcac32a0098b62bb8e31b228e2dc6e30360858e512ea733478fb7->leave($__internal_c0e945be82bbcac32a0098b62bb8e31b228e2dc6e30360858e512ea733478fb7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_69c1a16153cf7127de5ddeff92463313eb9bf65c279d971f15d9c1569b079982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c1a16153cf7127de5ddeff92463313eb9bf65c279d971f15d9c1569b079982->enter($__internal_69c1a16153cf7127de5ddeff92463313eb9bf65c279d971f15d9c1569b079982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_69c1a16153cf7127de5ddeff92463313eb9bf65c279d971f15d9c1569b079982->leave($__internal_69c1a16153cf7127de5ddeff92463313eb9bf65c279d971f15d9c1569b079982_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2f2b5bc9507a61515e10bb7aab268f53e320a0c17934d990588525d237aa660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f2b5bc9507a61515e10bb7aab268f53e320a0c17934d990588525d237aa660->enter($__internal_a2f2b5bc9507a61515e10bb7aab268f53e320a0c17934d990588525d237aa660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a2f2b5bc9507a61515e10bb7aab268f53e320a0c17934d990588525d237aa660->leave($__internal_a2f2b5bc9507a61515e10bb7aab268f53e320a0c17934d990588525d237aa660_prof);

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
