<?php

/* _sub_taxonomylinks.twig */
class __TwigTemplate_757d5c5482f06e44c98de4eba1eb50bf245b7a910c21a6b3766e306f23682a73 extends Twig_Template
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
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array(), "any", true, true)) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array()));
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
            foreach ($context['_seq'] as $context["type"] => $context["values"]) {
                // line 3
                echo "        <em>
        ";
                // line 4
                if ((twig_length_filter($this->env, $context["values"]) < 2)) {
                    // line 5
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["type"], array(), "array"), "singular_name", array()), "html", null, true);
                    echo ":
        ";
                } else {
                    // line 7
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["type"], array(), "array"), "name", array()), "html", null, true);
                    echo ":
        ";
                }
                // line 9
                echo "        </em>
        ";
                // line 10
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["values"]);
                $context['_iterated'] = false;
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
                foreach ($context['_seq'] as $context["link"] => $context["value"]) {
                    // line 11
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 12
                    echo "        ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                if (!$context['_iterated']) {
                    // line 13
                    echo "            ";
                    echo $this->env->getExtension('Bolt')->trans("none");
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['link'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " - ";
                }
                // line 16
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
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "_sub_taxonomylinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 16,  108 => 15,  99 => 13,  86 => 12,  77 => 11,  59 => 10,  56 => 9,  50 => 7,  44 => 5,  42 => 4,  39 => 3,  21 => 2,  19 => 1,);
    }
}
