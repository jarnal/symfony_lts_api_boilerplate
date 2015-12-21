<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d479391a3ad8794d364fd8dbc25659d683ba34d12153e36e0454b7353c674764 extends Twig_Template
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
        $__internal_65a4d7c4a56948a1a13483334b9ab0da3d0366ad1d2a4964fcb35dacbac99e31 = $this->env->getExtension("native_profiler");
        $__internal_65a4d7c4a56948a1a13483334b9ab0da3d0366ad1d2a4964fcb35dacbac99e31->enter($__internal_65a4d7c4a56948a1a13483334b9ab0da3d0366ad1d2a4964fcb35dacbac99e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_65a4d7c4a56948a1a13483334b9ab0da3d0366ad1d2a4964fcb35dacbac99e31->leave($__internal_65a4d7c4a56948a1a13483334b9ab0da3d0366ad1d2a4964fcb35dacbac99e31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
