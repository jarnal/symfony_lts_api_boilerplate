<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_fb6092c2034ea5921838fa7e042b53fa9f1148a124758bb33f8ad71b16cff490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_d30ce5cb1651bee0eaf662ae29fdc4aea41625b4e6906a1c9e20e6b4c180ce30 = $this->env->getExtension("native_profiler");
        $__internal_d30ce5cb1651bee0eaf662ae29fdc4aea41625b4e6906a1c9e20e6b4c180ce30->enter($__internal_d30ce5cb1651bee0eaf662ae29fdc4aea41625b4e6906a1c9e20e6b4c180ce30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d30ce5cb1651bee0eaf662ae29fdc4aea41625b4e6906a1c9e20e6b4c180ce30->leave($__internal_d30ce5cb1651bee0eaf662ae29fdc4aea41625b4e6906a1c9e20e6b4c180ce30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fe9319ac2dcde85e6965a442c24d9872acca5ddb30604f173f7cd396d92ce0c = $this->env->getExtension("native_profiler");
        $__internal_4fe9319ac2dcde85e6965a442c24d9872acca5ddb30604f173f7cd396d92ce0c->enter($__internal_4fe9319ac2dcde85e6965a442c24d9872acca5ddb30604f173f7cd396d92ce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4fe9319ac2dcde85e6965a442c24d9872acca5ddb30604f173f7cd396d92ce0c->leave($__internal_4fe9319ac2dcde85e6965a442c24d9872acca5ddb30604f173f7cd396d92ce0c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
