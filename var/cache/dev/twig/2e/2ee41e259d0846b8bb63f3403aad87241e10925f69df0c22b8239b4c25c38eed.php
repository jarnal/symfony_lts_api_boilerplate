<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_90423043ed606bb4857cbf23dfe3e4388e12c50830402abbd60c982adf57500b extends Twig_Template
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
        $__internal_4bdc9e414e6ef16342aede30ed1a33c8a807070b67a75c4b4b794d491bd04d4c = $this->env->getExtension("native_profiler");
        $__internal_4bdc9e414e6ef16342aede30ed1a33c8a807070b67a75c4b4b794d491bd04d4c->enter($__internal_4bdc9e414e6ef16342aede30ed1a33c8a807070b67a75c4b4b794d491bd04d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4bdc9e414e6ef16342aede30ed1a33c8a807070b67a75c4b4b794d491bd04d4c->leave($__internal_4bdc9e414e6ef16342aede30ed1a33c8a807070b67a75c4b4b794d491bd04d4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
