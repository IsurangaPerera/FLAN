<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5e0207d69aee840575dd22722d10b50ee1f85c84651b7bc25cd25640ce212531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b02a6d6af597f08e33bc83953582416be5366916fe5b7eafe9fb66ca6eadb09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02a6d6af597f08e33bc83953582416be5366916fe5b7eafe9fb66ca6eadb09b->enter($__internal_b02a6d6af597f08e33bc83953582416be5366916fe5b7eafe9fb66ca6eadb09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b02a6d6af597f08e33bc83953582416be5366916fe5b7eafe9fb66ca6eadb09b->leave($__internal_b02a6d6af597f08e33bc83953582416be5366916fe5b7eafe9fb66ca6eadb09b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bff2de6eeb9b0eb521cf6d3df4381e48f0d750035a8bfe30aaf9205fdcec2325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff2de6eeb9b0eb521cf6d3df4381e48f0d750035a8bfe30aaf9205fdcec2325->enter($__internal_bff2de6eeb9b0eb521cf6d3df4381e48f0d750035a8bfe30aaf9205fdcec2325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bff2de6eeb9b0eb521cf6d3df4381e48f0d750035a8bfe30aaf9205fdcec2325->leave($__internal_bff2de6eeb9b0eb521cf6d3df4381e48f0d750035a8bfe30aaf9205fdcec2325_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09d0539e85c20de2c0d486614db4e11a3ada454e2de8540b33e1d94c729cb5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d0539e85c20de2c0d486614db4e11a3ada454e2de8540b33e1d94c729cb5a2->enter($__internal_09d0539e85c20de2c0d486614db4e11a3ada454e2de8540b33e1d94c729cb5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09d0539e85c20de2c0d486614db4e11a3ada454e2de8540b33e1d94c729cb5a2->leave($__internal_09d0539e85c20de2c0d486614db4e11a3ada454e2de8540b33e1d94c729cb5a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24479e225d4c25ce9086e7ab1b7f60158205909db35e6458138813f96e79a24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24479e225d4c25ce9086e7ab1b7f60158205909db35e6458138813f96e79a24b->enter($__internal_24479e225d4c25ce9086e7ab1b7f60158205909db35e6458138813f96e79a24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_24479e225d4c25ce9086e7ab1b7f60158205909db35e6458138813f96e79a24b->leave($__internal_24479e225d4c25ce9086e7ab1b7f60158205909db35e6458138813f96e79a24b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
