<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_92151b8b8732f2aa4b6888d7e31b3b689bc0c14d507599768ef132733b842267 extends Twig_Template
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
        $__internal_03a39f12977b2b413ad0a31c47290964ca2c87c4fc0607d4b5b5dfab14bb7101 = $this->env->getExtension("native_profiler");
        $__internal_03a39f12977b2b413ad0a31c47290964ca2c87c4fc0607d4b5b5dfab14bb7101->enter($__internal_03a39f12977b2b413ad0a31c47290964ca2c87c4fc0607d4b5b5dfab14bb7101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_03a39f12977b2b413ad0a31c47290964ca2c87c4fc0607d4b5b5dfab14bb7101->leave($__internal_03a39f12977b2b413ad0a31c47290964ca2c87c4fc0607d4b5b5dfab14bb7101_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
