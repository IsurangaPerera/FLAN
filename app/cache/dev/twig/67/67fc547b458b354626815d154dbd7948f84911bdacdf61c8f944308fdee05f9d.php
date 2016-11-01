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
        $__internal_35fb23376567d7039d743debe9228aaaf0a0c4e10c2fc6a8e2b588dab4ade4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fb23376567d7039d743debe9228aaaf0a0c4e10c2fc6a8e2b588dab4ade4bc->enter($__internal_35fb23376567d7039d743debe9228aaaf0a0c4e10c2fc6a8e2b588dab4ade4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35fb23376567d7039d743debe9228aaaf0a0c4e10c2fc6a8e2b588dab4ade4bc->leave($__internal_35fb23376567d7039d743debe9228aaaf0a0c4e10c2fc6a8e2b588dab4ade4bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c192c71e7db18fa96c40af6a8311ca201a8a868bf558a7b57c35042ee01c576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c192c71e7db18fa96c40af6a8311ca201a8a868bf558a7b57c35042ee01c576->enter($__internal_3c192c71e7db18fa96c40af6a8311ca201a8a868bf558a7b57c35042ee01c576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3c192c71e7db18fa96c40af6a8311ca201a8a868bf558a7b57c35042ee01c576->leave($__internal_3c192c71e7db18fa96c40af6a8311ca201a8a868bf558a7b57c35042ee01c576_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c36bfe10c0361dff78be30084f753678f703afe12550c5063e461d391b6fadc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36bfe10c0361dff78be30084f753678f703afe12550c5063e461d391b6fadc3->enter($__internal_c36bfe10c0361dff78be30084f753678f703afe12550c5063e461d391b6fadc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c36bfe10c0361dff78be30084f753678f703afe12550c5063e461d391b6fadc3->leave($__internal_c36bfe10c0361dff78be30084f753678f703afe12550c5063e461d391b6fadc3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7302a8a6e9936f1bad212a4025129efe10de738c22c05d059c33ca63fb6a38bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7302a8a6e9936f1bad212a4025129efe10de738c22c05d059c33ca63fb6a38bd->enter($__internal_7302a8a6e9936f1bad212a4025129efe10de738c22c05d059c33ca63fb6a38bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7302a8a6e9936f1bad212a4025129efe10de738c22c05d059c33ca63fb6a38bd->leave($__internal_7302a8a6e9936f1bad212a4025129efe10de738c22c05d059c33ca63fb6a38bd_prof);

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
