<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_dea0026306924054f89ceac88835a9d5147186f23d225cd468287e4752352c8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c9b840d86e5025077c29240472436eb9cfa5ff07b660bd08cd8c52e687d3a227 = $this->env->getExtension("native_profiler");
        $__internal_c9b840d86e5025077c29240472436eb9cfa5ff07b660bd08cd8c52e687d3a227->enter($__internal_c9b840d86e5025077c29240472436eb9cfa5ff07b660bd08cd8c52e687d3a227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b840d86e5025077c29240472436eb9cfa5ff07b660bd08cd8c52e687d3a227->leave($__internal_c9b840d86e5025077c29240472436eb9cfa5ff07b660bd08cd8c52e687d3a227_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2eb54ce2fddf39e3b4c7faa9c60d6bb87bb6753fd858dc106437572a9852ba7 = $this->env->getExtension("native_profiler");
        $__internal_e2eb54ce2fddf39e3b4c7faa9c60d6bb87bb6753fd858dc106437572a9852ba7->enter($__internal_e2eb54ce2fddf39e3b4c7faa9c60d6bb87bb6753fd858dc106437572a9852ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e2eb54ce2fddf39e3b4c7faa9c60d6bb87bb6753fd858dc106437572a9852ba7->leave($__internal_e2eb54ce2fddf39e3b4c7faa9c60d6bb87bb6753fd858dc106437572a9852ba7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
