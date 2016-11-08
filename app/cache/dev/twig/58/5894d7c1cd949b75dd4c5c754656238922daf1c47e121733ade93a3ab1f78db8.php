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
        $__internal_87448a804e97baf7524de0f851c58fa62c5e0df2b9f0e86c701fa95b64cb2b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87448a804e97baf7524de0f851c58fa62c5e0df2b9f0e86c701fa95b64cb2b1a->enter($__internal_87448a804e97baf7524de0f851c58fa62c5e0df2b9f0e86c701fa95b64cb2b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87448a804e97baf7524de0f851c58fa62c5e0df2b9f0e86c701fa95b64cb2b1a->leave($__internal_87448a804e97baf7524de0f851c58fa62c5e0df2b9f0e86c701fa95b64cb2b1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05ae97e293c1de7f8e46e3e589d7b9ad0272570d1b168f19b155f3fae1078add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ae97e293c1de7f8e46e3e589d7b9ad0272570d1b168f19b155f3fae1078add->enter($__internal_05ae97e293c1de7f8e46e3e589d7b9ad0272570d1b168f19b155f3fae1078add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_05ae97e293c1de7f8e46e3e589d7b9ad0272570d1b168f19b155f3fae1078add->leave($__internal_05ae97e293c1de7f8e46e3e589d7b9ad0272570d1b168f19b155f3fae1078add_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e26599457c920c4763e386dfe4294a8e9b8fa24b1772c3fdc44a2d749781956c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26599457c920c4763e386dfe4294a8e9b8fa24b1772c3fdc44a2d749781956c->enter($__internal_e26599457c920c4763e386dfe4294a8e9b8fa24b1772c3fdc44a2d749781956c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e26599457c920c4763e386dfe4294a8e9b8fa24b1772c3fdc44a2d749781956c->leave($__internal_e26599457c920c4763e386dfe4294a8e9b8fa24b1772c3fdc44a2d749781956c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0215a1cdc0e3e0776ceb211a8e2e48b0282d2394d99891f23546099dec341446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0215a1cdc0e3e0776ceb211a8e2e48b0282d2394d99891f23546099dec341446->enter($__internal_0215a1cdc0e3e0776ceb211a8e2e48b0282d2394d99891f23546099dec341446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0215a1cdc0e3e0776ceb211a8e2e48b0282d2394d99891f23546099dec341446->leave($__internal_0215a1cdc0e3e0776ceb211a8e2e48b0282d2394d99891f23546099dec341446_prof);

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
