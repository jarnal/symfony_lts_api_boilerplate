<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_f777636392b4a2e038fb23aecddda4653002680644dbb7d442ccb14ebbcc75bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_4f3457b100cb0c745ea126c383114d725a09748a3c612cd2ab4944bebd6182af = $this->env->getExtension("native_profiler");
        $__internal_4f3457b100cb0c745ea126c383114d725a09748a3c612cd2ab4944bebd6182af->enter($__internal_4f3457b100cb0c745ea126c383114d725a09748a3c612cd2ab4944bebd6182af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f3457b100cb0c745ea126c383114d725a09748a3c612cd2ab4944bebd6182af->leave($__internal_4f3457b100cb0c745ea126c383114d725a09748a3c612cd2ab4944bebd6182af_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_406b34eabc58d5eb38da78333d371317cffd7f1b0ed79c6b3b7402ce98f9d5ae = $this->env->getExtension("native_profiler");
        $__internal_406b34eabc58d5eb38da78333d371317cffd7f1b0ed79c6b3b7402ce98f9d5ae->enter($__internal_406b34eabc58d5eb38da78333d371317cffd7f1b0ed79c6b3b7402ce98f9d5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_406b34eabc58d5eb38da78333d371317cffd7f1b0ed79c6b3b7402ce98f9d5ae->leave($__internal_406b34eabc58d5eb38da78333d371317cffd7f1b0ed79c6b3b7402ce98f9d5ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
