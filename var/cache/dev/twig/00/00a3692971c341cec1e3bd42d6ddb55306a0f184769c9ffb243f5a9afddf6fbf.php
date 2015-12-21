<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f18b0977122a880ccfef27361d3f124a52e5142487964a51f26a682f7a46243f extends Twig_Template
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
        $__internal_f6018926b1b6b2b945b3ddb823a9ef16aa25db4622e7d89dedbb31b296ce3812 = $this->env->getExtension("native_profiler");
        $__internal_f6018926b1b6b2b945b3ddb823a9ef16aa25db4622e7d89dedbb31b296ce3812->enter($__internal_f6018926b1b6b2b945b3ddb823a9ef16aa25db4622e7d89dedbb31b296ce3812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f6018926b1b6b2b945b3ddb823a9ef16aa25db4622e7d89dedbb31b296ce3812->leave($__internal_f6018926b1b6b2b945b3ddb823a9ef16aa25db4622e7d89dedbb31b296ce3812_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
