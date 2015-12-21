<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9ec8a8d24ed0726cd2f984cf01e0434a3e6ceb91afe47eba9bef9954aacb9222 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d177d5dfb3de79fa9f8bc5b9d25df26ef866ed54c687e50571119f82f5c62a03 = $this->env->getExtension("native_profiler");
        $__internal_d177d5dfb3de79fa9f8bc5b9d25df26ef866ed54c687e50571119f82f5c62a03->enter($__internal_d177d5dfb3de79fa9f8bc5b9d25df26ef866ed54c687e50571119f82f5c62a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d177d5dfb3de79fa9f8bc5b9d25df26ef866ed54c687e50571119f82f5c62a03->leave($__internal_d177d5dfb3de79fa9f8bc5b9d25df26ef866ed54c687e50571119f82f5c62a03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0115e061c87443036dad49d41e5de64612dcb2c95e9f694d208d5225c4de4229 = $this->env->getExtension("native_profiler");
        $__internal_0115e061c87443036dad49d41e5de64612dcb2c95e9f694d208d5225c4de4229->enter($__internal_0115e061c87443036dad49d41e5de64612dcb2c95e9f694d208d5225c4de4229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0115e061c87443036dad49d41e5de64612dcb2c95e9f694d208d5225c4de4229->leave($__internal_0115e061c87443036dad49d41e5de64612dcb2c95e9f694d208d5225c4de4229_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
