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
        $__internal_27249cca7b36348b225278ebbbd3c288cae743fb4c1502a8eea17b986088eb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27249cca7b36348b225278ebbbd3c288cae743fb4c1502a8eea17b986088eb3e->enter($__internal_27249cca7b36348b225278ebbbd3c288cae743fb4c1502a8eea17b986088eb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27249cca7b36348b225278ebbbd3c288cae743fb4c1502a8eea17b986088eb3e->leave($__internal_27249cca7b36348b225278ebbbd3c288cae743fb4c1502a8eea17b986088eb3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cfca353b8eab8259c09d40a1ae787f3eacfefcffcf59b7aa008ecd249aa2ba75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfca353b8eab8259c09d40a1ae787f3eacfefcffcf59b7aa008ecd249aa2ba75->enter($__internal_cfca353b8eab8259c09d40a1ae787f3eacfefcffcf59b7aa008ecd249aa2ba75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cfca353b8eab8259c09d40a1ae787f3eacfefcffcf59b7aa008ecd249aa2ba75->leave($__internal_cfca353b8eab8259c09d40a1ae787f3eacfefcffcf59b7aa008ecd249aa2ba75_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e839881b930c45f90ad534ab1995c145899cec83b36bae498b32e2ccef6fe3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e839881b930c45f90ad534ab1995c145899cec83b36bae498b32e2ccef6fe3b6->enter($__internal_e839881b930c45f90ad534ab1995c145899cec83b36bae498b32e2ccef6fe3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e839881b930c45f90ad534ab1995c145899cec83b36bae498b32e2ccef6fe3b6->leave($__internal_e839881b930c45f90ad534ab1995c145899cec83b36bae498b32e2ccef6fe3b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44656082186f400339013ba3dc01d8bf87193158fc23bc77f10d86efc7a8f110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44656082186f400339013ba3dc01d8bf87193158fc23bc77f10d86efc7a8f110->enter($__internal_44656082186f400339013ba3dc01d8bf87193158fc23bc77f10d86efc7a8f110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_44656082186f400339013ba3dc01d8bf87193158fc23bc77f10d86efc7a8f110->leave($__internal_44656082186f400339013ba3dc01d8bf87193158fc23bc77f10d86efc7a8f110_prof);

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
