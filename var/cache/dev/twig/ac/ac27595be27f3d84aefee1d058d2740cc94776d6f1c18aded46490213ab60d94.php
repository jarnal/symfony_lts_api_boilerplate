<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_aa7f1c028690d29a4b1d133473e8a0e43194fe8c8509507824692bcaa68d588a extends Twig_Template
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
        $__internal_33ab20f3dde5cbad6bb802b83dc55712b4e00facd664652a31eab59cec700453 = $this->env->getExtension("native_profiler");
        $__internal_33ab20f3dde5cbad6bb802b83dc55712b4e00facd664652a31eab59cec700453->enter($__internal_33ab20f3dde5cbad6bb802b83dc55712b4e00facd664652a31eab59cec700453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_33ab20f3dde5cbad6bb802b83dc55712b4e00facd664652a31eab59cec700453->leave($__internal_33ab20f3dde5cbad6bb802b83dc55712b4e00facd664652a31eab59cec700453_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
