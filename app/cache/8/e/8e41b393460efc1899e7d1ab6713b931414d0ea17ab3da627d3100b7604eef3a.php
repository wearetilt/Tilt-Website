<?php

/* _macro/_panels.twig */
class __TwigTemplate_8e41b393460efc1899e7d1ab6713b931414d0ea17ab3da627d3100b7604eef3a extends Twig_Template
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
        // line 14
        echo "

";
        // line 29
        echo "

";
    }

    // line 7
    public function getstack($__items__ = null, $__ommit_empty__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "ommit_empty" => $__ommit_empty__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "    ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method")) {
                // line 9
                echo "        ";
                if (( !((array_key_exists("ommit_empty", $context)) ? (_twig_default_filter((isset($context["ommit_empty"]) ? $context["ommit_empty"] : null), false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt')->stackItems()))) {
                    // line 10
                    echo "            ";
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("showstack", array("items" => ((array_key_exists("item", $context)) ? (_twig_default_filter((isset($context["item"]) ? $context["item"] : null), 10)) : (10)))));
                    echo "
        ";
                }
                // line 12
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getlastmodified($__contenttype_slug__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    ";
            if ((((array_key_exists("content_id", $context)) ? (_twig_default_filter((isset($context["content_id"]) ? $context["content_id"] : null), false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt')->stackItems()))) {
                // line 24
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : null))));
                echo "
    ";
            } else {
                // line 26
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : null), "contentid" => (isset($context["content_id"]) ? $context["content_id"] : null))));
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getchanges($__contenttype_slug__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/changelog/enabled", 1 => true), "method")) {
                // line 39
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("changelogrecord", array("contenttype" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : null), "contentid" => (isset($context["content_id"]) ? $context["content_id"] : null))));
                echo "
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
        return "_macro/_panels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  116 => 38,  103 => 37,  88 => 26,  82 => 24,  79 => 23,  66 => 22,  54 => 12,  48 => 10,  45 => 9,  42 => 8,  29 => 7,  23 => 29,  19 => 14,);
    }
}
