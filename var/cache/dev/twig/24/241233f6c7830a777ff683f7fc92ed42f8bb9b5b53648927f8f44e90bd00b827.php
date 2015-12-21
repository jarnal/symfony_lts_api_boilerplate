<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8b3242cac647197ff9a5ff41c8a981fa83a8dea79f1449b1a5c2515953dd8638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_0fcd4969c8402390a4f8433a69d8425d622e7eb3b547c852b22fdd8391ab18ff = $this->env->getExtension("native_profiler");
        $__internal_0fcd4969c8402390a4f8433a69d8425d622e7eb3b547c852b22fdd8391ab18ff->enter($__internal_0fcd4969c8402390a4f8433a69d8425d622e7eb3b547c852b22fdd8391ab18ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fcd4969c8402390a4f8433a69d8425d622e7eb3b547c852b22fdd8391ab18ff->leave($__internal_0fcd4969c8402390a4f8433a69d8425d622e7eb3b547c852b22fdd8391ab18ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00421f70a488ec289269661c2905ae9f66cb7e9b51d99d52d8b587d403d73395 = $this->env->getExtension("native_profiler");
        $__internal_00421f70a488ec289269661c2905ae9f66cb7e9b51d99d52d8b587d403d73395->enter($__internal_00421f70a488ec289269661c2905ae9f66cb7e9b51d99d52d8b587d403d73395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_00421f70a488ec289269661c2905ae9f66cb7e9b51d99d52d8b587d403d73395->leave($__internal_00421f70a488ec289269661c2905ae9f66cb7e9b51d99d52d8b587d403d73395_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b70c67ee4bed3f637522001b6702c7976a69aed9d89756363c16ef5b6d5e6565 = $this->env->getExtension("native_profiler");
        $__internal_b70c67ee4bed3f637522001b6702c7976a69aed9d89756363c16ef5b6d5e6565->enter($__internal_b70c67ee4bed3f637522001b6702c7976a69aed9d89756363c16ef5b6d5e6565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b70c67ee4bed3f637522001b6702c7976a69aed9d89756363c16ef5b6d5e6565->leave($__internal_b70c67ee4bed3f637522001b6702c7976a69aed9d89756363c16ef5b6d5e6565_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
