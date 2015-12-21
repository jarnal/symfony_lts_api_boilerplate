<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_94b691bcdabb842046b2907b421749cdb57c490256fab32b61b712ea41e393c1 extends Twig_Template
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
        $__internal_f53b12c9c10b4af46d1bbd27fb05cedec4339afa0782f5c8d9848a7544663be6 = $this->env->getExtension("native_profiler");
        $__internal_f53b12c9c10b4af46d1bbd27fb05cedec4339afa0782f5c8d9848a7544663be6->enter($__internal_f53b12c9c10b4af46d1bbd27fb05cedec4339afa0782f5c8d9848a7544663be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f53b12c9c10b4af46d1bbd27fb05cedec4339afa0782f5c8d9848a7544663be6->leave($__internal_f53b12c9c10b4af46d1bbd27fb05cedec4339afa0782f5c8d9848a7544663be6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
