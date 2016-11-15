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
        $__internal_7a9c7259a8adebe9ee30794998bb8311740191de197103e024c270ce2c4acf2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9c7259a8adebe9ee30794998bb8311740191de197103e024c270ce2c4acf2e->enter($__internal_7a9c7259a8adebe9ee30794998bb8311740191de197103e024c270ce2c4acf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a9c7259a8adebe9ee30794998bb8311740191de197103e024c270ce2c4acf2e->leave($__internal_7a9c7259a8adebe9ee30794998bb8311740191de197103e024c270ce2c4acf2e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba589fbbd9be74087ff05abc264851d8ec29abdbc94abfe93ac8a6d894dfe4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba589fbbd9be74087ff05abc264851d8ec29abdbc94abfe93ac8a6d894dfe4e5->enter($__internal_ba589fbbd9be74087ff05abc264851d8ec29abdbc94abfe93ac8a6d894dfe4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba589fbbd9be74087ff05abc264851d8ec29abdbc94abfe93ac8a6d894dfe4e5->leave($__internal_ba589fbbd9be74087ff05abc264851d8ec29abdbc94abfe93ac8a6d894dfe4e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d86b98fa2ea32eada9dcf341b476de24f5edec2ff732a21484aa6816f1dea9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86b98fa2ea32eada9dcf341b476de24f5edec2ff732a21484aa6816f1dea9a9->enter($__internal_d86b98fa2ea32eada9dcf341b476de24f5edec2ff732a21484aa6816f1dea9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d86b98fa2ea32eada9dcf341b476de24f5edec2ff732a21484aa6816f1dea9a9->leave($__internal_d86b98fa2ea32eada9dcf341b476de24f5edec2ff732a21484aa6816f1dea9a9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3280d2c93bc335adbfca65dc8b3e370451989b49f9351fe069ff559b9f1b827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3280d2c93bc335adbfca65dc8b3e370451989b49f9351fe069ff559b9f1b827->enter($__internal_d3280d2c93bc335adbfca65dc8b3e370451989b49f9351fe069ff559b9f1b827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d3280d2c93bc335adbfca65dc8b3e370451989b49f9351fe069ff559b9f1b827->leave($__internal_d3280d2c93bc335adbfca65dc8b3e370451989b49f9351fe069ff559b9f1b827_prof);

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
