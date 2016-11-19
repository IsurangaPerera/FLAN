<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0f72065786a6e861fda0601293e6ccc90746e78388e5729ed73ebb44af85a92e extends Twig_Template
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
        $__internal_80a497847f6a51a00033d11eaec0b35efbc6f3732cb49be6b4ecf577bf9313ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a497847f6a51a00033d11eaec0b35efbc6f3732cb49be6b4ecf577bf9313ff->enter($__internal_80a497847f6a51a00033d11eaec0b35efbc6f3732cb49be6b4ecf577bf9313ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a497847f6a51a00033d11eaec0b35efbc6f3732cb49be6b4ecf577bf9313ff->leave($__internal_80a497847f6a51a00033d11eaec0b35efbc6f3732cb49be6b4ecf577bf9313ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97b64656b13f6b9cc300eca7abf9707c407a3112c09181b11134284a473e79bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b64656b13f6b9cc300eca7abf9707c407a3112c09181b11134284a473e79bd->enter($__internal_97b64656b13f6b9cc300eca7abf9707c407a3112c09181b11134284a473e79bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_97b64656b13f6b9cc300eca7abf9707c407a3112c09181b11134284a473e79bd->leave($__internal_97b64656b13f6b9cc300eca7abf9707c407a3112c09181b11134284a473e79bd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2b60cf2828e5b43111b166865676a3e5e733c20e873ca58223bfd89c47f30c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b60cf2828e5b43111b166865676a3e5e733c20e873ca58223bfd89c47f30c2->enter($__internal_e2b60cf2828e5b43111b166865676a3e5e733c20e873ca58223bfd89c47f30c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e2b60cf2828e5b43111b166865676a3e5e733c20e873ca58223bfd89c47f30c2->leave($__internal_e2b60cf2828e5b43111b166865676a3e5e733c20e873ca58223bfd89c47f30c2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63552cd82e4ededa3b0c21e18d2f4c247ceda41ca26684c922987880fe2036ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63552cd82e4ededa3b0c21e18d2f4c247ceda41ca26684c922987880fe2036ef->enter($__internal_63552cd82e4ededa3b0c21e18d2f4c247ceda41ca26684c922987880fe2036ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_63552cd82e4ededa3b0c21e18d2f4c247ceda41ca26684c922987880fe2036ef->leave($__internal_63552cd82e4ededa3b0c21e18d2f4c247ceda41ca26684c922987880fe2036ef_prof);

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
