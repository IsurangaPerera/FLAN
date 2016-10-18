<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_38d85d43df22579104b273ef3a3d43679c9193106cbc089d296955df05204bd9 extends Twig_Template
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
        $__internal_f94c70f508add949b1a500d09ad86f833ffd09a26f911b84cc88c429f838210a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94c70f508add949b1a500d09ad86f833ffd09a26f911b84cc88c429f838210a->enter($__internal_f94c70f508add949b1a500d09ad86f833ffd09a26f911b84cc88c429f838210a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f94c70f508add949b1a500d09ad86f833ffd09a26f911b84cc88c429f838210a->leave($__internal_f94c70f508add949b1a500d09ad86f833ffd09a26f911b84cc88c429f838210a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8738ed7dc1ec2045c42085a5621d914742f5f30e074f8ea169fdb324cd7cc19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8738ed7dc1ec2045c42085a5621d914742f5f30e074f8ea169fdb324cd7cc19a->enter($__internal_8738ed7dc1ec2045c42085a5621d914742f5f30e074f8ea169fdb324cd7cc19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8738ed7dc1ec2045c42085a5621d914742f5f30e074f8ea169fdb324cd7cc19a->leave($__internal_8738ed7dc1ec2045c42085a5621d914742f5f30e074f8ea169fdb324cd7cc19a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_479fd4796c30f064aa2266ab53700cd6ed228c7b437f4558dae8379eb9fcd19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479fd4796c30f064aa2266ab53700cd6ed228c7b437f4558dae8379eb9fcd19a->enter($__internal_479fd4796c30f064aa2266ab53700cd6ed228c7b437f4558dae8379eb9fcd19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_479fd4796c30f064aa2266ab53700cd6ed228c7b437f4558dae8379eb9fcd19a->leave($__internal_479fd4796c30f064aa2266ab53700cd6ed228c7b437f4558dae8379eb9fcd19a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f72df477c12a22e9d10e89a4829e73f917c8ae77052016131c3f00cd891293af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72df477c12a22e9d10e89a4829e73f917c8ae77052016131c3f00cd891293af->enter($__internal_f72df477c12a22e9d10e89a4829e73f917c8ae77052016131c3f00cd891293af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f72df477c12a22e9d10e89a4829e73f917c8ae77052016131c3f00cd891293af->leave($__internal_f72df477c12a22e9d10e89a4829e73f917c8ae77052016131c3f00cd891293af_prof);

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
