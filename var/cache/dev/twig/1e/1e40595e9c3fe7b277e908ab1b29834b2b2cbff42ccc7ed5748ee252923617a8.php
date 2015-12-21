<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_dd4404c806949e75ded0752ed371577302ca56d3e9418970c8829e13928f512d extends Twig_Template
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
        $__internal_418ad1ca122fbea2626afbb4b1b1921313d13417e538de26e9b372925e81bfff = $this->env->getExtension("native_profiler");
        $__internal_418ad1ca122fbea2626afbb4b1b1921313d13417e538de26e9b372925e81bfff->enter($__internal_418ad1ca122fbea2626afbb4b1b1921313d13417e538de26e9b372925e81bfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_418ad1ca122fbea2626afbb4b1b1921313d13417e538de26e9b372925e81bfff->leave($__internal_418ad1ca122fbea2626afbb4b1b1921313d13417e538de26e9b372925e81bfff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
