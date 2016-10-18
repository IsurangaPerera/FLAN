<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e3713b2ab4b441593cbbc4b819dc3a04fda2ada7c31fb9d478d928b7f058adb0 extends Twig_Template
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
        $__internal_3e5c8e62307d12b4ca2412926ce4a50007d5e62db70e15a21748df083c07f70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5c8e62307d12b4ca2412926ce4a50007d5e62db70e15a21748df083c07f70c->enter($__internal_3e5c8e62307d12b4ca2412926ce4a50007d5e62db70e15a21748df083c07f70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5c8e62307d12b4ca2412926ce4a50007d5e62db70e15a21748df083c07f70c->leave($__internal_3e5c8e62307d12b4ca2412926ce4a50007d5e62db70e15a21748df083c07f70c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a3a3b5c208b880fbc83bf6050cc6f817fb1eb8962e756061d7491b1dcf18280e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a3b5c208b880fbc83bf6050cc6f817fb1eb8962e756061d7491b1dcf18280e->enter($__internal_a3a3b5c208b880fbc83bf6050cc6f817fb1eb8962e756061d7491b1dcf18280e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a3a3b5c208b880fbc83bf6050cc6f817fb1eb8962e756061d7491b1dcf18280e->leave($__internal_a3a3b5c208b880fbc83bf6050cc6f817fb1eb8962e756061d7491b1dcf18280e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de46a6cd48a5e124c38a202affd26b80d97af31750bcc3d293188e4585216e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de46a6cd48a5e124c38a202affd26b80d97af31750bcc3d293188e4585216e4d->enter($__internal_de46a6cd48a5e124c38a202affd26b80d97af31750bcc3d293188e4585216e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_de46a6cd48a5e124c38a202affd26b80d97af31750bcc3d293188e4585216e4d->leave($__internal_de46a6cd48a5e124c38a202affd26b80d97af31750bcc3d293188e4585216e4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bc7d0bb1b137cbe3e49f7972734fa9a5b81e9681cd0d2e522556d97b7634f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc7d0bb1b137cbe3e49f7972734fa9a5b81e9681cd0d2e522556d97b7634f0d->enter($__internal_3bc7d0bb1b137cbe3e49f7972734fa9a5b81e9681cd0d2e522556d97b7634f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3bc7d0bb1b137cbe3e49f7972734fa9a5b81e9681cd0d2e522556d97b7634f0d->leave($__internal_3bc7d0bb1b137cbe3e49f7972734fa9a5b81e9681cd0d2e522556d97b7634f0d_prof);

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
