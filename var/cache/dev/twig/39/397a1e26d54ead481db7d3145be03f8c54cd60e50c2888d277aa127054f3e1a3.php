<?php

/* NelmioApiDocBundle::resources.html.twig */
class __TwigTemplate_7d9a2b8ac954417c69256f75d86291c2a940a7b248dfd1ec763041faaf3f4ab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resources.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5468993a8a423a3e4d7560ffa5019ebf05a40f6c948aaab96b29b60569450e00 = $this->env->getExtension("native_profiler");
        $__internal_5468993a8a423a3e4d7560ffa5019ebf05a40f6c948aaab96b29b60569450e00->enter($__internal_5468993a8a423a3e4d7560ffa5019ebf05a40f6c948aaab96b29b60569450e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resources.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5468993a8a423a3e4d7560ffa5019ebf05a40f6c948aaab96b29b60569450e00->leave($__internal_5468993a8a423a3e4d7560ffa5019ebf05a40f6c948aaab96b29b60569450e00_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc8da3f6608603f8552ca076a38a87999fd68b1afed5b06ed724f9f21b944b81 = $this->env->getExtension("native_profiler");
        $__internal_bc8da3f6608603f8552ca076a38a87999fd68b1afed5b06ed724f9f21b944b81->enter($__internal_bc8da3f6608603f8552ca076a38a87999fd68b1afed5b06ed724f9f21b944b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) ? $context["resources"] : $this->getContext($context, "resources")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["section"] => $context["sections"]) {
            // line 5
            echo "        ";
            if (($context["section"] != "_others")) {
                // line 6
                echo "            <li class=\"section";
                echo (((isset($context["defaultSectionsOpened"]) ? $context["defaultSectionsOpened"] : $this->getContext($context, "defaultSectionsOpened"))) ? (" active") : (""));
                echo "\">
                <div class=\"actions\">
                    <a class=\"action-show-hide\">Show/hide</a>
                    <a class=\"action-list\">List Operations</a>
                    <a class=\"action-expand\">Expand Operations</a>
                </div>
                <h1>";
                // line 12
                echo twig_escape_filter($this->env, $context["section"], "html", null, true);
                echo "</h1>
                <ul class=\"section-list\" ";
                // line 13
                if ( !(isset($context["defaultSectionsOpened"]) ? $context["defaultSectionsOpened"] : $this->getContext($context, "defaultSectionsOpened"))) {
                    echo "style=\"display: none\"";
                }
                echo ">
        ";
            }
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sections"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["resource"] => $context["methods"]) {
                // line 16
                echo "            <li class=\"resource\">
                <div class=\"heading\">
                    ";
                // line 18
                if ((($context["section"] == "_others") && ($context["resource"] != "others"))) {
                    // line 19
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, $context["resource"], "html", null, true);
                    echo "</h2>
                    ";
                } elseif ((                // line 20
$context["resource"] != "others")) {
                    // line 21
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, $context["resource"], "html", null, true);
                    echo "</h2>
                    ";
                }
                // line 23
                echo "                </div>
                <ul class=\"endpoints\">
                    <li class=\"endpoint\">
                        <ul class=\"operations\">
                            ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["methods"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 28
                    echo "                                ";
                    $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resources.html.twig", 28)->display($context);
                    // line 29
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                        </ul>
                    </li>
                </ul>
            </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['resource'], $context['methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ";
            if (($context["section"] != "_others")) {
                // line 36
                echo "                </ul>
            </li>
        ";
            }
            // line 39
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['sections'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bc8da3f6608603f8552ca076a38a87999fd68b1afed5b06ed724f9f21b944b81->leave($__internal_bc8da3f6608603f8552ca076a38a87999fd68b1afed5b06ed724f9f21b944b81_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 39,  180 => 36,  177 => 35,  159 => 30,  145 => 29,  142 => 28,  125 => 27,  119 => 23,  113 => 21,  111 => 20,  106 => 19,  104 => 18,  100 => 16,  82 => 15,  75 => 13,  71 => 12,  61 => 6,  58 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "NelmioApiDocBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     {% for section, sections in resources  %}*/
/*         {% if section != '_others' %}*/
/*             <li class="section{{ defaultSectionsOpened? ' active':'' }}">*/
/*                 <div class="actions">*/
/*                     <a class="action-show-hide">Show/hide</a>*/
/*                     <a class="action-list">List Operations</a>*/
/*                     <a class="action-expand">Expand Operations</a>*/
/*                 </div>*/
/*                 <h1>{{ section }}</h1>*/
/*                 <ul class="section-list" {% if not defaultSectionsOpened %}style="display: none"{% endif %}>*/
/*         {% endif %}*/
/*         {% for resource, methods in sections %}*/
/*             <li class="resource">*/
/*                 <div class="heading">*/
/*                     {% if section == '_others' and resource != 'others' %}*/
/*                         <h2>{{ resource }}</h2>*/
/*                     {% elseif resource != 'others' %}*/
/*                         <h2>{{ resource }}</h2>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <ul class="endpoints">*/
/*                     <li class="endpoint">*/
/*                         <ul class="operations">*/
/*                             {% for data in methods %}*/
/*                                 {% include 'NelmioApiDocBundle::method.html.twig' %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*         {% endfor %}*/
/*         {% if section != '_others' %}*/
/*                 </ul>*/
/*             </li>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endblock content %}*/
/* */
