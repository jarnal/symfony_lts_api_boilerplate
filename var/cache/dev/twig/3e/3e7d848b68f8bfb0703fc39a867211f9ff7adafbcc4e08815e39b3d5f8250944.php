<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1305fa1c847047c199bbb733afe6fbf987e6303a81ec632eb88812ae8085aa42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2d662e80e2e607858378aebc417a8b0447954e0bae447ec8e88c3c4509ced64 = $this->env->getExtension("native_profiler");
        $__internal_f2d662e80e2e607858378aebc417a8b0447954e0bae447ec8e88c3c4509ced64->enter($__internal_f2d662e80e2e607858378aebc417a8b0447954e0bae447ec8e88c3c4509ced64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f2d662e80e2e607858378aebc417a8b0447954e0bae447ec8e88c3c4509ced64->leave($__internal_f2d662e80e2e607858378aebc417a8b0447954e0bae447ec8e88c3c4509ced64_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
