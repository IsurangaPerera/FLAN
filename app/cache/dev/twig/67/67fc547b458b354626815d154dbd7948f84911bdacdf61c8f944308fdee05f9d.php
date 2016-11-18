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
        $__internal_8b7c185494763841aa3c86d0d0b4ca9ca52af882d145826a715f897edcec738b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7c185494763841aa3c86d0d0b4ca9ca52af882d145826a715f897edcec738b->enter($__internal_8b7c185494763841aa3c86d0d0b4ca9ca52af882d145826a715f897edcec738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b7c185494763841aa3c86d0d0b4ca9ca52af882d145826a715f897edcec738b->leave($__internal_8b7c185494763841aa3c86d0d0b4ca9ca52af882d145826a715f897edcec738b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1359bb4aa4b563a956ebb703b61f64a39417f5af5525b987001aec9356e79992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1359bb4aa4b563a956ebb703b61f64a39417f5af5525b987001aec9356e79992->enter($__internal_1359bb4aa4b563a956ebb703b61f64a39417f5af5525b987001aec9356e79992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1359bb4aa4b563a956ebb703b61f64a39417f5af5525b987001aec9356e79992->leave($__internal_1359bb4aa4b563a956ebb703b61f64a39417f5af5525b987001aec9356e79992_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20e8a1657493a520993e942da769e163b4f2110cdc994c83eaac467d708fa5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e8a1657493a520993e942da769e163b4f2110cdc994c83eaac467d708fa5e1->enter($__internal_20e8a1657493a520993e942da769e163b4f2110cdc994c83eaac467d708fa5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_20e8a1657493a520993e942da769e163b4f2110cdc994c83eaac467d708fa5e1->leave($__internal_20e8a1657493a520993e942da769e163b4f2110cdc994c83eaac467d708fa5e1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbadff965a1864c5fa0165c51bb0fa60908b31f9e23cc71e96295c8678451ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbadff965a1864c5fa0165c51bb0fa60908b31f9e23cc71e96295c8678451ab7->enter($__internal_fbadff965a1864c5fa0165c51bb0fa60908b31f9e23cc71e96295c8678451ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fbadff965a1864c5fa0165c51bb0fa60908b31f9e23cc71e96295c8678451ab7->leave($__internal_fbadff965a1864c5fa0165c51bb0fa60908b31f9e23cc71e96295c8678451ab7_prof);

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
