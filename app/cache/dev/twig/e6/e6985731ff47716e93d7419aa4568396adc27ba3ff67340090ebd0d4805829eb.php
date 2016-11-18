<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f8a6fe5a946c921c99bedff034a6bbd1a5d4b0022958a991e3e7e4a7a906b0d6 extends Twig_Template
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
        $__internal_12189ecc5890817b5790c0b5be638d4fec3535125bb2315402ca58a80bc622ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12189ecc5890817b5790c0b5be638d4fec3535125bb2315402ca58a80bc622ff->enter($__internal_12189ecc5890817b5790c0b5be638d4fec3535125bb2315402ca58a80bc622ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12189ecc5890817b5790c0b5be638d4fec3535125bb2315402ca58a80bc622ff->leave($__internal_12189ecc5890817b5790c0b5be638d4fec3535125bb2315402ca58a80bc622ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a917a28faaa9a565ed644339fa13c327ea43f9ad88bb83a2cb1325ed795eba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a917a28faaa9a565ed644339fa13c327ea43f9ad88bb83a2cb1325ed795eba6->enter($__internal_4a917a28faaa9a565ed644339fa13c327ea43f9ad88bb83a2cb1325ed795eba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a917a28faaa9a565ed644339fa13c327ea43f9ad88bb83a2cb1325ed795eba6->leave($__internal_4a917a28faaa9a565ed644339fa13c327ea43f9ad88bb83a2cb1325ed795eba6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_581a5a5ca637c137d16ffdfc538f7be1d9b2ce7124f67b74a85883472726fb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581a5a5ca637c137d16ffdfc538f7be1d9b2ce7124f67b74a85883472726fb4f->enter($__internal_581a5a5ca637c137d16ffdfc538f7be1d9b2ce7124f67b74a85883472726fb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_581a5a5ca637c137d16ffdfc538f7be1d9b2ce7124f67b74a85883472726fb4f->leave($__internal_581a5a5ca637c137d16ffdfc538f7be1d9b2ce7124f67b74a85883472726fb4f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d30ece5bfcf00759b6485ed2e29e0c83b9f946036def84e808617958feee272b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30ece5bfcf00759b6485ed2e29e0c83b9f946036def84e808617958feee272b->enter($__internal_d30ece5bfcf00759b6485ed2e29e0c83b9f946036def84e808617958feee272b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d30ece5bfcf00759b6485ed2e29e0c83b9f946036def84e808617958feee272b->leave($__internal_d30ece5bfcf00759b6485ed2e29e0c83b9f946036def84e808617958feee272b_prof);

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
