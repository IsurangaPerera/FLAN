<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_88a77df956d68c328fba6d08874101c1978b3d8aa1ddfd33c63ada37068ad029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a30247438893cfdf92eb6d7f805ab82492a2161e70935f106b3485de6917618d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30247438893cfdf92eb6d7f805ab82492a2161e70935f106b3485de6917618d->enter($__internal_a30247438893cfdf92eb6d7f805ab82492a2161e70935f106b3485de6917618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30247438893cfdf92eb6d7f805ab82492a2161e70935f106b3485de6917618d->leave($__internal_a30247438893cfdf92eb6d7f805ab82492a2161e70935f106b3485de6917618d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d8d9d1588589e6339af70867766d7a2ca9ca530bdd60c5e9e7744bb4196cdcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8d9d1588589e6339af70867766d7a2ca9ca530bdd60c5e9e7744bb4196cdcb->enter($__internal_8d8d9d1588589e6339af70867766d7a2ca9ca530bdd60c5e9e7744bb4196cdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8d8d9d1588589e6339af70867766d7a2ca9ca530bdd60c5e9e7744bb4196cdcb->leave($__internal_8d8d9d1588589e6339af70867766d7a2ca9ca530bdd60c5e9e7744bb4196cdcb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24be86a36f8b050609a8f4c633df64e4651df08577afe86a11a7b94d1d4e13ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24be86a36f8b050609a8f4c633df64e4651df08577afe86a11a7b94d1d4e13ab->enter($__internal_24be86a36f8b050609a8f4c633df64e4651df08577afe86a11a7b94d1d4e13ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_24be86a36f8b050609a8f4c633df64e4651df08577afe86a11a7b94d1d4e13ab->leave($__internal_24be86a36f8b050609a8f4c633df64e4651df08577afe86a11a7b94d1d4e13ab_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee8233ffe34b9a2376e6d26e17cefd8ce267a42ae1c48410f3e62dd7fa27098d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8233ffe34b9a2376e6d26e17cefd8ce267a42ae1c48410f3e62dd7fa27098d->enter($__internal_ee8233ffe34b9a2376e6d26e17cefd8ce267a42ae1c48410f3e62dd7fa27098d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ee8233ffe34b9a2376e6d26e17cefd8ce267a42ae1c48410f3e62dd7fa27098d->leave($__internal_ee8233ffe34b9a2376e6d26e17cefd8ce267a42ae1c48410f3e62dd7fa27098d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
