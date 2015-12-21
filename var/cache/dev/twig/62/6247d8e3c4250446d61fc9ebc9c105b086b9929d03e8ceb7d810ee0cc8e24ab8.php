<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_463fcf403c08fe9f8eba3c17877156a86fac92bb59cfaaecfbd60d1f4ae3f8f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_1d5ca1e1d2897fe0755faf9ca5af7a498007676ee31c362980c09ee670db2b82 = $this->env->getExtension("native_profiler");
        $__internal_1d5ca1e1d2897fe0755faf9ca5af7a498007676ee31c362980c09ee670db2b82->enter($__internal_1d5ca1e1d2897fe0755faf9ca5af7a498007676ee31c362980c09ee670db2b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d5ca1e1d2897fe0755faf9ca5af7a498007676ee31c362980c09ee670db2b82->leave($__internal_1d5ca1e1d2897fe0755faf9ca5af7a498007676ee31c362980c09ee670db2b82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_898e39707a2d351444a516624117f333cefd12fc1011b32ab10be74d33d022a0 = $this->env->getExtension("native_profiler");
        $__internal_898e39707a2d351444a516624117f333cefd12fc1011b32ab10be74d33d022a0->enter($__internal_898e39707a2d351444a516624117f333cefd12fc1011b32ab10be74d33d022a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_898e39707a2d351444a516624117f333cefd12fc1011b32ab10be74d33d022a0->leave($__internal_898e39707a2d351444a516624117f333cefd12fc1011b32ab10be74d33d022a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
