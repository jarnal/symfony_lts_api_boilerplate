<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_66de50fc9a327ed4e7e6585e9d21e3aa2a98cce0b6f76c90b785448f40ceef12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_7db14591d600dbdcde34226af5e83b3d1ee521da6f9104103de90fdc9b061297 = $this->env->getExtension("native_profiler");
        $__internal_7db14591d600dbdcde34226af5e83b3d1ee521da6f9104103de90fdc9b061297->enter($__internal_7db14591d600dbdcde34226af5e83b3d1ee521da6f9104103de90fdc9b061297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db14591d600dbdcde34226af5e83b3d1ee521da6f9104103de90fdc9b061297->leave($__internal_7db14591d600dbdcde34226af5e83b3d1ee521da6f9104103de90fdc9b061297_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34f8aa53ca6e8f5269b1378319ef6c3f6f07cfbe37318348468ee08cac3ce6a5 = $this->env->getExtension("native_profiler");
        $__internal_34f8aa53ca6e8f5269b1378319ef6c3f6f07cfbe37318348468ee08cac3ce6a5->enter($__internal_34f8aa53ca6e8f5269b1378319ef6c3f6f07cfbe37318348468ee08cac3ce6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_34f8aa53ca6e8f5269b1378319ef6c3f6f07cfbe37318348468ee08cac3ce6a5->leave($__internal_34f8aa53ca6e8f5269b1378319ef6c3f6f07cfbe37318348468ee08cac3ce6a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
