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
        $__internal_0b128eb1fbaf117115e94d07000079ddb3b099b55d5da3e8fe44639b11b30c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b128eb1fbaf117115e94d07000079ddb3b099b55d5da3e8fe44639b11b30c38->enter($__internal_0b128eb1fbaf117115e94d07000079ddb3b099b55d5da3e8fe44639b11b30c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b128eb1fbaf117115e94d07000079ddb3b099b55d5da3e8fe44639b11b30c38->leave($__internal_0b128eb1fbaf117115e94d07000079ddb3b099b55d5da3e8fe44639b11b30c38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d7dee0dbefbb1330975715c759fa5e4ed24fedd8ea7d8c61278392009003672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7dee0dbefbb1330975715c759fa5e4ed24fedd8ea7d8c61278392009003672->enter($__internal_1d7dee0dbefbb1330975715c759fa5e4ed24fedd8ea7d8c61278392009003672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1d7dee0dbefbb1330975715c759fa5e4ed24fedd8ea7d8c61278392009003672->leave($__internal_1d7dee0dbefbb1330975715c759fa5e4ed24fedd8ea7d8c61278392009003672_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c37013bfeb34380546ce61aa7a2aa3915efc9e6075d62b3e917dc54fa0d4c57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37013bfeb34380546ce61aa7a2aa3915efc9e6075d62b3e917dc54fa0d4c57a->enter($__internal_c37013bfeb34380546ce61aa7a2aa3915efc9e6075d62b3e917dc54fa0d4c57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c37013bfeb34380546ce61aa7a2aa3915efc9e6075d62b3e917dc54fa0d4c57a->leave($__internal_c37013bfeb34380546ce61aa7a2aa3915efc9e6075d62b3e917dc54fa0d4c57a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e739937fc04d44ac342c0eef2f4d9ae51a7174373891a27eded40e3d92b18d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e739937fc04d44ac342c0eef2f4d9ae51a7174373891a27eded40e3d92b18d8e->enter($__internal_e739937fc04d44ac342c0eef2f4d9ae51a7174373891a27eded40e3d92b18d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e739937fc04d44ac342c0eef2f4d9ae51a7174373891a27eded40e3d92b18d8e->leave($__internal_e739937fc04d44ac342c0eef2f4d9ae51a7174373891a27eded40e3d92b18d8e_prof);

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
