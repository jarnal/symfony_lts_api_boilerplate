<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_75b7ff95d1bfdfd1a19c86e1c24d7d2c83db789bf26bb2c760325dd217425f72 extends Twig_Template
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
        $__internal_e284265b09c1a7dca221e9231be6975d97bcb8a115856e59b655ad4cb30b147d = $this->env->getExtension("native_profiler");
        $__internal_e284265b09c1a7dca221e9231be6975d97bcb8a115856e59b655ad4cb30b147d->enter($__internal_e284265b09c1a7dca221e9231be6975d97bcb8a115856e59b655ad4cb30b147d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e284265b09c1a7dca221e9231be6975d97bcb8a115856e59b655ad4cb30b147d->leave($__internal_e284265b09c1a7dca221e9231be6975d97bcb8a115856e59b655ad4cb30b147d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
