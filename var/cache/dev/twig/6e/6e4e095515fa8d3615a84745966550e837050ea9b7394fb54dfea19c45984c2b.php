<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_09a4c1dc6448bb7c84c304fbea2a6f0a71d76625edecff8bbf31716a829dfa49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_5f6daa92bb0dca0c7d9231fb6abb3395e0104de28a17bcbc4e79382afef8480d = $this->env->getExtension("native_profiler");
        $__internal_5f6daa92bb0dca0c7d9231fb6abb3395e0104de28a17bcbc4e79382afef8480d->enter($__internal_5f6daa92bb0dca0c7d9231fb6abb3395e0104de28a17bcbc4e79382afef8480d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f6daa92bb0dca0c7d9231fb6abb3395e0104de28a17bcbc4e79382afef8480d->leave($__internal_5f6daa92bb0dca0c7d9231fb6abb3395e0104de28a17bcbc4e79382afef8480d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f046a08215c34949271ea0ee335b33f3eb35002a88a1d512fc8c8ecb3f78a36 = $this->env->getExtension("native_profiler");
        $__internal_2f046a08215c34949271ea0ee335b33f3eb35002a88a1d512fc8c8ecb3f78a36->enter($__internal_2f046a08215c34949271ea0ee335b33f3eb35002a88a1d512fc8c8ecb3f78a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_2f046a08215c34949271ea0ee335b33f3eb35002a88a1d512fc8c8ecb3f78a36->leave($__internal_2f046a08215c34949271ea0ee335b33f3eb35002a88a1d512fc8c8ecb3f78a36_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
