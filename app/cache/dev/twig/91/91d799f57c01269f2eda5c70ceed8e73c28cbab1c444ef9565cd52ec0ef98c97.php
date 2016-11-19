<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f6e2f1b93f6a657327b0c918f074d9de2b9a3cfdca221460758bff7d446eeecf extends Twig_Template
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
        $__internal_09a92a8eeb278f11927b30c1d38223cb6cb4a9ff7d01d0af6129f02ca5b6dfbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a92a8eeb278f11927b30c1d38223cb6cb4a9ff7d01d0af6129f02ca5b6dfbd->enter($__internal_09a92a8eeb278f11927b30c1d38223cb6cb4a9ff7d01d0af6129f02ca5b6dfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a92a8eeb278f11927b30c1d38223cb6cb4a9ff7d01d0af6129f02ca5b6dfbd->leave($__internal_09a92a8eeb278f11927b30c1d38223cb6cb4a9ff7d01d0af6129f02ca5b6dfbd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ccb0d498c0c0d551d458806de1d3a6901f768c209c880ca9c4990b50d47afbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccb0d498c0c0d551d458806de1d3a6901f768c209c880ca9c4990b50d47afbb->enter($__internal_1ccb0d498c0c0d551d458806de1d3a6901f768c209c880ca9c4990b50d47afbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ccb0d498c0c0d551d458806de1d3a6901f768c209c880ca9c4990b50d47afbb->leave($__internal_1ccb0d498c0c0d551d458806de1d3a6901f768c209c880ca9c4990b50d47afbb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6deaf0f894f4362d489f5aec60e98df89604add25ed09af94082e89dcae34b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6deaf0f894f4362d489f5aec60e98df89604add25ed09af94082e89dcae34b13->enter($__internal_6deaf0f894f4362d489f5aec60e98df89604add25ed09af94082e89dcae34b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6deaf0f894f4362d489f5aec60e98df89604add25ed09af94082e89dcae34b13->leave($__internal_6deaf0f894f4362d489f5aec60e98df89604add25ed09af94082e89dcae34b13_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aeea0d173af531ba731f8c9277d79cb6de222c7d8fcb0554aaade5429d387415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeea0d173af531ba731f8c9277d79cb6de222c7d8fcb0554aaade5429d387415->enter($__internal_aeea0d173af531ba731f8c9277d79cb6de222c7d8fcb0554aaade5429d387415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aeea0d173af531ba731f8c9277d79cb6de222c7d8fcb0554aaade5429d387415->leave($__internal_aeea0d173af531ba731f8c9277d79cb6de222c7d8fcb0554aaade5429d387415_prof);

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
