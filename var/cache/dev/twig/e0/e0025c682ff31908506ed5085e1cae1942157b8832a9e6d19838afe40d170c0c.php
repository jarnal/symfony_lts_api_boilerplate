<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_84857a073b4e9589f80e091692b2212e0815a6d84dd04a0e9b724d04fa39ad9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36cef45fcb6a78deeba687630463ac955d148358aee0a4d42f32ed54734d7973 = $this->env->getExtension("native_profiler");
        $__internal_36cef45fcb6a78deeba687630463ac955d148358aee0a4d42f32ed54734d7973->enter($__internal_36cef45fcb6a78deeba687630463ac955d148358aee0a4d42f32ed54734d7973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36cef45fcb6a78deeba687630463ac955d148358aee0a4d42f32ed54734d7973->leave($__internal_36cef45fcb6a78deeba687630463ac955d148358aee0a4d42f32ed54734d7973_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3b7c66318450b84413276cd8b23851f9354e824f91309b263c3a02279d25e7d = $this->env->getExtension("native_profiler");
        $__internal_d3b7c66318450b84413276cd8b23851f9354e824f91309b263c3a02279d25e7d->enter($__internal_d3b7c66318450b84413276cd8b23851f9354e824f91309b263c3a02279d25e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_d3b7c66318450b84413276cd8b23851f9354e824f91309b263c3a02279d25e7d->leave($__internal_d3b7c66318450b84413276cd8b23851f9354e824f91309b263c3a02279d25e7d_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "NelmioApiDocBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <li class="resource">*/
/*         <ul class="endpoints">*/
/*             <li class="endpoint">*/
/*                 <ul class="operations">*/
/*                     {% include 'NelmioApiDocBundle::method.html.twig' %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* {% endblock content %}*/
/* */
