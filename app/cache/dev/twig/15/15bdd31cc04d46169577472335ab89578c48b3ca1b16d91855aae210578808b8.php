<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3f68207fa004ae100ccd9ea4ec6f6cdadd00d692bc6539d6a9cc81deb130892d extends Twig_Template
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
        $__internal_4eb4269428dfe3b6d9ac8aff5725b85cf33d76b2f1a7d79397266470ca1c0ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb4269428dfe3b6d9ac8aff5725b85cf33d76b2f1a7d79397266470ca1c0ab1->enter($__internal_4eb4269428dfe3b6d9ac8aff5725b85cf33d76b2f1a7d79397266470ca1c0ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eb4269428dfe3b6d9ac8aff5725b85cf33d76b2f1a7d79397266470ca1c0ab1->leave($__internal_4eb4269428dfe3b6d9ac8aff5725b85cf33d76b2f1a7d79397266470ca1c0ab1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6bb30094544c839d8441f76e8224a43b580bd286ead673270eecc0c967af922a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb30094544c839d8441f76e8224a43b580bd286ead673270eecc0c967af922a->enter($__internal_6bb30094544c839d8441f76e8224a43b580bd286ead673270eecc0c967af922a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6bb30094544c839d8441f76e8224a43b580bd286ead673270eecc0c967af922a->leave($__internal_6bb30094544c839d8441f76e8224a43b580bd286ead673270eecc0c967af922a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96cf0994fd0aff77f7557dcec18cb82456f01bf04d6c5a86ceec9289b74c1924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cf0994fd0aff77f7557dcec18cb82456f01bf04d6c5a86ceec9289b74c1924->enter($__internal_96cf0994fd0aff77f7557dcec18cb82456f01bf04d6c5a86ceec9289b74c1924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_96cf0994fd0aff77f7557dcec18cb82456f01bf04d6c5a86ceec9289b74c1924->leave($__internal_96cf0994fd0aff77f7557dcec18cb82456f01bf04d6c5a86ceec9289b74c1924_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_926b26ea7f87270592aee428589bb0164a57bee9104d478d30b1a69b6b771bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926b26ea7f87270592aee428589bb0164a57bee9104d478d30b1a69b6b771bfb->enter($__internal_926b26ea7f87270592aee428589bb0164a57bee9104d478d30b1a69b6b771bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_926b26ea7f87270592aee428589bb0164a57bee9104d478d30b1a69b6b771bfb->leave($__internal_926b26ea7f87270592aee428589bb0164a57bee9104d478d30b1a69b6b771bfb_prof);

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
