<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6de48953bcc7a85a075178d54e63293000293d63fd0160297966b5406199d7e1 extends Twig_Template
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
        $__internal_9a901132ca568a0854ececf73f9869c13cfb1fef93cc12c7b045a3804e0484f6 = $this->env->getExtension("native_profiler");
        $__internal_9a901132ca568a0854ececf73f9869c13cfb1fef93cc12c7b045a3804e0484f6->enter($__internal_9a901132ca568a0854ececf73f9869c13cfb1fef93cc12c7b045a3804e0484f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9a901132ca568a0854ececf73f9869c13cfb1fef93cc12c7b045a3804e0484f6->leave($__internal_9a901132ca568a0854ececf73f9869c13cfb1fef93cc12c7b045a3804e0484f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
