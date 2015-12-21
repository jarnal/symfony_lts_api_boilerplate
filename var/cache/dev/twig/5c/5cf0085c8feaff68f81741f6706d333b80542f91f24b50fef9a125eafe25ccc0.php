<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_46a3b194b757227272a8576699409b50e753ec17f5714bc07eb7839cf3142d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11067d4cbd06b64ffa412077fd8c5bc4aeb1f103ea329990ea7bc46d92c147fe = $this->env->getExtension("native_profiler");
        $__internal_11067d4cbd06b64ffa412077fd8c5bc4aeb1f103ea329990ea7bc46d92c147fe->enter($__internal_11067d4cbd06b64ffa412077fd8c5bc4aeb1f103ea329990ea7bc46d92c147fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11067d4cbd06b64ffa412077fd8c5bc4aeb1f103ea329990ea7bc46d92c147fe->leave($__internal_11067d4cbd06b64ffa412077fd8c5bc4aeb1f103ea329990ea7bc46d92c147fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14e4c5db8bb877a27af3b24cd37e139c5cc991335709537e723e6c57a40eda10 = $this->env->getExtension("native_profiler");
        $__internal_14e4c5db8bb877a27af3b24cd37e139c5cc991335709537e723e6c57a40eda10->enter($__internal_14e4c5db8bb877a27af3b24cd37e139c5cc991335709537e723e6c57a40eda10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_14e4c5db8bb877a27af3b24cd37e139c5cc991335709537e723e6c57a40eda10->leave($__internal_14e4c5db8bb877a27af3b24cd37e139c5cc991335709537e723e6c57a40eda10_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
