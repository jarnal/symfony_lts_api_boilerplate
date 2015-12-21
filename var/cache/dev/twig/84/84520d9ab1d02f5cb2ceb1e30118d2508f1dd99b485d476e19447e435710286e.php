<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_eb34280428395f592314ece1e03bd5e40d4375e8fd28ff1f5c2fa6974b13e89b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c59ee7f7e607124d17358ed40565fe51f06ff5d2fdea899e0766ec9f8b950acd = $this->env->getExtension("native_profiler");
        $__internal_c59ee7f7e607124d17358ed40565fe51f06ff5d2fdea899e0766ec9f8b950acd->enter($__internal_c59ee7f7e607124d17358ed40565fe51f06ff5d2fdea899e0766ec9f8b950acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c59ee7f7e607124d17358ed40565fe51f06ff5d2fdea899e0766ec9f8b950acd->leave($__internal_c59ee7f7e607124d17358ed40565fe51f06ff5d2fdea899e0766ec9f8b950acd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_19e886d2a70b4eb499d8fa1981a1dc20bd6c1896a732376d896c15ca834fe1a2 = $this->env->getExtension("native_profiler");
        $__internal_19e886d2a70b4eb499d8fa1981a1dc20bd6c1896a732376d896c15ca834fe1a2->enter($__internal_19e886d2a70b4eb499d8fa1981a1dc20bd6c1896a732376d896c15ca834fe1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_19e886d2a70b4eb499d8fa1981a1dc20bd6c1896a732376d896c15ca834fe1a2->leave($__internal_19e886d2a70b4eb499d8fa1981a1dc20bd6c1896a732376d896c15ca834fe1a2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9f13207d08471736834eb779043e24195fde8a491894ad2c05e52159d4810b36 = $this->env->getExtension("native_profiler");
        $__internal_9f13207d08471736834eb779043e24195fde8a491894ad2c05e52159d4810b36->enter($__internal_9f13207d08471736834eb779043e24195fde8a491894ad2c05e52159d4810b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9f13207d08471736834eb779043e24195fde8a491894ad2c05e52159d4810b36->leave($__internal_9f13207d08471736834eb779043e24195fde8a491894ad2c05e52159d4810b36_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4fd58bb948c8269171a30d297f27ea1a717572d8a8355532399c5ad57929d950 = $this->env->getExtension("native_profiler");
        $__internal_4fd58bb948c8269171a30d297f27ea1a717572d8a8355532399c5ad57929d950->enter($__internal_4fd58bb948c8269171a30d297f27ea1a717572d8a8355532399c5ad57929d950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4fd58bb948c8269171a30d297f27ea1a717572d8a8355532399c5ad57929d950->leave($__internal_4fd58bb948c8269171a30d297f27ea1a717572d8a8355532399c5ad57929d950_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
