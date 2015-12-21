<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_17db52cb9a3609f540bcbf3c8add40fc8aaffc601c26c0b6232f66631e3c46ae extends Twig_Template
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
        $__internal_806d35ad0fb814fc0cc0244d901cc3482227756c83749ea242839289a20bcf37 = $this->env->getExtension("native_profiler");
        $__internal_806d35ad0fb814fc0cc0244d901cc3482227756c83749ea242839289a20bcf37->enter($__internal_806d35ad0fb814fc0cc0244d901cc3482227756c83749ea242839289a20bcf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_806d35ad0fb814fc0cc0244d901cc3482227756c83749ea242839289a20bcf37->leave($__internal_806d35ad0fb814fc0cc0244d901cc3482227756c83749ea242839289a20bcf37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
