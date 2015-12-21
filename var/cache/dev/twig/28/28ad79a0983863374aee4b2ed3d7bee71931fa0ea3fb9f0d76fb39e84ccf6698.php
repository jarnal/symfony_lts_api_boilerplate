<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fc7fd661ed04b86ffafb6d0e954ca4c2a871feac46965925b8006545ae4c8631 extends Twig_Template
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
        $__internal_5bd036fd3f78ff185abffc20b92b23610ce4ebabf2fdc30232b2e6c9513e57b2 = $this->env->getExtension("native_profiler");
        $__internal_5bd036fd3f78ff185abffc20b92b23610ce4ebabf2fdc30232b2e6c9513e57b2->enter($__internal_5bd036fd3f78ff185abffc20b92b23610ce4ebabf2fdc30232b2e6c9513e57b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5bd036fd3f78ff185abffc20b92b23610ce4ebabf2fdc30232b2e6c9513e57b2->leave($__internal_5bd036fd3f78ff185abffc20b92b23610ce4ebabf2fdc30232b2e6c9513e57b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
