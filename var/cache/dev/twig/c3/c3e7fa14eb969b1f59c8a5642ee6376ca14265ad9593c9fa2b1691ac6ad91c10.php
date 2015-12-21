<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_157fb105217fc72f22883d79a7df720221bbb4c483cb099b3deace2789582afa extends Twig_Template
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
        $__internal_1d1e8cccfd7ff960e1ebcbefb7f3d64bd4b91c8355a70518565246e2d5ea0729 = $this->env->getExtension("native_profiler");
        $__internal_1d1e8cccfd7ff960e1ebcbefb7f3d64bd4b91c8355a70518565246e2d5ea0729->enter($__internal_1d1e8cccfd7ff960e1ebcbefb7f3d64bd4b91c8355a70518565246e2d5ea0729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1d1e8cccfd7ff960e1ebcbefb7f3d64bd4b91c8355a70518565246e2d5ea0729->leave($__internal_1d1e8cccfd7ff960e1ebcbefb7f3d64bd4b91c8355a70518565246e2d5ea0729_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
