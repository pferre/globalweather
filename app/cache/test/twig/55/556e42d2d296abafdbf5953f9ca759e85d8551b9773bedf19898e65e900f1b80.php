<?php

/* base.html.twig */
class __TwigTemplate_4d06f8d0d68d5a27e762893c0a4c699a0480848a83cd4b3bc46a0d48a3e8a573 extends Twig_Template
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
        $__internal_78cc58f5b0b0c7f5acea8e0288395e28d59e5896df0638c64b17a7f480a66e37 = $this->env->getExtension("native_profiler");
        $__internal_78cc58f5b0b0c7f5acea8e0288395e28d59e5896df0638c64b17a7f480a66e37->enter($__internal_78cc58f5b0b0c7f5acea8e0288395e28d59e5896df0638c64b17a7f480a66e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_78cc58f5b0b0c7f5acea8e0288395e28d59e5896df0638c64b17a7f480a66e37->leave($__internal_78cc58f5b0b0c7f5acea8e0288395e28d59e5896df0638c64b17a7f480a66e37_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f44881993cdc9390fbef9a39f7c63b50ef958e33bc6a6d39a0d3dcc0079f963 = $this->env->getExtension("native_profiler");
        $__internal_4f44881993cdc9390fbef9a39f7c63b50ef958e33bc6a6d39a0d3dcc0079f963->enter($__internal_4f44881993cdc9390fbef9a39f7c63b50ef958e33bc6a6d39a0d3dcc0079f963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4f44881993cdc9390fbef9a39f7c63b50ef958e33bc6a6d39a0d3dcc0079f963->leave($__internal_4f44881993cdc9390fbef9a39f7c63b50ef958e33bc6a6d39a0d3dcc0079f963_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c56e842db2daaff8b54fc7a84b7f03c753b0ab8b66942673294c8fe4cc4ee207 = $this->env->getExtension("native_profiler");
        $__internal_c56e842db2daaff8b54fc7a84b7f03c753b0ab8b66942673294c8fe4cc4ee207->enter($__internal_c56e842db2daaff8b54fc7a84b7f03c753b0ab8b66942673294c8fe4cc4ee207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c56e842db2daaff8b54fc7a84b7f03c753b0ab8b66942673294c8fe4cc4ee207->leave($__internal_c56e842db2daaff8b54fc7a84b7f03c753b0ab8b66942673294c8fe4cc4ee207_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c060d198276dc8f95d226d893ec9ea9498a23315d427efd6d918651bd1c1069 = $this->env->getExtension("native_profiler");
        $__internal_0c060d198276dc8f95d226d893ec9ea9498a23315d427efd6d918651bd1c1069->enter($__internal_0c060d198276dc8f95d226d893ec9ea9498a23315d427efd6d918651bd1c1069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0c060d198276dc8f95d226d893ec9ea9498a23315d427efd6d918651bd1c1069->leave($__internal_0c060d198276dc8f95d226d893ec9ea9498a23315d427efd6d918651bd1c1069_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbec7719084697e5dcbe6c56a74dd9b336dfc136601fa1b0bc11cd40e03f0321 = $this->env->getExtension("native_profiler");
        $__internal_bbec7719084697e5dcbe6c56a74dd9b336dfc136601fa1b0bc11cd40e03f0321->enter($__internal_bbec7719084697e5dcbe6c56a74dd9b336dfc136601fa1b0bc11cd40e03f0321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bbec7719084697e5dcbe6c56a74dd9b336dfc136601fa1b0bc11cd40e03f0321->leave($__internal_bbec7719084697e5dcbe6c56a74dd9b336dfc136601fa1b0bc11cd40e03f0321_prof);

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
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
