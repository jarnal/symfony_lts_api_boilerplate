<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7798aef018ea5699c5722bb56ec8b284852c83320a20fee1b92f53b33b0dd324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09e2304d56e65223fd3c9cb6a44ec5db18b1d6009d3011e91f4bed55f2ccf2fe = $this->env->getExtension("native_profiler");
        $__internal_09e2304d56e65223fd3c9cb6a44ec5db18b1d6009d3011e91f4bed55f2ccf2fe->enter($__internal_09e2304d56e65223fd3c9cb6a44ec5db18b1d6009d3011e91f4bed55f2ccf2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e2304d56e65223fd3c9cb6a44ec5db18b1d6009d3011e91f4bed55f2ccf2fe->leave($__internal_09e2304d56e65223fd3c9cb6a44ec5db18b1d6009d3011e91f4bed55f2ccf2fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a931256279d0a0329681bad17456869e7497705302024a7e0b75531d52e1f1c = $this->env->getExtension("native_profiler");
        $__internal_0a931256279d0a0329681bad17456869e7497705302024a7e0b75531d52e1f1c->enter($__internal_0a931256279d0a0329681bad17456869e7497705302024a7e0b75531d52e1f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0a931256279d0a0329681bad17456869e7497705302024a7e0b75531d52e1f1c->leave($__internal_0a931256279d0a0329681bad17456869e7497705302024a7e0b75531d52e1f1c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb2e123c095648deec27fe1404ba80f5921afeba9af1c65a05864e70f0d622b5 = $this->env->getExtension("native_profiler");
        $__internal_bb2e123c095648deec27fe1404ba80f5921afeba9af1c65a05864e70f0d622b5->enter($__internal_bb2e123c095648deec27fe1404ba80f5921afeba9af1c65a05864e70f0d622b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb2e123c095648deec27fe1404ba80f5921afeba9af1c65a05864e70f0d622b5->leave($__internal_bb2e123c095648deec27fe1404ba80f5921afeba9af1c65a05864e70f0d622b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dc99e83a3f655823680a4f8954f728ce1d69f975335d9c8803fa6f3eaa92580 = $this->env->getExtension("native_profiler");
        $__internal_7dc99e83a3f655823680a4f8954f728ce1d69f975335d9c8803fa6f3eaa92580->enter($__internal_7dc99e83a3f655823680a4f8954f728ce1d69f975335d9c8803fa6f3eaa92580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7dc99e83a3f655823680a4f8954f728ce1d69f975335d9c8803fa6f3eaa92580->leave($__internal_7dc99e83a3f655823680a4f8954f728ce1d69f975335d9c8803fa6f3eaa92580_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
