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
        $__internal_cbdc5c1653a6ee7965e71ea92222cc34f788bd07d556328ab36d4d2c0e1ebc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdc5c1653a6ee7965e71ea92222cc34f788bd07d556328ab36d4d2c0e1ebc83->enter($__internal_cbdc5c1653a6ee7965e71ea92222cc34f788bd07d556328ab36d4d2c0e1ebc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbdc5c1653a6ee7965e71ea92222cc34f788bd07d556328ab36d4d2c0e1ebc83->leave($__internal_cbdc5c1653a6ee7965e71ea92222cc34f788bd07d556328ab36d4d2c0e1ebc83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a55a35dd975e1ca0202ef63b7e86fb4c2445b5c1efe9904d5085fe724a06bc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55a35dd975e1ca0202ef63b7e86fb4c2445b5c1efe9904d5085fe724a06bc61->enter($__internal_a55a35dd975e1ca0202ef63b7e86fb4c2445b5c1efe9904d5085fe724a06bc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a55a35dd975e1ca0202ef63b7e86fb4c2445b5c1efe9904d5085fe724a06bc61->leave($__internal_a55a35dd975e1ca0202ef63b7e86fb4c2445b5c1efe9904d5085fe724a06bc61_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33f9ec4d61a8e804ae0c32c3b43e8ebeeabd8840e0d3f75ba8a7e04c3de5ae71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f9ec4d61a8e804ae0c32c3b43e8ebeeabd8840e0d3f75ba8a7e04c3de5ae71->enter($__internal_33f9ec4d61a8e804ae0c32c3b43e8ebeeabd8840e0d3f75ba8a7e04c3de5ae71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33f9ec4d61a8e804ae0c32c3b43e8ebeeabd8840e0d3f75ba8a7e04c3de5ae71->leave($__internal_33f9ec4d61a8e804ae0c32c3b43e8ebeeabd8840e0d3f75ba8a7e04c3de5ae71_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f37bbbdf388a66070fccc76d6c5fe59f781ee127d896ceca2873a8672d8b805a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37bbbdf388a66070fccc76d6c5fe59f781ee127d896ceca2873a8672d8b805a->enter($__internal_f37bbbdf388a66070fccc76d6c5fe59f781ee127d896ceca2873a8672d8b805a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f37bbbdf388a66070fccc76d6c5fe59f781ee127d896ceca2873a8672d8b805a->leave($__internal_f37bbbdf388a66070fccc76d6c5fe59f781ee127d896ceca2873a8672d8b805a_prof);

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
