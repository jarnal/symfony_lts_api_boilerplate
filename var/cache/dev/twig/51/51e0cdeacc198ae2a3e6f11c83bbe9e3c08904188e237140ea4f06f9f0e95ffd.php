<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fd253ce85da3d70909a14b131ea8afd21c6d04a7def7b72ada9e6ea26cb5000f extends Twig_Template
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
        $__internal_5d24203d0a0f115d014c10ae821394afd1300bbca2b941d4ac083ce925f9783d = $this->env->getExtension("native_profiler");
        $__internal_5d24203d0a0f115d014c10ae821394afd1300bbca2b941d4ac083ce925f9783d->enter($__internal_5d24203d0a0f115d014c10ae821394afd1300bbca2b941d4ac083ce925f9783d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5d24203d0a0f115d014c10ae821394afd1300bbca2b941d4ac083ce925f9783d->leave($__internal_5d24203d0a0f115d014c10ae821394afd1300bbca2b941d4ac083ce925f9783d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
