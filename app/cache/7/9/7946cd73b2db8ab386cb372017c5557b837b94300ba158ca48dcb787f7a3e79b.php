<?php

/* nav/_macros.twig */
class __TwigTemplate_7946cd73b2db8ab386cb372017c5557b837b94300ba158ca48dcb787f7a3e79b extends Twig_Template
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
        // line 10
        echo "

";
        // line 78
        echo "

";
        // line 97
        echo "

";
        // line 113
        echo "

";
        // line 128
        echo "

";
    }

    // line 4
    public function getheading($__title__ = null, $__icon__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context["__internal_f55f73de84f79319225a599a606886090140d46452b75cab5e06bf569af14445"] = $this;
            // line 6
            echo "    <li class=\"divider\">
        <em>";
            // line 7
            echo $context["__internal_f55f73de84f79319225a599a606886090140d46452b75cab5e06bf569af14445"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["title"]) ? $context["title"] : null));
            echo "</em>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getsubmenu($__icon__ = null, $__label__ = null, $__popoveritems__ = null, $__active__ = null, $__wide__ = null, $__subitems__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "popoveritems" => $__popoveritems__,
            "active" => $__active__,
            "wide" => $__wide__,
            "subitems" => $__subitems__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "
    ";
            // line 24
            $context["__internal_a4801755eb99746986227d73ab0f3f9271be8a8fe066d7b521347c35e70f6b02"] = $this;
            // line 25
            echo "
    ";
            // line 26
            if (twig_test_empty((isset($context["subitems"]) ? $context["subitems"] : null))) {
                // line 27
                echo "        ";
                $context["subitems"] = (isset($context["popoveritems"]) ? $context["popoveritems"] : null);
                // line 28
                echo "    ";
            }
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $context["allowedany"] = false;
            // line 32
            echo "    ";
            $context["allowedamount"] = 0;
            // line 33
            echo "    ";
            $context["allowedsingle"] = "";
            // line 34
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subitems"]) ? $context["subitems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "        ";
                if ((($context["item"] != "-") && $this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard"))))) {
                    // line 36
                    echo "            ";
                    $context["allowedany"] = true;
                    // line 37
                    echo "            ";
                    $context["allowedamount"] = ((isset($context["allowedamount"]) ? $context["allowedamount"] : null) + 1);
                    // line 38
                    echo "            ";
                    $context["allowedsingle"] = $context["item"];
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            $context["class"] = trim(((((isset($context["wide"]) ? $context["wide"] : null)) ? (" menu-pop-wide") : ("")) . (((isset($context["active"]) ? $context["active"] : null)) ? (" active") : (""))));
            // line 43
            echo "
    ";
            // line 45
            echo "    ";
            if ((isset($context["allowedany"]) ? $context["allowedany"] : null)) {
                // line 46
                echo "        ";
                if (((isset($context["allowedamount"]) ? $context["allowedamount"] : null) == 1)) {
                    // line 47
                    echo "            ";
                    $context["item"] = (isset($context["allowedsingle"]) ? $context["allowedsingle"] : null);
                    // line 48
                    echo "            <li>
                <a href=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 50
                    echo $context["__internal_a4801755eb99746986227d73ab0f3f9271be8a8fe066d7b521347c35e70f6b02"]->geticon($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array()), "icon");
                    echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                    echo "
                </a>
            </li>
        ";
                } else {
                    // line 54
                    echo "            <li";
                    if ((isset($context["class"]) ? $context["class"] : null)) {
                        echo " class=\"";
                        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                <a  href=\"";
                    // line 55
                    if ((isset($context["popoveritems"]) ? $context["popoveritems"] : null)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["popoveritems"]) ? $context["popoveritems"] : null), 0, array()), "link", array()), "html", null, true);
                    } else {
                        echo "#";
                    }
                    echo "\" class=\"menu-pop\">
                    ";
                    // line 56
                    echo $context["__internal_a4801755eb99746986227d73ab0f3f9271be8a8fe066d7b521347c35e70f6b02"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
                    echo "
                </a>
                <ul class=\"nav submenu\">
                    ";
                    // line 59
                    $context["divider"] = false;
                    // line 60
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["popoveritems"]) ? $context["popoveritems"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 61
                        echo "                        ";
                        if (($context["item"] == "-")) {
                            // line 62
                            echo "                            ";
                            $context["divider"] = true;
                            // line 63
                            echo "                        ";
                        } elseif ($this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard")))) {
                            // line 64
                            echo "                            <li";
                            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                                echo " class=\"subdivider\"";
                            }
                            echo ">
                                <a href=\"";
                            // line 65
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                            echo "\">
                                    ";
                            // line 66
                            echo $context["__internal_a4801755eb99746986227d73ab0f3f9271be8a8fe066d7b521347c35e70f6b02"]->geticon($this->getAttribute($context["item"], "icon", array()));
                            echo (($this->getAttribute($context["item"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                            echo "
                                </a>
                            </li>
                            ";
                            // line 69
                            $context["divider"] = false;
                            // line 70
                            echo "                        ";
                        }
                        // line 71
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "                </ul>
            </li>
        ";
                }
                // line 75
                echo "    ";
            }
            // line 76
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 83
    public function getcollapse()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 84
            echo "    ";
            $context["__internal_419c80fd5dca3e2994e2646954b839995996886d59eb668520311defee561187"] = $this;
            // line 85
            echo "
    <li class=\"nav-secondary-collapse\">
        <a href=\"#\">
            ";
            // line 88
            echo $context["__internal_419c80fd5dca3e2994e2646954b839995996886d59eb668520311defee561187"]->getlabel("fa:compress", $this->env->getExtension('Bolt')->trans("Collapse sidebar"));
            echo "
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\">
            ";
            // line 93
            echo $context["__internal_419c80fd5dca3e2994e2646954b839995996886d59eb668520311defee561187"]->getlabel("fa:expand", $this->env->getExtension('Bolt')->trans("Expand sidebar"));
            echo "
        </a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 102
    public function getlink($__icon__ = null, $__label__ = null, $__pathname__ = null, $__active__ = null, $__divider__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "pathname" => $__pathname__,
            "active" => $__active__,
            "divider" => $__divider__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 103
            echo "    ";
            $context["__internal_60367e2325117addf7953641bfeeb97c56d8fe9049b8cc921fafb9f8c2ad1e6c"] = $this;
            // line 104
            echo "    ";
            $context["class"] = "";
            // line 105
            echo "    ";
            if (((isset($context["pathname"]) ? $context["pathname"] : null) == "dashboard")) {
                $context["class"] = "nav-secondary-dashboard";
            }
            // line 106
            echo "    ";
            if ((isset($context["active"]) ? $context["active"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " active");
            }
            // line 107
            echo "    ";
            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " divider");
            }
            // line 108
            echo "
    <li";
            // line 109
            if ((isset($context["class"]) ? $context["class"] : null)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, trim((isset($context["class"]) ? $context["class"] : null)), "html", null, true);
                echo "\" ";
            }
            echo ">
        <a href=\"";
            // line 110
            echo $this->env->getExtension('routing')->getPath((isset($context["pathname"]) ? $context["pathname"] : null));
            echo "\">";
            echo $context["__internal_60367e2325117addf7953641bfeeb97c56d8fe9049b8cc921fafb9f8c2ad1e6c"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
            echo "</a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 118
    public function getlabel($__icon__ = null, $__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 119
            echo "    ";
            $context["__internal_0d06960a1936f6c8018a0099a981e81f027b281824e36d0a781ed7bf061fdaea"] = $this;
            // line 120
            echo "
    ";
            // line 121
            if (twig_test_empty((isset($context["icon"]) ? $context["icon"] : null))) {
                // line 122
                echo "        <i class=\"icon\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["label"]) ? $context["label"] : null), 0, 1), "html", null, true);
                echo "</i>
    ";
            } elseif ((            // line 123
(isset($context["icon"]) ? $context["icon"] : null) != "-")) {
                // line 124
                echo "        ";
                echo $context["__internal_0d06960a1936f6c8018a0099a981e81f027b281824e36d0a781ed7bf061fdaea"]->geticon((isset($context["icon"]) ? $context["icon"] : null), true);
                echo "
    ";
            }
            // line 126
            echo "    ";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function geticon($__icon__ = null, $__box__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "box" => $__box__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    ";
            $context["class"] = ((((array_key_exists("box", $context)) ? (_twig_default_filter((isset($context["box"]) ? $context["box"] : null), false)) : (false))) ? ("icon") : ("fa-fw"));
            // line 135
            echo "    ";
            // line 136
            echo "    ";
            if ((twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 0, 3) == "fa:")) {
                // line 137
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 3), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"></i>
    ";
                // line 139
                echo "    ";
            } else {
                // line 140
                echo "        <i class=\"fa fa-question-circle ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "nav/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 140,  447 => 139,  440 => 137,  437 => 136,  435 => 135,  432 => 134,  419 => 133,  405 => 126,  399 => 124,  397 => 123,  392 => 122,  390 => 121,  387 => 120,  384 => 119,  371 => 118,  355 => 110,  347 => 109,  344 => 108,  339 => 107,  334 => 106,  329 => 105,  326 => 104,  323 => 103,  307 => 102,  292 => 93,  284 => 88,  279 => 85,  276 => 84,  265 => 83,  253 => 76,  250 => 75,  245 => 72,  239 => 71,  236 => 70,  234 => 69,  227 => 66,  223 => 65,  216 => 64,  213 => 63,  210 => 62,  207 => 61,  202 => 60,  200 => 59,  194 => 56,  186 => 55,  177 => 54,  169 => 50,  165 => 49,  162 => 48,  159 => 47,  156 => 46,  153 => 45,  150 => 43,  148 => 42,  145 => 41,  139 => 40,  136 => 39,  133 => 38,  130 => 37,  127 => 36,  124 => 35,  119 => 34,  116 => 33,  113 => 32,  110 => 31,  107 => 29,  104 => 28,  101 => 27,  99 => 26,  96 => 25,  94 => 24,  91 => 23,  74 => 22,  60 => 7,  57 => 6,  54 => 5,  41 => 4,  35 => 128,  31 => 113,  27 => 97,  23 => 78,  19 => 10,);
    }
}
