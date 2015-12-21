<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_24e95e0a9a140b2e12542cf90f5ffd0a58a4c80bfb9fc61b10a59b33b899d5d9 extends Twig_Template
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
        $__internal_7b7fd9bcdb25dafbf00fd88130ce9ea634d7680c96d50ac6c79a317079aaa82c = $this->env->getExtension("native_profiler");
        $__internal_7b7fd9bcdb25dafbf00fd88130ce9ea634d7680c96d50ac6c79a317079aaa82c->enter($__internal_7b7fd9bcdb25dafbf00fd88130ce9ea634d7680c96d50ac6c79a317079aaa82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7b7fd9bcdb25dafbf00fd88130ce9ea634d7680c96d50ac6c79a317079aaa82c->leave($__internal_7b7fd9bcdb25dafbf00fd88130ce9ea634d7680c96d50ac6c79a317079aaa82c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
