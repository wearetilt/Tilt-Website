<?php

/* editcontent/fields/_html.twig */
class __TwigTemplate_a96512d595ee8c34495e1efa4b06b1f8dfec01a843d693723669649aacca73a5 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["option"] = array("class" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")), "height" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array()), "")) : ("")), "label" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")), "options" => (($this->getAttribute($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "ckeditor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "ckeditor", array()), "")) : ("")));
        // line 12
        echo "
";
        // line 14
        echo "
";
        // line 15
        $context["param"] = array();
        // line 16
        echo "
";
        // line 17
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "height", array())) {
            // line 18
            echo "    ";
            $context["param"] = twig_array_merge((isset($context["param"]) ? $context["param"] : null), array("height" => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "height", array())));
        }
        // line 20
        echo "
";
        // line 21
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "options", array())) {
            // line 22
            echo "    ";
            $context["param"] = twig_array_merge((isset($context["param"]) ? $context["param"] : null), array("ckeditor" => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "options", array())));
        }
        // line 24
        echo "
";
        // line 25
        $context["attr_html"] = array("class" => ($this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : null), "class", array()) . " ckeditor"), "data_param" => ((        // line 27
(isset($context["param"]) ? $context["param"] : null)) ? (twig_jsonencode_filter((isset($context["param"]) ? $context["param"] : null))) : ("")), "name" =>         // line 28
(isset($context["name"]) ? $context["name"] : null), "id" =>         // line 29
(isset($context["key"]) ? $context["key"] : null), "required" => $this->getAttribute(        // line 30
(isset($context["option"]) ? $context["option"] : null), "required", array()), "data_errortext" => $this->getAttribute(        // line 31
(isset($context["option"]) ? $context["option"] : null), "errortext", array()));
        // line 33
        echo "
";
        // line 35
        echo "
<fieldset class=\"html\">
    <div class=\"col-sm-12\">
        <label class=\"control-label\">";
        // line 38
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
        echo "</label>
        <textarea";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_html"]) ? $context["attr_html"] : null)), "method"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 39,  76 => 38,  71 => 35,  68 => 33,  66 => 31,  65 => 30,  64 => 29,  63 => 28,  62 => 27,  61 => 26,  60 => 25,  57 => 24,  53 => 22,  51 => 21,  48 => 20,  44 => 18,  42 => 17,  39 => 16,  37 => 15,  34 => 14,  31 => 12,  29 => 10,  28 => 9,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
    }
}
