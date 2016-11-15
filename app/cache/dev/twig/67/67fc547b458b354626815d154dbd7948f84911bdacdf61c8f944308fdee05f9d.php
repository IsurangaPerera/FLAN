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
        $__internal_afe776637102516c1f757d000e29774b3edaa60dd00e76cacf56501ae200f9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe776637102516c1f757d000e29774b3edaa60dd00e76cacf56501ae200f9a2->enter($__internal_afe776637102516c1f757d000e29774b3edaa60dd00e76cacf56501ae200f9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afe776637102516c1f757d000e29774b3edaa60dd00e76cacf56501ae200f9a2->leave($__internal_afe776637102516c1f757d000e29774b3edaa60dd00e76cacf56501ae200f9a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_181e5d151fa102f0bb8989d546484716222777a3b9562737fd2e2515b68a844a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181e5d151fa102f0bb8989d546484716222777a3b9562737fd2e2515b68a844a->enter($__internal_181e5d151fa102f0bb8989d546484716222777a3b9562737fd2e2515b68a844a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_181e5d151fa102f0bb8989d546484716222777a3b9562737fd2e2515b68a844a->leave($__internal_181e5d151fa102f0bb8989d546484716222777a3b9562737fd2e2515b68a844a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d2c9c1439d3c568f372ab66b31e38aad2c48dda9579365eb85d0bee2d4babe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2c9c1439d3c568f372ab66b31e38aad2c48dda9579365eb85d0bee2d4babe1->enter($__internal_9d2c9c1439d3c568f372ab66b31e38aad2c48dda9579365eb85d0bee2d4babe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d2c9c1439d3c568f372ab66b31e38aad2c48dda9579365eb85d0bee2d4babe1->leave($__internal_9d2c9c1439d3c568f372ab66b31e38aad2c48dda9579365eb85d0bee2d4babe1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_21a3ccbf17ab18c0ce34c1b4b27d131f56b18e3070766e90fbc150ee9bd9fbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a3ccbf17ab18c0ce34c1b4b27d131f56b18e3070766e90fbc150ee9bd9fbf1->enter($__internal_21a3ccbf17ab18c0ce34c1b4b27d131f56b18e3070766e90fbc150ee9bd9fbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_21a3ccbf17ab18c0ce34c1b4b27d131f56b18e3070766e90fbc150ee9bd9fbf1->leave($__internal_21a3ccbf17ab18c0ce34c1b4b27d131f56b18e3070766e90fbc150ee9bd9fbf1_prof);

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
