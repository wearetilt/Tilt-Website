<?php

/* _sub_menu.twig */
class __TwigTemplate_a491a572e9197d41b83e0dd5e8cbddac1dfa160bad40a9ea0abfc73a19631462 extends Twig_Template
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
        // line 17
        echo "
";
        // line 18
        $context["__internal_3c3700ba17c924475e80cac690ef72ed1a104dab29590dd12dbc7efb69b85a94"] = $this;
        // line 19
        echo "
";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "    ";
            if ($this->getAttribute($context["item"], "label", array(), "any", true, true)) {
                // line 22
                echo "        ";
                echo $context["__internal_3c3700ba17c924475e80cac690ef72ed1a104dab29590dd12dbc7efb69b85a94"]->getdisplay_menu_item($context["item"], $context["loop"]);
                echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 1
    public function getdisplay_menu_item($__item__ = null, $__loop__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "loop" => $__loop__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["__internal_0dcfdeea14d53e1d53f118ef979f7585cc761b178d136235ffe03092af907846"] = $this;
            // line 3
            echo "    <li class=\"index-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array()), "html", null, true);
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) {
                echo " first";
            }
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last", array())) {
                echo " last";
            }
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true)) {
                echo " has-dropdown";
            }
            if ($this->env->getExtension('Bolt')->current((isset($context["item"]) ? $context["item"] : null))) {
                echo " active";
            }
            echo "\">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array(), "any", true, true)) {
                echo "title='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()));
                echo "'";
            }
            // line 5
            echo "            class='";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array()), "html", null, true);
            }
            echo "'>
            ";
            // line 6
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), "html", null, true);
            } else {
                echo " - ";
            }
            // line 7
            echo "        </a>
        ";
            // line 8
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true)) {
                // line 9
                echo "            <ul class=\"dropdown\">
            ";
                // line 10
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                    // line 11
                    echo "                ";
                    echo $context["__internal_0dcfdeea14d53e1d53f118ef979f7585cc761b178d136235ffe03092af907846"]->getdisplay_menu_item($context["submenu"], $context["loop"]);
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "            </ul>
        ";
            }
            // line 15
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 15,  163 => 13,  146 => 11,  129 => 10,  126 => 9,  124 => 8,  121 => 7,  115 => 6,  108 => 5,  100 => 4,  83 => 3,  80 => 2,  67 => 1,  47 => 22,  44 => 21,  27 => 20,  24 => 19,  22 => 18,  19 => 17,);
    }
}
