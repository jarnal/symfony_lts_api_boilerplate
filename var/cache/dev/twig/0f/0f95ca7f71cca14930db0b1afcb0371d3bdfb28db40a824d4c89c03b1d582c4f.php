<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_70bd61b174e7f3607fbc06973ffc99d99467cc63bfc6f8f0295728d45a52911d extends Twig_Template
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
        $__internal_5e37e6eefd3f0f41aeee1a7a3a4ce75edc95eb5a4b660caa873004b38579856f = $this->env->getExtension("native_profiler");
        $__internal_5e37e6eefd3f0f41aeee1a7a3a4ce75edc95eb5a4b660caa873004b38579856f->enter($__internal_5e37e6eefd3f0f41aeee1a7a3a4ce75edc95eb5a4b660caa873004b38579856f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_5e37e6eefd3f0f41aeee1a7a3a4ce75edc95eb5a4b660caa873004b38579856f->leave($__internal_5e37e6eefd3f0f41aeee1a7a3a4ce75edc95eb5a4b660caa873004b38579856f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
