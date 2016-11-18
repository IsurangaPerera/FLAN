<?php

/* proposal/new.html.twig */
class __TwigTemplate_34fe5bfb279844115bdbc7ff59a18290edf871688da5201c0d851236d030183f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "proposal/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28109a65676d043475eb812bfeb26d6a1cd32250408e199c2cc376c15571190c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28109a65676d043475eb812bfeb26d6a1cd32250408e199c2cc376c15571190c->enter($__internal_28109a65676d043475eb812bfeb26d6a1cd32250408e199c2cc376c15571190c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proposal/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28109a65676d043475eb812bfeb26d6a1cd32250408e199c2cc376c15571190c->leave($__internal_28109a65676d043475eb812bfeb26d6a1cd32250408e199c2cc376c15571190c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78bd2f531f90e5c737c7f2e4e054181b677ec9e4af599dc0de1144c27f143122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bd2f531f90e5c737c7f2e4e054181b677ec9e4af599dc0de1144c27f143122->enter($__internal_78bd2f531f90e5c737c7f2e4e054181b677ec9e4af599dc0de1144c27f143122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proposal creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proposal_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_78bd2f531f90e5c737c7f2e4e054181b677ec9e4af599dc0de1144c27f143122->leave($__internal_78bd2f531f90e5c737c7f2e4e054181b677ec9e4af599dc0de1144c27f143122_prof);

    }

    public function getTemplateName()
    {
        return "proposal/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Proposal creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('proposal_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
