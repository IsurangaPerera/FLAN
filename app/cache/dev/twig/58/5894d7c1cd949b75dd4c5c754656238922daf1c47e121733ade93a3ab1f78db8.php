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
        $__internal_24014e55ff2ad95902a241527bd2030505f26ba52fd32b523fcaccd4a535b9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24014e55ff2ad95902a241527bd2030505f26ba52fd32b523fcaccd4a535b9d7->enter($__internal_24014e55ff2ad95902a241527bd2030505f26ba52fd32b523fcaccd4a535b9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24014e55ff2ad95902a241527bd2030505f26ba52fd32b523fcaccd4a535b9d7->leave($__internal_24014e55ff2ad95902a241527bd2030505f26ba52fd32b523fcaccd4a535b9d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1268207a73c7c6e90d0344b58e8a7f7cc397cd2488143c43e9f2bca8086caa1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1268207a73c7c6e90d0344b58e8a7f7cc397cd2488143c43e9f2bca8086caa1a->enter($__internal_1268207a73c7c6e90d0344b58e8a7f7cc397cd2488143c43e9f2bca8086caa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1268207a73c7c6e90d0344b58e8a7f7cc397cd2488143c43e9f2bca8086caa1a->leave($__internal_1268207a73c7c6e90d0344b58e8a7f7cc397cd2488143c43e9f2bca8086caa1a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bd432338a623c98ac38f4494e095f2dac21d1d34d99af40b0966d2ed710e4cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd432338a623c98ac38f4494e095f2dac21d1d34d99af40b0966d2ed710e4cd->enter($__internal_9bd432338a623c98ac38f4494e095f2dac21d1d34d99af40b0966d2ed710e4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9bd432338a623c98ac38f4494e095f2dac21d1d34d99af40b0966d2ed710e4cd->leave($__internal_9bd432338a623c98ac38f4494e095f2dac21d1d34d99af40b0966d2ed710e4cd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5481b89dfc059870e7cb3fc166492a2571e37a2a2033d4e1561f3ec55a598b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5481b89dfc059870e7cb3fc166492a2571e37a2a2033d4e1561f3ec55a598b5->enter($__internal_b5481b89dfc059870e7cb3fc166492a2571e37a2a2033d4e1561f3ec55a598b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b5481b89dfc059870e7cb3fc166492a2571e37a2a2033d4e1561f3ec55a598b5->leave($__internal_b5481b89dfc059870e7cb3fc166492a2571e37a2a2033d4e1561f3ec55a598b5_prof);

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
