<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_26b53f1eb1ea7645d3b105d1894177202059c64da3efcd83ec27577e10fa314d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3c8a3618d5d8a6a308d205408b8d073d28d0128bb8a48b64fff4b2b301fd1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c8a3618d5d8a6a308d205408b8d073d28d0128bb8a48b64fff4b2b301fd1f4->enter($__internal_b3c8a3618d5d8a6a308d205408b8d073d28d0128bb8a48b64fff4b2b301fd1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b3c8a3618d5d8a6a308d205408b8d073d28d0128bb8a48b64fff4b2b301fd1f4->leave($__internal_b3c8a3618d5d8a6a308d205408b8d073d28d0128bb8a48b64fff4b2b301fd1f4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
