<?php

/* _sub/_messages.twig */
class __TwigTemplate_4eb36567874e6495289e419bc99fcc6e903f5b7f5efe17a464cc5f5be5e840ad extends Twig_Template
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
        // line 8
        echo "
";
        // line 21
        echo "
";
        // line 22
        $context["self"] = $this;
        // line 23
        if (((array_key_exists("wrapper", $context) && (isset($context["wrapper"]) ? $context["wrapper"] : null)) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "keys", array(), "method")))) {
            // line 24
            echo "    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
            // line 26
            echo $context["self"]->getflashbag();
            echo "
        </div>
    </div>
";
        } else {
            // line 30
            echo "    ";
            echo $context["self"]->getflashbag();
            echo "
";
        }
    }

    // line 1
    public function getflashbag()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "    ";
            echo $context["self"]->getmessages("error", "danger");
            echo "
    ";
            // line 4
            echo $context["self"]->getmessages("warning");
            echo "
    ";
            // line 5
            echo $context["self"]->getmessages("success");
            echo "
    ";
            // line 6
            echo $context["self"]->getmessages("info");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getmessages($__key__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "class" => $__class__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "    ";
            $context["shown"] = array();
            // line 11
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 12
                echo "        ";
                if (!twig_in_filter($context["msg"], (isset($context["shown"]) ? $context["shown"] : null))) {
                    // line 13
                    echo "            <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), (isset($context["key"]) ? $context["key"] : null))) : ((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                    echo "\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                ";
                    // line 15
                    echo $this->env->getExtension('Bolt')->ymllink($context["msg"]);
                    echo "
            </div>
            ";
                    // line 17
                    $context["shown"] = twig_array_merge((isset($context["shown"]) ? $context["shown"] : null), array(0 => $context["msg"]));
                    // line 18
                    echo "        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub/_messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 19,  125 => 18,  123 => 17,  118 => 15,  112 => 13,  109 => 12,  104 => 11,  101 => 10,  88 => 9,  75 => 6,  71 => 5,  67 => 4,  62 => 3,  59 => 2,  48 => 1,  40 => 30,  33 => 26,  29 => 24,  27 => 23,  25 => 22,  22 => 21,  19 => 8,);
    }
}
