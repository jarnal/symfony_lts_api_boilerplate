<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_f315e2ba3d3c2649944ec7107a456cf2847469e5679428b25063ff9b7066f835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12c7d1f74e67a2577f7c0cf0597ad602a3c9e365cab9696f0883ae62eae330c6 = $this->env->getExtension("native_profiler");
        $__internal_12c7d1f74e67a2577f7c0cf0597ad602a3c9e365cab9696f0883ae62eae330c6->enter($__internal_12c7d1f74e67a2577f7c0cf0597ad602a3c9e365cab9696f0883ae62eae330c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12c7d1f74e67a2577f7c0cf0597ad602a3c9e365cab9696f0883ae62eae330c6->leave($__internal_12c7d1f74e67a2577f7c0cf0597ad602a3c9e365cab9696f0883ae62eae330c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a23ccb345bbfe906095cea50dfc5ad922db6a6bf3116d33f621a8fdc68f925f = $this->env->getExtension("native_profiler");
        $__internal_8a23ccb345bbfe906095cea50dfc5ad922db6a6bf3116d33f621a8fdc68f925f->enter($__internal_8a23ccb345bbfe906095cea50dfc5ad922db6a6bf3116d33f621a8fdc68f925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_8a23ccb345bbfe906095cea50dfc5ad922db6a6bf3116d33f621a8fdc68f925f->leave($__internal_8a23ccb345bbfe906095cea50dfc5ad922db6a6bf3116d33f621a8fdc68f925f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
