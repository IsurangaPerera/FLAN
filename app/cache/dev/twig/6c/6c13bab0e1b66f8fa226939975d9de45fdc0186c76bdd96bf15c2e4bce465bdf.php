<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9058137046c2ef960ad4478f9c9da31ea44aaa7d85bca80b90c654a4e654f54c extends Twig_Template
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
        $__internal_51dbefcea9e212261f3a2feeff734ea8fca6b7dcbb6ea6b39cd0c23e3132e1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dbefcea9e212261f3a2feeff734ea8fca6b7dcbb6ea6b39cd0c23e3132e1f6->enter($__internal_51dbefcea9e212261f3a2feeff734ea8fca6b7dcbb6ea6b39cd0c23e3132e1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51dbefcea9e212261f3a2feeff734ea8fca6b7dcbb6ea6b39cd0c23e3132e1f6->leave($__internal_51dbefcea9e212261f3a2feeff734ea8fca6b7dcbb6ea6b39cd0c23e3132e1f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2fc3c0eb5d0ec9c209cde7b4068070858fd65119d3fbcd8897cd023987e940f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc3c0eb5d0ec9c209cde7b4068070858fd65119d3fbcd8897cd023987e940f0->enter($__internal_2fc3c0eb5d0ec9c209cde7b4068070858fd65119d3fbcd8897cd023987e940f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2fc3c0eb5d0ec9c209cde7b4068070858fd65119d3fbcd8897cd023987e940f0->leave($__internal_2fc3c0eb5d0ec9c209cde7b4068070858fd65119d3fbcd8897cd023987e940f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f18838d85f2a89dd51c4eb63f3845f48cd7d1593724f5da4341b87bb272b4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f18838d85f2a89dd51c4eb63f3845f48cd7d1593724f5da4341b87bb272b4b2->enter($__internal_3f18838d85f2a89dd51c4eb63f3845f48cd7d1593724f5da4341b87bb272b4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3f18838d85f2a89dd51c4eb63f3845f48cd7d1593724f5da4341b87bb272b4b2->leave($__internal_3f18838d85f2a89dd51c4eb63f3845f48cd7d1593724f5da4341b87bb272b4b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9c7d542d0b88513bcf27091bb255867208164837c3445e2e2e53192125098f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c7d542d0b88513bcf27091bb255867208164837c3445e2e2e53192125098f1->enter($__internal_a9c7d542d0b88513bcf27091bb255867208164837c3445e2e2e53192125098f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a9c7d542d0b88513bcf27091bb255867208164837c3445e2e2e53192125098f1->leave($__internal_a9c7d542d0b88513bcf27091bb255867208164837c3445e2e2e53192125098f1_prof);

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
