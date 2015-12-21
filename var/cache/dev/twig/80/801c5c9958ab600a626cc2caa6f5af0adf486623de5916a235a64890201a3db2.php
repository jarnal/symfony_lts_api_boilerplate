<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f7a43b3cbcab833b3845a9292ce33887ba73059c5ad0d51f4a84cda4ba0f4679 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_5f8acb7ae5e7e7d8ee9663392af1b8fd788f4143ca775371655905b05b3cb0e4 = $this->env->getExtension("native_profiler");
        $__internal_5f8acb7ae5e7e7d8ee9663392af1b8fd788f4143ca775371655905b05b3cb0e4->enter($__internal_5f8acb7ae5e7e7d8ee9663392af1b8fd788f4143ca775371655905b05b3cb0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f8acb7ae5e7e7d8ee9663392af1b8fd788f4143ca775371655905b05b3cb0e4->leave($__internal_5f8acb7ae5e7e7d8ee9663392af1b8fd788f4143ca775371655905b05b3cb0e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ea695ed9424f99c2869ed0e93af74944818fba5e9fe328de7e8293ee3a54914 = $this->env->getExtension("native_profiler");
        $__internal_3ea695ed9424f99c2869ed0e93af74944818fba5e9fe328de7e8293ee3a54914->enter($__internal_3ea695ed9424f99c2869ed0e93af74944818fba5e9fe328de7e8293ee3a54914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3ea695ed9424f99c2869ed0e93af74944818fba5e9fe328de7e8293ee3a54914->leave($__internal_3ea695ed9424f99c2869ed0e93af74944818fba5e9fe328de7e8293ee3a54914_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
