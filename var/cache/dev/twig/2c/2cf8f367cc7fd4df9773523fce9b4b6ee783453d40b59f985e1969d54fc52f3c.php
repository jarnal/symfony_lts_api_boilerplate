<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_83fb23d0d424fb6d8664497c3e51da5982cbe4cc3ca265545fe422983dd076de extends Twig_Template
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
        $__internal_e54e3e2a676242894d6704e30f1ce4c70cf67b2e27144c5dd7b88d99d4cef0ad = $this->env->getExtension("native_profiler");
        $__internal_e54e3e2a676242894d6704e30f1ce4c70cf67b2e27144c5dd7b88d99d4cef0ad->enter($__internal_e54e3e2a676242894d6704e30f1ce4c70cf67b2e27144c5dd7b88d99d4cef0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e54e3e2a676242894d6704e30f1ce4c70cf67b2e27144c5dd7b88d99d4cef0ad->leave($__internal_e54e3e2a676242894d6704e30f1ce4c70cf67b2e27144c5dd7b88d99d4cef0ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
