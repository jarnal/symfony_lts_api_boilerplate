<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a85c70ad5c3b933d5fd6d480161fe095eb03daa382187a3c7ecd9cbbd35f99fc extends Twig_Template
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
        $__internal_4bb358e87df2e2f3cdc8277f26bceb56f482ddcd7a7eb47a4b3dc9a86a479cb6 = $this->env->getExtension("native_profiler");
        $__internal_4bb358e87df2e2f3cdc8277f26bceb56f482ddcd7a7eb47a4b3dc9a86a479cb6->enter($__internal_4bb358e87df2e2f3cdc8277f26bceb56f482ddcd7a7eb47a4b3dc9a86a479cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4bb358e87df2e2f3cdc8277f26bceb56f482ddcd7a7eb47a4b3dc9a86a479cb6->leave($__internal_4bb358e87df2e2f3cdc8277f26bceb56f482ddcd7a7eb47a4b3dc9a86a479cb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
