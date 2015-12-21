<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f625ca3bd111e5283a082cca7fb9c2c3087a7aa1a619e23daa78cf88f9977adb extends Twig_Template
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
        $__internal_2bac83fc0cb1887508debddbfa5b695b0ec311e498d057e503ab9b97e527acfd = $this->env->getExtension("native_profiler");
        $__internal_2bac83fc0cb1887508debddbfa5b695b0ec311e498d057e503ab9b97e527acfd->enter($__internal_2bac83fc0cb1887508debddbfa5b695b0ec311e498d057e503ab9b97e527acfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2bac83fc0cb1887508debddbfa5b695b0ec311e498d057e503ab9b97e527acfd->leave($__internal_2bac83fc0cb1887508debddbfa5b695b0ec311e498d057e503ab9b97e527acfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
