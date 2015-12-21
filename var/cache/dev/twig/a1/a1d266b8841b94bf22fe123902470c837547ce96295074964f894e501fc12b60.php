<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b41b26088b52f4364878d94264b532dad800e8c5db39c021988a07afb706afba extends Twig_Template
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
        $__internal_b9cbd649e05acc30cefe1653301f692aeef73af0948c79333cc53f4220a1fd9c = $this->env->getExtension("native_profiler");
        $__internal_b9cbd649e05acc30cefe1653301f692aeef73af0948c79333cc53f4220a1fd9c->enter($__internal_b9cbd649e05acc30cefe1653301f692aeef73af0948c79333cc53f4220a1fd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b9cbd649e05acc30cefe1653301f692aeef73af0948c79333cc53f4220a1fd9c->leave($__internal_b9cbd649e05acc30cefe1653301f692aeef73af0948c79333cc53f4220a1fd9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
