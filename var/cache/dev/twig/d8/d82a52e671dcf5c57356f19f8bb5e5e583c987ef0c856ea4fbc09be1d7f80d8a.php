<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7056a614d608b021da99db731f1695a66050d6938b1dc9232a6100a804b1b2cb extends Twig_Template
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
        $__internal_f77fd391e45c8b65d610b98c9eec907939c5763999cd3af9dfcfc0b732106781 = $this->env->getExtension("native_profiler");
        $__internal_f77fd391e45c8b65d610b98c9eec907939c5763999cd3af9dfcfc0b732106781->enter($__internal_f77fd391e45c8b65d610b98c9eec907939c5763999cd3af9dfcfc0b732106781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f77fd391e45c8b65d610b98c9eec907939c5763999cd3af9dfcfc0b732106781->leave($__internal_f77fd391e45c8b65d610b98c9eec907939c5763999cd3af9dfcfc0b732106781_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
