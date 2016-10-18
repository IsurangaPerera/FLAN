<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_da0a1c062b81fd241fc05a9b51ace004ae2a1e5876dea9cc619d07d7c62ff6a7 extends Twig_Template
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
        $__internal_370647226a910894c15ac29bf3541ea8ff617d6e9a5b703df22337ce778f758c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370647226a910894c15ac29bf3541ea8ff617d6e9a5b703df22337ce778f758c->enter($__internal_370647226a910894c15ac29bf3541ea8ff617d6e9a5b703df22337ce778f758c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_370647226a910894c15ac29bf3541ea8ff617d6e9a5b703df22337ce778f758c->leave($__internal_370647226a910894c15ac29bf3541ea8ff617d6e9a5b703df22337ce778f758c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81da47cef2870c6044f673cb57f88a7829cf2464d842c3f0a07f3eafda13129d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81da47cef2870c6044f673cb57f88a7829cf2464d842c3f0a07f3eafda13129d->enter($__internal_81da47cef2870c6044f673cb57f88a7829cf2464d842c3f0a07f3eafda13129d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_81da47cef2870c6044f673cb57f88a7829cf2464d842c3f0a07f3eafda13129d->leave($__internal_81da47cef2870c6044f673cb57f88a7829cf2464d842c3f0a07f3eafda13129d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c7b84c5c20da3ddc4d2a7ce19c9c69b148c40b00c4f24c326f99ead5ff9925b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7b84c5c20da3ddc4d2a7ce19c9c69b148c40b00c4f24c326f99ead5ff9925b->enter($__internal_0c7b84c5c20da3ddc4d2a7ce19c9c69b148c40b00c4f24c326f99ead5ff9925b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c7b84c5c20da3ddc4d2a7ce19c9c69b148c40b00c4f24c326f99ead5ff9925b->leave($__internal_0c7b84c5c20da3ddc4d2a7ce19c9c69b148c40b00c4f24c326f99ead5ff9925b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5c950113b675e1c751e9313435fd4d103546d4b971a1a70b56f0271cc512a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c950113b675e1c751e9313435fd4d103546d4b971a1a70b56f0271cc512a23->enter($__internal_e5c950113b675e1c751e9313435fd4d103546d4b971a1a70b56f0271cc512a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e5c950113b675e1c751e9313435fd4d103546d4b971a1a70b56f0271cc512a23->leave($__internal_e5c950113b675e1c751e9313435fd4d103546d4b971a1a70b56f0271cc512a23_prof);

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
