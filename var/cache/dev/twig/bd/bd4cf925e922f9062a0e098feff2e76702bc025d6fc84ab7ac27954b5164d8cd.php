<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5f6247c13264d0251e59c21e8c08687fae83b667aaa8bb9951cc7c77fc602922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5b6137812a55a024f4a169b89d8b5a91aecaf92b7e7b2a6712f81e270d441b0 = $this->env->getExtension("native_profiler");
        $__internal_e5b6137812a55a024f4a169b89d8b5a91aecaf92b7e7b2a6712f81e270d441b0->enter($__internal_e5b6137812a55a024f4a169b89d8b5a91aecaf92b7e7b2a6712f81e270d441b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e5b6137812a55a024f4a169b89d8b5a91aecaf92b7e7b2a6712f81e270d441b0->leave($__internal_e5b6137812a55a024f4a169b89d8b5a91aecaf92b7e7b2a6712f81e270d441b0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_df5742d73ed79b25194be37e5bdec132f5ef7bc37d2cceae47371dd6efc53c56 = $this->env->getExtension("native_profiler");
        $__internal_df5742d73ed79b25194be37e5bdec132f5ef7bc37d2cceae47371dd6efc53c56->enter($__internal_df5742d73ed79b25194be37e5bdec132f5ef7bc37d2cceae47371dd6efc53c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_df5742d73ed79b25194be37e5bdec132f5ef7bc37d2cceae47371dd6efc53c56->leave($__internal_df5742d73ed79b25194be37e5bdec132f5ef7bc37d2cceae47371dd6efc53c56_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
