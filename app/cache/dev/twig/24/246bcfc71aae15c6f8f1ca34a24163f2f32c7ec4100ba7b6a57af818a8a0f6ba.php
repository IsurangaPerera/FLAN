<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5a2d377c1e7f7f95b59ddd9c381cc33806bb14c4ab2911774683497910edbd5a extends Twig_Template
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
        $__internal_690864e1adcf46685628f24e1978b1b83b4bf9cb9f1ca503609d6e19e29b6f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690864e1adcf46685628f24e1978b1b83b4bf9cb9f1ca503609d6e19e29b6f06->enter($__internal_690864e1adcf46685628f24e1978b1b83b4bf9cb9f1ca503609d6e19e29b6f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_690864e1adcf46685628f24e1978b1b83b4bf9cb9f1ca503609d6e19e29b6f06->leave($__internal_690864e1adcf46685628f24e1978b1b83b4bf9cb9f1ca503609d6e19e29b6f06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_294607e73ce9e6e969c95d4ab61fd709177c971662a1599955b061b55b4ce99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294607e73ce9e6e969c95d4ab61fd709177c971662a1599955b061b55b4ce99d->enter($__internal_294607e73ce9e6e969c95d4ab61fd709177c971662a1599955b061b55b4ce99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_294607e73ce9e6e969c95d4ab61fd709177c971662a1599955b061b55b4ce99d->leave($__internal_294607e73ce9e6e969c95d4ab61fd709177c971662a1599955b061b55b4ce99d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68abb5be07b5c19c1daa3c3d120eb1297f6630b883bccd5bba3ac73b98109cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68abb5be07b5c19c1daa3c3d120eb1297f6630b883bccd5bba3ac73b98109cca->enter($__internal_68abb5be07b5c19c1daa3c3d120eb1297f6630b883bccd5bba3ac73b98109cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_68abb5be07b5c19c1daa3c3d120eb1297f6630b883bccd5bba3ac73b98109cca->leave($__internal_68abb5be07b5c19c1daa3c3d120eb1297f6630b883bccd5bba3ac73b98109cca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6614bda37254faf15acddd42ec8c8c24e974e6b9edb26404b886f8806caa9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6614bda37254faf15acddd42ec8c8c24e974e6b9edb26404b886f8806caa9fc->enter($__internal_d6614bda37254faf15acddd42ec8c8c24e974e6b9edb26404b886f8806caa9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d6614bda37254faf15acddd42ec8c8c24e974e6b9edb26404b886f8806caa9fc->leave($__internal_d6614bda37254faf15acddd42ec8c8c24e974e6b9edb26404b886f8806caa9fc_prof);

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
