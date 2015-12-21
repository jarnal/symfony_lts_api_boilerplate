<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_46fab5cc597146d0a24bd84b6c4a393f629c273e36d121592012be00d5a8891d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_6c8231fb4bf66fb66d3ef8eb416a4f26d974242e7416e4aa25ba86e4e5d805b7 = $this->env->getExtension("native_profiler");
        $__internal_6c8231fb4bf66fb66d3ef8eb416a4f26d974242e7416e4aa25ba86e4e5d805b7->enter($__internal_6c8231fb4bf66fb66d3ef8eb416a4f26d974242e7416e4aa25ba86e4e5d805b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c8231fb4bf66fb66d3ef8eb416a4f26d974242e7416e4aa25ba86e4e5d805b7->leave($__internal_6c8231fb4bf66fb66d3ef8eb416a4f26d974242e7416e4aa25ba86e4e5d805b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fe10452268af097d402f7874e12761aec2a7fc579b7457a5c61180332759651 = $this->env->getExtension("native_profiler");
        $__internal_7fe10452268af097d402f7874e12761aec2a7fc579b7457a5c61180332759651->enter($__internal_7fe10452268af097d402f7874e12761aec2a7fc579b7457a5c61180332759651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7fe10452268af097d402f7874e12761aec2a7fc579b7457a5c61180332759651->leave($__internal_7fe10452268af097d402f7874e12761aec2a7fc579b7457a5c61180332759651_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
