<?php

/* base.html.twig */
class __TwigTemplate_2539baeca906dde77206980eadbe384e5737c167cd59428344a4a8d774fd296f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4fe9d455ec3aa8c83ceb481398ec4dcc699e047509fdf032b909d6a02c132e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fe9d455ec3aa8c83ceb481398ec4dcc699e047509fdf032b909d6a02c132e1->enter($__internal_c4fe9d455ec3aa8c83ceb481398ec4dcc699e047509fdf032b909d6a02c132e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c4fe9d455ec3aa8c83ceb481398ec4dcc699e047509fdf032b909d6a02c132e1->leave($__internal_c4fe9d455ec3aa8c83ceb481398ec4dcc699e047509fdf032b909d6a02c132e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af652d37520e8e5b185c71a12950c9eb0da2c3a1fb5385c229f20e293f3a2fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af652d37520e8e5b185c71a12950c9eb0da2c3a1fb5385c229f20e293f3a2fe9->enter($__internal_af652d37520e8e5b185c71a12950c9eb0da2c3a1fb5385c229f20e293f3a2fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_af652d37520e8e5b185c71a12950c9eb0da2c3a1fb5385c229f20e293f3a2fe9->leave($__internal_af652d37520e8e5b185c71a12950c9eb0da2c3a1fb5385c229f20e293f3a2fe9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fccf89851b0b0458843c51be3ba0c97c5d459d3672afdf167c7a56ee2ca9ca22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccf89851b0b0458843c51be3ba0c97c5d459d3672afdf167c7a56ee2ca9ca22->enter($__internal_fccf89851b0b0458843c51be3ba0c97c5d459d3672afdf167c7a56ee2ca9ca22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fccf89851b0b0458843c51be3ba0c97c5d459d3672afdf167c7a56ee2ca9ca22->leave($__internal_fccf89851b0b0458843c51be3ba0c97c5d459d3672afdf167c7a56ee2ca9ca22_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4070e8687c6e50bef31968babc5d54101967dec02d09534dd212307e1b8ead3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4070e8687c6e50bef31968babc5d54101967dec02d09534dd212307e1b8ead3e->enter($__internal_4070e8687c6e50bef31968babc5d54101967dec02d09534dd212307e1b8ead3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4070e8687c6e50bef31968babc5d54101967dec02d09534dd212307e1b8ead3e->leave($__internal_4070e8687c6e50bef31968babc5d54101967dec02d09534dd212307e1b8ead3e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5794ee8357c78a9d72859716e391db299eb080ce044e6f58fce4d8491b06a717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5794ee8357c78a9d72859716e391db299eb080ce044e6f58fce4d8491b06a717->enter($__internal_5794ee8357c78a9d72859716e391db299eb080ce044e6f58fce4d8491b06a717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5794ee8357c78a9d72859716e391db299eb080ce044e6f58fce4d8491b06a717->leave($__internal_5794ee8357c78a9d72859716e391db299eb080ce044e6f58fce4d8491b06a717_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
