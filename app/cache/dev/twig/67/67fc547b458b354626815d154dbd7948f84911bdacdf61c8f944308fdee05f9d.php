<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_299961c858795d9a72f65d7fc4a5b9973afb34590160d526c4c4258a39c37473 extends Twig_Template
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
        $__internal_2267642d6067712e860b5abfcb80dede4aecd338c1fc1e14c290c35899cd2e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2267642d6067712e860b5abfcb80dede4aecd338c1fc1e14c290c35899cd2e43->enter($__internal_2267642d6067712e860b5abfcb80dede4aecd338c1fc1e14c290c35899cd2e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2267642d6067712e860b5abfcb80dede4aecd338c1fc1e14c290c35899cd2e43->leave($__internal_2267642d6067712e860b5abfcb80dede4aecd338c1fc1e14c290c35899cd2e43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eacca58467d256a2bba8edd9ad47d49ec12236ffe633ceee1924cc9f3c77eba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacca58467d256a2bba8edd9ad47d49ec12236ffe633ceee1924cc9f3c77eba1->enter($__internal_eacca58467d256a2bba8edd9ad47d49ec12236ffe633ceee1924cc9f3c77eba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eacca58467d256a2bba8edd9ad47d49ec12236ffe633ceee1924cc9f3c77eba1->leave($__internal_eacca58467d256a2bba8edd9ad47d49ec12236ffe633ceee1924cc9f3c77eba1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da23d556158a4c71917e7b0d7c52abb659b4fb1cb7b8d0758fc3d8e035f64ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da23d556158a4c71917e7b0d7c52abb659b4fb1cb7b8d0758fc3d8e035f64ffa->enter($__internal_da23d556158a4c71917e7b0d7c52abb659b4fb1cb7b8d0758fc3d8e035f64ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da23d556158a4c71917e7b0d7c52abb659b4fb1cb7b8d0758fc3d8e035f64ffa->leave($__internal_da23d556158a4c71917e7b0d7c52abb659b4fb1cb7b8d0758fc3d8e035f64ffa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac50223f250b15668846885a2d5c332e901631c0d490e7cbec43331b57d5796e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac50223f250b15668846885a2d5c332e901631c0d490e7cbec43331b57d5796e->enter($__internal_ac50223f250b15668846885a2d5c332e901631c0d490e7cbec43331b57d5796e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac50223f250b15668846885a2d5c332e901631c0d490e7cbec43331b57d5796e->leave($__internal_ac50223f250b15668846885a2d5c332e901631c0d490e7cbec43331b57d5796e_prof);

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
