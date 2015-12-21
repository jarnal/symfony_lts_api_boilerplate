<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_22db401fd8b0b24327748d716f05dba4b20a0e42361f91e0529efa65ff744f6e extends Twig_Template
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
        $__internal_d8abb2760c40a16af1c7760da023f16c2897aae6ffe1bc8f89bf7c66ffab8b83 = $this->env->getExtension("native_profiler");
        $__internal_d8abb2760c40a16af1c7760da023f16c2897aae6ffe1bc8f89bf7c66ffab8b83->enter($__internal_d8abb2760c40a16af1c7760da023f16c2897aae6ffe1bc8f89bf7c66ffab8b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d8abb2760c40a16af1c7760da023f16c2897aae6ffe1bc8f89bf7c66ffab8b83->leave($__internal_d8abb2760c40a16af1c7760da023f16c2897aae6ffe1bc8f89bf7c66ffab8b83_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2264db0f9444dbdc8938ade3271943494fe3d3e7977297ea85a111373e6b75a8 = $this->env->getExtension("native_profiler");
        $__internal_2264db0f9444dbdc8938ade3271943494fe3d3e7977297ea85a111373e6b75a8->enter($__internal_2264db0f9444dbdc8938ade3271943494fe3d3e7977297ea85a111373e6b75a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2264db0f9444dbdc8938ade3271943494fe3d3e7977297ea85a111373e6b75a8->leave($__internal_2264db0f9444dbdc8938ade3271943494fe3d3e7977297ea85a111373e6b75a8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1ee6c5d99ce480a3ec11635b50e281230d1a25c02ffdc1f3866fb6497bbc1dd1 = $this->env->getExtension("native_profiler");
        $__internal_1ee6c5d99ce480a3ec11635b50e281230d1a25c02ffdc1f3866fb6497bbc1dd1->enter($__internal_1ee6c5d99ce480a3ec11635b50e281230d1a25c02ffdc1f3866fb6497bbc1dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1ee6c5d99ce480a3ec11635b50e281230d1a25c02ffdc1f3866fb6497bbc1dd1->leave($__internal_1ee6c5d99ce480a3ec11635b50e281230d1a25c02ffdc1f3866fb6497bbc1dd1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_691edec7d759f51794d4f2d83416c6db1f7fb884d44cd8faa563b11c8df7e2ea = $this->env->getExtension("native_profiler");
        $__internal_691edec7d759f51794d4f2d83416c6db1f7fb884d44cd8faa563b11c8df7e2ea->enter($__internal_691edec7d759f51794d4f2d83416c6db1f7fb884d44cd8faa563b11c8df7e2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_691edec7d759f51794d4f2d83416c6db1f7fb884d44cd8faa563b11c8df7e2ea->leave($__internal_691edec7d759f51794d4f2d83416c6db1f7fb884d44cd8faa563b11c8df7e2ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
