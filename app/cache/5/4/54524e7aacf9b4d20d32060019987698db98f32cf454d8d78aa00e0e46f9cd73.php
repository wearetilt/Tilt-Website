<?php

/* editcontent/fields/_text.twig */
class __TwigTemplate_54524e7aacf9b4d20d32060019987698db98f32cf454d8d78aa00e0e46f9cd73 extends Twig_Template
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
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")), "label" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "pattern" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "pattern", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern", array()), "")) : ("")), "placeholder" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "placeholder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "readonly" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "readonly", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), false)) : (false)), "title" => (($this->getAttribute(        // line 11
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()), "")) : ("")), "variant" => (($this->getAttribute(        // line 12
(isset($context["field"]) ? $context["field"] : null), "variant", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 13
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")));
        // line 16
        echo "
";
        // line 18
        echo "
";
        // line 19
        $context["attr_text"] = array("class" => $this->getAttribute(        // line 20
(isset($context["option"]) ? $context["option"] : null), "class", array()), "name" =>         // line 21
(isset($context["name"]) ? $context["name"] : null), "id" =>         // line 22
(isset($context["key"]) ? $context["key"] : null), "pattern" => ((($this->getAttribute(        // line 23
(isset($context["option"]) ? $context["option"] : null), "pattern", array()) && !twig_in_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "pattern", array()), array(0 => "url", 1 => "email")))) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "pattern", array())) : ("")), "maxlength" => 255, "placeholder" => $this->getAttribute(        // line 25
(isset($context["option"]) ? $context["option"] : null), "placeholder", array()), "required" => $this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : null), "required", array()), "data_errortext" => $this->getAttribute(        // line 27
(isset($context["option"]) ? $context["option"] : null), "errortext", array()), "readonly" => $this->getAttribute(        // line 28
(isset($context["option"]) ? $context["option"] : null), "readonly", array()), "title" => $this->getAttribute(        // line 29
(isset($context["option"]) ? $context["option"] : null), "title", array()), "type" => ((twig_in_filter($this->getAttribute(        // line 30
(isset($context["option"]) ? $context["option"] : null), "pattern", array()), array(0 => "url", 1 => "email"))) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "pattern", array())) : ("text")), "value" => $this->getAttribute($this->getAttribute(        // line 31
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"));
        // line 33
        echo "
";
        // line 35
        echo "
<fieldset class=\"text\">
    ";
        // line 37
        if (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "variant", array()) == "inline")) {
            // line 38
            echo "
        <label class=\"col-sm-3 control-label\">";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
            echo "</label>
        <div class=\"col-sm-9\">
            <input";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_text"]) ? $context["attr_text"] : null)), "method"), "html", null, true);
            echo ">
        </div>

    ";
        } else {
            // line 45
            echo "
        <div class=\"col-sm-12\">
            <label class=\"control-label\">";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
            echo "</label>
            <input";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_text"]) ? $context["attr_text"] : null)), "method"), "html", null, true);
            echo ">
        </div>

    ";
        }
        // line 52
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 52,  85 => 48,  81 => 47,  77 => 45,  70 => 41,  65 => 39,  62 => 38,  60 => 37,  56 => 35,  53 => 33,  51 => 31,  50 => 30,  49 => 29,  48 => 28,  47 => 27,  46 => 26,  45 => 25,  44 => 23,  43 => 22,  42 => 21,  41 => 20,  40 => 19,  37 => 18,  34 => 16,  32 => 13,  31 => 12,  30 => 11,  29 => 10,  28 => 9,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
    }
}
