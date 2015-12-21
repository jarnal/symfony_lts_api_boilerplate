<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_02de5918d0b0bc8593ded45adac448af2df3a4cc4eca20fce19956335445abbb extends Twig_Template
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
        $__internal_7443b9185bb46d153f3496f136be51ab570da95ba3c710214f261e0f23e41254 = $this->env->getExtension("native_profiler");
        $__internal_7443b9185bb46d153f3496f136be51ab570da95ba3c710214f261e0f23e41254->enter($__internal_7443b9185bb46d153f3496f136be51ab570da95ba3c710214f261e0f23e41254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7443b9185bb46d153f3496f136be51ab570da95ba3c710214f261e0f23e41254->leave($__internal_7443b9185bb46d153f3496f136be51ab570da95ba3c710214f261e0f23e41254_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
