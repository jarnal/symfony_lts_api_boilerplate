<?php

/* ::base.html.twig */
class __TwigTemplate_4dacba3914704952423d3fc8e7d2a22535e08cdfd58924ac7281cac625b292f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2744f5ab506990de9d3baf9e14bf03d9e8567be3243812b91d4f6b8ddd280145 = $this->env->getExtension("native_profiler");
        $__internal_2744f5ab506990de9d3baf9e14bf03d9e8567be3243812b91d4f6b8ddd280145->enter($__internal_2744f5ab506990de9d3baf9e14bf03d9e8567be3243812b91d4f6b8ddd280145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2744f5ab506990de9d3baf9e14bf03d9e8567be3243812b91d4f6b8ddd280145->leave($__internal_2744f5ab506990de9d3baf9e14bf03d9e8567be3243812b91d4f6b8ddd280145_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_40520b429d15d066fcc22129fa6163e7c57d3063660e216cf9c04d6a05ae971e = $this->env->getExtension("native_profiler");
        $__internal_40520b429d15d066fcc22129fa6163e7c57d3063660e216cf9c04d6a05ae971e->enter($__internal_40520b429d15d066fcc22129fa6163e7c57d3063660e216cf9c04d6a05ae971e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_40520b429d15d066fcc22129fa6163e7c57d3063660e216cf9c04d6a05ae971e->leave($__internal_40520b429d15d066fcc22129fa6163e7c57d3063660e216cf9c04d6a05ae971e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d210c56b66ef2fc61ff00e44a72da3b9418d170ed81fa1d6228eea8322e2dedc = $this->env->getExtension("native_profiler");
        $__internal_d210c56b66ef2fc61ff00e44a72da3b9418d170ed81fa1d6228eea8322e2dedc->enter($__internal_d210c56b66ef2fc61ff00e44a72da3b9418d170ed81fa1d6228eea8322e2dedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d210c56b66ef2fc61ff00e44a72da3b9418d170ed81fa1d6228eea8322e2dedc->leave($__internal_d210c56b66ef2fc61ff00e44a72da3b9418d170ed81fa1d6228eea8322e2dedc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7a0069058f81b09ca6e248b8be9de8bbee8336f0a27bbe65d897508b79e7609 = $this->env->getExtension("native_profiler");
        $__internal_c7a0069058f81b09ca6e248b8be9de8bbee8336f0a27bbe65d897508b79e7609->enter($__internal_c7a0069058f81b09ca6e248b8be9de8bbee8336f0a27bbe65d897508b79e7609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7a0069058f81b09ca6e248b8be9de8bbee8336f0a27bbe65d897508b79e7609->leave($__internal_c7a0069058f81b09ca6e248b8be9de8bbee8336f0a27bbe65d897508b79e7609_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_631c05891a3b9238a570e2a1aeb9f27230f522a594e8d55dbba9f1bb480f49e9 = $this->env->getExtension("native_profiler");
        $__internal_631c05891a3b9238a570e2a1aeb9f27230f522a594e8d55dbba9f1bb480f49e9->enter($__internal_631c05891a3b9238a570e2a1aeb9f27230f522a594e8d55dbba9f1bb480f49e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_631c05891a3b9238a570e2a1aeb9f27230f522a594e8d55dbba9f1bb480f49e9->leave($__internal_631c05891a3b9238a570e2a1aeb9f27230f522a594e8d55dbba9f1bb480f49e9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
