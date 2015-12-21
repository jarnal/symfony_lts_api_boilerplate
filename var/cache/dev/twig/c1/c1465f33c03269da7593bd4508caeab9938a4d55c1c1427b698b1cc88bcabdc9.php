<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d4de87743cc65e7beddbc92391f357f7748b246e442d664fd37243affc46edec extends Twig_Template
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
        $__internal_e6799707f69466a7aed0cad7bb8bf6d3b21678e03896d63bd481f3418fc5afe9 = $this->env->getExtension("native_profiler");
        $__internal_e6799707f69466a7aed0cad7bb8bf6d3b21678e03896d63bd481f3418fc5afe9->enter($__internal_e6799707f69466a7aed0cad7bb8bf6d3b21678e03896d63bd481f3418fc5afe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e6799707f69466a7aed0cad7bb8bf6d3b21678e03896d63bd481f3418fc5afe9->leave($__internal_e6799707f69466a7aed0cad7bb8bf6d3b21678e03896d63bd481f3418fc5afe9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
