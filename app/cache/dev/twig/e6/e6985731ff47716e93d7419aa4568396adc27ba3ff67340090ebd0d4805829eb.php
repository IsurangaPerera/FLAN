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
        $__internal_7d0d4f510a4f9d9d7f687962832c5bb98d5776f572959b8c426c20325cbdfe73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0d4f510a4f9d9d7f687962832c5bb98d5776f572959b8c426c20325cbdfe73->enter($__internal_7d0d4f510a4f9d9d7f687962832c5bb98d5776f572959b8c426c20325cbdfe73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d0d4f510a4f9d9d7f687962832c5bb98d5776f572959b8c426c20325cbdfe73->leave($__internal_7d0d4f510a4f9d9d7f687962832c5bb98d5776f572959b8c426c20325cbdfe73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_43f766cf58dddbc9a750c9dda49729c22a6f1761c2a0de69ad53c1e1a4f82778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f766cf58dddbc9a750c9dda49729c22a6f1761c2a0de69ad53c1e1a4f82778->enter($__internal_43f766cf58dddbc9a750c9dda49729c22a6f1761c2a0de69ad53c1e1a4f82778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_43f766cf58dddbc9a750c9dda49729c22a6f1761c2a0de69ad53c1e1a4f82778->leave($__internal_43f766cf58dddbc9a750c9dda49729c22a6f1761c2a0de69ad53c1e1a4f82778_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a03de840fcbff90088e3c3d676773ad18f7fbee7f07eba85ee8bc48497670fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a03de840fcbff90088e3c3d676773ad18f7fbee7f07eba85ee8bc48497670fc->enter($__internal_1a03de840fcbff90088e3c3d676773ad18f7fbee7f07eba85ee8bc48497670fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a03de840fcbff90088e3c3d676773ad18f7fbee7f07eba85ee8bc48497670fc->leave($__internal_1a03de840fcbff90088e3c3d676773ad18f7fbee7f07eba85ee8bc48497670fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7657b2cc6a5885c4abe4bcf2ced0d4d5e55cc7c8d3921b74c2a0a8ec9089e298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7657b2cc6a5885c4abe4bcf2ced0d4d5e55cc7c8d3921b74c2a0a8ec9089e298->enter($__internal_7657b2cc6a5885c4abe4bcf2ced0d4d5e55cc7c8d3921b74c2a0a8ec9089e298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7657b2cc6a5885c4abe4bcf2ced0d4d5e55cc7c8d3921b74c2a0a8ec9089e298->leave($__internal_7657b2cc6a5885c4abe4bcf2ced0d4d5e55cc7c8d3921b74c2a0a8ec9089e298_prof);

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
