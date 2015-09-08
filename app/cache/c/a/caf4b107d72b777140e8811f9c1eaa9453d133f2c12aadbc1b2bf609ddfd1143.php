<?php

/* editcontent/fields/_templateselect.twig */
class __TwigTemplate_caf4b107d72b777140e8811f9c1eaa9453d133f2c12aadbc1b2bf609ddfd1143 extends Twig_Template
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
        $context["option"] = array("class" => ((($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")) . " narrow"), "filter" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "filter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array()), array())) : (array())), "label" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")));
        // line 9
        echo "
";
        // line 11
        echo "
";
        // line 12
        $context["templateselectdata"] = array("message" => array("change" => $this->env->getExtension('Bolt')->trans("This template adds new fields. Save, then refresh to see these changes."), "warningChange" => $this->env->getExtension('Bolt')->trans("You may lose some of your template fields with this change. Go to the template section and note down the values before doing this."), "warning" => $this->env->getExtension('Bolt')->trans("Warning")), "currentHas" => $this->getAttribute($this->getAttribute(        // line 18
(isset($context["context"]) ? $context["context"] : null), "has", array()), "templatefields", array()), "current" => $this->getAttribute($this->getAttribute(        // line 19
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "fieldTemplates" => $this->getAttribute(        // line 20
(isset($context["context"]) ? $context["context"] : null), "fieldtemplates", array()));
        // line 22
        echo "
";
        // line 23
        $context["attr_select"] = array("class" => $this->getAttribute(        // line 24
(isset($context["option"]) ? $context["option"] : null), "class", array()), "name" =>         // line 25
(isset($context["name"]) ? $context["name"] : null), "id" =>         // line 26
(isset($context["key"]) ? $context["key"] : null), "data-stats" => twig_jsonencode_filter(        // line 27
(isset($context["templateselectdata"]) ? $context["templateselectdata"] : null)));
        // line 29
        echo "
";
        // line 30
        $context["attr_default"] = array("value" => "");
        // line 33
        echo "
";
        // line 34
        $context["attr_divider"] = array("disabled" => true, "value" => "");
        // line 38
        echo "


";
        // line 42
        echo "
<fieldset class=\"templateselect\">

    <label class=\"col-sm-3 control-label\">";
        // line 45
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
        echo "</label>
    <div class=\"col-sm-9\">
        <select";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_select"]) ? $context["attr_select"] : null)), "method"), "html", null, true);
        echo ">
            <option";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_default"]) ? $context["attr_default"] : null)), "method"), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Bolt')->trans("(default template)");
        echo "</option>
            <option";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_divider"]) ? $context["attr_divider"] : null)), "method"), "html", null, true);
        echo ">-----------</option>
            ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listTemplates($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "filter", array())));
        foreach ($context['_seq'] as $context["filename"] => $context["name"]) {
            // line 51
            echo "                <option";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => array("value" => $context["filename"], "selected" => ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method") == $context["filename"]))), "method"), "html", null, true);
            echo ">";
            // line 52
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            // line 53
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filename'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </select>
    </div>
    <div class=\"col-sm-12\">
        <p class=\"hidden templatewarning\"></p>
    </div>

</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_templateselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 55,  97 => 53,  95 => 52,  91 => 51,  87 => 50,  83 => 49,  77 => 48,  73 => 47,  68 => 45,  63 => 42,  58 => 38,  56 => 34,  53 => 33,  51 => 30,  48 => 29,  46 => 27,  45 => 26,  44 => 25,  43 => 24,  42 => 23,  39 => 22,  37 => 20,  36 => 19,  35 => 18,  34 => 12,  31 => 11,  28 => 9,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
    }
}
