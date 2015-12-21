<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c17ed4c8c78f42ea861fd4cfa23b167fff421e356e1be4676d3566e0ea70593d extends Twig_Template
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
        $__internal_6f55af2b92751d98fafe57cd1c715ecf992f1cd3b313376274a0801cf8641410 = $this->env->getExtension("native_profiler");
        $__internal_6f55af2b92751d98fafe57cd1c715ecf992f1cd3b313376274a0801cf8641410->enter($__internal_6f55af2b92751d98fafe57cd1c715ecf992f1cd3b313376274a0801cf8641410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6f55af2b92751d98fafe57cd1c715ecf992f1cd3b313376274a0801cf8641410->leave($__internal_6f55af2b92751d98fafe57cd1c715ecf992f1cd3b313376274a0801cf8641410_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
