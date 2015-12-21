<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ec39ddf5116e51fa51336028a2c6f3cf6a246e3a13bb02a66a60786b631bad21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c6a60477542a18cccb1370c57fd4ba1fe46b1cf0d6d816e33a53c01fb313c25d = $this->env->getExtension("native_profiler");
        $__internal_c6a60477542a18cccb1370c57fd4ba1fe46b1cf0d6d816e33a53c01fb313c25d->enter($__internal_c6a60477542a18cccb1370c57fd4ba1fe46b1cf0d6d816e33a53c01fb313c25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a60477542a18cccb1370c57fd4ba1fe46b1cf0d6d816e33a53c01fb313c25d->leave($__internal_c6a60477542a18cccb1370c57fd4ba1fe46b1cf0d6d816e33a53c01fb313c25d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbbbe956110e3cbbf6f4021754969e2fb7b93951d2241d68c2ca234a47e8ec5f = $this->env->getExtension("native_profiler");
        $__internal_bbbbe956110e3cbbf6f4021754969e2fb7b93951d2241d68c2ca234a47e8ec5f->enter($__internal_bbbbe956110e3cbbf6f4021754969e2fb7b93951d2241d68c2ca234a47e8ec5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_bbbbe956110e3cbbf6f4021754969e2fb7b93951d2241d68c2ca234a47e8ec5f->leave($__internal_bbbbe956110e3cbbf6f4021754969e2fb7b93951d2241d68c2ca234a47e8ec5f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
