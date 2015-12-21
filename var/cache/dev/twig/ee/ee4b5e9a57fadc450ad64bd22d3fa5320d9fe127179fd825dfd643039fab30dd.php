<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff62071a813bf03a49c4b5ba58cd2e7520b5936db93006f8f96187eacab29da3 extends Twig_Template
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
        $__internal_788416c344b843197a9cf8b703929866ed18d6d46d38b10f11cd1363cc649773 = $this->env->getExtension("native_profiler");
        $__internal_788416c344b843197a9cf8b703929866ed18d6d46d38b10f11cd1363cc649773->enter($__internal_788416c344b843197a9cf8b703929866ed18d6d46d38b10f11cd1363cc649773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_788416c344b843197a9cf8b703929866ed18d6d46d38b10f11cd1363cc649773->leave($__internal_788416c344b843197a9cf8b703929866ed18d6d46d38b10f11cd1363cc649773_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
