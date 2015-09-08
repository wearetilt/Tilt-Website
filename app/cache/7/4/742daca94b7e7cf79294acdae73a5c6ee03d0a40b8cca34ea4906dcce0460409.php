<?php

/* editcontent/_fields.twig */
class __TwigTemplate_742daca94b7e7cf79294acdae73a5c6ee03d0a40b8cca34ea4906dcce0460409 extends Twig_Template
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
        // line 1
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "editcontent/_fields.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "fields", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 4
            echo "    ";
            if (((isset($context["group_name"]) ? $context["group_name"] : null) == $this->getAttribute($context["field"], "group", array()))) {
                // line 5
                echo "
        <div class=\"form-group\" data-fieldtype=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                echo "\">
            ";
                // line 8
                echo "            ";
                if (($this->getAttribute($context["field"], "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["field"], "prefix", array())))) {
                    // line 9
                    echo "                <div class=\"prefix\">
                    ";
                    // line 10
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute($context["field"], "prefix", array()));
                    echo "
                </div>
            ";
                }
                // line 13
                echo "
            ";
                // line 15
                echo "            ";
                $context["labelkey"] = (($this->getAttribute($context["field"], "label", array())) ? ($this->getAttribute($context["field"], "label", array())) : ($this->env->getExtension('Bolt')->ucfirst($context["key"])));
                // line 16
                echo "
            ";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fields", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["fieldtype"]) {
                    // line 18
                    echo "                ";
                    if (($this->getAttribute($context["field"], "type", array()) == $this->getAttribute($context["fieldtype"], "name", array()))) {
                        // line 19
                        echo "                    ";
                        $this->loadTemplate($this->getAttribute($context["fieldtype"], "template", array()), "editcontent/_fields.twig", 19)->display(array_merge($context, array("key" =>                         // line 20
$context["key"], "name" =>                         // line 21
$context["key"], "contentkey" =>                         // line 22
$context["key"])));
                        // line 24
                        echo "                ";
                    }
                    // line 25
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldtype'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "
            ";
                // line 28
                echo "            ";
                if (($this->getAttribute($context["field"], "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["field"], "postfix", array())))) {
                    // line 29
                    echo "                <div class=\"postfix\">
                    ";
                    // line 30
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute($context["field"], "postfix", array()));
                    echo "
                </div>
            ";
                }
                // line 33
                echo "
            ";
                // line 35
                echo "            ";
                if (($this->getAttribute($context["field"], "separator", array(), "any", true, true) && ($this->getAttribute($context["field"], "separator", array()) == true))) {
                    // line 36
                    echo "                <hr>
            ";
                }
                // line 38
                echo "        </div>

    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "editcontent/_fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 38,  136 => 36,  133 => 35,  130 => 33,  124 => 30,  121 => 29,  118 => 28,  115 => 26,  101 => 25,  98 => 24,  96 => 22,  95 => 21,  94 => 20,  92 => 19,  89 => 18,  72 => 17,  69 => 16,  66 => 15,  63 => 13,  57 => 10,  54 => 9,  51 => 8,  47 => 6,  44 => 5,  41 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
