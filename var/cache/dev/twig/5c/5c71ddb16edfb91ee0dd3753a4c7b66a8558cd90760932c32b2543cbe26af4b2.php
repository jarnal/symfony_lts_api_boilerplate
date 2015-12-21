<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f92ce01fc7b5b5d0d4c9de807b212ca983b8637fc09a0fa297e2383e73c0c913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_018139f6856d3b3ca4e20eba2d341bafe8f7dcdca90d02c06043af196bdb05a5 = $this->env->getExtension("native_profiler");
        $__internal_018139f6856d3b3ca4e20eba2d341bafe8f7dcdca90d02c06043af196bdb05a5->enter($__internal_018139f6856d3b3ca4e20eba2d341bafe8f7dcdca90d02c06043af196bdb05a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_018139f6856d3b3ca4e20eba2d341bafe8f7dcdca90d02c06043af196bdb05a5->leave($__internal_018139f6856d3b3ca4e20eba2d341bafe8f7dcdca90d02c06043af196bdb05a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e32864943fd344672b1866229c216ce4b9696135ffdd608161aead2bf6c0559 = $this->env->getExtension("native_profiler");
        $__internal_3e32864943fd344672b1866229c216ce4b9696135ffdd608161aead2bf6c0559->enter($__internal_3e32864943fd344672b1866229c216ce4b9696135ffdd608161aead2bf6c0559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e32864943fd344672b1866229c216ce4b9696135ffdd608161aead2bf6c0559->leave($__internal_3e32864943fd344672b1866229c216ce4b9696135ffdd608161aead2bf6c0559_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1139dc62e6f59ebee2045b7f8f85f3734cb8bd088c692570e3259f07072d88ac = $this->env->getExtension("native_profiler");
        $__internal_1139dc62e6f59ebee2045b7f8f85f3734cb8bd088c692570e3259f07072d88ac->enter($__internal_1139dc62e6f59ebee2045b7f8f85f3734cb8bd088c692570e3259f07072d88ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1139dc62e6f59ebee2045b7f8f85f3734cb8bd088c692570e3259f07072d88ac->leave($__internal_1139dc62e6f59ebee2045b7f8f85f3734cb8bd088c692570e3259f07072d88ac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_701d5db16e22197aa9c4f44e2167d1000028290f194e48ced0ecd434c20dd2f6 = $this->env->getExtension("native_profiler");
        $__internal_701d5db16e22197aa9c4f44e2167d1000028290f194e48ced0ecd434c20dd2f6->enter($__internal_701d5db16e22197aa9c4f44e2167d1000028290f194e48ced0ecd434c20dd2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_701d5db16e22197aa9c4f44e2167d1000028290f194e48ced0ecd434c20dd2f6->leave($__internal_701d5db16e22197aa9c4f44e2167d1000028290f194e48ced0ecd434c20dd2f6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
