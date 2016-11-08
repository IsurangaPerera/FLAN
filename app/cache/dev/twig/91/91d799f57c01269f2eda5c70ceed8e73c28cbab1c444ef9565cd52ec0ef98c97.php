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
        $__internal_5b138320f1111ce8443d699ff8bfbd7c3014e449dfe9f300d28e47e833bf4169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b138320f1111ce8443d699ff8bfbd7c3014e449dfe9f300d28e47e833bf4169->enter($__internal_5b138320f1111ce8443d699ff8bfbd7c3014e449dfe9f300d28e47e833bf4169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b138320f1111ce8443d699ff8bfbd7c3014e449dfe9f300d28e47e833bf4169->leave($__internal_5b138320f1111ce8443d699ff8bfbd7c3014e449dfe9f300d28e47e833bf4169_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6fa3438b26ae7647474c7e4599719a79769593ffdc54923c43784cec9b89df7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa3438b26ae7647474c7e4599719a79769593ffdc54923c43784cec9b89df7d->enter($__internal_6fa3438b26ae7647474c7e4599719a79769593ffdc54923c43784cec9b89df7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6fa3438b26ae7647474c7e4599719a79769593ffdc54923c43784cec9b89df7d->leave($__internal_6fa3438b26ae7647474c7e4599719a79769593ffdc54923c43784cec9b89df7d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63d5571fdd214209fc986a0b675e183512fcfcf57ffac31d7295d0d2360cb694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d5571fdd214209fc986a0b675e183512fcfcf57ffac31d7295d0d2360cb694->enter($__internal_63d5571fdd214209fc986a0b675e183512fcfcf57ffac31d7295d0d2360cb694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_63d5571fdd214209fc986a0b675e183512fcfcf57ffac31d7295d0d2360cb694->leave($__internal_63d5571fdd214209fc986a0b675e183512fcfcf57ffac31d7295d0d2360cb694_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97d5634017081664a9bf07f52ead5fdf0c9b7f7d8dedb8b76f2b1106fcdb345e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d5634017081664a9bf07f52ead5fdf0c9b7f7d8dedb8b76f2b1106fcdb345e->enter($__internal_97d5634017081664a9bf07f52ead5fdf0c9b7f7d8dedb8b76f2b1106fcdb345e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_97d5634017081664a9bf07f52ead5fdf0c9b7f7d8dedb8b76f2b1106fcdb345e->leave($__internal_97d5634017081664a9bf07f52ead5fdf0c9b7f7d8dedb8b76f2b1106fcdb345e_prof);

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
