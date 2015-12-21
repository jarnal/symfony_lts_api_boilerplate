<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_d14cf7cca8b9631618dc7f2fea097a70853023075efcb4536370d1ffdfa0596d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_e05134d6705148d09b5377e02320397668c8d9d8029e07d367722f17d6e50876 = $this->env->getExtension("native_profiler");
        $__internal_e05134d6705148d09b5377e02320397668c8d9d8029e07d367722f17d6e50876->enter($__internal_e05134d6705148d09b5377e02320397668c8d9d8029e07d367722f17d6e50876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e05134d6705148d09b5377e02320397668c8d9d8029e07d367722f17d6e50876->leave($__internal_e05134d6705148d09b5377e02320397668c8d9d8029e07d367722f17d6e50876_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71056f90d7575ba6ccd0902e235e4d7d4d9eab635f5d3d2bdf1b8b29fab9f056 = $this->env->getExtension("native_profiler");
        $__internal_71056f90d7575ba6ccd0902e235e4d7d4d9eab635f5d3d2bdf1b8b29fab9f056->enter($__internal_71056f90d7575ba6ccd0902e235e4d7d4d9eab635f5d3d2bdf1b8b29fab9f056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_71056f90d7575ba6ccd0902e235e4d7d4d9eab635f5d3d2bdf1b8b29fab9f056->leave($__internal_71056f90d7575ba6ccd0902e235e4d7d4d9eab635f5d3d2bdf1b8b29fab9f056_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
