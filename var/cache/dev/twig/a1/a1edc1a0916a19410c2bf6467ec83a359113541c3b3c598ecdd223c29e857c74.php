<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1640a25a9a7493f3e5581550f1d215337fc619ae7c1e32169aea5478d9b836e7 extends Twig_Template
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
        $__internal_d3e24d1f2e269f238dcaeb25cf746729c302d59023a2ea9da1c00fc2fec1b17f = $this->env->getExtension("native_profiler");
        $__internal_d3e24d1f2e269f238dcaeb25cf746729c302d59023a2ea9da1c00fc2fec1b17f->enter($__internal_d3e24d1f2e269f238dcaeb25cf746729c302d59023a2ea9da1c00fc2fec1b17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d3e24d1f2e269f238dcaeb25cf746729c302d59023a2ea9da1c00fc2fec1b17f->leave($__internal_d3e24d1f2e269f238dcaeb25cf746729c302d59023a2ea9da1c00fc2fec1b17f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
