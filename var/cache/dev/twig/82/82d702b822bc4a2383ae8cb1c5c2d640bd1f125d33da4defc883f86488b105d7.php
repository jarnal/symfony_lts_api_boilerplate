<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1b05cb34ecb1a08e751fc91f8bb2d180f2096ddf0dfdb1c6703b9129644e6cf8 extends Twig_Template
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
        $__internal_7c4a730b72aa31a4120c3188d84d37d2446e176c5b3ca2c45a8277159feb114e = $this->env->getExtension("native_profiler");
        $__internal_7c4a730b72aa31a4120c3188d84d37d2446e176c5b3ca2c45a8277159feb114e->enter($__internal_7c4a730b72aa31a4120c3188d84d37d2446e176c5b3ca2c45a8277159feb114e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7c4a730b72aa31a4120c3188d84d37d2446e176c5b3ca2c45a8277159feb114e->leave($__internal_7c4a730b72aa31a4120c3188d84d37d2446e176c5b3ca2c45a8277159feb114e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
