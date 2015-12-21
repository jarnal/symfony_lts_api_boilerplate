<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_560dcdc3751eee8c71eed0d93d0712f59ddd6e1642e912699c19373dd475f32a extends Twig_Template
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
        $__internal_8b70b018b473a808cc2b405e90016b50376bad7652be59257db3edb6eabba354 = $this->env->getExtension("native_profiler");
        $__internal_8b70b018b473a808cc2b405e90016b50376bad7652be59257db3edb6eabba354->enter($__internal_8b70b018b473a808cc2b405e90016b50376bad7652be59257db3edb6eabba354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8b70b018b473a808cc2b405e90016b50376bad7652be59257db3edb6eabba354->leave($__internal_8b70b018b473a808cc2b405e90016b50376bad7652be59257db3edb6eabba354_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
