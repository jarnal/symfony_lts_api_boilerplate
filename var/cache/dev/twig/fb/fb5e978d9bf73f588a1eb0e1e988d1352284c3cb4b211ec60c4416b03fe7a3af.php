<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ec284e1d8a0a09e424491f9cc0e05ee5af1bce1bb46f6776ee875cf50093ed41 extends Twig_Template
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
        $__internal_494aaccaeef4b049e408c815822e208f6767c1c2e165821e409fe79fa563bace = $this->env->getExtension("native_profiler");
        $__internal_494aaccaeef4b049e408c815822e208f6767c1c2e165821e409fe79fa563bace->enter($__internal_494aaccaeef4b049e408c815822e208f6767c1c2e165821e409fe79fa563bace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_494aaccaeef4b049e408c815822e208f6767c1c2e165821e409fe79fa563bace->leave($__internal_494aaccaeef4b049e408c815822e208f6767c1c2e165821e409fe79fa563bace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */