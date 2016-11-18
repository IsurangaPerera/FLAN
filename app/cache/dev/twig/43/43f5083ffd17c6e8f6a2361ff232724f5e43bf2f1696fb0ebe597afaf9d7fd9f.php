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
        $__internal_6381d01a17150ca9c0df0b141ad2c30910a97552d74ddb7fcc3476d09a152e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6381d01a17150ca9c0df0b141ad2c30910a97552d74ddb7fcc3476d09a152e9d->enter($__internal_6381d01a17150ca9c0df0b141ad2c30910a97552d74ddb7fcc3476d09a152e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6381d01a17150ca9c0df0b141ad2c30910a97552d74ddb7fcc3476d09a152e9d->leave($__internal_6381d01a17150ca9c0df0b141ad2c30910a97552d74ddb7fcc3476d09a152e9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b5c6840fd8c5a454b5ab8281c37574ff0246ccb18f1153a6734b480c316313a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5c6840fd8c5a454b5ab8281c37574ff0246ccb18f1153a6734b480c316313a->enter($__internal_9b5c6840fd8c5a454b5ab8281c37574ff0246ccb18f1153a6734b480c316313a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9b5c6840fd8c5a454b5ab8281c37574ff0246ccb18f1153a6734b480c316313a->leave($__internal_9b5c6840fd8c5a454b5ab8281c37574ff0246ccb18f1153a6734b480c316313a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e7e1b53fc742b1c8e974ccf368d0faa1d1b1f3b9f25865853a32a3794ee12d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7e1b53fc742b1c8e974ccf368d0faa1d1b1f3b9f25865853a32a3794ee12d3->enter($__internal_9e7e1b53fc742b1c8e974ccf368d0faa1d1b1f3b9f25865853a32a3794ee12d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9e7e1b53fc742b1c8e974ccf368d0faa1d1b1f3b9f25865853a32a3794ee12d3->leave($__internal_9e7e1b53fc742b1c8e974ccf368d0faa1d1b1f3b9f25865853a32a3794ee12d3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e731c042d2914b314ce562ba627f04a078e0d83648e469d08d7181a9a49a3111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e731c042d2914b314ce562ba627f04a078e0d83648e469d08d7181a9a49a3111->enter($__internal_e731c042d2914b314ce562ba627f04a078e0d83648e469d08d7181a9a49a3111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e731c042d2914b314ce562ba627f04a078e0d83648e469d08d7181a9a49a3111->leave($__internal_e731c042d2914b314ce562ba627f04a078e0d83648e469d08d7181a9a49a3111_prof);

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
