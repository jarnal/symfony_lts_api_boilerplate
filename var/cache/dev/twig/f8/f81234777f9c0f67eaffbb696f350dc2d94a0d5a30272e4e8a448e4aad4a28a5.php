<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_cc990c6aaa589f70b85e0d0975cefc0cbd1ae1784b906752aea3241510a8fdb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f010850df97da6be0f76eeeb284ac07ba754f75cccec0b7f7c9003c341603add = $this->env->getExtension("native_profiler");
        $__internal_f010850df97da6be0f76eeeb284ac07ba754f75cccec0b7f7c9003c341603add->enter($__internal_f010850df97da6be0f76eeeb284ac07ba754f75cccec0b7f7c9003c341603add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f010850df97da6be0f76eeeb284ac07ba754f75cccec0b7f7c9003c341603add->leave($__internal_f010850df97da6be0f76eeeb284ac07ba754f75cccec0b7f7c9003c341603add_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4abb194abb95ef63690d2aa2a32b8e6306acf9d26480477e8377ff2b51d83adc = $this->env->getExtension("native_profiler");
        $__internal_4abb194abb95ef63690d2aa2a32b8e6306acf9d26480477e8377ff2b51d83adc->enter($__internal_4abb194abb95ef63690d2aa2a32b8e6306acf9d26480477e8377ff2b51d83adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4abb194abb95ef63690d2aa2a32b8e6306acf9d26480477e8377ff2b51d83adc->leave($__internal_4abb194abb95ef63690d2aa2a32b8e6306acf9d26480477e8377ff2b51d83adc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
