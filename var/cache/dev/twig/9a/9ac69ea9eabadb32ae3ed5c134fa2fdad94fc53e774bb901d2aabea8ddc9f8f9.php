<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_46ddb5240848f9c9c500c2a15a6cdcc1a1d23c78fa2485d0201e794ff5e48e03 extends Twig_Template
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
        $__internal_e9b72fe5f00c548987ecf94e0cee0ad5e9c9a342d211ace54d515a66c2b95a32 = $this->env->getExtension("native_profiler");
        $__internal_e9b72fe5f00c548987ecf94e0cee0ad5e9c9a342d211ace54d515a66c2b95a32->enter($__internal_e9b72fe5f00c548987ecf94e0cee0ad5e9c9a342d211ace54d515a66c2b95a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e9b72fe5f00c548987ecf94e0cee0ad5e9c9a342d211ace54d515a66c2b95a32->leave($__internal_e9b72fe5f00c548987ecf94e0cee0ad5e9c9a342d211ace54d515a66c2b95a32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
